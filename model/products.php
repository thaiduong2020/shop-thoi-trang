<?php
    class products {
        function getList($table){
            $db = new Connect();
            $select = "SELECT * FROM $table ORDER BY id desc ";
            $result = $db->execute($select);
            return $result;           
        }

        function getList2($table){
            $db = new Connect();
            $select = "SELECT * FROM $table ORDER BY id desc LIMIT 5 ";
            $result = $db->execute($select);
            return $result;           
        }


        function getListSp($num){
            $db = new Connect();
            $select = "SELECT * FROM products WHERE idcatalog = $num ORDER BY RAND() limit 8";
            $result = $db->execute($select);
            return $result;           
        }
        function getListTpSp($num){
            $db = new Connect();
            $select = "SELECT * FROM products WHERE id_type = $num ORDER BY RAND() limit 8";
            $result = $db->execute($select);
            return $result;           
        }
        function getIdType($id_type){
            $db = new Connect();
            $select = "SELECT * FROM products WHERE id_type =  $id_type  ORDER BY RAND() limit 5";
            $result = $db->execute($select);
            return $result;           
        }

        function getListLm(){
            $db = new Connect();
            $select = "SELECT * FROM products ORDER BY id desc  limit 8";
            $result = $db->execute($select);
            return $result;           
        }
    
    
    


        //insert dữ liệu
         function insertProducts($name,$mota,$price,$count,$image,$idcatalog,$id_type)
        {
             $db = new Connect();   
            $sql = "INSERT INTO products(id,name,mota,price,count,image,idcatalog,id_type) VALUES (null,'$name','$mota','$price','$count','$image','$idcatalog','$id_type')";
            return  $db->execute($sql);
        }
        
         function insertCatalog($name)
        {
            $db = new Connect(); 
            $sql = "INSERT INTO catalog(id,name) VALUES (null,'$name')";
            return $db->execute($sql);
        }
    
    


        // phương thức sửa dữ liệu
         function UpdateProducts($id,$name,$mota,$price,$count)
        {
            $db = new Connect(); 
            $sql = "UPDATE products SET name = '$name', mota = '$mota', price = '$price',count = '$count' WHERE id = '$id'";
            return $db->execute($sql);
        } 
         function UpdateCatalog($id,$name)
        {
            $db = new Connect(); 
            $sql = "UPDATE catalog SET name = '$name' WHERE id = '$id'";
            return $db->execute($sql);
        } 
        //phương thức xóa dữ liệu
         function deleteData($id,$table)
        {
            $db = new Connect(); 
            $sql = "DELETE FROM $table WHERE id = '$id'";
            return $db->execute($sql);
    
        }
        //phân trang

        // function hienthi_sp($idcatalog,$page=1,$soluong=6){
        //     $db = new Connect(); 

        //     if($page == 1){
        //         $fr = 0;
        //         $to = 6;
        //     }else{
        //         $fr = $soluong + 1;
        //         $to = $soluong * $page;
        //     }

        //     $sql = "SELECT * FROM products WHERE idcatalog = ? ORDER BY id limit ".$form.",".$to;
        //     return $db ->execute($sql,$catalog);
        // }

        // function hienthi_sp_total($idcatalog){
        //     $db = new Connect(); 

        //     $sql = "SELECT * FROM products WHERE idcatalog = ? ";
        //     return sizeof(execute($sql,$idcatalog));
        // }

        // function phantrang($catalog,$tongso,$soluong){
        //     $sotrang = $tongso / $soluong;
        //     $sole = $tongso % $soluong;
        //     if($sole > 0){
        //         $sotrang+=1;
        //     }
        //     for ($i = 1;$i<=$sotrang;$i++){
        //         $link = "admin.php?act=sanpham&idcatalog =".$idcatalog."&page= ".$i;
        //         echo "<a href='".$link."'>.$i.</a>";
        //     }
        // }

    }
?>