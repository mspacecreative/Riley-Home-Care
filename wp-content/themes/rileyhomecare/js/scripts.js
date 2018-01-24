if($.trim($(".et-social-icons").html())=='') {
	$('.et-social-icons').css('margin', '0');
}

function pageHeight() {
	$('#page-container').css('padding-top', $('#main-header').height());
}

$(document).ready(function () {
	pageHeight();
});

$(window).resize(function () {
	pageHeight();
});