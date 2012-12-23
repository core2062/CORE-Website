$(function() {
	jQuery("#menu-main li").hover(
		function(){
			jQuery(this).find('ul:first').css({visibility: "visible",display: "none"}).show(268);
		},
		function(){
			jQuery(this).find('ul:first').css({visibility: "hidden"});
		}
	);

	$("#menu-main li:has(ul)").children('a').addClass('has-children');

	//Begin Nav
	$("ul.menu > li > a, ul.menu > li > ul").hover(function() {
		$("ul.menu > li > ul").hide();
		$(this).siblings('a').addClass("hover");
		$(this).addClass("hover");
		$(this).parent().children('ul.menu > li > ul').show();

	}, function() {
		$('ul.menu li a').removeClass("hover");
		$(this).parent()
		.children('ul.menu > li > ul').hide();
		$("ul.menu > li > ul").hide();
	});

	$("ul.menu > li > ul > li > a, ul.menu > li > ul > li > ul").hover(function() {
		$("ul.menu > li > ul > li > ul").hide();
		$(this).parent().children('ul.menu > li > ul > li > ul').show();
	}, function() {
		$(this).parent()
		.children('ul.menu > li > ul > li > ul').hide();
		$("ul.menu > li > ul > li > ul").hide();
	});

	$("ul.menu > li > ul > li > ul").hover(function() {
		$(this).siblings('a').addClass("hover-sub");

	}, function() {
		$("a.hover-sub").removeClass("hover-sub");
	});

	$("#menu-main li").hover(function() {
		$(this).find('ul:first').css({
			visibility: "visible",
			display: "none"
		}).show(268);
	}, function() {
		$(this).find('ul:first').css({
			visibility: "hidden"
		});
	});
});