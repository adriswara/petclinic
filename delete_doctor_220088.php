<?php 

if (isset($_GET['id'])) {
    include "connection_220088.php";



$query = "DELETE FROM doctor_220088 WHERE doctor_id_220088 = '$_GET[id]'";


$delete = mysqli_query($db_connection ,$query);

    if ($delete) {
    // echo "<p>Pet added succesfully !</p>";
    echo "<script> alert('Doc delete succesfuly !'); </script>";
    }
    else{
    // echo "<p>Pet add failed !</p>";
    echo "<script> alert('Doc delete failed!'); </script>";
    }
}
?>
<!-- <p><a href="read_pet_220088.php">BACK TO PETS LIST</a></p> -->
<script>
window.location.replace("read_doctor_220088.php");
</script>