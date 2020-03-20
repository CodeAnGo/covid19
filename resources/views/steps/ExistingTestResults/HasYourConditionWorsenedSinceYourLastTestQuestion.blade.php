@extends('layouts.question')

@section('backLink', '/have-you-been-tested-more-than-once')

@section('question', 'Has your condition worsened since your last test for coronavirus (Covid-19)?')

@section('answers')

    <div class="govuk-form-group">
        <div class="govuk-radios govuk-radios--inline">
            <div class="govuk-radios__item">
                <input class="govuk-radios__input" id="tested" name="worse" type="radio" value="yes">
                <label class="govuk-label govuk-radios__label" for="tested">
                    Yes
                </label>
            </div>
            <div class="govuk-radios__item">
                <input class="govuk-radios__input" id="tested-2" name="worse" type="radio" value="no">
                <label class="govuk-label govuk-radios__label" for="tested-2">
                    No
                </label>
            </div>
        </div>
    </div>
@endsection

@section('formAction', '/has-your-condition-worsened-since-your-last-test')

