<?php
$title = 'Ad Control Panel - Your Banners';
$description = '';
$keywords = '';
$menu = 'adcp';
include("../inc/header.inc");
?>

<?php
$title = 'Ad Control Panel - Your Banners';
include("adcp/subtitle.inc");
include("../inc/top.inc");
?>

<?php

echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n\n";
 echo "    <tr>\n";
 echo "        <td width=\"150\" valign=\"center\" align=\"left\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><b>BANNER NAME</b></font></td>\n";
 echo "        <td width=\"50\" valign=\"center\" align=\"center\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><b>IMPRESSIONS</b></font></td>\n";
 echo "        <td width=\"50\" valign=\"center\" align=\"center\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><b>CLICKS</b></font></td>\n";
 echo "    </tr>\n";

$result = mysqli_query($link, "SELECT * FROM banners WHERE advertiser = '$advertiser_row[id]' AND deleted = '0' ORDER BY id ASC");
while ($data = mysqli_fetch_array($result))
{
 echo "    <tr>\n";
 echo "        <td width=\"150\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\"><a href=\"/adcp/banner.php/$data[id]/\">$data[name]</a><br></font></td>\n";
 echo "        <td width=\"50\" valign=\"center\" align=\"center\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">".number_format($data[impressions])."</font></td>\n";
 echo "        <td width=\"50\" valign=\"center\" align=\"center\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">".number_format($data[clicks])."</font></td>\n";
 echo "    </tr>\n";
}

echo "</table>\n\n";

echo "<br><br>\n\n";

echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n\n";

 $query = mysqli_query($link, "SELECT * FROM banners WHERE advertiser = '$advertiser_row[id]'");
 $total_impressions = 0;
 while ($row = mysqli_fetch_array($query))
 {
  $total_impressions = $total_impressions + $row[impressions];
 }
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Total Impressions:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">".number_format($total_impressions)."</font></td>\n";
 echo "    </tr>\n";

 $query = mysqli_query($link, "SELECT * FROM banners WHERE advertiser = '$advertiser_row[id]'");
 $total_clicks = 0;
 while ($row = mysqli_fetch_array($query))
 {
  $total_clicks = $total_clicks + $row[clicks];
 }
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Total Clicks:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">$total_clicks</font></td>\n";
 echo "    </tr>\n";

 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Click-Through Ratio:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">".number_format($total_clicks/$total_impressions, 3)."%</font></td>\n";
 echo "    </tr>\n";

echo "</table>\n\n";

?>

<?php

include("../inc/middle.inc");
include("../inc/bottom.inc");
include("../inc/footer.inc");

?>