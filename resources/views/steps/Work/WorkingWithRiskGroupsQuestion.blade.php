@extends('layouts.question')

@section('backLink', '/are-you-a-critical-worker')

@section('question', 'Do you work in an environment with "At Risk" Groups?')

@section('answers')

    <div class="govuk-form-group">

        <span class="govuk-hint">
            This includes any workplaces with direct contact to old, young or otherwise vulnerable people such as in a School, Nursery or Hospice.
        </span>

        <div class="govuk-radios govuk-radios--inline">
            <div class="govuk-radios__item">
                <input class="govuk-radios__input" id="has-symptoms" name="works-with-at-risk" type="radio" value="yes">
                <label class="govuk-label govuk-radios__label" for="has-symptoms">
                    Yes
                </label>
            </div>
            <div class="govuk-radios__item">
                <input class="govuk-radios__input" id="has-symptoms-2" name="works-with-at-risk" type="radio" value="no">
                <label class="govuk-label govuk-radios__label" for="has-symptoms-2">
                    No
                </label>
            </div>
        </div>
    </div>
@endsection

@section('formAction', '/do-you-work-with-at-risk-groups')

