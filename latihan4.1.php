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

  public function setHarga($x)
  {
    $this->harga = $x;
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

$htmlKendaraan1 = "
Merk Kendaraan : $kendaraan1->merk
<br>
Jumlah Roda : $kendaraan1->jmlroda
<br>
Harga Kendaraan : $kendaraan1->harga
<br>
Warna Kendaraan : $kendaraan1->warna
<br>
Bahan Bakar Kendaraan : $kendaraan1->bhnbakar
<br>
Tahun Kendaraan : $kendaraan1->tahun
<br>
<br>
";

$htmlKendaraan2 = "
Merk Kendaraan : $kendaraan2->merk
<br>
Jumlah Roda : $kendaraan2->jmlroda
<br>
Harga Kendaraan : $kendaraan2->harga
<br>
Warna Kendaraan : $kendaraan2->warna
<br>
Bahan Bakar Kendaraan : $kendaraan2->bhnbakar
<br>
Tahun Kendaraan : $kendaraan2->tahun
<br>
<br>
";

$htmlKendaraan3 = "
Merk Kendaraan : $kendaraan3->merk
<br>
Jumlah Roda : $kendaraan3->jmlroda
<br>
Harga Kendaraan : $kendaraan3->harga
<br>
Warna Kendaraan : $kendaraan3->warna
<br>
Bahan Bakar Kendaraan : $kendaraan3->bhnbakar
<br>
Tahun Kendaraan : $kendaraan3->tahun
<br>
<br>
";

echo $htmlKendaraan1;
echo $htmlKendaraan2;
echo $htmlKendaraan3;
