<?
$title = 'News Archive';
$description = '';
$keywords = '';
$menu = 'news';
include("/home/girishgu/public_html/mgo/inc/header.inc");
?>

<?
$title = 'News Archive';
include("/home/girishgu/public_html/mgo/inc/top.inc");
?>

<?

$section = "News";

$showicon = 1;

$result = mysql_query("SELECT * FROM mgo WHERE section LIKE '%$section%' AND datetime <= '".datetime()."' ORDER BY datetime DESC LIMIT 0,10");
while ($data = mysql_fetch_array($result))
{
 $id = $data[id];
 include("/home/girishgu/public_html/mgo/inc/story.inc");
}

$showicon = 0;

$result = mysql_query("SELECT * FROM mgo WHERE section LIKE '%$section%' AND datetime <= '".datetime()."' ORDER BY datetime DESC LIMIT 10,10000");
while ($data = mysql_fetch_array($result))
{
 $id = $data[id];
 include("/home/girishgu/public_html/mgo/inc/story.inc");
}
 echo "</p>";

?>

<?

include("/home/girishgu/public_html/mgo/inc/middle.inc");
include("/home/girishgu/public_html/mgo/inc/bottom.inc");
include("/home/girishgu/public_html/mgo/inc/footer.inc");

?>