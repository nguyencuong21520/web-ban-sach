<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>kitab.com/home-page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0, shrink-to-fit=no">
  <meta name="keywords" content="Best online book store,Books at reasonable price,best books at best offer">
  <meta name="description" content="Online book store,books at affordable price">
  <!--font awesome kit code-->
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <!--external css-->
  <link rel="stylesheet" type="text/css" href="css/missingcartt.css">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>

<body>
<style>
 

  table tr{
    border:1px solid black;
  }
</style>




  <div class="container">
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="./index.php">
    <img class="profile" src="logo/logopf.png" alt="logo" style="width:65px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
  <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" style="width: 300px;height:42px;" placeholder="Tìm kiếm theo tiêu đề..." name="var" aria-label="Search" aria-describedby="basic-addon2" value="<?php if(isset($_GET['var'])) {echo $_GET['var'];} ?>">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
  </ul>
  <ul class="navbar-nav">
   <li class="nav-item" style="margin-left: 20px;">
      <p class="nav-link"style="margin-top:8px;">Xem tài khoản:</p>
   </li>
   <li class="nav-item" style="margin-left:10px;font-weight: bold">
   <form action="../profile.php" method="post">
   <input  name="userid" value="<?php echo "".$_SESSION['userid'];?>" class="btn btn-success"style="display:none;">
   <input type="submit" name="username" value="<?php echo "".$_SESSION['username']; ?>" class="btn btn-success"style="margin-top:8px; background-color: #28a745;">
   </form>
   	
   </li>
   <li class="nav-item icn">
      <a class="nav-link" href="cart.php"><i style="font-size:35px;margin-left:20px;"class="fas fa-cart-plus"></i></a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="logoutfetch.php"><button type="button" class="btn btn-danger bt" style="width:100px;margin-left: 10px;">Đăng xuất</button></a>
   </li>
  </ul>
</nav>
<section class="row">
  <article class="col-md-12">

	      <nav class="navbar navbar-expand-sm bg-light navbar-light">

 
  

 
  
</nav>

<section class="row">

<article class="col-md-12" style="margin-top: 30px;">
  <h3>Các hóa đơn đã được xử lý:</h3>
</article>


<table style="margin-left:15px;margin-top:20px">
   <tr style="background-color:#66ffff;">
    <th>ID</th>
    <th style="padding-left:30px;">Ngày hóa đơn</th>
    <th style="padding-left:30px;">Tổng tiền</th>
    <th style="padding-left:30px;">Hình thức</th>
    <th style="padding-left:30px;">Tình trạng</th>
    <th style="padding-left:30px;">Tổng sản phẩm</th>
    
  </tr>
  <?php       
              $con=mysqli_connect("localhost","root","","kitaab");
              $use=$_SESSION['userid'];
              $sel="SELECT * FROM hoadon where idkh='$use' and tinhtrang='Đã giao'";
              $r=$con->query($sel);
              $sl=0;
              $total=0;
              while($row=$r->fetch_assoc()){
                $sl=$sl+$row['soluongsp'];        
                $total=$total+$row['tongtien']; 
  ?>
  <p><input type="hidden" name="ids" value="<?php echo $row['id']?>"></p>
  <tr>
    <th><?php echo $row['id']; ?></th>
    <th style="padding-left:30px;"><?php echo $row['ngayhd']; ?></th>
    <th style="padding-left:30px;"><?php echo $row['tongtien']; ?></th>
    <th style="padding-left: 25px;"><?php echo $row['hinhthuc']; ?></th>   
    <th style="padding-left: 25px;"><?php echo $row['tinhtrang']; ?></th>
    <th style="padding-left: 80px;"><?php echo $row['soluongsp']; ?></th>

    
    
 </tr>
<?php } ?>
</tr>
<tr>
<th></th>

<th></th>
<th>Tổng sản phẩm=</th>
<th><span style="color:blue;"><?php echo $sl;?> Sản phẩm</span></th>
<th></th>

</tr>
<tr>
<th></th>

<th></th>
<th>Tổng tiền=</th>
<th><span style="color:blue;"><?php echo $total;?> VN Đồng</span></th>
<th></th>
</tr>
</table>
<article class="col-md-4" style="margin-top: 100px;">
<form action="billfetch.php" method="post" enctype="multipart/form-data">
  <div style="border:2px solid black;padding:10px;display:inline-block;box-shadow: 2px 2px 4px 4px #808080;">
  <p>
                
                <a href="bill.php" class="btn btn-info"  style="width:100%;margin-top:10px;">Quay lại</a>
                <a href="cart.php" class="btn btn-info"  style="width:100%;margin-top:10px;">Giỏ hàng</a>
  </p>
    
  
  </div>
</form>
</article>


</section>


        <!--start of footer-->
  <footer class="page-footer font-small mdb-color pt-4 bg-dark navbar-dark" style="width:100%;margin-top:50px;">

<!-- Footer Links -->
<div class="container text-center text-md-left bg-dark navbar-dark" style="color:white;">

  <!-- Footer links -->
  <div class="row text-center text-md-left mt-3 pb-3">

    <!-- Grid column -->
    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">Nhà sách online</h6>
      <p>Đây là  là một nhà sách online, nơi mọi người có thể mua nhiều loại sách khác nhau, từ Học thuật đến sách giả tưởng. Hiệu sách cũng có một loạt các bộ sưu tập truyện tranh.</p>
    </div>
    <!-- Grid column -->

    <hr class="w-100 clearfix d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3" style="font-size: 20px;font-family: Sitka;color:white;">
      <h6 class="text-uppercase mb-4 font-weight-bold" ></h6>
      <p>
        <a href="#">lên đầu trang</a>
      </p>
    </div>
    <!-- Grid column -->

    <hr class="w-100 clearfix d-md-none">



    <!-- Grid column -->
    <hr class="w-100 clearfix d-md-none">

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3" style="color:white;">
      <h6 class="text-uppercase mb-4 font-weight-bold">Liên hệ</h6>
      <p>
        <i class="fas fa-home mr-3"></i>Hà nội, Việt nam</p>
      <p>
        <i class="fas fa-envelope mr-3"></i>xuanquy1120@gmail.com</p>
      <p>
        <i class="fas fa-phone mr-3"></i> +84349593356</p>
      
    </div>
    <!-- Grid column -->

  </div>
  <!-- Footer links -->

  <hr>

  <!-- Grid row -->
  <div class="row d-flex align-items-center">

    <!-- Grid column -->
    <div class="col-md-7 col-lg-8">

      <!--Copyright-->
      <p class="text-center text-md-left" style="color:white;">© 2021 Copyright:
        <a >
          <strong>Xuanquy</strong>
        </a>
      </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-5 col-lg-4 ml-lg-0">

      <!-- Social buttons -->
      <div class="text-center text-md-right mx-auto">
        <ul class="list-unstyled list-inline">

          <li class="list-inline-item" >
            <a type="button" class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.facebook.com/hoa.than.5832/">
              <i class="fab fa-facebook-f" style="font-size:30px;box-shadow: 2px 2px 4px 4px #00ffff;"></i>
            </a>
        </ul>
      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

</footer>
    </div>

   
</body>
</html>