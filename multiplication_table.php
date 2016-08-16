<?php
/**
 * Created by PhpStorm.
 * User: sasha
 * Date: 16.08.16
 * Time: 11:14
 * Створити таблицю множення від 1 до 10
 */
//Функція table з параметрами : $column - колонка, $line - рядок, $color - колір
function table($column, $line, $color = 'red') {

  //Виводимо таблицю з border - товщина рамки в пікселях
  echo "<table border='1' >";

  //Збільшуємо початок колонки - $start_column
  for ($start_column = 1; $start_column <= $line; $start_column++) {

    //Створюємо таблицю
    echo "<tr>";

    //Збільшуємо початок рядка - $start_line
    for ($start_line = 1; $start_line <= $column; $start_line++) {
      if ($start_column == 1 || $start_line == 1) {

        //Заливаєм рядок і колонку
        echo "<th style='background:$color'>" . $start_column * $start_line . "</th>";
      }
      else {
        echo "<td>" . $start_column * $start_line . "</td>";
      }
    }
  }
  //echo "</table>";
}

//Формат таблиці x * x
echo table(10, 10);
