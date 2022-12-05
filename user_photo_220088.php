<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Pet Clinic Adriswara</h1>
    <h3>Change Pet Photo</h3>
    <?php 
    include "connection_220088.php";
    $query = "SELECT * FROM users_220088 WHERE userid_220088='$_GET[id]'";
    $pet=mysqli_query($db_connection,$query);
    $data=mysqli_fetch_assoc($pet);
    ?>
    <form method="post" action="user_upload_220088.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td></td>
                <td> <img src="uploads/users/<?= $data['user_photo_220088']; ?>" width="100" height="100" alt=""></td>
            <tr>
                <td>New Photo</td>
                <td>: <input type="file" name="new_photo_220088" required /></td>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;
                    <input type="submit" name="upload" value="UPLOAD" />
                    <input type="hidden" name="user_photo_220088" value="<?= $data['user_photo_220088'];?>" />
                    <input type="hidden" name="userid_220088" value="<?= $data['userid_220088']; ?>" />
                </td>
            </tr>
            </tr>
            </tr>
        </table>
    </form>
    <p><a href="read_user_22008.php">CANCEL</a></p>
</body>

</html>