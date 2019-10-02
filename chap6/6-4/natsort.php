<?php # 194 自然順（文字・数値が混じってる値が順番になっていること）にソートする
$data = ["image7", "image12", "image1"];

# 自然順にソートする
natsort($data);

print_r($data);
?>