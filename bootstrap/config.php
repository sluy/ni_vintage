<?php
$cfg = [
    'env' => file_exists(CONFIG_PATH . '/env.php') ? include_once(CONFIG_PATH . '/env.php') : 'PROD',
    'db' => include_once(CONFIG_PATH . '/db.php'),
    'api' => include_once(CONFIG_PATH . '/api.php'),
];
if (is_string($cfg['env'])) {
    $cfg['env'] = strtolower($cfg['env']);
}
if ($cfg['env'] !== 'dev') {
    $cfg['env'] = 'prod';
}
$cfg['dev'] = $cfg['env'] === 'dev';
$cfg['prod'] = $cfg['env'] !== 'dev';
