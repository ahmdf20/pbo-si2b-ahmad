<?php
class Perulangan
{
  public function loopingWhile()
  {
    $i = 1;
    while ($i < 6) {
      echo "$i <br>";
      $i++;
    }
  }

  public function loop1()
  {
    $i = 0;
    while ($i < 101) {
      echo "$i <br>";
      $i += 10;
    }
  }

  public function loop2()
  {
    $a = 1;
    while ($a < 11) {
      $b = 1;
      while ($b < 11) {
        if ($b > $a) {
          $b++;
          continue;
        }
        echo "*&nbsp";
        $b++;
      }
      $a++;
      echo "<br>";
    }
  }

  public function loop3()
  {
    $a = 1;
    while ($a < 11) {
      if ($a == 7) {
        $a++;
        continue;
      }
      echo "$a <br>";
      $a++;
    }
  }
}

$objectPerulangan = new Perulangan;
$objectPerulangan->loop2();
