<?php
session_start();
if(isset($_POST['change'])){
    include "connection_220088.php";

    $password = password_hash($_POST['new_password_220088'],PASSWORD_DEFAULT);

    $query = "UPDATE users_220088 SET password_220088='$password' WHERE userid_220088='$_SESSION[userid]'";

    $update = mysqli_query($db_connection,$query);

    if($update){
        $_SESSION['password']=$password;
        echo "<script> alert('Change Password Success!'); window.location.replace('index.php');</script>";
    } else {
        echo "<script> alert('Change Password Failed!'); window.location.replace('change_password_220088.php');</script>";
    }
}