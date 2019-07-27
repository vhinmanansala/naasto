export default {
  init() {
    $('.mobile-menu-icon i').click(function() {
        if ($(this).hasClass('fa-bars')) {
            $(this).removeClass('fa-bars').addClass('fa-times');
        } else if ($(this).hasClass('fa-times')) {
            $(this).removeClass('fa-times').addClass('fa-bars');
        }

        $('#mobile-menu-container').animate({
            height: 'toggle',
        }, 500);
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
