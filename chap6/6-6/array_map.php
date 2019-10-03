<?php # 205 円をドルに換算 array_map($callback, $array);
# 通貨換算するコールバック関数
function exChange($value){
    global $rate;
    # レートが0の場合
    if($rate == 0){
        return;
    }
    #レート換算
    $exPrice = $value/$rate;
    #表示範囲指定(小数点第2位まで)
    $exPrice = round($exPrice*100)/100;
    return $exPrice;
}

# 日本円の配列
$priceYen = [2300, 1200, 4000];
# レート設定
$rate = 112.50;
# ドル換算結果を取得
$priceDollar = array_map("exChange", $priceYen);
# 結果表示
print_r($priceDollar);
?>