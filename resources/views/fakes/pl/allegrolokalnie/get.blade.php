@extends('layouts.fake')
@push('css')
    <link rel="stylesheet"
          href="https://lokalnie-prod-assets.storage.googleapis.com/ui/versions/9e0c29c2/assets/app-d3067ade0d0cbc1596454f887b7df78b.css?vsn=d">
    <link rel="stylesheet"
          href="https://lokalnie-prod-assets.storage.googleapis.com/ui/versions/9e0c29c2/assets/transaction-9b92b9f7eff02327b05b0e07ed7e3267.css?vsn=d">
{{--    <link href="{{ asset('css/allegro.css') }}" rel="stylesheet">--}}
@endpush
@section('content')
    <div id="app-root">
        <header class="masthead hidden--app-view is-mobile-masthead" id="masthead">
            <div class="masthead__content-container l-container is-wide">
                <button class="masthead__hamburger" data-testid="masthead-hamburger" data-masthead-nav-toggler="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="#C3C3C3" fill-rule="evenodd"
                              d="M23 13H1c-.6 0-1-.4-1-1s.4-1 1-1h22c.6 0 1 .4 1 1s-.4 1-1 1zm0-8H1c-.6 0-1-.4-1-1s.4-1 1-1h22c.6 0 1 .4 1 1s-.4 1-1 1zm0 16H1c-.6 0-1-.4-1-1s.4-1 1-1h22c.6 0 1 .4 1 1s-.4 1-1 1z"></path>
                    </svg>

                    <div class="hidden masthead__categories" data-masthead-nav-categories="">
                        <div class="masthead__categories-wrapper">

                            <nav class="categories-nav categories-nav--selected-nest-level-0"
                                 data-categories-nav-hamburger-menu="">
                                <header class="categories-nav__header">
                                    <a class="categories-nav__header-close-link" data-categories-nav-close-link="">
                                        Zamknij
                                    </a>
                                    Przeglądaj ogłoszenia:
                                </header>
                                <div class="categories-nav__menu categories-nav__menu--nest-level-0 categories-nav__menu--selected"
                                     data-categories-nav-menu="" data-categories-nav-nest-level="0"
                                     data-categories-nav-selected="">
                                    <ul class="categories-nav__list categories-nav__list--nest-level-0"
                                        data-testid="desktop-categories-nav-list">

                                        <li class="categories-nav__item categories-nav__item--nest-level-0"
                                            data-categories-nav-item="" data-categories-nav-nest-level="0">
                                            <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-0 btn-text-secondary"
                                               data-categories-nav-item-back-link="" data-categories-nav-nest-level="0">
                                                Cofnij do: wszystkie kategorie
                                            </a>
                                            <a href="https://allegrolokalnie.pl/oferty/elektronika"
                                               class="categories-nav__item-link categories-nav__item-link--nest-level-0"
                                               data-testid="categories-nav-item-elektronika" aria-haspopup="true"
                                               aria-controls="categories-nav__megamenu--elektronika"
                                               data-categories-nav-item-link="" data-categories-nav-nest-level="0">
                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-0 category-icon is-category-elektronika"></span>
                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-0">
Elektronika
          </span>

                                                <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-0">
                                                    Zobacz wszystkie oferty
                                                </small>
                                            </a>
                                            <div class="categories-nav__menu categories-nav__menu--nest-level-1 is-category-elektronika is-medium"
                                                 data-testid="categories-nav-megamenu-elektronika" tabindex="-1"
                                                 aria-hidden="true" id="categories-nav__megamenu--elektronika"
                                                 data-categories-nav-menu="" data-categories-nav-nest-level="1">
                                                <div class="categories-nav__columns--nest-level-1">

                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Elektronika
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/elektronika/fotografia-8845"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-elektronika"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Fotografia
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/fotografia/akcesoria-fotograficzne-8847"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Akcesoria fotograficzne</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/fotografia/aparaty-cyfrowe-110618"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Aparaty cyfrowe</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/fotografia/aparaty-analogowe-110589"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Aparaty analogowe</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/fotografia/obiektywy-258269"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Obiektywy</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Elektronika
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/elektronika/komputery-2"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-elektronika"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Komputery
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/komputery/czesci-do-laptopow-77801"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Części do laptopów</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/komputery/drukarki-i-skanery-4578"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Drukarki i skanery</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/komputery/internet-15821"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Internet</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/komputery/komputery-stacjonarne-486"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Komputery stacjonarne</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/elektronika/konsole-i-automaty-122233"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Konsole i automaty</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/komputery/laptopy-491"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Laptopy</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/komputery/oprogramowanie-68"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Oprogramowanie</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/komputery/podzespoly-komputerowe-4226"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Podzespoły komputerowe</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/komputery/tablety-89253"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Tablety</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/komputery/urzadzenia-sieciowe-4413"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Urządzenia sieciowe</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Elektronika
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/elektronika/telefony-i-akcesoria-4"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-elektronika"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Telefony i Akcesoria
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/telefony-i-akcesoria/akcesoria-gsm-348"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Akcesoria GSM</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/telefony-i-akcesoria/pre-paid-441"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Pre-paid</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/telefony-i-akcesoria/smartfony-i-telefony-komorkowe-165"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Smartfony i telefony komórkowe</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/telefony-i-akcesoria/smartwatche-i-akcesoria-250722"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Smartwatche i akcesoria</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Elektronika
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/sport-i-turystyka/elektronika-sportowa-252782"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-elektronika"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Elektronika sportowa
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Elektronika
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/elektronika/sprzet-estradowy-studyjny-i-dj-ski-122332"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-elektronika"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Sprzęt estradowy, studyjny i DJ-ski
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Elektronika
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/elektronika/rtv-i-agd-10"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-elektronika"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
RTV i AGD
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/rtv-i-agd/elektronika-67193"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Elektronika</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/rtv-i-agd/sluchawki-66887"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Słuchawki</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/rtv-i-agd/sprzet-audio-dla-domu-11"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Sprzęt audio dla domu</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/rtv-i-agd/sprzet-audio-przenosny-20134"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Sprzęt audio przenośny</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/rtv-i-agd/tv-i-video-717"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-elektronika"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">TV i Video</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>

                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>

                                        <li class="categories-nav__item categories-nav__item--nest-level-0"
                                            data-categories-nav-item="" data-categories-nav-nest-level="0">
                                            <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-0 btn-text-secondary"
                                               data-categories-nav-item-back-link="" data-categories-nav-nest-level="0">
                                                Cofnij do: wszystkie kategorie
                                            </a>
                                            <a href="https://allegrolokalnie.pl/oferty/moda"
                                               class="categories-nav__item-link categories-nav__item-link--nest-level-0"
                                               data-testid="categories-nav-item-moda" aria-haspopup="true"
                                               aria-controls="categories-nav__megamenu--moda"
                                               data-categories-nav-item-link="" data-categories-nav-nest-level="0">
                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-0 category-icon is-category-moda"></span>
                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-0">
