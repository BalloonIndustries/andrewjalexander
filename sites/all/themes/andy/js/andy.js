(function($){
Drupal.behaviors.andy = {
  attach: function (context, settings) {
      if(typeof window.orientation === "undefined") {
$('.page-projects .views-field-field-project-image img' ).hover( handlerIn, handlerOut );
      }
function handlerIn() {
        $( this ).css( "filter", "brightness(100%)" );
        /*
        var parents = $(this).parentsUntil('.views-column');
        console.log(parents);
        var last = parents.last();*/
    $(this).closest('.views-row').find(".views-field-title").hide();
        /*console.log(last);
        $(last + " .views-field-title").hide();
        console.log(last + " .views-field-title");*/
}
function handlerOut() {
    $('.page-projects .views-field-field-project-image img').css("filter", "brightness(50%)");
   $(this).closest('.views-row').find(".views-field-title").show();
}
}
};
})(jQuery);