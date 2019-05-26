<?
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");

$id = ereg_replace("/", "", $PATH_INFO);
$banner_data = mysql_fetch_array(mysql_query("SELECT * FROM banners WHERE id = '$id'"));

$title = 'Ad Control Panel - Edit Banner - '.$banner_data[name].' ('.$id.')';
$description = '';
$keywords = '';
$menu = 'adcp';
$php_header = 'false';
include("/home/girishgu/public_html/mgo/inc/header.inc");
?>

<?
$title = 'Ad Control Panel - Edit Banner - '.$banner_data[name].' ('.$id.')';
include("/home/girishgu/public_html/mgo/adcp/subtitle.inc");
include("/home/girishgu/public_html/mgo/inc/top.inc");
?>

<?

echo "<form action=\"/adcp/doedit.php\" method=\"post\">";

echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Banner Name:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><input type=\"text\" name=\"name\" value=\"$banner_data[name]\" size=\"50\"></font></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Image Location:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><input type=\"text\" name=\"location\" value=\"$banner_data[location]\" size=\"50\"></font></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Width[x]Height:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><input type=\"text\" name=\"width\" value=\"$banner_data[width]\" size=\"5\"> x <input type=\"text\" name=\"height\" value=\"$banner_data[height]\" size=\"5\"></font></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Alternative Text:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><input type=\"text\" name=\"alt\" value=\"$banner_data[alt]\" size=\"50\"></font></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Hyperlink:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><input type=\"text\" name=\"url\" value=\"$banner_data[url]\" size=\"50\"></font></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Keywords:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><input type=\"text\" name=\"keywords\" value=\"$banner_data[keywords]\" size=\"50\"></font></td>\n";
 echo "    </tr>\n";
 if ($banner_data[deleted]!=1)
 {
  echo "    <tr>\n";
  echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Delete Banner:</b></font></td>\n";
  echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><input type=\"checkbox\" name=\"delete\" value=\"1\" style=\"BACKGROUND-COLOR: #FFFFFF\"> <font color=\"red\">Delete this banner</font></font></td>\n";
  echo "    </tr>\n";
 }
 else
 {
  echo "    <tr>\n";
  echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Undelete Banner:</b></font></td>\n";
  echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><input type=\"checkbox\" name=\"delete\" value=\"0\" style=\"BACKGROUND-COLOR: #FFFFFF\"> <font color=\"red\">Undelete this banner</font></font></td>\n";
  echo "    </tr>\n";
 }
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Edit Banner:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><center><input type=\"submit\" value=\"Edit Banner\" align=\"absmiddle\"></center></td>\n";
 echo "    </tr>\n";
echo "</table>\n\n";

echo "<input type=\"hidden\" name=\"id\" value=\"$id\">";

echo "</form>";

?>

<br>

<CENTER>

<?
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

<?

echo "<a href=\"/adcp/edit.php/$id/?num=$dbnum\">Edit</a> | <a href=\"/adcp/delete.php/$id/?num=$dbnum\">Delete</a>";

?>

</CENTER>

<?

include("/home/girishgu/public_html/mgo/inc/middle.inc");
include("/home/girishgu/public_html/mgo/inc/bottom.inc");
include("/home/girishgu/public_html/mgo/inc/footer.inc");

?>