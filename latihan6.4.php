<?php
class Perulangan
{
  public function loop()
  {
    $data = ['Subang', 'Bandung', 'Jakarta', 'Surabaya', 'Yogyakarta'];
    foreach ($data as $kota) {
      echo $kota . "<br>";
    }
  }
}

$objectPerulangan = new Perulangan;
echo "Nama-nama kota di pulau Jawa: <br>";
$objectPerulangan->loop();
