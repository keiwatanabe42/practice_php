<?php # 201 正規表現にマッチしないパターンを取り出す。 PREG_GREP_INVERT(逆の意味)
$data = ["R5", "E2", "E6", "A8", "R1", "G8"];
# 正規表現パターン　AまたはRを含む
$pattern = "/['A'| 'R]/";
#マッチしないパターンを取り出す。
$result = preg_grep($pattern, $data, PREG_GREP_INVERT);
#マッチしなかった件数
echo "該当". count($result). "件\n";
#結果表示
foreach($result as $value){
    echo $value, "\n";
}
?>
