<?php
class Guru
{
  var $nama_nama = ["de", "ce", "ve", "re"];
  var $nama_guru;
  var $nik;
  var $jabatan;
  var $alamat;
}

class Murid
{
  var $nama_siswa;
  var $nis;
  var $kelas;
  var $alamat;
}

class Buku
{
  public $penerbit;
  public $tahun_terbit;
  public $judul_buku;
  public $penulis;
  public function __construct($penerbit, $tahun_terbit, $judul_buku, $penulis)
  {
    $this->penerbit = $penerbit;
    $this->tahun_terbit = $tahun_terbit;
    $this->judul_buku = $judul_buku;
    $this->penerbit = $penerbit;
  }
}

class Kurikulum
{
  var $tahun_akademik;
  var $sks_matkul;
}

class Mobil
{
  var $jumlah_roda = 4;
  var $warna = "merah";
  var $bahan_bakar = "Pertamax";
  var $harga = 120000000;
  var $merek = 'A';

  public function statusHarga()
  {
    $status = $this->harga > 50000000 ? "Mahal" : "Murah";
    return $status;
  }
}

$objekBMW = new Mobil;
$objekTesla = new Mobil;
$objekAudi = new  Mobil;

$bukubaru = new Buku('Gramedia', 2017, 'Bersikap Bodo Amat', 'Ahmad');
var_dump($bukubaru);

// var_dump($objekBMW);
