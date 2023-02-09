<?php

// NOTES

/* 
    SCOPE: visibility of your variables;

*/

$number = 10;

/* function number()
{
    echo $number;
} */

/* number(); */

// THIS WILL NOT WORK! Scopes work differently in PHP; every variable in the general scope will not be accessed inside a function and vice-versa!


function number2()
{
    $number2 = 11;
    echo $number2;
}

echo $number2; // THIS WILL NOT WORK! this variable is inside the function scope and not available outside;

/* 
    Default value for arguments

*/

/* function multiplyBy2($x)
{
    return $x * 2;
}

echo multiplyBy2(5); // 5*2
echo multiplyBy2(7); // 7*2
echo multiplyBy2(); // 5*2 - Doesn't have a default value, will not be displayed! */

// NOTE: we can call the functions before the declaration in PHP!