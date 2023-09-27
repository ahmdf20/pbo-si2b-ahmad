<?php

class Temperatures
{
  public $x, $from, $to;

  public function __construct($x, $from, $to)
  {
    $this->x = floatval($x);
    $this->from = $from;
    $this->to = $to;
  }

  public function convert()
  {
    switch ($this->from) {
      case 'c':
        if ($this->to == 'k') $hasil = $this->x + 273.15;
        if ($this->to == 'f') $hasil = ($this->x * 9 / 5) + 32;
        if ($this->to == 'r') $hasil = $this->x * 0.8;
        if ($this->to == 'c') $hasil = $this->x;
        break;

      case 'f':
        if ($this->to == 'k') $hasil = (($this->x - 32) * 5 / 9) + 273.15;
        if ($this->to == 'f') $hasil = $this->x;
        if ($this->to == 'r') $hasil = ($this->x - 32) * 4 / 9;
        if ($this->to == 'c') $hasil =  ($this->x - 32) * 5 / 9;
        break;

      case 'k':
        if ($this->to == 'k') $hasil = $this->x;
        if ($this->to == 'f') $hasil = (($this->x - 273.15) * 9 / 5) + 32;
        if ($this->to == 'r') $hasil = ($this->x - 273.15) * 0.8;
        if ($this->to == 'c') $hasil = $this->x - 273.15;
        break;

      case 'r':
        if ($this->to == 'k') $hasil =  ($this->x * 1.25) + 273.15;
        if ($this->to == 'f') $hasil = ($this->x * 2.25) + 32;
        if ($this->to == 'r') $hasil = $this->x;
        if ($this->to == 'c') $hasil = $this->x * 1.25;
        break;
    }
    return $hasil;
  }
}

if (isset($_POST['tnumber'])) {
  $suhu = $_POST['tnumber'];
  $from = $_POST['temperatures'];
  $to = $_POST['to_temperature'];
  $convertTemperature = new Temperatures($suhu, $from, $to);
  $result = $convertTemperature->convert();
  echo "$result °$to";
}
