$(document).ready(function() {
     var windowWidth = $(window).width();
    if(windowWidth > 1025){
    	$("#fitflakes_landing").addClass("animatedParent animateOnce");
    	$(".h1_text").addClass("animated bounceInDown");
    	$(".h2_text_logo").addClass("animated bounceInRight slow");
    	$(".nuts_img_parent").addClass("animatedParent animateOnce");
    	$(".nuts_img").addClass("animated fadeInLeft");
    	$(".zlaki_img_parent").addClass("animatedParent animateOnce");
    	$(".zlaki_img").addClass("animated fadeInRight");
    	$(".vkusi").addClass("animatedParent animateOnce");
    	$(".vkusi_h2").addClass("animated shake");       	
    }
    else{
    	$("#fitflakes_landing").removeClass("animatedParent animateOnce");
    	$(".h1_text").removeClass("animated bounceInDown");
    	$(".h2_text_logo").removeClass("animated bounceInRight slow");
    	$(".nuts_img_parent").removeClass("animatedParent animateOnce");
    	$(".nuts_img").removeClass("animated fadeInLeft");
    	$(".zlaki_img_parent").removeClass("animatedParent animateOnce");
    	$(".zlaki_img").removeClass("animated fadeInRight");
    	$(".vkusi").removeClass("animatedParent animateOnce");
    	$(".vkusi_h2").removeClass("animated shake");          	  
    }

});
$(document).ready(function() {
 
  $(window).resize(function(){
    var windowWidth = $(window).width();
    if(windowWidth > 1025){
    	$("#fitflakes_landing").addClass("animatedParent animateOnce");
    	$(".h1_text").addClass("animated bounceInDown");
    	$(".h2_text_logo").addClass("animated bounceInRight slow");
    	$(".nuts_img_parent").addClass("animatedParent animateOnce");
    	$(".nuts_img").addClass("animated fadeInLeft");
    	$(".zlaki_img_parent").addClass("animatedParent animateOnce");
    	$(".zlaki_img").addClass("animated fadeInRight");
    	$(".vkusi").addClass("animatedParent animateOnce");
    	$(".vkusi_h2").addClass("animated shake");       	
    }
    else{
    	$("#fitflakes_landing").removeClass("animatedParent animateOnce");
    	$(".h1_text").removeClass("animated bounceInDown");
    	$(".h2_text_logo").removeClass("animated bounceInRight slow");
    	$(".nuts_img_parent").removeClass("animatedParent animateOnce");
    	$(".nuts_img").removeClass("animated fadeInLeft");
    	$(".zlaki_img_parent").removeClass("animatedParent animateOnce");
    	$(".zlaki_img").removeClass("animated fadeInRight");
    	$(".vkusi").removeClass("animatedParent animateOnce");
    	$(".vkusi_h2").removeClass("animated shake");          	  
    } 
  });
});
$(document).ready(function(){
    $("#menu").on("click","a", function (event) {
        event.preventDefault();
        //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('href'),
        //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;
        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1500);
    });
});

 	

