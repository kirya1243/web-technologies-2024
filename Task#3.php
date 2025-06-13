<?php
    function transliterate($text) {
        $translitMap = [
            'а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'yo','ж'=>'zh',
            'з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o',
            'п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'kh','ц'=>'ts',
            'ч'=>'ch','ш'=>'sh','щ'=>'shch','ъ'=>'','ы'=>'y','ь'=>'','э'=>'e','ю'=>'yu','я'=>'ya'
        ];

        $translitMap += array_combine(
            array_map('mb_strtoupper', array_keys($translitMap)),
            array_map('ucfirst', array_values($translitMap))
        );

        return strtr($text, $translitMap);
    }
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Транслитерация</title>
    <link rel="stylesheet" href="src/assets/styles/style.css">
</head>
<body>

    <h1>Форма транслитерации</h1>

    <form method="post">
        <label for="text">Введите текст на русском:</label><br>
        <textarea name="text" id="text"><?= htmlspecialchars($_POST['text'] ?? '') ?></textarea><br><br>
        <input type="submit" value="Транслитерировать">
    </form>

    <?php if (!empty($_POST['text'])): ?>
        <div class="result">
            <strong>Результат:</strong><br>
            <?= nl2br(htmlspecialchars(transliterate($_POST['text']))) ?>
        </div>
    <?php endif; ?>

</body>
</html>
