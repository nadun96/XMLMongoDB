<?php
require 'config.php';

$news = $execute->find();
$news = $news->toArray();

$xml = "<?xml version='1.0' encoding='UTF-8'?>
        <?xml-stylesheet type='text/xsl' href='sports.xsl'?><channel> ";

$count = count($news);

for ($i = 0; $i < $count; $i++) {
    $xml = $xml .
        '<item>
            <title>' . $news[$i]['title'] . '</title>
            <pubDate>' . $news[$i]['pubDate'] . '</pubDate>
            <link>' . $news[$i]['link'] . '</link>
            <description>' . $news[$i]['description'] . '</description>
        </item>';
}

$xml = $xml . "</channel>";


$xm = new SimpleXMLElement($xml);

$xml = simplexml_load_string($xml);

echo "<?xml version='1.0' encoding='UTF-8'?>
      <?xml-stylesheet type='text/xsl' href='sports.xsl'?><channel><table> ";

foreach ($xm->children() as $data) {
    //display each sub element in xml files
    echo  '<tr>';
    echo  '<td><item>' . $data->title . '</item></td>';
    echo  '<td><pubdate>' . $data->pubDate . '</pubdate></td>';
    echo  '<td><link>' . $data->link . '</link></td>';
    echo  '<td><description>' . $data->description->children() . '</description></td>';
    echo '</tr>';
}
