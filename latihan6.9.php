<?php

echo "<title>Praktikum Perulangan</title>";

class Perulangan
{
  var $t;

  public function setTinggi($t)
  {
    $this->t = $t;
  }

  public function getTinggi()
  {
    return $this->t;
  }

  public function cetakSegitigaSamaKaki()
  {
    for ($i = 0; $i <= $this->t; $i++) {
      for ($j = $this->t; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
      }
      for ($k = 1; $k < $i; $k++) {
        echo "**";
      }
      echo "<br>";
    }
  }


  public function cetakSegitigaKanan()
  {
    for ($i = 0; $i < $this->t; $i++) {
      for ($j = 0; $j < $i; $j++) {
        echo "*";
      }
      echo "<br>";
    }

    for ($i = $this->t - 1; $i >= 1; $i--) {
      for ($j = 1; $j <= $i; $j++) {
        echo "*";
      }
      echo "<br>";
    }
  }

  public function cetakSegitigaKiri()
  {
    for ($i = 0; $i < $this->t; $i++) {
      for ($j = $this->t; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
      }
      for ($k = 1; $k <= $i; $k++) {
        echo "*";
      }
      echo "<br>";
    }

    for ($i = $this->t - 1; $i >= 1; $i--) {
      for ($j = $this->t; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
      }
      for ($k = 1; $k <= $i; $k++) {
        echo "*";
      }
      echo "<br>";
    }
  }
}

$segitiga1 = new Perulangan;
$segitiga1->setTinggi(6);
echo "<br>Segitiga Kiri:<br>";
$segitiga1->cetakSegitigaSamaKaki();



$segitiga2 = new Perulangan;
$segitiga2->setTinggi(6);
echo "Segitiga Kanan:<br>";
$segitiga2->cetakSegitigaKanan();


$segitiga3 = new Perulangan;
$segitiga3->setTinggi(6);
echo "<br>Segitiga Kiri:<br>";
$segitiga3->cetakSegitigaKiri();
