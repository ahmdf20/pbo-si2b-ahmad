<?php

class Car
{
  protected $wheel;
  protected $colors;
  protected $fuel;
  protected $cost;
  protected $brand;
  public function __construct()
  {
    $this->wheel = 4;
    $this->colors = "Red";
    $this->fuel = "Pertamax";
    $this->cost = 120000;
    $this->brand = "Mercy";
  }

  public function status($cost)
  {
    $this->cost = $cost;
    $status = $this->cost > 500000 ? "Mahal" : "Murah";
    return $status;
  }
}

$mercy = new Car;
echo "Status Harga : " . $mercy->status(5000000);
