<?php
    $temp = 23;
    $rain = true;
    $cloudy = true;

    
    // and operator
    if ($temp >= 0 && $temp <= 30){
        echo "it's a good wheather <br>";
    }else{
        echo "it's not a good weather <br>";
    }
    
    // or operator
    if ($temp < 0 || $temp > 30){
        echo "it's not a good weather <br>";
    }else{
        echo "it's a good weather <br>";
    }
    
    if ($rain){
        echo "it's raining <br>";
    }else{
        echo "it's not raining <br>";
    }
    if (!$cloudy){
        echo "it's sunny <br>";
    }else{
        echo "it's cloudy <br>";
    }
    
    $age = 20;
    $citizen = true;
    // not operator
    if ($age >= 18 && $citizen){
        echo "you can vote <br>";
    }else{
        echo "you can't vote <br>";
    }
    if (!$age >= 18 || !$citizen){
        echo "you can't vote <br>";
    }else{
        echo "you can vote <br>";
    }
    
    $child = false;
    $senior = false;
    $ticket = null;

    if ($child || $senior){
        $ticket = 5;
    }else{
        $ticket = 10;
    }
    echo "your ticket price is R\${$ticket} <br>";
?>