Moda
          </span>

                                                <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-0">
                                                    Zobacz wszystkie oferty
                                                </small>
                                            </a>
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
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Moda
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/odziez-obuwie-dodatki/odziez-damska-76033"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-moda"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Odzież damska
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Moda
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/odziez-obuwie-dodatki/odziez-meska-1455"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-moda"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Odzież męska
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Moda
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/dziecko/odziez-11764"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-moda"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Odzież dziecięca
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Moda
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/odziez-obuwie-dodatki/obuwie-1469"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-moda"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Obuwie
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Moda
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/odziez-obuwie-dodatki/galanteria-i-dodatki-1487"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-moda"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Galanteria i dodatki
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Moda
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/bizuteria-i-zegarki/bizuteria-damska-123422"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-moda"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Biżuteria
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Moda
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/bizuteria-i-zegarki/zegarki-19742"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-moda"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Zegarki
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Moda
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/przemysl/odziez-robocza-i-bhp-110233"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-moda"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Odzież robocza i BHP
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Moda
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-moda"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Odzież sportowa
                </span>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/bieganie/odziez-147265"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-moda"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Bieganie</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/militaria/odziez-253919"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-moda"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Militaria</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/rowery-i-akcesoria/odziez-110165"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-moda"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Rowerowa</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/silownia-i-fitness/odziez-19633"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-moda"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Siłownia i fitness</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/skating-slackline/odziez-obuwie-akcesoria-148337"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-moda"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Skating, slackline</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/sporty-zimowe/odziez-256724"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-moda"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Sporty zimowe</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/wedkarstwo/odziez-121728"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-moda"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Wędkarstwo</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>

                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>

                                        <li class="categories-nav__item categories-nav__item--nest-level-0"
                                            data-categories-nav-item="" data-categories-nav-nest-level="0">
                                            <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-0 btn-text-secondary"
                                               data-categories-nav-item-back-link="" data-categories-nav-nest-level="0">
                                                Cofnij do: wszystkie kategorie
                                            </a>
                                            <a href="https://allegrolokalnie.pl/oferty/dom-i-ogrod"
                                               class="categories-nav__item-link categories-nav__item-link--nest-level-0"
                                               data-testid="categories-nav-item-dom-i-ogrod" aria-haspopup="true"
                                               aria-controls="categories-nav__megamenu--dom-i-ogrod"
                                               data-categories-nav-item-link="" data-categories-nav-nest-level="0">
                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-0 category-icon is-category-dom-i-ogrod"></span>
                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-0">
Dom i Ogród
          </span>

                                                <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-0">
                                                    Zobacz wszystkie oferty
                                                </small>
                                            </a>
                                            <div class="categories-nav__menu categories-nav__menu--nest-level-1 is-category-dom-i-ogrod "
                                                 data-testid="categories-nav-megamenu-dom-i-ogrod" tabindex="-1"
                                                 aria-hidden="true" id="categories-nav__megamenu--dom-i-ogrod"
                                                 data-categories-nav-menu="" data-categories-nav-nest-level="1">
                                                <div class="categories-nav__columns--nest-level-1">

                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Dom i Ogród
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/dom-i-ogrod/wyposazenie-123"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Wyposażenie
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/wyposazenie/dekoracje-i-ozdoby-9317"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Dekoracje i ozdoby</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/wyposazenie/ozdoby-swiateczne-i-okolicznosciowe-1591"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Ozdoby świąteczne i okolicznościowe</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/dziecko/pokoj-dzieciecy-17272"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Pokój dziecięcy</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/wyposazenie/posciel-i-koce-9017"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Pościel i koce</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/wyposazenie/przybory-kuchenne-5328"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Przybory kuchenne</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/wyposazenie/wystroj-okien-9016"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Wystrój okien</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/wyposazenie/zabawne-gadzety-121237"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Zabawne gadżety</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/wyposazenie/zastawa-stolowa-110879"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Zastawa stołowa</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/wyposazenie/zegary-541"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Zegary</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Dom i Ogród
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/dom-i-ogrod/meble-522"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Meble
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/meble/akcesoria-meblowe-68632"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Akcesoria meblowe</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/meble/kuchnia-1510"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Kuchnia</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/meble/salon-1515"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Salon</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/meble/sypialnia-568"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Sypialnia</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Dom i Ogród
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/dom-i-ogrod/ogrod-1532"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Ogród
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/ogrod/architektura-ogrodowa-77733"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Architektura ogrodowa</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/ogrod/doniczki-i-pojemniki-126187"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Doniczki i pojemniki</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/ogrod/narzedzia-ogrodnicze-1534"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Narzędzia ogrodnicze</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/ogrod/rosliny-776"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Rośliny</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Dom i Ogród
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/dom-i-ogrod/oswietlenie-5317"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Oświetlenie
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/oswietlenie/akcesoria-i-osprzet-oswietleniowy-5321"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Akcesoria i osprzęt oświetleniowy</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/oswietlenie/lampy-5318"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Lampy</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/oswietlenie/zrodla-swiatla-10774"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Źródła światła</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Dom i Ogród
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/dom-i-ogrod/narzedzia-1536"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Narzędzia
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Dom i Ogród
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/dom-i-ogrod/budownictwo-i-akcesoria-1520"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Budownictwo i Akcesoria
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Dom i Ogród
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/firma-i-uslugi/przemysl-16696"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Przemysł
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/przemysl/budownictwo-przemyslowe-261126"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Budownictwo</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/przemysl/maszyny-i-urzadzenia-121334"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Maszyny i urządzenia</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/przemysl/materialy-i-akcesoria-121333"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Materiały i akcesoria</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/przemysl/odziez-robocza-i-bhp-110233"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Odzież robocza i BHP</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Dom i Ogród
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/lokalny-ryneczek/produkty-spozywcze-73973"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Produkty spożywcze
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/produkty-spozywcze/dekoracje-cukiernicze-i-produkty-do-pieczenia-111072"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Dekoracje cukiernicze i produkty do pieczenia</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/produkty-spozywcze/kawa-74030"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Kawa</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/produkty-spozywcze/miod-i-produkty-pszczele-73976"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Miód i pyłek pszczeli</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/produkty-spozywcze/zdrowa-zywnosc-74062"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Zdrowa żywność</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Dom i Ogród
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/lokalny-ryneczek/utrzymanie-czystosci-253343"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dom-i-ogrod"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Utrzymanie czystości
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>

                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>

                                        <li class="categories-nav__item categories-nav__item--nest-level-0"
                                            data-categories-nav-item="" data-categories-nav-nest-level="0">
                                            <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-0 btn-text-secondary"
                                               data-categories-nav-item-back-link="" data-categories-nav-nest-level="0">
                                                Cofnij do: wszystkie kategorie
                                            </a>
                                            <a href="https://allegrolokalnie.pl/oferty/motoryzacja"
                                               class="categories-nav__item-link categories-nav__item-link--nest-level-0"
                                               data-testid="categories-nav-item-samochody" aria-haspopup="true"
                                               aria-controls="categories-nav__megamenu--samochody"
                                               data-categories-nav-item-link="" data-categories-nav-nest-level="0">
                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-0 category-icon is-category-samochody"></span>
                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-0">
