jQuery(document).ready(function($){


    $('#do').cycle(['You will love to fly with us!', 'specializing in Web Design & Development', 'Branding, Marketing & SEO', 'and of course animated videos.'], {
        delay: 5000,
        transitionDuration: 500,
        transitionEasing: 'swing'
    });

    var body = $('body');

    $('.twitter a').hover(
        function() { $(body).addClass('twitter'); },
        function() { $(body).removeClass('twitter'); }
    );
    $('.dribbble a').hover(
        function() { $(body).addClass('dribbble'); },
        function() { $(body).removeClass('dribbble'); }
    );
    $('.github a').hover(
        function() { $(body).addClass('github'); },
        function() { $(body).removeClass('github'); }
    );
    $('.themes a').hover(
        function() { $(body).addClass('themes'); },
        function() { $(body).removeClass('themes'); }
    );
    $('.labs a').hover(
        function() { $(body).addClass('labs'); },
        function() { $(body).removeClass('labs'); }
    );
    $('.skype a').hover(
        function() { $(body).addClass('skype'); },
        function() { $(body).removeClass('skype'); }
    );
    $('.mail a').hover(
        function() { $(body).addClass('mail'); },
        function() { $(body).removeClass('mail'); }
    );
});



//loop video
jQuery.event.add(window, "load", resizeFrame);
jQuery.event.add(window, "resize", resizeFrame);

function resizeFrame()
{
    var h = $(window).height();
    $(".c_img*").css('height',h);
}
