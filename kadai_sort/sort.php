<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
         
         <?php
            // ここにコードを書いていく
            function echo_array($array) {
                foreach ($array as $content) {
                    echo $content."<br>";
                };
            };

            function sort_2way($array,$order) {
                if ($order) {
                    echo "昇順にソートします。<br>";
                    sort($array);
                } else {
                    echo "降順にソートします。<br>";
                    rsort($array);
                };
                return $array;
            };
            $nums = [15, 4, 18, 23, 10 ];
            $nums = sort_2way($nums,TRUE);
            echo_array($nums);
            $nums = sort_2way($nums,FALSE);
            echo_array($nums);
        ?>
    </p>
</body>

</html>
