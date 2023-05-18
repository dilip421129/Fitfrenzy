<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper" style="background-color:white">

	<?php include 'includes/navbar.php'; ?>
	 
    <main>
    <section class="contact">
			<h2>Contact Us</h2>
			<form action="submit.php" method="POST">
				<label for="name">Name</label>
				<input type="text" id="name" name="name" placeholder="Your name" required>
				
				<label for="email">Email</label>
				<input type="email" id="email" name="email" placeholder="Your email" required>
				
				<label for="subject">Subject</label>
				<input type="text" id="subject" name="subject" placeholder="Subject" required>
				
				<label for="message">Message</label>
				<textarea id="message" name="message" placeholder="Your message" required></textarea>
				
				<input type="submit" value="Send">
			</form>
		</section>
	</main>
	
	</main>




  	<?php $pdo->close(); ?>
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>


<style>
  .main {
  max-width: 800px;
  margin: 0 auto;
  /* padding: 2rem; */
  background: linear-gradient(to bottom, #f7f7f7, #fff);
}

.contact {

  margin-top: 2rem;
  background: linear-gradient(to bottom, #f7f7f7, #fff);
  border-radius: 5px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  padding: 2rem;
}

.contact h2 {
  font-size: 2rem;
  margin-bottom: 2rem;
}

.contact label {
  display: block;
  font-size: 1.2rem;
  margin-bottom: 0.5rem;
}

.contact input,
.contact textarea {
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 0.5rem;
  width: 100%;
}

.contact input:focus,
.contact textarea:focus {
  outline: none;
  border-color: #333;
}

.contact textarea {
  height: 200px;
  resize: vertical;
}

.contact input[type="submit"] {
  background-color: #333;
  border: none;
  border-radius: 5px;
  color: #fff;
  cursor: pointer;
  font-size: 1.2rem;
  margin-top: 1rem;
  padding: 0.5rem 1rem;
}

.contact input[type="submit"]:hover {
  background-color: #444;
}

    </style>