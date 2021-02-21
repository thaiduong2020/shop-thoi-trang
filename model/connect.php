<?php
    class Connect{
        
       

        private $conn = NULL;
        private $result = NULL;

        public function connect()
        {
             $servername = "localhost";
             $username = "root";
             $password = ""; 
             $dbname = 'lua_store';

            $this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if(!$this->conn){
                echo "kết nối thất bại";
                exit();
            }
            else{
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
            }    
        return $this->conn;

        }
        
        // thực thi câu lệnh truy vấn
        public function execute($sql)
        {
            $this->result = $this->conn->query($sql);
            return $this->result;
        }  
        public function execute_one($sql)
        {
            $this->result = $this->conn->query($sql);
            $row =  $this->result->fetch(PDO::FETCH_ASSOC);
            return $row;
        }  
        function getList($table){
            $db = new Connect();
            $select = "SELECT * FROM $table ORDER BY id desc";
            $result = $db->execute($select);
            return $result;           
        }
      

        // lấy dữ liệu của 1 cột
        public function getOne($table,$id){
            $sql = "SELECT * FROM $table WHERE id = ".$id;
            $this->result = $this->conn->query($sql);
            $this->result =  $this->result->fetch();
            return $this->result;    
        }
     }
?>