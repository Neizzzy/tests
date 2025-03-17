<?php

$autoloadPath1 = __DIR__ . '../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';

if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use function Tests\StringUtils\capitalize;

if (capitalize('hello') !== 'Hello') {
    throw new \Exception('Функция работает неверно!');
}

if (capitalize('how are you?') !== 'How are you?') {
    throw new \Exception('Функция работает неправильно');
}

if (capitalize('') !== '') {
    throw new \Exception('Фунция работает неверно');
}

if (capitalize(null) !== null) {
    throw new \Exception('Функция работает неверно!');
}

echo 'Все тесты пройдены!';
