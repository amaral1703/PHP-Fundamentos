<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <label>username:</label>
        <input type="text" name="username" id="">  <br>
        <label>password:</label>
        <input type="password" name="password" id=""><br>
        <input type="submit" name="login" value="log in"> <br>


    </form>
</body>
</html>

<?php
    //isset() function is used to check if a variable is set or not. If a variable is already unset with unset() function, it will no longer be set. isset() function return false if testing variable contains a NULL value.
    //empty() function is used to check whether a variable is empty or not. It is a built-in function in PHP. A variable is considered empty if it does not exist or if its value equals FALSE. empty() function does not generate a warning if the variable does not exist.
   
    // $username = null;
    // // $username = "";

    // if (isset($username)) {
    //     echo "This variable is set. <br>";
    // }else{
    //     echo "This variable is not set. <br>";
    // }
    // if (empty($username)) {
    //     echo "This variable is EMPTY. <br>";
    // }else{
    //     echo "This variable is not EMPTY. <br>";
    // }

    // foreach($_POST as $key => $value){
    //     echo $key . " : " . $value . "<br>";
    // }
        
    if(isset($_POST['login'])){
        echo"you tried to login. <br>";
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($username) || empty($password)){
            echo "Please fill all the fields. <br>";
        }else{
            echo "Username: " . $username . "<br>";
            echo "Password: " . $password . "<br>";
        }
    }
?>