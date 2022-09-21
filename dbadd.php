<?php
require 'config.php';

$rss_feed =  simplexml_load_file('sports.xml') or die("Error: Cannot create object");
$rss_feed->formatOutput = true;
$rss_feed->preserveWhiteSpace = false;

foreach ($rss_feed->channel->item as $item) {

    if ($item->title) {

        $news = [
            'title' => (string)$item->title,
            'pubDate' => (string)$item->pubDate,
            'link' => (string)$item->link,
            'guid' => (string)$item->guid,
            'description' => (string)$item->description,
        ];

        $insertOneResult = $execute->insertOne($news);

        echo 'Data Inserted';
    } else {
        echo 'Data Not Inserted';
    }
}
