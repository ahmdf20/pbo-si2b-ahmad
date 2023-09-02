<?php

class Accountant
{
  var $besarPinjaman;
  var $bunga = 0.1;
  var $totalBunga;
  var $totalPinjaman;
  var $lamaAngsuran;
  var $besarAngsuran;
  public function pinjamanOnline($besarPinjaman, $lamaAngsuran)
  {
    $this->besarPinjaman = $besarPinjaman;
    $this->lamaAngsuran = $lamaAngsuran;
    $this->totalBunga = $this->bunga * $this->besarPinjaman;
    $this->totalPinjaman = $this->besarPinjaman + $this->totalBunga;
    $this->besarAngsuran = $this->totalPinjaman / $lamaAngsuran;
  }
}

$pinjamanPertama = new Accountant;
$pinjamanPertama->pinjamanOnline(1000000, 5);
$html = "<h1>Besar Pinjaman = Rp. " . number_format($pinjamanPertama->besarPinjaman, 0, ',', '.') . "</h1>";
$html .= "<h1>Besar Bunga = Rp. " . number_format($pinjamanPertama->totalBunga, 0, ',', '.') . "</h1>";
$html .= "<h1>Total Pinjaman = Rp. " . number_format($pinjamanPertama->totalPinjaman, 0, ',', '.') . "</h1>";
$html .= "<h1>Lama Angsuran = $pinjamanPertama->lamaAngsuran bulan";
$html .= "<h1>Besar Angsuran = Rp. " . number_format($pinjamanPertama->besarAngsuran, 0, ',', '.') . "</h1>";
$header = "<h1>Latihan 3.3</h1>";
$header .= "<h1>Toko Pegadaian Syariah</h1>";
$header .= "<h1>Jl. Keadilan No 16</h1>";
$header .= "<h1>Telp. 72353459</h1>";

echo $header;
echo $html;
