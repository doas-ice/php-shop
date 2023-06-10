<?php
session_start();

require_once "config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$phone = trim($_POST['phone']);
	$text = trim($_POST["text"]);
	$sql = "INSERT INTO contact (name, email, phone, text) VALUES (\"" . $name . "\", \"" . $email . "\", \"" . $phone . "\", \"" . $text . "\") ;";
	// echo $sql;
	mysqli_query($db, $sql);
}

?>


<!DOCTYPE html>
<html lang="en">

	<!-- head starts -->
	<?php include 'head.php'; ?>
	<!-- head section -->

	<body class="sub_page">

		<div class="hero_area">

			<!-- navbar section starts -->
			<?php include 'navbar.php'; ?>
			<!-- end navbar section -->
		</div>

		<!-- contact section -->

		<section class="contact_section layout_padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="form_container">
							<div class="heading_container">
								<h2>
									Contact Us
								</h2>
							</div>
							<form method="post" action="">
								<div>
									<input type="text" name="name" placeholder="Full Name " />
								</div>
								<div>
									<input type="email" name="email" placeholder="Email" />
								</div>
								<div>
									<input type="text" name="phone" placeholder="Phone number" />
								</div>
								<div>
									<input type="text" name="text" class=" message-box" placeholder="Message" />
								</div>
								<div class="d-flex ">
									<button type="submit" name="submit">
										SEND
									</button>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-6">
						<div class="img-box">
							<img src="images/contact.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- end contact section -->

		<!-- footer section -->
		<?php include 'footer.php'; ?>
		<!-- footer section -->

		<!-- jQery -->
		<script src="js/jquery-3.4.1.min.js"></script>
		<!-- popper js -->
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
			integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
		</script>
		<!-- bootstrap js -->
		<script src="js/bootstrap.js"></script>
		<!-- owl slider -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
		</script>
		<!-- custom js -->
		<script src="js/custom.js"></script>
		<!-- Google Map -->
		<script
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
		</script>
		<!-- End Google Map -->

	</body>

</html>
