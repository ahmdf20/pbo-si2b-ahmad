<?php
echo "<title>PBO Bagian Function, Method, dan Array</title>";
class Kendaraan
{
  var $merk;
  var $jmlroda;
  var $harga;
  var $harga_second;
  var $warna;
  var $bhnbakar;
  var $tahun;

  public function setMerk($x)
  {
    $this->merk = $x;
  }

  public function getMerk()
  {
    return $this->merk;
  }

  public function setHarga($x)
  {
    $this->harga = $x;
  }

  public function getHarga()
  {
    return $this->harga;
  }

  public function setJmlhRoda($x)
  {
    $this->jmlroda = $x;
  }

  public function setWarna($x)
  {
    $this->warna = $x;
  }

  public function setBhnBakar($x)
  {
    $this->bhnbakar = $x;
  }

  public function setTahun($x)
  {
    $this->tahun = $x;
  }

  public function getTahun()
  {
    return $this->tahun;
  }

  public function hargaSecond()
  {
    $this->harga_second = $this->harga * 0.7;
  }

  public function getHargaSecond()
  {
    return $this->harga_second;
  }

  public function checkHarga()
  {
    $status = $this->harga_second > 50000000 ? "Mahal" : "Murah";
    return $status;
  }
}

$kendaraan1 = new Kendaraan;
$kendaraan1->setMerk('Toyota Yaris');
$kendaraan1->setJmlhRoda(4);
$kendaraan1->setHarga(160000000);
$kendaraan1->setWarna('Merah');
$kendaraan1->setBhnBakar('Premium');
$kendaraan1->setTahun(2005);
$kendaraan1->hargaSecond();

$kendaraan2 = new Kendaraan;
$kendaraan2->setMerk('Honda Scoopy');
$kendaraan2->setJmlhRoda(2);
$kendaraan2->setHarga(13000000);
$kendaraan2->setWarna('Putih');
$kendaraan2->setBhnBakar('Premium');
$kendaraan2->setTahun(2004);
$kendaraan2->hargaSecond();

$kendaraan3 = new Kendaraan;
$kendaraan3->setMerk('Isuzu Panther');
$kendaraan3->setJmlhRoda(4);
$kendaraan3->setHarga(170000000);
$kendaraan3->setWarna('Hitam');
$kendaraan3->setBhnBakar('Solar');
$kendaraan3->setTahun(2003);
$kendaraan3->hargaSecond();

$htmlKendaraan1 = "Merk Kendaraan : " . $kendaraan1->getMerk() . "<br>";
$htmlKendaraan1 .= "Roda Kendaraan : $kendaraan1->jmlroda <br>";
$htmlKendaraan1 .= "Harga Baru Kendaraan : Rp. " . number_format($kendaraan1->getHarga(), 0, ',', '.') . "<br>";
$htmlKendaraan1 .= "Warna Kendaraan : $kendaraan1->warna <br>";
$htmlKendaraan1 .= "Bahan Bakar Kendaraan : $kendaraan1->bhnbakar <br>";
$htmlKendaraan1 .= "Tahun Kendaraan : " . $kendaraan1->getTahun() . "<br>";
$htmlKendaraan1 .= "Kategori Kendaraan : " . $kendaraan1->checkHarga() . "<br>";
$htmlKendaraan1 .= "Harga Second Kendaraan : Rp. " . number_format($kendaraan1->getHargaSecond(), 0, ',', '.') . " <br>";

$htmlKendaraan2 = "Merk Kendaraan : " . $kendaraan2->getMerk() . "<br>";
$htmlKendaraan2 .= "Roda Kendaraan : $kendaraan2->jmlroda <br>";
$htmlKendaraan2 .= "Harga Baru Kendaraan : Rp. " . number_format($kendaraan2->getHarga(), 0, ',', '.') . "<br>";
$htmlKendaraan2 .= "Warna Kendaraan : $kendaraan2->warna <br>";
$htmlKendaraan2 .= "Bahan Bakar Kendaraan : $kendaraan2->bhnbakar <br>";
$htmlKendaraan2 .= "Tahun Kendaraan : " . $kendaraan2->getTahun() . "<br>";
$htmlKendaraan2 .= "Kategori Kendaraan : " . $kendaraan2->checkHarga() . "<br>";
$htmlKendaraan2 .= "Harga Second Kendaraan : Rp. " . number_format($kendaraan2->getHargaSecond(), 0, ',', '.') . " <br>";

$htmlKendaraan3 = "Merk Kendaraan : " . $kendaraan3->getMerk() . "<br>";
$htmlKendaraan3 .= "Roda Kendaraan : $kendaraan3->jmlroda <br>";
$htmlKendaraan3 .= "Harga Baru Kendaraan : Rp. " . number_format($kendaraan3->getHarga(), 0, ',', '.') . "<br>";
$htmlKendaraan3 .= "Warna Kendaraan : $kendaraan3->warna <br>";
$htmlKendaraan3 .= "Bahan Bakar Kendaraan : $kendaraan3->bhnbakar <br>";
$htmlKendaraan3 .= "Tahun Kendaraan : " . $kendaraan3->getTahun() . "<br>";
$htmlKendaraan3 .= "Kategori Kendaraan : " . $kendaraan3->checkHarga() . "<br>";
$htmlKendaraan3 .= "Harga Second Kendaraan : Rp. " . number_format($kendaraan3->getHargaSecond(), 0, ',', '.') . " <br>";

echo $htmlKendaraan1 . "<br>";
echo $htmlKendaraan2 . "<br>";
echo $htmlKendaraan3 . "<br>";
