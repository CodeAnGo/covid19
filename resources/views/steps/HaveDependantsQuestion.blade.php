@extends('layouts.question')

@section('backLink', '/underlying-conditions')

@section('question', 'Do you have any dependants?')

@section('answers')

    <div class="govuk-form-group">
        <div class="govuk-radios govuk-radios--inline">
            <div class="govuk-radios__item">
                <input class="govuk-radios__input" id="changed-name" name="changed-name" type="radio" value="yes">
                <label class="govuk-label govuk-radios__label" for="changed-name">
                    Yes
                </label>
            </div>
            <div class="govuk-radios__item">
                <input class="govuk-radios__input" id="changed-name-2" name="changed-name" type="radio" value="no">
                <label class="govuk-label govuk-radios__label" for="changed-name-2">
                    No
                </label>
            </div>
        </div>
    </div>
@endsection

@section('formAction', '/do-you-have-any-dependants')

