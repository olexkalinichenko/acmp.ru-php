<?php
/**
 * Created by PhpStorm.
 * User: sasha
 * Date: 10.08.16
 * Time: 19:07
 * Хтось зареєструвався у соціальній мережі, і там його фото поставили оцінки.
 * Треба знайти і вивести середній бал.
 */

//Оцінки поставлені за фото Юзера
$rating = array(3, 5, 3, 2, 1, 8, 4, 3, 4, 3, 2, 3);

//Сума всіх ойінок
$sum_rates = array_sum($rating);
echo "Сума оцінок : {$sum_rates}<br>";

//Кількість оцінок
$number_of_ratings = count($rating);
echo "Кільаість оцінок : $number_of_ratings <br>";

//Середній бал
$average_rating = $sum_rates / $number_of_ratings;
echo "Середній бал : " . round($average_rating);
