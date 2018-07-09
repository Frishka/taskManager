<?php
namespace Controllers;

use Controller\Controller;
use Models\Task;
use Models\User;

class AdminController extends Controller{

    public function index(){
        if(isset($_SESSION['ADMIN'])){
            $orderBy = $_GET['orderBy'] ?? 't.id';
            $orderByDirection = ($_GET['d'] === 'desc')?'asc':'desc';
            $page = (int)$_GET['page'] ?? 1;
            if($page<=0) $page = 1;

            $task = new Task('t');
            $result = $task->select(['t.*','u.name','u.email'])
                ->join("users u", "t.user_id=u.id", "LEFT")
                ->orderBy(''.$orderBy,$orderByDirection)
                ->pagination($page,3);
            $result[] = $page;

            return view("admin::home",[
                'tasks'=>$result[0],
                'page'=>$page,
                'total'=>$result[1],
                'desc'=>$orderByDirection,
                'orderBy' =>$orderBy
            ]);
        }
        else return view("admin::login");
    }
    public function login(){
        if($_POST['login'] == 'admin' and $_POST['password'] == '123')
            $_SESSION['ADMIN'] = $_POST['login'];
        return redirect('/admin');
    }
    public function logout(){
        unset($_SESSION['ADMIN']);
        return redirect('/admin');
    }
}