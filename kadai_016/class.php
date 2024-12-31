<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>16章課題</title>
</head>
<body>
    <p>
        <?php
        class Food {
            private $name;
            private $price;
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
            public function show_price() {
                echo $this->price . "<br>";
            }
        }
        class Animal {
            private $name;
            private $height;
            public function __construct(string $name, int $height) {
                $this->name = $name;
                $this->height = $height;
            }
            public function show_height() {
                echo $this->height . "<br>";
            }
        }

        $hamberger = new Food("ハンバーガー",600);
        print_r($hamberger);
        echo "<br>";
        $elephant = new Animal("ゾウ",180);
        print_r($elephant);
        echo "<br>";
        $hamberger->show_price();
        $elephant->show_height();
        ?>
    </p>
</body>
</html>