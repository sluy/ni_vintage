<?php
class MainController extends Controller {
    public function index() {
        if ($this->ctx->service) {
            include_view('main/index');
        } else {
            echo 'not found';
        }
    }

    public function api() {
        json_dump(api_json('service/posts'));
    }

    public function iframe() {
        if ($this->ctx->service) {
            include_view('main/iframe');
        } else {
            echo 'not found';
        }
    }

    public function slider() {
        $page = intval($this->query('page'));
        if ($page < 1) {
            $page = 1;
        }
        if ($this->ctx->service) {
            include_view('main/slider', ['page' => $page]);
        } else {
            echo '';
        }
    }

    public function test() {
        if ($this->ctx->service) {
            include_view('main/test');
        } else {
            echo 'not found';
        }
    }
}
