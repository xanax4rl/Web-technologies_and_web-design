<?php
/*************************************************************
 * Лабораторна №6 · База даних BookStore
 * — Пошук книг за назвою
 * — Оновлення даних книги за id
 *************************************************************/
$host = 'localhost';
$user = 'root';         // за замовчуванням у XAMPP без пароля
$pass = '';
$db   = 'BookStore';

$mysqli = new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_errno) {
    die("Помилка підключення: " . $mysqli->connect_error);
}

/********************** 1. Пошук за назвою **********************/
$searchResults = [];
if (!empty($_GET['q'])) {
    $q = '%' . $mysqli->real_escape_string($_GET['q']) . '%';
    $stmt = $mysqli->prepare("SELECT * FROM Books WHERE title LIKE ?");
    $stmt->bind_param('s', $q);
    $stmt->execute();
    $searchResults = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
}

/******************* 2. Оновлення книги за id *******************/
$msg = null;
if (!empty($_POST['id'])) {
    $id  = (int)$_POST['id'];
    $ttl = $_POST['title'];
    $aut = $_POST['author'];
    $prc = (float)$_POST['price'];
    $yr  = (int)$_POST['year'];

    $stmt = $mysqli->prepare("UPDATE Books SET title=?, author=?, price=?, publication_year=? WHERE id=?");
    $stmt->bind_param('ssdii', $ttl, $aut, $prc, $yr, $id);
    if ($stmt->execute()) {
        $msg = 'Книгу успішно оновлено ✅';
    } else {
        $msg = 'Помилка оновлення ❌';
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Лабораторна 6 – BookStore</title>
    <style>
        body{font-family:Arial, sans-serif;margin:2rem}
        fieldset{margin-bottom:2rem;padding:1rem 1.5rem;max-width:600px}
        table{border-collapse:collapse;width:100%;margin-top:1rem}
        th,td{border:1px solid #ccc;padding:6px;text-align:left}
        th{background:#f2f2f2}
        .msg{font-weight:bold;margin:0.5rem 0;color:#0a0}
    </style>
</head>
<body>
<h2>Пошук книг за назвою</h2>
<fieldset>
    <form method="get">
        <label>Назва:
            <input type="text" name="q" value="<?= htmlspecialchars($_GET['q'] ?? '') ?>" required>
        </label>
        <button type="submit">Знайти</button>
    </form>

<?php if ($searchResults): ?>
    <table>
        <tr><th>ID</th><th>Назва</th><th>Автор</th><th>Ціна (₴)</th><th>Рік</th></tr>
        <?php foreach ($searchResults as $row): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['title']) ?></td>
            <td><?= htmlspecialchars($row['author']) ?></td>
            <td><?= number_format($row['price'], 2) ?></td>
            <td><?= $row['publication_year'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
<?php elseif (isset($_GET['q'])): ?>
    <p>Нічого не знайдено.</p>
<?php endif; ?>
</fieldset>

<h2>Оновлення даних книги за ID</h2>
<fieldset>
    <?php if ($msg): ?><p class="msg"><?= $msg ?></p><?php endif; ?>
    <form method="post">
        <label>ID книги:
            <input type="number" name="id" required>
        </label><br><br>
        <label>Назва:
            <input type="text" name="title" required>
        </label><br><br>
        <label>Автор:
            <input type="text" name="author" required>
        </label><br><br>
        <label>Ціна (₴):
            <input type="number" step="0.01" name="price" required>
        </label><br><br>
        <label>Рік видання:
            <input type="number" name="year" required>
        </label><br><br>
        <button type="submit">Оновити книгу</button>
    </form>
</fieldset>
</body>
</html>