<?php include 'includes/session.php'; ?>
<?php
	$conn = $pdo->open();

	$slug = $_GET['product'];

	try{
		 		
	    $stmt = $conn->prepare("SELECT *, products.name AS prodname, category.name AS catname, products.id AS prodid FROM products LEFT JOIN category ON category.id=products.category_id WHERE slug = :slug");
		$stmt->execute(['slug' => $slug]);
	    $product = $stmt->fetch();
		$stmt = $conn->prepare("SELECT * FROM reviews WHERE product_id = :product_id");

$stmt->execute(['product_id' => $product['prodid']]);

		$reviews=$stmt->fetchall();


	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}

	//page view
	$now = date('Y-m-d');
	if($product['date_view'] == $now){
		$stmt = $conn->prepare("UPDATE products SET counter=counter+1 WHERE id=:id");
		$stmt->execute(['id'=>$product['prodid']]);
	}
	else{
		$stmt = $conn->prepare("UPDATE products SET counter=1, date_view=:now WHERE id=:id");
		$stmt->execute(['id'=>$product['prodid'], 'now'=>$now]);
	}

?>



<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<script>
(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<div class="wrapper" style="background-color:white">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<div class="callout" id="callout" style="display:none">
	        			<button type="button" class="close"><span aria-hidden="true">&times;</span></button>
	        			<span class="message"></span>
	        		</div>
		            <div class="row">
		            	<div class="col-sm-6">
		            		<img src="<?php echo (!empty($product['photo'])) ? 'images/'.$product['photo'] : 'images/noimage.jpg'; ?>" width="100%" class="zoom" data-magnify-src="images/large-<?php echo $product['photo']; ?>">
		            		<br><br>
		            		<form class="form-inline" id="productForm">
		            			<div class="form-group">
			            			<div class="input-group col-sm-5">
			            				
			            				<span class="input-group-btn">
			            					<button type="button" id="minus" class="btn btn-default btn-flat btn-lg"><i class="fa fa-minus"></i></button>
			            				</span>
							          	<input type="text" name="quantity" id="quantity" class="form-control input-lg" value="1">
							            <span class="input-group-btn">
							                <button type="button" id="add" class="btn btn-default btn-flat btn-lg"><i class="fa fa-plus"></i>
							                </button>
							            </span>
							            <input type="hidden" value="<?php echo $product['prodid']; ?>" name="id">
							        </div>
			            			<button type="submit" class="btn btn-primary btn-lg btn-flat"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
			            		</div>
		            		</form>
		            	</div>
		            	<div class="col-sm-6">
		            		<h1 class="page-header"><?php echo $product['prodname']; ?></h1>
		            		<h3><b>&#x20b9; <?php echo number_format($product['price'], 2); ?></b></h3>
		            		<p><b>Category:</b> <a href="category.php?category=<?php echo $product['cat_slug']; ?>"><?php echo $product['catname']; ?></a></p>
		            		<?php
                                   $total_rating = 0;
  									$count = count($reviews);

 									 if ($count > 0) {
    								foreach ($reviews as $review) {
    								  $total_rating += $review['rating'];
    								}

    									$average_rating = round($total_rating / $count, 1);
  										} else {
   												 $average_rating = 'N/A';
 									 }

 								 echo '<h2>Average Rating: ' . $average_rating . '</h2>';
							?>
							<p><b>Description:</b></p>
		            		<p><?php echo $product['description']; ?></p>
		            	</div>
		            </div>
		            <br>
				    <div class="fb-comments" data-href="http://localhost/ecommerce/product.php?product=<?php echo $slug; ?>" data-numposts="10" width="100%"></div> 
	        	</div>
	        </div>
	      </section>
	     
	    </div>
	  </div>
	  <section=reviews >
<?php
  echo '<h2>Reviews:</h2>';
  if (count($reviews) > 0) {
    
    echo '<ul>';
    foreach ($reviews as $review) {
      echo '<li>';
      echo '<b>' . $review['user_id'] . '</b> gave a rating of ' . $review['rating'] . '/5';
      echo '<br>';
      echo $review['comment'];
      echo '</li>';
    }
    echo '</ul>';
  } else {
    echo '<p>No reviews yet.</p>';
  }
?>
</reviews>

<style>
	/* Reviews section */
#reviews {
  margin-top: 30px;
  background-color:white;
  color:black;
}

#reviews h2 {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
}

#reviews .review {
  margin-bottom: 30px;
}

#reviews .review .author {
  font-weight: bold;
}

#reviews .review .date {
  font-style: italic;
  margin-left: 10px;
}

#reviews .review .rating {
  margin-top: 5px;
  margin-bottom: 10px;
}

#reviews .review .rating span {
  font-size: 24px;
  color: #f1c40f;
}

#reviews .review .comment {
  margin-top: 10px;
  line-height: 1.5;
}

</style>
<?php $pdo->close(); ?>
  	<?php include 'includes/footer.php'; ?>
	    
</div>




<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
	$('#add').click(function(e){
		e.preventDefault();
		var quantity = $('#quantity').val();
		quantity++;
		$('#quantity').val(quantity);
	});
	$('#minus').click(function(e){
		e.preventDefault();
		var quantity = $('#quantity').val();
		if(quantity > 1){
			quantity--;
		}
		$('#quantity').val(quantity);
	});

});
</script>
</body>
</html>