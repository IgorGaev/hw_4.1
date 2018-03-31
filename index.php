<?php
require_once 'database.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Библиотека успешного человека</title>
    </head>
    <body>
        <h1>Библиотека успешного человека</h1>
        <table border="2">
            <thead>
                <tr>
                    <th><b>Название</b></th>
                    <th><b>Автор</b></th>
                    <th><b>Год выпуска</b></th>
                    <th><b>ISBN</b></th>
                    <th><b>Жанр</b></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($books as $book): ?>
                    <tr>
                        <td><?php echo $book['name'] ?></td>
                        <td><?php echo $book['author'] ?></td>
                        <td><?php echo $book['year'] ?></td>
                        <td><?php echo $book['isbn'] ?></td>
                        <td><?php echo $book['genre'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>
