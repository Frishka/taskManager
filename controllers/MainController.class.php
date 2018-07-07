<?php
namespace Controllers;
use \Models\Task;

class MainController extends Controller\Controller{
    public function index(){

        $task = new Task();
        $row = $task->select()->where('id',2,'>')->get();

        dump($row);

        view("main");
    }
    public function foo(){
        echo 'second Page';
    }
}