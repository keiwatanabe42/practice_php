<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "utf-8">
    <title>割引ページフォーム</title>
    <link href = "../../css/style.css" rel = "stylesheet">
</head>
<body>
<div>
<?php
// 割引率
$discount = 0.8;
$perDiscount = (1- $discount) * 100;

if($perDiscount > 0){
    echo "<h2>このページでの購入は{$perDiscount}％OFFになります！</h2>";
}

// 単価の設定
$unitCost = 2900;
$unitCost_fmt = number_format($unitCost);
?>

<?php
// 戻るフォームから戻った時の個数チェック
require_once("../8-2/util.php");

// 文字エンコードチェック
if(!cken($_POST)){
    $encoding = mb_intenal_encoding($_POST["number"]);
    $err = "Encoding Error! The expected encoding is ". $encoding;
    exit($err);
}

// XSS対策
$_POST = es($_POST);

// 入力チェック
if(isset($_POST["number"])){
    $number = $_POST["number"];
}else{
    $number = "";
}
?>

<!-- 入力フォームの設定 -->
<form method = "POST" action = "discount.php">
    <!-- 隠しフィールドに隠しフォームの内容記述 -->
    <input type = "hidden" name = "discount" value = "<?php echo $discount; ?>">
    <input type = "hidden" name = "unitCost" value = "<?php echo $unitCost; ?>">
    <ul>
        <li><label>単価；<?php echo $unitCost_fmt;?> 円</label></li>
        <li><label>個数：<input type = "number" name = "number" value = <?php echo $number ?>></label></li>
        <li><input type = "submit" value = "計算する"></li>
    </ul>
</form>
</div>
</body>
</html>