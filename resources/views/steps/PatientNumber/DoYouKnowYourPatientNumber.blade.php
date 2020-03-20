@extends('layouts.question')

@section('backLink', '/introduction')

@section('question', 'Do you know your NHS patient number?:')

@section('answers')

    <div class="govuk-form-group">
        <span id="nhs-patient-number-hint" class="govuk-hint">
            It was provided when you joined your local GP Surgery, or will be on any medical forms. For example, ‘485 777 3456’.
        </span>
        <div class="govuk-radios govuk-radios--inline">
            <div class="govuk-radios__item">
                <input class="govuk-radios__input" id="knows-patient-num" name="knows-patient-num" type="radio" value="yes">
                <label class="govuk-label govuk-radios__label" for="knows-patient-num">
                    Yes
                </label>
            </div>
            <div class="govuk-radios__item">
                <input class="govuk-radios__input" id="knows-patient-num-2" name="knows-patient-num" type="radio" value="no">
                <label class="govuk-label govuk-radios__label" for="knows-patient-num-2">
                    No
                </label>
            </div>
        </div>
    </div>
@endsection

@section('formAction', '/do-you-know-your-nhs-patient-number')

