<?php # 171 連想配列の値をそれぞれ出力する
$goods = [
    "id" => "R56",
    "size" => "M",
    "price" => 2340
];

echo "id:". $goods['id']. "\n";
echo "size:". $goods['size']. "\n";
echo "price:". number_format($goods['price']). "円\n";
?>