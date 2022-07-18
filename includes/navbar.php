
<div id="offer" style="padding:3px;">
    <h4 style="text-align:center">ONLINE SERVICES INVENTORY</h4>
</div>

<header class="main-header" style="background-color:#0B0B85;">

  <nav class="navbar navbar-static-top" style="margin-left:0px;">
    <div class="container">
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand " style="color:#FFB233;font-size:30px;margin:7px 0px"><b>FACULTY</b>INVENTORY</a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <i class="fa fa-bars"></i>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        <ul class="nav navbar-nav" style="margin-left:80px">
          <li ><a  id="N-link" href="index.php" style="color:#fff;font-size: 20px;margin:7px 0px">HOME</a></li>
          <li class="dropdown">
            <a href="#" id="N-link" class="dropdown-toggle" style="color:#fff;font-size: 20px;margin:7px 0px" data-toggle="dropdown">ITEMS <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <?php
             
                $conn = $pdo->open();
                try{
                  $stmt = $conn->prepare("SELECT * FROM category");
                  $stmt->execute();
                  foreach($stmt as $row){
                    echo "
                      <li><a href='category.php?category=".$row['cat_slug']."'>".$row['name']."</a></li>
                    ";                  
                  }
                }
                catch(PDOException $e){
                  echo "There is some problem in connection: " . $e->getMessage();
                }

                $pdo->close();

              ?>
            </ul>
          </li>
          <li><a class="alink" id="N-link" href="#product" style="color:#fff;font-size: 20px;margin:7px 0px">ABOUT US</a></li>
          <li><a  class="alink" id="N-link" href="#contact" style="color:#fff;font-size: 20px;margin:7px 0px">CONTACT US</a></li>
         
        </ul>
      
      </div>
      <!-- /.navbar-collapse -->
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!--<i class="fa fa-inr" style='color:#ffA500;font-size: 25px;margin:7px 0px'></i>
              <i class="fa fa-quora" style='color:#ffA500;font-size: 25px;margin:7px 0px'></i>-->
              <i class="fa fa-registered" style='color:#ffA500;font-size: 25px;margin:7px 0px'></i>
              <span class="label label-success cart_count"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have <span class="cart_count"></span> in Your items</li>
              <li>
                <ul class="menu" id="cart_menu">
                </ul>
              </li>
              <li class="footer"><a href="cart_view.php">Your Requests</a></li>
            </ul>
          </li>
          <?php
            if(isset($_SESSION['user'])){
              $image = (!empty($user['photo'])) ? 'images/'.$user['photo'] : 'images/profile.jpg';
              echo '
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="'.$image.'" class="user-image" alt="">
                    <span class="hidden-xs">'.$user['firstname'].' '.$user['lastname'].'</span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                      <img src="'.$image.'" class="img-circle" alt="">

                      <p>
                        '.$user['firstname'].' '.$user['lastname'].'
                        <small>Member since '.date('M. Y', strtotime($user['created_on'])).'</small>
                      </p>
                    </li>
                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                      </div>
                      <div class="pull-right">
                        <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                      </div>
                    </li>
                  </ul>
                </li>
              ';
            }
            else{
              echo "
                <li><a  class='alink' href='login.php'  style='color:#fff;'>
                 <button class='btn btn-primary' style='font-size:17px'>LOG IN</button></a></li>
                <li><a  class='alink' href='signup.php' style='color:#fff;'>
                <button class='btn btn-primary' style='font-size:17px'>SIGN UP</button></a></li>
              ";
            }
          ?>
        </ul>
      </div>
    </div>
  </nav>



</header>

