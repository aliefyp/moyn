var galleryPosition = 1;
var carouselPosition = 1;

Array.prototype.chunk = function ( n ) {
	if ( !this.length ) { return []; }
	return [ this.slice( 0, n ) ].concat( this.slice(n).chunk(n) );
};

const fetchDataProject = function(queryType) {
	$("#gallery-project").empty()
	
	$.ajax({
		type: "POST",
		url: baseUrl + 'projects/' + queryType,
		data: {type: queryType.toString()},
		success: function(result){
			var json = $.parseJSON(result)
			var arrThumb = []
			console.log(json)
			$.each(json, function(index, item) {
				var id = "", name = "", type = "", image = ""
				switch (queryType) {
					case "unbuilt":
						id = item.id_up
						name = item.name_up
						type = item.type_up
						image = item.url_iup
						break;
					
					case "studio":
						id = item.id_studio
						name = item.name_studio
						type = item.type_studio
						image = item.url_istd
						break;
					
					case "realized":
						id = item.id_rp
						name = item.name_rp
						type = item.type_rp
						image = item.url_irp
						break;
				
					default:
						break;
				}

				var thumbDOM = "<div class='gallery__thumb' id='proj-"+id+"' >"
					thumbDOM += "<div class='gallery__prev' style='background-image: url("+image+")' />"
					thumbDOM += "<div class='gallery__body'>"
						thumbDOM += "<div class='gallery__title'>"+name+"</div>"
						thumbDOM += "<div class='gallery__desc'>"+type+"</div>"
					thumbDOM += "</div>"
				thumbDOM += "</div>"
				
				arrThumb.push(thumbDOM)								
			})

			var isMobile = $(window).width() <= 576
			var chunkSize = $(window).width() > 992 ? 8 : 4
			var groupThumb = arrThumb.chunk(chunkSize)

			// if (arrThumb.length <= chunkSize) {
			// 	$("#gallery-project-prev").hide()
			// 	$("#gallery-project-next").hide()
			// } else {
			// 	$("#gallery-project-prev").show()
			// 	$("#gallery-project-next").show()
			// }

			$.each(groupThumb, function(indexGroup, group) {
				var groupDOM = "<div class='gallery__column'><div class='gallery__column-inner'>"
				$.each(group, function(index, item) {
					groupDOM += item
				})
				groupDOM += "</div></div>"
				$("#gallery-project").append(groupDOM).fadeIn()
			})
		}
	});
};

const fetchDataShop = function() {
	$("#gallery-shop").empty()
	
	$.ajax({
		type: "POST",
		url: baseUrl + 'shop/products' ,
		success: function(result){
			
			var json = $.parseJSON(result)
			var arrThumb = []
			$.each(json, function(index, item) {
				var thumbDOM = "<a href='"+baseUrl+"product?id="+item.id_item+"'>"
					thumbDOM += "<div class='gallery__thumb' id='product-"+item.id_item+"' >"
						thumbDOM += "<div class='gallery__prev' style='background-image: url("+item.url_img_item+")' />"
						thumbDOM += "<div class='gallery__body'>"
							thumbDOM += "<div class='gallery__title'>"+item.name_item+"</div>"
							thumbDOM += "<div class='gallery__desc mt-16'>Rp. "+item.price_item+"</div>"
						thumbDOM += "</div>"
					thumbDOM += "</div>"
				thumbDOM += "</a>"
				
				arrThumb.push(thumbDOM)								
			})

			var isMobile = $(window).width() <= 576
			var chunkSize = $(window).width() > 992 ? 8 : 4
			var groupThumb = arrThumb.chunk(chunkSize)


			// if (arrThumb.length <= chunkSize) {
			// 	$("#gallery-shop-prev").hide()
			// 	$("#gallery-shop-next").hide()
			// }

			$.each(groupThumb, function(indexGroup, group) {
				var groupDOM = "<div class='gallery__column'><div class='gallery__column-inner'>"
				$.each(group, function(index, item) {
					groupDOM += item
				})
				groupDOM += "</div></div>"
				$("#gallery-shop").append(groupDOM).fadeIn()
			})
		}
	});
};

