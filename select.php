<center>
<table border="2">
    <th>user id</th>
    <th>fname</th>
    <th>lname</th>
    <th>Action</th>
<?php
include('connection.php');
$select=mysqli_query($conn,"select * from user");
while($row=mysqli_fetch_array($select)){
    echo"<tr><td>".$row['u_id']."</td>";
    echo"<td>".$row['fname']."</td>";
    echo"<td>".$row['lname']."</td>";
    ?>
    <td>
    <a href="delete.php?id=<?php echo $row['u_id']?>">delete</a>
    <a href="update.php?id=<?php echo $row['u_id']?>">update</a>
</td>
    <?php
}

?></table></center>