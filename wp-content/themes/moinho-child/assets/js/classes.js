var Util = {
    toggleMenu: function (e) {
    	window.scrollTo({
		  top: 0,
		  left: 0,
		  behavior: 'smooth'
		}),
    	$(e).parent().toggleClass('toggle'),
    	$('.mobile-navigation, body').toggleClass('toggle');
    },     
};