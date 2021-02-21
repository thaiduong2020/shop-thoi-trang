<div class="thoitrangnu" id="nnhay">
            <div class="ttnu"> Thời trang nữ</div>
            <div class="navbar-products-nu">
            <ul>
						<li>
							<a href="?act=aonu&aonu=1&#nnhay" title="Đăng ký" class="account_a">
								<span>Áo nữ</span>
							</a>
						</li>
						<li>
							<a href="?act=quannu&quannu=1&#nnhay" title="Đăng nhập" class="account_a">
								<span>Quần nữ</span>
							</a>
						</li>
						
						<li>
							<a href="?act=giaynu&giaynu=1&#nnhay" title="Liên hệ" class="account_a">
								Giày nữ
							</a>
                        </li>
                        <li>
							<a href="?act=phukien&phukien=1&#nnhay" title="Liên hệ" class="account_a">
                            Túi sách
							</a>
                        </li>
                       
                    </ul>
            </div>
        </div>
        <div class="sp-nam">
            <div class="danhmuc-spn">
                <div class="dm-1">
                    <a href="?act=aonu&aonu=1&#nnhay">
                        <img src="../public/image/ao2.jpg" alt="">   
                        <div class="text">
                        <a style="text-decoration: none;" href="#">Áo nữ</a>  
                        </div> 
                        
                    </a>
                    
                </div>
                <div class="dm-2">
                    <a href="?act=quannu&quannu=1&#nnhay">
                        <img src="../public/image/quan1.png" alt="">
                        <div class="text">
                        <a href="#">Quần nữ</a>  
                        </div> 
                    </a>
                
                </div>
                <div class="dm-3">
                    <a href="?act=giaynu&giaynu=1&#nnhay">
                         <img src="../public/image/giay1.jpg" alt="">
                         <div class="text">
                        <a href="#">Giày nữ</a>  
                        </div> 
                    </a>
                </div>
                <div class="dm-4">
                    <a href="?act=phukien&phukien=1&#nnhay">
                        <img src="../public/image/tui1.png" alt="">
                        <div class="text">
                        <a href="#">Túi sách</a>  
                        </div> 

                    </a>
                </div>
                <div class="qc4">
                        <img src="../public/image/ts_banner_bs.jpg" alt="">
                    </div>
            </div>
           
            <div class="sanpham">
            <?php
                    if(isset($_GET['quannu'])){
                ?>
                     <div class="box-1-sp">
                
                        <?php
                            foreach ($getListSpType5 as $quannu)
                            {
                        ?>
                            <div class="sp1">
                                <a href="client.php?act=chitiet&id=<?php echo $quannu['id'];?>" style="text-decoration: none;">

                                    <div class="img-sp1n">
                                        <img  src="../upload/<?=$quannu['image']?>" alt="">
                                    </div>
                                    <div class="text-sp1n" style="width: 100%;height: 42.5%;">
                                        <p><?=$quannu['name']?></p>
                                        <span class="price"><?=$quannu['price']?></span><br>
                                          <button style="float: right;    margin-right: 1em;color: #fff;background-color: #ff5622;" class="btn ">Chi tiết</button><br>
                                    </div>
                                </a>
                            </div>
                    <?php
                    }
                    ?>
                </div>

                <?php        
                    }else if(isset($_GET['aonu'])){
                ?>

                    <div class="box-1-sp">
                        
                        <?php
                            foreach ($getListSpType6 as $aonu)
                            {
                        ?>
                            <div class="sp1">
                                <a href="client.php?act=chitiet&id=<?php echo $aonu['id'];?>" style="text-decoration: none;">

                                    <div class="img-sp1n">
                                        <img  src="../upload/<?=$aonu['image']?>" alt="">
                                    </div>
                                    <div class="text-sp1n" style="width: 100%;height: 42.5%;">
                                        <p><?=$aonu['name']?></p>
                                        <span class="price"><?=$aonu['price']?></span><br>
                                          <button style="float: right;    margin-right: 1em;color: #fff;background-color: #ff5622;" class="btn ">Chi tiết</button><br>
                                    </div>
                                </a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <?php        
                    }else if(isset($_GET['giaynu'])){
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
                    }else if(isset($_GET['phukien'])){
                ?>
                       <div class="box-1-sp">
                        
                        <?php
                            foreach ($getListSpType8 as $phukien)
                            {
                        ?>
                            <div class="sp1">
                                <a href="client.php?act=chitiet&id=<?php echo $phukien['id'];?>" style="text-decoration: none;">

                                    <div class="img-sp1n">
                                        <img  src="../upload/<?=$phukien['image']?>" alt="">
                                    </div>
                                    <div class="text-sp1n" style="width: 100%;height: 42.5%;">
                                        <p><?=$phukien['name']?></p>
                                        <span class="price"><?=$phukien['price']?></span><br>
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
                            foreach ($thoitrangnu as $aonam)
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
