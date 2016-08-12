<?php
/**
 * Created by PhpStorm.
 * User: sasha
 * Date: 11.08.16
 * Time: 16:18
 * Напиши генератор випадкового імені для кішки
 */

//Склади з яких формується ім'я
$letters = array(
  'ко',
  'и',
  'дзу',
  'ми',
  'са',
  'ку',
  'ра',
  'да',
  'чи',
  'а',
  'ки',
  'ми',
  'на',
  'го',
  'ха',
  'ру',
);
//Випадкове значення
$random = array_rand($letters, 4);

//В цю зміну записуємо отриманене ім'я
$name = "{$letters[$random[0]]}{$letters[$random[1]]}{$letters[$random[2]]}{$letters[$random[3]]}";

echo "Вибери ім'я : {$name} ";
