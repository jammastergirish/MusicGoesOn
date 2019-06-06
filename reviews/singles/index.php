<?
$title = 'Reviews - Singles';
$description = '';
$keywords = '';
$menu = 'reviews';
include("inc/header.inc");
?>

<?
$title = 'Reviews - Albums';
include("inc/top.inc");
?>

<?

$showicon = 'true';

$result_reviews = mysql_query("SELECT * FROM mgo WHERE section LIKE 'Reviews/Single' AND datetime <= '".datetime()."' ORDER BY datetime DESC LIMIT 0,10");
while ($data_reviews = mysql_fetch_array($result_reviews))
{
 $id = $data_reviews[id];
 include("inc/story.inc");
}

$showicon = 'false';

$result_reviews = mysql_query("SELECT * FROM mgo WHERE section LIKE 'Reviews/Single' AND datetime <= '".datetime()."' ORDER BY datetime DESC LIMIT 10, 100000000");
while ($data_reviews = mysql_fetch_array($result_reviews))
{
 $id = $data_reviews[id];
 include("inc/story.inc");
}

?>

<?

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>