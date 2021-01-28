<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ül 6 tsükklid</title>
</head>
<body>
<p>
    1. Genereeri:<br>
    - loo arvud 1-100<br>
    - loo pärast iga arvu reavahetus<br>
    - lisa iga arvu järele punkt (N: 1. 2. 3. jne..)
</p>
<?php
for($sajani=1;$sajani<=100;$sajani++){
    echo $sajani.'.'.'<br>';
}
?>
<br>
<p> 2. Rida - koosta tärnidest horisontaalne rida</p>
<?php
for($rida=1; $rida<=1; $rida++){
    for($veerg=1; $veerg<=8; $veerg++){
        echo '*';
    }
    echo '<br>';
}
?>
<br>
<p> 3. Rida II – koosta tärnidest vertikaalne rida</p>
<?php
for($rida=1; $rida<=8; $rida++){
    for($veerg=1; $veerg<=1; $veerg++){
        echo '*';
    }
    echo '<br>';
}
?>
<br>
<p> 4. Ruut – loo tsükli abil tärnidest ruut, mille suuruse lisab kasutaja läbi veebivormi</p>
<p>Sisesta tärnide arv, mitu tärni pikk ja lai ruut on:</p>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
    Tärnide arv <input type="text" name="tarne"><br>
    <input type="submit" value="Saada">
</form>
<?php
if(isset($_GET['tarne'])){
    if(empty($_GET['tarne'])){
        echo 'Sisesta tärnide arv'.'<br>';
    } else {
        for($rida=1; $rida<=$_GET['tarne']; $rida++){
            for($veerg=1; $veerg<=$_GET['tarne']; $veerg++){
                echo '*';
            }
            echo '<br>';
        }
    }
}
?>
<br>
<p> 5. Kahanev – väljasta paarisarvud 10-1</p>
<?php
for($paarisVahem=10;$paarisVahem>=1;$paarisVahem--){
    if($paarisVahem % 2 == 0){
        echo $paarisVahem.'<br>';
    }
}
?>
<br>
<p> 6. Kolmega jagunevad – tekita arvud 1-100, aga kuva kolmega jagunevad arvud (N: 3, 6, 9 jne.)</p>
<?php
for($kolmegaJaguv=1;$kolmegaJaguv<=100;$kolmegaJaguv++){
    if($kolmegaJaguv % 3 == 0){
        echo $kolmegaJaguv.'<br>';
    }
}
?>
<br>
<p> 7. Massiivid ja tsüklid<br>
    – tekita tüdrukute ja poiste massiivid (võrdsed)<br>
    – väljasta poiste ja tüdrukute paarid erinevatel ridadel
</p>
<?php
$poisid = array(1=>'leo', 'mart', 'juhan', 'miku', 'uku');
$tudrukud = array(1=>'mari', 'kati', 'anni', 'laura', 'kaisa');
$kokku = count($poisid);

for($nr=1;$nr<=$kokku;$nr++){
    echo $poisid[$nr].' ja '.$tudrukud[$nr].'<br>';
}
?>
<p> 8. Massiivid ja tsüklid<br>
    – tee poiste ja tüdrukute massiividest koopiad<br>
    – tekita suvalistest tüdrukutest ja poistest koopia (nimed ei tohi korduda)
</p>
</body>
</html>