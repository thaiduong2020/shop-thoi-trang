<!DOCTYPE html>
<html lang="en">

<?php
  require "../view/admin/head.php";
?>
<body class="">


  <?php include('../view/admin/sidebar.php') ?>
  
  <div class="main-content">
    <!-- Navbar -->
    <?php include('../view/admin/navbar.php') ?>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
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
              <h1 class="mb-0 col">
                Người dùng
              </h1>
           
           
            </div>
            <div class="table-responsive">
          
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th >STT</th>
                    <th >Tên người dùng</th>
                    <th >Tên tài khoản</th>
                    <th >Mật khẩu</th>
                    <th >Ngày sinh</th>
                    <th >Email</th>
                    <th >Số điện thoại</th>
                    <th >Địa chỉ</th>
                    <th ></th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    $stt = 1;
                    foreach ($nguoidung as $products)
                    {
                      ?>
                       <tr>
                       
                          <td><?php echo $stt;?></td>
                          <td><?php echo $products['name'];?></td>
                          <td><?php echo $products['username'];?></td>
                          <td><?php echo $products['password'];?></td>
                          <td><?php echo $products['birtday'];?></td>
                          <td><?php echo $products['email'];?></td>
                          <td><?php echo $products['phone'];?></td>
                          <td><?php echo $products['address'];?></td>
                          <td> 
                          <a class="btn btn-primary" href='admin.php?act=update&id=<?php echo $products['id'];?>'>edit</a> 
                          <a class="btn btn-primary" onclick="return confirm('Delete entry?')" href='admin.php?act=delete&id=<?php echo $products['id'];?>'>xóa</a> 
                          </td>
                       </tr>
             <?php
              $stt++; 
            }
                 
                        // echo "<pre>";
                        // print_r($data);

                    ?>
                </tbody>
              </table>
           
            </div>
            
          </div>
          
        </div>
      </div>
    </div>
  </div>
  
  <!--   Core   -->
  <script src="./public/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="./public/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <script src="./public/js/plugins/chart.js/dist/Chart.min.js"></script>
  <script src="./public/js/plugins/chart.js/dist/Chart.extension.js"></script>
  <!--   Argon JS   -->
  <script src="./public/js/argon-dashboard.min.js?v=1.1.0"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
</body>

</html>