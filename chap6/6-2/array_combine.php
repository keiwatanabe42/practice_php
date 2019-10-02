<?php # 182 array_combine() で　2つの配列から連想配列を作成できる
# マラソンの距離とタイムで連想配列を作成
$point = ["10km", "20km", "30km", "40km", "goal"];
$split = ["00:50:37", "01:39:15", "02:28:25", "03:21:37", "03:34:44"];
#連想配列を作成
$result = array_combine($point, $split);

print_r($result);
?>