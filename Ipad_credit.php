<?php
/**
 * Created by PhpStorm.
 * User: sasha
 * Date: 16.08.16
 * Time: 12:27
 * Отже, зробивши останню виплату по кредиту, наш школяр зібрався було йти
 * додому, як раптом його погляд
 * привабила реклама нового планшета Apple New Ipad 32Gb (всього за 39999 р).
 * Оскільки грошей у нашого героя вже не було, він вирішив скористатися
 * послугою «покупка в кредит без першого внеску». Кредит пропонують 3 банки, і
 * всі на різних умовах: кредит за 4% і (дрібним шрифтом) 500 р. комісії в
 * місяць від HomoCredit кредит за 3% і 1000 р. комісії в місяць від  банку
 * Softbank, і нереально смачна пропозиція від StrawberryBank за 2% в місяць,
 * без комісії, але з платою в розмірі 7777 р.за відкриття рахунку (ця сума
 * додається до суми боргу) Завдання: визнач найбільш вигідний кредит. Платити
 * школяр, як і раніше, може не більше 5000 р. в місяць. Спочатку нараховуються
 * відсотки і комісія, а тільки потім відбувається виплата.
 */
//// Кредит виданий банком Юзеру
//$credit_balance = 39999;
////Ставка по кредиту - x %
//$percent
////Комісія банку - x руб.
//$commission
//// Юзер сплачує, щомісячно 5000 руб. в місяць
//$monthly_payment
//// Сума сплати Юзера в банк
//$sum_payment = 0;
//Сума за відкриття рахунку
//$account_opening = 7777;
function homoCredit($credit_balance, $percent, $commission, $monthly_payment, $sum_payment) {

  // Підраховуємо витрати за 20 місяців вперед
  for ($month = 1; $month <= 20; $month++) {

    //Робимо розрахунок : який залишок боргу і скільки виплатив Юзер
    $credit_balance = ($credit_balance * $percent) + $commission - $monthly_payment;
    $sum_payment = $sum_payment + $monthly_payment;
    //echo "Борг {$month} місяць : {$credit_balance} руб. Сплачено банку : {$sum_payment} руб. <br>";

    // Якщо баланс від'ємний - перериваємо цикл
    if ($credit_balance < 0) {
      $sum_payment = $sum_payment + $credit_balance;
      echo "<b>Юзер взяв кредит в банку : 'HomoCredit' . Через 13 місяців Юзер позбавиться боргу. Ipad  обійшовся в : {$sum_payment} руб.<br></b>";
      break;
    }
  }
}

echo homoCredit(39999, 1.04, 500, 5000, 0) . '<br>';

function softbank($credit_balance, $percent, $commission, $monthly_payment, $sum_payment) {

  // Підраховуємо витрати за 20 місяців вперед
  for ($month = 1; $month <= 20; $month++) {

    //Робимо розрахунок : який залишок боргу і скільки виплатив Юзер
    $credit_balance = ($credit_balance * $percent) + $commission - $monthly_payment;
    $sum_payment = $sum_payment + $monthly_payment;
    //echo "Борг {$month} місяць : {$credit_balance} руб. Сплачено банку : {$sum_payment} руб. <br>";

    // Якщо баланс від'ємний - перериваємо цикл
    if ($credit_balance < 0) {
      $sum_payment = $sum_payment + $credit_balance;
      echo "<b>Юзер взяв кредит в банку : 'Softbank' . Через 13 місяців Юзер позбавиться боргу. Ipad  обійшовся в : {$sum_payment} руб.<br></b>";
      break;
    }
  }
}

echo softbank(39999, 1.03, 1000, 5000, 0) . '<br>';

function strawberryBank($credit_balance, $percent, $monthly_payment, $sum_payment, $account_opening) {

  //Кредит з урахуванням відкриття рахунку
  $credit_balance = $credit_balance + $account_opening;

  // Підраховуємо витрати за 20 місяців вперед
  for ($month = 1; $month <= 20; $month++) {

    //Робимо розрахунок : який залишок боргу і скільки виплатив Юзер
    $credit_balance = ($credit_balance * $percent) - $monthly_payment;
    $sum_payment = $sum_payment + $monthly_payment;
    // echo "Борг {$month} місяць : {$credit_balance} руб. Сплачено банку : {$sum_payment} руб. <br>";

    // Якщо баланс від'ємний - перериваємо цикл
    if ($credit_balance < 0) {
      $sum_payment = $sum_payment + $credit_balance;
      echo "<b> Юзер взяв кредит в банку : 'StrawberryBank' . Через 12 місяців Юзер позбавиться боргу. Ipad  обійшовся в : {$sum_payment} руб.<br></b>";
      break;
    }
  }
}

echo strawberryBank(39999, 1.02, 5000, 0, 7777) . '<br>';
