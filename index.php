<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>


<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/logo1.png">
    <link rel="shortcut icon" href="assets/image/apple-icon.png" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>
    <link rel="stylesheet" href="index_style.css" />
    <!-- <link rel="stylesheet" href="./css/font.css"> -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    />
    <title>FIT FRENZY</title>
   
</head>
 
<body class="hold-transition skin-blue layout-top-nav">
    <!-- start header nav -->
	<?php include 'includes/navbar.php'; ?>
    <!-- end header nav -->


   
    <!-- partial:index.partial.html -->

  <div class="wrapper" style="background:#6699ff;">

    <div class="content">
      <!--<div class="bg-shape">
        <img src="https://www.kreedon.com/wp-content/uploads/2021/08/creativegaga_2022-10_134875d8-25c3-4d82-aa31-74f54cd37a4c_Olympic_Games_Illustration_2-768x432.webp" alt="">
      </div>-->
  
      <div class="product-img">
  
        <div class="product-img__item" id="img1">
          <img src="https://res-5.cloudinary.com/s247/image/upload/c_pad,dpr_1.0,f_auto,q_auto/media/catalog/product/w/o/woodworm-cricket-ib-select-grade-1-cricket-bat.png" alt="cricket bat" class="product-img__img">
        </div>
        <div class="product-img__item" id="img2">
          <img src="images/hockey.png" alt="hockey" class="product-img__img">
        </div>
        <div class="product-img__item" id="img3">
          <img src="https://www.firefoxbikes.com/dw/image/v2/BGQH_PRD/on/demandware.static/-/Sites-firefox-master/default/dwbacedf0b/all_images/112794811_main/street2022(5).png?sh=811&sfrm=png" alt="star wars" class="product-img__img">
        </div>
        <div class="product-img__item" id="img4">
          <img src="images/football.png" alt="football" class="product-img__img">
        </div>
      </div>
  
  
  
      <div class="product-slider">
        <button class="prev disabled">
          <span class="icon">
            <svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-left"></use></svg>
          </span>
        </button>
        <button class="next">
          <span class="icon">
            <svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg>
          </span>
        </button>
  
        <div class="product-slider__wrp swiper-wrapper">
          <div class="product-slider__item swiper-slide" data-target="img4">
            <div class="product-slider__card">
              <!--<img src="" alt="star wars" class="product-slider__cover">-->
              <div class="product-slider__content">
                <h1 class="product-slider__title">
                 FOOTBALL <br>
                  BALL
                </h1>
                <span class="product-slider__price">₹ 1000</span>
                <div class="product-ctr">
                  <div class="product-labels">
                  
  
                    
  
                    </div>
  
                  <span class="hr-vertical"></span>
  
                  <div class="product-inf">
                    <div class="product-inf__percent">
                      <div class="product-inf__percent-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                          <defs>
                            <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                              <stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
                              <stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
                            </linearGradient>
                          </defs>
                          <circle cx="50" cy="50" r="47" stroke-dasharray="240, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
                        </svg>
                      </div>
                      <div class="product-inf__percent-txt">
                        80%
                      </div>
                    </div>
  
                    <span class="product-inf__title">DURABILITY RATE</span>
                  </div>
  
                </div>
  
                <div class="product-slider__bottom">
                
				  <button id="myButton" class="product-slider__cart"><a href="category.php?category=Football">EXPLORE</a></button>
                </div>
              </div>
            </div>
          </div>
          <div class="product-slider__item swiper-slide" data-target="img1">
            <div class="product-slider__card">
              <!-- <img src="" alt="star wars" class="product-slider__cover"> -->
              <div class="product-slider__content">
                <h1 class="product-slider__title">
                CRICKET  <br> BAT
                </h1>
                <span class="product-slider__price">₹1000</span>
                <div class="product-ctr">
                 
  
                  <span class="hr-vertical"></span>
  
                  <div class="product-inf">
                    <div class="product-inf__percent">
                      <div class="product-inf__percent-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                          <defs>
                            <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                              <stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
                              <stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
                            </linearGradient>
                          </defs>
                          <circle cx="50" cy="50" r="47" stroke-dasharray="225, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
                        </svg>
                      </div>
                      <div class="product-inf__percent-txt">
                        75%
                      </div>
                    </div>
  
                    <span class="product-inf__title">DURABILITY</span>
                  </div>
  
                </div>
  
                <div class="product-slider__bottom">
				<button id="myButton" class="product-slider__cart"><a href="category.php?category=Cricket">EXPLORE</a></button>
  
                  
                </div>
              </div>
            </div>
          </div>
  
          <div class="product-slider__item swiper-slide" data-target="img2">
            <div class="product-slider__card">
              <!-- <img src="" alt="star wars" class="product-slider__cover"> -->
              <div class="product-slider__content">
                <h1 class="product-slider__title">
                 HOCKEY <br>BAT                                                                        
                </h1>
                <span class="product-slider__price">₹1000</span>
                <div class="product-ctr">
                  <div class="product-labels">
                    
  
                    
  
                    <div class="product-labels__group">
                      
                    </div>
  
                  </div>
  
                  <span class="hr-vertical"></span>
  
                  <div class="product-inf">
                    <div class="product-inf__percent">
                      <div class="product-inf__percent-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                          <defs>
                            <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                              <stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
                              <stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
                            </linearGradient>
                          </defs>
                          <circle cx="50" cy="50" r="47" stroke-dasharray="240, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
                        </svg>
                      </div>
                      <div class="product-inf__percent-txt">
                        80%
                      </div>
                    </div>
  
                    <span class="product-inf__title">DURABILITY</span>
                  </div>
  
                </div>
  
                <div class="product-slider__bottom">
				<button id="myButton" class="product-slider__cart"><a href="category.php?category=Hockey">EXPLORE</a></button>
  
                  
                </div>
              </div>
            </div>
          </div>
  
          <div class="product-slider__item swiper-slide" data-target="img3">
            <div class="product-slider__card">
              <!-- <img src="" alt="star wars" class="product-slider__cover"> -->
              <div class="product-slider__content">
                <h1 class="product-slider__title">
                FIRE FOX <br>
                  CYCLE
                </h1>
                <span class="product-slider__price">₹9999</span>
                <div class="product-ctr">
                  <div class="product-labels">
                   
  
                    
  
                  </div>
  
                  <span class="hr-vertical"></span>
  
                  <div class="product-inf">
                    <div class="product-inf__percent">
                      <div class="product-inf__percent-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                          <defs>
                            <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                              <stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
                              <stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
                            </linearGradient>
                          </defs>
                          <circle cx="50" cy="50" r="47" stroke-dasharray="240, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
                        </svg>
                      </div>
                      <div class="product-inf__percent-txt">
                        80%
                      </div>
                    </div>
  
                    <span class="product-inf__title">DURABILITY RATE</span>
                  </div>
  
                </div>
  
                <div class="product-slider__bottom">
				<button id="myButton" class="product-slider__cart"><a href="category.php?category=cycles">EXPLORE</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
    </div>
    

  </div>
  <svg class="hidden" hidden>
    <symbol id="icon-arrow-left" viewBox="0 0 32 32">
      <path d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z"></path>
    </symbol>
    <symbol id="icon-arrow-right" viewBox="0 0 32 32">
      <path d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z"></path>
    </symbol>
  </svg>

  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/scripts.php'; ?>
