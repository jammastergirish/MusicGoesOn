<?php include("/home/mgo/musicgoeson-www/advertising/controlpanel/header.php"); ?>

<?php

mysql_connect ("localhost", "mgo", "h47fh20e");
mysql_select_db (musicgoeson_com);

$selectresult_stats = mysql_query ("SELECT * FROM advertising WHERE id = '$userID'");

$row_stats = mysqli_fetch_array($selectresult_stats);

$remaining_impressions = $row_stats[total_impressions] - $row_stats[impressions];

    print "<table border=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n";
    print "    <tr>\n";
    print "        <td width=\"200\" valign=\"top\"><font face=\"verdana\" size=\"2\" color=\"#0E96A9\"><b>Total Impressions:</b></font></td>\n";
    print "        <td width=\"100%\" valign=\"top\"><font face=\"verdana\" size=\"2\" color=\"#0E96A9\"><b>$row_stats[impressions]</b></font></td>\n";
    print "    </tr>\n";
    print "    <tr>\n";
    print "        <td width=\"200\" valign=\"top\"><font face=\"verdana\" size=\"2\" color=\"#0E96A9\"><b>Total Clicks:</b></font></td>\n";
    print "        <td width=\"100%\" valign=\"top\"><font face=\"verdana\" size=\"2\" color=\"#0E96A9\"><b>$row_stats[clicks]</b></font></td>\n";
    print "    </tr>\n";
    print "    <tr>\n";
    print "        <td width=\"200\" valign=\"top\"><font face=\"verdana\" size=\"2\" color=\"#0E96A9\"><b>Impressions Remaining:</b></font></td>\n";
    print "        <td width=\"100%\" valign=\"top\"><font face=\"verdana\" size=\"2\" color=\"#0E96A9\"><b>$remaining_impressions</font></td>\n";
    print "    </tr>\n";
    print "</table>\n\n";

?>

<?php include("/home/mgo/musicgoeson-www/advertising/controlpanel/footer.php"); ?>