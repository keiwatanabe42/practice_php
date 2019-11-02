<?php // 条件式 ? TRUE : FALSE
$a = mt_rand(0, 50); // mt_rand() 乱数生成関数
$b = mt_rand(0, 50);

$bigger = ($a > $b) ? $a : $b;

echo "大きな値は{$bigger}、\$aは{$a}、\$bは{$b}";
?>

<br>
<?php // 上記の式をif文で書いた場合

if($a > $b){
    $bigger = $a;
}else{
    $bigger = $b;
}

echo "大きな値は{$bigger}、\$aは{$a}、\$bは{$b}";
?>