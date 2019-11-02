<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "utf-8">
    <title>割引購入ページ</title>
    <link href = "../../css/style.css" rel = "stylesheet">
</head>
<body>
<div>
    <?php
    // 入力した個数の値を保持する
    require_once("../8-2/util.php");

    // 文字エンコードチェック
    if(!cken($_POST)){
        $encoding = mb_internal_encoding();
        $err = "Encoding Error! The expected encoding is". $encoding;
        exit($err);
    }

    // XSS対策
    $_POST = es($_POST);

    // 個数チェック
    if(isset($_POST["number"])){
        $number = $_POST["number"];
    }else{
        $number = "";
    }
    ?>

    <!--割引率と商品単価をPOSTしなくて済むように、クーポンコードと商品IDを使用する -->
    <?php
    require_once("saleData.php");
    $couponCode = "ha45as";
    $priceId = "ax102";

    $discount = getCouponRate($couponCode);
    $unitCost = getPrice($priceId);
    // 割引率と単価に値があるかチェック
    if(is_null($discount) || is_null($unitCost)){
        $err = '<div class = "error"> 不正な操作がありました。</div>';
        exit($err);
    }
    ?>

    <?php
    $discount = (1 - 0.8) * 100;
    $unitCost_fmt = number_format($unitCost);
    ?>
    
    <?php if($discount > 0): ?>
        <h2>このページでのご購入は<?php echo $discount ?>％OFFになります！</h2>
    <?php endif; ?>
    <form method = "POST" action = "discount.php">
        <input type = "hidden" name = "couponCode" value = "<?php echo $couponCode; ?>">
        <input type = "hidden" name = "priceId" value = "<?php echo $priceId; ?>">
        
        <ul>
            <li><label>単価：<?php echo $unitCost_fmt; ?>円</label></li>
            <li><label>個数：<input type = "number" name = "number" value = "<?php echo $number; ?>"></label></li>
            <li><input type = "submit" value = "計算する"></li>
        </ul>
    </form>

</div>
</body>
</html>