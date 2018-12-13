$(document).ready(function () {
    // Fade-in text animation
    var i = -1;
    var string = "On the early morning of April 16, 2016, the Sewol ferry flipped and capsized, taking the lives of 304 passengers out of 476. Of the victims, 250 were students of Danwon High School who were on a annual school trip.";
    var array = string.split("");
    var x = document.getElementById('page-subtitle-timeline');

    function Next() {
        i++;
        if (i < (array.length)) {
            setTimeout(Slide, 20);
        }
    }

    function Slide() {
        var sp = document.createElement('span');
        sp.classList.add('animation-fadein');
        sp.appendChild(document.createTextNode(array[i]));
        x.appendChild(sp);
        if (array[i] == '.') {
            setTimeout(Next, 500);
        } else {
            setTimeout(Next, 20);
        }
    }

    // if first time visitor to site, show special home animation.
    if (typeof(localStorage.getItem("firstVisitor")) != null && localStorage.getItem("firstVisitor") != "true") {
        Next();
        localStorage.setItem("firstVisitor", "true");
    } else {
        $('.page-subtitle')
            .html('On the early morning of April 16, 2016, the Sewol ferry flipped and capsized, taking the lives of 304 passengers out of 476. Of the victims, 250 were students of Danwon High School who were on a annual school trip.')
            .css({
                'opacity': '0',
                'animation': 'animation-fadein 2s forwards',
                'animation-delay': '1s',
            });
        $('.nav').css('animation-delay', '1s');
        $('.page-icon').css('animation-delay', '1s');
        $('.page-title').css('animation-delay', '1s');
        $('.timeline-background').css('animation-delay', '1s');
    }
});

$(window).scroll(function () {
    var backgroundPositionTop = $('.timeline-background').offset().top + 250; // + ___ is the space of the yellow ship area
    var backgroundPositionBottom = backgroundPositionTop + $('.timeline-background').outerHeight() - 340;  // - ___ is the extra padding on bottom

    if ($(window).scrollTop() <= backgroundPositionTop) {
        // Not .active is done so that the yellow styling of active link won't be affected
        $('.nav-link:not(.active)').css('color', '#000000');
    } else if ($(window).scrollTop() >= backgroundPositionTop && $(window).scrollTop() <= backgroundPositionBottom) {
        $('.nav-link:not(.active)').css('color', '#ffffff');
    } else {
        $('.nav-link:not(.active)').css('color', '#000000');
    }

    /* Check the location of each desired element */
    $('.timeline-item-container').each( function(i){
        var bottom_of_object = $(this).position().top + $(this).outerHeight();
        var bottom_of_window = $(window).scrollTop() + $(window).height();

        /* If the object is completely visible in the window, fade it it */
        if( bottom_of_window > bottom_of_object + 700 ){  // 700 is an arbitrary value
            $(this).animate({'opacity':'1'},800);
        }
    });
});