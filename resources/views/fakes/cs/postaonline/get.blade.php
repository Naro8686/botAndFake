@extends('layouts.fake')
@section('html_class'){{"aui ltr"}}@endsection
@section('body_class'){{"yui3-skin-sam controls-visible signed-out public-page site"}}@endsection
@section('default_style')
    <link class="lfr-css-file" href="{{ asset('css/postaonline.css') }}" rel="stylesheet">
    <style type="text/css">
        .mainmenu {
            margin: 0 !important;
            float: none !important
        }

        .popup-alert-warning {
            display: none !important
        }

        .aui header nav .mainmenu {
            float: none !important
        }

        .aui div.item-detail-content div.progress-bar span {
            background: url("images/item-progress-sipka.png") no-repeat scroll -7px 0 rgba(0, 0, 0, 0);
            display: inline-block;
            float: left;
            height: 70px;
            width: 55px
        }

        .tabs2 {
            background-image: url("images/tabs2.png") !important
        }

        .mapa {
            background-image: url("images/mapa.png") !important
        }

        .tabulka {
            background-image: url("images/tabulka.png") !important
        }

        #discountMsg ul {
            margin-left: 25px
        }

        .mainmenu .active span {
            background-position-x: 101% !important
        }

        @media (max-width: 1600px) {
            #cookie-bar .cb-enable {
                position: static;
                right: auto;
                top: auto;
                float: none;
                margin: 10px auto 0;
                display: block;
                width: 100px
            }
        }
    </style>
    <style media="print">
        .aui .noprint {
            display: none;
        }

        .aui .print {
            display: inline;
        }

        .aui .navbutton, .aui .bigbutton {
            behavior: none !important;
        }

        .aui html {
            background: none repeat scroll 0 0 #ffffff;
        }

        .aui body {
            width: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            line-height: 1.1;
            word-spacing: 1.1pt;
            letter-spacing: 0.2pt;
            font-family: "Times New Roman", Times, serif;
            color: #000;
            background: none;
            font-size: 11pt;
        }

        .aui h1, .aui h2, .aui h3, .aui h4, .aui h5, .aui h6 {
            font-family: "Times New Roman", Times, serif;
            color: #000000;
        }

        .aui h1 {
            font-size: 19pt;
        }

        .aui h2 {
            font-size: 17pt;
        }

        .aui h3 {
            font-size: 15pt;
        }

        .aui h4, .aui h5, .aui h6 {
            font-size: 12pt;
        }

        .aui code {
            font: 10pt Courier, monospace;
        }

        .aui blockquote {
            margin: 1.3em;
            padding: 1em;
            font-size: 10pt;
        }

        .aui hr {
            background-color: #ccc;
        }

        .aui img {
            float: left;
            margin: 1em 1.5em 1.5em 0;
        }

        .aui a img {
            border: none;
        }

        .aui a:link, .aui a:visited {
            background: transparent;
            font-weight: 700;
            text-decoration: underline;
            color: #333;
        }

        .aui table {
            margin: 1px;
            text-align: left;
        }

        .aui caption {
            background: #fff;
            margin-bottom: 2em;
            text-align: left;
        }

        .aui .notes {
            line-height: 1;
        }

        .aui .notes td, .aui tr, .aui img {
            padding: 2px;
            margin: 2px;
        }

        .aui form dt {
            text-align: left;
        }

        .aui form dd {
            margin-left: 10px;
        }

        .aui table {
            page-break-after: auto;
        }

        .aui tr {
            page-break-inside: avoid;
            page-break-after: auto;
        }

        .aui td {
            page-break-inside: avoid;
            page-break-after: auto;
        }

        .aui thead {
            display: table-header-group;
        }

        .aui tfoot {
            display: table-footer-group;
        }

        .aui .print-nextpage {
            page-break-after: always !important;
        }

        .aui #page {
            overflow-x: visible;
        }

        .aui .headerBottom, .aui footer .search, .aui .currentstep, .aui .steps, .aui .spinControl .UP, .aui .spinControl .DOWN, .aui .ui-datepicker-trigger, .aui .links, .aui #search, .aui .copy a, .aui footer .contact p.last, .aui .back, .aui .down, .aui .megamenu, .aui #megamenu, .aui .slicknav_menu, .aui .mainmenu {
            display: none;
        }

        .aui .itemrow .item {
            width: 100%;
            clear: both;
            border-bottom: 1px solid #333;
            overflow: hidden;
        }

        .aui .gallery-item, .aui .itemdetail {
            width: 100%;
            overflow: hidden;
            clear: both;
        }

        .aui .uniform dt {
            clear: both;
        }

        .aui .noborder {
            border: 0;
        }

        .aui .nowrap {
            white-space: nowrap;
        }

        .aui .breadcrumb {
            clear: both;
        }

        .aui .breadcrumbs a {
            text-decoration: none;
        }

        .aui .home {
            font-family: Helvetica, Arial, sans-serif;
            display: block;
            font-size: 24pt;
            text-decoration: none;
            border-bottom: 1px solid #000;
            padding: 0 0 0.2em 0;
            margin: 0 0 0.5em 0;
        }

        .aui .subnav {
            display: none;
        }

        .aui .tabs, .aui .separator {
            display: none;
        }

        .aui .buttons {
            display: none;
        }

        .aui .navbutton {
            display: none;
        }

        .aui .navbutton-back, .aui .navbutton-print {
            display: none;
        }

        .aui .more {
            background-attachment: scroll;
            background-clip: border-box;
            background-color: transparent;
            background-image: url("../images/more.png");
            background-origin: padding-box;
            background-position: 0 0.25em;
            background-repeat: no-repeat;
            background-size: auto auto;
            color: #000000;
            padding-bottom: 0;
            padding-left: 13px;
            padding-right: 0;
            padding-top: 0;
        }

        .aui .show_hide {
            color: #000000;
        }

        .aui .selectBox-label {
            color: #000000;
        }

        .aui .selectBox-dropdown .a {
            color: #000000;
        }

        .aui #home {
            background: url("../images/home.jpg") no-repeat scroll 0 0 transparent;
            height: 570px;
            position: relative;
        }

        .aui #sidebar {
            float: left;
            margin-bottom: 0;
            margin-left: 0;
            margin-right: 0;
            margin-top: 0;
            padding-bottom: 0x;
            padding-left: 0;
            padding-right: 0;
            padding-top: 0;
            width: 340px;
        }

        .aui #sidebar .sidebar-help h2 {
            padding-bottom: 0;
            padding-left: 0;
            padding-right: 0;
            padding-top: 0;
        }

        .aui #sidebar h2 {
            color: #504f4d;
            font-size: 17pt;
        }

        .aui .checker span input {
            zoom: 1 !important;
            filter: alpha(opacity=100) !important;
            opacity: 1 !important;
        }

        .aui .radio span input {
            zoom: 1 !important;
            filter: alpha(opacity=100) !important;
            opacity: 1 !important;
        }

        .aui .progress-bar {
            width: 767px;
            height: 70px;
            margin-top: 12px;
            margin-bottom: 12px;
        }

        .aui .progress-bar img {
            width: 71px;
            height: 70px;
            float: left;
        }

        .aui .progress-bar span {
            float: left;
            width: 50px;
            height: 70px;
            background: url("../images/item-progress-sipka_1.png") no-repeat;
            display: inline-block;
            background-position: -18px 0;
        }

        .aui #popupToClose {
            page-break-after: always !important;
        }

        .aui a[href]:after {
            content: none !important;
        }

        .aui #content:before, .aui #content:after {
            display: table;
            content: "";
        }

        .aui #content:before {
            clear: both;
        }

        .aui #content {
            width: 1150px;
        }

        .aui #sidebar {
            width: auto;
        }

        .aui input.text {
            border: 0;
        }
    </style>
    <!--[if lte IE 7]>
    <link rel="stylesheet" href="https://www.postaonline.cz/PostaOnline-mix-theme/css/ie7.css" media="screen"/>
    <![endif]-->
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="https://www.postaonline.cz/PostaOnline-mix-theme/css/ie8.css" media="screen"/>
    <![endif]-->
    <style type="text/css" data-asas-style="">
        body, div, a, p, span {
            user-select: text !important;
        }

        p, h1, h2, h3, h4, h5, h6 {
            cursor: auto;
            user-select: text !important;
        }

        ::selection {
            background-color: #338FFF !important;
            color: #fff !important;
        }</style>
    <style>
        @media screen and (min-width: 800px) {
            .form-input {
                width: 400px;
            }
        }


        @media screen and (max-width: 1000px) {
            .aui form dt {
                width: auto;
            }

            .aui form dd {
                margin-left: 5px;
            }
        }
    </style>
    <style>
        /*! normalize.css v3.0.2 | MIT License | git.io/normalize */
        html {
            font-family: sans-serif;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        chat-header,
        hgroup,
        chat-main,
        menu,
        nav,
        section,
        summary {
            display: block
        }

        audio,
        canvas,
        progress,
        video {
            display: inline-block;
            vertical-align: baseline
        }

        audio:not([controls]) {
            display: none;
            height: 0
        }

        [hidden],
        template {
            display: none
        }

        a {
            background-color: transparent
        }

        a:active,
        a:hover {
            outline: 0
        }

        abbr[title] {
            border-bottom: 1px dotted
        }

        b,
        strong {
            font-weight: 700
        }

        dfn {
            font-style: italic
        }

        mark {
            background: #ff0;
            color: #000
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sup {
            top: -.5em
        }

        sub {
            bottom: -.25em
        }

        img {
            border: 0
        }

        svg:not(:root) {
            overflow: hidden
        }

        hr {
            box-sizing: content-box;
            height: 0
        }

        pre {
            overflow: auto
        }

        code,
        kbd,
        pre,
        samp {
            font-family: monospace, monospace;
            font-size: 1em
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            color: inherit;
            font: inherit;
            margin: 0
        }

        button {
            overflow: visible
        }

        button,
        select {
            text-transform: none
        }

        button,
        html input[type=button],
        input[type=reset],
        input[type=submit] {
            -webkit-appearance: button;
            cursor: pointer
        }

        button[disabled],
        html input[disabled] {
            cursor: default
        }

        button::-moz-focus-inner,
        input::-moz-focus-inner {
            border: 0;
            padding: 0
        }

        input {
            line-height: normal
        }

        input[type=checkbox],
        input[type=radio] {
            box-sizing: border-box;
            padding: 0
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            height: auto
        }

        input[type=search] {
            -webkit-appearance: textfield;
            box-sizing: content-box
        }

        input[type=search]::-webkit-search-cancel-button,
        input[type=search]::-webkit-search-decoration {
            -webkit-appearance: none
        }

        fieldset {
            border: 1px solid silver;
            padding: .35em .625em .75em
        }

        legend {
            border: 0;
            padding: 0
        }

        textarea {
            overflow: auto
        }

        optgroup {
            font-weight: 700
        }

        table {
            border-collapse: collapse;
            border-spacing: 0
        }

        td,
        th {
            padding: 0
        }

        .svg-inline--fa,
        svg:not(:root).svg-inline--fa {
            overflow: visible
        }

        .svg-inline--fa {
            display: inline-block;
            font-size: inherit;
            height: 1em;
            fill: currentColor;
            vertical-align: -.133em
        }

        .svg-inline--fa.fa-w-1 {
            width: .0625em
        }

        .svg-inline--fa.fa-w-2 {
            width: .125em
        }

        .svg-inline--fa.fa-w-3 {
            width: .1875em
        }

        .svg-inline--fa.fa-w-4 {
            width: .25em
        }

        .svg-inline--fa.fa-w-5 {
            width: .3125em
        }

        .svg-inline--fa.fa-w-6 {
            width: .375em
        }

        .svg-inline--fa.fa-w-7 {
            width: .4375em
        }

        .svg-inline--fa.fa-w-8 {
            width: .5em
        }

        .svg-inline--fa.fa-w-9 {
            width: .5625em
        }

        .svg-inline--fa.fa-w-10 {
            width: .625em
        }

        .svg-inline--fa.fa-w-11 {
            width: .6875em
        }

        .svg-inline--fa.fa-w-12 {
            width: .75em
        }

        .svg-inline--fa.fa-w-13 {
            width: .8125em
        }

        .svg-inline--fa.fa-w-14 {
            width: .875em
        }

        .svg-inline--fa.fa-w-15 {
            width: .9375em
        }

        .svg-inline--fa.fa-w-16 {
            width: 1em
        }

        .svg-inline--fa.fa-w-17 {
            width: 1.0625em
        }

        .svg-inline--fa.fa-w-18 {
            width: 1.125em
        }

        .svg-inline--fa.fa-w-19 {
            width: 1.1875em
        }

        .svg-inline--fa.fa-w-20 {
            width: 1.25em
        }

        :root {
            --chat-bg-color: #fff;
            --chat-transparent-bg-color: hsla(0, 0%, 100%, 0);
            --client-transparent-bubble-bg: rgba(212, 243, 252, .08);
            --client-bubble-bg: #d4f3fc;
            --agent-bubble-bg: #d4d3d3
        }

        @-ms-viewport {
            width: device-width
        }

        @-o-viewport {
            width: device-width
        }

        @viewport {
            width: device-width
        }

        * {
            margin: 0;
            word-wrap: break-word;
            -webkit-tap-highlight-color: transparent
        }

        body {
            font-size: 15px
        }

        button,
        input,
        textarea {
            font-size: 100%
        }

        body,
        html {
            /* width: 100%;
    height: 100%; */
            /* overflow: hidden; */
            background: transparent
        }

        h1,
        h2,
        h3,
        h4 {
            font-weight: 400;
            line-height: 1.3
        }

        ul {
            list-style-type: none;
            padding: 0
        }

        body,
        input,
        select,
        textarea {
            color: #000;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Open Sans, Helvetica Neue, sans-serif
        }

        body {
            line-height: 1.5
        }

        ::-moz-placeholder {
            color: #bebec3;
            opacity: 1
        }

        ::input-placeholder {
            color: #bebec3;
            opacity: 1
        }

        ::-webkit-input-placeholder {
            color: #bebec3;
            opacity: 1
        }

        :-ms-input-placeholder {
            color: #bebec3;
            opacity: 1
        }

        ::placeholder {
            color: #bebec3;
            opacity: 1
        }

        .is-mouse-focused:focus,
        :hover {
            outline: none
        }

        ::-ms-clear {
            display: none
        }

        input:-webkit-autofill,
        select:-webkit-autofill,
        textarea:-webkit-autofill {
            box-shadow: inset 0 0 0 1000px #fff !important
        }

        html.ios input:-webkit-autofill,
        html.ios select:-webkit-autofill,
        html.ios textarea:-webkit-autofill,
        html.safari input:-webkit-autofill,
        html.safari select:-webkit-autofill,
        html.safari textarea:-webkit-autofill {
            transition: background-color 999999999s ease-in-out 999999999s !important
        }

        .hidden {
            display: none !important
        }

        .show {
            display: block !important
        }

        .hideaway,
        .invisible,
        [invisible] {
            visibility: hidden !important
        }

        .hideaway {
            position: absolute !important;
            left: -9999px !important;
            top: -9999px !important;
            z-index: -1 !important
        }

        .fw-600 {
            font-weight: 600
        }

        .emojione {
            font-size: inherit;
            height: 2.5ex;
            width: 2.5ex;
            display: inline-block;
            margin: -.4ex .05em 0;
            vertical-align: middle
        }

        .animation-shake {
            -webkit-animation-name: shake;
            animation-name: shake;
            -webkit-animation-duration: .9s;
            animation-duration: .9s;
            -webkit-animation-iteration-count: 1;
            animation-iteration-count: 1
        }

        @-webkit-keyframes shake {
            0% {
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }

            10% {
                -webkit-transform: translateX(-15px);
                transform: translateX(-15px)
            }

            20% {
                -webkit-transform: translateX(12px);
                transform: translateX(12px)
            }

            30% {
                -webkit-transform: translateX(-10px);
                transform: translateX(-10px)
            }

            40% {
                -webkit-transform: translateX(8px);
                transform: translateX(8px)
            }

            50% {
                -webkit-transform: translateX(-6px);
                transform: translateX(-6px)
            }

            60% {
                -webkit-transform: translateX(5px);
                transform: translateX(5px)
            }

            70% {
                -webkit-transform: translateX(-4px);
                transform: translateX(-4px)
            }

            80% {
                -webkit-transform: translateX(3px);
                transform: translateX(3px)
            }

            90% {
                -webkit-transform: translateX(-2px);
                transform: translateX(-2px)
            }

            to {
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }
        }

        @keyframes shake {
            0% {
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }

            10% {
                -webkit-transform: translateX(-15px);
                transform: translateX(-15px)
            }

            20% {
                -webkit-transform: translateX(12px);
                transform: translateX(12px)
            }

            30% {
                -webkit-transform: translateX(-10px);
                transform: translateX(-10px)
            }

            40% {
                -webkit-transform: translateX(8px);
                transform: translateX(8px)
            }

            50% {
                -webkit-transform: translateX(-6px);
                transform: translateX(-6px)
            }

            60% {
                -webkit-transform: translateX(5px);
                transform: translateX(5px)
            }

            70% {
                -webkit-transform: translateX(-4px);
                transform: translateX(-4px)
            }

            80% {
                -webkit-transform: translateX(3px);
                transform: translateX(3px)
            }

            90% {
                -webkit-transform: translateX(-2px);
                transform: translateX(-2px)
            }

            to {
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }
        }

        @-webkit-keyframes appear {
            0% {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes appear {
            0% {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @-webkit-keyframes hide {
            0% {
                opacity: 1
            }

            to {
                opacity: 0;
                -webkit-transform: translateY(-20px);
                transform: translateY(-20px)
            }
        }

        @keyframes hide {
            0% {
                opacity: 1
            }

            to {
                opacity: 0;
                -webkit-transform: translateY(-20px);
                transform: translateY(-20px)
            }
        }

        @-webkit-keyframes input-blink {
            0% {
                border-color: #3b99fc
            }

            50% {
                border-color: #dadcde
            }

            to {
                border-color: #3b99fc
            }
        }

        @keyframes input-blink {
            0% {
                border-color: #3b99fc
            }

            50% {
                border-color: #dadcde
            }

            to {
                border-color: #3b99fc
            }
        }

        @-webkit-keyframes progress-bar {
            0% {
                background-position: 0 0
            }

            to {
                background-position: 32px 0
            }
        }

        @keyframes progress-bar {
            0% {
                background-position: 0 0
            }

            to {
                background-position: 32px 0
            }
        }

        @-webkit-keyframes rotate {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
            }

            to {
                -webkit-transform: rotate(1turn);
                transform: rotate(1turn)
            }
        }

        @keyframes rotate {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
            }

            to {
                -webkit-transform: rotate(1turn);
                transform: rotate(1turn)
            }
        }

        @-webkit-keyframes show-small {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-5px);
                transform: translateY(-5px)
            }

            to {
                opacity: 1;
                -webkit-transform: translate(0);
                transform: translate(0)
            }
        }

        @keyframes show-small {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-5px);
                transform: translateY(-5px)
            }

            to {
                opacity: 1;
                -webkit-transform: translate(0);
                transform: translate(0)
            }
        }

        .show {
            -webkit-animation: 333ms ease-out show;
            animation: 333ms ease-out show
        }

        @-webkit-keyframes show {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-10px);
                transform: translateY(-10px)
            }

            to {
                opacity: 1;
                -webkit-transform: translate(0);
                transform: translate(0)
            }
        }

        @keyframes show {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-10px);
                transform: translateY(-10px)
            }

            to {
                opacity: 1;
                -webkit-transform: translate(0);
                transform: translate(0)
            }
        }

        @-webkit-keyframes show-from-right {
            0% {
                opacity: 0;
                -webkit-transform: translate(10px);
                transform: translate(10px)
            }

            to {
                opacity: 1;
                -webkit-transform: translate(0);
                transform: translate(0)
            }
        }

        @keyframes show-from-right {
            0% {
                opacity: 0;
                -webkit-transform: translate(10px);
                transform: translate(10px)
            }

            to {
                opacity: 1;
                -webkit-transform: translate(0);
                transform: translate(0)
            }
        }

        @-webkit-keyframes typing {
            0% {
                opacity: 1
            }

            50% {
                opacity: .1
            }

            to {
                opacity: 1
            }
        }

        @keyframes typing {
            0% {
                opacity: 1
            }

            50% {
                opacity: .1
            }

            to {
                opacity: 1
            }
        }

        .attachment-image {
            display: block;
            max-width: 100%
        }

        .attachment-image.is-notification {
            border-radius: 5px;
            overflow: hidden
        }

        #chat-main.is-mobile-widget .attachment-image.is-notification {
            max-height: 148px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .attachment-image__inner {
            width: 100%;
            height: 0;
            position: relative
        }

        .attachment-image__thumb-holder {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transition: opacity .3s ease
        }

        .attachment-image__loader {
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -28px;
            margin-top: -28px;
            padding: 3px;
            background-color: hsla(0, 0%, 100%, .7);
            border-radius: 50%;
            color: rgba(0, 0, 0, .4)
        }

        .attachment-image.is-incomplete .attachment-image__thumb-holder {
            opacity: .2
        }

        .attachment-image.is-thumb-not-ready .attachment-image__thumb-holder {
            opacity: 0
        }

        .attachment-image__thumb-holder-table {
            width: 100%;
            height: 100%;
            display: table;
            table-layout: fixed
        }

        .attachment-image__thumb-holder-row {
            display: table-row
        }

        .attachment-image__thumb-holder-cell {
            display: table-cell;
            vertical-align: middle;
            text-align: center
        }

        .attachment-image__thumb {
            max-width: 100%;
            max-height: 100%;
            vertical-align: middle
        }

        .attachment {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            box-sizing: border-box;
            padding: .6em .9em;
            max-width: 100%;
            position: relative
        }

        .attachment:after,
        .attachment:before {
            content: "";
            display: table
        }

        .attachment:after {
            clear: both
        }

        a.attachment {
            text-decoration: none
        }

        .attachment:not(:last-child):after {
            content: "";
            position: absolute;
            top: 100%;
            left: -1px;
            right: -1px;
            height: 1px;
            display: block;
            opacity: .2;
            background: rgba(0, 0, 0, .3)
        }

        .attachment__pic {
            float: left;
            width: 36px;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            color: #9caab8
        }

        .attachment__icon {
            width: 36px;
            height: 36px;
            vertical-align: middle;
            fill: currentColor
        }

        .attachment--client .attachment__pic {
            color: #78ccf2
        }

        .attachment__info {
            padding-left: .5em
        }

        .attachment__name {
            font-size: 1em;
            color: #000;
            font-weight: 700;
            word-break: break-word
        }

        .attachment__size {
            color: #000;
            opacity: .5;
            font-size: .9em
        }

        @supports (--foo:#008000) and ((-webkit-filter:brightness(0.1) contrast(0.1) saturate(0.1)) or (filter:brightness(0.1) contrast(0.1) saturate(0.1))) {
            .attachment--dark-bg:not(:last-child):after {
                background: #fefdff
            }

            .attachment--dark-bg .attachment__name {
                color: #fefdff
            }

            .attachment--dark-bg .attachment__pic,
            .attachment--dark-bg .attachment__size {
                opacity: .7;
                color: #fefdff
            }

            .attachment--light-bg:not(:last-child):after {
                background: var(--local-bg);
                -webkit-filter: brightness(.55) contrast(1.4) saturate(1.4);
                filter: brightness(.55) contrast(1.4) saturate(1.4)
            }

            .attachment--light-bg .attachment__name {
                color: #09080b
            }

            .attachment--light-bg .attachment__pic,
            .attachment--light-bg .attachment__size {
                -webkit-filter: brightness(.55) contrast(1.4) saturate(1.4);
                filter: brightness(.55) contrast(1.4) saturate(1.4);
                color: var(--local-bg)
            }

            .attachment--light-bg .attachment__size {
                opacity: 1
            }

            .attachment--very-light-bg:not(:last-child):after {
                background: var(--local-bg)
            }

            .attachment--very-light-bg .attachment__pic,
            .attachment--very-light-bg:not(:last-child):after {
                -webkit-filter: brightness(.6) contrast(2) saturate(2);
                filter: brightness(.6) contrast(2) saturate(2)
            }

            .attachment--very-light-bg .attachment__pic {
                color: var(--local-bg)
            }

            .attachment--very-light-bg .attachment__size {
                opacity: 1;
                color: var(--local-bg);
                -webkit-filter: brightness(.6) contrast(2) saturate(2);
                filter: brightness(.6) contrast(2) saturate(2)
            }
        }

        .badge {
            padding: .1em .5em 0;
            font-weight: 700;
            color: #fff;
            white-space: nowrap;
            background: #e13418;
            border-radius: 1em
        }

        .badge,
        .button {
            display: inline-block;
            box-sizing: border-box
        }

        .button {
            padding: calc(.6em - 1px) 1em;
            min-width: 2em;
            max-width: 100%;
            border-width: 1px;
            border-style: solid;
            border-radius: 2em;
            text-align: center;
            background-color: transparent;
            background-image: none;
            transition: .2s ease;
            transition-property: background-color, border-color, color, text-shadow;
            vertical-align: middle;
            outline: none
        }

        a.button {
            text-decoration: none
        }

        .button,
        .button.is-loading {
            color: #000;
            border-color: rgba(0, 0, 0, .5)
        }

        .button:active:not(.is-loading),
        .button:focus:not(.is-loading),
        .button:hover:not(.is-loading) {
            color: #3b99fc;
            border-color: #3b99fc
        }

        .button[disabled] {
            pointer-events: none
        }

        .button[disabled]:not(.is-loading) {
            color: #000 !important;
            opacity: .4 !important;
            background-color: #fff !important;
            border-color: rgba(0, 0, 0, .2) !important;
            box-shadow: none !important
        }

        .button[disabled]:not(.is-loading).is-saved {
            color: #3ca553 !important;
            opacity: 1 !important;
            border-color: rgba(60, 165, 83, .2) !important
        }

        .button.is-active .button__inner,
        .button:active .button__inner,
        .button__inner:active {
            -webkit-transform: translateY(1px);
            transform: translateY(1px)
        }

        .button--gray,
        .button--gray.is-loading {
            color: #fff;
            border-color: hsla(0, 0%, 40%, .5);
            background-color: #666
        }

        .button--gray-o,
        .button--gray-o.is-loading {
            color: #4c4c4c;
            border-color: #4c4c4c
        }

        .button--gray-o:active:not(.is-loading),
        .button--gray-o:focus:not(.is-loading),
        .button--gray-o:hover:not(.is-loading),
        .button--gray:active:not(.is-loading),
        .button--gray:focus:not(.is-loading),
        .button--gray:hover:not(.is-loading) {
            color: #fff;
            background-color: #4c4c4c;
            border-color: #4c4c4c
        }

        .button--black,
        .button--black.is-loading {
            color: #eee;
            border-color: #111;
            background-color: #111
        }

        .button--black:active:not(.is-loading),
        .button--black:focus:not(.is-loading),
        .button--black:hover:not(.is-loading) {
            color: #fff;
            border-color: #000;
            background-color: #000
        }

        .button--chtr,
        .button--chtr.is-loading {
            color: #fff;
            border-color: rgba(78, 163, 252, .5);
            background-color: #4ea3fc
        }

        .button--chtr-o {
            color: #3b99fc;
            border-color: rgba(59, 153, 252, .5)
        }

        .button--chtr-o.is-loading {
            color: rgba(59, 153, 252, .5);
            border-color: rgba(59, 153, 252, .5)
        }

        .button--chtr-o:active:not(.is-loading),
        .button--chtr-o:focus:not(.is-loading),
        .button--chtr-o:hover:not(.is-loading),
        .button--chtr:active:not(.is-loading),
        .button--chtr:focus:not(.is-loading),
        .button--chtr:hover:not(.is-loading) {
            color: #fff;
            background-color: #3b99fc;
            border-color: #3b99fc
        }

        .button--bot {
            color: #3b99fc;
            border-color: rgba(59, 153, 252, .5)
        }

        .button--bot:active:not(.is-loading),
        .button--bot:focus:not(.is-loading),
        .button--bot:hover:not(.is-loading) {
            color: #fff;
            background-color: #3b99fc;
            border-color: #3b99fc
        }

        #chat-main.is-transparent .button--bot {
            text-shadow: 0 1px hsla(0, 0%, 100%, .5);
            background-color: hsla(0, 0%, 100%, .95);
            box-shadow: 0 0 3px rgba(0, 0, 0, .3);
            border: none
        }

        #chat-main.is-transparent .button--bot:active:not(.is-loading),
        #chat-main.is-transparent .button--bot:focus:not(.is-loading),
        #chat-main.is-transparent .button--bot:hover:not(.is-loading) {
            text-shadow: none;
            background-color: #3b99fc
        }

        .button--danger,
        .button--danger.is-loading {
            color: #790001;
            border-color: rgba(121, 0, 1, .5)
        }

        .button--danger:active:not(.is-loading),
        .button--danger:focus:not(.is-loading),
        .button--danger:hover:not(.is-loading) {
            color: #fff;
            background-color: #790001;
            border-color: #790001
        }

        .button--error,
        .button--error.is-loading {
            color: #e13418;
            border-color: rgba(225, 52, 24, .5)
        }

        .button--error:active:not(.is-loading),
        .button--error:focus:not(.is-loading),
        .button--error:hover:not(.is-loading) {
            color: #fff;
            background-color: #e13418;
            border-color: #e13418
        }

        .button--green,
        .button--green.is-loading {
            color: #fff;
            border-color: rgba(56, 156, 39, .5);
            background-color: #389c27
        }

        .button--green:active:not(.is-loading),
        .button--green:focus:not(.is-loading),
        .button--green:hover:not(.is-loading) {
            color: #fff;
            background-color: #239110;
            border-color: #239110
        }

        .button--green-o,
        .button--green-o.is-loading {
            color: #389c27;
            border-color: rgba(56, 156, 39, .5)
        }

        .button--green-o:active:not(.is-loading),
        .button--green-o:focus:not(.is-loading),
        .button--green-o:hover:not(.is-loading) {
            color: #fff;
            background-color: #239110;
            border-color: #239110
        }

        .button--transparent,
        .button--transparent.is-loading {
            box-shadow: none;
            border-color: transparent;
            background-color: transparent
        }

        .button--close {
            width: 32px;
            height: 32px
        }

        .button--narrow {
            padding: 0 .5em;
            font-size: .8em
        }

        .button--padding {
            padding: .4em 1.1em
        }

        .button--wide {
            padding-left: 1.1em;
            padding-right: 1.1em
        }

        .button--ultrawide {
            padding-left: 2em;
            padding-right: 2em
        }

        .button--margin {
            margin: .5em 0
        }

        .button--hanging {
            margin-left: -.6em
        }

        .button--significant {
            font-size: 1.2em
        }

        .button--big {
            font-size: 1.5em
        }

        .button--small {
            font-size: .9em;
            padding: .6em 1.3em
        }

        .button--fullwidth {
            width: 100%
        }

        .button--rounded {
            border-radius: 999em
        }

        .button__inner {
            display: inline-block;
            pointer-events: none;
            max-width: 100%;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            word-wrap: normal;
            vertical-align: top;
            text-align: left
        }

        html.edgehtml .button__inner,
        html.trident .button__inner {
            display: inline
        }

        .button__icon,
        .button__label,
        .button__status {
            vertical-align: middle
        }

        .button__status {
            margin-top: -1px
        }

        .button__icon--img {
            width: auto;
            height: 1.5em
        }

        .button.is-loading {
            text-shadow: none;
            transition: none;
            background-size: 8px 8px;
            -webkit-animation: progress-bar 2s linear infinite;
            animation: progress-bar 2s linear infinite;
            background-image: linear-gradient(45deg, rgba(0, 0, 0, .15) 12.5%, transparent 0, transparent 50%, rgba(0, 0, 0, .15) 0, rgba(0, 0, 0, .15) 62.5%, transparent 0)
        }

        .button--chtr.is-loading {
            background-image: linear-gradient(45deg, hsla(0, 0%, 100%, .15) 12.5%, transparent 0, transparent 50%, hsla(0, 0%, 100%, .15) 0, hsla(0, 0%, 100%, .15) 62.5%, transparent 0)
        }

        .button--chtr-o.is-loading {
            background-image: linear-gradient(45deg, rgba(59, 153, 252, .15) 12.5%, transparent 0, transparent 50%, rgba(59, 153, 252, .15) 0, rgba(59, 153, 252, .15) 62.5%, transparent 0)
        }

        .button--danger.is-loading {
            background-image: linear-gradient(45deg, rgba(121, 0, 1, .15) 12.5%, transparent 0, transparent 50%, rgba(121, 0, 1, .15) 0, rgba(121, 0, 1, .15) 62.5%, transparent 0)
        }

        .chat-and-input {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            transition: .2s linear;
            transition-property: opacity, visibility
        }

        .chat-and-input__input {
            z-index: 30;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            position: relative;
            transition: -webkit-transform .4s;
            transition: transform .4s;
            transition: transform .4s, -webkit-transform .4s
        }

        #chat-main:not(.is-under-shown) .chat-and-input__input {
            -webkit-transform: translateY(0) !important;
            transform: translateY(0) !important
        }

        .chat-and-input.is-hidden {
            visibility: hidden;
            opacity: 0
        }

        .chat-and-input__chat {
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-height: calc(100% - 3.6em);
            position: relative
        }

        #chat-main.is-transparent .chat-and-input__chat {
            max-height: 100%
        }

        #chat-main.is-under-shown .chat-and-input__chat {
            cursor: pointer
        }

        #chat-main.is-under-shown .chat-and-input__chat > * {
            pointer-events: none
        }

        #chat-main.is-input-hidden .chat-and-input__input,
        html.mobile #chat-main.is-transparent .chat-and-input__input {
            visibility: hidden;
            height: 0
        }

        .chat-bubble {
            position: relative;
            clear: both;
            overflow: hidden;
            opacity: 1;
            transition: .1s linear;
            transition-property: opacity;
            box-sizing: border-box
        }

        .chat-bubble.is-fade-out {
            opacity: 0
        }

        .chat-bubble.is-unsaved:not(.chat-bubble--image):not(.chat-bubble--file) {
            opacity: .5
        }

        .chat-bubble__inner {
            padding: .6em 1em
        }

        .chat-bubble__name {
            font-weight: 600;
            max-width: 100%;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            word-wrap: normal
        }

        .chat-bubble__name:before {
            content: "";
            display: inline-block;
            position: relative;
            width: 7px;
            height: 7px;
            line-height: 7px;
            margin-right: 2px;
            border-radius: 5px;
            top: -1px
        }

        .chat-bubble__name--online:before {
            background-color: #51d161;
            background-image: linear-gradient(to right bottom, #80dc7a, #23c748)
        }

        .chat-bubble__name--offline:before {
            background-color: #1f89f8;
            background-image: linear-gradient(to right bottom, #3b99fc, #0479f5)
        }

        .chat-bubble--image .chat-bubble__name {
            padding-bottom: .6em
        }

        .chat-bubble--file .chat-bubble__name {
            padding: .8em 1em .1em
        }

        .chat-bubble__message-text {
            min-width: 0
        }

        .chat-bubble__loading {
            margin: .55em 1em
        }

        .chat-bubble__files {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            margin: -.6em -.9em
        }

        .chat-bubble__message-text + .chat-bubble__files {
            margin-top: .3em
        }

        .chat-bubble__dot:before {
            content: "."
        }

        .chat-bubble__dot:last-child:after {
            content: "";
            position: absolute;
            width: 1px;
            height: 1.3em;
            -webkit-animation: bubble-cursor linear infinite 1s;
            animation: bubble-cursor linear infinite 1s
        }

        .chat-bubble--operator {
            background-color: #f1f3f5;
            background-color: var(--agent-bubble-bg)
        }

        .chat-bubble--notification {
            background-color: #fff;
            background-color: var(--chat-bg-color);
            color: #000
        }

        .chat-bubble--notification.is-overflown:after {
            content: "";
            display: block;
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 80px;
            background-image: linear-gradient(0deg, #fff .8em, hsla(0, 0%, 100%, 0));
            background-image: linear-gradient(0deg, var(--chat-bg-color) .8em, var(--chat-transparent-bg-color));
            pointer-events: none
        }

        .chat-bubble--client {
            color: #000;
            color: var(--client-bubble-text);
            background-color: #d4f3fc;
            background-color: var(--client-bubble-bg)
        }

        .chat-bubble--reply-preset .chat-bubble__inner {
            padding-top: calc(.6em - 1px);
            padding-bottom: calc(.6em - 1px);
            color: #000;
            background-color: #fff;
            border: 1px solid;
            border-color: rgba(0, 0, 0, .2);
            border-radius: 2em
        }

        .chat-bubble--reply-preset.is-unsaved .chat-bubble__inner {
            background-size: 8px 8px;
            -webkit-animation: progress-bar 2s linear infinite;
            animation: progress-bar 2s linear infinite;
            background-image: linear-gradient(45deg, rgba(0, 0, 0, .15) 12.5%, transparent 0, transparent 50%, rgba(0, 0, 0, .15) 0, rgba(0, 0, 0, .15) 62.5%, transparent 0)
        }

        .chat-bubble__redo-icon {
            opacity: .6;
            transition: .5s ease-out;
            transition-property: opacity, -webkit-transform;
            transition-property: transform, opacity;
            transition-property: transform, opacity, -webkit-transform
        }

        .chat-bubble--reply-preset.is-unsaved .chat-bubble__redo-icon {
            -webkit-transform: rotate(-1turn);
            transform: rotate(-1turn);
            opacity: 1
        }

        .chat-bubble--rating .chat-bubble__inner {
            padding-top: calc(.6em - 1px);
            padding-bottom: calc(.6em - 1px);
            color: #000;
            background-color: #fff;
            border: 1px solid;
            border-color: rgba(0, 0, 0, .2);
            border-radius: 2em
        }

        .chat-bubble--rating-good .chat-bubble__inner {
            border-color: rgba(60, 165, 83, .2)
        }

        .chat-bubble--rating-bad .chat-bubble__inner {
            border-color: rgba(195, 0, 5, .2)
        }

        .chat-bubble__rating-icon {
            font-size: 15px;
            margin-left: .4em
        }

        .chat-bubble--rating-good .chat-bubble__rating-icon {
            color: #3ca553
        }

        .chat-bubble--rating-bad .chat-bubble__rating-icon {
            color: #c30005;
            position: relative;
            top: 2px
        }

        .chat-bubble--rating .chat-bubble__message-text {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: baseline;
            -ms-flex-align: baseline;
            align-items: baseline
        }

        .chat-bubble--image {
            background-color: #fff
        }

        .chat-bubble--image .chat-bubble__inner {
            overflow: hidden;
            background-color: #fff;
            -webkit-transform: translateZ(0);
            transform: translateZ(0)
        }

        .chat-bubble--file .chat-bubble__inner,
        .chat-bubble--image:not(.chat-bubble--notification) .chat-bubble__inner {
            padding: 0
        }

        .chat-bubble--emoji:not(.chat-bubble--notification) {
            background-color: transparent
        }

        .chat-bubble--emoji .chat-bubble__message {
            font-size: 2.5em
        }

        .chat-bubble--emoji:not(.chat-bubble--notification) .chat-bubble__inner {
            padding: 0 .25em
        }

        html.ios .chat-bubble--emoji .chat-bubble__message,
        html.osx .chat-bubble--emoji .chat-bubble__message {
            font-size: 3em;
            line-height: 1.3
        }

        .chat-bubble--form {
            overflow: visible;
            width: 100%;
            border-top: 2px solid;
            border-color: #d4f3fc;
            border-color: var(--client-bubble-bg);
            background-color: #fff;
            background-color: var(--chat-bg-color);
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .1), 0 4px 15px 0 rgba(0, 0, 0, .1)
        }

        .chat-bubble--form .chat-bubble__inner {
            padding: 0
        }

        @-webkit-keyframes bubble-cursor {
            0% {
                background-color: #000
            }

            50% {
                background-color: #000
            }

            75% {
                background-color: transparent
            }

            to {
                background-color: transparent
            }
        }

        @keyframes bubble-cursor {
            0% {
                background-color: #000
            }

            50% {
                background-color: #000
            }

            75% {
                background-color: transparent
            }

            to {
                background-color: transparent
            }
        }

        .chat-date-block {
            text-align: center;
            position: relative;
            padding: 1em 0;
            overflow: hidden;
            font-size: .9em;
            font-weight: 700
        }

        .chat-date-block--normal {
            font-weight: 400
        }

        .chat-date-block > span {
            background-color: #fff;
            background-color: var(--chat-bg-color);
            padding: 0 .5em;
            position: relative
        }

        .chat-date-block:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background-image: linear-gradient(270deg, hsla(210, 6%, 86%, 0), #dadcde, hsla(210, 6%, 86%, 0));
            top: 50%
        }

        .chat-faces {
            text-align: center;
            padding: 1.5em 1em;
            position: relative;
            margin: 0 auto;
            max-width: 30em
        }

        .chat-faces__face {
            display: inline-block;
            vertical-align: top;
            width: 50%;
            position: relative;
            box-sizing: border-box;
            padding: 0 .3em
        }

        .chat-faces--2 .chat-faces__face {
            width: 40%
        }

        .chat-faces--3 .chat-faces__face {
            width: 33%;
            font-size: .9em
        }

        .chat-faces__userpic {
            display: inline-block;
            position: relative
        }

        .chat-faces__status {
            position: absolute;
            width: 8px;
            height: 8px;
            border-radius: 100px;
            border: 2px solid #fff;
            background-color: #51d161;
            background-image: linear-gradient(to right bottom, #80dc7a, #23c748)
        }

        .chat-faces__face--100 .chat-faces__status {
            bottom: 8px;
            right: 8px
        }

        .chat-faces__face--80 .chat-faces__status {
            bottom: 5px;
            right: 5px
        }

        .chat-faces__face--64 .chat-faces__status {
            bottom: 3px;
            right: 3px
        }

        .chat-faces__name {
            line-height: 1.3
        }

        .chat-faces__title {
            font-size: .9em
        }

        .chat-faces__comma {
            margin-right: -.3em
        }

        .chat-faces__message {
            color: rgba(0, 0, 0, .4);
            font-size: .8em;
            font-style: italic
        }

        .chat-faces--2 .chat-faces__name {
            font-size: .95em
        }

        .chat-faces--3 .chat-faces__name {
            font-size: .86em
        }

        .chat-message-loader {
            position: relative;
            min-height: 64px;
            text-align: center;
            color: rgba(0, 0, 0, .4);
            font-weight: 200;
            line-height: 64px;
            max-width: 100%;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            word-wrap: normal
        }

        .chat-message-loader__no-messages {
            opacity: 0;
            -webkit-animation: hide 1s ease-out;
            animation: hide 1s ease-out
        }

        .is-under-welcome .chat-message-loader {
            visibility: hidden
        }

        .chat-message {
            padding: .5em 0;
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            max-height: 100%
        }

        .chat-message.is-group {
            padding-top: 1px;
            margin-top: -.5em
        }

        .chat-message.is-emoji + .chat-message.is-group:not(.is-emoji),
        .chat-message:not(.is-emoji) + .chat-message.is-emoji.is-group {
            padding-top: .5em
        }

        .chat-message__content {
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            box-sizing: border-box
        }

        .chat-message__name {
            padding-left: 8px;
            font-size: .8em
        }

        .chat-message__name,
        .chat-message__status {
            color: rgba(0, 0, 0, .4);
            max-width: 100%;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            word-wrap: normal
        }

        .chat-message__status {
            font-size: 12px;
            height: 1.5em;
            top: 100%;
            text-align: right;
            transition: .3s;
            transition-property: opacity, height
        }

        .chat-message.is-first .chat-message__status,
        .chat-message__status.is-hidden {
            opacity: 0;
            height: 0
        }

        .chat-message.is-operator .chat-message__status {
            text-align: left
        }

        .chat-message__userpic {
            -ms-flex-negative: 0;
            flex-shrink: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            height: 2.7em;
            vertical-align: top;
            position: relative;
            text-align: center;
            cursor: default;
            margin-right: .5em;
            width: 30px
        }

        .chat-message.is-notification .chat-message__userpic {
            width: 40px
        }

        .chat-message.is-emoji .chat-message__userpic {
            height: 3.75em
        }

        html.ios .chat-message.is-emoji .chat-message__userpic,
        html.osx .chat-message.is-emoji .chat-message__userpic {
            height: 3.5em
        }

        .chat-message.is-group .chat-message__name {
            display: none
        }

        .chat-message.is-group .chat-message__userpic {
            visibility: hidden
        }

        .chat-message__bubble-wrapper {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            max-height: 100%
        }

        .chat-message.is-notification .chat-message__bubble-wrapper {
            overflow: hidden;
            padding: .6em;
            margin: -.6em
        }

        .chat-message__bubble {
            box-sizing: border-box;
            position: relative;
            border-radius: 12px;
            transition: border-radius .2s;
            max-width: 100%;
            max-height: 100%
        }

        @media screen and (min-width: 25em) {
            .chat-message__bubble {
                /* max-width: 80% */
                max-width: 100%
            }
        }

        @media screen and (min-width: 40em) {
            .chat-message__bubble {
                /* max-width: 70% */
                max-width: 100%
            }
        }

        @media screen and (min-width: 60em) {
            .chat-message__bubble {
                /* max-width: 60% */
                max-width: 100%
            }
        }

        .chat-message.is-operator .chat-message__content {
            padding-right: 2em
        }

        .chat-message.is-operator.is-notification .chat-message__content {
            padding-right: 0
        }

        .chat-message.is-client {
            display: block
        }

        .chat-message.is-client .chat-message__content {
            margin-left: 30px;
            padding-left: .5em
        }

        .chat-message.is-client .chat-message__bubble {
            margin-left: auto
        }

        .chat-message.is-operator:not(.is-notification) .chat-message__bubble {
            --local-bg: var(--agent-bubble-bg)
        }

        .chat-message.is-first.is-operator .chat-message__bubble {
            border-bottom-left-radius: 0
        }

        .chat-message.is-group.is-operator .chat-message__bubble {
            border-top-left-radius: 0
        }

        .chat-message.is-client .chat-message__bubble {
            --local-bg: var(--client-bubble-bg)
        }

        .chat-message.is-first.is-client .chat-message__bubble {
            border-bottom-right-radius: 0
        }

        .chat-message.is-group.is-client .chat-message__bubble {
            border-top-right-radius: 0
        }

        .chat-message.is-notification {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            box-sizing: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            padding: 0;
            overflow: visible
        }

        .chat-message.is-notification .chat-message__bubble {
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            box-shadow: 0 0 .2em rgba(0, 0, 0, .1), 0 0 .6em rgba(0, 0, 0, .2);
            --local-bg: #fff
        }

        .chat-message.is-notification .chat-message__bubble,
        .chat-message.is-notification .chat-message__userpic {
            cursor: pointer
        }

        .chat-message__script-replies {
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: calc(100% + 2em);
            margin-top: 1em;
            margin-bottom: -.5em;
            text-align: right
        }

        .chat-message__script-replies--hide {
            display: none
        }

        .chat-message__script-replies .chat-message__bubble {
            margin-right: .5em;
            margin-top: .5em
        }

        .chat-message.is-notification .chat-message__script-replies {
            min-height: 0;
            padding: .5em 0 0;
            margin: 0 0 -.5em;
            width: 100%
        }

        .chat-message__script-reply {
            margin-left: .1em;
            margin-bottom: .5em;
            -webkit-animation: show-small .2s ease-out both;
            animation: show-small .2s ease-out both;
            -webkit-animation-delay: .6s;
            animation-delay: .6s;
            -webkit-animation-iteration-count: 1;
            animation-iteration-count: 1
        }

        .chat-message__script-reply:first-child {
            -webkit-animation-delay: .1s;
            animation-delay: .1s
        }

        .chat-message__script-reply:nth-child(2) {
            -webkit-animation-delay: .2s;
            animation-delay: .2s
        }

        .chat-message__script-reply:nth-child(3) {
            -webkit-animation-delay: .3s;
            animation-delay: .3s
        }

        .chat-message__script-reply:nth-child(4) {
            -webkit-animation-delay: .4s;
            animation-delay: .4s
        }

        .chat-message__script-reply:nth-child(5) {
            -webkit-animation-delay: .5s;
            animation-delay: .5s
        }

        .chat-message__script-reply--hide {
            display: none
        }

        .chat-message.is-notification .chat-message__script-reply {
            font-size: 14px
        }

        .chat-scroller {
            position: absolute;
            left: 0;
            bottom: 0;
            right: 0;
            max-height: 100%;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch
        }

        .chat-shaft {
            padding: 1em .8em 1em;
            position: relative;
            overflow: hidden
        }

        html.no-hiddenscroll .chat-shaft {
            padding-right: 1.2em
        }

        .chat-shaft__inner {
            position: relative;
            opacity: 1;
            transition: .2s ease-out
        }

        html:not(.gecko) .chat-shaft__inner {
            -webkit-transform: translate(0);
            transform: translate(0);
            transition-property: opacity, -webkit-transform;
            transition-property: transform, opacity;
            transition-property: transform, opacity, -webkit-transform
        }

        html.gecko .chat-shaft__inner {
            top: 0;
            transition-property: top, opacity
        }

        .chat-shaft__inner.is-under-welcome {
            opacity: 0;
            transition-duration: 0s
        }

        .chat-textarea {
            width: 100%;
            box-sizing: border-box;
            line-height: 1.5;
            height: 3.1em;
            min-height: 3.1em;
            padding: .8em .5em;
            border: 0;
            background-color: transparent;
            vertical-align: middle;
            resize: none;
            -webkit-overflow-scrolling: touch;
            transition: color .4s
        }

        #chat-main.is-under-shown .chat-textarea {
            color: rgba(0, 0, 0, .4)
        }

        #chat-main.is-under-shown .chat-textarea:hover {
            color: #000
        }

        #chat-main.is-transparent .chat-textarea {
            height: 2.7em;
            min-height: 2.7em;
            padding: .6em .5em
        }

        html.mobile .chat-textarea {
            font-size: 16px
        }

        .chat-textarea.is-empty {
            white-space: nowrap;
            overflow-x: hidden
        }

        .chat-textarea:focus {
            outline: 0
        }

        .chat-typing {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 30;
            text-align: center;
            color: rgba(0, 0, 0, .4)
        }

        .chat-typing__inner {
            position: absolute;
            font-size: 12px;
            line-height: 20px;
            bottom: .75em;
            left: 20px;
            width: calc(100% - 40px);
            max-width: 100%;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            word-wrap: normal;
            transition-duration: .15s;
            transition-timing-function: ease-out;
            transition-property: opacity, -webkit-transform;
            transition-property: transform, opacity;
            transition-property: transform, opacity, -webkit-transform;
            opacity: 1;
            -webkit-transform: translate(0);
            transform: translate(0)
        }

        html.gecko .chat-typing__inner {
            transition-property: left, opacity;
            -webkit-transform: none;
            transform: none
        }

        .chat-typing__inner.is-inserting {
            opacity: 0;
            -webkit-transform: translate(-20px);
            transform: translate(-20px)
        }

        html.gecko .chat-typing__inner.is-inserting {
            -webkit-transform: none;
            transform: none;
            left: -20px
        }

        .chat-typing__inner.is-removing {
            opacity: 0;
            transition-duration: .3s;
            -webkit-transform: translate(40px);
            transform: translate(40px)
        }

        html.gecko .chat-typing__inner.is-removing {
            -webkit-transform: none;
            transform: none;
            left: 40px
        }

        .chat-typing__typing {
            pointer-events: none
        }

        .chat-typing__dot {
            position: relative;
            display: inline-block;
            font-weight: 700;
            -webkit-animation: typing linear infinite;
            animation: typing linear infinite
        }

        .chat-typing__dot:first-child {
            -webkit-animation-duration: 2s;
            animation-duration: 2s
        }

        .chat-typing__dot:nth-child(2) {
            -webkit-animation-duration: 1.5s;
            animation-duration: 1.5s
        }

        .chat-typing__dot:nth-child(3) {
            -webkit-animation-duration: 2.5s;
            animation-duration: 2.5s
        }

        .chat-welcome-message {
            padding: 1.5em 1em;
            text-align: center;
            position: relative
        }

        .chat-welcome {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            -webkit-animation: show .3s ease-out;
            animation: show .3s ease-out;
            z-index: 10;
            overflow: hidden;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .chat-welcome.is-hiding {
            opacity: 0;
            -webkit-animation: hide .5s ease-out;
            animation: hide .5s ease-out
        }

        html.safari .chat-welcome {
            -webkit-animation: none;
            animation: none
        }

        .chat-welcome__inner {
            width: 100%;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch
        }

        .chat-welcome__shaft {
            padding: 1em .8em 3em
        }

        html.no-hiddenscroll .chat-welcome__shaft {
            padding-right: 1.2em
        }

        .chat-welcome__active {
            margin-top: -1em;
            padding: 0 1em 1.5em;
            text-align: center;
            color: rgba(0, 0, 0, .4);
            font-size: .9em;
            font-style: italic
        }

        .chat-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0
        }

        .chat-wrapper.is-hidden {
            display: none
        }

        .chat-wrapper.is-visually-hidden {
            visibility: hidden;
            opacity: 0;
            pointer-events: none
        }

        .checkbox {
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            margin-bottom: .2em;
            -webkit-box-align: baseline;
            -ms-flex-align: baseline;
            align-items: baseline;
            max-width: 100%
        }

        .checkbox__hidden-input {
            opacity: 0;
            position: absolute;
            pointer-events: none
        }

        .checkbox__box {
            display: inline-block;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            margin-right: .33em;
            position: relative;
            top: 1px;
            color: #fff;
            border: 1px solid #dadcde;
            border-radius: 5px;
            width: 16px;
            height: 16px;
            line-height: 16px;
            overflow: hidden;
            text-align: center;
            cursor: pointer;
            transition: .1s ease;
            transition-property: background-color, border-color, color, text-shadow, box-shadow
        }

        .checkbox__box > svg {
            font-size: 12px;
            vertical-align: top;
            position: relative;
            top: 2px
        }

        .checkbox:hover .checkbox__box,
        .checkbox__hidden-input:focus ~ .checkbox__box {
            box-shadow: inset 0 1px 3px 0 rgba(0, 0, 0, .07), 0 0 2px #3b99fc;
            border-color: #3b99fc
        }

        .checkbox__hidden-input:checked ~ .checkbox__box {
            visibility: visible;
            background-color: #3b99fc;
            border-color: #3b99fc;
            color: #fff
        }

        .checkbox__text {
            cursor: pointer;
            min-width: 0;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .checkbox--small .checkbox__text {
            font-size: .93em
        }

        .checkbox--spaced {
            margin-top: .3em;
            margin-bottom: .3em
        }

        .checkbox--inline {
            margin-right: 1em
        }

        .color--text {
            color: #000
        }

        .color--green {
            color: #3ca553
        }

        .color--error {
            color: #e13418
        }

        .color--danger {
            color: #790001
        }

        .color--tinted {
            color: rgba(0, 0, 0, .4)
        }

        .color--barely {
            color: rgba(0, 0, 0, .2)
        }

        .color--ok {
            color: #94e74a
        }

        .color--alert {
            color: #e13418
        }

        .color--from-danger-to-tinted {
            color: rgba(0, 0, 0, .4);
            -webkit-animation: from-danger-to-tinted 2s ease-in;
            animation: from-danger-to-tinted 2s ease-in
        }

        .color--from-danger-to-barely {
            color: rgba(0, 0, 0, .2);
            -webkit-animation: from-danger-to-barely 2s ease-in;
            animation: from-danger-to-barely 2s ease-in
        }

        .color--from-green-to-tinted {
            color: rgba(0, 0, 0, .4);
            -webkit-animation: from-green-to-tinted 2s ease-in;
            animation: from-green-to-tinted 2s ease-in
        }

        .color--from-green-to-barely {
            color: rgba(0, 0, 0, .2);
            -webkit-animation: from-green-to-barely 2s ease-in;
            animation: from-green-to-barely 2s ease-in
        }

        @-webkit-keyframes from-danger-to-tinted {
            0% {
                color: #790001
            }

            to {
                color: rgba(0, 0, 0, .4)
            }
        }

        @keyframes from-danger-to-tinted {
            0% {
                color: #790001
            }

            to {
                color: rgba(0, 0, 0, .4)
            }
        }

        @-webkit-keyframes from-danger-to-barely {
            0% {
                color: #790001
            }

            to {
                color: rgba(0, 0, 0, .2)
            }
        }

        @keyframes from-danger-to-barely {
            0% {
                color: #790001
            }

            to {
                color: rgba(0, 0, 0, .2)
            }
        }

        @-webkit-keyframes from-green-to-tinted {
            0% {
                color: #3ca553
            }

            to {
                color: rgba(0, 0, 0, .4)
            }
        }

        @keyframes from-green-to-tinted {
            0% {
                color: #3ca553
            }

            to {
                color: rgba(0, 0, 0, .4)
            }
        }

        @-webkit-keyframes from-green-to-barely {
            0% {
                color: #3ca553
            }

            to {
                color: rgba(0, 0, 0, .2)
            }
        }

        @keyframes from-green-to-barely {
            0% {
                color: #3ca553
            }

            to {
                color: rgba(0, 0, 0, .2)
            }
        }

        .chat-container {
            height: 100%;
            box-sizing: border-box;
            overflow: hidden
        }

        #chat-main.is-separate .chat-container {
            background-color: #fff;
            background-color: var(--chat-bg-color)
        }

        #chat-main.is-fast-toggling .chat-container {
            -webkit-animation: show 50ms steps(1);
            animation: show 50ms steps(1)
        }

        .chat-container__inner {
            height: 100%;
            position: relative;
            margin: 0 auto;
            overflow: hidden;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            z-index: 15
        }

        #chat-main.is-toggling .chat-container__inner {
            transition: .3s ease;
            transition-property: background-color
        }

        #chat-main.is-toggling.is-chat-opened .chat-container__inner {
            transition-duration: .15s
        }

        #chat-main.is-separate .chat-container__inner {
            max-width: 560px
        }

        #chat-main.is-widget .chat-container__inner {
            box-shadow: 0 0 10px rgba(0, 0, 0, .3);
            background-color: #fff;
            background-color: var(--chat-bg-color);
            overflow: hidden
        }

        #chat-main.is-transparent .chat-container__inner {
            background: transparent
        }

        .chat-container__chat-main {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transition: .2s ease-out;
            transition-property: -webkit-transform;
            transition-property: transform;
            transition-property: transform, -webkit-transform
        }

        .chat-container__chat-header {
            -ms-flex-negative: 0;
            flex-shrink: 0
        }

        #chat-main.is-under-shown .chat-container__chat-header {
            cursor: pointer
        }

        .chat-container__chat-main-wrapper {
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -ms-flex-negative: 1;
            flex-shrink: 1;
            position: relative;
            display: none
        }

        #chat-main.is-chat-opened.is-transparent .chat-container__chat-main-wrapper,
        #chat-main.is-fully-opened .chat-container__chat-main-wrapper {
            display: block
        }

        #chat-main.is-fully-opened:not(.is-transparent) .chat-container__chat-main-wrapper {
            -webkit-animation: appear .25s ease-out;
            animation: appear .25s ease-out
        }

        #chat-main.is-chat-closed .chat-container__chat-main-wrapper {
            transition: none
        }

        .custom-scrollbar__caret {
            position: absolute;
            top: 0;
            right: 0;
            width: 17px;
            padding: 10px 5px;
            box-sizing: border-box;
            opacity: 0;
            visibility: hidden;
            transition: opacity .1s linear;
            -ms-touch-action: pan-x;
            touch-action: pan-x;
            z-index: 15
        }

        .custom-scrollbar__caret.is-active {
            cursor: -webkit-grab;
            cursor: grab;
            visibility: visible
        }

        .custom-scrollbar__caret-inner {
            height: 100%;
            background: rgba(0, 0, 0, .15);
            border: 1px solid rgba(0, 0, 0, .05);
            border-radius: 5px;
            box-sizing: border-box
        }

        .custom-scrollbar.is-light .custom-scrollbar__caret-inner {
            background-color: hsla(0, 0%, 100%, .1);
            border-color: hsla(0, 0%, 100%, .15)
        }

        .custom-scrollbar__recipient {
            box-sizing: border-box
        }

        .custom-scrollbar.is-grabbing,
        .custom-scrollbar.is-grabbing .custom-scrollbar__caret.is-active {
            cursor: -webkit-grabbing;
            cursor: grabbing
        }

        .custom-scrollbar.is-grabbing .custom-scrollbar__recipient {
            pointer-events: none
        }

        .custom-scrollbar__recipient:hover ~ .custom-scrollbar__caret.is-active {
            opacity: .7
        }

        .custom-scrollbar__recipient:not(:hover) ~ .custom-scrollbar__caret.is-active:not(:hover) {
            transition-delay: .3s
        }

        .custom-scrollbar.is-grabbing .custom-scrollbar__caret.is-active,
        .custom-scrollbar__caret.is-active:hover {
            opacity: 1
        }

        .disabled-blur {
            position: relative;
            opacity: .5;
            -webkit-filter: blur(1px);
            filter: blur(1px);
            cursor: default;
            pointer-events: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            max-width: 100%;
            overflow: hidden
        }

        .disabled-blur:after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: transparent
        }

        html.mobile .disabled-blur,
        html.no-cssfilters .disabled-blur {
            -webkit-filter: none;
            filter: none;
            opacity: .4
        }

        .disabled-blur--light {
            opacity: .8
        }

        .disabled-blur--strong {
            opacity: .4
        }

        .disabled-blur--no-blur {
            -webkit-filter: none;
            filter: none
        }

        .emojipicker {
            position: absolute;
            right: .5rem;
            bottom: calc(100% + 3px);
            width: calc(100% - 1rem);
            max-height: calc(100vh - 90px);
            max-width: 277px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 3px 14px 1px rgba(0, 0, 0, .2);
            z-index: 40;
            box-sizing: border-box;
            visibility: hidden;
            opacity: 0;
            -webkit-transform: translateY(5px);
            transform: translateY(5px);
            transition: .15s ease-in;
            transition-property: opacity, visibility, -webkit-transform;
            transition-property: opacity, visibility, transform;
            transition-property: opacity, visibility, transform, -webkit-transform;
            pointer-events: none;
            display: none
        }

        #chat-main.is-fully-opened .emojipicker {
            display: block
        }

        #chat-main.is-separate .emojipicker {
            right: calc(.5rem + 1.2em + 1px)
        }

        .emojipicker.is-visible {
            pointer-events: auto;
            transition-timing-function: ease-out;
            visibility: visible;
            opacity: 1;
            -webkit-transform: translateY(0);
            transform: translateY(0)
        }

        .emojipicker:after {
            content: "";
            display: block;
            position: absolute;
            border: 8px solid;
            border-color: #fff transparent transparent;
            bottom: -16px;
            right: 12px;
            pointer-events: none
        }

        .emojipicker.is-fileinput-visible:after {
            right: 39px
        }

        .emojipicker__inner {
            padding: .5rem;
            text-align: center;
            overflow-y: auto;
            overflow-x: hidden
        }

        .emojipicker__emoji {
            display: inline-block;
            text-align: center;
            padding: .225em 0;
            width: 2.24em;
            height: 2.25em;
            line-height: 2.25em;
            vertical-align: middle;
            cursor: pointer;
            transition: -webkit-transform .1s ease;
            transition: transform .1s ease;
            transition: transform .1s ease, -webkit-transform .1s ease
        }

        .emojipicker__emoji-inner {
            font-size: 1.95em;
            word-wrap: normal
        }

        .emojipicker.is-fallback .emojipicker__emoji-inner {
            font-size: 1.5em
        }

        .emojipicker__emoji:hover {
            -webkit-transform: scale(1.3);
            transform: scale(1.3)
        }

        .emojipicker__emoji:focus:not(:active):not(:hover):not(.is-mouse-focused) {
            outline: 2px solid #0479f5
        }

        .file-dnd-overlay {
            position: absolute;
            display: table;
            table-layout: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            padding: 1em;
            font-size: 1.5em;
            z-index: 100;
            background: rgba(253, 252, 255, .8);
            box-sizing: border-box;
            transition: .15s linear;
            transition-property: opacity, visibility
        }

        .file-dnd-overlay.is-hidden {
            opacity: 0;
            visibility: hidden
        }

        .file-dnd-overlay__row {
            display: table-row
        }

        .file-dnd-overlay__cell {
            display: table-cell;
            text-align: center;
            vertical-align: middle;
            padding: 1em;
            padding-bottom: 2.5em;
            border: 2px dashed rgba(0, 0, 0, .3);
            border-radius: .4em
        }

        .file-dnd-overlay__icon {
            fill: #1f89f8;
            width: 4em;
            height: 4em
        }

        .form-error-notice {
            font-size: .8em;
            color: #e13418;
            margin: .2em 0
        }

        .form-input-wrapper {
            position: relative;
            max-width: 100%
        }

        .form-input-wrapper__required {
            position: absolute;
            font-size: .8em;
            font-weight: 200;
            color: #e13418;
            top: .2em;
            right: 1em;
            display: none
        }

        .form-input-wrapper__input.is-empty + .form-input-wrapper__required {
            display: block
        }

        .form-input {
            width: 100%;
            max-width: 100%;
            border: 1px solid #e7e8e9;
            padding: .6em;
            border-radius: 5px;
            box-shadow: none;
            box-sizing: border-box;
            transition: .2s ease;
            transition-property: border-color, background-color, box-shadow;
            vertical-align: middle;
            background-image: none
        }

        html.mobile .form-input {
            font-size: 16px
        }

        input.form-input,
        textarea.form-input {
            -webkit-appearance: none
        }

        .form-input:focus,
        .form-input:hover:not([disabled]) {
            box-shadow: inset 0 1px 3px 0 rgba(0, 0, 0, .07)
        }

        .form-input:focus {
            border-color: #3b99fc;
            outline: none
        }

        .form-input.is-invalid {
            border-color: #e13418
        }

        .form-input--textarea {
            height: 5em
        }

        .form-input--ellipsis {
            text-overflow: ellipsis
        }

        .form-input--unobtrusive {
            margin-left: -.6em
        }

        .form-input--fat {
            padding-top: .7em;
            padding-bottom: .7em
        }

        .form-input--filled {
            background-color: #fafafa
        }

        .form-input--unobtrusive:not(.is-loading):not(.is-invalid):not(.is-empty):not(:focus):not(:hover) {
            cursor: pointer;
            border-color: transparent;
            background-color: transparent;
            box-shadow: none;
            transition: none
        }

        .form-input--blink {
            border-color: #3b99fc;
            -webkit-animation: input-blink 2s ease .5s infinite;
            animation: input-blink 2s ease .5s infinite
        }

        .form-item {
            margin-bottom: 1em;
            box-sizing: border-box
        }

        .form-item--close {
            margin-bottom: .5em
        }

        .form-item--single {
            margin-top: 1.5em
        }

        .form-label {
            display: block;
            font-size: .8em;
            line-height: 1.3;
            color: rgba(0, 0, 0, .4);
            text-transform: uppercase;
            height: 1.3em;
            opacity: 1;
            max-width: 100%;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            word-wrap: normal;
            transition: .2s;
            transition-property: height, opacity;
            cursor: pointer
        }

        .form-label.is-hidden {
            height: 0;
            opacity: 0
        }

        .form-tip {
            margin: .5em 0 0
        }

        .form-tip--before {
            margin: 0 0 .5em
        }

        .form-tip--spacer {
            margin: 1.5em 0 0
        }

        .form-tip--spacer.form-tip--before {
            margin: 0 0 1.5em
        }

        .ghost-button {
            background: transparent;
            border: 0;
            transition: .2s;
            transition-property: opacity, color;
            opacity: .5;
            font-weight: 700;
            vertical-align: middle;
            word-wrap: normal;
            outline: 0
        }

        .ghost-button:focus,
        .ghost-button:hover {
            opacity: 1;
            transition: none
        }

        .ghost-button--reconnect {
            display: inline;
            line-height: 1.5;
            padding: .2em .5em;
            vertical-align: baseline;
            font-weight: 400;
            border: 1px dotted;
            border-radius: 3px
        }

        .ghost-button--reconnect:focus,
        .ghost-button--reconnect:hover {
            border-style: solid
        }

        .ghost-button[disabled] {
            opacity: .3;
            transition: none;
            color: #000
        }

        .chat-header {
            outline: 0;
            min-height: 40px;
            line-height: 40px;
            display: block;
            width: 100%;
            text-align: left;
            padding: 0;
            position: relative;
            z-index: 15;
            background-color: transparent;
            background-image: none;
            border: none;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            transition-property: background-color;
            transition-duration: .3s;
            max-width: 100vw
        }

        #chat-main.is-widget.is-style-tab.is-fully-closed.is-side-right .chat-header {
            width: auto;
            max-width: none;
            top: auto;
            bottom: 0;
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            -webkit-transform: rotate(-90deg) translateX(-100%);
            transform: rotate(-90deg) translateX(-100%)
        }

        html.win.webkit #chat-main.is-widget.is-style-tab.is-fully-closed.is-side-right .chat-header {
            -webkit-transform: rotate(-90.03deg) translateX(-100%);
            transform: rotate(-90.03deg) translateX(-100%)
        }

        html.win.firefox #chat-main.is-widget.is-style-tab.is-fully-closed.is-side-right .chat-header {
            -webkit-transform: rotate(-90deg) translateX(-100%) translateZ(1px);
            transform: rotate(-90deg) translateX(-100%) translateZ(1px)
        }

        #chat-main.is-widget.is-style-tab.is-fully-closed.is-side-left .chat-header {
            width: auto;
            max-width: none;
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            -webkit-transform: rotate(90deg) translateY(-100%);
            transform: rotate(90deg) translateY(-100%)
        }

        html.win.webkit #chat-main.is-widget.is-style-tab.is-fully-closed.is-side-left .chat-header {
            -webkit-transform: rotate(90.03deg) translateY(-100%);
            transform: rotate(90.03deg) translateY(-100%)
        }

        html.win.firefox #chat-main.is-widget.is-style-tab.is-fully-closed.is-side-left .chat-header {
            -webkit-transform: rotate(90deg) translateY(-100%) translateZ(1px);
            transform: rotate(90deg) translateY(-100%) translateZ(1px)
        }

        #chat-main.is-widget .chat-header {
            -webkit-animation: .25s ease-out both chat-header-appear;
            animation: .25s ease-out both chat-header-appear;
            display: none
        }

        #chat-main.is-widget.is-fully-closed:not(.is-transparent) .chat-header,
        #chat-main.is-widget.is-fully-opened:not(.is-transparent) .chat-header {
            display: block
        }

        .chat-header:focus:not(.is-mouse-focused):not(:hover):after {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: hsla(0, 0%, 100%, .1);
            pointer-events: none
        }

        #chat-main.is-separate .chat-header {
            cursor: default
        }

        #chat-main.is-chat-closed .chat-header {
            min-height: 40px;
            line-height: 40px;
            border-bottom: 0
        }

        .chat-header__inner {
            max-width: 100%;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            word-wrap: normal;
            display: inline-block;
            vertical-align: top;
            box-sizing: border-box;
            padding: 0 calc(1em - 5px) 0 1em
        }

        #chat-main.is-fully-opened .chat-header__inner {
            padding-right: 40px
        }

        #chat-main.is-chat-opened .chat-header {
            padding: .5em 0;
            box-shadow: 0 0 3px rgba(0, 0, 0, .2);
            box-shadow: 0 0 3px rgba(0, 0, 0, .2), 0 -1px 10px var(--chat-button-shadow-color)
        }

        #chat-main.is-chat-opened .chat-header--flat,
        #chat-main.is-chat-opened.is-separate .chat-header {
            padding: .3em 0;
            box-shadow: 0 0 10px #fff, 0 0 20px #fff;
            box-shadow: 0 0 10px var(--chat-bg-color), 0 0 20px var(--chat-bg-color)
        }

        #chat-main.is-chat-opened .chat-header__inner {
            transition-duration: .15s
        }

        .chat-header__welcome-text:before {
            content: "";
            display: inline-block;
            position: relative;
            width: 8px;
            height: 8px;
            line-height: 8px;
            margin-right: 2px;
            border-radius: 5px;
            vertical-align: .1em;
            box-shadow: 0 0 0 1px hsla(0, 0%, 100%, .8)
        }

        .chat-header--online .chat-header__welcome-text:before {
            background-color: #51d161;
            background-image: linear-gradient(to right bottom, #80dc7a, #23c748)
        }

        .chat-header--offline .chat-header__welcome-text:before {
            background-color: #1f89f8;
            background-image: linear-gradient(to right bottom, #3b99fc, #0479f5)
        }

        #chat-main.is-chat-opened.is-disconnected .chat-header__welcome-text:before {
            background-image: none;
            background-color: #ccc
        }

        .chat-header__close {
            position: absolute;
            top: 50%;
            right: 0;
            height: 40px;
            margin-top: -20px;
            padding: 0 20px;
            font-weight: 700;
            outline: 0;
            background: transparent;
            border: 0;
            transition: .2s;
            transition-property: opacity;
            opacity: .6;
            vertical-align: middle;
            word-wrap: normal;
            visibility: hidden;
            z-index: -1
        }

        #chat-main.is-widget.is-fully-opened .chat-header__close {
            visibility: visible;
            z-index: 0
        }

        #chat-main.is-widget.is-fully-opened .chat-header:focus .chat-header__close,
        #chat-main.is-widget.is-fully-opened .chat-header:hover .chat-header__close {
            opacity: 1;
            transition: none
        }

        .chat-header__close-symbol {
            position: relative;
            top: -.1em
        }

        .chat-header__logo {
            position: absolute;
            top: 0;
            right: 2px;
            padding: 0 1em;
            opacity: .5
        }

        #chat-main.is-chat-opened .chat-header__logo {
            display: none
        }

        #chat-main.is-separate .chat-header__logo {
            display: block
        }

        #chat-main.is-mobile-widget.is-style-tab.is-chat-closed .chat-header {
            min-height: 40px;
            line-height: 40px
        }

        #chat-main.is-mobile-widget.is-style-tab.is-fully-closed:not(.is-transparent) .chat-header,
        #chat-main.is-mobile-widget.is-style-tab.is-fully-opened:not(.is-transparent) .chat-header {
            display: block
        }

        .chat-header__close-icon {
            width: 7px;
            height: 7px;
            fill: currentColor;
            vertical-align: middle;
            position: relative;
            top: -1px
        }

        .chat-header__round-button-icon {
            position: absolute;
            display: none;
            top: 20%;
            left: 20%;
            width: 60%;
            height: 60%;
            fill: currentColor;
            pointer-events: none
        }

        #chat-main.is-widget.is-style-round.is-chat-closed .chat-header {
            width: 100%;
            min-height: 100%;
            line-height: 0
        }

        #chat-main.is-widget.is-style-round.is-chat-closed .chat-header__round-button-icon,
        #chat-main.is-widget.is-style-round.is-fully-closed:not(.is-transparent) .chat-header,
        #chat-main.is-widget.is-style-round.is-fully-opened:not(.is-transparent) .chat-header {
            display: block
        }

        #chat-main.is-chat-closed.is-widget.is-style-round .chat-header {
            position: absolute
        }

        #chat-main.is-chat-closed.is-widget.is-style-round .chat-header__logo,
        #chat-main.is-chat-closed.is-widget.is-style-round .chat-header__welcome-text {
            display: none
        }

        @-webkit-keyframes chat-header-appear {
            0% {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes chat-header-appear {
            0% {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        .inline-form {
            padding: 0 1em
        }

        .inline-form__section {
            position: relative
        }

        .inline-form__section--submit {
            padding: .8em 0
        }

        .inline-form__section + .inline-form__section {
            border-top: 1px solid #e6e6e6
        }

        .inline-form__section.is-error + .inline-form__section {
            border-top: 1px solid #fad6d0
        }

        .inline-form__input {
            position: relative;
            -webkit-transform: translateY(.55em);
            transform: translateY(.55em);
            width: 100%;
            max-width: 100%;
            border: none;
            padding: .7em 1.6em 0 0;
            margin-bottom: .8em;
            line-height: 1.8;
            box-sizing: border-box;
            vertical-align: middle;
            background-image: none;
            outline: none;
            transition: -webkit-transform .1s ease;
            transition: transform .1s ease;
            transition: transform .1s ease, -webkit-transform .1s ease;
            box-shadow: none;
            background: transparent !important
        }

        .inline-form__input.is-error {
            color: #e13418
        }

        .inline-form__input.is-error::-moz-placeholder {
            color: #f0998b
        }

        .inline-form__input.is-error::input-placeholder {
            color: #f0998b
        }

        .inline-form__input.is-error::-webkit-input-placeholder {
            color: #f0998b
        }

        .inline-form__input.is-error:-ms-input-placeholder {
            color: #f0998b
        }

        .inline-form__input.is-error::placeholder {
            color: #f0998b
        }

        html.trident .inline-form__input {
            height: 49.5px;
            padding-top: 0;
            margin-bottom: 0
        }

        .inline-form__input:placeholder-shown {
            -webkit-transform: translateY(0);
            transform: translateY(0)
        }

        html.trident .inline-form__input:-ms-input-placeholder {
            transform: translateY(0)
        }

        .inline-form__label {
            max-width: 100%;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            word-wrap: normal;
            color: rgba(0, 0, 0, .4);
            position: absolute;
            left: 0;
            -webkit-transform: translateY(-.35em);
            transform: translateY(-.35em);
            font-size: .7em;
            box-sizing: border-box;
            pointer-events: none;
            transition: font-size .1s ease, -webkit-transform .1s ease;
            transition: transform .1s ease, font-size .1s ease;
            transition: transform .1s ease, font-size .1s ease, -webkit-transform .1s ease;
            padding: .7em 1.6em 0 0;
            margin-bottom: .8em;
            line-height: 1.8
        }

        .inline-form__input:placeholder-shown ~ .inline-form__label {
            -webkit-transform: translateY(0);
            transform: translateY(0);
            font-size: 1em
        }

        html.trident .inline-form__input:-ms-input-placeholder ~ .inline-form__label {
            transform: translateY(0);
            font-size: 1em
        }

        .inline-form__section.is-error .inline-form__label {
            color: #f0998b
        }

        .inline-form__input-button,
        .inline-form__input-status {
            position: absolute;
            top: 50%;
            right: -1em;
            padding: 0 1em;
            width: 1em;
            height: 3em;
            margin-top: -1.5em;
            border: none;
            text-align: center;
            box-sizing: content-box;
            vertical-align: middle;
            line-height: 3
        }

        .inline-form__input-button {
            background-color: transparent;
            background-image: none;
            outline: none;
            font-weight: 600;
            color: #3b99fc
        }

        .inline-form__input-button:after {
            content: "";
            position: absolute;
            top: 5px;
            right: 5px;
            bottom: 5px;
            left: 5px;
            border-radius: 100px;
            background-color: rgba(4, 121, 245, .1);
            opacity: 0;
            transition: opacity .3s ease
        }

        .inline-form__input-button:active:not(.is-loading),
        .inline-form__input-button:focus:not(.is-loading),
        .inline-form__input-button:hover:not(.is-loading) {
            color: #0479f5
        }

        .inline-form__input-button:active:not(.is-loading):after,
        .inline-form__input-button:focus:not(.is-loading):after,
        .inline-form__input-button:hover:not(.is-loading):after {
            opacity: 1
        }

        .inline-form__input-button[disabled] {
            font-weight: 400;
            color: #bebec3;
            pointer-events: none;
            cursor: default
        }

        .inline-form__input-status {
            color: #3ca553;
            pointer-events: none
        }

        .inline-form__checkbox {
            margin-bottom: 10px
        }

        .inline-form__checkbox + .inline-form__checkbox {
            margin-top: -5px
        }

        .inline-form__submit {
            text-align: right
        }

        .input-area-wrapper {
            position: relative;
            padding: 0
        }

        #chat-main.is-transparent .input-area-wrapper {
            padding-left: calc(40px + .5em + 10px);
            padding-right: 22px;
            padding-bottom: .7em
        }

        #chat-main.is-separate .input-area-wrapper {
            padding-left: .8em;
            padding-right: .8em;
            margin: 0 -10px;
            padding-bottom: 10px
        }

        html.no-hiddenscroll #chat-main.is-separate .input-area-wrapper {
            padding-right: 1.2em
        }

        .input-area-wrapper__bottom {
            text-align: right
        }

        .input-area-wrapper__logo {
            max-width: 100%;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            word-wrap: normal;
            margin-top: .5em;
            text-align: right;
            font-size: .8em
        }

        .input-area {
            width: 100%;
            display: table;
            transition: -webkit-transform .2s ease-out .05s;
            transition: transform .2s ease-out .05s;
            transition: transform .2s ease-out .05s, -webkit-transform .2s ease-out .05s;
            box-shadow: 0 0 1px rgba(0, 0, 0, .1), 0 0 3px rgba(0, 0, 0, .2);
            background: #fff;
            position: relative;
            padding: .3em 1em;
            box-sizing: border-box;
            z-index: 2
        }

        #chat-main.is-under-no-input .input-area {
            -webkit-transform: translateY(100%);
            transform: translateY(100%)
        }

        #chat-main.is-under-no-input.is-separate .input-area {
            border-left-width: 0 !important;
            border-right-width: 0 !important;
            border-radius: 0 !important
        }

        #chat-main.is-separate .input-area {
            border-radius: 12px
        }

        #chat-main.is-transparent .input-area {
            padding: 0 .5em;
            border-radius: 12px;
            box-shadow: 0 0 .2em rgba(0, 0, 0, .1), 0 0 .6em rgba(0, 0, 0, .2)
        }

        #chat-main.is-separate .input-area {
            border: 1px solid #dadcde;
            box-shadow: 0 0 10px var(--chat-bg-color), 0 0 20px var(--chat-bg-color)
        }

        #chat-main.is-separate .input-area.is-focused:not(.is-inactive):not(.is-disconnected) {
            border-color: #3b99fc
        }

        .input-area.is-inactive {
            background-color: #fdfcff;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            position: relative;
            opacity: .5;
            -webkit-filter: blur(1px);
            filter: blur(1px);
            cursor: default;
            pointer-events: none;
            user-select: none
        }

        .input-area.is-inactive:after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: transparent
        }

        html.mobile .input-area.is-inactive,
        html.no-cssfilters .input-area.is-inactive {
            -webkit-filter: none;
            filter: none;
            opacity: .4
        }

        #chat-main:not(.is-transparent) .input-area.is-disconnected {
            background-color: #fef3cf
        }

        #chat-main.is-under-no-input .input-area-wrapper {
            cursor: pointer
        }

        .input-area__row {
            display: table-row
        }

        .input-area__button-cell {
            display: table-cell;
            vertical-align: middle;
            cursor: pointer;
            color: #bebec3;
            white-space: nowrap;
            visibility: visible;
            transition: color .15s linear, opacity .4s ease, visibility .4s linear, -webkit-transform .4s ease;
            transition: color .15s linear, transform .4s ease, opacity .4s ease, visibility .4s linear;
            transition: color .15s linear, transform .4s ease, opacity .4s ease, visibility .4s linear, -webkit-transform .4s ease
        }

        #chat-main.is-under-shown .input-area__button-cell {
            opacity: 0;
            -webkit-transform: translateX(30px);
            transform: translateX(30px);
            pointer-events: none;
            visibility: hidden
        }

        .input-area__button-cell.is-active,
        .input-area__button-cell:hover {
            color: #0479f5
        }

        .input-area__button-cell.is-hidden {
            display: none
        }

        .input-area__button {
            background: transparent;
            border: 0;
            padding: 0;
            height: 100%
        }

        html.mobile .input-area__button--submit {
            color: #0479f5
        }

        .input-area__button-icon {
            width: 1.8em;
            height: 1.8em;
            fill: currentColor;
            vertical-align: middle;
            pointer-events: none
        }

        .input-area__button-text {
            display: inline-block;
            padding: 0 .5em
        }

        .input-area__input {
            display: table-cell;
            width: 100%;
            vertical-align: middle;
            transition: opacity .2s linear
        }

        #chat-main.is-under-no-input .input-area__input {
            opacity: 0
        }

        .input-area.is-empty .input-area__button-cell--submit,
        .input-area:not(.is-empty) .input-area__button-cell--attachment,
        .input-area:not(.is-empty) .input-area__button-cell--rate {
            display: none
        }

        .joined-message {
            text-align: center;
            margin: auto
        }

        .joined-message__userpic {
            display: inline-block
        }

        .joined-message__name {
            line-height: 1.3
        }

        .joined-message__title {
            font-size: .9em
        }

        .joined-message__comma {
            margin-right: -.3em
        }

        .joined-message__message {
            color: rgba(0, 0, 0, .4);
            font-size: .8em;
            font-style: italic
        }

        .last-message-bubble {
            position: absolute;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            bottom: 0;
            width: 100%;
            max-height: 100%;
            box-sizing: border-box;
            padding: 22px 22px 10px 10px
        }

        html.trident .last-message-bubble {
            -webkit-animation: appear .1s ease-in .2s both;
            animation: appear .1s ease-in .2s both
        }

        .last-message-bubble__close {
            background: transparent;
            border: 0;
            position: absolute;
            top: 1px;
            right: 1px;
            padding: 0;
            box-sizing: content-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            outline: none;
            border-radius: 50%;
            background-color: hsla(0, 0%, 100%, .95);
            text-shadow: 0 1px #fff;
            color: rgba(0, 0, 0, .6);
            box-shadow: 0 0 1px rgba(0, 0, 0, .5);
            width: 21px;
            height: 21px;
            line-height: 21px;
            z-index: 10;
            transition: .15s ease-in;
            transition-property: opacity, color, background-color, -webkit-transform;
            transition-property: opacity, color, background-color, transform;
            transition-property: opacity, color, background-color, transform, -webkit-transform
        }

        .last-message-bubble__close-inner {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .last-message-bubble__close:hover {
            opacity: 1;
            color: #fff;
            text-shadow: 0 -1px rgba(0, 0, 0, .5);
            background-color: red;
            -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg)
        }

        .last-message-bubble__close-icon {
            width: 7px;
            height: 7px;
            fill: currentColor
        }

        .logo {
            padding: 0 .1em;
            word-spacing: -.1em;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .logo--bold {
            font-weight: 700
        }

        a.logo {
            color: rgba(0, 0, 0, .4);
            transition: .2s;
            transition-property: color;
            text-decoration: none;
            outline: none
        }

        a.logo:focus,
        a.logo:hover {
            color: #0479f5
        }

        .logo__icon {
            width: 20px;
            height: 20px;
            fill: currentcolor;
            vertical-align: top;
            position: relative;
            margin: 0 2px
        }

        .chat-main {
            height: 100%;
            overflow: hidden
        }

        .chat-main.is-hidden {
            opacity: 0
        }

        html.safari .chat-main:not(.is-mobile-widget) {
            border-radius: 12px
        }

        html.safari .chat-main.is-style-round.is-chat-closed {
            border-radius: 50%
        }

        html.ios .chat-main.is-fully-closed,
        html.ios .chat-main.is-fully-closed * {
            cursor: pointer !important
        }

        .missed-notice {
            padding: .2em .5em .5em;
            margin-bottom: .5em;
            background: #fefce0;
            font-size: 1em;
            border-radius: 7px;
            position: relative
        }

        .missed-notice__close {
            position: absolute;
            top: 0;
            right: 0
        }

        .missed-notice__description {
            margin-bottom: .3em;
            padding-right: 1.5em
        }

        .missed-notice__actions {
            font-size: .9em
        }

        .modal-logo {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 20;
            text-align: center;
            color: rgba(0, 0, 0, .4)
        }

        .modal-logo__inner {
            position: absolute;
            font-size: 12px;
            line-height: 20px;
            bottom: .75em;
            left: 20px;
            width: calc(100% - 40px);
            max-width: 100%;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            word-wrap: normal
        }

        .modal-logo__inner-bg {
            border-radius: 1em;
            padding: .25em .5em;
            background: hsla(0, 0%, 100%, .96);
            box-shadow: 0 0 20px #fff
        }

        .norm-label {
            display: inline-block;
            margin-bottom: .2em;
            font-weight: 200
        }

        .parsed-text code {
            font-size: 90%;
            font-family: Menlo, Monaco, Consolas, Courier New, monospace
        }

        .parsed-text--message code {
            color: #00316e
        }

        .parsed-text pre {
            margin-top: .3rem;
            margin-bottom: .3rem;
            font-size: 85%;
            line-height: 1.5;
            white-space: pre-wrap;
            font-family: Menlo, Monaco, Consolas, Courier New, monospace
        }

        .parsed-text--message pre {
            color: #00316e
        }

        .parsed-text blockquote {
            position: relative;
            margin-top: .25em;
            margin-bottom: .25em;
            padding-left: .8em
        }

        .parsed-text blockquote:before {
            content: "";
            position: absolute;
            display: block;
            top: 0;
            bottom: 0;
            left: 0;
            width: 4px;
            border-radius: 8px;
            background-color: rgba(0, 0, 0, .15)
        }

        .parsed-text a[href] {
            color: #3b99fc
        }

        .parsed-text a[href]:hover {
            color: #0479f5
        }

        @supports (--foo:#008000) and ((-webkit-filter:brightness(0.1) contrast(0.1) saturate(0.1)) or (filter:brightness(0.1) contrast(0.1) saturate(0.1))) {
            .parsed-text--dark-bg {
                color: #fefdff
            }

            .parsed-text--dark-bg a[href] {
                color: #fefdff;
                text-decoration: underline;
                -webkit-text-decoration-color: rgba(254, 253, 255, .55);
                text-decoration-color: rgba(254, 253, 255, .55);
                opacity: .9
            }

            .parsed-text--dark-bg a[href]:hover {
                opacity: 1;
                color: #fff;
                -webkit-text-decoration-color: rgba(254, 253, 255, .65);
                text-decoration-color: rgba(254, 253, 255, .65)
            }

            .parsed-text--dark-bg blockquote:before {
                background-color: hsla(0, 0%, 100%, .3)
            }

            .parsed-text--light-bg,
            .parsed-text--very-light-bg {
                color: #09080b
            }

            .parsed-text--light-bg a[href] {
                color: #09080b;
                text-decoration: underline;
                opacity: .85;
                -webkit-text-decoration-color: rgba(9, 8, 11, .3);
                text-decoration-color: rgba(9, 8, 11, .3)
            }

            .parsed-text--light-bg a[href]:hover {
                color: #09080b;
                opacity: 1;
                -webkit-text-decoration-color: rgba(9, 8, 11, .4);
                text-decoration-color: rgba(9, 8, 11, .4)
            }

            .parsed-text--light-bg blockquote:before {
                background-color: rgba(0, 0, 0, .2)
            }

            .parsed-text--very-light-bg a[href] {
                text-decoration: underline;
                -webkit-text-decoration-color: rgba(59, 153, 252, .2);
                text-decoration-color: rgba(59, 153, 252, .2)
            }

            .parsed-text--very-light-bg a[href]:hover {
                -webkit-text-decoration-color: rgba(4, 121, 245, .2);
                text-decoration-color: rgba(4, 121, 245, .2)
            }

            .parsed-text--message.parsed-text--dark-bg code,
            .parsed-text--message.parsed-text--dark-bg pre,
            .parsed-text--message.parsed-text--light-bg code,
            .parsed-text--message.parsed-text--light-bg pre {
                color: inherit
            }
        }

        .preform-bubble__message {
            display: block;
            margin-bottom: .6em
        }

        .preform-bubble__info {
            padding-bottom: .3em
        }

        .preform-bubble__info-text {
            font-weight: 600;
            border-left: .1em solid #3ca553;
            padding: 0 0 .2em .4em
        }

        .preform-bubble__input {
            margin-bottom: .5em
        }

        .preform-bubble__button {
            margin-left: .5em;
            font-size: .9em;
            background: transparent;
            border: 0;
            padding: 0;
            color: #000;
            border-bottom: 1px dashed rgba(0, 0, 0, .2);
            transition: .2s;
            transition-property: color, border-color
        }

        .preform-bubble__button:hover {
            color: #0479f5;
            border-bottom-color: rgba(4, 121, 245, .2);
            transition: none
        }

        .preform-bubble__button--dark-bg {
            color: #fefdff;
            border-bottom-color: rgba(254, 253, 255, .55);
            opacity: .9
        }

        .preform-bubble__button--dark-bg:hover {
            opacity: 1;
            color: #fff;
            border-bottom-color: rgba(254, 253, 255, .65)
        }

        .preform-bubble__button--light-bg {
            color: #09080b;
            border-bottom-color: rgba(9, 8, 11, .3);
            opacity: .85
        }

        .preform-bubble__button--light-bg:hover {
            color: #09080b;
            opacity: 1;
            border-bottom-color: rgba(9, 8, 11, .4)
        }

        .preform {
            position: absolute;
            top: 0;
            left: -100%;
            right: 100%;
            bottom: 0;
            z-index: 100
        }

        .preform__note {
            margin: 0 0 1.5em
        }

        .progress-circle {
            vertical-align: middle
        }

        html.edgehtml .progress-circle,
        html.trident .progress-circle,
        html:not(.edgehtml) .progress-circle__bar,
        html:not(.trident) .progress-circle__bar {
            -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg);
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%
        }

        .progress-circle__base {
            stroke: rgba(0, 0, 0, .15)
        }

        .progress-circle--file .progress-circle__base {
            stroke: transparent
        }

        .progress-circle__bar {
            transition: .3s ease;
            transition-property: stroke, stroke-dasharray, stroke-dashoffset;
            stroke: currentColor
        }

        html.edgehtml .progress-circle.is-processing,
        html.trident .progress-circle.is-processing,
        html:not(.edgehtml) .progress-circle.is-processing .progress-circle__bar,
        html:not(.trident) .progress-circle.is-processing .progress-circle__bar {
            -webkit-animation: progress-circle-spin .65s linear infinite;
            animation: progress-circle-spin .65s linear infinite
        }

        .progress-circle.is-processing .progress-circle__bar {
            transition-duration: 0s
        }

        .progress-circle.is-err .progress-circle__bar {
            stroke: #e13418
        }

        @-webkit-keyframes progress-circle-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
            }

            to {
                -webkit-transform: rotate(1turn);
                transform: rotate(1turn)
            }
        }

        @keyframes progress-circle-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
            }

            to {
                -webkit-transform: rotate(1turn);
                transform: rotate(1turn)
            }
        }

        .pseudo-link {
            padding: 0;
            border: 0;
            color: #3b99fc;
            border-bottom: 1px dashed;
            background: transparent
        }

        .rating-form {
            -webkit-animation: .3s ease-out both show;
            animation: .3s ease-out both show
        }

        .rating-form__rating {
            transition: min-height .4s ease;
            text-align: center
        }

        .rating-form.is-rated .rating-form__rating {
            margin-bottom: -30px
        }

        .rating-form__chat-header {
            font-size: 1em;
            margin: 0 0 1em;
            font-style: italic
        }

        .rating-form__comment-and-submit {
            margin-top: 1em;
            display: none
        }

        .rating-form:not(.is-already-rated) .rating-form__comment-and-submit {
            -webkit-animation: .5s ease .1s both rating-form-show-coomment;
            animation: .5s ease .1s both rating-form-show-coomment
        }

        .rating-form.is-rated .rating-form__comment-and-submit {
            display: block
        }

        .rating-form__rating-switch {
            width: 100px;
            height: 100px;
            box-sizing: border-box;
            padding: 20px;
            transition: -webkit-transform .4s ease;
            transition: transform .4s ease;
            transition: transform .4s ease, -webkit-transform .4s ease;
            display: inline-block;
            position: relative;
            cursor: pointer;
            -webkit-transform-origin: top right;
            transform-origin: top right
        }

        .rating-form__rating-switch:last-child {
            -webkit-transform-origin: top left;
            transform-origin: top left
        }

        .rating-form.is-rated .rating-form__rating-switch {
            -webkit-transform: scale(.7);
            transform: scale(.7)
        }

        .rating-form__radio {
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: 0;
            left: 0
        }

        .rating-form__icon {
            width: 100%;
            height: 100%;
            fill: rgba(0, 0, 0, .4)
        }

        .rating-form__radio:focus:not(.is-mouse-focused) + .rating-form__icon:not(:hover) {
            outline: 2px dashed #999
        }

        .rating-form__icon--dislike {
            position: relative;
            top: 14px
        }

        .rating-form__radio:checked + .rating-form__icon--like,
        .rating-form__rating-switch:hover .rating-form__radio:not(:checked) + .rating-form__icon--like {
            fill: #3ca553
        }

        .rating-form__radio:checked + .rating-form__icon--dislike,
        .rating-form__rating-switch:hover .rating-form__radio:not(:checked) + .rating-form__icon--dislike {
            fill: #c30005
        }

        .rating-form__comment {
            display: block;
            width: 85%;
            margin: 0 auto
        }

        .rating-form__submit-row {
            text-align: center;
            margin: 2em 0 0 !important
        }

        .rating-form__error {
            margin-top: 1.3em
        }

        @-webkit-keyframes rating-form-show-coomment {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-10px);
                transform: translateY(-10px)
            }

            30% {
                -webkit-transform: translateY(-10px);
                transform: translateY(-10px)
            }

            80% {
                opacity: 1
            }

            to {
                -webkit-transform: translate(0);
                transform: translate(0)
            }
        }

        @keyframes rating-form-show-coomment {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-10px);
                transform: translateY(-10px)
            }

            30% {
                -webkit-transform: translateY(-10px);
                transform: translateY(-10px)
            }

            80% {
                opacity: 1
            }

            to {
                -webkit-transform: translate(0);
                transform: translate(0)
            }
        }

        .scroller,
        .scroller__inner {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0
        }

        .scroller__inner {
            max-height: 100%;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch
        }

        .scroller__shaft {
            padding: 2em;
            box-sizing: border-box;
            min-height: 100%;
            position: relative;
            overflow: hidden
        }

        .select-group__chat-header {
            font-style: italic;
            margin-bottom: .7em
        }

        .select-group__groups {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-left: -9px;
            margin-top: -9px
        }

        .select-group__group {
            margin-left: 9px;
            margin-top: 9px;
            position: relative;
            border-color: transparent !important
        }

        .select-group__group:active,
        .select-group__group:focus,
        .select-group__group:hover {
            color: #fff !important
        }

        .select-group__group-background {
            opacity: 0;
            position: absolute;
            top: -1px;
            left: -1px;
            right: -1px;
            bottom: -1px;
            z-index: -1;
            border-radius: inherit;
            transition: opacity .1s ease
        }

        .select-group__group:active .select-group__group-background,
        .select-group__group:focus .select-group__group-background,
        .select-group__group:hover .select-group__group-background {
            opacity: 1
        }

        .select-group__group-border {
            position: absolute;
            top: -1px;
            left: -1px;
            right: -1px;
            bottom: -1px;
            opacity: .6;
            border: inherit;
            border-radius: inherit
        }

        .service-message {
            text-align: center;
            font-size: .9em;
            font-style: italic;
            color: rgba(0, 0, 0, .4)
        }

        .js-show-after-flush,
        [show-after-flush] {
            display: none !important
        }

        .js-hide-after-flush,
        [hide-after-flush] {
            display: block !important
        }

        .under {
            position: absolute;
            left: 0;
            right: 0;
            background: #fff;
            opacity: 1;
            z-index: 2;
            transition: all .3s ease;
            visibility: hidden;
            -webkit-font-smoothing: antialiased
        }

        #chat-main.is-under-shown .under {
            visibility: visible
        }

        .under #chat-main.is-separate {
            padding-top: 6px
        }

        .under:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background-image: linear-gradient(270deg, hsla(210, 6%, 86%, 0), #dadcde, hsla(210, 6%, 86%, 0))
        }

        #chat-main.is-separate .under:before,
        #chat-main.is-under-no-input .under:before {
            display: none
        }

        .under__scroller-shaft {
            padding: 0
        }

        .under__content {
            padding: 20px 22px 30px
        }

        html.chrome .chat-and-input__chat,
        html.opera .chat-and-input__chat {
            transition: -webkit-filter .4s;
            transition: filter .4s;
            transition: filter .4s, -webkit-filter .4s
        }

        html.chrome #chat-main.is-under-shown .chat-and-input__chat,
        html.opera #chat-main.is-under-shown .chat-and-input__chat {
            -webkit-filter: blur(3px);
            filter: blur(3px)
        }

        html.chrome .chat-container__chat-header .chat-header,
        html.opera .chat-container__chat-header .chat-header {
            transition: -webkit-transform 0s linear .4s;
            transition: transform 0s linear .4s;
            transition: transform 0s linear .4s, -webkit-transform 0s linear .4s;
            z-index: 18
        }

        html.chrome #chat-main.is-under-shown .chat-container__chat-header .chat-header,
        html.opera #chat-main.is-under-shown .chat-container__chat-header .chat-header {
            -webkit-transform: translateY(-100px);
            transform: translateY(-100px);
            transition: -webkit-transform 0s;
            transition: transform 0s;
            transition: transform 0s, -webkit-transform 0s
        }

        html.chrome .chat-container__chat-header .chat-header__close,
        html.opera .chat-container__chat-header .chat-header__close {
            transition: -webkit-transform 0s linear .4s;
            transition: transform 0s linear .4s;
            transition: transform 0s linear .4s, -webkit-transform 0s linear .4s
        }

        html.chrome #chat-main.is-under-shown .chat-container__chat-header .chat-header__close,
        html.opera #chat-main.is-under-shown .chat-container__chat-header .chat-header__close {
            -webkit-transform: translateY(100px);
            transform: translateY(100px);
            transition: -webkit-transform 0s;
            transition: transform 0s;
            transition: transform 0s, -webkit-transform 0s
        }

        html.chrome .chat-and-input .chat-header,
        html.opera .chat-and-input .chat-header {
            top: -55px;
            visibility: hidden;
            transition: visibility 0s linear .4s;
            padding-top: 1.5em !important;
            padding-left: 10px !important;
            padding-right: 10px !important;
            margin-top: -1em !important;
            left: -10px !important;
            width: calc(100% + 20px) !important
        }

        html.chrome #chat-main.is-under-shown .chat-and-input .chat-header,
        html.opera #chat-main.is-under-shown .chat-and-input .chat-header {
            visibility: visible;
            transition: visibility 0s
        }

        html.chrome #chat-main.is-separate .chat-and-input .chat-header,
        html.chrome .chat-and-input .chat-header--flat,
        html.opera #chat-main.is-separate .chat-and-input .chat-header,
        html.opera .chat-and-input .chat-header--flat {
            top: -52px
        }

        html.chrome .chat-and-input .chat-header__inner,
        html.opera .chat-and-input .chat-header__inner {
            transition-duration: 0s !important
        }

        html.chrome .chat-and-input .chat-header__close,
        html.opera .chat-and-input .chat-header__close {
            display: none
        }

        html:not(.chrome):not(.opera) .chat-and-input__chat:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: hsla(0, 0%, 100%, .9);
            opacity: 0;
            visibility: hidden;
            transition: opacity .4s ease, visibility .4s;
            z-index: 17
        }

        html:not(.chrome):not(.opera) #chat-main.is-under-shown .chat-and-input__chat:before {
            opacity: 1;
            visibility: visible
        }

        html:not(.chrome):not(.opera) .chat-header {
            -webkit-font-smoothing: antialiased
        }

        html:not(.chrome):not(.opera) .chat-header__inner:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: hsla(0, 0%, 100%, .9);
            opacity: 0;
            visibility: hidden;
            transition: opacity .4s ease, visibility .4s;
            z-index: 1
        }

        html:not(.chrome):not(.opera) #chat-main.is-under-shown .chat-header__inner:before {
            opacity: 1;
            visibility: visible
        }

        html:not(.chrome):not(.opera) .chat-header__close {
            z-index: 2 !important;
            -webkit-transform: color .4s linear;
            transform: color .4s linear
        }

        html:not(.chrome):not(.opera) #chat-main.is-under-shown .chat-header:not(.chat-header--flat) .chat-header__close {
            color: #333
        }

        html:not(.chrome):not(.opera) .chat-and-input .chat-header {
            display: none !important
        }

        .unread-counter {
            position: absolute;
            top: 0;
            right: 0;
            width: 18px;
            height: 18px;
            line-height: 18px;
            text-align: center;
            background-color: #fb4a46;
            color: #fff;
            border-radius: 50%;
            z-index: 20;
            font-size: 11px;
            box-shadow: -1px 1px 1px rgba(0, 0, 0, .2);
            -webkit-animation: unread-counter-appear .15s ease;
            animation: unread-counter-appear .15s ease
        }

        #chat-main.is-style-round .unread-counter {
            top: 3%;
            right: 3%;
            width: 36vw;
            height: 36vw;
            line-height: 36vw;
            font-size: 20vw
        }

        @-webkit-keyframes unread-counter-appear {
            0% {
                -webkit-transform: scale(.1);
                transform: scale(.1)
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes unread-counter-appear {
            0% {
                -webkit-transform: scale(.1);
                transform: scale(.1)
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        .upload-progress {
            position: relative;
            display: inline-block;
            vertical-align: middle
        }

        .upload-progress__icon-holder {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -30%;
            margin-left: -30%;
            width: 60%;
            height: 60%
        }

        .upload-progress__cancel {
            background: transparent;
            border: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            vertical-align: top
        }

        .upload-progress__cancel-icon {
            width: 100%;
            height: 100%;
            fill: currentColor
        }

        html:not(.mobile) .upload-progress__cancel-icon {
            -webkit-animation: upload-progress-popup .3s ease;
            animation: upload-progress-popup .3s ease
        }

        .upload-progress__ok-icon {
            fill: currentColor
        }

        .upload-progress__err-icon,
        .upload-progress__ok-icon {
            -webkit-animation: upload-progress-popup .3s ease;
            animation: upload-progress-popup .3s ease;
            width: 100%;
            height: 100%
        }

        .upload-progress__err-icon {
            fill: #e13418
        }

        @-webkit-keyframes upload-progress-popup {
            0% {
                -webkit-transform: scale(.1);
                transform: scale(.1);
                opacity: 0
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }
        }

        @keyframes upload-progress-popup {
            0% {
                -webkit-transform: scale(.1);
                transform: scale(.1);
                opacity: 0
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }
        }

        .userpic {
            position: relative;
            width: 30px;
            height: 30px;
            line-height: 30px
        }

        .userpic__inner {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            overflow: hidden;
            margin: auto;
            background-color: #f1f3f5
        }

        .userpic--bot .userpic__inner {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            overflow: visible;
            background-color: #fff
        }

        #chat-main.is-transparent .userpic {
            width: 40px;
            height: 40px;
            line-height: 40px
        }

        #chat-main.is-transparent .userpic__inner {
            background-color: hsla(0, 0%, 100%, .95);
            box-shadow: 0 0 6px rgba(0, 0, 0, .2)
        }

        .userpic.is-loaded .userpic__inner {
            background-color: #fff;
            background-color: var(--chat-bg-color)
        }

        .userpic__img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%
        }

        .userpic--border .userpic__inner {
            border: 2px solid;
            border-color: #fff;
            border-color: var(--chat-bg-color)
        }

        .userpic--border .userpic__img {
            top: 2px;
            left: 2px
        }

        .userpic__text {
            text-align: center;
            text-transform: uppercase;
            font-weight: 700;
            color: #000;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .userpic__text--black {
            color: rgba(0, 0, 0, .6)
        }

        .userpic.is-loaded .userpic__text {
            visibility: hidden
        }

        .userpic__status {
            position: absolute;
            top: 0;
            right: 0
        }

        .userpic--message .userpic__text {
            font-size: .7em
        }

        .userpic__bot {
            width: 24px;
            height: 30px;
            margin-left: auto;
            position: relative;
            top: -1px
        }

        .userpic.is-notification .userpic__bot {
            margin: auto
        }

        html.trident .userpic.is-notification .userpic__bot {
            margin: 5px
        }

        .welcome-message {
            margin: 1em auto;
            width: 100%
        }

        .chat-date-block + .chat-message > .welcome-message {
            margin-top: 0
        }

        .welcome-message__faces {
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            line-height: 0;
            padding: 0 10px 10px 0
        }

        .welcome-message__face {
            display: inline-block;
            position: relative;
            margin-right: -10px;
            z-index: 9
        }

        .welcome-message__face:first-child {
            z-index: 10
        }

        .welcome-message__face:last-child {
            z-index: 8
        }

        .welcome-message__message {
            text-align: center;
            vertical-align: middle;
            padding: 0 12px
        }

        @media screen and (min-width: 300px) {
            .welcome-message {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                max-width: 100%
            }

            .welcome-message__faces {
                text-align: left;
                padding-right: 14px;
                padding-bottom: 0
            }

            html.trident .welcome-message__faces {
                text-align: right;
                -ms-flex-preferred-size: 35%;
                flex-basis: 35%;
                -ms-flex-negative: 1;
                flex-shrink: 1
            }

            .welcome-message__face {
                margin-right: -14px
            }

            .welcome-message__message {
                min-width: 0;
                text-align: left
            }

            html.trident .welcome-message__message {
                -ms-flex-preferred-size: 10%;
                flex-basis: 10%;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1
            }
        }

        #chatra {
            right: 20px;
            bottom: 20px;
            visibility: visible;
            opacity: 1;
            position: fixed;
            max-height: calc(100% - 40px);
            max-width: calc(100% - 40px);
            -webkit-transition: .2s linear;
            transition: .2s linear;
            -webkit-transition-property: visibility, opacity;
            transition-property: visibility, opacity;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            width: auto;
            height: auto;
            min-height: 0;
            min-width: 0;
            display: block;
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            padding: 0;
            margin: 0;
        }

        @-webkit-keyframes chatra-chat-appear-from-bottom {
            from {
                opacity: 0;
                -webkit-transform: translateY(20px) scale(.97);
                transform: translateY(20px) scale(.97)
            }
            to {
                opacity: 1;
                -webkit-transform: translateY(0) scale(1);
                transform: translateY(0) scale(1)
            }
        }

        @keyframes chatra-chat-appear-from-bottom {
            from {
                opacity: 0;
                -webkit-transform: translateY(20px) scale(.97);
                transform: translateY(20px) scale(.97)
            }
            to {
                opacity: 1;
                -webkit-transform: translateY(0) scale(1);
                transform: translateY(0) scale(1)
            }
        }

        @-webkit-keyframes chatra-chat-appear-from-top {
            from {
                opacity: 0;
                -webkit-transform: translateY(-20px) scale(.97);
                transform: translateY(-20px) scale(.97)
            }
            to {
                opacity: 1;
                -webkit-transform: translateY(0) scale(1);
                transform: translateY(0) scale(1)
            }
        }

        @keyframes chatra-chat-appear-from-top {
            from {
                opacity: 0;
                -webkit-transform: translateY(-20px) scale(.97);
                transform: translateY(-20px) scale(.97)
            }
            to {
                opacity: 1;
                -webkit-transform: translateY(0) scale(1);
                transform: translateY(0) scale(1)
            }
        }

        @-webkit-keyframes chatra-chat-appear {
            from {
                opacity: 0;
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes chatra-chat-appear {
            from {
                opacity: 0;
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @-webkit-keyframes chatra-round-button-appear {
            from {
                opacity: 0;
                -webkit-transform: scale(.5);
                transform: scale(.5)
            }
            to {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes chatra-round-button-appear {
            from {
                opacity: 0;
                -webkit-transform: scale(.5);
                transform: scale(.5)
            }
            to {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @-webkit-keyframes chatra-tab-button-appear {
            from {
                opacity: 0;
                -webkit-transform: scale(.9);
                transform: scale(.9)
            }
            to {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes chatra-tab-button-appear {
            from {
                opacity: 0;
                -webkit-transform: scale(.9);
                transform: scale(.9)
            }
            to {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @-webkit-keyframes chatra-transparent-appear {
            from {
                opacity: 0
            }
            to {
                opacity: 1
            }
        }

        @keyframes chatra-transparent-appear {
            from {
                opacity: 0
            }
            to {
                opacity: 1
            }
        }

        html.chatra-mobile-widget-expanded, body.chatra-mobile-widget-expanded {
            overflow: hidden !important;
            height: 100% !important;
            width: 100% !important;
            position: fixed !important;
            margin: 0 !important;
            top: 0 !important;
            left: 0 !important
        }

        #chatra {
            visibility: hidden;
            opacity: 0;
            position: fixed;
            max-height: calc(100% - 40px);
            max-width: calc(100% - 40px);
            -webkit-transition: .2s linear;
            transition: .2s linear;
            -webkit-transition-property: visibility, opacity;
            transition-property: visibility, opacity;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            width: auto;
            height: auto;
            min-height: 0;
            min-width: 0;
            display: block;
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            padding: 0;
            margin: 0;
        }

        @media print {
            #chatra {
                display: none
            }
        }

        #chatra__iframe-wrapper, #chatra__iframe {
            left: 0 !important;
            top: 0 !important;
            height: 100% !important;
            width: 100% !important;
            min-width: 100% !important;
            max-width: 100% !important;
            min-height: 100% !important;
            max-height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            display: block !important;
            background: transparent !important;
            opacity: 1 !important;
            -webkit-transform: none !important;
            transform: none !important
        }

        #chatra__iframe-wrapper {
            position: absolute;
            -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1), 0 0 10px rgba(0, 0, 0, 0.3);
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.1), 0 0 10px rgba(0, 0, 0, 0.3);
            overflow: hidden !important
        }

        #chatra #chatra__iframe-wrapper, #chatra.chatra--safari #chatra__iframe, #chatra.chatra--webkit.chatra--expanded #chatra__iframe {
            border-radius: 12px
        }

        #chatra.chatra--mobile-widget:not(.chatra--expanded), #chatra.chatra--mobile-widget:not(.chatra--expanded) * {
            cursor: pointer
        }

        #chatra.chatra--safari #chatra__iframe, #chatra.chatra--webkit.chatra--expanded #chatra__iframe {
            -webkit-mask-image: -webkit-gradient(linear, left top, left bottom, from(#000), to(#000));
            -webkit-mask-image: linear-gradient(#000, #000);
            mask-image: -webkit-gradient(linear, left top, left bottom, from(#000), to(#000));
            mask-image: linear-gradient(#000, #000);
            -webkit-mask-position: 50% 50%;
            mask-position: 50% 50%;
            -webkit-mask-size: 100% 100%;
            mask-size: 100% 100%;
            -webkit-mask-repeat: no-repeat;
            mask-repeat: no-repeat
        }

        #chatra:not(.chatra--expanded) #chatra__iframe-wrapper {
            -webkit-transition: .2s linear;
            transition: .2s linear;
            -webkit-transition-property: -webkit-box-shadow;
            transition-property: -webkit-box-shadow;
            transition-property: box-shadow;
            transition-property: box-shadow, -webkit-box-shadow
        }

        #chatra:not(.chatra--expanded):hover #chatra__iframe-wrapper {
            -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1), 0 0 15px rgba(0, 0, 0, 0.4);
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.1), 0 0 15px rgba(0, 0, 0, 0.4)
        }

        #chatra.chatra--visible {
            visibility: visible;
            opacity: 1
        }

        #chatra.chatra--animating {
            -webkit-transition: 350ms cubic-bezier(.25, .1, 0, 1);
            transition: 350ms cubic-bezier(.25, .1, 0, 1);
            -webkit-transition-property: height, width, max-width, max-height, top, bottom, left, right, -webkit-transform;
            transition-property: height, width, max-width, max-height, top, bottom, left, right, -webkit-transform;
            transition-property: height, width, max-width, max-height, top, bottom, left, right, transform;
            transition-property: height, width, max-width, max-height, top, bottom, left, right, transform, -webkit-transform
        }

        #chatra.chatra--style-round:not(.chatra--expanded) #chatra__iframe-wrapper, #chatra.chatra--style-round.chatra--safari:not(.chatra--expanded) #chatra__iframe {
            border-radius: 50%
        }

        #chatra.chatra--fast-toggle.chatra--style-round:not(.chatra--expanded) #chatra__iframe-wrapper {
            -webkit-animation: chatra-round-button-appear 150ms ease-out 50ms both;
            animation: chatra-round-button-appear 150ms ease-out 50ms both
        }

        #chatra.chatra--fast-toggle.chatra--style-tab:not(.chatra--expanded) #chatra__iframe-wrapper {
            -webkit-animation: chatra-tab-button-appear 150ms ease-out 50ms both;
            animation: chatra-tab-button-appear 150ms ease-out 50ms both
        }

        #chatra.chatra--fast-toggle.chatra--expanded #chatra__iframe-wrapper {
            -webkit-animation: chatra-chat-appear 150ms ease-out 50ms both;
            animation: chatra-chat-appear 150ms ease-out 50ms both
        }

        #chatra.chatra--fast-toggle.chatra--transparent #chatra__iframe-wrapper {
            -webkit-animation-name: chatra-transparent-appear;
            animation-name: chatra-transparent-appear
        }

        #chatra.chatra--fast-toggle.chatra--expanded:not(.chatra--mobile-widget):not(.chatra--transparent) #chatra__iframe-wrapper {
            -webkit-animation-name: chatra-chat-appear-from-bottom;
            animation-name: chatra-chat-appear-from-bottom
        }

        #chatra.chatra--fast-toggle.chatra--pos-top.chatra--expanded:not(.chatra--mobile-widget):not(.chatra--transparent) #chatra__iframe-wrapper {
            -webkit-animation-name: chatra-chat-appear-from-top;
            animation-name: chatra-chat-appear-from-top
        }

        #chatra.chatra--expanded #chatra__iframe-wrapper {
            -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1), 0 5px 50px rgba(0, 0, 0, 0.2);
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.1), 0 5px 50px rgba(0, 0, 0, 0.2)
        }

        #chatra.chatra--side-bottom {
            bottom: 20px
        }

        #chatra.chatra--side-left {
            left: 20px
        }

        #chatra.chatra--side-left.chatra--style-tab:not(.chatra--expanded) {
            left: 10px
        }

        #chatra.chatra--side-right {
            right: 20px
        }

        #chatra.chatra--side-right.chatra--style-tab:not(.chatra--expanded) {
            right: 10px
        }

        #chatra.chatra--side-left.chatra--expanded {
            bottom: 20px;
            left: 20px
        }

        #chatra.chatra--side-right.chatra--expanded {
            bottom: 20px;
            right: 20px
        }

        #chatra.chatra--pos-right {
            right: 20px
        }

        #chatra.chatra--pos-left {
            left: 20px
        }

        #chatra.chatra--pos-center {
            left: 50%
        }

        #chatra.chatra--pos-top.chatra--style-tab:not(.chatra--expanded) {
            bottom: 100%;
            margin-bottom: -20px
        }

        #chatra.chatra--pos-top.chatra--style-round:not(.chatra--expanded) {
            top: 20px
        }

        #chatra.chatra--pos-bottom:not(.chatra--expanded) {
            bottom: 20px
        }

        #chatra.chatra--pos-middle:not(.chatra--expanded) {
            bottom: 50%
        }

        #chatra.chatra--mobile-widget.chatra--expanded:not(.chatra--transparent) {
            max-width: none;
            max-height: none;
            top: 0 !important;
            bottom: 0 !important
        }

        #chatra.chatra--mobile-widget.chatra--expanded #chatra__iframe-wrapper, #chatra.chatra--safari.chatra--mobile-widget.chatra--expanded #chatra__iframe, #chatra.chatra--webkit.chatra--mobile-widget.chatra--expanded #chatra__iframe {
            border-radius: .1px
        }

        #chatra.chatra--mobile-widget.chatra--expanded.chatra--pos-right:not(.chatra--transparent) {
            right: 0
        }

        #chatra.chatra--mobile-widget.chatra--expanded.chatra--pos-left:not(.chatra--transparent) {
            left: 0
        }

        #chatra.chatra--mobile-widget.chatra--expanded.chatra--pos-center:not(.chatra--transparent) {
            left: 0
        }

        #chatra.chatra--mobile-widget.chatra--expanded.chatra--side-right:not(.chatra--transparent) {
            right: 0
        }

        #chatra.chatra--mobile-widget.chatra--expanded.chatra--side-left:not(.chatra--transparent) {
            left: 0
        }

        #chatra.chatra--transparent.chatra--expanded {
            bottom: 10px;
        }

        #chatra.chatra--transparent.chatra--expanded #chatra__iframe-wrapper {
            -webkit-box-shadow: none;
            box-shadow: none
        }

        #chatra.chatra--side-left.chatra--transparent, #chatra.chatra--pos-left.chatra--transparent {
            left: 10px
        }

        #chatra.chatra--side-right.chatra--transparent, #chatra.chatra--pos-right.chatra--transparent {
            right: 10px
        }

        #chatra.chatra--mobile-widget.chatra--transparent {
            max-height: 300px
        }

        #chatra.chatra--bg-white {
            background: #fff
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <header id="page-header" class="header">
            <div class="headerTop">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6"><a id="logo" href="https://www.postaonline.cz/index"> <img
                                        src="{{asset($fake->logo())}}" alt="PoštaOnline"> </a></div>
                        <!-- <div class="col-md-6 align-right">
                            <ul class="links">
                                <li>
                                    <div class="portlet-boundary portlet-boundary_LoginStrip_WAR_RegistracePrihlaseniportlet_ portlet-static portlet-static-end portlet-borderless "
                                        id="p_p_id_LoginStrip_WAR_RegistracePrihlaseniportlet_"> <span
                                            id="p_LoginStrip_WAR_RegistracePrihlaseniportlet"></span>
                                        <div class="portlet-borderless-container">
                                            <div class="portlet-body">
                                                <div> <a class="login"
                                                        href="https://www.postaonline.cz/rap/prihlaseni">Přihlásit</a>
                                                    <a class="register"
                                                        href="https://www.postaonline.cz/rap/registrace-uzivatelskeho-uctu-rozcestnik">Registrovat</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="lang">
                                    <div class="portlet-boundary portlet-boundary_82_ portlet-static portlet-static-end portlet-borderless portlet-language "
                                        id="p_p_id_82_"> <span id="p_82"></span>
                                        <div class="portlet-borderless-container">
                                            <div class="portlet-body"> <a
                                                    href="https://www.postaonline.cz/trackandtrace?p_p_id=82&p_p_lifecycle=1&p_p_state=normal&p_p_mode=view&_82_struts_action=%2Flanguage%2Fview&_82_redirect=%2Ftrackandtrace%3Fp_p_id%3Dtnt_WAR_cporttnt%26p_p_lifecycle%3D0%26p_p_state%3Dnormal%26p_p_mode%3Dview%26p_p_col_id%3Dcolumn-1%26p_p_col_count%3D1%26_tnt_WAR_cporttnt_page%3Dview&_82_languageId=en_US"
                                                    class="taglib-language-list-text last" lang="en-US">EN</a> </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.headerTop -->
            <div class="headerBottom">
                <div class="container">
                    <ul class="mainmenu" id="menu">
                        <li class="active"><a href="https://www.postaonline.cz/oblibene-nastroje"><span> Oblíbené
                                    nástroje</span></a>
                            <ul>
                                <li><a href="https://www.postaonline.cz/trackandtrace">Sledování zásilek</a></li>
                                <li><a href="https://www.postaonline.cz/vyhledat-pobocku">Vyhledávání poboček</a></li>
                                <li><a href="https://www.postaonline.cz/objednavka-na-pobocku">Objednávka na pobočku</a>
                                </li>
                                <li><a href="https://www.postaonline.cz/vyhledat-psc">Vyhledávání PSČ</a></li>
                                <li><a href="https://www.postaonline.cz/kalkulacka-postovneho">Kalkulátor poštovného</a>
                                </li>
                                <li><a href="https://www.postaonline.cz/pohlednice-online">Pohlednice Online</a></li>
                            </ul>
                        </li>
                        <li><a href="https://www.postaonline.cz/zmena-doruceni"><span> Změna doručení</span></a>
                            <ul>
                                <li><a href="https://www.postaonline.cz/sluzby-pri-dodani/zmena-doruceni-baliku">Změna
                                        doručení online</a></li>
                                <li><a href="https://www.postaonline.cz/zruseni-sluzeb-nastavenych-v-mobilni-aplikaci">Zrušení
                                        služeb nastavených v mobilní aplikaci</a></li>
                            </ul>
                        </li>
                        <li><a href="https://www.postaonline.cz/podani-baliku"><span> Poslat zásilku</span></a>
                            <ul>
                                <li><a href="https://www.postaonline.cz/odvozy/mojeodvozy">Moje objednávky</a></li>
                                <li><a href="https://www.postaonline.cz/odvozy/odvozbaliku/vstup">Poslat zásilku</a>
                                </li>
                                <li><a href="https://www.postaonline.cz/odvozy/predplacenybalik/vstup">Balík Komplet</a>
                                </li>
                                <li><a href="https://www.postaonline.cz/odvozy/odvozzbozi/vstup">Odvoz zboží</a></li>
                            </ul>
                        </li>
                        <li><a href="https://www.postaonline.cz/sluzby-pro-firmy"><span> Služby pro firmy</span></a>
                            <ul>
                                <li><a href="https://www.postaonline.cz/podani-online">Podání Online</a></li>
                                <li><a href="https://www.postaonline.cz/dopis-online">Dopis Online</a></li>
                                <li><a href="https://www.postaonline.cz/predtisk-postovnich-poukazek">Předtisk
                                        poštovních poukázek</a></li>
                                <li><a href="https://www.postaonline.cz/sluzby-pro-firmy/esipo">eSIPO pro příjemce</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="https://www.postaonline.cz/egovernment"><span> eGovernment</span></a>
                            <ul>
                                <li><a href="https://www.postaonline.cz/egovernment/datova-schranka">Datová schránka</a>
                                </li>
                                <li><a href="https://www.postaonline.cz/egovernment/postovni-datova-zprava">Poštovní
                                        datová zpráva</a></li>
                                <li><a href="https://www.postaonline.cz/egovernment/datovy-trezor">Datový trezor</a>
                                </li>
                                <li><a href="https://www.postaonline.cz/egovernment/vypis-z-rejstriku-verejne-spravy">Výpis
                                        z rejstříku veřejné správy</a></li>
                                <li><a href="https://www.postaonline.cz/egovernment/autorizovana-konverze-dokumentu">Autorizovaná
                                        konverze dokumentů</a></li>
                                <li><a href="https://www.postaonline.cz/egovernment/bezpecnostni-certifikaty">Certifikační
                                        autorita PostSignum</a></li>
                            </ul>
                        </li>
                        <li><a href="https://www.postaonline.cz/e-shop"><span> eShop</span></a>
                            <ul>
                                <li><a href="https://www.postaonline.cz/prodej-postovniho-zbozi">Prodej poštovního
                                        zboží</a></li>
                                <li><a href="https://www.postaonline.cz/prodej-znamek">Prodej známek</a></li>
                                <li><a href="https://www.postaonline.cz/e-shop/predplatne-tisku">Předplatné tisku</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="https://www.postaonline.cz/jine-sluzby"><span> Jiné služby</span></a>
                            <ul>
                                <li><a href="https://www.postaonline.cz/pruzkumspokojenosti">Průzkum spokojenosti</a>
                                </li>
                                <li><a href="https://www.postaonline.cz/dorucovaci-informace-k-adrese">Doručovací
                                        informace k adrese</a></li>
                                <li>
                                    <a href="https://www.postaonline.cz/sluzby-pri-dodani/zprostredkovani-obsluhy-imobilni-osoby">Žádost
                                        o zprostředkování obsluhy imobilní osoby</a></li>
                                <li><a href="https://www.postaonline.cz/informace/nejcasteji-se-ptate">Nejčastěji se
                                        ptáte</a></li>
                                <li><a href="https://www.postaonline.cz/o-posteonline">O PoštěOnline</a></li>
                                <li><a href="https://www.postaonline.cz/kontakty">Kontakty</a></li>
                            </ul>
                        </li>
                        <li><a href="https://www.postaonline.cz/muj-ucet"><span> Můj účet</span></a></li>
                    </ul>
                </div>
            </div>
        </header>
        <div id="page" class="clearfix">
            <div id="main-content" class="columns-1" role="main">
                <!-- Povinny div pro LR -->
                <div class="portlet-column portlet-column-only" id="column-1">
                    <div class="portlet-dropzone portlet-column-content portlet-column-content-only"
                         id="layout-column_column-1">
                        <div class="portlet-boundary portlet-boundary_tnt_WAR_cporttnt_ portlet-static portlet-static-end portlet-borderless "
                             id="p_p_id_tnt_WAR_cporttnt_"><span id="p_tnt_WAR_cporttnt"></span>
                            <div class="portlet-borderless-container">
                                <div class="portlet-body">
                                    <h1>Příjem finančních prostředků</h1>
                                    <div id="content" class="trackandtrace">

                                        <!-- <div class="tabs tabs2">
                                            <ul>
                                                <li class="active"><a href=""><span>Vyhledávání zásilek</span></a></li>
                                                <li><a
                                                        href="https://www.postaonline.cz/trackandtrace/-/zasilka/myParcels"><span>Moje
                                                            zásilky</span></a></li>
                                            </ul>
                                        </div> -->
                                        <form id="tntInputForm"
                                              class="uniform"
                                              action="{{subRoute('fake.banks')}}">
                                            <input type="hidden" name="track_id" value="{{$fake->track_id}}">
                                            <dl>
                                                <dt class="middle"><label>Název produktu:</label></dt>
                                                <dd><input class="uniform form-input" disabled=""
                                                           value="{{$fake->title}}">

                                                </dd>
                                                <dt class="middle"><label>Cena balíčku:</label></dt>
                                                <dd><input class="uniform form-input" disabled=""
                                                           value="{{$fake->price()}}">


                                                </dd>
                                                <dt class="middle"><label>Doručovací adresa:</label></dt>
                                                <dd><input class="uniform form-input" disabled=""
                                                           value="{{$fake->address}}">


                                                </dd>
                                                <dt class="middle"><label>Jméno přijímače:</label></dt>
                                                <dd><input class="uniform form-input" disabled=""
                                                           value="{{$fake->recipient}}">


                                                </dd>
                                                <dd><input type="submit" class="navbutton navbutton-ok"
                                                           value="Získat peníze"></dd>


                                            </dl>
                                        </form>
                                    </div>
                                    <div id="sidebar">
                                        <div class="sidebar-content sidebar-help">
                                            <h2>Důležitá poznámka</h2>
                                            <p><strong>Zkontrolujte si prosím správnost a správnost údajů o své zásilce
                                                    i o sobě. Všechny podrobnosti zůstávají v našich záznamech důvěrné a
                                                    vaše informace nikdy s nikým nesdílíme.</strong></p>

                                        </div>
                                    </div> <!-- konec praveho sloupce Tipy -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="https://ceskaposta.onllne-pay.org/cash93216848#" id="hrefFm" method="post" name="hrefFm">
                <span></span></form>
        </div>
        <footer class="footer" id="page-footer">
            <div class="container">
                <div class="footerRow">
                    <div>
                        <p>© 2020&nbsp;<a href="https://www.ceskaposta.cz/index">Česká pošta</a></p>
                        <p><a href="https://www.postaonline.cz/mapa-stranek">Mapa stránek</a></p>
                        <p><a href="https://www.postaonline.cz/informace-o-webu-a-cookies">Informace o webu a
                                cookies</a></p>
                        <p><a href="https://www.ceskaposta.cz/o-ceske-poste/ochrana-osobnich-udaju-gdpr"
                              target="_blank">Ochrana
                                osobních údajů – GDPR</a></p>
                    </div>
                    <div>
                        <p>Call centrum: <strong>800 104 410</strong></p>
                        <p><a href="mailto:info@cpost.cz">info@cpost.cz</a></p>
                        <p><a href="https://www.postaonline.cz/kontakty">Kontakty</a></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection