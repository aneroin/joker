$(document).ready(function($){
    $(window).load(function(){
	    $('body').toggleClass('loaded');
	    window.setTimeout(function(){$('#loader-wrapper').remove()}, 1000);
	});
});