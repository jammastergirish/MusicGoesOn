<?php
$title = 'Forums - Register';
$description = '';
$keywords = '';
$menu = 'forums';
include("../inc/header.inc");
?>

<?php
$title = 'Forums - Register';
include("../inc/top.inc");
?>

<?php

if (empty($goto))
{
 $goto = ereg_replace("musicgoeson.com/forums/", "", $HTTP_REFERER);
 $goto = ereg_replace("http:\/\/", "", $goto);
 $goto = ereg_replace("www.", "", $goto);
}

?>

<?php if ($error=="username") { ?>
<font color="red">Someone else already has your username, please try another one.</font><br><br>
<?php } ?>

<?php if ($error=="username_len") { ?>
<font color="red">The username you chose is longer than fifteen characters.</font><br><br>
<?php } ?>

<?php if ($error=="emptypass") { ?>
<font color="red">You must enter a password.</font><br><br>
<?php } ?>

<?php if ($error=="pass") { ?>
<font color="red">Your passwords do not match.</font><br><br>
<?php } ?>

<?php if ($error=="name") { ?>
<font color="red">You must enter your name.</font><br><br>
<?php } ?>

<?php if ($error=="email") { ?>
<font color="red">You did not enter a valid e-mail address.</font><br><br>
<?php } ?>

<?php

echo "<form action=\"/forums/doregister.php\" method=\"post\">\n\n";

echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Desired Username:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><input type=\"text\" name=\"username\" size=\"20\" value=\"$username\" maxlength=\"15\"></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Password:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><input type=\"password\" name=\"pass1\" size=\"20\"></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Re-type Password:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><input type=\"password\" name=\"pass2\" size=\"20\"></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Real Name:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><input type=\"text\" name=\"name\" size=\"30\" value=\"$name\"></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">E-Mail Address:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><input type=\"text\" name=\"email\" size=\"30\" value=\"$email\"></td>\n";
 echo "    </tr>\n";
 if (mysql_num_rows(mysqli_query($link, "SELECT * FROM forum_posts WHERE poster = 'Guest$CookieID'"))!=0)
 {
  echo "    <tr>\n";
  echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Assign Posts:</b></font></td>\n";
  echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><input type=\"checkbox\" name=\"assign\" value=\"1\" checked style=\"BACKGROUND-COLOR: #FFFFFF\"> We have noticed that you made some posts under the username <b>Guest$CookieID</b>, check the box to assign these posts to your new username</font></td>\n";
  echo "    </tr>\n";
 }
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Register:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><center><input type=\"submit\" value=\"Register\" align=\"absmiddle\"></center></td>\n";
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