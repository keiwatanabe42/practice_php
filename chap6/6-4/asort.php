<?php # 192 asort()、arsort()で連想配列のキーと値の関係性を壊さずソートできる
$data = ["S" => 23, "M" => 36, "L" => 29];
$clone = $data;

# 昇順にソートする
# sort()とasort()の結果比較１
sort($data);
asort($clone);

print_r($data);
print_r($clone);
?>
