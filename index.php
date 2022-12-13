<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
	    echo "<script>alert('Please Login First !');window.location.replace('form_login_220088.php');</script>";
}
?>

<?php 
include 'style\header.php';
?>

<?php 
         include "connection_220088.php";
         $query = "SELECT * FROM users_220088 WHERE fullname_220088='$_SESSION[fullname]'";
         $user=mysqli_query($db_connection,$query);
         $data=mysqli_fetch_assoc($user);
?>

<div class="container">
    <div class="screen">
        <div class="screen__content">

            <h4>Pet Clinic Adriswara</h4>
            <h4>Dashboard</h4>

            <a href="report_220088.php"><button class="button login__submit">
                    <span class="button__text"> Monthly Report</span>
                    <i class="button__icon fas fa-chevron-right"></i>
                </button></a>

            <a href="read_doctor_220088.php"><button class="button login__submit">
                    <span class="button__text"> Doctor list</span>
                    <i class="button__icon fas fa-chevron-right"></i>
                </button></a>


            <a href="read_pet_220088.php"><button class="button login__submit">
                    <span class="button__text"> Pet list</span>
                    <i class="button__icon fas fa-chevron-right"></i>
                </button></a>

            <?php if($_SESSION['usertype']=='Manager') { ?>
            <a href="read_user_220088.php"><button class="button login__submit">
                    <span class="button__text"> User List</span>
                    <i class="button__icon fas fa-chevron-right"></i>
                </button></a>
            <?php } ?>

        </div>
        <div class="screen__background">
            <span class="screen__background__shape screen__background__shape4"></span>
            <span class="screen__background__shape screen__background__shape3"></span>
            <span class="screen__background__shape screen__background__shape2"></span>
            <span class="screen__background__shape screen__background__shape1"></span>
        </div>
    </div>
</div>




</body>

</html>