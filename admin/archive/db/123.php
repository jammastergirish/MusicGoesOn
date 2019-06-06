<?php

mysql_connect("localhost", "mgo", "h47fh20e");
mysql_select_db(musicgoeson_com);

$result = mysql_query("SELECT * FROM mgo_index ORDER BY id ASC LIMIT 131,100");

while ($data = mysql_fetch_array($result))
{

$metatags = get_meta_tags("http://www.musicgoeson.com".$data[uri]);

$file = fopen ("http://www.musicgoeson.com".$data[uri], "r");
if (!$file) {
    exit;
}
while (!feof ($file)) {
    $line = fgets ($file, 1024);
    if (eregi ("<title>(.*)</title>", $line, $out)) {
        $title = $out[1];
        break;
    }
}
fclose($file);

 $title = ereg_replace("Music Goes On - News - ", "", $title);
 $title = ereg_replace("Music Goes On - Reviews - ", "", $title);
 $title = ereg_replace("Music Goes On - Reviews - Albums - ", "", $title);
 $title = ereg_replace("Music Goes On - Reviews - Singles - ", "", $title);
 $title = ereg_replace("Music Goes On - Audio/Video - ", "", $title);

 $title = addslashes($title);
 $metatags[description] = addslashes($metatags[description]);
 $data[keywords] = addslashes($data[keywords]);

 mysql_query ("INSERT INTO mgo (id, uri, headline, description, date, section, keywords) VALUES ('$data[id]', '$data[uri]', '$title', '$metatags[description]', '$metatags[date]', '$data[section]', '$data[keywords]')");
}

?>