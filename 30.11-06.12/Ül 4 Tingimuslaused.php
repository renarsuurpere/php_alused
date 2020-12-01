<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ül 4 Tingimuslaused</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML vormist info töötlemine</title>
</head>
<body>
<p>Sisesta jagamiseks sisestage kaks täisarvu:</p>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
    Jagatav <input type="text" name="t1"><br>
    Jagaja <input type="text" name="t2"><br>
    <input type="submit" value="Saada">
</form>
<br>
<br>
<p>Sisesta Aadu ja Taneli vanus:</p>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
    Aadu <input type="text" name="aadu"><br>
    Tanel <input type="text" name="tanel"><br>
    <input type="submit" value="Saada">
</form>
<br>
<br>
<p>Sisesta ruudu või ristküliku külgede pikkus ja kõrgus:</p>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
    Pikkus <input type="text" name="esimene"><br>
    Kõrgus <input type="text" name="teine"><br>
    <input type="submit" value="Saada">
</form>
<br>
<br>
<p>Sisestage oma sünniaasta:</p>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
    Sünniaasta <input type="text" name="aasta"><br>
    <input type="submit" value="Saada">
</form>
<br>
<br>
<p>Sisestage kontrolltöö punktid:</p>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
   Punkte <input type="text" name="punktid"><br>
    <input type="submit" value="Saada">
</form>
<?php
if(isset($_GET['t1']) or isset($_GET['t2'])){
    if(empty($_GET['t1']) or empty($_GET['t2'])){
        echo 'Sisestage mõlemad arvud!'.'<br>';
} else {
    $jagatis = $_GET['t1'] / $_GET['t2'];
echo 'Jagatise vastus: '.$jagatis.'<br>';
}
}

if(isset($_GET['aadu']) or isset($_GET['tanel'])){
    if(empty($_GET['aadu']) or empty($_GET['tanel'])){
        echo 'Sisestage mõlematele vanused!'.'<br>';
    } else if($_GET['aadu'] > $_GET['tanel']) {
        echo 'Aadu on vanem!'.'<br>';
    } else if($_GET['aadu'] < $_GET['tanel']) {
        echo 'Tanel on vanem!'.'<br>';
    } else {
        echo 'Tanel ja Aadu on sama vanad.'.'<br>';
    }
}

if(isset($_GET['esimene']) or isset($_GET['teine'])){
if(empty($_GET['esimene']) or empty($_GET['teine'])){
    echo 'Sisestage mõlemate külgede väärtused!'.'<br>';
} else if($_GET['esimene'] == $_GET['teine']) {
    echo 'Tegemist on ruuduga!'.'<br>';
} else {
    echo 'Tegemist on ristkülikuga!'.'<br>';
}
}

if(isset($_GET['punktid'])){
    if(empty($_GET['punktid'])){
        echo 'Sisestage punktide arv!'.'<br>';
    } else if($_GET['punktid'] > 15){
        echo 'Sisestage õige arv punkte (Max 15 punkti)'.'<br>';
    } else {
        switch($_GET['punktid']){
            case (10 <= $_GET['punktid']): echo 'SUPER!';
                break;
            case (5 <= $_GET['punktid']): echo 'Tehtud!';
                break;
            case ($_GET['punktid'] < 5): echo 'Kasin!';
                break;
            default: echo 'SISESTA OMA PUNKTID!';
        }
    }
}
?>
</body>
</html>
</body>
</html>