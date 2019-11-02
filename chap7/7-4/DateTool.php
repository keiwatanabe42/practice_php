<?php
/*
    トレイト：includeに似たもので、プロパティやメソッドを定義しておくと、クラス定義でuseキーワードにてトレイトを指定するだけでそのコードを
    自身のクラスで定義したかのように扱えるもの
*/
// DateTool トレイトを定義する
trait DateTool{
    public function ymdString($date){
        // DateTimenを年月日の書式で返す
        $dateString = $date -> format('Y年m月d日');
        return $dateString;
    }

    // 指定日数後の年月日で返す
    public function addYmdString($date, $days){
        $date -> add(new DateInterval("P{$days}D"));
        return $this -> ymdString($date);
    }
}
// ?>