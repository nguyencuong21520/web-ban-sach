<?php
//start the session
session_start();
//connect to the dayabase
$con=mysqli_connect("localhost","root","","kitaab");

//check the connection of the databaase
 if (mysqli_connect_errno()){
 echo "Failed to connect to Phpmyadmin: " . mysqli_connect_error();
 die();
 }

if(isset($_POST['sp'])){
  $idkh=$_POST['idkh'];
  $t=$_POST['tongtien'];
  $h=$_POST['hinhthuc'];
  $slsp=$_POST['soluongsp'];
$ins="INSERT INTO hoadon SET idkh='$idkh', ngayhd=NOW(), tongtien='$t', hinhthuc='$h', tinhtrang='Chưa giao', soluongsp='$slsp'";
$con->query($ins);
header("location:bill.php");
}

else{
  echo "data not inserted into the database";
}

?>