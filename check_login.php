<?php
session_start();
require_once("db_connection.php");
if(isset($_POST['subLogin'])){
	$userName = $_POST['userNameInput'];
	$password = $_POST['passwordInput'];
	$query = "select * from users where(username='$userName')";
	$res = mysqli_query($conn, $query);
	$numRows = mysqli_num_rows($res);
	if($numRows == 1 ){
		$row = mysqli_fetch_assoc($res);
		$password = md5($password);
		if($password === $row['password']){
			$_SESSION["login_sess"] ='1';
			$_SESSION["user_name"] = $row['username'];
			header("location:students_data.php");
		}else{
			header("location:signInFourm.php?loginerror=Incorrect User name or password");
		}
	}else{
		header("location:signInFourm.php?loginerror=Incorrect User name or password");
	}
}

?>