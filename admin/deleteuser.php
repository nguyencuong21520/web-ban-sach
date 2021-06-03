<?php
$con=mysqli_connect("localhost","root","","kitaab");
$id=$_GET['id'];

$sel="SELECT * FROM khachhang WHERE id='$id'";
$dl=$con->query($sel);
$row=$dl->fetch_assoc();
$img=$row['anhdaidien'];

unlink("userimages/".$img);

$del="DELETE FROM khachhang WHERE id='$id'";
$con->query($del);


header("location:important.php");
?>