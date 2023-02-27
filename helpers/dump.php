<?php
function dump($data, $die=true) {
    echo '<pre>' . var_export($data, true) . '</pre>';
    if ($die === true) {
        die();
    }
}

function json_dump($data, $die=true) {
    echo '<pre>' . json_encode($data, JSON_PRETTY_PRINT) . '</pre>';
    if ($die === true) {
        die();
    }
}
