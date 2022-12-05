<?php
if (isset($_GET['id'])) {
	include "connection_220088.php";
	$password = password_hash($_GET ['type'], PASSWORD_DEFAULT);
	$query="UPDATE users_220088 SET password_220088='$password' where userid_220088='$_GET[id]'";
	$update=mysqli_query($db_connection,$query);
	if($update){
		echo"<script>alert('Reset password successed !')</script>";
	}else{
		echo"<script>alert('Reset password failed !')</script>";
	}
}
?>
<script>
window.location.replace("read_user_220088.php");
</script>