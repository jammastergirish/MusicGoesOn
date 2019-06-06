<?php include("/home/mgo/musicgoeson-www/advertising/controlpanel/header.php"); ?>

<form action="http://www.musicgoeson.com/advertising/controlpanel/doaddbanner.php" method="post">

<?php

print "<table border=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n";
print "    <tr>\n";
print "        <td width=\"130\" valign=\"top\"><font face=\"verdana\" size=\"2\" color=\"#0E96A9\"><b>Banner Name:</b></font></td>\n";
print "        <td width=\"100%\" valign=\"top\"><input type=\"text\" name=\"name\" size=\"50\" maxlength=\"255\" value=\"Banner 1\"></td>\n";
print "    </tr>\n";
print "    <tr>\n";
print "        <td width=\"130\" valign=\"top\"><font face=\"verdana\" size=\"2\" color=\"#0E96A9\"><b>Image URL:</b></font></td>\n";
print "        <td width=\"100%\" valign=\"top\"><input type=\"text\" name=\"image_url\" size=\"50\" maxlength=\"255\" value=\"http://www.yoursite.com/banners/1.gif\"></td>\n";
print "    </tr>\n";
print "    <tr>\n";
print "        <td width=\"130\" valign=\"top\"><font face=\"verdana\" size=\"2\" color=\"#0E96A9\"><b>Link URL:</b></font></td>\n";
print "        <td width=\"100%\" valign=\"top\"><input type=\"text\" name=\"link_url\" size=\"50\" maxlength=\"255\" value=\"http://www.yoursite.com/\"></td>\n";
print "    </tr>\n";
print "    <tr>\n";
print "        <td width=\"130\" valign=\"top\"><font face=\"verdana\" size=\"2\" color=\"#0E96A9\"><b>ALT Text:</b></font></td>\n";
print "        <td width=\"100%\" valign=\"top\"><input type=\"text\" name=\"alt\" size=\"50\" maxlength=\"255\" value=\"Visit yoursite.com for...\"></td>\n";
print "    </tr>\n";
print "    <tr>\n";
print "        <td width=\"130\" valign=\"top\"><font face=\"verdana\" size=\"2\" color=\"#0E96A9\"><b>Width:</b></font></td>\n";
print "        <td width=\"100%\" valign=\"top\"><input type=\"text\" name=\"width\" size=\"10\" maxlength=\"5\" value=\"468\"></td>\n";
print "    </tr>\n";
print "    <tr>\n";
print "        <td width=\"130\" valign=\"top\"><font face=\"verdana\" size=\"2\" color=\"#0E96A9\"><b>Height:</b></font></td>\n";
print "        <td width=\"100%\" valign=\"top\"><input type=\"text\" name=\"height\" size=\"10\" maxlength=\"5\" value=\"60\"></td>\n";
print "    </tr>\n";
print "</table>\n\n";

?>

<input type="hidden" name="userID" value="<?php echo $userID; ?>">
<input type="hidden" name="SID" value="<?php echo $SID; ?>">
<input type="submit" value="Add Banner" align="absmiddle">

</form>

<?php include("/home/mgo/musicgoeson-www/advertising/controlpanel/footer.php"); ?>