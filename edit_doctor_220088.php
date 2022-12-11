<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Clinic Adriswara</title>
</head>

<body>
    <h1>Pet Clinic Adriswara</h1>
    <h3>Form edit doctor</h3>
    <form action="post" action="update_doctor_220088.php">
        <?php 
   include "connection_220088.php";
   $querry = "SELECT * FROM doctor_220088 WHERE doctor_id_220088='$_GET[id]'";
   $pet=mysqli_query($db_connection,$querry);
   $data=mysqli_fetch_assoc($pet);  
    ?>




        <table>
            <tr>

                <td>Name</td>
                <td><input type="text" name="doctor_name_220088" value="<?= $data['doctor_name_220088']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="doctor_gender_220088" value="Male"
                        <?= ($data['doctor_gender_220088']=='Male')?'checked':'';?> required>Male
                    <input type="radio" name="doctor_gender_220088" value="Female"
                        <?= ($data['doctor_gender_220088']=='Female')?'checked':'';?> required>Female
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    <textarea name="doctor_address_220088" value="<?= $data['doctor_address_220088']; ?>"
                        required> <?= $data['doctor_address_220088']; ?> </textarea>
                </td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>
                    <input type="text" name="doctor_phone_220088" value="<?= $data['doctor_phone_220088']; ?>" required>
                </td>
            </tr>
            <tr>

                <td></td>
                <td> <img src="uploads/doctors/<?= $data['doctor_photo_220088']; ?>" width="100" height="100" alt="">
                </td>

            </tr>
            <tr>
                <td>Edit Photo</td>
                <td>: <input type="file" name="new_photo_220088" values="<?= $data['doctor_photo_220088']; ?>"
                        required /></td>
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