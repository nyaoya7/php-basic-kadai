 <!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編 課題016</title>
 </head>
 
 <body>
    <p>
        <?php
        // Foodクラスを定義する
        class Food {
            // プロパティを定義する                        
            private $name;
            private $price;

            // コンストラクタを定義する
            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }

            // メソッドを定義する
            public function show_price() {
                echo $this->price . '<br>';
            }
        }

        // Animalクラスを定義する
        class Animal {
            // プロパティを定義する
            private $name;
            private $height;
            private $weight;

            // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // メソッドを定義する
            public function show_height() {
                echo $this->height . '<br>';
            }
        }

        // Footオブジェクトをインスタンス化する
        $potato = new Food('potato', 250);
        // Foodオブジェクトの内容を出力する
        print_r($potato);
        echo '<br>';

        // Animalオブジェクトをインスタンス化する
        $dog = new Animal('dog', 60, 5000);
        // Animalオブジェクトの内容を出力する
        print_r($dog);
        echo '<br>';

        // Foodクラスのメソッド呼び出し
        $potato->show_price();
        // Animalクラスのメソッド呼び出し
        $dog->show_height();
       
        ?>
    </p>
 </body>
 
 </html>