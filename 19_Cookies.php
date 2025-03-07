<?php
    setcookie("fav_food", "pizza", time() + (86400 * 2), "/"); //2 days cookies
    setcookie("fav_drink", "pepsi", time() + (86400 * 1), "/"); //1 day cookie

    foreach($_COOKIE as $key => $value){
        echo $key . " " . $value . "<br>";
    }
    if(isset($_COOKIE["fav_food"])){
        echo "Your favorite food is " . $_COOKIE["fav_food"];
    }else{
        echo "You haven't set your favorite food yet.";
    }
?>