<?php
function url($path = null){
    if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $protocol = 'http';
    }
    $url = $protocol . "://" . $_SERVER['HTTP_HOST'];

    if (is_string($path) && !empty($path)) {
        $url .= '/' . $path;
    }
    return $url;
}

function public_url($path = null) {
    $url = url('public');
    if (is_string($path) && !empty($path)) {
        $url .= '/' . $path;
    }
    return $url;
}
