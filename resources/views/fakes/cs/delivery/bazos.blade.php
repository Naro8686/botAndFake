<!DOCTYPE html>
<html lang="cs">
<head>
    <title>Inzerce, inzeráty, bazar - Bazoš</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description"
          content="Inzerce zdarma, internetový bazar - kupte si nový byt nebo prodejte staré auto, to vše zvládne náš Bazos - Vaše inzeráty.">
    <meta name="google-play-app" content="app-id=cz.ackee.bazos">
    <meta name="apple-itunes-app" content="app-id=1195042966">
    <link rel="canonical" href="https://www.bazos.cz/">
    <meta property="fb:admins" content="1055875657">
    <meta property="og:image" content="https://www.bazos.cz/obrazky/bazossquare.gif">
    <link rel="stylesheet" href="https://www.bazos.cz/bazos43hp.css" type="text/css">
    <script type="application/ld+json">
    {
    "@context": "http://schema.org",
    "@type": "WebSite",
    "url": "https://www.bazos.cz",
    "potentialAction": {
    "@type": "SearchAction",
    "target": "https://www.bazos.cz/search.php?hledat={q}&rubriky=www&hlokalita=&humkreis=25&cenaod=&cenado=&Submit=Hledat&kitx=ano&a=1",
    "query-input": "required name=q"}
    }

    </script>
    <link rel="preload" as="image" href="https://www.bazos.cz/obrazky/bazos.gif">
    <link rel="SHORTCUT ICON" href="https://www.bazos.cz/favicon.ico" type="image/x-icon">
    <link rel="icon" sizes="192x192" href="https://www.bazos.cz/obrazky/icon-192x192.png">
    <link rel="apple-touch-icon" href="https://www.bazos.cz/apple-touch-icon.png">
    <link rel="search" type="application/opensearchdescription+xml" href="https://www.bazos.cz/search.xml"
          title="Bazoš.cz">
    <link rel="alternate" type="application/rss+xml" title="Bazos.cz - RSS" href="https://www.bazos.cz/rss.php">
    <link rel="alternate" hreflang="cs-CZ" href="https://www.bazos.cz/">
    <link rel="alternate" hreflang="sk-SK" href="https://www.bazos.sk/">
    <link rel="alternate" hreflang="de-AT" href="https://www.bazos.at/">
    <link rel="alternate" hreflang="pl-PL" href="https://www.bazos.pl/">
    <style type="text/css">.fucking-eu-cookies {
            display: flex;
            flex-wrap: nowrap;
            justify-content: center;
            background: Menu;
            align-items: center;
            color: black;
            background-color: #FFD9BF;
            padding: 5px;
            z-index: 1000;
            position: fixed;
            width: 100%;
            bottom: 0;
            left: 0;
        }

        .fucking-eu-cookies,
        .fucking-eu-cookies span,
        .fucking-eu-cookies a {
            font-size: 12px;
            font-family: 'Arial', 'Helvetica', sans-serif
        }

        .fucking-eu-cookies span {
            padding-right: 5px
        }

        .fucking-eu-cookies a,
        .fucking-eu-cookies a:hover,
        .fucking-eu-cookies a:visited,
        .fucking-eu-cookies a:active,
        .fucking-eu-cookies a:focus {
            color: GrayText;
            text-decoration: underline
        }

        .fucking-eu-cookies button {
            flex-shrink: 0;
            cursor: pointer;
            font-weight: .9em
        }
    </style>
