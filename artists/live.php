<?
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");

$id = ereg_replace("/", "", $PATH_INFO);

$id = addslashes($id);

$artist = mysql_fetch_array(mysql_query("SELECT * FROM artists WHERE id = '$id'"));

$title = 'Artists - '.$artist[artist].' - Live';
$description = '';
$keywords = '';
$menu = 'artists';
$s_menu = 'artist';
$php_header = 'false';
include("inc/header.inc");
?>

<?
include("artists/subtitle.inc");
?>

<?

if (mysql_num_rows(mysql_query("SELECT * FROM live WHERE artist LIKE '%$artist[artist]%' ORDER BY date DESC"))!=0)
{

 echo "<hr width=\"30%\" align=\"left\">";
 echo "<b><u>LIVE</u></b><br><br>";

 $artist[artist] = addslashes($artist[artist]);

 $result = mysql_query("SELECT * FROM live WHERE artist LIKE '%$artist[artist]%' ORDER BY date DESC"); 

 while ($data = mysql_fetch_array($result))
 {
  $row_location = mysql_fetch_array(mysql_query("SELECT * FROM live_venues WHERE id = '$data[venue]'"));  

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

<?

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>