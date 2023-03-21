<?php

function giveMyStatus()
{
    $status = "present";
    $name = "Ramesh";
    $contact = 9803468381;
    $adress = "Dhobithat";
    $faculty = "Humanities";
    $college = "DAV";

    echo "your status is: " . $status;
    echo $contact;
}
// giveMyStatus();


// personal details
function myPersonalDetails(){

    $firstName = "Ramesh";
    $middleName = "";
    $lastName = "Kunwar";
    $contact = 9803468381;
    $email = "rameshkunwar369@gmail.com";
    $collegeName = "DAV College";
    $facultyName = "BCA";
    $subjectName = "Scripting Language";
    $rollNo = 19;

    echo "Full Name: " . $firstName . " " . $middleName . " " . $lastName . "<br>";
    echo "Contact Number: " . $contact . "<br>";
    echo "Email: " . $email . "<br>";
    echo "College Name: " . $collegeName . "<br>";
    echo "Faculty Name: " . $facultyName . "<br>";
    echo "Subject Name: " . $subjectName . "<br>";
    echo "Roll No: " . $rollNo . "<br>";
}

myPersonalDetails();


// GLOBAL VARIABLES
// global keyword is used to define global variable
    global $pi;
    global $username;

    $pi = 3.1428;
    echo $pi;

    function showUserName(){
        $username = 'dav';
        echo $username;
    }
    showUserName();

    echo "<br>";


    
    // method two of defining global variables
    $numOne = 12;
    $numTwo = 23;

    function doSum(){
        $result = $GLOBALS['numOne'] + $GLOBALS['numTwo'];
        echo "sum of two number is: ". $result . "<br>";
    }

    doSum();

    echo "<br>";
    echo "<br>";


    // static variables
    static $code = 45;
    static $regNo = 15825;
    echo $code;
    echo "<br>";

    $val = $code ++;

    echo $val;
    echo "<br>";

    echo $code;
    echo "<br>";

    $code = 12;
    echo $code;
    echo "<br>";

    function staticExample(){
        echo "<br>";
        echo "<br>";
      

        static $a = 12;
        $b = 12;
        echo "before increment A: ".$a;
        echo "<br>";
        $a++;
        echo "after increment A: ".$a;
        echo "<br>";

        echo "before increment B: ".$b;
        echo "<br>";
        $b++;

        echo "after increment B: ".$b;
        echo "<br>";

     

    }

    staticExample();
    staticExample();
    staticExample();



?>
