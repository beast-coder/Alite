<?php

namespace App\Controller;

use Alite\Controller\BaseController;

class Example extends BaseController {

    public function __construct() {
        
    }

    public function index($param = "") {
        echo 'Example Controller - ' . $param;
    }

}
