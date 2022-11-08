<?php 

if (isset($_POST['save'])) {
    include "connection_220088.php";



$query = "UPDATE pets_220088 SET 
          pet_name_220088 = '$_POST[pet_name_220088]', 
          pet_type_220088 = '$_POST[pet_type_220088]', 
          pet_gender_220088 = '$_POST[pet_gender_220088]', 
          pet_age_220088 = '$_POST[pet_age_220088]', 
          pet_owner_220088 = '$_POST[pet_owner_220088]', 
          pet_address_220088 = '$_POST[pet_address_220088]', 
          pet_phone_220088 = '$_POST[pet_phone_220088]'
          WHERE pet_id_220088 = '$_POST[pet_id_220088]';
          ";


$update = mysqli_query($db_connection ,$query);

    if ($update) {
    // echo "<p>Pet update succesfully !</p>";
    echo "<script> alert('Pet update succesfuly !'); </script>";
    }
    else{
    // echo "<p>Pet update failed !</p>";
    echo "<script> alert('pet update failed!'); </script>";
    }
}
?>
<!-- <p><a href="read_pet_220088.php">BACK TO PETS LIST</a></p> -->
<script>
window.location.replace("read_pet_220088.php");
</script>