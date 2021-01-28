<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ül 5 Massiivid</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<?php
$nimed = array('Anu', 'Laura', 'Mia', 'Merliin', 'Viktoria', 'Dorel', 'Kelen', 'Egle');
$margid = array("Subaru","BMW","Acura","Mercedes-Benz","Lexus","GMC","Volvo","Toyota","Volkswagen","Volkswagen","GMC","Jeep","Saab","Hyundai","Subaru","Mercedes-Benz",
    "Honda","Kia","Mercedes-Benz","Chevrolet","Chevrolet","Porsche","Buick","Dodge","GMC","Dodge","Nissan","Dodge","Jaguar","Ford","Honda","Toyota","Jeep",
    "Kia","Buick","Chevrolet","Subaru","Chevrolet","Chevrolet","Pontiac","Maybach","Chevrolet","Plymouth","Dodge","Nissan","Porsche","Nissan","Mercedes-Benz",
    "Suzuki","Nissan","Ford","Acura","Volkswagen","Lincoln","Mazda","BMW","Mercury","Mitsubishi","Ram","Audi","Kia","Pontiac","Toyota","Acura","Toyota","Toyota",
    "Chevrolet","Oldsmobile","Acura","Pontiac","Lexus","Chevrolet","Cadillac","GMC","Jeep","Audi","Acura","Acura","Honda","Dodge","Hummer","Chevrolet","BMW",
    "Honda","Lincoln","Hummer","Acura","Buick","BMW","Chevrolet","Cadillac","BMW","Pontiac","Audi","Hummer","Suzuki","Mitsubishi","Jeep","Buick","Ford");
$VIN = array("1GKS1GKC8FR966658", "1FTEW1C87AK375821", "1G4GF5E30DF760067", "1FTEW1CW9AF114701", "WAUGGAFC8CN433989", "3G5DA03E83S704506", "4JGDA2EB0DA207570",
    "1FTEW1E88AK070552", "SAJWA0F77F8732763", "JHMFA3F21BS660717", "JTHBP5C29C5750730", "WA1LFAFP9DA963060", "3D7TT2CT6BG521976", "WVWN7EE961049",
    "2C3CA5CG3BH341234", "YV4952CFXC162587", "KNALN4D71F5805172", "JN1CV6EK7BM903692", "5FRYD3H84EB186765", "WAUL64B83N441878", "WDDGF4HBXCF845665",
    "WAUKF78E45A133973", "JN1BY0AR2AM022612", "WA1EY74L69D931520", "3GYFNGEYXBS290465", "1D7CW2GK4AS059336", "JN8AZ1FY5EW087447", "WAUBF78E57A343355",
    "SCFFBCCD8AG695133", "WBAWC73548E143482", "3GYFNGE38DS093883", "SCBCP73WC348460", "JN8AE2KPXE9353316", "2C3CDXDT2EH018229", "1G6AH5SX7D0325662",
    "WVWED7AJ7DW431402", "1FTKR1AD3AP316066", "WBAKF5C52CE612586", "1FTNX2A57AE16083", "WAUCFAFR1AA166821", "SCFFDAAM3EG486065", "1G4PR5SK5F4821043",
    "1C3CDFCB4ED858321", "1N6AD0CW8EN722090", "1NXBU4EE0AZ438077", "2T1BPRHE7FC131594", "JH4KB1637C451183", "1C4NJCBA7ED747024", "WAUHF68P86A736691",
    "3D7TT2HT1AG96429", "5GADX23L96D250838", "5FRYD3H25FB985936", "1G4GG5E30DF126304", "KNADH5A38B6072755", "WAUBFAFL1BA477979", "3C63DRL4CG674293",
    "1G6AR5SX0E0834815", "1NXBU4EE2AZ309838", "WAUKGBFB4AN797783", "JN1AJ0HP8AM801887", "WAUPL68E25A448831", "WA1C8BFP3FA535374", "WAUHE78P78A019744",
    "TRURD38J081400551", "1G4HP52K95428171", "5N1CR2MN1EC607241", "5UMDU93417L322773", "1G6AJ5S35F09585", "JN1CV6AP3BM234743", "SCBCR63W66C842051",
    "SCFFDCBD2AG509467", "WBA3C1C58CA664091", "1D7RW2BK6BS922303", "WAUDH98E67A546009", "2HNYB1H46CH683844", "3VW467AT4DM257275", "WDDGF4HB7CA515172",
    "2G61W5S88E9666199", "5GADV33W17D256205", "2C3CDXDT9CH683075", "2G4GU5X0E9989574", "WAUJC58E53A641651", "WDDEJ7KB3CA053774", "3D73M3CL6AG890452",
    "5GAER13D19J026924", "1G4HC5EM1BU329204", "3VWML7AJ6CM772736", "3C6TD4HT2CG011211", "JTDZN3EU2FJ023675", "JN8AZ1MU4CW041721", "KNAFX5A82F5991024",
    "1N6AA0CJ1D57470", "WAUEG98E76A780908", "WAUAF78E96A920706", "1GT01XEG8FZ268942", "1FTEW1CW4AF371278", "JN1AZ4EH8DM531691", "WAUEKAFBXAN294295",
    "1N6AA0EDXFN868772", "WBADW3C59DJ422810");

