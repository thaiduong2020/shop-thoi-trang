<?php
    class Comment{
        function insertComment($content,$id_products,$id_user,$name_user)
        {
             $db = new Connect();   
            $sql = "INSERT INTO comment(id,content,id_products,id_user,name_user) VALUES (null,'$content','$id_products','$id_user','$name_user')";
            return  $db->execute($sql);
        }
        function getListComment($id_products){
            $db = new Connect();
            $select = "SELECT * FROM comment WHERE id_products = $id_products ORDER BY id  desc   limit 8";
            $result = $db->execute($select);
            return $result;           
        }
        function countCm(){
            $db = new Connect();
            $select = "SELECT COUNT(*)
             FROM comment ";
            $result = $db->execute_one($select);
            return $result;    
        }
        function UpdateComment($id,$content)
        {
            $db = new Connect(); 
            $sql = "UPDATE comment SET content = '$content' WHERE id = '$id'";
            return $db->execute($sql);
        } 
    }
?>