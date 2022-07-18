<?php include 'includes/session.php'; ?>
<?php include 'includes/navbar.php' ?>

<!-- <?php
      if (isset($_SESSION['user'])) {
        header('location: cart_view.php');
      }
      ?> -->
<?php include 'includes/header.php'; ?>

<body>

  <!-- start login page -->
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

  <section id="login-page">


    <div class="login-form">
      <h2 id="formTitle" style="font-size: 40px; margin-top: 4%; text-align: center;">
        Login</h2>
      <form action="verify.php" method="POST">

        <div class="form-group has-feedback mb-3">
          <input type="email" class="form-control val" style="border-bottom-color:#0B0B85" name="email" placeholder="EMAIL" required>
          <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
        </div>

        <div class="form-group has-feedback mb-3">
          <input type="password" class="form-control val" style="border-bottom-color:#0B0B85" name="password" placeholder="PASSWARD" required>
          <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
        </div>

        <div class="row">
          <div class="col-md-12">
            <button type="submit" style="background-color:#0B0B85" class="btn btn-primary " name="login">
              <i class="fa fa-sign-in"></i> Sign In</button>
          </div>
        </div>

        <a href="signup.php" style="display: block;margin: 10px 40px 10px 280px;font-size:20px;
          text-decoration: none;color:#0B0B85">Create Account</a>

        <p class="log-par">Need help accessing your subscriptions?<br>
          <a href="email-form.html" style="text-decoration: none;color:#0B0B85">Click here</a>
        </p>

        <a href="password_forgot.php" style="color:#0B0B85">
          <h4>I forgot my password</h4>
        </a><br>

      </form>


    </div>

    <div class="login-img">
      <img src="./images/istockphoto-1279388417-170667a.jpg" alt="" width="100%" height="100%">
    </div>
  </section>


  </div>

  <?php include 'includes/scripts.php' ?>
</body>

</html>