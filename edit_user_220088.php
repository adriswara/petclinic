<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Clinic Adriswara</title>
</head>

<body>
    <h1>Pet Clinic Adriswara</h1>
    <?php
        include "connection_220088.php";
        //make query dari id
        $query="SELECT * FROM users_220088 WHERE userid_220088='$_GET[id]'";
        //menjalankan query
        $user= mysqli_query($db_connection,$query);
        //extrak hasil query
        $data=mysqli_fetch_assoc($user);
    ?>
    <div class="add">
        <h3>Edit User Form</h3>
        <form clacc="add-form" method="post" action="update_user_220088.php">
            <table>
                <tr>
                    <td class="add-td">UserName</td>
                    <td><input type="text" name="username_220088" value="<?=$data['username_220088']?>" required>
                    </td>
                </tr>
                <tr>
                    <td class="add-td">UserType</td>
                    <td>
                        <input type="radio" name="usertype_220088" value="Staff"
                            <?=($data['usertype_220088']=='Staff')?'checked':'';?> required> Staff |
                        <input type="radio" name="usertype_220088" value="Manager"
                            <?=($data['usertype_220088']=='Manager')?'checked':'';?> required> Manager
                    </td>
                </tr>
                <tr>
                    <td class="add-td">FullName</td>
                    <td><input type="text" name="fullname_220088" value="<?=$data['fullname_220088']?>" required>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button class="action-btn" type="submit" name="save">Save</button>
                        <button class="action-btn" type="reset" name="reset">Reset</button>
                        <button class="action-btn" type="cancel" name="cancel"><a
                                href="read_user_220088.php">Cancel</a></button>
                        <input type="hidden" name="userid_220088" value="<?=$data['userid_220088']?>">
                    </td>
                </tr>
            </table>
        </form>
</body>

</html>