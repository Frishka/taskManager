<?php
namespace Controllers;

class MainController extends Controller\Controller{
    public function index(){
        view("main");
    }
    public function foo(){
        echo 'second Page';
    }
}