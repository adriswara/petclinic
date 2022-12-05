<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Clinic Adriswara</title>
</head>

<body>
    <h1>Pet Clinic Adriswara</h1>
    <h3>Doctor List</h3>
    <p><a href="add_doctor_220088.php"> Add New Doctor</a></p>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Gemder</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Photo</th>
            <th colspan="2">Action</th>
        </tr>
        <?php 
        include "connection_220088.php";
        $query = "SELECT * FROM doctor_220088";
        $doctor = mysqli_query($db_connection,$query);
        
        $i = 1;
        foreach ($doctor as $data) :
        ?>

        <tr>
            <td><?php echo $i++; ?></td>
            <th><?php echo $data['doctor_name_220088']; ?></th>
            <th><?php echo $data['doctor_gender_220088']; ?></th>
            <th><?php echo $data['doctor_address_220088']; ?></th>
            <th><?php echo $data['doctor_phone_220088']; ?></th>
            <td align="center"><img src="uploads/doctors/<?= $data['doctor_photo_220088'];?>" width="50" height="50"
                    alt=""><br>
                <a href="doctor_photo_220088.php?id=<?=$data['doctor_id_220088']?>">Change Photo</a>
            </td>
            <td><a href="edit_doctor_220088.php?id=<?=$data['doctor_id_220088']?>">Edit Doctor</a></td>
            <td><a href="delete_doctor_220088.php?id=<?=$data['doctor_id_220088']?>"
                    onclick="return confirm('Are You sure?')">Delete Doctor</a></td>
        </tr>
        <?php endforeach ?>
    </table>
    <p><a href="index.php">Back to Home</a></p>
</body>

</html>