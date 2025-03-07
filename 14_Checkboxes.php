<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <input type="checkbox" name="foods[]" value="Pizza"> Pizza<br>
        <input type="checkbox" name="foods[]" value="Cake">Cake <br>
        <input type="checkbox" name="foods[]" value="Pepsi"> Pepsi <br>
        <input type="checkbox" name="foods[]" value="Hamburguer"> Hamburguer <br>
        <input type="checkbox" name="foods[]" value="Potato"> Potato <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    if (isset($_POST["submit"])){
       if(!empty($_POST["foods"])){
        echo "You selected: <br>";
        foreach($_POST["foods"] as $food){
            echo $food . "<br>";
        }}else{
            echo "Please select a food. <br>";
        }
    }
?>