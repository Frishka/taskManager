<?php
namespace Controllers;

use Controller\Controller;
use \Models\Task;

class CRUDController extends Controller{
    public function create (){
        $title = addslashes($_POST['title']);
        $text = addslashes($_POST['text']);


        $task = new Task();

        $user = (isset($_SESSION['AUTH']))?$_SESSION['AUTH']['id']:0;

        $data = [
            'user_id'=>$user,
            'text'=>$text,
            'title'=>$title,
        ];
//        var_dump($data);
        $task->insert($data);
        return redirect('/');
    }
}
