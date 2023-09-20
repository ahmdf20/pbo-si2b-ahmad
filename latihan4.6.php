<?php

class Mahasiswa
{
  var $nama;
  var $kelas;
  var $mata_kuliah;
  var $nilai;

  public function setNama($x)
  {
    $this->nama = $x;
  }

  public function getNama()
  {
    return $this->nama;
  }

  public function setKelas($x)
  {
    $this->kelas = $x;
  }

  public function getKelas()
  {
    return $this->kelas;
  }

  public function setMataKuliah($x)
  {
    $this->mata_kuliah = $x;
  }

  public function getMataKuliah()
  {
    return $this->mata_kuliah;
  }

  public function setNilai($x)
  {
    $this->nilai = $x;
  }

  public function getNilai()
  {
    return $this->nilai;
  }

  public function getKeterangan()
  {
    $ket = $this->nilai > 70 ? "Lulus Kuis" : "Tidak Lulus Kuis";
    return $ket;
  }
}

$data1 = ['Aditya', 'SI 2', 'Pemrograman Beriorentasi Objek', 80];
$data2 = ['Shinta', 'SI 2', 'Pemrograman Beriorentasi Objek', 75];
$data3 = ['Ineru', 'SI 2', 'Pemrograman Beriorentasi Objek', 55];

for ($i = 1; $i <= 3; $i++) {
  ${"mahasiswa$i"} = new Mahasiswa;
  ${"mahasiswa$i"}->setNama(${"data$i"}[0]);
  ${"mahasiswa$i"}->setKelas(${"data$i"}[1]);
  ${"mahasiswa$i"}->setMataKuliah(${"data$i"}[2]);
  ${"mahasiswa$i"}->setNilai(${"data$i"}[3]);
}

for ($i = 1; $i <= 3; $i++) {
  echo "Mahasiswa $i<br>"
    . "Nama : " . ${"mahasiswa$i"}->getNama() . "<br>"
    . "Kelas : " . ${"mahasiswa$i"}->getKelas() . "<br>"
    . "Mata Kuliah : " . ${"mahasiswa$i"}->getMataKuliah() . "<br>"
    . "Nilai : " . ${"mahasiswa$i"}->getNilai() . "<br>"
    . "Keterangan : " . ${"mahasiswa$i"}->getKeterangan() . "<br><br>";
}
