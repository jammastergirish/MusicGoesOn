<?php
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");

$id = ereg_replace("/", "", $PATH_INFO);

$id = addslashes($id);

$artist = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM artists WHERE id = '$id'"));

$title = 'Artists - '.$artist[artist].' - Audio/Video';
$description = '';
$keywords = '';
$menu = 'artists';
$s_menu = 'artist';
$php_header = 'false';
include("../inc/header.inc");
?>

<?php
include("subtitle.inc");
?>

<?php

$showicon = 'false';

$section = 'Au_Vi';

$query = mysqli_query($link, "SELECT * FROM mgo WHERE keywords LIKE '%$artist[artist]%' AND section LIKE '%$section%' AND datetime < '".datetime()."' ORDER BY datetime DESC");
if (mysql_num_rows($query)!="0")
{
 echo "<hr width=\"30%\" align=\"left\">";
 echo "<b><u>".strtoupper($section)."</u></b><br><br>";
 while ($data = mysqli_fetch_array($query))
 {
  $id = $data['id'];
  include("../inc/story.inc");
 }
}
else
{
 echo "Nothing found";
}

?>

<?php

include("../inc/middle.inc");
include("../inc/bottom.inc");
include("../inc/footer.inc");

?>