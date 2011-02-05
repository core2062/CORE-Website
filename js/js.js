$(function(){

//Initial Settings 
//Read More
var browser=navigator.appName;
var b_version=navigator.appVersion;
var version=parseFloat(b_version);
if (browser!=="Microsoft Internet Explorer")
  {
  		readMore = '<span class="expand">Expand</span>';
		$(".databoxpage").append(readMore);
  }



$("#dropmenu li:has(ul)").children('a').addClass('fatherli');
$("#dropmenu li ul li:has(ul)").children('a').removeClass('fatherli').addClass('childfatherli');

/*Intro Databoxes Format */
$(".databox ul li a").each(function (i) {
	var text = $(this).text();
	$(this).before('<p>'+text+'</p>');
	$(this).text('read more');
});

$("span:contains('FIRST')").addClass('first').wrap('<a href="http://usfirst.org" class="first" target="_blank" title="Click here to go to the FIRST site"></a>');

//Show JS Dependentcies 

$(".font-big").show();
 $(".font-normal").show();
 $(".font-small").show();

js();




function js(){

	
var browser=navigator.appName;
var b_version=navigator.appVersion;
var version=parseFloat(b_version);
if ((browser=="Microsoft Internet Explorer")
  && (version<=7))
  {
  		
  }
else
  {
		
	  //Read More
		shortHeight = '750px';
		$(".databoxpage").css('maxHeight',shortHeight);
		$("span.expand").click(function(){
			  
			  var autoHeight = $(this).parent().css('maxHeight','none').height();
			  $(this).parent().css('maxHeight',shortHeight);
			 $(this).css('position','absolute').animate({
				 top: autoHeight 
			 }).parent().animate({
				 maxHeight: autoHeight,
				 paddingBottom: '30px'
			 });
			 
			 //$(this).addClass('expanded').removeClass('expand').text('Read Less');
			 
			$(this).replaceWith('<span class="expanded">Read Less</span>');
			
			js();
			
		});
		$("span.expanded").click(function(){
			 
			 
			 $(this).animate({
				 top: shortHeight 
			 }).parent().animate({
				 maxHeight: shortHeight,
				 paddingBottom: '35px'
			 });
			 
			
			 
		$(this).addClass('expand').removeClass('expanded').text('Expand Again');
			 
			
			js();
			
			
			
		});
		
		//Begin Nav
	  $("ul.nav > li > a, ul.nav > li > ul").hover(function(){
			$("ul.nav > li > ul").hide();												
			$(this).siblings('a').addClass("hover");
			$(this).addClass("hover");
			$(this).parent().children('ul.nav > li > ul').show();
		
		}, function(){
		
				$('ul.nav li a').removeClass("hover");
				$(this).parent()/*.pause(2000)*/.children('ul.nav > li > ul').hide();
				$("ul.nav > li > ul").hide();
				
		});
		$("ul.nav > li > ul > li > a, ul.nav > li > ul > li > ul").hover(function(){
			$("ul.nav > li > ul > li > ul").hide();	
			$(this).parent().children('ul.nav > li > ul > li > ul').show();
		
		}, function(){
				$(this).parent()/*.pause(2000)*/.children('ul.nav > li > ul > li > ul').hide();
				$("ul.nav > li > ul > li > ul").hide();
				
		});
  }
	
	
	$("ul.nav > li > ul > li > ul").hover(function(){
    	$(this).siblings('a').addClass("hover-sub");
    
    }, function(){
    
	    	$("a.hover-sub").removeClass("hover-sub");	
			
    });
	
	$(".databox ul li a").hover(function(){
    	$(this).append("&raquo;");
    
    }, function(){
    	$(this).text("read more");

			
    });
	
	
		$("dropmenu ul").css({display: "none"}); // Opera Fix 
		
		$("dropmenu li").hover(function(){ 
		
			$(this).find('ul:first').css({visibility: "visible",display: "none"}).show(268); 
	
			},function(){ 
	
			$(this).find('ul:first').css({visibility: "hidden"}); 

		});  
	
	// Notification Close Links 
	$('a.close').show();
	$('a.close').click(function(){ //Waits for a link with the class of close to be clicked
		$(this).parent().slideUp(); //Slides up the link's parent element
		return false;  
	});
	
	//Panel Collapse
	
	collapseHTML = '<span class="collapse" title="Click here to collapse this panel"></span>';	
	$(".titleblock").append(collapseHTML);
	
	$(".collapse").click(function(){
      $(this).parent().siblings("*").slideToggle();	  
    });


	
	
	$(".personalize").click(function(){
      $('.settings').slideToggle();	  
    });
	
	//Font Size
	 $(".font-big").click(function(){
		  $("p").animate( { fontSize: "1em", lineHeight: "1.5em" });			
	  });
	 $(".font-normal").click(function(){
		  $("p").animate( { fontSize: ".9em", lineHeight: "1.4em" });		
	  });
	 $(".font-small").click(function(){
		  $("p").animate( { fontSize: ".8em", lineHeight: "1.3em" });		
	  });
}
});