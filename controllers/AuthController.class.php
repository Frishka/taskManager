<?php
namespace Controllers;

use Controllers\Controller\Controller;

class AuthController extends Controller{
    public function __construct()
    {
    }
    public function login(){
        return view('auth::login');
    }
    public function register(){
        return view('auth::register');
    }
}