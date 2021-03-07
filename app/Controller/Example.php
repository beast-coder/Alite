<?php

namespace App\Controller;

use App\Controller\Abstr\AbstractController;
use Services\Database\Database;

class Example extends AbstractController {

    public function __construct() {
        
    }

    public function index($param) {
        echo 'Example Controller - ' . $param;
    }

    public function show($ll = '') {
        
    }

}
