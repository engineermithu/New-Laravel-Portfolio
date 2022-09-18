$(document).ready(function(){
    $(".owl").owlCarousel();

    $('.owl-carousel-team').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })

    //Testimonial
    $('.owl-carousel-testimonial').owlCarousel({
        loop:true,
        margin:20,
        nav:false,
        items:1,
    })
});
