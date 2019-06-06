<?php include("/home/mgo/musicgoeson-www/advertising/controlpanel/header.php"); ?>

<?php

mysql_connect ("localhost", "mgo", "h47fh20e");
mysql_select_db (musicgoeson_com);

$result_banner = mysql_query ("SELECT * FROM banner WHERE id = '$bannerID' AND userid = '$userID'");

if ($row_banner = mysqli_fetch_array($result_banner))
{
    print "<form action=\"http://www.musicgoeson.com/advertising/controlpanel/doeditbanner.php\" method=\"post\">";

    print "<table border=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n";
    print "    <tr>\n";
    print "        <td width=\"130\" valign=\"top\"><font face=\"verdana\" size=\"2\" color=\"#0E96A9\"><b>Banner Name:</b></font></td>\n";
    print "        <td width=\"100%\" valign=\"top\"><input type=\"text\" name=\"name\" size=\"50\" maxlength=\"255\" value=\"$row_banner[name]\"></td>\n";
    print "    </tr>\n";
    print "    <tr>\n";
    print "        <td width=\"130\" valign=\"top\"><font face=\"verdana\" size=\"2\" color=\"#0E96A9\"><b>Image URL:</b></font></td>\n";
    print "        <td width=\"100%\" valign=\"top\"><input type=\"text\" name=\"image_url\" size=\"50\" maxlength=\"255\" value=\"$row_banner[image_url]\"></td>\n";
    print "    </tr>\n";
    print "    <tr>\n";
    print "        <td width=\"130\" valign=\"top\"><font face=\"verdana\" size=\"2\" color=\"#0E96A9\"><b>Link URL:</b></font></td>\n";
    print "        <td width=\"100%\" valign=\"top\"><input type=\"text\" name=\"link_url\" size=\"50\" maxlength=\"255\" value=\"$row_banner[link_url]\"></td>\n";
    print "    </tr>\n";
    print "    <tr>\n";
    print "        <td width=\"130\" valign=\"top\"><font face=\"verdana\" size=\"2\" color=\"#0E96A9\"><b>ALT Text:</b></font></td>\n";
    print "        <td width=\"100%\" valign=\"top\"><input type=\"text\" name=\"alt\" size=\"50\" maxlength=\"255\" value=\"$row_banner[alt]\"></td>\n";
    print "    </tr>\n";
    print "    <tr>\n";
    print "        <td width=\"130\" valign=\"top\"><font face=\"verdana\" size=\"2\" color=\"#0E96A9\"><b>Width:</b></font></td>\n";
    print "        <td width=\"100%\" valign=\"top\"><input type=\"text\" name=\"width\" size=\"10\" maxlength=\"5\" value=\"$row_banner[width]\"></td>\n";
    print "    </tr>\n";
    print "    <tr>\n";
    print "        <td width=\"130\" valign=\"top\"><font face=\"verdana\" size=\"2\" color=\"#0E96A9\"><b>Height:</b></font></td>\n";
    print "        <td width=\"100%\" valign=\"top\"><input type=\"text\" name=\"height\" size=\"10\" maxlength=\"5\" value=\"$row_banner[height]\"></td>\n";
    print "    </tr>\n";
    print "</table>\n\n";

    print "<input type=\"hidden\" name=\"bannerID\" value=\"$bannerID\">\n";
    print "<input type=\"hidden\" name=\"userID\" value=\"$userID\">\n";
    print "<input type=\"hidden\" name=\"SID\" value=\"$SID\">\n";
    print "<br><input type=\"submit\" value=\"Edit Banner\" align=\"absmiddle\">\n";

    print "</form>";

}
else
{
    print "Error";
}

?>

<?php include("/home/mgo/musicgoeson-www/advertising/controlpanel/footer.php"); ?>