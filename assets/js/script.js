

/*============================= Nav Bar Fixed Top Vanilla Java Script ========================*/
// window.addEventListener('scroll', function () {
//   var menubar = document.querySelector("#mainNav");
//   menubar.classList.toggle("nav-fixed", window.scrollY > 200);
// });

 
/*============================= Back To Top Button Script ========================*/
var mybutton = document.getElementById("backTop");
window.onscroll = function () { scrollFunction() };
function scrollFunction() {
  if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
    mybutton.style.display = "flex";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


(function ($) {

  /*--------- Navbar Showing When Scroll Up Script -----------*/
  // $('body').css('padding-top', $('.navbar').outerHeight() + 'px')
  // detect scroll top or down
  if ($('.smart-scroll').length > 0) { // check if element exists
    var last_scroll_top = 0;
    $(window).on('scroll', function() {
        scroll_top = $(this).scrollTop();
        // console.log(scroll_top);
        if (scroll_top < last_scroll_top) {
            $('.smart-scroll').removeClass('scrolled-down').addClass('scrolled-up');
        } else {
            $('.smart-scroll').removeClass('scrolled-up').addClass('scrolled-down');
        }
        if (scroll_top === 0) {
          $('.smart-scroll').removeClass('scrolled-down').removeClass('scrolled-up');
        }
        last_scroll_top = scroll_top;
    });
  }


  // Main Header Nav links Active Class Genaretor
  $("#mainNav .navbar-nav li a").filter(function () {
    return this.href == location.href.replace(/#.*/, "");
  }).parents("li").addClass("active");

  // $("#heroSlider").owlCarousel({
  //   items: 1,
  //   autoplay: true,
  //   autoplayTimeout: 5000,
  //   autoplayHoverPause: true,
  //   smartSpeed: 550,
  //   responsiveClass: true,
  //   autoplaySpeed: 3000,
  //   loop: true,
  //   margin: 0,
  //   nav: false,
  //   dots: false,  
  // });
   

  // Instructor slider Activaton Script  
  $(".carouselService").owlCarousel({
    autoplay: true, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000, 
    loop: true,
    margin: 12,
    items: 4,
    nav: false, 
    dots: true,  
    responsiveClass: true, 
    responsive: { 
        0: { items: 1 },
        576: { items: 2  },
        768: { items: 2 },
        992: { items: 3 }, 
        1200: { items: 4, } ,
        1400: { items: 4, } 
    } 
  });
   
   
 
   $(".partnerCarousel").owlCarousel({
    autoplay: true,
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 2000,
    autoplaySpeed: 3000,
    loop: true,
    margin: 0, 
    items: 3,
    nav: false,
    dots: false,
    responsiveClass: true,
    responsive: {
        0: { items: 2, },
        576: { items: 2 },
        768: { items: 3 },
        992: { items: 4 }, 
        1200: { items: 4 }, 
        1400: { items: 5 }, 
        2000: { items: 7 }, 
    },
  });

  $(".serviceCarousel").owlCarousel({
    autoplay: true, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000, 
    loop: false,
    margin: 20,
    items: 3,
    nav: false, 
    dots: true,  
    responsiveClass: true, 
    responsive: { 
        0: { items: 1 },
        576: { items: 1  },
        768: { items: 2 },
        992: { items: 2 }, 
        1200: { items: 3, } ,
        1400: { items: 4, } 
    }   
  });

   // Blog Slider Activaton Script (Homepage)
   $(".blogCarousel").owlCarousel({
    autoplay: true, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000, 
    loop: true,
    margin: 20,
    items: 3,
    nav: false, 
    dots: true,  
    responsiveClass: true, 
    responsive: { 
        0: { items: 1 },
        576: { items: 2  },
        768: { items: 2 },
        992: { items: 2 }, 
        1200: { items: 3, } ,
        1400: { items: 3, } 
    }   
  });
   // ourteamSlider Slider Activaton Script (Homepage)
   $(".ourteamSlider").owlCarousel({
    autoplay: true, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000, 
    loop: true,
    margin: 20,
    items: 4,
    nav: false, 
    dots: true,  
    responsiveClass: true, 
    responsive: { 
        0: { items: 1 },
        576: { items: 2  },
        768: { items: 2 },
        992: { items: 2 }, 
        1200: { items: 4, } ,
        1400: { items: 4, } 
    }   
  });
  

  // $(".testiCard").on('click', function(){
  //   $(".testiCard").removeClass('active');
  //   $(this).addClass('active');
  // });
 
})(jQuery);
 
 