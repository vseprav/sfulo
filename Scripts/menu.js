(function ($) {
  $.fn.fixedMenu = function () {
    return this.each(function () {
      var menu = $(this);
      menu.mouseleave(function(){
        $(this).find('.active').removeClass('active');
      });
      menu.find('li > a').mouseenter(function () {
        $(this).parent().parent().find('.active').removeClass('active');
        if (!$(this).parent().hasClass('single-link')
          && !$(this).parent().hasClass('active')) {
              $(this).parent().addClass('active');
        }
      });
    });
  }
})(jQuery);