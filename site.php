<html>
<head>
<title>Music Goes On - Site Index</title>
</head>

<body>

<?

mysql_connect("localhost", "mgo", "h47fh20e");
mysql_select_db(musicgoeson_com);

include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/functions.inc");

?>

<?

$just = ereg_replace("/", "", $PATH_INFO);

if (empty($just))
{
 $result = mysql_query("SELECT * FROM mgo WHERE datetime <= '".datetime()."' ORDER BY datetime DESC");
}
else
{
 $result = mysql_query("SELECT * FROM mgo WHERE section LIKE '%$just%' AND datetime <= '".datetime()."' ORDER BY datetime DESC");
}

while ($data = mysql_fetch_array($result))
{
 echo "<a href=\"http://www.musicgoeson.com/article.php/$data[id]/\">$data[headline]</a><br><font size=\"1\">".datetime_to_text($data[datetime])."</font><br><br>\n";
}

?>

<br><br>

<?

if (empty($just))
{
 $just = 'Artists';
}

if ($just=="Artists")
{
 $result = mysql_query("SELECT * FROM artists ORDER BY artist");

 while ($data = mysql_fetch_array($result))
 {
  echo "<a href=\"http://www.musicgoeson.com/artists/artist.php/$data[id]/\">$data[artist]</a><br>\n";
 }
}

?>

<br><br><br><br><br><br>All times GMT

</body>

</html>