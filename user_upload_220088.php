<?php  

if (isset($_POST['upload'])) {
    include "connection_220088.php";

    $folder = 'uploads/users/';
    if (move_uploaded_file($_FILES['new_photo_220088']['tmp_name'], $folder . $_FILES['new_photo_220088']['name'])) {
        
        $photo = $_FILES['new_photo_220088']['name'];
        $query="UPDATE users_220088 SET user_photo_220088='$photo' WHERE userid_220088='$_POST[userid_220088]'";

        $upload = mysqli_query($db_connection,$query);

        if ($upload) {
            if ($_POST['user_photo_220088'] !== 'default.png') unlink($folder . $_POST['user_photo_220088']);
                echo "<script> alert('Change photo succesed !'); window.location.replace('index.php');</script>";
        }    
            else{
                echo "<script>alert('Change photo failed ! ');window.locaion.replace('user_photo_220088.php?id=$_POST[userid_220088]');</script>";
            }
        }
        else echo " <script>alert('upload photo failed !');window.location.replace('user_photo_220088.php?id=$_POST[userid_220088]');</script>";
        
}
?>