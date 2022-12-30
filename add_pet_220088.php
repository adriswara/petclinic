<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
	    echo "<script>alert('Please Login First !');window.location.replace('form_login_220088.php');</script>";
}
?>

<?php 
include 'style\header.php';
?>
<h3>Form Add Pet</h3>
<form method="POST" action="create_pet_220088.php">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="pet_name_220088" required></td>
        </tr>
        <tr>
            <td> Type</td>
            <td>
                <select name="pet_type_220088" id="">
                    <option value="">Choose</option>
                    <option value="Cat">Cat</option>
                    <option value="Dog">Dog</option>
                    <option value="Reptil">Reptil</option>
                    <option value="Bird">Bird</option>
                    <option value="Rodent">Rodent</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <input type="radio" name="pet_gender_220088" value="Male" required>Male
                <input type="radio" name="pet_gender_220088" value="Female" required>Female
            </td>
        </tr>
        <tr>
            <td>Age</td>
            <td>
                <input type="number" name="pet_age_220088" required>
            </td>
        </tr>
        <tr>
            <td>Owner</td>
            <td>
                <input type="text" name="pet_owner_220088" required>
            </td>
        </tr>
        <tr>
            <td>Address</td>
            <td>
                <textarea name="pet_address_220088" required></textarea>
            </td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>
                <input type="text" name="pet_phone_220088" required>
            </td>
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
<p><a href="read_pet_220088.php">CANCEL</a></p>
</body>

</html>