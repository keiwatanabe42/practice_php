<?php
$couponList = ["nf23qw" => 0.75, "ha45as" => 0.8, "hf56zx" => 8.5];
$priceList = ["ax101" => 2300, "ax102" => 2900];

//クーポンコードの割引率をしらべる関数
function getCouponRate($couponCode){
    global $couponList;
    // couponCode がキーに存在するかチェック
    $isCouponCode = array_key_exists($couponCode, $couponList);
    // 存在する場合、割引率を返す
    if($isCouponCode){
        return $couponList[$couponCode];
    }else{
        // ない場合はNULLを返す
        return NULL;
    }
}

// 商品IDで価格をしらべる関数
function getPrice($priceId){
    global $priceList;
    // priceIdがリストに存在するかチェック
    $isPriceId = array_key_exists($priceId, $priceList);
    
    // ある場合、金額を返す
    if($isPriceId){
        return $priceList[$priceId];
    }else{
        return NULL;
    }

}
?>