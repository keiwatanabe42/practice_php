<?php # p92 ユーザ定義関数の引数に初期値を設定できる例,初期値がある引数は後に記述しなければならない
    function charge($rank, $days = 1){
        switch ($rank){
            case "A":
                $ryoukin = 15000 * $days;
                break;
            case "B":
                $ryoukin = 12000 * $days;
                break;
            default:
                $ryoukin = 8000 * $days;
                break;
        }
        return $ryoukin;
    }
    $kingaku1 = charge("B", 2);
    $kingaku2 = charge("A");

    echo "金額１は{$kingaku1}円" . "<br>" . PHP_EOL;
    echo "金額２は{$kingaku2}円";
?>

