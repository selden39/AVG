$(function() {
	var openBtn = $('#btn'),
		slideMenu = $('#hideMenu'),
		layer = $('<div />').addClass('hideMenulayer');
	openBtn.on("click", function() {
		if (slideMenu.is(':hidden')) {
			layer.appendTo('body');
			slideMenu.slideDown(300);
		} else {
			slideMenu.slideUp(300);
			layer.remove();
		}
	});
});