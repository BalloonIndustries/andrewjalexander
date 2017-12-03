(function ($) {
    Drupal.behaviors.andy = {
        attach: function (context, settings) {
            if (typeof window.orientation === "undefined") {
                $('.page-projects .views-field-field-project-image img').hover(handlerIn, handlerOut);
            } else {
                $(window).on('scroll', function () {
                    $('.page-projects .views-field-field-project-image img').each(function () {
                        if ($(window).scrollTop() >= $(this).offset().top) {
                            $('.page-projects .views-field-field-project-image img').css("filter", "brightness(50%)");
                            $(this).css("filter", "brightness(100%)");
                        }
                    });
                });
            }
            function handlerIn() {
                $(this).css("filter", "brightness(100%)");
                $(this).closest('.views-row').find(".views-field-title").hide();
            }
            function handlerOut() {
                $('.page-projects .views-field-field-project-image img').css("filter", "brightness(50%)");
                $(this).closest('.views-row').find(".views-field-title").show();
            }
        }
    };
})(jQuery);