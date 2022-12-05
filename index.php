<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
	    echo "<script>alert('Please Login First !');window.location.replace('form_login_220088.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <title>Pet Clinic Adriswara</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-img" style="background-image: url(img/pets.jpg);">

    <?php 
         include "connection_220088.php";
         $query = "SELECT * FROM users_220088 WHERE fullname_220088='$_SESSION[fullname]'";
         $user=mysqli_query($db_connection,$query);
         $data=mysqli_fetch_assoc($user);
    ?>

    <div class="container">

        <div class="navbar">
            <ul>
                <li><a href="home.php">home</a></li>
                <li><a href="change_password_220088.php">change password</a></li>
                <li><a href="logout_220088.php">logout</a></li>
            </ul>
        </div>
        <div class="profile-display">
            <table>
                <tr>
                    <td class="">
                        <h3>welcome <?=$_SESSION['fullname'];?>!</h3>
                        <h5>you are login as <?=$_SESSION['usertype'];?></h5>
                        <img src="uploads/users/<?= $data['user_photo_220088'];?>" width="50" height="50" alt=""><br>
                        <a href="user_photo_220088.php?id=<?=$data['userid_220088']?>">Change Photo</a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="card">
            <div class="card-display">
                <span class="inner-display">
                    <!-- <a href="read_pet_220088.php"><img src="img/pet-list.png" width="50px"></a> -->
                    <a href="read_pet_220088.php">
                        <h5 align="">pet list</h5>
                    </a>
                </span>
            </div>
            <div class="card-display">
                <span class="inner-display">
                    <!-- <a href="read_doctors_220088.php"><img src="img/doctor-list.png" width="50px"></a> -->
                    <a href="read_doctor_220088.php">
                        <h5 align="">doctor list</h5>
                    </a>
                </span>

            </div>
            <?php if($_SESSION['usertype']=='Manager') { ?>
            <div class="card-display">
                <span class="inner-display">
                    <a href="read_user_220088.php"><img src="img/user-list.png" width="50px"></a>
                </span>
                <h5 align="">user list</h5>
            </div>
            <?php } ?>
        </div>
    </div>
    </div>
</body>

</html>