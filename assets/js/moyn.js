Array.prototype.chunk = function ( n ) {
	if ( !this.length ) { return []; }
	return [ this.slice( 0, n ) ].concat( this.slice(n).chunk(n) );
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
		// if (this.id == "projects") {$("#nav-studio").click()}
	})

	// AJAX PROJECT
	$("#nav-unbuilt").click(function() {
		$("#proj-gallery").empty()
		
		// toggle navigator class 
		$("#nav-studio").removeClass("active")
		$("#nav-realized").removeClass("active")
		$("#nav-unbuilt").addClass("active")

		// fetch data
		var type = $("#nav-unbuilt").text()
		$.ajax({
			type: "POST",
			url: baseUrl+'moyn/project',
			data: {type: "unbuilt_project"},
			success: function(result){
				var json = $.parseJSON(result)
				var arrThumb = []
				$.each(json, function(index, item) {
					var thumb_up = "<div class='proj-gallery__thumb' id='"+item.id_up+"' >"
						thumb_up += "<div class='proj-gallery__prev' style='background-image: url("+"http://placehold.it/100x100"+")' />"
						thumb_up += "<div class='proj-gallery__body'>"
							thumb_up += "<div class='proj-gallery__title'>"+item.name_up+"</div>"
							thumb_up += "<div class='proj-gallery__desc'>"+item.type_up+"</div>"
						thumb_up += "</div>"
					thumb_up += "</div>"
					
					arrThumb.push(thumb_up)	
				})

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
	})

	$("#nav-studio").click(function() {
		$("#proj-gallery").empty()

		// toggle navigator class 
		$("#nav-studio").addClass("active")
		$("#nav-realized").removeClass("active")
		$("#nav-unbuilt").removeClass("active")

		// fetch data
		var type = $("#nav-studio").text()
		$.ajax({
			type: "POST",
			url: baseUrl + 'moyn/project',
			data: {type: "studio_project"},
			success: function(result){
				var json = $.parseJSON(result)
				var arrThumb = []
				$.each(json, function(index, item) {
					var thumb_sp = "<div class='proj-gallery__thumb' id='"+item.id_studio+"' >"
						thumb_sp += "<div class='proj-gallery__prev' style='background-image: url("+"http://placehold.it/100x100"+")' />"
						thumb_sp += "<div class='proj-gallery__body'>"
							thumb_sp += "<div class='proj-gallery__title'>"+item.name_studio+"</div>"
							thumb_sp += "<div class='proj-gallery__desc'>"+item.type_studio+"</div>"
						thumb_sp += "</div>"
					thumb_sp += "</div>"
					
					arrThumb.push(thumb_sp)								
				})

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
	})

	$("#nav-realized").click(function() {
		$("#proj-gallery").empty()

		// toggle navigator class 
		$("#nav-studio").removeClass("active")
		$("#nav-realized").addClass("active")
		$("#nav-unbuilt").removeClass("active")

		// fetch data 
		var type = $("#nav-realized").text()
		$.ajax({
			type: "POST",
			url: baseUrl + 'moyn/project',
			data: {type: "realized_project"},
			success: function(result){
				var json = $.parseJSON(result)
				var arrThumb = []
				$.each(json, function(index, item) {
					var thumb_rp = "<div class='proj-gallery__thumb' id='"+item.id_rp+"' >"
						thumb_rp += "<div class='proj-gallery__prev' style='background-image: url("+"http://placehold.it/100x100"+")' />"
						thumb_rp += "<div class='proj-gallery__body'>"
							thumb_rp += "<div class='proj-gallery__title'>"+item.name_rp+"</div>"
							thumb_rp += "<div class='proj-gallery__desc'>"+item.type_rp+"</div>"
						thumb_rp += "</div>"
					thumb_rp += "</div>"
					
					arrThumb.push(thumb_rp)
					// $("#proj-gallery").append(thumb_rp).fadeIn()
				})

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
				// <div class='proj-gallery__column'>
			}
		});
	})



	// GALLERY
	var columnWidth = $(window).width() > 992 ? 508 : 258
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
});