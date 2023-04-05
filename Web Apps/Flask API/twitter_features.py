import tweepy
import pandas as pd
import datetime
import pytz
import config
from preprocess import Preprocessor

class TweetFeatGenerator():
    def __init__(self, username, model):
        self.username = username
        self.endDate = datetime.datetime.now()
        self.startDate = self.endDate - datetime.timedelta(days=2*365)
        self.numSamples = 20
        self.model = model
    
    def crawl(self):
        #Pass in our twitter API authentication key
        auth = tweepy.OAuth1UserHandler(
            config.TWITTER_CONSUMER_KEY, 
            config.TWITTER_CONSUMER_SECRET,
            config.TWITTER_ACCESS_TOKEN, 
            config.TWITTER_ACCESS_TOKEN_SECRET
        )

        #Instantiate the tweepy API
        api = tweepy.API(auth, wait_on_rate_limit=True)
    
        # Define tweets will be taken from 2 years from now
        utc = pytz.UTC
        
        endDate = utc.localize(self.endDate) 
        startDate = utc.localize(self.startDate)

        tweets = []

        try:
            # Crawl once at the beginning
            temp_tweets = api.user_timeline(screen_name=self.username)
            for tweet in temp_tweets:
                if tweet.created_at < endDate and tweet.created_at > startDate:
                    tweets.append(tweet)

            # Check if the last tweet created after the startDate
            while (temp_tweets[-1].created_at > startDate):
                temp_tweets = api.user_timeline(screen_name=self.username, max_id = temp_tweets[-1].id)
                for tweet in temp_tweets:
                    if tweet.created_at < endDate and tweet.created_at > startDate and len(tweets) < 200: # Max 200 tweets
                        tweets.append(tweet)
                    
            # Pulling Some attributes from the tweet
            attributes_container = [[tweet.created_at,tweet.text] for tweet in tweets]

            # Creation of column list to rename the columns in the dataframe
            columns = ["date_created", "tweet"]
            
            #Creation of Dataframe
            crawl_df = pd.DataFrame(attributes_container, columns=columns)
        except BaseException as e:
            # Kalau error, return e (di flask)
            print('Status Failed:', str(e))
            return e
        
        # Check if there's min 20 tweets
        if len(crawl_df) > 20:
            sample_df = crawl_df.sample(n=20)
        else:
            sample_df = crawl_df.copy()
            
        return sample_df
    
    def preprocess(self, sample_df):
        # Call preprocessor module
        pre = Preprocessor()  

        # Create new column called preprocessed
        sample_df['preprocessed'] = sample_df['tweet'].apply(pre.preprocess_tweets)

        # Generate new df containing preprocessed tweets
        result_tweet = " ".join(sample_df['preprocessed'])
        result_df = pd.DataFrame({
            'username': [self.username],
            'tweet': [result_tweet]
        })

        return result_df
    
    def inference_tweets(self):
        # Crawl tweets
        sample_df = self.crawl()

        # Preprocess tweets
        result_df = self.preprocess(sample_df=sample_df)

        # Inference tweets probability
        X = result_df['tweet']
        y_pred_proba = self.model.predict_proba(X)
        reshape_df = pd.DataFrame(
            list(zip([self.username] * 5, [0, 1, 2, 3, 4], y_pred_proba[0])),
            columns =['user', 'class', 'proba_tweet']
        )
        
        return reshape_df