<?php
    $password = "pass123";

    $hash = password_hash($password, PASSWORD_DEFAULT); //bycript
    echo $hash . "<br>";
    
    
    if(password_verify("pass", $hash)){
        echo "password is correct <br>";
    }else{
        echo "password is incorrect <br>";
    }
?>