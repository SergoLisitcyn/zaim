jQuery(function(){jQuery(".header-city span").click(function(){jQuery(this).parent().toggleClass("active")})});jQuery(document).ready(function(){jQuery("h3.faq-list__title").click(function(){if(jQuery(this).hasClass("active")){jQuery(this).removeClass("active").siblings("div").slideUp(400)}else{jQuery("div.faq-list__text").slideUp(400);jQuery("h3.faq-list__title").removeClass("active");jQuery(this).toggleClass("active").siblings("div").slideToggle(400)}});var a=jQuery.noConflict();a(function(){a.scrollUp({scrollName:"scrollUp",scrollClass:"scrollUp scrollup-link scrollup-right",scrollDistance:300,scrollFrom:"top",scrollSpeed:300,easingType:"linear",animation:"none",animationInSpeed:200,animationOutSpeed:200,scrollText:'<id class="fa fa-arrow-circle-up fa-3x"></id>',scrollTitle:false,scrollImg:false,activeOverlay:false,zIndex:2147483647})})});jQuery(document).ready(function(a){(function(){var f=a("#headerMenuBtn"),c=a("#headerNavSection"),b=a("#headerOverlay");f.on("click",function(){e()?g():d();a("body").toggleClass("lock")});a(".js-header-btn-m").on("click",function(){d(a(this).data("block"))});function e(){return c.hasClass("active")}function d(h){h=h||"nav";b.length||(b=a('<div id="headerOverlay" class="header-overlay desktop-hidden"></div>').appendTo("body"));f.addClass("active");b.addClass("active");c.addClass("active").attr("data-opened",h)}function g(){f.removeClass("active");b.removeClass("active");c.removeClass("active").attr("data-opened","")}})();jQuery(".offers-rating .offers-show-all-btn").click(function(c){c.preventDefault();c.returnValue=!1;var b=jQuery(".offer_row_hidden:hidden").length;jQuery(".offer_row_hidden:hidden").slice(0,10).toggle();if(jQuery(".offer_row_hidden:hidden").length==0){if(b==0){jQuery(".offer_row_hidden").toggle();jQuery("html, body").animate({scrollTop:jQuery(".offer-item").position().top},"slow");jQuery(".offers-show-all-btn").text("Показать еще")}else{jQuery(".offers-show-all-btn").text("Скрыть")}}else{jQuery(".offers-show-all-btn").text("Показать еще")}});jQuery('.mfo-show-rule').on('click', function(e) {e.preventDefault();jQuery('.conexist').toggle('slow')})});
(function() {
    var
        $accordion = $('#headerNavAccordion'),
        $collapse = $accordion.find('.js-header-nav-accordion-collapse'),
        toggleSelector = '.js-header-nav-accordion-toggle',
        max = $accordion.data('max-w')
    ;

    $collapse.collapse({
        parent: $accordion,
        toggle: false
    });

    $accordion.on('click', toggleSelector, function() {
        if (window.innerWidth > max) return;
        jQuery(this).next($collapse.selector).collapse('toggle');
    });
})();