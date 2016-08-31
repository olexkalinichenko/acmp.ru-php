<?php
/**
 * Created by PhpStorm.
 * User: sasha
 * Date: 29.08.16
 * Time: 19:02
 * Вивести рядок з власним ім'ям українською мовою, а наступний рядок в
 * транслітерації.
 */

echo "Олександр<br>";
echo "Sasha<br>";

/**
 * Створити 4 змінні наступних типів: integer, float, boolean і string.
 * Вивисти в браузер значення всіх змінних.
 */

$integer = 123;
$float = 12.45;
$boolean = TRUE;
$string = 'Sasha';

echo $integer;
echo '<br>';
echo $float;
echo '<br>';
echo $boolean;
echo '<br>';
echo $string;
echo '<br>';

/**
 * 1) Створити дві змінні, одна з яких буде жорсткою силкою на іншу.
 * 2) Змінити значення однієї змінної і перевірити значення обох змінних.
 * 3) Створити ще одну змінну в якій буде зберігатись ім'я іншої змінної(одна з
 * тих, що була створена в першому пункті).
 * 4) Використовуючи символічну силку,
 * вивести значення змінної, чиє ім'я зберігається в змінній, створеній в
 * третьому пункті.
 */

// жорстка силка
$integer1 = 25;
$integer2 = &$integer1;

echo $integer1;
echo '<br>';
echo $integer2;
echo '<br>';

// символічна силка
$int = 90;
$str = "int";

echo $$str;
echo '<br>';

/**
 * 1) Створити константу g = 9.8
 * 2) Вивести значення константи.
 * 3) Спробувати переоприділити константу і подивитись, що вийде.
 * 4) Перевірити константу на існування.
 */

// Створюємо константу використовуючи : define
define("G", 9.8);
echo G;
echo '<br>';

// Пробуємо переоприділити константу
define(G, 2.2);
echo G;
echo '<br>';

// Перевіряємо чи існує костанта використовуючи : defined
echo defined("G");
echo '<br>';

/**
 * 1) Обчислити вираз : 5+12*100-12+1500.7/(1.1*5).
 * 2) Замінити всі числа у виразі на окремі змінні. Якщо число повторюється
 * декілька разів, то нову змінну створювати не потрібно.
 * 3) Обчислити вираз, використовуючи замість чисел змінні. І зрівняти
 * результат з першим пунктом. Результат має співпадати.
 * 4) Створити змінну з значенням 0.
 * 5) Збільшити дану змінну на 5 три рази (без 5*3).
 * 6) Зменшити дану змінну на 1 два рази.
 * 7) Поділити дану змінну на 3 чьотири рази.
 * 8) Вивести результат.
 */

//Обчислюємо вираз
echo 5 + 12 * 100 - 12 + 1500.7 / (1.1 * 5);
echo '<br>';

$five = 5;
$twelve = 12;
$hundred = 100;
$one_thousand = 1500.7;
$one_to_one = 1.1;

//Обчислюємо вираз як назви змінних
$result = $five + $twelve * $hundred - $twelve + $one_thousand / ($one_to_one * $five);
echo $result;
echo '<br>';

// Збільшуємо 0 на 5 три рази
$false = 0;
$false += 5;
$false *= 3;
echo $false;
echo '<br>';

// Зменшуємо $false  на 1 двічі
$false--;
$false--;
echo $false;
echo '<br>';

// Ділемо $false на 3 чотири рази
$false /= 3;
$false /= 3;
$false /= 3;
$false /= 3;
echo $false;
echo '<br>';

/**
 * 1) Вивести рядок з наступними символами: подвійні кавички, зворотній слеш,
 * одинарна кавичка. Має вийти рядок з трьома символами.
 * 2) Створити 3 рядка з довільним текстом.
 * 3) З'єднати 3 рядки.
 * 4) Додати до отриманих рядків ще один довільний рядок (без створення нової
 * змінної).
 * 5) Вивести і подивитись результат.
 */

