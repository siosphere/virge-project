<?php

use Example\Controller\IndexController;
use Virge\Routes;

Routes::add('', IndexController::class, 'index');