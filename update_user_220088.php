<?php 

if (isset($_POST['save'])) {
    include "connection_220088.php";



$query = "UPDATE users_220088 SET 
          username_220088 = '$_POST[username_220088]', 
          password_220088 = '$_POST[password_220088]', 
          usertype_220088 = '$_POST[usertype_220088]', 
          fullname_220088 = '$_POST[fullname_220088]'
          WHERE userid_220088 = '$_POST[userid_220088]';
          ";


$update = mysqli_query($db_connection ,$query);

    if ($update) {
    // echo "<p>doctor update succesfully !</p>";
    echo "<script> alert('user update succesfuly !'); </script>";
    }
    else{
    // echo "<p>user update failed !</p>";
    echo "<script> alert('user update failed!'); </script>";
    }
}
?>
<!-- <p><a href="read_doctor_220088.php">BACK TO doctorS LIST</a></p> -->
<script>
window.location.replace("read_user_220088.php");
</script>