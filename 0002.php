<?php
/**
 * Created by PhpStorm.
 * User: sasha
 * Date: 11.05.16
 * Time: 16:28
 * (Время: 1 сек. Память: 16 Мб Сложность: 19%)
 * Требуется посчитать сумму целых чисел от 1 до N.
 * Входные данные
 * В единственной строке входного файла INPUT.TXT записано единственное целое
 * число N, не превышающее по абсолютной величине 104. Выходные данные В
 * единственную строку выходного файла OUTPUT.TXT нужно вывести одно целое
 * число — сумму чисел от 1 до N.
 */
$input = 5;
$output = 0;
for ($n = 1; $n <= $input; $n++) {
  $output = $output + $n;
}
echo $output;
