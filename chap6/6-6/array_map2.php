<?php # 206 2つの配列を合わせてリスト表示する array_map($callback, $array1,$array2...) 
# マラソンの通貨ポイント毎の時間を表示
function listUp($point, $split){
    # 通過地点とそのタイムのリスト表示
    echo "<li>", $point, " -- ", $split, "</li>\n";
}

#通過地点
$point = ["10km", "20km", "30km", "40km", "goal"];
# タイム
$split = ["00:50:37", "01:39:15", "02:28:25", "03:21:37", "03:34:44"];
# リスト表示
echo "<ul>\n";
array_map("listUp", $point, $split);
echo"</ul>";