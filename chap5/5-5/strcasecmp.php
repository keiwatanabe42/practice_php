<?php # p137 strcasecmp() 
$id1 = "AB12R";
$id2 = "ab12r";

# 大文字小文字区別なく比較
$result = strcasecmp($id1, $id2);
echo "{$id1}と{$id2}を比較した結果、";
if($result == 0){
    echo "一致しました。";
}else{
    echo "一致しませんでした。";
}
?>