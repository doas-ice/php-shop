<?php
// start the session
session_start();

?>
<!DOCTYPE html>
<html lang="en">

	<!-- head starts -->
	<?php include 'head.php'; ?>
	<!-- head section -->

	<body>

		<div class="hero_area">
			<div class="hero_social">
				<a href="">
					<i class="fa fa-facebook" aria-hidden="true"></i>
				</a>
				<a href="">
					<i class="fa fa-twitter" aria-hidden="true"></i>
				</a>
				<a href="">
					<i class="fa fa-linkedin" aria-hidden="true"></i>
				</a>
				<a href="">
					<i class="fa fa-instagram" aria-hidden="true"></i>
				</a>
			</div>
			<!-- navbar section starts -->
			<?php include 'navbar.php'; ?>
			<!-- end navbar section -->
			<!-- slider section -->
			<section class="slider_section ">
				<div id="customCarousel1" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="container-fluid ">
								<div class="row">
									<div class="col-md-6">
										<div class="detail-box">
											<h1>
												Latest Smartphones
											</h1>
											<p>
												Latest model flagship smartphones such as Apple, Samsung, Sony, Pixel
												and many others are available at our shop
											</p>
											<div class="btn-box">
												<a href="products.php" class="btn1">
													Browse Now
												</a>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="img-box">
											<img src="images/slider-img3.png" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item ">
							<div class="container-fluid ">
								<div class="row">
									<div class="col-md-6">
										<div class="detail-box">
											<h1>
												Gaming Laptops
											</h1>
											<p>
												Latest model Gaming and Enterprise Laptops from companies such as Apple,
												Razer,
												MSI,
												Miscrosoft
												and many others are available at our shop
											</p>
											<div class="btn-box">
												<a href="products.php" class="btn1">
													Browse Now
												</a>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="img-box">
											<img src="images/slider-img2.png" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item ">
							<div class="container-fluid ">
								<div class="row">
									<div class="col-md-6">
										<div class="detail-box">
											<h1>
												Accessories
											</h1>
											<p>
												Smartphone and Computer Accessories, Peripherals and many other latest
												and unique gadgets are available at our shop
											</p>
											<div class="btn-box">
												<a href="products.php" class="btn1">
													Browse Now
												</a>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="img-box">
											<img src="images/slider-img.png" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<ol class="carousel-indicators">
						<li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
						<li data-target="#customCarousel1" data-slide-to="1"></li>
						<li data-target="#customCarousel1" data-slide-to="2"></li>
					</ol>
				</div>

			</section>
			<!-- end slider section -->
		</div>

		<!-- shop section -->

		<section class="shop_section layout_padding">
			<div class="container">
				<div class="heading_container heading_center">
					<h2>
						Latest Products
					</h2>
				</div>
				<?php

                require_once "config.php";

                $sql = "SELECT * FROM items ";
                $result = mysqli_query($db, $sql);

                $firstitem = 1;
                if (mysqli_num_rows($result) > 0) {
	                echo "<div class=\"row\">";
	                while ($row = mysqli_fetch_assoc($result)) {
		                // echo "".$row['name']."<br />";
                		// echo "".$row['email']."<br />";
                		// echo "".$row['password']."<br />";
                
		                $pid = $row['id'];
		                if ($firstitem) {
			                $firstitem = 0;
			                echo "<div class=\"col-md-6 \">";
			                echo "<div class=\"box\">";
			                echo "	<a href=\"addtocart.php?pid=$pid\">";
			                echo "	<div class=\"img-box\">";
			                echo "		<img src=\"images/" . $row['img'] . "\" alt=\"\">";
			                echo "	</div>";
			                echo "	<div class=\"detail-box\">";
			                echo "		<h6>";
			                echo "" . $row['name'];
			                echo "		</h6>";
			                echo "		<h6>";
			                echo "		Price:";
			                echo "		<span>";
			                echo "৳" . $row['price'];
			                echo "		</span>";
			                echo "		</h6>";
			                echo "	</div>";
			                echo "	<div class=\"new\">";
			                echo "		<span>";
			                echo "		Featured";
			                echo "		</span>";
			                echo "	</div>";
			                echo "	</a>";
			                echo "</div>";
			                echo "</div>";
		                } else {
			                echo "<div class=\"col-sm-6  col-xl-3\">";
			                echo "<div class=\"box\">";
			                echo "	<a href=\"addtocart.php?pid=$pid\">";
			                echo "	<div class=\"img-box\">";
			                echo "		<img src=\"images/" . $row['img'] . "\" alt=\"\">";
			                echo "	</div>";
			                echo "	<div class=\"detail-box\">";
			                echo "		<h6>";
			                echo "" . $row['name'];
			                echo "		</h6>";
			                echo "		<h6>";
			                echo "		Price:";
			                echo "		<span>";
			                echo "৳" . $row['price'];
			                echo "		</span>";
			                echo "		</h6>";
			                echo "	</div>";
			                echo "	<div class=\"new\">";
			                echo "		<span>";
			                echo "		Featured";
			                echo "		</span>";
			                echo "	</div>";
			                echo "	</a>";
			                echo "</div>";
			                echo "</div>";
		                }
	                }
	                echo "</div>";
                }

                // Free result set
                mysqli_free_result($result);

                mysqli_close($db);
                ?>
				<div class="btn-box">
					<a href="products.php">
						View All
					</a>
				</div>
			</div>
		</section>

		<!-- end shop section -->


		<!-- feature section -->

		<section class="feature_section layout_padding">
			<div class="container">
				<div class="heading_container">
					<h2>
						Our Online Shop Feauters
					</h2>
					<p>
						Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</p>
				</div>
				<div class="row">
					<div class="col-sm-6 col-lg-3">
						<div class="box">
							<div class="img-box">
								<img src="images/f1.png" alt="">
							</div>
							<div class="detail-box">
								<h5>
									Largest Collection
								</h5>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit,
								</p>
								<a href="">
									<span>
										Read More
									</span>
									<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="box">
							<div class="img-box">
								<img src="images/f2.png" alt="">
							</div>
							<div class="detail-box">
								<h5>
									Easier Browsing
								</h5>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit,
								</p>
								<a href="">
									<span>
										Read More
									</span>
									<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="box">
							<div class="img-box">
								<img src="images/f3.png" alt="">
							</div>
							<div class="detail-box">
								<h5>
									Affordable Prices
								</h5>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit,
								</p>
								<a href="">
									<span>
										Read More
									</span>
									<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="box">
							<div class="img-box">
								<img src="images/f4.png" alt="">
							</div>
							<div class="detail-box">
								<h5>
									Fastest Delivery
								</h5>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit,
								</p>
								<a href="">
									<span>
										Read More
									</span>
									<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="btn-box">
					<a href="products.php">
						View More
					</a>
				</div>
			</div>
		</section>

		<!-- end feature section -->

		<!-- contact section -->


		<!-- end contact section -->

		<!-- client section -->
		<section class="client_section layout_padding">
			<div class="container">
				<div class="heading_container heading_center">
					<h2>
						User Reviews
					</h2>
				</div>
				<div class="carousel-wrap ">
					<div class="owl-carousel client_owl-carousel">
						<div class="item">
							<div class="box">
								<div class="img-box">
									<img src="images/c1.jpg" alt="">
								</div>
								<div class="detail-box">
									<div class="client_info">
										<div class="client_name">
											<h5>
												Mark Thomas
											</h5>
											<h6>
												Customer
											</h6>
										</div>
										<i class="fa fa-quote-left" aria-hidden="true"></i>
									</div>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
										incididunt ut
										labore
										et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
										laboris nisi ut
										aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
										voluptate velit esse
										cillum
										dolore eu fugia
									</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="box">
								<div class="img-box">
									<img src="images/c2.jpg" alt="">
								</div>
								<div class="detail-box">
									<div class="client_info">
										<div class="client_name">
											<h5>
												Alina Hans
											</h5>
											<h6>
												Customer
											</h6>
										</div>
										<i class="fa fa-quote-left" aria-hidden="true"></i>
									</div>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
										incididunt ut
										labore
										et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
										laboris nisi ut
										aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
										voluptate velit esse
										cillum
										dolore eu fugia
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end client section -->


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
