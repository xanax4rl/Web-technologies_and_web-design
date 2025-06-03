<?php
// ——— 1. Площа прямокутника ———
$length = 10;
$width  = 5;
$area   = $length * $width;
echo "Площа прямокутника ($length × $width) = $area<br>";

// ——— 2. Довжина рядка ———
$text = "Привіт, PHP!";
$chars = mb_strlen($text, 'UTF-8'); // рахуй UTF-8-символи
echo "У рядку \"$text\" символів: $chars";
?>
