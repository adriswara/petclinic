<?php  

if (isset($_POST['upload'])) {
    include "connection_220088.php";

    $folder = 'uploads/pets/';
    if (move_uploaded_file($_FILES['new_photo_220088']['tmp_name'], $folder . $_FILES['new_photo_220088']['name'])) {
        
        $photo = $_FILES['new_photo_220088']['name'];
        $query="UPDATE pets_220088 SET pet_photo_220088='$photo' WHERE pet_id_220088='$_POST[pet_id_220088]'";

        $upload = mysqli_query($db_connection,$query);

        if ($upload) {
            if ($_POST['pet_photo_220088'] !== 'default.png') unlink($folder . $_POST['pet_photo_220088']);
                echo "<script> alert('Change photo succesed !'); window.location.replace('read_pet_220088.php');</script>";
        }    
            else{
                echo "<script>alert('Change photo failed ! ');window.locaion.replace('pet_photo_220088.php?id=$_POST[pet_id_220088]');</script>";
            }
            
        }
        else echo " <script>alert('upload photo failed !');window.location.replace('pet_photo_220088.php?id=$_POST[pet_id_220088]');</script>";
        
}
?>