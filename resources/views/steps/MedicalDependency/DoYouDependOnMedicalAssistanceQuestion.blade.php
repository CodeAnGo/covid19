@extends('layouts.question')

@section('backLink', '/are-you-self-isolating')

@section('question', 'Do you depend upon either visits from healthcare workers or prescription delivery to your home?')

@section('answers')

    <div class="govuk-form-group">
        <div class="govuk-radios govuk-radios--inline">
            <div class="govuk-radios__item">
                <input class="govuk-radios__input" id="knows-patient-num" name="dependant" type="radio" value="yes">
                <label class="govuk-label govuk-radios__label" for="knows-patient-num">
                    Yes
                </label>
            </div>
            <div class="govuk-radios__item">
                <input class="govuk-radios__input" id="knows-patient-num-2" name="dependant" type="radio" value="no">
                <label class="govuk-label govuk-radios__label" for="knows-patient-num-2">
                    No
                </label>
            </div>
        </div>
    </div>
@endsection

@section('formAction', '/do-you-depend-on-medical-assistance')

