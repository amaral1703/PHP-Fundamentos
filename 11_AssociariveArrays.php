<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>Enter a contry</label>
        <br>
        <input type="text" name="country">
    </form>
</body>

</html>


<?php
$capitals = array(
    "Brazil" => "Rio de Janeiro",
    "Japan" => "kyoto",
    "USA" => "Wahshinton",
    "India" => "New Delhi",
    "China" => "Beijing",
);

$capitals["Brazil"] = "Brasilia";

$capitals["UK"] = "London";

// array_pop($capitals);
// $capitals = array_reverse($capitals);
// echo count($capitals). "<br>";
// $keys = array_Keys($capitals);
// $values = array_values($capitals);
// 
// foreach($keys as $key){
//     echo "{$key} <br>";
// }
// foreach($values as $value){
//     echo "{$value} <br>";
// }



$capital = $capitals[$_POST['country']];
echo "The capital of {$_POST['country']} is {$capital} <br>";
echo "<br>";
$flip = array_flip($capitals);
foreach ($flip as $key => $value) {
    echo "{$key} is the capital of {$value} <br>";
}

echo "<br>";

foreach ($capitals as $key => $value) {
    echo "The capital of {$key} is {$value} <br>";
}

?>