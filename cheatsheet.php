<?php


//Variables
$variable_name = 'string';
$variable_name = 100; //Number
// Variable Cannot start with number like:
$0variable
// Variable Cannot be used with '-' sign:
$variable-number  //It breaks


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//MATHS
//Signs
+ - * / % ** ++ -- (++)(--)

echo 100 + 100;
    echo "<br>";
    echo 100 - 50;
    echo "<br>";

    echo 45 + 34 * 45 /21 -45;
    echo "<br>";
    echo 5 + 5 * 10;
    echo "<br>";
    echo 5+5 * 10;  // this will not math the + first
    echo "<br>";
    echo (5+5) * 10; //this will math first the + then will multiplie
    echo "<br>";
    $number = 10;
    $number2 = 10;

    echo $number * $number2;


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//Arrays
//You can type the array two ways:
$array_var_name = array(); //This is used but it's old
$array_var_name_new = []; // This is same as the other but the new one and you don't need to type 'array'.

//Array Functions
$array_variable_name = ['data']; //This is regular array and it start counts from 0
$array_associative_var_name = ["first_key" => 'data_it_shows']; // This is associative array that you can use with keys that you set like 'first_key' and  it will not count with numbers.

print_r($array_variable_name);   //Print all data in an array.
echo $array_variable_name[0]; // Echo will print only the data from the array that you choose in '[]'
// It can be eighter [0] or for associative [first_key] which will call the data.

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//if statements
// In the () infront of if, elseif there should be a condition like checks or something else that should be fullfiled in order to run the command below.


if(condition) {
    echo "Will run this command if the condition is fulfilled.";
}
elseif(condition) {
    echo "Will run this command if the contidion from 'if' is not fulfilled";
}
else {
    echo "Will run this command if none of the conditions are ful;filled.";
}

/*if(condition1 || condition2){

} */ // If you want to add 2 or more conditions you can do it with '||';


