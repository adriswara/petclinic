<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
	    echo "<script>alert('Please Login First !');window.location.replace('form_login_220088.php');</script>";
}
?>

<?php 
include 'style\header.php';
?>
<h3>Form Edit Doctor</h3><br>
<?php
		// call connection php mysql
		include "connection_220088.php";
		
		// make query SELECT FROM WHERE
		$query="SELECT * FROM doctor_220088 WHERE doctor_id_220088='$_GET[id]'";
		
		// run query
		$doctor=mysqli_query($db_connection, $query);
		
		// extract data from query result
		$data=mysqli_fetch_assoc($doctor);
	?>
<form method="post" action="update_doctor_220088.php" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="doctor_name_220088" value="<?=$data['doctor_name_220088']?>" required></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <input type="radio" name="doctor_gender_220088" value="Male"
                    <?=($data['doctor_gender_220088']=='Male')?'checked':'';?> required>Male
                <input type="radio" name="doctor_gender_220088" value="Female"
                    <?=($data['doctor_gender_220088']=='Female')?'checked':'';?> required>Female
            </td>
        </tr>
        <tr>
            <td>Address</td>
            <td><textarea name="doctor_address_220088" required><?=$data['doctor_address_220088']?></textarea></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="doctor" name="doctor_phone_220088" value="<?=$data['doctor_phone_220088']?>" required>
            </td>
        </tr>
        <tr>
            <td>Photo</td>
            <td><img src="uploads/doctors/<?=$data['doctor_photo_220088']; ?>" width="100" height="100"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="file" name="new_photo_220088" /></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="save" value="SAVE">
                <input type="reset" name="reset" value="RESET">
                <input type="hidden" name="doctor_photo_220088" value="<?=$data['doctor_photo_220088']; ?>" />
                <input type="hidden" name="doctor_id_220088" value="<?=$data['doctor_id_220088']?>" />
            </td>
        </tr>
    </table>
</form>
<p><a href="read_doctor_220088.php">CANCEL</a></p>
<a href="http://www.freepik.com">Some Image Avatar Designed by Cornecoba / Freepik</a>
</body>

</html>