<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ül 9 tekstifunktsioonid</title>
</head>
<body>
<p> 1. Kasutaja lisab vormi nime, seda näiteks suured ja väikesed tähed läbisegi. Sina kood tervitab teda kenasti nimepidi, kus nimi algab suure algustähega.
    Näiteks: sisend–>mARiO; väljund–>Tere, Mario!</p>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
    <input type="text" name="sisend"><br>
    <input type="submit" value="saada">
</form>
<?php
function tervitus(){
    return 'Tere, '.ucfirst(strtolower($_GET['sisend']));
}
if(isset($_GET['sisend'])){
    if(empty($_GET['sisend'])){
        echo 'Sisesta nimi'.'<br>';
    } else {
        echo tervitus().'<br>';
    }
}
?>
<br>
<p> 2. Kuna on teada, et PHP käsitleb teksti kui massiivi, siis peaks saama seda tsükli abil nö. tükeldada. Ülesandeks on etteantud teksti iga tähe järgi lisada punkt.
    Näiteks: sisend–>stalker; väljund–>S.T.A.L.K.E.R.</p>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
    <input type="text" name="teisalda"><br>
    <input type="submit" value="väljasta">
</form>
<?php
function tekst() {
    return strtoupper($_GET['teisalda']);
}
if(isset($_GET['teisalda'])){
    if(empty($_GET['teisalda'])){
        echo 'Sisesta sõna'.'<br>';
    } else {
        echo tekst().'<br>';
    }
}
?>
<br>
<p> 3. Koosta tekstiväli, mis kuvab kasutaja sisestatud sõnumeid. Kasutaja ropud sõnad asendatakse tärnidega.
    Näiteks: sisend–>Sa oled täielik noob; väljund–>Sa oled täielik ***</p>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
    <input type="text" name="sonum"><br>
    <input type="submit" value="väljasta">
</form>
<?php
function genSonum() {
    $otsi = array('noob', 'perse', 'fuck');
    $asenda = array('***','***','***');
    echo str_replace($otsi, $asenda, $_GET['sonum']);
}
if(isset($_GET['sonum'])){
    if(empty($_GET['sonum'])){
        echo 'Sisesta sõnum'.'<br>';
    } else {
        echo genSonum().'<br>';
    }
}
?>
<br>
<p> 3. Kasutajalt saadud eesnime ja perenime põhjal luuakse talle email lõpuga @hkhk.edu.ee. Kusjuures täpitähed asendatakse ä->a, ö->o, ü->y, õ->o ja kogu email on väikeste tähtedega
    Näiteks: sisend–>Ülle ja Doos; väljund–>ylle.doos@hkhk.edu.ee</p>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
    eesnimi<input type="text" name="eesnimi"><br>
    perenimi<input type="text" name="perenimi"><br>
    <input type="submit" value="väljasta">
</form>
<?php
function kasutaja(){
    return "E-mail: ".eesTapid().'.'.tagaTapid().'@hkhk.edu.ee'.'<br>';
}

function eesTapid() {
    $otsi = array('ä', 'ö', 'ü', 'õ');
    $asenda = array('a','o','y', 'o');
    return strtolower(str_replace($otsi, $asenda, $_GET['eesnimi']));
}

function tagaTapid() {
    $otsi = array('ä', 'ö', 'ü', 'õ');
    $asenda = array('a','o','y', 'o');
    return strtolower(str_replace($otsi, $asenda, $_GET['perenimi']));
}

if(isset($_GET['eesnimi']) or isset($_GET['perenimi'])){
    if(empty($_GET['eesnimi']) or empty($_GET['perenimi'])){
        echo 'Sisesta ees- ja perenimi.'.'<br>';
    } else {
        echo kasutaja().'<br>';
    }
}
?>
<br>
</body>
</html>
