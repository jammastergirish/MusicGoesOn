<?php
$title = 'News';
$description = '';
$keywords = '';
$menu = 'news';
include("../inc/header.inc");
?>

<?php
$title = 'News';
include("../inc/top.inc");
?>

<?php

$section = "News";

$showicon = 1;

$result = mysqli_query($link, "SELECT * FROM mgo WHERE section LIKE '%$section%' AND datetime <= '".datetime()."' ORDER BY datetime DESC LIMIT 0,10");
while ($data = mysqli_fetch_array($result))
{
 $id = $data['id'];
 include("../inc/story.inc");
}

$showicon = 0;

$result = mysqli_query($link, "SELECT * FROM mgo WHERE section LIKE '%$section%' AND datetime <= '".datetime()."' ORDER BY datetime DESC LIMIT 10,20");
while ($data = mysqli_fetch_array($result))
{
 $id = $data['id'];
 include("../inc/story.inc");
}
 echo "</p>";
 echo "<a href=\"/".strtolower($section)."/archive.php\"><font face=\"verdana\" size=\"1\">$section Archive...</font></a>";

?>

<?php include("../inc/middle.inc"); ?>

<?php include("../inc/bottom.inc"); ?>

<?php include("../inc/footer.inc"); ?>