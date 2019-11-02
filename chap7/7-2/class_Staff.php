<?php
// Create Staff class
class Staff{
    // インスタンスプロパティ
    public $name;
    public $age;

    // インスタンスメソッド
    public function hello(){
        if(is_null($this->name)){
            echo "Hello!\n";
        }else{
            echo "Hello! I'm {$this->name} !", "\n";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>クラスを定義</title>
</head>
<body>
<pre>
<?php // Staffクラスのインスタンスを作る
$nameHana = new Staff();
$nameTaro = new Staff();
$noName = new Staff();
// プロパティの値を設定
$nameHana -> name = "花";
$nameHana -> age = 21;
$nameTaro -> name = "太郎";
$nameTaro -> age = 35;
$noName -> name = "test";
$noName -> age = 11;
// check instance
print_r($nameHana);
print_r($nameTaro);
print_r($noName);

// execute method
$nameHana -> hello();
$nameTaro -> hello();
$noName   -> hello();
?>
</pre>
</body>
</html>