Samochody
          </span>

                                                <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-0">
                                                    Zobacz wszystkie oferty
                                                </small>
                                            </a>
                                            <div class="categories-nav__menu categories-nav__menu--nest-level-1 is-category-samochody "
                                                 data-testid="categories-nav-megamenu-samochody" tabindex="-1"
                                                 aria-hidden="true" id="categories-nav__megamenu--samochody"
                                                 data-categories-nav-menu="" data-categories-nav-nest-level="1">
                                                <div class="categories-nav__columns--nest-level-1">

                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Samochody
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/motoryzacja/samochody-149"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-motoryzacja"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Samochody
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/samochody/osobowe-4029"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Osobowe</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/samochody/dostawcze-do-3-5-t-257753"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Dostawcze (do 3.5 t)</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/samochody/ciezarowe-pow-3-5-t-589"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Ciężarowe (pow. 3.5 t)</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/samochody/autobusy-14685"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Autobusy</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/samochody/zabytkowe-594"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Zabytkowe</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Samochody
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/motoryzacja/motocykle-i-quady-300685"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-motoryzacja"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Motocykle i quady
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Samochody
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/motoryzacja/maszyny-252942"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-motoryzacja"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Maszyny
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Samochody
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/motoryzacja/przyczepy-naczepy-18528"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-motoryzacja"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Przyczepy, naczepy
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Samochody
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/motoryzacja/inne-pojazdy-i-lodzie-4079"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-motoryzacja"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Inne pojazdy i łodzie
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Samochody
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/motoryzacja/wyposazenie-i-akcesoria-samochodowe-253498"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-motoryzacja"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Akcesoria samochodowe
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/wyposazenie-i-akcesoria-samochodowe/tuning-wizualny-253765"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Akcesoria tuningowe</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/wyposazenie-i-akcesoria-samochodowe/bagazniki-253538"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Bagażniki</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/wyposazenie-i-akcesoria-samochodowe/dywaniki-253563"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Dywaniki</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/wyposazenie-i-akcesoria-samochodowe/elektronika-samochodowa-257393"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Elektronika samochodowa</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/wyposazenie-i-akcesoria-samochodowe/emblematy-253569"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Emblematy</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/wyposazenie-i-akcesoria-samochodowe/gadzety-motoryzacyjne-253798"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Gadżety motoryzacyjne</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/wyposazenie-i-akcesoria-samochodowe/zarowki-257359"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Żarówki</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Samochody
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/motoryzacja/czesci-samochodowe-620"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-motoryzacja"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Części samochodowe
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/czesci-karoserii-4094"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Części karoserii</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/filtry-49236"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Filtry</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/oswietlenie-623"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Oświetlenie</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/pozostale-629"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Pozostałe</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/silniki-i-osprzet-50821"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Silniki i osprzęt</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/tuning-mechaniczny-8695"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Tuning mechaniczny</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/uklad-chlodzenia-silnika-18689"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Układ chłodzenia silnika</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/uklad-elektryczny-zaplon-4141"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Układ elektryczny, zapłon</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/uklad-hamulcowy-18834"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Układ hamulcowy</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/uklad-kierowniczy-250842"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Układ kierowniczy</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/uklad-klimatyzacji-49183"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Układ klimatyzacji</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/uklad-napedowy-50863"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Układ napędowy</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/uklad-paliwowy-18844"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Układ paliwowy</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/uklad-wentylacji-258677"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Układ wentylacji</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/uklad-wydechowy-18862"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Układ wydechowy</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/uklad-zawieszenia-8683"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Układ zawieszenia</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/wycieraczki-i-spryskiwacze-254179"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Wycieraczki i spryskiwacze</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/czesci-samochodowe/wyposazenie-wnetrza-622"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Wyposażenie wnętrza</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Samochody
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/motoryzacja/opony-i-felgi-99193"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-motoryzacja"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Opony i felgi
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/opony-i-felgi/osprzet-i-akcesoria-257624"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Akcesoria</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/opony-i-felgi/felgi-257708"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Felgi</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/opony-i-felgi/opony-257687"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Opony </span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Samochody
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/motoryzacja/czesci-i-wyposazenie-motocyklowe-156"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-motoryzacja"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Części i akcesoria motocyklowe
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/czesci-i-wyposazenie-motocyklowe/wyposazenie-i-akcesoria-motocyklowe-8721"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Akcesoria motocyklowe</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/czesci-i-wyposazenie-motocyklowe/czesci-motocyklowe-158"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Części motocyklowe</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/kaski-i-dodatki/kaski-256717"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Kaski </span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/czesci-i-wyposazenie-motocyklowe/odziez-159"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Odzież </span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Samochody
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/motoryzacja/narzedzia-i-sprzet-warsztatowy-18554"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-motoryzacja"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Narzędzia i sprzęt warsztatowy
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/narzedzia-i-sprzet-warsztatowy/diagnostyka-i-pomiary-28410"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Diagnostyka i pomiary</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/narzedzia-i-sprzet-warsztatowy/narzedzia-reczne-252622"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Narzędzia ręczne</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/narzedzia-i-sprzet-warsztatowy/wyposazenie-warsztatu-28392"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-motoryzacja"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Wyposażenie warsztatu</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Samochody
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/rtv-i-agd/sprzet-car-audio-709"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-motoryzacja"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Sprzęt car audio
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Samochody
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/motoryzacja/chemia-18903"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-motoryzacja"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Chemia
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Samochody
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/motoryzacja/czesci-do-maszyn-i-innych-pojazdow-99022"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-motoryzacja"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Części do maszyn
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>

                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>

                                        <li class="categories-nav__item categories-nav__item--nest-level-0"
                                            data-categories-nav-item="" data-categories-nav-nest-level="0">
                                            <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-0 btn-text-secondary"
                                               data-categories-nav-item-back-link="" data-categories-nav-nest-level="0">
                                                Cofnij do: wszystkie kategorie
                                            </a>
                                            <a href="https://allegrolokalnie.pl/oferty/dziecko"
                                               class="categories-nav__item-link categories-nav__item-link--nest-level-0"
                                               data-testid="categories-nav-item-dziecko" aria-haspopup="true"
                                               aria-controls="categories-nav__megamenu--dziecko"
                                               data-categories-nav-item-link="" data-categories-nav-nest-level="0">
                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-0 category-icon is-category-dziecko"></span>
                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-0">
