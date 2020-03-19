@extends('layouts.gds')
@section('content')
    <a href="@yield('backLink')" class="govuk-back-link">Back</a>
    <div class="govuk-grid-row">
        <div class="govuk-grid-column-two-thirds">
            <form action="@yield('formAction')" method="post">
                @csrf
                <div class="govuk-form-group">
                    <fieldset class="govuk-fieldset">
                        <legend class="govuk-fieldset__legend govuk-fieldset__legend--xl">
                            <h1 class="govuk-fieldset__heading">
                                @yield('question')
                            </h1>
                        </legend>
                        @yield('answers')
                    </fieldset>
                </div>
                <button class="govuk-button" type="submit" data-module="govuk-button">
                    Continue
                </button>
            </form>
        </div>
    </div>
@endsection
