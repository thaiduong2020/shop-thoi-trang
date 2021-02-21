
<?php
  include("head.php");
?>
<?php
  session_start();
  if($_SESSION['username'] != 'admin'){
    header('location: admin.php?act=home');
  }
?>
  <?php include('sidebar.php') ?>
  <div class="main-content">
    <!-- Navbar -->
    <?php include('navbar.php') ?>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header  pb-8 pt-5 pt-md-8" style="background-image: linear-gradient(to right, orangered, blueviolet);">
      <div class="container-fluid">
        <div class="header-body"></div>
      </div>
    </div>
    <div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0" style="display: flex;">
              <h3 class="mb-0 col">
              </h3>
                <a style="margin: 10% 41%;" href="client.php?act=home"><button class="btn btn-danger" type="submit">
                <span class="fa fa-home"></span> Quay về trang USER</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
