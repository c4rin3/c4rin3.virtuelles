$(document).ready(function(){
	$('#home').click(function() {
		$("#project").fadeOut(500,function() {
			//$('#project').empty();
			$('#project').remove();
		})
		$('html,body').animate({scrollTop: 0}, 'slow');
	});
	
	$('.thb, #about').click(function() {
		$('html,body').animate({scrollTop: 0}, 'slow');
	});
	$("#slider").responsiveSlides({
		auto: false,
		pager: true,
		nav: true,
		speed: 500,
		namespace: "transparent-btns",
	});
	$("#close").click(function() {
		$("#project").fadeOut(500,function() {
			//$("#project").empty();
			$("#project").remove();
		})
	});

	$('#size').click(function() {
		$(this).toggleClass('icon_condense');
		$('#project').toggleClass('sixteen columns');
		$(this).toggleClass('icon_expand');
		$('#project').toggleClass('two-thirds column');
	});


});

function afficher(data) {
	$('#project').fadeOut(500,function() {
		$('#project').remove();
		//$('#project').append(data);
		$('#project').fadeIn(500);
	})
}
