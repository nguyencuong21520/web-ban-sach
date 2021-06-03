<?php

session_start();


?>
<!DOCTYPE html>
<html lang="en-US">

<head>
  <title>Trang chính</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0, shrink-to-fit=no">
  <meta name="keywords" content="Best online book store,Books at reasonable price,best books at best offer">
  <meta name="description" content="Online book store,books at affordable price">
  <!--font awesome kit code-->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
    integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <!--external css-->
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="../css/chat.css">
  <link href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css" rel="stylesheet">

  </script>

  <?php include("./firebase_config.php") ?>

</head>

<body>
  <div class="chat_show">
    <img src="https://img.icons8.com/cotton/64/000000/facebook-messenger--v3.png" />
  </div>

  <div class="chat_container">
    <div class="chat_header">
      <div class="chat_name">Admin</div>
      <div class="chat_close"><i class="fad fa-times-circle fa-2x"></i></div>
    </div>
    <hr>
    <div class="chat_body">

    </div>
    <div class="chat_input">
      <form id="chat_input_content" action="">
        <input type="text" name="chat" placeholder="Enter your message ...">
        <button type="submit"><i class="fad fa-paper-plane fa-2x"></i></button>
      </form>
    </div>
  </div>
  <div class="container">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <!-- Brand/logo -->
      <a class="navbar-brand" href="index.php">
        <img class="profile" src="images/logopf.png" alt="logo" style="width:65px;">
      </a>

      <!-- Links -->
      <ul class="navbar-nav">

        <!-- tìm kiếm -->
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
          <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" style="width: 300px;height:42px;"
              placeholder="Tìm kiếm theo tiêu đề..." name="var" aria-label="Search" aria-describedby="basic-addon2"
              value="<?php if(isset($_GET['var'])) {echo $_GET['var'];} ?>">
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
          <p class="nav-link" style="margin-top:8px;">Xem tài khoản:</p>
        </li>
        <li class="nav-item" style="margin-left:10px;font-weight: bold">
          <form action="../profile.php" method="post">
            <input name="userid" value="<?php echo $_SESSION['userid']; ?>" class="btn btn-success"
              style="display:none;">
            <input type="submit" name="username" value="<?php echo "".$_SESSION['username']; ?>" class="btn btn-success"
              style="margin-top:8px; background-color: #28a745;">
          </form>

        </li>
        <li class="nav-item icn">
          <a class="nav-link" href="cart.php"><i style="font-size:35px;margin-left:20px;"
              class="fas fa-cart-plus"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logoutfetch.php"><button type="button" class="btn btn-danger bt"
              style="width:100px;margin-left: 10px;">Đăng xuất</button></a>
        </li>
      </ul>
    </nav>
    <section class="row">
      <article class="col-md-12">

        <nav class="navbar navbar-expand-sm bg-light navbar-light">



          <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#fantasy">Tưởng tượng</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#horror">Kinh dị</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#comic">Truyện tranh</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#education">Giáo dục</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kids">Trẻ em</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Literature">Sách văn học</a>
            </li>
          </ul>


        </nav>
      </article>
      <article class="col-md-12">
        <!--carousel-->
        <div id="sli" class="carousel slide" data-ride="carousel">

          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#sli" data-slide-to="0" class="active"></li>
            <li data-target="#sli" data-slide-to="1"></li>
            <li data-target="#sli" data-slide-to="2"></li>
          </ul>

          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/blood.png" alt="blood and bones book banner" width="100%" height="500px">
            </div>
            <div class="carousel-item">
              <img src="images/fantasy.png" alt="the crimson curse book banner" width="100%" height="500px">
            </div>
            <div class="carousel-item">
              <img src="images/para.jpg" alt="lord of shadows book banner" width="100%" height="500px">
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#sli" data-slide="prev">
            </span>
          </a>
          <a class="carousel-control-next" href="#sli" data-slide="next">
            </span>
          </a>
        </div>


        <!--carousel ends-->
        <!--second banner-->
        <img src="images/banner2.jpg" alt="book banner" width="100%" height="400px">
        <!--second banner ends-->
      </article>
      <article class="col-md-12">
        <h1 style="color:white;font-family:kalam;font-size:50px;margin-top:20px;text-align: center;">Thế giới thuộc về
          những người "biết đọc" </h1>
      </article>
    </section>
    <!--product addition start-->
    <!-- tưởng tượng -->
    <section class="row">
      <article class="col-md-12">
        <p id="fantasy" style="font-size:40px;color:#ff0066;">Tưởng tượng<span></span>
        </p>
      </article>
    </section>
    <section class="row">
      <?php 
                 
              $con=mysqli_connect("localhost","root","","kitaab");
              if(isset($_GET['var']) && ($_GET['var']) !='')
                {
                  $sel = 'select * from sanpham where tensp like "%'.$_GET['var'].'%" and theloai like "Tưởng tượng"';
                }
              else
              {
                $sel = 'select * from sanpham where theloai like "Tưởng tượng"';
              }
              
              $r=$con->query($sel);
              while($row=$r->fetch_assoc()){
              
  ?>
      <figure class="col-md-2" style="margin:40px;">

        <div class="card" style="width:210px;">
          <form action="addcartfetch.php" method="post" enctype="multipart/form-data">

            <p><input type="hidden" name="idsp" value="<?php echo $row['id']?>"></p>
            <p><input type="hidden" name="idkh" value="<?php echo $_SESSION['userid']; ?>"></p>

            <p><input type="hidden" value="../admin/pimages/<?php  echo $row['anh'];?>" name="hinhanh"></p>
            <a href="prdctview.php?id=<?php echo $row['id']; ?>"><img class="card-img-top"
                src="../admin/pimages/<?php  echo $row['anh'];?>" alt="Card image"
                style="width:100%;height:260px"></a>
            <div class="card-body">
              <p><input type="hidden" name="tensp" value="<?php echo $row['tensp']?>"></p>
              <h4 class="card-title">
                <?php echo $row['tensp']; ?>
              </h4>

              <p><input type="hidden" name="giasp" value="<?php echo $row['giaban']?>"></p>

              <p class="card-text">
                <?php echo $row['giaban']; ?> VN Đồng
              </p>
              <input type="hidden" name="soluong" value="1" style="display:none;">
              <p><input type="submit" name="sb" value="Thêm vào giỏ hàng" class="btn btn-danger"
                  style="width:100%;height:40px;margin-top:5px;">
                  <!-- <a href="#"><button type="button" class="btn btn-info"
                    style="width:100%;height:40px;margin-top:5px;"><span style="font-size: 20px;">Mua
                      ngay</span></button></a> -->
                      </p>

          </form>

        </div>
  </div>
  </figure>
  <?php } ?>
  </section>
  <!--second section of adding product-->

  <!-- Kinh dị -->
  <section class="row">
      <article class="col-md-12">
        <p id="horror" style="font-size:40px;color:#ff0066;">Kinh dị<span></span>
        </p>
      </article>
    </section>
    <section class="row">
      <?php 
                 
              $con=mysqli_connect("localhost","root","","kitaab");
              if(isset($_GET['var']) && ($_GET['var']) !='')
                {
                  $sel = 'select * from sanpham where tensp like "%'.$_GET['var'].'%" and theloai like "Kinh dị"';
                }
              else
              {
                $sel = 'select * from sanpham where theloai like "Kinh dị"';
              }
              
              $r=$con->query($sel);
              while($row=$r->fetch_assoc()){
              
  ?>
      <figure class="col-md-2" style="margin:40px;">

        <div class="card" style="width:210px;">
          <form action="addcartfetch.php" method="post" enctype="multipart/form-data">

            <p><input type="hidden" name="idsp" value="<?php echo $row['id']?>"></p>
            <p><input type="hidden" name="idkh" value="<?php echo $_SESSION['userid']; ?>"></p>

            <p><input type="hidden" value="../admin/pimages/<?php  echo $row['anh'];?>" name="hinhanh"></p>
            <a href="prdctview.php?id=<?php echo $row['id']; ?>"><img class="card-img-top"
                src="../admin/pimages/<?php  echo $row['anh'];?>" alt="Card image"
                style="width:100%;height:260px"></a>
            <div class="card-body">
              <p><input type="hidden" name="tensp" value="<?php echo $row['tensp']?>"></p>
              <h4 class="card-title">
                <?php echo $row['tensp']; ?>
              </h4>

              <p><input type="hidden" name="giasp" value="<?php echo $row['giaban']?>"></p>

              <p class="card-text">
                <?php echo $row['giaban']; ?> VN Đồng
              </p>
              <input type="hidden" name="soluong" value="1" style="display:none;">
              <p><input type="submit" name="sb" value="Thêm vào giỏ hàng" class="btn btn-danger"
                  style="width:100%;height:40px;margin-top:5px;">
                  <!-- <a href="#"><button type="button" class="btn btn-info"
                    style="width:100%;height:40px;margin-top:5px;"><span style="font-size: 20px;">Mua
                      ngay</span></button></a> -->
                      </p>

          </form>

        </div>
  </div>
  </figure>
  <?php } ?>
  </section>

  <!-- Truyện tranh -->
  <section class="row">
      <article class="col-md-12">
        <p id="comic" style="font-size:40px;color:#ff0066;">Truyện tranh<span></span>
        </p>
      </article>
    </section>
    <section class="row">
      <?php 
                 
              $con=mysqli_connect("localhost","root","","kitaab");
              if(isset($_GET['var']) && ($_GET['var']) !='')
                {
                  $sel = 'select * from sanpham where tensp like "%'.$_GET['var'].'%" and theloai like "Truyện tranh"';
                }
              else
              {
                $sel = 'select * from sanpham where theloai like "Truyện tranh"';
              }
              
              $r=$con->query($sel);
              while($row=$r->fetch_assoc()){
              
  ?>
      <figure class="col-md-2" style="margin:40px;">

        <div class="card" style="width:210px;">
          <form action="addcartfetch.php" method="post" enctype="multipart/form-data">

            <p><input type="hidden" name="idsp" value="<?php echo $row['id']?>"></p>
            <p><input type="hidden" name="idkh" value="<?php echo $_SESSION['userid']; ?>"></p>

            <p><input type="hidden" value="../admin/pimages/<?php  echo $row['anh'];?>" name="hinhanh"></p>
            <a href="prdctview.php?id=<?php echo $row['id']; ?>"><img class="card-img-top"
                src="../admin/pimages/<?php  echo $row['anh'];?>" alt="Card image"
                style="width:100%;height:260px"></a>
            <div class="card-body">
              <p><input type="hidden" name="tensp" value="<?php echo $row['tensp']?>"></p>
              <h4 class="card-title">
                <?php echo $row['tensp']; ?>
              </h4>

              <p><input type="hidden" name="giasp" value="<?php echo $row['giaban']?>"></p>

              <p class="card-text">
                <?php echo $row['giaban']; ?> VN Đồng
              </p>
              <input type="hidden" name="soluong" value="1" style="display:none;">
              <p><input type="submit" name="sb" value="Thêm vào giỏ hàng" class="btn btn-danger"
                  style="width:100%;height:40px;margin-top:5px;">
                  <!-- <a href="#"><button type="button" class="btn btn-info"
                    style="width:100%;height:40px;margin-top:5px;"><span style="font-size: 20px;">Mua
                      ngay</span></button></a> -->
                      </p>

          </form>

        </div>
  </div>
  </figure>
  <?php } ?>
  </section>

  <!-- Giáo dục -->

  <section class="row">
      <article class="col-md-12">
        <p id="education" style="font-size:40px;color:#ff0066;">Giáo dục<span></span>
        </p>
      </article>
    </section>
    <section class="row">
      <?php 
                 
              $con=mysqli_connect("localhost","root","","kitaab");
              if(isset($_GET['var']) && ($_GET['var']) !='')
                {
                  $sel = 'select * from sanpham where tensp like "%'.$_GET['var'].'%" and theloai like "Giáo dục"';
                }
              else
              {
                $sel = 'select * from sanpham where theloai like "Giáo dục"';
              }
              
              $r=$con->query($sel);
              while($row=$r->fetch_assoc()){
              
  ?>
      <figure class="col-md-2" style="margin:40px;">

        <div class="card" style="width:210px;">
          <form action="addcartfetch.php" method="post" enctype="multipart/form-data">

            <p><input type="hidden" name="idsp" value="<?php echo $row['id']?>"></p>
            <p><input type="hidden" name="idkh" value="<?php echo $_SESSION['userid']; ?>"></p>

            <p><input type="hidden" value="../admin/pimages/<?php  echo $row['anh'];?>" name="hinhanh"></p>
            <a href="prdctview.php?id=<?php echo $row['id']; ?>"><img class="card-img-top"
                src="../admin/pimages/<?php  echo $row['anh'];?>" alt="Card image"
                style="width:100%;height:260px"></a>
            <div class="card-body">
              <p><input type="hidden" name="tensp" value="<?php echo $row['tensp']?>"></p>
              <h4 class="card-title">
                <?php echo $row['tensp']; ?>
              </h4>

              <p><input type="hidden" name="giasp" value="<?php echo $row['giaban']?>"></p>

              <p class="card-text">
                <?php echo $row['giaban']; ?> VN Đồng
              </p>
              <input type="hidden" name="soluong" value="1" style="display:none;">
              <p><input type="submit" name="sb" value="Thêm vào giỏ hàng" class="btn btn-danger"
                  style="width:100%;height:40px;margin-top:5px;">
                  <!-- <a href="#"><button type="button" class="btn btn-info"
                    style="width:100%;height:40px;margin-top:5px;"><span style="font-size: 20px;">Mua
                      ngay</span></button></a> -->
                      </p>

          </form>

        </div>
  </div>
  </figure>
  <?php } ?>
  </section>
  <!-- Trẻ em -->
  <section class="row">
      <article class="col-md-12">
        <p id="kids" style="font-size:40px;color:#ff0066;">Trẻ em<span></span>
        </p>
      </article>
    </section>
    <section class="row">
      <?php 
                 
              $con=mysqli_connect("localhost","root","","kitaab");
              if(isset($_GET['var']) && ($_GET['var']) !='')
                {
                  $sel = 'select * from sanpham where tensp like "%'.$_GET['var'].'%" and theloai like "Trẻ em"';
                }
              else
              {
                $sel = 'select * from sanpham where theloai like "Trẻ em"';
              }
              
              $r=$con->query($sel);
              while($row=$r->fetch_assoc()){
              
  ?>
      <figure class="col-md-2" style="margin:40px;">

        <div class="card" style="width:210px;">
          <form action="addcartfetch.php" method="post" enctype="multipart/form-data">

            <p><input type="hidden" name="idsp" value="<?php echo $row['id']?>"></p>
            <p><input type="hidden" name="idkh" value="<?php echo $_SESSION['userid']; ?>"></p>

            <p><input type="hidden" value="../admin/pimages/<?php  echo $row['anh'];?>" name="hinhanh"></p>
            <a href="prdctview.php?id=<?php echo $row['id']; ?>"><img class="card-img-top"
                src="../admin/pimages/<?php  echo $row['anh'];?>" alt="Card image"
                style="width:100%;height:260px"></a>
            <div class="card-body">
              <p><input type="hidden" name="tensp" value="<?php echo $row['tensp']?>"></p>
              <h4 class="card-title">
                <?php echo $row['tensp']; ?>
              </h4>

              <p><input type="hidden" name="giasp" value="<?php echo $row['giaban']?>"></p>

              <p class="card-text">
                <?php echo $row['giaban']; ?> VN Đồng
              </p>
              <input type="hidden" name="soluong" value="1" style="display:none;">
              <p><input type="submit" name="sb" value="Thêm vào giỏ hàng" class="btn btn-danger"
                  style="width:100%;height:40px;margin-top:5px;">
                  <!-- <a href="#"><button type="button" class="btn btn-info"
                    style="width:100%;height:40px;margin-top:5px;"><span style="font-size: 20px;">Mua
                      ngay</span></button></a> -->
                      </p>

          </form>

        </div>
  </div>
  </figure>
  <?php } ?>
  </section>

  <!-- Sách văn học -->
  <section class="row">
      <article class="col-md-12">
        <p id="Literature" style="font-size:40px;color:#ff0066;">Sách văn học<span></span>
        </p>
      </article>
    </section>
    <section class="row">
      <?php 
                 
              $con=mysqli_connect("localhost","root","","kitaab");
              if(isset($_GET['var']) && ($_GET['var']) !='')
                {
                  $sel = 'select * from sanpham where tensp like "%'.$_GET['var'].'%" and theloai like "Sách văn học"';
                }
              else
              {
                $sel = 'select * from sanpham where theloai like "Sách văn học"';
              }
              
              $r=$con->query($sel);
              while($row=$r->fetch_assoc()){
              
  ?>
      <figure class="col-md-2" style="margin:40px;">

        <div class="card" style="width:210px;">
          <form action="addcartfetch.php" method="post" enctype="multipart/form-data">

            <p><input type="hidden" name="idsp" value="<?php echo $row['id']?>"></p>
            <p><input type="hidden" name="idkh" value="<?php echo $_SESSION['userid']; ?>"></p>

            <p><input type="hidden" value="../admin/pimages/<?php  echo $row['anh'];?>" name="hinhanh"></p>
            <a href="prdctview.php?id=<?php echo $row['id']; ?>"><img class="card-img-top"
                src="../admin/pimages/<?php  echo $row['anh'];?>" alt="Card image"
                style="width:100%;height:260px"></a>
            <div class="card-body">
              <p><input type="hidden" name="tensp" value="<?php echo $row['tensp']?>"></p>
              <h4 class="card-title">
                <?php echo $row['tensp']; ?>
              </h4>

              <p><input type="hidden" name="giasp" value="<?php echo $row['giaban']?>"></p>

              <p class="card-text">
                <?php echo $row['giaban']; ?> VN Đồng
              </p>
              <input type="hidden" name="soluong" value="1" style="display:none;">
              <p><input type="submit" name="sb" value="Thêm vào giỏ hàng" class="btn btn-danger"
                  style="width:100%;height:40px;margin-top:5px;">
                  <!-- <a href="#"><button type="button" class="btn btn-info"
                    style="width:100%;height:40px;margin-top:5px;"><span style="font-size: 20px;">Mua
                      ngay</span></button></a> -->
                      </p>

          </form>

        </div>
  </div>
  </figure>
  <?php } ?>
  </section>

  <!---start of a footer-->
  <!-- Footer -->
  <footer class="page-footer font-small mdb-color pt-4 bg-dark navbar-dark" style="width:100%">

    <!-- Footer Links -->
    <div class="container text-center text-md-left bg-dark navbar-dark" style="color:white;">

      <!-- Footer links -->
      <div class="row text-center text-md-left mt-3 pb-3">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Nhà sách online</h6>
          <p>Đây là là một nhà sách online, nơi mọi người có thể mua nhiều loại sách khác nhau, từ Học thuật đến sách
            giả tưởng. Hiệu sách cũng có một loạt các bộ sưu tập truyện tranh.</p>
        </div>
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3" style="font-size: 20px;font-family: Sitka;color:white;">
          <h6 class="text-uppercase mb-4 font-weight-bold"></h6>
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
            <i class="fas fa-home mr-3"></i>Hà nội, Việt nam
          </p>
          <p>
            <i class="fas fa-envelope mr-3"></i>xuanquy1120@gmail.com
          </p>
          <p>
            <i class="fas fa-phone mr-3"></i> +84349593356
          </p>

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
            <a>
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

              <li class="list-inline-item">
                <a type="button" class="btn-floating btn-sm rgba-white-slight mx-1"
                  href="https://www.facebook.com/hoa.than.5832/">
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
  <!-- Footer -->


  </div>
  <script src="./js/chat_control.js"></script>

  <script>
    let email = "<?php echo $_SESSION['useremail']; ?>"
    console.log(email)

    let renderChat = (data, userEmail)=>{
      let dom = document.querySelector(".chat_body")
      dom.innerHTML = ''

      for(let i of data.messages){
        let html = ''
        if(i.owner == userEmail){
          html = `<div class="chat_item chat_owner"><span>${i.content}</span></div>`
        }else{
          html = `<div class="chat_item"><span>${i.content}</span></div>`
        }
        dom.innerHTML += html
      }
    }

    let chat_input = document.getElementById("chat_input_content")
    chat_input.onsubmit = (e)=>{
      e.preventDefault();
      let chat = chat_input.chat.value;
      let data = {
        content: chat,
        owner: email
      } 
      chat_update(data, "PnB92pHFq3kw8z6xnrkJ")
      chat_input.chat.value = ''
    }

    let getData = async () => {
      let result = await firebase.firestore().collection("conversations").get();
      console.log(result);
      let data = await getDataFromDocs(result.docs);
      renderChat(data[0], email);
      console.log(data);
    };

    getData();

    let chat_update = async (data, id)=>{
      await firebase.firestore()
                 .collection('conversations')
                 .doc(id)
                 .update({
                     messages: firebase.firestore.FieldValue.arrayUnion(data)
                 })
    }

    let getDataFromDoc = (doc) => {
      let data = doc.data();
      data.id = doc.id;
      return data;
    };

    let getDataFromDocs = (docs) => {
      let result = [];
      for (let doc of docs) {
        let data = getDataFromDoc(doc);
        result.push(data);
      }
      return result;
    };

  let setUpConversationchange = async function () {
         let skipRun = true
         firebase.firestore()
         .collection('conversations')
         .where('users', 'array-contains', email)
         .onSnapshot(function (snapshot) {
             if (skipRun) {
                 skipRun = false
                 return
             }

             let docChanges = snapshot.docChanges()
             for (let docChange of docChanges) {
                 let type = docChange.type
                 let conversationDoc = docChange.doc
                 let conversation = getDataFromDoc(conversationDoc)
                 if (type == 'modified') {
                  renderChat(conversation, email);
                 }
                 if(type == 'added'){
                   
                 }
                 if(type == 'removed'){

                 }
             }
         })
     }
     setUpConversationchange()
  </script>
</body>

</html>