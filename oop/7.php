<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
            <th>User type</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        if (isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $upass = $_POST['upass'];
    $utype = $_POST['utype'];

    include('config.php');

    class InsertData{
        private $username;
        private $password;
        private $usertype;
        private $conn;

        public function __construct($uname, $upass, $utype, $connection){
            $this->username = $uname;
            $this->password = $upass;
            $this->usertype = $utype;
            $this->conn = $connection;
        }
        public function getUname(){
            return $this-> username;
        }
        public function getUpass(){
            return $this-> password;
        }
        public function getUtype(){
            return $this-> usertype;
        }

        public function getData(){
            $sql = "INSERT INTO infinix(username, userpass, usertype) VALUES ('$this->username', '$this->password', '$this->usertype')";
            $con = $this->conn;
            echo "<script>window.alert('User Data Has Been Saved');</script>";
            $result = $con->query($sql);
        }
    }

    $InsertData1 = new InsertData($uname, $upass, $utype, $conn);
    $InsertData1->getData();
}
        include('config.php');
        

        $id = $_GET['id'] ?? null;
        if($id !== null) {
            $sql = "DELETE FROM infinix WHERE userid=$id";
            $result = $conn->query($sql);
            header('location: delete.php');
            exit;
        }
        

        $sql = "SELECT * FROM infinix";
        $result = $conn->query($sql);
        $x = 0;
        while($row = $result->fetch_assoc()) {
            $x++;
        ?>
            <tr>
                <td><?php echo $x; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['userpass']; ?></td>
                <td><?php echo $row['usertype']; ?></td>
                <td><a href="delete.php?id=<?php echo $row['userid']; ?>" class="btn btn-warning">Delete</a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>