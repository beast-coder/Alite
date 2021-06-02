<?php

namespace App\Controller;

use Alite\Controller\BaseController;
use App\Model\Example;

class Index extends MyController {

    public function __construct(Example $e) {
        parent::__construct();
    }

    public function index() {
        $this->layout(false);

        $data["text"] = "Index controller";

        $this->View($data);
    }

}
