
//art zoom
function isTouch(e){
	return e.type.substring(0,5) == "touch";
}
function ev(e){
	if(isTouch(e)){
		if(!e.originalEvent.touches.length) return e.originalEvent.changedTouches;
		else return e.originalEvent.touches;
	} else {
		return[e];
	}
}
function getEXY(e,o) {
	let offs =$(o||e.target).offset();
	x = e.pageX - offs.left;
	y = e.pageY - offs.top;
	return{x,y};
}
function getEventXY(e,o) {
	return getEXY(ev(e)[0],o);
}

let clamp = (a,min,max) => a>max?max:a<min?min:a;

$(".original-image").on("mousemove touchmove",function(e){

	let pos = getEventXY(e,this);

	let zoompos = {
		x:clamp(pos.x-(125*0.5),0,249),
		y:clamp(pos.y-(125*0.5),0,436)
	}

	$(".zoomer").css({
		transform:`translate(${zoompos.x}px,${zoompos.y}px)`
	})
	$(".zoomed-image").css({
		"background-position":`${-zoompos.x*4}px ${-zoompos.y*4}px`
	})
})




//Derivative work

$(document).ready(function(){
	$("article:first").show().siblings().hide();

		$("li").on("click", function(){
			let i = $(this).index();
			$("article").eq(i).show().siblings().hide();
			$(this).addClass("active").siblings().removeClass("active");
		});
});




//MUSEUM- accordion
$(".best dt").on('click',function(){
	$(this).next().slideDown()
	.siblings('dd').slideUp();
});




//lightbox
const openLightBox = function(event){
	console.log(event.target.src);

	//change the content of the light box
	$(".lightbox-content").html("<img src='"+ event.target.src +"'>");

	//add a class to the light box and show it
	$(".lightbox").addClass("active");
}

//Document Ready
$(function(){

	$("body").on("click",".gallery img", openLightBox);

	$(".lightbox-back").on("click",function(){
		$(".lightbox").removeClass("active");
})

});




