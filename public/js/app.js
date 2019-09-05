function init() {
	expandSideBar();
}

function expandSideBar() {
	var sidebar = document.querySelector('aside');
	var viewportHeight = window.innerHeight;

	sidebar.style.height = viewportHeight + 'px';
}