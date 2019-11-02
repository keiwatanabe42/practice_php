<?php // 両方のトレイトを使うクラス
require_once("TaroTool.php");
require_once("HanaTool.php");
?>

<?php
class MyClass{
    // ２つのトレイトを使う
    use TaroTool, HanaTool{
        TaroTool::hello as taroHello;
        HanaTool::hello as HanaHello;
        // A instead of B = 「Bの代わりにA」と同じ文法
        HanaTool::hello insteadof TaroTool; // TaroToolの代わりにHanaToolを使う
    }
}
// ?>