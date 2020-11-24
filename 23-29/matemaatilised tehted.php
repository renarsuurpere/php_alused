<?php
/* Ülesanne 2 - Matemaatilised tehted
renar.Suurpere
kuupäev: 24.11.2020
*/
//aritmeetilised operaatorid
$x = 12;
$y = 5;
$liitm = $x + $y;
$lahut = $x - $y;
$korru = $x * $y;
$jagam = $x / $y;
$jaak = $x % $y;
echo 'Liitmine: '.$x.' + '.$y.' = '.$liitm.'<br>';
echo 'Lahutamine: '.$x.' - '.$y.' = '.$lahut.'<br>';
echo 'Korrutamine: '.$x.' * '.$y.' = '.$korru.'<br>';
echo 'Jagamine: '.$x.' / '.$y.' = '.$jagam.'<br>';
echo 'Jääk: '.$x.' % '.$y.' = '.$jaak.'<br>';
echo '<br>';

$mm = 198;
$cm = 10;
$m = 1000;
$senti = $mm / $cm;
$meetriks = $mm / $m;
$kakskoma = sprintf('%0.2f', $meetriks);
echo 'Teisandame '.$mm.' sentimeetriteks ja meetriteks.'.'<br>';
echo 'Sentimeetriteks: '.$mm.' / '.$cm.' = '.$senti.'<br>';
echo 'Meetriteks: '.$mm.' / '.$m.' = '.$kakskoma.'<br>';