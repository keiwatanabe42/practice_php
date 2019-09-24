<?php #p93 引数の省略
    function charge($rank, $days=1){
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
    # 引数省略して実行するとサーバーエラーになって実行できない
    $kingaku3 = charge();
    echo "金額3は{$kingaku3}円";
?>