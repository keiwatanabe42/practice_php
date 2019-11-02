<?php // 現在日と現在から何日後の日付を取得するクラス
require_once("DateTool.php");

class Milk{
    // DateToolトレイトを使用
    use DateTool;
    
    public $theDate;
    public $limitDate;

    function __construct(){
        // 現在日を取得
        $now = new DateTime();
        // 年月日に直して設定
        $this -> theDate = $this ->ymdString($now);
        $this -> limitDate = $this ->addYmdString($now, 10);
    }
}