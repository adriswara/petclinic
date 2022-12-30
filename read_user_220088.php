<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
	    echo "<script>alert('Please Login First !');window.location.replace('form_login_220088.php');</script>";
}
?>
<?php 
include 'style\header.php'; 
?>

<div class="container">

    <div class="med">
        <h3>List User</h3>
        <button class="action-btn"><a href="add_user_220088.php">Add New User</a></button>
        <table border="1" cellspacing="0" cellpadding="4">
            <tr class="theader">
                <th>No</th>
                <th>UserName</th>
                <!-- <th>Password</th> -->
                <th>UserType</th>
                <th>FullName</th>
                <th colspan="3">Action</th>
            </tr>
            <?php
            //call connection
            include "connection_220088.php";
            //make a sql query
            $query = "SELECT * FROM users_220088";
            //run query
            $pets = mysqli_query($db_connection, $query);

            $i=1;
            foreach ($pets as $data) :
        ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $data['username_220088']; ?></td>
                <!-- <td><?php echo $data['password_220088']; ?></td> -->
                <td><?php echo $data['usertype_220088']; ?></td>
                <td><?php echo $data['fullname_220088']; ?></td>
                <td align="center"><img src="uploads/users/<?= $data['user_photo_220088'];?>" width="50" height="50"
                        alt=""><br>
                    <a href="user_photo_220088.php?id=<?=$data['userid_220088']?>">Change Photo</a>
                </td>
                <td><button class="action-btn">
                        <p><a href="edit_user_220088.php?id=<?=$data['userid_220088']?>">Edit User</a></p>
                    </button></td>
                <td><button class="action-btn">
                        <p><a href="delete_user_220088.php?id=<?=$data['userid_220088']?>"
                                onclick="return confirm('Are you sure?')">Delete User</a></p>
                    </button></td>
                <td><button class="action-btn">
                        <p><a href="reset_password_220088.php?id=<?=$data['userid_220088'];?>&type=<?=$data['usertype_220088'];?>"
                                onclick="return confirm('are you sure reset the password?')">Reset Password</a></p>
                    </button></td>
            </tr>
            <?php endforeach; ?>

            <a href="index.php"><button class="w3-button w3-indigo">Back to HOME</button> </a>


            </body>

            </html>