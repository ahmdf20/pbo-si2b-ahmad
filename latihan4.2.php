<?php

class Kendaraan
{
  var $merk;
  var $jmlroda;
  var $harga;
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
}

$kendaraan1 = new Kendaraan;
$kendaraan1->setMerk('Toyota Yaris');
$kendaraan1->setJmlhRoda(4);
$kendaraan1->setHarga(160000000);
$kendaraan1->setWarna('Merah');
$kendaraan1->setBhnBakar('Premium');
$kendaraan1->setTahun(2005);

$kendaraan2 = new Kendaraan;
$kendaraan2->setMerk('Honda Scoopy');
$kendaraan2->setJmlhRoda(2);
$kendaraan2->setHarga(13000000);
$kendaraan2->setWarna('Putih');
$kendaraan2->setBhnBakar('Premium');
$kendaraan2->setTahun(2004);

$kendaraan3 = new Kendaraan;
$kendaraan3->setMerk('Isuzu Panther');
$kendaraan3->setJmlhRoda(4);
$kendaraan3->setHarga(170000000);
$kendaraan3->setWarna('Hitam');
$kendaraan3->setBhnBakar('Solar');
$kendaraan3->setTahun(2003);

$htmlKendaraan1 = "Merk Kendaraan : " . $kendaraan1->getMerk() . "<br>";
$htmlKendaraan1 .= "Harga Kendaraan : " . $kendaraan1->getHarga() . "<br>";
$htmlKendaraan1 .= "Tahun Kendaraan : " . $kendaraan1->getTahun() . "<br>";

$htmlKendaraan2 = "Merk Kendaraan : " . $kendaraan2->getMerk() . "<br>";
$htmlKendaraan2 .= "Harga Kendaraan : " . $kendaraan2->getHarga() . "<br>";
$htmlKendaraan2 .= "Tahun Kendaraan : " . $kendaraan2->getTahun() . "<br>";

$htmlKendaraan3 = "Merk Kendaraan : " . $kendaraan3->getMerk() . "<br>";
$htmlKendaraan3 .= "Harga Kendaraan : " . $kendaraan3->getHarga() . "<br>";
$htmlKendaraan3 .= "Tahun Kendaraan : " . $kendaraan3->getTahun() . "<br>";

echo $htmlKendaraan1 . "<br>";
echo $htmlKendaraan2 . "<br>";
echo $htmlKendaraan3 . "<br>";
