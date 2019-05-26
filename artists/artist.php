<?
include("/home/girishgu/public_html/mgo/inc/php_header.inc");

//$id = ereg_replace("/", "", $PATH_INFO);

$id = $_GET['id'];

$id = addslashes($id);

$artist = mysql_fetch_array(mysql_query("SELECT * FROM artists WHERE id = '$id'"));

$title = 'Artists - '.$artist[artist];
$description = '';
$keywords = '';
$menu = 'artists';
$s_menu = 'artist';
$php_header = 'false';
include("/home/girishgu/public_html/mgo/inc/header.inc");
?>

<?
include("/home/girishgu/public_html/mgo/artists/subtitle.inc");
?>

<?

if ($row = mysql_fetch_array(mysql_query("SELECT * FROM mgo WHERE section = 'Artists/Biographies' AND artists_id = '$data[id]' AND datetime < '".datetime()."' ORDER BY datetime DESC LIMIT 0,1")))
{
 echo "<hr width=\"30%\" align=\"left\">";
 echo "<b><u>BIOGRAPHY</u></b><br><br>";
 echo "<a class=\"link_onf7f7f7\" href=\"/article.php/$row[id]/\"><font size=\"1\">Full <b>$artist[artist]</b> Biography...</font></a>";
 echo "<br>\n\n";
}

?>

<?

$showicon = 'false';

$section = 'News';

$query = mysql_query("SELECT * FROM mgo WHERE keywords LIKE '%$artist[artist]%' AND section LIKE '%$section%' AND datetime < '".datetime()."' ORDER BY datetime DESC LIMIT 0,3");
if (mysql_num_rows($query)!="0")
{
 echo "<hr width=\"30%\" align=\"left\">";
 echo "<b><u>".strtoupper($section)."</u></b><br><br>";
 while ($data = mysql_fetch_array($query))
 {
  $id = $data[id];
  include("/home/girishgu/public_html/mgo/inc/story.inc");
 }

 if (mysql_num_rows(mysql_query("SELECT * FROM mgo WHERE keywords LIKE '%$artist[artist]%' AND section LIKE '%$section%' AND datetime < '".datetime()."' ORDER BY datetime DESC"))>=4)
 {
  echo "<a class=\"link_onf7f7f7\" href=\"/artists/".strtolower($section).".php/$artist[id]/\"><font size=\"1\">More <b>$artist[artist]</b> $section...</font></a>";
 }
}

echo "<br>\n\n";

?>

<?

$showicon = 'false';

$section = 'Reviews';

$query = mysql_query("SELECT * FROM mgo WHERE keywords LIKE '%$artist[artist]%' AND section LIKE '%$section%' AND datetime < '".datetime()."' ORDER BY datetime DESC LIMIT 0,3");
if (mysql_num_rows($query)!="0")
{
 echo "<hr width=\"30%\" align=\"left\">";
 echo "<b><u>".strtoupper($section)."</u></b><br><br>";
 while ($data = mysql_fetch_array($query))
 {
  $id = $data[id];
  include("/home/girishgu/public_html/mgo/inc/story.inc");
 }

 if (mysql_num_rows(mysql_query("SELECT * FROM mgo WHERE keywords LIKE '%$artist[artist]%' AND section LIKE '%$section%' AND datetime < '".datetime()."' ORDER BY datetime DESC"))>=4)
 {
  echo "<a class=\"link_onf7f7f7\" href=\"/artists/".strtolower($section).".php/$artist[id]/\"><font size=\"1\">More <b>$artist[artist]</b> $section...</font></a>";
 }
}

echo "<br>\n\n";

?>

<?

