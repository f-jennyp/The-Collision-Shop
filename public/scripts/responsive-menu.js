$(function() {
	var pull = $('#pull');
	menu = $('nav ul');
	menuHeight = menu.height();

	$(pull).on('click', function(e) {
		e.preventDefault();
		menu.slideToggle();
	});
	$(window).resize(function() {
		if($(window).width() > 800) $('nav ul').removeAttr('style');
	});
});