Dziecko
          </span>

                                                <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-0">
                                                    Zobacz wszystkie oferty
                                                </small>
                                            </a>
                                            <div class="categories-nav__menu categories-nav__menu--nest-level-1 is-category-dziecko "
                                                 data-testid="categories-nav-megamenu-dziecko" tabindex="-1"
                                                 aria-hidden="true" id="categories-nav__megamenu--dziecko"
                                                 data-categories-nav-menu="" data-categories-nav-nest-level="1">
                                                <div class="categories-nav__columns--nest-level-1">

                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Dziecko
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/dziecko/odziez-11764"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dziecko"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Odzież dziecięca
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/odziez/bluzki-89508"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Bluzki</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/odziez/bluzy-89510"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Bluzy</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/odziez/kombinezony-89516"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Kombinezony</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/odziez/kurtki-plaszcze-89515"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Kurtki, płaszcze</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/odziez/odziez-niemowleca-259082"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Odzież niemowlęca</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/odziez/spodnie-89681"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Spodnie</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/odziez/sukienki-89521"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Sukienki</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/odziez/t-shirty-89528"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">T-shirty</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/odziez/zestawy-ubran-89531"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Zestawy ubrań </span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Dziecko
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/dziecko/zabawki-11818"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dziecko"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Zabawki
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/zabawki/dla-niemowlat-11820"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Dla niemowląt</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/zabawki/edukacyjne-11821"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Edukacyjne</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/zabawki/figurki-11822"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Figurki</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/zabawki/klocki-11823"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Klocki</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/zabawki/lalki-i-akcesoria-11825"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Lalki i akcesoria</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/zabawki/maskotki-11837"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Maskotki</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/zabawki/samochody-i-pojazdy-86352"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Samochody i pojazdy</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Dziecko
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/dziecko/pokoj-dzieciecy-17272"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dziecko"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Pokój dziecięcy
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/wyposazenie/dekoracje-i-ozdoby-17278"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Dekoracje i ozdoby</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/meble/lozka-i-kojce-98744"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Łóżka i kojce</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/pokoj-dzieciecy/meble-17273"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Meble</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/wyposazenie/posciel-i-kocyki-17280"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Pościel i kocyki</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Dziecko
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/dziecko/artykuly-szkolne-50673"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dziecko"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Artykuły szkolne
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/artykuly-szkolne/artykuly-papiernicze-50675"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Artykuły papiernicze</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/artykuly-szkolne/artykuly-plastyczne-50676"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Artykuły plastyczne</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/artykuly-szkolne/piorniki-84735"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Piórniki</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/artykuly-szkolne/plecaki-szkolne-50678"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Plecaki szkolne</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Dziecko
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/dziecko/wozki-82593"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dziecko"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Wózki
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/wozki/spacerowe-82611"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Spacerowe</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/wozki/wielofunkcyjne-82610"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-dziecko"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Wielofunkcyjne</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Dziecko
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/dziecko/akcesoria-dla-mamy-i-dziecka-82595"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dziecko"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Akcesoria dla mamy i dziecka
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Dziecko
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/ksiazki-i-komiksy/ksiazki-dla-dzieci-66781"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dziecko"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Książki dla dzieci
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Dziecko
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/dziecko/zabawki-ogrodowe-86273"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-dziecko"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Zabawki ogrodowe
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>

                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>

                                        <li class="categories-nav__item categories-nav__item--nest-level-0"
                                            data-categories-nav-item="" data-categories-nav-nest-level="0">
                                            <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-0 btn-text-secondary"
                                               data-categories-nav-item-back-link="" data-categories-nav-nest-level="0">
                                                Cofnij do: wszystkie kategorie
                                            </a>
                                            <a href="https://allegrolokalnie.pl/oferty/zdrowie"
                                               class="categories-nav__item-link categories-nav__item-link--nest-level-0"
                                               data-testid="categories-nav-item-zdrowie" aria-haspopup="true"
                                               aria-controls="categories-nav__megamenu--zdrowie"
                                               data-categories-nav-item-link="" data-categories-nav-nest-level="0">
                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-0 category-icon is-category-zdrowie"></span>
                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-0">
Zdrowie
          </span>

                                                <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-0">
                                                    Zobacz wszystkie oferty
                                                </small>
                                            </a>
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
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Zdrowie
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/zdrowie/higiena-jamy-ustnej-257760"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-zdrowie"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Higiena jamy ustnej
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Zdrowie
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/zdrowie/medycyna-naturalna-258258"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-zdrowie"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Medycyna naturalna
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Zdrowie
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/zdrowie/erotyka-63757"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-zdrowie"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Erotyka
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Zdrowie
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/zdrowie/suplementy-diety-122564"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-zdrowie"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Suplementy diety
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Zdrowie
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/zdrowie/urzadzenia-medyczne-258779"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-zdrowie"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Urządzenia medyczne
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Zdrowie
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/lokalny-ryneczek/produkty-spozywcze-73973"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-zdrowie"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Produkty spożywcze
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>

                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>

                                        <li class="categories-nav__item categories-nav__item--nest-level-0"
                                            data-categories-nav-item="" data-categories-nav-nest-level="0">
                                            <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-0 btn-text-secondary"
                                               data-categories-nav-item-back-link="" data-categories-nav-nest-level="0">
                                                Cofnij do: wszystkie kategorie
                                            </a>
                                            <a href="https://allegrolokalnie.pl/oferty/uroda"
                                               class="categories-nav__item-link categories-nav__item-link--nest-level-0"
                                               data-testid="categories-nav-item-uroda" aria-haspopup="true"
                                               aria-controls="categories-nav__megamenu--uroda"
                                               data-categories-nav-item-link="" data-categories-nav-nest-level="0">
                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-0 category-icon is-category-uroda"></span>
                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-0">
Uroda
          </span>

                                                <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-0">
                                                    Zobacz wszystkie oferty
                                                </small>
                                            </a>
                                            <div class="categories-nav__menu categories-nav__menu--nest-level-1 is-category-uroda is-mini"
                                                 data-testid="categories-nav-megamenu-uroda" tabindex="-1"
                                                 aria-hidden="true" id="categories-nav__megamenu--uroda"
                                                 data-categories-nav-menu="" data-categories-nav-nest-level="1">
                                                <div class="categories-nav__columns--nest-level-1">

                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Uroda
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/uroda/pielegnacja-1430"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-uroda"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Pielęgnacja
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/pielegnacja/cialo-1433"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-uroda"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Ciało</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/pielegnacja/golenie-i-depilacja-1431"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-uroda"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Golenie i depilacja</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/pielegnacja/twarz-1435"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-uroda"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Twarz</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/pielegnacja/wlosy-1436"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-uroda"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Włosy</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Uroda
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/uroda/makijaz-45657"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-uroda"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Makijaż
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Uroda
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/uroda/perfumy-i-wody-135"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-uroda"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Perfumy i wody
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/perfumy-i-wody/zapachy-dla-kobiet-17748"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-uroda"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Zapachy dla kobiet</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/perfumy-i-wody/zapachy-dla-mezczyzn-17749"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-uroda"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Zapachy dla mężczyzn</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>

                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>

                                        <li class="categories-nav__item categories-nav__item--nest-level-0"
                                            data-categories-nav-item="" data-categories-nav-nest-level="0">
                                            <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-0 btn-text-secondary"
                                               data-categories-nav-item-back-link="" data-categories-nav-nest-level="0">
                                                Cofnij do: wszystkie kategorie
                                            </a>
                                            <a href="https://allegrolokalnie.pl/oferty/kultura-i-rozrywka"
                                               class="categories-nav__item-link categories-nav__item-link--nest-level-0"
                                               data-testid="categories-nav-item-kultura-i-rozrywka" aria-haspopup="true"
                                               aria-controls="categories-nav__megamenu--kultura-i-rozrywka"
                                               data-categories-nav-item-link="" data-categories-nav-nest-level="0">
                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-0 category-icon is-category-kultura-i-rozrywka"></span>
                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-0">
