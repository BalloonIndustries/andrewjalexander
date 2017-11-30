(function ($) {
    Drupal.behaviors.typed = {
        attach: function (context, settings) {
            var typed = new Typed('#page-title', {
                strings: ['Welcome', 'My name is Andy', 'I am a Developer', 'Welcome'],
                typeSpeed: 75,
                backSpeed: 75
            });
        }
    };
})(jQuery);