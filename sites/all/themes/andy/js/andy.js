(function ($) {
    Drupal.behaviors.andy = {
        attach: function (context, settings) {
            if (typeof window.orientation === "undefined") {
                $('.page-projects .views-field-field-project-image img').hover(handlerIn, handlerOut);
            } else {
                $('.page-projects .views-field-field-project-image img').css("filter", "brightness(100%)");
                $(this).closest('.views-row').find(".views-field-title .field-content").addClass('project-banner');
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