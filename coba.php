<?php
class SegitigaBintang
{
  var $ukuran;

  public function setUkuran($ukuran)
  {
    $this->ukuran = $ukuran;
  }

  public function getUkuran()
  {
    return $this->ukuran;
  }

  public function tampilSegitiga()
  {
    $ukuran = $this->getUkuran();
    // Pola bintang piramida
    for ($i = 1; $i < $ukuran; $i++) {
      // Cetak spasi
      for ($j = 0; $j < $ukuran - $i; $j++) {
        echo "&nbsp;&nbsp;";
      }
      // Cetak bintang
      for ($k = 1; $k < 2 * $i; $k++) {
        echo "*";
      }
      echo "<br>";
    }
  }
  public function tampilSegitigaPlayButton()
  {
    $ukuran = $this->getUkuran();
    // Pola segitiga kiri
    for ($i = 0; $i < $ukuran; $i++) {
      // Cetak kolom
      for ($j = 0; $j <= $i; $j++) {
        echo "*";
      }
      echo "<br>";
    }
    for ($i = $ukuran; $i >= 0; $i--) {
      // Cetak kolom
      for ($j = 1; $j <= $i; $j++) {
        echo "*";
      }
      echo "<br>";
    }
  }

  public function tampilSegitigaPlayButtonRTL()
  {
    $ukuran = $this->getUkuran();
    // Pola segitiga kanan
    for ($i = 0; $i < $ukuran; $i++) {
      // Cetak spasi
      for ($j = 1; $j < $ukuran - $i; $j++) {
        echo "&nbsp;&nbsp;";
      }
      // Cetak bintang
      for ($k = 0; $k <= $i; $k++) {
        echo "*";
      }
      echo "<br>";
    }
    for ($i = $ukuran; $i >= 0; $i--) {
      // Cetak spasi
      for ($j = 0; $j < $ukuran - $i; $j++) {
        echo "&nbsp;&nbsp;";
      }
      // Cetak bintang
      for ($k = 0; $k < $i; $k++) {
        echo "*";
      }
      echo "<br>";
    }
  }
}

// Membuat objek segitiga
$segitiga = new SegitigaBintang();

// Ukuran segitiga untuk semua segitiga
$ukuran = 6;
$segitiga->setUkuran($ukuran);
echo "Segitiga Pertama:" . "<br>";
$segitiga->tampilSegitiga();

// Ukuran segitiga untuk semua segitiga
$ukuran = 5;
$segitiga->setUkuran($ukuran);
echo "Segitiga Kedua:" . "<br>";
$segitiga->tampilSegitigaPlayButton();

// Ukuran segitiga untuk semua segitiga
$ukuran = 5;
$segitiga->setUkuran($ukuran);
echo "Segitiga Ketiga:" . "<br>";
$segitiga->tampilSegitigaPlayButtonRTL();
