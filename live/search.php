<?
$title = 'Live Search';
$description = '';
$keywords = '';
$menu = 'live';
include("/home/girishgu/public_html/mgo/inc/header.inc");
?>

<?
$title = 'Live Search';
include("/home/girishgu/public_html/mgo/inc/top.inc");
?>

<?

$artist = addslashes($artist);

if ($searchby=="date")
{
 $date = explode(" | ", text_to_datetime($day." ".$month." ".$year));
 $date = $date[0];
 if ($searchbydate=="on")
 {
  $result = mysql_query("SELECT * FROM live WHERE date = '$date' ORDER BY artist DESC");
 }
 else if ($searchbydate=="after")
 {
  $result = mysql_query("SELECT * FROM live WHERE date >= '$date' ORDER BY date ASC");
 }
 else if ($searchbydate=="before")
 {
  $result = mysql_query("SELECT * FROM live WHERE date <= '$date' ORDER BY date ASC");
 }
}
else if ($searchby=="artist")
{
 $result = mysql_query("SELECT * FROM live WHERE artist LIKE '%$artist%' ORDER BY date DESC"); 
}

while ($data = mysql_fetch_array($result))
{
 $row_location = mysql_fetch_array(mysql_query("SELECT * FROM live_venues WHERE id = '$data[venue]'"));

 $row_location[location] = strtoupper($row_location[location]);

 echo "<font face=\"verdana\" size=\"2\"><a href=\"/live/search.php?artist=$data[artist]&searchby=artist\"><b>$data[artist]</b></a> - $row_location[location] $row_location[name]\n";
 $dateofevent = explode(" | ", datetime_to_text($data[date]));
 $dateofevent = $dateofevent[0];
 echo "<br><font size=\"1\">$dateofevent</font></font><br><br>\n\n";
}

?>

<?

include("/home/girishgu/public_html/mgo/inc/middle.inc");
include("/home/girishgu/public_html/mgo/inc/bottom.inc");
include("/home/girishgu/public_html/mgo/inc/footer.inc");

?>