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
    $query = "SELECT * FROM doctor_220088 WHERE doctor_id_220088='$_GET[id]'";
    $doctor=mysqli_query($db_connection,$query);
    $data=mysqli_fetch_assoc($doctor);
    ?>
    <form method="post" action="doctor_upload_220088.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td></td>
                <td> <img src="uploads/doctors/<?= $data['doctor_photo_220088']; ?>" width="100" height="100" alt="">
                </td>
            <tr>
                <td>New Photo</td>
                <td>: <input type="file" name="new_photo_220088" required /></td>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;
                    <input type="submit" name="upload" value="UPLOAD" />
                    <input type="hidden" name="doctor_photo_220088" value="<?= $data['doctor_photo_220088'];?>" />
                    <input type="hidden" name="doctor_id_220088" value="<?= $data['doctor_id_220088']; ?>" />
                </td>
            </tr>
            </tr>
            </tr>
        </table>
    </form>
    <p><a href="read_doctor_22008.php">CANCEL</a></p>
</body>

</html>