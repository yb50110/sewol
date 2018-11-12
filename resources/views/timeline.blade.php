@extends('layouts.app')
@section('content')

    <div class="offset-md-1 page-introduction">
        <img class="page-icon" src="{{ asset('images/timeline-ribbon.png') }}" alt="Sewol yellow ribbon">
        <h1 class="page-title">Sewol Ferry Incident</h1>
        <p class="col-md-5 page-subtitle" id="page-subtitle-timeline"></p>
    </div>

    <div class="offset-md-1 col-md-10 timeline">
        <p class="col-md-4 timeline-item">
            <span class="yellow">April 15, 2014</span> The ferry departed Incheon and was headed to Jeju Island. The ferry carried 4 times the cargo limit and many cargo were left untied.
        </p>

        <p class="col-md-4 timeline-item left"><span class="yellow">April 16, 2014</span> <span class="bold">8:30</span>
            The ferry had been swaying but there is a sudden and powerful tilt strong enough to throw passengers off the ground.
        </p>
        <p class="col-md-4 timeline-item"><span class="bold">8:55</span> The ferry continues to tilt and help is called
            by the ferry crew. There are no evacuation announcement made to the passengers until 30 minutes later after the call. Instead, the announcement told the passengers to stay where they are and to not move.
        </p>
        <p class="col-md-4 timeline-item">
            <span class="bold">9:26</span> Coast Guard arrives at scene but is only able to rescue passengers in the water or outside.
        </p>
        <p class="col-md-4 timeline-item left">
            <span class="bold">10:20</span> Ferry completely flips and only the bow remains above water for 3 additional days. No passengers inside ferry was rescued.
        </p>
        <p class="col-md-4 timeline-item">
            <span class="bold">NEED TIME</span> After 7 hours of missing in action, President Park finally appears in national broadcast but does not seem to understand the gravity of situation.
        </p>

        <p class="col-md-4 timeline-item">
            <span class="yellow">May 14, 2014</span> President Park promises that there will be search efforts until all passenger bodies are recovered.
        </p>

        <p class="col-md-4 timeline-item">
            <span class="yellow">May 18, 2014</span> President Park dismantles the Coast Guard and uses them as a scapegoat, blaming them for the failure of rescuing the passengers inside the side.
        </p>

        <p class="col-md-4 timeline-item">
            <span class="yellow">September to November 2014</span> After months of protest from the victims’ families, the government passes a special law but in an incomplete and impractical state.<br>The purpose of this special law was to allow the power for investigating events related to the ferry sinking in order to dig for the truth. However, the passed law only allowed for retrieval of information.
        </p>

        <p class="col-md-4 timeline-item">
            <span class="yellow">November 10, 2014</span> The government concludes the search for missing bodies. There were still 9 bodies missing.
        </p>

        <p class="col-md-4 timeline-item">
            <span class="yellow">January 1, 2015</span> Special Investigation Committee, meant to search for the truth behind the ferry sinking, is formed after many hindrance from the the government. The committee members who were under the ruling party argued for disbandment.
        </p>

        <p class="col-md-4 timeline-item left">
            <span class="yellow">September 2016</span> Special Investigation Committee is disbanded due to the expiration of the contract. The government counted the 8-month period where the committee was inactive due to insufficient funds.
        </p>

        <p class="col-md-4 timeline-item left">
            <span class="yellow">March 2017</span> Protests for the impeachment of President Park.
        </p>

        <p class="col-md-4 timeline-item left">
            <span class="yellow">March 23 to April 11, 2017</span> After months of debate and opposition from the members of the ruling party, the ferry is finally lifted from the waters. There are still 5 bodies missing.
        </p>

        <p class="col-md-4 timeline-item">
            <span class="yellow">August 6, 2018</span> The Sewol Ferry Hull Investigation Committee failed to pinpoint an exact cause for the sinking of Sewol. They left open the possibilities of an internal or external factors.
        </p>
        <p class="col-md-4 timeline-item">
            <span class="yellow">So why did the ferry sink?</span> The government still stands that the sudden tilt caused the cargo to slide to one side, further worsening the tilt.<br>The directors of “That Day, at Sea” provided evidence that it might have been a dropped anchor that hit the sea floor.<br>The directors of “Murky Waters” point to inexperienced crew, cargo weight, untied cargo, and underwater collision as a possibility.
        </p>

        <div class="col-md-6 timeline-conclusion center">
            <p>The victim’s families have been the reason why Sewol had not been forgotten. They protested to the government by marching, shaving, fasting, petitioning, and so on. But the government responded by ignoring and even ridiculing them.
            <p>But they could not give up on their children. They wish for their misfortune to end at them and hope for a safer country for other children. They vowed to continue fighting for the truth and leave a chapter in the Korean history.</p>
            <p>They are still on their way to find the truth.<br>I will be with them until the truth is found.</p>
        </div>
    </div>

@endsection
@section('scripts')

    <script>
        $(document).ready(function () {
            // custom css for body for background image
            $('body').addClass('page-timeline');

            // Fade-in text animation
            //CONTROL VALUES
            function writeIntro() {
                const charWidth = 2.5;
                const spaceWidth = 8;
                const animSpeed = 15;
                const fadeSec = 0.5;
                const lineSpace = 30;
                const zone = document.getElementById('page-subtitle-timeline');
                const p = 'page-subtitle-timeline';
                let width = 0;
                let top = 0;
                const text = "On the early morning of April 16, 2016, the Sewol ferry flipped and capsized, taking the lives of 304 passengers out of 476. Of the 476 passengers, 325 were high school students on a field trip.";
                console.log(zone);

                const chars = text.split("");
                for (let i = 0; i < chars.length; i++) {
                    const s = "<span id ='" + p + "char" + i +
                        "' class='writer' style='top:" + top + "px; left:" + width +
                        "px;animation:charAnim " + fadeSec + "s linear " + i/animSpeed + "s forwards;'>"
                        + chars[i] + "</span>";
                    const node = document.createElement("div");
                    node.innerHTML = s;
                    zone.appendChild(node);
                    const blah = document.getElementById(p + "char" + i);
                    if (blah.offsetWidth == 0) {
                        width += spaceWidth;
                    }
                    else {
                        width += blah.offsetWidth+charWidth;
                    }
                    if (width >= 100 && blah.offsetWidth == 0) {
                        width = 0;
                        top += lineSpace;
                    }
                    console.log(width);
                }
            }
            writeIntro();
        });

        $(window).scroll(function() {
            // todo: change 500 to a more robust value
            if ( $(window).scrollTop() >= 500 ) {
                // Not .active is done so that the yellow styling of active link won't be affected
                $('.nav-link:not(.active)').css('color', '#ffffff');
            } else {
                $('.nav-link:not(.active)').css('color', '#000000');
            }
        });
    </script>

@append