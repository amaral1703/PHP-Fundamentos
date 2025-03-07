<?php
    $username = "gabriel do amaral abreu";
    $phone = "123-610-4598";
    // $username = strtolower($username);
    // $username = strtoupper($username);
    // $username = trim($username);
    // $username = str_pad($username, 40, "\0"); 
    // $username = str_replace("-", "", $phone);
    // $username = strrev($username);
    // $equals = strcmp($username, "gabriel do amaral abreu");
    // $username = strlen($username);
    // $count = strpos($username, "a");
    // $index = strpos($phone, "-");
    $firstname = substr($username, 0 , strpos($username, " "));
    $lastname = substr($username, strrpos($username, " "));
    $fullname = explode(" " , $username);
    $username2 = array("gabriel", "do", "amaral", "abreu");
    $username2 = implode(" ", $username2);


    echo $username2 . "<br>";
    echo $username. "<br>";
    // echo $equals . "<br>";
    // echo $count. "<br>";
    // echo $index. "<br>";
    echo $firstname. "<br>";
    echo $lastname. "<br>";
    foreach($fullname as $name){
        echo $name. "<br>";
    }
?>