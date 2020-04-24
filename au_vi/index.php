<?php
$title = 'Audio/Video';
$description = '';
$keywords = '';
$menu = 'au_vi';
include("inc/header.inc");
?>

<?php
$title = 'Audio/Video';
include("inc/top.inc");
?>

<?php

$showicon = 'true';

$result_auvi = mysqli_query($link, "SELECT * FROM mgo WHERE section = 'Au_Vi' AND datetime < '".datetime()."' ORDER BY id DESC LIMIT 0,3");
while ($data_auvi = mysqli_fetch_array($result_auvi))
{
 $id = $data_auvi[id];
 include("inc/story.inc");
}

$showicon = 'false';

$result_auvi = mysqli_query($link, "SELECT * FROM mgo WHERE section = 'Au_Vi' AND datetime < '".datetime()."' ORDER BY id DESC LIMIT 3,10000");
while ($data_auvi = mysqli_fetch_array($result_auvi))
{
 $id = $data_auvi[id];
 include("inc/story.inc");
}

?>

<?php

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>