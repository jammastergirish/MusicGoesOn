<?php
$title = 'Reviews';
$description = '';
$keywords = '';
$menu = 'reviews';
include("inc/header.inc");
?>

<?php
$title = 'Reviews';
include("inc/top.inc");
?>

<hr width="20%" align="left">
<font face="verdana" size="2"><b>ALBUMS</b></font><br><br>

<?php

$showicon = 1;

$result_reviews = mysqli_query($link, "SELECT * FROM mgo WHERE section LIKE 'Reviews/Album' AND datetime <= '".datetime()."' ORDER BY datetime DESC LIMIT 0,3");
while ($data_reviews = mysqli_fetch_array($result_reviews))
{
 $id = $data_reviews[id];
 include("inc/story.inc");
}

$showicon = 0;

$result_reviews = mysqli_query($link, "SELECT * FROM mgo WHERE section LIKE 'Reviews/Album' AND datetime <= '".datetime()."' ORDER BY datetime DESC LIMIT 3,2");
while ($data_reviews = mysqli_fetch_array($result_reviews))
{
 $id = $data_reviews[id];
 include("inc/story.inc");
}

?>

<br>
<a class="link_onf7f7f7" href="/reviews/albums/"><font size="1">More Album Reviews...</font></a>


<hr width="20%" align="left">
<font face="verdana" size="2"><b>SINGLES</b></font><br><br>


<?php

$showicon = 1;

$result_reviews = mysqli_query($link, "SELECT * FROM mgo WHERE section LIKE 'Reviews/Single' AND datetime <= '".datetime()."' ORDER BY datetime DESC LIMIT 0,3");
while ($data_reviews = mysqli_fetch_array($result_reviews))
{
 $id = $data_reviews[id];
 include("inc/story.inc");
}

$showicon = 0;

$result_reviews = mysqli_query($link, "SELECT * FROM mgo WHERE section LIKE 'Reviews/Single' AND datetime <= '".datetime()."' ORDER BY datetime DESC LIMIT 3,2");
while ($data_reviews = mysqli_fetch_array($result_reviews))
{
 $id = $data_reviews[id];
 include("inc/story.inc");
}

?>

<br>
<a class="link_onf7f7f7" href="/reviews/singles/"><font size="1">More Single Reviews...</font></a>

<?php

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>