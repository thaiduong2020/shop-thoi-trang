<div class="phukienhot" id="nhay3" style="margin-bottom: 1.3em;">
            <div class="pkh">Phụ kiện HOT</div>
            <div class="navbar-products-pkh">
            <ul>
						<li>
							<a href="?act=tuisach&tuisach=1&#nhay3" title="Đăng ký" class="account_a">
								<span>Túi sách</span>
							</a>
						</li>
						<li>
							<a href="?act=dongho2&dongho2=1&#nhay3" title="Đăng nhập" class="account_a">
								<span>Đồng hồ</span>
							</a>
						</li>
						
						<li>
							<a href="?act=giay-nam&giay-nam=1&#nhay3" title="Liên hệ" class="account_a">
								Giày nam
							</a>
                        </li>
                        <li>
							<a href="?act=giay-nu&giay-nu=1&#nhay3" title="Liên hệ" class="account_a">
								Giày nữ
							</a>
                        </li>
                        <li>
							<a href="?act=all&#nhay3" title="Liên hệ" class="account_a">
								Xem tất cả
							</a>
                        </li>
                       
                    </ul>
            </div>
        </div>
        <div class="sp-nam">
            <div class="danhmuc-spn">
                <div class="dm-1">
                    <a href="?act=tuisach&tuisach=1&#nhay3">
                        <img src="../public/image/tui1.png" alt="">   
                        <div class="text">
                        <a style="text-decoration: none;" href="#">Túi sách</a>  
                        </div> 
                        
                    </a>
                    
                </div>
                <div class="dm-2">
                    <a href="?act=dongho2&dongho2=1&#nhay3">
                        <img src="../public/image/12345.png" alt="">
                        <div class="text">
                        <a href="#">Đồng hồ</a>  
                        </div> 
                    </a>
                
                </div>
                <div class="dm-3">
                    <a href="?act=giay-nam&giay-nam=1&#nhay3">
                         <img src="../public/image/1234.png" alt="">
                         <div class="text">
                        <a href="#">Giày nam</a>  
                        </div> 
                    </a>
                </div>
                <div class="dm-4">
                    <a href="?act=giay-nu&giay-nu=1&#nhay3">
                        <img src="../public/image/giay1.jpg" alt="">
                        <div class="text">
                        <a href="#">giày nữ</a>  
                        </div> 

                    </a>
                </div>
                <div class="qc5">
                        <img src="../public/image/ts_banner_hot.jpg" alt="">
                    </div>
            </div>
           
            <div class="sanpham">
            <?php
                    if(isset($_GET['tuisach'])){
                ?>
                     <div class="box-1-sp">
                
                        <?php
                            foreach ($getListSpType8 as $tuisach )
                            {
                        ?>
                            <div class="sp1">
                                <a href="client.php?act=chitiet&id=<?php echo $tuisach['id'];?>" style="text-decoration: none;">

                                    <div class="img-sp1n">
                                        <img  src="../upload/<?=$tuisach['image']?>" alt="">
                                    </div>
                                    <div class="text-sp1n" style="width: 100%;height: 42.5%;">
                                        <p><?=$tuisach['name']?></p>
                                        <span class="price"><?=$tuisach['price']?></span><br>
                                        <button style="float: right;    margin-right: 1em;color: #fff;background-color: #ff5622;" class="btn ">Chi tiết</button><br>
                                    </div>
                                    
                                </a>
                                
                            </div>
                    <?php
                    }
                    ?>
                </div>

                <?php        
                    }else if(isset($_GET['dongho2'])){
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
                    }else if(isset($_GET['giay-nu'])){
                ?>

                    <div class="box-1-sp">
                        
                        <?php
                            foreach ($getListSpType7 as $giaynu)
                            {
                        ?>
                            <div class="sp1">
                                <a href="client.php?act=chitiet&id=<?php echo $giaynu['id'];?>" style="text-decoration: none;">

                                    <div class="img-sp1n">
                                        <img  src="../upload/<?=$giaynu['image']?>" alt="">
                                    </div>
                                    <div class="text-sp1n" style="width: 100%;height: 42.5%;">
                                        <p><?=$giaynu['name']?></p>
                                        <span class="price"><?=$giaynu['price']?></span><br>
                                        <button style="float: right;    margin-right: 1em;color: #fff;background-color: #ff5622;" class="btn ">Chi tiết</button><br>
                                    </div>
                                    
                                </a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                <?php
                    }else if(isset($_GET['giay-nam'])){
                ?>
                       <div class="box-1-sp">
                        
                        <?php
                            foreach ($getListSpType3 as $giay_nam)
                            {
                        ?>
                            <div class="sp1">
                                <a href="client.php?act=chitiet&id=<?php echo $giay_nam['id'];?>" style="text-decoration: none;">

                                    <div class="img-sp1n">
                                        <img  src="../upload/<?=$giay_nam['image']?>" alt="">
                                    </div>
                                    <div class="text-sp1n" style="width: 100%;height: 42.5%;">
                                        <p><?=$giay_nam['name']?></p>
                                        <span class="price"><?=$giay_nam['price']?></span><br>
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
                            foreach ($phukienhot as $aonam)
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