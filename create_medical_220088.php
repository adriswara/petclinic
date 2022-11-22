<?php 
if (isset($_POST['save'])) {
    include "connection_220088.php";

    $query = "INSERT INTO medicals_220088 SET
              pet_id_220088    = '$_POST[pet_id_220088]',
              doctor_id_220088 = '$_POST[doctor_id_220088]',
              symptom_220088   = '$_POST[symptom_220088]',
              diagnose_220088  = '$_POST[diagnose_220088]',
              treatment_220088 = '$_POST[treatment_220088]',
              cost_220088      = '$_POST[cost_220088]'";


$create = mysqli_query($db_connection, $query);


    if ($create) {
        echo "<script> alert('Medical added successfully !'); </script>";
    }
    else {
        echo "<script> alert('Medical added failed !'); </script>";
    }
}
?>
<script>
window.location.replace("medicals_220088.php?pet_id=<?= $_POST['pet_id_220088'];?>");
</script>