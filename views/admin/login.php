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
<div class="container">
    <center>
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-4">
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Вход в Админ</div>
                </div>
                <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                    <form id="loginform" action="/admin/login" method="post" class="form-horizontal" role="form">

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="login" value="" placeholder="Login">
                        </div>

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->

                            <div class="col-sm-12 controls">
                                <button type="submit" class="btn btn-success">Войти</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </center>
</div>
<? require_once __DIR__.'/../layouts/footer.php'?>s
</body>
</html>