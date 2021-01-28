<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ül 8 ajafunktsioonid</title>
</head>
<body>
<p> 1. Kuva kuupäev ja kellaaeg formaadis 20.03.2023 17:31</p>
<?php
echo date('d.m.Y G:i');
?>
<br>
<p> 2. Leia kui vana on või kui vanaks saab kasutaja sellel aastal</p>
<?php
$bday = new DateTime('3.7.1994'); // Your date of birth
$today = new Datetime(date('m.d.y'));
$diff = $today->diff($bday);
printf(' Sinu vanus : %d aastat', $diff->y);
printf("\n");
?>
<br>
<p> 3. Mitu päeva on käesoleva kooliaasta lõpuni? Näiteks: 2022 kooliaasta lõpuni on jäänud 64 päeva!</p>
<?php
$today = new Datetime(date('m.d.y'));
$lopp = new DateTime('6.6.2022'); // Your date of birth
$diff = $today->diff($lopp);
printf(' 2022 kooliaasta lõpuni %d päeva', $diff->days);
printf("\n");
?>
<br>
<p> 4.
    Väljasta vastavalt aastaajale pilt (kevad, suvi, sügis, talv)</p>
<?php

?>
<br>
</body>
</html>