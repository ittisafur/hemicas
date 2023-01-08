<?php

namespace App\Functions\EBLGateway;

use App\Functions\EBLGateway\ApiLib;
use App\Functions\EBLGateway\Configuration;
use App\Functions\EBLGateway\Merchant;
use App\Functions\EBLGateway\Parser;
use App\Functions\EBLGateway\connection;

class Receipt {

    public static function main($request) {

        $errorMessage = "";
        $errorCode = "";
        $gatewayCode = "";
        $result = "";

        $responseArray = array();
        $resultInd =  isset($request->resultIndicator) ? $request->resultIndicator : "";
        $successInd = session()->get('successIndicator');


        $orderID = session()->get('orderID');
        $configArray = Configuration::config();
        $merchantObj = new Merchant($configArray);

        $parserObj = new Parser($merchantObj);

        $requestUrl = $parserObj->FormRequestUrl($merchantObj);

        $request_assoc_array = array(
            "apiOperation"=>"RETRIEVE_ORDER",
            "order.id"=>$orderID
        );

        $request = $parserObj->ParseRequest($merchantObj, $request_assoc_array);
        $response = $parserObj->SendTransaction($merchantObj, $request);

        $new_api_lib = new ApiLib;
        $parsed_array = $new_api_lib->parse_from_nvp($response);

        return $data = [
            'errorMessage' => "",
            'errorCode' => "",
            'gatewayCode' => "",
            'result' => "",
            'responseArray' => $responseArray,
            'resultInd' => $resultInd,
            'successInd' => $successInd,
            'parsed_array' => $parsed_array,
            'orderID' => $orderID,
        ];
    }
}
