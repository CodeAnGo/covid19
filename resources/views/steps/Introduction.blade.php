@extends('layouts.gds')

@section('content')
    <div class="govuk-grid-row">
        <div class="govuk-grid-column-two-thirds">
            <h1 class="govuk-heading-xl">Covid-19 Tracker</h1>

            <h1 class="govuk-heading-m">
                Find out what to do if you think you have symptoms
            </h1>

            <p class="govuk-body">
                We'll ask you a few questions and tell you what to do next.
            </p>

            <p class="govuk-body">This service takes around 5 minutes.</p>

            <a href="/do-you-know-your-nhs-patient-number" role="button" draggable="false" class="govuk-button govuk-!-margin-top-2 govuk-!-margin-bottom-8 govuk-button--start" data-module="govuk-button">
                Start now
                <svg class="govuk-button__start-icon" xmlns="http://www.w3.org/2000/svg" width="17.5" height="19" viewBox="0 0 33 40" aria-hidden="true" focusable="false">
                    <path fill="currentColor" d="M0 0h13l20 20-20 20H0l20-20z" />
                </svg>
            </a>

            <h2 class="govuk-heading-m">Before you start</h2>

            <p class="govuk-body">This online service is also available in <a class="govuk-link" href="#">Welsh (Cymraeg)</a>.</p>

            <p class="govuk-body">You cannot use this service if you’re in the UK illegally.</p>
        </div>

        <div class="govuk-grid-column-one-third">

            <!-- The Related items component is not part of GOV.UK Frontend but will be styled if used in the Prototype Kit -->

            <aside class="app-related-items" role="complementary">
                <h2 class="govuk-heading-m" id="subsection-title">
                    Additional Information
                </h2>
                <nav role="navigation" aria-labelledby="subsection-title">
                    <ul class="govuk-list govuk-!-font-size-16">
                        <li>
                            <a class="govuk-link" href="https://www.nhs.uk/conditions/coronavirus-covid-19/">
                                NHS 111
                            </a>
                        </li>
                        <li>
                            <a class="govuk-link" href="https://www.gov.uk/government/topical-events/coronavirus-covid-19-uk-government-response">
                                Public Health England
                            </a>
                        </li>
                    </ul>
                </nav>
            </aside>

        </div>
    </div>
@endsection