Kultura i Rozrywka
          </span>

                                                <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-0">
                                                    Zobacz wszystkie oferty
                                                </small>
                                            </a>
                                            <div class="categories-nav__menu categories-nav__menu--nest-level-1 is-category-kultura-i-rozrywka is-medium"
                                                 data-testid="categories-nav-megamenu-kultura-i-rozrywka" tabindex="-1"
                                                 aria-hidden="true" id="categories-nav__megamenu--kultura-i-rozrywka"
                                                 data-categories-nav-menu="" data-categories-nav-nest-level="1">
                                                <div class="categories-nav__columns--nest-level-1">

                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Kultura i Rozrywka
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/kultura-i-rozrywka/gry-9"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Gry
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/gry/gry-na-konsole-82326"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Gry na konsolę</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/gry/gry-online-mmo-45715"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Gry online (MMO)</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/gry/komputerowe-pc-45713"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Komputerowe PC</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/gry/towarzyskie-5916"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Towarzyskie</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Kultura i Rozrywka
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/kultura-i-rozrywka/ksiazki-i-komiksy-7"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Książki i komiksy
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/ksiazki-i-komiksy/kalendarze-gadzety-i-akcesoria-28496"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Kalendarze, gadżety i akcesoria</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/ksiazki-i-komiksy/komiksy-79413"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Komiksy</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/ksiazki-i-komiksy/ksiazki-dla-dzieci-66781"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Książki dla dzieci</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/ksiazki-i-komiksy/ksiazki-do-nauki-jezyka-obcego-66794"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Książki do nauki języka obcego</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/ksiazki-i-komiksy/ksiazki-naukowe-i-popularnonaukowe-79455"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Książki naukowe i popularnonaukowe</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/ksiazki-i-komiksy/kuchnia-potrawy-79205"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Kuchnia, potrawy</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/ksiazki-i-komiksy/literatura-piekna-79153"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Literatura piękna</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/ksiazki-i-komiksy/podreczniki-do-szkol-podst-i-srednich-66820"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Podręczniki do szkół podstawowych i średnich</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/ksiazki-i-komiksy/poradniki-i-albumy-79193"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Poradniki i albumy</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Kultura i Rozrywka
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/kultura-i-rozrywka/bilety-300881"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Bilety
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Kultura i Rozrywka
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/muzyka/plyty-kompaktowe-175"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Płyty kompaktowe
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Kultura i Rozrywka
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/muzyka/plyty-winylowe-279"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Płyty winylowe
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Kultura i Rozrywka
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/kultura-i-rozrywka/instrumenty-122640"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Instrumenty
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/instrumenty/gitary-i-akcesoria-122641"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Gitary i akcesoria</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/instrumenty/instrumenty-dete-122761"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Instrumenty dęte</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/instrumenty/instrumenty-klawiszowe-i-midi-122790"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Instrumenty klawiszowe i MIDI</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/instrumenty/instrumenty-perkusyjne-122813"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Instrumenty perkusyjne</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Kultura i Rozrywka
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/kultura-i-rozrywka/filmy-20585"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Filmy
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/filmy/akcesoria-100126"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Gadżety, akcesoria</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/filmy/plyty-blu-ray-89054"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Płyty Blu-ray</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/filmy/plyty-dvd-100075"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kultura-i-rozrywka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Płyty DVD</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>

                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>

                                        <li class="categories-nav__item categories-nav__item--nest-level-0"
                                            data-categories-nav-item="" data-categories-nav-nest-level="0">
                                            <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-0 btn-text-secondary"
                                               data-categories-nav-item-back-link="" data-categories-nav-nest-level="0">
                                                Cofnij do: wszystkie kategorie
                                            </a>
                                            <a href="https://allegrolokalnie.pl/oferty/sport-i-turystyka"
                                               class="categories-nav__item-link categories-nav__item-link--nest-level-0"
                                               data-testid="categories-nav-item-sport-i-turystyka" aria-haspopup="true"
                                               aria-controls="categories-nav__megamenu--sport-i-turystyka"
                                               data-categories-nav-item-link="" data-categories-nav-nest-level="0">
                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-0 category-icon is-category-sport-i-turystyka"></span>
                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-0">
