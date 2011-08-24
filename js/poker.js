$(document).ready(function(){
	$('ul#main-menu li').click(function() {
		var numb = $("ul#main-menu li").index(this);
		$(this).parent().children().removeClass("current");
		$(this).parent().children().eq(numb).addClass("current");
		$('div.maincontent').hide().eq(numb).fadeIn('slow');
	});

});


