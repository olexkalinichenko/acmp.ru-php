<?php
/**
 * Created by PhpStorm.
 * User: sasha
 * Date: 14.09.16
 * Time: 10:21
 * Створити клас авто. Використовуючи конструктор вивести такі значення :
 * марка, колір, швидкість, витрата пального.
 * Зробити розрахунок витрати пального на N км.
 */
//створюємо клас Car
class Car {
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
$audi = new Car('Audi', 'green', 240, 12, 245);

echo '<br>';
//об'єкт bmw класа Car
$bmw = new Car('BMW', 'red', 280, 14, 123);

echo '<br>';
//об'єкт mitsubishi класа Car
$mitsubishi = new Car('Mitsubishi', 'беж', 220, 8.3, 275);
