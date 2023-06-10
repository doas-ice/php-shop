<?php
session_start();
// Check if the user is not logged in, then redirect the user to login page
if (!isset($_SESSION["userid"]) || !$_SESSION["userid"]) {
	$error .= "You need to be logged in";
	header("location: login.php?loginrequired=" . $error);
	exit;
}
// header("HTTP/1.1 202 Accepted");
// header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
// header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
// header("Cache-Control: no-store, no-cache, proxy-revalidate, must-revalidate");
// header("Cache-Control: post-check=0, pre-check=0", false);
// header("Cache-Control: max-age=10000000, s-maxage=1000000");
// header("Pragma: no-cache");
?>




<!DOCTYPE html>
<html lang="en">

	<!-- head starts -->

	<head>
		<!-- Basic -->
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!-- Site Metas -->
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

		<title>Online Shop</title>


		<!-- bootstrap core css -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<!--owl slider stylesheet -->
		<link rel="stylesheet" type="text/css"
			href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

		<!-- font awesome style -->
		<link href="css/font-awesome.min.css" rel="stylesheet" />

		<!-- Custom styles for this template -->
		<link href="css/style.css" rel="stylesheet" />
		<!-- responsive style -->
		<link href="css/responsive.css" rel="stylesheet" />



		<!-- Font Awesome -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
		<!-- MDB -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />

		<style>
		@media (min-width: 1025px) {
			.h-custom {
				height: 100vh !important;
			}
		}

		.card-registration .select-input.form-control[readonly]:not([disabled]) {
			font-size: 1rem;
			line-height: 2.15;
			padding-left: .75em;
			padding-right: .75em;
		}

		.card-registration .select-arrow {
			top: 13px;
		}

		.bg-grey {
			background-color: #eae8e8;
		}

		@media (min-width: 992px) {
			.card-registration-2 .bg-grey {
				border-top-right-radius: 16px;
				border-bottom-right-radius: 16px;
			}
		}

		@media (max-width: 991px) {
			.card-registration-2 .bg-grey {
				border-bottom-left-radius: 16px;
				border-bottom-right-radius: 16px;
			}
		}

		</style>
	</head>
	<!-- head section -->

	<body>
		<!-- navbar section starts -->
		<!-- Navbar-->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid justify-content-between">
				<!-- Left elements -->
				<div class="d-flex">
					<!-- Brand -->
					<a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="index.php">
						<!-- <img src="" height="20" alt="Online Shop" loading="lazy" style="margin-top: 2px;" /> -->
						<span>
							Online Shop
						</span>
					</a>

				</div>
				<!-- Left elements -->
				<!-- Center elements -->
				<ul class="navbar-nav flex-row d-none d-md-flex">
					<li class="nav-item me-3 me-lg-1 active">
						<a class="nav-link" href="index.php">
							<span>Home </i></span>
						</a>
					</li>

					<li class="nav-item me-3 me-lg-1">
						<a class="nav-link" href="products.php">
							<span> Products </span>
						</a>
					</li>

					<li class="nav-item me-3 me-lg-1">
						<a class="nav-link" href="about.php">
							<span> About </span>
						</a>
					</li>

					<li class="nav-item me-3 me-lg-1">
						<a class="nav-link" href="contact.php">
							<span>Contact Us</span>
						</a>
					</li>
				</ul>
				<!-- Center elements -->

				<!-- Right elements -->
				<ul class="navbar-nav flex-row">
					<li class="nav-item me-3 me-lg-1">
						<a class="nav-link active" href="cart.php">
							<span><i class="fa fa-cart-plus fa-lg"></i></span>
						</a>
					</li>
					<li class="nav-item dropdown me-3 me-lg-1">
						<a class="nav-link dropdown-toggle hidden-arrow active" href="index.php"
							id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
							<i class="fa fa-user"></i>
							<span style="text-transform: none;">
								<?php echo $_SESSION["name"]; ?>
						</a>
					</li>
					<li class="nav-item dropdown me-3 me-lg-1">
						<a class="nav-link dropdown-toggle hidden-arrow active" href="logout.php"
							id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
							<i class="fa fa-sign-out fa-lg"></i>
						</a>
					</li>
				</ul>
				<!-- Right elements -->
			</div>
		</nav>
		<!-- Navbar -->
		<!-- end navbar section -->
		<!-- shop section -->
		<section class="h-100 h-custom" style="background-color: #3b4a6b;">
			<div class="container py-5 h-100">
				<div class="row d-flex justify-content-center align-items-center h-100">
					<div class="col-12">
						<div class="card card-registration card-registration-2" style="border-radius: 15px;">
							<div class="card-body p-0">
								<div class="row g-0">
									<div class="col-lg-8">
										<div class="p-5">
											<div class="d-flex justify-content-between align-items-center mb-5">
												<h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
												<h6 class="mb-0 text-muted"></h6>
											</div>
											<hr class="my-4">

											<?php

                                            require_once "config.php";
                                            $uid = $_SESSION["userid"];
                                            $subtotal = 0;
                                            $items = 0;
                                            $sql = "SELECT * FROM cart WHERE uid=" . $uid . ";";
                                            $cartresult = mysqli_query($db, $sql);

                                            if (mysqli_num_rows($cartresult) > 0) {
	                                            while ($cart = mysqli_fetch_assoc($cartresult)) {
		                                            $sql2 = "SELECT * FROM items WHERE id=" . $cart["pid"] . ";";
		                                            $prodresult = mysqli_query($db, $sql2);
		                                            $item = mysqli_fetch_assoc($prodresult);
		                                            $qty = $cart["qty"];
		                                            $price = (float) $qty * (float) $item["price"];
		                                            $subtotal = (float) $subtotal + (float) $price;
		                                            $items = (int) $items + (int) $qty;

                                            ?>
											<form method="post">
												<div class="row mb-4 d-flex justify-content-between align-items-center">
													<div class="col-md-2 col-lg-2 col-xl-2"><img
															src="images/<?php echo $item["img"]; ?>"
															class="img-fluid rounded-3"
															alt="<?php echo $item["name"]; ?>">
													</div>
													<div class="col-md-3 col-lg-3 col-xl-3">
														<h6 class="text-muted">Item</h6>
														<h6 class="text-black mb-0"><?php echo $item["name"]; ?></h6>
													</div>
													<div class="col-md-3 col-lg-3 col-xl-2 d-flex"><button
															class="btn btn-link px-2"></button><input id="form1" min="1"
															name="quantity" value="<?php echo $qty; ?>" type="number"
															class="form-control form-control-sm" /><button
															class="btn btn-link px-2"></button></div>
													<div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
														<h6 class="mb-0">৳
															<?php echo number_format((float) $price, 2, '.', ','); ?>
														</h6>
													</div>
													<div class="col-md-1 col-lg-1 col-xl-1 text-end">
														<input type="hidden" name="cid"
															value="<?php echo $cart["id"]; ?>"> <button type=" submit"
															name="update"
															class="bg-transparent btn-outline-white text-muted"><i
																class="fas fa-check text-success"></i></button>
														<button type="submit" name="delete"
															class="bg-transparent btn-outline-white text-muted"><i
																class="fas fa-times text-danger"></i></button>
													</div>
												</div>
											</form>
											<?php
		                                            mysqli_free_result($prodresult);
	                                            }
                                            }

                                            // Free result set
                                            mysqli_free_result($cartresult);

                                            if (array_key_exists('update', $_POST)) {
	                                            $cid = trim($_POST['cid']);
	                                            $cqty = trim($_POST['quantity']);
	                                            $sql3 = "UPDATE `cart` SET `qty` = " . $cqty . " WHERE `cart`.`id` = " . $cid . ";";
	                                            mysqli_query($db, $sql3);
	                                            echo $cid;
	                                            echo $cqty;
	                                            echo "<meta http-equiv='refresh' content='0'>";
	                                            echo $cid;
                                            } else if (array_key_exists('delete', $_POST)) {
	                                            $cid = trim($_POST['cid']);
	                                            $sql3 = "DELETE FROM cart WHERE `cart`.`id` = " . $cid . ";";
	                                            mysqli_query($db, $sql3);
	                                            echo "<meta http-equiv='refresh' content='0'>";
                                            }

                                            mysqli_close($db);
                                            ?>
											<div class="pt-5">
												<h6 class="mb-0"><a href="products.php" class="text-body"><i
															class="fas fa-long-arrow-alt-left me-2"></i>Back
														to shop</a></h6>
											</div>
										</div>
									</div>
									<div class="col-lg-4 bg-grey">
										<div class="p-5">
											<h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
											<hr class="my-4">
											<div class="d-flex justify-content-between mb-4">
												<h5 class="text-uppercase">items: <?php echo $items; ?></h5>
												<h5>৳
													<?php echo number_format((float) $subtotal, 2, '.', ','); ?>
												</h5>
											</div>
											<h5 class="text-uppercase mb-3">Shipping</h5>
											<div class="mb-4 pb-2"><select class="select">
													<option value="1">Standard Delivery - ৳120.00</option>
												</select></div>
											<h5 class="text-uppercase mb-3">Give code</h5>
											<div class="mb-5">
												<div class="form-outline"><input type="text" id="form3Examplea2"
														class="form-control form-control-lg" /><label class="form-label"
														for="form3Examplea2">Enter
														your code</label></div>
											</div>
											<hr class="my-4">
											<div class="d-flex justify-content-between mb-5">
												<h5 class="text-uppercase">Total price</h5>
												<h5>৳
													<?php $subtotal = $subtotal + (float) 120.00;
                                                    echo number_format((float) $subtotal, 2, '.', ','); ?>
												</h5>
											</div><button type="button" class="btn btn-dark btn-block btn-lg"
												data-mdb-ripple-color="dark">Place Order</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end shop section -->
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
		<!-- MDB -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js">
		</script>
		<span id="page-bottom"></span>
		<script>
		window.location = "#page-bottom";
		</script>
	</body>

</html>
