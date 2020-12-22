jQuery(document).ready(function () {
  // jQuery(".navbar-topmenu-search__input").keyup(function (event) { if (event.keyCode == 13) { event.preventDefault(); location.href = 'https://smartzaim.kz/?s=' + jQuery(".navbar-topmenu-search__input").val() } }); jQuery(document).on('click', '.header-nav-section__search-m .search__btn', function (event) { event.preventDefault(); location.href = 'https://smartzaim.kz/?s=' + jQuery(".header-nav-section__search-m .search__input").val() }); var $container = jQuery('.main-menu-container'); jQuery(document).on('click', '.js-menu-open', function () {
  //   var $this = jQuery(this); if ($this.hasClass('active')) { closeMenu(); return }
  //   if ($container.hasClass('open')) { closeMenu($this) } else { openMenu($this) }
  // }); jQuery(document).on('click', '.js-menu-close', function () { closeMenu() }); function closeMenu($btn) { jQuery('.js-menu-open').removeClass('active'); $container.slideUp(400, function () { $container.removeClass('open open-left open-right open-search').css('display', ''); if ($btn) openMenu($btn) }) }
  // function openMenu($btn) {
  //   if ($btn.hasClass('js-menu-open-left')) { $container.addClass('open-left') } else if ($btn.hasClass('js-menu-open-right')) { $container.addClass('open-right') } else if ($btn.hasClass('js-menu-open-search')) { $container.addClass('open-search') }
  //   $btn.addClass('active'); $container.slideDown(400, function () { $container.addClass('open').css('display', '') })
  // }
  // if (jQuery('.header-nav-section').is(":visible")) {
  //   var cdata = {}; var cookie_counter = 0; if (document.cookie && document.cookie !== '') {
  //     var cookies = document.cookie.split(';'), i; for (i = 0; i < cookies.length; i += 1) {
  //       var cookie = jQuery.trim(cookies[i]); var eqi = cookie.indexOf("="); if (eqi <= -1) { continue }
  //       var cookie_name = cookie.substring(0, eqi); var cookie_value = decodeURIComponent(cookie.substring(eqi + 1, cookie.length)); if (cookie_name.match("^compared_") && cookie_value == 1) { cookie_counter = cookie_counter + 1 }
  //       cdata[cookie.substring(0, eqi)] = decodeURIComponent(cookie.substring(eqi + 1, cookie.length))
  //     }
  //   }
  //   jQuery('.navbar-compare').attr('data-counter', cookie_counter)
  // }
  // jQuery('.show_mfo_btn a').click(function (e) {
  //   e.preventDefault(); e.returnValue = !1; jQuery('.offer_row_hidden').toggle(); if (jQuery('.offer_row_hidden').is(":visible")) { jQuery('.show_mfo_btn a').text("Скрыть") }
  //   else { jQuery('html, body').animate({ scrollTop: jQuery('.offer_row').position().top }, 'slow'); jQuery('.show_mfo_btn a').text("Показать все МФО") }
  // }); 
  
  
  jQuery('.offers a.show-all-btn').click(function (e) {
    e.preventDefault(); e.returnValue = !1; var length_before_toggle = jQuery('.offer_row_hidden:hidden').length; jQuery('.offer_row_hidden:hidden').slice(0, 10).toggle(); if (jQuery('.offer_row_hidden:hidden').length == 0) {
      if (length_before_toggle == 0) {
        jQuery('.offer_row_hidden').toggle();
        jQuery('html, body').animate({ scrollTop: jQuery('.offer-row').position().top }, 'slow');
        jQuery('a.show-all-btn').text("Показать еще");
      }
      else {
        jQuery('a.show-all-btn').text("Скрыть");
      }
    }
    else {
      jQuery('a.show-all-btn').text("Показать еще");
    }
  }); 

});
  
