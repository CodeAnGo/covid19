@extends('layouts.question')

@section('backLink', '/do-you-work-away-from-your-home')

@section('question', 'Do you work as a member of the health service, dealing directly with patients?')

@section('answers')

    <div class="govuk-form-group">

        <div class="govuk-radios govuk-radios--inline">
            <div class="govuk-radios__item">
                <input class="govuk-radios__input" id="has-symptoms" name="key-worker" type="radio" value="yes">
                <label class="govuk-label govuk-radios__label" for="has-symptoms">
                    Yes
                </label>
            </div>
            <div class="govuk-radios__item">
                <input class="govuk-radios__input" id="has-symptoms-2" name="key-worker" type="radio" value="no">
                <label class="govuk-label govuk-radios__label" for="has-symptoms-2">
                    No
                </label>
            </div>
        </div>
    </div>
@endsection

@section('formAction', '/are-you-a-critical-worker')

