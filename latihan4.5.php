<?php

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

  public function getJmlRoda()
  {
    return $this->jmlroda;
  }

  public function setWarna($x)
  {
    $this->warna = $x;
  }

  public function getWarna()
  {
    return $this->warna;
  }

  public function setBhnBakar($x)
  {
    $this->bhnbakar = $x;
  }

  public function getBhnBakar()
  {
    return $this->bhnbakar;
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

$data1 = ['Toyota Yaris', 4, 160000000, 'Merah', 'Pertamax', 2014];
$data2 = ['Honda Scoopy', 2, 13000000, 'Putih', 'Premium', 2005];
$data3 = ['Isuzu Panther', 4, 40000000, 'Merah', 'Pertamax', 1994];

// $$data = "Hallo";
// echo $$data;
for ($i = 1; $i <= 3; $i++) {
  // for ($h = 0; $h <= 5; $i++) {
  ${"kendaraan$i"} = new Kendaraan;
  ${"kendaraan$i"}->setMerk(${"data$i"}[0]);
  ${"kendaraan$i"}->setJmlhRoda(${"data$i"}[1]);
  ${"kendaraan$i"}->setHarga(${"data$i"}[2]);
  ${"kendaraan$i"}->setWarna(${"data$i"}[3]);
  ${"kendaraan$i"}->setBhnBakar(${"data$i"}[4]);
  ${"kendaraan$i"}->setTahun(${"data$i"}[5]);
  ${"kendaraan$i"}->hargaSecond();
  // }
}

for ($i = 1; $i <= 3; $i++) {
  echo "Kendaraan$i<br>"
    . ${"kendaraan$i"}->getMerk() . "<br>"
    . ${"kendaraan$i"}->getJmlRoda() . "<br>"
    . ${"kendaraan$i"}->getHarga() . "<br>"
    . ${"kendaraan$i"}->getWarna() . "<br>"
    . ${"kendaraan$i"}->getBhnBakar() . "<br>"
    . ${"kendaraan$i"}->getTahun() . "<br>"
    . ${"kendaraan$i"}->getHargaSecond() . "<br>"
    . ${"kendaraan$i"}->checkHarga() . "<br><br>";
}
