<?php 
// echo $_POST['pet_name_220088'] . "<br>";
// echo $_POST['pet_type_220088'] . "<br>";
// echo $_POST['pet_gender_220088'] . "<br>";
// echo $_POST['pet_age_220088'] . "<br>";
// echo $_POST['pet_owner_220088'] . "<br>";
// echo $_POST['pet_address_220088'] . "<br>";
// echo $_POST['pet_phone_220088'] . "<br>";
if (isset($_POST)) {
    include "connection_220088.php";
}


$query = "INSERT INTO pets_220088 (pet_name_220088, pet_type_220088, pet_gender_220088, pet_age_220088, pet_owner_220088, pet_address_220088, pet_phone_220088) VALUES ('$_POST[pet_name_220088]','$_POST[pet_type_220088]','$_POST[pet_gender_220088]','$_POST[pet_age_220088]','$_POST[pet_owner_220088]','$_POST[pet_address_220088]','$_POST[pet_phone_220088]')";
$create = mysqli_query($db_connection ,$query);

if ($create) {
    // echo "<p>Pet added succesfully !</p>";
    echo "<script> alert('Pet added succesfuly !'); </script>";
}
else{
    // echo "<p>Pet add failed !</p>";
echo "<script> alert('pet add failed!'); </script>";
}


?>
<!-- <p><a href="read_pet_220088.php">BACK TO PETS LIST</a></p> -->
<script>
window.location.replace("read_pet_220088.php");
</script>