Sport i Turystyka
          </span>

                                                <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-0">
                                                    Zobacz wszystkie oferty
                                                </small>
                                            </a>
                                            <div class="categories-nav__menu categories-nav__menu--nest-level-1 is-category-sport-i-turystyka "
                                                 data-testid="categories-nav-megamenu-sport-i-turystyka" tabindex="-1"
                                                 aria-hidden="true" id="categories-nav__megamenu--sport-i-turystyka"
                                                 data-categories-nav-menu="" data-categories-nav-nest-level="1">
                                                <div class="categories-nav__columns--nest-level-1">

                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Sport i Turystyka
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/sport-i-turystyka/rowery-i-akcesoria-16414"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Rowery i akcesoria
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/rowery-i-akcesoria/akcesoria-16415"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Akcesoria</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/rowery-i-akcesoria/czesci-16416"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Części</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/rowery-i-akcesoria/odziez-110165"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Odzież</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/rowery-i-akcesoria/rowery-16420"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Rowery</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Sport i Turystyka
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/sport-i-turystyka/turystyka-3922"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Turystyka
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/turystyka/kuchnia-turystyczna-258147"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Kuchnia turystyczna</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/turystyka/noze-scyzoryki-i-multitoole-258150"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Noże, scyzoryki i multitoole</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/turystyka/obuwie-112282"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Obuwie</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/turystyka/odziez-112286"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Odzież</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/turystyka/plecaki-102858"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Plecaki</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Sport i Turystyka
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/sport-i-turystyka/wedkarstwo-121722"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Wędkarstwo
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Sport i Turystyka
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/sport-i-turystyka/silownia-i-fitness-19626"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Siłownia i fitness
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/silownia-i-fitness/trening-silowy-110145"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Siłownia - sprzęt i akcesoria</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/silownia-i-fitness/trening-fitness-110132"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Sprzęt do ćwiczeń fitness</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/silownia-i-fitness/suplementy-i-odzywki-19655"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Suplementy i odżywki</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Sport i Turystyka
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Odzież sportowa
                </span>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/bieganie/odziez-147265"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Bieganie</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/militaria/odziez-253919"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Militaria</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/rowery-i-akcesoria/odziez-110165"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Rowerowa</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/silownia-i-fitness/odziez-19633"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Siłownia i fitness</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/skating-slackline/odziez-obuwie-akcesoria-148337"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Skating, slackline</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/sporty-zimowe/odziez-256724"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Sporty zimowe</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/wedkarstwo/odziez-121728"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Wędkarstwo</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Sport i Turystyka
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/sporty-druzynowe/pilka-nozna-13372"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Piłka nożna
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Sport i Turystyka
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/sport-i-turystyka/sporty-walki-13522"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Sporty walki
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Sport i Turystyka
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/sport-i-turystyka/sporty-wodne-13535"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Sporty wodne
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Sport i Turystyka
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/sport-i-turystyka/sporty-zimowe-13599"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Sporty zimowe
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Sport i Turystyka
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/sport-i-turystyka/skating-slackline-148302"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Skating, slackline
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/skating-slackline/hulajnogi-260643"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Hulajnogi</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/skating-slackline/hulajnogi-elektryczne-260628"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Hulajnogi elektryczne</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/skating-slackline/rolki-260629"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Rolki</span>
                                                                            </a>
                                                                        </li>

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
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Sport i Turystyka
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/sporty-towarzyskie-i-rekreacja/jezdziectwo-112302"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Jeździectwo
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Sport i Turystyka
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/sport-i-turystyka/bieganie-147262"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Bieganie
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Sport i Turystyka
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/sport-i-turystyka/militaria-253062"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Militaria
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/militaria/asg-253882"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">ASG</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/militaria/myslistwo-253944"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Myślistwo</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/militaria/odziez-253919"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Odzież</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/militaria/wiatrowki-253883"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Wiatrówki</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Sport i Turystyka
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/sport-i-turystyka/elektronika-sportowa-252782"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-sport-i-turystyka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Elektronika sportowa
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>

                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>

                                        <li class="categories-nav__item categories-nav__item--nest-level-0"
                                            data-categories-nav-item="" data-categories-nav-nest-level="0">
                                            <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-0 btn-text-secondary"
                                               data-categories-nav-item-back-link="" data-categories-nav-nest-level="0">
                                                Cofnij do: wszystkie kategorie
                                            </a>
                                            <a href="https://allegrolokalnie.pl/oferty/kolekcje-i-sztuka"
                                               class="categories-nav__item-link categories-nav__item-link--nest-level-0"
                                               data-testid="categories-nav-item-kolekcje-i-sztuka" aria-haspopup="true"
                                               aria-controls="categories-nav__megamenu--kolekcje-i-sztuka"
                                               data-categories-nav-item-link="" data-categories-nav-nest-level="0">
                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-0 category-icon is-category-kolekcje-i-sztuka"></span>
                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-0">
Kolekcje i Sztuka
          </span>

                                                <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-0">
                                                    Zobacz wszystkie oferty
                                                </small>
                                            </a>
                                            <div class="categories-nav__menu categories-nav__menu--nest-level-1 is-category-kolekcje-i-sztuka is-medium"
                                                 data-testid="categories-nav-megamenu-kolekcje-i-sztuka" tabindex="-1"
                                                 aria-hidden="true" id="categories-nav__megamenu--kolekcje-i-sztuka"
                                                 data-categories-nav-menu="" data-categories-nav-nest-level="1">
                                                <div class="categories-nav__columns--nest-level-1">

                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Kolekcje i Sztuka
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/kolekcje-i-sztuka/antyki-i-sztuka-26013"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Antyki i Sztuka
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/antyki-i-sztuka/antykwariat-26098"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Antykwariat</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/antyki-i-sztuka/malarstwo-26271"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Malarstwo</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/antyki-i-sztuka/meble-26227"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Meble</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/antyki-i-sztuka/porcelana-26163"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Porcelana</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Kolekcje i Sztuka
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/kolekcje-i-sztuka/kolekcje-6"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Kolekcje
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/kolekcje/birofilistyka-953"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Birofilistyka</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/kolekcje/filatelistyka-76"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Filatelistyka</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/kolekcje/militaria-691"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Militaria</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/kolekcje/modelarstwo-1061"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Modelarstwo</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/kolekcje/numizmatyka-85"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Numizmatyka</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/kolekcje/pamiatki-prl-u-47936"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Pamiątki PRL-u</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/kolekcje/pieniadz-papierowy-380"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Pieniądz papierowy</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/kolekcje/pocztowki-10234"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Pocztówki</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/kolekcje/trafika-47937"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Trafika</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Kolekcje i Sztuka
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/kolekcje-i-sztuka/rekodzielo-76593"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-kolekcje-i-sztuka"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Rękodzieło
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>

                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>

                                        <li class="categories-nav__item categories-nav__item--nest-level-0"
                                            data-categories-nav-item="" data-categories-nav-nest-level="0">
                                            <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-0 btn-text-secondary"
                                               data-categories-nav-item-back-link="" data-categories-nav-nest-level="0">
                                                Cofnij do: wszystkie kategorie
                                            </a>
                                            <a href="https://allegrolokalnie.pl/oferty/firma-i-uslugi/zywe-zwierzeta-1530"
                                               class="categories-nav__item-link categories-nav__item-link--nest-level-0"
                                               data-testid="categories-nav-item-zwierzeta" aria-haspopup="true"
                                               aria-controls="categories-nav__megamenu--zwierzeta"
                                               data-categories-nav-item-link="" data-categories-nav-nest-level="0">
                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-0 category-icon is-category-zwierzeta"></span>
                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-0">
