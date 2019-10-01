<?php # 172 連想配列の値を変更
$goods = [
    "id" => "R56",
    "size" => "M",
    "price" => 2340
];

# update price
$goods['price'] = 3500;

echo "id:". $goods['id']. "\n";
echo "size:". $goods['size']. "\n";
echo "price:". number_format($goods['price']). "yen\n";
?>
