(function ($) {
    Drupal.behaviors.andy = {
        attach: function (context, settings) {
            if (typeof window.orientation === "undefined") {
                $('.page-projects .views-field-field-project-image img').hover(handlerIn, handlerOut);
            } else {
                $('.page-projects .views-field-field-project-image img').css("filter", "brightness(100%)");
                $(this).closest('.views-row').find(".page-projects .view-projects .views-field-title a").css('color', '#B51F24');
                $(this).closest('.views-row').find(".page-projects .view-projects .views-field-title a").css('text-shadow', '-1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000');
                $(this).closest('.views-row').find(".views-field-title").show();
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