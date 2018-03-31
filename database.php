<?php

$link = mysqli_connect('localhost', 'igaev', 'neto1673', 'global');

if (mysqli_connect_errno()) {
    echo 'Ошибка в подключении к базе данных (' . mysqli_connect_errno() . '): '
    . '' . mysqli_connect_error();
    exit();
}

$link->set_charset("utf8");

$sql = "SELECT * FROM `books`";

$result = mysqli_query($link, $sql);

$books = mysqli_fetch_all($result, MYSQLI_ASSOC);



