<?
$title = 'Audio/Video';
$description = '';
$keywords = '';
$menu = 'au_vi';
include("inc/header.inc");
?>

<?
$title = 'Audio/Video';
include("inc/top.inc");
?>

<?

$showicon = 'true';

$result_auvi = mysql_query("SELECT * FROM mgo WHERE section = 'Au_Vi' AND datetime < '".datetime()."' ORDER BY id DESC LIMIT 0,3");
while ($data_auvi = mysql_fetch_array($result_auvi))
{
 $id = $data_auvi[id];
 include("inc/story.inc");
}

$showicon = 'false';

$result_auvi = mysql_query("SELECT * FROM mgo WHERE section = 'Au_Vi' AND datetime < '".datetime()."' ORDER BY id DESC LIMIT 3,10000");
while ($data_auvi = mysql_fetch_array($result_auvi))
{
 $id = $data_auvi[id];
 include("inc/story.inc");
}

?>

<?

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>