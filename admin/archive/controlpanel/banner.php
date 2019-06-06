<?php include("/home/mgo/musicgoeson-www/advertising/controlpanel/header.php"); ?>

<?php

mysql_connect ("localhost", "mgo", "h47fh20e");
mysql_select_db (musicgoeson_com);

$result_banner = mysql_query ("SELECT * FROM banner WHERE id = '$bannerID' AND userid = '$userID'");

if ($row_banner = mysqli_fetch_array($result_banner))
{
    print "<b>$row_banner[name]</b><br><br>";
    print "<a href=\"$row_banner[link_url]\" target=\"_blank\"><img src=\"$row_banner[image_url]\" width=\"$row_banner[width]\" height=\"$row_banner[height]\" alt=\"$row_banner[alt]\" border=\"0\"></a><br><br>";
    print "Impressions: <b>$row_banner[impressions]</b><br>";
    print "Clicks: <b>$row_banner[clicks]</b><br><br>";
    print "<a href=\"editbanner.php?userID=$userID&bannerID=$bannerID&SID=$SID\" title=\"Edit Banner\">Edit Banner</a>";
    print " | ";
    print "<a href=\"delbanner.php?userID=$userID&bannerID=$bannerID&b_name=$row_banner[name]&SID=$SID\" title=\"Delete Banner\">Delete Banner</a><br>";
}
else
{
    print "<b>Error</b>";
}

?>

<?php include("/home/mgo/musicgoeson-www/advertising/controlpanel/footer.php"); ?>