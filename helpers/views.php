<?php
function add_file_ext($path, $ext) {
    if (is_string($path) && is_string($ext) && !empty($ext)) {
        if ($ext[0] !== '.') {
            $ext = '.' . $ext;
        }
        $ext = strtolower($ext);
        $pathLength = strlen($path);
        $extLength = strlen($ext);
        $pathCI = strtolower($path);
        if ($pathLength < $extLength || substr($pathCI, $extLength * -1) !== $ext) {
            $path .= $ext;
        }
    }
    return $path;
}

function include_view($path, $vars = []) {
    if (is_string($path) && $path !== '') {
        $path = add_file_ext(VIEWS_PATH . '/' . $path, 'php');
        if (!is_array($vars)) {
            $vars = [];
        }
        if (file_exists($path) && is_readable($path)) {
            try {
                $ctx = $GLOBALS;
                foreach ($vars as $key => $value) {
                    if (is_string($key) && !array_key_exists($key, $ctx)) {
                        $ctx[$key] = $value;
                    }
                }
                include($path);
                return true;
            } catch (\Throwable $th) {
                die($th->getMessage());
                //throw $th;
            }
        }
    }
    return false;
}

function include_partial($path, $vars = []) {
    return include_view('partials/' . $path, $vars);
}
