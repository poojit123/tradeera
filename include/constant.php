<?php
    require_once('./config/config.php');

    if(!defined('BASE_URL')){
        define('BASE_URL', $BASE_URL);
    }
    if(!defined('IMAGES_URL')){
        define('IMAGES_URL', $BASE_URL.'/assets/images');
    }