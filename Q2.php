<?php 
$host = "localhost";
$user = "root";
$password = "";
$db = "final";

$connection = mysqli_connect($host, $user, $password);
mysqli_select_db($connection, $db);



if(isset($_POST['firstname'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $ordernum = $_POST['ordernumber'];
    $address = $_POST['address'];
    $part = $_POST['part'];

    if($part == "large"){
        echo "Price is RS.2000";
    }else if($part == "medium"){
        echo "Price is RS.1000";
    } else{
        echo "Price is RS.500";
    }

    $sql = "INSERT INTO two(firstname, lastname, ordernumber, address, part) VALUES ('".$firstname."', '".$lastname."', '".$ordernum."', '".$address."', '".$part."')" ;
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
    <input type="text" name="firstname" placeholder="First Name" />
    <br/>
    <br/>
    <input type="text" name="lastname" placeholder="Last Name" />
    <br/>
    <br/>
    <input type="number" name="ordernumber" placeholder="Order Number" />
    <br/>
    <br/>
    <input type="text" name="address" placeholder="Address" />
    <br/>
    <br/>
    <select name="part" >
    <option value="large">Large</option>
    <option value="medium">Medium</option>
    <option value="large">Large</option>
  </select>
  <br/>
  <br/>
    
    <input type="submit" name="submit" value="Submit" />
    </form>
</body>
</html>