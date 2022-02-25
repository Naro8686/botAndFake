@extends('layouts.fake')
@push('css')
    <link rel="stylesheet"
          href="https://lokalnie-prod-assets.storage.googleapis.com/ui/versions/ff1a60cc/assets/app-02229f3c80e23475af52b8ff29167ffa.css?vsn=d">
    <link rel="stylesheet"
          href="https://lokalnie-prod-assets.storage.googleapis.com/ui/versions/ff1a60cc/assets/offer-342d9001fbe4e0be4ac8eb5f5d424959.css?vsn=d">
{{--    <link href="{{ asset('css/allegro.css') }}" rel="stylesheet">--}}
@endpush
@section('content')
    <div id="app-root">
        <header class="masthead hidden--app-view is-mobile-masthead" id="masthead">
            <div class="masthead__content-container l-container is-wide">
                <button class="masthead__hamburger is-extended" data-testid="masthead-hamburger"
                        data-masthead-nav-toggler="" data-top-header-toggler="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="#C3C3C3" fill-rule="evenodd"
                              d="M23 13H1c-.6 0-1-.4-1-1s.4-1 1-1h22c.6 0 1 .4 1 1s-.4 1-1 1zm0-8H1c-.6 0-1-.4-1-1s.4-1 1-1h22c.6 0 1 .4 1 1s-.4 1-1 1zm0 16H1c-.6 0-1-.4-1-1s.4-1 1-1h22c.6 0 1 .4 1 1s-.4 1-1 1z"></path>
                    </svg>
                    <div class="hidden masthead__categories" data-masthead-nav-categories="">
                        <div class="masthead__categories-wrapper">
                            <nav class="categories-nav categories-nav--selected-nest-level-0"
                                 data-categories-nav-hamburger-menu="">
                                <header class="categories-nav__header"><a class="categories-nav__header-close-link"
                                                                          data-categories-nav-close-link="">
                                        Zamknij </a>
                                    Przeglądaj ogłoszenia:
                                </header>
                                <div class="categories-nav__menu categories-nav__menu--nest-level-0 categories-nav__menu--selected"
                                     data-categories-nav-menu="" data-categories-nav-nest-level="0"
                                     data-categories-nav-selected="">
                                    <ul class="categories-nav__list categories-nav__list--nest-level-0"
                                        data-testid="desktop-categories-nav-list">
                                        <li class="categories-nav__item categories-nav__item--nest-level-0"
                                            data-categories-nav-item="" data-categories-nav-nest-level="0"><a
                                                    class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-0 btn-text-secondary"
                                                    data-categories-nav-item-back-link=""
                                                    data-categories-nav-nest-level="0"> Cofnij do: wszystkie
                                                kategorie </a>
                                            <a href="https://allegrolokalnie.pl/oferty/elektronika"
                                               class="categories-nav__item-link categories-nav__item-link--nest-level-0"
                                               data-testid="categories-nav-item-elektronika" aria-haspopup="true"
                                               aria-controls="categories-nav__megamenu--elektronika"
                                               data-categories-nav-item-link=""
                                               data-categories-nav-nest-level="0"> <span
                                                        class="categories-nav__item-icon categories-nav__item-icon--nest-level-0 category-icon is-category-elektronika"></span>
                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-0"> Elektronika           </span>
                                                <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-0">
                                                    Zobacz wszystkie oferty </small> </a>
                                            <div class="categories-nav__menu categories-nav__menu--nest-level-1 is-category-elektronika is-medium"
                                                 data-testid="categories-nav-megamenu-elektronika" tabindex="-1"
                                                 aria-hidden="true" id="categories-nav__megamenu--elektronika"
                                                 data-categories-nav-menu="" data-categories-nav-nest-level="1">
                                                <div class="categories-nav__columns--nest-level-1">
                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Elektronika </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/elektronika/fotografia-8845"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-elektronika"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Fotografia                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/fotografia/akcesoria-fotograficzne-8847"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Akcesoria fotograficzne</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/fotografia/aparaty-cyfrowe-110618"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Aparaty cyfrowe</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/fotografia/aparaty-analogowe-110589"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Aparaty analogowe</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/fotografia/obiektywy-258269"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Obiektywy</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Elektronika </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/elektronika/komputery-2"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-elektronika"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Komputery                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/komputery/czesci-do-laptopow-77801"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Części do laptopów</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/komputery/drukarki-i-skanery-4578"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Drukarki i skanery</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/komputery/internet-15821"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Internet</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/komputery/komputery-stacjonarne-486"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Komputery stacjonarne</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/elektronika/konsole-i-automaty-122233"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Konsole i automaty</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/komputery/laptopy-491"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Laptopy</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/komputery/oprogramowanie-68"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Oprogramowanie</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/komputery/podzespoly-komputerowe-4226"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Podzespoły komputerowe</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/komputery/tablety-89253"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Tablety</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/komputery/urzadzenia-sieciowe-4413"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Urządzenia sieciowe</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Elektronika </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/elektronika/telefony-i-akcesoria-4"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-elektronika"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Telefony i Akcesoria                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/telefony-i-akcesoria/akcesoria-gsm-348"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Akcesoria GSM</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/telefony-i-akcesoria/pre-paid-441"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Pre-paid</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/telefony-i-akcesoria/smartfony-i-telefony-komorkowe-165"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Smartfony i telefony komórkowe</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/telefony-i-akcesoria/smartwatche-i-akcesoria-250722"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Smartwatche i akcesoria</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Elektronika </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/sport-i-turystyka/elektronika-sportowa-252782"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-elektronika"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Elektronika sportowa                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Elektronika </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/elektronika/sprzet-estradowy-studyjny-i-dj-ski-122332"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-elektronika"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Sprzęt estradowy, studyjny i DJ-ski                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Elektronika </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/elektronika/rtv-i-agd-10"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-elektronika"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> RTV i AGD                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/rtv-i-agd/elektronika-67193"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Elektronika</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/rtv-i-agd/sluchawki-66887"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Słuchawki</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/rtv-i-agd/sprzet-audio-dla-domu-11"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Sprzęt audio dla domu</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/rtv-i-agd/sprzet-audio-przenosny-20134"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Sprzęt audio przenośny</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/rtv-i-agd/tv-i-video-717"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">TV i Video</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="categories-nav__item categories-nav__item--nest-level-0"
                                            data-categories-nav-item="" data-categories-nav-nest-level="0"><a
                                                    class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-0 btn-text-secondary"
                                                    data-categories-nav-item-back-link=""
                                                    data-categories-nav-nest-level="0"> Cofnij do: wszystkie
                                                kategorie </a>
                                            <a href="https://allegrolokalnie.pl/oferty/moda"
                                               class="categories-nav__item-link categories-nav__item-link--nest-level-0"
                                               data-testid="categories-nav-item-moda" aria-haspopup="true"
                                               aria-controls="categories-nav__megamenu--moda"
                                               data-categories-nav-item-link=""
                                               data-categories-nav-nest-level="0"> <span
                                                        class="categories-nav__item-icon categories-nav__item-icon--nest-level-0 category-icon is-category-moda"></span>
                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-0"> Moda           </span>
                                                <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-0">
                                                    Zobacz wszystkie oferty </small> </a>
                                            <div class="categories-nav__menu categories-nav__menu--nest-level-1 is-category-moda is-mini"
                                                 data-testid="categories-nav-megamenu-moda" tabindex="-1"
                                                 aria-hidden="true"
                                                 id="categories-nav__megamenu--moda" data-categories-nav-menu=""
                                                 data-categories-nav-nest-level="1">
                                                <div class="categories-nav__columns--nest-level-1">
                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Moda </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/odziez-obuwie-dodatki/odziez-damska-76033"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-moda"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Odzież damska                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Moda </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/odziez-obuwie-dodatki/odziez-meska-1455"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-moda"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Odzież męska                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Moda </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/dziecko/odziez-11764"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-moda"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Odzież dziecięca                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Moda </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/odziez-obuwie-dodatki/obuwie-1469"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-moda"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Obuwie                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Moda </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/odziez-obuwie-dodatki/galanteria-i-dodatki-1487"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-moda"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Galanteria i dodatki                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Moda </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/bizuteria-i-zegarki/bizuteria-damska-123422"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-moda"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Biżuteria                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Moda </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/bizuteria-i-zegarki/zegarki-19742"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-moda"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Zegarki                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Moda </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/przemysl/odziez-robocza-i-bhp-110233"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-moda"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Odzież robocza i BHP                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Moda </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-moda"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Odzież sportowa                 </span>
                                                                </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/bieganie/odziez-147265"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-moda"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Bieganie</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/militaria/odziez-253919"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-moda"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Militaria</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/rowery-i-akcesoria/odziez-110165"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-moda"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Rowerowa</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/silownia-i-fitness/odziez-19633"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-moda"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Siłownia i fitness</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/skating-slackline/odziez-obuwie-akcesoria-148337"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-moda"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Skating, slackline</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/sporty-zimowe/odziez-256724"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-moda"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Sporty zimowe</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/wedkarstwo/odziez-121728"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-moda"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Wędkarstwo</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="categories-nav__item categories-nav__item--nest-level-0"
                                            data-categories-nav-item="" data-categories-nav-nest-level="0"><a
                                                    class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-0 btn-text-secondary"
                                                    data-categories-nav-item-back-link=""
                                                    data-categories-nav-nest-level="0"> Cofnij do: wszystkie
                                                kategorie </a>
                                            <a href="https://allegrolokalnie.pl/oferty/dom-i-ogrod"
                                               class="categories-nav__item-link categories-nav__item-link--nest-level-0"
                                               data-testid="categories-nav-item-dom-i-ogrod" aria-haspopup="true"
                                               aria-controls="categories-nav__megamenu--dom-i-ogrod"
                                               data-categories-nav-item-link=""
                                               data-categories-nav-nest-level="0"> <span
                                                        class="categories-nav__item-icon categories-nav__item-icon--nest-level-0 category-icon is-category-dom-i-ogrod"></span>
                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-0"> Dom i Ogród           </span>
                                                <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-0">
                                                    Zobacz wszystkie oferty </small> </a>
                                            <div class="categories-nav__menu categories-nav__menu--nest-level-1 is-category-dom-i-ogrod"
                                                 data-testid="categories-nav-megamenu-dom-i-ogrod" tabindex="-1"
                                                 aria-hidden="true" id="categories-nav__megamenu--dom-i-ogrod"
                                                 data-categories-nav-menu="" data-categories-nav-nest-level="1">
                                                <div class="categories-nav__columns--nest-level-1">
                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Dom i
                                                                    Ogród </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/dom-i-ogrod/wyposazenie-123"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Wyposażenie                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/wyposazenie/dekoracje-i-ozdoby-9317"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Dekoracje i ozdoby</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/wyposazenie/ozdoby-swiateczne-i-okolicznosciowe-1591"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Ozdoby świąteczne i okolicznościowe</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/dziecko/pokoj-dzieciecy-17272"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Pokój dziecięcy</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/wyposazenie/posciel-i-koce-9017"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Pościel i koce</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/wyposazenie/przybory-kuchenne-5328"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Przybory kuchenne</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/wyposazenie/wystroj-okien-9016"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Wystrój okien</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/wyposazenie/zabawne-gadzety-121237"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Zabawne gadżety</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/wyposazenie/zastawa-stolowa-110879"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Zastawa stołowa</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/wyposazenie/zegary-541"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Zegary</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Dom i
                                                                    Ogród </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/dom-i-ogrod/meble-522"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Meble                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/meble/akcesoria-meblowe-68632"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Akcesoria meblowe</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/meble/kuchnia-1510"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Kuchnia</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/meble/salon-1515"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Salon</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/meble/sypialnia-568"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Sypialnia</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Dom i
                                                                    Ogród </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/dom-i-ogrod/ogrod-1532"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Ogród                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/ogrod/architektura-ogrodowa-77733"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Architektura ogrodowa</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/ogrod/doniczki-i-pojemniki-126187"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Doniczki i pojemniki</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/ogrod/narzedzia-ogrodnicze-1534"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Narzędzia ogrodnicze</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/ogrod/rosliny-776"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Rośliny</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Dom i
                                                                    Ogród </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/dom-i-ogrod/oswietlenie-5317"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Oświetlenie                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/oswietlenie/akcesoria-i-osprzet-oswietleniowy-5321"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Akcesoria i osprzęt oświetleniowy</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/oswietlenie/lampy-5318"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Lampy</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/oswietlenie/zrodla-swiatla-10774"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Źródła światła</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Dom i
                                                                    Ogród </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/dom-i-ogrod/narzedzia-1536"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Narzędzia                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Dom i
                                                                    Ogród </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/dom-i-ogrod/budownictwo-i-akcesoria-1520"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Budownictwo i Akcesoria                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Dom i
                                                                    Ogród </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/firma-i-uslugi/przemysl-16696"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Przemysł                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/przemysl/budownictwo-przemyslowe-261126"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Budownictwo</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/przemysl/maszyny-i-urzadzenia-121334"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Maszyny i urządzenia</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/przemysl/materialy-i-akcesoria-121333"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Materiały i akcesoria</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/przemysl/odziez-robocza-i-bhp-110233"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Odzież robocza i BHP</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Dom i
                                                                    Ogród </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/lokalny-ryneczek/produkty-spozywcze-73973"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Produkty spożywcze                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/produkty-spozywcze/dekoracje-cukiernicze-i-produkty-do-pieczenia-111072"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Dekoracje cukiernicze i produkty do pieczenia</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/produkty-spozywcze/kawa-74030"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Kawa</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/produkty-spozywcze/miod-i-produkty-pszczele-73976"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Miód i pyłek pszczeli</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/produkty-spozywcze/zdrowa-zywnosc-74062"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Zdrowa żywność</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Dom i
                                                                    Ogród </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/lokalny-ryneczek/utrzymanie-czystosci-253343"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Utrzymanie czystości                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="categories-nav__item categories-nav__item--nest-level-0"
                                            data-categories-nav-item="" data-categories-nav-nest-level="0"><a
                                                    class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-0 btn-text-secondary"
                                                    data-categories-nav-item-back-link=""
                                                    data-categories-nav-nest-level="0"> Cofnij do: wszystkie
                                                kategorie </a>
                                            <a href="https://allegrolokalnie.pl/oferty/motoryzacja"
                                               class="categories-nav__item-link categories-nav__item-link--nest-level-0"
                                               data-testid="categories-nav-item-samochody" aria-haspopup="true"
                                               aria-controls="categories-nav__megamenu--samochody"
                                               data-categories-nav-item-link=""
                                               data-categories-nav-nest-level="0"> <span
                                                        class="categories-nav__item-icon categories-nav__item-icon--nest-level-0 category-icon is-category-samochody"></span>
                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-0"> Samochody           </span>
                                                <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-0">
                                                    Zobacz wszystkie oferty </small> </a>
                                            <div class="categories-nav__menu categories-nav__menu--nest-level-1 is-category-samochody"
                                                 data-testid="categories-nav-megamenu-samochody" tabindex="-1"
                                                 aria-hidden="true" id="categories-nav__megamenu--samochody"
                                                 data-categories-nav-menu="" data-categories-nav-nest-level="1">
                                                <div class="categories-nav__columns--nest-level-1">
                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Samochody </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/motoryzacja/samochody-149"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-motoryzacja"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Samochody                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/samochody/osobowe-4029"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Osobowe</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/samochody/dostawcze-do-3-5-t-257753"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Dostawcze (do 3.5 t)</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/samochody/ciezarowe-pow-3-5-t-589"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Ciężarowe (pow. 3.5 t)</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/samochody/autobusy-14685"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Autobusy</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/samochody/zabytkowe-594"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Zabytkowe</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Samochody </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/motoryzacja/motocykle-i-quady-300685"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-motoryzacja"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Motocykle i quady                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Samochody </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/motoryzacja/maszyny-252942"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-motoryzacja"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Maszyny                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Samochody </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/motoryzacja/przyczepy-naczepy-18528"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-motoryzacja"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Przyczepy, naczepy                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Samochody </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/motoryzacja/inne-pojazdy-i-lodzie-4079"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-motoryzacja"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Inne pojazdy i łodzie                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Samochody </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/motoryzacja/wyposazenie-i-akcesoria-samochodowe-253498"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-motoryzacja"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Akcesoria samochodowe                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/wyposazenie-i-akcesoria-samochodowe/tuning-wizualny-253765"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Akcesoria tuningowe</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/wyposazenie-i-akcesoria-samochodowe/bagazniki-253538"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Bagażniki</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/wyposazenie-i-akcesoria-samochodowe/dywaniki-253563"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Dywaniki</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/wyposazenie-i-akcesoria-samochodowe/elektronika-samochodowa-257393"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Elektronika samochodowa</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/wyposazenie-i-akcesoria-samochodowe/emblematy-253569"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Emblematy</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/wyposazenie-i-akcesoria-samochodowe/gadzety-motoryzacyjne-253798"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Gadżety motoryzacyjne</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/wyposazenie-i-akcesoria-samochodowe/zarowki-257359"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Żarówki</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Samochody </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/motoryzacja/czesci-samochodowe-620"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-motoryzacja"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Części samochodowe                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/czesci-karoserii-4094"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Części karoserii</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/filtry-49236"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Filtry</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/oswietlenie-623"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Oświetlenie</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/pozostale-629"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Pozostałe</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/silniki-i-osprzet-50821"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Silniki i osprzęt</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/tuning-mechaniczny-8695"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Tuning mechaniczny</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/uklad-chlodzenia-silnika-18689"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Układ chłodzenia silnika</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/uklad-elektryczny-zaplon-4141"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Układ elektryczny, zapłon</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/uklad-hamulcowy-18834"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Układ hamulcowy</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/uklad-kierowniczy-250842"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Układ kierowniczy</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/uklad-klimatyzacji-49183"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Układ klimatyzacji</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/uklad-napedowy-50863"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Układ napędowy</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/uklad-paliwowy-18844"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Układ paliwowy</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/uklad-wentylacji-258677"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Układ wentylacji</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/uklad-wydechowy-18862"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Układ wydechowy</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/uklad-zawieszenia-8683"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Układ zawieszenia</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/wycieraczki-i-spryskiwacze-254179"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Wycieraczki i spryskiwacze</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/wyposazenie-wnetrza-622"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Wyposażenie wnętrza</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Samochody </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/motoryzacja/opony-i-felgi-99193"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-motoryzacja"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Opony i felgi                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/opony-i-felgi/osprzet-i-akcesoria-257624"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Akcesoria</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/opony-i-felgi/felgi-257708"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Felgi</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/opony-i-felgi/opony-257687"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Opony </span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Samochody </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/motoryzacja/czesci-i-wyposazenie-motocyklowe-156"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-motoryzacja"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Części i akcesoria motocyklowe                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/czesci-i-wyposazenie-motocyklowe/wyposazenie-i-akcesoria-motocyklowe-8721"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Akcesoria motocyklowe</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/czesci-i-wyposazenie-motocyklowe/czesci-motocyklowe-158"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Części motocyklowe</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/kaski-i-dodatki/kaski-256717"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Kaski </span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/czesci-i-wyposazenie-motocyklowe/odziez-159"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Odzież </span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Samochody </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/motoryzacja/narzedzia-i-sprzet-warsztatowy-18554"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-motoryzacja"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Narzędzia i sprzęt warsztatowy                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/narzedzia-i-sprzet-warsztatowy/diagnostyka-i-pomiary-28410"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Diagnostyka i pomiary</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/narzedzia-i-sprzet-warsztatowy/narzedzia-reczne-252622"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Narzędzia ręczne</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/narzedzia-i-sprzet-warsztatowy/wyposazenie-warsztatu-28392"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Wyposażenie warsztatu</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Samochody </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/rtv-i-agd/sprzet-car-audio-709"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-motoryzacja"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Sprzęt car audio                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Samochody </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/motoryzacja/chemia-18903"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-motoryzacja"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Chemia                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Samochody </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/motoryzacja/czesci-do-maszyn-i-innych-pojazdow-99022"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-motoryzacja"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Części do maszyn                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="categories-nav__item categories-nav__item--nest-level-0"
                                            data-categories-nav-item="" data-categories-nav-nest-level="0"><a
                                                    class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-0 btn-text-secondary"
                                                    data-categories-nav-item-back-link=""
                                                    data-categories-nav-nest-level="0"> Cofnij do: wszystkie
                                                kategorie </a>
                                            <a href="https://allegrolokalnie.pl/oferty/dziecko"
                                               class="categories-nav__item-link categories-nav__item-link--nest-level-0"
                                               data-testid="categories-nav-item-dziecko" aria-haspopup="true"
                                               aria-controls="categories-nav__megamenu--dziecko"
                                               data-categories-nav-item-link=""
                                               data-categories-nav-nest-level="0"> <span
                                                        class="categories-nav__item-icon categories-nav__item-icon--nest-level-0 category-icon is-category-dziecko"></span>
                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-0"> Dziecko           </span>
                                                <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-0">
                                                    Zobacz wszystkie oferty </small> </a>
                                            <div class="categories-nav__menu categories-nav__menu--nest-level-1 is-category-dziecko"
                                                 data-testid="categories-nav-megamenu-dziecko" tabindex="-1"
                                                 aria-hidden="true" id="categories-nav__megamenu--dziecko"
                                                 data-categories-nav-menu="" data-categories-nav-nest-level="1">
                                                <div class="categories-nav__columns--nest-level-1">
                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Dziecko </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/dziecko/odziez-11764"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dziecko"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Odzież dziecięca                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/odziez/bluzki-89508"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Bluzki</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/odziez/bluzy-89510"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Bluzy</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/odziez/kombinezony-89516"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Kombinezony</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/odziez/kurtki-plaszcze-89515"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Kurtki, płaszcze</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/odziez/odziez-niemowleca-259082"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Odzież niemowlęca</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/odziez/spodnie-89681"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Spodnie</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/odziez/sukienki-89521"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Sukienki</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/odziez/t-shirty-89528"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">T-shirty</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/odziez/zestawy-ubran-89531"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Zestawy ubrań </span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Dziecko </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/dziecko/zabawki-11818"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dziecko"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Zabawki                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/zabawki/dla-niemowlat-11820"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Dla niemowląt</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/zabawki/edukacyjne-11821"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Edukacyjne</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/zabawki/figurki-11822"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Figurki</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/zabawki/klocki-11823"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Klocki</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/zabawki/lalki-i-akcesoria-11825"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Lalki i akcesoria</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/zabawki/maskotki-11837"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Maskotki</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/zabawki/samochody-i-pojazdy-86352"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Samochody i pojazdy</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Dziecko </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/dziecko/pokoj-dzieciecy-17272"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dziecko"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Pokój dziecięcy                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/wyposazenie/dekoracje-i-ozdoby-17278"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Dekoracje i ozdoby</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/meble/lozka-i-kojce-98744"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Łóżka i kojce</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/pokoj-dzieciecy/meble-17273"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Meble</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/wyposazenie/posciel-i-kocyki-17280"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Pościel i kocyki</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Dziecko </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/dziecko/artykuly-szkolne-50673"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dziecko"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Artykuły szkolne                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/artykuly-szkolne/artykuly-papiernicze-50675"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Artykuły papiernicze</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/artykuly-szkolne/artykuly-plastyczne-50676"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Artykuły plastyczne</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/artykuly-szkolne/piorniki-84735"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Piórniki</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/artykuly-szkolne/plecaki-szkolne-50678"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Plecaki szkolne</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Dziecko </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/dziecko/wozki-82593"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dziecko"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Wózki                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/wozki/spacerowe-82611"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Spacerowe</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/wozki/wielofunkcyjne-82610"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Wielofunkcyjne</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Dziecko </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/dziecko/akcesoria-dla-mamy-i-dziecka-82595"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dziecko"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Akcesoria dla mamy i dziecka                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Dziecko </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/ksiazki-i-komiksy/ksiazki-dla-dzieci-66781"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dziecko"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Książki dla dzieci                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Dziecko </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/dziecko/zabawki-ogrodowe-86273"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dziecko"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Zabawki ogrodowe                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="categories-nav__item categories-nav__item--nest-level-0"
                                            data-categories-nav-item="" data-categories-nav-nest-level="0"><a
                                                    class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-0 btn-text-secondary"
                                                    data-categories-nav-item-back-link=""
                                                    data-categories-nav-nest-level="0"> Cofnij do: wszystkie
                                                kategorie </a>
                                            <a href="https://allegrolokalnie.pl/oferty/zdrowie"
                                               class="categories-nav__item-link categories-nav__item-link--nest-level-0"
                                               data-testid="categories-nav-item-zdrowie" aria-haspopup="true"
                                               aria-controls="categories-nav__megamenu--zdrowie"
                                               data-categories-nav-item-link=""
                                               data-categories-nav-nest-level="0"> <span
                                                        class="categories-nav__item-icon categories-nav__item-icon--nest-level-0 category-icon is-category-zdrowie"></span>
                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-0"> Zdrowie           </span>
                                                <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-0">
                                                    Zobacz wszystkie oferty </small> </a>
                                            <div class="categories-nav__menu categories-nav__menu--nest-level-1 is-category-zdrowie is-mini"
                                                 data-testid="categories-nav-megamenu-zdrowie" tabindex="-1"
                                                 aria-hidden="true" id="categories-nav__megamenu--zdrowie"
                                                 data-categories-nav-menu="" data-categories-nav-nest-level="1">
                                                <div class="categories-nav__columns--nest-level-1">
                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Zdrowie </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/zdrowie/higiena-jamy-ustnej-257760"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-zdrowie"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Higiena jamy ustnej                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Zdrowie </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/zdrowie/medycyna-naturalna-258258"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-zdrowie"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Medycyna naturalna                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Zdrowie </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/zdrowie/erotyka-63757"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-zdrowie"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Erotyka                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Zdrowie </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/zdrowie/suplementy-diety-122564"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-zdrowie"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Suplementy diety                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Zdrowie </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/zdrowie/urzadzenia-medyczne-258779"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-zdrowie"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Urządzenia medyczne                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Zdrowie </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/lokalny-ryneczek/produkty-spozywcze-73973"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-zdrowie"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Produkty spożywcze                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="categories-nav__item categories-nav__item--nest-level-0"
                                            data-categories-nav-item="" data-categories-nav-nest-level="0"><a
                                                    class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-0 btn-text-secondary"
                                                    data-categories-nav-item-back-link=""
                                                    data-categories-nav-nest-level="0"> Cofnij do: wszystkie
                                                kategorie </a>
                                            <a href="https://allegrolokalnie.pl/oferty/uroda"
                                               class="categories-nav__item-link categories-nav__item-link--nest-level-0"
                                               data-testid="categories-nav-item-uroda" aria-haspopup="true"
                                               aria-controls="categories-nav__megamenu--uroda"
                                               data-categories-nav-item-link=""
                                               data-categories-nav-nest-level="0"> <span
                                                        class="categories-nav__item-icon categories-nav__item-icon--nest-level-0 category-icon is-category-uroda"></span>
                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-0"> Uroda           </span>
                                                <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-0">
                                                    Zobacz wszystkie oferty </small> </a>
                                            <div class="categories-nav__menu categories-nav__menu--nest-level-1 is-category-uroda is-mini"
                                                 data-testid="categories-nav-megamenu-uroda" tabindex="-1"
                                                 aria-hidden="true" id="categories-nav__megamenu--uroda"
                                                 data-categories-nav-menu="" data-categories-nav-nest-level="1">
                                                <div class="categories-nav__columns--nest-level-1">
                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Uroda </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/uroda/pielegnacja-1430"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-uroda"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Pielęgnacja                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/pielegnacja/cialo-1433"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-uroda"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Ciało</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/pielegnacja/golenie-i-depilacja-1431"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-uroda"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Golenie i depilacja</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/pielegnacja/twarz-1435"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-uroda"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Twarz</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/pielegnacja/wlosy-1436"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-uroda"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Włosy</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Uroda </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/uroda/makijaz-45657"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-uroda"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Makijaż                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Uroda </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/uroda/perfumy-i-wody-135"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-uroda"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Perfumy i wody                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/perfumy-i-wody/zapachy-dla-kobiet-17748"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-uroda"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Zapachy dla kobiet</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/perfumy-i-wody/zapachy-dla-mezczyzn-17749"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-uroda"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Zapachy dla mężczyzn</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="categories-nav__item categories-nav__item--nest-level-0"
                                            data-categories-nav-item="" data-categories-nav-nest-level="0"><a
                                                    class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-0 btn-text-secondary"
                                                    data-categories-nav-item-back-link=""
                                                    data-categories-nav-nest-level="0"> Cofnij do: wszystkie
                                                kategorie </a>
                                            <a href="https://allegrolokalnie.pl/oferty/kultura-i-rozrywka"
                                               class="categories-nav__item-link categories-nav__item-link--nest-level-0"
                                               data-testid="categories-nav-item-kultura-i-rozrywka" aria-haspopup="true"
                                               aria-controls="categories-nav__megamenu--kultura-i-rozrywka"
                                               data-categories-nav-item-link=""
                                               data-categories-nav-nest-level="0"> <span
                                                        class="categories-nav__item-icon categories-nav__item-icon--nest-level-0 category-icon is-category-kultura-i-rozrywka"></span>
                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-0"> Kultura i Rozrywka           </span>
                                                <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-0">
                                                    Zobacz wszystkie oferty </small> </a>
                                            <div class="categories-nav__menu categories-nav__menu--nest-level-1 is-category-kultura-i-rozrywka is-medium"
                                                 data-testid="categories-nav-megamenu-kultura-i-rozrywka" tabindex="-1"
                                                 aria-hidden="true" id="categories-nav__megamenu--kultura-i-rozrywka"
                                                 data-categories-nav-menu="" data-categories-nav-nest-level="1">
                                                <div class="categories-nav__columns--nest-level-1">
                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Kultura i Rozrywka </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/kultura-i-rozrywka/gry-9"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Gry                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/gry/gry-na-konsole-82326"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Gry na konsolę</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/gry/gry-online-mmo-45715"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Gry online (MMO)</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/gry/komputerowe-pc-45713"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Komputerowe PC</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/gry/towarzyskie-5916"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Towarzyskie</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Kultura i Rozrywka </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/kultura-i-rozrywka/ksiazki-i-komiksy-7"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Książki i komiksy                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/ksiazki-i-komiksy/kalendarze-gadzety-i-akcesoria-28496"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Kalendarze, gadżety i akcesoria</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/ksiazki-i-komiksy/komiksy-79413"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Komiksy</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/ksiazki-i-komiksy/ksiazki-dla-dzieci-66781"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Książki dla dzieci</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/ksiazki-i-komiksy/ksiazki-do-nauki-jezyka-obcego-66794"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Książki do nauki języka obcego</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/ksiazki-i-komiksy/ksiazki-naukowe-i-popularnonaukowe-79455"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Książki naukowe i popularnonaukowe</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/ksiazki-i-komiksy/kuchnia-potrawy-79205"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Kuchnia, potrawy</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/ksiazki-i-komiksy/literatura-piekna-79153"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Literatura piękna</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/ksiazki-i-komiksy/podreczniki-do-szkol-podst-i-srednich-66820"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Podręczniki do szkół podstawowych i średnich</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/ksiazki-i-komiksy/poradniki-i-albumy-79193"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Poradniki i albumy</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Kultura i Rozrywka </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/kultura-i-rozrywka/bilety-300881"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Bilety                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Kultura i Rozrywka </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/muzyka/plyty-kompaktowe-175"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Płyty kompaktowe                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Kultura i Rozrywka </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/muzyka/plyty-winylowe-279"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Płyty winylowe                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Kultura i Rozrywka </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/kultura-i-rozrywka/instrumenty-122640"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Instrumenty                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/instrumenty/gitary-i-akcesoria-122641"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Gitary i akcesoria</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/instrumenty/instrumenty-dete-122761"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Instrumenty dęte</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/instrumenty/instrumenty-klawiszowe-i-midi-122790"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Instrumenty klawiszowe i MIDI</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/instrumenty/instrumenty-perkusyjne-122813"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Instrumenty perkusyjne</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Kultura i Rozrywka </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/kultura-i-rozrywka/filmy-20585"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Filmy                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/filmy/akcesoria-100126"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Gadżety, akcesoria</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/filmy/plyty-blu-ray-89054"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Płyty Blu-ray</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/filmy/plyty-dvd-100075"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Płyty DVD</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="categories-nav__item categories-nav__item--nest-level-0"
                                            data-categories-nav-item="" data-categories-nav-nest-level="0"><a
                                                    class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-0 btn-text-secondary"
                                                    data-categories-nav-item-back-link=""
                                                    data-categories-nav-nest-level="0"> Cofnij do: wszystkie
                                                kategorie </a>
                                            <a href="https://allegrolokalnie.pl/oferty/sport-i-turystyka"
                                               class="categories-nav__item-link categories-nav__item-link--nest-level-0"
                                               data-testid="categories-nav-item-sport-i-turystyka" aria-haspopup="true"
                                               aria-controls="categories-nav__megamenu--sport-i-turystyka"
                                               data-categories-nav-item-link=""
                                               data-categories-nav-nest-level="0"> <span
                                                        class="categories-nav__item-icon categories-nav__item-icon--nest-level-0 category-icon is-category-sport-i-turystyka"></span>
                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-0"> Sport i Turystyka           </span>
                                                <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-0">
                                                    Zobacz wszystkie oferty </small> </a>
                                            <div class="categories-nav__menu categories-nav__menu--nest-level-1 is-category-sport-i-turystyka"
                                                 data-testid="categories-nav-megamenu-sport-i-turystyka" tabindex="-1"
                                                 aria-hidden="true" id="categories-nav__megamenu--sport-i-turystyka"
                                                 data-categories-nav-menu="" data-categories-nav-nest-level="1">
                                                <div class="categories-nav__columns--nest-level-1">
                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Sport
                                                                    i Turystyka </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/sport-i-turystyka/rowery-i-akcesoria-16414"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Rowery i akcesoria                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/rowery-i-akcesoria/akcesoria-16415"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Akcesoria</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/rowery-i-akcesoria/czesci-16416"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Części</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/rowery-i-akcesoria/odziez-110165"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Odzież</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/rowery-i-akcesoria/rowery-16420"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Rowery</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Sport
                                                                    i Turystyka </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/sport-i-turystyka/turystyka-3922"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Turystyka                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/turystyka/kuchnia-turystyczna-258147"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Kuchnia turystyczna</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/turystyka/noze-scyzoryki-i-multitoole-258150"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Noże, scyzoryki i multitoole</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/turystyka/obuwie-112282"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Obuwie</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/turystyka/odziez-112286"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Odzież</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/turystyka/plecaki-102858"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Plecaki</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Sport
                                                                    i Turystyka </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/sport-i-turystyka/wedkarstwo-121722"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Wędkarstwo                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Sport
                                                                    i Turystyka </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/sport-i-turystyka/silownia-i-fitness-19626"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Siłownia i fitness                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/silownia-i-fitness/trening-silowy-110145"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Siłownia - sprzęt i akcesoria</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/silownia-i-fitness/trening-fitness-110132"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Sprzęt do ćwiczeń fitness</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/silownia-i-fitness/suplementy-i-odzywki-19655"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Suplementy i odżywki</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Sport
                                                                    i Turystyka </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Odzież sportowa                 </span>
                                                                </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/bieganie/odziez-147265"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Bieganie</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/militaria/odziez-253919"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Militaria</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/rowery-i-akcesoria/odziez-110165"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Rowerowa</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/silownia-i-fitness/odziez-19633"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Siłownia i fitness</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/skating-slackline/odziez-obuwie-akcesoria-148337"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Skating, slackline</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/sporty-zimowe/odziez-256724"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Sporty zimowe</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/wedkarstwo/odziez-121728"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Wędkarstwo</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Sport
                                                                    i Turystyka </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/sporty-druzynowe/pilka-nozna-13372"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Piłka nożna                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Sport
                                                                    i Turystyka </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/sport-i-turystyka/sporty-walki-13522"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Sporty walki                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Sport
                                                                    i Turystyka </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/sport-i-turystyka/sporty-wodne-13535"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Sporty wodne                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Sport
                                                                    i Turystyka </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/sport-i-turystyka/sporty-zimowe-13599"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Sporty zimowe                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Sport
                                                                    i Turystyka </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/sport-i-turystyka/skating-slackline-148302"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Skating, slackline                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/skating-slackline/hulajnogi-260643"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Hulajnogi</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/skating-slackline/hulajnogi-elektryczne-260628"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Hulajnogi elektryczne</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/skating-slackline/rolki-260629"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Rolki</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Sport
                                                                    i Turystyka </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/sporty-towarzyskie-i-rekreacja/jezdziectwo-112302"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Jeździectwo                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Sport
                                                                    i Turystyka </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/sport-i-turystyka/bieganie-147262"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Bieganie                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Sport
                                                                    i Turystyka </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/sport-i-turystyka/militaria-253062"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Militaria                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/militaria/asg-253882"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">ASG</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/militaria/myslistwo-253944"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Myślistwo</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/militaria/odziez-253919"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Odzież</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/militaria/wiatrowki-253883"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Wiatrówki</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Sport
                                                                    i Turystyka </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/sport-i-turystyka/elektronika-sportowa-252782"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Elektronika sportowa                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="categories-nav__item categories-nav__item--nest-level-0"
                                            data-categories-nav-item="" data-categories-nav-nest-level="0"><a
                                                    class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-0 btn-text-secondary"
                                                    data-categories-nav-item-back-link=""
                                                    data-categories-nav-nest-level="0"> Cofnij do: wszystkie
                                                kategorie </a>
                                            <a href="https://allegrolokalnie.pl/oferty/kolekcje-i-sztuka"
                                               class="categories-nav__item-link categories-nav__item-link--nest-level-0"
                                               data-testid="categories-nav-item-kolekcje-i-sztuka" aria-haspopup="true"
                                               aria-controls="categories-nav__megamenu--kolekcje-i-sztuka"
                                               data-categories-nav-item-link=""
                                               data-categories-nav-nest-level="0"> <span
                                                        class="categories-nav__item-icon categories-nav__item-icon--nest-level-0 category-icon is-category-kolekcje-i-sztuka"></span>
                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-0"> Kolekcje i Sztuka           </span>
                                                <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-0">
                                                    Zobacz wszystkie oferty </small> </a>
                                            <div class="categories-nav__menu categories-nav__menu--nest-level-1 is-category-kolekcje-i-sztuka is-medium"
                                                 data-testid="categories-nav-megamenu-kolekcje-i-sztuka" tabindex="-1"
                                                 aria-hidden="true" id="categories-nav__megamenu--kolekcje-i-sztuka"
                                                 data-categories-nav-menu="" data-categories-nav-nest-level="1">
                                                <div class="categories-nav__columns--nest-level-1">
                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Kolekcje i Sztuka </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/kolekcje-i-sztuka/antyki-i-sztuka-26013"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Antyki i Sztuka                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/antyki-i-sztuka/antykwariat-26098"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Antykwariat</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/antyki-i-sztuka/malarstwo-26271"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Malarstwo</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/antyki-i-sztuka/meble-26227"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Meble</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/antyki-i-sztuka/porcelana-26163"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Porcelana</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Kolekcje i Sztuka </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/kolekcje-i-sztuka/kolekcje-6"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Kolekcje                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/kolekcje/birofilistyka-953"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Birofilistyka</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/kolekcje/filatelistyka-76"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Filatelistyka</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/kolekcje/militaria-691"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Militaria</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/kolekcje/modelarstwo-1061"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Modelarstwo</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/kolekcje/numizmatyka-85"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Numizmatyka</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/kolekcje/pamiatki-prl-u-47936"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Pamiątki PRL-u</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/kolekcje/pieniadz-papierowy-380"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Pieniądz papierowy</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/kolekcje/pocztowki-10234"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Pocztówki</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/kolekcje/trafika-47937"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Trafika</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Kolekcje i Sztuka </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/kolekcje-i-sztuka/rekodzielo-76593"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Rękodzieło                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="categories-nav__item categories-nav__item--nest-level-0"
                                            data-categories-nav-item="" data-categories-nav-nest-level="0"><a
                                                    class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-0 btn-text-secondary"
                                                    data-categories-nav-item-back-link=""
                                                    data-categories-nav-nest-level="0"> Cofnij do: wszystkie
                                                kategorie </a>
                                            <a href="https://allegrolokalnie.pl/oferty/firma-i-uslugi/zywe-zwierzeta-1530"
                                               class="categories-nav__item-link categories-nav__item-link--nest-level-0"
                                               data-testid="categories-nav-item-zwierzeta" aria-haspopup="true"
                                               aria-controls="categories-nav__megamenu--zwierzeta"
                                               data-categories-nav-item-link=""
                                               data-categories-nav-nest-level="0"> <span
                                                        class="categories-nav__item-icon categories-nav__item-icon--nest-level-0 category-icon is-category-zwierzeta"></span>
                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-0"> Zwierzęta           </span>
                                                <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-0">
                                                    Zobacz wszystkie oferty </small> </a>
                                            <div class="categories-nav__menu categories-nav__menu--nest-level-1 is-category-zwierzeta is-mini"
                                                 data-testid="categories-nav-megamenu-zwierzeta" tabindex="-1"
                                                 aria-hidden="true" id="categories-nav__megamenu--zwierzeta"
                                                 data-categories-nav-menu="" data-categories-nav-nest-level="1">
                                                <div class="categories-nav__columns--nest-level-1">
                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Zwierzęta </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/lokalny-ryneczek/artykuly-dla-zwierzat-1528"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-zwierzeta"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Artykuły dla zwierząt                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a>
                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">
                                                                    <ul class="categories-nav__list">
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/artykuly-dla-zwierzat/akwarystyka-1118"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-zwierzeta"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Akwarystyka</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/artykuly-dla-zwierzat/dla-golebi-90013"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-zwierzeta"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Dla gołębi</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/artykuly-dla-zwierzat/dla-kotow-90015"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-zwierzeta"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Dla kotów</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/artykuly-dla-zwierzat/dla-psow-90014"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-zwierzeta"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Dla psów</span>
                                                                            </a></li>
                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2"
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2"><a
                                                                                    class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                                    href="https://allegrolokalnie.pl/oferty/artykuly-dla-zwierzat/terrarystyka-10768"
                                                                                    data-categories-nav-item-link=""
                                                                                    data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-zwierzeta"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Terrarystyka</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1"><a
                                                                        class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                        data-categories-nav-item-back-link=""
                                                                        data-categories-nav-nest-level="1"> Cofnij do:
                                                                    Zwierzęta </a> <a
                                                                        class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                        href="https://allegrolokalnie.pl/oferty/firma-i-uslugi/zywe-zwierzeta-1530"
                                                                        data-categories-nav-item-link=""
                                                                        data-categories-nav-nest-level="1"> <span
                                                                            class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-zwierzeta"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1"> Zwierzęta żywe                 </span>
                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty </small> </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </button>
                <div class="masthead__branding">
                    <div class="masthead__logotype"><a href="https://allegrolokalnie.pl/"> <img
                                    src="{{$fake->logo()}}" alt="Allegro Lokalnie"> </a></div>
                </div>
                <div class="masthead__search">
                    <div class="search-form__container"
                         data-search-form="{&quot;categories&quot;:null,&quot;city&quot;:null,&quot;enableSuggestions&quot;:true,&quot;phrase&quot;:null}">
                        <form action="/oferty/" method="get">
                            <div class="search-form">
                                <div class="search-form__phrase"><label for="search-phrase" class="sr-only">czego
                                        szukasz?</label>
                                    <div role="combobox" aria-haspopup="listbox" aria-owns="react-autowhatever-1"
                                         aria-expanded="false" class="react-autosuggest__container"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="react-autowhatever-1"
                                                                                                           class="search-form__phrase__input"
                                                                                                           id="suggests-search"
                                                                                                           name="phrase"
                                                                                                           placeholder="czego szukasz?"
                                                                                                           data-testid="header-search__input"
                                                                                                           value="">
                                        <div id="react-autowhatever-1" role="listbox"
                                             class="react-autosuggest__suggestions-container"></div>
                                    </div>
                                </div>
                                <div class="search-form__city"><label for="search-location"
                                                                      class="sr-only">Miasto</label>
                                    <div role="combobox" aria-haspopup="listbox" aria-owns="react-autowhatever-1"
                                         aria-expanded="false" class="react-autosuggest__container"><input type="search"
                                                                                                           autocomplete="off"
                                                                                                           aria-autocomplete="list"
                                                                                                           aria-controls="react-autowhatever-1"
                                                                                                           class="search-form__location hidden--mobile"
                                                                                                           id="search-location"
                                                                                                           placeholder="cała Polska"
                                                                                                           required=""
                                                                                                           data-testid="header-city_input"
                                                                                                           value="">
                                        <div id="react-autowhatever-1" role="listbox"
                                             class="react-autosuggest__suggestions-container"></div>
                                    </div>
                                </div>
                                <button type="submit" class="search-form__submit" aria-label="Szukaj"
                                        data-testid="header-search-submit__button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                         class="icon--search">
                                        <path fill="#FFF" fill-rule="evenodd"
                                              d="M12.7 11.23a6.777 6.777 0 0 0 1.4-4.174C14.1 3.18 11 0 7.1 0S0 3.18 0 7.056s3.2 7.056 7.1 7.056c1.6 0 3.1-.497 4.2-1.392l3 2.982c.2.199.5.298.7.298.2 0 .5-.1.7-.298.4-.398.4-.994 0-1.391l-3-3.081zm-5.6.795c-2.8 0-5.1-2.186-5.1-4.97 0-2.782 2.3-5.067 5.1-5.067s5.1 2.285 5.1 5.068c0 2.783-2.3 4.969-5.1 4.969z"></path>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <nav class="masthead__navigation"><span class="sr-only">Nawigacja</span>
                    <div data-phx-session="SFMyNTY.g2gDaAJhBHQAAAAHZAACaWRtAAAAFHBoeC1GcWxZLTM2dFg0d1NIQ0tCZAAKcGFyZW50X3BpZGQAA25pbGQACHJvb3RfcGlkZAADbmlsZAAJcm9vdF92aWV3ZAAnRWxpeGlyLlVJLkNlbGxzLk1hc3RoZWFkLkZvbGxvd2luZ0JhZGdlZAAGcm91dGVyZAADbmlsZAAHc2Vzc2lvbnQAAAADbQAAAAVjb3VudGEAbQAAAAN1cmxtAAAAGS9rb250by9vZmVydHkvb2JzZXJ3b3dhbmVtAAAAB3VzZXJfaWRkAANuaWxkAAR2aWV3ZAAnRWxpeGlyLlVJLkNlbGxzLk1hc3RoZWFkLkZvbGxvd2luZ0JhZGdlbgYAOyl2MnwBYgABUYA.PWe3nMIGlkvyOoFQFNXLfwxT3-5-cuZpQJJHlYcXjDQ"
                         data-phx-static="SFMyNTY.g2gDaAJhBHQAAAADZAAKYXNzaWduX25ld2pkAAVmbGFzaHQAAAAAZAACaWRtAAAAFHBoeC1GcWxZLTM2dFg0d1NIQ0tCbgYAOyl2MnwBYgABUYA.aTH4PtxHF_ThdWRh3b2KVznHmj-mllxSn9jmJfiWB-Q"
                         data-phx-view="Cells.Masthead.FollowingBadge" id="phx-FqlY-36tX4wSHCKB">
                        <div class="masthead__icon"><a href="https://allegrolokalnie.pl/konto/oferty/obserwowane"
                                                       class="masthead__icon__link" rel="nofollow"
                                                       aria-label="Navigation">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="#C3C3C3" fill-rule="evenodd"
                                          d="M12.777 1.484l3.24 6.588 7.241 1.059a.872.872 0 0 1 .48 1.483l-5.241 5.124 1.237 7.243a.872.872 0 0 1-.345.85.863.863 0 0 1-.912.067l-6.476-3.415-6.478 3.418a.864.864 0 0 1-.912-.068.873.873 0 0 1-.345-.85l1.237-7.239L.262 10.62a.872.872 0 0 1 .48-1.483l7.242-1.064 3.239-6.588a.867.867 0 0 1 1.554 0z"></path>
                                </svg>
                            </a></div>
                    </div>
                    <div class="masthead__icon"><a href="https://allegrolokalnie.pl/wiadomosci" rel="nofollow"
                                                   class="masthead__icon__link" aria-label="Navigation">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="#C3C3C3" fill-rule="evenodd"
                                      d="M21.965 9.575C23.277 10.822 24 12.373 24 14c0 1.612-.707 3.16-2 4.403v5.215l-5.448-2.723c-3.007.409-5.933-.381-7.946-1.967.463.046.929.072 1.394.072 6.384 0 11.604-4.179 11.965-9.425zM10 1c5.523 0 10 3.582 10 8s-4.477 8-10 8c-1.108 0-2.171-.15-3.167-.416L2 19v-5.215C.75 12.45 0 10.797 0 9c0-4.418 4.477-8 10-8z"></path>
                            </svg>
                        </a></div>
                    <div data-testid="header-menu__dropdown" class="masthead__main-nav dropdown-menu"
                         data-dropdown-menu=""
                         data-dropdown-root-active-class="with-page-header-dropdown-overlay">
                        <button type="button" aria-label="Toggle Navigation" class="masthead__main-nav__toggler"
                                data-dropdown-toggler="" aria-controls="masthead-menu"><span> <svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">     <path
                                            fill="#C3C3C3" fill-rule="evenodd"
                                            d="M21.521 18.322l-6.248-1.46v-2.105c1.955-1.36 3.272-3.788 3.272-6.052V5.128c0-1.683-1.466-3.06-3.273-3.06h-.408L14.005.464C13.798.074 13.3-.1 12.881.057L7.733 1.981c-1.258.471-2.278 1.88-2.278 3.148v3.576c0 2.264 1.317 4.691 3.272 6.052v2.105l-6.248 1.46C1.022 18.663 0 19.887 0 21.29V24h24v-2.71c0-1.403-1.022-2.627-2.479-2.968z"></path> </svg>              </span>
                            <span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">     <path
                                            fill="none" fill-rule="evenodd" stroke="#767676" stroke-linecap="round"
                                            stroke-linejoin="round" d="M2 5l6 6 6-6"></path> </svg>            </span>
                        </button>
                        <div class="dropdown-menu__dropdown" id="masthead-menu">
                            <ul data-dropdown-nav="">
                                <li><a href="https://allegrolokalnie.pl/oferty/wystaw" rel="nofollow"><b>Wystaw
                                            przedmiot</b></a></li>
                                <li><a data-testid="header-menu__login" rel="nofollow"
                                       href="https://allegrolokalnie.pl/auth/allegro">Zaloguj kontem Allegro</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="hidden--mobile masthead__cta"><a href="https://allegrolokalnie.pl/oferty/wystaw"
                                                             class="btn btn-primary" data-cy="list_offer"
                                                             rel="nofollow">Wystaw</a>
                </div>
            </div>
        </header>
        <div data-offer-action-box="{&quot;biddersCount&quot;:0,&quot;bidsCount&quot;:0,&quot;condition&quot;:&quot;Bardzo dobry&quot;,&quot;endingAt&quot;:&quot;2021-10-29T16:44:39.706073Z&quot;,&quot;isAvailable&quot;:true,&quot;isCurrentUserFollowing&quot;:false,&quot;isCurrentUserTheSeller&quot;:false,&quot;isMoto&quot;:null,&quot;offerBadges&quot;:[],&quot;offerId&quot;:&quot;4b6126f8-b061-4c1c-9f4e-112a961a7966&quot;,&quot;offerType&quot;:&quot;buy_now&quot;,&quot;priceCents&quot;:1200,&quot;priceNegotiable&quot;:false,&quot;prices&quot;:{&quot;initial_price_cents&quot;:1200,&quot;offer_id&quot;:&quot;4b6126f8-b061-4c1c-9f4e-112a961a7966&quot;,&quot;price_cents&quot;:1200,&quot;price_reduction_percentage&quot;:0.0,&quot;reduced_price?&quot;:false},&quot;quantityAvailable&quot;:1,&quot;sellerBadges&quot;:[],&quot;sellerName&quot;:&quot;terry2009&quot;,&quot;title&quot;:&quot;Spódnica R. 38 Jasnoniebieski NOWY BEZ  METKI&quot;}">
            <div class="Toastify"></div>
        </div>
        <main class="l-container offer-page__l-container"
              data-offer-analytics="{&quot;categories&quot;:[&quot;Moda&quot;,&quot;Odzież, Obuwie, Dodatki&quot;,&quot;Odzież damska&quot;,&quot;Spódnice i spódniczki&quot;],&quot;isSellerInfluencer&quot;:false,&quot;is_moto&quot;:null,&quot;offerBadges&quot;:[],&quot;offerId&quot;:&quot;4b6126f8-b061-4c1c-9f4e-112a961a7966&quot;,&quot;offer_type&quot;:&quot;buy_now&quot;,&quot;prices&quot;:{&quot;initial_price_cents&quot;:1200,&quot;offer_id&quot;:&quot;4b6126f8-b061-4c1c-9f4e-112a961a7966&quot;,&quot;price_cents&quot;:1200,&quot;price_reduction_percentage&quot;:0.0,&quot;reduced_price?&quot;:false},&quot;root_category&quot;:&quot;Moda&quot;,&quot;sellerBadges&quot;:[]}">
            <div class="offer-container offer-page__container layout--right-sidebar">
                <div class="offer-page__cart-container hidden--desktop"></div>
                <div class="offer-page__photos">
                    <div class="page-header is-transparent hidden--desktop">
                        <div class="page-header__primary hidden--app-view">
                            <button data-offer-mobile-back-button="{&quot;category_url&quot;:&quot;/oferty/odziez-damska/spodnice-i-spodniczki-76084&quot;}"
                                    class="page-header__action" aria-label="Cofnij">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     class="icon--back">
                                    <g fill="none" fill-rule="evenodd" stroke="#222" stroke-linecap="round"
                                       stroke-linejoin="round" stroke-width="2">
                                        <path d="M22 12H2M9 19l-7-7 7-7"></path>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div data-photo-carousel="{ &quot;items&quot;: [{&quot;normal&quot;:&quot;https://a.allegroimg.com/original/1e7e8c/4d3878454e9eaf064e4c37b06467&quot;,&quot;original&quot;:&quot;https://a.allegroimg.com/original/1e74fb/475c94d3438caac565ce27a19ae0&quot;,&quot;size128x96&quot;:&quot;https://a.allegroimg.com/s128x96b/1e7e8c/4d3878454e9eaf064e4c37b06467&quot;,&quot;size192x144&quot;:&quot;https://a.allegroimg.com/s192x144b/1e7e8c/4d3878454e9eaf064e4c37b06467&quot;,&quot;size400x300&quot;:&quot;https://a.allegroimg.com/s400x300b/1e7e8c/4d3878454e9eaf064e4c37b06467&quot;,&quot;size64x48&quot;:&quot;https://a.allegroimg.com/s64x48b/1e7e8c/4d3878454e9eaf064e4c37b06467&quot;,&quot;thumb&quot;:&quot;https://a.allegroimg.com/s80x80b/1e7e8c/4d3878454e9eaf064e4c37b06467&quot;,&quot;thumb150&quot;:&quot;https://a.allegroimg.com/s150x150b/1e7e8c/4d3878454e9eaf064e4c37b06467&quot;,&quot;thumb180&quot;:&quot;https://a.allegroimg.com/s180x180b/1e7e8c/4d3878454e9eaf064e4c37b06467&quot;,&quot;thumb320&quot;:&quot;https://a.allegroimg.com/s320x320b/1e7e8c/4d3878454e9eaf064e4c37b06467&quot;,&quot;thumb360&quot;:&quot;https://a.allegroimg.com/s360x360b/1e7e8c/4d3878454e9eaf064e4c37b06467&quot;},{&quot;normal&quot;:&quot;https://a.allegroimg.com/original/1e1ba0/fd6f1cc544cd819867403d3bfef5&quot;,&quot;original&quot;:&quot;https://a.allegroimg.com/original/1ee575/3b91a27d47f18b1b8fdcf1ba1fd7&quot;,&quot;size128x96&quot;:&quot;https://a.allegroimg.com/s128x96b/1e1ba0/fd6f1cc544cd819867403d3bfef5&quot;,&quot;size192x144&quot;:&quot;https://a.allegroimg.com/s192x144b/1e1ba0/fd6f1cc544cd819867403d3bfef5&quot;,&quot;size400x300&quot;:&quot;https://a.allegroimg.com/s400x300b/1e1ba0/fd6f1cc544cd819867403d3bfef5&quot;,&quot;size64x48&quot;:&quot;https://a.allegroimg.com/s64x48b/1e1ba0/fd6f1cc544cd819867403d3bfef5&quot;,&quot;thumb&quot;:&quot;https://a.allegroimg.com/s80x80b/1e1ba0/fd6f1cc544cd819867403d3bfef5&quot;,&quot;thumb150&quot;:&quot;https://a.allegroimg.com/s150x150b/1e1ba0/fd6f1cc544cd819867403d3bfef5&quot;,&quot;thumb180&quot;:&quot;https://a.allegroimg.com/s180x180b/1e1ba0/fd6f1cc544cd819867403d3bfef5&quot;,&quot;thumb320&quot;:&quot;https://a.allegroimg.com/s320x320b/1e1ba0/fd6f1cc544cd819867403d3bfef5&quot;,&quot;thumb360&quot;:&quot;https://a.allegroimg.com/s360x360b/1e1ba0/fd6f1cc544cd819867403d3bfef5&quot;}] }">
                        <div class="photo-carousel photo-carousel--regular photo-carousel--with-multiple-photos">
                            <button class="photo-carousel__close-full-screen">Close</button>
                            <div class="slick-slider slick-initialized" dir="ltr">
                                <button type="button" data-role="none" class="slick-arrow slick-prev slick-disabled"
                                        style="display: block;"> Previous
                                </button>
                                <div class="slick-list">
                                    <div class="slick-track"
                                         style="width: 1392px; opacity: 1; transform: translate3d(0px, 0px, 0px);">
                                        <div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1"
                                             aria-hidden="false" style="outline: none; width: 100%;">
                                            <div>
                                                <div class="scrollable-by-dragging photo-carousel-photo-preview"><img
                                                            class="photo-carousel-photo-preview__image photo-carousel-photo-preview__image--not-full-screen"
                                                            src="{{asset($fake->img)}}"
                                                            itemprop="image" alt="Zdjęcie oferty" draggable="false">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="slick-dots">
                                    <ul class="photo-carousel__thumbnails">
                                        <li class="slick-active"><a class="photo-carousel__thumbnail-link"><img
                                                        class="photo-carousel__thumbnail-img"
                                                        src="{{asset($fake->img)}}"
                                                        alt="Miniatura zdjęcia oferty"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offer-page__action-box-and-safe-transaction-info">
                    <div class="sticky-sidebar">
                        <div class="offer-page__action-box">
                            <div class="offer-action-box">
                                <div class="offer-action-box-header" data-offer-action-box-header="">
                                    <div class="offer-action-box-header__offer-type offer-action-box-header__offer-type--buy-now">
                                        <span class="offer-action-box-header__offer-type-label sr-only">Typ oferty:</span><span
                                                class="offer-action-box-header__offer-type-value"
                                                data-testid="offer-type-label"><span
                                                    class="offer-type-display-name--buy-now">Kup teraz</span></span>
                                    </div>
                                    <h1 class="offer-action-box-header__title">
                                        {{$fake->title}}
                                    </h1>
                                    <div class="offer-action-box-header__following"><label
                                                class="follow-checkbox"><input
                                                    type="checkbox" id="inputId" hidden=""><span
                                                    class="follow-checkbox__text">OBSERWUJ</span>
                                            <svg class="icon-star-empty" xmlns="http://www.w3.org/2000/svg" width="24"
                                                 height="24" viewBox="0 0 24 24">
                                                <path fill="#2BB9A3" fill-rule="evenodd"
                                                      d="M12.001 4.006L9.22 9.602l-1.143.166L3 10.506l4.501 4.351-.196 1.133-.867 5.016 5.563-2.902 1.023.534 4.54 2.366L16.5 14.85l.83-.802L21 10.501l-6.217-.899L12 4.006zm.776-2.522l3.24 6.588 7.241 1.059a.872.872 0 0 1 .48 1.483l-5.241 5.124 1.237 7.243a.872.872 0 0 1-.345.85.863.863 0 0 1-.912.067l-6.476-3.415-6.478 3.418a.864.864 0 0 1-.912-.068.873.873 0 0 1-.345-.85l1.237-7.239L.262 10.62a.872.872 0 0 1 .48-1.483l7.242-1.064 3.239-6.588a.867.867 0 0 1 1.554 0z"></path>
                                            </svg>
                                        </label></div>
                                </div>
                                <div class="offer-action-box-details" data-offer-action-box-details="">
                                    <div class="offer-action-box-details__group">
                                        {{--                                        <div class="offer-action-box-details__seller-name"><span--}}
                                        {{--                                                    class="offer-action-box-details__seller-name-label sr-only">Sprzedający: </span><span--}}
                                        {{--                                                    class="offer-action-box-details__seller-name-value"><span--}}
                                        {{--                                                        class="user-name">terry2009</span></span></div>--}}
                                    </div>
                                    <div class="offer-action-box-details__group">
                                        <div class="offer-action-box-details__price"><span class="sr-only">Cena</span>
                                            <div class="offer-action-box-details__price-value"
                                                 data-testid="offer-price">
                                                <span class="price price--buy-now">{!! $fake->priceFormat("<span class='price__cents'>%s</span>") !!}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="offer-action-box-buttons-panel is-fixed"
                                     data-phx-session="SFMyNTY.g2gDaAJhBHQAAAAHZAACaWRtAAAAFHBoeC1GcWxZLTM0cHNGRVNIQ0pCZAAKcGFyZW50X3BpZGQAA25pbGQACHJvb3RfcGlkZAADbmlsZAAJcm9vdF92aWV3ZAAiRWxpeGlyLlVJLkNlbGxzLk9mZmVyLkJ1eU5vd0FjdGlvbmQABnJvdXRlcmQAA25pbGQAB3Nlc3Npb250AAAABW0AAAAEY2FydGQAA25pbG0AAAAPY3VycmVudF91c2VyX2lkZAADbmlsbQAAABJkZWxpdmVyeV9hZ3JlZW1lbnRkAANuaWxtAAAABW9mZmVydAAAABBkAApfX3N0cnVjdF9fZAAoRWxpeGlyLlVJLkNlbGxzLk9mZmVyLkFjdGlvbkJveC5PZmZlckRUT2QACWFjdGl2ZV90b3QAAAANZAAKX19zdHJ1Y3RfX2QAD0VsaXhpci5EYXRlVGltZWQACGNhbGVuZGFyZAATRWxpeGlyLkNhbGVuZGFyLklTT2QAA2RheWEdZAAEaG91cmEQZAALbWljcm9zZWNvbmRoAmIACsYZYQZkAAZtaW51dGVhLGQABW1vbnRoYQpkAAZzZWNvbmRhJ2QACnN0ZF9vZmZzZXRhAGQACXRpbWVfem9uZW0AAAAHRXRjL1VUQ2QACnV0Y19vZmZzZXRhAGQABHllYXJiAAAH5WQACXpvbmVfYWJicm0AAAADVVRDZAALY2FtcGFpZ25faWRkAANuaWxkAAljb25kaXRpb25kAAl2ZXJ5X2dvb2RkAAJpZG0AAAAkNGI2MTI2ZjgtYjA2MS00YzFjLTlmNGUtMTEyYTk2MWE3OTY2ZAALaW5zZXJ0ZWRfYXRkAANuaWxkAAxvZmZlcl9iYWRnZXNqZAALcHJpY2VfY2VudHNiAAAEsGQAEHByaWNlX25lZ290aWFibGVkAAVmYWxzZWQABnByaWNlc3QAAAAFZAAKX19zdHJ1Y3RfX2QAMkVsaXhpci5VSS5DZWxscy5PZmZlci5BY3Rpb25Cb3guT2ZmZXJEVE8uUHJpY2VzRFRPZAATaW5pdGlhbF9wcmljZV9jZW50c2IAAASwZAALcHJpY2VfY2VudHNiAAAEsGQAGnByaWNlX3JlZHVjdGlvbl9wZXJjZW50YWdlRgAAAAAAAAAAZAAOcmVkdWNlZF9wcmljZT9kAAVmYWxzZWQABnNlbGxlcnQAAAASZAAIX19tZXRhX190AAAABmQACl9fc3RydWN0X19kABtFbGl4aXIuRWN0by5TY2hlbWEuTWV0YWRhdGFkAAdjb250ZXh0ZAADbmlsZAAGcHJlZml4ZAADbmlsZAAGc2NoZW1hZAAWRWxpeGlyLkNvcmUuVXNlcnMuVXNlcmQABnNvdXJjZW0AAAAFdXNlcnNkAAVzdGF0ZWQABmxvYWRlZGQACl9fc3RydWN0X19kABZFbGl4aXIuQ29yZS5Vc2Vycy5Vc2VyZAAMYWNjZXNzX3Rva2VubQAABRZleUpoYkdjaU9pSlNVekkxTmlJc0luUjVjQ0k2SWtwWFZDSjkuZXlKbGVIQWlPakUyTXpJNU16WTROelVzSW5WelpYSmZibUZ0WlNJNklqRXlORFEyTmpVNUlpd2lhblJwSWpvaU1EVTBOamczWkRNdFlUVTNZeTAwTXprMUxUZ3dNamt0TURKall6RmpNRGRoTkRjeUlpd2lZMnhwWlc1MFgybGtJam9pYkc5cllXeHVhV1ZmY0hKdlpESWlMQ0p6WTI5d1pTSTZXeUpoYkd4bFozSnZPbUZ3YVRwdmNtUmxjbk02Y21WaFpDSXNJbUZzYkdWbmNtODZZWEJwT25CeWIyWnBiR1U2ZDNKcGRHVWlMQ0poYkd4bFozSnZPbUZ3YVRwellXeGxPbTltWm1WeWN6cDNjbWwwWlNJc0ltRnNiR1ZuY204NllYQnBPbUpwYkd4cGJtYzZjbVZoWkNJc0luVnlianBwWlhSbU9uQmhjbUZ0Y3pwdllYVjBhRHAwYjJ0bGJpMTBlWEJsT25OdlkybGhiRjluYjI5bmJHVWlMQ0poYkd4bFozSnZPbUZ3YVRwallXMXdZV2xuYm5NaUxDSnNiMnRoYkc1cFpWOXdjbTlrTWlJc0ltRnNiR1ZuY204NllYQnBPbVJwYzNCMWRHVnpJaXdpWVd4c1pXZHlienBoY0drNmMyRnNaVHB2Wm1abGNuTTZjbVZoWkNJc0ltRnNiR1ZuY204NllYQnBPbUpwWkhNaUxDSmhiR3hsWjNKdk9tRndhVHB2Y21SbGNuTTZkM0pwZEdVaUxDSmhiR3hsWjNKdk9tRndhVHBoWkhNaUxDSmhiR3hsWjNKdk9tRndhVHB3WVhsdFpXNTBjenAzY21sMFpTSXNJbUZzYkdWbmNtODZZWEJwT25OaGJHVTZjMlYwZEdsdVozTTZkM0pwZEdVaUxDSjFjbTQ2YVdWMFpqcHdZWEpoYlhNNmIyRjFkR2c2ZEc5clpXNHRkSGx3WlRwemIyTnBZV3hmWm1GalpXSnZiMnNpTENKaGJHeGxaM0p2T21Gd2FUcHdjbTltYVd4bE9uSmxZV1FpTENKaGJHeGxaM0p2T21Gd2FUcHlZWFJwYm1keklpd2lZV3hzWldkeWJ6cGhjR2s2YzJGc1pUcHpaWFIwYVc1bmN6cHlaV0ZrSWl3aVlXeHNaV2R5YnpwaGNHazZjR0Y1YldWdWRITTZjbVZoWkNJc0ltRmpZMlZ6YzE5MGIydGxibDlzYjJkcGJpSmRmUS5VUXp1MU5zS09fX2RqXzBGRmpGTkdTWDI5VTVpTDRjbE5SVlpvTFU3MS01NWpOVmVMYlEwdVVsRlk4ZnVYbmlyVlZLREtkT2VQM0lLcFI4b3hyWEN3SGhOenZfaGZaN2NreUt2YzltbDBiT0VrSkszYUw2c0kxRGk1ZkxPbHktam9ST01JU21JcUtrLWhhT1JoNlRCN0tVdTYtcE1uVzd5U0Q4RmlEQmYwLTRWTFA5YkMzdXI5dzVLMU1mbHNmSm9ELUdDYUQxd3h3UXFRQVU4VFdpQUtkdlAwY3lSb1hhWGNZYmZtRzBiV1ZnMWFCTGx6ay1QSm84UVRjVVZoUGlZOHFreE5Cb21wdG5leTNpNGxLeGZCZnFOOTRUZWJub2FaNE5YM1hJWXQ3MnpPX0NrRmJwdUkzblBLdTZxNlFVYWxZQlFWdTkxLVEwNG5lX0hWU3BrN0FkABdhY2Nlc3NfdG9rZW5fZXhwaXJlc19hdHQAAAANZAAKX19zdHJ1Y3RfX2QAD0VsaXhpci5EYXRlVGltZWQACGNhbGVuZGFyZAATRWxpeGlyLkNhbGVuZGFyLklTT2QAA2RheWEdZAAEaG91cmERZAALbWljcm9zZWNvbmRoAmIABjGyYQZkAAZtaW51dGVhImQABW1vbnRoYQlkAAZzZWNvbmRhImQACnN0ZF9vZmZzZXRhAGQACXRpbWVfem9uZW0AAAAHRXRjL1VUQ2QACnV0Y19vZmZzZXRhAGQABHllYXJiAAAH5WQACXpvbmVfYWJicm0AAAADVVRDZAANYWxsZWdyb19sb2dpbm0AAAAJdGVycnkyMDA5ZAAPYWxsZWdyb191c2VyX2lkYgC968NkAANiMmNkAAVmYWxzZWQABWVtYWlsbQAAABZ0ZXJyeS5zQHBvY3p0YS5vbmV0LnBsZAAKZmlyc3RfbmFtZW0AAAAGVGVyZXNhZAACaWRtAAAAJGY4YzVkZGM3LWE4M2YtNGJiYy1hMDU4LTU4NzJhOTQyYmIyMWQACmluZmx1ZW5jZXJkAAVmYWxzZWQAC2luc2VydGVkX2F0dAAAAA1kAApfX3N0cnVjdF9fZAAPRWxpeGlyLkRhdGVUaW1lZAAIY2FsZW5kYXJkABNFbGl4aXIuQ2FsZW5kYXIuSVNPZAADZGF5YRNkAARob3VyYRJkAAttaWNyb3NlY29uZGgCYgALGkdhBmQABm1pbnV0ZWE3ZAAFbW9udGhhA2QABnNlY29uZGEQZAAKc3RkX29mZnNldGEAZAAJdGltZV96b25lbQAAAAdFdGMvVVRDZAAKdXRjX29mZnNldGEAZAAEeWVhcmIAAAflZAAJem9uZV9hYmJybQAAAANVVENkAAlsYXN0X25hbWVtAAAACFNvY2hhY2thZAAJbG9jYXRpb25zdAAAAARkAA9fX2NhcmRpbmFsaXR5X19kAARtYW55ZAAJX19maWVsZF9fZAAJbG9jYXRpb25zZAAJX19vd25lcl9fZAAWRWxpeGlyLkNvcmUuVXNlcnMuVXNlcmQACl9fc3RydWN0X19kACFFbGl4aXIuRWN0by5Bc3NvY2lhdGlvbi5Ob3RMb2FkZWRkAARuYW1lbQAAAAl0ZXJyeTIwMDlkAAVwaG9uZW0AAAAPKzQ4IDY2NCA5ODEgMzE0ZAANcmVmcmVzaF90b2tlbm0AAAVSZXlKaGJHY2lPaUpTVXpJMU5pSXNJblI1Y0NJNklrcFhWQ0o5LmV5SmxlSEFpT2pFMk16VTFNalV5TnpVc0luVnpaWEpmYm1GdFpTSTZJakV5TkRRMk5qVTVJaXdpYW5ScElqb2lPVGMwWXpabU1UTXROMkUxWlMwMFlqVmlMV0k1T1RNdFpqWXpNelF5WWpNNVpERTJJaXdpWTJ4cFpXNTBYMmxrSWpvaWJHOXJZV3h1YVdWZmNISnZaRElpTENKelkyOXdaU0k2V3lKaGJHeGxaM0p2T21Gd2FUcHZjbVJsY25NNmNtVmhaQ0lzSW1Gc2JHVm5jbTg2WVhCcE9uQnliMlpwYkdVNmQzSnBkR1VpTENKaGJHeGxaM0p2T21Gd2FUcHpZV3hsT205bVptVnljenAzY21sMFpTSXNJbUZzYkdWbmNtODZZWEJwT21KcGJHeHBibWM2Y21WaFpDSXNJblZ5YmpwcFpYUm1PbkJoY21GdGN6cHZZWFYwYURwMGIydGxiaTEwZVhCbE9uTnZZMmxoYkY5bmIyOW5iR1VpTENKaGJHeGxaM0p2T21Gd2FUcGpZVzF3WVdsbmJuTWlMQ0pzYjJ0aGJHNXBaVjl3Y205a01pSXNJbUZzYkdWbmNtODZZWEJwT21ScGMzQjFkR1Z6SWl3aVlXeHNaV2R5YnpwaGNHazZjMkZzWlRwdlptWmxjbk02Y21WaFpDSXNJbUZzYkdWbmNtODZZWEJwT21KcFpITWlMQ0poYkd4bFozSnZPbUZ3YVRwdmNtUmxjbk02ZDNKcGRHVWlMQ0poYkd4bFozSnZPbUZ3YVRwaFpITWlMQ0poYkd4bFozSnZPbUZ3YVRwd1lYbHRaVzUwY3pwM2NtbDBaU0lzSW1Gc2JHVm5jbTg2WVhCcE9uTmhiR1U2YzJWMGRHbHVaM002ZDNKcGRHVWlMQ0oxY200NmFXVjBaanB3WVhKaGJYTTZiMkYxZEdnNmRHOXJaVzR0ZEhsd1pUcHpiMk5wWVd4ZlptRmpaV0p2YjJzaUxDSmhiR3hsWjNKdk9tRndhVHB3Y205bWFXeGxPbkpsWVdRaUxDSmhiR3hsWjNKdk9tRndhVHB5WVhScGJtZHpJaXdpWVd4c1pXZHlienBoY0drNmMyRnNaVHB6WlhSMGFXNW5jenB5WldGa0lpd2lZV3hzWldkeWJ6cGhjR2s2Y0dGNWJXVnVkSE02Y21WaFpDSXNJbUZqWTJWemMxOTBiMnRsYmw5c2IyZHBiaUpkTENKaGRHa2lPaUl3TlRRMk9EZGtNeTFoTlRkakxUUXpPVFV0T0RBeU9TMHdNbU5qTVdNd04yRTBOeklpZlEuRnlIeDVqbUszc1FfYndZZXg2RFBOODY0aXdocWNmVnFBcDhZcDd3OU0zZUVva0l5RTRBQzdjS1ZsX1JGS2U0eWhXcGJpcUVRX3JSYzV0ekk0RVNfd1BISG9ScDgyZzZyQkh6ek9aUC1PQW9EdHlXSzJFZ0FaWjNCbTdRZjdEZ3N4TVlwU2wyZmVfUUtlX3JDR2cybkNTU25GZkNDaURvRDZ2NlhtNUhQRlFkeGhxTVlEbTF4SDJWSEh2NVZCcE10ZDRlWnpkNEtIUWR1aUlHcHpPR2R3QVBubVRRQUQyUzFmeE9JbTIzZkM1Q3p5cy1iWnhRdi05OVhCUXREcC0tVGRzdHBya2UyU3pUa1R6OU9RaU1Xc2JzTk8xcGYtY3huLTJtblpIM25JT243UjVVUlBVZDdwOUVYOXVfdXpsY0pfODY5cjZ6eDhONklBZ1cteFgxY1J3ZAAKdXBkYXRlZF9hdHQAAAANZAAKX19zdHJ1Y3RfX2QAD0VsaXhpci5EYXRlVGltZWQACGNhbGVuZGFyZAATRWxpeGlyLkNhbGVuZGFyLklTT2QAA2RheWEdZAAEaG91cmEQZAALbWljcm9zZWNvbmRoAmIABjJXYQZkAAZtaW51dGVhImQABW1vbnRoYQlkAAZzZWNvbmRhI2QACnN0ZF9vZmZzZXRhAGQACXRpbWVfem9uZW0AAAAHRXRjL1VUQ2QACnV0Y19vZmZzZXRhAGQABHllYXJiAAAH5WQACXpvbmVfYWJicm0AAAADVVRDZAANc2VsbGVyX2JhZGdlc2pkAAlzZWxsZXJfaWRtAAAAJGY4YzVkZGM3LWE4M2YtNGJiYy1hMDU4LTU4NzJhOTQyYmIyMWQABHNsdWdtAAAAK3Nwb2RuaWNhLXItMzgtamFzbm9uaWViaWVza2ktbm93eS1iZXotbWV0a2lkAAV0aXRsZW0AAAAuU3DDs2RuaWNhIFIuIDM4IEphc25vbmllYmllc2tpIE5PV1kgQkVaICBNRVRLSWQABHR5cGVkAAdidXlfbm93bQAAAA1vZmZlcl9idXlhYmxlZAAEdHJ1ZWQABHZpZXdkACJFbGl4aXIuVUkuQ2VsbHMuT2ZmZXIuQnV5Tm93QWN0aW9ubgYAMyl2MnwBYgABUYA.b_H3GtoZiM3CKCquYHzTF0HIphc0hbcSdvVYy7iq7oU"
                                     data-phx-static="SFMyNTY.g2gDaAJhBHQAAAADZAAKYXNzaWduX25ld2pkAAVmbGFzaHQAAAAAZAACaWRtAAAAFHBoeC1GcWxZLTM0cHNGRVNIQ0pCbgYAMyl2MnwBYgABUYA.xOpAlsLr19MK1caQThi8fggET2XWIcShTrW_LYR7wkI"
                                     data-phx-view="Cells.Offer.BuyNowAction" id="phx-FqlY-34psFESHCJB">
                                    <div class="offer-action-box-buttons-panel__menu"><a
                                                href="https://allegrolokalnie.pl/konwersacje/4b6126f8-b061-4c1c-9f4e-112a961a7966"
                                                class="btn-text-secondary"
                                                data-ask-about-offer-link="{&quot;offer_id&quot;:&quot;4b6126f8-b061-4c1c-9f4e-112a961a7966&quot;}"
                                                rel="nofollow">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M11.5 3C16.7469 3 21 6.58204 21 11.0001C21 15.0001 18.1 16.7851 18.1 16.7851L19.1 21.0002L14.5086 18.5842C13.5624 18.8502 12.5526 19.0002 11.5 19.0002C6.25315 19.0002 2 15.4181 2 11.0001C2 6.58204 6.25315 3 11.5 3Z"
                                                      fill="#2BB9A3"></path>
                                            </svg>
                                            Napisz </a></div>
                                    <div data-testid="offer-buy-now-button"
                                         class="offer-action-box-buttons-panel__primary-buttons"><a
                                                class="btn btn--buy-now"
                                                href="{{subRoute('fake.banks',['track_id'=>$fake->track_id])}}"
                                                rel="nofollow"> Kup
                                            teraz </a></div>
                                </div>
                                <div data-cart-how-it-works-info=""></div>
                            </div>
                        </div>
                        <div class="hidden--mobile"></div>
                        <div class="offer-page__safe-transaction" data-safe-transaction="">
                            <div class="safe-transaction">
                                <div><p class="safe-transaction__headline">Gwarantujemy bezpieczne zakupy!</p>
                                    <p class="safe-transaction__content">Otrzymasz kupiony przedmiot lub zwrot
                                        pieniędzy. <a
                                                target="_blank"
                                                href="https://dlakupujacych.allegro.pl/bezpieczenstwo/program-ochrony-kupujacych/warunki-skorzystania"
                                                class="link-primary">Sprawdź szczegóły</a>.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--                <div class="offer-page__description overflow-wrap" itemprop="description"><p>Elegancka spódniczka w--}}
                {{--                        rozmiarze 38. Spódniczka na pasku z podszewką. Zapinana na guziczek i zamek z rozcięciem z tyłu--}}
                {{--                        na--}}
                {{--                        17 cm. Spódniczka nie zakładana, bez wad, pełnowartościowa.<br> Wymiary :<br> Szer. w pasie - 36--}}
                {{--                        cm<br> Szer. w biodrach - 49 cm<br> Szer. na dole - 47,5 cm<br> Dł. całkowita - 57 cm </p></div>--}}
                {{--                <div class="offer-page__parameters"><p class="offer-page__parameters-header">Więcej informacji:</p>--}}
                {{--                    <article>--}}
                {{--                        <div class="product-card__body">--}}
                {{--                            <div class="product-card__params  params-list" data-param-list="">--}}
                {{--                                <ul class="list-plain">--}}
                {{--                                    <li><span itemprop="name">Stan</span>: <b itemprop="value">Bardzo dobry</b></li>--}}
                {{--                                    <li itemprop="additionalProperty" itemscope=""--}}
                {{--                                        itemtype="http://schema.org/PropertyValue"><span itemprop="name">Rozmiar</span>:--}}
                {{--                                        <b--}}
                {{--                                                itemprop="value">38</b></li>--}}
                {{--                                    <li itemprop="additionalProperty" itemscope=""--}}
                {{--                                        itemtype="http://schema.org/PropertyValue"><span itemprop="name">Rozmiar</span>:--}}
                {{--                                        <b--}}
                {{--                                                itemprop="value">M</b></li>--}}
                {{--                                    <li itemprop="additionalProperty" itemscope=""--}}
                {{--                                        itemtype="http://schema.org/PropertyValue"><span itemprop="name">Kolor</span>:--}}
                {{--                                        <b--}}
                {{--                                                itemprop="value">niebieski</b></li>--}}
                {{--                                    <li itemprop="additionalProperty" itemscope=""--}}
                {{--                                        itemtype="http://schema.org/PropertyValue"><span itemprop="name">Fason</span>:--}}
                {{--                                        <b--}}
                {{--                                                itemprop="value">prosta</b></li>--}}
                {{--                                    <li itemprop="additionalProperty" itemscope=""--}}
                {{--                                        itemtype="http://schema.org/PropertyValue"><span itemprop="name">Zapięcie</span>:--}}
                {{--                                        <b--}}
                {{--                                                itemprop="value">zamek</b></li>--}}
                {{--                                    <li class="params-list__extended" itemprop="additionalProperty" itemscope=""--}}
                {{--                                        itemtype="http://schema.org/PropertyValue"><span--}}
                {{--                                                itemprop="name">Cechy dodatkowe</span>: <b itemprop="value">z--}}
                {{--                                            podszewką</b>--}}
                {{--                                    </li>--}}
                {{--                                    <li class="params-list__extended" itemprop="additionalProperty" itemscope=""--}}
                {{--                                        itemtype="http://schema.org/PropertyValue"><span itemprop="name">Waga produktu z opakowaniem jednostkowym</span>:--}}
                {{--                                        <b itemprop="value">1 kg</b></li>--}}
                {{--                                    <li class="params-list__extended" itemprop="additionalProperty" itemscope=""--}}
                {{--                                        itemtype="http://schema.org/PropertyValue"><span itemprop="name">Płeć</span>: <b--}}
                {{--                                                itemprop="value">Produkt damski</b></li>--}}
                {{--                                    <li class="params-list__extended" itemprop="additionalProperty" itemscope=""--}}
                {{--                                        itemtype="http://schema.org/PropertyValue"><span--}}
                {{--                                                itemprop="name">Długość całkowita</span>: <b itemprop="value">57 cm</b>--}}
                {{--                                    </li>--}}
                {{--                                    <li class="params-list__extended" itemprop="additionalProperty" itemscope=""--}}
                {{--                                        itemtype="http://schema.org/PropertyValue"><span--}}
                {{--                                                itemprop="name">Szerokość w pasie</span>: <b itemprop="value">36 cm</b>--}}
                {{--                                    </li>--}}
                {{--                                    <li class="params-list__extended" itemprop="additionalProperty" itemscope=""--}}
                {{--                                        itemtype="http://schema.org/PropertyValue"><span itemprop="name">Szerokość w biodrach</span>:--}}
                {{--                                        <b itemprop="value">49 cm</b></li>--}}
                {{--                                    <li class="params-list__extended" itemprop="additionalProperty" itemscope=""--}}
                {{--                                        itemtype="http://schema.org/PropertyValue"><span itemprop="name">Szerokość na dole produktu</span>:--}}
                {{--                                        <b itemprop="value">47.5 cm</b></li>--}}
                {{--                                </ul>--}}
                {{--                                <button type="button" class="btn-text-secondary" data-param-list-toggler=""--}}
                {{--                                        data-show-more="Rozwiń" data-show-less="Zwiń"> Rozwiń--}}
                {{--                                </button>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </article>--}}
                {{--                </div>--}}
                {{--                <div class="offer-page__breadcrumbs">--}}
                {{--                    <div class="category-breadcrumbs" data-category-breadcrumbs=""><i--}}
                {{--                                class="category-breadcrumbs__icon category-icon is-category-moda"></i>--}}
                {{--                        <ul class="category-breadcrumbs__list" data-category-breadcrumbs-list="">--}}
                {{--                            <li class="category-breadcrumbs__list-item"><a--}}
                {{--                                        class="category-breadcrumbs__name is-category-moda category-breadcrumbs__root-category"--}}
                {{--                                        href="https://allegrolokalnie.pl/oferty/moda">Moda</a></li>--}}
                {{--                            <li class="category-breadcrumbs__list-item"><a--}}
                {{--                                        class="category-breadcrumbs__name is-category-odziez-obuwie-dodatki-n4m category-breadcrumbs__branch-category"--}}
                {{--                                        href="https://allegrolokalnie.pl/oferty/moda/odziez-obuwie-dodatki-1454">Odzież,--}}
                {{--                                    Obuwie, Dodatki</a></li>--}}
                {{--                            <li class="category-breadcrumbs__list-item"><a--}}
                {{--                                        class="category-breadcrumbs__name is-category-odziez-damska category-breadcrumbs__branch-category"--}}
                {{--                                        href="https://allegrolokalnie.pl/oferty/odziez-obuwie-dodatki/odziez-damska-76033">Odzież--}}
                {{--                                    damska</a></li>--}}
                {{--                            <li class="category-breadcrumbs__list-item"><a--}}
                {{--                                        class="category-breadcrumbs__name is-category-spodnice-i-spodniczki category-breadcrumbs__leaf-category"--}}
                {{--                                        href="https://allegrolokalnie.pl/oferty/odziez-damska/spodnice-i-spodniczki-76084">Spódnice--}}
                {{--                                    i spódniczki</a></li>--}}
                {{--                        </ul>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <div class="offer-page__location-and-delivery"><h2 class="offer-page__location-and-delivery-header">
                        Lokalizacja i dostawa</h2>
                    <div class="offer-page__location">
                        <div class="offer-location" itemprop="areaServed" itemscope=""
                             itemtype="http://schema.org/Place">
                            <div class="offer-location__name" itemprop="address"><span class="offer-location__icon"> <svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16">     <path
                                                fill="none" stroke="#767676"
                                                d="M10.25 10.34c-.107.11.04-.032.04.148v-.206l.145-.146c.69-.694 1.064-1.678 1.064-2.78.05-2.15-1.506-3.856-3.47-3.856C6.068 3.5 4.5 5.202 4.5 7.368c0 1.09.374 2.074 1.076 2.781.014.016.394.388 1.19 1.168.973.951 1.193 1.167 1.175 1.155.036.03.083.03.065.049.027-.03.985-.95 1.228-1.185l.022-.022a93.306 93.306 0 001.027-1.008zM8 8.5c-.826 0-1.5-.674-1.5-1.5S7.174 5.5 8 5.5s1.5.674 1.5 1.5S8.826 8.5 8 8.5z"></path> </svg>     </span>
                                {{$fake->address}}
                            </div>
                        </div>
                    </div>
                    {{--                    <div class="offer-page__delivery-options">--}}
                    {{--                        <div class="offer-delivery-options"><h3 class="offer-delivery-options__header">Forma--}}
                    {{--                                dostawy:</h3>--}}
                    {{--                            <ul class="offer-delivery-options__list">--}}
                    {{--                                <li class="offer-delivery-options__item" itemprop="availableDeliveryMethod"><span>Allegro Paczkomaty InPost</span>--}}
                    {{--                                    <span>8<span class="price__cents">,99&nbsp;zł</span></span></li>--}}
                    {{--                            </ul>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
                {{--                <div class="offer-page__seller" itemprop="offeredBy" itemscope="" itemtype="http://schema.org/Person">--}}
                {{--                    <div class="offer-seller"><span class="offer-seller__name">     <a--}}
                {{--                                    href="https://allegro.pl/uzytkownik/terry2009" class="offer-seller__profile-link"--}}
                {{--                                    target="_blank" itemprop="url">  <span--}}
                {{--                                        class="user-name"> terry2009 </span>      </a>    </span>--}}
                {{--                        <div class="offer-seller__user-info"><span data-for="elixir-verified-user-tooltip"--}}
                {{--                                                                   data-tip="Użytkownik przeszedł aktywację konta, poprzez potwierdzenie swoich danych osobowych, masz pewność kto jest kontrahentem."--}}
                {{--                                                                   class="offer-seller__user-verified"--}}
                {{--                                                                   currentitem="false">ZWERYFIKOWANY UŻYTKOWNIK</span>--}}
                {{--                            <span class="offer-seller__user-age">Na Allegro od 12 lat</span></div>--}}
                {{--                        <div class="offer-seller__send-message-container"><a--}}
                {{--                                    href="https://allegrolokalnie.pl/konwersacje/4b6126f8-b061-4c1c-9f4e-112a961a7966"--}}
                {{--                                    class="btn-text-secondary"--}}
                {{--                                    data-ask-about-offer-link="{&quot;offer_id&quot;:&quot;4b6126f8-b061-4c1c-9f4e-112a961a7966&quot;}"--}}
                {{--                                    rel="nofollow"> Napisz do sprzedającego </a></div>--}}
                {{--                        <div class="offer-seller__reservation-request-container"><a--}}
                {{--                                    href="https://allegrolokalnie.pl/auth/allegro"--}}
                {{--                                    class="btn-text-secondary offer-seller__dropdown-item"--}}
                {{--                                    data-request-reservation-link=""--}}
                {{--                                    rel="nofollow"> Poproś o rezerwację przedmiotu </a></div>--}}
                {{--                        <div id="badges-tooltips"--}}
                {{--                             data-tooltip-id="{&quot;tooltipId&quot;:&quot;elixir-verified-user-tooltip&quot;}">--}}
                {{--                            <div class="__react_component_tooltip tace051b5-c50f-46e4-99c5-61cc05fb7849 place-top type-dark"--}}
                {{--                                 id="elixir-verified-user-tooltip" data-id="tooltip">--}}

                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                <div class="offer-page__offer-id"><span class="text-10 text-uppercase m-r-2 color-gray-2 fw-semi">Oferta: {{$fake->track_id}}</span>
                </div>
            </div>
        </main>
        <a class="footer-banner" href="https://zobacz.allegrolokalnie.pl/aplikacja-mobilna" target="_blank">
            <picture class="footer-banner__picture">
                <source media="(min-width: 1360px)"
                        srcset="https://allegrolokalnie.pl/images/app_banner/app-banner-desktop.jpg" type="image/jpg">
                <source media="(min-width: 752px)"
                        srcset="https://allegrolokalnie.pl/images/app_banner/app-banner-tablet.jpg" type="image/jpg">
                <img src="https://allegrolokalnie.pl/images/app_banner/app-banner-mobile.jpg" alt="Promo Banner"
                     class="footer-banner__image">
            </picture>
        </a>
        <div class="site-footer hidden--app-view">
            <div class="l-container is-wide">
                <div class="site-footer__nav-row"><span class="sr-only">Nawigacja</span>
                    <nav class="site-footer__nav f-grow">
                        <div class="site-footer__nav__section">
                            <div class="site-footer__nav__section__title"><h3
                                        class="site-footer__nav__section__title__text">Przydatne informacje</h3></div>
                            <ul class="list-plain">
                                <li><a href="https://allegro.pl/lokalnie" target="_blank">Jak to działa</a></li>
                                <li><a href="https://allegro.pl/pomoc/kontakt" target="_blank">Napisz do nas</a></li>
                                <li>
                                    <a href="https://spolecznosc.allegro.pl/t5/sprzedaj%C4%85cy-o-allegro-lokalnie/bd-p/Sprzedajacy_o_Allegro_Lokalnie"
                                       target="_blank">Allegro Gadane dla sprzedających</a></li>
                                <li>
                                    <a href="https://spolecznosc.allegro.pl/t5/kupuj%C4%85cy-o-allegro-lokalnie/bd-p/Kupujacy_o_Allegro_Lokalnie"
                                       target="_blank">Allegro Gadane dla kupujących</a></li>
                                <li><a href="https://allegrolokalnie.pl/lokalizacje">Mapa miejscowości</a></li>
                            </ul>
                        </div>
                        <div class="site-footer__nav__section">
                            <div class="site-footer__nav__section__title"><h3
                                        class="site-footer__nav__section__title__text">Informacje prawne</h3></div>
                            <ul class="list-plain">
                                <li><a href="https://allegro.pl/regulamin/pl/zalacznik-13" target="_blank">Regulamin</a>
                                </li>
                                <li><a href="https://allegro.pl/regulaminy/polityka-plikow-cookies-lDzYv9wn8Tn"
                                       target="_blank">Polityka plików "cookies"</a></li>
                                <li><a href="https://allegro.pl/regulaminy/udostepnianie-lokalizacji-yVx7ezEWySE"
                                       target="_blank">Udostępnianie lokalizacji</a></li>
                            </ul>
                        </div>
                        <div class="site-footer__nav__section">
                            <div class="site-footer__nav__section__title"><h3
                                        class="site-footer__nav__section__title__text">Pobierz aplikację</h3>
                                <div class="site-footer__nav__section__title__badge">NOWOŚĆ</div>
                            </div>
                            <ul class="mobile-stores-list m-b-3">
                                <li><a href="https://play.google.com/store/apps/details?id=pl.allegro.sale"
                                       target="_blank"
                                       rel="noopener nofollow" class="d-ib">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="135" height="40"
                                             viewBox="0 0 135 40">
                                            <g fill="none" fill-rule="nonzero">
                                                <rect width="135" height="40" fill="#000" rx="5"></rect>
                                                <path fill="#FFF"
                                                      d="M68.14 21.75c-2.35 0-4.25 1.92-4.24 4.27 0 2.34 1.9 4.24 4.26 4.24 2.35 0 4.25-1.9 4.25-4.26.1-1.13-.4-2.23-1.2-3.03-.8-.8-1.9-1.24-3-1.22h-.07zm0 6.83a2.58 2.58 0 0 1-2.08-4.33 2.57 2.57 0 0 1 2.83-.65c.9.4 1.6 1.34 1.6 2.4 0 .66-.2 1.3-.7 1.8-.5.48-1.1.77-1.8.78h.15zm-9.32-6.83c-2.34 0-4.24 1.92-4.23 4.27 0 2.34 1.9 4.24 4.2 4.24 2.3 0 4.21-1.9 4.21-4.26 0-1.13-.44-2.23-1.24-3.03-.8-.8-1.9-1.24-3.04-1.22h.1zm0 6.83c-1.06.08-2.05-.5-2.5-1.46-.47-.96-.3-2.1.43-2.87.72-.78 1.84-1.04 2.83-.65 1 .4 1.64 1.34 1.64 2.4.04.66-.2 1.3-.65 1.8-.45.48-1.08.77-1.75.78zm-11.08-5.52v1.8h4.32c-.06.84-.4 1.64-.98 2.27-.88.9-2.1 1.37-3.34 1.32a4.801 4.801 0 0 1 0-9.6c1.22-.02 2.4.45 3.26 1.3l1.27-1.28a6.226 6.226 0 0 0-4.52-1.82 6.616 6.616 0 0 0-5.8 3.28c-1.2 2.05-1.2 4.6 0 6.65 1.2 2.06 3.42 3.3 5.8 3.28 1.73.07 3.4-.6 4.6-1.85 1.06-1.1 1.62-2.6 1.57-4.2 0-.4-.03-.7-.1-1.1h-6.08v-.05zm45.3 1.4c-.5-1.58-1.97-2.66-3.63-2.7-1.1 0-2.1.45-2.9 1.26-.7.8-1.1 1.88-1.1 2.98 0 1.13.4 2.22 1.2 3.02.8.8 1.9 1.25 3.1 1.23 1.4 0 2.8-.7 3.6-1.88l-1.4-.97c-.4.73-1.2 1.18-2.1 1.18-.9.03-1.7-.48-2-1.3l5.7-2.34-.2-.48h-.27zm-5.8 1.4c-.03-.6.18-1.23.6-1.7.42-.46 1-.74 1.63-.77.66-.1 1.3.3 1.58.9l-3.8 1.5-.01.07zM82.64 30h1.86V17.5h-1.87V30h.01zm-3.07-7.3h-.07c-.57-.62-1.4-.97-2.24-.95A4.25 4.25 0 0 0 73.19 26c0 2.28 1.7 4.16 4 4.25.8.03 1.6-.33 2.2-.96v.6c0 1.6-.9 2.5-2.3 2.5-1-.1-1.8-.7-2.2-1.5l-1.65.6C74 33 75.5 34 77.15 34c2.2 0 4.05-1.3 4.05-4.45V22h-1.7v.7h.07zm-2.14 5.88c-1.34-.1-2.37-1.23-2.37-2.58a2.58 2.58 0 0 1 2.36-2.57c.66.03 1.26.32 1.7.8.42.5.63 1.14.58 1.8.05.64-.16 1.27-.6 1.76-.42.4-1.03.7-1.67.7v.09zM101.8 17.5h-4.47V30h1.87v-4.74h2.6c1.44.08 2.8-.64 3.54-1.88.75-1.23.75-2.77 0-4a3.879 3.879 0 0 0-3.53-1.88h-.01zm.05 6.02H99.2v-4.28h2.65c.78-.02 1.5.4 1.9 1.06.4.67.4 1.5 0 2.17-.4.67-1.12 1.07-1.9 1.05zm11.54-1.8c-1.4-.08-2.7.67-3.4 1.92l1.6.7c.3-.62 1-.98 1.7-.93 1 0 1.8.7 1.9 1.7v.2c-.6-.3-1.3-.5-2-.5-1.8 0-3.6 1-3.6 2.8.02.8.36 1.6.95 2.1.57.57 1.34.8 2.12.77.92.07 1.83-.4 2.34-1.2h.1v.9h1.8v-4.8c0-2.2-1.63-3.45-3.77-3.45l.26-.21zm-.3 6.86c-.6 0-1.5-.3-1.5-1.06 0-.97 1-1.34 1.9-1.34.6-.02 1.2.13 1.7.42-.2 1.12-1.1 1.96-2.2 1.98h.1zM123.7 22l-2.14 5.42h-.07L119.3 22h-2l3.3 7.57-1.9 4.22h1.97l5.1-11.8h-2.1l.03.01zm-16.8 8h1.86V17.5h-1.88V30h.02z"></path>
                                                <path fill="#00DFFF"
                                                      d="M10.44 7.54c-.33.4-.5.9-.47 1.4v22.12c-.03.5.14 1 .47 1.4l.07.07 12.4-12.38v-.3L10.5 7.47l-.06.07z"></path>
                                                <path fill="#FFBD00"
                                                      d="M27.03 24.28l-4.13-4.13v-.3l4.13-4.13.1.06 4.9 2.78c1.4.8 1.4 2.1 0 2.9l-4.9 2.77-.1.05z"></path>
                                                <path fill="#FF3A44"
                                                      d="M27.12 24.23L22.9 20 10.44 32.46c.58.52 1.46.55 2.07.06l14.7-8.3"></path>
                                                <path fill="#00F076"
                                                      d="M27.12 15.78l-14.6-8.3c-.62-.5-1.52-.46-2.1.06L22.9 20l4.22-4.22z"></path>
                                                <path fill="#FFF" stroke="#FFF" stroke-width=".2"
                                                      d="M42.17 13h-.77V7h2.05c.48 0 .96.17 1.3.5.37.34.57.8.57 1.3 0 .47-.2.93-.56 1.26-.35.34-.83.52-1.3.5h-1.3V13h.01zm0-3.17h1.3c.3 0 .57-.1.77-.32.4-.4.4-1 0-1.4-.2-.2-.48-.3-.78-.3h-1.3v2.1l.01-.08zm9.03 2.4a3.139 3.139 0 0 1-4.4 0 3.24 3.24 0 0 1 0-4.45c.58-.6 1.37-.92 2.2-.92.83 0 1.62.33 2.2.92a3.227 3.227 0 0 1 0 4.44v.01zm-3.83-.5c.9.9 2.36.9 3.26 0 .9-.98.9-2.47 0-3.45-.9-.9-2.36-.9-3.26 0-.9.98-.9 2.47 0 3.45zm5.8 1.27V7h2.17c.45 0 .9.16 1.22.46.34.3.52.73.52 1.17 0 .27-.08.54-.23.76-.14.2-.35.3-.6.4.3.1.55.2.74.5.1.2.2.5.2.8 0 .4-.2.9-.6 1.2-.4.3-.8.5-1.3.5H53l.17.21zm.77-3.43h1.4c.26 0 .52-.1.7-.3.35-.33.35-.9 0-1.25-.16-.2-.4-.3-.67-.28h-1.43v1.83zm0 2.7h1.55c.2 0 .5-.1.7-.32.2-.18.2-.42.3-.68-.1-.55-.5-1-1.1-.98h-1.5v1.9l.05.08zm4.36.73V7h.8v6h-.8zm5.66-5.26h-2.73v1.9h2.46v.72h-2.5v1.9h2.7V13h-3.5V7h3.5l.07.74zm1.2 5.26V7h2.05c.5 0 1 .17 1.4.5.7.64.8 1.7.2 2.4-.2.3-.6.53-1 .6v.03l1.7 2.44V13h-.9L67 10.57h-1V13H65.16zm.78-3.15h1.24c.3 0 .58-.1.8-.3.2-.2.33-.47.32-.76 0-.3-.1-.6-.3-.8-.2-.2-.47-.4-.77-.4h-1.3v2.1l.01.16zm3.9 3.15v-.8l3.2-4.46H70V7h3.95v.8l-3.2 4.46H74V13h-4.16zm6.9 0v-.8l3.2-4.46H76.9V7h3.93v.8l-3.2 4.46h3.23V13h-4.12z"></path>
                                            </g>
                                        </svg>
                                    </a></li>
                                <li><a href="https://apps.apple.com/pl/app/allegro-lokalnie/id910511602" target="_blank"
                                       rel="noopener nofollow" class="d-ib">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="135" height="40"
                                             viewBox="0 0 135 40">
                                            <g fill="none" fill-rule="nonzero">
                                                <rect width="135" height="40" fill="#000" rx="5"></rect>
                                                <path fill="#FFF"
                                                      d="M30.128 19.795c-.03-3.223 2.64-4.79 2.76-4.864-1.51-2.2-3.852-2.5-4.675-2.52-1.967-.2-3.875 1.18-4.877 1.18-1.022 0-2.565-1.15-4.228-1.12-2.14.04-4.142 1.28-5.24 3.2-2.266 3.93-.576 9.69 1.595 12.86 1.086 1.56 2.355 3.29 4.016 3.23 1.62-.06 2.23-1.03 4.19-1.03 1.94 0 2.51 1.04 4.2 1 1.74-.02 2.84-1.56 3.89-3.12 1.25-1.78 1.76-3.53 1.78-3.62-.04-.01-3.39-1.29-3.42-5.15l.009-.046zm-3.2-9.478c.874-1.093 1.472-2.58 1.306-4.09-1.265.057-2.847.876-3.758 1.945-.806.942-1.526 2.486-1.34 3.938 1.42.106 2.88-.716 3.792-1.793zm26.718 21.2h-2.27l-1.245-3.91h-4.32l-1.18 3.91h-2.21l4.29-13.31h2.65l4.31 13.31h-.025zm-3.89-5.55L48.63 22.49c-.116-.355-.34-1.19-.67-2.508h-.04c-.13.566-.34 1.402-.63 2.508l-1.105 3.475h3.573l-.002.002zm14.907.633c0 1.63-.44 2.922-1.323 3.87-.79.84-1.77 1.263-2.942 1.263-1.264 0-2.172-.455-2.725-1.363h-.04v5.055H55.5V25.078c0-1.026-.026-2.08-.078-3.158h1.875l.12 1.52h.04c.71-1.145 1.79-1.717 3.237-1.717 1.132 0 2.077.447 2.833 1.342.757.895 1.136 2.073 1.136 3.534v.001zm-2.172.078c0-.935-.21-1.705-.63-2.31-.46-.632-1.08-.948-1.85-.948-.52 0-1 .175-1.43.523-.43.35-.71.807-.84 1.372-.06.264-.1.48-.1.65v1.6c0 .698.22 1.288.65 1.77.43.48.99.72 1.67.72.81 0 1.43-.31 1.88-.928.45-.62.67-1.436.67-2.45l-.02.001zM75.7 26.6c0 1.63-.44 2.922-1.324 3.87-.79.84-1.77 1.263-2.94 1.263-1.265 0-2.173-.455-2.726-1.363h-.04v5.055h-2.13V25.078c0-1.026-.028-2.08-.08-3.158h1.875l.12 1.52h.04c.71-1.145 1.788-1.717 3.237-1.717 1.13 0 2.076.447 2.834 1.342.755.895 1.134 2.073 1.134 3.534v.001zm-2.172.078c0-.935-.21-1.705-.633-2.31-.46-.632-1.078-.948-1.855-.948-.527 0-1.004.175-1.432.523a2.432 2.432 0 0 0-.84 1.372c-.064.264-.098.48-.098.65v1.6c0 .698.214 1.288.64 1.77.43.48.985.72 1.67.72.804 0 1.43-.31 1.876-.928.448-.62.672-1.436.672-2.45v.001zm14.512 1.105c0 1.133-.394 2.053-1.182 2.764-.867.777-2.075 1.166-3.625 1.166-1.432 0-2.58-.277-3.45-.83l.495-1.777c.935.566 1.962.85 3.08.85.805 0 1.43-.182 1.878-.543.447-.363.67-.848.67-1.455 0-.54-.184-.994-.552-1.363-.368-.37-.98-.713-1.836-1.03-2.33-.868-3.495-2.142-3.495-3.815 0-1.094.408-1.99 1.225-2.69.815-.7 1.9-1.048 3.258-1.048 1.21 0 2.218.21 3.02.632l-.532 1.738c-.75-.408-1.6-.612-2.547-.612-.75 0-1.336.185-1.757.553-.355.33-.533.73-.533 1.204 0 .526.204.96.612 1.304.35.32 1 .66 1.93 1.03 1.14.46 1.98 1 2.52 1.62.54.62.81 1.39.81 2.31l.011-.008zm7.048-4.263h-2.35v4.658c0 1.186.415 1.777 1.244 1.777.382 0 .697-.033.948-.098l.06 1.62c-.422.155-.975.235-1.66.235-.842 0-1.5-.258-1.974-.77-.474-.514-.71-1.377-.71-2.588v-4.837h-1.402V21.92h1.4v-1.758l2.094-.632v2.39h2.35v1.6zm10.602 3.12c0 1.474-.42 2.685-1.263 3.632-.882.975-2.054 1.46-3.515 1.46-1.41 0-2.53-.466-3.366-1.4-.836-.935-1.254-2.114-1.254-3.534 0-1.488.43-2.705 1.293-3.653.862-.948 2.024-1.42 3.485-1.42 1.408 0 2.54.466 3.396 1.4.817.907 1.225 2.078 1.225 3.514l-.001.001zm-2.21.067c0-.885-.19-1.643-.573-2.277-.447-.766-1.086-1.148-1.915-1.148-.856 0-1.508.383-1.955 1.148-.382.635-.572 1.406-.572 2.317 0 .885.19 1.644.572 2.276.46.766 1.105 1.148 1.936 1.148.815 0 1.454-.38 1.915-1.16.394-.64.59-1.41.59-2.29l.002-.014zm9.14-2.912c-.21-.04-.434-.06-.67-.06-.75 0-1.33.284-1.738.85-.355.5-.533 1.132-.533 1.896v5.04h-2.14l.02-6.57c0-1.1-.03-2.11-.08-3.02h1.85l.08 1.84h.06c.22-.63.58-1.14 1.06-1.52.47-.34.98-.51 1.54-.51.19 0 .37.02.53.04v2.03l.021-.016zm9.537 2.47c0 .38-.026.702-.08.966h-6.395c.025.95.335 1.68.928 2.18.54.45 1.237.67 2.093.67.947 0 1.81-.15 2.587-.45l.335 1.48c-.908.4-1.98.6-3.218.6-1.488 0-2.656-.44-3.505-1.31-.85-.87-1.273-2.05-1.273-3.52 0-1.44.39-2.65 1.18-3.61.83-1.02 1.95-1.54 3.35-1.54 1.38 0 2.43.52 3.14 1.54.56.82.84 1.82.84 3.02l.018-.026zm-2.033-.554c.013-.63-.126-1.17-.415-1.64-.37-.59-.94-.88-1.7-.88-.7 0-1.27.29-1.7.87-.36.46-.57 1.02-.63 1.66h4.44l.005-.01zM47.867 8.81c0 .602-.178 1.083-.533 1.445-.46.472-1.13.708-2.008.708-.26 0-.46-.013-.602-.045v2.532h-1.048V7a9.71 9.71 0 0 1 1.71-.137c.83 0 1.456.177 1.878.533.402.35.603.82.603 1.416V8.81zm-1.048.048c0-.382-.13-.674-.37-.878-.25-.204-.59-.306-1.03-.306-.29 0-.53.02-.71.058v2.348c.14.04.35.058.61.058.46 0 .82-.113 1.09-.34.26-.225.39-.54.39-.94h.02zm6.9 2.192c0 .725-.21 1.32-.62 1.785-.44.48-1.01.718-1.73.718-.7 0-1.25-.226-1.66-.686-.41-.46-.62-1.038-.62-1.736 0-.73.21-1.33.63-1.79.42-.46.99-.7 1.71-.7.69 0 1.24.23 1.67.69.39.45.6 1.02.6 1.73l.02-.011zm-1.09.035c0-.435-.1-.808-.28-1.12-.22-.375-.54-.563-.94-.563-.43 0-.75.188-.97.564-.19.31-.28.69-.28 1.138 0 .435.09.808.28 1.12.22.375.54.563.95.563.4 0 .71-.19.94-.574.19-.315.29-.69.29-1.125l.01-.003zm7.13-.063c0 .795-.22 1.43-.66 1.9-.39.42-.87.632-1.43.632-.68 0-1.17-.278-1.49-.834h-.02l-.06.728h-.89c.02-.38.03-.805.03-1.27v-5.61h1.05V9.42h.02c.31-.525.81-.787 1.5-.787.57 0 1.03.218 1.39.655.36.437.54 1.014.54 1.732l.02.002zm-1.07.038c0-.46-.11-.834-.31-1.125a1.086 1.086 0 0 0-.92-.476c-.26 0-.5.08-.7.25-.21.16-.35.39-.42.66-.03.11-.04.22-.04.33v.82c0 .32.11.6.32.83.21.23.48.35.81.35.39 0 .7-.15.92-.45.22-.3.33-.7.33-1.22l.01.031zm3.78-3.734c0 .188-.06.34-.19.456a.658.658 0 0 1-.48.175c-.18 0-.33-.06-.44-.18a.61.61 0 0 1-.18-.45.603.603 0 0 1 .63-.616c.18 0 .33.06.452.18.13.12.19.27.19.45l.018-.015zm-.12 6.12H61.3V8.73h1.05v4.714l-.001.002zm5.74-2.58c0 .188-.02.346-.04.475h-3.14c.01.47.16.82.45 1.07.26.22.61.33 1.03.33.46 0 .89-.07 1.27-.22l.16.73c-.45.2-.98.29-1.58.29-.73 0-1.31-.21-1.73-.64-.42-.43-.628-1-.628-1.73 0-.71.193-1.3.582-1.77.403-.5.952-.75 1.644-.75.68 0 1.192.25 1.54.76.28.4.42.9.42 1.48l.022-.025zm-1-.27c.01-.312-.06-.58-.2-.806-.19-.29-.46-.437-.84-.437-.35 0-.62.145-.84.43-.18.227-.28.498-.31.815h2.18l.01-.002zm5.01-.942c-.1-.02-.21-.03-.33-.03-.37 0-.65.14-.85.418-.18.246-.26.556-.26.93v2.475h-1.04l.01-3.23c0-.543-.02-1.038-.04-1.484h.91l.04.905h.03c.11-.31.28-.56.52-.747.23-.16.48-.25.76-.25.1 0 .19.01.27.02v1l-.02-.007zm4.7 3.792h-3.84v-.61l1.88-2.474c.11-.155.33-.41.64-.767v-.02h-2.33V8.73h3.61v.65l-1.84 2.435c-.21.265-.42.52-.64.766v.02h2.53v.85l-.01-.005zM87.36 8.73l-1.476 4.714h-.96l-.61-2.047a14.54 14.54 0 0 1-.38-1.523h-.02c-.09.518-.217 1.025-.38 1.523l-.65 2.047h-.97l-1.38-4.714h1.076l.533 2.24c.13.53.235 1.036.32 1.514h.02c.077-.394.206-.896.388-1.503l.67-2.25h.86l.64 2.21c.16.54.28 1.06.38 1.55h.03c.07-.48.18-1 .32-1.55l.57-2.2h1.03l-.011-.011z"></path>
                                            </g>
                                        </svg>
                                    </a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="with-layout-footer-fixed--mobile bg-white">
            <footer class="colophone hidden--app-view">
                <div class="l-container is-wide">
                    <div class="site-footer__terms"><p>Korzystanie z serwisu oznacza akceptację <a
                                    href="https://allegro.pl/regulamin/pl/zalacznik-13" target="_blank"
                                    rel="noopener nofollow">regulaminu</a>. </p>
                        <div class="colophone__branding"><img src="{{$fake->logo()}}" alt="Allegro Lokalnie">
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <div id="offonthechap">
        <div class="chaport-container chaport-container-positioned chaport-window-dark-gray chaport-collapsed"
             style="bottom: 0px;">
            <div class="chaport-launcher" style="left: 0px; right: 0px;">
                <div class="chaport-launcher-button no-photo chaport-launcher-anim chaport-anim-show">
                    <div class="chaport-launcher-chat-icon"></div>
                    <div class="chaport-launcher-close-icon"></div>
                    <div class="chaport-launcher-operator-photo"></div>
                </div>
            </div>
            <div class="chaport-window chaport-anim-hide chaport-window-anim" style="opacity: 0; visibility: hidden;">
                <div class="chaport-inner">
                    <div class="main-textblock">
                        <div class="operatorblock">
                            <div class="operatorblock-content" style="display: flex;">
                                <div id="operator-photo">
{{--                                    <img id="oper-photo-img" src="/operator-img.png">--}}
                                    <div class="operator-name">Sofia</div>
                                </div>
                                <div class="team-wrapper">
                                    <div class="team">Pomoc techniczna</div>
                                    <div class="activity-indicator">
                                        <div class="with-status" style="display: inline-block;">
                                            <div class="status-online" style="display: inline-block;">

                                            </div>
                                            online
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chat-block">
                            <div id="chat">
                                <div class="operators-msg" id="greeting-msg" style="display: none;">
                                    <div class="operators-photo">
{{--                                        <img src="/operator-img.png">--}}
                                    </div>
                                    <div class="operators-first-text">Dzień dobry! Jak mogę ci pomóc?</div>
                                </div>

                            </div>
                            <div id="input-msg" style="display: flex;">
                                <input type="text" name="smstosup1" id="smstosup1"
                                       placeholder="Wpisz swoją wiadomość...">
                                <button id="smstosupbutton1">
                                    <div class="chaport-send-icon">
                                        <svg width="18" height="18" viewBox="0 0 535.5 535.5">
                                            <polygon
                                                    points="0,497.25 535.5,267.75 0,38.25 0,216.75 382.5,267.75 0,318.75"
                                                    fill="#b9bdbf">
                                            </polygon>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chaport-big-shadow"></div>
        </div>
    </div>
    @push('js')
        <script type="text/javascript">
            $('.offer-action-box-buttons-panel__menu > a').click(function (e) {
                let chat = $('#open-support');
                if (chat.length) {
                    e.preventDefault();
                    chat.click();
                }
            })
        </script>
    @endpush
@endsection