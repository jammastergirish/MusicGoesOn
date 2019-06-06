<?
$title = 'Admin - Login';
$description = '';
$keywords = '';
include("inc/header.inc");
?>

<?
$title = 'Admin - Login';
include("inc/top.inc");
?>

<? if ($login=="failed") { ?>
<font color="red">Your ID/password has not been recognised, please try again:</font><br>
<? } else { ?><? } ?>

<?

echo "<form action=\"/admin/dologin.php\" method=\"post\">\n\n";

echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Username:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><input type=\"text\" name=\"user\" size=\"30\"></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Password:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><input type=\"password\" name=\"password\" size=\"30\"></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Login:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><center><input type=\"submit\" value=\"Login\" align=\"absmiddle\"></center></td>\n";
 echo "    </tr>\n";
echo "</table>\n\n";

echo "</form>";

?>

<?

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>