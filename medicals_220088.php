<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
	    echo "<script>alert('Please Login First !');window.location.replace('form_login_220088.php');</script>";
}
?>

<?php 
include 'style\header.php';
?>
<h3>Medical Records</h3>
<?php 
    include "connection_220088.php";
    $querypet = "SELECT * FROM pets_220088 WHERE pet_id_220088='$_GET[pet_id]'";
    $pet=mysqli_query($db_connection,$querypet);
    $data1=mysqli_fetch_assoc($pet);
    // $querymed="SELECT * FROM medicals_220088 WHERE pet_id_220088='$_GET[pet_id]'";
    $querymed="SELECT * FROM medicals_220088 AS m, doctor_220088 AS d WHERE m.pet_id_220088='$_GET[pet_id]' AND m.doctor_id_220088 = d.doctor_id_220088";
    $medicals=mysqli_query($db_connection,$querymed);
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
<p> <a href="add_medical_220088.php?pet_id=<?= $data1["pet_id_220088"]; ?>">Add New Record</a> </p>
<table border="1" <tr>
    <th>No</th>
    <th>Date</th>
    <th>Doctor</th>
    <th>Symptom</th>
    <th>Diagnose</th>
    <th>Treatment</th>
    <th>Cost($)</th>
    </tr>
    <!-- Loop jika not null -->
    <?php 
            if (mysqli_num_rows($medicals)>0) {
                $i=1;
                foreach ($medicals as $data2) :
            ?>
    <tr>
        <td><?php echo $i++ ?></td>
        <td><?php echo date('D, d M Y H:i:s' ,strtotime($data2['mr_date_220088']));?></td>
        <td><?php echo $data2['doctor_name_220088'] ?></td>
        <td><?php echo $data2['symptom_220088'] ?></td>
        <td><?php echo $data2['diagnose_220088'] ?></td>
        <td><?php echo $data2['treatment_220088'] ?></td>
        <td><?php echo $data2['cost_220088'] ?></td>
    </tr>
    <?php 
            endforeach;
        } else{
        ?>
    <!-- untuk else empty -->
    <tr>
        <td colspan="7" align='center'>No Record !</td>
    </tr>
    <?php } ?>
</table>
<p><a href="read_pet_220088.php">Back to Pets List</a></p>
</body>

</html>