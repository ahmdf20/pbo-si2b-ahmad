<?php

echo "<title>Latihan Perulangan</title>";

class Perulangan
{
  public function loopingIncrement()
  {
    for ($i = 5; $i <= 20; $i++) {
      echo "Perulangan ke-$i <br>";
    }
  }
}

$objectPerulangan = new Perulangan;
$objectPerulangan->loopingIncrement();
