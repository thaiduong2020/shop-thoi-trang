  



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
           <a href="admin.php?act=sanpham">danh sách</a>


            <div class="form-group">
                <label for="exampleInputPassword1">Tên sản phẩm</label>
                <input type="text" class="form-control" name="name" placeholder="tên sản phẩm mới">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Giá sản phẩm</label>
                <input type="text" class="form-control" name="price" placeholder="Giá sản phẩm">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Thêm ảnh sản phẩm</label>
                <input type="file" class="form-control" name="image" placeholder="Thêm ảnh sản phẩm">
            </div>


            <div class="form-group">
                    <label class="font-weight-bold">Chọn danh mục</label>
                    <select class="form-control" name="idcatalog">
                        <?php foreach ($catalog as $row) {?>
                              '<option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>';
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                    <label class="font-weight-bold">Chọn loại hàng</label>
                    <select class="form-control" name="id_type">
                        <?php foreach ($type_products as $row) {?>
                              '<option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>';
                        <?php } ?>
                    </select>
                </div>
            </div>


            <div class="form-group">
                <label for="exampleInputPassword1">Số lượng sản phẩm</label>
                <input type="text" class="form-control" name="count" placeholder="Số lượng sản phẩm">
            </div>


            <div class="form-group">
                <label for="exampleInputPassword1">Giảm giá</label>
                <input type="text" class="form-control" name="promotion" placeholder="iảm giá">
            </div>


            <div class="form-group">
                <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                <input type="text" class="form-control" name="mota" placeholder="Mô tả sản phẩm">
            </div>       


            <div class="form-group form-check">
            <button type="submit" name="add_sp" class="btn btn-primary">Thêm mới</button>
</form>
      </div>
    </div>
  </div>