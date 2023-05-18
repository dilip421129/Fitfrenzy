<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper" style="background-color:red">

	<?php include 'includes/navbar.php'; ?>
	 
    <main>
        <section>
    <h2>About Us</h2>
			<p>FitFrenzy is an online store for sports enthusiasts. We offer a wide variety of sports equipment, apparel, and accessories from top brands at affordable prices. Our mission is to make it easy for everyone to get fit and enjoy sports.</p>
			<p>We started FitFrenzy in 2023 with a passion for sports and a desire to help others achieve their fitness goals. Our team includes experienced athletes and trainers who understand the needs of our customers and are committed to providing the best products and customer service.</p>
			<p>At FitFrenzy, we believe that sports can bring people together and make the world a better place. We support local sports teams and charities, and we are always looking for ways to give back to the community.</p>
			<p>Thank you for choosing FitFrenzy as your go-to destination for all things sports. We are excited to help you on your fitness journey and to be a part of your sports adventures.</p>
		
        
        </section>
	</main>
	
	</main>




  	<?php $pdo->close(); ?>
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>


<style>
    main {
        height:60vh;
	padding: 20px;
    background-color:
    orange;
}

.about {
	margin-bottom: 50px;
}

h2 {
	font-size: 28px;
	margin-top: 0;
}

p {
	font-size: 16px;
	line-height: 1.5;
}


    </style>