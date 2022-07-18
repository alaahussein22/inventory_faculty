<?php include 'includes/session.php'; ?>
<?php include 'includes/navbar.php'; ?>

<?php
	$slug = $_GET['category'];

	$conn = $pdo->open();

	try{
		$stmt = $conn->prepare("SELECT * FROM category WHERE cat_slug = :slug");
		$stmt->execute(['slug' => $slug]);
		$cat = $stmt->fetch();
		$catid = $cat['id'];
	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}

	$pdo->close();

?>
<?php include 'includes/header.php'; ?>
<body style="background: #fff">

	      <!-- Main content -->
		  
<div class="candy container">
  <div class="text">
      <h2 style="margin-top:100px">DEVICES & TOOLS</h2>
      <p style="font-size:17px;padding:10px 0px;line-height:2;color:#7a7a7a">
      It is a long established fact that a reader will be distracted by the readable content of
	   a page when looking at its layout. The point of using Lorem Ipsum is that it has
	    a more-or-less normal distribution of letters.</p>
  </div>
  <div class="candy-img">
      <img src="./images/istockphoto-1128252197-612x612.jpg" alt="store" 
	    style="border-radius:7px;margin-top:20px">
  </div>
</div>



	      <section class="content" style="margin:0 20px ">
	        <div class="row">
	        	<div class="col-md-10">
		            <h1 style="margin:70px 0;box-shadow: rgba(0, 7, 255, 0.4) -5px 5px, rgba(0, 7, 255, 0.3) -10px 10px, rgba(0, 7, 255, 0.2) -15px 15px, rgba(0, 7, 255, 0.1) -20px 20px, rgba(0, 7, 255, 0.05) -25px 25px;" class="page-header"><?php echo $cat['name']; ?></h1>
		       		<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM products WHERE category_id = :catid");
						    $stmt->execute(['catid' => $catid]);
						    foreach ($stmt as $row) {
						    	$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
						    	$inc = ($inc == 3) ? 1 : $inc + 1;
	       						if($inc == 1) echo "<div class='row'>";
								   
	       						echo "
	       							<div class='col-md-4'>
	       								<div class='box box-solid'>
		       								<div class='box-body prod-body'>
		       									<img src='".$image."' width='100%' height='250px' class='thumbnail'>
		       									<h4><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></h4>
		       								</div>
		       								<div class='box-footer'>
											   <a href='product.php?product=".$row['slug']."'>
											<button class='btn btn-pink' style='background-color:#FFB233;margin:20px 0px;font-size:17px'>
											Show Details</button>
											</a>
		       								</div>
	       								</div>
	       							</div>
	       						";
	       						if($inc == 3) echo "</div>";
						    }
						    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-4'></div></div>";
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 

	        	</div>
	        	
	        </div>
	      </section>
	     
	
  
  	<?php include 'includes/footer.php'; ?>


<?php include 'includes/scripts.php'; ?>
</body>
</html>