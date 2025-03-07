<?php 
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    this is the login page <br>
    <form action="index.php" method="POST">
        <label for="username">username:</label><br>
        <input type="text"  name="username"> <br>
        <label for="password">password:</label><br>
        <input type="password"  name="password" ><br>
        <button type="submit" name="login" value="login">login</button>
    </form>
    <a href="home.php">this go to the home page</a><br>
</body>
</html>
<?php 
// Check if the user clicked the login button
   if (isset($_POST['login'])) {
       if (!empty($_POST['username']) && 
       !empty($_POST['password'])) {
            $_SESSION['username'] = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);

            $_SESSION['password'] = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
           header('Location: home.php');
       }else{
        echo "something is missing";
       }
   }

?>