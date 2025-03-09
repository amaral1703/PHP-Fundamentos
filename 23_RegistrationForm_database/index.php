<?php
    include("../22_Connect_to_database/database.php");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registration DB</title>
</head>
<body>
    <form action="<?php  htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <H2>WELCOME to FAKEMEDIA Registration</H2>
        username: <br>
        <input type="text" name="user" id=""> <br>
        password: <br>
        <input type="password" name="password" id=""><br>
        <input type="submit" name="submit" value="register">
    </form>
</body>
</html>

<?php

    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $username = filter_input( INPUT_POST,  'user', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input( INPUT_POST,  'password', FILTER_SANITIZE_SPECIAL_CHARS);
        $usersintable = "SELECT user FROM users WHERE user = '$username'";
        $result = mysqli_query($conn, $usersintable);
      
        if (empty($username)){
            echo "Username is required <br>";
        }
        elseif (empty($password)){
            echo "Password is required <br>";
        }
        
        else{
            // Verifica se o usuário já existe no banco de dados
                $stmt = $conn->prepare("SELECT user FROM users WHERE user = ?");
                $stmt->bind_param("s", $username);
                $stmt->execute();
                $stmt->store_result();
                
                if ($stmt->num_rows > 0) {
                    echo "<p style='color:red;'>This username is already taken.</p>";
                } else {
                    // Insere o usuário no banco de dados
                    $hash = password_hash($password, PASSWORD_DEFAULT);
                    $stmt = $conn->prepare("INSERT INTO users (user, password) VALUES (?, ?)");
                    $stmt->bind_param("ss", $username, $hash);

                    if ($stmt->execute()) {
                        echo "<p style='color:green;'>User registered successfully!</p>";
                    } else {
                        echo "<p style='color:red;'>Error: User not registered.</p>";
                    }
                }

                $stmt->close();
            }

        }
        $conn->close();
        ?>