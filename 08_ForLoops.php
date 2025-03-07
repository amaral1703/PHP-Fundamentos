<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <!-- <label> enter a name to count to :</label>
        <input type="text" name="counter">
        <input type="submit" value="start"> -->
        <label> enter a name to down count from:</label>
        <input type="text" name="counter">
        <input type="submit" value="start">

    </form>
</body>
</html>
<?php

    // for ($i=0; $i<5; $i++){
    //     echo "Hello <br>";
    // }
    //counter condition increment
    // for ($i=0; $i<5; $i++){
    //     echo  $i. "<br>";
    // }

    $counter = $_POST['counter'];
    // for ($i=0; $i<=$counterun; $i++){
    //     echo $i. "<br>";
    // }
    for ($i=$counter; $i> 0; $i--){
        echo $i. "<br>";
    }

?>