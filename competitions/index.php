<?
$title = 'Competitions';
$description = '';
$keywords = '';
$menu = 'competitions';
include("/home/girishgu/public_html/mgo/inc/header.inc");
?>

<?
$title = 'Competitions';
include("/home/girishgu/public_html/mgo/inc/top.inc");
?>

<?

$showicon = 'true';

$result_competitions = mysql_query("SELECT * FROM mgo WHERE section = 'Competitions' AND datetime < '".datetime()."' ORDER BY id DESC LIMIT 0,3");
while ($data_competitions = mysql_fetch_array($result_competitions))
{
 $id = $data_competitions[id];
include("/home/girishgu/public_html/mgo/inc/story.inc");
}

$showicon = 'false';

$result_competitions = mysql_query("SELECT * FROM mgo WHERE section = 'Competitions' AND datetime < '".datetime()."' ORDER BY id DESC LIMIT 3,10000");
while ($data_competitions = mysql_fetch_array($result_competitions))
{
 $id = $data_competitions[id];
include("/home/girishgu/public_html/mgo/inc/story.inc");
}

?>

<?

include("/home/girishgu/public_html/mgo/inc/middle.inc");
include("/home/girishgu/public_html/mgo/inc/bottom.inc");
include("/home/girishgu/public_html/mgo/inc/footer.inc");

?>