<?php
	include 'loginCheck.php';
	if (isset($_SESSION['loginStatus'])) {
		if ($_SESSION['loginStatus'] == true) {
?>


<!DOCTYPE html>
<html lang="en">
  	<head>
	    <title>Login - ICSC - StackOverflow</title>

		<!-- Basic Metas -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- G Fonts-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
		
		<!-- CSS -->
		<link rel="stylesheet" href="assets/css/particles.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/common.css">
		<link rel="stylesheet" href="assets/css/home.css">


		<!-- Icon -->
		<link rel="icon" href="assets/imgs/favicon.png">
  	</head>
  	<body>
		<main class="wrapper">
	    	<?php include 'assets/components/navbar.php'; ?>
		</main>
	    
	    <!-- JS -->
		<script src="https://kit.fontawesome.com/de41999cf3.js"></script>
		<script src="assets/js/jquery.min.js"></script>
	    <script src="assets/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/home.js"></script>

  	</body>
</html>

<?php
		}
	}
	else {
		echo "<h1>You seem lost!</h1>";
	}
?>