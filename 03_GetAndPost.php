<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form action="index.php" method="get">

        <label>username:</label> <br>
        <input type="text" name="username"><br>
        <label>password:</label> <br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
    </form> -->
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">

        <label>username:</label> <br>
        <input type="text" name="username"><br>
        <label>password:</label> <br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
    </form>
</body>
    
</html>
<?php
    //$_GET
    //$_POST

    // echo $_GET["username"] . "<br>" . $_GET["password"]. "<br>";
    // echo "{$_GET["username"]} <br> {$_GET["password"]}<br>";
    echo $_POST["username"] . "<br>" . $_POST["password"]. "<br>";
    // echo "{$_POST["username"]} <br> {$_POST["password"]}<br>";
?>