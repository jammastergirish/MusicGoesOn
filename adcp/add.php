<?
$title = 'Ad Control Panel - Add Banner';
$description = '';
$keywords = '';
$menu = 'adcp';
include("inc/header.inc");
?>

<?
$title = 'Ad Control Panel - Add Banner';
include("adcp/subtitle.inc");
include("inc/top.inc");
?>

<?

echo "<form action=\"/adcp/doadd.php\" method=\"post\">";

echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Banner Name:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><input type=\"text\" name=\"name\" value=\"$name\" size=\"50\"></font></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Image Location:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><input type=\"text\" name=\"location\" value=\"$location\" size=\"50\"></font></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Width[x]Height:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><input type=\"text\" name=\"width\" value=\"$width\" size=\"5\"> x <input type=\"text\" name=\"height\" value=\"$height\" size=\"5\"></font></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Alternative Text:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><input type=\"text\" name=\"alt\" value=\"$alt\" size=\"50\"></font></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Hyperlink:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><input type=\"text\" name=\"url\" value=\"$url\" size=\"50\"></font></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Keywords:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><input type=\"text\" name=\"keywords\" value=\"$keywords\" size=\"50\"></font></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Add Banner:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><center><input type=\"submit\" value=\"Add Banner\" align=\"absmiddle\"></center></td>\n";
 echo "    </tr>\n";
echo "</table>\n\n";

echo "<input type=\"hidden\" name=\"advertiser\" value=\"$advertiser_row[id]\">";

echo "</form>";

?>

<?

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>