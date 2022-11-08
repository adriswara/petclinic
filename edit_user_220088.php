<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Clinic Adriswara</title>
</head>

<body>
    <h1>Pet Clinic Adriswara</h1>
    <h3>Form edit user</h3>
    <form action="post" action="update_user_220088.php">
        <?php 
   include "connection_220088.php";
   $querry = "SELECT * FROM users_220088 WHERE userid_220088='$_GET[id]'";
   $pet=mysqli_query($db_connection,$querry);
   $data=mysqli_fetch_assoc($pet);  
    ?>
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username_220088" value="<?= $data['username_220088']; ?>" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password_220088" value="<?= $data['password_220088']; ?>" required></td>
            </tr>
            <tr>
                <td>User Type</td>
                <td>
                    <input type="radio" name="usertype_220088" value="Staff"
                        <?= ($data['usertype_220088']=='Staff')?'checked':'';?> required>Staff
                    <input type="radio" name="usertype_220088" value="Manager"
                        <?= ($data['usertype_220088']=='Manager')?'checked':'';?> required>Manager
                </td>
            </tr>

            <tr>
                <td>Fullname</td>
                <td>
                    <textarea name="fullname_220088" required> <?= $data['fullname_220088']; ?> </textarea>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                </td>
            </tr>
            <table>
    </form>
</body>

</html>