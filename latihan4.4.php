<?php

$buah = ['semangka', 'jeruk', 'apel', 'anggur'];

// $buah['semangka'] = "Isinya merah";
// $buah['jeruk'] = "rasanya manis";
// $buah['apel'] = "warnanya merah";
// $buah['anggur'] = "harganya mahal";

// $buah = [
//   'semangka' => 'isinya merah',
//   'jeruk' => 'rasanya manis',
//   'apel' => 'warnanya merah',
//   'anggur' => 'harganya mahal'
// ];

for ($i = 0; $i < count($buah); $i++) {
  echo $buah[$i] . "<br>";
}
