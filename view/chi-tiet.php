    <?php require_once "head.php"?>
    <?php require_once("../module/topbar.php");?>
    <div class="wrap">
    <?php require_once("../module/header.php");?>
    <div class="navbarr">
        <?php require_once("../module/navbar-top.php");?>
    </div>
   <!-- <div class="row" style="    background: black;
    position: absolute;
    width: 100%; ">
   <div class="col-8" style="margin:1em 15em; background:gray">
   <table class="table col-6 text-center">
                    <thead>
                        <th>name</th>
                        <th>image</th>
                        <th>quantity</th>
                        <th>price</th>
                    </thead>
                    <tbody>
                    </tbody>
             </table>  </div>
   </div> -->
    <div class="thumbnail   mt-3" style="height: auto;width: 87%;margin: auto;background: white;    display: flex;">
    <div style="display: flex;width: 67.3%;    flex-wrap: wrap;">
        <div style="border: 1px solid #dee2e6;border-radius: .25rem;margin: 20px 23px;height: 342px;width: 342px;">
            <img id="img"  src='../upload/<?php echo $ct['image']?>' style="    width: 100%;height: 100%;">
        </div> 
            <div class="caption proId-<?php echo $ct['id']?>" style="   width: 50%;">
                <p>
                    <ul class="list-group list-group-flush text-left" style="    width: 400px;">
                        <li ><b style="    color: #323c3f;"><h4 id="productsName"><?php echo $ct['name']?></h4></b></li>
                            <span style="font-size: 14px;font-family: 'Roboto',sans-serif;">thương hiệu:
                            <span class="status_name" style="color: #ff5622;">ADIDAS</span><span> | tình trạng: <span class="status_name" style="color: #ff5622;">
                            <?php 
                            if($ct[5] == 0)
                            {
                                echo "hết hàng";
                            }else{
                                echo" còn hàng";
                            } 
                            ?>
                            </span></span></span>
                        <li style="margin-top: 1em;"><b class=" text-center"  >
                            <span style="font-size: 24px;font-weight: bold;line-height: 28px;display: inline-block;color: #ff5622;" id="price"> <?php  echo number_format($ct[4],0,",",".") . " VNĐ"?>
                            </span></b>
                        </li>
                        <hr>
                        <p style="font-size: 14px;font-family: 'Roboto',sans-serif;color: #707070; line-height: 24px;"><?php echo $ct['mota']?></p>
                    </ul>
                        <div  style="display:flex;">
                            <li style="width: 34%;"><b>
                                <label for=""> 
                                    <input style="height: 40px;border-right: none;border-left: none; border: solid 1px #d7d7d7;width: 96%;text-align: center;box-shadow: none;border-radius: 0px;font-size: 15px;" type="number" id="num" value="<?php echo $ct[5]?>">
                                </label></b>
                            </li>
                            <button style="background: #f34111; color: white;width: 65%;height: 40px;" productId="<?php echo $ct['id']?>" type="button" id="addCart" ><i class="fa fa-shopping-cart" style="font-size:24px"></i>Mua hàng</button>
                        </div>
                        <b style="font-weight: bold;color: #d7102c;">Gọi ngay (024)97567868 để có được giá tốt nhất!</b>
            </div>
            <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            <script>
                             var cart = [];

                         $(document).ready(function() {
                        $("#addCart").click(function(){
                            var proId = $(this).attr('productId');
                            var pName = $(".proId-"+proId).find("#productsName").text();
                            var img = $("#img").attr('src');
                            var price = parseInt($(".proId-"+proId).find("#price").text());
                            var obj = {
                                id: proId, 
                                productsName: pName,
                                images: img,
                                price: price,
                            }
                            
                            var flag = false;
                            for (let i = 0; i < cart.length; i++) {
                               if(cart[i].id == obj.id){
                                flag = true;
                                break;
                               }
                                
                            }
                            if(flag === false){
                                obj.quantity = 1;
                                cart.push(obj);
                            }else{
                                cart.quantity += 1;
                            }
                            debugger;
                            appendTrProducts()

                        })

                        function appendTrProducts() { // function  tạo tr đưa dữ liệu ra table  products
                        $('tbody').empty();
                            for (let i = 0; i < cart.length; i++) {
                                const tr = `<tr id="productId-${cart[i].id}"> 
                                            <td  name="name">${cart[i].productsName}</td>
                                            <td  name="quantity"><img style="width:100px;" src="${cart[i].images}" alt=""></td>
                                            <td  name="price">${cart[i].quantity}</td>
                                            <td  name="price">$${cart[i].price  * cart[i].quantity}</td>
                                        </tr>`;
                        $("tbody").append(tr); // đưa tr mới nhât nằm ở cuối table
                               }
                                
                            }
                            
                    })
            </script> -->
             
           <div style="    width: 100%;    height: 300px;    margin-top: -27em;    margin-left: 3em;" id="comment">
           <div style="background: #f6f6f6;margin-bottom: 0px;padding-left: 1px;width: 100%; display:flex">
                

                <?php
                    if(isset($_GET['mota'])){

                ?>
                        <div style="border-top: 2px solid; width: 12%;background: white;height: 50px;color: #ff5622;">
                                <h4 style="margin: 13px 0;color: #ff5622; font-size: 19px;text-align: center;" >
                                    <a style="font-weight: bold;color:#555;text-decoration: none;" href="?act=chitiet&mota=1&id=<?php echo $ct[0]?>&#comment">MÔ TẢ</a>
                                </h4>
                            </div>
                            <div style="text-align: center;width: 15%; height: 50px;color: #ff5622;">
                                <h4 style="margin: 13px 0;color: #ff5622; font-size: 19px;text-align: center;" >
                                    <a style="font-weight: bold;color:#555;text-decoration: none;" href="?act=chitiet&danhgia=1&id=<?php echo $ct[0]?>&#comment">ĐÁNH GIÁ</a>
                                </h4>
                        </div>

                <?php
                    }else if(isset($_GET['danhgia'])){
                ?>
                        <div style=" width: 12%;height: 50px;color: #ff5622;">
                            <h4 style="margin: 13px 0;color: #ff5622; font-size: 19px;text-align: center;" >
                                <a style="font-weight: bold;color:#555;text-decoration: none;" href="?act=chitiet&mota=1&id=<?php echo $ct[0]?>&#comment">MÔ TẢ</a>
                            </h4>
                        </div>
                        <div style="text-align: center;width: 15%; height: 50px;color: #ff5622;border-top: 2px solid;background: white;">
                            <h4 style="margin: 13px 0;color: #ff5622; font-size: 19px;text-align: center;" >
                                <a style="font-weight: bold;color:#555;text-decoration: none;" href="?act=chitiet&danhgia=1&id=<?php echo $ct[0]?>&#comment">ĐÁNH GIÁ</a>
                            </h4>
                        </div>        
                <?php
                    }else{
                ?>
                    <div style=" width: 12%;height: 50px;color: #ff5622;border-top: 2px solid;background: white;">
                        <h4 style="margin: 13px 0;color: #ff5622; font-size: 19px;text-align: center;" >
                            <a style="font-weight: bold;color:#555;text-decoration: none;" href="?act=chitiet&mota=1&id=<?php echo $ct[0]?>&#comment">MÔ TẢ</a>
                        </h4>
                    </div>
                    <div style="text-align: center;width: 15%; height: 50px;color: #ff5622;">
                        <h4 style="margin: 13px 0;color: #ff5622; font-size: 19px;text-align: center;" >
                            <a style="font-weight: bold;color:#555;text-decoration: none;" href="?act=chitiet&danhgia=1&id=<?php echo $ct[0]?>&#comment">ĐÁNH GIÁ</a>
                        </h4>
                    </div>
                <?php
                    }
                ?>


            </div>
            <div style="border-left: 1px solid #f6f6f6;border-bottom: 1px solid #f6f6f6;padding: 3em;border-right: 1px solid #f6f6f6;">
                    

                    <?php 
                        if(isset($_GET['mota'])){
                    ?>
                            <h5 style="color: #555;">Mô tả sản phẩm</h5 >
                            <br>
                            <b>ĐÔI NÉT VỀ SẢN PHẨM <?php echo $ct['name']?></b><br><br>
                            <p><?php echo $ct['mota']?></p>
                            <center><img style="    width: 16em;" src="../upload/<?php echo $ct['image']?>" alt=""></center>
                            <br><br>
                            <p>Lưu ý: Bảo hành 3 tháng, khách hàng giữ lại hóa đơn để được bảo hành sản phẩm .</p>
                            <p> Điều kiện: bảo hành bảo hành miễn phí nếu sản phẩm bị lỗi kỹ thuật. </p>
                            <p> Từ chối bảo hành sản phẩm đối với các trường hợp:</p>
                            <p> - Sản phẩm hết hạn bảo hành.</p>
                            <p> - Những lỗi do bảo quản không đúng cách hoặc do người sử dụng gây ra.</p>
                            <p> - Sản phẩm không có phiếu bảo hàng khi mua hàng nên khách hàng giữ lại hóa đơn khi bảo hành.</p>
                            <p>Lưu ý: Chính sách bảo hành không áp dụng cho các sản phẩm khuyến mãi, giảm giá</p>

                    <?php 
                       } else if(isset($_GET['danhgia'])){
                    ?>

                            <?php
                                if(isset($_SESSION['id'])){
                            ?>
                            

                                <form action="" method="POST">
                                        <textarea style="width: 92%;border: 1px solid gainsboro;" name="content" id="" placeholder="vui lòng nhập bình luận của bạn"></textarea>
                                        <input style="cursor: pointer;text-align: center;width: 57px;height: 3em;background: #337ab7;position: absolute;color: white;margin-left: 1em;border-radius: 5px 5px 5px 5px;" type="submit" name="sendcomment" value="gửi">
                                        <input type="hidden" class="form-control"  name="id_products" value="<?php echo $_GET['id']?>">
                                        <input type="hidden" class="form-control" name="id_user" value="<?php echo $_SESSION['id']?>">
                                        <input type="hidden" class="form-control" name="name_user" value="<?php echo $_SESSION['name']?>">
                                </form>

                                    <?php
                                        $getCm = $comment->getListComment($_GET['id']);
                                        foreach($getCm as $getCm){
                                    ?>

                                    <div style="display: flex;">
                                        <i class='fas fa-user-circle' style='font-size: 32px;margin-top: 0.3em;color: #555;' ></i>
                                        <div style="margin-left: 1em;">
                                            <b style="color: #555;"><?php echo $getCm['name_user']?></b><br>
                                            <i><?php echo $getCm['comment_day']?></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p><?php echo $getCm['content']?></p>
                                    </div>

                                    <?php
                                        }
                                    ?>
                            <?php
                                }else{
                                    echo "<h2>bạn phải <a style='font-size: 1em;' href='?act=login'>đăng nhập</a> để bình luận !</h2>";
                                }
                            ?>

                               <?php
                                if(isset($_POST['sendcomment'])){
                                    $content = $_POST['content'];
                                    $id_products = $_POST['id_products'];
                                    $id_user = $_POST['id_user'];
                                    $name_user = $_POST['name_user'];
                                     if( $comment->insertComment($content,$id_products,$id_user,$name_user)){
                                    }else{
                                        header('location: ?act');
                                    }
                                }
                               ?>     


                    <?php
                        }else{
                    ?>
                       
                       <h5 style="color: #555;">Mô tả sản phẩm</h5 >
                            <br>
                            <b>ĐÔI NÉT VỀ SẢN PHẨM <?php echo $ct['name']?></b><br><br>
                            <p><?php echo $ct['mota']?></p>
                            <center><img style="    width: 16em;" src="../upload/<?php echo $ct['image']?>" alt=""></center>
                            <br><br>
                            <p>Lưu ý: Bảo hành 3 tháng, khách hàng giữ lại hóa đơn để được bảo hành sản phẩm .</p>
                            <p> Điều kiện: bảo hành bảo hành miễn phí nếu sản phẩm bị lỗi kỹ thuật. </p>
                            <p> Từ chối bảo hành sản phẩm đối với các trường hợp:</p>
                            <p> - Sản phẩm hết hạn bảo hành.</p>
                            <p> - Những lỗi do bảo quản không đúng cách hoặc do người sử dụng gây ra.</p>
                            <p> - Sản phẩm không có phiếu bảo hàng khi mua hàng nên khách hàng giữ lại hóa đơn khi bảo hành.</p>
                            <p>Lưu ý: Chính sách bảo hành không áp dụng cho các sản phẩm khuyến mãi, giảm giá</p> 
                    <?php
                        }
                    ?>

