$(document).ready(function() {
	$("#collection_menu").tooltip({
		position: 'bottom center', 
		offset: [0, 60]
	});
	$("a[name='globe']").colorbox({
		'width': '775px',
		'height': '475px',
		'transition': 'none',
		'returnFocus': false,
		'onComplete': function() {$('#slider').bxSlider({
							'pager':false,
							'controls':true})}
	});
	$("a[name='donor']").colorbox({
		'height': '375px',
		'transition': 'none',
		'returnFocus': false
	});
	$("a[name='magnify']").colorbox({
		'transition': 'none'
	});
	$('#slider').bxSlider({
		'pager':false,
		'controls':true
	});	
});