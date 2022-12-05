<?php
session_start(); //start session
if(isset($_POST['login'])) { //check post variable
	include "connection_220088.php"; //call connection
	
	//make query based on username
	$query="SELECT * FROM users_220088 WHERE username_220088='$_POST[username_220088]'";
	
	//run query 
	$login=mysqli_query($db_connection,$query);
	
	if(mysqli_num_rows($login) > 0) {
		$user=mysqli_fetch_assoc($login);
		if(password_verify($_POST['password_220088'], $user['password_220088'])) {
			
		$_SESSION['login']=TRUE;
		$_SESSION['userid']=$user['userid_220088'];
		$_SESSION['username']=$user['username_220088'];
		$_SESSION['password']=$user['password_220088'];
		$_SESSION['usertype']=$user['usertype_220088'];
		$_SESSION['fullname']=$user['fullname_220088'];
		
		echo "<script>alert('login success !');window.location.replace('index.php');</script>";
		} else {
			echo "<script>alert('login failed, wrong password !');window.location.replace('form_login_220088.php');</script>";
		}
		}else {
			echo "<script>alert('login failed, user not found !');window.location.replace('form_login_220088.php');</script>";
	}
}
?>