@extends('layouts.question')

@section('backLink', '/have-you-already-been-tested-for-coronavirus')

@section('question', 'What was the date of your last test for coronavirus (Covid-19)?')

@section('answers')
    <div class="govuk-form-group">
        <span id="date-of-birth-hint" class="govuk-hint">
            For example, 10 3 2020
        </span>
        <div class="govuk-date-input" id="date-of-birth">
            <div class="govuk-date-input__item">
                <div class="govuk-form-group">
                    <label class="govuk-label govuk-date-input__label" for="day-of-test">
                        Day
                    </label>
                    <input class="govuk-input govuk-date-input__input govuk-input--width-2" id="day-of-test" name="day-of-test" type="text" pattern="[0-9]*" inputmode="numeric">
                </div>
            </div>
            <div class="govuk-date-input__item">
                <div class="govuk-form-group">
                    <label class="govuk-label govuk-date-input__label" for="month-of-test">
                        Month
                    </label>
                    <input class="govuk-input govuk-date-input__input govuk-input--width-2" id="month-of-test" name="month-of-test" type="text" pattern="[0-9]*" inputmode="numeric">
                </div>
            </div>
            <div class="govuk-date-input__item">
                <div class="govuk-form-group">
                    <label class="govuk-label govuk-date-input__label" for="year-of-test">
                        Year
                    </label>
                    <input class="govuk-input govuk-date-input__input govuk-input--width-4" id="year-of-test" name="year-of-test" type="text" pattern="[0-9]*" inputmode="numeric">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('formAction', 'date-of-last-test')

