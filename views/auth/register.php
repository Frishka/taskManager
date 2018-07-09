<? require_once __DIR__.'/../layouts/header.php'?>
    <center>
    <div id="" style="margin-top:50px" class=" col-md-6 d-block mx-auto">
        <div class="panel panel-info text-left">
            <div class="panel-heading">
                <div class="panel-title text-center">Регистрация</div>
            </div>
            <div class="panel-body" >
                <form id="signupform" action="/register" method="post" class="form-horizontal" role="form">
                    <div id="signupalert" style="display:none" class="alert alert-danger">
                        <p>Error:</p>
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Почта</label>
                        <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">Логин</label>
                        <input type="text" class="form-control" name="login" placeholder="Login">
                    </div>
                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">Имя</label>
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Password</label>
                        <input type="password" class="form-control" name="passwd" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info btn-block"><i class="icon-hand-right"></i> &nbsp Зарегистрироваться</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </center>
<? require_once __DIR__.'/../layouts/footer.php'?>