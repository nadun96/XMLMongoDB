<?php
require 'vendor/autoload.php';

$client = (new MongoDB\Client('mongodb://user:user@ac-psbabn2-shard-00-00.prjr2f6.mongodb.net:27017,ac-psbabn2-shard-00-01.prjr2f6.mongodb.net:27017,ac-psbabn2-shard-00-02.prjr2f6.mongodb.net:27017/?ssl=true&replicaSet=atlas-ffg1cb-shard-0&authSource=admin&retryWrites=true&w=majority'));
$execute = ($client->test->items);

// Path: index.php
/*
Current IP Address Shoud be added:
1. connect
2. add current ip address
url: 'https://cloud.mongodb.com/v2/6316ae8790cdcd7e82bc0ac6#clusters/detail/Cluster0'
db test collection items
tutorial: 'https://www.mongodb.com/docs/php-library/current/tutorial/crud/#insert-one-document'
*/
