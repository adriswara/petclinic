<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Pet Clinic Adriswara</title>
</head>

<body>

    <div class="topnav">
        <a href="http://localhost/petclinic/index.php">Pet Clinic Adriswara</a>
        <?php 
        if(isset($_SESSION)){
         echo '<a href="logout_220088.php" class="split" style="background-color: #776BCC">Logout</a>';
         echo '<a href="" class="split">' ;
         echo '<h6>User : ',$_SESSION["fullname"],'</h6>';
         echo '</a>';
         echo '<a href="" class="split">';
         echo '<h6>logged as ',$_SESSION["usertype"],'</h6>';
         echo ' </a>'; 
        }

        ?>







    </div>


    <div class="topnav">
        <?php 
        if(isset($_SESSION)){
        include "connection_220088.php";
        $query = "SELECT * FROM users_220088 WHERE fullname_220088='$_SESSION[fullname]'";
        $user=mysqli_query($db_connection,$query);
        $data=mysqli_fetch_assoc($user);
        }
        ?>
        <?php if(isset($_SESSION)) { ?>
        <a href="http://localhost/petclinic/index.php">Home</a>
        <a href="report_220088.php">Monthly Report</a>
        <a href="read_doctor_220088.php">doctor list</a>
        <a href="read_pet_220088.php">pet list</a>
        <?php if($_SESSION['usertype']=='Manager') { ?>
        <a href="read_user_220088.php">User list</a>
        <?php } ?>
        <?php } ?>

        <?php 


        if(isset($_SESSION)){
        echo '<a href="" class="split"> <img src="uploads/users/' . $data["user_photo_220088"] . '" width="50" height="50" alt=""><br> </a>';
        echo '<a href="user_photo_220088.php?id=' . $data["userid_220088"] . '" class="split">Change Photo</a>';
        echo '<a href="change_password_220088.php" class="split">change password</a>';
        }
        ?>



    </div>