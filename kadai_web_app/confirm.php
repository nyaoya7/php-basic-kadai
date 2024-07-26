<?php

// セッションを開始
session_start();

// POSTリクエストから入力データを取得
$e_name = $_POST['employee_name'];
$e_age = $_POST['employee_age'];
$depart = $_POST['department'];

 // エラーメッセージを格納する配列
 $errors = []; // 最初はエラーなし

 // お名前のバリデーション
 if (empty($e_name) ) {
     $errors[] = 'お名前を入力してください。';
 }

 // 年齢のバリデーション
 if (empty($e_age) ) {
     $errors[] = '年齢を入力してください。';
 } elseif (!filter_var( $e_age, FILTER_VALIDATE_INT ) ) {
     $errors[] = '年齢が正しくありません。';
 }

  // 入力項目に問題なければセッション・クッキーを保存
  if (empty($errors)) {
    // セッション変数を保存
    $_SESSION['name'] = $e_name;
    $_SESSION['age'] = $e_age;
    $_SESSION['dept'] = $depart;

    // クッキーを登録（有効期限は1時間）
    setcookie('name', $e_name, time() + 3600 );
    setcookie('email', $e_age, time() + 3600 );
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編 Web App 課題 確認画面</title>
</head>

<body>
    <h2>入力内容をご確認ください。</h2>
    <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>

    <table border="1">
        <tr>
            <th>項目</th>
            <th>入力内容</th>
        </tr>
        <tr>
            <td>社員名</td>
            <td><?php echo $e_name; ?></td>
        </tr>
        <tr>
            <td>年齢</td>
            <td><?php echo $e_age; ?></td>
        </tr>
        <tr>
            <td>所属部署</td>
            <td><?php echo $depart; ?></td>
        </tr>
    </table>

    <p>
        <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
        <button id="cancel-btn" onclick="history.back();">キャンセル</button>
    </p>

    <?php
     // 入力項目にエラーがある場合の処理
     if (!empty($errors)) {
         // 配列内のエラーメッセージを順番に出力
         foreach ($errors as $error) {
             echo '<font color="red">' . $error . '</font>' . '<br>';
         }
 
         // 確定ボタンを無効化するJavaScriptコードをブラウザ側に送信
         echo '<script> document.getElementById("confirm-btn").disabled = true; </script>';
     }
     ?>
</body>

</html>
