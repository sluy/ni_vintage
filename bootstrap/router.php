<?php
$router = new Router();
if (!$router->load()) {
    die('Cannot load route.');
}
