<?php # 198 - 199 名前の配列を検索、見つかったキーを使って年齢の配列から値を出力
# 名前の配列
$nameList = ["m01" => "田中達也", 
    "m02" => "佐々木真一", 
    "w01" => "新井貴子", 
    "w02" => "笠井　香"
];
#年齢の配列
$ageList = ["m01" => 34, 
"m02" => 42, 
"w01" => 28, 
"w02" => 41
];

# 年齢を取得する関数
function getAge($name){
    global $nameList;
    global $ageList;

    # keyが存在するか検索
    $key = array_search($name, $nameList);
    # $key が存在する場合、年齢を出力
    if($key !== false){
        $age = $ageList[$key];
        echo "{$name}さんは{$age}歳です。";
    }else{
        echo "「{$name}」はメンバーではない。";
    }
}

# execute

echo getAge("新井貴子"), "\n";
echo getAge("田中達也"), "\n";
echo getAge("林　純一"), "\n";
echo getAge("佐々木真一"), "\n";
?>