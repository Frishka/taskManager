<? require_once __DIR__.'/layouts/header.php'?>
<div class="container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="/public/images/notepad.png" alt="" width="72" height="72">
        <h2>Запланированные задачи</h2>
        <p class="lead"></p>
    </div>
    <table class="table table-hover">
        <tr>
            <th>Задача</th>
            <th>Имя</th>
            <th>Email</th>
            <th>Статус</th>
        </tr>

    <?php
        foreach($tasks as $task){
            echo "<tr><td>{$task['text']}</td><td>{$task['name']}</td><td>{$task['email']}</td><td>{$task['status']}</td></tr>";
        }
    ?>
    </table>
</div>
<? require_once __DIR__.'/layouts/footer.php'?>
