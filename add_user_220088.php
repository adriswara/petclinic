<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Clinic Adriswara</title>
</head>

<body>

    <h1>Pet Clinic Adriswara</h1>
    <h3>Form Add user</h3>
    <form class="add-form" method="post" action="create_user_220088.php">
        <table>
            <tr>
                <td class="add-td">Username</td>
                <td><input class="add-input" type="text" name="username_220088" required></td>
            </tr>
            <tr>
                <td class="add-td">Usertype</td>
                <td>
                    <input type="radio" name="usertype_220088" value="Staff" required>Staff
                    <input type="radio" name="usertype_220088" value="Manager" required>Manager
                </td>

            </tr>
            <tr>
                <td class="add-td">Full Name</td>
                <td><input class="add-input" type="text" name="fullname_220088" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button class="action-btn" type="submit" name="save">Save</button>
                    <button class="action-btn" type="reset" name="reset">Reset</button>
                    <button class="action-btn"><a href="read_user_220088.php">Cancel</a></button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>