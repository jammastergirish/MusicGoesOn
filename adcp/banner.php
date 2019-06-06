<?php
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");

$id = ereg_replace("/", "", $PATH_INFO);
$banner_data = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM banners WHERE id = '$id'"));

$title = 'Ad Control Panel - '.$banner_data[name].' ('.$id.')';
$description = '';
$keywords = '';
$menu = 'adcp';
$php_header = 'false';
include("../inc/header.inc");
?>

<?php
$title = 'Ad Control Panel - '.$banner_data[name].' ('.$id.')';
include("adcp/subtitle.inc");
include("../inc/top.inc");
?>

<?php

if ($banner_data[deleted]==1)
{
 echo "<CENTER><font color=\"red\" size=\"1\">THIS BANNER HAS BEEN DELETED</font></CENTER>";
}

echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Image Location:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">$banner_data[location]</font></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Width[x]Height:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">$banner_data[width]x$banner_data[height]</font></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Alternative Text:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">$banner_data[alt]</font></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Hyperlink:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><a href=\"/redir.php?url=$banner_data[url]\" target=\"_blank\">$banner_data[url]</a></font></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Impressions:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">".number_format($banner_data[impressions])."</font></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Clicks:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">".number_format($banner_data[clicks])."</font></td>\n";
 echo "    </tr>\n";
 if (!empty($banner_data[keywords]))
 {
  echo "    <tr>\n";
  echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Keywords:</b></font></td>\n";
  echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">$banner_data[keywords]</font></td>\n";
  echo "    </tr>\n";
 }
echo "</table>\n\n";

?>

<br>

<CENTER>

<?php
  if (ereg("http\:\/\/", $banner_data[location]))
  {
   echo "<a href=\"/banner.php?click=$banner_data[id]\" target=\"_blank\"><img src=\"$banner_data[location]\" width=\"$banner_data[width]\" height=\"$banner_data[height]\" alt=\"$banner_data[alt]\" border=\"0\"></a>";
  }
  else
  {
   echo "<a href=\"/banner.php?click=$banner_data[id]\" target=\"_blank\"><img src=\"/images/banners/advertiser/$banner_data[id].$banner_data[location]\" width=\"$banner_data[width]\" height=\"$banner_data[height]\" alt=\"$banner_data[alt]\" border=\"0\"></a>";
  }
?>

<br>

<?php

if ($banner_data[deleted]==1)
{
 echo "<a href=\"/adcp/edit.php/$id/\">Edit/Undelete this banner</a>";
}
else
{
 echo "<a href=\"/adcp/edit.php/$id/\">Edit/Delete this banner</a>";
}

?>

</CENTER>

<?php

include("../inc/middle.inc");
include("../inc/bottom.inc");
include("../inc/footer.inc");

?>