<?php

class Bintang
{
  var $bintang;

  public function setTinggiBintang($bintang)
  {
    $this->bintang = $bintang;
  }

  public function getTinggiBintang()
  {
    return $this->bintang;
  }

  public function cetakSegitigaSamaKaki()
  {
    for ($i = 0; $i <= $this->bintang; $i++) {
      for ($j = $this->bintang; $j > $i; $j--) {
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
    for ($i = 0; $i < $this->bintang; $i++) {
      for ($j = 0; $j < $i; $j++) {
        echo "*";
      }
      echo "<br>";
    }

    for ($i = $this->bintang - 1; $i >= 1; $i--) {
      for ($j = 1; $j <= $i; $j++) {
        echo "*";
      }
      echo "<br>";
    }
  }

  public function cetakSegitigaKiri()
  {
    for ($i = 0; $i < $this->bintang; $i++) {
      for ($j = $this->bintang; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
      }
      for ($k = 1; $k <= $i; $k++) {
        echo "*";
      }
      echo "<br>";
    }

    for ($i = $this->bintang - 1; $i >= 1; $i--) {
      for ($j = $this->bintang; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
      }
      for ($k = 1; $k <= $i; $k++) {
        echo "*";
      }
      echo "<br>";
    }
  }
}

$segitiga1 = new Bintang();
$segitiga1->setTinggiBintang(6);
echo "<br>Segitiga Kiri:<br>";
$segitiga1->cetakSegitigaSamaKaki();



$segitiga2 = new Bintang();
$segitiga2->setTinggiBintang(6);
echo "Segitiga Kanan:<br>";
$segitiga2->cetakSegitigaKanan();


$segitiga3 = new Bintang();
$segitiga3->setTinggiBintang(6);
echo "<br>Segitiga Kiri:<br>";
$segitiga3->cetakSegitigaKiri();
