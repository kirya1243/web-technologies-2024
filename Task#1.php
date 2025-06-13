        <?php
        function printNumbers() {
            $i = 0;
            do {
                if ($i === 0) {
                    echo "<p><span class='highlight'>$i</span> – это ноль.</p>";
                } elseif ($i % 2 === 0) {
                    echo "<p><span class='highlight'>$i</span> – чётное число.</p>";
                } else {
                    echo "<p><span class='highlight'>$i</span> – нечётное число.</p>";
                }
                $i++;
            } while ($i <= 10);
        }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 1</title>
    <link rel="stylesheet" href="src/assets/styles/style.css">
</head>
<body>
    <h1>Задание: Чётные и нечётные числа от 0 до 10</h1>
    <div class="output">
        <?= printNumbers(); ?>
    </div>
</body>
</html>
