<?php
/**
 * Created by PhpStorm.
 * User: sasha
 * Date: 06.08.16
 * Time: 14:32
 */
//Написати програму яка виконує порівняння  кубикив
$user1 = mt_rand(1, 2);
$user2 = mt_rand(1, 2);

$comp1 = mt_rand(1, 2);
$comp2 = mt_rand(1, 2);

$userSum = $user1 + $user2;
$compSum = $comp1 + $comp2;

echo "У ігрока випало : {$user1} і {$user2} а у комп'ютора випало : {$comp1} і {$comp2}<br>";
if (($user1 == $comp1 && $user1 == $comp2) && ($user2 == $comp1 && $user2 == $comp2)) {
  echo "Якщо у  ігрока випало : {$user1} і {$user2} і у комп'ютора випало : {$comp1} і {$comp2}. Виграла дружба<br>";
}
elseif ($userSum > $compSum) {
  echo 'Вмграв ігрок <br>';
}
elseif ($userSum == $compSum) {
  echo 'Випала однакова сума чисел потрібно кинути кубики ще раз';
}
else {
  echo "Виграв комп'ютор <br>";
}
