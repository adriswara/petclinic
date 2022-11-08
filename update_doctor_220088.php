<?php 

if (isset($_POST['save'])) {
    include "connection_220088.php";



$query = "UPDATE doctor_220088 SET 
          doctor_name_220088 = '$_POST[doctor_name_220088]', 
          doctor_gender_220088 = '$_POST[doctor_gender_220088]', 
          doctor_address_220088 = '$_POST[doctor_address_220088]', 
          doctor_phone_220088 = '$_POST[doctor_phone_220088]'
          WHERE doctor_id_220088 = '$_POST[doctor_id_220088]';
          ";


$update = mysqli_query($db_connection ,$query);

    if ($update) {
    // echo "<p>doctor update succesfully !</p>";
    echo "<script> alert('doctor update succesfuly !'); </script>";
    }
    else{
    // echo "<p>doctor update failed !</p>";
    echo "<script> alert('doctor update failed!'); </script>";
    }
}
?>
<!-- <p><a href="read_doctor_220088.php">BACK TO doctorS LIST</a></p> -->
<script>
window.location.replace("read_doctor_220088.php");
</script>