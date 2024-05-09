<?php
include 'config.php';
    class InsertData{
      
        private $conn;

        public function __construct($connection){
           
            $this->conn = $connection;
        }

        public function getData(){
            $id =$_GET['id'];
            $sql ="DELETE from infinix where userid=$id";
            $conn = $this->conn;
            echo "<script>window.alert('User Data Has Been Deleted');</script>";
            $result = $conn->query($sql);
            <exit>
        }
    }

