<?php
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");

$id = ereg_replace("/", "", $PATH_INFO);

$id = addslashes($id);

$artist = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM artists WHERE id = '$id'"));

$title = 'Artists - '.$artist[artist].' - Live';
$description = '';
$keywords = '';
$menu = 'artists';
$s_menu = 'artist';
$php_header = 'false';
include("inc/header.inc");
?>

<?php
include("subtitle.inc");
?>

<?php

if (mysql_num_rows(mysqli_query($link, "SELECT * FROM live WHERE artist LIKE '%$artist[artist]%' ORDER BY date DESC"))!=0)
{

 echo "<hr width=\"30%\" align=\"left\">";
 echo "<b><u>LIVE</u></b><br><br>";

 $artist[artist] = addslashes($artist[artist]);

 $result = mysqli_query($link, "SELECT * FROM live WHERE artist LIKE '%$artist[artist]%' ORDER BY date DESC"); 

 while ($data = mysqli_fetch_array($result))
 {
  $row_location = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM live_venues WHERE id = '$data[venue]'"));  

  $row_location[location] = strtoupper($row_location[location]);

  echo "<font face=\"verdana\" size=\"2\">$row_location[location] $row_location[name]\n";
  $dateofevent = explode(" | ", datetime_to_text($data[date]));
  $dateofevent = $dateofevent[0];
  echo "<br><font size=\"1\">$dateofevent</font></font><br><br>\n\n";
 }

}
else
{
 echo "Nothing found";
}

?>

<?php

include("../nc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>