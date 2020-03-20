@extends('layouts.question')

@section('backLink', '/severity')

@section('question', 'Do you work away from your home?')

@section('answers')

    <div class="govuk-form-group">
        <span id="nhs-patient-number-hint" class="govuk-hint">
            If you are currently working remotely, but normally have a workplace, please answer Yes.
        </span>
        <div class="govuk-radios govuk-radios--inline">
            <div class="govuk-radios__item">
                <input class="govuk-radios__input" id="tested" name="works-away" type="radio" value="yes">
                <label class="govuk-label govuk-radios__label" for="tested">
                    Yes
                </label>
            </div>
            <div class="govuk-radios__item">
                <input class="govuk-radios__input" id="tested-2" name="works-away" type="radio" value="no">
                <label class="govuk-label govuk-radios__label" for="tested-2">
                    No
                </label>
            </div>
        </div>
    </div>
@endsection

@section('formAction', '/do-you-work-away-from-your-home')

