<?php
$sum = 0;
for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 == 0) {
        $sum += $i;
    }
}
echo "Сумма всех четных чисел в диапазоне от 1 до 50 равна: " . $sum;



