<?php include 'includes/session.php'; ?>
<?php include 'includes/navbar.php'; ?>

<?php
if (isset($_SESSION['user'])) {
  header('location: cart_view.php');
}

if (isset($_SESSION['captcha'])) {
  $now = time();
  if ($now >= $_SESSION['captcha']) {
    unset($_SESSION['captcha']);
  }
}

?>
<?php include 'includes/header.php'; ?>
<?php

if (isset($_SESSION['error'])) {
  echo "
          <div class='callout callout-danger text-center'>
            <p>" . $_SESSION['error'] . "</p>
          </div>
        ";
  unset($_SESSION['error']);
}

if (isset($_SESSION['success'])) {
  echo "
          <div class='callout callout-success text-center'>
            <p>" . $_SESSION['success'] . "</p>
          </div>
        ";
  unset($_SESSION['success']);
}
?>

<body>

  <section id="register-page">

    <div class="register-form">
      <h2 id="formTitle" style="font-size: 40px; margin-top: 4%; text-align: center;">
        Register</h2>

      <form action="register.php" method="POST" class="registerForm">
        <div class="form-group has-feedback mb-3">
          <input type="text" class="form-control val" style="border-bottom-color:#0B0B85" name="firstname" placeholder="FIRSTNAME" value="<?php echo (isset($_SESSION['firstname'])) ? $_SESSION['firstname'] : '' ?>" required>
          <!-- <span class="glyphicon glyphicon-user form-control-feedback"></span> -->
        </div>


        <div class="form-group has-feedback mb-3">
          <input type="text" class="form-control val" style="border-bottom-color:#0B0B85" name="lastname" placeholder="LASTNAME" value="<?php echo (isset($_SESSION['lastname'])) ? $_SESSION['lastname'] : '' ?>" required>
          <!-- <span class="glyphicon glyphicon-user form-control-feedback"></span> -->
        </div>

        <div class="form-group has-feedback mb-3">
          <input type="email" class="form-control val" style="border-bottom-color:#0B0B85" name="email" placeholder="EMAIL" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : '' ?>" required>
          <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
        </div>

        <div class="form-group has-feedback mb-3">
          <input type="password" class="form-control val" style="border-bottom-color:#0B0B85" name="password" placeholder="PASSWORD" required>
          <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
        </div>
        <div class="form-group has-feedback mb-3">
          <input type="password" class="form-control val" style="border-bottom-color:#0B0B85" name="repassword" placeholder="RETYPE PASSWORD" required>
          <!-- <span class="glyphicon glyphicon-log-in form-control-feedback"></span> -->
        </div>
        <!-- <?php
              if (!isset($_SESSION['captcha'])) {
                echo '
                <div class="form-group" style="width:100%;">
                  <div class="g-recaptcha" data-sitekey="6LevO1IUAAAAAFX5PpmtEoCxwae-I8cCQrbhTfM6"></div>
                </div>
              ';
              }
              ?> -->

        <div class="row">
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat" style="background-color:#0B0B85" name="signup"><i class="fa fa-pencil"></i> Sign Up</button>
          </div>
        </div>
      </form>
      <br>
      <a href="login.php">
        <h4 style="color:#0B0B85">I already have a membership</h4>
      </a><br>
    </div>


    <!-- start register page -->

    <div class="login-img">
      <img src="./images/istockphoto-1279388417-170667a.jpg">
    </div>

  </section>




  <?php include 'includes/scripts.php' ?>
</body>

</html>