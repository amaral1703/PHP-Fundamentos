<?php
    $grade = 5;
    switch ($grade){
        case 10:
            echo "you are perfect <br>";
            break;
        case 9 && 8:
            echo "you are good <br>";
            break;
        case 7 && 6:
            echo "you are average <br>";
            break;
        case 5 && 4:
            echo "you are below average <br>";
            break;
        case 3 && 2:
            echo "you are not good <br>";
            break;
        case 1 && 0:
            echo "you not studying <br>";
            break;
        default:
            echo "{$grade} is not a valid note <br>";
    }
    date_default_timezone_set("brazil/east");
    $date = date("l");
    $hour = date("jS M H:i:s ", strtotime("now"));
    echo "{$hour} <br>";
    // echo $date;

    switch ($date){
        case "Monday":
            echo "Today is Monday <br>";
            break;
        case "Tuesday":
            echo "Today is Tuesday <br>";
            break;
        case "Wednesday":
            echo "Today is Wednesday, it's half of the week <br>";
            break;
        case "Thursday":
            echo "Today is Thursday <br>";
            break;
        case "Friday":
            echo "Today is Friday, It's now weekend <br>";
            break;
        case "Saturday":
            echo "Today is Saturday <br>";
            break;
        case "Sunday":
            echo "Today is Sunday <br>";
            break;
        default:
            echo "Today is not a valid day <br>";
        }
?>