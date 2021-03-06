<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
  
  <link rel="stylesheet" href="css/index.css">

  <title>Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include("include/menu.php"); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

<!-- Nav Item - Search Dropdown (Visible Only XS) -->
<li class="nav-item dropdown no-arrow d-sm-none">
  <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-search fa-fw"></i>
  </a>
  <!-- Dropdown - Messages -->
  <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
    <form class="form-inline mr-auto w-100 navbar-search">
      <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Ti??m ki????m ..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search fa-sm"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</li>

<div class="topbar-divider d-none d-sm-block"></div>



</ul>

  




        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Th??m sa??n ph????m</h1>
         
         <!--add product form-->
           <div class="container">
            <section class="row">
                <article class="col-md-12">
      
      <form action="productfetch.php" method="post" enctype="multipart/form-data" style="color:black;">
        <p class="pp">Ti??u ??????:</p>
        <p><input type="text" name="title"></p>
        <p class="pp">Ta??c gia??:</p>
        <p><input type="text" name="author"></p>
        <p>Th???? loa??i:
          <select name="type">
            
              <option value="T??????ng t??????ng">T??????ng t??????ng</option>
              <option value="Kinh di??">Kinh di??</option>
              <option value="Truy????n tranh">Truy????n tranh</option>
              <option value="Gia??o du??c">Gia??o du??c</option>
              <option value="Tre?? em">Tre?? em</option>
              <option value="Sa??ch v??n ho??c">Sa??ch v??n ho??c</option>
              <option value="?????? du??ng">?????? du??ng</option>
            
          </select>
        </p>
        <p>Mi??u ta??:</p>
        <textarea name="edittext"></textarea>
        <br>
        <div>
          <p>Ta??i a??nh:</p>
          <input type="file" name="imgup">
        </div>
        <br>
        <hr>
        <table>
          <tr>
          <th>
            <p>??????t gia??:</p>
            <p><input type="text" name="cost"></p>
          </th>
          <th>
            <p style="margin-left:15px;">Gi?? kh???u tr???:</p>
            <p style="margin-left:15px;"><input type="text" name="dcost"></p>
          </th>
          </tr>
          <tr>
          <th>
            <p>Gi?? G????c:</p>
            <p><input type="text" name="pscost"></p>

          </th>
          </tr>
    
        </table>

        <hr>
        
        <input type="submit" name="init" value="Th??m">
      </form>
    
    </article>
  </article>
</section>
           </div>
         <!--add product form stop-->
         </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
             <span>Xuan Quy &copy; Books </span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ba??n mu????n thoa??t kh??ng</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">??</span>
          </button>
        </div>
        <div class="modal-body">Ba??n ch????c mu????n thoa??t kh??ng</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Kh??ng</button>
          <a class="btn btn-primary" href="logoutfetch.php">????ng Xu????t</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script>
  CKEDITOR.replace( 'edittext' );
</script>

</body>

</html>
