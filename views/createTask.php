<? require_once __DIR__.'/layouts/header.php'?>

    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="/public/images/notepad.png" alt="" width="72" height="72">
        <h2>Создать задачу</h2>
        <p class="lead">без регистрации</p>
    </div>

    <div class="row">
        <div class="col-md-6 d-block mx-auto text-center">
            <form action="/create/data" method="post">
                <div class="form-group row">
                    <label for="example-title-input" class="col-2 col-form-label">Title</label>
                    <div class="col-10">
                        <input class="form-control" type="text" name="title" placeholder="Заголовок" id="example-search-title">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Текст задачи</label>
                    <div class="col-10">
                        <textarea class="form-control" name="text" placeholder="Текст задачи"></textarea>
                    </div>
                </div>
                <button class="btn btn-block btn-success" type="submit">Добавить</button>
            </form>
            <div class="row mt-5 text-left">
                <div class="col">
                    <a href="/">Вернуться</a>
                </div>
            </div>

        </div>
    </div>




    <? require_once __DIR__.'/layouts/footer.php'?>
