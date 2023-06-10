<!-- header section starts -->
<header class="header_section">
	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg custom_nav-container ">
			<a class="navbar-brand" href="index.php">
				<span>
					Online Shop
				</span>
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class=""> </span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="products.php"> Products </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.php"> About </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contact Us</a>
					</li>
				</ul>
				<div class="user_option-box">
					<a href="cart.php">
						<i class="fa fa-cart-plus" aria-hidden="true"></i>
					</a>
					<a href="login.php">
						<i class="fa fa-user" aria-hidden="true"></i>
						<span style="text-transform: none;">
							<?php echo $_SESSION["name"]; ?>
						</span>
					</a>
					<?php
                    if (isset($_SESSION["userid"]) && $_SESSION["userid"]) {
                    ?>
					<a href="logout.php">
						<i class="fa fa-sign-out" aria-hidden="true"></i>
					</a>
					<?php
                    }
                    ?>
					<!-- <a href="">
                <i class="fa fa-search" aria-hidden="true"></i>
              </a> -->
				</div>
			</div>
		</nav>
	</div>
</header>
<!-- end header section -->
