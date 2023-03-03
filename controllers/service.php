<?php
class ServiceController extends Controller {
    /**
     * Returns current active service.
     * @return \Service
     */
    public function service() {
        if (!$this->ctx->service) {
            $this->json(['message' => 'Service not found'], 404);
        }
        return $this->ctx->service;
    }
    public function index() {
        $this->json($this->service()->toArray());
    }

    public function posts() {
        $this->json($this->service()->posts);
    }

    public function events() {
        $this->json($this->service()->events);
    }
}
