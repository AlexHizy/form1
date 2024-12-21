<?php

// запросы ФИО через STDIN
echo "Введите фамилию: ";
$surname = trim(fgets(STDIN));

echo "Введите имя: ";
$firstName = trim(fgets(STDIN));

echo "Введите отчество: ";
$patronymic = trim(fgets(STDIN));

// Заглавные буквы в каждом имени
$fullName = mb_convert_case($surname, MB_CASE_TITLE) . ' ' . mb_convert_case($firstName, MB_CASE_TITLE) . ' ' . mb_convert_case($patronymic, MB_CASE_TITLE);

// Инициалы
$surnameAndInitials = mb_convert_case($surname, MB_CASE_TITLE) . ' ' . mb_convert_case(mb_substr($firstName, 0, 1), MB_CASE_TITLE) . '.' . mb_convert_case(mb_substr($patronymic, 0, 1), MB_CASE_TITLE) . '.';

// Аббривиатура
$fio = mb_convert_case(mb_substr($surname, 0, 1), MB_CASE_UPPER) . mb_convert_case(mb_substr($firstName, 0, 1), MB_CASE_UPPER) . mb_convert_case(mb_substr($patronymic, 0, 1), MB_CASE_UPPER);

// Результаты
echo "Полное имя: '$fullName'\n";
echo "Фамилия и инициалы: '$surnameAndInitials'\n";
echo "Аббревиатура: '$fio'\n";