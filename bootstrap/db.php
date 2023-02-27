<?php
$db = new \PDO('mysql:host=' . $cfg['db']['host'] . ';dbname=' . $cfg['db']['name'], $cfg['db']['user'], $cfg['db']['pass']);
