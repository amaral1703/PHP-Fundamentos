<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <label> username <br></label>
        <input type="text" name="username"> <br>
        <label> age <br></label>
        <input type="text" name="age"> <br>
        <label> email <br></label>
        <input type="text" name="email"> <br>
        

        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php 

//sanitizate the input
    // if(isset($_POST["login"])){
    //     $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS
    //     ) ;
    //     $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

    //     $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        
    //     echo "Your email is {$email} <br>";
    //     echo "Hello {$username}! <br>";
    //     echo "You have {$age} years old! <br>";
    // }

//validate the input
    if(isset($_POST["login"])){

        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        if(empty($age)){
            echo "Not valid age <br>";
        }else{
            echo "You have {$age} years old! <br>";
        }
        if(empty($email)){
            echo "Not valid email <br>";
        }else{
            echo "Your email is {$email} <br>";
        }

    }
?>