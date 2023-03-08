<?php

function api_json($route = [], $query = []) {
    return api($route, $query, 'json');
}

function api_text($route = [], $query = []) {
    return api($route, $query, 'text');
}

function api($route = '', $query = [], $response = 'json') {
    try {
        $url = isset($GLOBALS['cfg']['api']['url']) && is_string($GLOBALS['cfg']['api']['url']) && filter_var($GLOBALS['cfg']['api']['url'], FILTER_VALIDATE_URL)
            ? $GLOBALS['cfg']['api']['url']
            : url();
        if (is_array($query)) {
            if (!in_array('homenaje_id', $query) && $GLOBALS['service'] && !empty($GLOBALS['service']->id_str)) {
                $query['homenaje_id'] = $GLOBALS['service']->id_str;
            }
            if (empty($query)) {
                $query = '';
            } else {
                $query = http_build_query($query);
            }
        }
        if (!is_string($query)) {
            $query = '';
        }
        if (!empty($query) && $query[0] !== '?') {
            $query = '?' . $query;
        }

        if (is_array($route)) {
            $route = implode('/', $route);
        }
        if (!is_string($route)) {
            $route = '';
        }
        $route = trim($route);

        if (!empty($route)) {
            $url .= '/' . $route . $query;
        } else if (!empty($query)) {
            $url .= '/' . $query;
        }
        $plain = file_get_contents($url);
        if (!($plain)) {
            return null;
        }
        $plain = trim($plain);

        if ($response === 'json') {
            try {
                return json_decode($plain);
            } catch (\Throwable $th) {
                return null;
            }
        }
         return $plain;
    } catch (\Throwable $th) {
        return null;
    }
}
