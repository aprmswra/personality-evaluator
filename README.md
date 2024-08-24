# Big Five Personality Prediction Based on Indonesian Tweets and Personality Test

## Overview

This repository contains the code and resources used in the research titled **"Big Five Personality Prediction Based on Indonesian Tweets and Personality Test."** The study presents a novel approach to predicting the Big Five personality traits by analyzing Indonesian tweets and combining the results with traditional personality tests.

## Research Summary

### Introduction

The research aims to improve the efficiency and accuracy of personality assessment, particularly in the context of human resource management in Indonesia. The Big Five personality traits—Openness, Conscientiousness, Extraversion, Agreeableness, and Neuroticism—are crucial for evaluating candidates' suitability in various roles.

### Methodology

The study utilizes a combination of machine learning algorithms to predict personality traits from tweet data. The process includes:

1. **Data Pre-processing**:
    - **Filtering**: Removing usernames, hashtags, URLs, symbols, non-ASCII characters, and duplicate whitespace.
    - **Casefolding**: Converting all text to lowercase.
    - **Stemming & Stop Word Removal**: Reducing words to their base form and removing irrelevant words.
    - **Slang Word Conversion**: Translating slang into standardized Indonesian language.

2. **Feature Representation**:
    - Using **TF-IDF** (Term Frequency-Inverse Document Frequency) to identify the most significant words related to each personality trait.

3. **Machine Learning Algorithms**:
    - **Support Vector Machine (SVM)**
    - **XGBoost**
    - **Random Forest**

### Data Collection

The dataset includes tweets from 400 Indonesian users, collected from 2020 to 2023. The tweets were annotated using results from the Big Five Inventory (BFI) test and expert input from a professional in psychology and human resources. This approach aims to reduce biases typically associated with self-reported personality tests.

### Model Evaluation

The research evaluated the models using accuracy and F1-score metrics:

- **XGBoost**: Achieved the highest performance with an accuracy of 99% and an F1-score of 98%.
- **SVM**: Showed good performance with an accuracy of 88% and an F1-score of 86%.
- **Random Forest**: Achieved an accuracy of 61% and an F1-score of 63%.

### Conclusion

The study demonstrates that combining traditional personality tests with tweet-based predictions significantly enhances the accuracy of personality assessments. This method shows great potential, particularly in human resource management, where quick and accurate personality evaluations are essential.

## Future Work

The research suggests that future work could focus on integrating additional features or expanding the analysis to other social media platforms to further improve personality prediction models.

## References

For detailed information, please refer to the original research paper and the references cited within.
[https://ieeexplore.ieee.org/document/10346812/](url)

---

This README provides a comprehensive summary of the research and how it was conducted. The methods and results discussed here serve as the foundation for the code and models included in this repository.
