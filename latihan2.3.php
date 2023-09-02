<?php

class Calc
{

  public $bil1;
  public $bil2;
  public $ops;

  public function __construct($inputBil1, $inputBil2, $Ops)
  {
    $this->bil1 = $inputBil1;
    $this->bil2 = $inputBil2;
    $this->ops = $Ops;
  }

  public function calcMethod()
  {
    switch ($this->ops) {
      case 'tambah':
        $result = $this->bil1 + $this->bil2;
        break;
      case 'kurang':
        $result = $this->bil1 - $this->bil2;
        break;
      case 'kali':
        $result = $this->bil1 * $this->bil2;
        break;
      case 'bagi':
        $result = $this->bil1 / $this->bil2;
        break;
      case 'modulus':
        $result = $this->bil1 % $this->bil2;
        break;
      case 'pangkat':
        $result = $this->bil1 ** $this->bil2;
        break;

      default:
        $result = "Error";
        break;
    }
    return $result;
  }
}

$bil1 = $_POST['inputBil1'];
$bil2 = $_POST['inputBil2'];
$ops = $_POST['Ops'];
$calculator = new Calc($bil1, $bil2, $ops);
echo $calculator->calcMethod();
