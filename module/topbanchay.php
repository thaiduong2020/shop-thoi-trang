<div class="topbanchay" id="topbanchay">
        <div><h2>Top bán chạy nhất tuần</h2><hr style="    margin: 0 auto;"></div>
        <div class="box1">
        <div class="box1-topbanchay">

            <?php 
             foreach ($products as $products)
                    {
            ?>
              
                <div class="card-1">
                <div style="    width: 100%;display: flex; text-decoration: none;" href="client.php?act=chitiet&id=<?php echo $products['id'];?>">
                    <div id="ex1" style="border: 1px solid #EEEEEE;width: 12em; height: 9.7em;">
                       <a style="color: #555;
    font-size: 16px;" href="client.php?act=chitiet&id=<?php echo $products['id'];?>"> <img style="height: 100%;width:100%;    padding: 0.2em;" src="../upload/<?=$products['image']?>" alt=""></a>
                    </div>
                    <div class="content-tbc" style="    width: 65%;">
                       <p class="text-a-top-ban-chay"> <a   href="client.php?act=chitiet&id=<?php echo $products['id'];?>"><?=$products['name']?></a></p>
                       <span style="color: #ff5d2c;">★ ★ ★ ★ ★</span><br>
                        <span class="price"><?=$products['price']?> đ</span>
<br>
<a href="client.php?act=chitiet&id=<?php echo $products['id'];?>"><button style="float: right;    margin-right: 1em;color: #fff;background-color: #ff5622;" class="btn ">Chi tiết</button></a>

                    </div>

                    </div>
                </div>
                       
             <?php
            }
            ?>
</div>
