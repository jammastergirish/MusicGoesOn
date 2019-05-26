<?
$title = 'Reviews - Albums';
$description = '';
$keywords = '';
$menu = 'reviews';
include("/home/girishgu/public_html/mgo/inc/header.inc");
?>

<?
$title = 'Reviews - Albums';
include("/home/girishgu/public_html/mgo/inc/top.inc");
?>

<?

$showicon = 'true';

$result_reviews = mysql_query("SELECT * FROM mgo WHERE section LIKE 'Reviews/Album' AND datetime <= '".datetime()."' ORDER BY datetime DESC LIMIT 0,10");
while ($data_reviews = mysql_fetch_array($result_reviews))
{
 $id = $data_reviews[id];
 include("/home/girishgu/public_html/mgo/inc/story.inc");
}

$showicon = 'false';

$result_reviews = mysql_query("SELECT * FROM mgo WHERE section LIKE 'Reviews/Album' AND datetime <= '".datetime()."' ORDER BY datetime DESC LIMIT 10, 100000000");
while ($data_reviews = mysql_fetch_array($result_reviews))
{
 $id = $data_reviews[id];
 include("/home/girishgu/public_html/mgo/inc/story.inc");
}

?>

<?

include("/home/girishgu/public_html/mgo/inc/middle.inc");
include("/home/girishgu/public_html/mgo/inc/bottom.inc");
include("/home/girishgu/public_html/mgo/inc/footer.inc");

?>