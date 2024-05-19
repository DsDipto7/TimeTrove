(function($) {

    "use strict";

    var initSlider = function () {
      var swiper = new Swiper(".review-swiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        freemode: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          0: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          767: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          1299: {
            slidesPerView: 3,
            spaceBetween: 20,
          },
        },
      });
  
    };

    // input spinner
    var initQuantitySpinner = function(){

      $('.product-qty').each(function(){

        var $el_product = $(this);
        var quantity = 0;

        $el_product.find('.quantity-right-plus').click(function(e){
            e.preventDefault();
            var quantity = parseInt($el_product.find('#quantity').val());
            $el_product.find('#quantity').val(quantity + 1);
        });

        $el_product.find('.quantity-left-minus').click(function(e){
            e.preventDefault();
            var quantity = parseInt($el_product.find('#quantity').val());
            if(quantity>0){
              $el_product.find('#quantity').val(quantity - 1);
            }
        });

      });

    }

    $(document).ready(function(){  

      initQuantitySpinner();
      initSlider();

      $('section').waypoint(function(direction) {
          //var activeSection = $(this).next();
          var activeSection = $(this);
          if(direction === 'down'){
              activeSection = $(this).next();
          }
          //activeSection = $(this);
          var sectionId   = activeSection.attr('id');
          $('ul li').removeClass('active');
          $('ul li.' + sectionId).addClass('active');
          console.log(activeSection);
      });

      $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
              || location.hostname == this.hostname) {

              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                  $('html,body').animate({
                      scrollTop: target.offset().top - (target.height() / 5)
                  }, 200);
                  return false;
              }
          }
      });

      
      AOS.init({
          duration: 1200,
          once: true,
      })

      $(".youtube").colorbox({
          iframe: true,
          innerWidth: 960,
          innerHeight: 585
      });

      

    }); // End of a document
        
})(jQuery);