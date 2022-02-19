$(document).ready(function () {
    if ($(window).scrollTop() < 1 && $(window).width() > 991) {
        $('.navbar').addClass('bg-transparent')
    }


      // show scroll-up-btn    
      if(this.scrollY > 1500){
        $('.scroll-up-btn').addClass("show");
    }else{
        $('.scroll-up-btn').removeClass("show");
    }


    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        // centeredSlides: true,
        // autoplay: {
        //   delay: 3000,
        //   disableOnInteraction: false,
        // },
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 3000,
        },
    });

    var swiperVertical = new Swiper('.vertical', {
        direction: 'vertical',
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        on: {
            resize: function () {
                swiperVertical.changeDirection(getDirection());
            },
        },
        autoplay: {
            delay: 3000,
        },
    });
    swiperVertical.mousewheel.disable();
    $(window).scroll(function () {
        if (this.scrollY > 20) {
            $('.navbar').addClass("sticky");
        } else {
            $('.navbar').removeClass("sticky");
        }

        let currentPos = $(window).scrollTop();
        if (currentPos < 1 && $(window).width() > 991) {
            $('.navbar').addClass('bg-transparent')
        } else {
            $('.navbar').removeClass('bg-transparent')
        }
        let current = ''
        let section = $('section')
        section.each((index) => {
            if (currentPos >= (section[index].offsetTop - section[index].clientHeight / 3)) {
                current = section[index].getAttribute('id')
            }
        })
        let nav = $('.nav-link')
        nav.addClass((index) => {
            if (nav[index].href.includes(current) && current !== '') {
                nav.removeClass('active')
                return 'active'
            }
        })
    });

     // scroll-btn-function    
     $('.scroll-up-btn').click(function(){
        $('html').animate({scrollTop: 0},1000);
        $('html').css("scrollBehavior", "auto");
    });
});



function getDirection() {
    var windowWidth = window.innerWidth;
    var direction = window.innerWidth <= 760 ? 'horizontal' : 'vertical';

    return direction;
}

// whatsapp-function
if (window.matchMedia('(min-width: 992px)').matches){
    $(document).ready(function(){
        $("#close-wa").click(function(){
          $(".whatsapp-desktop").hide(500);
          $(".scroll-up-btn").animate({
            "bottom": "-=110px"
          },500);
          $(".whatsapp").css({
                  "background-color": "#25D366",
                  "padding": "8px 12px",
                  "border-radius": "8px",
                  "cursor": "pointer"
          });

          $(".whatsapp-icon").show();
          
        });
        $(".whatsapp-icon").click(function(){
          $(".whatsapp-icon").hide();
          $(".whatsapp-desktop").show(500);
          $(".scroll-up-btn").animate({
                "bottom": "+=110px"
          },500);
          $(".whatsapp").css({
                "background-color": "rgba(114, 69, 121, 0.9)",
                "padding": "12px 6px",
                "border-radius": "8px"
          });
        });
      });
}