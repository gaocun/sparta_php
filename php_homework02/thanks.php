<?php

var_dump($flg);

var_dump($mail);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>送信完了</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <div class="wrap">
        <h1>お問い合わせ頂きありがとうございます</h1>
        <p>以下の内容で送信されました</p>
        <table>
            <tr>
                <th>名前：</th>
                <td><?php echo h($name);?></td>
            </tr>
            <tr>
                <th>mail：</th>
                <td><?php echo h($mail);?></td>
            </tr>
            <tr>
                <th>内容：</th>
                <td><?php echo h($content);?></td>
            </tr>
        </table>
        <div class="tac mt30">
            <a href="index.php">戻る</a>
        </div>
    </div>
</body>
</html>