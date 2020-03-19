@extends('layouts.question')

@section('backLink', '/do-you-have-any-dependants')

@section('question', 'When did you last visit any of the following locations:')

@section('answers')

    <div class="govuk-form-group">
        <ul class="govuk-list govuk-list--bullet">
            <li>A School</li>
            <li>A Hospital, GP Surgery, Dentist or other Medical Facility</li>
            <li>A Hospice</li>
            <li>A Care Home</li>
            <li>A Supermarket</li>
        </ul>

        <div class="govuk-date-input" id="last-exposure">
            <div class="govuk-date-input__item">
                <div class="govuk-form-group">
                    <label class="govuk-label govuk-date-input__label" for="last-exposure-day">
                        Day
                    </label>
                    <input class="govuk-input govuk-date-input__input govuk-input--width-2" id="last-exposure-day" name="last-exposure-day" type="text" pattern="[0-9]*" inputmode="numeric">
                </div>
            </div>
            <div class="govuk-date-input__item">
                <div class="govuk-form-group">
                    <label class="govuk-label govuk-date-input__label" for="last-exposure-month">
                        Month
                    </label>
                    <input class="govuk-input govuk-date-input__input govuk-input--width-2" id="last-exposure-month" name="last-exposure-month" type="text" pattern="[0-9]*" inputmode="numeric">
                </div>
            </div>
            <div class="govuk-date-input__item">
                <div class="govuk-form-group">
                    <label class="govuk-label govuk-date-input__label" for="last-exposure-year">
                        Year
                    </label>
                    <input class="govuk-input govuk-date-input__input govuk-input--width-4" id="last-exposure-year" name="last-exposure-year" type="text" pattern="[0-9]*" inputmode="numeric">
                </div>
            </div>
        </div>

    </div>
@endsection

@section('formAction', '/public-exposure')

