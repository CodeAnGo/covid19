@extends('layouts.gds')

@section('content')
    <div class="govuk-grid-row">
        <div class="govuk-grid-column-two-thirds">
            <div class="govuk-heading-xl">
                You need to stay at home
            </div>

            <div class="govuk-error-summary govuk-error-summary__body">
                Stay away from other people for at least the next 7 days. If your high temperature lasts longer than 7 days, stay at home until it's back to normal.
                <br><br>
                Testing for coronavirus is not needed if you're staying at home.
            </div>
            <div class="govuk-body">
                If you are on public transport, go home by the most direct route.
                <br><br>
                Stay at least 2 metres (about 3 steps) away from people if you can.
            </div>

            <div class="govuk-error-summary govuk-error-summary__body">
                To protect others, do not go to a GP, pharmacy or hospital
            </div>

            <a href="https://www.nhs.uk/conditions/coronavirus-covid-19/self-isolation-advice/" class="govuk-link">
                You can read more stay at home advice on NHS.UK.
            </a>

            <div class="govuk-heading-l">            <br>

                How to look after your symptoms at home
            </div>
            <div class="govuk-body">
                <ul class="govuk-list govuk-list--bullet">
                    <li>rest and drink plenty of fluids</li>
                    <li>take paracetamol or ibuprofen</li>
                    <li>cover the mouth with a tissue when coughing or sneezing</li>
                    <li>put used tissues in a bin</li>
                    <li>wash your hands regularly with warm water and soap for at least 20 seconds</li>
                </ul>
                If you feel you can’t cope with your symptoms at home or your condition gets worse use the 111 online service again.
            </div>

            <div class="govuk-heading-l">
                When to end your stay at home
            </div>
            <div class="govuk-body">
                You should remain at home until 7 days after your symptoms started.
                <br><br>
                After 7 days, if you feel better and no longer have a high temperature, you can go back to doing what you would normally do.
                <br><br>
                The cough may go on for some weeks in some people, even though the coronavirus infection has cleared. A cough by itself does not mean you have to stay at home for more than 7 days.
                <br><br>
                If you do not get better after 7 days use the 111 online assessment service again before you leave your home or let visitors in.
            </div>

            <a href="/" role="button" draggable="false" class="govuk-button govuk-!-margin-top-2 govuk-!-margin-bottom-8 govuk-button--start" data-module="govuk-button">
                Start over
                <svg class="govuk-button__start-icon" xmlns="http://www.w3.org/2000/svg" width="17.5" height="19" viewBox="0 0 33 40" aria-hidden="true" focusable="false">
                    <path fill="currentColor" d="M0 0h13l20 20-20 20H0l20-20z" />
                </svg>
            </a>
        </div>
    </div>
@endsection
