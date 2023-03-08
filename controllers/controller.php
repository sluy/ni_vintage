<?php

class Controller {
    protected $ctx;
    public function __construct($ctx = null) {
        if (!$ctx) {
            $ctx = $GLOBALS;
        }
        $this->setContext($ctx);
    }

    public function query($key, $defaultValue = null) {
        if (isset($_GET[$key])) {
            $tmp = $_GET[$key];
            if (is_string($tmp)) {
                $tmp = trim($tmp);
            }
            if (!empty($tmp)) {
                return $tmp;
            }
        }
        return $defaultValue;
    }

    protected function setContext($ctx = null) {
        $this->ctx = new stdClass();
        if (is_array($ctx)) {
            foreach($ctx as $key => $value) {
                $this->ctx->$key = $value;
            }
        }
        return $this;
    }

    public function json($data = null, $code = 200) {
        header("Content-Type: application/json");
        switch ($code) {
            case 200:
                $code .= ' OK';
                break;
            case 404:
                $code .= ' Not Found';
                break;
        }
        header('HTTP/1.1 ' . $code);
        if ($data !== null) {
            echo json_encode(to_plain_array($data), \JSON_PRETTY_PRINT);
        }
        die();
    }
}
