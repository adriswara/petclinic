<?php
if(isset($_POST['save'])) {  //check variabel POST from FORM
	include "connection_220088.php"; //call connection php mysql
	
	$folder = 'uploads/doctors/'; //target forder for upload
	if(move_uploaded_file($_FILES['new_photo_220088']['tmp_name'], $folder . $_FILES['new_photo_220088']['name'])) {
		
	//success upload, get the photo name
	$photo=$_FILES['new_photo_220088']['name'];
	
	if($_POST['doctor_photo_220088'] !== 'default.png') unlink($folder . $_POST['doctor_photo_220088']); //delete old photo
	}else 
		$photo = $_POST['doctor_photo_220088'];
		
		// sql query UPDATE SET WHERE
		$query = "UPDATE doctor_220088 SET 
			  doctor_name_220088 = '$_POST[doctor_name_220088]',
			  doctor_gender_220088 = '$_POST[doctor_gender_220088]',
			  doctor_address_220088 = '$_POST[doctor_address_220088]',
			  doctor_phone_220088 = '$_POST[doctor_phone_220088]',
			  doctor_photo_220088='$photo'
			  WHERE doctor_id_220088 = '$_POST[doctor_id_220088]'
			  ";	
	
	//run query
	$update= mysqli_query($db_connection, $query);
	}
	
	if($update) { // check if query TRUE/success
			// Success msg
			echo "<script>alert('Changes On Doctor Data Successed !');window.location.replace('read_doctor_220088.php');</script>";
		} else {
			//failed msg
			echo "<script>alert('Changes On Doctor Data Failed !');window.location.replace('edit_doctor_220088.php?id=$_POST[doctor_id_220088]');</script>";
		}
	//Failed upload
?>
<!-- <p><a href="read_pet_220088.php">BACK TO PETS LIST</a></p> -->
<script>
window.location.replace("read_doctor_220088.php");
</script>