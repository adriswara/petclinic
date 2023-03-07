<?php 
include 'style\header.php';
?>
<!-- after bootstrap -->

<div class="album py-5 bg-secondary">
    <div class="container">
<div class="modal modal-sheet position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSheet">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header border-bottom-0">
        <h1 class="modal-title fs-5">Login</h1>
      </div>
      <div class="modal-body py-0">
      <form method="post" action="login_220088.php">
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input  class="form-control" id="exampleInputEmail1" type="text" name="username_220088" placeholder="username" require  aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input  class="form-control" id="pass" type="password" name="password_220088" id="pass" placeholder="Password" required>
  </div>
  <div class="mb-3 form-check">
  <input type="checkbox" onclick="show()">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
      </div>
      <div class="modal-footer flex-column border-top-0">
      <button type="submit" class="btn btn-lg btn-primary w-100 mx-0 mb-2" name="login">Submit</button>
      <button type="reset" class="btn btn-lg btn-primary w-100 mx-0 mb-2" name="reset">Submit</button>
</form>
      </div>
    </div>
  </div>
</div>



    </div>
    </div>
<!-- before bootstrap -->
<!-- <div class="container">
    <div class="screen">
        <div class="screen__content">
            <form class="login" method="post" action="login_220088.php">
                <h4>Pet Clinic Adriswara</h4>
                <h4>Form Login</h4>



                <div class="login__field">
                    <i class="login__icon fas fa-user"></i>
                    <input class="login__input" type="text" name="username_220088" placeholder="username" required>
                </div>
                <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                    <input class="login__input" type="password" name="password_220088" id="pass" placeholder="Password"
                        required>
                </div>

                <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                    <input type="checkbox" style="font-family: Raleway, sans-serif;" onclick="show()"> Show
                    Password
                </div>

                <button class="button login__submit" type="submit" name="login">
                    <span class="button__text"> Log In Now</span>
                    <i class="button__icon fas fa-chevron-right"></i>
                </button>

                <button class="button login__submit" type="reset" name="reset">
                    <span class="button__text"> Reset</span>
                    <i class="button__icon fas fa-chevron-right"></i>
                </button>

            </form> -->
            <!-- <div class="social-login">
                    <h3>log in via</h3>
                    <div class="social-icons">
                        <a href="#" class="social-login__icon fab fa-instagram"></a>
                        <a href="#" class="social-login__icon fab fa-facebook"></a>
                        <a href="#" class="social-login__icon fab fa-twitter"></a>
                    </div>
                </div> -->
        <!-- </div> -->
        <!-- <div class="screen__background">
            <span class="screen__background__shape screen__background__shape4"></span>
            <span class="screen__background__shape screen__background__shape3"></span>
            <span class="screen__background__shape screen__background__shape2"></span>
            <span class="screen__background__shape screen__background__shape1"></span>
        </div>
    </div>
</div> -->

<!-- old -->

<!-- <form class="form" method="post" action="login_220088.php">
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
    </form> -->

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