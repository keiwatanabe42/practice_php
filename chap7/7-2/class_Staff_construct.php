<?php
class Staff{
    // instance property
    public $name;
    public $age;

    // constructor
    function __construct($name, $age){
        $this -> name = $name;
        $this -> age = $age;
    }

    public function hello(){
        if(is_null($this -> name)){
            echo "こんにちは\n";
        }else{
            echo "こんにちは、{$this -> name}です！\n";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>コンストラクタのあるクラスを利用する</title>
</head>
<body>
<pre>
<?php
// make Staff class instance
$nameHana = new Staff("花", 21);
$nameTaro = new Staff("太郎", 35);

// execute method
$nameHana -> hello();
$nameTaro -> hello();
?>
</pre>
</body>
</html>