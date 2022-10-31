<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Clinic Adriswara</title>
</head>

<body>
    <h1>Pet Clinic Adriswara</h1>
    <h3>Form Add Pet</h3>
    <form action="post" action="">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="pet_name_220088"></td>
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
                    <input type="radio" name="pet_gender_220088" value="Male">Male
                    <input type="radio" name="pet_gender_220088" value="Female">Female
                </td>
            </tr>
            <tr>
                <td>Age</td>
                <td>
                    <input type="number" name="pet_age_220088">
                </td>
            </tr>
            <tr>
                <td>Owner</td>
                <td>
                    <input type="text" name="pet_owner_220088">
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    <textarea name="pet_address_220088"></textarea>
                </td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>
                    <input type="text" name="pet_phone_220088">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>