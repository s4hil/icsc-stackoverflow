$(document).ready(()=>{

	$(".top-bar").hide(0);

	// Display menu
	$(".menu-btn").click((e)=>{
		e.preventDefault();
		$(".top-bar").slideToggle();
		$("#menu-icon").toggleClass('fa-bars fa-times');
	});

	// Render Discussion Item
	function renderDiscussionItem(dp ,name, topic, details, likes, comments , date) {
		return `
			<div class='discussion row justify-content-around'>
				<div class="first-col col-2 col-xs-2 col-sm-2 col-lg-1">
					<div class="discussion-user-img">
						<img src="assets/imgs/`+dp+`" width="100%">
					</div>
				</div>
				<div class="mid-col col-10 col-xs-10 col-sm-10 col-lg-11">
					<div class="discussion-box">
						<header class="discussion-topic">
							<a href="discussion.php">
								`+ topic + `
							</a>
							<div class="d-author">`+ name +`</div>
						</header>
						<p class="discussion-text">`+ details +`</p>
						<footer class="discussion-footer">
							<div class="discussion-stats">
	    						<div class="ups">
	    							<i class="fas fa-thumbs-up"></i>
	    							<span>`+likes+`</span>&nbsp;likes
	    						</div>
	    						&nbsp; &nbsp;
	    						<div class="comments">
	    							<i class="fas fa-comment-dots"></i>
	    							<span>`+comments+`</span>&nbsp;comments
	    						</div>
    						</div>
							<div class="discussion-credits">
								<i class="fas fa-calendar-alt"></i> `+ date +`
							</div>
						</footer>
					</div>
				</div>
			</div><br>
		`;
	}

	// Load Discussions
	function loadDiscussions(pageNo) {
		let rawData = { pageNumber:pageNo };
		let data = JSON.stringify(rawData);
		let output = "";
		$.ajax({
			url: "assets/php/api/fetchDiscussions.php",
			method: "POST",
			data: data,
			dataType: "json",
			success: function (data) {
				x = data;
				for (let i = 0; i < x.length; i++){
					output += renderDiscussionItem(x[i].dp, x[i].username, x[i].topic, x[i].details, x[i].likes, x[i].comments, x[i].date ); 
				}

				$("#discussions").html(output);
			},
			error: function () {
				console.log("err with fetch discussions req!");
			}
		});
	}
	// (page)
	loadDiscussions(1);
	
	// Load Pagination Tab
	function loadPagination() {
		output = "";
		$.ajax({
			url: "assets/php/api/fetchPagination.php",
			method: "GET",
			dataType: "json",
			success: function (data) {
				if (data.status == true) {
					let pages = data.pages;
					for (let i = 1; i < pages; i++){
						output += "<li class='page-item page-nav-item' btn-id='"+i+"'><span class='page-link'>"+ i +"</span></li>";
					}
					$("#pagination").html(output);
				}
			},
			error: function () {
				console.log("err with pagination req!");
			}
		});	
	}
	loadPagination();

	// Add functions to pagination buttons
	$("#pagination").on('click', '.page-nav-item', function () {
		let page = $(this).attr('btn-id');
		loadDiscussions(page);
	});
}); // main