<?php
namespace Controllers;

use Controllers\Controller\Controller;

class AuthController extends Controller{
    public function __construct()
    {
    }
    public function registration(){
        return view('auth::register');
    }
    public function register(){
        return redirect('/login');
    }
    public function login(){
        if(!isset($_SESSION['AUTH'])) return view('auth::login');
        else return redirect('/');
    }
    public function auth(){
        $_SESSION['AUTH'] = "Игорь";
        return redirect('/');
    }
    public function logout(){
        unset($_SESSION['AUTH']);
        return redirect('/');
    }
}