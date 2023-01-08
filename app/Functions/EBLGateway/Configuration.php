<?php

namespace App\Functions\EBLGateway;

class Configuration {
    public static function config()
    {
        $configArray = array();

        /*
        Set all your configuration here

        If you want to have multiple configuration sets, copy and paste
        the configuration lines and create a new array with a different variable name
        this array can then be parsed into the Merchant constructor from process.php

        The debug configuration setting is useful for printing requests and responses
        If you're receiving an error or unexpected output, set this flag to TRUE
        The debug output will help indicate the cause of the problem

        Please comment the proxy settings if you do not wish to use a proxy

        */

        // If using a proxy server, uncomment the following proxy settings

        // If no authentication is required, only uncomment proxyServer
        // Server name or IP address and port number of your proxy server

        // $configArray["proxyServer"] = "192.168.5.244:8080";

        // Username and password for proxy server authentication
        //$configArray["proxyAuth"] = "username:password";

        // The below value should not be changed
        $configArray["proxyCurlOption"] = CURLOPT_PROXYAUTH;

        // The CURL Proxy type. Currently supported values: CURLAUTH_NTLM and CURLAUTH_BASIC
        $configArray["proxyCurlValue"] = CURLAUTH_NTLM;

        // If using certificate validation, modify the following configuration settings

        // alternate trusted certificate file
        // leave as "" if you do not have a certificate path
        //$configArray["certificatePath"] = "C:/ca-cert-bundle.crt";

        // possible values:
        // FALSE = disable verification
        // TRUE = enable verification
        $configArray["certificateVerifyPeer"] = FALSE;

        // possible values:
        // 0 = do not check/verify hostname
        // 1 = check for existence of hostname in certificate
        // 2 = verify request hostname matches certificate hostname
        $configArray["certificateVerifyHost"] = 0;

        if(getenv('APP_ENV')=="local"){
            //Base URL of the Payment Gateway. Do not include the version.
            $configArray["gatewayUrl"] = "https://test-gateway.mastercard.com/api/nvp/";

            // Merchant ID supplied by your payments provider
            $configArray["merchantId"] = "20010009";

            // API username in the format below where Merchant ID is the same as above
            $configArray["apiUsername"] = "merchant.20010009";

            // API password which can be configured in Merchant Administration
            $configArray["password"] = "08292e8816ac5b0e43ca4b7ac4f65e99";
        }else {
            //Base URL of the Payment Gateway. Do not include the version.
            $configArray["gatewayUrl"] = "https://ap-gateway.mastercard.com/api/nvp/";

            // Merchant ID supplied by your payments provider
            $configArray["merchantId"] = "50130001";

            // API username in the format below where Merchant ID is the same as above
            $configArray["apiUsername"] = "merchant.50130001";

            // API password which can be configured in Merchant Administration
            $configArray["password"] = "03b6175cf27b39b30248e43af3fc0b2b";
        }

        // The debug setting controls displaying the raw content of the request and
        // response for a transaction.
        // In production you should ensure this is set to FALSE as to not display/use
        // this debugging information
        $configArray["debug"] = FALSE;

        // Version number of the API being used for your integration
        // this is the default value if it isn't being specified in process.php
        $configArray["version"] = "35";

        return $configArray;
    }
}
