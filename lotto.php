<?php

echo '<h2>Lottozahlen-Generator</h2>';

$lotterynumbers_arr = range(1, 49);
shuffle($lotterynumbers_arr);
$lotterynumbers_arr = array_slice($lotterynumbers_arr, 0, 6);
sort($lotterynumbers_arr);
$supernumber = range(0, 9);

echo "<p style='color:#a34924; font-size:18px;'>" . "Gewinnzahlen: ";
foreach ($lotterynumbers_arr as $n => $luckynumbers) {
    echo $luckynumbers . " ";
}
;
echo '<br>';
echo 'Superzahl: ';
echo mt_rand(0, 9) . ' ';
echo '<br>';
echo '<br>';
echo '<button style="  background-color: #dc3e3f;
border: none;
cursor:pointer;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;" onclick="location.reload()">Nummern generieren</button>';
