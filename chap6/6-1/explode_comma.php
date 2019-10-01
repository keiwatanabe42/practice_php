<?php # 173 文字列を配列にする
$data = "赤井一郎, 伊藤　淳, 上野信二";
$delimiter = ", "; # delimitter : 区切り文字の意味
$nameList = explode($delimiter, $data);
print_r($nameList);
?>