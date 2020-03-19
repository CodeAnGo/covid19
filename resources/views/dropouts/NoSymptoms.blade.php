@extends('layouts.gds')

@section('content')
    <div class="govuk-grid-row">
        <div class="govuk-grid-column-two-thirds">
            <div class="govuk-heading-xl">
                You don’t need to speak to anybody right now as you
            </div>
            <ul class="govuk-list govuk-list--bullet">
                <li><b>don't</b> have a high temperature</li>
                <li><b>don't</b> have a new continuous cough</li>
            </ul>
            <div class="govuk-body">
                It’s unlikely that you are experiencing symptoms of coronavirus (COVID-19).
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
