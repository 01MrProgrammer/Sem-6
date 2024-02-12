Use the iris dataset. Write a Python program to view some basic statistical details like percentile,
mean, std etc. of the species of 'Iris-setosa', 'Iris-versicolor' and 'Iris-virginica'. Apply logistic
regression on the dataset to identify different species (setosa, versicolor, verginica) of Iris
flowers given just 4 features: sepal and petal lengths and widths.. Find the accuracy of the
model.
-------------------------------------------------------------------------------------------------------------------------



import pandas as pd
import numpy as np
import matplotlib.pyplot as plt

#dataset = pd.read_csv('/home/dell/iris.csv')
#print(dataset)


from google.colab import files
import pandas as pd
iris_uploaded = files.upload()
import io
dataset = pd.read_csv(io.BytesIO(iris_uploaded['Iris.csv']))
dataset
 

# input
x = dataset.iloc[:, [0,1,2,3]].values

# output
y = dataset.iloc[:, 4].values


from sklearn.model_selection import train_test_split
xtrain, xtest, ytrain, ytest = train_test_split(
		x, y, test_size = 0.25, random_state = 0)


from sklearn.linear_model import LogisticRegression
classifier = LogisticRegression(random_state = 0,solver='lbfgs',
                                multi_class='auto')
classifier.fit(xtrain, ytrain)

y_pred = classifier.predict(xtest)
print('Actual Values',ytest)
print('Predicted Values',y_pred)

from sklearn.metrics import confusion_matrix
cm = confusion_matrix(ytest, y_pred)

print ("Confusion Matrix : \n", cm)

from sklearn.metrics import accuracy_score
print ("Accuracy : ", accuracy_score(ytest, y_pred))

