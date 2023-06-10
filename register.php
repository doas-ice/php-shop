<?php

require_once "config.php";
require_once "session.php";



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

	$error = '';
    $fullname = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST["confirm_password"]);
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    if($query = $db->prepare("SELECT * FROM users WHERE email = ?")) {
        $error = '';
        // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
		$query->bind_param('s', $email);
		$query->execute();
		// Store the result so we can check if the account exists in the database.
		$query->store_result();
		if ($query->num_rows > 0) {
			$error .= 'The email address is already registered!';
		} else {
			// Validate password
			if (strlen($password ) < 6) {
				$error .= 'Password must have atleast 6 characters.';
			}

			// Validate confirm password
			if (empty($confirm_password)) {
				$error .= 'Please enter confirm password.';
			} else {
				if (empty($error) && ($password != $confirm_password)) {
					$error .= 'Password did not match.';
				}
			}
			if (empty($error) ) {
				$insertQuery = $db->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?);");
				$insertQuery->bind_param("sss", $fullname, $email, $password_hash);
				$result = $insertQuery->execute();
				if ($result) {
					$success .= 'Your registration was successful! Please Log In.';
					header("location: login.php?regdone=".$success);
				} else {
					$error .= 'Something went wrong!';
				}
				$insertQuery->close();
			}
		}
    }
    $query->close();
    // Close DB connection
    mysqli_close($db);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">


<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css"
  rel="stylesheet"
/>


    </head>
    <body>





	<section class="vh-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
		<a href="index.php">
        <img src="images/reg.jpg"
          class="img-fluid" alt="Sample image">
</a>
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="" method="post">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Sign up with</p>
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-linkedin-in"></i>
            </button>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
          </div>

		  <?php
		  if (!empty($success)) {
			echo "<div class=\"divider d-flex my-4\"><p class=\"text-success fw-bold mb-0\">";
			echo $success;
			echo "</p></div>";
		  } elseif (!empty($error)) {
			echo "<div class=\"divider d-flex my-4\"><p class=\"text-danger fw-bold mb-0\">";
			echo $error;
			echo "</p></div>";
		  }
		?>

          <!-- Name input -->
          <div class="form-outline mb-4">
            <input type="text" id="name" name="name" class="form-control form-control-lg"
              placeholder="Enter your name" />
            <label class="form-label" for="form3Example3">Name</label>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="email" name="email" class="form-control form-control-lg"
              placeholder="Enter a valid email address" />
            <label class="form-label" for="form3Example3">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="password" name="password" class="form-control form-control-lg"
              placeholder="Enter password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          <!-- Password validation input -->
          <div class="form-outline mb-3">
            <input type="password" id="confirm_password" name="confirm_password" class="form-control form-control-lg"
              placeholder="Re-Enter password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <input type="submit" name="submit" value="Register" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;"/>
            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="login.php"
                class="link-danger">Login Here</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"
></script>

    </body>
</html>