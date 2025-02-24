<?php

echo "Привет, мир!";

// Шаг 4: Вывод данных
echo "Hello, World with echo!<br>";
print "Hello, World with print!<br>";

// Шаг 5: Работа с переменными
$days = 288;
$message = "Все возвращаются на работу!";

// Вывод с конкатенацией
echo "Осталось " . $days . " дней. " . $message . "<br>";

// Вывод с двойными кавычками (интерполяция)
echo "Осталось $days дней. $message<br>";

// Вывод через print
print "Осталось $days дней. $message<br>";

?>
