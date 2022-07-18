<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<body>
<div class="login-box">
  	<?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>

  	<div>
    	<h5>Enter email associated with account</h5>

    	<form action="reset.php" method="POST">
      		<div class="form-group has-feedback mb-3">
        		<input type="email" class="form-control val" name="email" placeholder="ENTER YOUR EMAIL" required>
        		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      		</div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary"
                 name="reset"><i class="fa fa-mail-forward"></i> Send</button>
        		</div>
      		</div>
    	</form>
      <br>
      <a href="login.php">I rememberd my password</a><br>
  	</div>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>