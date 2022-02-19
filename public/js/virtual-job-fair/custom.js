$(document).ready(function(){
    $(window).scroll(function(){
        // show scroll-up-btn
        if(this.scrollY > 1500){
            $('.scroll-up-btn').addClass("show");
        }else{
            $('.scroll-up-btn').removeClass("show");
        }

        // nav-link border change
        let currentPos = $(window).scrollTop();
        let current = '';
        let section = $('section');
        section.each((index) => {
            if (currentPos >= (section[index].offsetTop - section[index].clientHeight / 3)) {
                current = section[index].getAttribute('id');
            }
        })
        let nav = $('#navbar1 .nav-link');
        nav.addClass((index) => {
            if (nav[index].href.includes(current) && current !== '') {
                nav.removeClass('active');
                return 'active';
            }
        });
    });
    
    // scroll up btn-change
    $('.scroll-up-btn').click(function(){
        $('html').animate({scrollTop: 0},1000);
        $('html').css("scrollBehavior", "auto");
    });

    $('#dropdownMenuEvent').click(function(){
      $('#chevron-down-event').toggleClass('flip');
    });

    $('.userButton').click(function(){
      $('#chevron-down-user').toggleClass('flip');
    });
    
    
});


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




