// 헤더고정
$(window).scroll(
    function(){
        if($(window).scrollTop() > $('.main_viual').height()){
           $('#header').addClass("fix");
       }else{
            $('#header').removeClass("fix");
        }
    }
)


/*비주얼 영역 브라우저에 따른 리사이징*/

   $(document).ready(function(){
   $('.landingArea').css('height', $(window).height() - 0 );
   //$('.listBox').css({marginTop:"-"+$(".listBox").height()/2+"px"});
   $(window).resize(function() {
        $('.landingArea').css('height', $(window).height() - 0 );
	//	 $('.listBox').css({marginTop:"-"+$(".listBox").height()/2+"px"});

   });
});







/*전체메뉴*/
$(function(){
$(".all_nav .mobile a").click(function() {

  //메뉴 선택
  if($(this).hasClass('on'))
  {
  	$(this).removeClass('on');
  	$(this).next(".deth_2").slideToggle(300).siblings(".deth_2").slideUp("slow");
  }
  else
  {

  	$(this).addClass('on').parent().siblings('li').find('> a').removeClass('on');

  	if($(this).next(".deth_2") && $(this).next(".deth_2").is(":hidden"))
  	{
  		$(this).next(".deth_2").slideToggle(300).siblings(".deth_2").slideDown("slow");
  	}

	//선택한 메뉴를 제외하고 다른 메뉴의 하위 메뉴 닫기
	$(this).addClass('on').parent().siblings('li').find('> ul').each(function(index, target){
		if($(target).is(':visible')){
			$(target).slideToggle(300).slideUp("slow");
		}
	});
  }

});
});



jQuery(window).resize(function () {
   if(jQuery(window).width() > 960){
      $('.close').click();
    }
});



// 탭
$(function(){
	$('.msub_tab .deth_1').click(function(){
		$(this).toggleClass('on')
		})
	});


/*gnb*/
$(document).ready(function(){

	/*네이게이션*/

	$("#nav > li > a").on("mouseenter", function(){
		var nav_idx = $("#nav > li > a").index(this);
		var $ul = $(this).next("ul");
		$("#nav > li > a").removeClass("on").eq(nav_idx).addClass("on");
		if( $ul.is(":animated") ) return ;
		$ul.slideDown(300);
		$("#nav > li > ul > li").removeClass("on");

	});


	$("#nav > li").mouseleave(function(){
		$("#nav > li > ul").slideUp(300);
		$("#nav > li > a").removeClass("on");
		$("#nav > li > ul > li").removeClass("on");
		$("#nav > li > ul > li > ul").hide();

	});

	$("#nav > li > a").focusin(function(){
		if ($(this).next("ul").css("display") == "none")
			$("#nav > li > ul").slideUp();
			$(this).next("ul").slideDown();

	});

    $(".listBox .deth_1 a").click(function() {
        if ($(this).next(".deth_2").length != 0 && !$(this).next(".deth_2").is(":visible")) {
			  $(this).addClass('on');
        } else if ($(this).next(".deth_2").length == 0) {
        } else {
            $(this).removeClass('on');
			        }
        $(this).next(".deth_2").slideToggle(300).siblings(".deth_2").slideUp("slow");

});


});


  $(document).ready(function() {

	$('.sec01 .arrow_btn').hover(function(){
		$(this).parent().parent().next().toggleClass ('on')

	});

});



/*** Popup ***/
$(function(){

	var PopBg = $('.black_bg');
	var PopHidden = $('body');
	var PopCont = $('.popup');

	$('.btn_pop').click(function() {
		PopBg.fadeIn();
		PopHidden.css('height', $(window).height());
		var activePop = $(this).attr("href");
		$(activePop).fadeIn();
		$(activePop).css('margin-top', -($(activePop).find('.pop_area').innerHeight() /2));
		$(activePop).find('.pop_cont').css('max-height', $(window).height() - 90);
		$('body').addClass("noScroll");
		return false;
	});



	$(window).resize (resizeBoxPop).resize();
	function resizeBoxPop(){
		$('.pop_cont').css('max-height', $(window).height() - 90);
	}


	$('.pop_cl').click(function() {
		$(PopBg).fadeOut();
		$(PopCont).fadeOut();
		PopHidden.css('height', 'auto');
		PopCont.removeClass('on');
		$('body').removeClass("noScroll");
		return false;
	});

});


