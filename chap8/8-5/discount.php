<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "utf-8">
    <title>金額の計算</title>
    <link href = "../../css/style.css" rel = "stylesheet">
</head>
<body>
<div>

<?php
require_once("../8-2/util.php");
?>

<?php

// エンコードチェック
if(!cken($_POST)){
    $encoding = mb_intenal_encoding();
    $err = "Encoding Error! The expected encoding is". $encoding;
    exit($err);
}

// XSS対策
$_POST = es($_POST);
?>

<?php
$errList = [];

// 割引率のチェック
if(isset($_POST["couponCode"])){
    $couponCode = $_POST["couponCode"];
}else{
    $couponCode = ""; 
}

// 単価チェック
if(isset($_POST["priceId"])){
    $priceId = $_POST["priceId"];
}else{
    $priceId = "";
}
?>

<?php
// クーポンコード、IDから、値が存在するかチェックして取得
require_once("saleData.php");
$discount = getCouponRate($couponCode);
$unitCost = getPrice($priceId);

if(is_null($discount) || is_null($unitCost)){
    $err = "不正な操作がありました。";
    exit($err);
}
?>

<?php
// 個数チェック
if(isset($_POST["number"])){
    $number = $_POST["number"];
    if(!ctype_digit($number)){
        $errList[] = "個数は整数で入力してください。";
    }
}else{
    $errList[] = "個数の未設定";
}
?>

<?php
if(count($errList) > 0){
    echo '<ol class = "error"';
    foreach($errList as $value){
        echo "<li>{$value}</li>";
    }
    echo "</ol>";

}else{
    // 合計金額の計算
    $sumPrice = $unitCost * $number;
    // floor() 小数点以下切り捨て
    $discountPrice = floor($sumPrice * $discount);
    $discountRate = (1 - $discount) * 100;
    $diffPrice = $sumPrice - $discountPrice;
    
    $unitCost_fmt = number_format($unitCost);
    $discountPrice_fmt = number_format($discountPrice);
    $diffPrice_fmt = number_format($diffPrice);
    
    echo "単価；{$unitCost_fmt}円、{$number}個<br>";
    echo "金額：{$discountPrice_fmt}円<br>";
    echo "(割引：{$diffPrice_fmt}円、{$discountRate}％OFF)";

}

?>

<!--戻るボタンフォーム-->
<form method = "POST" action = "discountForm.php">
    <input type = "hidden" name = "number" value = "<?php echo $number; ?>">
    <ul>
        <li><input type = "submit" value = "戻る"></li>
    </ul>
</form>

</div>
</body>
</html>