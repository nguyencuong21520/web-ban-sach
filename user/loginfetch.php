
<?php

session_start();
//redirection page link


$con=mysqli_connect("localhost","root","","kitaab");

if($con){
  echo "";
}
else{
	echo "connection failed";
}

$e=$_POST['email'];
$ps=$_POST['matkhau'];

$sel="SELECT * FROM khachhang WHERE email ='$e' && matkhau='$ps'";
$r=$con->query($sel);
if($r->num_rows> 0){
	while($row=$r->fetch_assoc()){
	$_SESSION['userid']=$row['id'];
	$_SESSION['useremail']=$row['email'];
	$_SESSION['username']=$row['hoten']; 
	header('location:index.php');

}
}
else{ ?>
	<script>
		alert("Đăng nhập sai ! hãy nhập lại");
		window.location="login.php";
	</script>
	<?php } ?>






