<?php
	ob_start();
	session_start();
	require_once 'actions/connect.php';
	// it will never let you open index(login) page if session is set
	if ( isset($_SESSION['user'])!="" ) {
		header("Location: home.php");
		exit;
	}
	$error = false;
	$email = "";
	$emailError = "";
	$passError = "";


	if( isset($_POST['btn-login']) ) {
		// prevent sql injections/ clear user invalid inputs
		$email = trim($_POST['email']);
		$email = strip_tags($email);
		$email = htmlspecialchars($email);
		$pass = trim($_POST['pass']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);
		// prevent sql injections / clear user invalid inputs
		if(empty($email)){
			$error = true;
			$emailError = "Please enter your email address.";
		} else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$error = true;
			$emailError = "Please enter valid email address.";
		}
		if(empty($pass)){
			$error = true;
			$passError = "Please enter your password.";
		}
		// if there's no error, continue to login
		if (!$error) {
			$password = hash('sha256', $pass); // password hashing using SHA256
			$res=mysqli_query($conn, "SELECT userId, userName, userPass FROM users WHERE userEmail='$email'");
			$row=mysqli_fetch_array($res, MYSQLI_ASSOC);
			$count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row
			//compare the inserted data with database
			if( $count == 1 && $row['userPass']==$password ) {
				$_SESSION['user'] = $row['userId'];
				header("Location: home.php");
			} else {
				$errMSG = "Incorrect Credentials, Try again...";
			}
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="style.css">

  		<link href="https://fonts.googleapis.com/css?family=Exo+2|Grand+Hotel|Libre+Franklin|Sacramento" rel="stylesheet">
    	<link rel="stylesheet" type="text/css" href="style.css">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
		 <style>
	
	  body{
        	background-image: url('https://www.eventfinder.de/assets_custom/img/veranstaltungstipps/veranstaltungstipps-konzert_md.jpg');
          	
      }
   
	  </style>
	</head>
<body>
	<header>
      <div class="navbar navbar-expand-md bg-info navbar-dark">
      <a class="navbar-brand name" href="media.html" >
        <h1>Austria Events</h1>
      </a>
    </div>

    </header><!-- /header -->

    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-6 offset-6 reg">
        
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">

		    <h2>Sign In.</h2>

		    <hr />

		    <?php
		   		if ( isset($errMSG) ) {
					echo $errMSG; 				//php open and close?
		   		}
		   	?>

		    <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $email; ?>" maxlength="40" />

			<span class="text-danger"><?php echo $emailError; ?></span>

			<input type="password" name="pass" class="form-control" placeholder="Your Password" maxlength="15" />
			
			<span class="text-danger"><?php echo $passError; ?></span>

			<hr />

			<button class="btn btn-block btn-warning" type="submit" name="btn-login">Sign In</button>

		    <hr />

			<a href="register.php">Sign Up Here...</a>

	    	</form>
			</div>
		</div>
		 
	</div>
	
	<footer class="bg-info" >
      <center>copyright by Manuela Stepien 2018</center>
    </footer>

</body>
</html>

<?php ob_end_flush(); ?>