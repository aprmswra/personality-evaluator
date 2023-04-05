import re
import preprocessor
import nltk
import goslate
import enchant
from googletrans import Translator
from Sastrawi.Stemmer.StemmerFactory import StemmerFactory
from Sastrawi.StopWordRemover.StopWordRemoverFactory import StopWordRemoverFactory

class Preprocessor():
    def __init__(self):
        self.en = enchant.Dict("en_US")
        self.idn = []
    
    def casefolding(self, review):
      review = review.lower()
      return review

    def filtering(self, review):
        review = re.sub(r'@[^\s]+', '', review)  # @username
        review = re.sub(r'#([^\s]+)', '', review)  # hashtag
        review = re.sub(r'https:[^\s]+', '', review)  # URL links
        review = re.sub(r"[.,:;+!\-_<^/=?\"'\(\)\d\*]", " ", review)  # symbol, char
        review = re.sub(r'[^\x00-\x7f]+', '', review)  # non ASCII chars
        review = re.sub(r'\s+', ' ', review)  # duplicate whitespace
        return preprocessor.clean(review)

    def tokenizing(self, review):
        token = nltk.word_tokenize(review)
        return token

    def stemming(self, review):
        factorySt = StemmerFactory()
        stemmer = factorySt.create_stemmer()
        review = stemmer.stem(review)
        return review

    def stopWordRemoving(self, review):
        factorySw = StopWordRemoverFactory()
        stopword = factorySw.create_stop_word_remover()
        review = stopword.remove(review)
        return review

    def slangWordConverting(self, review):
        slangwords = dict()
        with open('slangword-id.txt') as wordfile:
            for word in wordfile:
                word = word.split('=')
                slangwords[word[0]] = word[1].replace('\n', '')

        wordsArray, fixed = review.split(' '), []
        for word in wordsArray:
            if word in slangwords:
                word = slangwords[word]
            fixed.append(word)
            review = ' '.join(fixed)
        return review

    def characterRepeating(self, review):
        pattern = re.compile(r"(.)\1{1,}", re.DOTALL)
        tempWord = ''
        for word in review.split(' '):
            if word != '':
                if self.en.check(word):
                    tempWord += word+' '
                elif word in self.idn:
                    tempWord += word+' '
                else:
                    tempWord += pattern.sub(r"\1", word) + ' '
        return tempWord


    def translating(self, review):
        gs = goslate.Goslate()
        translatedText = gs.translate(review, 'id')
        return translatedText

    def preprocess_tweets(self, tweet):
        tweet = self.filtering(str(tweet))
        tweet = self.casefolding(str(tweet))
        tweet = self.characterRepeating(str(tweet))
        # tweet = self.translating(str(tweet))
        tweet = self.stemming(str(tweet))
        tweet = self.stopWordRemoving(str(tweet))
        tweet = self.slangWordConverting(str(tweet))

        # print('Processed: '+str(tweet) + '\n')
        return tweet