/*** 위로 ***/
$(function(){
    $("#cmTopScroll").click(function (){ $("html, body").animate({scrollTop:0}, 200); });
    $(window).scroll(function (){
	var top = $(document).scrollTop();

	if(top > 300){
     $("#cmTopScroll").stop().animate({"bottom":40}, 250);
        }else{
            $("#cmTopScroll").stop().animate({"bottom":-200}, 250);
        }
    });
});


  /*슬라이딩*/
$(function(){
  	var quick = $('.downBtn a, .TopScroll a, .bottom_arrow a'),
		easi = 'easeInOutExpo',
		speed = 1000;
	quick.on('click', function(){
		var $this = $(this),
			href = $this.attr('href'),
			body = $('html, body'),
			scrollPosition = $(href).position().top;
	if(href == null){return false;}
		body.stop().animate({
			scrollTop : scrollPosition
		}, {
			duration:speed, easing: easi
		});
		return false;
	});
});


   /*서브탭메뉴*/
jQuery(document).ready(function(){
	jQuery(".location").find(".gnbMenu").each(function(){
		jQuery(this).click(function(){
			jQuery(this).removeClass("on").find(".depthDiv").stop(true, true).slideDown(300);
		}, function(){
			jQuery(this).addClass("on").find(".depthDiv").stop(true, true).slideUp(300);
		})
		jQuery(this).click(function(){
			if(jQuery(this).find(".depthDiv").is(":hidden")) {
				jQuery(this).find(".depthDiv").stop(true, true).slideDown(300);
			} else {
				jQuery(this).find(".depthDiv").stop(true, true).slideUp(300);
				jQuery(this).removeClass("on").find(".depthDiv").stop(true, true).slideUp(300);
			}
		}).mouseleave(function(){
			jQuery(this).find(".depthDiv").stop(true, true).slideUp(300);
			jQuery(this).removeClass("on").find(".depthDiv").stop(true, true).slideUp(300);
		})
	})
});


  /*윈도우팝업*/
function popupOpen(){
	var popUrl = "login_window.html";	//팝업창에 출력될 페이지 URL
	var popOption = "width=490, height=363, resizable=no, scrollbars=no, status=no;";    //팝업창 옵션(optoin)
		window.open(popUrl,"",popOption);
	}



	// 모바일gnb
$(document).ready(function() {
 $('body').append('<span class=\"dimd\"></span>');
 $('.open').click(function() {
	    anioption = { time:0.8, easing:'easeOutCubic' };
        $('.all_menu').animate({"top": "55px"}, anioption).show();
		 $(this).hide();
	 $('.close').show();
	 $('#header').addClass("on");
	 $('.all_menu').css('opacity','1');
	 $('.dimd').fadeIn();
	    });


$('.close, .dimd').click(function(){
	  anioption = { time:0.2, easing:'linear' };
      $('.all_menu').animate({"top": "-380px"}, anioption);
   	 $(this).hide();
	  $('.open').show();
	  $('#header').removeClass("on");
	  $('.all_menu').css('opacity','0');
	  $('.all_menu').css('display','none');
	  $('.dimd').fadeOut();
	  $('.close').hide();
    })

	})


//로그인 클레스
$(function() {
	/*로그인클릭시*/
	$(".login_btn").click(function () {
		$("#header").toggleClass("active");
	});
});


$(function() {
        $('.faq_con li').click(function() {
            if ($(this).hasClass('target')) {
                $(this).removeClass('target').children('.st').slideUp()
            } else {
                $(this).addClass('target').children('.st').slideDown()
                    .parent('li')
                    .siblings('li').removeClass('target').children('.st').hide()
											$('html,body').animate({
				        scrollTop: $('.target').eq(0).offset().top
				    }, 'slow');
            }
        })
        if ($('.faq_con li').hasClass('target')) {
            $('.faq_con li.target').children('.st').show()
        } else {}
    })
    //faq부분 제이쿼리
