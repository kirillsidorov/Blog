<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Мой первый блог</title>
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
    <div>
        <h1>Admin Panel</h1>
    </div>

     <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="index.php?action=add">Add article</a></div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($articles as $a): ?>
                        <tr>
                            <td><?=$a['date']?></td>
                            <td><?=$a['title']?></td>
                            <td><a href="index.php?action=edit&id=><?=$a['id']?>">Edit</a></td>
                            <td><a href="index.php?action=delete&id=><?=$a['id']?>">Delete</a></td>
                            <td>sit</td>
                        </tr>
                        <?php endforeach ?>
                        </tbody>

                    </table>
            </div>
    </div>
    <footer>
        <p>Мой Первый Блог <br>
            Copiright &copy; 2016</p>
    </footer>
</div>

</body>
</html>