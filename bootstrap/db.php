<?php


try {
    $dbHost = 'mysql:host=' . $cfg['db']['host'] . ';dbname=' . $cfg['db']['name'] . ';charset=utf8mb4';
    $db = new \PDO(
        $dbHost,
        $cfg['db']['user'],
        $cfg['db']['pass']
    );
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES utf8mb4");
} catch (PDOException $e) {
    dump("The Following error has occurred:".$e->getMessage()."");
}
