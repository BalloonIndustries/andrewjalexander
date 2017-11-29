(function($){
Drupal.behaviors.andy = {
  attach: function (context, settings) {
$('.page-projects .views-field-field-project-image img' ).hover( handlerIn, handlerOut );

function handlerIn() {

    $('.page-projects .views-field-field-project-image img').css("filter", "brightness(50%)");
        $( this ).css( "filter", "unset" );
}
function handlerOut() {
    $('.page-projects .views-field-field-project-image img').css("filter", "unset");
}
}
};
})(jQuery);