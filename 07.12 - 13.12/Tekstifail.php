<?php
//faili nimi
$allikas = 'loomad.txt';
//faili avamine
$minu_fail = fopen($allikas, 'r');
//faili sisu kuvamine
$faili_sisu = fread($minu_fail, filesize($allikas));
echo nl2br($faili_sisu);
//faili sulgemine
fclose($minu_fail);

$allikas = 'loomad.txt';
$minu_fail = fopen($allikas, 'r');
//kõikide ridade kuvamine
while(!feof($minu_fail)){
    $faili_sisu = fgets($minu_fail);
    echo nl2br($faili_sisu);
}

fclose($minu_fail);