</div>

           </div>
        </div>


        <div style="width: 32%; padding: 1em 3em">
        
         <div style="display:flex ; margin-bottom: -28px;">
           <img style="        width: 69px;height: 66px; padding: 0.9em;" src="../public/image/xe.png" alt="">
           <div style="padding: 11px 9px;">
            <b style="    color: #555;">Giao hàng nhanh chóng</b>
            <p style="color: #707070;">chỉ trong vòng 24h đồng hồ</p>
           </div>
         </div >
         <hr>
         <div style="display:flex;margin-bottom: -28px;">
            <img style="        width: 69px;height: 66px; padding: 0.9em;" src="../public/image/bv.png" alt="">
            <div style="padding: 11px 9px;">
            <b style="    color: #555;">Sản phẩm chính hãng</b>
            <p style="color: #707070;">Sản phẩm nhập khẩu 100%</p>
           </div>
         </div>
         <hr>
         <div style="display:flex;margin-bottom: -28px;">
            <img style="        width: 69px;height: 66px; padding: 0.9em;" src="../public/image/vo.png" alt="">
            <div style="padding: 11px 9px;">
            <b style="    color: #555;">Đổi trả cực kì dễ dàng</b>
            <p style="color: #707070;">Đổi trả trong 2 ngày đầu tiên</p>
           </div>
         </div>
         <hr>
         <div style="display:flex;margin-bottom: -28px;">
            <img style="        width: 69px;height: 66px; padding: 0.9em;" src="../public/image/do.png" alt="">
            <div style="padding: 11px 9px;">
            <b style="    color: #555;">Mua hàng tiết kiệm</b>
            <p style="color: #707070;">Tiết kiệm hơn từ 10% - 30%</p>
           </div>
         </div>
         <hr>
         <div style="display:flex;margin-bottom: -28px;">
            <img style="        width: 69px;height: 66px; padding: 0.9em;" src="../public/image/h.png" alt="">
            <div style="padding: 11px 9px;">
            <b style="    color: #555;">Hotline mua hàng:</b>
            <p style="color: #ff5622;font-family: 'Roboto',sans-serif;font-size: 16px;font-weight: bold;">(024)98657868</p>
           </div>
         </div>
            <h4 style="    font-weight: bold;
    text-transform: none;
    margin-top: 2em;
    color: #ff5622;">Có thể bạn thích</h4 style="    font-weight: bold;
    text-transform: none;
    margin-top: 2em;
    color: #ff5622;">                    
         <div style="padding: 1em 0.7em;
    width: 120%;">
             
         <?php
                    foreach ($pr as $products)
                    {
                      ?>
                  <div style="margin-bottom: -16px;">
                  <a  style="display: flex;text-decoration: none;" href="client.php?act=chitiet&id=<?php echo $products['id'];?>">

                        <div >
                            <img style="width: 69px; padding-top:1.5em;"  src="../upload/<?=$products['image']?>" alt="">
                        </div>
                        <div class="text-sp1n" style="width: 100%;height: 42.5%;">
                            <p><?=$products['name']?></p>
                            <p class="price"><?php  echo number_format($ct[4],0,",",".") . " VNĐ"?></p>
                        </div>
                  </a>
                    </div>
                  <hr>

             <?php
            }
                    ?>
             
         </div>
         
        </div>

    </div>
    <?php require_once("../module/hang-cung-loai.php");?>

    <?php require_once("../module/footer.php");?>
    </div>
