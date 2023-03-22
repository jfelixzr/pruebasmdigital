jQuery(document).ready( $ =>  {
    $('.site-header .menu-principal .menu').slicknav({
        label: '',
        appendTo: '.site-header'
    });

    if (jQuery(".swiper").length > 0) {
        var swiper = new Swiper(".swiper", {
            
          loop:true,
          spaceBetween: 30,
          autoplay: {
            delay: 345000,
          
          },
         
          pagination: {
            el: ".pagination",
            clickable: true,
          },
          breakpoints: {
            
            640: {
                slidesPerView: "1",
              spaceBetween: 15,
            },
            768: {
                slidesPerView: "1",
              spaceBetween: 30,
            },
            1024: {
                slidesPerView: "3",
              spaceBetween: 30,
            },
          },
        });
      }
      if (jQuery(".swiper-soon").length > 0) {
        var swiper = new Swiper(".swiper-soon", {
            
          loop:true,
          spaceBetween: 30,
          autoplay: {
            delay: 345000,
          
          },
         
          pagination: {
            el: ".pagination",
            clickable: true,
          },
          breakpoints: {
            
            640: {
                slidesPerView: "1",
              spaceBetween: 15,
            },
            768: {
                slidesPerView: "1",
              spaceBetween: 30,
            },
            1024: {
                slidesPerView: "6",
              spaceBetween: 30,
            },
          },
        });
      }
      if (jQuery(".swiper-poster").length > 0) {
        var swiper = new Swiper(".swiper-poster", {
            
         
          autoplay: {
            delay: 345000,
          
          },
         
          pagination: {
            el: ".pagination",
            clickable: true,
          },
          breakpoints: {
            
            640: {
                slidesPerView: "1",
              spaceBetween: 15,
            },
            768: {
                slidesPerView: "1",
              spaceBetween: 30,
            },
            1024: {
                slidesPerView: "6",
              spaceBetween: 30,
            },
          },
        });
      }
});

