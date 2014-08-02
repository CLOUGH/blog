$(function(){
	var $win = $(window);

	$win.scroll(function(){
		if($win.scrollTop() == 0){
			//alert("Scrolled to Page Top");
			$(".wrapper").css("padding-top","43px");
			$(".navbar.ui.menu").css("opacity","1");
		}
		else if($win.height() + $win.scrollTop() == $(document).height()){
			//alert('Scrolled to Page Bottom');
		}
		else{
			$(".wrapper").css("padding-top","0px");
			$(".navbar.ui.menu").css("opacity","0.8");
		}
	});
});