if(3 > 10){   // If 3 > 10 if should run the echo below
    echo "three is less than ten";  // This is not runned because 3 is not higher than 10
}   
elseif(4 < 5) { // elseif 4 < 5 if 5 is bigger than 4 it will run the echo below
    echo "Thats true"; // This should be runned because 5 is bigger than 4
} 
else {    // This will be executed if none of the conditions are fullfilled
    echo  "it is not";  // If none of the if, elseif conditions are fullfilled this echo will run
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//Comparison and logical operators

//Operators
equal ==
identical ===
compare > < >= <=
not equal !=
not identical !==

// Logical operators
&&  // This is used if all conditions are true if not the code will not execute.

if(3 == 3) {

}
if(5 >= 3) {

}
if(5 == 5 || 10> 7) { // This is a conditions inside and if one of the two conditions are true than the echo will be executed.

    echo "It's true";

}
if(5 == 5 && 10 >= 4) { // This is two conditions and if both are true it will execute the echo below but if one of the two is false it won't execute the echo
    echo 'This is true.';
}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//Switch statements
//Switch statements test a condition(variable) into multiplie conditions

$variable = 20;

switch($variable) { //This will test if variable '20' is equal to all cases below and if it's equal it will return the echo. If not it will return Default.
    case  30:
        echo " False";
        break;
    case  40:
        echo "False";
        break;
    case  50:
        echo "False";
        break;
    case  20:
        echo "True";
        break; 

    default: // This will show if nothing fits from the cases
        echo "Nothing fits here";
        break;

}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//While loop
//While loop keeps searching until it found true condition

while(4 < 10) { // This will execute infinite echo over and over because the condition is False. 4 is not bigger than 10. And it will keep running till its bigger and this won't happen.
    echo "Execute Me" . "<br>";
}

$counter = 0; // This is initializer (index)
while ($counter < 10) {
    echo "Still infinite loop" . "<br>";
    $counter = $counter + 1; // This will stop the loop once it reaches equal to 10 and it will no more executes +1
    $counter++; // This is the same but the short version.
    //Once the counter reaches 9 +1 it will stop and it should display 9 echo strings.
}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


// For Loop
//You can create the variable inside the loop $counter

for($counter = 0; $counter < 10; $counter++) { //This is one liner as while loop but the variable and condition also the +1 is in the condition section.
    echo $counter . "<br>";
}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//Foreach loop
// This loop works with arrays

foreach($numbers as $number) {
}
// $numbers is an array
// $number is that for each variable in the array will assign into a number

$numbers = [321, 123, 126 ,643, 7521, 6233];
foreach($numbers as $number) {
    echo $number . "<br>";
}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// CUSTOM FUNCTIONS //
//Defining functions


/*function first_function(here is condition){
    Here is the action
}*/

function first_function() { // This is the first function
    echo "This is the first function"; // It will print this if triggered
}

function calculate() {  // Same functions as the other but it just calculate the numbers
    echo 432 + 463;
}

function init() { // This fuctions do the work of the other two
    first_function(); // This is how we call the first function that we made
    echo "<br>"; // Split break so the second fuction can be on another row
    calculate(); // This is the second function that we made
}

init(); // This is how we call the function that we made so it can execute the other two functions


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Function Parameters //

function paramfunction($message) { // Normal function and in the condition there is a variable without a key

    echo $message; // This won't work because the variable in the condition field is empty and there is no information that it provides
    // In order to show something we need to type it in the execute name function
}

paramfunction("Hello homie"); // Here we type the data for our variable in the condition field of the function
//That way it will print Hello homie
echo "<br>";

function calculate($num1, $num2){ // This is the same but with 2 variables in the condition field
$sum = $num1 + $num2; // We are making a variable that is calculating the two variables in the condition section
echo $sum; // We are displaying the variable sum
}

calculate(48, 48); // Here we provide the information for the variables in the condition as follows $num1 and $num2 which are 48, 48
echo "<br>";


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Return Values From Functions

function addNumbers($num1, $num2) {// This is the same but with 2 variables in the condition field

    $sum = $num1 + $num2; //We are making a variable that is calculating the two variables in the condition section
    return $sum;  //This is returning the result from the $sum variable, but it won't show

}

$result = addNumbers(34 ,64); // This is a variable with a function addNumber which we made and data for the two variables in the condition section

echo $result; // Now I can print the function and the calculation with the variable result and it will show the return $sum
echo "<br>";

$result = addNumbers(100, $result); // You can add more numbers and it will calculate the first result which is 98 + 100
// You need to enter the new number first and then $result the numbers goes from left to right.
echo $result; // This time it will shows 198 because the first result is 98 and on the second result we add 100 more


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Global Variables and Scopes

//Global scope is outside specific function or statement
// Local scope is made in the specific function


$x = "outside";  // This is global scope variable

function convert() {

    global $x;
    $x = "inside";  // This is local scope variable
}

echo $x; // This will print global variable
echo "<br>";
convert(); // This functions should make the variable to print inside information
echo $x; // After the function this echo should print the information inside the function


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Constant //
// Constant is nepromenliva

define("number", 10200); // This is a constant which has a name "number" and a value "10200"
// If I try changing the value like
number = 2000; // This won't work because "number" is constant and the value cannot be changed

echo number; // This will print the value of the constant "number"

// But in a simple variable you can change the value creating the same variable with different value like
$numb = 10;  // This is the first created variable with value 10
//If I echo the variable it should display 10, but if I change the value like this:
$numb = 1000; // This is the changed value
echo $numb; // This echo will print the reasigned value which is 1000

/*
Now is possible to create a constant using the keyword "const" but it does not work the same as the define() function but it is very similar. 
*/
const CONSTANT = 'Hello World';
//It is possible to assign an array with this method like so.


const ANIMALS = array('dog', 'cat', 'bird');


/*Some examples from the docs below, so you can copy it and try it in your php file. */

// Works as of PHP 5.3.0
    
const CONSTANT = 'Hello World';
    
    
echo CONSTANT;
    
    
// Works as of PHP 5.6.0
    
const ANOTHER_CONST = CONSTANT.'; Goodbye World';
    
echo ANOTHER_CONST;
    
    
const ANIMALS = array('dog', 'cat', 'bird');
    
echo ANIMALS[1]; // outputs "cat"
    
    
// Works as of PHP 7
    
define('ANIMALS', array(
    
'dog',
    
'cat',
    
'bird'
    
));
    
echo ANIMALS[1]; // outputs "cat"



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//


?>