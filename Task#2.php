<?php 
    $regions = [
        "Московская область" => ["Москва", "Зеленоград", "Клин"],
        "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
        "Рязанская область" => ["Рязань", "Касимов", "Скопин"],
        "Краснодарский край" => ["Краснодар", "Сочи", "Анапа", "Новороссийск"]
    ];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 2</title>
    <link rel="stylesheet" href="src/assets/styles/style.css">
</head>
<body>
    <h1>Список городов по областям</h1>
    <div class="output">
        <?php
            foreach ($regions as $region => $cities) {
                echo "<p><span class='highlight'>$region:</span><br>" . implode(", ", $cities) . ".</p>";
            }
        ?>
    </div>
</body>
</html>
