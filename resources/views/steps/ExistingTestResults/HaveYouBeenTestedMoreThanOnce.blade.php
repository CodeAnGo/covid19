@extends('layouts.question')

@section('backLink', '/have-you-already-been-tested-for-coronavirus')

@section('question', 'Have you already been tested for coronavirus (Covid-19) more than once?')

@section('answers')

    <div class="govuk-form-group">
        <span id="nhs-patient-number-hint" class="govuk-hint">
            This may be by the NHS, Private Health Professionals or by another country's Healthcare System.
        </span>
        <div class="govuk-radios govuk-radios--inline">
            <div class="govuk-radios__item">
                <input class="govuk-radios__input" id="tested" name="tested" type="radio" value="yes">
                <label class="govuk-label govuk-radios__label" for="tested">
                    Yes
                </label>
            </div>
            <div class="govuk-radios__item">
                <input class="govuk-radios__input" id="tested-2" name="tested" type="radio" value="no">
                <label class="govuk-label govuk-radios__label" for="tested-2">
                    No
                </label>
            </div>
        </div>
    </div>
@endsection

@section('formAction', '/have-you-been-tested-more-than-once')

