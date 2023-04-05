from flask import Flask, request
import openai
import joblib
import pickle
import config
import time
import pandas as pd
from twitter_features import TweetFeatGenerator 
from sklearn.feature_extraction.text import TfidfVectorizer

app = Flask(__name__)
model_filename = "pipeline"

@app.route('/summ', methods=['GET'])
def summarize():
  # Contoh teks
  # text = """
  # Farrel merupakan fresh graduate dari Universitas Brawijaya jurusan Teknik Elektro yang fokus pada Control Engineering dan mendapatkan predikat Cumlaude dengan IPK 3.86/4.00. Ia memiliki ketertarikan terhadap perkembangan teknologi khususnya di bidang mikrokontroler, robotika, dan computer vision dengan harapan dapat bekerja di salah satu perusahaan yang bergerak di bidang industri teknologi.
  # Semasa kuliah, Farrel aktif mengikuti kegiatan dan organisasi yang berkaitan dengan kontrol dan robotika. Ia menjabat sebagai programmer senior di Tim Robotika Brawijaya selama tiga tahun dan telah menorehkan beberapa prestasi. Selain itu, beliau aktif mengajarkan praktikum kepada mahasiswa sekaligus menjadi asisten laboratorium di dua laboratorium yang berbeda. Pengalaman kerja terakhirnya sebagai software engineer di perusahaan startup yang bergerak di industri teknologi kesehatan dengan tanggung jawab mengelola aplikasi web yang berfungsi sebagai rekam medis pasien berbasis elektronik.
  # Kemampuan proaktif, berorientasi pada detail, dan cepat belajar adalah sifat terbesarnya yang membuatnya mampu beradaptasi dengan baik di lingkungan apa pun. 
  # """

  data = request.form['text']

  openai.api_key = config.OPENAI_API_KEY
  model = 'text-davinci-003'
  prompt = "Ringkaslah teks berikut: " + data
  response = openai.Completion.create(
            engine = model,
            max_tokens=500,
            prompt = prompt,
            temperature = 0.5
            )

  result = response['choices'][0]['text']
  print(result)
  return result

@app.route('/predict-tweets', methods=['GET'])
def predict_tweets():
  d = {
    0:'Neuroticism',
    1:'Agreeableness',
    2:'Extraversion',
    3:'Openness',
    4:'Conscientiousness'
  }
  
  start = time.time()

  username = request.form['username']
  
  # Load model
  model = joblib.load(f"../personality-evaluator/PPT-09/models/{model_filename}.joblib")
  
  # Get tweets result
  tfg = TweetFeatGenerator(username=username, model=model)
  reshape_df = tfg.inference_tweets()
  
  # Assume form['test_result'] is a list
  # Ex: [3.75, 2.22, 3.56, 5.00, 6.0]
  test_result = request.form['test_result'].split(",")
  test_result = [float(test) for test in test_result]
  reshape_df['test_result'] = test_result
  reshape_df['proba_tweet'] = reshape_df['proba_tweet'] * 10 # Normalization
  reshape_df['inference'] = reshape_df['proba_tweet']*0.6 + reshape_df['test_result']*0.4

  # Get the index represent max val of inference
  y = reshape_df['inference'].argmax()
  result = reshape_df.iloc[y]

  print(reshape_df)

  end = time.time()
  print(end - start)
  return {
    'label': d[result['class']],
    'soft_class': {
    d[0]: str(reshape_df.iloc[0]['inference']),
    d[1]: str(reshape_df.iloc[1]['inference']),
    d[2]: str(reshape_df.iloc[2]['inference']),
    d[3]: str(reshape_df.iloc[3]['inference']),
    d[4]: str(reshape_df.iloc[4]['inference'])
    }
  }