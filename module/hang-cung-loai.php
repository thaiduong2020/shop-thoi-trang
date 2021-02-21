<div style="margin: 33px 92px;
    width: 85.8%;">
  <h4> <span style="border-bottom: 1px solid #403ec5;
    padding-bottom: 6px;
    margin-bottom: -7px;
    font: 500 18px/20px 'UtmAvo', sans-serif;
">HÀNG CÙNG LOẠI</span> </h4>
  <hr style="margin-top: -4px;">
</div>
<div style="flex-wrap: wrap; display: flex;     margin: 4px 70px;">

   
    <?php


                    foreach ($hangcungloai as $hangcungloai)
                    {
                      ?>
                  <input type="hidden" class="form-control" name="id" value="<?php echo $hangcungloai['id'];?>">
                  <div style="    width: 18.1%;
    box-shadow: 0px 1px 5px 0px;
    height: 22.9em;
    margin-left: 1.2em;
    margin-top: 1.4em;
">
                  <a href="client.php?act=chitiet&id=<?php echo $hangcungloai['id'];?>">

                        <div class="img-sp1n">
                            <img  src="../upload/<?=$hangcungloai['image']?>" alt="">
                        </div>
                        <div class="text-sp1n" style="width: 100%;height: 42.5%;">
                            <p><?=$hangcungloai['name']?></p>
                            <p class="price"><?=$hangcungloai['price']?></p>
                        </div>
                  </a>

                    </div>
             <?php
            }
                    ?>
</div>