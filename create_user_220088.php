<?php 
// echo $_POST['doctor_name_220088'] . "<br>";
// echo $_POST['doctor_type_220088'] . "<br>";
// echo $_POST['doctor_gender_220088'] . "<br>";
// echo $_POST['doctor_age_220088'] . "<br>";
// echo $_POST['doctor_owner_220088'] . "<br>";
// echo $_POST['doctor_address_220088'] . "<br>";
// echo $_POST['doctor_phone_220088'] . "<br>";
if (isset($_POST['save'])) {
    include "connection_220088.php";



$query = "INSERT INTO users_220088 (username_220088,password_220088, usertype_220088, fullname_220088) VALUES ('$_POST[username_220088]','$_POST[password_220088]','$_POST[usertype_220088]','$_POST[fullname_220088]')";
$create = mysqli_query($db_connection ,$query);

if ($create) {
    // echo "<p>doctor added succesfully !</p>";
    echo "<script> alert('user   added succesfuly !'); </script>";
}
else{
    // echo "<p>doctor add failed !</p>";
echo "<script> alert('user add failed!'); </script>";
}
}

?>
<!-- <p><a href="read_doctor_220088.php">BACK TO doctorS LIST</a></p> -->
<script>
window.location.replace("read_user_220088.php");
</script>