<?php

class Perulangan
{
  public function loop1()
  {
    for ($baris = 1; $baris <= 6; $baris++) {
      for ($kolom = 1; $kolom < $baris; $kolom++) {
        echo $kolom . "&nbsp";
      }
      echo "<br>";
    }
  }

  public function loop2()
  {
    for ($baris = 1; $baris <= 6; $baris++) {
      for ($kolom = 1; $kolom < $baris; $kolom++) {
        echo "*" . "&nbsp";
      }
      echo "<br>";
    }
  }
}

$objectPerulangan = new Perulangan;
echo "Perulangan Pertama: ";
$objectPerulangan->loop1();
echo "Perulangan Kedua: ";
$objectPerulangan->loop2();
