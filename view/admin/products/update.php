  



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
           <a href="admin.php?act=sanpham">danh sách</a>
           <input type="hidden" class="form-control"  value="<?=$name?>" name="id" value="<?=$id?>" placeholder="tên sản phẩm mới">

            <div class="form-group">
                <label for="exampleInputPassword1">Tên sản phẩm</label>
                <input type="text" class="form-control"  value="<?=$name?>" name="name" placeholder="tên sản phẩm mới">
            </div>
           
            <!-- <select class="custom-select" id="inputGroupSelect01" name="type_name"> 
                <?php foreach($result as $row):?>
                <option value="<?= $row->id;?>"><?= $row->type_name;?></option>
                <?php endforeach?>
            </select> -->
            <div class="form-group">
                <label for="exampleInputPassword1">Gía sản phẩm</label>
                <input type="text" class="form-control" value="<?=$price?>"  name="price" placeholder="Gía sản phẩm">
                <?php
                    if(isset($messprice))
                    {
                ?>
            <div class="alert alert-danger">
            <?php echo $messprice;?>
            </div>
                <?php
                    }
                ?>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Số lượng sản phẩm</label>
                <input type="number" class="form-control" value="<?=$count?>"  name="count" placeholder="Số lượng sản phẩm">
                <?php
                    if(isset($messcount))
                    {
                ?>
            <div class="alert alert-danger">
            <?php echo $messcount;?>
            </div>
                <?php
                    }
                ?>
            </div>
            <div class="col-md-12">
                            <div class="form-group">
                                <label class="font-weight-bold">MÔ TẢ</label>
                                <textarea class="form-control" value="<?=$mota?>"   name="mota" rows="4"></textarea>
                </div>
            <div class="form-group form-check">
            <button type="submit" name="update_products" class="btn btn-primary">cập nhật</button>
</form>
      </div>
    </div>
  </div>