<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Clinic Adriswara</title>
</head>

<body>
    <h1>Pet Clinic Adriswara</h1>
    <h3>Pet List</h3>
    <p><a href="add_pet_220088.php"> Add New Pet</a></p>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Gemder</th>
            <th>Address</th>
            <th>Phone</th>
        </tr>

        <?php 
        include "connection_220088.php";
        $query = "SELECT * FROM doctor_220088";
        $pets = mysqli_query($db_connection,$query);
        
        $i = 1;
        foreach ($pets as $data) :
        ?>

        <tr>
            <td><?php echo $i++; ?></td>
            <th><?php echo $data['doctor_name_220088']; ?></th>
            <th><?php echo $data['doctor_gender_220088']; ?></th>
            <th><?php echo $data['doctor_address_220088']; ?></th>
            <th><?php echo $data['doctor_phone_220088']; ?></th>
        </tr>
        <?php endforeach ?>
    </table>
    <p><a href="index.php">Back to Home</a></p>
</body>

</html>