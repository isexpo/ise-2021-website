$(document).ready(function () {
    if ($(window).scrollTop() < 1 && $(window).width() > 991) {
        $('.navbar').addClass('bg-transparent')
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
});



function getDirection() {
    var windowWidth = window.innerWidth;
    var direction = window.innerWidth <= 760 ? 'horizontal' : 'vertical';

    return direction;
}