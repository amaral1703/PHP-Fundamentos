<?php
    $db_server = 'localhost';
    $db_username = 'root';
    $db_password = '1234';
    $db_name = "bussinesdb";
    $conn = "";


    try{

        $conn = mysqli_connect($db_server, 
        $db_username, 
        $db_password, 
        $db_name);
    }catch(mysqli_sql_exception){
        echo "Connection failed <br>";
    }
        
    if($conn){
        echo "Connected to database <br>";
    }
?>