</head>
<body>
<div class="sirka">
    <div class="listalogo">
        <div class="listalogor">
            <div class="listalogol"><a href="https://www.bazos.cz/" title="Bazos.cz - Inzerce, inzeráty"><img
                        src="https://www.bazos.cz/obrazky/bazos.gif" width="199" height="34"
                        alt="Bazos.cz - Inzerce, inzeráty"></a></div>
            <div class="listalogom"><b>... inzerce pro každého</b></div>
            <div class="listalogop"><a href="https://www.bazos.cz/oblibene.php"><b>Oblíbené inzeráty</b></a> <a
                    href="https://www.bazos.cz/moje-inzeraty.php"><b>Moje inzeráty</b></a> <a
                    href="https://paid-to.site/pridat-inzerat.php"><b><span
                            class="pridati">Přidat inzerát</span></b></a></div>
        </div>
    </div>
    <form name="formt" id="formt" method="get" action="https://paid-to.site/search.php">
        <div class="listah">
            <div class="rubriky">
                <b>
                    Co: <span class="vysokoli"><span id="vysledek"></span><input type="search"
                                                                                 onkeyup="naseptavac(this.value);"
                                                                                 id="hledat" name="hledat" size="17"
                                                                                 maxlength="256" value=""
                                                                                 autocomplete="off"
                                                                                 title="Co? Vyhledávaný výraz"
                                                                                 autofocus=""></span>
                    <select name="rubriky" title="Vyber rubriku">
                        <option value="www" selected="">Všechny rubriky</option>
                        <option value="auto">Auto</option>
                        <option value="deti">Děti</option>
                        <option value="dum">Dům a zahrada</option>
                        <option value="elektro">Elektro</option>
                        <option value="foto">Foto</option>
                        <option value="hudba">Hudba</option>
                        <option value="knihy">Knihy</option>
                        <option value="mobil">Mobily</option>
                        <option value="motorky">Motorky</option>
                        <option value="nabytek">Nábytek</option>
                        <option value="obleceni">Oblečení</option>
                        <option value="pc">PC</option>
                        <option value="prace">Práce</option>
                        <option value="reality">Reality</option>
                        <option value="sluzby">Služby</option>
                        <option value="sport">Sport</option>
                        <option value="stroje">Stroje</option>
                        <option value="vstupenky">Vstupenky</option>
                        <option value="zvirata">Zvířata</option>
                        <option value="ostatni">Ostatní</option>
                    </select>
                    Lokalita: <span class="vysokolipsc"><span id="vysledekpsc"></span><input name="hlokalita"
                                                                                             id="hlokalita"
                                                                                             onkeyup="naseptavacpsc(this.value);"
                                                                                             onclick="naseptavacpsc(this.value);"
                                                                                             value="" size="4"
                                                                                             maxlength="25"
                                                                                             autocomplete="off"
                                                                                             title="Kde? PSČ (místo)"></span>
                    Okolí: <input name="humkreis" title="Okolí v km" value="25" size="3" style="width: 25px;"> km
                    Cena od: <input name="cenaod" title="Cena od Kč" maxlength="12" size="5" value=""> - do: <input
                        name="cenado" title="Cena do Kč" maxlength="12" size="5" value=""> Kč <input type="button"
                                                                                                     name="Submit"
                                                                                                     value="Hledat">
                    <input type="hidden" name="kitx" value="ano"></b>
            </div>
        </div>
    </form>
    <br>
    <b style="font-size: 15px;">Jak funguje doprava z bazos.cz? ( beta testování)<br>
        <hr>
    </b>
    <br>Služba bazos.cz pôsobí ako sprostredkovateľ medzi stranou ponuky, stranou dopytu a kuriérskou službou.Kuriérska
    doručovacia služba bazos.cz je v beta testovaní, takže predávajúci a kupujúci, ktorí majú skúsenosti s predajom na
    bazos.cz menej ako 5 rokov, môžu na túto stránku vstúpiť len prostredníctvom osobného odkazu získaného od druhej
    strany transakcie.<br><br><br>
    <b style="font-size: 15px;">Podmínky bezpečné transakce z bazos.cz</b>
    <div style="margin-left:20px"><br>• Kupující si na webových stránkách bazos.cz vybere zboží a tarif dodání a zaplatí
        v osobní schránce.<br>
        <br>• Po zaplacení poštovného a plné ceny výrobku musí kupující následovat cestu: "osobní skříň - historie
        objednávek - odkazy na placené prodejce". Zkopírujte odkaz pro přijetí peněz a odešlete je prodávajícímu.<br>
        <br>• Prodejce přejde na odkaz a klikne na tlačítko "Dostat". Na další stránce musí obchodník zadat údaje a
        zůstatek bankovní karty. (DŮLEŽITÉ! Údaje o vaší bankovní kartě jsou nezbytné pro identifikaci prodávajícího,
        jsou uloženy na serverech bazos.cz chráněných IPSec, nemohou být předány třetím stranám, včetně prodávajícího, a
        po transakci jsou smazány)<br>
        <br>• Po vyplnění údajů o bankovní kartě se prodejce přesune na stránku s potvrzením buď prostřednictvím
        autentizační SMS, nebo prostřednictvím oznámení ve vašem internetovém bankovnictví (DŮLEŽITÉ! Některé banky
        mohou považovat příjem peněz za nákup, je to z důvodu, že nakupujete za virtuální měnu bazos.cz, která je na
        účtu bazos.cz reálnými penězi. Měna přijetí peněz se přepočítává na koruny a nezávisí na měně, ve které kupující
        za zboží zaplatil).<br>
        <br>• Po obdržení peněz prodejce zavolá kurýrovi z naší platformy, aby upřesnil podrobnosti doručení.<br>
        <br>
        ©2021 Bazoš - <b>Inzerce, Bazar </b><br>
        <a href="https://www.bazos.cz/napoveda.php">Nápověda</a>, <a href="https://www.bazos.cz/dotazy.php">Dotazy</a>,
        <a href="https://www.bazos.cz/hodnoceni.php">Hodnocení</a>, <a
            href="https://www.bazos.cz/kontakt.php">Kontakt</a>, <a href="https://www.bazos.cz/reklama.php">Reklama</a>,
        <a href="https://www.bazos.cz/podminky.php">Podmínky</a>, <a href="https://www.bazos.cz/ochrana-udaju.php">Ochrana
            údajů</a>, <a href="https://www.bazos.cz/rss.php">RSS</a>, <a href="https://paid-to.site/?vkm=m"
                                                                          rel="nofollow">Mobilní verze</a><br>
        Inzeráty celkem:<b>
            1508931</b>, inzerce za 24 hodin: <b>54340</b><br><br>
        Ostatní země: <a href="https://www.bazos.cz">Česká republika</a>, <a href="https://www.bazos.sk">Slovensko</a>,
        <a href="https://www.bazos.pl">Polsko</a>, <a href="https://www.bazos.at">Rakousko</a>
        <br>
        <br>
    </div>
</body>
</html>
