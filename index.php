<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $title = $_POST['title'];
        $impression = $_POST['impression'];
        $name = $_POST['name'];
    }


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>映画の感想</title>
</head>
<body>
    <h1>映画の感想</h1>
        <form action="" method="post">
            タイトル: <input type="text" name="title">
            感想: <input type="text" name="impression">
            名前: <input type="text" name="name">
            <input type="submit" value="感想を投稿">
        </form>
</body>
</html>










