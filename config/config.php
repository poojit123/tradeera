<?php
    require_once './vendor/autoload.php';

    try {
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__,'../.env');
        $dotenv->load();
    } catch (Dotenv\Exception\InvalidPathException $ex) {
        print_r($ex->getMessage()); die();
    }

    $BASE_URL = $_ENV['APP_URL'] ?? 'http://localhost/tradeera';
    $ROOT_DIR = ($_ENV['APP_ENV'] && $_ENV['APP_ENV']!='local') ? $_SERVER['DOCUMENT_ROOT'] : $_SERVER['DOCUMENT_ROOT'].'/tradeera'; 
    $LOG_DIR = "$ROOT_DIR/logs";