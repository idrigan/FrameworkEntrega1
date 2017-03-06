<?php

namespace MyApp\Bundle\AppBundle\Controller;

use MyApp\Component\Calculator\Calculator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CalculatorController extends Controller
{

    public function addAction( Request $request )
    {
       if ($request->getMethod() == 'POST') {
           $param1 = $request->request->get("param1");
           $param2 = $request->request->get("param2");


           $calculator = new Calculator();
           return new Response((int)$calculator->add((int)$param1, (int)$param2));

       }
    }


    public function substractAction( $param1, Request $request )
    {
        if ($request->getMethod() == 'GET') {

            $param2 = $request->get("param2");


            $calculator = new Calculator();
            return new Response((int)$calculator->substract((int)$param1, (int)$param2));

        }
    }


    public function multiplyAction( $param1 , $param2 )
    {
            $calculator = new Calculator();
            return new Response((int)$calculator->multiply((int)$param1, (int)$param2));
    }

    public function divideAction(Request $request )
    {
        if ($request->getMethod() == 'GET') {

            $param1 = $request->get("param1");
            $param2 = $request->get("param2");


            $calculator = new Calculator();
            return new Response((int)$calculator->divide((int)$param1, (int)$param2));

        }
    }



}