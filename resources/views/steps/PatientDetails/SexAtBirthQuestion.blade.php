@extends('layouts.question')

@section('backLink', '/what-is-your-post-code')

@section('question', 'What was your sex at birth?')

@section('answers')

    <div class="govuk-form-group">
        <span id="nhs-patient-number-hint" class="govuk-hint">
            Some clinical assessments can be different depending on your sex. Not everyone sees themselves as female or male, so if neither option is right for you call 111.
        </span>
        <div class="govuk-radios govuk-radios--inline">
            <div class="govuk-radios__item">
                <input class="govuk-radios__input" id="sex-at-birth" name="sex-at-birth" type="radio" value="female">
                <label class="govuk-label govuk-radios__label" for="sex-at-birth">
                    Female
                </label>
            </div>
            <div class="govuk-radios__item">
                <input class="govuk-radios__input" id="sex-at-birth-2" name="sex-at-birth" type="radio" value="male">
                <label class="govuk-label govuk-radios__label" for="sex-at-birth-2">
                    Male
                </label>
            </div>
        </div>
    </div>
@endsection

@section('formAction', '/what-was-your-sex-at-birth')

