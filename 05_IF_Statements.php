<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
    // $age = 12;

    // if ($age >=18){
    //     echo 'You are an adult';
    // }elseif($age <= 0){
    //     echo "you may not acesses this page by yourself and that's not a real age";
    // }elseif($age > 100){
    //     echo "You are too old to access this page";
    // }else{
    //     echo "You are not an adult";
    // }

    // $adult = true;

    // if($adult== true){
    //     echo "You have access to this page";
    // }else{
    //     echo "you must be an adult to access this page";
    // }
    
    $hours = 41;
    $rate = 15;
    $weekly_pay = null;

    if ($hours <= 0){
        $weekly_pay = 0;
    }elseif ($hours <= 40){
        $weekly_pay = $hours * $rate;
    }else{
        $weekly_pay = (40 * $rate) + (($hours - 40) * ($rate * 1.5));
    }

    echo "you made R\${$weekly_pay} this week";
?>