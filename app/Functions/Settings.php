<?php

/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

namespace App\Functions;

// use Functions;

class Settings {


    public static function getOption($option = '')
    {
        if($option == "album_layout"){
            return false;
        }
        return false;
    }

    public static function getStatus($status = '')
    {
        return array_key_exists($status, Functions::card_statuses());
    }

    public static function getInvoiceStatus($status = '')
    {
        return array_key_exists($status, Functions::invoice_statuses());
    }

}
