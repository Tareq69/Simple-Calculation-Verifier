<?php
namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('/pages/main'); // Returning the main view which is the homepage of our app.
        
    }
    public function calculate()
    {
        $firstNumber = $_POST['firstNumber']; // Storing the first number entered by the user in the form.
        $secondNumber = $_POST['secondNumber']; // Storing the second number entered by the user in the form.
        $answer = $_POST['answer']; // Storing the answer entered by the user in the form.
        $operator = filter_input(INPUT_POST, 'operator', FILTER_SANITIZE_STRING); // Storing the operator that was selected by the user in the form. filter_input function is used to filter the operand.

        // Using switch to check for the operator and do the calculation accordingly. The result of the
        // calculation is stored in a variable named $result.
        switch ($operator)
        {
            case "+":

                $result = $firstNumber + $secondNumber;
            break;
            case "-":

                $result = $firstNumber - $secondNumber;
            break;
            case "*":

                $result = $firstNumber * $secondNumber;
            break;
            case "/":

                $result = $firstNumber / $secondNumber;
            break;
        }

        if ($result == $answer) // Checking whether the answer entered by the user was correct or not.
        
        {
            $data['result'] = "Correct!"; // IF the user answer and the results match, a string "Correct!" is stored in an  array named $data.
            
        }
        else
        {
            $data['result'] = "Not Correct!"; // IF the user answer and the results do not match, a string "Not Correct!" is stored in an   array named $data.
            
        }

        return view('/pages/result', $data); // Take the user to result view and pass the $data array with it, which contains the data of whether answer was Correct! or Not Correct!
        
    }

}

