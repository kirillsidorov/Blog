<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dashboard Template for Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">

        <h1>Добавить статью</h1>

        <div class="row">
            <form method="post" action="index.php?action=add">
                <div class="form-group">
                    <label>
                        Название статьи
                        <input type="text" name="title" value="" class="form-control" autofocus required>
                    </label>
                </div>
                <div class="form-group">
                        <label for="date">
                            Дата
                            <input type="date" name="date" value="" class="form-control" required>
                        </label>
                </div>
                <div class="form-group">
                    <label for="comment">Содержимое </label>

                        <textarea name="content" class="form-control" rows="5" id="comment"required></textarea>

                </div>

                <button type="submit" value="Сохранить" class="btn btn-success">Сохранить</button>
            </form>
    </div>
    </div>

    <footer>
        <p>Мой Первый Блог <br>
            Copiright &copy; 2016</p>
    </footer>
</body>
</html>