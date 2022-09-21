<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && ($_POST == !null)) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $url = $_POST['url'];
    $date = $_POST['date'];

    $news = [
        'title' => $title,
        'pubDate' => $date,
        'link' => $url,
        'guid' => $url,
        'description' => $description,
    ];

    $execute->insertOne($news);
    echo 'Data Inserted';
} else {
    echo 'Data Not Inserted';
}
