<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP – Töö CSV failidega (Ülesanne 12)
    </title>
</head>
<body>
<p> 1. Sõiduaeg – leia auto sõiduaeg tundides ja minutites. Arvutused teosta kasutajalt saadud andmete põhjal, kus kasutaja lisab stardi ja lõppaja kujul hh:mm. Eeldame, et sõiduaeg jääb ühe ööpäeva sisse. Lisa tühja välja kontroll ja näiteks, kas lisatud ajad on vähemalt viis sümbolit pikad.</p>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
    Stardi aeg<input type="text" name="aeg1"><br>
    Lõpu aeg<input type="text" name="aeg2"><br>
    <input type="submit" value="edasta">
</form>
<?php
$allikas = 'arvutus.csv';
$minu_fail = fopen($allikas, 'a');
//lisatav tekst
$tekst = $_GET['aeg1'];
$tekst2 = $_GET['aeg2'];
$rida = $tekst.';'.$tekst2."\n";
//eraldan tunnid ja minutid aja loomiseks
$tunnid_algus = substr($tekst, 0, 2);
$minutid_algus = substr($tekst, 3, 2);
$tunnid_lopp = substr($tekst2, 0, 2);
$minutid_lopp = substr($tekst2, 3, 2);
//genereerin kellaajad uuesti arvutamiseks
$algaeg = mktime($tunnid_algus, $minutid_algus);
$loppaeg = mktime($tunnid_lopp, $minutid_lopp);
$vahe = $loppaeg - $algaeg;
$minuteid = $vahe / 60;
$minuteidyle = $minuteid % 60;
$tundeYle = ($minuteid - $minuteidyle) / 60;
echo 'Sõiduaeg: '.$tundeYle.' tundi ja '.$minuteidyle.' minutit'.'<br>';
//faili kirjutamine
fwrite($minu_fail, $rida);
fclose($minu_fail);
?>
<br>
<p> 2. Palkade võrdlus – kasuta tootajad.csv andmefaili, kuhu on lisatud töötajate nimed, sugu ja palganumber. Koosta programm, mis analüüsib kas firmas toimub diskrimineerimist soo järgi. Too välja meeste ja naiste palkade keskmiseid ja kõige suuremad palgad.</p>
<?php
$source = 'tootajad.csv';
$my_file = fopen($source, 'r');
$faili_sisu = file_get_contents($source);
$massiiv = explode("\n", $faili_sisu); //tükeldab realõpust
$suurus = count($massiiv);
for ($i = 0; $i < $suurus; $i++) {
    $row = $massiiv[$i];
    $nimi = explode(';', $row); //tükeldab ; märgi kohast
    #print_r($nimi);
    if($nimi[1] == 'n'){
        echo $nimi[0].' - '.$nimi[2].'<br>';
    }
}

fclose($my_file);
?>
</body>
</html>