<?php

class Router {
    public $route = [];

    public $controller = null;

    public $action = null;

    public $params = [];

    public $query = [];

    public function __construct($raw = null) {
        if (!is_string($raw)) {
            $raw = isset($_GET['route']) && is_string($_GET['route']) ? $_GET['route'] : '';
        }
        $sections = array_filter(array_map('trim', explode('/', trim($raw))), function ($value) {
            return $value !== '';
        });

        if (count($sections)  === 0) {
            $sections[] = 'main';
        }
        if (count($sections) === 1) {
            $sections[] = 'index';
        }
        $this->route = $sections;
        $this->controller = array_shift($sections);
        $this->action = array_shift($sections);
        $this->params = $sections;
        $this->query = $_GET;
    }

    public function load() {
        if (is_string($this->controller) && is_string($this->action)) {
            try {
                $ctrlClass = ucfirst($this->controller) . 'Controller';
                $ctrlPath = CONTROLLERS_PATH . '/' . $this->controller . '.php';
                if (!(class_exists('Controller', false))) {
                    include(CONTROLLERS_PATH . '/controller.php');
                }

                if (!(class_exists($ctrlClass, false))) {
                        if (!file_exists($ctrlPath)) {
                            return false;
                        }
                        include($ctrlPath);
                        if (!class_exists($ctrlClass, false)) {
                            return false;
                        }
                }
                $ctrl = new $ctrlClass($GLOBALS);
                if (!method_exists($ctrl, $this->action)) {
                    return false;
                }
                call_user_func_array([$ctrl, $this->action], $this->params);
                return true;
            } catch (\Throwable $th) {
                //throw $th;
            }
        }
        return false;
    }
}
