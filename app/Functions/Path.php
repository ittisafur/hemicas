<?php

/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

namespace App\Functions;

use File;

class Path
{

    public static function getImageNotFound()
    {
        return "img/image-not-found.jpg";
    }

    public static function create($folders)
    {
        if (is_array($folders)) {
            foreach ($folders as $key => $folder) {
                if (!File::exists(asset($folder))) {
                    File::makeDirectory(asset($folder));
                }
            }
        } else {
            $folder = $folders;
            if (!File::exists(asset($folder))) {
                File::makeDirectory(asset($folder));
            }
        }
    }

    public static function currentTime()
    {
        $year = date('Y');
        $month = date('F');
        $folders = [
            'storage/card_requests/' . $year . '/',
            'storage/card_requests/' . $year . '/' . $month . '/',
        ];
        Path::create($folders);
        return  $year . '/' . $month . '/';
    }

    public static function volunteers()
    {
        $path = 'storage/volunteers/';
        Path::create($path);
        return $path;
    }

    public static function causes()
    {
        $path = 'storage/causes/';
        Path::create($path);
        return $path;
    }

    public static function ideas()
    {
        $path = 'storage/ideas/';
        Path::create($path);
        return $path;
    }
    public static function sponsors()
    {
        $path = 'storage/sponsors/';
        Path::create($path);
        return $path;
    }
    public static function programs()
    {
        $path = 'storage/programs/';
        Path::create($path);
        return $path;
    }

    public static function success()
    {
        $path = 'storage/success/';
        Path::create($path);
        return $path;
    }
}
