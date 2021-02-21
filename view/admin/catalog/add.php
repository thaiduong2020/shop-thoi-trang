  



<div class="container">
    <div class="card mt-5">
      <div class="card-header">
        <h2>Thêm mới sản phẩm</h2>
      </div>
        <?php
            if(isset($success)){
                echo $success;
            }
            if(isset($error)){
                echo $error;
            }
        ?>
      <div class="card-body">

      <form method="POST" action="" enctype="multipart/form-data">
           <a href="admin.php?act=loaisanpham ">danh sách</a>
            <div class="form-group">
                <label for="exampleInputPassword1">Tên sản phẩm</label>
                <input type="text" class="form-control" name="name" placeholder="tên sản phẩm mới">
            </div>
           
       
            <div class="form-group form-check">
            <button type="submit" name="add_catalog" class="btn btn-primary">Submit</button>
</form>
      </div>
    </div>
  </div>