<?php
    class user{

        function getList($table){
            $db = new Connect();
            $select = "SELECT * FROM $table ORDER BY id desc ";
            $result = $db->execute($select);
            return $result;           
        }

        function insertUser($name,$username,$password,$birtday,$email,$phone,$address,$gender)
        {
             $db = new Connect();   
            $sql = "INSERT INTO users(id,name,username,password,birtday,email,phone,address,gender) VALUES (null,'$name','$username','$password','$birtday','$email','$phone','$address','$gender')";
            return  $db->execute($sql);
        }
        function getListUser($username,$password){
            $db = new Connect();
            $select = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
            $result = $db->execute_one($select);
            return $result;           
        }
        function getIdUser($id){
            $db = new Connect();
            $select = "SELECT * FROM users WHERE id = '$id'  ";
            $result = $db->execute_one($select);
            return $result;           
        }
        function updateUser($id,$name,$username,$password,$birtday,$email,$phone,$address )
        {
            $db = new Connect(); 
            $sql = "UPDATE users SET name = '$name', username = '$username', password = '$password',birtday = '$birtday',birtday = '$birtday'
            ,phone = '$phone',address = '$address' WHERE id = '$id'";
            return $db->execute($sql);
        } 
    }

?>