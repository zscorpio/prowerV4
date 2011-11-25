lastScrollY = 0;
function FloatScroll() {
    var diffY;
    if (document.documentElement && document.documentElement.scrollTop){
    	diffY = document.documentElement.scrollTop;
	}
    else if (document.body){
    	diffY = document.body.scrollTop;
	}
    else
    {}
    percent = .1 * (diffY - lastScrollY);
    if (percent > 0){
		percent = Math.ceil(percent);
	}
    else{
		percent = Math.floor(percent);
	}
    document.getElementById("leftside").style.top = parseInt(document.getElementById("leftside").style.top) + percent + "px";
    lastScrollY = lastScrollY + percent;
}

$(function(){
	$("#leftside").hover(
		function(){
			$(this).stop(true,false);
			$(this).animate({left:0},160);	
		},
		function(){
			$(this).animate({left:-160},160);	
		}
	)
})