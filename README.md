# Simple-Calculation-Verifier


### Try this app on Web 

Since I have worked with php based frameworks before, I have the experience of deploying projects live on the web. For your ease, I have deployed this assignment on a free
hosting, you can check it in this link https://simple-calculation.000webhostapp.com/. To run this project locally on your machine, please follow the steps below.

### Requirements

PHP 7.4.29 or higher </br>
Composer version 2.3.5 or higher  </br>
Codeigniter version 4  </br>

### Installation

Download this folder as a zip or clone this branch in your local machine.

### Run the app

Open your favorite text editor. I prefer VSCODE. Now, open the project in your text editor. Navigate to the project-root folder. This is the root folder of the project.
Now open a command prompt in this directory and enter the following command

``` php spark serve ```

Upon running this command a new CodeIgniter development server will start where the project is up and running. To visit this server open your favorite browser and go to

```  http://localhost:8080 ```

Now, you can enter all the numbers, select a operand and enter your answer and click the verify button. You will be redirected to a new page where whether 
the answer is correct or not correct is displayed using a alert message. You can can click on the link below to go back to the homepage and to verify another
operation.


### Approach

The task given in the assignment is fairly a simple one. I had to input two numbers and run an arithmatic operation on them. I would also input a third number which would be used to match with the result of the operation on the first 2 numbers. If matched, I display a Correct! message else a Not Correct! message. I divide my workflow in 2 parts.

## Front End:
I used html and bootstrap to create a simple user interface for the app. I created a simple form with 3 input field and a select field. Finally, I added a button to submit the form.

## Back-end:

I created a controller called Home controller where i handled the logical part of the app. I gathered the data that the user submitted the form using the  $_POST super global variable and stored them in other local variables. Next, I used switch statement to check for the operand and calculate the numbers according to the operand. For example, if a user selects a '+' operator in the html form, i would add firstNumber and secondNumber inside the switch statement and break from it. Finally, I used a if-else statement to check whether the result of the calculation matched with the answer that was provided by the user in the form. I store data accroding to the condition. If result and answer matched I saved a string 'Correct!' and 'Not correct!' otherwise. This data was sent to the result view which is shown to the user. 

I only used 2 routes for the whole app where '/' route returns the main view which has  the form and '/result' route returns the result view according to the controller.


