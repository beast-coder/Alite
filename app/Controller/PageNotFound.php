<?php

namespace App\Controller;

use App\Controller\Abstr\AbstractController;

class PageNotFound extends AbstractController {

    public function __construct() {
        
    }

    public function index() {

        echo '__404__';
    }

}
