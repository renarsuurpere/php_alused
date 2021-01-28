<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ül 9 tekstifunktsioonid</title>
</head>
<body>
<p> Sinu ülesandeks on luua  4 dokumendiga veebileht
    Lehe sisu muutub dünaamiliselt, vastavalt lingi sisule
    Kui lehte ei eksiteeri, siis peab kasutajat ka sellest teavitama
    Loo lihtne turvalisuse kontroll</p>
<menu>
    <a href="Ül 10 Koodi taaskasutamine.php">Avaleht</a>
    <a href="Ül 10 Koodi taaskasutamine.php?leht=portfoolio">Portfoolio</a>
    <a href="Ül 10 Koodi taaskasutamine.php?leht=kaart">Kaart</a>
    <a href="Ül 10 Koodi taaskasutamine.php?leht=minust">Minust</a>
    <a href="Ül 10 Koodi taaskasutamine.php?leht=kontakt">Kontakt</a>
</menu>

<?php
if(!empty($_GET['leht'])){
    $leht = htmlspecialchars($_GET['leht']);
    $lubatud = array('portfoolio','kaart','kontakt');
    $kontroll = in_array($leht, $lubatud);
    if($kontroll==true){
        include($leht.'.php');
    } else {
        echo 'Valitud lehte ei eksisteeri!';
    }
} else {

}
?>
<br>
</body>
</html>
