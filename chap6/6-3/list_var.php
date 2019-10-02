<?php # 189 配列を変数に展開 list();
$data = ["a987", "鈴木薫", "23"];

# list()の引数に指定した変数に配列の各値を格納
list($id, $name, $age) = $data;

echo "会員ID：", $id, "\n";
echo "お名前：", $name, "\n";
echo "年齢：", $age, "\n";
?>