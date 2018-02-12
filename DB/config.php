<?php
/**
 * Created by PhpStorm.
 * User: shane
 * Date: 11/02/2018
 * Time: 10:18
 */

define('DB_SERVER', 'localhost');

define('DB_USERNAME', 'root');

define('DB_PASSWORD', '');

define('DB_NAME', 'chat');
try {
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //   echo "Connected successfully";
} catch (PDOException $e) {

    echo "Connection Failed: " . $e->getMessage();
}