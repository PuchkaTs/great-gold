jQuery(document).ready(function($){

    $('#navslide').scrollspy({
        min: 50,
        max: 1500,
        onEnter: function(element, position) {
            $("#navslide").removeClass('slidenav1');
            $("#navslide").addClass('slidenav2');
        },
        onLeave: function(element, position) {
            $("#navslide").removeClass('slidenav2');
            $("#navslide").addClass('slidenav1');
        }
    });

//    $('#do').cycle(['You will love to fly with us!', 'specializing in Web Design & Development', 'Branding, Marketing & SEO', 'and of course animated videos.'], {
//        delay: 5000,
//        transitionDuration: 500,
//        transitionEasing: 'swing'
//    });

    $(function(){
        rotateListItem();
        setInterval("rotateListItem()", 6500);

    })

});



function rotateListItem(){


    var oCurLi = $("#slideshow li.next");
    oCurLi.addClass('current').removeClass('next');
    var oNxtLi = oCurLi.next();
    oNxtLi.addClass('next');
    if (oNxtLi.length == 0){
        oNxtLi = $("#slideshow li:first");
        oNxtLi.addClass('next');
    }



    oCurLi.delay(5500).queue(function(next){
       $(this).removeClass("current");
        next();
    });

//    function rotateListItem(){
//
//        var oCurLi = $("#slideshow li.previous");
//        oCurLi.removeClass('previous');
//        var oNxtLi = oCurLi.next();
//        if (oNxtLi.length == 0)
//            oNxtLi = $("#slideshow li:first");
//
//
//        oCurLi.addClass('current').delay(5500).queue(function(next){
//            oNxtLi.addClass('previous');
//            $(this).removeClass("current");
//            next();
//        });



}
//loop video
jQuery.event.add(window, "load", resizeFrame);
jQuery.event.add(window, "resize", resizeFrame);

function resizeFrame()
{
    var h = $(window).height();
    $(".c_img*").css('height',h);
}
