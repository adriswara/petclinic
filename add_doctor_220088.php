<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
	    echo "<script>alert('Please Login First !');window.location.replace('form_login_220088.php');</script>";
}
?>

<?php 
include 'style\header.php';
?>
<h3>Form Add doctor</h3>
<form method="POST" action="create_doctor_220088.php">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="doctor_name_220088" required></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <input type="radio" name="doctor_gender_220088" value="Male" required>Male
                <input type="radio" name="doctor_gender_220088" value="Female" required>Female
            </td>
        </tr>
        <tr>
            <td>Address</td>
            <td>
                <textarea name="doctor_address_220088" required></textarea>
            </td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>
                <input type="text" name="doctor_phone_220088" required>
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
</body>

</html>