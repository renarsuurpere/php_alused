<?php
/* Ülesanne 3 - HTML vormist info töötlemine
renar.Suurpere
kuupäev: 26.11.2020
*/
$alus1 = $_GET['t1'];
$alus2 = $_GET['t2'];
$korgus = $_GET['t3'];

if(isset($_GET['t1']) or isset($_GET['t2']) or isset($_GET['t3'])){
    if(empty($_GET['t1']) or empty($_GET['t2']) or empty($_GET['t3'])){
        echo 'Sisesta kõik trapetsi andmed!'.'<br>';
    } else {
        $trapetspindala = (($alus1 + $alus2) / 2) * $korgus;
        $trapetspindala = sprintf('%0.1f', $trapetspindala);
        echo 'Trapetsi pindala: '.$trapetspindala.'cm2'.'<br>';
    }
}


$rombkulg = $_GET['t4'];

if(isset($_GET['t4'])){
    if(empty($_GET['t4'])){
        echo 'Sisesta rombi külje pikkus!'.'<br>';
    } else {
        $rombumber = 4 * $rombkulg;
        $rombumber = sprintf('%0.1f', $rombumber);
        echo 'Rombi ümbermõõt: '.$rombumber.'cm';
    }
}
