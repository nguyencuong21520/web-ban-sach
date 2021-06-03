<?php
$con=mysqli_connect("localhost","root","","kitaab");
$id=$_GET['id'];

$sel="SELECT * FROM hoadon WHERE id='$id'";
$dl=$con->query($sel);
$row=$dl->fetch_assoc();




$del="DELETE FROM hoadon WHERE id='$id'";
$con->query($del);


header("location:orders.php");
?>