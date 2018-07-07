<?php
namespace Controllers;

use Controllers\Controller\Controller;

class AdminController extends Controller{

    public function index(){
        return view("admin::login");
    }
}