<?php

namespace App\Controller;

use Alite\Controller\BaseController;

class PageNotFound extends BaseController {

    public function __construct() {
        
    }

    public function index() {

        echo '__404__';
    }

}
