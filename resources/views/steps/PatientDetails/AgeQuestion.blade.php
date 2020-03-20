@extends('layouts.question')

@section('backLink', '/identity')

@section('question', 'What is your date of birth?')

@section('answers')
    <div class="govuk-form-group">
        <span id="date-of-birth-hint" class="govuk-hint">
            For example, 27 3 1980
        </span>
        <div class="govuk-date-input" id="date-of-birth">
            <div class="govuk-date-input__item">
                <div class="govuk-form-group">
                    <label class="govuk-label govuk-date-input__label" for="date-of-birth-day">
                        Day
                    </label>
                    <input class="govuk-input govuk-date-input__input govuk-input--width-2" id="date-of-birth-day" name="date-of-birth-day" type="text" pattern="[0-9]*" inputmode="numeric">
                </div>
            </div>
            <div class="govuk-date-input__item">
                <div class="govuk-form-group">
                    <label class="govuk-label govuk-date-input__label" for="date-of-birth-month">
                        Month
                    </label>
                    <input class="govuk-input govuk-date-input__input govuk-input--width-2" id="date-of-birth-month" name="date-of-birth-month" type="text" pattern="[0-9]*" inputmode="numeric">
                </div>
            </div>
            <div class="govuk-date-input__item">
                <div class="govuk-form-group">
                    <label class="govuk-label govuk-date-input__label" for="date-of-birth-year">
                        Year
                    </label>
                    <input class="govuk-input govuk-date-input__input govuk-input--width-4" id="date-of-birth-year" name="date-of-birth-year" type="text" pattern="[0-9]*" inputmode="numeric">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('formAction', 'date-of-birth')

