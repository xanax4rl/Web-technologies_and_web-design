<?php
/*****************************************************************
 * Лабораторна №5 · Варіант 2
 * 1. Довжина імені (метод GET)
 * 2. Перевірка пароля (метод POST)
 *****************************************************************/
// ——— Обробка форми «Ім'я» (GET) ———
$nameLength = null;
if (isset($_GET['username'])) {
    $name = trim($_GET['username']);
    $nameLength = mb_strlen($name, 'UTF-8');
}

// ——— Обробка форми «Пароль» (POST) ———
$pwdResult = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['password'])) {
    $password = $_POST['password'];
    $isValid  = strlen($password) >= 8 && preg_match('/\d/', $password);
    $pwdResult = $isValid ? 'Пароль валідний ✅' : 'Пароль не відповідає вимогам ❌';
}
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Лабораторна 5 – Форми та валідація</title>
    <style>
        body{font-family:Arial, sans-serif;margin:2rem}
        form{margin-bottom:1.5rem;padding:1rem;border:1px solid #ccc;max-width:400px}
        label{display:block;margin-bottom:0.5rem}
        input[type=text],input[type=password]{width:100%;padding:0.4rem;margin-bottom:0.8rem}
        .result{font-weight:bold;margin-top:0.5rem}
    </style>
</head>
<body>
    <h2>Задача 1. Визначення довжини імені (GET)</h2>
    <form method="get">
        <label>Введіть ім'я:
            <input type="text" name="username" required>
        </label>
        <button type="submit">Надіслати</button>
    </form>
    <?php if ($nameLength !== null): ?>
        <p class="result">Довжина імені "<?= htmlspecialchars($name) ?>": <strong><?= $nameLength ?></strong> символів</p>
    <?php endif; ?>

    <h2>Задача 2. Валідація пароля (POST)</h2>
    <form method="post">
        <label>Введіть пароль:
            <input type="password" name="password" required>
        </label>
        <button type="submit">Перевірити</button>
    </form>
    <?php if ($pwdResult !== null): ?>
        <p class="result"><?= $pwdResult ?></p>
    <?php endif; ?>
</body>
</html>