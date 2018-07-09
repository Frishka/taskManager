<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Test App Taskman</title>

    <!-- Bootstrap core CSS -->
    <link href="/public/css/app.css" rel="stylesheet">
    <link href="/public/css/bootstrap.css" rel="stylesheet">
    <script src="public/js/jquery.min.js"></script>
    <!--    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

</head>
<body class="bg-light">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
                <ul class="list-inline float-right">
                    <li class="list-inline-item">Admin</li>
                    <li class="list-inline-item"><a href="/admin/logout">Выйти</a></li>
                </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="/public/images/notepad.png" alt="" width="72" height="72">
        <h2>Welcome, Admin</h2>
        <p class="lead"></p>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?php
//            var_dump($tasks);
            $params = (strlen($orderBy)>0)?"&orderBy=".$orderBy."&d=".$desc:'';
            if($page>1) echo '<li class="page-item"><a class="page-link" href="/admin?page='.($page-1).$params.'">Назад</a></li>';
            for($i=1;$i<=$total;$i++) {
                $result .= '<li class="page-item';
                if($i == $page) $result.= " active";
                $result .='"><a class="page-link" href="/admin?page='.$i.$params.'">'.$i.'</a></li>';
            }
            echo $result;
            if($page<$total) echo ' <li class="page-item"><a class="page-link" href="/admin?page='.($page+1).$params.'">Далее</a></li>';
            ?>
        </ul>
    </nav>

    <table class="table table-hover">
        <tr>
            <th><a href="/admin?page=<?=$page?>&orderBy=text&d=<?=$desc?>">Задача</a></th>
            <th><a href="/admin?page=<?=$page?>&orderBy=name&d=<?=$desc?>">Имя</a></th>
            <th><a href="/admin?page=<?=$page?>&orderBy=email&d=<?=$desc?>">Email</a></th>
            <th><a href="/admin?page=<?=$page?>&orderBy=status&d=<?=$desc?>">Статус</a></th>
        </tr>

        <?php
        foreach($tasks as $task){
            if(is_null($task['name'])) $task['name'] = 'Аноним';
            if(is_null($task['email'])) $task['email'] = '-';
            echo "<tr>
                    <td><div class='load'></div><textarea class='form-control text' data-id ='{$task['id']}'>'{$task['text']}'</textarea></td>
                    <td class='name'>{$task['name']}</td>
                    <td>{$task['email']}</td>
                    <td><input type='checkbox' class='status' data-id ='{$task['id']}' data-check ='{$task['status']}'></td>
                </tr>";
        }
        ?>
    </table>
</div>
<script>
    $(document).ready(function () {
        $('.status').each(function(){if($(this).data('check') === 1) $(this).prop('checked',true)})
            .change(function () {
                var status = 0;
                if($(this).is(':checked')) status = 1;
                $.post('/admin/data',{status:status,id:$(this).data('id')})
                      .done(function (data) {
                          console.log(data);
                      });
            });
        $('.text').change(function(){
           var $this = $(this);
            $.ajax({
                url:'/admin/data',
                type:'post',
                data:{text:$(this).val(),id:$(this).data('id')},
                beforeSend: function(){$this.siblings('.load').show()},
                complete:function () {$this.siblings('.load').hide()},
                success:function(data){console.log(data)}
            });
        });
    });
</script>
<? require_once __DIR__.'/../layouts/footer.php'?>
</body>
</html>
