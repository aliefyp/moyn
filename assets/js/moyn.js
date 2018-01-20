onMenuClick = (elem) => {
	var menus = document.getElementsByClassName(elem.className)
	for (var i = 0; i < menus.length; i++)
        menus[i].classList.remove('active');

	elem.className += " active"
}

$(document).ready(function(){
	$(".moyn__founders-img--left > img").hover(function(){
		$(".moyn__founders-img--right > .desc").fadeToggle( "fast", "linear" )
	})

	$(".moyn__founders-img--right > img").hover(function(){
		$(".moyn__founders-img--left > .desc").fadeToggle( "fast", "linear" )
	})

	$(".moyn__gallery").slick({
		slidesToShow: 2,
		slidesToScroll: 2,
		variableWidth: true,
		rows: 4,
	});

	$(".moyn__slider .carousel").slick({
		slidesToShow: 1,
		slidesToScroll: 1,
	});

	$(".med-thumb").click(function(){
		$(".moyn__slider").show()
	})

	$(".gal-nav").click(function(){
		const unbuiltGallery = $("#gallery-unbuilt")
		const studioGallery = $("#gallery-studio")
		const realizedGallery = $("#gallery-realized")

		const unbuiltNav = $("#nav-unbuilt")
		const studioNav = $("#nav-studio")
		const realizedNav = $("#nav-realized")
		
		switch (this.id) {
			case "nav-unbuilt":
				studioGallery.hide()
				realizedGallery.hide()
				unbuiltGallery.show()
				
				studioNav.removeClass("active")
				realizedNav.removeClass("active")
				unbuiltNav.addClass("active")
				break;
			case "nav-studio":
				unbuiltGallery.hide()
				realizedGallery.hide()
				studioGallery.show()
				
				unbuiltNav.removeClass("active")
				realizedNav.removeClass("active")
				studioNav.addClass("active")				
				break;
			case "nav-realized":
				unbuiltGallery.hide()
				studioGallery.hide()
				realizedGallery.show()	
				
				unbuiltNav.removeClass("active")
				studioNav.removeClass("active")
				realizedNav.addClass("active")	
				break;
			default:
				break;
		}	
	});
});