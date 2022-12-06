<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Clinic Adriswara</title>
</head>

<body>
    <div class="container">
        <div class="navbar">
            <ul>
                <li><a href="index.php">home</a></li>
                <li><a href="change_password_220088.php">change password</a></li>
                <li><a href="logout_220088.php">logout</a></li>
            </ul>
        </div>
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

</body>

</html>