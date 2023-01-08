<?php

namespace App\Functions;

use App\Functions\EBLGateway\ApiLib;
use App\Functions\EBLGateway\Configuration;
use App\Functions\EBLGateway\Merchant;
use App\Functions\EBLGateway\Parser;
use App\Functions\EBLGateway\connection;

class EBLGateway {

    public static function HostedCheckout()
    {
        //Ensure this is the first invokation of this page
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {

            $order_amount = $_POST["order_amount"];
            $order_currency = $_POST["order_currency"];
            $customer_receipt_email = "'" . $_POST["customer_receipt_email"] . "'";

            //Creates the Merchant Object from config. If you are using multiple merchant ID's,
            // you can pass in another configArray each time, instead of using the one from configuration.php
            $configArray = Configuration::config();
            $merchantObj = new Merchant($configArray);

            // The Parser object is used to process the response from the gateway and handle the connections
            // and uses connection.php
            $parserObj = new Parser($merchantObj);

            //The Gateway URL can be set by using the following function, or the
            //value can be set in configuration.php
            //$merchantObj->SetGatewayUrl("https://secure.uat.tnspayments.com/api/nvp");
            $requestUrl = $parserObj->FormRequestUrl($merchantObj);

            //This is a library if useful functions
            $new_api_lib = new ApiLib;

            //Use a method to create a unique Order ID. Store this for later use in the receipt page or receipt function.
            $order_id = $new_api_lib->getRandomString(10);

            //Form the array to obtain the checkout session ID.
            $request_assoc_array = array(
                "apiOperation"=>"CREATE_CHECKOUT_SESSION",
                "order.id"=>$order_id,
                "order.amount"=>$order_amount,
                "order.currency"=>$order_currency,
                "interaction.displayControl.billingAddress" =>"HIDE"
            );

            //This builds the request adding in the merchant name, api user and password.
            $request = $parserObj->ParseRequest($merchantObj, $request_assoc_array);

            //Submit the transaction request to the payment server
            $response = $parserObj->SendTransaction($merchantObj,$request);
            //Parse the response
            $parsed_array = $new_api_lib->parse_from_nvp($response);

            //Store the successIndicator for later use in the receipt page or receipt function.
            $successIndicator = isset($parsed_array['successIndicator']) ? $parsed_array['successIndicator'] : NULL;

            //The session ID is passed to the Checkout.configure() function below.
            $session_id = isset($parsed_array['session.id']) ? $parsed_array['session.id'] : NULL;

            //Store the variables in the session, or a database could be used for example
            session([
                'successIndicator' => $successIndicator,
                'orderID' => $session_id
            ]);

            $merchantID = "'" . $merchantObj->GetMerchantId() . "'";
            return $data = [
                'merchantID' => $merchantID,
                'order_id' => $order_id,
                'order_amount' => $order_amount,
                'order_currency' => $order_currency,
                'customer_receipt_email' => $customer_receipt_email,
                'session_id' => $session_id,
                'successIndicator' => $successIndicator
            ];
        };
    }

    public static function Receipt($request)
    {

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
