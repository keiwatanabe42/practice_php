<?php # 202 配列の値を正規表現で検索・置換する preg_replace
$data = [];
# 名前、年齢、電話番号を配列$dataに追加
$data[] = ["name" => "井上真美", "age" => 37, "phone" => "090-4321-9999"];
$data[] = ["name" => "坂田京子", "age" => 32, "phone" => "06-3434-7788"];
$data[] = ["name" => "石岡　稔", "age" => 29, "phone" => "0467-89-9191"];
$data[] = ["name" => "多田優美", "age" => 35, "phone" => "59-1212"];

#正規表現パターン 末尾が任意の4桁数値（サブパターン: -)
$pattern = "/(-)\d{4}$/";
#置換文字
$replacement = "$1****"; # $1 = '-'

# 配列から値を取り出す
foreach($data as $user){
    $result = preg_replace($pattern, $replacement, $user);
    # 結果を表示
    foreach($result as $key => $value){
        echo "{$key} : ", $value, "\n";
    }
}
?>