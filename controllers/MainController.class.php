<?php
namespace Controllers;

use Controllers\Controller\Controller;
use \Models\Task;

class MainController extends Controller{
    public function index(){

        $task = new Task();
        $result = $task->select('*')
            ->join("users u", "t.user_id=u.id", "LEFT")
            ->get();

        //dump($row);

        return view("main",['tasks'=>$result]);
    }
    public function createTask(){
       return view("createTask");
    }
}