// Виводимо символи: "" \ ''
echo "\" \" \\' '";
echo '<br>';

// Три довільних рядка
$name = "Sasha";
$age = 33;
$city = "Kiev";

// З'єднання рядків
echo $name . $age . $city;
echo '<br>';

// Додаємо ще один рядок і виводимо
echo "Мене звати {$name} мені {$age}р. проживаю в місті {$city}.";
echo '<br>';

/**
 * 1) Обчислити результат такого виразу в сумі:
 * ("" == 0) == (FALSE && TRUE || (TRUE === 1)).
 * 2) Обчислити результат в PHP і порівняти з тим, що вирахували самі усно.
 */

$expression = ("" == 0) == (FALSE && TRUE || (TRUE === 1));
echo "Має бути порожнє значення, тому, що змінна 'expression' дорівнює нулю.";
echo '<br>';
echo "(\"\" == 0) == (FALSE && TRUE || (TRUE === 1)) = {$expression}";
echo '<br>';

/**
 * 1) Створити змінну з значенням від 1-го до 5-ти.
 * 2) Створити 5 виразів (без використання else) перевіряющих на рівність
 * змінної від 1-го до 5-ти, якщо отриманий вираз буде істинний, тоді вивести
 * число у вигляді слова: "два" або "п'ять".
 */

$variable = 4;

//Перевіряємо на рівність від 1-го до 5-ти
if ($variable == 1) {
  echo "Один";
}
if ($variable == 2) {
  echo "Два";
}
if ($variable == 3) {
  echo "Три";
}
if ($variable == 4) {
  echo "Чотири";
}
if ($variable == 5) {
  echo "П'ять";
}
echo '<br>';

/**
 * 1) Обчислити суму всіх чисел від 1-го до 100. Тобто: 1+2+3...+99+100
 * використовуючи всі три типа циклів.
 * 2) Вивести результат після кожного цикла. Переконатись, що всі результати
 * співпадають.
 */

//Використовуємо цикл for
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
  $sum = $sum + $i;
}
echo $sum;
echo '<br>';

//Використовуємо цикл while
$x = 0;
$sum1 = 0;
while ($x < 100) {
  $x++;
  $sum1 = $sum1 + $x;
}
echo $sum1;
echo '<br>';

//Використовуємо цикл do while
$a = 1;
$sum2 = 0;

do {
  $sum2 = $sum2 + $a;
} while ($a++ < 100);
echo $sum2;
echo '<br>';

/**
 * 1) Створити дві змінні з одним із двох значень: 0 або 1.
 * 2) Створити третю змінну, в яку записати суму змінних, створених в
 * попередньому пункті.
 * 3) Використовуючи орератор switch-case, вивести в мовній формі отриману суму
 * (наприклад, "нуль"). Якщо значення невідоме (біль 2-х), тоді вивести рядок
 * "Помилка".
 * 4) Створити змінну з рядковим значенням з наступного списку:
 * "один","два","три".
 * 5) Використовуючи оператор switch-case, створити змінну, в яку помістити
 * числове значення, відповідне рядку з попереднього пункта. Наприклад, якщо був
 * рядок "три", то в змінну необхідно записати 3. Якщо рядок невідомий
 * (наприклад, "нуль"), то в змінну записати false.
 */

//Створюємо дві змінні
$null = 0;
$one = 1;

//Обчислюємо суму
$total = $null + $one;

switch ($total) {
  case 0:
    echo '$total = 0';
    break;
  case 1:
    echo '$total = 1';
    break;
  default:
    echo 'Невідоме число';
}

echo '<br>';

//Створюємо строкову змінну
$str = 'один';

switch ($str) {
  case 'один':
    echo 1;
    break;
  case 'два':
    echo 2;
    break;
  case 'три':
    echo 3;
    break;
  default:
    echo 'Невідоме число';
}