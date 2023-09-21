<?php
class Perulangan
{
  public function setPyramidPlayButton($start, $end)
  {
    for ($baris = $start; $baris < $end; $baris++) {
      for ($kolom = $start; $kolom < $baris; $kolom++) {
        echo "*&nbsp";
      }
      echo "<br>";
    }
    for ($baris = $end - 1; $baris > $start; $baris--) {
      for ($kolom = $baris; $kolom > $start; $kolom--) {
        echo "*&nbsp";
      }
      echo "<br>";
    }
  }

  public function setPyramid($start, $end)
  {
  }
  // public function setPyramidDecrement($start, $end)
  // {
  //   for ($baris = $start - 1; $baris > $end; $baris--) {
  //     for ($kolom = $baris; $kolom > $end; $kolom--) {
  //       echo "*&nbsp";
  //     }
  //     echo "<br>";
  //   }
  // }
}

$objectPyramid = new Perulangan;
echo "Perulangan Pertama:<br>";
$objectPyramid->setPyramidPlayButton(0, 6);
// $objectPyramid->setPyramidDecrement(6, 0);
echo "<br><br>";
