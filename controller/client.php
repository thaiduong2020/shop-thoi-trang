<?php
session_start();
    include '../model/products.php';
    include '../model/connect.php';
    include '../model/user.php';
    include '../model/comment.php';
    $sp = new Connect();
    $sanpham = new products();
    $user = new user();
    $comment = new Comment();
    $products = "products";
    $catalog = "catalog";
    $hangcungloai = $sanpham->getIdType('id_type');

    //type_products
        $type_products = "type_products";
        $getListSpType = $sanpham->getListTpSp(1);
        $getListSpType2 = $sanpham->getListTpSp(5);
        $getListSpType3 = $sanpham->getListTpSp(6);
        $getListSpType4 = $sanpham->getListTpSp(4);
        $getListSpType5 = $sanpham->getListTpSp(2);
        $getListSpType6 = $sanpham->getListTpSp(3);
        $getListSpType7 = $sanpham->getListTpSp(8);
        $getListSpType8 = $sanpham->getListTpSp(7);
    //end type_products
    $products = $sanpham->getListSp(2);
    $thoitrangnam = $sanpham->getListSp(2);
    $thoitrangnu = $sanpham->getListSp(3);
    $phukienhot = $sanpham->getListSp(4);
    $catalog = $sanpham->getList($catalog);
    $pr = $sanpham->getList2('products');
    $type_products = $sanpham->getList($type_products);
    
?>

<?php
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'home':
                require '../view/home.php';
                break;
            case 'hotdeal':
                require '../view/hotdeal.php';
                break;
            case 'newproducts':
                require '../view/newproducts.php';
                break;
            case 'banchay':
                require '../view/banchay.php';
                break;
            case 'tintuc':
                require '../view/tintuc.php';
                break;
            case 'lienhe':
                require '../view/lienhe.php';
                break;
            case 'giohang':
                require '../view/giohang.php';
                break;
            case 'chitiet':
                $prd = "products";
                    $id = $_GET['id'];
                    $ct = $sp->getOne($prd,$id);

                require '../view/chi-tiet.php';
                break;
            case 'hangcungloai':
                

                require '../module/hang-cung-loai.php';
                break;
            case 'comment':
                if(isset($_POST['sendcomment'])){
                    $content = $_POST['content'];
                    $id_products = $_POST['id_products'];
                    $id_user = $_POST['id_user'];
                    $name_user = $_POST['name_user'];
                     if( $comment->insertComment($content,$id_products,$id_user,$name_user)){
                         
                        $success = "<div class='alert alert-success ' role='alert'>
                        Thêm mới thành công</div>"; 
                    }else{
                        $error = "<div class='alert alert-danger' role='alert'>
                        Thêm mới thất bại !</div>"; 
                    }
                }
                break;        
            case 'login':
                if(isset($_POST['login'])){
                    $username = $_POST['username'];
                    $password =$_POST['password'];
                    $lg = $user->getListUser($username,$password);
                    if(is_array($lg)){
                        
                        $_SESSION['id'] = $lg['id'];
                        $_SESSION['name'] = $lg['name'];
                        $_SESSION['username'] = $lg['username'];

                        header('location: client.php?act=home');

                     }else{
                         header('location: client.php?act=login&errtxt=1');
                     }
                }
                require '../view/login.php';
                break;
            case 'logout':
                unset($_SESSION['id']);
                header('location: client.php?act=home');
            break;    
            case 'infoUser':
                if(isset($_SESSION['id'])){
                    $id = $_SESSION['id'];
                    $info =  $user->getIdUser($id);
                }
                if(isset($_POST['update'])){
                    $id = $_POST['id'];
                        $name = $_POST['name'];
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $birtday = $_POST['birtday'];
                        $phone = $_POST['phone'];
                        $email = $_POST['email'];
                        $address = $_POST['address'];
                        $lg= $user->updateUser($id,$name,$username,$password,$birtday,$email,$phone,$address);
                        $_SESSION['id'] = $id;
                        $_SESSION['name'] =$name;
                        $_SESSION['username'] =$username;
                            
                            header('location: client.php?act=home');
    
                        
                        
                }
                require '../view/info-user.php';
                break;    
            case 'register':
                $abc = '';
                    if(isset($_POST["add_user"])){
                        if( $_POST["name"] != '' &&  $_POST['username'] != '' && $_POST['password'] != '' && $_POST['birtday'] 
                        != '' && $_POST['phone'] != '' && $_POST['email'] != '' && $_POST['address'] != ''){
                        $name = $_POST['name'];
                        $username = $_POST['username'];
                        $password =md5($_POST['password']);
                        $birtday = $_POST['birtday'];
                        $phone = $_POST['phone'];
                        $email = $_POST['email'];
                        $address = $_POST['address'];
                        $gender = $_POST['gender'];
                        $user->insertUser($name,$username,$password,$birtday,$email,$phone,$address,$gender );
                        $abc="<div class='alert alert-success' role='alert'>
                        Đăng ký thành công</div>
                        <span class='login100-form p-b-32'>
                                    <a href='client.php?act=login'><h5>Đến trang đăng nhập</h5></a>
                                </span>";
                    }else{
                        $abc = "<div class='alert alert-danger' role='alert'>
                        Vui lòng điền đầy đủ thông tin</div>"; 
                    }
                }

                require '../view/register.php';
                break;  
            default:
            require '../view/home.php';
                break;
        }
    }else {
        require '../view/home.php';
    }

?>