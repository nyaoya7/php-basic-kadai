<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編 ソート課題</title>
</head>

<body>
    <p>
        <?php
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        // ソート関数を昇順で呼び出し
        $nums = sort_2way ($nums, TRUE);
        foreach ($nums as $value) {
            echo $value.'<br>';
        }

        $nums = sort_2way ($nums, FALSE);

        foreach ($nums as $value) {
            echo $value.'<br>';
        }

        // ソート関数の定義
        function sort_2way ($num_arg, $order) {
            if ($order == TRUE) {
                sort($num_arg);
                echo '昇順にソートします。<br>';
            } else {
                rsort($num_arg);
                echo '降順にソートします。<br>';
            }
            return $num_arg;
        }



        ?>
    </p>
</body>

</html>
