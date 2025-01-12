<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎</title>
</head>

<body>
    <p>
        <?php
        class Food {
            private $name;
            private $price;

            // コンストラクタ
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

            // 価格を返すメソッド
            public function getPrice() {
                return $this->price;
            }

            // 価格を出力するメソッド
            public function show_price() {
            }
        }

        class Animal {
            private $name;
            private $height;
            private $weight;

            // コンストラクタ
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // 身長を返すメソッド
            public function getHeight() {
                return $this->height;
            }

            // 身長を出力するメソッド
            public function show_height() {
            }
        }

        // Foodクラスのインスタンスを作成
        $food = new Food('potato', 250);
        print_r($food);
        echo '<br>';

        // Animalクラスのインスタンスを作成
        $animal = new Animal('dog', 60, 5000);
        print_r($animal);
        echo '<br>';

        // Foodの価格を出力
        echo $food->getPrice() . '<br>';

        // Animalの身長を出力
        echo $animal->getHeight() . '<br>';

        // show_priceメソッドを呼び出して価格を出力
        $food->show_price();

        // show_heightメソッドを呼び出して身長を出力
        $animal->show_height();
        ?>
    </p>
</body>

</html>