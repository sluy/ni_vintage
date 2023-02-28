<?php
$service = isset($_GET['homenaje_id']) ? Service::find($_GET['homenaje_id']) : null;
if (!$service) {
    die('Not Found');
}
dump($service->homenajes);
