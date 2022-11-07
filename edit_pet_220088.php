<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Clinic Adriswara</title>
</head>

<body>
    <h1>Pet Clinic Adriswara</h1>
    <h3>Form Edit Pet</h3>
    <form method="POST" action="update_pet_220088.php">
        <?php 
    include "connection_220088.php";
    $querry = "SELECT * FROM pets_220088 WHERE pet_id_220088='$_GET[id]'";
    $pet=mysqli_query($db_connection,$querry);
    $data=mysqli_fetch_assoc($pet);
    ?>



        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="pet_name_220088" value="<?= $data['pet_name_220088']; ?>" required></td>
            </tr>
            <tr>
                <td> Type</td>
                <td>
                    <select name="pet_type_220088" required>
                        <option value="">Choose</option>
                        <option value="Cat" <?= ($data['pet_type_220088']=='Cat')?'selected':'';?>>Cat</option>
                        <option value="Dog" <?= ($data['pet_type_220088']=='Dog')?'selected':'';?>>Dog</option>
                        <option value="Reptil" <?= ($data['pet_type_220088']=='Reptil')?'selected':'';?>>Reptil</option>
                        <option value="Bird" <?= ($data['pet_type_220088']=='Bird')?'selected':'';?>>Bird</option>
                        <option value="Rodent" <?= ($data['pet_type_220088']=='Rodent')?'selected':'';?>>Rodent</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="pet_gender_220088" value="Male"
                        <?= ($data['pet_gender_220088']=='Male')?'checked':'';?> required>Male
                    <input type="radio" name="pet_gender_220088" value="Female"
                        <?= ($data['pet_gender_220088']=='Female')?'checked':'';?> required>Female
                </td>
            </tr>
            <tr>
                <td>Age</td>
                <td>
                    <input type="number" name="pet_age_220088" value="<?= $data['pet_age_220088']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Owner</td>
                <td>
                    <input type="text" name="pet_owner_220088" value="<?= $data['pet_owner_220088']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    <textarea name="pet_address_220088" value="<?= $data['pet_address_220088']; ?>"
                        required><?= $data['pet_address_220088']; ?></textarea>
                </td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>
                    <input type="text" name="pet_phone_220088" value="<?= $data['pet_phone_220088']; ?>" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="pet_id_220088" value="<?=$data['pet_id_220088']?>">
                </td>
            </tr>
            <table>
    </form>
    <p><a href="read_pet_220088.php">CANCEL</a></p>
</body>

</html>