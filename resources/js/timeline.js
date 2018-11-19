$(document).ready(function () {
    AOS.init({
        once: true
    });

    // custom css for body for background image
    $('body').addClass('page-timeline');

    // Fade-in text animation
    // Fade-in text animation
    var i = -1;
    var string = "On the early morning of April 16, 2016, the Sewol ferry flipped and capsized, taking the lives of 304 passengers out of 476. Of the victims, 250 were students of Danwon High School who were on a annual school trip.";
    var array = string.split("");
    var x = document.getElementById('page-subtitle-timeline');
    function Next() {
        i++;
        if (i < (array.length)) {
            setTimeout(Slide, 20);
        } else {
            // $('.page-timeline').css('background-image', 'url(\'../images/timeline-bg-tophalf.png\')');
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
    Next();
});

$(window).scroll(function () {
    // todo: change 500 to a more robust value
    if ($(window).scrollTop() <= 700) {
        // Not .active is done so that the yellow styling of active link won't be affected
        $('.nav-link:not(.active)').css('color', '#000000');
    } else if ($(window).scrollTop() >= 700 && $(window).scrollTop() <= 4000) {
        $('.nav-link:not(.active)').css('color', '#ffffff');
    } else {
        $('.nav-link:not(.active)').css('color', '#000000');
    }
});