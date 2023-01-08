<?php

/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

namespace App\Functions;

use File;
use Auth;
use Alert;
use App\Functions\Menu;

class Functions {

    public static function showImage($file_path = '') {
        if (File::exists($file_path)) {
            return "<img src=".asset($file_path).">";
        }
        return "";
    }

    public static function getRandomString($length = 10) {
        $strings = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9));
        $maxIndex = count($strings) - 1;

        $result = '';
        for ($i = 0; $i < $length; $i++) {
            $index = mt_rand(0, $maxIndex);
            $result .= $strings[$index];
        }
        return $result;
    }

    public static function menu() {
        $menu = new Menu;
        $items = $menu->adminMenu();
        return $items;
    }

    public static function menuWidget($user_id, $nav = "", $subnav = "") {
        $menu = new Menu;
        return $menu->widget($user_id, $nav, $subnav);
    }

    public static function isPermissionOk($pageTag){
        $permissionJson = Auth::user()->permissions;
        if($permissionJson != ""){
            return in_array($pageTag, json_decode($permissionJson, true));
        }
        return false;
    }

    public static function checkPermission($key, $permissionJson)
    {
        // dd($key, $permissionJson);
        if($permissionJson != ""){
            return in_array($key, json_decode($permissionJson));
        }
        return false;
    }

    public static function getVat(){
        return 15;
    }

    public static function currency() {
        return 'BDT';
    }

    public static function currencyCode() {
        return '&#2547;';
    }

    public static function card_statuses() {
        return [
            'pending'       => 'bg-yellow-crusta bg-font-yellow-crusta',
            'approved'      => 'bg-green-jungle bg-font-green-jungle',
            'discarded'     => 'bg-red-intense bg-font-red-intense',
            'delivered'     => 'bg-blue bg-font-blue',
        ];
    }

    public static function invoice_statuses() {
        return [
            'unpaid'    => 'bg-yellow-crusta bg-font-yellow-crusta',
            'paid'      => 'bg-green-jungle bg-font-green-jungle',
            'waived'    => 'bg-blue-steel bg-font-blue-steel',
        ];
    }

    public static function base64data($data)
    {
        return base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $data));
    }

    public static function base64data_old($data)
    {
        $data = str_replace('data:image/png;base64,', '', $data);
        $data = str_replace(' ', '+', $data);
        $data = base64_decode($data);
        return $data;
    }

    public static function label($status, $type = 'card') {
        if($type == 'card') {
            $statuses = self::card_statuses();
        }else {
            $statuses = self::invoice_statuses();
        }
        return isset($statuses[$status]) ? $statuses[$status] : 'bg-default bg-font-default';
    }

    public static function money($number) {
        
        return  number_format($number, 2, '.', ',');
    }

    public static function c_money($number) {
        return self::currency(). " " . self::money($number);
    }

    public static function money_c($number) {
        return self::money($number) . " " . self::currency();
    }

    public static function percent($number) {
        return number_format($number, 2, '.', ',') . "%";
    }
}
