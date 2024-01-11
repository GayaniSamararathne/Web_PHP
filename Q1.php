<?php 
$host = "localhost";
$user = "root";
$password = "";
$db = "demo";

$connection = mysqli_connect($host, $user, $password);
mysqli_select_db($connection, $db);



if(isset($_POST['numberCode'])){
    $number = $_POST['numberCode'];

    $sql = "INSERT INTO table(number) VALUES ('".$number."')" ;
    mysqli_query($connection ,$sql);
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form method="POST" action="#">
    <input type="number" min="0" max="100" name="numberCode" />
    <input type="submit" name="submit" value="Submit" />
    </form>
</body>
</html>