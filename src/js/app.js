;(function($){
    $(document).ready(function(){


      // Carousels
  		$('.responsive').slick({
  		  // dots: true,
  		  infinite: true,
  		  speed: 300,
  		  slidesToShow: 5,
  		  slidesToScroll: 5,
  		  prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
          nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
  		  responsive: [
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 4,
              infinite: true,
              // dots: true
            }
          },
  		    {
  		      breakpoint: 1024,
  		      settings: {
  		        slidesToShow: 3,
  		        slidesToScroll: 3,
  		        infinite: true,
  		        // dots: true
  		      }
  		    },
  		    {
  		      breakpoint: 600,
  		      settings: {
  		        slidesToShow: 2,
  		        slidesToScroll: 2
  		      }
  		    },
  		    {
  		      breakpoint: 380,
  		      settings: {
  		        slidesToShow: 1,
  		        slidesToScroll: 1
  		      }
  		    }
  		  ]
 		  });
	  

      // Menu
      jQuery( ".bar-wrap" ).click(function() {
        jQuery( ".menu-header-menu-container" ).slideToggle('fadeIn');   
        jQuery(".bar1").toggleClass("change1");
        jQuery(".bar2").toggleClass("change2");
        jQuery(".bar-wrap").toggleClass("background-green");
      });  
    
      jQuery(window).resize(function(){
        var width = $(window).width();
        if (width > 577 && jQuery(".menu-header-menu-container").is(':hidden')){
          jQuery(".menu-header-menu-container").removeAttr('style');
        }     
      });


      // Search form
      $('.search-button-anet').on("click", function(e) { 
          var inputvalue = $(".search-book-anet").val();
          // window.alert(inputvalue);
          window.open( "https://www.antikvariat.net/sv/search/" + inputvalue + "?currency=SEK&bookseller_title=R%C3%B6nnells%20Antikvariat%20AB", "_blank" );
          $(".search-book-anet").val(" ");
      });

      $(".search-book-anet").on("keypress", function(e) {
          if(e.which === 13) {
            $('.search-button-anet').trigger("click");
          }
      });


    });	
})(jQuery);