if (mysql_num_rows(mysql_query("SELECT * FROM live WHERE artist LIKE '%$artist[artist]%' ORDER BY date DESC"))!=0)
{

 echo "<hr width=\"30%\" align=\"left\">";
 echo "<b><u>LIVE</u></b><br><br>";

 $artist[artist] = addslashes($artist[artist]);

 $result = mysql_query("SELECT * FROM live WHERE artist LIKE '%$artist[artist]%' ORDER BY date DESC"); 

 while ($data = mysql_fetch_array($result))
 {
  $row_location = mysql_fetch_array(mysql_query("SELECT * FROM live_venues WHERE id = '$data[venue]'"));  

  $row_location[location] = strtoupper($row_location[location]);

  echo "<font face=\"verdana\" size=\"2\">$row_location[location] $row_location[name]\n";
  $dateofevent = explode(" | ", datetime_to_text($data[date]));
  $dateofevent = $dateofevent[0];
  echo "<br><font size=\"1\">$dateofevent</font></font><br><br>\n\n";
 }

echo "<br>\n\n";

}

?>

<?

$showicon = 'false';

$section = 'Au_Vi';

$query = mysql_query("SELECT * FROM mgo WHERE keywords LIKE '%$artist[artist]%' AND section LIKE '%$section%' AND datetime < '".datetime()."' ORDER BY datetime DESC LIMIT 0,3");
if (mysql_num_rows($query)!="0")
{
 echo "<hr width=\"30%\" align=\"left\">";
 echo "<b><u>".strtoupper($section)."</u></b><br><br>";
 while ($data = mysql_fetch_array($query))
 {
  $id = $data[id];
  include("/home/girishgu/public_html/mgo/inc/story.inc");
 }

 if (mysql_num_rows(mysql_query("SELECT * FROM mgo WHERE keywords LIKE '%$artist[artist]%' AND section LIKE '%$section%' AND datetime < '".datetime()."' ORDER BY datetime DESC"))>=4)
 {
  echo "<a class=\"link_onf7f7f7\" href=\"/artists/".strtolower($section).".php/$artist[id]/\"><font size=\"1\">More <b>$artist[artist]</b> $section...</font></a>";
 }
}

echo "<br>\n\n";

?>

<?

$showicon = 'false';

$section = 'Interviews';

$query = mysql_query("SELECT * FROM mgo WHERE keywords LIKE '%$artist[artist]%' AND section LIKE '%$section%' AND datetime < '".datetime()."' ORDER BY datetime DESC LIMIT 0,3");
if (mysql_num_rows($query)!="0")
{
 echo "<hr width=\"30%\" align=\"left\">";
 echo "<b><u>".strtoupper($section)."</u></b><br><br>";
 while ($data = mysql_fetch_array($query))
 {
  $id = $data[id];
  include("/home/girishgu/public_html/mgo/inc/story.inc");
 }

 if (mysql_num_rows(mysql_query("SELECT * FROM mgo WHERE keywords LIKE '%$artist[artist]%' AND section LIKE '%$section%' AND datetime < '".datetime()."' ORDER BY datetime DESC"))>=4)
 {
  echo "<a class=\"link_onf7f7f7\" href=\"/artists/".strtolower($section).".php/$artist[id]/\"><font size=\"1\">More <b>$artist[artist]</b> $section...</font></a>";
 }
}

echo "<br>\n\n";

?>

<?

if (!empty($artist[links]))
{

 echo "<hr width=\"30%\" align=\"left\">";
 echo "<b><u>WWW LINKS</u></b><br><br>";

 $links = explode("||", $artist[links]);

 foreach($links AS $line)
 {
  $line = explode("|", $line);
  echo "<a class=\"link_onf7f7f7\" href=\"http://$line[0]\" target=\"blank\"><b>$line[1]</b><br><font size=\"1\">$line[0]</font></a>\n<br><br>";
 }

 echo "<br>\n\n";

}

?>

<?

include("/home/girishgu/public_html/mgo/inc/middle.inc");
include("/home/girishgu/public_html/mgo/inc/bottom.inc");
include("/home/girishgu/public_html/mgo/inc/footer.inc");

?>