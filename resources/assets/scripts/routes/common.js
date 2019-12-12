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

    const $menu = $('.dropdown');

    $(document).mouseup(e => {
        if (!$menu.is(e.target)  && $menu.has(e.target).length === 0) {
            $menu.removeClass('active');
        }
     });

    $('.user').on('click', () => {
        $menu.toggleClass('active');
    });

    $(document.body).on('checkout_error', function () {
        $('html, body').animate({
            scrollTop: ($('form.checkout').offset().top - 400),
        }, 1000);
    });

   $('.lrm-form .fieldset.fieldset--submit button:contains("Create account")').text('Request account');
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
