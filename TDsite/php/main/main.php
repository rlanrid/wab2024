<?php
    include "../connect/connect.php";
    include "../connect/session.php";
//     echo"<pre>";
//     var_dump($_SESSION);
//     echo"</pre>";
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trend Device</title>
    <!-- css -->
    <?php include "../include/head.php"?>
    <style>

    </style>
</head>

<body>
    <div id="wrap">

        <!-- <div class="mouse__cursor none"></div> -->
        <?php include "../include/header.php"?>
        <!-- //header -->
        
        <?php include "../include/nav.php"?>
        <!-- //nav -->

        <main id="main">
            <div id="slider">
                <div class="sliderWrap">
                    <div class="slider s1">
                        <div class="text">
                            <strong>iPhone 15 Pro</strong>
                            <p>티타늄. 초강력. 초경량. 초프로.</p>
                            <i>10월 13일 출시</i>
                            <a href="#">더 알아보기 ></a>
                        </div>
                    </div>
                    <div class="slider s2">
                        <div class="text">
                            <span>Galaxy Z Flip5</span>
                            <strong>갤럭시 Z 플립5</strong>
                            <p>갤럭시 Z 플립 사상 최대 크기의 커버 스크린, 플렉스 윈도우</p>
                            <i>08월 11일 출시</i>
                            <a href="#">더 알아보기 ></a>
                        </div>
                    </div>
                    <div class="slider s3">
                        <div class="text">
                            <span>SAMSUNG</span>
                            <strong>THOM BROWNE.</strong>
                            <p>NEW YORK</p>
                            <i>09월 12일 사전예약</i>
                            <a href="#">더 알아보기 ></a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- 이미지 고정 -->
            <div class="parallax__cont">
                <section id="section1" class="parallax__item">
                    <span class="item__name1 t1">
                        <h2>갤럭시 Z폴드 5</h2>
                        <a href="#">바로가기</a>
                    </span>
                    <span class="item__img1">
                        <img src="../../assets/img/z-Fold51.jpg" alt="GSAP이미지1">
                    </span>
                </section>
                <!-- //section1 -->

                <section id="section2" class="parallax__item">
                    <span class="item__img2">
                        <img src="../../assets/img/z-Fold52.jpg" alt="GSAP이미지2">
                    </span>
                </section>
                <!-- //section2 -->

                <section id="section6" class="parallax__item">
                    <span class="item__name t1">더 가볍고, 더 얇게.</span>
                    <span class="item__desc t2">
                        프레임이 줄어들었다고,<br> 성능을 타협하진 않았습니다.
                    </span>
                    <span class="item__img"></span>
                </section>
                <!-- //section6 -->
            </div>

            <div class="intro__inner container">
                <div class="intro__header">
                    <h2>Trend Device를 소개합니다.</h2>
                    <p>
                        Trend는 소비자들이 다양한 스마트폰 모델을 비교하고 최적의 선택을 할 수 있도록 도와주는 웹 사이트입니다.<br>
                        휴대폰 모델, 기능, 가격, 성능, 디자인 등과 같은 다양한 요소를 비교하고 평가해보세요!
                    </p>
                </div>
                <!-- //intro__header -->

                <div class="intro__images">
                    <div class="intro__img">
                        <img src="../../assets/img/icon__compare.png" alt="스마트폰 비교하기">
                        <span>스마트폰 비교하기</span>
                    </div>
                    <div class="intro__img">
                        <a href="../join/join.php"><img src="../../assets/img/icon__join.png" alt="회원가입"></a>
                        <span><a href="../join/join.php">회원가입</a></span>
                    </div>
                    <div class="intro__img">
                        <img src="../../assets/img/icon__comunity.png" alt="커뮤니티">
                        <span>커뮤니티</span>
                    </div>
                </div>
                <!-- //intro__img -->

                <div class="intro__footer">
                    <span>이미 회원이신가요?</span>
                    <div class="intro__btn">
                        <a href="../login/login.php">로그인</a>
                    </div>
                </div>
                <!-- //intro__footer -->
            </div>
        </main>
        <!-- //main -->

        <?php include "../include/footer.php" ?>
        <!-- //footer -->
    </div>
    <!-- //wrap -->
    <!-- gsap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.1/ScrollToPlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1/bundled/lenis.min.js"></script>

    <!-- script -->
    <script>

        window.onload = () => {
            // 슬라이드
            let currentIndex = 0;   //현재 이미지
            const sliderWrap = document.querySelector(".sliderWrap");   //전체 이미지
            const slider = document.querySelectorAll(".slider");    //각각이미지
            const sliderClone = sliderWrap.firstElementChild.cloneNode(true);
            sliderWrap.appendChild(sliderClone);

            let slideInterval;



            function slide() {
                currentIndex++;
                sliderWrap.style.transition = "all 0.6s";   //애니메이션 추가
                sliderWrap.style.marginLeft = -currentIndex * 100 + "%";  //왼쪽으로 100%씩 이동

                if (currentIndex == slider.length) {
                    setTimeout(() => {
                        sliderWrap.style.transition = "0s";
                        sliderWrap.style.marginLeft = "0";
                        currentIndex = 0;
                    }, 1000);
                }
            }
            slideInterval = setInterval(slide, 5000);
        };
    

        // 애니메이션
        const ani1 = gsap.timeline();
        ani1.from("#section1 .item__name1", {yPercent: -5, opacity: 0, ease: "expo.out", duration: 1,})
            .from("#section1 a", {yPercent: -5, opacity: 0, ease: "expo.out", duration: 1,});

        ScrollTrigger.create({
            animation: ani1,
            trigger: "#section1",
            start: "top center",
            end: "+=2000",
        });

        const ani2 = gsap.timeline();
        ani2.from("#section2 .item__img2", {
            autoAlpha: 0,
            scale: 3,
            width: "100%",
            height: "100vh"
        });

        ScrollTrigger.create({
            animation: ani2,
            trigger: "#section2",
            start: "top top",
            end: "+=2000",
            scrub: true,
            pin: true
        });

        const ani6 = gsap.timeline()
        ani6.from("#section6 .t1", { x: innerWidth * 1 })
            .from("#section6 .t2", { x: innerWidth * -1 })

        ScrollTrigger.create({
            animation: ani6,
            trigger: "#section6",
            start: "top top",
            end: "+=6000",
            scrub: true,
            anticipatePin: 1,
            pin: true
        });


        // 스무스효과

        const lenis = new Lenis()

        lenis.on('scroll', (e) => {
            console.log(e)
        })

        function raf(time) {
            lenis.raf(time)
            requestAnimationFrame(raf)
        }

        requestAnimationFrame(raf)
    </script>
</body>

</html>