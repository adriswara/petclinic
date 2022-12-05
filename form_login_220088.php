<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Pet Clinic Adriswara</h1>
    <h3>Form Login</h3>

    <form class="form" method="post" action="login_220088.php">
        <table class="table-form">
            <tr>
                <td>Username</td>
                <td><input class="input-form" type="text" name="username_220088" placeholder="username" required /></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input class="input-form" type="password" name="password_220088" id="pass" placeholder="password"
                        required /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;<input type="checkbox" onclick="show()">Show Password</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;
                    <button type="submit" name="login">Login</button>
                    <button type="reset" name="reset">Reset</button>
                </td>
            </tr>
        </table>
    </form>

    <script>
    function show() {
        var x = document.getElementById("pass");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>

</body>

</html>