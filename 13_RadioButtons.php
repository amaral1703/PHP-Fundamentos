<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <input type="radio" name="credit_card" value="Visa"> Visa <br>
        <input type="radio" name="credit_card" value="Mastercard"> Mastercard <br>
        <input type="radio" name="credit_card" value="Elo"> Elo <br>
        <input type="radio" name="credit_card" value="American Express"> American Express <br>
        <input type="submit" name="confirm" value="confirm"> <br>
    </form>
</body>
</html>
<?php
    if(isset($_POST["confirm"])){
        if (isset($_POST["credit_card"])) {
            echo "You selected: " . $_POST["credit_card"] . "<br>";
        $creidit_card = $_POST["credit_card"];
    }else{
            echo "Please select a credit card. <br>";
        }
    }
    // $creidit_card = $_POST["credit_card"];

?>