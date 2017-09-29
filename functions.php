<?php
    # Function -block of code that can be repeatedly called.

    /*

        Camel case - myFunction()
        Lower case - my_function()
        Pascal case - MyFunction()

    */

    //Create simple function
    /*
    function simpleFunction(){
        echo 'Hello World';
    }
    */
    //run simple function
    /*
    simpleFunction();
    */

    //function with parameter
    /*
    function sayHello($name = 'World'){
        echo "Hello $name<br>";
    }
    */
/*
    sayHello('Joe');
    sayHello('Bob');
    //default to 'World'
    sayHello();
*/

    function addNumber($num1, $num2){
        echo $num1 + $num2;
    }

    //addNumber(2,3);

    // By reference

    $myNum = 10;

    function addFive($num){
        $num += 5;
    }

    function addTen(&$num){
        $num += 10;
    }

    addFive($myNum);

    echo "Value: $myNum<br>";

    addTen($myNum);

    echo "Value: $myNum<br>"

?>