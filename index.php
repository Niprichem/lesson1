<?php
$name = 'Валерий';
$age = 30;
$email = 'vbolshakoff@yandex.ru';
$city = 'Омск';
$about = 'Инженер, занимаюсь 3D моделированием';
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Страница пользователя <?= $name ?></h1>
<dl>
    <dt>Имя</dt>
    <dd><?= $name ?></dd>
    <dt>Возраст</dt>
    <dd><?= $age ?></dd>
    <dt>Адрес электронной почты</dt>
    <dd><a href="mailto:<?= $email ?>"><?= $email ?></a></dd>
    <dt>Город</dt>
    <dd><?= $city ?></dd>
    <dt>О себе</dt>
    <dd><?= $about ?></dd>
</dl>

<?php

$x = rand(0,100);

$value_1 = 1;
$value_2 = 1;

while (True) {

    if ($value_1 > $x) {
        echo "задуманное число НЕ входит в числовой ряд";
        break;
    }

    else {
        if ($value_1 == $x) {
            echo "задуманное число входит в числовой ряд";
            break;
        }
        else {
            $value_3 = $value_1;
            $value_1 += $value_2;
            $value_2 = $value_3;
        }
        echo $value_1.'<br>';
    }
}

?>
</body>
</html>