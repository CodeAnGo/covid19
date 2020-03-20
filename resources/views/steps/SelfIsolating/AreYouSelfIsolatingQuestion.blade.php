@extends('layouts.question')

@section('backLink', '/do-you-work-with-at-risk-groups')

@section('question', 'Are you currently self isolating?')

@section('answers')

    <div class="govuk-form-group">
        <span id="nhs-patient-number-hint" class="govuk-hint">
            This question is asking if you have been instructed to self isolate by a healthcare professional, not if you are working remotely.
        </span>
        <div class="govuk-radios govuk-radios--inline">
            <div class="govuk-radios__item">
                <input class="govuk-radios__input" id="knows-patient-num" name="self-isolating" type="radio" value="yes">
                <label class="govuk-label govuk-radios__label" for="knows-patient-num">
                    Yes
                </label>
            </div>
            <div class="govuk-radios__item">
                <input class="govuk-radios__input" id="knows-patient-num-2" name="self-isolating" type="radio" value="no">
                <label class="govuk-label govuk-radios__label" for="knows-patient-num-2">
                    No
                </label>
            </div>
        </div>
    </div>
@endsection

@section('formAction', '/are-you-self-isolating')