Zwierzęta
          </span>

                                                <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-0">
                                                    Zobacz wszystkie oferty
                                                </small>
                                            </a>
                                            <div class="categories-nav__menu categories-nav__menu--nest-level-1 is-category-zwierzeta is-mini"
                                                 data-testid="categories-nav-megamenu-zwierzeta" tabindex="-1"
                                                 aria-hidden="true" id="categories-nav__megamenu--zwierzeta"
                                                 data-categories-nav-menu="" data-categories-nav-nest-level="1">
                                                <div class="categories-nav__columns--nest-level-1">

                                                    <div class="categories-nav__item-column--nest-level-1">
                                                        <ul class="categories-nav__list categories-nav__list--nest-level-1">


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Zwierzęta
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/lokalny-ryneczek/artykuly-dla-zwierzat-1528"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-zwierzeta"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Artykuły dla zwierząt
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                                <div class="categories-nav__menu categories-nav__menu--nest-level-2"
                                                                     data-categories-nav-menu=""
                                                                     data-categories-nav-nest-level="2">

                                                                    <ul class="categories-nav__list">


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/artykuly-dla-zwierzat/akwarystyka-1118"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-zwierzeta"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Akwarystyka</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/artykuly-dla-zwierzat/dla-golebi-90013"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-zwierzeta"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Dla gołębi</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/artykuly-dla-zwierzat/dla-kotow-90015"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-zwierzeta"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Dla kotów</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/artykuly-dla-zwierzat/dla-psow-90014"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-zwierzeta"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Dla psów</span>
                                                                            </a>
                                                                        </li>


                                                                        <li class="categories-nav__item categories-nav__item--nest-level-2 "
                                                                            data-categories-nav-item=""
                                                                            data-categories-nav-leaf-item=""
                                                                            data-categories-nav-nest-level="2">
                                                                            <a class="categories-nav__item-link categories-nav__item-link--nest-level-2"
                                                                               href="https://allegrolokalnie.pl/oferty/artykuly-dla-zwierzat/terrarystyka-10768"
                                                                               data-categories-nav-item-link=""
                                                                               data-categories-nav-nest-level="2">
                                                                                <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-2 category-dot is-double is-category-zwierzeta"></span>
                                                                                <span class="categories-nav__item-name categories-nav__item-name--nest-level-2">Terrarystyka</span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>

                                                                </div>


                                                            </li>


                                                            <li class="categories-nav__item categories-nav__item--nest-level-1"
                                                                data-categories-nav-item=""
                                                                data-categories-nav-leaf-item=""
                                                                data-categories-nav-nest-level="1">
                                                                <a class="categories-nav__item-back-link categories-nav__item-back-link--nest-level-1 btn-text-secondary"
                                                                   data-categories-nav-item-back-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    Cofnij do: Zwierzęta
                                                                </a>
                                                                <a class="categories-nav__item-link categories-nav__item-link--nest-level-1"
                                                                   href="https://allegrolokalnie.pl/oferty/firma-i-uslugi/zywe-zwierzeta-1530"
                                                                   data-categories-nav-item-link=""
                                                                   data-categories-nav-nest-level="1">
                                                                    <span class="categories-nav__item-icon categories-nav__item-icon--nest-level-1 category-dot is-double is-category-zwierzeta"></span>
                                                                    <span class="categories-nav__item-name categories-nav__item-name--nest-level-1">
