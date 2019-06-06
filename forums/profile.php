<?php
include("inc/php_header.inc");

//$username = ereg_replace("/", "", $PATH_INFO);
$username = $_GET['id'];
$user_data = mysql_fetch_array(mysql_query("SELECT * FROM forum_users WHERE username = '$username'"));

$title = 'Forums - Profiles - '.$user_data[username];
$description = '';
$keywords = '';
$menu = 'forums';
$php_header = 'false';
include("inc/header.inc");
?>

<?php
$title = 'Profiles - '.$user_data[username];
include("forums/subtitle.inc");
?>

<?php

echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Username:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">$user_data[username]</font></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Real name:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">$user_data[name]</font></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">E-Mail:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><a href=\"mailto:$user_data[email]\">$user_data[email]</a></font></td>\n";
 echo "    </tr>\n";
 if (empty($user_data[icq]))
 {
 }
 else
 {
  echo "    <tr>\n";
  echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">ICQ:</b></font></td>\n";
  echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><img src=\"http://wwp.icq.com/scripts/online.dll?icq=$user_data[icq]&img=5\" align=\"absmiddle\">$user_data[icq]</font></td>\n";
  echo "    </tr>\n";
 }
 if (empty($user_data[msn_messenger]))
 {
 }
 else
 {
  echo "    <tr>\n";
  echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">MSN Messenger:</b></font></td>\n";
  echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">$user_data[msn_messenger]</font></td>\n";
  echo "    </tr>\n";
 }
 if (empty($user_data[aim]))
 {
 }
 else
 {
  echo "    <tr>\n";
  echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">AIM:</b></font></td>\n";
  echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">$user_data[aim]</font></td>\n";
  echo "    </tr>\n";
 }
 if (empty($user_data[yahoo_im]))
 {
 }
 else
 {
  echo "    <tr>\n";
  echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Yahoo! IM:</b></font></td>\n";
  echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">$user_data[yahoo_im]</font></td>\n";
  echo "    </tr>\n";
 }
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Number of Posts:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">".number_format(mysql_num_rows(mysql_query("SELECT * FROM forum_posts WHERE poster = '$user_data[username]' AND deleted = '0'")))."</font></td>\n";
 echo "    </tr>\n";
echo "</table>\n\n";

?>

<?php

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>