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
<style>
.dd{
    width: 200px;
    height: 230px;
    border-radius: 5px;
    color: white;
    background: #000;
    margin: 200px;
    border: 8px dotted;
}
input{
    width: 160px;
    height: 30px;
    border-radius: 5px;
}
</style>

<?php
include("connection.php");
if(isset($_POST['save'])){
    $f=$_POST['fname'];
    $l=$_POST['lname'];
    $q=mysqli_query($conn,"INSERT INTO user VALUES('','$f','$l')");
    if($q==TRUE){
        echo"data inserted";
    }else{
        echo"data failed";
    }
}
?>