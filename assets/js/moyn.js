var galleryPosition = 1;
var carouselPosition = 1;
var windowWidth = $(window).width();
var tableImgName = null, tableIdName = null

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

			if (arrThumb.length <= chunkSize) {
				$("#gallery-project-prev").hide()
				$("#gallery-project-next").hide()
			} else {
				$("#gallery-project-prev").show()
				$("#gallery-project-next").show()
			}

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

const getAccordion = function() {
	$.ajax({
		type: "POST",
		url: baseUrl + 'news/times' ,
		success: function(result){
			var json = $.parseJSON(result)
			var arrGroup = []
			
			var groupedJSON =	_.groupBy(json, "tahun_news")

			_.mapObject(groupedJSON, function(array_bulan, nama_tahun) {
				var accordionDOM = "<li>"
					accordionDOM += "<a class='toggle toggle_year' href='javascript:void(0);'>"+nama_tahun+"</a>"
					accordionDOM += "<ul class='inner'>"
						$.each(array_bulan, function(index, item) {
							accordionDOM += "<li>"
								accordionDOM += "<a class='toggle toggle_month' id='"+nama_tahun+"-"+item.bulan_news+"' href='javascript:void(0);'>"+item.bulan_news+"</a>"
								accordionDOM += "<div class='inner'>"
								accordionDOM += "</div>"
							accordionDOM += "</li>"
						})
					accordionDOM += "</ul>"
				accordionDOM += "</li>"

				$("#news_accordion").append(accordionDOM)
			})
		}
	});
};

const fetchDataNews = function(year, month, element) {
	var list = []
	$.ajax({
		type: "POST",
		url: baseUrl + 'news/articles' ,
		data: {year: year.toString(), month: month.toString()},
		success: function(result){
			var json = $.parseJSON(result)
			$.each(json, function(index, item) {
				link = "<a id='"+item.id_news+"' href='"+baseUrl+"article?id="+item.id_news+"'>"+item.judul_news+"</a>"
				element.append(link)
			})
		},
	});
};

const displaySlider = function(table, proj_id, table_id) {
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
				
				arrThumb.push("<a class='moyn-lightbox' href='"+imgUrl+"' data-lightbox='roadtrip'>Image</a>")								
			})

			$(".moyn-lightbox-container").empty()
			$(".moyn-lightbox-container").append(arrThumb)
			$(".moyn-lightbox").first().click()
		}
	});
};

const resetGalleryPosition = function() {
	galleryPosition = 1
}

const initializeGallery = function() {
	if (route === "projects") {
		tableImgName = "img_studio"
		tableIdName = "id_studio"
		
		resetGalleryPosition()
		fetchDataProject("studio")
	}
	if (route === "shop") {
		tableImgName = "img_shop_item"
		tableIdName = "id_item"
		
		resetGalleryPosition()		
		fetchDataShop()
	}
	if(route === "news") {
		getAccordion()
	}
}

