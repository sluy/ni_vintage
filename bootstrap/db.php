<?php
$db = new \PDO(
    'mysql:host=' . $cfg['db']['host'] . ';dbname=' . $cfg['db']['name'] . ';charset=utf8mb4',
    $cfg['db']['user'],
    $cfg['db']['pass']
);
$db->exec("SET NAMES utf8mb4");
