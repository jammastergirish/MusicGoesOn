<?php
$title = 'Forums - Login';
$description = '';
$keywords = '';
$menu = 'forums';
include("../inc/header.inc");
?>

<?php
$title = 'Forums - Login';
include("../inc/top.inc");
?>

<?php

if (empty($goto))
{
 $goto = ereg_replace(".musicgoeson.com/forums/", "", $HTTP_REFERER);
 $goto = ereg_replace("http:\/\/", "", $goto);
 $goto = ereg_replace("www", "", $goto);
}

?>

<?php

if ($login=="failed") /* if login failed... */
{
 echo "<font color=\"red\">Your username/password has not been recognised, please try again.  You will need to <a href=\"/forums/register.php\">register</a> if you have not already done so.</font><br><br>";
}

echo "<form action=\"/forums/dologin.php\" method=\"post\">\n\n";

echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Username:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><input type=\"text\" name=\"username\" size=\"30\"></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Password:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><input type=\"password\" name=\"pass\" size=\"30\"></td>\n";
 echo "    </tr>\n";
 if (mysql_num_rows(mysqli_query($link, "SELECT * FROM forum_posts WHERE poster = 'Guest$CookieID'"))!=0)
 {
  echo "    <tr>\n";
  echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Assign Posts:</b></font></td>\n";
  echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><input type=\"checkbox\" name=\"assign\" value=\"1\" checked style=\"BACKGROUND-COLOR: #FFFFFF\"> We have noticed that you made some posts under the username <b>Guest$CookieID</b>, check the box to assign these posts to the username you are about to login under</font></td>\n";
  echo "    </tr>\n";
 }
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Login:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><center><input type=\"submit\" value=\"Login\" align=\"absmiddle\"></center></td>\n";
 echo "    </tr>\n";
echo "</table>\n\n";

echo "<input type=\"hidden\" name=\"goto\" value=\"$goto\">";

echo "</form>";

?>

<?php

include("../inc/middle.inc");
include("../inc/bottom.inc");
include("../inc/footer.inc");

?>