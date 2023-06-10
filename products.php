<?php
session_start();
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
			</div>
		</section>

		<!-- end shop section -->

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