//   function getCookie(key) { var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)'); return keyValue ? keyValue[2] : null }
//   function setCookie(key, value) { var expires = new Date(); expires.setTime(expires.getTime() + (1 * 24 * 60 * 60 * 1000)); document.cookie = key + '=' + value + ';expires=' + expires.toUTCString() + ';domain=.smartzaim.kz;path=/;' }
//   function get_current_page_id() {
//     var page_body = jQuery('body.page'); var id = 0; if (page_body && page_body.attr('class')) { var classList = page_body.attr('class').split(/\s+/); jQuery.each(classList, function (index, item) { if (item.indexOf('page-id') >= 0) { var item_arr = item.split('-'); id = item_arr[item_arr.length - 1]; return !1 } }) }
//     if (id == 0) { page_body = jQuery('body.single-post'); if (page_body && page_body.attr('class')) { var classList = page_body.attr('class').split(/\s+/); jQuery.each(classList, function (index, item) { if (item.indexOf('postid') >= 0) { var item_arr = item.split('-'); id = item_arr[item_arr.length - 1]; return !1 } }) } }
//     return id
//   }
//   if (getCookie('dont_show_cookie') == 1) {
//     jQuery('#cookiesPopup').hide();
//   }
//   else {
//     jQuery('#cookiesPopup').show();
//   }
//   jQuery('.mfo_card .mfo_card_compare a').on('click', function (e) {
//     e.preventDefault(); e.returnValue = !1; var mfo = jQuery(this).data('mfo'); var title = jQuery(this).data('title'); var post_id = get_current_page_id(); var url = 'https://smartzaim.kz/wp/wp-admin/admin-ajax.php'; var elem = jQuery(this); var requestData = { action: 'clear_compare', post_id: post_id }; if (getCookie('compared_' + mfo) == 1) {
//       setCookie('compared_' + mfo, '0'); jQuery.post(url, requestData, function (response) {
//         if (response) { elem.html('Сравнить'); var count = jQuery('.navbar-compare').data('counter'); count = count - 1; jQuery('.navbar-compare').attr('data-counter', count); jQuery('.navbar-compare').data('counter', count) }
//       })
//     }
//     else {
//       if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) { jQuery('<div class="compair-banner-position"><div class="compair-banner-mobile"><a href="#" onclick="parentNode.remove();return false;" class="compair-banner-mobile-close"></a><div class="compair-banner-mobile-wrap">Предложение по займу добавлено к сравнению.<br><a href="/compare/">Нажмите, чтобы сравнить</a></div></div></div>').insertBefore(jQuery('body')) }
//       else { jQuery('<div class="compair-banner-position"><div class="row limit-width row-parent"><div class="compair-banner"><a href="#" onclick="parentNode.parentNode.remove();return false;" class="compair-banner-close"></a><div class="compair-banner-wrap"><div class="compair-banner-wrap-left">Онлайн-сервис ' + title + ' добавлен к сравнению</div><div class="compair-banner-wrap-right"><button class="compare-banner-btn" onclick="location.href = \'https://smartzaim.kz/compare/\';">Сравнить</button></div></div></div></div>').insertBefore(jQuery('body')) }
//       setCookie('compared_' + mfo, '1'); jQuery.post(url, requestData, function (response) {
//         if (response) { elem.html('В сравнении'); var count = jQuery('.navbar-compare').data('counter'); count = count + 1; jQuery('.navbar-compare').attr('data-counter', count); jQuery('.navbar-compare').data('counter', count) }
//       })
//     }
//   }); jQuery('.offers-compare-href').on('click', function (e) {
//     e.preventDefault(); e.returnValue = !1; var mfo = jQuery(this).data('mfo'); if (getCookie('compared_' + mfo) == 1) { }
//     else {
//       setCookie('compared_' + mfo, '1'); var post_id = get_current_page_id(); var url = 'https://smartzaim.kz/wp/wp-admin/admin-ajax.php'; var requestData = { action: 'clear_compare', post_id: post_id }; jQuery.post(url, requestData, function (response) {
//         if (response) { var count = jQuery('.navbar-compare').data('counter'); count = count + 1; jQuery('.navbar-compare').attr('data-counter', count); jQuery('.navbar-compare').data('counter', count) }
//       })
//     }
//   }); 
//   setTimeout(function () { 
//     jQuery('.modal-window').show() }, 2000); 
//     var $bg = jQuery('#js-bg'); 
//     var y = -parseInt(jQuery('#masthead').parent().css('height')) || -129, scroll = 0, bgPos = y; setBgPos(); jQuery(window).on('scroll', function () { setBgPos() }); 
//     function getScroll() { 
//       scroll = jQuery(window).scrollTop() 
//     }
//   function setBgPos() {
//     getScroll(); if (!scroll) { $bg.css('top', 0); return }
//     bgPos = (y + scroll >= 0) ? y : -scroll; $bg.css('top', bgPos)
//   }
// })


// jQuery(document).ready(function ($) {
//   (function () {
//     var
//       $btn = $('#headerMenuBtn'),
//       $nav = $('#headerNavSection'),
//       $overlay = $('#headerOverlay')
//       ;

//     $btn.on('click', function () {
//       isOpened() ? close() : open();
//     });

//     $('.js-header-btn-m').on('click', function () {
//       open($(this).data('block'));
//     });

//     function isOpened() {
//       return $nav.hasClass('active');
//     }

//     function open(block) {
//       block = block || 'nav';
//       $overlay.length || ($overlay = $('<div id="headerOverlay" class="header-overlay desktop-hidden"></div>').appendTo('body'));

//       $btn.addClass('active');
//       $overlay.addClass('active');
//       $nav.addClass('active').attr('data-opened', block);
//     }

//     function close() {
//       $btn.removeClass('active');
//       $overlay.removeClass('active');
//       $nav.removeClass('active').attr('data-opened', '');
//     }
//   })();


//   (function () {
//     var
//       $accordion = $('#headerNavAccordion'),
//       $collapse = $accordion.find('.js-header-nav-accordion-collapse'),
//       toggleSelector = '.js-header-nav-accordion-toggle',
//       max = $accordion.data('max-w')
//       ;

//     // $collapse.collapse({
//     //   parent: $accordion,
//     //   toggle: false
//     // });

//     $accordion.on('click', toggleSelector, function () {
//       if (window.innerWidth > max) return;
//       $(this).next($collapse.selector).collapse('toggle');
//     });
//   })();

// });