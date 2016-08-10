<?php
/**
 * Created by PhpStorm.
 * User: sasha
 * Date: 08.08.16
 * Time: 7:36
 * Хтось кладе в банк 10000 р. Банк нараховує 10% річних (тобто, кожен рік на
 * рахунку стає на 10% більше, ніж в минулому році). Напиши програму, яка
 * рахує, через скільки років в банку буде мільйон? Скільки років буде цьому
 * хтось? Чи доживе хтось до цього дня, якщо сьогодні йому 16 років?
 */

//Сума вкладу user
$user_balance = 10000;
//10% що  дає банк
$interest = 0.1;
//Вік Usera
$user_age = 16;

if ($user_balance) {
  // відсотоки за перший рік
  $first_user_balance = $user_balance * $interest;
  echo "Сума вкладу : {$user_balance} руб.<br>";
  echo "Сума : {$first_user_balance} руб. виплачена за перший рік  в розмірі 10% від суми вклада.<br>";
}

//Робимо збільшення з 10000р. до 1000000р.
for ($end_user_balance = $user_balance; $end_user_balance < 1000000; $end_user_balance *= 1.10) {
  //  nop
}

if ($end_user_balance) {
  //Формула n = log(FVn/PVn)/log(1+r) - через скільки років Юзер отримає 1000000 руб.
  $sum_years = log($end_user_balance / $user_balance) / log(1 + $interest);
  //Вік Юзера, коли він отримає 1000000 руб.
  $age = $user_age + $sum_years;
  echo " Сума : {$end_user_balance} руб. виплачена за : {$sum_years} років <br>";
  echo "Отже, якщо зараз Useru : {$user_age} років, то мільйон він отримає в : {$user_age} років + {$sum_years} років = {$age} років. ";
}
