<?php # 191 配列のコピーを作成して、そちらを昇順にソートする。
$data = [23, 16, 8, 42, 15, 4];
# 配列のコピーを作成する。　★PHPでは変数に代入するだけで複製できる
$clone = $data;
# 昇順にソートする
sort($clone);

echo "元：";
print_r($data);
echo "複製：";
print_r($clone);
?>