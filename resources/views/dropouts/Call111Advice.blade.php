@extends('layouts.gds')

@section('content')
    <div class="govuk-grid-row">
        <div class="govuk-grid-column-two-thirds">
            <div class="govuk-heading-xl">
                Call NHS 111 and speak to a nurse
            </div>

            <div class="govuk-error-summary govuk-error-summary__body">
                The phone will be very busy but you need to wait to speak to someone.
            </div>

            <div class="govuk-body">
                111 online is updating its clinical assessment, so you must wait to speak to a nurse who will ask you more questions about your symptoms.
                <br><br>
                Tell 111 that you are calling about coronavirus symptoms.
                <br><br>
                You need to stay away from other people until you have spoken to 111.
                <br><br>
                <a href="https://www.nhs.uk/conditions/coronavirus-covid-19/self-isolation-advice/" class="govuk-link">
                    You can read more stay at home advice on NHS.UK.
                </a>
            </div>

            <div class="govuk-error-summary govuk-error-summary__body">
                To protect others, do not go to a GP, pharmacy or hospital
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
