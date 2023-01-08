<?php

/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

namespace App\Functions;

class Alert {

    public static function alert($message = '', $class = 'info', $status = '', $url = '', $url_class = '', $url_title = ''){
        session([
            'alert' => [
                'class' => $class,
                'status' => $status.'!',
                'message' => $message,
                'url' => $url,
                'url_class' => $url_class,
                'url_title' => $url_title
            ]
        ]);
    }

    public static function label($status){
        $labels = [
            'active' => 'label-success',
            'pending' => 'label-warning',
            'inactive' => 'label-danger',
            'archive' => 'label-default',
            'maintenance' => 'label-primary'
        ];
        return $labels[$status];
    }

}
