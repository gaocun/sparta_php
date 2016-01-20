<?php

    for($i = 1; $i <= 100; $i++)
    {
        if($i <= 1)
        {
            continue;
        }

        if($i == 2)
        {
            echo $i . '<br>';
            continue;
        }

        if($i % 2 == 0)
        {
            continue;
        }

        // 割り切れたか判定するフラグ変数
        $flg = "0";

        //$i -1の数までグルグル回す
        for ($j = 3; $j < $i; $j++)
        {
            //$i -1の数までに割れてしまったら素数ではないので次の値をチェック
            if ($i % $j == 0)
            {
                $flg = "1";
                break;
             }
        }

        // 割れなかった場合は素数なので表示
        if ($flg == "0")
        {
            echo $i . '<br>';
        }

    }

