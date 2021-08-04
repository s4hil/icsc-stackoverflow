<!DOCTYPE html>
<html>
<head>
	<title>Login - ICSC - StackOverflow</title>

	<!-- G Fonts-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	
	<!-- CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/common.css">
	<link rel="stylesheet" href="assets/css/index.css">


	<!-- Icon -->
	<link rel="icon" href="">
</head>
<body>
	<div class="wrapper">
		<div class="col-container">
			<div class="forms-col">
				<div class="login-box">
					<h3 class="form-header">
						Login
					</h3>
					<form class="form" action="loginCheck.php" method="POST">
						<fieldset class="form-group">
							<label>Roll Number</label>
							<input type="number" name="rollNumber" class="form-control">
						</fieldset>
						<fieldset class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control">
						</fieldset>
						<fieldset class="form-group">
							<input type="submit" name="login" class="form-control btn btn-success">
						</fieldset>
					</form>
				</div>
				<div class="sign-up-box">
					<form class="form"></form>
				</div>
			</div>
			<div class="other-col">
				<div class="img-container">
					<h1>Logo</h1>
					<img src="">
				</div>
			</div>
		</div>
	</div>
	<!-- JS -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/index.js"></script>
</body>
</html>