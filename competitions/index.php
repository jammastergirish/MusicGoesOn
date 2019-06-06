<?php
$title = 'Competitions';
$description = '';
$keywords = '';
$menu = 'competitions';
include("../inc/header.inc");
?>

<?php
$title = 'Competitions';
include("../inc/top.inc");
?>

<?php

$showicon = 'true';

$result_competitions = mysqli_query($link, "SELECT * FROM mgo WHERE section = 'Competitions' AND datetime < '".datetime()."' ORDER BY id DESC LIMIT 0,3");
while ($data_competitions = mysqli_fetch_array($result_competitions))
{
 $id = $data_competitions[id];
include("../inc/story.inc");
}

$showicon = 'false';

$result_competitions = mysqli_query($link, "SELECT * FROM mgo WHERE section = 'Competitions' AND datetime < '".datetime()."' ORDER BY id DESC LIMIT 3,10000");
while ($data_competitions = mysqli_fetch_array($result_competitions))
{
 $id = $data_competitions[id];
include("../inc/story.inc");
}

?>

<?php

include("../inc/middle.inc");
include("../inc/bottom.inc");
include("../inc/footer.inc");

?>