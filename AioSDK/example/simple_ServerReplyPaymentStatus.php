<?php

    // 付款結果通知
    require('ECPay.Payment.Integration.php');

    try {
        // 收到綠界科技的付款結果訊息，並判斷檢查碼是否相符
        $AL = new ECPay_AllInOne();
        $AL->HashKey = '5294y06JbISpM5x9';
        $AL->HashIV = 'v77hoKGq4kWxNNIS';
        $AL->CheckOutFeedback();

        // 以付款結果訊息進行相對應的處理
        /** 
        回傳的綠界科技的付款結果訊息如下:
        Array
        (
            [MerchantID] =>
            [MerchantTradeNo] =>
            [StoreID] =>
            [RtnCode] =>
            [RtnMsg] =>
            [TradeNo] =>
            [TradeAmt] =>
            [PaymentDate] =>
            [PaymentType] =>
            [PaymentTypeChargeFee] =>
            [TradeDate] =>
            [SimulatePaid] =>
            [CustomField1] =>
            [CustomField2] =>
            [CustomField3] =>
            [CustomField4] =>
            [CheckMacValue] =>
        )
        */

        // 在網頁端回應 1|OK
        echo '1|OK';
    } catch(Exception $e) {
        echo '0|' . $e->getMessage();
    }