$(document).ready(function(){
	$(".toggle-projects").click(function(event) {
		event.preventDefault();
		$(".projects-container").slideToggle();
	})
	$(".toggle-skills").click(function(event) {
		event.preventDefault();
		$(".skills-list").slideToggle();
	})
})