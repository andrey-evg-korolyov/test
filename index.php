<?php
ini_set('display_errors', 1); // Отображение ошибок при разработке проекта;
error_reporting(E_ALL);

require_once 'Passwords.php';
$passwords = new Passwords();
$list = $passwords->getPasswords();
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Password list</title>
        <link href="/src/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="container col-6">
                <table class="table table-sm table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Login</th>
                            <th>Password</th>
                            <th>Folder</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list as $value): ?>
                            <tr>
                                <td><?= $value[0] ?></td>
                                <td><?= $value[1] ?></td>
                                <td><?= $value[2] ?></td>
                                <td><?= $value[3] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class=" container col-3">
                <form class="row gx-3" action="form_handler.php" method="post">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="login" placeholder="Login" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="folder" placeholder="Folder name" required>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>


