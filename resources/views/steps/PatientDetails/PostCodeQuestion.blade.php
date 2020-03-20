@extends('layouts.question')

@section('backLink', '/what-is-your-phone-number')

@section('question', 'What is your Post Code?')

@section('answers')
    <div class="govuk-form-group">
        <label class="govuk-label" for="post-code">
            Post Code
        </label>
        <input class="govuk-input govuk-input--width-10" id="post-code" name="post-code" type="text" aria-describedby="post-code-hint" spellcheck="false" max="10">
    </div>
@endsection

@section('formAction', 'what-is-your-post-code')

