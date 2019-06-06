<?php
$title = 'News Archive';
$description = '';
$keywords = '';
$menu = 'news';
include("../inc/header.inc");
?>

<?php
$title = 'News Archive';
include("../inc/top.inc");
?>

<?php

$section = "News";

$showicon = 1;

$result = mysql_query("SELECT * FROM mgo WHERE section LIKE '%$section%' AND datetime <= '".datetime()."' ORDER BY datetime DESC LIMIT 0,10");
while ($data = mysql_fetch_array($result))
{
 $id = $data[id];
 include("inc/story.inc");
}

$showicon = 0;

$result = mysql_query("SELECT * FROM mgo WHERE section LIKE '%$section%' AND datetime <= '".datetime()."' ORDER BY datetime DESC LIMIT 10,10000");
while ($data = mysql_fetch_array($result))
{
 $id = $data[id];
 include("inc/story.inc");
}
 echo "</p>";

?>

<?php

include("../inc/middle.inc");
include("../inc/bottom.inc");
include("../inc/footer.inc");

?>