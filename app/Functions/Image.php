<?php

/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

namespace App\Functions;

use App\Functions\Slim\Slim;

class Image {

    public static function saveSlimImage($image_name, $destinationPath) {

        $images = Slim::getImages($image_name);
        if (count($images)) {
            $image = $images[0];
            $image_name = preg_replace('/[^a-zA-Z0-9\-\._]/','', $image['input']['name']);
            $file = Slim::saveFile($image['output']['data'], $image_name , $destinationPath);
            $file_name = $file['name'];
        }
        return isset($file_name) ? $file_name : "";
    }

    public static function store($image_name, $target_dir) {

        $target_file = $target_dir . basename($_FILES[$image_name]["name"]);
        $uploadOk = 1;
        $message = "";
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES[$image_name]["tmp_name"]);
            if($check !== false) {
                $message .= "File is an image - " . $check["mime"] . "." . "\r\n";
                $uploadOk = 1;
            } else {
                $message .= "File is not an image." . "\r\n";
                $uploadOk = 0;
            }
        }
        //Check if file already exists
        // if (file_exists($target_file)) {
        //     $message .= "Sorry, file already exists." . "\r\n";
        //     $uploadOk = 0;
        // }
        // Check file size 10MB
        if ($_FILES[$image_name]["size"] > 10000000 && $uploadOk) {
            $message .= "Sorry, your file is too large." . "\r\n";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" && $uploadOk) {
            $message .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed." . "\r\n";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            if(basename($_FILES[$image_name]["name"]) == "") {
                $message = "Select a file to edit." . "\r\n";
            }else {
                $message = "Sorry, your file was not uploaded." . "\r\n";
            }
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES[$image_name]["tmp_name"], $target_file)) {
                $message .= "The file ". basename( $_FILES[$image_name]["name"]). " has been uploaded." . "\r\n";
            } else {
                $uploadOk = 0;
                $message .= "Sorry, there was an error uploading your file." . "\r\n";
            }
        }
        $result['message'] = $message;
        $result['status'] = $uploadOk ? true : false;
        $result['path'] = $uploadOk ? $target_file : "";
        return $result;
    }
}
