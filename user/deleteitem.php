<?php
$con=mysqli_connect("localhost","root","","kitaab");
$id=$_GET['id'];

$sel="SELECT * FROM giohang WHERE id='$id'";
$dl=$con->query($sel);
$row=$dl->fetch_assoc();
$img=$row['hinhanh'];



$del="DELETE FROM giohang WHERE id='$id'";
$con->query($del);


header("location:cart.php");
?>