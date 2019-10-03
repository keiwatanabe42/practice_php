<?php # 204 円をユーザ定義のドル換算 array_walk(&$array, $callback $userData);
# 通貨換算してリスト表示するコールバック関数
function exchangeList($value, $key, $rateData){
    #レート換算
    $rate  = $rateData["rate"];
    if($rate == 0){
        return;
    }
    #レート換算金額
    $price = $value/$rate;
    # 表示範囲指定
    $exPrice = sprintf('%.2f', $price);
    # 通貨シンボルを付けたリスト形式で表示
    echo "<li>", $rateData["symbol"], $exPrice, "</li>\n";
}

# 円での値段
$priceListYen = [2300, 1200, 4000];
# 円/ドルのレート（1ドルあたりの円）
$dollarYen = ["symbol" => '$', "rate" => 112.50];

# 通貨換算してリスト表示
echo "<ul>\n";
array_walk($priceListYen, "exchangeList", $dollarYen);
echo "</ul>";
?>