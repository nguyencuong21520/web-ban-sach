
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

if(isset($_POST['ad'])){
  $n=$_POST['soluong'];
  $idsp=$_POST['idsp'];
  $idkh=$_POST['idkh'];
  $t=$_POST['tensp'];
  $p=$_POST['giasp'];
  $i=$_POST['hinhanh'];
  
$ins="INSERT INTO giohang SET tensp='$t',giasp='$p',idkh='$idkh',idsp='$idsp',hinhanh='$i',soluong='$n'";
$con->query($ins);

header("location:cart.php");
}

else{
  echo "data not inserted into the database";
}

?>