//sorteerimine
sort($nimed);
//massiivi kõigi elementide väljastamine
echo 'Ülesanne 1 - Tüdrukud – koosta vähemalt 8 tüdruku nimedega massiiv. Kasuta funktsiooni sort(), et sorteerida ja väljastada need kasvavas järjekorras ning kuvada ridade kaupa.'.'<br>'.'<br>';
foreach($nimed as $nimi){

    echo "$nimi <br>";
}

echo '<br>'.'Ülesanne 2 - Tüdrukud<br>
* väljasta tüdrukute nimekirjast esimesed 3 nime<br>
* väljasta viimane nimi<br>
* väljasta üks suvaline nimi (suvaline arv genereeritakse vastavalt massiivis olevate elementide arvule)'.'<br>'.'<br>';

echo "Kolm esimest nime: $nimed[0], $nimed[1], $nimed[2] <br>";

$viimane = array_pop($nimed);
echo "Viimane nimi: $viimane <br>";

$suvaline = array_rand($nimed);
echo "Suvaline nimi: $nimed[$suvaline] <br>";

echo '<br>'.'Ülesanne 3 - Autod – koosa auto markidest ja VIN koodideset massiivid'.'<br>'.'<br>';
echo 'Autosid kokku: '.count($margid).'<br>';

if(count($margid) < count($VIN)) {
    echo 'VIN koode on rohkem.<br>';
} else if (count($margid) > count($VIN)) {
    echo 'Autosid on rohkem<br>';
    } else
    echo 'Sama palju on massivides kirjeid.<br>';

$toyotaArv = 0;
$audiArv = 0;

foreach ($margid as $auto){
    if($auto == 'Toyota'){
        $toyotaArv++;
    }
    if($auto == 'Audi') {
        $audiArv++;
    }
}
echo 'Toyotade arv: '.$toyotaArv.'<br>';
echo 'Audide arv: '.$audiArv.'<br>';

foreach ($VIN as $vinKoodid){
    if(strlen($vinKoodid) < 17) {
        echo $vinKoodid.'<br>';
    }
}

echo '<br>'.'Ülesanne 4 - Keskmised palgad - leia 2018 palkade keskmine'.'<br>'.'<br>';

$palgad = array(1220,1213,1295,1312,1298,1354,1296,1286,1292,1327,1369,1455);
$palgadKokku = array_sum($palgad);
$keskminePalk = $palgadKokku / count($palgad);
echo '2018 aasta keskmine palk on '.$keskminePalk.' eurot.<br>';

echo '<br>'.'Ülesanne 5 - Firmad<br>
* tekita firma nimedes massiiv ja korrasta<br>
* kuva firmade nimed<br>
* kasutajal on võimalik nime järgi firmasid eemaldada (kuva nimekiri uuesti)'.'<br>'.'<br>';

$firmaNimed = array("Kimia","Mynte","Voomm","Twiyo","Layo","Talane","Gigashots","Tagchat","Quaxo","Voonyx","Kwilith","Edgepulse","Eidel","Eadel","Jaloo","Oyope","Jamia");
foreach($firmaNimed as $firmanimed){
    echo $firmanimed.', ';
}
$firmaMaha = "Gigashots";

for ($i = 0; $i < count($firmaNimed); $i++){
    if($firmaNimed[$i]== $firmaMaha){
        unset($firmaNimed[$i]);
    }
}
foreach($firmaNimed as $firmanimed){
    echo $firmanimed.', ';
}

echo '<br><br>'.'Ülesanne 6 - Riigid - kuva kõige pikema riigi nime märkide arv'.'<br>'.'<br>';

