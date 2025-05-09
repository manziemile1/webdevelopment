<?php
include("connection.php");
$row=$_GET['id'];
$select=mysqli_query($conn,"select * from user where u_id='$row'");
while($a=mysqli_fetch_array($select)){
?><center>
<form action="" method="POST">
    <h1>Update user</h1>
    <input type="text" name="u_id" value="<?php echo $a['u_id']?>"><br><br>
    <input type="text" name="fname" value="<?php echo $a['fname']?>"><br><br>
    <input type="text" name="lname" value="<?php echo $a['lname']?>"><br><br>
    <button name="update">update</button>
</form></center>
<?php
}
?>
<?php
if(isset($_POST['update'])){
    $u_id=$_POST['u_id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $query=mysqli_query($conn,"UPDATE user SET u_id='$u_id',fname='$fname',lname='$lname' WHERE u_id='$row'");
    header("location: select.php");
}
?>