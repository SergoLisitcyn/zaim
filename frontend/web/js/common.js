jQuery(function() {
    jQuery('.header-city span').click(function() {
        jQuery(this).parent().toggleClass('active');
    });
});



jQuery(document).ready(function() {

    jQuery('h3.faq-list__title').click(function () {
        if (jQuery(this).hasClass('active')) {
            jQuery(this).removeClass('active').siblings('div').slideUp(400);
        } else {
            jQuery('div.faq-list__text').slideUp(400);
            jQuery('h3.faq-list__title').removeClass('active');
            jQuery(this).toggleClass('active').siblings('div').slideToggle(400);
        }
    });


    var $nocnflct = jQuery.noConflict();
    $nocnflct(function () {
        $nocnflct.scrollUp({
        scrollName: 'scrollUp',
        scrollClass: 'scrollUp scrollup-link scrollup-right',
        scrollDistance: 300,
        scrollFrom: 'top',
        scrollSpeed: 300,
        easingType: 'linear',
        animation: 'none',
        animationInSpeed: 200,
        animationOutSpeed: 200,
        scrollText: '<id class="fa fa-arrow-circle-up fa-3x"></id>',
        scrollTitle: false,
        scrollImg: false,
        activeOverlay: false,
        zIndex: 2147483647
    });
});
	
	
});


jQuery(document).ready(function ($) {
    (function () {
      var
        $btn = $('#headerMenuBtn'),
        $nav = $('#headerNavSection'),
        $overlay = $('#headerOverlay')
        ;
  
      $btn.on('click', function () {
        isOpened() ? close() : open();
        $('body').toggleClass('lock');
      });
  
      $('.js-header-btn-m').on('click', function () {
        open($(this).data('block'));
      });
  
      function isOpened() {
        return $nav.hasClass('active');
      }
  
      function open(block) {
        block = block || 'nav';
        $overlay.length || ($overlay = $('<div id="headerOverlay" class="header-overlay desktop-hidden"></div>').appendTo('body'));
  
        $btn.addClass('active');
        $overlay.addClass('active');
        $nav.addClass('active').attr('data-opened', block);
      }
  
      function close() {
        $btn.removeClass('active');
        $overlay.removeClass('active');
        $nav.removeClass('active').attr('data-opened', '');
      }
    })();




    jQuery('.offers-rating .offers-show-all-btn').click(function (e) {
      e.preventDefault(); e.returnValue = !1; var length_before_toggle = jQuery('.offer_row_hidden:hidden').length; jQuery('.offer_row_hidden:hidden').slice(0, 10).toggle(); if (jQuery('.offer_row_hidden:hidden').length == 0) {
        if (length_before_toggle == 0) {
          jQuery('.offer_row_hidden').toggle();
          jQuery('html, body').animate({ scrollTop: jQuery('.offer-item').position().top }, 'slow');
          jQuery('.offers-show-all-btn').text("Показать еще");
        }
        else {
          jQuery('.offers-show-all-btn').text("Скрыть");
        }
      }
      else {
        jQuery('.offers-show-all-btn').text("Показать еще");
      }
    });


    $('.mfo-show-rule').click(function(e) {
      e.preventDefault();
      $(this).parent().next('.conexist').slideToggle();
    });



});