<?php # p133 文字列同士の比較
function holiday($youbi){
    if(($youbi == "土曜日") || ($youbi == "日曜日")){
        echo $youbi, "はお休みです。\n";
    } else {
        echo $youbi, "はお休みではありません。\n";
    }
}

# execute
holiday("金曜日");
holiday("土曜日");
holiday("日曜日");