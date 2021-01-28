<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ül 7 funktsioonid</title>
</head>
<body>
<p> 1. Tervitus -
    koosta funktsioon, mis tervitab. Näiteks: “Tere päiksekesekene!”</p>
<?php
function tervitus(){
    return "Tere Päiksekesekesene";
}

echo tervitus();
?>
<br>
<p> 2. Liitu uudiskirjaga - koosta funktsioon, mis genereerib Bootstrapi uudiskirjaga liitumise vormi (vorm ja nupp)</p>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
    Liitu Bootsrapi uudiskirjaga<br>
    <input type="text" name="sisend"><br>
    <input type="submit" value="edasta">
</form>
<?php
function uudiskirjaga(){
    echo "liituuudiskirjaga?";
}
?>
<br>
<p> 2. Kasutajanimi ja email - 1) loo funktsioon, mis muudab kasutajanime väikesteks tähtedeks 2) täienda funktsiooni, et kasutajanimele luuakse “@hkhk.edu.ee” lõpuga email 3) täienda funktsiooni nii, et kasutajale luuakse 7-kohaline kood 4) täienda koodi nii, et luuakse tähed ja numbrid läbisegamini</p>
<?php
function kasutaja($kasutajanimi="PEETERPAAN"){
    return "Kasutajanimi: ".strtolower($kasutajanimi).'<br>'."E-mail: ".strtolower($kasutajanimi)."@hkhk.edu.ee".'<br>'."7-kohaline kood: ".substr(uniqid(),0,7).'<br>';
}
echo kasutaja();
echo "<br>";
echo kasutaja("KALLEKUSTA")
?>
<br>
<p> 4. Arvud - 1) koosta funktsioon, mis lubab kasutajal valida arvude vahemikku. Näiteks 2 ja 8, tekitavad 2, 3, 4, 5, 6, 7, 8 2) täienda funktsiooni nii, et saab muuta genereeritud arvude sammupikkuse. Näiteks 2 kuni 8 ja samm 3, tekitavad 2, 5, 8</p>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
    Algarv<input type="text" name="arv1"><br>
    Lõpparv<input type="text" name="arv2"><br>
    samm<input type="text" name="samm"><br>
    <input type="submit" value="edasta">
</form>
<?php
function sammugaFunktsioon(){
    for($rida=1; $rida<=8; $rida++){
        for($veerg=1; $veerg<=1; $veerg++){
            echo '*';
        }
        echo '<br>';
    }
}
function sammutaFunktsioon(){
    for($rida=1; $rida<=1; $rida++){
        for($veerg=$_GET['arv1']; $veerg<=$_GET['arv2']; $veerg++){
            echo $veerg;
        }
        echo '<br>';
    }
}

if(isset($_GET['arv1']) or isset($_GET['arv2'])){
    if(empty($_GET['arv1']) or empty($_GET['arv2'])){
        echo 'Sisesta mõlemad arvud.'.'<br>';
    } else if(isset($_GET['samm'])) {
        echo sammugaFunktsioon().'<br>';
    } else {
        echo sammutaFunktsioon().'<br>';
    }
}
?>
<br>
<p> 5. Ristküliku pindala - koosta funktsioon, mis leiab kasutaja antud arvudega ristkülikupindala</p>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
    Üks külg<input type="text" name="kulg1"><br>
    Teine külg<input type="text" name="kulg2"><br>
    <input type="submit" value="edasta">
</form>
<?php
if(isset($_GET['kulg1']) or isset($_GET['kulg2'])){
    if(empty($_GET['kulg1']) or empty($_GET['kulg2'])){
        echo 'Sisestage mõlemate külgede pikkused!'.'<br>';
    } else {
        echo 'Ristküliku pindala: '.ristkulik().' cm2'.'<br>';
    }
}
function ristkulik() {
    return $_GET['kulg1'] * $_GET['kulg2'];
}

?>
<br>
<p> 6. Isikukood - 1) koosta funktsioon, mis leiab, kas sisestatud isikukood on õige pikkusega 2) täienda funktsiooni, et kui isikukood on kirjas leitakse sugu ja sünniaeg</p>

<?php
function ikCheck() {
    if (strlen($_GET['isikukood']) == 11 ){
        echo 'Isikukood on õige pikkusega'.'<br>';
        sugu();
        sunniaeg();
    } else {
        echo 'Isikukoodi pikkus ei klapi'.'<br>';
    }
}
function sugu(){
    if(substr($_GET['isikukood'],0,1) == 3 or substr($_GET['isikukood'],0,1) == 5) {
        echo 'Tegemist on mehega'.'<br>'.'Sünniaeg: '.sunniaeg().'<br>';
    } else if (substr($_GET['isikukood'],0,1) == 4 or substr($_GET['isikukood'],0,1) == 6) {
        echo 'Tegemist on naisega'.'<br>'.'Sünniaeg: '.sunniaeg().'<br>';
    } else {
        echo 'Vale isikukood<br>';
    }
}
function sunniaeg(){
    return substr($_GET['isikukood'],5,2).'.'.substr($_GET['isikukood'],3,2).'.'.substr($_GET['isikukood'],1,2);
}
?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
    isikukood<input type="text" name="isikukood"><br>
    <input type="submit" value="kontrolli">
</form>
<?php


if(isset($_GET['isikukood'])){
    if(empty($_GET['isikukood'])){
        echo 'Sisestage isikukood'.'<br>';
    } else {
        ikCheck();
    }
}


?>
<br>
</body>
</html>