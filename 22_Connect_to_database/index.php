<?php
    include 'database.php';
    // $sql = "SELECT * FROM users WHERE user = 'joao'";
    $sql = "SELECT * FROM users ";
    try{
        $result = mysqli_query($conn, $sql);
        echo "user is registered <br>";
    }catch(mysqli_sql_exception){
        echo "user is not registered <br>";
    }
    if (mysqli_num_rows($result) > 0) {
      
        while ($row = mysqli_fetch_assoc($result)){
            echo $row['user_id'] . "<br>";
            echo $row['user'] . "<br>";
            echo $row['reg_date'] . "<br>";

        }
        
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
?>
<?php
/*
include 'database.php';
$user = "joao";
$password = "1234";
$hash = password_hash($password, PASSWORD_DEFAULT);

//$conn is the variable of the database connection in database.php file
$sql = "INSERT INTO users (user, password)
            VALUES ('$user', '$hash')";

try {

    mysqli_query($conn, $sql);
    echo "Data inserted <br>";
} catch (mysqli_sql_exception) {
    echo "Data not inserted <br>";
}

mysqli_close($conn);
*/
?>
