<? require_once __DIR__.'/../layouts/header.php'?>
<div class="container">
    <center>
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-4">
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Авторизация</div>
                </div>
                <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                    <form id="loginform" action="/auth" method="post" class="form-horizontal" role="form">

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">
                        </div>

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
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