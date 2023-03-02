<?php
$service = isset($_GET['homenaje_id']) ? Service::find($_GET['homenaje_id']) : null;
if (!$service) {
    die('Not Found');
}

if (isset($_GET['test']) && in_array($_GET['test'], ['true', '1'])) {
    dump($service->toArray());
}
