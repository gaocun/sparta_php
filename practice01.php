<?php


// var_dump($_POST);
$name = $_POST['name'];
$impression = $_POST['impression'];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>フォームの練習</title>
</head>
<body>
  <p>投稿された内容はこちら</p>
  <p>名前: <?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?></p>
  <p>名前: <?php echo htmlspecialchars($impression, ENT_QUOTES, "UTF-8"); ?></p>

</body>
</html>
