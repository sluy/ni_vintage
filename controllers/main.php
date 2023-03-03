<?php
class MainController extends Controller {
    public function index() {
        if ($this->ctx->service) {
            include_view('main');
        } else {
            echo 'not found';
        }
    }

    public function test() {
        if ($this->ctx->service) {
            include_view('test');
        } else {
            echo 'not found';
        }
    }
}
