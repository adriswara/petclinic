<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Clinic Adriswara</title>
</head>

<body>
    <h1>Pet Clinic Adriswara</h1>
    <h3>Form Add doctor</h3>
    <form action="post" action="create_doctor_220088.php">
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