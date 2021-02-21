<!DOCTYPE html>
<html lang="en">
<head>
        <title>Lúa Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    
        <script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
  

    </style>
    </head>
<body style="margin: 0;">
<div  style="    height: 1158px;background-color: #ebebeb;padding-top: 1em;">
        <div  style="    margin: 0 auto;width: 50%;">
            <div  style="width: 100%;padding: 5em 10em;background: #fff;border-radius: 10px;">
                    <span >
                        Cập nhật thông tin
					</span>
                <form  method="POST" action="">
                <input type="hidden" name="id" value="<?=$info['id']?>">
                    <span style="text-align: center;"  ><?php 

                        if(isset($abc)) {
                        echo $abc;
                      
                        }
                    ?></span>
                    <span style="color: black;font-size: 13px;margin-bottom: 5em;line-height: 1.4;text-transform: uppercase;" class="txt1 p-b-11">
						Họ và tên
					</span>  <div  data-validate="Fullname is required" style="margin-bottom: 36px;">
                        <input style="height: 41px;border: 1px solid grey;box-shadow: 0px 0px 5px;width: 100%;" class="input100" type="text" value="<?=$info['name']?>" name="name">
                        <span ></span>
                    </div>

                    <span style="color: black;font-size: 13px;margin-bottom: 5em;line-height: 1.4;text-transform: uppercase;" class="txt1 p-b-11">
						Tên đăng nhập
					</span>
                    <div  data-validate="Username is required" style="margin-bottom: 36px;">
                        <span >
						</span>
                        <input style="height: 41px;border: 1px solid grey;box-shadow: 0px 0px 5px;width: 100%;" class="input100" type="text" value="<?=$info['username']?>" name="username">
                        <span ></span>
                    </div>
                   
                    <span style="color: black;font-size: 13px;margin-bottom: 5em;line-height: 1.4;text-transform: uppercase;" class="txt1 p-b-11">
						Mật khẩu
					</span>
                    <div  data-validate="Password is required" style="margin-bottom: 36px;">
                        <span >
							<i ></i>
						</span>
                        <input style="height: 41px;border: 1px solid grey;box-shadow: 0px 0px 5px;width: 100%;" class="input100" type="password" value="<?=$info['password']?>" name="password">
                        <span ></span>
                    </div>
                    <!-- <span style="color: black;font-size: 13px;margin-bottom: 5em;line-height: 1.4;text-transform: uppercase;" class="txt1 p-b-11">
						Re-Password
					</span>
                    <div class="wrap-input100 validate-input m-b-12" data-validate="	Re-Password is required" style="margin-bottom: 36px;">
                        <span class="btn-show-pass">
							<i ></i>
						</span>
                        <input style="height: 41px;border: 1px solid grey;box-shadow: 0px 0px 5px;width: 100%;" class="input100" type="password" name="repassword">
                        <span ></span>
                    </div> -->
                    <span style="color: black;font-size: 13px;margin-bottom: 5em;line-height: 1.4;text-transform: uppercase;" class="txt1 p-b-11">
						Ngày sinh
					</span>
                    <div  data-validate="Number phone is required" style="margin-bottom: 36px;">
                        <span >
						</span>
                        <input style="height: 41px;border: 1px solid grey;box-shadow: 0px 0px 5px;width: 100%;" class="input100" type="date" value="<?=$info['birtday']?>" name="birtday">
                        <span ></span>
                    </div>
                   

                    <span style="color: black;font-size: 13px;margin-bottom: 5em;line-height: 1.4;text-transform: uppercase;" class="txt1 p-b-11">
						Email
					</span>
                    <div  data-validate="Email is required" style="margin-bottom: 36px;">
                        <span >
						</span>
                        <input style="height: 41px;border: 1px solid grey;box-shadow: 0px 0px 5px;width: 100%;" class="input100" type="email" value="<?=$info['email']?>" name="email">
                        <span ></span>
                    </div>

                  
                    <span style="color: black;font-size: 13px;margin-bottom: 5em;line-height: 1.4;text-transform: uppercase;" class="txt1 p-b-11">
						Số điện thoại
					</span>
                    <div  data-validate="Address is required" >
                        <span >
						</span>
                        <input style="height: 41px;border: 1px solid grey;box-shadow: 0px 0px 5px;width: 100%;" class="input100" type="number" value="<?=$info['phone']?>" name="phone">
                        <span ></span>
                    </div>   
                    

                   
                   

                    <span style="color: black;font-size: 13px;margin-bottom: 5em;line-height: 1.4;text-transform: uppercase;" class="txt1 p-b-11">
						Địa chỉ
					</span>
                    <div class="wrap-input100 validate-input m-b-12" data-validate="Address is required" >
                        <span class="btn-show-pass">
						</span>
                        <input style="height: 41px;border: 1px solid grey;box-shadow: 0px 0px 5px;width: 100%;" class="input100" type="text" value="<?=$info['address']?>" name="address">
                        <span class="focus-input100"></span>
                    </div>    
               

                    <!-- <div class="" data-validate="Address is required">
                      
                        <input style="height: 41px;border: 1px solid grey;box-shadow: 0px 0px 5px;width: 100%;" class="input100" type="hidden" value="Khách hàng" name="vaitro">
                        <span class="focus-input100"></span>
                    </div>     -->
                    <div class=" w-full p-b-48">
                        <div class="contact100-form-checkbox">
                            <input style="height: 41px;border: 1px solid grey;" class="input-checkbox100" value="Nam" id="ckb1" type="checkbox"value="<?=$info['gender']?>" name="gender">
                            <label style="color: black;" class="label-checkbox100" for="ckb1">
								Nam
							</label>
                        </div>
                        <div class=" w-full p-b-48">
                        <div class="contact100-form-checkbox">
                            <input style="height: 41px;border: 1px solid grey;" class="input-checkbox100" value="Nữ"  id="ckb2" type="checkbox"value="<?=$info['gender']?>" name="gender">
                            <label style="color: black;" class="label-checkbox100" for="ckb2">
							  Nữ
						
							</label>
                        </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="update">
							Cập nhật
						</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    
</div>
</div>
    </div>
</body>
</html>



