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
                Sản phẩm
              </h1>
           
              <?php
              echo "<a class='btn btn-primary ' href='admin.php?act=add_catalog'>Add</a>";
              ?>
            </div>
            <div class="table-responsive">
          
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    $stt = 1;
                    foreach ($catalog as $catalog)
                    {
                      ?>
                       <tr>
                          <td><?php echo $stt;?></td>
                          <td><?php echo $catalog['name'];?></td>
                          <td> 
                          <a class="btn btn-primary" href='admin.php?act=update_catalog&id=<?php echo $catalog['id'];?>'>edit</a> 
                          <a class="btn btn-primary" onclick="return confirm('Delete entry?')" href='admin.php?act=delete_catalog&id=<?php echo $catalog['id'];?>'>xóa</a> 
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