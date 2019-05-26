<?
$title = 'News';
$description = '';
$keywords = '';
$menu = 'news';
include("../inc/header.inc");
?>

<?
$title = 'News';
include("../inc/top.inc");
?>

<?

$section = "News";

$showicon = 1;

$result = mysql_query("SELECT * FROM mgo WHERE section LIKE '%$section%' AND datetime <= '".datetime()."' ORDER BY datetime DESC LIMIT 0,10");
while ($data = mysql_fetch_array($result))
{
 $id = $data[id];
 include("../inc/story.inc");
}

$showicon = 0;

$result = mysql_query("SELECT * FROM mgo WHERE section LIKE '%$section%' AND datetime <= '".datetime()."' ORDER BY datetime DESC LIMIT 10,20");
while ($data = mysql_fetch_array($result))
{
 $id = $data[id];
 include("../inc/story.inc");
}
 echo "</p>";
 echo "<a href=\"/".strtolower($section)."/archive.php\"><font face=\"verdana\" size=\"1\">$section Archive...</font></a>";

?>

<? include("../inc/middle.inc"); ?>

<? include("../inc/bottom.inc"); ?>

<? include("../inc/footer.inc"); ?>