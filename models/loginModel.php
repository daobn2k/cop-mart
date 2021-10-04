<?php 
	/**
	 * 
	 */
	class Login
	{
		public $result;
		public $count;
		public function LoginValidation($username,$password)
		{
			include_once './database/db_connect.php';
			$result = mysqli_query($conn,"SELECT * FROM account WHERE username='" . $username . "' and password = '". $password."'");
			$count  = mysqli_num_rows($result);
			return $count;
			mysqli_close($conn);
		}
		public function UserByUsername($username){
			include './database/db_connect.php';
			$result = mysqli_query($conn,"SELECT * FROM account WHERE username='" . $username . "'");
			$row = mysqli_fetch_array($result);
			$fullname =  echo $row['fullname'];
			return $fullname;
			mysqli_close($conn);
		}
	}
	//model login
?>