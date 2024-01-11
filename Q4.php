<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 04</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="regNo" id=""><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>

<?php

$con = mysqli_connect("localhost", "root", "", "student_db");

if ($con) {
    if (isset($_POST['submit'])) {
        
    
        $regNo = $_POST['regNo'];

        $query = "SELECT * FROM students WHERE regNo = '{$regNo}'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $fname = $row['fname'];

            echo "Registration Number:". $row['regNo'] . "<br>";
            echo "First Name:". $row['fname'] . "<br>";
            echo "Last Name:". $row['lname'] . "<br>";

            $mark1 = $row['mark1'];
            $mark2 = $row['mark2'];
            $mark3 = $row['mark3'];

            $avgMarks = ($mark1 + $mark2 + $mark3) / 3;
            
            echo "Average Marks:". $avgMarks . "<br>";

            if ($avgMarks >= 80) {
                $grade = "A";
            } else if($avgMarks >= 70) {
                $grade = "B";
            } else if ($avgMarks >= 50) {
                $grade = "C";
            } else {
                $grade = "D";
            }
            echo "Grad:". $grade; 
        }
    }
} else {
    echo "<p>Connection failed</p>";