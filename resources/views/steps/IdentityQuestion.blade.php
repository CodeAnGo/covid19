@extends('layouts.question')

@section('backLink', '/')

@section('question', 'What is your NHS Patient Number?')

@section('answers')
    <div class="govuk-form-group">
        <label class="govuk-label" for="nhs-patient-number">
            NHS Patient Number
        </label>
        <span id="nhs-patient-number-hint" class="govuk-hint">
    It was provided when you joined your local GP Surgery, or will be on any medical forms. For example, ‘485 777 3456’.
  </span>
        <input class="govuk-input govuk-input--width-10" id="nhs-patient-number" name="nhs-patient-number" type="text" aria-describedby="nhs-patient-number-hint" spellcheck="false" max="10">
    </div>
@endsection

@section('formAction', 'identity')

