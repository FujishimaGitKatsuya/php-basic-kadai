<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>課題016</title>
</head>

<body>
  <p>
    <?php
      // 食品のクラスを定義する
      class Food {
        // プロパティを定義する
        private $name;
        private $price;  
        
        // コンストラクタを定義する
        public function __construct(string $name, int $price) {
          $this->name = $name;
          $this->price = $price;
        }

        // メソッドを定義する
        
        public function show_name() {
          echo $this->name;
        }

        public function show_price() {
          echo $this->price;
        }   
      }

        // 食品クラスのインスタンスを作成し、メソッドを呼び出す
        $potato = new Food('potato', 250);
        
        
        

        // インスタンスの各プロパティの値を出力する
       
        print_r($potato);
        echo '<br>';

        // 動物クラスを定義する
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
            public function set_name(string $name) {
                $this->name = $name;
            }

            public function show_height() {
                echo $this->height . '<br>';
            }
           
        }

        // 動物クラスのインスタンスを作成し、メソッドを呼び出す
        $dog = new Animal('dog', 60, 5000); 
               

        // インスタンスの各プロパティの値を出力する
            print_r($dog);          
            echo '<br>';       
       
        $potato->show_price();
        echo '<br>'; 
        $dog->show_height();

    //$potato = new Food('potato', 250);
    //$dog = new Animal('dog', 60, 5000);

   ?>
</p>
</body>
</html>
 
