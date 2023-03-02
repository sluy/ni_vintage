<?php
class MainController extends Controller {
    public function index() {
        if ($this->ctx->service) {
            include_view('main');
        } else {
            echo 'not found';
        }
    }
}
