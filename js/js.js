$(function() {

	//Initial Settings
	//Read More
	var browser = navigator.appName;
	var b_version = navigator.appVersion;
	var version = parseFloat(b_version);


	$("#dropmenu li:has(ul)").children('a').addClass('fatherli');
	$("#dropmenu li ul li:has(ul)").children('a').removeClass('fatherli').addClass('childfatherli');

	/*Intro Databoxes Format */
	$(".databox ul li a").each(function(i) {
		var text = $(this).text();
		$(this).before('<p>' + text + '</p>');
		$(this).text('read more');
	});

	js();

	function js() {
		var browser = navigator.appName;
		var b_version = navigator.appVersion;
		var version = parseFloat(b_version);
		if((browser == "Microsoft Internet Explorer") && (version <= 7)) {

		} else {
			//Begin Nav
			$("ul.nav > li > a, ul.nav > li > ul").hover(function() {
				$("ul.nav > li > ul").hide();
				$(this).siblings('a').addClass("hover");
				$(this).addClass("hover");
				$(this).parent().children('ul.nav > li > ul').show();

			}, function() {

				$('ul.nav li a').removeClass("hover");
				$(this).parent() /*.pause(2000)*/
				.children('ul.nav > li > ul').hide();
				$("ul.nav > li > ul").hide();

			});
			$("ul.nav > li > ul > li > a, ul.nav > li > ul > li > ul").hover(function() {
				$("ul.nav > li > ul > li > ul").hide();
				$(this).parent().children('ul.nav > li > ul > li > ul').show();

			}, function() {
				$(this).parent() /*.pause(2000)*/
				.children('ul.nav > li > ul > li > ul').hide();
				$("ul.nav > li > ul > li > ul").hide();

			});
		}


		$("ul.nav > li > ul > li > ul").hover(function() {
			$(this).siblings('a').addClass("hover-sub");

		}, function() {

			$("a.hover-sub").removeClass("hover-sub");

		});

		$(".databox ul li a").hover(function() {
			$(this).append("&raquo;");

		}, function() {
			$(this).text("read more");


		});


		$("dropmenu ul").css({
			display: "none"
		}); // Opera Fix
		$("dropmenu li").hover(function() {

			$(this).find('ul:first').css({
				visibility: "visible",
				display: "none"
			}).show(268);

		}, function() {

			$(this).find('ul:first').css({
				visibility: "hidden"
			});

		});

		// Notification Close Links
		$('a.close').show();
		$('a.close').click(function() { //Waits for a link with the class of close to be clicked
			$(this).parent().slideUp(); //Slides up the link's parent element
			return false;
		});
	}
});