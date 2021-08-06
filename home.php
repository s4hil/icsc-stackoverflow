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
	    <title>Home - ICSC - StackOverflow</title>

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
		<link rel="stylesheet" href="assets/css/home.css">


		<!-- Icon -->
		<link rel="icon" href="assets/imgs/favicon.png">
  	</head>
  	<body>
		<main class="wrapper">
	    	<?php include 'assets/components/navbar.php'; ?>
	    	<section class="forum-container container mt-5">
	    		<div class="forum-content">
	    			<div class="menu-btn">
	    				<i class="fas fa-bars" id="menu-icon"></i> Menu
	    			</div>
	    			<div class="top-bar">
	    				<fieldset>
	    					<input type="text" id="search-forum" class="form-control" placeholder="Search Forum">
	    				</fieldset>
	    				<fieldset>
	    					<button class="ml-auto btn btn-primary" id="addDiscussion" data-bs-toggle="modal" data-bs-target="#addDiscussionModal">
	    					<i class="fas fa-plus"></i> Add Discussion
	    				</button>
	    				</fieldset>
	    			</div>
	    			<div class="discussions-container container">
		    			<!-- Begin Row-->
		    			<div class='discussion row justify-content-around'>
		    				<div class="first-col col-2 col-xs-2 col-sm-2 col-lg-1">
		    					<div class="discussion-user-img">
		    						<img src="assets/imgs/035-junior.png" width="100%">
		    					</div>
		    				</div>
		    				<div class="mid-col col-10 col-xs-10 col-sm-10 col-lg-11">
		    					<div class="discussion-box">
		    						<header class="discussion-topic">Realtime fetching data</header>
		    						<p class="discussion-text">How to fetch data using ajax call with a php script...</p>
		    						<footer class="discussion-footer">
		    							<div class="discussion-stats">
				    						<div class="ups">
				    							<i class="fas fa-thumbs-up"></i>
				    							<span>17</span>&nbsp; likes
				    						</div>
				    						&nbsp; &nbsp;
				    						<div class="comments">
				    							<i class="fas fa-comment-dots"></i>
				    							<span>17</span>&nbsp; comments
				    						</div>
			    						</div>
		    							<div class="discussion-credits">
		    								<i class="fas fa-calendar-alt"></i> 08/08/2021
		    							</div>
		    						</footer>
		    					</div>
		    				</div>
		    			</div><br>
		    			<!-- End Row-->
		    			<!-- Begin Row-->
		    			<div class='discussion row justify-content-around'>
		    				<div class="first-col col-2 col-xs-2 col-sm-2 col-lg-1">
		    					<div class="discussion-user-img">
		    						<img src="assets/imgs/035-junior.png" width="100%">
		    					</div>
		    				</div>
		    				<div class="mid-col col-10 col-xs-10 col-sm-10 col-lg-11">
		    					<div class="discussion-box">
		    						<header class="discussion-topic">Realtime fetching data</header>
		    						<p class="discussion-text">How to fetch data using ajax call with a php script...</p>
		    						<footer class="discussion-footer">
		    							<div class="discussion-stats">
				    						<div class="ups">
				    							<i class="fas fa-thumbs-up"></i>
				    							<span>17</span>&nbsp; likes
				    						</div>
				    						&nbsp; &nbsp;
				    						<div class="comments">
				    							<i class="fas fa-comment-dots"></i>
				    							<span>17</span>&nbsp; comments
				    						</div>
			    						</div>
		    							<div class="discussion-credits">Sahil on 6 August, 2021</div>
		    						</footer>
		    					</div>
		    				</div>
		    			</div><br>
		    			<!-- End Row-->
		    			<!-- Begin Row-->
		    			<div class='discussion row justify-content-around'>
		    				<div class="first-col col-2 col-xs-2 col-sm-2 col-lg-1">
		    					<div class="discussion-user-img">
		    						<img src="assets/imgs/035-junior.png" width="100%">
		    					</div>
		    				</div>
		    				<div class="mid-col col-10 col-xs-10 col-sm-10 col-lg-11">
		    					<div class="discussion-box">
		    						<header class="discussion-topic">Realtime fetching data</header>
		    						<p class="discussion-text">How to fetch data using ajax call with a php script...</p>
		    						<footer class="discussion-footer">
		    							<div class="discussion-stats">
				    						<div class="ups">
				    							<i class="fas fa-thumbs-up"></i>
				    							<span>17</span>&nbsp; likes
				    						</div>
				    						&nbsp; &nbsp;
				    						<div class="comments">
				    							<i class="fas fa-comment-dots"></i>
				    							<span>17</span>&nbsp; comments
				    						</div>
			    						</div>
		    							<div class="discussion-credits">Sahil on 6 August, 2021</div>
		    						</footer>
		    					</div>
		    				</div>
		    			</div><br>
		    			<!-- End Row-->
		    			
	    			</div>
	    		</div>
	    	</section>
	    	<?php include 'assets/components/footer.php'; ?>
		</main>

		<!-- BEGIN MODAL -->
		<!-- Modal -->
		<div class="modal fade" id="addDiscussionModal" tabindex="-1" aria-labelledby="addDiscussionModal" aria-hidden="true">
		  	<div class="modal-dialog modal-lg">
			    <div class="modal-content">
			      	<div class="modal-header">
			        	<h5 class="modal-title" id="exampleModalLabel">Add Discussion</h5>
			      	</div>
			      	<div class="modal-body">
			        	<form class="form">
			        		<fieldset class="form-group">
			        			<label><i class="fas fa-quote-right"></i> Topic</label>
			        			<input type="text" id="dTopic" class="form-control">
			        		</fieldset>
			        		<fieldset class="form-group">
			        			<label><i class="fas fa-clipboard"></i> Details</label>
			        			<textarea type="text" id="dDetails" class="form-control" rows="3"></textarea>
			        		</fieldset>
			        		<fieldset class="form-group">
			        			<label><i class="fas fa-image"></i> Images</label>
			        			<input class="form-control" type="file" name="" accept="image/*">
			        		</fieldset>
			        	</form>
			      	</div>
			      	<div class="modal-footer">
			        	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			        	<button type="button" class="btn btn-primary">Post</button>
			      	</div>
			    </div>
		  	</div>
		</div>
		<!-- END MODAL -->

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