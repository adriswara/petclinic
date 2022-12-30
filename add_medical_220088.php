<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
	    echo "<script>alert('Please Login First !');window.location.replace('form_login_220088.php');</script>";
}
?>

<?php 
include 'style\header.php';
?>
<h3>Form Add Medical</h3>
<?php 
    include "connection_220088.php";
    $querypet="SELECT * FROM pets_220088 WHERE pet_id_220088='$_GET[pet_id]'";
    $pet = mysqli_query($db_connection,$querypet);
    $data1 = mysqli_fetch_assoc($pet);
    $querydoc = "SELECT * FROM doctor_220088";
    $doctors=mysqli_query($db_connection,$querydoc);
    ?>
<table>
    <tr>
        <td>Pet Id/Name</td>
        <td>: <?=$data1['pet_id_220088']?> / <?=$data1['pet_name_220088']?> </td>
    </tr>
    <tr>
        <td>Pet Type/Gender/Age</td>
        <td>: <?=$data1['pet_type_220088']?> / <?=$data1['pet_gender_220088']?> / <?=$data1['pet_age_220088']?>
        </td>
    </tr>
    <tr>
        <td>Owner</td>
        <td>: <?=$data1['pet_owner_220088']?> / <?=$data1['pet_address_220088']?> / <?=$data1['pet_phone_220088']?>
        </td>
    </tr>
</table>
<hr>

<form action="create_medical_220088.php" method="post">
    <table>
        <tr>
            <td>Doctor</td>
            <td>
                <select name="doctor_id_220088" required>
                    <option value="">Choose</option>
                    <?php foreach($doctors as $data2): ?>
                    <option value="<?= $data2['doctor_id_220088']?>"><?= $data2['doctor_name_220088']?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Symptom</td>
            <td><textarea name="symptom_220088" required id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>Diagnose</td>
            <td><textarea name="diagnose_220088" required id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>Treatment</td>
            <td><textarea name="treatment_220088" required id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>Cost ($)</td>
            <td> <input type="number" name="cost_220088" required></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="save" value="SAVE">
                <input type="reset" name="reset" value="RESET">
                <input type="hidden" name="pet_id_220088" value="<?= $data1["pet_id_220088"] ?>">
            </td>
        </tr>
    </table>
</form>

<p><a href="medicals_220088.php?pet_id=<?= $data1['pet_id_220088']?>">CANCELL</a></p>
</body>

</html>