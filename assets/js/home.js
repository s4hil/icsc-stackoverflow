$(document).ready(()=>{

	$(".top-bar").hide(0);

	// Display menu
	$(".menu-btn").click((e)=>{
		e.preventDefault();
		$(".top-bar").slideToggle();
		$("#menu-icon").toggleClass('fa-bars fa-times');
	});
}); // main