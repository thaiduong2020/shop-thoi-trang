<!DOCTYPE html>
<html lang="en">
<?php include("head.php");?>
<body>
<?php
if(isset($_SESSION['id'])
){
    header("location: ?act=home");

}?>
<div class="limiter">

        <div class="container-login100">
        
            <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55" style="padding: 55px 85px;">
                <form class="login100-form validate-form flex-sb flex-w" method="POST" action="">
                
                    <span class="login100-form-title p-b-32" style="margin-bottom: 1em;">
						Account Login
                        
					</span>
                    <span  class="login100-form "><?php 

                        if(isset($_GET['errtxt'])) {
                        echo "
                        <div class='alert alert-danger' role='alert'>
                        tài khoản or mật khẩu không đúng</div>
                       ";
                        }

                    ?></span>
                    <span class="txt1 p-b-11">
						Username
					</span>
                    <div class="wrap-input100 validate-input m-b-36" data-validate="Username is required" style="background-color: #fff;border: 1px solid #e6e6e6;border-radius: 2px;margin-bottom: 36px;margin-top: 0.5em;">
                        <input class="input100" type="text" name="username">
                        <span class="focus-input100"></span>
                    </div>

                    <span class="txt1 p-b-11">
						Password
					</span>
                    <div class="wrap-input100 validate-input m-b-12" data-validate="Password is required" style="margin-top: 0.5em;    margin-bottom: 12px;">
                        <span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-b-48" style="padding-bottom: 48px;
    display: flex;">
                        <div class="contact100-form-checkbox" style="padding-top: 1em;">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
                        </div>

                        <div style="margin-left: 11em;">
                            <a href="#" class="txt4">
								Forgot Password?
							</a><br>
                            <a href="?act=register" class="txt4">
								creat accuont
							</a>
                        </div>
                    </div>
                    
                 

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="login">
							Login
						</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>
</html>