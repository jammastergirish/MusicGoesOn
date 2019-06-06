<?php
$title = 'Interviews';
$description = '';
$keywords = '';
$menu = 'interviews';
include("../inc/header.inc");
?>

<?php
$title = 'Interviews';
include("../inc/top.inc");
?>

<?php

$result_news = mysqli_query($link, "SELECT * FROM mgo WHERE section = 'Interviews' AND datetime < '".datetime()."' ORDER BY id DESC LIMIT 0,10");
while ($data_news = mysqli_fetch_array($result_news))
{
 $id = $data_news[id];
 include("../inc/story.inc");
}

$showicon = 'false';

$result_news = mysqli_query($link, "SELECT * FROM mgo WHERE section = 'Interviews' AND datetime < '".datetime()."' ORDER BY id DESC LIMIT 10,20");
while ($data_news = mysqli_fetch_array($result_news))
{
 $id = $data_news[id];
 include("../inc/story.inc");
}

?>

<?php

include("../inc/middle.inc");
include("../inc/bottom.inc");
include("../inc/footer.inc");

?>