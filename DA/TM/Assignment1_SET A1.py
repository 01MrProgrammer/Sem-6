Assignment 1
SET A
1.Create ‘sales’ Data set having 5 columns namely: ID, TV, Radio, Newspaper and Sales.(random
500 entries) Build a linear regression model by identifying independent and target variable. Split the
variables into training and testing sets. then divide the training and testing sets into a 7:3 ratio,
respectively and print them. Build a simple linear regression model.

import numpy as np
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression
from sklearn import metrics
from sklearn.metrics import r2_score,mean_squared_error

A = np.random.randint(1,1000, size=(500,5))
df = pd.DataFrame(A, columns=['ID','TV','Radio','Newspaper','Sales'])
print(df)

X = df.drop(['ID','Radio','Newspaper','Sales'], axis=1)
y = df['Sales']
print(y)

import matplotlib.pyplot as plt
df.plot(x='TV', y='Sales', style='o')
plt.title('Total Sale by Advetising on TV')
plt.xlabel('TV')
plt.ylabel('Sales')
plt.show()

X_train, X_test, y_train, y_test = train_test_split(X,y,test_size=0.3, random_state=0)
regressor = LinearRegression()
regressor.fit(X_train, y_train)

plt.scatter(X_test,y_test,color="green") # Plot a graph with X_test vs y_test
plt.plot(X_train,regressor.predict(X_train),color="red",linewidth=3) # Regressior line showing
plt.title('Regression(Test Set)')
plt.xlabel('TV')
plt.ylabel('Sales')
plt.show()

plt.scatter(X_train,y_train,color="blue") # Plot a graph with X_train vs y_train
plt.plot(X_train,regressor.predict(X_train),color="red",linewidth=3) # Regressior line showing
plt.title('Regression(training Set)')
plt.xlabel('TV')
plt.ylabel('Sales')
plt.show()

print('regressor intercept is')
print(regressor.intercept_)
print()
print('regressor coef is')
print(regressor.coef_)


y_pred = regressor.predict(X_test)
df = pd.DataFrame({'Actual': y_test, 'Predicted': y_pred})
print(df)
print('R2 score: %.2f' % r2_score(y_test,y_pred)) # Priniting R2 Score
print('Mean Absolute Error:', metrics.mean_absolute_error(y_test, y_pred))
print('Mean Squared Error:', metrics.mean_squared_error(y_test, y_pred))
print('Root Mean Squared Error:', np.sqrt(metrics.mean_squared_error(y_test, y_pred)))
