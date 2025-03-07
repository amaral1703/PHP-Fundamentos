<?php
    function happy_birthday($name, $age){
        echo "Happy Birthday to you {$name}! <br>";
        echo "you have {$age} years old <br>";
    }

    happy_birthday("Spongebob", 24);
    happy_birthday("Gabriel", 21);

    function is_even($number){
        return $number % 2 == 0;
        
    }
    echo is_even(5) ? "Even<br>" : "Odd<br>";

    function hypotenuse(float $a, float $b){
        $c = sqrt($a**2 + $b**2);
        return $c;
    }
    echo hypotenuse(5, 4);
?>