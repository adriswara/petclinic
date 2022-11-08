<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Clinic Adriswara</title>
</head>

<body>
    <h1>Pet Clinic Adriswara</h1>
    <h3>User List</h3>
    <p><a href="add_user_220088.php"> Add New User</a></p>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
            <th>Usertype</th>
            <th>Fullname</th>
            <th colspan="2">Action</th>
        </tr>
        <?php 
        include "connection_220088.php";
        $query = "SELECT * FROM users_220088";
        $users = mysqli_query($db_connection,$query);
        
        $i = 1;
        foreach ($users as $data) :
        ?>

        <tr>
            <td><?php echo $i++; ?></td>
            <th><?php echo $data['username_220088']; ?></th>
            <th><?php echo $data['password_220088']; ?></th>
            <th><?php echo $data['usertype_220088']; ?></th>
            <th><?php echo $data['fullname_220088']; ?></th>
            <td><a href="edit_user_220088.php?id=<?=$data['userid_220088']?>">Edit User</a></td>
            <td><a href="delete_user_220088.php?id=<?=$data['userid_220088']?>"
                    onclick="return confirm('Are You sure?')">Delete User</a></td>
        </tr>
        <?php endforeach ?>
    </table>
    <p><a href="index.php">Back to Home</a></p>
</body>

</html>