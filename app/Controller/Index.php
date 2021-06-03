<?php

namespace App\Controller;

use Alite\Controller\BaseController;
use App\Model\Example;

class Index extends BaseController {

    public function __construct(Example $e) {
        parent::__construct();
    }

    public function index() {

        $data["text"] = "Index controller";

        $this->view($data);
    }

}
