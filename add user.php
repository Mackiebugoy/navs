<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>ADD USER FORM</h3>
	<form method="post" action="">
	<label>User Name</label>
	<br>
	<input type="text" name="uname">
	<br>
	<label>Password</label>
	<br>
	<input type="password" name="upass">
	<br>
	<label>Type</label>
	<br>
	<select name="utype">
		<option></option>
		<option value="Dummy">Dummy</option>
		<option value="Admin">Admin</option>

		</select>
		<br> 
		<input type="submit" name="adduser">
	</form>

</body>
</html>

<?php

	if (isset($_POST['adduser'])){
		$uname = $_POST['uname'];
		$upass = $_POST['upass'];
		$utype = $_POST['utype'];

		 include('we d.php');

		

		class InsertData{
 		private $uname;
 		private $upass;
 		private $utype;
 		private $connection;

 		public function __construct($uname, $upass, $utype,$connection){
 			$this -> username = $uname;
 			$this -> userpass = $upass;
 			$this -> usertype = $utype;
 			$this -> conn = $connection;

}
	public function getuname(){
		return $this->username;
	}
	public function getupass(){
		return $this->userpass;
	}
	public function getutype(){
		return $this->usertype;
	}
	public function getdata(){

	$sql = "INSERT into userates(username,userpass,usertype) values ('$this->username','$this->userpass','$this->usertype')";
    $con = $this->conn;
    echo "<script>window.alert('User Data Has Been Saved');</script>";
    $result = $con -> query($sql);
		
	}
    }
    $insertdata = new Insertdata ($uname,$upass,$utype,$conn);
	$insertdata -> getdata();

	}

?>
