<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body><center>
    <form action="" method="POST">
        <div class="dd">
            <h2>LOGIN HERE </h2>
            <input type="text" name="fname" placeholder="Enter your first name" required><br><br>
            <input type="text" name="lname" placeholder="Enter your last name" required><br><br>
            <input type="submit" name="save" value="send" 
            style="background-color:
             black;
             color: white;
             box-shadow: 4px 4px lime;
             ">
        </div>
    </form></center>
</body>
</html>
<?php
session_start();
include("connection.php");
if (isset($_POST['save'])) {
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$select=mysqli_query($conn,"select * from user where fname='$fname' && lname='$lname'");
 if (mysqli_num_rows($select)>=1) {
    header("location: select.php"); 
  $_SESSION['fname']=$a['fname'];  
  $_SESSION['lname']=$a['lname'];
 
}
}
?>