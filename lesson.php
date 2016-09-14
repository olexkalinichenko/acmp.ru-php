<?php

//створюємо клас Car
class Car {
  //властивості класа
  public $brand;
  public $color;
  public $speed;
  public $fuel;

  //метод класа
  public function fuel($distance) {
    $distance = ($distance * $this->fuel) / 100;
    return $distance;
  }

  //конструктор класа
  public function __construct($brand, $color, $speed, $fuel, $distance) {
    echo "<b>Бренд авто : </b>" . $this->brand = $brand . "<br>";
    echo "<b>Колір авто : </b>" . $this->color = $color . "<br>";
    echo "<b>Швидкість авто : </b>" . $this->speed = $speed . "км/год <br>";
    echo "<b>Витрата пального на 100км. : </b>" . $this->fuel = $fuel . "л.<br>";
    echo "<b>Витрата пального на {$distance}км. : </b>" . $this->fuel($distance) . "л.<br>";
  }

}

//об'єкт audi класа Car
$audi = new Car('Audi', 'green', 240, 12, 5, 10);

echo '<br>';
//об'єкт bmw класа Car
$bmw = new Car('BMW', 'red', 280, 14, 835);

echo '<br>';
//об'єкт mitsubishi класа Car
$mitsubishi = new Car('Mitsubishi', 'беж', 220, 8.3, 250);
