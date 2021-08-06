<?php
	include 'loginCheck.php';
	if (isset($_SESSION['loginStatus'])) {
		if ($_SESSION['loginStatus'] == true) {

			if (isset($_GET['logout'])) {
				session_destroy();
				header('location: index.php');
			}
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
	    	<section class="forum-container container mt-5">
	    		<div class="forum-content">
	    			<div class="top-bar">
	    				<fieldset>
	    					<label>Search:</label>
	    					<input type="text" id="search-forum" class="form-control" placeholder="Search Forum">
	    				</fieldset>
	    				<fieldset>
	    					<label>Sort:</label>
	    					<select class="form-control">
	    					<option>Latest</option>
	    					<option>Unsolved</option>
	    					<option>Popular</option>
	    				</select>
	    				</fieldset>
	    				<fieldset>
	    					<button class="btn btn-primary" id="addDiscussion">
	    					<i class="fas fa-plus"></i> Add Discussion
	    				</button>
	    				</fieldset>
	    			</div>
	    			<div class="discussions-container container">
		    			<!-- Begin Row-->
		    			<div class='discussion row justify-content-around'>
		    				<div class="col-3 col-sm-3 col-lg-1">
		    					<div class="discussion-user-img">
		    						<img src="assets/imgs/035-junior.png">
		    					</div>
		    				</div>
		    				<div class="col-3 col-sm-3 col-lg-10">
		    					<div class="discussion-box">
		    						<header class="discussion-topic">Realtime fetching data</header>
		    						<p class="discussion-text">How to fetch data using ajax call with a php script...</p>
		    						<footer class="discussion-footer">
		    							<div class="discussion-stats">
				    						<div class="ups">
				    							<i class="fas fa-thumbs-up"></i>
				    							<span>17</span>&nbsp; likes
				    						</div>
			    						</div>
		    							<div class="discussion-credits">Sahil on 6 August, 2021</div>
		    						</footer>
		    					</div>
		    				</div>
		    				<div class="col-3 col-sm-3 col-lg-1">
		    					<div class="discussion-comments-count">
		    						<i class="fas fa-comment-dots mr-1"></i> 98
		    					</div>
		    				</div>
		    			</div><br>
		    			<!-- End Row-->
		    			<!-- Begin Row-->
		    			<div class='discussion row justify-content-around'>
		    				<div class="col-3 col-sm-3 col-lg-1">
		    					<div class="discussion-user-img">
		    						<img src="assets/imgs/035-junior.png">
		    					</div>
		    				</div>
		    				<div class="col-3 col-sm-3 col-lg-10">
		    					<div class="discussion-box">
		    						<header class="discussion-topic">CRUD - AJAX - PHP</header>
		    						<p class="discussion-text">How to perform crud ooperations using js, php, ajax.</p>
		    						<footer class="discussion-footer">
		    							<div class="discussion-stats">
				    						<div class="ups">
				    							<i class="fas fa-thumbs-up"></i>
				    							<span>20</span>&nbsp; likes
				    						</div>
			    						</div>
		    							<div class="discussion-credits">Shoaib on 4 August, 2021</div>
		    						</footer>
		    					</div>
		    				</div>
		    				<div class="col-3 col-sm-3 col-lg-1">
		    					<div class="discussion-comments-count">
		    						<i class="fas fa-comment-dots mr-1"></i> 12
		    					</div>
		    				</div>
		    			</div><br>
		    			<!-- End Row-->
	    			</div>
	    		</div>
	    	</section>
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