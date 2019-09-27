<?php # p213 変数{文字インデックス} で一文字ずつ取り出すことができる。
$id = "Peace";
$length = strlen($id);

for($i = 0; $i < $length; $i++){
    $chr = $id{$i};
    echo "{$i}-", $chr, "\n";
}
?>