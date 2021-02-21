<?php
    require_once 'connect.php';
    class Catalog {
        var $id    = null;
        var $name  = null;
        var $image = null;
        var $price = null;
        var $mota = null;
        
        function __construct(){ 
            if(func_num_args() == 5){
                $this->id = func_get_arg(0);
                $this->name = func_get_arg(1);
                $this->image = func_get_arg(2);
                $this->mota = func_get_arg(3);
                $this->price = func_get_arg(4);
            }
        }

        function getList(){
            $db = new Connect();
            $select = "SELECT * FROM products ORDER BY id desc";
            $result = $db->execute($select);
            return $result;           
        }

        function showOne($id){
            $sql = "SELECT * FROM products WHERE id = ".$id;
            $kq = parent::getOne($sql);
            return $kq;           
        }


        // thêm mới sản phẩm
        // ,image,price,mota
        // ,'$this->image','$this->price','$this->mota'
        function insert(){
            $db = new Connect();
            $query = "INSERT INTO products (name,image,mota,price) VALUES ('".$this->name."','".$this->image."','".$this->mota."','".$this->price."')";
            $db->execute($query);
        }
    }
 
?>