<?php
function dump($data, $die=true) {
    echo '<pre>' . var_export($data, true) . '</pre>';
    if ($die === true) {
        die();
    }
}

function to_plain_array($data) {
    if (class_exists('Model', false)) {
        if ($data instanceof Model) {
            $data = $data->toArray();
        } else if (is_array($data)) {
            $tmp = [];
            foreach($data as $key => $value) {
                if ($value instanceof Model) {
                    $tmp[$key] = $value->toArray();
                } else if (is_array($value)){
                    $tmp[$key] = to_plain_array($value);
                } else {
                    $tmp[$key] = $value;
                }
            }
            $data = $tmp;
        }
    }
    return $data;
}

function json_dump($data, $die=true) {
    echo '<pre>' . json_encode(to_plain_array($data), JSON_PRETTY_PRINT) . '</pre>';
    if ($die === true) {
        die();
    }
}
