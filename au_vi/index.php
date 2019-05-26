<?
$title = 'Audio/Video';
$description = '';
$keywords = '';
$menu = 'au_vi';
include("/home/girishgu/public_html/mgo/inc/header.inc");
?>

<?
$title = 'Audio/Video';
include("/home/girishgu/public_html/mgo/inc/top.inc");
?>

<?

$showicon = 'true';

$result_auvi = mysql_query("SELECT * FROM mgo WHERE section = 'Au_Vi' AND datetime < '".datetime()."' ORDER BY id DESC LIMIT 0,3");
while ($data_auvi = mysql_fetch_array($result_auvi))
{
 $id = $data_auvi[id];
 include("/home/girishgu/public_html/mgo/inc/story.inc");
}

$showicon = 'false';

$result_auvi = mysql_query("SELECT * FROM mgo WHERE section = 'Au_Vi' AND datetime < '".datetime()."' ORDER BY id DESC LIMIT 3,10000");
while ($data_auvi = mysql_fetch_array($result_auvi))
{
 $id = $data_auvi[id];
 include("/home/girishgu/public_html/mgo/inc/story.inc");
}

?>

<?

include("/home/girishgu/public_html/mgo/inc/middle.inc");
include("/home/girishgu/public_html/mgo/inc/bottom.inc");
include("/home/girishgu/public_html/mgo/inc/footer.inc");

?>