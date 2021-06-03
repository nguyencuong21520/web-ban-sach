
<?php

session_start();
//redirection page link
header("location:login.php");

$con=mysqli_connect("localhost","root","","kitaab");

if($con){
  echo "";
}
else{
	echo "connection failed";
}





if(isset($_POST['signup'])){

$n=$_POST['hoten'];
$e=$_POST['email'];
$ps=$_POST['matkhau'];
$cps=$_POST['nlmatkhau'];
$cn=$_POST['sdt'];
$dob=$_POST['ngaysinh'];
$g=$_POST['gioitinh'];
$ad=$_POST['diachi'];


$dp=$_FILES['anhdaidien']['name'];
$buf=$_FILES['anhdaidien']['tmp_name'];
move_uploaded_file($buf, "../admin/userimages/".$dp);
//check for duplicate data
$sel="SELECT * FROM khachhang WHERE email ='$e'";

$r=$con->query($sel);



if($r->num_rows> 0){
	echo "email tồn tại";
}

else {
$ins="INSERT INTO khachhang SET hoten='$n',email='$e',matkhau='$ps',nlmatkhau='$cps',sdt='$cn',ngaysinh='$dob',gioitinh='$g',diachi='$ad',anhdaidien='$dp'";
$con->query($ins);
 



}
}


?>

