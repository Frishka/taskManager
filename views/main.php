<? require_once __DIR__.'/layouts/header.php'?>
<div class="container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="/public/images/notepad.png" alt="" width="72" height="72">
        <h2>Запланированные задачи</h2>
        <p class="lead"></p>
    </div>

    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?php
            $params = (strlen($orderBy)>0)?"&orderBy=".$orderBy."&d=".$desc:'';
            if($page>1) echo '<li class="page-item"><a class="page-link" href="/?page='.($page-1).$params.'">Назад</a></li>';
            for($i=1;$i<=$total;$i++) {
                $result .= '<li class="page-item';
                if($i == $page) $result.= " active";
                $result .='"><a class="page-link" href="/?page='.$i.$params.'">'.$i.'</a></li>';
            }
            echo $result;
            if($page<$total) echo ' <li class="page-item"><a class="page-link" href="/?page='.($page+1).$params.'">Далее</a></li>';
            ?>
        </ul>
    </nav>

    <table class="table table-hover">
        <tr>
            <th colspan="2"><a href="/?page=<?=$page?>&orderBy=title&d=<?=$desc?>">Заголовок</a></th>
            <th><a href="/?page=<?=$page?>&orderBy=text&d=<?=$desc?>">Текст</a></th>
            <th><a href="/?page=<?=$page?>&orderBy=name&d=<?=$desc?>">Имя</a></th>
            <th><a href="/?page=<?=$page?>&orderBy=email&d=<?=$desc?>">Email</a></th>
            <th><a href="/?page=<?=$page?>&orderBy=status&d=<?=$desc?>">Статус</a></th>
        </tr>

    <?php
if(empty($tasks)) echo "<tr><td colspan='6'>Задачи не найдены</td></tr>";
else
        foreach($tasks as $task){
            if(is_null($task['name'])) $task['name'] = 'Аноним';
            if(is_null($task['email'])) $task['email'] = '-';
            echo "<tr><td><img src='/public/images/".((strlen($task['img'])>0)?'uploads/'.$task['img']: 'default.png')."' style='width:50px'></td><td>{$task['title']}</td><td>{$task['text']}</td><td>{$task['name']}</td><td>{$task['email']}</td><td>".(($task['status'])?'<i class="fa fa-check-circle" aria-hidden="true"></i>':'<i class="fa fa-times-circle" aria-hidden="true"></i>')."</td></tr>";
        }
    ?>
    </table>
    <a href="/create">Создать задачу</a>
</div>
<? require_once __DIR__.'/layouts/footer.php'?>
