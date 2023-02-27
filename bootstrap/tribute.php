<?php
include_once(HELPERS_PATH . '/tribute.php');
$tribute = get_service($_GET['homenaje_id']);

if (!$tribute) {
    die('Not Found');
}
