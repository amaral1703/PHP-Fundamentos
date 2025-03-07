<?php
    $foods = array("maça", "laranja", "banana", "uva", "melancia");
    echo $foods[3]. "<br>";
    $foods[3] = "pera";
    echo $foods[3]. "<br>";
    echo "<br>";
    array_push($foods, "manga", "morango");
    array_pop($foods);
    array_shift($foods);
    $reverse_foods =  array_reverse($foods);
    foreach($foods as $food){
        echo $food . "<br>";
    }
    echo "<br>";
    foreach($reverse_foods as $food){
        echo $food . "<br>";
    }

?>