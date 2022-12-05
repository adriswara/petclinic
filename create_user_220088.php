<?php
//check variable POST from form"
// 220088
if(isset($_POST['save'])){
    //Call Connection php mysql
    include "connection_220088.php";

    //create default password_200035
    $password = password_hash($_POST['usertype_220088'], PASSWORD_DEFAULT);

    // sql query INSERT INTO VALUES
    $query = "INSERT INTO users_220088(username_220088, password_220088, usertype_220088, fullname_220088)
    VALUES ('$_POST[username_220088]',' $password',' $_POST[usertype_220088]',' $_POST[fullname_220088]')";

    //run query
    $create = mysqli_query($db_connection, $query);

    if($create){
        //echo"<p>Pet add successfully !</p>";
        echo"<script> alert('user add succesfully !'); </script>";
    }else{
        //echo"<p>Pet add failed !</p>";
        echo"<script> alert('user add failed !'); </script>";
    }

}
?>
<!-- <p><a href="read_pet_220088.php">Back To Pets List</a></p> -->
<script>
window.location.replace("read_user_220088.php");
</script>