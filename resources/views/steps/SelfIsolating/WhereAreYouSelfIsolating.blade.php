@extends('layouts.question')

@section('backLink', '/are-you-self-isolating')

@section('question', 'Where are you self-isolating?')

@section('answers')
    <div class="govuk-form-group">
        <label class="govuk-label" for="post-code">
            Post Code
        </label>
        <input class="govuk-input govuk-input--width-10" id="post-code" name="post-code" type="text" aria-describedby="post-code-hint" spellcheck="false" max="10">
    </div>
@endsection

@section('formAction', 'where-are-you-self-isolating')

