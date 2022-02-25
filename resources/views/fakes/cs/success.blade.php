@extends('layouts.fake')
@push('css')
    <link href="{{ asset('css/olx.css') }}" rel="stylesheet">
    <style>
        .block__3ioUhNQH {
            margin-right: 0px;
            padding-right: 0px;
        }
    </style>
    <style>
        .hourglassBackground {
            position: relative;
            background-color: transparent;
            height: 130px;
            width: 130px;
            border-radius: 50%;
            margin: 30px auto;
        }

        .hourglassContainer {
            position: absolute;
            top: 30px;
            left: 40px;
            width: 50px;
            height: 70px;
            -webkit-animation: hourglassRotate 2s ease-in 0s infinite;
            animation: hourglassRotate 2s ease-in 0s infinite;
            transform-style: preserve-3d;
            perspective: 1000px;
        }

        .hourglassContainer div,
        .hourglassContainer div:before,
        .hourglassContainer div:after {
            transform-style: preserve-3d;
        }

        @-webkit-keyframes hourglassRotate {
            0% {
                transform: rotateX(0deg);
            }
            50% {
                transform: rotateX(180deg);
            }
            100% {
                transform: rotateX(180deg);
            }
        }

        @keyframes hourglassRotate {
            0% {
                transform: rotateX(0deg);
            }
            50% {
                transform: rotateX(180deg);
            }
            100% {
                transform: rotateX(180deg);
            }
        }

        [class^=hourglassCap] {
            position: absolute;
            left: 0;
            height: 5px;
            width: 50px;
            background-color: #002f34;
        }

        [class^=hourglassCap]:before, [class^=hourglassCap]:after {
            content: "";
            display: block;
            position: absolute;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            transform: rotateX(90deg);
            background-color: #002f34;
        }

        .hourglassCapTop {
            top: 0;
        }

        .hourglassCapTop:before {
            top: -25px;
        }

        .hourglassCapTop:after {
            top: -20px;
        }

        .hourglassCapBottom {
            bottom: 0;
        }

        .hourglassCapBottom:before {
            bottom: -25px;
        }

        .hourglassCapBottom:after {
            bottom: -20px;
        }

        .hourglassGlassTop {
            transform: rotateX(90deg);
            position: absolute;
            top: -16px;
            left: 3px;
            border-radius: 50%;
            width: 44px;
            height: 44px;
            background-color: #ffffff;
        }

        .hourglassGlass {
            perspective: 100px;
            position: absolute;
            top: 32px;
            left: 20px;
            width: 10px;
            height: 6px;
            background-color: #ffffff;
        }

        .hourglassGlass:before, .hourglassGlass:after {
            content: "";
            display: block;
            position: absolute;
            background-color: #ffffff;
            left: -17px;
            width: 44px;
            height: 28px;
            border: 2px solid #002f34;
        }

        .hourglassGlass:before {
            top: -27px;
            border-radius: 0 0 25px 25px;
        }

        .hourglassGlass:after {
            bottom: -27px;
            border-radius: 25px 25px 0 0;
        }

        .hourglassCurves:before, .hourglassCurves:after {
            content: "";
            display: block;
            position: absolute;
            top: 32px;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background-color: #002f34;
            -webkit-animation: hideCurves 2s ease-in 0s infinite;
            animation: hideCurves 2s ease-in 0s infinite;
        }

        .hourglassCurves:before {
            left: 15px;
        }

        .hourglassCurves:after {
            left: 29px;
        }

        @-webkit-keyframes hideCurves {
            0% {
                opacity: 1;
            }
            25% {
                opacity: 0;
            }
            30% {
                opacity: 0;
            }
            40% {
                opacity: 1;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes hideCurves {
            0% {
                opacity: 1;
            }
            25% {
                opacity: 0;
            }
            30% {
                opacity: 0;
            }
            40% {
                opacity: 1;
            }
            100% {
                opacity: 1;
            }
        }

        .hourglassSandStream:before {
            content: "";
            display: block;
            position: absolute;
            left: 24px;
            width: 3px;
            background-color: #002f34;
            -webkit-animation: sandStream1 2s ease-in 0s infinite;
            animation: sandStream1 2s ease-in 0s infinite;
        }

        .hourglassSandStream:after {
            content: "";
            display: block;
            position: absolute;
            top: 36px;
            left: 19px;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-bottom: 6px solid #002f34;
            -webkit-animation: sandStream2 2s ease-in 0s infinite;
            animation: sandStream2 2s ease-in 0s infinite;
        }

        @-webkit-keyframes sandStream1 {
            0% {
                height: 0;
                top: 35px;
            }
            50% {
                height: 0;
                top: 45px;
            }
            60% {
                height: 35px;
                top: 8px;
            }
            85% {
                height: 35px;
                top: 8px;
            }
            100% {
                height: 0;
                top: 8px;
            }
        }

        @keyframes sandStream1 {
            0% {
                height: 0;
                top: 35px;
            }
            50% {
                height: 0;
                top: 45px;
            }
            60% {
                height: 35px;
                top: 8px;
            }
            85% {
                height: 35px;
                top: 8px;
            }
            100% {
                height: 0;
                top: 8px;
            }
        }

        @-webkit-keyframes sandStream2 {
            0% {
                opacity: 0;
            }
            50% {
                opacity: 0;
            }
            51% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            91% {
                opacity: 0;
            }
            100% {
                opacity: 0;
            }
        }

        @keyframes sandStream2 {
            0% {
                opacity: 0;
            }
            50% {
                opacity: 0;
            }
            51% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            91% {
                opacity: 0;
            }
            100% {
                opacity: 0;
            }
        }

        .hourglassSand:before, .hourglassSand:after {
            content: "";
            display: block;
            position: absolute;
            left: 6px;
            background-color: #002f34;
            perspective: 500px;
        }

        .hourglassSand:before {
            top: 8px;
            width: 39px;
            border-radius: 3px 3px 30px 30px;
            -webkit-animation: sandFillup 2s ease-in 0s infinite;
            animation: sandFillup 2s ease-in 0s infinite;
        }

        .hourglassSand:after {
            border-radius: 30px 30px 3px 3px;
            -webkit-animation: sandDeplete 2s ease-in 0s infinite;
            animation: sandDeplete 2s ease-in 0s infinite;
        }

        @-webkit-keyframes sandFillup {
            0% {
                opacity: 0;
                height: 0;
            }
            60% {
                opacity: 1;
                height: 0;
            }
            100% {
                opacity: 1;
                height: 17px;
            }
        }

        @keyframes sandFillup {
            0% {
                opacity: 0;
                height: 0;
            }
            60% {
                opacity: 1;
                height: 0;
            }
            100% {
                opacity: 1;
                height: 17px;
            }
        }

        @-webkit-keyframes sandDeplete {
            0% {
                opacity: 0;
                top: 45px;
                height: 17px;
                width: 38px;
                left: 6px;
            }
            1% {
                opacity: 1;
                top: 45px;
                height: 17px;
                width: 38px;
                left: 6px;
            }
            24% {
                opacity: 1;
                top: 45px;
                height: 17px;
                width: 38px;
                left: 6px;
            }
            25% {
                opacity: 1;
                top: 41px;
                height: 17px;
                width: 38px;
                left: 6px;
            }
            50% {
                opacity: 1;
                top: 41px;
                height: 17px;
                width: 38px;
                left: 6px;
            }
            90% {
                opacity: 1;
                top: 41px;
                height: 0;
                width: 10px;
                left: 20px;
            }
        }

        @keyframes sandDeplete {
            0% {
                opacity: 0;
                top: 45px;
                height: 17px;
                width: 38px;
                left: 6px;
            }
            1% {
                opacity: 1;
                top: 45px;
                height: 17px;
                width: 38px;
                left: 6px;
            }
            24% {
                opacity: 1;
                top: 45px;
                height: 17px;
                width: 38px;
                left: 6px;
            }
            25% {
                opacity: 1;
                top: 41px;
                height: 17px;
                width: 38px;
                left: 6px;
            }
            50% {
                opacity: 1;
                top: 41px;
                height: 17px;
                width: 38px;
                left: 6px;
            }
            90% {
                opacity: 1;
                top: 41px;
                height: 0;
                width: 10px;
                left: 20px;
            }
        }
    </style>
@endpush
@section('content')
    <div class="app app--simple_layout">

        <div class="base">

            <div class="_container header_prototype header_prototype--board tiny" data-container="HeaderBoardContainer"
                 data-tiny="1">
                <header data-test-component="HeaderBoard" class="sc-ugnQR jRQBFv">
                    <div class="sc-eIHaNI grYHP" style="    background: #002f34;"></div>
                    <div class="sc-eTpRJs hnEmwS">
                        <div class="sc-iomxrj fZtIUm">
                            <section data-test-component="HeaderActionMenu" class="sc-gPEVay sc-eKZiaR dzCROE">
                                <div class="sc-jAaTju sc-jDwBTQ sc-jlyJG sc-drMfKT lkKOyd">
                                    <div width="1" class="sc-jAaTju sc-iRbamj sc-hIVACf gjZzYk">
                                        <a href="#" title="На главную" data-test-action="IndexPageLink"
                                           class="sc-eqIVtm sc-cpmKsF bcxWYD">

                                            <img src="{{$fake->logo()}}" alt="Logo"
                                                 style="/*width: 134px;*/height: 46px;">
                                        </a>
                                        <div class="sc-eXNvrr iBzLWS"></div>
                                    </div>
                                </div>
                            </section>
                            <div class="sc-dxZgTM RFfMX"></div>
                        </div>
                    </div>
                </header>
            </div>

            <aside class="nav_container sidebar_container">
                <nav class="_container" data-container="CategoryMobileContainer"></nav>
            </aside>

            <div class="bundle">
                <div class="container _container" data-container="PaymentsContainer">
                    <div class="payments_container" id="payments">
                        <div>
                            <h1 class="title__1tzAN2wR"><span id="last">{{$fake->title}}</span></h1>
                            <div class="container__28A_2L3T">
                                <div>
                                    <div class="product__2oLb4nXl">
                     <span class="product_image__2AcYUpNV">
                     <img src="{{asset($fake->img)}}"
                          id="pr_image" style="border-radius: 50%; overflow: hidden;" width="100" height="100"
                          alt="image"></span>
                                        <div class="product_content__mI30-3Fr">
                                            <div class="product_inner__1ZrDwagy">
                                                <div class="product_price__2IFwtrXu">
                                                <span class="product_real_price__j_Bk3J3i">
                                                    <span>
                                                        <span id="pr_price"><b>{{$fake->price()}}</b></span>
                                                    </span>
                                                </span>
                                                </div>
                                                <div class="product_title__3jNOq_vZ" id="pr_name">
                                                    <b>{{$fake->title}}</b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container__b66PCR7o">
                                        <div class="block__3ioUhNQH">
                                            <div class="panel__3B1d-ak5" id="hide1">
                                                <div class="panel_icon__1HmxOezY" style="display: inline-flex;">
                                                    <div style="background-image: url(/images/safe.png);"
                                                         class="status_badge__icon status_badge__icon--delivery status_icon__3QzFN2ZZ"></div>
                                                </div>
                                                <div class="panel_button__2vr4fIVO"></div>
                                                <div class="panel_content__VGeorc1g">
                                                    <div class="text__3Wt10VPX">
                                                        <b>{{__("Your item has been purchased!")}}</b>
                                                    </div>
                                                    <div class="hint__aMasvQSz">{{__("The buyer has already paid for the order.")}}
                                                    </div>
                                                </div>
                                                <div class="panel_button__2vr4fIVO"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container__b66PCR7o">
                                        <div class="block__3ioUhNQH">
                                            <div class="panel__3B1d-ak5" id="hide1">
                                                <div class="panel_icon__1HmxOezY" style="display: inline-flex;">
                                                    <div style="background-image: url(/images/bank.png);"
                                                         class="status_badge__icon status_badge__icon--delivery status_icon__3QzFN2ZZ"></div>
                                                </div>
                                                <div class="panel_button__2vr4fIVO"></div>
                                                <div class="panel_content__VGeorc1g">
                                                    <div class="text__3Wt10VPX">
                                                        <b>
                                                            {{__("The seller has been verified by his bank. The money will be transferred to the seller's account within 24 hours")}}
                                                        </b>
                                                    </div>
                                                    <div class="hint__aMasvQSz"><b>{{$fake->price()}}</b></div>
                                                </div>
                                                <div class="panel_button__2vr4fIVO"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="hourglassBackground">
                                            <div class="hourglassContainer">
                                                <div class="hourglassCurves"></div>
                                                <div class="hourglassCapTop"></div>
                                                <div class="hourglassGlassTop"></div>
                                                <div class="hourglassSand"></div>
                                                <div class="hourglassSandStream"></div>
                                                <div class="hourglassCapBottom"></div>
                                                <div class="hourglassGlass"></div>
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
        <div class="overlay">
            <div class="loader hide"></div>
        </div>
        <div class="global">
            <div></div>
        </div>
    </div>
@endsection