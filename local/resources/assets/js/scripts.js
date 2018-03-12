var plugins = {
    // menu: $('.sidebar'),
    slider: $('#slider'),
    categoryCListCarousel:$('.owl-carousel'),
};
$(document).ready(function () {
    function runSlider() {
        plugins.slider.nivoSlider({
            effect: 'fade',
            animSpeed: 500,
            pauseTime: 3000,
            pauseOnHover: true,
            controlNav: false,
        });
    }

    function runCategoryCListCarousel() {
        $('.owl-carousel').owlCarousel({
            animateOut: 'fadeOutRight',
            animateIn: 'fadeInLeft',
            items: 6,
            smartSpeed: 450,
            margin: 20,
            nav:true,
            dots:false,
            responsive:{
                0: {
                    items: 2
                },
                500: {
                    items: 2
                },
                736: {
                    items: 3
                },
                768: {
                    items: 3
                },
                1000: {
                    items: 6
                }
            }
        });
        $(".owl-nav .owl-prev").html("<img src='../images/common/red_back_btn.png' alt='Prev'/>");
        $(".owl-nav .owl-next").html("<img src='../images/common/red_next_btn.png' alt='Prev'/>");
    }
    $(".fancybox").fancybox({
        thumbs : {
            autoStart   : true,   // Display thumbnails on opening
            hideOnClose : true     // Hide thumbnail grid when closing animation starts
        },
    });
    if (plugins.slider.length) {
        runSlider();
    }
    if (plugins.categoryCListCarousel.length) {
        runCategoryCListCarousel();
    }
});