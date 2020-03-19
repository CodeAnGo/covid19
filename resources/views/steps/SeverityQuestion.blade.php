@extends('layouts.question')

@section('backLink', '/symptoms')

@section('question', 'Are you so ill that you\'ve stopped doing all of your usual daily activities?')

@section('answers')

    <div class="govuk-form-group">
        <div class="govuk-caption-l">
            <p>We are checking to see if you feel so ill that you can't do anything you usually would, such as watch TV, use your phone, read or get out of bed.</p>
        </div>

        <div class="govuk-radios govuk-radios--inline">
            <div class="govuk-radios__item">
                <input class="govuk-radios__input" id="severe" name="severe" type="radio" value="yes">
                <label class="govuk-label govuk-radios__label" for="severe">
                    Yes - I've stopped doing everything I usually do
                </label>
            </div>
            <div class="govuk-radios__item">
                <input class="govuk-radios__input" id="severe-2" name="severe" type="radio" value="no">
                <label class="govuk-label govuk-radios__label" for="severe-2">
                    No - I feel well enough to do most of my usual daily activities
                </label>
            </div>
        </div>
    </div>
@endsection

@section('formAction', '/severity')

