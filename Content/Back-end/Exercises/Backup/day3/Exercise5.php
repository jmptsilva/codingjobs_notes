<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions Ex. 5</title>
</head>

<body>


    <?php
    /*
    -- Exercice 5
    Write a PHP script that checks if a string is a palindrome.
    A palindrome is a chain of letters whose order of letters remains the same whether read from left to right or from right to left.
    Example :
    "kayak"
    "xanax"
    "poop"

    Without str functions; except count();

    str_split()
    */

    $word = 'poop';

    function isPalindrome($string)
    {
        for ($i = 0; $i < strlen($string); $i++) {
            $end = strlen($string) - 1 - $i;
            echo "$i<br>";
            echo "$end<br>";
            if ($string[$i] === $string[$end]) { // if ($string[$i] !== $string[$end])
                $errors = false;                    // return false;
            } else {
                $errors = true;
                break;
            }
        }

        if (!$errors) {             // return true;
            echo 'It is!<br>';      // echo isPalindrome($word) ? 'It is!' : 'Not a pali!';
        } else {
            echo 'not!';
        }
    } // with the return this is more practical! instead of using $errors variables, just use a return false when the strings aren't equal and a return true after the for (it is only executed if the return false is not executed by the conditions inside the for)

    isPalindrome($word);

    ?>
</body>

</html>