@extends('layouts.question')

@section('backLink', '/severity')

@section('question', 'Do you have any of the following underlying medical conditions?')

@section('answers')

    <div class="govuk-form-group">
        <div class="govuk-caption-l">
            <p>Please only include ongoing medical conditions that have been diagnosed by a doctor or medical professional.</p>
        </div>
        <span id="waste-hint" class="govuk-hint">
          Select all that apply.
        </span>
        <div class="govuk-checkboxes">
            <div class="govuk-checkboxes__item">
                <input class="govuk-checkboxes__input" id="condition" name="condition" type="checkbox" value="carcasses">
                <label class="govuk-label govuk-checkboxes__label" for="condition">
                    Pregnancy
                </label>
            </div>
            <div class="govuk-checkboxes__item">
                <input class="govuk-checkboxes__input" id="condition-2" name="condition" type="checkbox" value="mines">
                <label class="govuk-label govuk-checkboxes__label" for="condition-2">
                    Cardiovascular disease, including hypertension
                </label>
            </div>
            <div class="govuk-checkboxes__item">
                <input class="govuk-checkboxes__input" id="condition-3" name="condition" type="checkbox" value="farm">
                <label class="govuk-label govuk-checkboxes__label" for="condition-3">
                    Diabetes
                </label>
            </div>
            <div class="govuk-checkboxes__item">
                <input class="govuk-checkboxes__input" id="condition-4" name="condition" type="checkbox" value="farm">
                <label class="govuk-label govuk-checkboxes__label" for="condition-4">
                    Liver disease
                </label>
            </div>
            <div class="govuk-checkboxes__item">
                <input class="govuk-checkboxes__input" id="condition-5" name="condition" type="checkbox" value="farm">
                <label class="govuk-label govuk-checkboxes__label" for="condition-5">
                    Chronic neurological or neuromuscular disease
                </label>
            </div>
            <div class="govuk-checkboxes__item">
                <input class="govuk-checkboxes__input" id="condition-6" name="condition" type="checkbox" value="farm">
                <label class="govuk-label govuk-checkboxes__label" for="condition-6">
                    Post-partum (< 6 weeks)
                </label>
            </div>
            <div class="govuk-checkboxes__item">
                <input class="govuk-checkboxes__input" id="condition-7" name="condition" type="checkbox" value="farm">
                <label class="govuk-label govuk-checkboxes__label" for="condition-7">
                    Immunodeficiency, including HIV
                </label>
            </div>
            <div class="govuk-checkboxes__item">
                <input class="govuk-checkboxes__input" id="condition-8" name="condition" type="checkbox" value="farm">
                <label class="govuk-label govuk-checkboxes__label" for="condition-8">
                    Renal disease
                </label>
            </div>
            <div class="govuk-checkboxes__item">
                <input class="govuk-checkboxes__input" id="condition-9" name="condition" type="checkbox" value="farm">
                <label class="govuk-label govuk-checkboxes__label" for="condition-9">
                    Chronic lung disease
                </label>
            </div>
            <div class="govuk-checkboxes__item">
                <input class="govuk-checkboxes__input" id="condition-10" name="condition" type="checkbox" value="farm">
                <label class="govuk-label govuk-checkboxes__label" for="condition-10">
                    Malignancy
                </label>
            </div>
        </div>
    </div>
@endsection

@section('formAction', '/underlying-conditions')
