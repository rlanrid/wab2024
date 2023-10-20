$(function(){
    // 이미지 슬라이드
    let currentIndex = 0;
    $(".sliderWrap").append(($(".slider").first().clone(true)));

    setInterval(function(){
        currentIndex++;
        $(".sliderWrap").animate({marginTop: -300 * currentIndex + "px"}, 600);

        if(currentIndex == 3){
            setTimeout(function(){
                $(".sliderWrap").animate({marginTop: 0}, 0);
                currentIndex = 0;
            }, 700);
            
        }
    }, 3000);

    // 메뉴
    $(".nav > ul > li").mouseover(function(){
        $(this).find(".submenu").stop().slideDown();
    });
    $(".nav > ul > li").mouseout(function(){
        $(this).find(".submenu").stop().slideUp();
    });

    // 탭메뉴
    const tabBtn = $(".info__menu > a");
    const tabCont = $(".info__contents > div");
    tabCont.hide().eq(0).show();

    tabBtn.click(function(){
        const index = $(this).index();

        $(this).addClass("active").siblings().removeClass("active");
        tabCont.eq(index).show().siblings().hide();
    });

    // 팝업
    $(".popup-btn").click(function(){
        $(".popup-view").show();
    });
    $(".popup-close").click(function(){
        $(".popup-view").hide();
    });
})

