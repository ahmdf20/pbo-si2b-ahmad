<?php


class Perulangan
{
  public function loopingDecrement()
  {
    for ($i = 20; $i > 0; $i--) {
      echo "Perulangan ke-$i <br>";
    }
  }
}

$objectPerulangan = new Perulangan;
$objectPerulangan->loopingDecrement();
