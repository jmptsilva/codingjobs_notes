<?php

class HtmlString
{
    //property
    private $string;

    // construct
    public function __construct($string)
    {
        $this->setString($string);
    }

    public function setString($newString)
    {
        if (is_string($newString))
            $this->string = $newString;
        else
            echo 'Argument must be a string!';
    }

    public function getString()
    {
        return $this->string;
    }

    public function getBoldString()
    {
        return '<b>' . $this->string . '</b>';
    }

    public function getItalicString()
    {
        return '<i>' . $this->string . '</i>';
    }

    public function getBoldItalicString()
    {
        return '<b><i>' . $this->string . '</i></b>';
    }
}
