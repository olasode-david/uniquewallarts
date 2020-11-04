$(document).ready(function(){
	$(".galary > div:gt(0)").hide();

	setInterval(function(){
		$(".galary > div:first")
		.fadeOut(1000)
		.next()
		.fadeIn(1000)
		.end()
		.appendTo(".galary");
		
		
	}, 3000);
})

