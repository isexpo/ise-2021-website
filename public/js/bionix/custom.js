$(document).ready(function () {
    $(window).scroll(function () {
        if (this.scrollY > 20) {
            $('.navbar').addClass("sticky");
        } else {
            $('.navbar').removeClass("sticky");
        }
    });
});

if (window.matchMedia('(min-width: 992px)').matches){
    $(document).ready(function(){
        $("#close-wa").click(function(){
          $(".whatsapp-desktop").hide(500);
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
          $(".whatsapp").css({
                "background-color": "#E9E8E1",
                "padding": "12px 6px",
                "border-radius": "8px"
          });
        });
      });
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
});