$riigid = array("Indonesia","Canada","Kyrgyzstan","Germany","Philippines",
    "Philippines","Canada","Philippines","South Sudan","Brazil",
    "Democratic Republic of the Congo","Indonesia","Syria","Sweden",
    "Philippines","Russia","China","Japan","Brazil","Sweden","Mexico","France",
    "Kazakhstan","Cuba","Portugal","Czech Republic");
$pikim = max(array_map('strlen', $riigid));
echo 'Kõige pikema riigi nime märkide arv: '.$pikim;
/* in_array */

echo '<br><br>'.'Ülesanne 7 - Hiina nimed - soreeri nimed kasvavas järjekorras ning kuva esimene ja viimane nimi'.'<br>'.'<br>';

$hiina_nimed = array("瀚聪","月松","雨萌","展博","雪丽","哲恒","慧妍","博裕","宸瑜","奕漳",
    "思宏","伟菘","彦歆","睿杰","尹智","琪煜","惠茜","晓晴","志宸","博豪",
    "璟雯","崇杉","俊誉","军卿","辰华","娅楠","志宸","欣妍","明美");
// sorteerimine
sort($hiina_nimed);
var_dump($hiina_nimed);
$esimeneNimi = array_shift($hiina_nimed);
echo '<br> Esimene nimi : '.$esimeneNimi.'<br>';
$viimaneNimi = array_pop($hiina_nimed);
echo 'Viimane nimi : '.$viimaneNimi.'<br>';

echo '<br>'.'Ülesanne 8 - Google<br>
* kasuta oringumootorit, et leida massiivi funktsioon, mis aitab leida, kas kasutaja otsitav nimi on olemas<br>
* väljasta täislause ja kuva Bootstrap Alert kastis<br>
'.'<br>';

?>
<p>Sisestage googlest otsitav nimi:</p>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
    Nimi <input type="text" name="googleOtsi"><br>
    <!-- Submit buttton trigger modal -->
    <!-- panin siin just submit tüüpi nupp, et form oleks sellega saadetav -->
    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >Otsi</button>
</form>
<!-- Modal -->
<?php
// ennem modaali loomist paneme andmed paika
$google = array("Feake","Bradwell","Dreger","Bloggett","Lambole","Daish","Lippiett","
Blackie","Stollenbeck","Houseago","Dugall","Sprowson","Kitley","Mcenamin",
    "Allchin","Doghartie","Brierly","Pirrone","Fairnie","Seal","Scoffins",
    "Galer","Matevosian","DeBlase","Cubbin","Izzett","Ebi","Clohisey",
    "Prater","Probart","Samwaye","Concannon","MacLure","Eliet","Kundt","Reyes");
// siis kontrollime, kas vormi andmed on saadetud
if(isset($_GET['googleOtsi'])) {
    if (empty($_GET['googleOtsi'])) {
        // kui mitte - valmistame juhtiv lause
        $sisu = 'Sisestage otsitav nimi' . '<br>';
    } elseif (in_array($_GET['googleOtsi'], $google)) {
        // muidu valmistame otsingu tulemus
        $sisu = "Nimi on listis";
    } else {
        $sisu = "Nimi pole listis";
    }
    // NB! siin if, mis kontrollib, et vorm saatnud andmed veel ei lõpe!!!
    // Nüüd loome modaal koos ette valmistatud juhtivlaustega
    ?>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Otsingu tulemus:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    // Siin on just if-s valmistatud sisu väljastamine
                    echo $sisu;
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <?php
    // Ja siin on modaali näitamine jQuery abil
    echo "<script>$('#exampleModal').modal('show')</script>";
} // ja sellega lõpeb php if lause osa!!!
?>
<?php
echo '<br>'.'Ülesanne 9 - Pildid<br>
* tekita /img  kataloog ja sinna profiilipildid samade nimedega<br>
* kuva massiivist kolmas pilt<br>
* kuva massiivist kõik pildid<br>
* kuva pildid Bootstrapi abil 6 veerus'.'<br>'.'<br>';

$dir ='img/';
$pildid = array('devlin','freeland','gabriel','pete','peterus','prentice');
foreach ($pildid as $pilt){
    $aadress =  $dir.$pilt.'.jpg';

    echo '<img src="'.$aadress.'" width="150" height="150">';
}
//echo '<br> Esimene pilt : '.$esimenePilt.'<br>';
?>

</body>
</html>