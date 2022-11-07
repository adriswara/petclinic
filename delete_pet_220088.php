<?php 

if (isset($_GET['id'])) {
    include "connection_220088.php";



$query = "DELETE FROM pets_220088 WHERE pet_id_220088 = '$_GET[id]'";


$delete = mysqli_query($db_connection ,$query);

    if ($delete) {
    // echo "<p>Pet added succesfully !</p>";
    echo "<script> alert('Pet delete succesfuly !'); </script>";
    }
    else{
    // echo "<p>Pet add failed !</p>";
    echo "<script> alert('pet delete failed!'); </script>";
    }
}
?>
<!-- <p><a href="read_pet_220088.php">BACK TO PETS LIST</a></p> -->
<script>
window.location.replace("read_pet_220088.php");
</script>