</body>
  <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
 
 <script>
    var swiper = new Swiper('.product-slider', {
        spaceBetween: 30,
        effect: 'fade',
        // initialSlide: 2,
        loop: false,
        navigation: {
            nextEl: '.next',
            prevEl: '.prev'
        },
        // mousewheel: {
        //     // invert: false
        // },
        on: {
            init: function(){
                var index = this.activeIndex;

                var target = $('.product-slider__item').eq(index).data('target');

                console.log(target);

                $('.product-img__item').removeClass('active');
                $('.product-img__item#'+ target).addClass('active');
            }
        }
    });

    swiper.on('slideChange', function () {
        var index = this.activeIndex;

        var target = $('.product-slider__item').eq(index).data('target');

        console.log(target);

        $('.product-img__item').removeClass('active');
        $('.product-img__item#'+ target).addClass('active');

        if(swiper.isEnd) {
            $('.prev').removeClass('disabled');
            $('.next').addClass('disabled');
        } else {
            $('.next').removeClass('disabled');
        }

        if(swiper.isBeginning) {
            $('.prev').addClass('disabled');
        } else {
            $('.prev').removeClass('disabled');
        }
    });

    $(".js-fav").on("click", function() {
        $(this).find('.heart').toggleClass("is-active");
    });
  </script>
