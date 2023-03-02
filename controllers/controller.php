<?php

class Controller {
    protected $ctx;
    public function __construct($ctx = null) {
        if (!$ctx) {
            $ctx = $GLOBALS;
        }
        $this->setContext($ctx);
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
            echo json_encode($data, \JSON_PRETTY_PRINT);
        }
        die();
    }
}
