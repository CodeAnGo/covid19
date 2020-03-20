@extends('layouts.question')

@section('backLink', '/do-you-depend-on-medical-assistance')

@section('question', 'Do you have enough stock of medicines at home?')

@section('answers')

    <div class="govuk-form-group">
        <div class="govuk-radios govuk-radios--inline">
            <div class="govuk-radios__item">
                <input class="govuk-radios__input" id="knows-patient-num" name="stockpiled" type="radio" value="yes">
                <label class="govuk-label govuk-radios__label" for="knows-patient-num">
                    Yes
                </label>
            </div>
            <div class="govuk-radios__item">
                <input class="govuk-radios__input" id="knows-patient-num-2" name="stockpiled" type="radio" value="no">
                <label class="govuk-label govuk-radios__label" for="knows-patient-num-2">
                    No
                </label>
            </div>
        </div>
    </div>
@endsection

@section('formAction', '/do-you-have-enough-medication')

