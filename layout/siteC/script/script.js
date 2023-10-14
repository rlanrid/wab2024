$(function(){
    // 이미지 슬라이드
    let currentIndex = 0;   //현재이미지
    $(".sliderWrap").append($(".slider").first().clone(true));

    setInterval(function(){     //3초에 한번씩 실행
        currentIndex++;     //현재 이미지를 1씩 증가
        $(".sliderWrap").animate({marginTop: -350 * currentIndex + "px"}, 600);

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

    // 팝업
    $(".popup-btn").click(function(){
        $(".popup-view").show();
    });
    $(".popup-close").click(function(){
        $(".popup-view").hide();
    });
})