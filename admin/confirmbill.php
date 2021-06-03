<?php
$con=mysqli_connect("localhost","root","","kitaab");
$id=$_GET['id'];

$sel="SELECT * FROM hoadon WHERE id='$id'";
$dl=$con->query($sel);
$row=$dl->fetch_assoc();




$del="UPDATE hoadon SET tinhtrang='Đã giao' WHERE id='$id'";
$con->query($del);


header("location:orders.php");
?>