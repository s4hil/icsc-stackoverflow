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
	    <title>Discussion - ICSC - StackOverflow</title>

		<!-- Basic Metas -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- G Fonts-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
		
		<!-- CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/common.css">
		<link rel="stylesheet" href="assets/css/discussion.css">


		<!-- Icon -->
		<link rel="icon" href="assets/imgs/favicon.png">
  	</head>
  	<body>
		<main class="wrapper">
	    	<?php include 'assets/components/navbar.php'; ?>

	    	<section class="container">
	    		<div class="discussion-container mt-5">
	    			<div class="top-bar">
		    			<div>
		    				<img src="assets/imgs/035-junior.png">
		 					<span>Sahil Parray</span>
	    				</div>
	    				<a href="home.php" class="btn btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>
	    			</div>
	    			<div class="discussion-content">
	    				<header>Realtime fetching data</header>
    					<p>
    						It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.
    					</p>
    					<button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#imgModal">View Image</button>

    					<div class="comments-container">
    						<header>Comments (3)</header>
    						<!-- Begin Comment -->
    						<div class="comment row mt-4">
    							<div class="col-2 col-sm-1 col-lg-1">
    								<img src="assets/imgs/035-junior.png" width="50">
    							</div>
    							<div class="col-8 col-sm-8 col-lg-10 comment-col">
    								<header>Sahil Parray</header>
    								<div class="comment-text">
    									Sorry For the bug!
    								</div>
    							</div>
    							<div class="col-1 col-sm-1 col-lg-1">
    								<button class="btn btn-danger">
    									<i class="fas fa-trash-alt"></i>
    								</button>
    							</div>
    						</div>
    						<!-- End Comment -->
    						<!-- Begin Comment -->
    						<div class="comment row mt-4">
    							<div class="col-2 col-sm-1 col-lg-1">
    								<img src="assets/imgs/035-junior.png" width="50">
    							</div>
    							<div class="col-8 col-sm-8 col-lg-10 comment-col">
    								<header>Sahil Parray</header>
    								<div class="comment-text">
    									Sorry For the bug!
    								</div>
    							</div>
    							<div class="col-1 col-sm-1 col-lg-1">
    								<button class="btn btn-danger">
    									<i class="fas fa-trash-alt"></i>
    								</button>
    							</div>
    						</div>
    						<!-- End Comment -->
    						
    					</div>
    					<div class="add-comment mt-5">
    						<form class="form">
    							<fieldset class="form-group">
    								<label>Post a comment</label>
    								<textarea class="form-control comment-text" rows="3" placeholder="Enter Comment Text"></textarea>
    							</fieldset>
    							<fieldset class="form-group">
    								<button type="submit" class="btn btn-success">Post</button>
    							</fieldset>
    						</form>
    					</div>
	    			</div>
	    		</div>
	    	</section>

	    	<!-- Image Modal Begin -->
			<div class="modal fade" id="imgModal" tabindex="-1" aria-labelledby="imgModal" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Image</h5>
			      </div>
			      <div class="modal-body">
			        <img src="assets/imgs/code.png" width="100%">
			      </div>	
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>
	    	<!-- Image Modal End -->

	    	<?php include 'assets/components/footer.php'; ?>
	    </main>
	    <!-- JS -->
		<script src="https://kit.fontawesome.com/de41999cf3.js"></script>
		<script src="assets/js/jquery.min.js"></script>
	    <script src="assets/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/discussion.js"></script>

  	</body>
</html>

<?php
		}
	}
	else {
		echo "<h1>You seem lost!</h1>";
	}
?>