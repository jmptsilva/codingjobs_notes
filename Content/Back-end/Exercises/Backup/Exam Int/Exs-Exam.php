<?php
// Exercise 1 - Queries

echo '<h3>Exercise 1</h3>';
echo '<p>Check file Ex1-queries.sql</p>';

// Exercise 2 - Celebrities
echo '<hr>';
echo '<h3>Exercise 2</h3>';

$celebrities = array(
    "Jeff Bezos" => array(
        "houses" => 15,
        "credit" => 8100140042,
        "debit" => 2123177
    ),
    "Dwayne Johnson" => array(
        "houses" => 21,
        "credit" => 871399200,
        "debit" => 9837123
    ),
    "Kylie Jenner" => array(
        "houses" => 5,
        "credit" => 55140042,
        "debit" => 55140040
    ),
    "PHP Simon" => array(
        "houses" => 0,
        "credit" => 200,
        "debit" => 1800
    )
);

// sorting the array before the display foreach
krsort($celebrities);

// display for each entry in the array
foreach ($celebrities as $key => $value) {
    if (($value['credit'] - $value['debit']) < 0) {
        echo '<p>' . $key . ' owns ' . $value['houses'] . ' houses and has a bank balance of ' . '<span style="color:red;"' . '>' . ($value['credit'] - $value['debit']) . '</span>' . ' €.</p>';
    } else {
        echo '<p>' . $key . ' owns ' . $value['houses'] . ' houses and has a bank balance of ' . ($value['credit'] - $value['debit']) . ' €.</p>';
    }
}

// BONUS
$balance = array();

// creating a new array to store the differences (credit - debit)
foreach ($celebrities as $key => $value) {
    $balance[$key] = ($value['credit'] - $value['debit']);
}

// descending sort (from value)
arsort($balance);

// displaying only the biggest (first one);
echo 'BONUS: The actor with the largest bank account is ' . array_key_first($balance) . '.';



// Exercise 3 - Multiply arrays
echo '<hr>';
echo '<h3>Exercise 3</h3>';

// declaring the arrays

$tab1 = array(3, 20, 11, 6, 4, 9);
$tab2 = array(4, 7, 24, 2, 9, 12);

// for test/verification purposes
$test3 = 'car';
$test4 = array('car', 7, 24, 'building', 9, 12);
$test5 = array(4, 7, 24, 2, 9, 12, 5);

// function to verify if the array is contained only by numbers

function check($array)
{
    foreach ($array as $value) {
        if (!is_numeric($value)) {
            return false;
        }
    }
    return true;
}

// declaration of the function
function multiplyArrays($array1, $array2)
{
    // check if the parameters are of array type
    if (gettype($array1) !== 'array' or gettype($array2) !== 'array') {
        echo 'ERROR: This function only works with arrays of numbers!';
    } else {
        // check if the arrays have the same amount of numbers
        if (count($array1) !== count($array2)) {
            echo 'ERROR: Arrays need to have the same amount of numbers!';
        } else {
            // check if the array has only numbers
            if (!check($array1) or !check($array2)) {
                echo 'ERROR: Arrays need to only be composed by numbers!';
            } else {
                $results = array_map(
                    function ($x, $y) {
                        return $x * $y;
                    },
                    $array1,
                    $array2
                );

                // display of the inputs and outputs
                echo 'Array 1<br>';
                foreach ($array1 as $value) {
                    echo $value . ' - ';
                }

                echo '<br>';
                echo 'Array 2<br>';

                foreach ($array2 as $value) {
                    echo $value . ' - ';
                };

                echo '<br><br>';
                echo 'Results<br>';

                foreach ($results as $value) {
                    echo $value . ' - ';
                };

                return $results;
            }
        }
    }
}

// function call
multiplyArrays($tab1, $tab2);

echo '<hr>';
echo '<h3>Exercise 4</h3>';

echo '<p>Part 1: Check file christmas_shop.sql</p>';
echo '<p>Part 2: Check folder Ex4 Parts 2-3</p>';
