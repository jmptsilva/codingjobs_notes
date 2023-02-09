<?php

require_once 'HtmlString.php';

// Create the objects

// with setter
/* $string1 = new HtmlString();
$string1->setString('String test');
$bold = $string1->getBoldString();

echo $bold; */

// with constructor (setter included)
$string2 = new HtmlString('String test 2');
echo $bold = $string2->getString() . '<br>';
echo $bold = $string2->getBoldString() . '<br>';
echo $bold = $string2->getItalicString() . '<br>';
echo $bold = $string2->getBoldItalicString() . '<br>';
