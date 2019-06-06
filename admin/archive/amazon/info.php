<?php

$file = fopen("http://www.amazon.co.uk/exec/obidos/ASIN/".$asin."/musicgoesoncom", "r");

if (!$file)
{
 echo "ERROR\nUnable to open http://www.amazon.co.uk/exec/obidos/ASIN/".$asin."/musicgoesoncom";
 exit;
}
while (!feof ($file))
{
 $line = fgets ($file, 1024);
 if (eregi("<br><font face=\"verdana, arial, helvetica\"><b>(.*)<br><a href=\"/exec/obidos/", $line, $out))
 {
  $title = $out[1];
  break;
 }
}

fclose($file);

echo "title:$title:title";

$file = fopen("http://www.amazon.co.uk/exec/obidos/ASIN/".$asin."/musicgoesoncom", "r");

if (!$file)
{
 echo "ERROR\nUnable to open http://www.amazon.co.uk/exec/obidos/ASIN/".$asin."/musicgoesoncom";
 exit;
}
while (!feof ($file))
{
 $line = fgets ($file, 1024);
 if (eregi("(.*)\">(.*)</a></b></font><br><br>", $line, $out))
 {
  $author = $out[2];
  break;
 }
}

fclose($file);

echo "author:$author:author";

?>
