<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>hW-1</title>
</head>
<body>
<p>При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.</p>
<?php
if ($_POST) {
    echo '<pre>';
    echo htmlspecialchars(print_r($_POST, true));
    echo '</pre>';
}
?>
<form action="" method="post">
    Имя:  <input type="text" name="personal[name]" /><br />
    Email: <input type="text" name="personal[email]" /><br />
    <input type="submit" value="Отправь меня!" />
</form>
</body>
</html>