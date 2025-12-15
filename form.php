<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>お問い合わせフォーム</h1>
    <form action="conform.php" method="post" class="form-container">
        <label for="name">名前：</label>
        <input type="text" id="name" name="name" required><br>

        <label for="age">年齢：</label>
        <input type="number" id="age" name="age" required><br>

        <label for="phone">電話番号：</label>
        <input type="text" id="phone" name="phone" required><br>

        <label for="email">メールアドレス：</label>
        <input type="email" id="email" name="email" required><br>

        <label for="address">住所：</label>
        <input type="text" id="address" name="address" required><br>

        <label for="question">質問：</label>
        <textarea id="question" name="question" rows="4" cols="40" required></textarea><br>

        <label for="gender">性別：</label>
        <select id="gender" name="gender" required>
            <option value="">選択してください</option>
            <option value="男性">男性</option>
            <option value="女性">女性</option>
            <option value="その他">その他</option>
        </select><br>

        <button type="submit" class="submit-button">送信</button>
    </form>
</body>
</html>
