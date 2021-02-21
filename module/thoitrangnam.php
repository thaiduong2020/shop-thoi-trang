<div class="quangcao" id="nhay">
            <img class=" img1" src="../../public/image/bg_top1.jpg" alt="">
            <img class="img2" src="../../public/image/bg_top2.jpg" alt="">
        </div>
            <div class="thoitrangnam">
            <div class="ttn"> Thời trang nam</div>
            <div class="navbar-products">
            <ul>
						<li>
							<a href="?act=quannam&quannam=1&#nhay" title="Đăng ký" class="account_a">
								<span>Quần nam</span>
							</a>
						</li>
						<li>
							<a href="?act=dongho&dongho=1#nhay" title="Đăng nhập" class="account_a">
								<span>Đồng hồ</span>
							</a>
						</li>
						
						<li>
							<a href="?act=giaynam&giaynam=1#nhay" title="Liên hệ" class="account_a">
								Giày dép nam
							</a>
                        </li>
                        <li>
							<a href="?act=aonam&aonam=1#nhay" title="Liên hệ" class="account_a">
								Áo nam
							</a>
                        </li>
                        <li>
						<a href="?act=all&#nhay" title="Liên hệ" class="account_a">
								Xem tất cả
							</a>
                        </li>
                       
                    </ul>
            </div>
        </div>

        <div class="sp-nam">
            <div class="danhmuc-spn">
                <div class="dm-1">
                    <a href="?act=aonam&aonam=1#nhay">
                        <img src="../public/image/123.png" alt="">   
                        <div class="text">
                        <a style="text-decoration: none;" href="">Áo sơ mi dài tay</a>  
                        </div> 
                        
                    </a>
                    
                </div>
                <div class="dm-2">
                    <a href="?act=quannam&quannam=1&#nhay">
                        <img src="../public/image/1212.png" alt="">
                        <div class="text">
                        <a href="">Quần nam</a>  
                        </div> 
                    </a>
                
                </div>
                <div class="dm-3">
                    <a href="?act=giaynam&giaynam=1#nhay">
                         <img src="../public/image/1234.png" alt="">
                         <div class="text">
                        <a href="">Giày dép</a>  
                        </div> 
                    </a>
                </div>
                <div class="dm-4">
                    <a href="?act=dongho&dongho=1#nhay">
                        <img src="../public/image/12345.png" alt="">
                        <div class="text">
                        <a href="">Đồng hồ</a>  
                        </div> 
 
                    </a>
                    
                </div>
                <div class="qc3">
                        <img src="../public/image/ts_banner_fe.jpg" alt="">
                    </div>
            </div>
        
            <div class="sanpham">
                
            <?php
                    if(isset($_GET['quannam'])){
                ?>
                     <div class="box-1-sp">
                        <?php
                            foreach ($getListSpType as $quannam)
                            {
                        ?>
                            <div class="sp1">
                                <a href="client.php?act=chitiet&id=<?php echo $quannam['id'];?>" style="text-decoration: none;">

                                    <div class="img-sp1n">
                                        <img  src="../upload/<?=$quannam['image']?>" alt="">
                                    </div>
                                    <div class="text-sp1n" style="width: 100%;height: 42.5%;">
                                        <p><?=$quannam['name']?></p>
                                        <span class="price"><?=$quannam['price']?></span><br>
                                          <button style="float: right;    margin-right: 1em;color: #fff;background-color: #ff5622;" class="btn ">Chi tiết</button><br>
                                    </div>
                                </a>
                            </div>
                    <?php
                    }
                    ?>
                </div>
                <?php        
                    }else if(isset($_GET['dongho'])){
                ?>
                    <div class="box-1-sp">
                        
                        <?php
                            foreach ($getListSpType2 as $dongho)
                            {
                        ?>
                            <div class="sp1">
                                <a href="client.php?act=chitiet&id=<?php echo $dongho['id'];?>" style="text-decoration: none;">

                                    <div class="img-sp1n">
                                        <img  src="../upload/<?=$dongho['image']?>" alt="">
                                    </div>
                                    <div class="text-sp1n" style="width: 100%;height: 42.5%;">
                                        <p><?=$dongho['name']?></p>
                                        <span class="price"><?=$dongho['price']?></span><br>
                                          <button style="float: right;    margin-right: 1em;color: #fff;background-color: #ff5622;" class="btn ">Chi tiết</button><br>
                                    </div>
                                </a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <?php        
                    }else if(isset($_GET['giaynam'])){
                ?>

                    <div class="box-1-sp">
                        
                        <?php
                            foreach ($getListSpType3 as $giaynam)
                            {
                        ?>
                            <div class="sp1">
                                <a href="client.php?act=chitiet&id=<?php echo $giaynam['id'];?>" style="text-decoration: none;">

                                    <div class="img-sp1n">
                                        <img  src="../upload/<?=$giaynam['image']?>" alt="">
                                    </div>
                                    <div class="text-sp1n" style="width: 100%;height: 42.5%;">
                                        <p><?=$giaynam['name']?></p>
                                        <span class="price"><?=$giaynam['price']?></span><br>
                                          <button style="float: right;    margin-right: 1em;color: #fff;background-color: #ff5622;" class="btn ">Chi tiết</button><br>
                                    </div>
                                </a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                <?php
                    }else if(isset($_GET['aonam'])){
                ?>
                       <div class="box-1-sp">
                        
                        <?php
                            foreach ($getListSpType4 as $aonam)
                            {
                        ?>
                            <div class="sp1">
                                <a href="client.php?act=chitiet&id=<?php echo $aonam['id'];?>" style="text-decoration: none;">

                                    <div class="img-sp1n">
                                        <img  src="../upload/<?=$aonam['image']?>" alt="">
                                    </div>
                                    <div class="text-sp1n" style="width: 100%;height: 42.5%;">
                                        <p><?=$aonam['name']?></p>
                                        <span class="price"><?=$aonam['price']?></span><br>
                                          <button style="float: right;    margin-right: 1em;color: #fff;background-color: #ff5622;" class="btn ">Chi tiết</button><br>
                                    </div>
                                </a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                <?php 
                    }else{
                    
                ?>
                 <div class="box-1-sp">
                        
                        <?php
                            foreach ($thoitrangnam as $aonam)
                            {
                        ?>
                            <div class="sp1">
                                <a href="client.php?act=chitiet&id=<?php echo $aonam['id'];?>" style="text-decoration: none;">

                                    <div class="img-sp1n">
                                        <img  src="../upload/<?=$aonam['image']?>" alt="">
                                    </div>
                                    <div class="text-sp1n" style="width: 100%;height: 42.5%;">
                                        <p><?=$aonam['name']?></p>
                                        <span class="price"><?=$aonam['price']?></span><br>
                                          <button style="float: right;    margin-right: 1em;color: #fff;background-color: #ff5622;" class="btn ">Chi tiết</button><br>
                                    </div>
                                </a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                <?php 
                    }
                    
                ?>
                
            </div>
        </div>