<?php
    // include 'noi.php';
    include '../model/products.php';
    include '../model/user.php';
    include '../model/connect.php';
    include '../view/admin/head.php';
    $sp = new Connect();
    $sanpham = new products();
    $nd = new user();
    $products = "products";
    $catalog = "catalog";
    $type_products = "type_products";
    $nguoidung = "users";
    $products = $sanpham->getList($products);
    $catalog = $sanpham->getList($catalog);
    $type_products = $sanpham->getList($type_products);
    $nguoidung = $nd->getList( $nguoidung);
    
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'home':
                // $table = "products";
                // $data = $sanpham->getAllData($table); 
                require '../view/admin/home.php';
                break;

            case 'add_products':
                if(isset($_POST['add_sp'])){
                    $name = $_POST['name'];
                    $mota = $_POST['mota'];
                    $price = $_POST['price'];
                    $count = $_POST['count'];
                    $promotion = $_POST['promotion'];
                    $idcatalog = $_POST['idcatalog'];
                    $id_type = $_POST['id_type'];
                    
                    if($_FILES['image']['name']!=""){
                        $image = basename($_FILES['image']['name']);
                        $target_file = "../upload/".$image;
                        move_uploaded_file($_FILES['image']['tmp_name'],$target_file);
                    }

                   if( $sanpham->insertProducts($name,$mota,$price,$count,$image,$idcatalog,$id_type)){
                        $success = "<div class='alert alert-success ' role='alert'>
                        Thêm mới thành công</div>"; 
                    }else{
                        $error = "<div class='alert alert-danger' role='alert'>
                        Thêm mới thất bại !</div>"; 
                    }
                }
                    require_once '../view/admin/products/add.php';
                    break;    
                 

            case 'update' :
                if(isset($_GET['id'])){
                    //lấy id
                    $id = $_GET['id'];
                    $table = "products";
                    $dataId = $sp->getOne($table,$id);
                   
                    $id = $dataId['id'];
                    $name = $dataId['name'];
                    $mota = $dataId['mota'];
                    $price = $dataId['price'];
                    $count = $dataId['count'];
                    // post
                    if(isset($_POST['update_products'])){
                        $name = $_POST['name'];
                        $mota = $_POST['mota'];
                        $price = $_POST['price'];
                        $count = $_POST['count'];
                        if($sanpham->UpdateProducts($id,$name,$mota,$price,$count)){
                            $success = "<div class='alert alert-success ' role='alert'>
                            cập nhật thành công</div>"; 
                        }else{
                            $error = "<div class='alert alert-danger' role='alert'>
                            cập nhật thất bại !</div>"; 
                        }
                    }
                }
                require_once '../view/admin/products/update.php';
                break; 
            case 'delete' :{
                if($_GET['id']){
                    $id = $_GET['id'];
                    $table = "products";

                    if($sanpham->deleteData($id,$table)){
                        header('location: admin.php?act=sanpham');
                    }
                }
            }
                require '../view/admin/update.php';
                break;
            case 'sanpham':

                // $idcatalog = $_GET['idcatalog'];
                // $soluong = 6;
                // $tongsoluong = $sanpham->hienthi_sp_total($idcatalog);
                // $phantrang =$sanpham-> phantrang($idcatalog,$tongsoluong,$soluongsp) ;
                
                require '../view/admin/products/sanpham.php';
                break;
            case 'loaisanpham':
                require '../view/admin/catalog/loai-san-pham.php';
                break;
            case 'nguoidung':
                require '../view/admin/user/nguoidung.php';
                break;
            case 'add_catalog':{
                    if(isset($_POST['add_catalog'])){
                        $name = $_POST['name'];
                        $sanpham->insertCatalog($name);
                        if($sanpham){
                            $success = "<div class='alert alert-success ' role='alert'>
                            thêm mới thành công</div>"; 
                        }else{
                            $error = "<div class='alert alert-danger' role='alert'>
                            thêm mới thất bại !</div>"; 
                        }
    
                    }
                    require_once '../view/admin/catalog/add.php';
                    break;    
                }
            case 'update_catalog' :{
                    if(isset($_GET['id'])){
                        //lấy id
                        $id = $_GET['id'];
                        $table = "catalog";
                        $dataId = $sp->getOne($table,$id);
                       
                        $id = $dataId['id'];
                        $name = $dataId['name'];
                        // post
                        if(isset($_POST['update_data'])){
                            $name = $_POST['name'];
                            if($sanpham->UpdateCatalog($id,$name)){
                                $success = "<div class='alert alert-success ' role='alert'>
                                cập nhật thành công</div>"; 
                            }else{
                                $error = "<div class='alert alert-danger' role='alert'>
                                cập nhật thất bại !</div>"; 
                            }
                        }
        
                    }
                    require_once '../view/admin/catalog/update.php';
                    break; 
                }
            case 'delete_catalog' :{
                    if($_GET['id']){
                        $id = $_GET['id'];
                        $table = "catalog";
        
                        if($sanpham->deleteData($id,$table)){
                            header('location: admin.php?act=loaisanpham');
                        }
                    }
                }
        }
        
    }else {
        require '../view/admin/home.php';
    }

?>