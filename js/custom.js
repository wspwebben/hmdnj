jQuery(document).ready(function($){

/** Portfolio Slider **/
$("#portfolio-workd-wrap").owlCarousel({
    nav:true,
    items: 5,
  	dots: false,
  	loop:true,
    navElement: 'div',
    responsive:{
            360:{
                items:1
            },
            420:{
                items:2
            },
            768:{
                items:3  
            },
            1000:{
                items:5
            }
        }
});
$(".test-post-loop-wrap").owlCarousel({
    nav:true,
    loop:true,
    items: 2,
    margin: 40,
  	dots: false,
    navElement: 'div',
    responsive:{
            500:{
                items:1
            },
            650:{
                items:2
            }
        }
});

// Main menu toggle
var toggleModule = (function() {
  var menu = document.querySelector('.js-menu');
  var toggle = menu.querySelector('.js-menu__toggle');
  var content = menu.querySelector('.js-menu__content');

  let isOpen = false;

  var CONTENT_OPEN = 'open'
  var TOGGLE_OPEN = 'open';

  const openMenu = function() {
    content.setAttribute(CONTENT_OPEN, true);
    toggle.setAttribute(TOGGLE_OPEN, true);

    document.body.style.overflow = 'hidden';

    isOpen = true;
  }

  const closeMenu = function() {
    content.removeAttribute(CONTENT_OPEN);
    toggle.removeAttribute(TOGGLE_OPEN);
    
    document.body.style.overflow = '';

    isOpen = false;
  }

  toggle.addEventListener('click', function() {
    if (isOpen) {
        closeMenu();
    } else {
        openMenu();
    }
  });
})()

//Entrance WOW JS
var wow = new WOW(
    {
        boxClass: 'wow', // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset: 150, // distance to the element when triggering the animation (default is 0)
        mobile: true, // trigger animations on mobile devices (default is true)
        live: true, // act on asynchronously loaded content (default is true)
        callback: function (box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
        }
    }
);
wow.init();

});
