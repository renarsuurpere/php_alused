<?php include('config.php'); ?>
<?php
if (!empty($_GET['eesnimi']) && !empty($_GET['perenimi']) && !empty($_GET['aasta']) &&  !empty($_GET['hind']) ) {
    $eesnimi = htmlspecialchars(trim($_GET['eesnimi']));
    $perenimi = htmlspecialchars(trim($_GET['perenimi']));
    $aasta = htmlspecialchars(trim($_GET['aasta']));
    $hind = htmlspecialchars(trim($_GET['hind']));
    //päring
    $paring = "INSERT INTO HAALETUS(Eesnimi,Perenimi,aasta,hind) VALUES ('".$eesnimi."','".$perenimi."','".$aasta."','".$hind."')";
    $valjund = mysqli_query($yhendus, $paring);
    //päringu vastuste arv
    $tulemus = mysqli_affected_rows($yhendus);
    if ($tulemus == 1) {
        echo "Hääletamine õnnestus";
    } else {
        echo "Midagi läks valesti";
    }
    //ühenduse sulgemine
    mysqli_close($yhendus);
}
?>
<h2>Hääletusvorm</h2>
<form action="" method="get">
    <table>
        <tr><td>Eesnimi: </td><td><input type="text" name="eesnimi" required></td></tr>
        <tr><td>Perenimi:</td><td> <input type="text" name="perenimi" required></td></tr>
        <tr><td>Aasta: </td><td><input type="number" name="aasta" value="2000" min="1900" max="2099" required></td></tr>
        <tr><td>Hind: </td><td><input type="number" name="hind" value="1" min="1" max="100" step="0.1" required></td></tr>
        <tr><td><input type="reset" value="Tühjenda"></td><td><input type="submit" value="HÄÄLETA"></td></tr>
    </table>
</form>