<?php // 変数の値渡しの場合
// 引数の値に１プラスする
function oneUP($value){
    $value++;
}

$num = 5;
oneUp($value);
echo $num;
?>

<br>
<?php // 変数の参照渡しの場合
// 引数の値に１プラスして返す関数
function oneUp2(&$value){
    $value++;
    return $value;
}

$num = 5;
oneUp2($num);
echo $num;
?>

<br><br>
<?php // 引数を指定しない関数
// 任意の引数の値の合計と平均、最後の値を表示する
function myFunc(){
    $arrayNum = func_get_args();
    $sum = 0;
    // 引数として渡された値を合計する
    /*
    for($i = 0; $i < func_num_args(); $i++){
        $sum += $arrayNum[$i];
    }
    */
    $sum = array_sum($arrayNum);

    // 引数がある場合平均値を求める
    if(func_num_args() > 0){
        $avg = $sum / func_num_args();
        $lastValue = func_get_arg(func_num_args() - 1);
    }else{
        $avg = $lastValue = " (データ無し) ";
    }


    echo "合計点　", $sum, "\n";
    echo "<br>";
    echo "平均点　", $avg, "\n";
    echo "<br>";
    echo "最後の点数　", $lastValue, "\n";
}

myFunc(43, 67, 55, 75);
echo "<br>";
myFunc();
?>

<br><br>
<?php // 可変変数
$color = "red";
$$color = 125; // $red = 125;
echo $red;
?>

<br><br>
<?php //可変変数を使って計算式の変数を入れ替え
$unitPrice = 230;
$quantity = 5;
// 変数名を変数に格納
$tanka = "unitPrice";
$kosu = "quantity";

// 可変変数を割り当て
$price = $$tanka * $$kosu;

echo $price, "円";
?>

<br><br>
<?php // 可変関数
// 引数で人名を受け取って挨拶を出力する函数
function hello($who){
    echo "{$who} さん、こんにちは";
}
// さようならの場合
function bye($who){
    echo "{$who} さん、さようなら";
}

$hello = "hello";
// 上記変数の文字列の関数名が存在する場合、関数を実行
if(function_exists($hello)){
    $hello("watanabe");
}
echo "<br>";
$bye = "bye";
if(function_exists($bye)){
    $bye("watanabe");
}
?>

<br><br>
<?php // 無名関数　ラムダ式あるいはラムダ関数やクロージャと呼ぶ
// 引数で人名を受け取って挨拶する無名関数
$myFunc = function($who){
    echo "{$who} さん、こんにちは";
};

$myFunc("watanabe");
?>

<br><br>
<?php // useを使って無名関数に使う変数に値を設定する
$msg = "Thank you";

// 無名関数
$myFunc2 = function($who) use($msg){
    echo "{$who} さん、", $msg;
};

$myFunc2("watanabe");
?>