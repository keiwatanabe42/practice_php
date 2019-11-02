<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "utf-8">
    <title>割引計算</title>
    <link href = "../../css/style.css" rel = "stylesheet">
</head>
<body>
<div>
<?php
// es(), cken()をinclude
require_once("../8-2/util.php");
?>

<?php
$errList = [];

// check encode
if(!cken($_POST)){
    $encoding = mb_intenal_encoding();
    $errMsg = "encoding Error! The expected encoding is ". $encoding;
    exit($errMsg);
}
?>

<?php
// XSS対策
$_POST = es($_POST);
?>

<?php
// 入力チェック
// 割引率
if(isset($_POST["discount"])){
    $discount = $_POST["discount"];
    // 数値かどうかチェック
    if(!is_numeric($discount)){
        $errList[] = "割引率の数値エラー";
    }
}else{
    $errList[] = "割引率の未設定";
}

// 単価
if(isset($_POST['unitCost'])){
    $unitCost = $_POST['unitCost'];
    // 数値かどうかチェック
    if(!ctype_digit($unitCost)){
        $errList[] = "単価の数値エラー";
    }
}else{
    $errList[] = "単価の未設定";
}

// 個数
if(isset($_POST["number"])){
    $number = $_POST["number"];
    // 数値チェック
    if(!ctype_digit($number)){
        $errList[] = "個数は正の整数を入力してください。";
    }
}else{
    $errList[] = "個数の未設定";
}
?>

<?php
if(count($errList) > 0){
    // エラーあり
    echo '<ol name = "error">';
    foreach($errList as $value){
        echo "<li>", $value, "</li>";
    }
}else{
    // エラーなし
    $sumPrice = $unitCost * $number;
    $discountPrice = floor($sumPrice * $discount);
    $priceDown = $sumPrice - $discountPrice;
    $priceOff = (1 - $discount) * 100;

    $unitCost = number_format($unitCost);
    $discountPrice = number_format($discountPrice);
    $priceDown = number_format($priceDown);

    echo "単価：{$unitCost}円、{$number}個";
    echo "<br>";
    echo "金額；{$discountPrice}円";
    echo "<br>";
    echo "(割引：-{$priceDown}円、{$priceOff}% OFF)";
}
?>

<!-- 戻るフォーム-->
<form method = "POST" action = "discountForm.php">
    <input type = "hidden" name = "number" value = "<?php echo $number ?>">
    <ul>
        <li><input type = "submit" value = "戻る"></li>
    </ul>
</form>

</div>
</body>
</html>