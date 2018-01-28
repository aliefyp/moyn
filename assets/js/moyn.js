Array.prototype.chunk = function ( n ) {
	if ( !this.length ) { return []; }
	return [ this.slice( 0, n ) ].concat( this.slice(n).chunk(n) );
};

const fetchDataProject = function(queryType) {
	$("#proj-gallery").empty()

	console.log(queryType)
	
	$.ajax({
		type: "POST",
		url: baseUrl + 'moyn/project',
		data: {type: queryType.toString()},
		success: function(result){
			console.log(result)
			var json = $.parseJSON(result)
			var arrThumb = []
			$.each(json, function(index, item) {
				var id = "", name = "", type = ""
				switch (queryType) {
					case "unbuilt_project":
						id = item.id_up
						name = item.name_up
						type = item.type_up
						break;
					
					case "my_studio":
						id = item.id_studio
						name = item.name_studio
						type = item.type_studio
						break;
					
					case "realized_project":
						id = item.id_rp
						name = item.name_rp
						type = item.type_rp
						break;
				
					default:
						break;
				}
				var thumbDOM = "<div class='proj-gallery__thumb' id='"+id+"' >"
					thumbDOM += "<div class='proj-gallery__prev' style='background-image: url("+"http://placehold.it/100x100"+")' />"
					thumbDOM += "<div class='proj-gallery__body'>"
						thumbDOM += "<div class='proj-gallery__title'>"+name+"</div>"
						thumbDOM += "<div class='proj-gallery__desc'>"+type+"</div>"
					thumbDOM += "</div>"
				thumbDOM += "</div>"
				
				arrThumb.push(thumbDOM)								
			})

			var isMobile = $(window).width() <= 576
			var chunkSize = $(window).width() > 992 ? 8 : 4
			var groupThumb = arrThumb.chunk(chunkSize)

			$.each(groupThumb, function(indexGroup, group) {
				var groupDOM = "<div class='proj-gallery__column'><div class='proj-gallery__column-inner'>"
				$.each(group, function(index, item) {
					groupDOM += item
				})
				groupDOM += "</div></div>"
				$("#proj-gallery").append(groupDOM).fadeIn()
			})
		}
	});
};

$(document).ready(function(){
	// PROFILE
	$(".moyn__founders-img--left > img").hover(function(){
		$(".moyn__founders-img--right > .desc").fadeToggle( "fast", "linear" )
	})

	$(".moyn__founders-img--right > img").hover(function(){
		$(".moyn__founders-img--left > .desc").fadeToggle( "fast", "linear" )
	})

	// MENU
	$(".moyn__menu-item").click(function() {
		var menus = document.getElementsByClassName(this.className)
		for (var i = 0; i < menus.length; i++)
					menus[i].classList.remove('active');

		this.className += " active"


		// if(this.id == "projects"){
		// 	$(".proj-nav__item").each(function(item) {
		// 		console.log(item.hasClass(""))
		// 		if(item.hasClass("")) {
		// 			item.click()
		// 		}
		// 	})
		// }


		// mobile view handling
		$(".navbar-toggler").click()		
		$("#content-mobile").empty()

		if($(window).width() <= 576) {
			switch (this.id) {
				case "profile":
					$("#content-mobile").append($("<div class='c-white'>PROFILE</div>")).fadeIn()
					$("#content-mobile").append($("#content-profile")[0]).fadeIn()
					$("#content-profile").css({
						"opacity": 1,
						"display": "block",
						"max-width": "100%",
						"text-align": "left",
						"position": "initial"
					})
					break;
				case "projects":
					$("#content-mobile").append($("<div class='c-white'>PROFILE</div>")).fadeIn()
					$("#content-mobile").append($("#content-projects")[0]).fadeIn()
					$("#content-profile").css({
						"opacity": 1,
						"display": "block",
						"max-width": "100%",
						"text-align": "left",
						"position": "initial"
					})
					break
				case "contact":			
					$("#content-mobile").append($("<div class='c-white'>CONTACT</div>")).fadeIn()			
					$("#content-mobile").append($("#content-contact")[0]).fadeIn()
					$("#content-contact").css({
						"opacity": 1,
						"display": "block",
						"max-width": "100%",
						"text-align": "left",
						"position": "initial"
					})
					break;
			
				default:
					break;
			}
		}
	})

	// FOOTER
	$(".moyn__footer")[0].style.top = window.innerHeight - $(".moyn__footer")[0].clientHeight - 8


	// PROJECT

	$("#nav-unbuilt").click(function() {
		$("#nav-studio").removeClass("active")
		$("#nav-realized").removeClass("active")
		$("#nav-unbuilt").addClass("active")

		fetchDataProject("unbuilt_project")
	})

	$("#nav-studio").click(function() {
	
		$("#nav-studio").addClass("active")
		$("#nav-realized").removeClass("active")
		$("#nav-unbuilt").removeClass("active")

		fetchDataProject("my_studio")
	})

	$("#nav-realized").click(function() {
		$("#nav-studio").removeClass("active")
		$("#nav-realized").addClass("active")
		$("#nav-unbuilt").removeClass("active")

		fetchDataProject("realized_project")		
	})

	// GALLERY
	var columnWidth = $(window).width() > 992 ? 516 : 266
	var currentPosition = 1
	
	$("#gallery-prev").click(function() {
		var limitLeft = 1
		if (currentPosition > limitLeft) {
			currentPosition -= 1		
			$("#proj-gallery").animate({scrollLeft: columnWidth * currentPosition - columnWidth}, 500)
		}
	})
	$("#gallery-next").click(function() {
		var limitRight = $("#proj-gallery")[0].scrollWidth / columnWidth
		if (currentPosition < limitRight) {
			$("#proj-gallery").animate({scrollLeft: columnWidth * currentPosition}, 500)
			currentPosition++
		}
	})

	// CAROUSEL
	var columnWidth = $(window).width() > 576 ? 488 : 308
	var currentPosition = 1
	
	$("#carousel-nav-prev").click(function() {
		console.log("asd")
		var limitLeft = 1
		if (currentPosition > limitLeft) {
			currentPosition -= 1		
			$("#carousel").animate({scrollLeft: columnWidth * currentPosition - columnWidth}, 500)
		}
	})
	$("#carousel-nav-next").click(function() {
		var limitRight = $("#carousel")[0].scrollWidth / columnWidth
		if (currentPosition < limitRight) {
			$("#carousel").animate({scrollLeft: columnWidth * currentPosition}, 500)
			currentPosition++
		}
	})

	$(".proj-gallery__thumb").click(function() {
		alert("anu")
		$("#popup-slider").show()		
	})
	
	$("#carousel-close").click(function() {
		$("#popup-slider").hide()
	})
});