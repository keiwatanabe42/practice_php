<?php
require_once("ShopBiz.php");
?>

<?php
class MyShop extends ShopBiz{
    
    public function thanks(){
        echo "ありがとうございました。", "\n";
        echo "<br>";
    }

    // 販売する
    public function sells($unitPrice, $number){
        $price = $unitPrice * $number;
        $this -> sell($price);
    }

    public function getSales(){
        echo "売り上げ合計は、{$this -> sales}円です。";
    }
}
// ?>