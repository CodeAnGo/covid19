@extends('layouts.question')

@section('backLink', '/date-of-birth')

@section('question', 'What is your Phone Number?')

@section('answers')
    <div class="govuk-form-group">
        <span id="nhs-patient-number-hint" class="govuk-hint">
            Please provide your Mobile or Landline Number so you can receive critical information from the NHS 111 Service.
        </span>
        <input class="govuk-input govuk-input--width-10" id="phone-number" name="phone-number" type="text" aria-describedby="phone-number-hint" spellcheck="false" max="10">
    </div>
@endsection

@section('formAction', 'what-is-your-phone-number')

