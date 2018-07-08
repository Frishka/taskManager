<?php
namespace Controllers;

use Controllers\Controller\Controller;

class AdminController extends Controller{

    public function index(){
        if(isset($_SESSION['ADMIN'])) return view("admin::home");
        else return view("admin::login");
    }
    public function login(){
        if($_POST['login'] == 'admin' and $_POST['password'] == '123'){
            $_SESSION['ADMIN'] = $_POST['login'];
            return view('admin::home');
        }
        return redirect('/admin');
    }
    public function logout(){
        unset($_SESSION['ADMIN']);
        return redirect('/admin');
    }
}