// JavaScript Document
$(function(){
	$('#slides').slides({
			play: 5000,
			pause: 2500,
			hoverPause: false,
			effect: 'fade, fade',
			pagination:true,
			generatePagination:false,
			fadeSpeed:800,
			fadeEasing:"easeOutQuad",
			crossfade:true,
			animationStart: function(current){
					$('.caption img').each(function(){$(this).animate({opacity:"1"},1000 );	});
					/*if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};*/

				},
				animationComplete: function(current){
					$('.caption img').each(function(){$(this).animate({opacity:"1"},1000 );	});
					/*if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};*/

				},
				slidesLoaded: function() {
					$('.b1p1').animate({opacity:"1"},1000 ,function(){
						$('.b1p2').animate({opacity:"1"},1000 ,function(){
							$('.b1p3').animate({opacity:"1"},1000 );
						});
					});	
				}
	});
	/*$(".cap1").css({"width":0,"opacity":0});
	$(".cap1").show().animate({width:"960px",opacity:"1"},2500);*/
	/*var $list=$('.pagination li a');
	$list.click(function(){
		var index=$list.index(this);
		$('.caption').eq(index).fadeIn(5000).siblings(".caption").fadeOut(1000);
	});*/
	$('.nav-menu').hover(function(){
		$(this).children('.dropdowns').slideDown(300);},
	function(){
		$(this).children('.dropdowns').slideUp(300);
		});
	$('.nav-menu').click(function(){
		$(this).addClass("n-m-current").siblings().removeClass("n-m-current");
	});
	$('a').click(function(){
		$(this).blur();
	});
	subheight=$(".sub-content").height();
	$(".sidebar-shadow").height(subheight);
	$(".btn-show-all").toggle(
		function(){
			$(this).html("折叠详情<span >»</span>");
			$(this).parent(".ml15").parent(".fl").parent(".title").siblings(".content").slideDown(300);
		},
		function(){
			$(this).html("展开全部<span >»</span>");
			$(this).parent(".ml15").parent(".fl").parent(".title").siblings(".content").slideUp(300);
		}
	);
	$(".btn-show-all.biz").toggle(
		function(){
			$(this).html("折叠全部<span >»</span>");
			$(this).parent(".ml5").parent(".title").siblings(".content").slideDown(300);
		},
		function(){
			$(this).html("展开全部<span >»</span>");
			$(this).parent(".ml5").parent(".title").siblings(".content").slideUp(300);
		}
	);
	
});