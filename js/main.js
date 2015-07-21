$(document).ready(function(){
	$('a[href*=#]').niceScroll();
	$('a.mailto').mailto();
    $(".lazy").lazyload();
    $('.video-wrapper').fitVids();
		$("[data-menu='submenu']").click(function(){
			$(this).parent().find("ul").slideToggle( "fast" );
		});

		if(window.location.hash) {
      var hash = window.location.hash.substring(1);
			$(".active").removeClass("active");
			$("[data-doc='"+hash+"']").addClass("active");
		}

		$("[data-show]").click(function(){
			if($(".menu-icon").is(":visible")){
				$(".menu-icon").toggleClass('fa-bars fa-times');
				$("[data-menu='main']").slideToggle('500');
			}
			if($(this).data("show") != "main"){
				window.location.hash = $(this).data("show");
			}else{
				window.location.hash = "";
			}

			$(".active").removeClass("active");
			$("[data-doc='"+$(this).data("show")+"']").addClass("active");
		});

		$('.menu-icon').click(function(){
			$("[data-menu='main']").slideToggle('500');
			$(this).toggleClass('fa-bars fa-times');
		});
});
