@extends('layouts.question')

@section('backLink', '/date-of-birth')

@section('question', 'Do you have either:')

@section('answers')

    <div class="govuk-form-group">
        <ul class="govuk-list govuk-list--bullet">
            <li>a high temperature - you feel hot to touch on your chest or back</li>
            <li>a new continuous cough - this means you've started coughing repeatedly</li>
        </ul>

        <div class="govuk-radios govuk-radios--inline">
            <div class="govuk-radios__item">
                <input class="govuk-radios__input" id="has-symptoms" name="has-symptoms" type="radio" value="yes">
                <label class="govuk-label govuk-radios__label" for="has-symptoms">
                    Yes
                </label>
            </div>
            <div class="govuk-radios__item">
                <input class="govuk-radios__input" id="has-symptoms-2" name="has-symptoms" type="radio" value="no">
                <label class="govuk-label govuk-radios__label" for="has-symptoms-2">
                    No
                </label>
            </div>
        </div>
    </div>
@endsection

@section('formAction', '/symptoms')

