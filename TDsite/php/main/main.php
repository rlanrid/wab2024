<?php 
    include "../connect/connect.php"
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trend Device</title>
    
    <!-- css -->
    <?php include "../include/head.php" ?>

</head>

<body>
    <div id="wrap">
        <div class="mouse__cursor none"></div>
        <?php include "../include/header.php" ?>
        <!-- //header -->

        <?php include "../include/nav.php" ?>
        <!-- //nav -->

        <main id="main">
            <div id="slider">
                <div class="sliderWrap">
                    <div class="slider s1">
                        <span>
                            <strong>테스트</strong><br>
                            티타늄. 초강력. 초경량. 초프로.<br>
                            <i>10월 13일 출시</i><br>
                            <a>더 알아보기 ></a>
                        </span>
                    </div>
                    <div class="slider s2">
                        <span>
                            <strong>iPhone 15 Pro</strong><br>
                            티타늄. 초강력. 초경량. 초프로.<br>
                            <i>10월 13일 출시</i><br>
                            <a>더 알아보기 ></a>
                        </span>
                    </div>
                    <div class="slider s3">
                        <span>
                            <strong>iPhone 15 Pro</strong><br>
                            티타늄. 초강력. 초경량. 초프로.<br>
                            <i>10월 13일 출시</i><br>
                            <a>더 알아보기 ></a>
                        </span>
                    </div>
                </div>
            </div>
            <div id="modal" class="modal-overlay">
                <div class="modal">
                    <div class="modal__header">
                        <h2>제품 사양</h2>
                        <div class="modal__close"></div>
                    </div>

                    <div class="modal__body">
                        <div class="modal__img">
                            <img src="../../assets/img/info-min.jpg" alt="제품 사진">
                        </div>
                        <div class="spec">
                            <ul>
                                <li>
                                    <div class="img"></div>
                                    <div class="desc">A17Pro</div>
                                    <h5>Process</h5>
                                </li>
                                <li>
                                    <div class="img"></div>
                                    <div class="desc">17.0cm</div>
                                    <h5>Display</h5>
                                </li>
                                <li>
                                    <div class="img"></div>
                                    <div class="desc">A17</div>
                                    <h5>Camera</h5>
                                </li>
                                <li>
                                    <div class="img"></div>
                                    <div class="desc">A17</div>
                                    <h5>Battery</h5>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <div class="text">15.9 x 76.7 x 8.25</div>
                                    <h5>Size</h5>
                                </li>
                                <li>
                                    <div class="text">221g</div>
                                    <h5>weight</h5>
                                </li>
                                <li>
                                    <div class="text">
                                        256GB 512GB 1TB
                                    </div>
                                    <h5>Capacity</h5>
                                </li>
                                <li>
                                    <div class="img"></div>
                                    <div class="desc">USB-C</div>
                                    <h5>USB-TYPE</h5>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- //modal -->
            </div>
            <!-- //modal-overlay -->



            <!-- 이미지 고정 -->
            <div class="parallax__cont">
                <section id="section1" class="parallax__item">
                    <span class="item__name t1">갤럭시 플립5</span>
                    <span class="item__desc t2">갤럭시 Z 플립 사상</span>
                    <span class="item__desc t3">갤최대 크기의 커버 스크린,</span>
                    <span class="item__desc t4">플렉스 윈도우</span>
                    <span class="item__img"></span>
                </section>
                <!-- //section1 -->

                <section id="section2" class="parallax__item">
                    <span class="parallax__item__img i1"></span>
                    <span class="parallax__item__img i2"></span>
                    <span class="parallax__item__img i3"></span>
                    <span class="parallax__item__img i4"></span>
                </section>
                <!-- //section2 -->

                <section id="section3" class="parallax__item">
                    <span class="item__name t1">아이폰15</span>
                    <span class="item__desc t2">USB‑C.</span>
                    <span class="item__desc t3">호환성의 아이콘.</span>
                    <span class="item__desc t4"></span>
                    <span class="item__img"></span>
                </section>
                <!-- //section3 -->

                <!-- <section id="section4">
                <div class="section4__img"></div>
                <div class="section4__thumb"></div>
                <div class="section4__btn">
                    <a href="#" class="prev" title="왼쪽이미지">prev</a>
                    <a href="#" class="next" title="다음이미지">next</a>
                </div>
            </section> -->
                <!-- //section4 -->


                <section id="section5" class="parallax__item">
                    <span class="item__img"></span>
                </section>
                <!-- //section5 -->

                <section id="section6" class="parallax__item">
                    <span class="item__name t1">갤럭시Z폴드5</span>
                    <span class="item__desc t2">보다 가볍고</span>
                    <span class="item__desc t3">한 손에 들어오는</span>
                    <span class="item__desc t4">디자인</span>
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
                        <img src="../../assets/img/icon__join.png" alt="회원가입">
                        <span>회원가입</span>
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
                        <a href="#">로그인</a>
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

    <!-- script -->
    <script src="../../assets/script/script.js"></script>
    <script src="../../assets/script/nav.js"></script>
</body>

</html>