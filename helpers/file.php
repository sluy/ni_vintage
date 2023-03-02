<?php

function tmp_file($path, $content) {
    if (is_object($content) || is_array($content)) {
        $content = json_encode($content, JSON_PRETTY_PRINT);
    }
    $content = strval($content);
    if (!is_string($path) || empty($path)) {
        return false;
    }
    $path = explode('/', $path);
    if (count($path) < 2) {
        return false;
    }
    $filename = array_pop($path);
    $path = implode('/', $path);
    if (!tmp_dir($path)) {
        return false;
    }
    file_put_contents(TMP_PATH . '/' . $path . '/' . $filename, $content);
    return true;
}

function tmp_dir($path) {
    $base = TMP_PATH;
    //Cannot write over it.
    if (!is_string($path) || empty($path) || !file_exists($base) || !is_dir($base) || !is_readable($base) || !is_writable($base)) {
        return false;
    }
    foreach(explode('/', $path) as $current) {
        if (!file_exists($base) || !is_readable($base) || !is_writable($base) || !is_dir($base)) {
            return false;
        }
        $base .= '/' . $current;
        if (!file_exists($base)) {
            try {
                mkdir($base);
                if (!file_exists($base)) {
                    return false;
                }
            } catch (\Throwable $th) {
                //throw $th;
            }
        }
    }
    return true;
}
