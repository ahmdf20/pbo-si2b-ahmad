<?php

class Perulangan
{
  public function loop1()
  {
    $i = 0;
    do {
      echo "$i <br>";
      $i++;
    } while ($i <= 9);
  }
}

$objectPerulangan = new Perulangan;
$objectPerulangan->loop1();
