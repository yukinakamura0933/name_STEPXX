<?php
function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

$errors = [];

if (!preg_match("/^[ぁ-んァ-ヶ一-龥a-zA-Z0-9ー\s]+$/u", $_POST['name'])) {
    $errors[] = "名前はひらがな、カタカナ、漢字、英数のみ使用できます。";
}

if (!is_numeric($_POST['age']) || $_POST['age'] < 0 || $_POST['age'] > 150) {
    $errors[] = "年齢は0から150の間で入力してください。";
}

if (!preg_match("/^[0-9\-]+$/", $_POST['phone'])) {
    $errors[] = "電話番号は半角数字とハイフンのみ使用できます。";
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = "メールアドレスの形式が正しくありません。";
}

if (!preg_match("/^[ぁ-んァ-ヶ一-龥a-zA-Z0-9ー\s]+$/u", $_POST['address'])) {
    $errors[] = "住所はひらがな、カタカナ、漢字、英字のみ使用できます。";
}

if (count($errors) > 0) {
    foreach ($errors as $error) {
        echo "<p style='color:red;'>" . h($error) . "</p>";
    }
    echo "<p><a href='form.php'>戻る</a></p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>確認画面</title>
</head>
<body>
    <h1>入力内容の確認</h1>
    <p>名前：<?= h($_POST['name']) ?></p>
    <p>年齢：<?= h($_POST['age']) ?></p>
    <p>電話番号：<?= h($_POST['phone']) ?></p>
    <p>メールアドレス：<?= h($_POST['email']) ?></p>
    <p>住所：<?= h($_POST['address']) ?></p>
    <p>質問：<?= nl2br(h($_POST['question'])) ?></p>
    <p>性別：<?= h($_POST['gender']) ?></p>
</body>
</html>
