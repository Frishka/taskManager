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
            <th><a href="/?page=<?=$page?>&orderBy=text&d=<?=$desc?>">Задача</a></th>
            <th><a href="/?page=<?=$page?>&orderBy=name&d=<?=$desc?>">Имя</a></th>
            <th><a href="/?page=<?=$page?>&orderBy=email&d=<?=$desc?>">Email</a></th>
            <th><a href="/?page=<?=$page?>&orderBy=status&d=<?=$desc?>">Статус</a></th>
        </tr>

    <?php
        foreach($tasks as $task){
            echo "<tr><td>{$task['text']}</td><td>{$task['name']}</td><td>{$task['email']}</td><td>{$task['status']}</td></tr>";
        }
    ?>
    </table>
    <a href="/create">Создать задачу</a>
</div>
<? require_once __DIR__.'/layouts/footer.php'?>
