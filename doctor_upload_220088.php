<?php  

if (isset($_POST['upload'])) {
    include "connection_220088.php";

    $folder = 'uploads/doctors/';
    if (move_uploaded_file($_FILES['new_photo_220088']['tmp_name'], $folder . $_FILES['new_photo_220088']['name'])) {
        
        $photo = $_FILES['new_photo_220088']['name'];
        $query="UPDATE doctor_220088 SET doctor_photo_220088='$photo' WHERE doctor_id_220088='$_POST[doctor_id_220088]'";

        $upload = mysqli_query($db_connection,$query);

        if ($upload) {
            if ($_POST['doctor_photo_220088'] !== 'default.png') unlink($folder . $_POST['doctor_photo_220088']);
                echo "<script> alert('Change photo succesed !'); window.location.replace('read_doctor_220088.php');</script>";
        }    
            else{
                echo "<script>alert('Change photo failed ! ');window.locaion.replace('doctor_photo_220088.php?id=$_POST[doctor_id_220088]');</script>";
            }
        }
        else echo " <script>alert('upload photo failed !');window.location.replace('doctor_photo_220088.php?id=$_POST[doctor_id_220088]');</script>";
        
}
?>