<?php
namespace Controllers;

use Controller\Controller;
use Models\User;

class AuthController extends Controller{
    public function __construct()
    {
    }
    public function registration(){
        return view('auth::register');
    }
    public function register(){
        $user = new User();
        $login = FormChars($_POST['login']);
        $password = FormChars($_POST['password']);
        $user->insert([
            'name' => FormChars($_POST['name']),
            'password' => md5($password),
            'login' => $login,
            'email' => FormChars($_POST['email']),
            'role' => 1,
            'regdate' => date('Y-m-d')
        ]);
        return redirect('/login');
    }
    public function login(){
        if(!isset($_SESSION['AUTH'])) return view('auth::login');
        else return redirect('/');
    }
    public function auth(){
        $login = FormChars($_POST['login']);
        $password = FormChars($_POST['password']);
        $user = new User('u');
        $result = $user->select()
            ->where('login',$login)
            ->where('password',md5($password))
            ->get();

        if(!empty($result)){
            $_SESSION['AUTH'] = $result[0];
            return redirect('/');
        }
        return redirect('/login');
    }
    public function logout(){
        unset($_SESSION['AUTH']);
        return redirect('/');
    }
}