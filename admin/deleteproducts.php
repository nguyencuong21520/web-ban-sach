<?php
$con=mysqli_connect("localhost","root","","kitaab");
$id=$_GET['id'];

$sel="SELECT * FROM sanpham WHERE id='$id'";
$dl=$con->query($sel);
$row=$dl->fetch_assoc();
$img=$row['anh'];

unlink("pimages/".$img);

$del="DELETE FROM sanpham WHERE id='$id'";
$con->query($del);


header("location:products.php");
?>