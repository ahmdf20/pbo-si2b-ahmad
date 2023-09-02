<?php

class Shapes
{
  protected $length;
  protected $width;
  protected $r;
  protected $type;
  public function __construct()
  {
    $this->length = 0;
    $this->width = 0;
    $this->r = 0;
    $this->type = "";
  }

  public function circle($type, $diagonal)
  {
    $this->type = $type;
    $this->r = intval($diagonal / 2);
    if ($type == "area") {
      $result = floatval(pi() * pow($this->r, 2));
    } else {
      $result = floatval(2 * pi() * $this->r);
    }
    return $result;
  }

  public function rectangle($type, $length, $width)
  {
    $this->type = $type;
    $this->length = $length;
    $this->width = $width;
    if ($type == "area") {
      $result = intval($this->length * $this->width);
    } else {
      $result = intval((2 * $this->length) + (2 * $this->width));
    }
    return $result;
  }

  public function square($type, $length)
  {
    $this->type = $type;
    $this->length = $length;
    if ($type == "area") {
      $result = intval($this->length * $this->length);
    } else {
      $result = intval(4 * $this->length);
    }
    return $result;
  }
}

$operation = new Shapes;
echo "Luas Lingkaran = " .  $operation->circle("area", 12) . "<br>";
echo "Keliling Lingkaran = " .  $operation->circle("Circumference", 12) . "<br>";

echo "Luas Persegi Panjang = " .  $operation->rectangle("area", 12, 10) . "<br>";
echo "Keliling Persegi Panjang = " .  $operation->rectangle("Circumference", 12, 10) . "<br>";

echo "Luas Persegi = " .  $operation->square("area", 6) . "<br>";
echo "Keliling Persegi = " .  $operation->square("Circumference", 6) . "<br>";
