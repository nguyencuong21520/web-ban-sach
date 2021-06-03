
<?php
$con=mysqli_connect("localhost","root","","kitaab");

if(isset($_POST['init'])){

   $id=$_POST['id'];
	$t=$_POST['tensp'];
  $ath=$_POST['tacgia'];
  $g=$_POST['theloai'];
	$d=$_POST['mota'];
  $p=$_POST['giaban'];
  $dp=$_POST['giakhautru'];
  $ps=$_POST['giagoc'];
 

if($_FILES['anh']['name']!=""){
    $i=$_FILES['anh']['name'];
  $buf=$_FILES['anh']['tmp_name'];
  move_uploaded_file($buf,"pimages/".$i);



  $updt="UPDATE sanpham SET tensp='$t',tacgia='$ath',theloai='$g',mota='$d',anh='$i',giaban='$p',giakhautru='$dp',giagoc='$ps' WHERE id='$id'";
}
else{

  $updt="UPDATE sanpham SET tensp='$t',tacgia='$ath',theloai='$g',mota='$d',giaban='$p',giakhautru='$dp',giagoc='$ps' WHERE id='$id'";
}
$con->query($updt);

header("location:products.php");
}
?>