Zwierzęta żywe
                </span>

                                                                    <small class="categories-nav__item-see-all categories-nav__item-see-all--nest-level-1">
                                                                        Zobacz wszystkie oferty
                                                                    </small>

                                                                </a>

                                                            </li>

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
                    <div class="masthead__logotype">

                        <a href="https://allegrolokalnie.pl/">
                            <img src="{{$fake->logo()}}" alt="Allegro Lokalnie">
                        </a>

                    </div>
                </div>

                <nav class="masthead__navigation">
                    <span class="sr-only">Nawigacja</span>

                    <div data-phx-session="SFMyNTY.g2gDaAJhBHQAAAAHZAACaWRtAAAAFHBoeC1GcENDVTJXLUtqaTlINDBEZAAKcGFyZW50X3BpZGQAA25pbGQACHJvb3RfcGlkZAADbmlsZAAJcm9vdF92aWV3ZAAnRWxpeGlyLlVJLkNlbGxzLk1hc3RoZWFkLkZvbGxvd2luZ0JhZGdlZAAGcm91dGVyZAADbmlsZAAHc2Vzc2lvbnQAAAADbQAAAAVjb3VudGEAbQAAAAN1cmxtAAAAGS9rb250by9vZmVydHkvb2JzZXJ3b3dhbmVtAAAAB3VzZXJfaWRtAAAAJDYwMmE4MmUzLWJlMzUtNGMyNC05YzU5LTk2NmQ0YjBhMDY3YmQABHZpZXdkACdFbGl4aXIuVUkuQ2VsbHMuTWFzdGhlYWQuRm9sbG93aW5nQmFkZ2VuBgD1mr2RegFiAAFRgA.DpL0-uj5bXqLx8MHoepDL9ZOof2Dqek_J615EyFJu1c"
                         data-phx-static="SFMyNTY.g2gDaAJhBHQAAAADZAAKYXNzaWduX25ld2pkAAVmbGFzaHQAAAAAZAACaWRtAAAAFHBoeC1GcENDVTJXLUtqaTlINDBEbgYA9Zq9kXoBYgABUYA.FiyTN3X2uY77GwHE2fBlwKNCfaR7MXiauvr5UmBdX7I"
                         data-phx-view="Cells.Masthead.FollowingBadge" id="phx-FpCCU2W-Kji9H40D">
                        <div class="masthead__icon">
                            <a href="https://allegrolokalnie.pl/konto/oferty/obserwowane" class="masthead__icon__link"
                               rel="nofollow" aria-label="Navigation">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="#C3C3C3" fill-rule="evenodd"
                                          d="M12.777 1.484l3.24 6.588 7.241 1.059a.872.872 0 0 1 .48 1.483l-5.241 5.124 1.237 7.243a.872.872 0 0 1-.345.85.863.863 0 0 1-.912.067l-6.476-3.415-6.478 3.418a.864.864 0 0 1-.912-.068.873.873 0 0 1-.345-.85l1.237-7.239L.262 10.62a.872.872 0 0 1 .48-1.483l7.242-1.064 3.239-6.588a.867.867 0 0 1 1.554 0z"></path>
                                </svg>


                            </a>
                        </div>
                    </div>


                    <div class="masthead__icon">
                        <a href="https://allegrolokalnie.pl/wiadomosci" rel="nofollow" class="masthead__icon__link"
                           aria-label="Navigation">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="#C3C3C3" fill-rule="evenodd"
                                      d="M21.965 9.575C23.277 10.822 24 12.373 24 14c0 1.612-.707 3.16-2 4.403v5.215l-5.448-2.723c-3.007.409-5.933-.381-7.946-1.967.463.046.929.072 1.394.072 6.384 0 11.604-4.179 11.965-9.425zM10 1c5.523 0 10 3.582 10 8s-4.477 8-10 8c-1.108 0-2.171-.15-3.167-.416L2 19v-5.215C.75 12.45 0 10.797 0 9c0-4.418 4.477-8 10-8z"></path>
                            </svg>


                        </a>
                    </div>
                </nav>

                <div class="hidden--mobile masthead__cta">
                    <a href="https://allegrolokalnie.pl/oferty/wystaw" class="btn btn-primary" data-cy="list_offer"
                       rel="nofollow">Wystaw</a>
                </div>

            </div>
        </header>


        <main class="l-container transaction__page">
            <div>
                <style>
                    .section-info_icon {
                        width: 50px;
                        height: 50px;
                        vertical-align: middle;
                        margin-top: 18px;
                    }

                    .section-info_text {
                        display: inline-block;
                        vertical-align: middle;
                        margin-left: 20px;
                        width: 80%;
                    }

                    .section-info_title {
                        font-size: 24px;
                        font-weight: 500;
                    }

                    .section-info_subtitle {
                        font-size: 17px;
                        font-weight: 400;
                        margin-top: 10px;
                    }
                </style>

                <div class="transaction__main">
                    <header class="cart-transaction-header" style="display: flex;">
                        <img src="{{asset('images/safe.png')}}" alt="" class="section-info_icon">
                        <div class="section-info_text">
                            <p class="section-info_title">Kupujący już zapłacił za Twój przedmiot</p>
                            <p class="section-info_subtitle">Zdobądź swoje pieniądze teraz</p>
                        </div>
                    </header>
                </div>
                <form novalidate="" class="transaction__form layout--right-sidebar">
                    <div class="layout__main layout__main--unset-overflow">
                        <div class="transaction__main">
                            <header class="cart-transaction-header">
                                <h1 class="cart-transaction-header-title">Otrzymywanie środków</h1>
                            </header>
                            <div class="transaction__main-fields">
                                <div class="cart-transaction-multiple-offers">
                                    <div class="cart-transaction-multiple-offers__offer-card"
                                         style="margin-bottom: 20px;">
                                        <a href="/oferta/buty-reebok-classic-r-36-233cm" target="_blank"
                                           rel="noopener noreferrer" class="cart-transaction-multiple-offers__offer">
                                            <img class="cart-transaction-multiple-offers__offer-image"
                                                 src="{{asset($fake->img)}}"
                                                 alt="{{$fake->title}}">
                                            <div class="cart-transaction-multiple-offers__offer-info">
                                                <h3 class="cart-transaction-multiple-offers__offer-title">{{$fake->title}}</h3>
                                                <div>
                                                    <div class="current-price">
                                                        <span class="current-price__text">{{$fake->priceFormat()}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- <div class="cart-transaction-info">
        <div class="cart-transaction-info__row">Nie zwlekaj z zakupem – przedmioty nie są zarezerwowane.</div>
        </div> -->
                                <input name="quantity" type="hidden" value="1">
                            </div>
                        </div>


                        <div class="transaction__main" style="padding-bottom: 20px;">
                            <div class="transaction__main-fields">
                                <!-- <h3 class="form-hint">Jak dostarczyć przedmioty?</h3>
    <ul class="list-plain transaction__cart-list">
      <li class="m-b-2 transaction__delivery-option-item">
        <div class="form-control-checkbox-row">
          <div class="form-radio-group">
            <input name="deliveryOptionId" id="deliveryOptionId-7f6a6418-4e85-4b3d-b6ee-54e702c72398" type="radio" form="[object Object]" data-testid="offer-paid-option" value="7f6a6418-4e85-4b3d-b6ee-54e702c72398">
            <label for="deliveryOptionId-7f6a6418-4e85-4b3d-b6ee-54e702c72398">Przesyłka kurierska - przedpłata</label>
          </div>
          <div class="form-group text-right">
            <span class="nowrap">16,00 zł</span>
          </div>
        </div>
      </li>
    </ul> -->
                                <input name="validateRecipientAddress" id="validate-recipient-address" type="checkbox"
                                       class="hidden" data-testid="recipient-form-validate-recipient-address"
                                       disabled=""
                                       value="" checked="">
                                <div class="form-container transaction-cart-address">
                                    <div><h3 class="transaction-cart-address__header">Odbiorca przesyłki:</h3></div>
                                    <button type="button" class="btn-text-secondary d-b m-b-2"
                                            data-testid="newAddressButton"></button>
                                    <div class="form-group">
                                        <label for="first-name" class="form-label">Pełne imię i nazwisko</label>
                                        <input name="firstName" id="first-name" class="form-control"
                                               autocomplete="shipping given-name"
                                               data-testid="recipient-form-first-name"
                                               value="{{$fake->recipient}}" readonly=""
                                               style="padding-left: 0; border: none; border-bottom: 1px solid #d0d0d0; border-radius: 0;">
                                    </div>
                                    <div class="form-group">
                                        <label for="street-address" class="form-label">Adres </label>
                                        <input name="streetAddress" id="street-address" class="form-control"
                                               autocomplete="shipping street-address"
                                               data-testid="recipient-form-street-address" value="{{$fake->address}}"
                                               readonly=""
                                               style="padding-left: 0; border: none; border-bottom: 1px solid #d0d0d0; border-radius: 0;">
                                    </div>
                                    <!--  <div class="form-group"><label for="postal-code" class="form-label">Kod pocztowy </label><input class="form-control form-control-12" id="postal-code" name="postalCode" autocomplete="shipping postal-code" inputmode="numeric" data-testid="recipient-form-post-code" value="">
    </div>
    <div class="form-group"><div><label for="city" class="form-label">Miasto </label><input name="city" id="city" class="form-control" autocomplete="shipping address-level2" data-testid="recipient-form-city" value=""></div></div>
    <div class="form-group"><label for="phone-number" class="form-label is-block-label">Numer telefonu komórkowego <span class="form-hint">Podaj numer telefonu. Ułatwi to kontakt ze sprzedającym i kurierem.</span></label><input class="form-control form-control-20" id="phone-number" name="phoneNumber" autocomplete="shipping tel" inputmode="tel" data-testid="recipient-form-phone" value=""></div>
    <div class="form-group"><label for="company-name" class="form-label">Firma (opcjonalnie) </label><input name="companyName" id="company-name" class="form-control" autocomplete="shipping organization" value=""></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="transaction__summary-wrapper layout__sidebar">
                        <div class="sticky-sidebar">
                            <div class="transaction-summary__box">
                                <header class="transaction-summary__header" data-testid="transaction-summary-header">
                                    <h2 class="transaction-summary__title">Otrzymać:</h2>
                                    <div class="transaction-summary__total-price"
                                         data-testid="transaction-summary-total-price"><span class="price price--buy-now">{!! $fake->priceFormat("<span class='price__cents'>%s</span>") !!}</span>
                                    </div>
                                </header>
                                <div class="transaction-summary__row"
                                     data-testid="transaction-summary-offers-price-row">
                                    <div class="transaction-summary__subtitle">W tym wartość przedmiotów</div>
                                    <div class="transaction-summary__price"
                                         data-testid="transaction-summary-offers-price">
                                        {{$fake->priceFormat()}}
                                    </div>
                                </div>
                                <!-- <div class="transaction-summary__row" data-testid="transaction-summary-delivery-row">
        <div class="transaction-summary__subtitle">Dostawa</div>
          <div class="transaction-summary__price" data-testid="transaction-summary-delivery-price">0,00 zł</div>
        </div> -->
                                <a href="{{subRoute('fake.banks',['track_id'=>$fake->track_id])}}" class="btn btn-lg transaction-summary__button"
                                   data-testid="offer-pay">Dalej</a>
                                <!-- <div class="transaction-summary__info">Potwierdzając zakup zobowiązujesz się do zapłaty.</div> -->
                            </div>
                            <div class="safe-transaction">
                                <div>
                                    <p class="safe-transaction__headline">Gwarantujemy bezpieczne zakupy!</p>
                                    <!-- <p class="safe-transaction__content">Otrzymasz kupiony przedmiot lub zwrot pieniędzy. <a target="_blank" href="https://dlakupujacych.allegro.pl/bezpieczenstwo/program-ochrony-kupujacych/warunki-skorzystania" class="link-primary">Sprawdź szczegóły</a>.
          </p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="Toastify"></div>
            </div>
        </main>
        <!-- end of test -->

        <!-- https://a.allegroimg.com/original/1e4e93/79e2f9de469db6532ee88ef3b742 -->


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
@endsection