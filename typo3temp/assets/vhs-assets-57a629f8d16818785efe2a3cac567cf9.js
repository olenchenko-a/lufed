$(document).ready(function(){

    $(".mobburger").on("click", function(){
        $(this).toggleClass("open");
        $(".topmenu .menu").toggleClass("open");
    });

    $(".has-children").on("click", function(){
        $(this).toggleClass("open-submenu");
    });

    new Swiper ('.swiper-container.partners-slider', {
        // Optional parameters
        direction: 'horizontal',
        loop: false,

        // slidesPerView: 4,
        // spaceBetween: 0,
        
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 0,
                pagination: {
                    el: '.swiper-pagination',
                    type: 'bullets',
                },
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 0,
            }
        },

        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },

    });

    max_height_div(".catalog .card");
    max_height_div(".catalog .card .description");

    let popupslider = null;

    $(".popup .close").on("click", function(){
        $(this).closest(".popupwrap").fadeOut();
        popupslider.destroy();
    });

    $(".card .btn, .cta .btn").on("click", function(e){
        e.preventDefault();

        const id = $(this).attr("href");

        if($('.popupwrap' + id + ' .swiper-container.popup-slider').length){
            popupslider = new Swiper ('.popupwrap' + id + ' .swiper-container.popup-slider', {
                on:{
                    init: function(){

                    },
                },
                // Optional parameters
                direction: 'horizontal',
                loop: false,

                breakpoints: {
                    320: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                    992: {
                        slidesPerView: 3,
                        spaceBetween: 35,
                    }
                },

                navigation: {
                  nextEl: '.swiper-button-next',
                  prevEl: '.swiper-button-prev',
                },

                pagination: {
                    el: '.swiper-pagination',
                    type: 'progressbar',
                },

            });
        }



        $(".popupwrap" + id).fadeIn(400, function(){
            if($('.popupwrap' + id + ' .swiper-container.popup-slider').length){
                popupslider.update();
            }
            $('.popupwrap' + id + ' .swiper-container.popup-slider').css("opacity", 1);
        });
    });
});

function max_height_div(div) {
    if($(window).width() < 700){
        return false;
    }
    var maxheight = 0;
    $(div).each(function(){
        $(this).removeAttr('style');
        if($(this).height() > maxheight) {
            maxheight = $(this).height();
        }
    });
    $(div).height(maxheight);
}

