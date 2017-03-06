<?php

namespace MyApp\Component\Calculator;

class Calculator
{
    public function __construct(){ }


    public function add( $v1,  $v2)
    {
        return $v1 + $v2;
    }

    public function substract( $v1,  $v2)
    {
        return $v1 - $v2;
    }

    public function multiply( $v1,  $v2)
    {
        return $v1 * $v2;
    }

    public function divide( $v1, $v2)
    {
        return $v1 / $v2;
    }

}