<?php include 'includes/session.php'; ?>
<?php
	$slug = $_GET['category'];

	$conn = $pdo->open();

	try{
		$stmt = $conn->prepare("SELECT * FROM category WHERE name = :slug");
		$stmt->execute(['slug' => $slug]);
		$cat = $stmt->fetch();
    if (!$cat) {
			throw new Exception('Category not found');
		}

		$catid = $cat['id'];

	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
    
	}

	$pdo->close();

?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">

<div class="wrappper" style="background-color: #32a86d;">



	<?php include 'includes/navbar.php'; ?>
	 
	 

	      <!-- Main content -->


	        	
		            <h1 class="page-header"><?php echo $cat['name']; ?></h1>
		       		<?php
		       			$conn = $pdo->open();
		       			try{	 	
						    $stmt = $conn->prepare("SELECT * FROM products WHERE category_id = :catid");
						    $stmt->execute(['catid' => $catid]);
						    foreach ($stmt as $row){
                 //reviews
                  $stmt = $conn->prepare("SELECT * FROM reviews WHERE product_id = :product_id");

                  $stmt->execute(['product_id' => $row['id']]);
                  
                  $reviews=$stmt->fetchall();

                  //cal avg

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
                   //average
						    	$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
						
	       					   echo "<div class='row'>";
                                  echo "
                                  <div class=\"section\">                                                                        
                                      
                                  <img src='".$image."' width='50%' height='230px' class='thumbnail'>
                                      <div class=\"info-wrap \">
                                      <h1 ><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></h5>
                                      <b>&#x20b9  ".number_format($row['price'], 2)."</b>
                                      <h5>Average Rating:  $average_rating </h5>

                                          
                                    
                                  
                                          </div>
                                      
                                  </div>
                               ";
                              
                               
	       						
						    }
						   
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
	        	</div>
	        	
	        </div>
	      </section>
	     
	    </div>
	  </div>
  
  	
</div>


<?php include 'includes/scripts.php'; ?>
</body>

</html>

 <!-- start footer -->
 <footer>
        <div class="main-footer">
          <div class="container block">
            <div class="footer-link">
              <div class="footer-contact">
                <h2>FIT FRENZY</h2>
                <a
                  href="https://goo.gl/maps/UtxCHBCpXpX9q57M6" target="_blank">
                  <i class="fa fa-map-marker" style="color:black"></i>
                  <span>NIT ANDHRA PRADESH</span>
                </a>
                <a href="tel:09561283169">
                  <i class="fa fa-phone"></i>
                  <span>+91 9493791599</span>
                </a>
                <a href="chilukuridilip99@gmail.com">
                  <i class="fa fa-envelope"></i>
                  <span>fitfrezny@gmail.com</span>
                </a>
              </div>
  
              <div class="footer-products" style="color:#fc8403">
                <h2 style="color:black">Products</h2>
                <a href="category.php?category=Cloths">sport wear</a>
                <a href="category.php?category=Gym">Gym Accessories</a>
                <a href="#\category.php?category=Shoes">Sport Shoes</a>
              </div>
  
              <div class="footer-further" style="color:black;">
                <h2  style="color:black">Further Info</h2>
                <a href="#">Home</a>
                <a href="about.html">About Us</a>
                <a href="#">Shop Locations</a>
                <a href="#">FAQs</a>
                <a href="contactus.php">Contact</a>
              </div>
            </div>
  
            <div class="footer-social" style="color:black;">
              <div class="footer-icon">
                <a href=""
                  ><span><i class="fa fa-facebook"></i></span
                ></a>
                <a href=""
                  ><span><i class="fa fa-instagram"></i></span
                ></a>
                <a href=""
                  ><span><i class="fa fa-twitter"></i></span
                ></a>
                <a href=""
                  ><span><i class="fa fa-linkedin"></i></span
                ></a>
              </div>
              <div class="footer-email">
                <div>
                  <input type="email" placeholder="Email address" />
                  <span>Subscribe</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- end footer -->

<style>
  .main-footer {
    background: #f6f1e9;
 
    color: var(--textColorLight);
    padding: 10rem 0;
    min-height: 50vh;
  }
  .main-footer a {
    text-decoration: none;
    color:black;
    width: max-content;
    transition: 0.3s;
  }
  .main-footer .footer-link a {
    padding: 0.3rem 0;
    width: max-content;
  }
  .footer-link a:hover {
    color: var(--colorSecondry);
  }
  .footer-contact,
  .footer-products,
  .footer-further {
    color:black;
    display: flex;
    flex-direction: column;
    margin-bottom: 3rem;
  }
  .footer-contact h2,
  .footer-products h2,
  .footer-further h2 {
    color:solid black;
    margin-bottom: 1rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid var(--borderDark);
  }
  .footer-contact h2 {
    color: black;
  }
  .footer-contact i {
    margin-right: 0.5rem;
  }
  .footer-contact > :nth-child(2):hover,
  .footer-contact a:hover i {
    color: var(--textColorLight);
  }
  .footer-social {
    border-top: 1px solid var(--borderDark);
  }
  .footer-social a{
    color:black;
  }
  .footer-icon {
    display: flex;
    margin-top: 2rem;
    font-size: 1.6rem;
  }
  .footer-icon a {
    width: 35px;
    height: 35px;
    border: 1px solid var(--borderDark);
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 1rem;
    overflow: hidden;
  }
  .footer-email {
    margin-top: 2rem;
  }
  .footer-icon a:hover {
    background-color: var(--textColorLight);
  }
  .footer-icon a:hover i {
    color: var(--colorDark);
  }
  .footer-email > div {
    max-width: 350px;
    border: 1px solid var(--borderDark);
    display: flex;
    border-radius: 5px;
    overflow: hidden;
  }
  .footer-email > div * {
    padding: 1rem;
  }
  .footer-email input {
    flex: 1;
    background-color: var(--colorDark);
    color: var(--textColorLight);
    outline: none;
    border: 0;
  }
  .footer-email span {
    background-color: var(--colorPrimary);
    color: var(--textColorLight);
  }
  @media screen and (min-width: 768px) {
    .footer-link {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
    }
    .footer-link > div {
      width: 30%;
    }
    .footer-social {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
    }
  }

  </style>
  

<style>
   
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900');
*,
*::before,
*::after {
  box-sizing: border-box;
}




body{
	font-family: 'Poppins', sans-serif;
	font-weight: 400;
	font-size: 15px;
	line-height: 1.7;
	color: #454040;
  	
    min-height: 100vh;
    margin: 0;
    padding: 0;
    overflow-x: none;
    
}
p{
	font-family: 'Poppins', sans-serif;
	font-weight: 400;
	font-size: 16px;
	line-height: 1.7;
	color: #fff;
  margin: 0;
}


.back-color {
  position: relative;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: block;
  z-index: 10;
  background-image: linear-gradient(196deg,#f1a9a9,#e66767);

  transition: all 250ms linear;
  transition-delay: 300ms;
  z-index:-1;
}
.section-fluid-main{
  position: relative;
  display: block;
  height:auto;
  width: 100%;
  overflow: hidden;
}
.section{
  position: relative;
  max-width: calc(100% - 40px);
  /* height:70vh; */
  width: 860px;
  margin: 0 auto;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding: 100px 0;
}


[type="radio"]:checked,
[type="radio"]:not(:checked){
  position: absolute;
  visibility: hidden;
}

@keyframes shake {
  10%, 90% {
    transform: translate3d(-1px, 0, 0) rotate(-1deg);
  }  
  20%, 80% {
    transform: translate3d(2px, 0, 0) rotate(2deg);
  }
  30%, 50%, 70% {
    transform: translate3d(-3px, 0, 0) rotate(-3deg);
  }
  40%, 60% {
    transform: translate3d(3px, 0, 0) rotate(3deg);
  }
}




.section-inline{
  max-width:30vw;
  max-height: 30vh;
  position: relative;
  display: inline-block;
  margin-right: 20px;
  z-index: 20;
}
.section-inline p span{

  font-size: 35px;
  line-height: 1.1;
}


.info-wrap{
  position:absolute;
  margin-left:30vw;
  z-index: 10;
  display:inline block ;
  text-align: left;
}
.container{
  display:flex;
  
}
.title-up {
  font-family: 'Poppins', sans-serif;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-size: 13px;
  line-height: 1.2;
  color: #fff;
  margin-top: 0;
  margin-bottom: 10px;
}

h1 a{
  color:black;
  font-weight: 1000;

}
b,h2{
  font-family: 'Poppins', sans-serif;
  font-weight: 800;
  font-size: 29px;
  line-height: 1.2;
  color:black;
  margin-top: 0;
  margin-bottom: 10px;
}
h4{
  font-family: 'Poppins', sans-serif;
  font-weight: 500;
  font-size: 26px;
  line-height: 1.2;
  color: #fff;
  margin-top: 0;
  margin-bottom: 30px;
}
h4 span{
  text-decoration: line-through;
  font-size: 20px;
  opacity: 0.6;
  padding-left: 15px;
}
h5,h5 a{
  font-family: 'Poppins', sans-serif;
  font-weight: 600;
  font-size: 18px;
  line-height: 1.2;
  color:black ;
  margin-top: 0;
  margin-bottom: 20px;
}

.desc-btn:checked + label,
.desc-btn:not(:checked) + label{
  position: relative;
  transition: all 200ms linear;
  display: inline-block;
  border: none;
  cursor: pointer;
  color: #ffeba7;
  font-family: 'Poppins', sans-serif;
  font-weight: 600;
  font-size: 18px;
  line-height: 1.2;
  color: #fff;
  margin-right: 25px;
  opacity: 0.5;
}
.desc-btn:checked + label{
  opacity: 1;
}
.desc-btn:not(:checked) + label:hover {
  opacity: 0.8;
}

.desc-sec {
  padding-top: 20px;
  padding-bottom: 30px;
  transition: all 250ms linear;
  opacity: 0;
  overflow: hidden;
  pointer-events: none;
  transform: translateY(20px);
}
.desc-sec.accor-2 {
  position: absolute;
  top: 25px;
  left: 0;
  width: 100%;
  z-index: 2;
}
#desc-1:checked ~ .desc-sec.accor-1 {
  opacity: 1;
  pointer-events: auto;
  transform: translateY(0);
}
#desc-2:checked ~ .desc-sec.accor-2 {
  opacity: 1;
  pointer-events: auto;
  transform: translateY(0);
}


.btn{
  position: relative;
  font-family: 'Poppins', sans-serif;
  font-weight: 500;
  font-size: 14px;
  line-height: 2;
  height: 48px;
  border-radius: 4px;
  width: 210px;
  letter-spacing: 1px;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
  border: none;
  cursor: pointer;
  overflow: hidden;
  background-color: transparent;
  color: #fff;
  box-shadow: 0 6px 15px 0 rgba(16,39,112,.15);
  transition: all 250ms linear;
  text-decoration: none;
  margin-top: 50px;
}
.icon {
  padding-right: 7px;
  font-size: 20px;
}
.btn:before{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  content: '';
  z-index: -1;
  background-color: #944852;
  transition: background-color 250ms 300ms ease;
}
.btn:hover{
  box-shadow: 0 12px 35px 0 rgba(16,39,112,.25);
  background-color: #000;
}
 .info-wrap .btn:before{
  background-color: #1a1a1a;
}


.clearfix {
  width: 100%;
}
.clearfix::after {
  display: block;
  clear: both;
  content: "";
}




</style>