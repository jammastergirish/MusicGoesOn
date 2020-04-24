<?php
$title = 'Live Search';
$description = '';
$keywords = '';
$menu = 'live';
include("inc/header.inc");
?>

<?php
$title = 'Live Search';
include("inc/top.inc");
?>

<?php

$artist = addslashes($artist);

if ($searchby=="date")
{
 $date = explode(" | ", text_to_datetime($day." ".$month." ".$year));
 $date = $date[0];
 if ($searchbydate=="on")
 {
  $result = mysqli_query($link, "SELECT * FROM live WHERE date = '$date' ORDER BY artist DESC");
 }
 else if ($searchbydate=="after")
 {
  $result = mysqli_query($link, "SELECT * FROM live WHERE date >= '$date' ORDER BY date ASC");
 }
 else if ($searchbydate=="before")
 {
  $result = mysqli_query($link, "SELECT * FROM live WHERE date <= '$date' ORDER BY date ASC");
 }
}
else if ($searchby=="artist")
{
 $result = mysqli_query($link, "SELECT * FROM live WHERE artist LIKE '%$artist%' ORDER BY date DESC"); 
}

while ($data = mysqli_fetch_array($result))
{
 $row_location = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM live_venues WHERE id = '$data[venue]'"));

 $row_location[location] = strtoupper($row_location[location]);

 echo "<font face=\"verdana\" size=\"2\"><a href=\"/live/search.php?artist=$data[artist]&searchby=artist\"><b>$data[artist]</b></a> - $row_location[location] $row_location[name]\n";
 $dateofevent = explode(" | ", datetime_to_text($data[date]));
 $dateofevent = $dateofevent[0];
 echo "<br><font size=\"1\">$dateofevent</font></font><br><br>\n\n";
}

?>

<?php

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>