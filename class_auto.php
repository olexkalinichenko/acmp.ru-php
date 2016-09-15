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
//створюємо клас авто
class Auto {
  //властивості класа
  public $brand;
  public $color;
  public $speed;
  public $fuel;
  public $distance = 100;

  /**
   * @return mixed
   */
  public function getDistance() {
    return $this->distance;
  }

  /**
   * @param mixed $distance
   */
  public function setDistance($distance) {
    $this->distance = $distance;
  }

  //метод розрахунку витрати пального
  public function fuelConsumption($distance = NULL) {
    if (!isset($distance)) {
      $distance = $this->getDistance();
    }
    $fuel = ($distance * $this->fuel) / 100;
    return $fuel;
  }

  //конструктор класа
  public function __construct($brand, $color, $speed, $fuel) {
    $this->brand = $brand;
    $this->color = $color;
    $this->speed = $speed;
    $this->fuel = $fuel;
  }

  //метод вивода текста
  public function __toString() {
    $output = "<b>Бренд авто : </b> {$this->brand} <br>";
    $output .= "<b>Колір авто : </b>  {$this->color} <br>";
    $output .= "<b>Швидкість авто : </b>{$this->speed}км/год <br>";
    $output .= "<b>Витрата пального на 100км. : </b>{$this->fuel}л.<br>";
    $output .= "<b>Витрата пального на : {$this->getDistance()}км.</b> = {$this->fuelConsumption()}л. <br>";

    return $output;
  }
}

//об'єкт audi класа Auto
$audi = new Auto('Audi', 'green', 240, 12);
$audi->setDistance(120);
print $audi;

echo '<br>';

//об'єкт bmw класа Auto
$bmw = new Auto('BMW', 'red', 280, 14);
$bmw->setDistance(120);
print $bmw;

echo '<br>';

//об'єкт mitsubishi класа Auto
$mitsubishi = new Auto('Mitsubishi', 'беж', 220, 8.3);
$mitsubishi->setDistance(120);
print $mitsubishi;
