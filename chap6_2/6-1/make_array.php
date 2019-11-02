<?php 
// 配列を使ってチーム分け
$team1 = ["赤井一郎", "伊藤五郎", "上野信二"];
$team2 = ["江藤幸代", "小野幸子"];

echo "team1 : ", implode(", ", $team1);
echo "<br>";
echo "team2 : ", implode(", ", $team2);
?>

<br><br>
<?php // 連想配列
$member1 = ['name' => '赤井一郎', 'age' => 29];
$member2 = ['name' => '伊藤五郎', 'age' => 32];
$member3 = ['name' => '上野信二', 'age' => 37];
$member4 = ['name' => '江藤幸代', 'age' => 26];
$member5 = ['name' => '小野幸子', 'age' => 32];

$teamA = [$member1, $member2, $member3];
$teamB = [$member4, $member5];

$flg = false;

for($i = 0; $i < count($teamA); $i++){
    if($flg === true){
        echo ", ";
    }
    $flg = true;
    echo $teamA[$i]['name'], " : " , $teamA[$i]['age'], "歳";
}
echo "<br>";
$flg = false;
for($i = 0; $i < count($teamB); $i++){
    if($flg === true){
        echo ", ";
    }
    $flg = true;
    echo $teamB[$i]['name'], " : " , $teamB[$i]['age'], "歳";
}
?>

<br><br>
<?php // インデックス配列
$teamA = $team1;

echo $teamA[0]. "さん<br>\n";
echo $teamA[1]. "さん<br>\n";
echo $teamA[2]. "さん";
?>

<br><br>
<?php // 配列の値を変更する
// change index 1
$teamA[1] = "石丸四郎";
echo $teamA[0]. "さん<br>\n";
echo $teamA[1]. "さん<br>\n";
echo $teamA[2]. "さん";
?>

<br><br>
<?php // count($array) : 配列の値の個数を取り出す

for($i = 0; $i < count($teamA); $i++){
    echo $teamA[$i]. "さん\n"; 
}
?>

<br><br>
<?php // 配列の値をリスト表示する関数を作る
$teamA = $team1;
$teamB = $team2;
// チーム名とチームメンバーを表示する関数
function dispTeam($teamName, $members){
    echo "{$teamName}\n";
    // disp ordered list
    echo "<ol>\n";
    // disp member
    for($i = 0; $i < count($members); $i++){
        echo "<li> {$members[$i]} </li>\n"; 
    }
    echo"</ol>\n";
}
?>
<!--DISPLAY HTML-->
<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>チーム分け表示</title>
</head>
<body>
<?php
dispTeam("team-A", $teamA);
dispTeam("team-B", $teamB);
?>
</body>
</html>

<br><br>
<?php // array() : 左記の表現で配列を初期化
// 色の種類を配列で初期化
$colors = array("red", "blue", "yellow");

print_r($colors);
?>

<br><br>
<?php // 配列に値を追加する
// 配列を空で初期化
$colors = [];
// 配列に値を追加
$colors[] = "red";
$colors[] = "blue";
$colors[] = "yellow";
$colors[] = "white";

print_r($colors);
?>

<br><br>
<?php // 存在しないインデックス番号を指定して値を入れた場合、連番にならず間のインデックス番号に空き番ができてしまうことがある
$colors = [];
// 配列に値を追加
$colors[0] = "red"; // index number 0
$colors[1] = "blue"; // 1
$colors[5] = "yellow";  // 5
$colors[] = "white";  // 6 インデックス番号を指定していないので、最後に値が追加される

print_r($colors); // index number is not exist 2 to 4.
?>

<br><br>
<?php // 連想配列を作る
$goods = [
    "id" => "R56",
    "size" => "M",
    "price" => 2340
];

print_r($goods);
?>

<br><br>
<?php //連想配列から値を取り出す

echo "id : ", $goods["id"], "\n";
echo "<br>";
echo "size : ", $goods["size"], "\n";
echo "<br>";
echo "price : ", $goods["price"], "yen\n";
?>

<br><br>
<?php // キーで指定した値を変更する
// change price key's value
$goods["price"] = 3500;
// display

echo "id : ", $goods["id"], "\n";
echo "<br>";
echo "size : ", $goods["size"], "\n";
echo "<br>";
echo "price : ", $goods["price"], "yen\n";
?>

<br><br>
<?php // 連想配列に要素を追加する
// make Associative Array
$user = [];
$user['name'] = "井上萌";
$user['reading'] = "いのうえもえ";
$user['age'] = 28;

print_r($user);
?>

<br><br>
<?php // 文字列から配列を作る
$data = "赤井一郎, 伊藤　純, 上野信二";
$delimiter = ", ";

$nameArray = explode($delimiter, $data);

print_r($nameArray);
?>

<br><br>
<?php // 配列から文字列に変換する
$glue = "さん、";
$nameList = implode($glue, $nameArray);
// 最後の人には「さん」がつかないので連結する
$nameList .= "さん";

echo $nameList;
?>

<br><br>
<?php // define(定数名, $array) : 配列を定数にする
$dataArray = ["松", "竹", "梅'"];
// RANK定数をつくる (定数の名前で'RANK'とつけているだけで、名前は任意))
define("RANK", $dataArray);
echo RANK[1];
?>