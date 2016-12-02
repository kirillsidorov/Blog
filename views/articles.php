<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Мой первый блог</title>
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div>
        <h1>Мой первый Бложек!</h1>
        <a href="admin">Панель Администратора</a>
    </div>
    <?php foreach ($articles as $a): ?>
    <div class="article">
        <h3><a href="article.php?id=<?=$a['id']?>">
                <?=$a['title']?></a></h3>
        <em>Опубликовано:<?=$a['date']?></em>
        <p><?=$a['content']?></p>
    </div>
    <?php endforeach ?>
    <footer>
        <p>Мой Первый Блог <br>
            Copiright &copy; 2016</p>
    </footer>
</div>

</body>
</html>