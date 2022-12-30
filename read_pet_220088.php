<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
	    echo "<script>alert('Please Login First !');window.location.replace('form_login_220088.php');</script>";
}
?>
<?php 
include 'style\header.php'; 
?>

<h3>Pet List</h3>
<p><a href="add_pet_220088.php"> Add New Pet</a></p>
<table border="1">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Type</th>
        <th>Age(m)</th>
        <th>Photo</th>
        <th>Owner</th>
        <th>Address</th>
        <th>Phone</th>
        <th colspan="2">Action</th>
    </tr>

    <?php 
        include "connection_220088.php";
        $query = "SELECT * FROM pets_220088";
        $pets = mysqli_query($db_connection,$query);
        
        $i = 1;
        foreach ($pets as $data) :
        ?>

    <tr>
        <td><?php echo $i++; ?></td>
        <td><a href="medicals_220088.php?pet_id=<?=$data['pet_id_220088']?>"><?php echo $data['pet_name_220088']; ?></a>
        </td>
        <td><?php echo $data['pet_type_220088']; ?></td>
        <td><?php echo $data['pet_age_220088']; ?></td>
        <td align="center"><img src="uploads/pets/<?= $data['pet_photo_220088'];?>" width="50" height="50" alt=""><br>
            <a href="pet_photo_220088.php?id=<?=$data['pet_id_220088']?>">Change Photo</a>
        </td>

        <td><?php echo $data['pet_owner_220088']; ?></td>
        <td><?php echo $data['pet_address_220088']; ?></td>
        <td><?php echo $data['pet_phone_220088']; ?></td>
        <td><a href="edit_pet_220088.php?id=<?=$data['pet_id_220088']?>">Edit Pet</a></td>
        <td><a href="delete_pet_220088.php?id=<?=$data['pet_id_220088']?>"
                onclick="return confirm('Are You sure?')">Delete Pet</a></td>
    </tr>
    <?php endforeach ?>
</table>
<a href="index.php"><button class="w3-button w3-indigo">Back to HOME</button> </a>

</body>

</html>