const displaySlider = function(table, proj_id, table_id) {
	$("#carousel").empty()
	
	$.ajax({
		type: "POST",
		url: baseUrl + 'projects/slider' ,
		data: {
			table: table,
			proj_id: proj_id,
			table_id: table_id,
		},
		success: function(result){
			var json = $.parseJSON(result)
			var arrThumb = []
			$.each(json, function(index, item) {
				var imgUrl = ""
				switch (table) {
					case "img_unbuilt_project":
						imgUrl = item.url_iup
						break;
					
					case "img_studio":
						imgUrl = item.url_istd
						break;
					
					case "img_realized_project":
						imgUrl = item.url_irp
						break;
					
					case "img_shop_item":
						imgUrl = item.url_img_item
						break;
				
					default:
						imgUrl = ""
						break;
				}
				
				arrThumb.push("<img src='"+imgUrl+"' alt='"+imgUrl+"' />")								
			})

			$("#carousel").append(arrThumb)
			$("#popup-slider").fadeIn()
		}
	});
};

$(document).ready(function(){
	var tableImgName = null, tableIdName = null
	
	
	// INITIALIZE GALLERY
	if (route === "projects") {
		tableImgName = "img_studio"
		tableIdName = "id_studio"
		galleryPosition = 1
		fetchDataProject("studio")
	}
	if (route === "shop") {
		tableImgName = "img_shop_item"
		tableIdName = "id_item"
		galleryPosition = 1
		fetchDataShop()
	}
	
	// PROFILE
	$(".moyn-founders--left > img").mouseover(function(){
		$(".moyn-founders--right > .desc").fadeIn( "fast", "linear" )
		$(this).attr('src', baseUrl+"/assets/img/founders/left-1.png")
	})
	$(".moyn-founders--left > img").mouseleave(function(){
		$(".moyn-founders--right > .desc").fadeOut( "fast", "linear" )
		$(this).attr('src', baseUrl+"/assets/img/founders/left-0.png")
	})

	$(".moyn-founders--right > img").mouseover(function(){
		$(".moyn-founders--left > .desc").fadeIn( "fast", "linear" )
		$(this).attr('src', baseUrl+"/assets/img/founders/right-1.png")
	})
	$(".moyn-founders--right > img").mouseleave(function(){
		$(".moyn-founders--left > .desc").fadeOut( "fast", "linear" )
		$(this).attr('src', baseUrl+"/assets/img/founders/right-0.png")
	})


	// MENU
	// $(".moyn__menu-item").click(function() {
		// mobile view handling

		if($(window).width() <= 576) {
			// $(".navbar-toggler").click()		
			$("#content-sm").empty()
			switch (route) {
				case "profile":
					$("#content-sm").append($("<div class='c-white mb-16'>PROFILE</div>")).fadeIn()
					$("#content-sm").append($("#content-profile")[0]).fadeIn()
					break;
				case "projects":
					$("#content-sm").append($("<div class='c-white mb-16'>PROJECT</div>")).fadeIn()
					$("#content-sm").append($("#gallery-project")[0]).fadeIn()
					$("#gallery-project").css({
						"float"  : "none",
						"margin" : "auto",
					})
					break
				case "contact":			
					$("#content-sm").append($("<div class='c-white mb-16'>CONTACT</div>")).fadeIn()			
					$("#content-sm").append($("#content-contact")[0]).fadeIn()
					break;
				
				case "shop":
					$("#content-sm").append($("<div class='c-white mb-16'>SHOP</div>")).fadeIn()
					$("#content-sm").append($("#gallery-shop")[0]).fadeIn()
					$("#gallery-shop").css({
						"float"  : "none",
						"margin" : "auto",
					})
					break
			
				default:
					break;
			}
		}
	// })

	// FOOTER
	// $(".moyn-footer")[0].style.top = window.innerHeight - $(".moyn-footer")[0].clientHeight - 8


	// PROJECT

	$("#nav-unbuilt").click(function() {
		$("#nav-studio").removeClass("active")
		$("#nav-realized").removeClass("active")
		$("#nav-unbuilt").addClass("active")

		tableImgName = "img_unbuilt_project"
		tableIdName = "id_up"
		fetchDataProject("unbuilt")
	})
	$("#control-unbuilt").click(function() {
		$("#control-studio").removeClass("active")
		$("#control-realized").removeClass("active")
		$("#control-unbuilt").addClass("active")

		tableImgName = "img_unbuilt_project"
		tableIdName = "id_up"
		fetchDataProject("unbuilt")
	})

	$("#nav-studio").click(function() {
		$("#nav-studio").addClass("active")
		$("#nav-realized").removeClass("active")
		$("#nav-unbuilt").removeClass("active")

		tableImgName = "img_studio"
		tableIdName = "id_studio"
		fetchDataProject("studio")
	})
	$("#control-studio").click(function() {
		$("#control-studio").addClass("active")
		$("#control-realized").removeClass("active")
		$("#control-unbuilt").removeClass("active")

		tableImgName = "img_studio"
		tableIdName = "id_studio"
		fetchDataProject("studio")
	})


	$("#nav-realized").click(function() {
		$("#nav-studio").removeClass("active")
		$("#nav-realized").addClass("active")
		$("#nav-unbuilt").removeClass("active")

		tableImgName = "img_realized_project"
		tableIdName = "id_rp"
		fetchDataProject("realized")		
	})
	$("#control-realized").click(function() {
		$("#control-studio").removeClass("active")
		$("#control-realized").addClass("active")
		$("#control-unbuilt").removeClass("active")

		tableImgName = "img_realized_project"
		tableIdName = "id_rp"
		fetchDataProject("realized")		
	})


	// HAMBURGER
	$("#hamburger-menu").click(function() {
		$(this).toggleClass("open")
		$("#sidebar-menu").toggleClass("active")
		$("#sidebar-overlay").toggle()
	})



	// GALLERY
	var columnWidth = $(window).width() > 992 ? 508 : 258
	
	$("#gallery-project-prev").click(function() {
		var limitLeft = 1
		if (galleryPosition > limitLeft) {
			galleryPosition -= 1
			$("#gallery-project").animate({scrollLeft: columnWidth * galleryPosition - columnWidth}, 500)
			
			
		}
	})
	$("#gallery-project-next").click(function() {
		var limitRight = $("#gallery-project")[0].scrollWidth / columnWidth
		if (galleryPosition < limitRight) {
			$("#gallery-project").animate({scrollLeft: columnWidth * galleryPosition}, 500)
			galleryPosition++

			
		}
	})

	// $("#gallery-project").addEventListener("scroll", function() {
	// 	if (galleryPosition == limitLeft) {$("#gallery-project-prev").hide()}		
	// 	else {$("#gallery-project-prev").show()}	

	// 	if (galleryPosition == limitRight) {$("#gallery-project-next").hide()}
	// 	else {$("#gallery-project-next").show()}	
	// })


	// CAROUSEL
	var carouselWidth = $(window).width() > 576 ? 488 : 308

	$(document).on("click", ".gallery__thumb", function() {
		var table = tableImgName
		var proj_id = this.id.split("-")[1]
		var table_id  = tableIdName

		displaySlider(table, proj_id, table_id)
	})
	
	$("#carousel-nav-prev").click(function() {
		var limitLeft = 1
		if (carouselPosition > limitLeft) {
			carouselPosition -= 1		
			$("#carousel").animate({scrollLeft: carouselWidth * carouselPosition - carouselWidth}, 500)
		}
	})
	$("#carousel-nav-next").click(function() {
		var limitRight = $("#carousel")[0].scrollWidth / carouselWidth
		if (carouselPosition < limitRight) {
			$("#carousel").animate({scrollLeft: carouselWidth * carouselPosition}, 500)
			carouselPosition++
		}
	})

	$("#carousel-close").click(function() {
		carouselPosition = 1
		$("#carousel").scrollLeft(0)
		$("#popup-slider").hide()
	})
});