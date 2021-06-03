
<?php
$con=mysqli_connect("localhost","root","","kitaab");

if(isset($_POST['init'])){

	$t=$_POST['tensp'];
  $ath=$_POST['tacgia'];
  $g=$_POST['theloai'];
	$d=$_POST['mota'];
  $p=$_POST['giaban'];
  $dp=$_POST['giakhautru'];
  $ps=$_POST['giagoc'];
    $i=$_FILES['anh']['name'];
  $buf=$_FILES['anh']['tmp_name'];
  move_uploaded_file($buf,"pimages/".$i);

$ins="INSERT INTO sanpham SET tensp='$t',tacgia='$ath',theloai='$g',mota='$d',anh='$i',giaban='$p',giakhautru='$dp',giagoc='$ps'";
$con->query($ins);

header("location:products.php");
}
?>
