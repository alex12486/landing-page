$(document).ready(function() {


$(function () { $("input,select,textarea").jqBootstrapValidation(); } );

	$("#portfolio-table").mixItUp();

	$(".top_menu ul a").mPageScroll2id();

	$(".s-portfolio li").click(function(){
		$(".s-portfolio li").removeClass("active");
		$(this).addClass("active");
	});

	$(".popup").magnificPopup({type:'image'});
	$(".popup-content").magnificPopup({type:'inline', showCloseBtn: true});

	$(".top-text h1").animated("fadeInDown", "fadeOutUp");
	$(".top-text p, .section-header").animated("fadeInUp", "fadeOutDown");
	$(".animation-left").animated("fadeInLeft", "fadeOutLeft");
	$(".animation-right").animated("fadeInRight", "fadeOutRight");
	$(".animation-photo").animated("flipInY", "flipOutY");
	$(".left .resume-item").animated("fadeInLeft", "fadeOutLeft");
	$(".right .resume-item").animated("fadeInRight", "fadeOutRight");

	function heightDetect() {
		$(".main_head").css("height", $(window).height());
	};

	heightDetect();
	$(window).resize(function(){ heightDetect(); });

	$(".toggle_menu").click(function() {
		$(".sandwich").toggleClass("active");
	});

	$(".top_menu ul a").click(function(){
		$(".top_menu").fadeOut(600);
		$(".top-text").removeClass("h-opacify");
		$(".sandwich").toggleClass("active");
	}).append("<span>");


	$(".toggle_menu").click(function(){
		if($(".top_menu").is(":visible")){
			$(".top_menu").fadeOut(600);
			$(".top-text").removeClass("h-opacify");
			$(".top_menu li a").removeClass("fadeInUp animated");
			$(".sandwich").removeClass("active");
		} else {
			$(".top-text").addClass("h-opacify");
			$(".top_menu").fadeIn(600);
			$(".top_menu li a").addClass("fadeInUp animated");
			$(".sandwich").addClass("active");
		}	
	});

	$(".portfolio-item").each(function(i){
		$(this).find("a").attr("href", "#work-" + i);
		$(this).find(".portfolio-description").attr("id", "work-" + i);
	});



});

$(window).load(function() { 
	$(".loader_inner").fadeOut(); 
	$(".loader").delay(400).fadeOut("slow"); 
});


