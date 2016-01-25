<?php

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $content = $_POST['content'];
        $error = array();

        if(empty($name)){
            $error['name'] = 'お名前をご記入下さい';
        }

        if(empty($mail)){
            $error['mail'] = 'メールアドレスをご記入下さい';
        }

        if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
            $error['mail'] = '正しい形式でご記入下さい';
        }

        if(empty($content)){
            $error['content'] = 'お問い合わせ内容をご記入下さい';
        }

        if(empty($error)){
            mb_language("ja");
            mb_internal_encoding("UTF-8");

            $to = "ichitakamura@hotmail.com";
            $title = "お問い合わせ";
            $naiyou = $content;
            $from = "$mail";
            $flg = mb_send_mail($to, $title, $naiyou, $from);

            if($flg){
                require 'thanks.php';
                exit;
            }

            exit("問い合わせに失敗");
        }

    }

    function h($str){
        return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
    }

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" type="text/css" href="./css/main.css">
</head>
<body>
    <div class="wrap">
        <h1>お問い合わせ</h1>
        <p>各項目を入力して下さい</p>
        <form action="" method="post">
            <table class="input_form">
                <tr>
                    <th>名前：</th>
                    <td>
                        <input type="text" name="name" value="">
                        <?php
                                if(isset($error['name'])){
                                    echo '<p class="errormsg_color">' . h($error['name']) . '</p>';
                            }
                         ?>
                    </td>
                </tr>
                <tr>
                    <th>mail：</th>
                    <td>
                        <input type="text" name="mail" value="">
                        <?php
                                if(isset($error['mail'])){
                                    echo '<p class="errormsg_color">' . h($error['mail']) . '</p>';
                            }
                         ?>
                    </td>
                </tr>
                <tr>
                    <th>内容：</th>
                    <td>
                        <textarea class="" name="content" rows="10" cols="40" value=""></textarea>
                        <?php
                                if(isset($error['content'])){
                                    echo '<p class="errormsg_color">' . h($error['content']) . '</p>';
                            }
                         ?>
                    </td>
                </tr>
            </table>
            <div class="tac mt30">
                <input type="reset" name="submit" value="入力内容クリア">
                <input type="submit" name="submit" value="送信">
            </div>
        </form>
    </div>
</body>
</html>