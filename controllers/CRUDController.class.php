<?php
namespace Controllers;

use Controller\Controller;
use \Models\Task;

class CRUDController extends Controller{
    public function create (){
        $title = addslashes($_POST['title']);
        $text = addslashes($_POST['text']);

        $allowed_filetypes = array('.jpg','.gif','.png'); // Допустимые типы файлов
        $max_filesize = 524288; // Максимальный размер файла в байтах (в данном случае он равен 0.5 Мб).
        $upload_path = __DIR__.'/../public/images/uploads/'; // Папка, куда будут загружаться файлы .
        $filename = $_FILES['img']['name']; // В переменную $filename заносим имя файла (включая расширение).

        $ext = substr($filename, strpos($filename,'.'), strlen($filename)-1); // В переменную $ext заносим расширение загруженного файла.
        if(!in_array($ext,$allowed_filetypes)) // Сверяем полученное расширение со списком допутимых расширений.
            die('Данный тип файла не поддерживается.');

        if(filesize($_FILES['img']['tmp_name']) > $max_filesize) // Проверим размер загруженного файла.
            die('Фаил слишком большой.');

        if(!is_writable($upload_path)) // Проверяем, доступна ли на запись папка.
            die('Невозможно загрузить фаил в папку. Установите права доступа - 777.');

        // Загружаем фаил в указанную папку.
        if(move_uploaded_file($_FILES['img']['tmp_name'],$upload_path . $filename))
        {
            $task = new Task();
            $user = (isset($_SESSION['AUTH']))?$_SESSION['AUTH']['id']:0;
            $data = [
                'user_id'=>$user,
                'text'=>$text,
                'title'=>$title,
                'img' =>$filename
            ];
            $task->insert($data);
            return redirect('/');
        } else return 'ERROR: Не удалось загрузить изображение';
    }
    public function update(){
        $task = new Task();
        if(isset($_POST['status'])){
            $task->where('id',$_POST['id'])->update([
                'status'=>$_POST['status']
            ]);
        }
        if(isset($_POST['text'])){
            $task->where('id',$_POST['id'])->update([
                'text'=>addslashes($_POST['text'])
            ]);
        }
    }
    public function delete(){}
    public function get(){
        $task = new Task();
        return $task->select()
            ->join("users u", "t.user_id=u.id", "LEFT")->get(50);
    }
}
