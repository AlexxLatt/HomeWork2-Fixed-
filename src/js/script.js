$(document).ready(function(){
    $('.carousel__iner').slick({

        speed: 1200,
        
        prevArrow:'<button type="button" class="slick-prev"><img src="icons/left.png" alt="icon"></button>',
        nextArrow:'<button type="button" class="slick-next"><img src="icons/right.png" alt="icon"></button>',
        responsive:[
            {
                breakpoint: 992,
                settings: {
              
                  dots: true,
                  arrows:false
                }
            },
        ]
      });
  });