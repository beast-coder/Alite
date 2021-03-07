<?php

namespace App\Controller;

use App\Controller\Abstr\AbstractController;
use App\Model\Example;

class Index extends AbstractController {

    public function __construct(Example $e) {
        
    }

    public function index() {
        echo 'Index Controller';
    }

}