function isMobile() {
	if(windowWidth <= 576) {	
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
			case "news":			
				$("#content-sm").append($("<div class='c-white mb-16'>NEWS</div>")).fadeIn()			
				$("#content-sm").append($("#content-news")[0]).fadeIn()
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
}

$(window).resize(function() {
	windowWidth = $(window).width()
});

$(document).on("click", "#nav-unbuilt", function() {
	$("#nav-studio").removeClass("active")
	$("#nav-realized").removeClass("active")
	$("#nav-unbuilt").addClass("active")

	tableImgName = "img_unbuilt_project"
	tableIdName = "id_up"
	fetchDataProject("unbuilt")
})

$(document).on("click", "#nav-unbuilt-mobile", function() {
	$("#nav-studio-mobile").removeClass("active")
	$("#nav-realized-mobile").removeClass("active")
	$("#nav-unbuilt-mobile").addClass("active")

	tableImgName = "img_unbuilt_project"
	tableIdName = "id_up"
	fetchDataProject("unbuilt")
})

$(document).on("click", "#nav-studio", function() {
	$("#nav-studio").addClass("active")
	$("#nav-realized").removeClass("active")
	$("#nav-unbuilt").removeClass("active")

	tableImgName = "img_studio"
	tableIdName = "id_studio"
	fetchDataProject("studio")
})
$(document).on("click", "#nav-studio-mobile", function() {
	$("#nav-studio-mobile").addClass("active")
	$("#nav-realized-mobile").removeClass("active")
	$("#nav-unbuilt-mobile").removeClass("active")

	tableImgName = "img_studio"
	tableIdName = "id_studio"
	fetchDataProject("studio")
})

$(document).on("click", "#nav-realized", function() {
	$("#nav-studio").removeClass("active")
	$("#nav-realized").addClass("active")
	$("#nav-unbuilt").removeClass("active")

	tableImgName = "img_realized_project"
	tableIdName = "id_rp"
	fetchDataProject("realized")		
})
$(document).on("click", "#nav-realized-mobile", function() {
	$("#nav-studio-mobile").removeClass("active")
	$("#nav-realized-mobile").addClass("active")
	$("#nav-unbuilt-mobile").removeClass("active")

	tableImgName = "img_realized_project"
	tableIdName = "id_rp"
	fetchDataProject("realized")		
})

$(document).on("click", ".toggle", function(e) {
	e.preventDefault();
	var $this = $(this);

	if ($this.next().hasClass('show')) {
			$this.next().removeClass('show');
			$this.next().slideUp(350);
	} else {
			$this.parent().parent().find('li .inner').removeClass('show');
			$this.parent().parent().find('li .inner').slideUp(350);
			$this.next().toggleClass('show');
			$this.next().slideToggle(350);
	}
});

$(document).on("click", ".toggle_month", function(e) {
	e.preventDefault();
	$(this).next().empty()
	
	var elemParams = $(this)[0].id.split('-')
	var elemYear = elemParams[0]
	var elemMonth= elemParams[1]

	var inner = $(this).next()
	var list = fetchDataNews(elemYear, elemMonth, inner)
});

$(document).on("click", "#hamburger-menu", function() {
	$(this).toggleClass("open")
	$("#sidebar-menu").toggleClass("active")
	$("#sidebar-overlay").toggle()
})


// GALLERY
var columnWidth = windowWidth > 992 ? 508 : 258

$(document).on("click", "#gallery-project-prev", function() {
	var limitLeft = 1
	if (galleryPosition > limitLeft) {
		galleryPosition -= 1
		$("#gallery-project").animate({scrollLeft: columnWidth * galleryPosition - columnWidth}, 500)	
	}
})

$(document).on("click", "#gallery-project-next", function() {
	var limitRight = $("#gallery-project")[0].scrollWidth / columnWidth
	if (galleryPosition < limitRight) {
		$("#gallery-project").animate({scrollLeft: columnWidth * galleryPosition}, 500)
		galleryPosition++	
	}
})

// LIGHTBOX
$(document).on("click", ".gallery__thumb", function() {
	var table = tableImgName
	var proj_id = this.id.split("-")[1]
	var table_id  = tableIdName

	displaySlider(table, proj_id, table_id)
})

// PROFILE
$(".moyn-founders--left > img").mouseover(function(){
	$(".moyn-founders--right > .desc").fadeIn( 700, "linear" )
	$(this).attr('src', baseUrl+"/assets/img/founders/left-1.png")
})
$(".moyn-founders--left > img").mouseleave(function(){
	$(".moyn-founders--right > .desc").fadeOut( 700, "linear" )
	$(this).attr('src', baseUrl+"/assets/img/founders/left-0.png")
})

$(".moyn-founders--right > img").mouseover(function(){
	$(".moyn-founders--left > .desc").fadeIn( 700, "linear" )
	$(this).attr('src', baseUrl+"/assets/img/founders/right-1.png")
})
$(".moyn-founders--right > img").mouseleave(function(){
	$(".moyn-founders--left > .desc").fadeOut( 700, "linear" )
	$(this).attr('src', baseUrl+"/assets/img/founders/right-0.png")
})


$(document).ready(function(){
	initializeGallery()
	isMobile()
});