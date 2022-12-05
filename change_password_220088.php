<!DOCTYPE html>
<html lang="en">

<head>
    <title>Change Password</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-img" style="background-image: url(img/pets.jpg);">

    <div class="container">
        <div class="navbar">
            <ul>
                <li><a href="index.php">home</a></li>
                <li><a href="change_password_220088.php">change password</a></li>
                <li><a href="logout.php">logout</a></li>
            </ul>
        </div>

        <div class="add">
            <h3>Change Password</h3>
            <form class="add-form" method="post" action="update_password_220088.php">
                <table>
                    <tr>
                        <td class="add-td">New Password</td>
                        <td> <input class="add-input" type="password" name="new_password_220088" id="new" required />
                        </td>
                    </tr>

                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;
                            <input type="checkbox" onclick="show()">Show Password
                        </td>
                    </tr>

                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;
                            <button class="action-btn" type="submit" name="change">Change</button>
                            <button class="action-btn" type="reset" name="reset">Reset</button>
                            <button class="action-btn"><a href="index.php">Cancel</a></button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

    <script>
    function show() {
        var x = document.getElementById("new");
        if (x.type == "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>
</body>

</html>