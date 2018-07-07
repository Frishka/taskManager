<?php
namespace Controllers;
class AuthController extends Controller\Controller{
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