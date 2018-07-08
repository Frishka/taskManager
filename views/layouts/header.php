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
            <?if(isset($_SESSION['AUTH'])) echo '
                <ul class="list-inline float-right">
                    <li class="list-inline-item">'.$_SESSION['AUTH']['name'].'</li>
                    <li class="list-inline-item"><a href="/logout">Выйти</a></li>
                </ul>';
            else{?>
                <ul class="list-inline float-right">
                   <?php if($_SERVER['REQUEST_URI'] != '/login'){?>
                    <li class="list-inline-item"><a href="/login">Вход</a></li>
                    <?}if($_SERVER['REQUEST_URI'] != '/registration'){?>
                        <li class="list-inline-item"><a href="/registration">Регистрация</a></li>
                    <?}?>
                </ul>
            <?}?>
        </div>
    </div>
</div>
<div class="container">
