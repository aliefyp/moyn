onMenuClick = (elem) => {
	var menus = document.getElementsByClassName(elem.className)
	for (var i = 0; i < menus.length; i++)
        menus[i].classList.remove('active');

	elem.className += " active"
}