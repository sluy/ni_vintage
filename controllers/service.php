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
        $paginate = strtolower(trim(strval($this->query('paginate'))));
        if (!in_array($paginate, ['1', 'true'])) {
            return  $this->json($this->service()->posts);
        }
        $page = intval($this->query('page'));
        $limit = intval($this->query('limit'));
        if ($limit < 1) {
            $limit = 18;
        }
        if ($page < 1) {
            $page = 1;
        }
        $pages = [];
        $currentPage = 1;

        $all = $this->service()->posts;
        foreach (array_reverse($all) as $current) {
            if (count($pages[$currentPage]) >= $limit) {
                $currentPage++;
            }
            if (!isset($pages[$currentPage])) {
                $pages[$currentPage] = [];
            }
            $pages[$currentPage] = $current;
        }
        $res = [
            'total_items' => count($all),
            'page' => $page,
            'data' => [],
            'count' => 0,
            'first_page' => 1,
            'last_page' => count($pages),
            'is_last_page' => count($pages) === $page,
            'prev_page' => null,
            'next_page' => null,
        ];
        if (isset($pages[$page])) {
            $res['data'] = $pages[$page];
            if ($page > 1) {
                $res['prev_page'] = $page - 1;
            }
        }
        if ($page < $res['last_page']) {
            $res['next_page'] = $page + 1;
        }
        return $this->json($res);
    }


    public function events() {
        $this->json($this->service()->events);
    }

    public function company() {
        $this->json($this->service()->company);
    }

    public function ni() {
        $this->json($this->service()->ni);
    }
}
