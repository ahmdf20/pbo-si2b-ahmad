<?php
class Siswa
{
  public $tingkat_pendidikan;
  public $sekolah;
  public $alamat;
  public $no_telp;
  public function __construct($tingkat_pendidikan, $sekolah, $alamat, $no_telp)
  {
    $this->tingkat_pendidikan = $tingkat_pendidikan;
    $this->sekolah = $sekolah;
    $this->alamat = $alamat;
    $this->no_telp = $no_telp;
  }
}

$anaksmp = new Siswa('Sekolah Menengah Pertama', 'SMPN 4 Subang', 'Subang JL Palabuan', 1826391726);

$html = "<h1>Tingkat Pendidikan : $anaksmp->tingkat_pendidikan</h1><br>";
$html .= "<h1>Nama Sekolah : $anaksmp->sekolah</h1><br>";
$html .= "<h1>Alamat Sekolah : $anaksmp->alamat</h1><br>";
$html .= "<h1>No Telp Sekolah : $anaksmp->no_telp</h1><br>";

echo $html;
