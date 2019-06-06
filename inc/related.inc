<!-- START: /inc/related.inc -->
<?php

$uri = explode("?", $REQUEST_URI);
$uri = $uri[0];
$uri = str_replace("/article.php/", "", $uri);
$uri = str_replace("/", "", $uri);

$result = mysql_query("SELECT * FROM mgo WHERE (keywords LIKE '$relatedto%' OR keywords LIKE '%|$relatedto%') AND section != 'Artists/Biographies' AND datetime <= '".datetime()."' ORDER BY id DESC LIMIT 0,3");

while ($data = mysql_fetch_array($result))
{
 if ($data[id]!=$uri)
 {
  if (strlen($data[headline])>=50)
  {
   $data[headline] = substr($data[headline], 0, 47).'...'; 
  }

  echo "<a class=\"link_onf7f7f7\" href=\"/article.php/$data[id]/\">$data[headline]</a><br>$data[section]<br><br>";
 }
}

if ($data = mysql_fetch_array(mysql_query("SELECT * FROM artists WHERE artist = '$relatedto' LIMIT 0,1")))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php/$data[id]/\">More info on <b>$data[artist]</b></a><br>in Artists<br><br>";
 echo "<a class=\"link_onf7f7f7\" href=\"/forums/forum.php/$data[id]/\">Comment on <b>$data[artist]</b></a><br>in Forums<br><br>";
}

//echo "<a class=\"link_onf7f7f7\" href=\"/search.php?q=$relatedto/\">Search for <b>$relatedto</b></a><br>in Search<br><br>";

if ($data = mysql_fetch_array(mysql_query("SELECT * FROM artists WHERE artist = '$relatedto' LIMIT 0,1")))
{
 if ($mail = mysql_fetch_array(mysql_query("SELECT * FROM mail WHERE SID = '$SID'")))
 {
  if (!preg_match($data[id], $mail[lists]))
  {
   echo "<a class=\"link_onf7f7f7\" href=\"/mail/manager/add.php?artist=$data[id]\">Add <b>$data[artist]</b> To Your Mailing Lists</a><br>in Mailing Lists<br><br>";
  }
 }
 else
 {
  //echo "<a class=\"link_onf7f7f7\" href=\"/mail/add.php?artist=$data[id]\">Add <b>$data[artist]</b> To Your Mailing Lists</a><br>in Mailing Listsbr><br>";
 }
}

?>
<!-- END: /inc/related.inc -->