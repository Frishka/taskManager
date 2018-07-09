<? require_once __DIR__.'/layouts/header.php'?>

    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="/public/images/notepad.png" alt="" width="72" height="72">
        <h2>Создать задачу</h2>
        <p class="lead">без регистрации</p>
    </div>

    <div class="row">
        <div class="col-md-6 text-center">
            <form action="/create/data" enctype="multipart/form-data" method="post">
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
                <div class="form-group text-left">
                    <input type="file" name="img" accept=".jpg, .gif, .png" class="form-control-file file" id="exampleInputFile">
                    <small id="fileHelp" class="form-text text-muted">
                        Добавить изображение, формат JPG/GIF/PNG, не более 320х240 пикселей
                    </small>
                </div>
                <button class="btn btn-block btn-info preview_b" >Предварительный просмотр</button>
                <button class="btn btn-block btn-success" type="submit">Добавить</button>
            </form>
            <div class="row mt-5 text-left">
                <div class="col">
                    <a href="/">Вернуться</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="preview">
                Предварительный просмотр
            </div>
        </div>
    </div>
<script src="/public/js/upload_image.js"></script>
<script>
    $('.preview_b').click(updateImageDisplay);
</script>

<? require_once __DIR__.'/layouts/footer.php'?>
