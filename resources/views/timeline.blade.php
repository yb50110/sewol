@extends('layouts.app')
@section('content')

    {{-- TODO: TAKES WAY TOO LONG TO LOAD BECAUSE IMAGE IS TOO LARGE... CAN CROP IMAGE TO SHOW ONLY TOP? OR A BETTER WAY TO LET THE SHIP FADE IN?? --}}
    {{--<div class="temp-bg">--}}
    {{--<img class="ship" src="{{ asset('images/timeline-bg-ship.png') }}" alt="Sewol bow above water">--}}
    {{--</div>--}}

    <div class="offset-md-1 page-introduction">
        <img class="page-icon" src="{{ asset('images/timeline-ribbon.png') }}" alt="Sewol yellow ribbon">
        <h1 class="page-title">Sewol Ferry Incident</h1>
        <p class="col-md-5 page-subtitle" id="page-subtitle-timeline"></p>
    </div>

    <div class="offset-md-1 col-md-10 timeline">
        <div class="timeline-line"></div>

        <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
            <p class="offset-md-7 col-md-5 timeline-item">
                <span class="yellow">April 15, 2014</span> The ferry departed Incheon and was headed to Jeju Island. The ferry carried 4 times the cargo limit and many cargo were left untied.
            </p></div>

        <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
            <p class="col-md-5 timeline-item left"><span class="yellow">April 16, 2014</span>
                <span class="bold">8:30</span>
                The ferry had been swaying but there is a sudden and powerful tilt strong enough to throw passengers off the ground.
            </p></div>
        <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
            <p class="offset-md-7 col-md-5 timeline-item">
                <span class="bold">8:55</span> The ferry continues to tilt and help is called
                by the ferry crew. There are no evacuation announcement made to the passengers until 30 minutes la</ter after the call. Instead, the announcement told the passengers to stay where they are and to not move.
            </p>
        </div>
        <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
            <p class="offset-md-7 col-md-5 timeline-item">
                <span class="bold">9:26</span> Coast Guard arrives at scene but is only able to rescue passengers in the water or outside. Most of the 170 rescued passengers were saved by other private or commercial boats.
            </p></div>
        <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
            <p class="col-md-5 timeline-item left">
                <span class="bold">10:20</span> Ferry completely flips and only the bow remains above water for 3 additional days. No passengers inside ferry was rescued.
            </p></div>
        <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
            <p class="offset-md-7 col-md-5 timeline-item">
                <span class="bold">17:15</span> After 7 mysterious hours, President Park finally appears in national broadcast but does not seem to understand the gravity of situation.
            </p></div>

        <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
            <p class="offset-md-7 col-md-5 timeline-item">
                <span class="yellow">May 14, 2014</span> President Park promises that there will be search efforts until all passenger bodies are recovered.
            </p></div>

        <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
            <p class="offset-md-7 col-md-5 timeline-item">
                <span class="yellow">May 18, 2014</span> President Park dismantles the Coast Guard and uses them as a scapegoat, blaming them for the failure of rescuing the passengers inside the side.
            </p></div>

        <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
            <p class="offset-md-7 col-md-5 timeline-item">
                <span class="yellow">September to November 2014</span> After months of protest from the victims’ families, the government passes a special law but in an incomplete and impractical state.
                <br><br>The purpose of this special law was to allow the power for i</nvestigating events related to the ferry sinking in order to dig for the truth. However, the passed law only allowed for retrieval of information.
            </p>

            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
                <p class="offset-md-7 col-md-5 timeline-item">
                    <span class="yellow">November 10, 2014</span> The government concludes the search for missing bodies. There were still 9 bodies missing.
                </p></div>

            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
                <p class="offset-md-7 col-md-5 timeline-item">
                    <span class="yellow">January 1, 2015</span> Special Investigation Committee, meant to search for the truth behind the ferry sinking, is formed after many hindrance from the the government. The committee members who were under the ruling party argued for disbandment.
                </p></div>

            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
                <p class="col-md-5 timeline-item left">
                    <span class="yellow">September 2016</span> Special Investigation Committee is disbanded due to the expiration of the contract. The government counted the 8-month period where the committee was inactive due to insufficient funds.
                </p></div>

            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
                <p class="col-md-5 timeline-item left">
                    <span class="yellow">March 2017</span> Protests for the impeachment of President Park.
                </p></div>

            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
                <p class="col-md-5 timeline-item left">
                    <span class="yellow">March 23 to April 11, 2017</span> After months of debate and opposition from the members of the ruling party, the ferry is finally lifted from the waters. There are still 5 bodies missing.
                </p></div>

            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
                <p class="offset-md-7 col-md-5 timeline-item">
                    <span class="yellow">August 6, 2018</span> The Sewol Ferry Hull Investigation Committee failed to pinpoint an exact cause for the sinking of Sewol. They left open the possibilities of an internal or external factors.
                </p></div>
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
                <p class="offset-md-7 col-md-5 timeline-item">
                    <span class="yellow">So why did the ferry sink?</span> The government still stands that the sudden tilt caused the cargo to slide to one side, further worsening the tilt.
                    <br><br>The directors of “That Day, at Sea” provided evidence that it might have been a dropped anchor that hit the sea floor.
                    <br><br>The directors of “Murky Waters” point to inexperienced crew, cargo weight, untied cargo, and underwater collision as a possibility.
                </p></div>

            <div class="offset-md-2 col-md-8 timeline-conclusion">
                <p>The victim’s families have been the reason why Sewol had not been forgotten. They protested to the government by marching, shaving, fasting, petitioning, and so on. But the government responded by ignoring and even ridiculing them.
                <p>But they could not give up on their children. They wish for their misfortune to end at them and hope for a safer country for other children. They vowed to continue fighting for the truth and leave a chapter in the Korean history.</p>
                <p>They are still on their way to find the truth.<br>I will be with them until the truth is found.</p>
                <img src="{{ asset('images/timeline-students.png') }}" alt="Students in Sewol memorial">
                <img src="{{ asset('images/papership.png') }}" alt="Papership">
                <a href="{{ route('messages') }}">Please leave a message for the families</a>
            </div>
        </div>

        @endsection
        @section('scripts')

            <script>
                {{-- TODO: figure out why this doesn't work...--}}
                AOS.init();

                // Fade-in text animation
                let i = -1;
                const string = "On the early morning of April 16, 2016, the Sewol ferry flipped and capsized, taking the lives of 304 passengers out of 476. Of the victims, 250 were students of Danwon High School who were on a annual school trip.";
                const array = string.split("");
                const x = document.getElementById('page-subtitle-timeline');

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
                        setTimeout('Next()', 500);
                    } else {
                        setTimeout('Next()', 20);
                    }
                }

                $(document).ready(function () {
                    // custom css for body for background image
                    $('body').addClass('page-timeline');

                    // Fade-in text animation
                    Next();

                    // change bg by removing the pseudo bg on top
                    setTimeout($('.pseudo-bg').remove(), 20000);
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
            </script>

@append