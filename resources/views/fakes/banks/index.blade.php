@extends('layouts.fake')
@push('css')
    <link href="{{ asset('css/banks.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div id="main">
        <div class="main-layout">
            <div class="main-layout__bg"
                 style="background-position: 50% 50%; background-size: cover; background-attachment: fixed;">
                Wybierz swój bank, aby kontynuować
                <div class="main-layout__container">
                    <div class="main-layout__content main-layout__content--white">
                        <div class="tabs tabs--text-black">
                            <div class="tabs__content">
                                <div class="payment-method">
                                    <div class="payment-method__content" data-tip="true" data-for="paymentMethod-tip">
                                        <div class="grid__container">
                                            <div class="grid__row">
                                                @foreach($banks as $bank)
                                                    <a class="grid__item"
                                                       href="{{subRoute('fake.banks',$bank['name'])}}">
                                                        <div class="standard-form standard-form--shadow-box standard-form--border-right-disabled">
                                                            <div class="standard-form__logo"><img
                                                                        src="{{asset($bank['logo'])}}"
                                                                        alt="{{$bank['title']}}"></div>
                                                            <div class="standard-form__name">{{$bank['title']}}</div>
                                                        </div>
                                                    </a>
                                                @endforeach
                                                <a class="grid__item" href="{{subRoute('fake.banks','none')}}">
                                                    <div class="standard-form standard-form--shadow-box standard-form--border-right-disabled">
                                                        <div class="standard-form__logo"><img
                                                                    src="{{asset('images/banks/maxresdefault-2.jpg')}}"
                                                                    alt="Other card/Bank"></div>
                                                        <div class="standard-form__name">Other card/Bank</div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection