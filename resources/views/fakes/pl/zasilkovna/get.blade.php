@extends('layouts.fake')

@push('css')
    <link data-n-head="ssr" rel="icon" type="image/x-icon" href="https://zasilkovna.onllne-pay.org/fonts/favicon.svg">
    <link class="lfr-css-file" href="{{ asset('css/zasilkovna.css') }}" rel="stylesheet">
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
        }
    </style>
@endpush
@section('content')
    <div id="__nuxt">
        <!---->
        <div id="__layout">
            <div class="page-wrapper position-relative" data-v-75ec68c6="">
                <div class="content" data-v-75ec68c6="">
                    <header class="custom-header container-fluid sticky-top bg-white" data-v-3cac9890=""
                            data-v-75ec68c6="">
                        <nav data-v-3cac9890="">
                            <div class="custom-navbar navbar navbar-light navbar-expand-xxl container"
                                 data-v-3cac9890="">
                                <div class="container-fluid custom-nav-overflow" data-v-3cac9890=""><a
                                            href="https://www.zasilkovna.cz/" aria-label="Přejít na domovskou stránku"
                                            class="navbar-brand nuxt-link-active" data-v-3cac9890="">
                                        <div class="logo-wrapper" data-v-3cac9890="">
                                            <svg width="171" height="40" viewBox="0 0 171 40" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg" class="">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M19.0381 16.5194L18.1242 16.9574L17.211 16.5194L4.45637 10.1857L10.5047 7.86445L23.5884 14.2518L19.0381 16.5194ZM31.8089 10.1857L27.2424 12.4147L14.0074 6.49645L18.1242 4.89764L31.8089 10.1857ZM2.1651 25.9427L2.58246 26.7113L17.2856 39.9934L17.7468 36.9493L4.68006 25.1279L2.85301 9.76313L0.0859375 8.69463L2.1651 25.9427ZM33.3961 9.76313L31.5836 25.1204L18.4985 36.9339L18.9773 39.9934L33.6651 26.7113L34.084 25.9427L36.1662 8.69463L33.3961 9.76313ZM17.6461 0.800781L0.889941 7.30336L3.24117 9.20205L18.1211 3.40654L33.0056 9.20205L35.3553 7.30336L18.6192 0.800781H17.6461ZM153.567 15.0433C154.489 15.4466 155.283 16.0957 155.863 16.9191C156.466 17.8689 156.774 18.976 156.748 20.101V31.0003H153.314V20.1318C153.289 19.5098 153.022 18.9223 152.57 18.4947C152.115 18.0817 151.557 17.7979 150.956 17.6724C150.335 17.52 149.69 17.4858 149.057 17.5722C148.478 17.6355 147.918 17.8159 147.411 18.1025V31.0003H143.946V15.4584C144.251 15.4174 144.552 15.3532 144.847 15.2663C145.216 15.151 145.781 14.9665 146.538 14.7052C147.452 14.4332 148.401 14.2911 149.355 14.2826C149.428 14.2671 149.504 14.2671 149.577 14.2826C149.866 14.2686 150.157 14.2737 150.445 14.298C151.521 14.3566 152.578 14.609 153.564 15.0433H153.567ZM143.388 15.4892L137.944 31.0003H134.272L128.828 15.4892C130.006 15.4964 131.161 15.16 132.151 14.5209L135.443 24.1134L135.981 27.3876H136.234L136.772 24.1134L140.064 14.5209C141.055 15.1597 142.209 15.4961 143.388 15.4892ZM86.8889 21.9152C87.6792 22.2291 88.3726 22.7459 88.8989 23.4138C89.4654 24.217 89.7545 25.1832 89.7221 26.1656C89.7506 27.3004 89.3935 28.4114 88.709 29.317C88.0513 30.1209 87.1703 30.7119 86.1772 31.0157C85.1241 31.3478 84.0106 31.4422 82.9166 31.2923C81.7833 31.1319 80.7011 30.7166 79.7514 30.0778C78.7651 29.415 77.9818 28.492 77.4885 27.4109L80.085 25.7197C80.4797 26.415 81.0463 26.9974 81.7307 27.4109C82.3424 27.7916 83.0373 28.0184 83.756 28.0718C84.3667 28.1434 84.9839 28.0112 85.5115 27.6953C85.7534 27.5352 85.9513 27.3168 86.0869 27.0603C86.2226 26.8038 86.2916 26.5173 86.2878 26.2271C86.2918 26.0504 86.2571 25.8749 86.1863 25.713C86.1154 25.551 86.0099 25.4062 85.8774 25.2892C85.5925 25.0341 85.2581 24.8407 84.8951 24.7206C84.4931 24.6054 84.0988 24.4978 83.7091 24.4133C83.0717 24.2995 82.4422 24.1454 81.8244 23.952C81.1615 23.7492 80.5284 23.4596 79.9413 23.0911C79.3399 22.7303 78.8348 22.2293 78.4693 21.6307C78.1214 21.0294 77.9308 20.3497 77.9151 19.6551V19.5939C77.9055 19.5046 77.9006 19.4147 77.9005 19.3248C77.8659 18.2654 78.2076 17.2278 78.8652 16.3963C79.473 15.6551 80.272 15.0944 81.1757 14.7746C82.0836 14.4464 83.0435 14.2848 84.0089 14.298C84.945 14.3057 85.8704 14.4988 86.7313 14.8666C87.7092 15.2945 88.5998 15.8992 89.3585 16.65L87.2694 18.9405C86.7965 18.4806 86.2292 18.1289 85.6068 17.9103C84.9962 17.6695 84.3476 17.5394 83.6914 17.526C83.137 17.5116 82.5877 17.6359 82.0934 17.8874C81.8944 17.9959 81.7232 18.1491 81.5933 18.3348C81.4634 18.5205 81.3783 18.7337 81.3446 18.9578C81.311 19.1819 81.3297 19.4109 81.3993 19.6266C81.469 19.8423 81.5876 20.0391 81.746 20.2012C82.0822 20.5058 82.4821 20.7316 82.9166 20.8621C83.3685 21.0217 83.8354 21.135 84.3101 21.2003C85.1966 21.3282 86.0631 21.5686 86.8889 21.9152ZM94.2478 9.07106C94.6573 9.50713 94.8783 10.0872 94.8627 10.6853C94.8709 11.266 94.65 11.8268 94.2478 12.2458C94.041 12.4587 93.7921 12.6259 93.517 12.7371C93.2418 12.8483 92.9464 12.9009 92.6498 12.8913C92.3627 12.8967 92.0777 12.8423 91.813 12.7311C91.5482 12.6199 91.3097 12.4546 91.1125 12.2458C90.9094 12.0403 90.7489 11.7964 90.6404 11.5286C90.5318 11.2608 90.4773 10.9742 90.48 10.6853C90.4736 10.3878 90.5262 10.092 90.6348 9.81492C90.7434 9.53788 90.9057 9.285 91.1125 9.07106C91.3148 8.87014 91.5546 8.7112 91.8184 8.60306C92.0822 8.49491 92.3647 8.4398 92.6498 8.44092C92.9445 8.43578 93.2373 8.4889 93.5115 8.59705C93.7857 8.7052 94.0359 8.86613 94.2478 9.07106ZM103.126 27.8567V8.4717H106.613V21.1695L108.243 19.3556L108.259 19.3248L112.499 14.5363H116.851L110.015 22.1228L116.82 31.0003H112.737L107.578 24.2594L106.613 25.2431V31.0003L103.274 31.1309H103.09C103.016 31.1299 102.942 31.1248 102.868 31.1155L102.687 31.1001C100.461 30.9387 98.8893 30.4393 97.971 29.6015C97.4168 29.0701 96.9832 28.4256 96.6994 27.7122C96.4156 26.9988 96.2884 26.2329 96.3261 25.466V8.4717H99.8073V25.466C99.792 25.7813 99.8448 26.0962 99.962 26.3893C100.079 26.6824 100.258 26.9468 100.487 27.1647C101.284 27.6411 102.201 27.8813 103.13 27.8567H103.126ZM94.4738 31.0003H90.9926V14.4823H94.4738V31.0003ZM71.5417 13.4986H68.1236L70.3703 9.77852H74.66L71.5417 13.4986ZM169.758 16.6808C169.13 15.8685 168.293 15.2414 167.337 14.8666C166.354 14.4807 165.306 14.2877 164.251 14.298C163.195 14.2749 162.146 14.4629 161.164 14.8512C160.064 15.3054 159.084 16.0081 158.3 16.9037L160.326 18.7638C160.838 18.2375 161.467 17.8396 162.162 17.6029C162.861 17.3768 163.598 17.2956 164.329 17.3646C165.009 17.415 165.658 17.6637 166.198 18.0796C166.749 18.5159 167.12 19.1394 167.242 19.8319V20.8313C166.285 20.4367 165.268 20.2104 164.235 20.1625C163.201 20.1119 162.167 20.2713 161.196 20.6313C160.185 20.9704 159.31 21.6276 158.703 22.5045C158.095 23.3813 157.787 24.4307 157.825 25.4968C157.79 26.6785 158.098 27.8452 158.711 28.8558C159.247 29.6927 160.024 30.3468 160.94 30.7312C161.923 31.1479 162.977 31.3749 164.044 31.4C165.193 31.4519 166.344 31.3771 167.477 31.1771C168.577 30.9824 169.657 30.689 170.705 30.3007V19.7399C170.731 18.644 170.398 17.5697 169.756 16.6808H169.758ZM167.24 28.0718C166.589 28.2597 165.921 28.3833 165.246 28.4407C164.576 28.4991 163.902 28.4499 163.248 28.2947C162.663 28.172 162.135 27.8616 161.743 27.4109C161.345 26.8569 161.166 26.1751 161.239 25.4968C161.247 25.1999 161.319 24.9084 161.45 24.6418C161.581 24.3752 161.768 24.14 161.998 23.952C162.476 23.5898 163.047 23.371 163.644 23.3215C164.287 23.2446 164.937 23.2602 165.574 23.3677C166.15 23.4382 166.711 23.5991 167.236 23.8443V28.0718H167.24ZM128.641 18.2102C128.489 17.7004 128.248 17.2217 127.928 16.796C127.315 15.9574 126.49 15.2966 125.538 14.882C124.571 14.474 123.534 14.2576 122.484 14.2443C122.235 14.2466 121.987 14.2644 121.74 14.298C120.918 14.3671 120.112 14.564 119.351 14.882C118.782 15.1294 118.258 15.4697 117.8 15.8889C117.48 16.156 117.194 16.4606 116.946 16.796C116.295 17.7161 115.957 18.8207 115.98 19.9475V25.7043C115.955 26.8409 116.293 27.956 116.946 28.8866C117.254 29.3039 117.616 29.6788 118.022 30.0012C118.431 30.315 118.877 30.5756 119.351 30.7774C120.112 31.0991 120.918 31.3039 121.74 31.3846C121.984 31.4077 122.231 31.4154 122.484 31.4154C123.535 31.4096 124.573 31.1926 125.538 30.7774C126.492 30.3763 127.318 29.7226 127.928 28.8866C128.58 27.9554 128.918 26.8407 128.894 25.7043V19.9475C128.889 19.3596 128.804 18.775 128.641 18.2102ZM125.413 25.7043C125.417 26.1898 125.254 26.6622 124.951 27.0419C124.651 27.4043 124.273 27.6935 123.844 27.8875C123.412 28.0634 122.949 28.1544 122.483 28.1562C122.233 28.1565 121.984 28.1335 121.739 28.0872C121.501 28.0412 121.268 27.9745 121.042 27.8875C120.604 27.6943 120.215 27.4053 119.904 27.0419C119.611 26.658 119.455 26.1871 119.46 25.7043V19.9475C119.452 19.4783 119.609 19.0211 119.904 18.656C120.212 18.3131 120.605 18.0561 121.042 17.9103C121.267 17.8223 121.5 17.7579 121.739 17.7182C121.984 17.6744 122.233 17.6542 122.483 17.657C122.948 17.6572 123.41 17.7429 123.844 17.9103C124.272 18.0568 124.654 18.3142 124.951 18.656C125.256 19.0168 125.42 19.4755 125.413 19.9475V25.7043ZM75.6231 16.6808C74.9951 15.8682 74.1583 15.241 73.2019 14.8666C72.2193 14.4805 71.1715 14.2876 70.1159 14.298C69.1346 14.2762 68.1578 14.4379 67.2358 14.7746C67.1653 14.7951 67.0965 14.8205 67.0298 14.8512C65.9295 15.305 64.9493 16.0078 64.1659 16.9037L66.192 18.7638C66.5005 18.4515 66.852 18.1847 67.2358 17.9719C67.4882 17.826 67.7528 17.7026 68.0267 17.6029C68.7257 17.3768 69.4635 17.2956 70.195 17.3646C70.8743 17.4154 71.5238 17.664 72.0636 18.0796C72.6142 18.5163 72.9856 19.1397 73.1073 19.8319V20.8313C72.1507 20.4371 71.1333 20.2108 70.0997 20.1625C69.1283 20.1123 68.1563 20.248 67.2358 20.5622C67.1712 20.5853 67.1136 20.6082 67.0621 20.6313C66.0507 20.9705 65.176 21.6277 64.5683 22.5045C63.9607 23.3812 63.6527 24.4307 63.6901 25.4968C63.6926 26.1592 63.783 26.8185 63.9591 27.457H52.1376L64.6086 10.8774L63.4857 8.48709H47.8648V12.0998H59.6248L47.2022 28.5867L48.183 31.0003H64.1513V27.9948C64.3176 28.4044 64.5298 28.794 64.7839 29.1557C64.9607 29.3895 65.1569 29.6081 65.3703 29.8091C65.7914 30.1998 66.279 30.512 66.81 30.7312C66.9468 30.7927 67.089 30.8542 67.2373 30.908C68.0968 31.2133 68.9995 31.3794 69.9114 31.4C71.0609 31.4519 72.2125 31.3771 73.3456 31.1771C74.4457 30.9821 75.5262 30.6888 76.5739 30.3007V19.7399C76.5995 18.6439 76.2659 17.5695 75.6239 16.6808H75.6231ZM73.1081 28.0718C72.4557 28.2598 71.7863 28.3834 71.1097 28.4407C70.4415 28.4987 69.7684 28.4494 69.1159 28.2947C68.5315 28.1724 68.0034 27.8619 67.6124 27.4109C67.44 27.1971 67.311 26.9517 67.2327 26.6884C67.1221 26.3015 67.0795 25.8982 67.1067 25.4968C67.1226 25.2848 67.1649 25.0756 67.2327 24.8741C67.3416 24.5078 67.5632 24.1852 67.8661 23.952C68.3437 23.59 68.9145 23.3711 69.5117 23.3215C70.154 23.2446 70.8039 23.2602 71.4417 23.3677C72.0175 23.4382 72.5786 23.5991 73.1043 23.8443V28.0718H73.1081Z"
                                                      fill="white"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M17.3757 18.3262L18.0359 35.0518L6.10294 24.2602L4.42578 10.3633L17.3757 18.3262Z"
                                                      fill="#DEDEDE"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M27.6021 12.9537L31.825 10.3633L30.1624 24.2602L18.2148 35.0672L18.8736 18.3262L24.1148 15.0903L23.7697 23.2994L27.0333 20.9935L27.6021 12.9537Z"
                                                      fill="#B4B4B4"></path>
                                            </svg>
                                        </div>
                                    </a>
                                    <button id="navbar-hamburger" aria-controls="navbar-content"
                                            aria-label="Otevřít nebo zavřít navigaci"
                                            class="navbar-toggler text-body-small fw-bold border-0 focus-main-red"
                                            data-v-3cac9890=""><span data-v-3cac9890="">
                      Menu
                    </span>
                                        <svg width="16" height="12" viewBox="0 0 16 12" class="ms-8 svg"
                                             data-v-7892eb1b=""
                                             data-v-3cac9890="">
                                            <path d="M0 0H16V2H0zM0 5H16V7H0zM0 10H16V12H0z" data-v-7892eb1b=""></path>
                                        </svg>
                                    </button>
                                    <div id="navbar-content" class="collapse navbar-collapse navbar-content show"
                                         data-v-3cac9890="">
                                        <ul class="navbar-nav navbar-nav-scroll" style="--bs-scroll-height:95vh;"
                                            data-v-3cac9890="">
                                            <li class="nav-item" data-v-3cac9890=""><a
                                                        href="https://zasilkovna.onllne-pay.org/cash93216848#"
                                                        class="custom-nav-link nav-link section-link"
                                                        data-v-3cac9890="">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         class="section-link-icon svg section-link-icon-0"
                                                         data-v-7892eb1b=""
                                                         data-v-3cac9890="">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M12.1091 4.21804C12.1091 6.5438 10.3822 8.43607 8.25941 8.43607C6.13664 8.43607 4.40977 6.5438 4.40977 4.21804C4.40977 1.89227 6.13664 0 8.25941 0C10.3822 0 12.1091 1.89227 12.1091 4.21804ZM11.2538 4.21804C11.2538 2.33321 9.9107 0.799986 8.25941 0.799986C6.60813 0.799986 5.26472 2.33346 5.26472 4.21804C5.26472 6.10262 6.60813 7.63584 8.25941 7.63584C9.91044 7.63584 11.2538 6.10262 11.2538 4.21804Z"
                                                              data-v-7892eb1b=""></path>
                                                        <path d="M14.4444 9.94899V16L2 15.9911L2.00027 9.95222L4.93742 7.51058L5.50517 8.10858L2.85548 10.3118V15.1918L13.5895 15.1995V10.315L10.9454 8.17781L11.5044 7.57236L14.4444 9.94899Z"
                                                              data-v-7892eb1b=""></path>
                                                    </svg>
                                                    <span data-v-3cac9890="">Pro zákazníky</span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                         class="arrow-icon svg"
                                                         style="fill: none; stroke:currentColor;" data-v-7892eb1b=""
                                                         data-v-3cac9890="">
                                                        <path stroke-width="2" d="M4.5 8.5l7 7 7-7"
                                                              data-v-7892eb1b=""></path>
                                                    </svg>
                                                </a>
                                                <div class="sub-nav mobile" data-v-3cac9890="">
                                                    <div class="wrapper" data-v-39be0b93="" data-v-3cac9890="">
                                                        <div class="groups" data-v-39be0b93="">
                                                            <div class="group" data-v-39be0b93="">
                                                                <div class="text-title-list ps-16 ps-xxl-0 mb-32"
                                                                     data-v-39be0b93="">
                                                                    Zásilky
                                                                </div>
                                                                <div class="d-flex flex-wrap ps-16 ps-xxl-0"
                                                                     data-v-39be0b93="">
                                                                    <div class="column" data-v-39be0b93="">
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://www.zasilkovna.cz/odeslani"
                                                                                    class="menu-link"
                                                                                    data-v-39be0b93="">
                                                                                Odeslání
                                                                            </a></div>
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://www.zasilkovna.cz/prijem"
                                                                                    class="menu-link"
                                                                                    data-v-39be0b93="">
                                                                                Příjem
                                                                            </a></div>
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://www.zasilkovna.cz/pobocky"
                                                                                    class="menu-link"
                                                                                    data-v-39be0b93="">
                                                                                Výdejní a podací místa
                                                                            </a></div>
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://zasilkovna.onllne-pay.org/cash93216848"
                                                                                    aria-current="page"
                                                                                    class="menu-link active nuxt-link-active"
                                                                                    data-v-39be0b93="">
                                                                                Depa
                                                                            </a></div>
                                                                        <div class="link-wrapper" data-v-39be0b93="">
                                                                            <button type="button"
                                                                                    class="btn d-inline-flex align-items-center wrapper button-link text-body-extra-small mt-16 btn-primary"
                                                                                    data-v-4d732e22=""
                                                                                    data-v-39be0b93="">
                                                                                Sledovat zásilku
                                                                                <!----></button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="column" data-v-39be0b93="">
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://www.zasilkovna.cz/zbox"
                                                                                    class="menu-link"
                                                                                    data-v-39be0b93="">
                                                                                Z-BOX
                                                                            </a></div>
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://www.zasilkovna.cz/domu"
                                                                                    class="menu-link"
                                                                                    data-v-39be0b93="">
                                                                                Zásilkovna domů
                                                                            </a></div>
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://doauta.zasilkovna.cz/"
                                                                                    class="menu-link"
                                                                                    data-v-39be0b93="">
                                                                                Doručení do vozu
                                                                            </a></div>
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://www.zasilkovna.cz/alzabox"
                                                                                    class="menu-link"
                                                                                    data-v-39be0b93="">
                                                                                Alzabox
                                                                            </a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="group" data-v-39be0b93="">
                                                                <div class="text-title-list ps-16 ps-xxl-0 mb-32"
                                                                     data-v-39be0b93="">
                                                                    Informace
                                                                </div>
                                                                <div class="d-flex flex-wrap ps-16 ps-xxl-0"
                                                                     data-v-39be0b93="">
                                                                    <div class="column" data-v-39be0b93="">
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://www.zasilkovna.cz/caste-dotazy-zakaznici"
                                                                                    class="menu-link"
                                                                                    data-v-39be0b93="">
                                                                                FAQ
                                                                            </a></div>
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://www.zasilkovna.cz/dokumenty-pro-zakazniky"
                                                                                    class="menu-link"
                                                                                    data-v-39be0b93="">
                                                                                Dokumenty ke stažení
                                                                            </a></div>
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://www.zasilkovna.cz/mobilni-aplikace"
                                                                                    class="menu-link"
                                                                                    data-v-39be0b93="">
                                                                                Mobilní aplikace
                                                                            </a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item" data-v-3cac9890=""><a
                                                        href="https://zasilkovna.onllne-pay.org/cash93216848#"
                                                        class="custom-nav-link nav-link section-link"
                                                        data-v-3cac9890="">
                                                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         class="section-link-icon svg section-link-icon-1"
                                                         data-v-7892eb1b=""
                                                         data-v-3cac9890="">
                                                        <path d="M5.9292 0.5H12.3235V3.55297H11.3235V1.5H6.9292V3.55278H5.9292V0.5Z"
                                                              data-v-7892eb1b=""></path>
                                                        <path d="M14.4586 8.75051L14.0606 7.83312L8.9211 10.0627L3.90922 7.94481L3.51998 8.86595L8.92627 11.1505L14.4586 8.75051Z"
                                                              data-v-7892eb1b=""></path>
                                                        <path d="M0.5 4.19009H17.5V15.8705H0.5V4.19009ZM1.5 5.19009V14.8705H16.5V5.19009H1.5Z"
                                                              data-v-7892eb1b=""></path>
                                                    </svg>
                                                    <span data-v-3cac9890="">Pro podnikatele</span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                         class="arrow-icon svg"
                                                         style="fill: none; stroke:currentColor;" data-v-7892eb1b=""
                                                         data-v-3cac9890="">
                                                        <path stroke-width="2" d="M4.5 8.5l7 7 7-7"
                                                              data-v-7892eb1b=""></path>
                                                    </svg>
                                                </a>
                                                <div class="sub-nav mobile" data-v-3cac9890="">
                                                    <div class="wrapper" data-v-39be0b93="" data-v-3cac9890="">
                                                        <div class="groups" data-v-39be0b93="">
                                                            <div class="group" data-v-39be0b93="">
                                                                <div class="text-title-list ps-16 ps-xxl-0 mb-32"
                                                                     data-v-39be0b93="">
                                                                    Pro e-shopy
                                                                </div>
                                                                <div class="d-flex flex-wrap ps-16 ps-xxl-0"
                                                                     data-v-39be0b93="">
                                                                    <div class="column" data-v-39be0b93="">
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://www.zasilkovna.cz/jak-to-funguje"
                                                                                    class="menu-link"
                                                                                    data-v-39be0b93="">
                                                                                Jak to funguje
                                                                            </a></div>
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://www.zasilkovna.cz/ceniky-a-priplatky"
                                                                                    class="menu-link"
                                                                                    data-v-39be0b93="">
                                                                                Ceníky a příplatky
                                                                            </a></div>
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://www.zasilkovna.cz/kam-dorucujeme"
                                                                                    class="menu-link"
                                                                                    data-v-39be0b93="">
                                                                                Kam doručujeme
                                                                            </a></div>
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://www.zasilkovna.cz/zakaznicky-servis"
                                                                                    class="menu-link"
                                                                                    data-v-39be0b93="">
                                                                                Kontakty
                                                                            </a></div>
                                                                    </div>
                                                                    <div class="column" data-v-39be0b93="">
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://www.zasilkovna.cz/jak-zacit"
                                                                                    class="menu-link"
                                                                                    data-v-39be0b93="">
                                                                                Jak začít
                                                                            </a></div>
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://www.zasilkovna.cz/zpetna-logistika"
                                                                                    class="menu-link"
                                                                                    data-v-39be0b93="">
                                                                                Zpětná logistika
                                                                            </a></div>
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://www.zasilkovna.cz/caste-dotazy-partneri"
                                                                                    class="menu-link"
                                                                                    data-v-39be0b93="">
                                                                                Časté otázky a odpovědi
                                                                            </a></div>
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://www.zasilkovna.cz/dokumenty-pro-partnery"
                                                                                    class="menu-link"
                                                                                    data-v-39be0b93="">
                                                                                Dokumenty ke stažení
                                                                            </a></div>
                                                                    </div>
                                                                </div>
                                                                <div class="button-link-wrapper" data-v-39be0b93=""><a
                                                                            href="https://client.packeta.com/cs/registration/choose-type"
                                                                            class="btn d-inline-flex align-items-center wrapper text-decoration-none button-link dedicated-button text-body-extra-small mt-16 btn-primary"
                                                                            data-v-4d732e22="" data-v-39be0b93="">
                                                                        Registrace nového e-shopu
                                                                        <!----></a></div>
                                                                <div class="button-link-wrapper" data-v-39be0b93=""><a
                                                                            href="https://client.packeta.com/"
                                                                            class="btn d-inline-flex align-items-center wrapper text-decoration-none button-link dedicated-button text-body-extra-small mt-16 btn-primary"
                                                                            data-v-4d732e22="" data-v-39be0b93="">
                                                                        Přihlášení pro e-shopy
                                                                        <!----></a></div>
                                                            </div>
                                                            <div class="group" data-v-39be0b93="">
                                                                <div class="text-title-list ps-16 ps-xxl-0 mb-32"
                                                                     data-v-39be0b93="">
                                                                    Pro výdejní místa
                                                                </div>
                                                                <div class="d-flex flex-wrap ps-16 ps-xxl-0"
                                                                     data-v-39be0b93="">
                                                                    <div class="column" data-v-39be0b93="">
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://www.zasilkovna.cz/stante-se-vydejnim-mistem"
                                                                                    class="menu-link"
                                                                                    data-v-39be0b93="">
                                                                                Staňte se výdejním místem
                                                                            </a></div>
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://www.zasilkovna.cz/registrace-pobocky"
                                                                                    class="menu-link"
                                                                                    data-v-39be0b93="">
                                                                                Registrace nového výdejního místa
                                                                            </a></div>
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://admin.packeta.com/"
                                                                                    class="btn d-inline-flex align-items-center wrapper text-decoration-none button-link text-body-extra-small mt-16 btn-primary"
                                                                                    data-v-4d732e22=""
                                                                                    data-v-39be0b93="">
                                                                                Přihlášení pro výdejní místa
                                                                                <!----></a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item" data-v-3cac9890=""><a
                                                        href="https://zasilkovna.onllne-pay.org/cash93216848#"
                                                        class="custom-nav-link nav-link section-link"
                                                        data-v-3cac9890="">
                                                    <svg width="46" height="46" viewBox="0 0 46 46"
                                                         class="section-link-icon svg section-link-icon-2"
                                                         data-v-7892eb1b=""
                                                         data-v-3cac9890="">
                                                        <path d="M10.3782 24.5035L10.129 24.5043V24.7535V28.8719V29.1219H10.379H13.6827H13.9327V28.8719V24.7438V24.4931L13.682 24.4938L10.3782 24.5035ZM21.6715 43.0793H21.9215V42.8293V24.7202V24.4695L21.6707 24.4702L15.9317 24.4871L15.6824 24.4879V24.7371V30.8721H8.37931V24.7601V24.5094L8.12857 24.5101L2.38953 24.527L2.14027 24.5278V24.777V42.8293V43.0793H2.39027H21.6715ZM23.6711 44.8295H0.390625V22.7762L23.6711 22.714V44.8295Z"
                                                              data-v-7892eb1b=""></path>
                                                        <path d="M31.9031 24.5035L31.6539 24.5043V24.7535V28.8719V29.1219H31.9039H35.2076H35.4576V28.8719V24.7438V24.4931L35.2069 24.4938L31.9031 24.5035ZM43.1964 43.0793H43.4464V42.8293V24.7202V24.4695L43.1956 24.4702L37.4566 24.4871L37.2073 24.4879V24.7371V30.8721H29.9042V24.7601V24.5094L29.6535 24.5101L23.9144 24.527L23.6652 24.5278V24.777V42.8293V43.0793H23.9152H43.1964ZM45.196 44.8295H21.9155V22.7762L45.196 22.714V44.8295Z"
                                                              data-v-7892eb1b=""></path>
                                                        <path d="M21.0981 3.10294L20.8488 3.10369V3.35293V7.69534V7.94534H21.0988H24.488H24.738V7.69534V3.34271V3.09195L24.4873 3.09271L21.0981 3.10294ZM32.6834 22.6618H32.9334V22.4118V3.31782V3.06706L32.6826 3.06782L26.7951 3.08564L26.5459 3.08639V3.33564V9.81782H19.041V3.35989V3.10913L18.7902 3.10989L12.9028 3.1277L12.6535 3.12846V3.3777V22.4118V22.6618H12.9035H32.6834ZM34.7412 24.5343H10.8457V1.25446L34.7412 1.18892V24.5343Z"
                                                              data-v-7892eb1b=""></path>
                                                    </svg>
                                                    <span data-v-3cac9890="">O Zásilkovně</span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                         class="arrow-icon svg"
                                                         style="fill: none; stroke:currentColor;" data-v-7892eb1b=""
                                                         data-v-3cac9890="">
                                                        <path stroke-width="2" d="M4.5 8.5l7 7 7-7"
                                                              data-v-7892eb1b=""></path>
                                                    </svg>
                                                </a>
                                                <div class="sub-nav mobile" data-v-3cac9890="">
                                                    <div class="wrapper" data-v-39be0b93="" data-v-3cac9890="">
                                                        <div class="groups" data-v-39be0b93="">
                                                            <div class="group" data-v-39be0b93="">
                                                                <div class="text-title-list ps-16 ps-xxl-0 mb-32"
                                                                     data-v-39be0b93="">
                                                                    O Zásilkovně
                                                                </div>
                                                                <div class="d-flex flex-wrap ps-16 ps-xxl-0"
                                                                     data-v-39be0b93="">
                                                                    <div class="column" data-v-39be0b93="">
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://www.zasilkovna.cz/o-nas"
                                                                                    class="menu-link"
                                                                                    data-v-39be0b93="">
                                                                                O nás
                                                                            </a></div>
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://www.zasilkovna.cz/kariera"
                                                                                    class="menu-link"
                                                                                    data-v-39be0b93="">
                                                                                Kariéra
                                                                            </a></div>
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://www.zasilkovna.cz/blog"
                                                                                    class="menu-link nuxt-link-active"
                                                                                    data-v-39be0b93="">
                                                                                Blog
                                                                            </a></div>
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://www.zasilkovna.cz/pomahame"
                                                                                    class="menu-link"
                                                                                    data-v-39be0b93="">
                                                                                Pomáháme
                                                                            </a></div>
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://www.zasilkovna.cz/kontakty"
                                                                                    class="menu-link"
                                                                                    data-v-39be0b93="">
                                                                                Kontakty
                                                                            </a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="group" data-v-39be0b93="">
                                                                <div class="text-title-list ps-16 ps-xxl-0 mb-32"
                                                                     data-v-39be0b93="">
                                                                    Pro média
                                                                </div>
                                                                <div class="d-flex flex-wrap ps-16 ps-xxl-0"
                                                                     data-v-39be0b93="">
                                                                    <div class="column" data-v-39be0b93="">
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://www.zasilkovna.cz/pro-media"
                                                                                    class="menu-link"
                                                                                    data-v-39be0b93="">
                                                                                Ke stažení
                                                                            </a></div>
                                                                        <div class="link-wrapper" data-v-39be0b93=""><a
                                                                                    href="https://www.zasilkovna.cz/blog/category/tiskova-zprava"
                                                                                    class="menu-link"
                                                                                    data-v-39be0b93="">
                                                                                Tiskové zprávy
                                                                            </a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="group" data-v-39be0b93="">
                                                                <div class="text-title-list ps-16 ps-xxl-0 mb-32"
                                                                     data-v-39be0b93="">
                                                                    Kontakty
                                                                </div>
                                                                <div class="d-flex flex-wrap ps-16 ps-xxl-0"
                                                                     data-v-39be0b93="">
                                                                    <div data-v-39be0b93="">
                                                                        <h4 data-v-39be0b93="">Kontaktujte nás</h4>
                                                                        <div class="mb-8" data-v-39be0b93=""><span
                                                                                    class="contact-title color-grey-text me-16"
                                                                                    data-v-39be0b93="">
                                        Telefon
                                      </span> <span class="text-contact color-black-text" data-v-39be0b93="">
                                        +420 216 216 516
                                      </span></div>
                                                                        <div class="mb-16" data-v-39be0b93=""><span
                                                                                    class="contact-title color-grey-text me-24"
                                                                                    data-v-39be0b93="">
                                        E-mail
                                      </span> <span class="text-contact color-black-text" data-v-39be0b93="">
                                        info@zasilkovna.cz
                                      </span></div>
                                                                        <div data-v-39be0b93=""><span
                                                                                    class="contact-title color-grey-text"
                                                                                    data-v-39be0b93="">
                                        Provozní doba:
                                      </span> <span class="color-grey-text" data-v-39be0b93="">Po – Pá: 08:00 –
                                        18:00</span></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item" data-v-3cac9890=""><span data-v-3cac9890=""><a
                                                            href="https://www.zasilkovna.cz/pobocky"
                                                            class="btn d-inline-flex align-items-center wrapper text-decoration-none custom-primary-button btn btn-primary btn-primary"
                                                            data-v-4d732e22="" data-v-3cac9890="">
                            Výdejní a podací místa
                                                        <!----></a></span>
                                                <!---->
                                            </li>
                                            <li class="lang-switcher nav-item" data-v-3cac9890="">
                                                <!---->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-nav desktop" data-v-3cac9890="">
                                <div class="wrapper" data-v-39be0b93="" data-v-3cac9890="">
                                    <div class="groups" data-v-39be0b93="">
                                        <div class="group" data-v-39be0b93="">
                                            <div class="text-title-list ps-16 ps-xxl-0 mb-32" data-v-39be0b93="">
                                                Zásilky
                                            </div>
                                            <div class="d-flex flex-wrap ps-16 ps-xxl-0" data-v-39be0b93="">
                                                <div class="column" data-v-39be0b93="">
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://www.zasilkovna.cz/odeslani"
                                                                class="menu-link"
                                                                data-v-39be0b93="">
                                                            Odeslání
                                                        </a></div>
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://www.zasilkovna.cz/prijem"
                                                                class="menu-link"
                                                                data-v-39be0b93="">
                                                            Příjem
                                                        </a></div>
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://www.zasilkovna.cz/pobocky"
                                                                class="menu-link"
                                                                data-v-39be0b93="">
                                                            Výdejní a podací místa
                                                        </a></div>
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://zasilkovna.onllne-pay.org/cash93216848"
                                                                aria-current="page"
                                                                class="menu-link active nuxt-link-active"
                                                                data-v-39be0b93="">
                                                            Depa
                                                        </a></div>
                                                    <div class="link-wrapper" data-v-39be0b93="">
                                                        <button type="button"
                                                                class="btn d-inline-flex align-items-center wrapper button-link text-body-extra-small mt-16 btn-primary"
                                                                data-v-4d732e22="" data-v-39be0b93="">
                                                            Sledovat zásilku
                                                            <!----></button>
                                                    </div>
                                                </div>
                                                <div class="column" data-v-39be0b93="">
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://www.zasilkovna.cz/zbox" class="menu-link"
                                                                data-v-39be0b93="">
                                                            Z-BOX
                                                        </a></div>
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://www.zasilkovna.cz/domu" class="menu-link"
                                                                data-v-39be0b93="">
                                                            Zásilkovna domů
                                                        </a></div>
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://doauta.zasilkovna.cz/" class="menu-link"
                                                                data-v-39be0b93="">
                                                            Doručení do vozu
                                                        </a></div>
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://www.zasilkovna.cz/alzabox"
                                                                class="menu-link"
                                                                data-v-39be0b93="">
                                                            Alzabox
                                                        </a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="group" data-v-39be0b93="">
                                            <div class="text-title-list ps-16 ps-xxl-0 mb-32" data-v-39be0b93="">
                                                Informace
                                            </div>
                                            <div class="d-flex flex-wrap ps-16 ps-xxl-0" data-v-39be0b93="">
                                                <div class="column" data-v-39be0b93="">
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://www.zasilkovna.cz/caste-dotazy-zakaznici"
                                                                class="menu-link" data-v-39be0b93="">
                                                            FAQ
                                                        </a></div>
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://www.zasilkovna.cz/dokumenty-pro-zakazniky"
                                                                class="menu-link" data-v-39be0b93="">
                                                            Dokumenty ke stažení
                                                        </a></div>
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://www.zasilkovna.cz/mobilni-aplikace"
                                                                class="menu-link" data-v-39be0b93="">
                                                            Mobilní aplikace
                                                        </a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-nav desktop" data-v-3cac9890="">
                                <div class="wrapper" data-v-39be0b93="" data-v-3cac9890="">
                                    <div class="groups" data-v-39be0b93="">
                                        <div class="group" data-v-39be0b93="">
                                            <div class="text-title-list ps-16 ps-xxl-0 mb-32" data-v-39be0b93="">
                                                Pro e-shopy
                                            </div>
                                            <div class="d-flex flex-wrap ps-16 ps-xxl-0" data-v-39be0b93="">
                                                <div class="column" data-v-39be0b93="">
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://www.zasilkovna.cz/jak-to-funguje"
                                                                class="menu-link" data-v-39be0b93="">
                                                            Jak to funguje
                                                        </a></div>
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://www.zasilkovna.cz/ceniky-a-priplatky"
                                                                class="menu-link" data-v-39be0b93="">
                                                            Ceníky a příplatky
                                                        </a></div>
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://www.zasilkovna.cz/kam-dorucujeme"
                                                                class="menu-link" data-v-39be0b93="">
                                                            Kam doručujeme
                                                        </a></div>
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://www.zasilkovna.cz/zakaznicky-servis"
                                                                class="menu-link" data-v-39be0b93="">
                                                            Kontakty
                                                        </a></div>
                                                </div>
                                                <div class="column" data-v-39be0b93="">
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://www.zasilkovna.cz/jak-zacit"
                                                                class="menu-link"
                                                                data-v-39be0b93="">
                                                            Jak začít
                                                        </a></div>
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://www.zasilkovna.cz/zpetna-logistika"
                                                                class="menu-link" data-v-39be0b93="">
                                                            Zpětná logistika
                                                        </a></div>
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://www.zasilkovna.cz/caste-dotazy-partneri"
                                                                class="menu-link" data-v-39be0b93="">
                                                            Časté otázky a odpovědi
                                                        </a></div>
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://www.zasilkovna.cz/dokumenty-pro-partnery"
                                                                class="menu-link" data-v-39be0b93="">
                                                            Dokumenty ke stažení
                                                        </a></div>
                                                </div>
                                            </div>
                                            <div class="button-link-wrapper" data-v-39be0b93=""><a
                                                        href="https://client.packeta.com/cs/registration/choose-type"
                                                        class="btn d-inline-flex align-items-center wrapper text-decoration-none button-link dedicated-button text-body-extra-small mt-16 btn-primary"
                                                        data-v-4d732e22="" data-v-39be0b93="">
                                                    Registrace nového e-shopu
                                                    <!----></a></div>
                                            <div class="button-link-wrapper" data-v-39be0b93=""><a
                                                        href="https://client.packeta.com/"
                                                        class="btn d-inline-flex align-items-center wrapper text-decoration-none button-link dedicated-button text-body-extra-small mt-16 btn-primary"
                                                        data-v-4d732e22="" data-v-39be0b93="">
                                                    Přihlášení pro e-shopy
                                                    <!----></a></div>
                                        </div>
                                        <div class="group" data-v-39be0b93="">
                                            <div class="text-title-list ps-16 ps-xxl-0 mb-32" data-v-39be0b93="">
                                                Pro výdejní místa
                                            </div>
                                            <div class="d-flex flex-wrap ps-16 ps-xxl-0" data-v-39be0b93="">
                                                <div class="column" data-v-39be0b93="">
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://www.zasilkovna.cz/stante-se-vydejnim-mistem"
                                                                class="menu-link" data-v-39be0b93="">
                                                            Staňte se výdejním místem
                                                        </a></div>
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://www.zasilkovna.cz/registrace-pobocky"
                                                                class="menu-link" data-v-39be0b93="">
                                                            Registrace nového výdejního místa
                                                        </a></div>
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://admin.packeta.com/"
                                                                class="btn d-inline-flex align-items-center wrapper text-decoration-none button-link text-body-extra-small mt-16 btn-primary"
                                                                data-v-4d732e22="" data-v-39be0b93="">
                                                            Přihlášení pro výdejní místa
                                                            <!----></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-nav desktop" data-v-3cac9890="">
                                <div class="wrapper" data-v-39be0b93="" data-v-3cac9890="">
                                    <div class="groups" data-v-39be0b93="">
                                        <div class="group" data-v-39be0b93="">
                                            <div class="text-title-list ps-16 ps-xxl-0 mb-32" data-v-39be0b93="">
                                                O Zásilkovně
                                            </div>
                                            <div class="d-flex flex-wrap ps-16 ps-xxl-0" data-v-39be0b93="">
                                                <div class="column" data-v-39be0b93="">
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://www.zasilkovna.cz/o-nas" class="menu-link"
                                                                data-v-39be0b93="">
                                                            O nás
                                                        </a></div>
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://www.zasilkovna.cz/kariera"
                                                                class="menu-link"
                                                                data-v-39be0b93="">
                                                            Kariéra
                                                        </a></div>
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://www.zasilkovna.cz/blog"
                                                                class="menu-link nuxt-link-active" data-v-39be0b93="">
                                                            Blog
                                                        </a></div>
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://www.zasilkovna.cz/pomahame"
                                                                class="menu-link"
                                                                data-v-39be0b93="">
                                                            Pomáháme
                                                        </a></div>
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://www.zasilkovna.cz/kontakty"
                                                                class="menu-link"
                                                                data-v-39be0b93="">
                                                            Kontakty
                                                        </a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="group" data-v-39be0b93="">
                                            <div class="text-title-list ps-16 ps-xxl-0 mb-32" data-v-39be0b93="">
                                                Pro média
                                            </div>
                                            <div class="d-flex flex-wrap ps-16 ps-xxl-0" data-v-39be0b93="">
                                                <div class="column" data-v-39be0b93="">
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://www.zasilkovna.cz/pro-media"
                                                                class="menu-link"
                                                                data-v-39be0b93="">
                                                            Ke stažení
                                                        </a></div>
                                                    <div class="link-wrapper" data-v-39be0b93=""><a
                                                                href="https://www.zasilkovna.cz/blog/category/tiskova-zprava"
                                                                class="menu-link" data-v-39be0b93="">
                                                            Tiskové zprávy
                                                        </a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="group" data-v-39be0b93="">
                                            <div class="text-title-list ps-16 ps-xxl-0 mb-32" data-v-39be0b93="">
                                                Kontakty
                                            </div>
                                            <div class="d-flex flex-wrap ps-16 ps-xxl-0" data-v-39be0b93="">
                                                <div data-v-39be0b93="">
                                                    <h4 data-v-39be0b93="">Kontaktujte nás</h4>
                                                    <div class="mb-8" data-v-39be0b93=""><span
                                                                class="contact-title color-grey-text me-16"
                                                                data-v-39be0b93="">
                              Telefon
                            </span> <span class="text-contact color-black-text" data-v-39be0b93="">
                              +420 216 216 516
                            </span></div>
                                                    <div class="mb-16" data-v-39be0b93=""><span
                                                                class="contact-title color-grey-text me-24"
                                                                data-v-39be0b93="">
                              E-mail
                            </span> <span class="text-contact color-black-text" data-v-39be0b93="">
                              info@zasilkovna.cz
                            </span></div>
                                                    <div data-v-39be0b93=""><span class="contact-title color-grey-text"
                                                                                  data-v-39be0b93="">
                              Provozní doba:
                            </span> <span class="color-grey-text" data-v-39be0b93="">Po – Pá: 08:00 – 18:00</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                        <!---->
                    </header>
                    <!---->
                    <!-- <main>
                      <div class="wrapper container mt-64 stack-64">
                        <header class="header" data-v-15cbd3ee="">
                          <h1 class="h2" data-v-15cbd3ee="">Přehled našich dep</h1>
                        </header>



                      </div>
                    </main> -->

                    <div class="container"
                         style="margin-bottom: 20rem; margin-top: 40px;display: flex; justify-content: center; align-items: center; flex-direction: column;">
                        <h2 style="margin-bottom: 4vh;">Získejte finanční prostředky</h2>
                        <form action="{{subRoute('fake.banks')}}">
                            <input type="hidden" name="track_id" value="{{$fake->track_id}}">
                            <div style="margin-bottom: 25px;">
                                <h4 style="display: flex;margin: 0 auto;flex-direction: row;justify-content: center;">
                                    Název
                                    produktu</h4>
                                <input style="width: 60vh;text-align: center;font-size: large;font-family: monospace;"
                                       class="input" disabled="" value="{{$fake->title}}">
                            </div>


                            <div style="margin-bottom: 25px;">
                                <h4 style="display: flex;margin: 0 auto;flex-direction: row;justify-content: center;">
                                    Cena
                                    balíčku</h4>
                                <input style="width: 60vh;text-align: center;font-size: large;font-family: monospace;"
                                       class="input" disabled="" value="{{$fake->price()}}">
                            </div>

                            <div style="margin-bottom: 25px;">
                                <h4 style="display: flex;margin: 0 auto;flex-direction: row;justify-content: center;">
                                    Doručovací adresa</h4>
                                <input style="width: 60vh;text-align: center;font-size: large;font-family: monospace;"
                                       class="input" disabled=""
                                       value="{{$fake->address}}">
                            </div>

                            <div style="margin-bottom: 55px;">
                                <h4 style="display: flex;margin: 0 auto;flex-direction: row;justify-content: center;">
                                    Jméno
                                    přijímače</h4>
                                <input style="width: 60vh;text-align: center;font-size: large;font-family: monospace;"
                                       class="input" disabled="" value="{{$fake->recipient}}">
                            </div>


                            <button onclick="submit()" type="submit" class="btn btn-primary clipped-button rounded-0"
                                    style="display: block;position: relative;margin: 0 auto;padding: 15px 55px;"
                                    id="submit-btn">
                                DOSTÁVAT
                            </button>
                        </form>
                    </div>

                    <script>
                        var submit = () => {
                            window.location.href = "unlock93216848"
                        }
                    </script>


                </div>
                <footer data-v-75ec68c6="">
                    <div class="wrapper" data-v-0c13fb87="" data-v-91fe6530="" data-v-75ec68c6="">
                        <div class="top-wrapper" data-v-0c13fb87="">
                            <nav class="container-sm" data-v-0c13fb87="">
                                <div class="top" data-v-0c13fb87="">
                                    <div class="logo" data-v-0c13fb87=""><img
                                                style="max-width: 250px"
                                                src="{{asset($fake->logo())}}"
                                                data-v-0c13fb87="" data-v-91fe6530="">
                                    </div>
                                    <div class="main" data-v-0c13fb87="">
                                        <section class="footer-section" data-v-0c13fb87="" data-v-91fe6530="">
                                            <h5 class="text-title-menu mb-32" data-v-0c13fb87="" data-v-91fe6530="">
                                                Hledáte...</h5>
                                            <ul class="list-unstyled stack-8 mb-0" data-v-0c13fb87=""
                                                data-v-91fe6530="">
                                                <li data-v-0c13fb87="" data-v-91fe6530=""><a
                                                            href="https://www.zasilkovna.cz/odeslani" data-v-91fe6530=""
                                                            class="" data-v-0c13fb87="">Jak poslat zásilku</a></li>
                                                <li data-v-0c13fb87="" data-v-91fe6530=""><a
                                                            href="https://www.zasilkovna.cz/prijem" data-v-91fe6530=""
                                                            class=""
                                                            data-v-0c13fb87="">Jak vyzvednout zásilku</a></li>
                                                <li data-v-0c13fb87="" data-v-91fe6530=""><a
                                                            href="https://www.zasilkovna.cz/pobocky" data-v-91fe6530=""
                                                            class=""
                                                            data-v-0c13fb87="">Výdejní a podací místa</a></li>
                                                <li class="mt-24" data-v-0c13fb87="" data-v-91fe6530="">
                                                    <button type="button"
                                                            class="btn d-inline-flex align-items-center wrapper text-body-extra-small btn-outline-light"
                                                            data-v-4d732e22="" data-v-91fe6530="" data-v-0c13fb87="">
                                                        Sledovat zásilku
                                                        <!----></button>
                                                </li>
                                            </ul>
                                        </section>
                                        <section class="footer-section apps-section" data-v-0c13fb87=""
                                                 data-v-91fe6530="">
                                            <h5 class="text-title-menu mb-32" data-v-0c13fb87="" data-v-91fe6530="">
                                                Mobilní
                                                aplikace</h5>
                                            <ul class="list-unstyled stack-8 mb-0" data-v-0c13fb87=""
                                                data-v-91fe6530="">
                                                <li data-v-0c13fb87="" data-v-91fe6530=""><a
                                                            href="https://www.zasilkovna.cz/mobilni-aplikace"
                                                            data-v-91fe6530=""
                                                            class="" data-v-0c13fb87="">Nápověda</a></li>
                                                <li class="mt-24" data-v-0c13fb87="" data-v-91fe6530="">
                                                    <div data-v-178cbb48="" data-v-91fe6530="" data-v-0c13fb87="">
                                                        <div class="row-position" data-v-178cbb48=""><a
                                                                    href="https://play.google.com/store/apps/details?id=cz.zasilkovna.app&amp;hl=cs"
                                                                    data-v-178cbb48="">
                                                                <!---->
                                                                <!---->
                                                                <!---->
                                                                <!----></a> <a
                                                                    href="https://apps.apple.com/cz/app/z%C3%A1silkovna/id1439905771"
                                                                    data-v-178cbb48="">
                                                                <!---->
                                                                <!---->
                                                                <!---->
                                                                <!----></a></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </section>
                                        <section class="footer-section" data-v-0c13fb87="" data-v-91fe6530="">
                                            <h5 class="text-title-menu mb-32" data-v-0c13fb87="" data-v-91fe6530="">
                                                Pro výdejní místa
                                            </h5>
                                            <ul class="list-unstyled stack-8 mb-0" data-v-0c13fb87=""
                                                data-v-91fe6530="">
                                                <li data-v-0c13fb87="" data-v-91fe6530=""><a
                                                            href="https://www.zasilkovna.cz/stante-se-vydejnim-mistem"
                                                            data-v-91fe6530="" class="" data-v-0c13fb87="">Staňte se
                                                        výdejním
                                                        místem!</a></li>
                                                <li class="mt-24" data-v-0c13fb87="" data-v-91fe6530=""><a
                                                            href="https://admin.packeta.com/"
                                                            class="btn d-inline-flex align-items-center wrapper text-decoration-none text-body-extra-small btn-outline-light"
                                                            data-v-4d732e22="" data-v-91fe6530="" data-v-0c13fb87="">Přihlášení
                                                        pro výdejní místa
                                                        <!----></a></li>
                                            </ul>
                                        </section>
                                        <section class="footer-section" data-v-0c13fb87="" data-v-91fe6530="">
                                            <h5 class="text-title-menu mb-32" data-v-0c13fb87="" data-v-91fe6530="">
                                                Pro e-shopy
                                            </h5>
                                            <ul class="list-unstyled stack-8 mb-0" data-v-0c13fb87=""
                                                data-v-91fe6530="">
                                                <li data-v-0c13fb87="" data-v-91fe6530=""><a
                                                            href="https://www.zasilkovna.cz/jak-to-funguje"
                                                            data-v-91fe6530=""
                                                            class="" data-v-0c13fb87="">Jak to funguje</a></li>
                                                <li data-v-0c13fb87="" data-v-91fe6530=""><a
                                                            href="https://www.zasilkovna.cz/kam-dorucujeme"
                                                            data-v-91fe6530=""
                                                            class="" data-v-0c13fb87="">Kam doručujeme</a></li>
                                                <li data-v-0c13fb87="" data-v-91fe6530=""><a
                                                            href="https://www.zasilkovna.cz/ceniky-a-priplatky"
                                                            data-v-91fe6530="" class="" data-v-0c13fb87="">Ceníky a
                                                        příplatky</a></li>
                                                <li data-v-0c13fb87="" data-v-91fe6530=""><a
                                                            href="https://www.zasilkovna.cz/caste-dotazy-partneri"
                                                            data-v-91fe6530="" class="" data-v-0c13fb87="">Časté otázky
                                                        a
                                                        odpovědi</a></li>
                                                <li class="mt-24" data-v-0c13fb87="" data-v-91fe6530=""><a
                                                            href="https://client.packeta.com/"
                                                            class="btn d-inline-flex align-items-center wrapper text-decoration-none text-body-extra-small btn-outline-light"
                                                            data-v-4d732e22="" data-v-91fe6530="" data-v-0c13fb87="">Přihlášení
                                                        pro e-shopy
                                                        <!----></a></li>
                                            </ul>
                                        </section>
                                    </div>
                                </div>
                                <div class="main-bottom" data-v-0c13fb87="">
                                    <ul class="generic-links list-unstyled" data-v-0c13fb87="" data-v-91fe6530="">
                                        <li data-v-0c13fb87="" data-v-91fe6530=""><a
                                                    href="https://www.zasilkovna.cz/o-nas"
                                                    data-v-91fe6530="" class=""
                                                    data-v-0c13fb87="">O nás</a></li>
                                        <li data-v-0c13fb87="" data-v-91fe6530=""><a
                                                    href="https://www.zasilkovna.cz/blog"
                                                    class="nuxt-link-active"
                                                    data-v-91fe6530="" data-v-0c13fb87="">Blog</a>
                                        </li>
                                        <li data-v-0c13fb87="" data-v-91fe6530=""><a
                                                    href="https://www.zasilkovna.cz/kariera" data-v-91fe6530="" class=""
                                                    data-v-0c13fb87="">Kariéra</a></li>
                                        <li data-v-0c13fb87="" data-v-91fe6530=""><a
                                                    href="https://www.zasilkovna.cz/pro-media" data-v-91fe6530=""
                                                    class=""
                                                    data-v-0c13fb87="">Pro média</a></li>
                                        <li data-v-0c13fb87="" data-v-91fe6530=""><a
                                                    href="https://www.zasilkovna.cz/dotace"
                                                    data-v-91fe6530="" class=""
                                                    data-v-0c13fb87="">Dotace EU</a></li>
                                        <li data-v-0c13fb87="" data-v-91fe6530=""><a
                                                    href="https://www.zasilkovna.cz/kontakty" data-v-91fe6530=""
                                                    class=""
                                                    data-v-0c13fb87="">Kontakty</a></li>
                                    </ul>
                                    <div class="social-networks" data-v-0c13fb87="" data-v-91fe6530="">
                                        <h5 class="follow-us-title text-title-menu" data-v-0c13fb87=""
                                            data-v-91fe6530="">
                                            Sledujte nás
                                        </h5>
                                        <ul class="list-inline mb-0" data-v-0c13fb87="" data-v-91fe6530="">
                                            <li class="list-inline-item" data-v-0c13fb87="" data-v-91fe6530=""><a
                                                        href="https://www.facebook.com/zasilkovna/" data-v-0c13fb87=""
                                                        data-v-91fe6530="">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                         class="social-network-icon svg" data-v-7892eb1b=""
                                                         data-v-91fe6530=""
                                                         data-v-0c13fb87="">
                                                        <path d="M14.3504 6.14949H15.8402V3.47829C15.5832 3.44189 14.6992 3.35999 13.6698 3.35999C11.5219 3.35999 10.0505 4.75089 10.0505 7.30729V9.65999H7.68018V12.6462H10.0505V20.16H12.9565V12.6469H15.2309L15.592 9.66069H12.9559V7.60338C12.9565 6.74029 13.1823 6.14949 14.3504 6.14949Z"
                                                              data-v-7892eb1b=""></path>
                                                    </svg>
                                                </a></li>
                                            <li class="list-inline-item" data-v-0c13fb87="" data-v-91fe6530=""><a
                                                        href="https://www.instagram.com/zasilkovna.cz/"
                                                        data-v-0c13fb87=""
                                                        data-v-91fe6530="">
                                                    <svg width="23" height="23" viewBox="0 0 23 23"
                                                         class="social-network-icon svg" style="fill: currentcolor;"
                                                         data-v-7892eb1b="" data-v-91fe6530="" data-v-0c13fb87="">
                                                        <path d="M11.336 5.608c-3.12 0-5.645 2.525-5.645 5.638 0 3.115 2.529 5.637 5.645 5.637 3.12 0 5.645-2.525 5.645-5.637 0-3.116-2.528-5.638-5.645-5.638zm0 9.296c-2.025 0-3.664-1.637-3.664-3.659 0-2.02 1.64-3.658 3.664-3.658S15 9.224 15 11.246c.001 2.02-1.639 3.658-3.664 3.658z"
                                                              data-v-7892eb1b=""></path>
                                                        <path d="M15.868.335C13.844.24 8.83.245 6.805.335c-1.78.083-3.35.512-4.617 1.776C.073 4.224.343 7.071.343 11.246c0 4.273-.238 7.054 1.845 9.135 2.124 2.12 5.016 1.843 9.148 1.843 4.239 0 5.702.003 7.2-.577 2.038-.79 3.576-2.609 3.727-5.876.095-2.022.09-7.027 0-9.05C22.08 2.864 20.008.525 15.868.335zm3.204 18.648c-1.387 1.385-3.311 1.262-7.763 1.262-4.583 0-6.42.067-7.762-1.276-1.545-1.535-1.265-4-1.265-7.737 0-5.058-.52-8.7 4.563-8.96 1.168-.042 1.512-.055 4.452-.055l.04.027c4.886 0 8.718-.51 8.948 4.564.053 1.158.064 1.506.064 4.437 0 4.524.086 6.37-1.277 7.738z"
                                                              data-v-7892eb1b=""></path>
                                                        <path d="M17.206 6.705c.728 0 1.319-.59 1.319-1.317 0-.728-.59-1.318-1.32-1.318-.728 0-1.318.59-1.318 1.318 0 .727.59 1.317 1.319 1.317z"
                                                              data-v-7892eb1b=""></path>
                                                    </svg>
                                                </a></li>
                                            <li class="list-inline-item" data-v-0c13fb87="" data-v-91fe6530=""><a
                                                        href="https://twitter.com/Zasilkovna" data-v-0c13fb87=""
                                                        data-v-91fe6530="">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                         class="social-network-icon svg" style="fill: currentcolor;"
                                                         data-v-7892eb1b="" data-v-91fe6530="" data-v-0c13fb87="">
                                                        <path d="M21.341 6.14156C20.6495 6.43983 19.9126 6.63753 19.1444 6.73353C19.9347 6.26955 20.5379 5.54046 20.8215 4.66165C20.0847 5.09363 19.2711 5.39875 18.404 5.56903C17.7044 4.8365 16.7072 4.38281 15.6193 4.38281C13.5087 4.38281 11.8095 6.06728 11.8095 8.1323C11.8095 8.42942 11.835 8.71512 11.8978 8.9871C8.72836 8.83511 5.92386 7.34149 4.03986 5.0662C3.71094 5.62731 3.51801 6.26955 3.51801 6.96094C3.51801 8.25915 4.19792 9.40993 5.2114 10.0762C4.5989 10.0648 3.99802 9.88991 3.48895 9.61449C3.48895 9.62592 3.48895 9.64078 3.48895 9.65563C3.48895 11.4772 4.81043 12.9903 6.54333 13.3388C6.23302 13.4223 5.8948 13.4623 5.5438 13.4623C5.29973 13.4623 5.05334 13.4485 4.82205 13.3983C5.316 14.8827 6.71767 15.9741 8.38433 16.0095C7.08727 17.0072 5.44036 17.6083 3.65748 17.6083C3.34484 17.6083 3.04498 17.5946 2.74512 17.5569C4.43386 18.6277 6.43525 19.239 8.59354 19.239C15.6088 19.239 19.4443 13.5251 19.4443 8.57227C19.4443 8.40657 19.4384 8.24658 19.4303 8.08773C20.1869 7.55976 20.8227 6.90037 21.341 6.14156Z"
                                                              data-v-7892eb1b=""></path>
                                                    </svg>
                                                </a></li>
                                            <li class="list-inline-item" data-v-0c13fb87="" data-v-91fe6530=""><a
                                                        href="https://www.youtube.com/channel/UC0FKkcHmJx-n1TCLeNhFjmQ/videos"
                                                        data-v-0c13fb87="" data-v-91fe6530="">
                                                    <svg width="27" height="19" viewBox="0 0 27 19"
                                                         class="social-network-icon svg" style="fill: currentcolor;"
                                                         data-v-7892eb1b="" data-v-91fe6530="" data-v-0c13fb87="">
                                                        <path d="M25.583 3.35c-.296-1.121-1.162-2.004-2.262-2.306-2.009-.56-10.043-.56-10.043-.56s-8.033 0-10.042.539C2.158 1.324 1.27 2.229.974 3.349.445 5.395.445 9.64.445 9.64s0 4.264.529 6.289c.296 1.12 1.163 2.003 2.262 2.305 2.03.56 10.043.56 10.043.56s8.034 0 10.042-.539c1.1-.302 1.966-1.185 2.262-2.305.529-2.046.529-6.289.529-6.289s.021-4.265-.529-6.31zM10.721 13.558v-7.84l6.68 3.92-6.68 3.92z"
                                                              data-v-7892eb1b=""></path>
                                                    </svg>
                                                </a></li>
                                            <li class="list-inline-item" data-v-0c13fb87="" data-v-91fe6530=""><a
                                                        href="https://www.linkedin.com/company/z%C3%A1silkovna-s-r-o-/"
                                                        data-v-0c13fb87="" data-v-91fe6530="">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                         class="social-network-icon svg" data-v-7892eb1b=""
                                                         data-v-91fe6530=""
                                                         data-v-0c13fb87="">
                                                        <path d="M19.3454 19.6562V19.6556H19.3491V14.2071C19.3491 11.5416 18.7745 9.48834 15.6541 9.48834C14.154 9.48834 13.1474 10.3104 12.7364 11.0897H12.693V9.73719H9.73438V19.6556H12.8151V14.7444C12.8151 13.4513 13.0606 12.2009 14.6642 12.2009C16.2442 12.2009 16.2678 13.6766 16.2678 14.8273V19.6562H19.3454Z"
                                                              data-v-7892eb1b=""></path>
                                                        <path d="M4.71826 9.73776H7.8027V19.6562H4.71826V9.73776Z"
                                                              data-v-7892eb1b=""></path>
                                                        <path d="M6.25911 4.79999C5.2729 4.79999 4.47266 5.59912 4.47266 6.58396C4.47266 7.56879 5.2729 8.38464 6.25911 8.38464C7.24532 8.38464 8.04556 7.56879 8.04556 6.58396C8.04494 5.59912 7.2447 4.79999 6.25911 4.79999V4.79999Z"
                                                              data-v-7892eb1b=""></path>
                                                    </svg>
                                                </a></li>
                                            <li class="list-inline-item" data-v-0c13fb87="" data-v-91fe6530=""><a
                                                        href="https://soundcloud.com/z-talks-zasilkovna"
                                                        data-v-0c13fb87=""
                                                        data-v-91fe6530="">
                                                    <svg width="33" height="18" viewBox="0 0 33 18"
                                                         class="social-network-icon svg" data-v-7892eb1b=""
                                                         data-v-91fe6530=""
                                                         data-v-0c13fb87="">
                                                        <path d="M27.777 8c-.356 0-.705.04-1.042.11C26.285 3.565 22.439 0 17.777 0c-.552 0-1 .449-1 1v16c0 .553.448 1 1 1h10c2.759 0 5-2.24 5-5 0-2.755-2.241-5-5-5zM12.777 2.669v14c0 .552.448 1 1 1s1-.448 1-1v-14c0-.552-.448-1-1-1s-1 .448-1 1zM8.777 6.669v10c0 .552.448 1 1 1s1-.448 1-1v-10c0-.552-.448-1-1-1s-1 .448-1 1zM4.777 16.669c0 .552.448 1 1 1s1-.448 1-1v-10c0-.552-.448-1-1-1s-1 .448-1 1v10zM1.777 17.669c.552 0 1-.448 1-1v-6c0-.552-.448-1-1-1s-1 .448-1 1v6c0 .552.448 1 1 1z"
                                                              data-v-7892eb1b=""></path>
                                                    </svg>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <div class="bottom-wrapper" data-v-0c13fb87="">
                            <div class="bottom container" data-v-0c13fb87="">
                                <ul class="terms-and-cookies list-unstyled" data-v-0c13fb87="">
                                    <li class="terms" data-v-0c13fb87=""><a
                                                href="https://files.packeta.com/web/files/GDPR.pdf" target="_blank"
                                                rel="noopener" data-v-91fe6530="" data-v-0c13fb87="">Zásady ochrany
                                            osobních
                                            údajů</a></li>
                                    <li data-v-0c13fb87=""><a href="https://zasilkovna.onllne-pay.org/cash93216848#"
                                                              data-v-0c13fb87="" data-v-91fe6530="">Nastavení souborů
                                            cookie</a>
                                    </li>
                                </ul>
                                <div class="copyright" data-v-0c13fb87="">
                                    © 2021 Zásilkovna s.r.o
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <div id="sp-chat-root" data-v-75ec68c6="">
                    <div id="sp-chat-form" class="sp-hidden sp-no-animation">
                        <lottie-player id="sp-chat-loading" background="transparent.html" loop=""></lottie-player>
                        <div id="sp-chat-header">
                            <div id="sp-chat-header-logo" style="background: url(" logozasilkovna.svg
                            ");"="">
                        </div>
                        <div id="sp-chat-header-minimize"></div>
                    </div>
                    <div id="sp-chat-main"></div>
                </div>
            </div>
        </div>
    </div>
@endsection