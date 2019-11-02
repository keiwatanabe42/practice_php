// 配列の値を自然順に並べる
<br>
<?php // in_array($value, $array) : $valueが配列内に存在するかチェックし、結果をboolで返す。
// 受験番号と合格番号から合格番号を自然順に並べる
$examinationArray = [1008, 1234, 1301];
$passArray = [1301, 1206, 1008, 1214];

// 合格かチェックする関数
function checkPass($examinationNo){
    global $passArray;
    if(in_array($examinationNo, $passArray)){
        echo "{$examinationNo}番は合格です。\n";
    }else{
        echo "{$examinationNo}番は見つかりませんでした。\n";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>配列を検索して合格者表示</title>
</head>
<body>
<?php
echo "<ol>\n";
foreach($examinationArray as $examinationNo){
    echo "<li>\n", checkPass($examinationNo), "</li>\n";
}
echo "</ol>\n";
?>
</body>
</html>

<br><br>
// 文字列の配列を検索（完全一致検索）
<br>
<?php
$nameArray = ["田中達也", "Sam Jones", "新井貴子"];
// 名前をチェックする関数
function checkName($name){
    global $nameArray;
    if(in_array($name, $nameArray)){
        echo "member\n";
    }else{
        echo "not member\n";
    }
}

// execute
checkName("田中達也");
echo "<br>";
checkName("新井");
echo "<br>";
checkName("Sam Jones");
echo "<br>";
checkName("SAM JONES");
?>

<br><br>
// 配列に新規の値のみ追加する
<br>
<?php
// 配列に存在しない値の場合、配列に値を新規追加する関数
$colorArray = ["blue", "green"];
function addUnique(&$colorArray, $value){
    if(!in_array($value, $colorArray)){
        $colorArray[] = $value;
    }
}

// execute
addUnique($colorArray, "white");
addUnique($colorArray, "blue");
addUnique($colorArray, "red");
addUnique($colorArray, "green");

print_r($colorArray);
?>

<br><br>
// 連想配列で値が見つかった位置とキーを返す
<br>
<?php // array_search($value, $associativeArray) : 値が見つかった場合、キーを返す(複数の場合は一番最初に見つかった値のキー)。ない場合はfalse
// name list
$nameAssociativeArray = ["m01" => "田中達也", "m02" => "佐々木真一", "w01" => "新井貴子", "w02" => "笠井　香"];
// age list
$ageAssociativeArray = ["m01" => 34, "m02" => 42, "w01" => 28, "w02" => 41];
// 配列の値を検索して見つかったメンバーの年齢を表示する関数
function getAge($name){
    global $nameAssociativeArray;
    global $ageAssociativeArray;

    $key = array_search($name, $nameAssociativeArray);
    if($key === false){
        echo "{$name}さんはメンバーではない\n";
    }else{
        echo "{$name}さんは{$ageAssociativeArray[$key]}歳です。";
    }
}

// execute
getAge("新井貴子");
echo "<br>\n";
getAge("田中達也");
echo "<br>\n";
getAge("林　純一");
echo "<br>\n";
getAge("佐々木真一");
?>

<br><br>
// 配列同士を比較して一致しない値を取り出す
<br>
<?php // array_diff($arrayA, $arrayB, ...) : 全配列を比較してどの配列にも含まれない値を取り出す関数
$checkIDArray = ["a21", "d21", "d33", "e53"];
$arrayA = ["a12", "b15", "d21"];
$arrayB = ["d13", "e53", "f10", "k12"];

$diffID = array_diff($checkIDArray, $arrayA, $arrayB);
$flg = false;
// 結果表示
foreach($diffID as $id){
    if($flg){
        echo "<br>";
    }
    $flg = true;
    echo "{$id}は新規です。";
}
?>

<br><br>
// 配列の値を検索・置換する
<br>
<?php 
// str_replace, str_ireplace : 文字列だけでなく、配列の検索・置換が可能。ただし、インデックス配列のみ。こちらは元の配列を直接置換する
// preg_replace : 連想配列の値を検索、置換するときはこちらの関数しか使用できない。str_replaceと違ってこちらは置換後に新しい配列を作って返す。
$dataArray = ["MV15", "ST", "MD500GB"];
// 検索する値
$searchArray = ["MV", "ST", "MD"];
// 置換する値
$replaceArray = ["New Vision", "スリムタワー", "マルチドライブ"];
// 検索・置換
$result = str_replace($searchArray, $replaceArray, $dataArray);

echo "商品データ：\n";
echo "<br>";
echo implode(", ", $result), "\n";
?>

<br><br>
// 正規表現を使って配列を検索して、値を取り出す。
<br>
<?php // preg_grep(regular expression, $array) : 正規表現に当てはまる値を配列から取り出して、新たに配列を作成して返す
$nameArray = ["田中達也", "川崎賢一", "山田一郎", "杉山直樹"];
$pattern = "/田/u";

// 検索して取り出す
$result = preg_grep($pattern, $nameArray);

echo "該当", count($result), "件\n";
echo "<br>";

$flg = false;

foreach($result as $name){
    if($flg){
        echo "<br>";
    }
    $flg = true;
    echo $name, "\n";
}
?>

<br><br>
// マッチしなかった値の配列を取り出す。
<br>
<?php // preg_grape(): 第３引数に'PREG_GREP_INVERT'を指定すると、、マッチしなかった値を配列として取り出せる
$dataArray = ["R5", "E2", "E6", "A8", "R1", "G8"];
// パターン　A,R
$pattern = "/[A|R]/u";
// A,Rにマッチしなかった値を取り出す
$result = preg_grep($pattern, $dataArray, PREG_GREP_INVERT);

echo "該当しない", count($result), "件\n";
echo "<br>";

$flg = false;

foreach($result as $data){
    if($flg){
        echo "<br>";
    }
    $flg = true;
    echo $data, "\n";
}
?>

<br><br>
// 配列の値を正規表現で検索置換する
<br>
// 電話番号の末尾４桁を伏字にして名前、年齢的、電話番号を表示する
<br>
<?php // preg_replace : str_replace と異なり、連想配列の値も検索できる。また、検索置換後に新しい配列として返す
$userArray[] = ["name" => "井上真美", "age" => 37, "phone" => "090-4321-9999"];
$userArray[] = ["name" => "坂田京子", "age" => 32, "phone" => "06-3434-7788"];
$userArray[] = ["name" => "石岡　稔", "age" => 29, "phone" => "0467-89-9191"];
$userArray[] = ["name" => "多田優美", "age" => 35, "phone" => "59-1212"];

$pattern = "/(-)?\d{4}$/";
$replace = "$1****";

foreach($userArray as $user){
    // １次元目の配列から配列を取り出す
    $result = preg_replace($pattern, $replace, $user);
    $flg = false;
    // 電話番号を取り出す
    foreach($result as $key => $value){
        if($flg){
            echo "<br>";
        }
        $flg = true;
        echo "{$key}:{$value}\n";
    }
    echo "<br>";
}
?>