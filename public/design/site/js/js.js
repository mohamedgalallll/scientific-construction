$( document ).ready(function() {
        $('.mySlider').carousel({
                num: 3,
                maxWidth: 250,
                maxHeight: 250,
                autoPlay: true,
                showTime: 3000,
                animationTime: 500,
                scale: 0.8,
                distance: 75
            });
            $('.newOfSite-carousel').owlCarousel({
                loop:true,
                margin:70,
                nav:true,
                navText: ['<i class="fas fa-arrow-alt-circle-left"></i>', '<i class="fas fa-arrow-alt-circle-right"></i>'],
                responsive:{
                    0:{
                        items:1
                    },
                    800:{
                        items:2
                    },
                    1000:{
                        items:3
                    }
                }
            });
            $('.courses-carousel').owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                navText: ['<i class="fas fa-arrow-alt-circle-left"></i>', '<i class="fas fa-arrow-alt-circle-right"></i>'],
                responsive: {
                    0: {
                        items: 1
                    },
                    800: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            });
              $('.service-carousel').owlCarousel({
              loop: true,
              margin: 20,
              nav:true,
                  items:2,
              navText: ['<i class="fas fa-arrow-alt-circle-left"></i>', '<i class="fas fa-arrow-alt-circle-right"></i>'],
          });
            $('.owl-carouselvideo').owlCarousel({
                merge:true,
                loop:true,
                margin:30,
                nav:true,
                navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
                video:true,
                lazyLoad:true,
                center:true,
                responsive: {
                    0: {
                        items: 1
                    },
                    800: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            })
          
});