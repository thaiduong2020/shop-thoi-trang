  



<div class="container">
    <div class="card mt-5">
      <div class="card-header">
        <h2>cập nhật sản phẩm</h2>
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
           <a href="admin.php?act=loaisanpham">danh sách</a>
           <input type="hidden" class="form-control"  value="<?=$name?>" name="id" value="<?=$id?>" placeholder="tên sản phẩm mới">

            <div class="form-group">
                <label for="exampleInputPassword1">Tên sản phẩm</label>
                <input type="text" class="form-control"  value="<?=$name?>" name="name" placeholder="tên sản phẩm mới">
            </div>
           
            <div class="form-group form-check">
            <button type="submit" name="update_data" class="btn btn-primary">cập nhật</button>
</form>
      </div>
    </div>
  </div>