<?php
namespace Example\Controller;

use Virge\Router\Component\Request;

class IndexController
{
    public function index(Request $request)
    {
        return "Welcome to Virge!";
    }
}