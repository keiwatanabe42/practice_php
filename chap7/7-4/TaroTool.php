<?php // 
trait TaroTool{
    public function hello(){
        echo "ハロー！";
    }
    
    // 今日の曜日を表示するメソッド
    public function dayOfTheWeek(){
        $week = ["日", "月", "火", "水", "金", "土"];
        $now = new DateTime();
        // format('w')：曜日を0~6のStringで返す。それをint型にキャストしている
        $w = (int)$now -> format('w');
        $weekday = $week[$w];
        echo "今日は", $weekday, "曜日です。";
    }
}
// ?>