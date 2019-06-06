<?
$title = 'Forums - Edit Profile';
$description = '';
$keywords = '';
$menu = 'forums';
include("inc/header.inc");
?>

<?
$title = 'Forums - Edit Profile';
include("forums/subtitle.inc");
include("inc/top.inc");
?>

<?

if (empty($goto))
{
 $goto = ereg_replace("http://www.musicgoeson.com/forums/", "", $HTTP_REFERER);
}

?>

<?

/* SORT OUT ERRORS */

if ($error=="emptypass")
{
 echo "<font color=\"red\">You must enter a password.</font><br><br>";
}

if ($error=="pass")
{
 wcho "<font color=\"red\">Your passwords do not match.</font><br><br>";
}

if ($error=="name")
{
 echo "<font color=\"red\">You must enter your name.</font><br><br>";
}

if ($error=="email")
{
 echo "<font color=\"red\">You did not enter a valid e-mail address.</font><br><br>";
}

/* HERE WE GO... */

echo "<form action=\"/forums/doedit.php\" method=\"post\">\n\n";

echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Password:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><input type=\"password\" name=\"pass1\" size=\"20\" value=\"$forums_row[password]\"></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Re-type Password:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><input type=\"password\" name=\"pass2\" size=\"20\" value=\"$forums_row[password]\"></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Real Name:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><input type=\"text\" name=\"name\" size=\"30\" value=\"$forums_row[name]\"></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">E-Mail Address:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><input type=\"text\" name=\"email\" size=\"30\" value=\"$forums_row[email]\"></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">ICQ:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><input type=\"text\" name=\"icq\" size=\"15\" value=\"$forums_row[icq]\"></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">MSN Messenger:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><input type=\"text\" name=\"msn_messenger\" size=\"30\" value=\"$forums_row[msn_messenger]\"></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">AIM:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><input type=\"text\" name=\"aim\" size=\"15\" value=\"$forums_row[aim]\"></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Yahoo IM:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><input type=\"text\" name=\"yahoo_im\" size=\"15\" value=\"$forums_row[yahoo_im]\"></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Signature:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><textarea name=\"signature\" cols=\"40\" rows=\"7\">$forums_row[signature]</textarea></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Edit Profile:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><center><input type=\"submit\" value=\"Edit Profile\" align=\"absmiddle\"></center></td>\n";
 echo "    </tr>\n";
echo "</table>\n\n";

echo "<input type=\"hidden\" name=\"goto\" value=\"$goto\">";

echo "</form>";

?>

<?

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>