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

<!-- before bootstrap -->
<!-- 
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

            <?php //if($_SESSION['usertype']=='Manager') { ?>
            <a href="read_user_220088.php"><button class="button login__submit">
                    <span class="button__text"> User List</span>
                    <i class="button__icon fas fa-chevron-right"></i>
                </button></a>
            <?php //} ?>

        </div>
        <div class="screen__background">
            <span class="screen__background__shape screen__background__shape4"></span>
            <span class="screen__background__shape screen__background__shape3"></span>
            <span class="screen__background__shape screen__background__shape2"></span>
            <span class="screen__background__shape screen__background__shape1"></span>
        </div>

                

    </div>
</div> -->

<!-- after bootstrap -->

<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        
        

        <div class="col">
          <div class="card shadow-sm">
          <a href="report_220088.php"> <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="uploads/assets/monthly.jpg"  preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#55595c"/></img></a>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="report_220088.php"><button type="button" class="btn btn-sm btn-outline-secondary">Monthly Report</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <a href="read_doctor_220088.php"> <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="uploads/assets/doctor.jpg" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#55595c"/></img></a>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="read_doctor_220088.php"><button type="button" class="btn btn-sm btn-outline-secondary">Doctor list</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        

        <div class="col">
          <div class="card shadow-sm">
          <a href="read_pet_220088.php"><img class="bd-placeholder-img card-img-top" width="100%" height="225" src="uploads/assets/pet.jpg" role="img" aria-label="Placeholder: " preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#55595c"/></img></a>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="read_pet_220088.php"><button type="button" class="btn btn-sm btn-outline-secondary">Pet list</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php if($_SESSION['usertype']=='Manager') { ?>
            <div class="col">
          <div class="card shadow-sm">
          <a href="read_user_220088.php"> <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="uploads/assets/user.jpg" role="img" aria-label="Placeholder: " preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#55595c"/></img></a>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="read_user_220088.php"><button type="button" class="btn btn-sm btn-outline-secondary">User List</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
            <?php } ?>
      </div>
    </div>
  </div>




</body>

</html>